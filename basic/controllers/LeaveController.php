<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\data\Pagination;

class LeaveController extends Controller
{
    public function actionStatus()
    {
        $searchModel = Yii::$app->request->get('search', '');

        $employees = (new \yii\db\Query())
            ->select(['user.id', 'employees.nama_belakang', 'employees.nama_depan'])
            ->from('employees')
            ->innerJoin('user', 'employees.id = user.employee_id')
            ->all();

        $absensi_type = Yii::$app->db->createCommand('SELECT * FROM absensi_type')->queryAll();

        $query = (new \yii\db\Query())
            ->select([
                'employees.nama_depan',
                'employees.nama_belakang',
                'absensi_log.tanggal_absensi',
                'absensi_log.day',
                'absensi_type.type',
                'absensi_log.bukti_hadir'
            ])
            ->from('employees')
            ->innerJoin('user', 'employees.id = user.employee_id')
            ->innerJoin('absensi_log', 'absensi_log.created_by = user.id')
            ->innerJoin('absensi_type', 'absensi_log.id_absensi_type = absensi_type.id')
            ->where(['or', ['absensi_log.id_absensi_status' => 2], ['absensi_log.id_absensi_status' => 3]])
            ->andWhere(['absensi_log.id_absensi_type' => 2]);

        if ($searchModel) {
            $query->andWhere(['like', 'employees.nama_depan', $searchModel])
                ->orWhere(['like', 'employees.nama_belakang', $searchModel]);
        }

        // Membuat pagination
        $countQuery = clone $query;
        $pagination = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 5, // Jumlah item per halaman
        ]);

        // Mengambil data dengan pagination
        $data = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $count = $countQuery->count();
        // Render view dengan data dan pagination
        return $this->render('status', [
            'status' => $data,
            'pagination' => $pagination,
            'employees' => $employees,
            'absensi_type' => $absensi_type,
            'count' => $count,
            'searchModel' => $searchModel
        ]);
    }


    // ------------------ Request ------------------------
    public function actionRequest()
    {

        $searchModel = Yii::$app->request->get('search', '');

        $employees = (new \yii\db\Query())
            ->select(['user.id', 'employees.nama_belakang', 'employees.nama_depan'])
            ->from('employees')
            ->innerJoin('user', 'employees.id = user.employee_id')
            ->all();

        $absensi_type = Yii::$app->db->createCommand('SELECT * FROM absensi_type')->queryAll();

        // Fetch absensi_log request data
        $query = (new \yii\db\Query())
            ->select([
                'absensi_log.id',
                'employees.nama_depan',
                'employees.nama_belakang',
                'absensi_log.tanggal_absensi',
                'absensi_log.day',
                'absensi_type.type',
                'absensi_log.bukti_hadir'
            ])
            ->from('employees')
            ->innerJoin('user', 'employees.id = user.employee_id')
            ->innerJoin('absensi_log', 'absensi_log.created_by = user.id')
            ->innerJoin('absensi_type', 'absensi_log.id_absensi_type = absensi_type.id')
            ->where(['absensi_log.id_absensi_type' => 2, 'absensi_log.id_absensi_status' => 1]);

        if ($searchModel) {
            $query->andWhere(['like', 'employees.nama_depan', $searchModel])
                ->orWhere(['like', 'employees.nama_belakang', $searchModel]);
        }
        $countQuery = clone $query;
        $pagination = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 5, // Jumlah item per halaman
        ]);

        $data = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();




        return $this->render('request', [
            'employees' => $employees,
            'leave' => $data,
            'absensi_type' => $absensi_type,
            'pagination' => $pagination,
            'searchModel' => $searchModel
        ]);
    }


    public function actionCreateLeave()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        if (Yii::$app->request->isPost) {
            $employeeId = Yii::$app->request->post('employee');
            // $type = Yii::$app->request->post('leaveType');
            $date = Yii::$app->request->post('date');
            $day = Yii::$app->request->post('duration');
            $reason = Yii::$app->request->post('comment');
            // Handle the file upload
            $uploadedFile = UploadedFile::getInstanceByName('attachments');
            if ($uploadedFile && $uploadedFile->extension == 'pdf') {
                $fileName = 'bukti_' . $uploadedFile->name;
                $filePath = Yii::getAlias('@webroot/pdf/') . $fileName;
                if ($uploadedFile->saveAs($filePath)) {

                    // Insert data into the database
                    $db = Yii::$app->db;
                    $currentTime = date('Y-m-d H:i:s');
                    $command = $db->createCommand()->insert('absensi_log', [
                        'created_by' => $employeeId,
                        'id_absensi_type' => 2,
                        'tanggal_absensi' => $date,
                        'day' => $day,
                        'id_absensi_status' => 1,
                        'keterangan' => $reason,
                        'bukti_hadir' => $uploadedFile->name, // Save the file name in the database
                        'created_at' => $currentTime,
                        'updated_at' => $currentTime,
                    ]);

                    if ($command->execute()) {
                        return [
                            'status' => 'success',
                            'message' => 'Leave created and file uploaded successfully.'
                        ];
                    } else {
                        return [
                            'status' => 'error',
                            'message' => 'Failed to save leave data to the database.'
                        ];
                    }
                } else {
                    return [
                        'status' => 'error',
                        'message' => 'Failed to save the file.'
                    ];
                }
            } else {
                return [
                    'status' => 'error',
                    'message' => 'Invalid file format. Only PDFs are allowed.'
                ];
            }
        } else {
            return [
                'status' => 'error',
                'message' => 'Invalid request method.'
            ];
        }
    }

    public function actionApprove()
    {
        if (Yii::$app->request->isPost) {
            $logId = Yii::$app->request->post('logId');
            $currentTime = date('Y-m-d H:i:s');
            // var_dump($logId);
            // die(); 

            $result = Yii::$app->db->createCommand()
                ->update('absensi_log', [
                    'id_absensi_status' => 2,
                    'updated_at' => $currentTime,
                ], ['id' => $logId])
                ->execute();

            if ($result) {
                Yii::$app->session->setFlash('success', 'Log approved successfully.');
            } else {
                Yii::$app->session->setFlash('error', 'Failed to approve log.');
            }

            return $this->redirect(['request']);
        }

        return $this->redirect(['request']);
    }


    public function actionReject()
    {
        if (Yii::$app->request->isPost) {
            $logId = Yii::$app->request->post('logId');
            $currentTime = date('Y-m-d H:i:s');

            $result = Yii::$app->db->createCommand()
                ->update('absensi_log', [
                    'id_absensi_status' => 3,
                    'updated_at' => $currentTime
                ], ['id' => $logId])
                ->execute();

            if ($result) {
                Yii::$app->session->setFlash('success', 'Log rejected successfully.');
            } else {
                Yii::$app->session->setFlash('error', 'Failed to reject log.');
            }

            return $this->redirect(['request']);
        }

        return $this->redirect(['request']);
    }


    public function actionCalendar()
    {
        return $this->render('calendar');
    }

    public function actionSummary()
    {
        return $this->render('summary');
    }
}
