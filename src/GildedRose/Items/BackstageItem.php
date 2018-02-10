<?php

namespace GildedRose\Items;


class BackstageItem implements ItemInterface
{

    public function updateItemQuality($item): void
    {

        if ($item->quality < 50) {
            $item->quality = $item->quality + ItemInterface::ITEM_QUALITY_INTERVAL;
        }

        $item->sell_in = $item->sell_in - 1;

        if ($item->sell_in < 0) {
            $item->quality = $item->quality - $item->quality;
        }

        if ($item->sell_in < 11 && $item->quality < 50) {

            if ($item->sell_in > 0 && $item->sell_in < 6) {
                $item->quality = $item->quality + (3 * ItemInterface::ITEM_QUALITY_INTERVAL);
            } else {
                $item->quality = $item->quality + (2 * ItemInterface::ITEM_QUALITY_INTERVAL);
            }

        }

        return;

    }

}