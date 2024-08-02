<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class LeaveController extends Controller
{
    public function actionStatus()
    {
        return $this->render('status');
    }


    // ------------------ Request ------------------------
    public function actionRequest()
    {
        // Menggunakan DAO untuk mengambil data dari tabel employees
        $command = Yii::$app->db->createCommand('SELECT * FROM employees');
        $employees = $command->queryAll();

        return $this->render('request', ['employees' => $employees]);
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