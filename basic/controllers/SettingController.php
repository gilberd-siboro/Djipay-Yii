<?php
namespace app\controllers;

use yii\web\Controller;

class SettingController extends Controller
{
    public function actionGeneral()
    {
        return $this->render('general');
    }

    public function actionLeave()
    {
        return $this->render('leave');
    }

    public function actionAttendance()
    {
        return $this->render('attendance');
    }

    public function actionPayroll()
    {
        return $this->render('payroll');
    }

    public function actionImport()
    {
        return $this->render('import');
    }
}