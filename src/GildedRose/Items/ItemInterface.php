<?php

namespace GildedRose\Items;


interface ItemInterface
{

    const ITEM_QUALITY_INTERVAL = 1;
    const CONJURED_ITEM_QUALITY_INTERVAL = 2;

    public function UpdateItemQuality($item): void;

}