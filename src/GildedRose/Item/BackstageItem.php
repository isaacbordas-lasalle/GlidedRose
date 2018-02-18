<?php

namespace GildedRose\Item;


class BackstageItem implements ItemInterface
{

    private $item;

    public function __construct(\GildedRose\Item $item)
    {
        $this->item = $item;
    }

    public function updateItemQuality(): void
    {

        if ($this->item->quality < ItemInterface::ITEM_QUALITY_LIMIT) {
            $this->item->quality = $this->item->quality + ItemInterface::ITEM_QUALITY_INTERVAL;
        }

        $this->item->sell_in = $this->item->sell_in - 1;

        if ($this->item->sell_in < 0) {
            $this->item->quality = $this->item->quality - $this->item->quality;
        }

        if ($this->item->sell_in < 11 && $this->item->quality < ItemInterface::ITEM_QUALITY_LIMIT) {

            if ($this->item->sell_in > 0 && $this->item->sell_in < 6) {
                $this->item->quality = $this->item->quality + (3 * ItemInterface::ITEM_QUALITY_INTERVAL);
            } else {
                $this->item->quality = $this->item->quality + (2 * ItemInterface::ITEM_QUALITY_INTERVAL);
            }

        }

        return;

    }

}