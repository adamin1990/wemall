<?php if (!defined('THINK_PATH')) exit();?><!--微信生产环境JS-->
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js" ></script> 
<script> 
  
//    /*微信配置信息，用于收货地址等JSSDK的调用*/
//    wx.config({
//    debug:false,
//    appId: '<?php echo ($signPackage["appId"]); ?>',
//    timestamp: <?php echo ($signPackage["timestamp"]); ?>,
//    nonceStr: '<?php echo ($signPackage["nonceStr"]); ?>',
//    signature: '<?php echo ($signPackage["signature"]); ?>',
//    jsApiList: [
//        'chooseImage',
//        'previewImage',
//        'uploadImage',
//        ]
//    });
//    //收货地址调用
//    /*
//     * 详细文档请参考微信官方“收货地址共享接口文档V1.6”
//     * 返回值:
//     * errmsg   edit_address:ok获取成功 edit_address:fail 获取失败
//     * userName 收货人姓名
//     * telNumber 收货人电话
//     * addressPostalCode 邮编
//     * proviceFirstStageName 国标收化地址第一级地址
//     * addressCitySecondStageName 国标收货地址第二级地址
//     * addressCountiesThirdStageName 国标三级地址
//     * addressDetailInfo 详细收化地址信息
//     * nationalCode 收货地址国家码
//     */
////    function selectAdress() 
////    {
////        WeixinJSBridge.invoke(
////                'editAddress',
////                {
////                    "appId" : "<?php echo ($addressPackage["appId"]); ?>",
////                    "scope" : "<?php echo ($addressPackage["scope"]); ?>",
////                    "signType" : "<?php echo ($addressPackage["signType"]); ?>",
////                    "addrSign" : "<?php echo ($addressPackage["addrSign"]); ?>",
////                    "timeStamp" : "<?php echo ($addressPackage["timeStamp"]); ?>",
////                    "nonceStr" : "<?php echo ($addressPackage["nonceStr"]); ?>",
////                },
////                function(res){
////                    if(res.err_msg == "edit_address:ok")
////                    {
////                        $("#picName").text(res.userName);
////                        $("#picPhone").text(res.telNumber);
////                        $("#picAddress").text(res.proviceFirstStageName+res.addressCitySecondStageName+res.addressCountiesThirdStageName+res.addressDetailInfo+"("+res.addressPostalCode+")");
////                    }
////                }
////        );
////    };
//    
//////选择图片并上传，同时将图片的回调地址存入至数组中
//  var fontid = ''; //身份证正面
//  var backid = ''; //身份证反面
//  function chooseImage($this)
//  {
//      wx.chooseImage({
//        success:function($res){
//            if($res.errMsg == "chooseImage:ok")
//            {
//                var localIds = $res.localIds; //取选择图片回传数据
//                $(".addressEdit").showLoading(); //添加loading等待效果
//                wx.uploadImage({                  //进行图片上传
//                    localId:localIds[0],
//                    isShowProgressTips:1,           //显示上传进度提示
//                    success:function (res)
//                    {
//                        if(res.errMsg == 'uploadImage:ok')
//                        {
//                            var serverId = res.serverId; 
//                            var uploadImageUrl = "<?php echo ($data["uploadImageUrl"]); ?>?openid=<?php echo ($openid); ?>&serverId="+serverId;
//                            //进行图片下载，同时，存服务器,返回附件ID
//                            $.get(
//                                uploadImageUrl,
//                                function(data){
//                                    $this.attr("data-value",data);
//                                }
//                            );                     
//                            
//                        }
//                        else
//                        {
//                            alert('图片上传失败,请重试');
//                        }
//                        $(".addressEdit").hideLoading();
//                    }
//                });
//            }       
//        }
//    });
//  };
////    
////    
//    //微信jssdk配置信息
//    
//    //微信浏览器事件准备好后自动触发事件
//    //用于检测用户微信版本
//    wx.ready(function () {
//        //检测是否支持各接口
//      wx.checkJsApi({
//          jsApiList:['chooseImage'],
//          success:function(res){
//              if(res.checkResult.chooseImage == false)
//              {
//                  alert("您的微信版本过低，请升级微信版本后重试。");
//                  $("#orderSubmit").hide();
//              }
//              else
//              {
//
//              }
//          }
//      });
//    }); 
</script>