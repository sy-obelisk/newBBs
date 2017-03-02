<?php

/**
 * toefl API
 * Created by PhpStorm.
 * User: obelisk
 */

namespace app\modules\cn\controllers;


use app\libs\Method;
use app\modules\cn\models\HistoryRecord;

use app\modules\cn\models\TestStatistics;
use app\modules\cn\models\Vocab;
use app\modules\cn\models\ShoppingCart;
use app\modules\order\models\OrderGoods;
use app\modules\cn\models\Order;

use yii;

use app\libs\ToeflApiControl;

use app\libs\VerificationCode;

use app\libs\Sms;

use app\modules\cn\models\Content;

use app\modules\cn\models\UserAnswer;

use app\modules\cn\models\UserDiscuss;

use app\modules\cn\models\Collect;

use app\modules\cn\models\Login;

use UploadFile;


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With');
header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
class ApiController extends ToeflApiControl
{
    function init (){
        parent::init();
        include_once($_SERVER['DOCUMENT_ROOT'].'/../libs/ucenter/ucenter.php');
    }

    public $enableCsrfValidation = false;
    
}