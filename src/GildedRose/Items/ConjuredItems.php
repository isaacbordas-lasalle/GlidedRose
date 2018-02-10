<?php

namespace GildedRose\Items;


class ConjuredItems implements ItemInterface
{

    public function updateItemQuality($item): void
    {

        if ($item->quality > 0) {
            $item->quality = $item->quality - ItemInterface::CONJURED_ITEM_QUALITY_INTERVAL;
        }

        $item->sell_in = $item->sell_in - 1;

        return;

    }

}