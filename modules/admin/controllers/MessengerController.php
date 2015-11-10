<?php

namespace app\modules\admin\controllers;
use app\models\Messenger;

class MessengerController extends \yii\web\Controller
{
    public function actionList()
    {
    	$messengerModel = Messenger::find();
    	$messengerResult = $messengerModel->all();
    	
        return $this->render('list',[
        	'messengerResult'=>$messengerResult,
        	]);
    }

}
