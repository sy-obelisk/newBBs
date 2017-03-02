<?php $userId = Yii::$app->session->get('userId'); ?>
<?php $userData = Yii::$app->session->get('userData')?>
<!DOCTYPE html>
<html>
<head>
<!--    <title>--><?php //echo $this->context->title?><!--</title>-->
    <title>出国留学_美国留学_英国留学_澳洲留学_留学申请_雷哥网留学</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="<?php echo $this->context->keywords?>">
    <meta name="description" content="<?php echo $this->context->description?>">
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/cn/css/animate.min.css"/>
    <link rel="stylesheet" href="/cn/css/newPublic.css"/>
    <link rel="stylesheet" href="/cn/css/reset.css"/>
    <link rel="stylesheet" href="/cn/css/bootstrap.css"/>
    <link rel="stylesheet" href="/cn/css/studyingPublic.css"/>
    <script type="text/javascript" src="/cn/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/cn/js/bootstrap.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/public.js"></script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?a40d58dee17fd6131d23c4535aa3dd7e";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body>
<?php
$success_content = Yii::$app->session->get('success_content');
$loginOut = Yii::$app->session->get('loginOut');
if($success_content){
    echo $success_content;
    Yii::$app->session->remove('success_content');
}
if($loginOut){
    echo $loginOut;
    Yii::$app->session->remove('loginOut');
}
$country ='美国,英国,香港,澳洲,加拿大,新加坡,其他国家,移民';
$education = '高中,本科,硕士,MBA,博士,游学';
$major = '商科,理工科,文科,法律,医学,艺术,体育,其他';
$city = '北京,天津,上海,重庆,黑龙江,吉林,辽宁,河北,山东,江苏,安徽,浙江,福建,广东,海南,云南,贵州,四川,湖南,湖北,河南,山西,陕西,甘肃,青海,江西,新疆,西藏,宁夏,内蒙古,广西,台湾,香港,澳门,国外';
?>
<!-------------------咨询框------------------------>
<div class="refer_small" onclick="showZiXun()"></div>
<div class="referBox">
    <div class="refer_close" onclick="closeRefer()"></div>
    <div class="refer_top"></div>
    <div class="refer_con">
        <ul>
            <li>
                <a href="http://p.qiao.baidu.com/im/index?siteid=7905926&ucid=18329536&cp=&cr=&cw=" target="_blank">
                    <div class="comSize diffBG01"></div>
                    <p>在线咨询</p>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <div class="comSize diffBG02"></div>
                    <p>微信</p>
                    <div class="tanc_mask01 animated"><img src="/cn/images/smartapply_ewm.png" alt="二维码图片"></div>
                </a>
            </li>
            <li>
                <a href="tencent://message/?uin=3426496022&amp;Site=www.cnclcy&amp;Menu=yes" target="_blank">
                    <div class="comSize diffBG03"></div>
                    <p>QQ</p>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <div class="comSize diffBG04"></div>
                    <p>电话</p>
                    <div class="tanc_mask02 animated">400-1816-180</div>
                </a>
            </li>
            <li>
                <a href="tencent://message/?uin=2187813997&amp;Site=www.cnclcy&amp;Menu=yes" target="_blank">
                    <div class="comSize diffBG05"></div>
                    <p>吐槽入口</p>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" onclick="referTop();">
                    <div class="diffBG06 animated">
                        <img src="/cn/images/refer_icon06.png" alt="回到顶部图标"/>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
    <!-------------------头部------------------------>
    <div class="greyNav">
        <div class="inGrey">
            <div class="leftNav">
                <ul>
                    <li>
                        <a href="/"><img src="/cn/images/index_kevinIcon.png" alt="图标"></a>
                    </li>
                    <li><a href="http://www.gmatonline.cn">GMAT</a></li>
                    <li><a href="http://www.toeflonline.cn/">TOEFL</a></li>
                    <li><a href="http://ielts.gmatonline.cn/">IELTS</a></li>
                    <li><a class="on" href="http://smartapply.gmatonline.cn/">留学</a></li>
                    <li><a href="http://smartapply.gmatonline.cn/public-class.html">公开课</a></li>
                    <li>|</li>
                    <li><span>400-1816-180</span></li>
                    <li><a href="tencent://message/?uin=1746295647&amp;Site=www.cnclcy&amp;Menu=yes">在线咨询</a></li>
                </ul>
            </div>
            <div class="fl nav-de">互联网一站式留学申请平台</div>
            <div class="rightLogin">
                <?php
                if(!$userId) {
                    ?>
                    <!--未登录展示-->
                    <div class="rightLogin">
                        <div class="loginBefore">
                            <a href="http://login.gmatonline.cn/cn/index?source=3&url=<?php echo Yii::$app->request->hostInfo.Yii::$app->request->getUrl()?>"><input type="button" value="登陆" onclick="userLogin()"></a>
                            <a href="http://login.gmatonline.cn/cn/index?source=3&url=<?php echo Yii::$app->request->hostInfo.Yii::$app->request->getUrl()?>"><input type="button" value="注册" onclick="userRegister()"></a>
                        </div>
                    </div>
                    <?php
                }else {
                    ?>
                    <!--登陆之后展示-->
                    <div class="loginAfter">
                        <div class="whiteDiv"><img src="<?php echo $userData['image']?$userData['image']:'/cn/images/details_defaultImg.png'?>" alt="用户头像"></div>
                        <div class="leftFont">
                            <span><?php echo $userData['nickname']?$userData['nickname']:$userData['userName']?>（初来乍到）</span>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <div class="clearB"></div>
                        <!--下拉-->
                        <div class="xiala-con">
                            <ul>
                                <li><a href="/order.html">我的订单</a></li>
                                <li><a href="/integral.html">我的雷豆</a></li>
                                <li><a href="/user.html">个人资料</a></li>
                                <li><a onclick="loginOut()" href="javascript:;">退出</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <!--        app下载-->
            <div class="appDownload">
                <span title="app下载" class="tit_t">APP <b></b></span>
                <div class="pull_down">
                    <ul>
                        <li>
                            <div class="first_layer">
                                <img src="/cn/images/gmatapp_logo.jpg" alt="app logo图标"/>
                                <span>雷哥GMAT苹果版</span>
                            </div>
                            <div class="code_box">
                                <img src="/cn/images/leigeQrCode.png" alt="app二维码图片"/>
                            </div>
                        </li>
                        <li>
                            <div class="first_layer">
                                <img src="/cn/images/gmatapp_logo.jpg" alt="app logo图标"/>
                                <span>雷哥GMAT安卓版</span>
                            </div>
                            <div class="code_box">
                                <img src="/cn/images/leige-android.png" alt="app二维码图片"/>
                            </div>
                        </li>
                        <li>
                            <div class="first_layer">
                                <img src="/cn/images/toeflapp_logo.jpg" alt="app logo图标"/>
                                <span>雷哥托福苹果版</span>
                            </div>
                            <div class="code_box">
                                <img src="/cn/images/toeflQrCode.jpg" alt="app二维码图片"/>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--        app下载 end-->
            <div class="clearBr"></div>
        </div>
    </div>
    <div class="header">
        <div class="in_head">
            <div class="col-md-3">
                <a href="/" class="mt_a"><img src="/cn/images/logo.png" alt="logo图标" width="185"/></a>
            </div>
            <div class="col-md-6">
                <div class="searchBox">
                    <div class="col-md-1">
                        <img src="/cn/images/search.png" alt="搜索图标" onclick="searchGoods()"/>
                    </div>
                    <div class="col-md-7">
                        <input class="goodsKeywords" type="text" placeholder="University of Rochester" onkeydown="javascript:searchs(event)" value="<?php echo  isset($_GET['content'])?$_GET['content']:''?>"/>
                    </div>
                    <div class="col-md-2 search_K">
                        <span id="searchHtml">搜学校</span>
                        <i class="fa fa-caret-down"></i>
                        <div class="sea_down">
                            <ul>
                                <li>搜产品</li>
                                <li>搜专业</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 font" onclick="searchGoods()">搜索</div>
                </div>
                <div class="clearfix"></div>
                <div class="sea_bofont">
                    英国留学 澳大利亚留学 美国留学 新西兰留学 加拿大留学 香港留学 新加坡留学
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-7 h_phone">
                    <img src="/cn/images/head_phone.png" alt="电话图标"/>
                    <span>400-1816-180</span>
                </div>
                <div class="col-md-5">
                    <div class="col-md-3 h_person">
                        <img src="/cn/images/head_person.png" alt="人人图标"/>
                    </div>
                    <div class="col-md-7">
                        <div class="consult"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=3426496022&amp;site=qq&amp;menu=yes">在线咨询</a></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-----------------------导航------------------------------->
    <div id="navBox">
    <div class="nav nav_par">
        <ul class="ul_box">
            <li class="on">
                <a href="javascript:void(0);">留学服务分类 <i class="fa fa-caret-down"></i></a>
                <div class="first-down">
                    <ul>
                        <li><h4>留学考试</h4></li>
                        <li><a href="/cn/smartapply/gmat">GMAT</a></li>
                        <li><a href="/cn/toefldy">托福</a></li>
                        <li><a href="/course/category-164/type-0/page-1.html">雅思</a></li>
                        <li><h4>留学国家</h4></li>
                        <li><a href="/study-abroad/category-0/aim-0/country-176/page-1.html">美国</a></li>
                        <li><a href="/study-abroad/category-0/aim-0/country-157/page-1.html">英国</a></li>
                        <li><a href="/study-abroad/category-0/aim-0/country-177/page-1.html">加拿大</a></li>
                        <li><a href="/study-abroad/category-0/aim-0/country-158/page-1.html">澳大利亚</a></li>
                        <li><a href="/study-abroad/category-0/aim-0/country-178/page-1.html">香港</a></li>
                        <li><a href="/study-abroad/category-0/aim-0/country-179/page-1.html">法国</a></li>
                        <li><a href="/study-abroad/category-0/aim-0/country-232/page-1.html">新加坡</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="/">留学主页</a></li>
            <li <?php if(strstr($_SERVER['REQUEST_URI'],'/cn/index/products')){ ?> class="on" <?php } ?> ><a href="/cn/index/products">留学商城</a></li>
            <li <?php if(strstr($_SERVER['REQUEST_URI'],'/cn/smartapply/index')){ ?> class="on" <?php } ?> ><a href="/cn/smartapply/index">名校申请</a></li>
            <li <?php if(strstr($_SERVER['REQUEST_URI'],'/cn/smartapply/mydocument')){ ?> class="on" <?php } ?>><a href="/cn/smartapply/mydocument">文书神器</a></li>
            <li><a href="http://schools.smartapply.cn/assess.html">免费评估</a></li>
            <li><a href="http://schools.smartapply.cn/schools.html">海外院校库</a></li>
            <li <?php if(strstr($_SERVER['REQUEST_URI'],'/cn/ranking')){ ?> class="on" <?php } ?>><a href="/cn/ranking/293-308.html">大学排名</a></li>
            <li <?php if(strstr($_SERVER['REQUEST_URI'],'/cn/case')){ ?> class="on" <?php } ?>><a href="/cn/case">录取案例库</a></li>
            <li <?php if(strstr($_SERVER['REQUEST_URI'],'/cn/admission-requirement')){ ?> class="on" <?php } ?>><a href="/cn/admission-requirement">留学攻略</a></li>
            <li <?php if(strstr($_SERVER['REQUEST_URI'],'/cn/question')){ ?> class="on" <?php } ?>><a href="/cn/question"> 留学问答</a></li>
            <li <?php if(strstr($_SERVER['REQUEST_URI'],'/cn/consultant')){ ?> class="on" <?php } ?>><a href="/cn/consultant">留学顾问</a></li>
        </ul>
    </div>
</div>
    <!-------------------导航 end------------------------>
<!------------------------留学评估弹窗----------------------------->
<form method="post" action="/cn/index/assessment" onsubmit="return check()">
    <img src="/cn/images/public_leftBtn.png" alt="缩小后显示图片" class="shrink" onclick="leftSuspen(this)"/>
    <div class="leftFloatW">
        <i class="fa">×</i>
        <img src="/cn/images/left_xfcTittle.png" alt="左边悬浮窗图标" style="vertical-align: bottom"/>

        <div class="abroadPG">

            <div class="btn-group">
                <input name="extendValue[]" class="value" type="hidden" value="" />
                <button type="button" class="btn btn-default dropdown-toggle default"
                        data-toggle="dropdown">
                    <a class="defa_val"><span style="color: red;">*</span>我想申请</a>
                    <a href="javascript:void(0);" class="r_sanj"><span class="caret"></span></a>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <?php
                    $education = explode(",",$education);
                    foreach($education as $v) { ?>
                        <li onclick="fuZhi(this)"><a href="#"><?php echo $v ?></a></li>
                        <li class="divider"></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="btn-group">
                <input name="extendValue[]" class="value" type="hidden" value="" />
                <button type="button" class="btn btn-default dropdown-toggle default"
                        data-toggle="dropdown">
                    <a class="defa_val"><span style="color: red;">*</span>我想去哪儿</a>
                    <a href="javascript:void(0);" class="r_sanj"><span class="caret"></span></a>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <?php
                    $country = explode(",",$country);
                    foreach($country as $v) { ?>
                        <li onclick="fuZhi(this)"><a href="#"><?php echo $v ?></a></li>
                        <li class="divider"></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="btn-group">
                <input name="extendValue[]" class="value" type="hidden" value="" />
                <button type="button" class="btn btn-default dropdown-toggle default"
                        data-toggle="dropdown">
                    <a class="defa_val"><span style="color: red;">*</span>我想攻读</a>
                    <a href="javascript:void(0);" class="r_sanj"><span class="caret"></span></a>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <?php
                    $major = explode(",",$major);
                    foreach($major as $v) { ?>
                        <li onclick="fuZhi(this)"><a href="#"><?php echo $v ?></a></li>
                        <li class="divider"></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="btn-group">
                <input name="extendValue[]" class="value" type="hidden" value="" />
                <button type="button" class="btn btn-default dropdown-toggle default"
                        data-toggle="dropdown">
                    <a class="defa_val"><span style="color: red;">*</span>所在地</a>
                    <a href="javascript:void(0);" class="r_sanj"><span class="caret"></span></a>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <?php
                    $city = explode(",",$city);
                    foreach($city as $v) { ?>
                        <li onclick="fuZhi(this)"><a href="#"><?php echo $v ?></a></li>
                        <li class="divider"></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="leftBotInput">
                <ul>
                    <li>
                        <label><span>*</span>GPA</label>
                        <input name="extendValue[]" class="value" type="text" id="GPAS"/>
                        <div style="clear: both;"></div>
                    </li>
                    <li>
                        <label><span>*</span>托福/雅思</label>
                        <input name="extendValue[]" class="value" type="text" id="TOEFLS" />
                        <div style="clear: both;"></div>
                    </li>
                    <li>
                        <label><span>*</span>GRE/GMAT</label>
                        <input name="extendValue[]" class="value" type="text" id="GMATS" />
                        <div style="clear: both;"></div>
                    </li>
                </ul>
            </div>
        </div>
        <input type="hidden" name="collagen" id="collagens" value="">
        <input type="submit" value="立即免费评估">
    </div>
</form>
<!------------------------留学评估弹窗 end----------------------------->
<?=$content?>
<!----------------------尾部----------------------------->
    <!--footer-->
    <footer>
        <div class="w12 tm" style="padding: 30px 0;margin-top: 20px;">
            <ul class="footer-list">
                <li><a href="javascript:void(0);">课程类型</a></li>
                <li><a href="http://www.gmatonline.cn/index.html">GMAT</a></li>
                <li><a href="http://www.toeflonline.cn/">TOEFL</a></li>
                <li><a href="http://ielts.gmatonline.cn/">IELTS</a></li>
                <li><a href="http://smartapply.gmatonline.cn/">留学</a></li>
            </ul>
            <ul class="footer-list">
                <li><a href="javascript:void(0);">题库</a></li>
                <li><a href="http://www.gmatonline.cn/question/stog8leetkey.html">PREP</a></li>
                <li><a href="http://www.gmatonline.cn/question/stog1leetkey.html">OG</a></li>
                <li><a href="http://www.toeflonline.cn/tpoExam.html">TPO</a></li>
                <li><a href="http://ielts.gmatonline.cn/">剑桥</a></li>
            </ul>
            <ul class="footer-list erm-3-wrap">
                <li><a href="javascript:void(0);">关注我们</a></li>
                <li>
                    <a href="#"><div class="ft-icon"><img src="/cn/images/icon-wx.png" alt=""></div>：雷哥GMAT</a>
                    <div class="erm-3"><img src="/cn/images/erm-6.jpg" alt=""></div>
                </li>
                <li>
                    <a href="#"><div class="ft-icon"><img src="/cn/images/icon-wx.png" alt=""></div>：雷哥托福</a>
                    <div class="erm-3"><img src="/cn/images/erm-7.jpg" alt=""></div>
                </li>
                <li>
                    <a href="#"><div class="ft-icon"><img src="/cn/images/icon-wx.png" alt=""></div>：雷哥雅思</a>
                    <div class="erm-3"><img src="/cn/images/erm-8.png" alt=""></div>
                </li>
                <li>
                    <a href="#"><div class="ft-icon"><img src="/cn/images/icon-wx.png" alt=""></div>：雷哥留学</a>
                    <div class="erm-3"><img src="/cn/images/erm-9.jpg" alt=""></div>
                </li>
            </ul>
            <div class="leige-tag inb">
                <div><img src="/cn/images/logo-2.png" alt=""></div>
                <div class="ft-tag">
                    <span><em class="point"></em>优质教学</span>
                    <span><em class="point"></em>海量题库</span>
                    <span><em class="point"></em>全方位服务</span>
                    <span><em class="point"></em>超值课程礼包</span>
                </div>
                <p class="ft-de">雷哥网  让你学的更好、效率更高、让你每天进步一点点</p>
            </div>
        </div>
        <div class="copyRight tm">
            ©2016 gmatonline.cn All Rights Reserved    京ICP备15001182号-1 京公网安备11010802017681
            <a href="http://www.gmatonline.cn/aboutUs/16.html#free_shengm">免责声明</a>
        </div>
    </footer>
<!----------------------尾部  end----------------------------->
    <script type="text/javascript">
        function searchGoods(){
            var content = $('.goodsKeywords').val();
            var type = $('#searchHtml').html();
            if(content == ''){
                alert('请输入关键词');return false;
            }
            if(type=='搜产品'){
                location.href = '/search/content-'+content+'/page-1.html'
            }else {
                location.href="http://schools.smartapply.cn/cn/index/select?"+type+"&keywords="+content;
            }
        }
        function searchs(e){
            if(e.keyCode==13){
                searchGoods();
            }
        }
        /**
         * 用户退出
         */
        function loginOut() {
            $.post('/cn/api/login-out', {}, function (re) {
                window.location.href = "/"
            }, 'json')
        }
        function check(){
            var gpaReg1 = new RegExp("^[0-4]$");
            var gpaReg2 = new RegExp("^([0-3])+(.[0-9])?$");
            var toeflReg1 = new RegExp("^([0-1]+([0-2]{1})+([0-9]{1}))$");
            var toeflReg2 = new RegExp("^[1-9]+([0-9]{1})$");
            var toeflReg3 = new RegExp("^([0-9]|([3-8]+(.[0-9]{1})))$");
            var GPA = $('#GPAS').val();
            var TOEFL = $('#TOEFLS').val();
            var GMAT = $('#GMATS').val();
            var a = 1;
            $('.defa_val').each(function(){
                var spanVal = $(this).html();
                if(spanVal == '请选择'){
                    spanVal = '';
                }
                $(this).next().val(spanVal);
            });
            $('.value').each(function(){
                if($(this).val() == "" || $(this).val() == "请选择"){
                    alert('星标志位必填');
                    a = 2;
                    return false;
                }
            });
            if(a == 2){
                return false;
            }
            if(GPA<1 || GPA>4){
                alert('GPA请输入1-4之间的数字');
                return false;
            }else{
                if(GPA>=3.5){
                    GPA = 90;
                }else
                if(GPA>=3 && GPA<=3.4){
                    GPA = 80;
                }else
                if(GPA>=2 && GPA<=2.9){
                    GPA = 65;
                }else
                if(GPA<2){
                    GPA = 45;
                }
            }
            if(!toeflReg1.test(TOEFL) && !toeflReg2.test(TOEFL) && !toeflReg3.test(TOEFL)){
                alert('托福数值为10到120  雅思数值为3.0到9.0（最小间隔为0.5）');
                return false;
            }else{
                if(TOEFL>=10){
                    if(TOEFL>=110){
                        TOEFL = 90;
                    }else
                    if(TOEFL>=100 && TOEFL<=109){
                        TOEFL = 80;
                    }else
                    if(TOEFL>=90 && TOEFL<=99){
                        TOEFL = 65;
                    }else
                    if(TOEFL<90){
                        TOEFL = 45;
                    }
                }else{
                    if(TOEFL>=8.0){
                        TOEFL = 90;
                    }else
                    if(TOEFL>=7.5 && TOEFL<=7.9){
                        TOEFL = 80;
                    }else
                    if(TOEFL>=5.5 && TOEFL<=7.4){
                        TOEFL = 65;
                    }else
                    if(TOEFL<5.5){
                        TOEFL = 45;
                    }
                }
            }
            if((GMAT>=400 && GMAT<=800) || (GMAT>=261 && GMAT<=340)){
                if(GMAT>=350){
                    if(GMAT>=750){
                        GMAT = 90;
                    }else
                    if(GMAT>=700 && GMAT<=749){
                        GMAT = 80;
                    }else
                    if(GMAT>=650 && GMAT<=699){
                        GMAT = 65;
                    }else
                    if(GMAT<650){
                        GMAT = 45;
                    }
                }else{
                    if(GMAT>=300){
                        GMAT = 90;
                    }else
                    if(GMAT>=250 && GMAT<=299){
                        GMAT = 80;
                    }else
                    if(GMAT>=200 && GMAT<=249){
                        GMAT = 65;
                    }else
                    if(GMAT<200){
                        GMAT = 45;
                    }
                }
            }else{
                alert('GMAT数值为400到800（最小间隔为10），GRE数值为261-340');
                return false;
            }
            var all = GPA+GMAT+TOEFL;
            var collagen = Math.ceil(all/3)
            $('#collagens').val(collagen);
        }
    </script>
</body>
</html>