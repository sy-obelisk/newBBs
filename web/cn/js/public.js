//关闭咨询框
function closeRefer(){
    $(".referBox").slideUp();
    $(".refer_small").fadeIn();
}
//点击小的咨询展示大的咨询
function showZiXun(){
    $(".referBox").slideDown();
    $(".refer_small").fadeOut();
}
//回到顶部
function referTop(){
    $("html,body").animate({scrollTop:0},800);
}