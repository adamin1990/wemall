<?php if (!defined('THINK_PATH')) exit();?>	<script type="text/javascript">
	var _hmt=_hmt||[];(function(){var e=document.createElement("script");
	var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();
	document.write('<div id="global_loading" style="width: 100%;height: 100%;position: fixed;top: 0;left: 0;background-color: #eee;z-index:999"><div style="width: 100px;height: 75px;margin:auto;top:50%;position:relative"><span style="display:block;float:left;width:32px;height:32px;background:url(images/spacer.gif);margin-top:-5px;"></span>&nbsp;&nbsp;加载中...</div></div>');
	</script>
<section>
<div class="pending-detial">
		<div class="order-info">
			<ul>
				<li class="first clearfix">
					<p class="title">订单编号：</p>
					<p class="sum"><?php echo ($order["id"]); ?></p>
				</li>
                                <li class="clearfix">
					<p class="title">下单时间：</p>
					<p class="sum"><?php echo (date("y/m/d H:s",$order["buy_time"])); ?><br></p>
				</li>
                                <li class="clearfix">
					<p class="title">支付时间：</p>
					<p class="sum"><?php echo (date("y/m/d H:s",$order["pay_time"])); ?><br></p>
				</li>
                                <li class="clearfix">
					<p class="title">订单总额：</p>
					<p class="sum"><?php echo format_money($order[total_prices]); ?><br></p>
				</li>
                                <li class="clearfix">
					<p class="title">商品总数：</p>
					<p class="sum"><?php echo ($order["total_count"]); ?><br></p>
				</li>
                                <div class="close">
                            <?php echo ($button); ?>
	            </div>
			</ul>
		</div>
		<!--订单信息end-->
		
		<!--物流跟踪begin-->
		<div class="list">
			<h3>物流跟踪</h3>
        <!-- {if $order.invoice_no}-->
        <ul><div id="retData"></div></ul>
        <!--{/if}-->
		</div>
		<!--物流跟踪end-->

		<!--商品列表begin-->
		<div class="list">
			<h3>商品列表</h3>
			<ul>
                            <?php if(is_array($goods)): foreach($goods as $key=>$value): ?><li class="{if $smarty.foreach.goods.first}first {/if}clearfix">
                                <img src="<?php echo ($value["src"]); ?>"></a>
                                <div class="pro-info">
                                    <a href="<?php echo ($detail); echo ($value["id"]); ?>" target="_blank"><?php echo ($value["name"]); ?></a>
                                    <p class="price">本店价：<?php echo format_money($value[purchasing_price]); ?>元</p>
                                </div>
                                <span>×<?php echo ($value["quantity"]); ?></span>
                            </li><?php endforeach; endif; ?> 
                        </ul>
		</div>
		<div class="user-info">
			<ul>
				<li>
					<p class="title">联络贵宾：</p>
					<p class="user"><?php echo ($order["name"]); ?></p>
				</li>
				<li>
					<p class="title">联络电话：</p>
					<p class="user"><?php echo ($order["telephone"]); ?></p>
				</li>
				<li class="add">
					<p class="title">收货地址：</p>
					<p class="user"><?php echo ($order["address"]); ?></p>
				</li>
			</ul>
		</div>
		<!--收货地址end-->


		<!--其他信息begin-->
		<div class="fapiao">
			<h3>其他信息</h3>
			<ul>
				<li>
					<p class="title">配送方式：</p>
					<span id="shipping_name"><?php echo ($order["logistics_mode"]); ?></span>
				</li>
				<li>
					<p class="title">物流费用：</p>
					<p class="sum"><?php echo ($order["logistic_feee"]); ?></p>
				</li>
	            <!-- {if $order.pack_name} 是否使用包装 -->
				<li>
					<p class="title">优惠金额：</p>
					<p class="sum"><?php echo ($order["privilege_money"]); ?></p>
				</li>
                <!-- {/if} 是否使用包装 -->
	            <!-- {if $order.card_name} 是否使用贺卡 -->
				<li>
					<p class="title">采购来源：</p>
					<p class="sum"><?php echo ($order["procure_source1"]); echo ($order["procure_source2"]); echo ($order["procure_source3"]); ?></p>
				</li>
				<li>
					<p class="title">原产国公司：</p>
					<p class="sum"><?php echo ($order["origin_company1"]); echo ($order["origin_company2"]); echo ($order["origin_company3"]); ?></p>
				</li>
                <!-- {/if} 是否使用贺卡 -->
	            <!-- {if $order.integral > 0} 是否使用积分 -->
				<li>
					<p class="title">优惠券信息：</p>
					<p class="sum"><?php echo ($order["coupon_fee"]); ?></p>
				</li>
                <!-- {/if} 是否使用积分 -->
		</div>
		<!--其他信息end-->

</section>
<script type="text/javascript">
		var global_loading=document.getElementById("global_loading");
		global_loading.parentNode.removeChild(global_loading);
</script>
<script language="javascript">
	document.getElementById("retData").innerHTML="<center>正在查询物流信息，请稍后...</center>";
	var expressid = document.getElementById("shipping_name").innerHTML;
	var expressno = document.getElementById("invoice_no").innerHTML;
	Ajax.call('../plugins/kuaidi100/kuaidi100_post.php?type='+ expressid+'&postid=' + expressno,'showtest=showtest', function(data){document.getElementById("retData").innerHTML=data;}, 'GET', 'TEXT');
</script>
<style>
    section{
        margin-top: 6em;
        margin-bottom: 6em;
    }
</style>