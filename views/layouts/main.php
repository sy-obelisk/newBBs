<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="小申教育在线后台">
    <meta name="description" content="小申教育在线后台">
    <meta name="keywords" content="小申教育在线后台">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>小申教育</title>
    <!-- Le styles -->
    <link href="/css/coreCss/new/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/coreCss/new/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="/css/coreCss/new/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <!-- Gritter -->
    <link href="/css/coreCss/new/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="/css/coreCss/new/css/animate.css" rel="stylesheet">
    <link href="/css/coreCss/new/css/style.css" rel="stylesheet">

    <!-- Mainly scripts -->
    <script src="/css/coreCss/new/js/jquery-2.1.1.js"></script>
    <script src="/css/coreCss/new/js/bootstrap.min.js"></script>
    <script src="/css/coreCss/new/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/css/coreCss/new/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/css/coreCss/new/js/plugins/flot/jquery.flot.js"></script>
    <script src="/css/coreCss/new/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/css/coreCss/new/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/css/coreCss/new/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/css/coreCss/new/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="/css/coreCss/new/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/css/coreCss/new/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/css/coreCss/new/js/inspinia.js"></script>
    <script src="/css/coreCss/new/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/css/coreCss/new/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="/css/coreCss/new/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="/css/coreCss/new/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <?php use app\commands\background\LeftWidget;?>
        <?php LeftWidget::begin(['controller' => Yii::$app->controller->id,'module' => Yii::$app->controller->module->id]);?>
        <?php LeftWidget::end();?>
    </nav>
        <!-- $content变量的值 就是子页面渲染之后的代码。也就是说子页面中的内容将输出到这个地方-->
    <div id="page-wrapper" class="gray-bg">
        <?= $content ?>
    </div>
</div>
</body>
</html>

