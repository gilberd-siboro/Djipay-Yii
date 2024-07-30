<?php
namespace app\controllers;

use yii\web\Controller;

class LeaveController extends Controller
{
    public function actionStatus()
    {
        return $this->render('status');
    }

    public function actionRequest()
    {
        return $this->render('request');
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