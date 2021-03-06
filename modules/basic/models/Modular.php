<?php

namespace app\modules\basic\models;

use yii\db\ActiveRecord;

class Modular extends ActiveRecord
{
    public static function tableName(){
        return '{{%control}}';
    }
    public function getModular($uid,$pid){
        $data = \Yii::$app->db->createCommand("select * from {{%user_control}} ub LEFT JOIN {{%control}} b ON ub.controlId = b.id WHERE ub.roleId = $uid AND b.pid=$pid")->queryAll();
        foreach($data as $k=>$v){
            $childData = $this->getSubordinate($v['id']);
            if(count($childData) > 0){
                $data[$k]['children'] = $childData ;
            }
        }
        return $data;
    }
    public function getSubordinate($pid){
        $data = \Yii::$app->db->createCommand("select * from {{%control}} co WHERE co.pid=$pid")->queryAll();
        foreach($data as $k=>$v){
            $data[$k]['action'] = '<a href="/basic/modular/update?id='.$v['id'].'">修改</a>';
            $childData = $this->getSubordinate($v['id']);
            if(count($childData) > 0){
                $data[$k]['children'] = $childData ;
            }
        }
        return $data;
    }
}