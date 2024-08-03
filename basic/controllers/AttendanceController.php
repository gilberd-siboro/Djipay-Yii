<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use yii\web\Controller;

class AttendanceController extends Controller
{
    public function actionDailylog()
    {
        return $this->render('dailylog');
    }

    // ----------------- Request ----------------------

    public function actionRequest()
    {
        // Menggunakan DAO untuk mengambil data dari tabel employees
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
