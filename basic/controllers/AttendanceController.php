<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use yii\web\Controller;

class AttendanceController extends Controller
{
    public function actionDailylog()
    {
        $sql = "
        SELECT
            employees.nama_depan, 
            employees.nama_belakang, 
            absensi_log.waktu_absensi, 
            absensi_overtime.end_time
        FROM
            absensi_overtime
        INNER JOIN
            employees
        ON 
            absensi_overtime.employee_id = employees.id
        INNER JOIN
            `user`
        ON 
            employees.id = `user`.employee_id
        INNER JOIN
            absensi_log
        ON 
            absensi_log.created_by = `user`.id
            WHERE
            (
                absensi_log.id_absensi_type = 1 AND
                absensi_log.id_absensi_status = 1
            )
    ";

        $command = Yii::$app->db->createCommand($sql);
        $request = $command->queryAll();

        return $this->render('dailylog', [
            'request' => $request
        ]);
    }

    // ----------------- Request ----------------------

    public function actionRequest()
    {
        
        $command = Yii::$app->db->createCommand('SELECT * FROM employees');
        $employees = $command->queryAll();

        return $this->render('request', ['employees' => $employees]);
        // return $this->render('request');
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


    public function actionDetail()
    {
        return $this->render('detail');
    }

    public function actionSummary()
    {
        return $this->render('summary');
    }
}
