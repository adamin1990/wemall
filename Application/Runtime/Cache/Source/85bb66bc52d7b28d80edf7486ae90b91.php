<?php if (!defined('THINK_PATH')) exit();?><form class="form-horizontal" method="post" action="<?php echo ($Source['actionUrl']); ?>" enctype="multipart/form-data" />
<fieldset>
    <legend> 修改来源信息</legend>
    <div class="control-group">
        <label class="control-label" >来源名称</label>
        <div class="controls">
            <input type="hidden" name ="id"  value="<?php echo ($Source['id']); ?>">
            <input type="text" name="name" value="<?php echo ($Source['name']); ?>" >
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="SYSTEM_END_DAY">来源图标</label>
        <div class="controls">
            <img src="<?php echo ($Source["attachment_id"]["url"]); ?>" style="max-width: 90px;"/>
            <input type="file" name="img"  >
            <input type="hidden" name="attachment_id" value="<?php echo ($info); ?>"/>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">保存</button> <button type="button" class="btn" onclick="location = '<?php echo ($url); ?>'">取消</button>
    </div>
</fieldset>
</form>