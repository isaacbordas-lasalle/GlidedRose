<?php

namespace GildedRose\Items;


class DexterityVestItem implements ItemInterface
{

    public function updateItemQuality($item): void
    {

        if ($item->quality > 0) {
            $item->quality = $item->quality - ItemInterface::ITEM_QUALITY_INTERVAL;
        }

        $item->sell_in = $item->sell_in - 1;

        return;

    }

}