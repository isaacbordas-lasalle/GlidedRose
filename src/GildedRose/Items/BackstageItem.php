<?php

namespace GildedRose\Items;


class BackstageItem implements ItemInterface
{

    public function UpdateItemQuality($item): void
    {

        if ($item->ItemQuality < 50) {
            $item->ItemQuality = $item->ItemQuality + ItemInterface::ITEM_QUALITY_INTERVAL;
        }

        --$item->sell_in;

        if ($item->sell_in < 0) {
            $item->ItemQuality = $item->ItemQuality - $item->ItemQuality;
        }

        if ($item->sell_in < 11 && $item->ItemQuality < 50) {

            if ($item->sell_in > 0 && $item->sell_in < 6) {
                $item->ItemQuality = $item->ItemQuality + (3 * ItemInterface::ITEM_QUALITY_INTERVAL);
            } else {
                $item->ItemQuality = $item->ItemQuality + (2 * ItemInterface::ITEM_QUALITY_INTERVAL);
            }

        }

        return;

    }

}