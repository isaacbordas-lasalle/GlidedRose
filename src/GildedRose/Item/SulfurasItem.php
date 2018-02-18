<?php

namespace GildedRose\Item;


class SulfurasItem implements ItemInterface
{

    private $item;

    public function __construct(\GildedRose\Item $item)
    {
        $this->item = $item;
    }

    public function updateItemQuality(): void
    {

        return;

    }

}