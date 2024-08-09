<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\data\Pagination;

class AttendanceController extends Controller
{
    public function actionDailylog()
    {

        $searchModel = Yii::$app->request->get('search', '');

        $employees = (new \yii\db\Query())
        ->select(['user.id', 'employees.nama_belakang', 'employees.nama_depan'])
        ->from('employees')
        ->innerJoin('user', 'employees.id = user.employee_id')
        ->all();

        $query = (new \yii\db\Query())
        ->select([
            'absensi_log.id', 
            'employees.nama_depan', 
            'employees.nama_belakang', 
            'absensi_log.waktu_absensi'
        ])
        ->from('employees')
        ->innerJoin('user', 'employees.id = user.employee_id')
        ->innerJoin('absensi_log', 'absensi_log.created_by = user.id')
        ->where([
            'absensi_log.id_absensi_type' => 1,
            'absensi_log.id_absensi_status' => 1,
        ]);

        if ($searchModel) {
            $query->andWhere(['like', 'employees.nama_depan', $searchModel])
                ->orWhere(['like', 'employees.nama_belakang', $searchModel]);
        }

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

        return $this->render('dailylog', [
            'request' => $data,
            'pagination' => $pagination,
            'employees' => $employees,
            'searchModel' => $searchModel

        ]);
    }

    // ----------------- Request ----------------------

    public function actionRequest()
    {

        $searchModel = Yii::$app->request->get('search', '');

        $employees = (new \yii\db\Query())
        ->select(['user.id', 'employees.nama_belakang', 'employees.nama_depan'])
        ->from('employees')
        ->innerJoin('user', 'employees.id = user.employee_id')
        ->all();

        $query = (new \yii\db\Query())
            ->select([
                'employees.nama_depan',
                'employees.nama_belakang',
                'absensi_log.waktu_absensi',
                'absensi_log.id',
                'absensi_type.type',
                'absensi_status.status'
            ])
            ->from('absensi_log')
            ->innerJoin('absensi_type', 'absensi_log.id_absensi_type = absensi_type.id')
            ->innerJoin('absensi_status', 'absensi_log.id_absensi_status = absensi_status.id')
            ->innerJoin('user', 'absensi_log.created_by = user.id')
            ->innerJoin('employees', 'user.employee_id = employees.id')
            ->where(['or', ['absensi_log.id_absensi_status' => 2], ['absensi_log.id_absensi_status' => 3]])
            ->andWhere(['absensi_log.id_absensi_type' => 1]);

            if ($searchModel) {
                $query->andWhere(['like', 'employees.nama_depan', $searchModel])
                    ->orWhere(['like', 'employees.nama_belakang', $searchModel]);
            }
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

        return $this->render('request', [
            'employees' => $employees,
            'request' => $data,
            'pagination' => $pagination,
            'searchModel' => $searchModel
        ]);
    }

    public function actionCreateAttendance()
    {
        // $employees = Yii::$app->db->createCommand('SELECT * FROM employee')->queryAll();

        Yii::$app->response->format = Response::FORMAT_JSON;

        if (Yii::$app->request->isPost) {
            $employeeId = Yii::$app->request->post('employee');
            $punchIn = Yii::$app->request->post('punch_in');
            $punchOut = Yii::$app->request->post('punch_out');
            $comment = Yii::$app->request->post('comment');

            // Insert data into the 'attendance' table
            $db = Yii::$app->db;
            $command1 = $db->createCommand()->insert('absensi_log', [
                'created_by' => $employeeId,
                'waktu_absensi' => $punchIn,
                'keterangan' => $comment,
                'id_absensi_status' => 1,
                'id_absensi_type' => 1,
            ]);

            $command2 = $db->createCommand()->insert('absensi_overtime', [
                'employee_id' => $employeeId,
                'end_time' => $punchOut,
            ]);


            $transaction = Yii::$app->db->beginTransaction();

            try {
                $command1Result = $command1->execute();
                $command2Result = $command2->execute();

                if ($command1Result && $command2Result) {
                    $transaction->commit();
                    return ['status' => 'success', 'message' => 'Attendance record created successfully.'];
                } else {
                    $transaction->rollBack();
                    return ['status' => 'error', 'message' => 'Failed to create attendance record.'];
                }
            } catch (\Exception $e) {
                $transaction->rollBack();
                // Log the exception message
                Yii::error($e->getMessage(), __METHOD__);
                // Return the exception message for debugging purposes
                return ['status' => 'error', 'message' => 'An error occurred while creating the attendance record: ' . $e->getMessage()];
            }
        }

        return ['status' => 'error', 'message' => 'Invalid request.'];
    }
    public function actionApprove()
    {
        if (Yii::$app->request->isPost) {
            $logId = Yii::$app->request->post('logId');
            $currentTime = date('Y-m-d H:i:s');
            $redirectPage = Yii::$app->request->post('redirect', 'defaultPage');
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
    
            return $this->redirect([$redirectPage]);
        }
    
        // return $this->redirect([$redirectPage]);
    }
    

    public function actionReject()
    {
        if (Yii::$app->request->isPost) {
            $logId = Yii::$app->request->post('logId');
            $currentTime = date('Y-m-d H:i:s');
            $redirectPage = Yii::$app->request->post('redirect', 'defaultPage');

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

            return $this->redirect([$redirectPage]);
        }

        // return $this->redirect(Yii::$app->request->url);
    }


    public function actionDetail()
    {
        return $this->render('detail');
    }

    public function actionSummary()
    {
        return $this->render('summary');
    }
}
