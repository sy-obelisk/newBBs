<?php
namespace app\modules\basic\controllers;


use yii;
use yii\web\Controller;
use app\libs\ApiControl;
use app\modules\basic\models\Role;

class RoleController extends ApiControl
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $model = new Role();
        $role = $model->find()->all();
        return $this->render('index',['role'=>$role]);
    }
    public function actionAdd(){
        if($_POST){
            $id = Yii::$app->request->post('id');
            $name = Yii::$app->request->post('roleName');
            $model = new Role();
            if($id){
                $role = $model->findOne($id);
                $role->name = $name;
                $re = $role->save();
            } else {
                $model->name = $name;
                $model->createTime = time();
                $re = $model->save();
            }
            if($re){
                return $this->actionIndex();
            } else{
                die( '<script>alert("失败，请重试");history.go(-1);</script>');
            }
        } else {
            return $this->render('add');
        }
    }

    public function actionUpdate(){
        $id = Yii::$app->request->get('id');
        $model = new Role();
        $data = $model->findOne($id);
        return $this->render('add',['data'=>$data]);
    }

    public function actionDelete(){
        $id = Yii::$app->request->get('id');
        $model = new Role();
        $re = $model->findOne($id)->delete();
        if($re){
            return $this->actionIndex();
        } else {
            die( '<script>alert("失败，请重试");history.go(-1);</script>');
        }
    }
}