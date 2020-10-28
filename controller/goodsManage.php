<?php
/**
 * 商品操作类，包含添加商品，删除商品，修改商品等...
 */

/**
 * 添加商品信息至数据库
 * @param Goods $goods 要添加的商品的实例
 * @return bool 是否添加成功
 */
function addGoods($goods)
{
    $name = $goods->getName();
    $priceNow = $goods->getPriceNow();
    $priceOld = $goods->getPriceOld();
    $description = $goods->getDescription();
    $preview = $goods->getPreview();
    $remain = $goods->getRemain();
    $sql_add = "INSERT INTO `goods`(`name`, `price_now`, `price_old`, `description`, `preview`, `remain`) VALUES ('{$name}', {$priceNow}, $priceOld, $description, $preview, $remain})";
    $db = new DB();
    return $db->query($sql_add);
}

function getGoodsList()
{

}
