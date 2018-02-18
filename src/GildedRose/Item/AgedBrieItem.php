<?php

namespace GildedRose\Item;


class AgedBrieItem implements ItemInterface
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

        if ($this->item->sell_in < 0 && $this->item->quality < ItemInterface::ITEM_QUALITY_LIMIT) {
            $this->item->quality = $this->item->quality + ItemInterface::ITEM_QUALITY_INTERVAL;
        }

        return;

    }

}