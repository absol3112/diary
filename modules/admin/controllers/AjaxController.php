<?php

namespace app\modules\admin\controllers;
use app\models\Messenger;

class AjaxController extends \yii\web\Controller
{
	public function actionMessengercount()
	{
		$this->layout = '';
    	$messengerCount = Messenger::find()->where(['read_chk'=>'0'])->count();
    	if ($messengerCount==0) {
    		echo '<i class="fa fa-envelope fa-fw notification"></i><i class="fa fa-caret-down"></i>';
    	}elseif ($messengerCount<10){
    		echo '<i class="fa fa-envelope fa-fw notification" data-badge="'.$messengerCount.'"></i><i class="fa fa-caret-down"></i>';
    	}else{
    		echo '<i class="fa fa-envelope fa-fw notification" data-badge="9+"></i><i class="fa fa-caret-down"></i>';
    	}
	}
	public function actionMessengerdetail()
	{
		$this->layout = '';
		$messengerCount = Messenger::find()->count();
		$messengerModel = Messenger::find()->all();
		foreach ($messengerModel as $messengerModel) {
			$time = strtotime("now")-strtotime($messengerModel->date);
			if (($time<30)) {
				$alert = "a few seconds ago";
			}elseif (($time>=30) && ($time<60)) {
				$alert = "30 seconds ago";
			}elseif (($time>=60) && ($time <120)){
				$alert = "a minute ago";
			}elseif (($time>=120) && ($time <3600)) {
				$alert = floor($time/60) ." minutes ago";
			}elseif (($time>=3600) && ($time <7200)) {
				$alert = "a hour ago";
			}elseif(($time>=7200) && ($time <86400)){
				$alert = floor($time/3600)." hours ago";
			}else{
				$alert = $messengerModel->date;
			}
			//gioi han la so ban ghi show ra 
				$echo[]= '<li>
	                <a href="#">
	                    <div>
	                        <strong>'.$messengerModel->name.'</strong>
	                        <span class="pull-right text-muted">
	                            <em>'.$alert.'</em>
	                        </span>
	                    </div>
	                    <div>'.$messengerModel->detail.'</div>
	                </a>
	            </li>';

		}
		if ($messengerCount<10) {
			foreach ($echo as $echo) {
				echo $echo;
			}
			
		}else{
			$echo[]='<li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>';
            foreach ($echo as $echo) {
				echo $echo;
			}
		}
	}
}
