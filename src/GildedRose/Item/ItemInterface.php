<?php

namespace GildedRose\Item;


interface ItemInterface
{

    const ITEM_QUALITY_INTERVAL = 1;
    const CONJURED_ITEM_QUALITY_INTERVAL = 2;
    const ITEM_QUALITY_LIMIT = 50;

    public function updateItemQuality(): void;

}