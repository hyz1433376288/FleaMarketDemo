<?php
/**
 * 商品操作类，包含添加商品，删除商品，修改商品等...
 */

/**
 * 添加商品至数据库
 * @param string $name 商品名字
 * @param float $priceNow 当前价格
 * @param float $priceOld 原价
 * @param string $description 商品描述
 * @param string $preview 预览图路径
 * @param int $remain 剩余数量
 * @return bool 是否成功添加入数据库
 */
function addGoods($name, $priceNow, $priceOld, $description, $preview, $remain)
{
    $sql_add = "INSERT INTO `goods`(`name`, `price_now`, `price_old`, `description`, `preview`, `remain`) VALUES ('{$name}', {$priceNow}, $priceOld, $description, $preview, $remain})";
    $db = new DB();
    return $db->query($sql_add);
}
