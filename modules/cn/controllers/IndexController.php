<?php
/**
 * 首页
 * Created by PhpStorm.
 * User: obelisk
 */
namespace app\modules\cn\controllers;
use yii;
use app\libs\ToeflController;
use app\modules\cn\models\Content;

class IndexController extends ToeflController {
    public $enableCsrfValidation = false;
    public $layout = 'not';
    /**
     * 社区首页
     * by yanni
     */
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionYasiInfo(){
        return $this->render('yasi-info');
    }

}