<?php if (!defined('THINK_PATH')) exit();?><!--
梦云智工作室
 
-->
<form method="post" action="<?php echo ($urlUpdate); ?>" >
    <fieldset>
        <legend> <a href="<?php echo ($urlIndex); ?>"><h4>返回</h4></a></legend>
    <input name ="id" type="hidden" value="<?php echo ($rebate['id']); ?>" />
    <ul>
        <li class="li"><lable for="top_money">上线金额:</lable><input type="text" name="top_money" value="<?php echo format_money($rebate['top_money']); ?>"/>元</li>
        <li class="li"><lable for="direct_ratio">直销系数:</lable><input type="text" name="direct_ratio" value="<?php echo ($rebate['direct_ratio']); ?>" /></li>
        <li class="li"> <input type="submit"  class="btn btn-primary" value="保存"/>
        <div class="clr"></div>
    </ul>
    </fieldset>
</form>
<style>
    .clr{
        clear: both;
    }
    ul li {
        list-style-type: none;
    }
   
    
    .title{
        float: left;height: 50px;
    }
    .li label{
        width: 100px;text-align: justify;
    }
    .li a{
        width: 50px;margin-right: 120px;
    }
</style>