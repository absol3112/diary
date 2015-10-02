<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class AbstractController extends \yii\web\Controller
{
	public function init(){
		$languageInput = 'VI';
        Yii::$app->language = $languageInput;
        $fileName = "lang/language.xlsx";
        $data = \moonland\phpexcel\Excel::import($fileName, [
            'setIndexSheetByName' => true, 
        ]);

        $record = $data['Sheet1'];
        foreach ($record as $keys => $value) {  
            foreach ($value as $keyOfValue => $valueOfValue) {
                if ($keyOfValue != 'Keys' && $keyOfValue != $languageInput) {
                    unset($value[$keyOfValue]);
                }
            }
            $word[] = "'".implode("'=>'", $value)."',";
        }
        mkdir("lang/".$languageInput);
        $myfile = fopen("lang/".$languageInput."/app.php", "w");
        $txt = "<?php \nreturn [ \n";
        fwrite($myfile, $txt);
        $txt = "];\n?>";
        foreach ($word as $word) {
            fwrite($myfile, $word."\n");
        }
        fwrite($myfile, $txt);
        fclose($myfile);
	}
}
