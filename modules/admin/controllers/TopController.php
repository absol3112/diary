<?php

namespace app\modules\admin\controllers;
use app\controllers\AbstractController;
use app\models\Messenger;

class TopController extends AbstractController
{
    public function actionIndex()
    {
    	$messengerModel = Messenger::find();
    	$messengerCount = $messengerModel->count();
    	
        return $this->render('index',[
        	'messengerCount'=>$messengerCount,
        	]);
    }
}
