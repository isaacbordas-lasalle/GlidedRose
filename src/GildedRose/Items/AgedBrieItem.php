<?php

namespace GildedRose\Items;


class AgedBrieItem implements ItemInterface
{

    public function updateItemQuality($item): void
    {

        if ($item->quality < 50) {
            $item->quality = $item->quality + ItemInterface::ITEM_QUALITY_INTERVAL;
        }

        $item->sell_in = $item->sell_in - 1;

        if ($item->sell_in < 0 && $item->quality < 50) {
            $item->quality = $item->quality + ItemInterface::ITEM_QUALITY_INTERVAL;
        }

        return;

    }

}