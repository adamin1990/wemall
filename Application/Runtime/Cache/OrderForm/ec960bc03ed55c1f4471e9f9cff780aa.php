<?php if (!defined('THINK_PATH')) exit();?><form id="getLogForm" class="form-horizontal" name="getLogForm" method="post" action="<?php echo ($url); ?>" />
<fieldset>
   <legend>修改状态</legend>
        <div class="control-group">
            <label class="control-label" for="title">原产国快递号 1(必填)</label>
            <div class="controls">
                <input type="text" name='origin_orderid1' id="procure_source1" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="title">原产国快递公司 1(必填)</label>
            <div class="controls">
                <input type="text" name='origin_company1' id="procure_orderId1" >
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="title">原产国快递号2(选填)</label>
            <div class="controls">
                <input type="text" name='origin_orderid2' id="procure_source2">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="title">原产国快递公司2(选填)</label>
            <div class="controls">
                <input type="text" name='origin_company2' id="procure_orderId2">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="title">原产国快递号3(选填)</label>
            <div class="controls">
                <input type="text" name='origin_orderid3' id="procure_source3">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="title">原产国快递公司3(选填)</label>
            <div class="controls">
                <input type="text" name='origin_company3' id="procure_orderId3">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="title">备注</label>
            <div class="controls">
                <input type="text" name='remarks' id="remarks" value="<?php echo ($getlog[0]['remarks']); ?>">
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">保存</button> 
            <input type="button"  onclick="javascript:history.back(-1);" value="返回" class="btn">
        </div>
</fieldset>
</form>