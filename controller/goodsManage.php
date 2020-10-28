<?php
/**
 * 商品操作，包含添加商品，删除商品，修改商品等...
 */

require_once '../class/DB.php';
require_once '../class/Goods.php';


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

/**
 * 获取全部商品的列表
 * @return ArrayObject Goods对象的列表
 */
function getGoodsList()
{
    $sql = "SELECT `gid`, `name`, `price_now`, `price_old`, `description`, `preview`, `remain` FROM `goods`;";
    $db = new DB();
    $re = $db->query($sql);
    $goodsList = new ArrayObject();
    while (($row = $re->fetch_assoc()) != null) {
        $goods = new Goods(
            $row['gid'],
            $row['name'],
            $row['price_now'],
            $row['price_old'],
            $row['description'],
            $row['preview'],
            $row['remain']
        );
        $goodsList->append($goods);
    }
    return $goodsList;
}

