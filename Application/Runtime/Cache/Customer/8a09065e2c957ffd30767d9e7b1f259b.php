<?php if (!defined('THINK_PATH')) exit();?><form id="goodsEditForm" class="form-horizontal" name="goodsEditForm" method="post" action="<?php echo ($urlUpdate); ?>" enctype="multipart/form-data"/>
<fieldset>  
   <legend> <a href="<?php echo ($urlIndex); ?>"><h4>返回</h4></a></legend>
   <input name ="id" type="hidden" value="<?php echo ($Customerid); ?>" />
   <div class="control-group">
                                <label class="control-label" for="nickname">昵称</label>
                                <div class="controls">
                                <input type="text" name='nickname' id="nickname" value="<?php echo ($customer["nickname"]); ?>" >
                                </div>
                            </div>
   <div class="control-group">
                                <label class="control-label" for="weixinid">微信账号</label>
                                <div class="controls">
                                <input type="text" name='weixinid' id="weixinid" value="<?php echo ($customer["weixinid"]); ?>" >
                                </div>
                            </div>
   <div class="control-group">
                                <label class="control-label" for="aipayid">支付宝账号</label>
                                <div class="controls">
                                <input type="text" name='aipayid' id="aipayid" value="<?php echo ($customer["aipayid"]); ?>" >
                                </div>
                            </div>
   <div class="control-group">
                                <label class="control-label" for="phone_number">电话号码</label>
                                <div class="controls">
                                <input type="text" name='phone_number' id="phone_number" value="<?php echo ($customer["phone_number"]); ?>" >
                                </div>
                            </div>
   <div class="control-group">
                                <label class="control-label" for="parentid">上级编号</label>
                                <div class="controls">
                                <input type="text" name='parentid' id="parentid" value="<?php echo ($customer["parentid"]); ?>" >
                                </div>                    
   <div class="form-actions">
				<button type="submit" class="btn btn-primary">保存</button>
			    </div>
</fieldset>

</form>