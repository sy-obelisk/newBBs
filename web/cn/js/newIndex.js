$(function(){
//    下拉赋值
    $(".dropdown-menu li").click(function(){
        var htmls=$(this).find("a").html();
        $(this).parent().siblings("button").find("b").html(htmls);
        $(this).parent().siblings("input").val(htmls);
    });
    jQuery('.zy-Slide').zySlide({ speed: 500 });

    <!--头部收缩banner-->
    var changeObj= $(".FocusPicture");
//    changeObj.animate({
//         height:"448px"
//     },1500,function(){
    setTimeout(function(){
        changeObj.animate({
            height:"0"
        },1000,function(){
            changeObj.find("img").attr("src","/cn/images/newIndex_bannerTop02.jpg");
            changeObj.animate({
                height:"100px"
            },800);
        });
    },1000);
//     });
//    鼠标移上去展开
    changeObj.bind({
        "mouseenter":function(){
            changeObj.find("img").attr("src","/cn/images/newIndex_bannerTop01.jpg");
            changeObj.stop(true).animate({
                height:'460px'
            },1000);
        },
        "mouseleave":function(){
            changeObj.stop(true).animate({
                height:'100px'
            },1000,function(){
                changeObj.find("img").attr("src","/cn/images/newIndex_bannerTop02.jpg");
            });
        }
    });

});

function subInfo(){
    var name=$("#user_name").val();
    var phone=$("#phone_sm").val();
    var user_qq=$("#user_qq").val();
    var user_wechat=$("#user_wechat").val();
    var country=$("#country").val();
    var pan_time=$("#pan_time").val();
    var grade=$("#grade").val();
    var reg=/^1[3|4|5|7|8][0-9]\d{8}$/;
    if(!name || !phone){
        alert("姓名和电话为必填项哦！");
        return false;
    }else if(phone.length!=11){
        alert("手机号为11位数字！");
        return false;
    }else if(!reg.test(phone)){
        alert("手机号格式不正确！");
        return false;
    }else{
        $.ajax({
            url: '/cn/index/programme',
            data: {
                user_name: name,
                user_phone: phone,
                qq: user_qq,
                weixin: user_wechat,
                country: country,
                pan_time: pan_time,
                grade: grade
            },
            type: 'post',
            dataType: 'json',
            success: function (data) {
                if(data == 1){
                    alert("提交成功，专业申请老师将会在2小时之后联系你")
                }
                if(data == 2){
                    alert("亲 请检查填写信息")
                }
                if(data == 3){
                    alert("你今天已预约，请24小时后再次预约")
                }
            }
        })
    }
}