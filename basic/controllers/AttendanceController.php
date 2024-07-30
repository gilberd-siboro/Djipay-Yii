<?php
namespace app\controllers;

use yii\web\Controller;

class AttendanceController extends Controller
{
    public function actionDailylog()
    {
        return $this->render('dailylog');
    }

    public function actionRequest()
    {
        return $this->render('request');
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