<?php

namespace app\controllers;

use yii\web\Controller;

class EmployeeController extends Controller
{
    public function actionAllemployee()
    {
        return $this->render('allemployee');
    }

    public function actionApointment()
    {
        return $this->render('apointment');
    }
}
