<?php
namespace app\controllers;

use yii\web\Controller;

class AdministrationController extends Controller
{
    public function actionRole()
    {
        return $this->render('role');
    }

    public function actionShift()
    {
        return $this->render('shift');
    }

    public function actionDepartment()
    {
        return $this->render('department');
    }

    public function actionHoliday()
    {
        return $this->render('holiday');
    }

    public function actionAnnouncement()
    {
        return $this->render('announcement');
    }
}