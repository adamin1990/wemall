<?php if (!defined('THINK_PATH')) exit();?><table class="table table-bordered table-striped table-hover">
    <thead>
            <tr>
                    <th>订单编号</th>
                    <th>用户昵称</th>
                    <th>采购来源</th>
                    <th>订单号</th>
                    <th>商品总数</th>
                    <th>备注</th>
                    <th>操作</th>
            </tr>
    </thead>
    <tbody>
            <?php if(is_array($getLog)): foreach($getLog as $key=>$value): ?><tr>
                <td><?php echo ($value["id"]); ?></td>
                <td><?php echo ($value["customer"]["nickname"]); ?></td>
                <td><?php echo ($value["procure_source1"]); ?></td>
                <td><?php echo ($value["procure_orderid1"]); ?></td>
                <td><?php echo ($value["goodsQuantity"]); ?></td>
                <td><?php echo ($value["remarks"]); ?></td>
                <td>
                    <a href="<?php echo ($value["url"]["detail"]); ?>">
                        <button class="btn btn-mini" type="button">
                            查看详情
                        </button>
                    </a>
                    <a href="<?php echo ($value["url"]["getLog"]); ?>">
                        <button class="btn btn-mini btn-primary" type="button">
                             修改状态
                        </button>
                    </a>
                 </td>
            </tr><?php endforeach; endif; ?>
    </tbody>
</table>
<div class="pagination"><?php echo ($page); ?></div>