<?php

namespace app\modules\admin\controllers;
use app\controllers\AbstractController;

class TopController extends AbstractController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
