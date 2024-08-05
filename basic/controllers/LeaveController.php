<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use yii\web\Controller;
use yii\web\UploadedFile;

class LeaveController extends Controller
{
    public function actionStatus()
    {
        return $this->render('status');
    }


    // ------------------ Request ------------------------
    public function actionRequest()
    {
       
        $employees = Yii::$app->db->createCommand('SELECT * FROM employees')->queryAll();
        $absensi_type = Yii::$app->db->createCommand('SELECT * FROM absensi_type')->queryAll();
        $sql = "
        SELECT
	        employees.nama_depan, 
	        employees.nama_belakang, 
	        absensi_log.tanggal_absensi, 
	        absensi_log.`day`, 
	        absensi_type.type, 
	        absensi_log.bukti_hadir
        FROM
	        employees
	    INNER JOIN
	        `user`
	    ON 
		    employees.id = `user`.employee_id
	    INNER JOIN
	        absensi_log
	    ON 
		    absensi_log.created_by = `user`.id
	    INNER JOIN
	        absensi_type
	    ON 
		    absensi_log.id_absensi_type = absensi_type.id
        WHERE
	        absensi_log.id_absensi_type = 2 AND
	        absensi_log.id_absensi_status = 1";

        $command = Yii::$app->db->createCommand($sql);
        $leave= $command->queryAll();

        return $this->render('request', [
            'employees' => $employees,
            'leave' => $leave,
            'absensi_type' => $absensi_type
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
                    $command = $db->createCommand()->insert('absensi_log', [
                        'created_by' => $employeeId,
                        'id_absensi_type' => 2,
                        'tanggal_absensi' => $date,
                        'day' => $day,
                        'id_absensi_status' => 1,
                        'keterangan' => $reason,
                        'bukti_hadir' => $uploadedFile->name, // Save the file name in the database
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


    public function actionCalendar()
    {
        return $this->render('calendar');
    }

    public function actionSummary()
    {
        return $this->render('summary');
    }
}
