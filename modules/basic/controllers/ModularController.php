<?php
namespace app\modules\basic\controllers;


use yii;
use yii\web\Controller;
use app\libs\ApiControl;
use app\modules\basic\models\Modular;

class ModularController extends ApiControl
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $userId = Yii::$app->session->get('adminId');
        $model = new Modular();
        $Modular = $model->getModular($userId,0);
        return $this->render('index',['Modular'=>$Modular]);
    }
    public function actionAdd(){
        $session  = Yii::$app->session;
        $userId = $session->get('adminId');
        $id = Yii::$app->request->get('id');
        $model = new Modular();
        $modular = $model->getModular($userId,0);
        if($id){
            $data = $model->findOne($id);
        }
        if($_POST){
            $uid = Yii::$app->request->post('uid');
            $pid = Yii::$app->request->post('pid');
            $name = Yii::$app->request->post('modularName');
            $model->pid = $pid;
            $model->name = $name;
            $model->ceateId = $uid;
            $model->createTime = time();
            $re = $model->save();
            if($re){
                return $this->actionIndex();
            }
        } else{
            return $this->render('add',['modular'=>$modular,'data'=>$data,'uid'=>$userId]);
        }
    }

    public function actionUpdate(){
        $pid = Yii::$app->request->get('id');
        $userId = Yii::$app->session->get('adminId');
        $model = new Modular();
        $Modular = $model->getModular($userId,$pid);
        var_dump($Modular);
    }
}