<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
梦云智工作室
支付页面
-->
<?php echo ($js); ?>


        <fieldset>
        <legend>支付界面</legend>
        <form class="form-horizontal" method="post" action="<?php echo ($url); ?>">
            <div class="control-group">
                <label class="control-label" for="title">支付账号</label>
                <div class="controls">
                    <input type="text" name='payment_number' id="payment_number" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="title">支付流水号</label>
                <div class="controls">
                    <input type="text" name='payment_serialnumber' id="payment_serialnumber" >
                </div>
            </div>
            <div class="form-actions">
                <button type="submit"  class="btn btn-primary">提交</button>
                <input type="button"  onclick="javascript:history.back(-1);" value="返回" class="btn">
            </div>
        </form>
        </fieldset>