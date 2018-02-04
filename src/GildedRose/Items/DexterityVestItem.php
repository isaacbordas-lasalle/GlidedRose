<?php

namespace GildedRose\Items;


class DexterityVestItem implements ItemInterface
{

    public function UpdateItemQuality($item): void
    {

        if ($item->ItemQuality > 0) {
            $item->ItemQuality = $item->ItemQuality - ItemInterface::ITEM_QUALITY_INTERVAL;
        }

        --$item->sell_in;

        return;

    }

}