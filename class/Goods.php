<?php
/**
 * Class Goods
 * 商品类，可存储商品的全部信息
 */


class Goods
{
    private $gid;
    private $name;
    private $priceNow;
    private $priceOld;
    private $description;
    private $preview;
    private $remain;


    /**
     * Goods constructor.
     * @param string $name 商品名字
     * @param float $priceNow 当前价格
     * @param float $priceOld 原价
     * @param string $description 商品描述
     * @param string $preview 预览图路径
     * @param int $remain 剩余数量
     */
    public function __construct($name, $priceNow, $priceOld, $description, $preview, $remain)
    {
        $this->name = $name;
        $this->priceNow = $priceNow;
        $this->priceOld = $priceOld;
        $this->description = $description;
        $this->preview = $preview;
        $this->remain = $remain;
    }

    /**
     * 获取商品唯一标识符
     * @return int
     */
    public function getGid(): int
    {
        return $this->gid;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPriceNow(): float
    {
        return $this->priceNow;
    }

    /**
     * @param float $priceNow
     */
    public function setPriceNow(float $priceNow): void
    {
        $this->priceNow = $priceNow;
    }

    /**
     * @return float
     */
    public function getPriceOld(): float
    {
        return $this->priceOld;
    }

    /**
     * @param float $priceOld
     */
    public function setPriceOld(float $priceOld): void
    {
        $this->priceOld = $priceOld;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPreview(): string
    {
        return $this->preview;
    }

    /**
     * @param string $preview
     */
    public function setPreview(string $preview): void
    {
        $this->preview = $preview;
    }

    /**
     * @return int
     */
    public function getRemain(): int
    {
        return $this->remain;
    }

    /**
     * @param int $remain
     */
    public function setRemain(int $remain): void
    {
        $this->remain = $remain;
    }
}