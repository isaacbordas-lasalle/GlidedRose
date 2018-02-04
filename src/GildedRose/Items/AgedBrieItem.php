<?php

namespace GildedRose\Items;


class AgedBrieItem implements ItemInterface
{

    public function UpdateItemQuality($item): void
    {

        if ($item->ItemQuality < 50) {
            $item->ItemQuality = $item->ItemQuality + ItemInterface::ITEM_QUALITY_INTERVAL;
        }

        --$item->sell_in;

        if ($item->sell_in < 0 && $item->ItemQuality < 50) {
            $item->ItemQuality = $item->ItemQuality + ItemInterface::ITEM_QUALITY_INTERVAL;
        }

        return;

    }

}