<?php

namespace GildedRose\Items;


class ConjuredItems implements ItemInterface
{

    public function UpdateItemQuality($item): void
    {

        if ($item->ItemQuality > 0) {
            $item->ItemQuality = $item->ItemQuality - ItemInterface::CONJURED_ITEM_QUALITY_INTERVAL;
        }

        --$item->sell_in;

        return;

    }

}