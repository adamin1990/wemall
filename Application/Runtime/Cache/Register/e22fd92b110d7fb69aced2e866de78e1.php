<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">    
    var countdownInit=60;
    var countdown;
    var openid = "<?php echo ($openid); ?>";
    $(document).ready(function(){
        $("#phone").focus();
        $("#message").removeAttr("disabled");   
        $("#submit").removeAttr("disabled");
    });
    
    
    $('#submit').click(function()
    {	
        var weixinid = $('#weixinid').val();	
        var phone = $('#phone').val();	
        var checkcode = $("#checkcode").val();
        if(checkcode == '')
        {
            alert("请输入验证码");
            return false;
        }
        if(weixinid == '')
        {
            alert("请输入微信号");
            return false;
        }
        if(checkMobile(phone) == false)
        {
            alert("手机格式有误");
            return false;
        }
        $(".reg").showLoading();//显示loading
        $(this).attr("disabled","disabled");
        var url = "<?php echo ($registeUrl); ?>?openid="+openid+"&checkcode="+checkcode+"&weixinid="+weixinid;
        $.get(url,
        function(data){
            if(data == 'success')
            {
                alert("注册成功");
                var gotoUrl = "<?php echo ($gotoUrl); ?>";
                location=gotoUrl;
            }
            else
            {
                alert(data);
                $('#submit').removeAttr("disabled");
            }
        });
        $(".reg").hideLoading();  
          
    });	

/*
 * 较验手机号
 */
    function checkMobile(str) {
        var reg =/^(13[0-9]{9})|(15[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(18[0-9]{9})$/
        if (reg.test(str) === false) {
            return false;
        }
        else
        {
            return true;
        }
    }
    
    $(function(){		
		$("#mask_close").click(function(){
			$("#mask").hide();
			$("#mask_alarm").hide();
			$("input:not(#P_Birthday)").removeAttr('readonly');
		});
	});
	
	function error_show(){
		$('.popupbox').css({top:'50%',left:'50%',margin:'-'+($('.popupbox').outerHeight()/2)+'px 0 0 -'+($('.popupbox').outerWidth()/2)+'px'});
		$(".scrmask").css({height:$(document).height()});
		$(".scrmask2").css({height:$(document).height()});
		$("#mask").show();
		$("#mask_alarm").show();
	}
        
	function sele_change(obj){
		var val=$(obj).val();
		$(".work_beginyear").find("h4").text(val+'年');

	}
        
    function sendMsg($this){
        var phone = $("#phone").val();
        if(!checkMobile(phone))
        {
            alert("手机号码格式有误");
            $("#phone").focus();
            return false;
        }
        
        $this.attr("disabled","disabled");
        countdown = countdownInit;  
        var url = "<?php echo ($urlSend); ?>?openid="+openid+"&phone="+phone;
        $.get(url,
        function(data){
            if(data == 'success')
            {
                alert("发送成功，请查收");
            }
            else
            {
                alert("验证码未成功发送，错误码："+data);
            }
            
        }); 
        setTime();
     }
     
     function setTime(){ 
         if (countdown === 0) { 
                $("#message").removeAttr("disabled");    
                $("#message").html("重新获取");
            }else{
                $("#message").html("重新发送(" + countdown + ")");
                countdown--; 
                setTimeout(function(){setTime()},1000);
            }
     }
</script>