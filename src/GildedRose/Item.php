<?php

namespace GildedRose;

class Item
{

    public $itemName;
    public $sell_in;
    public $ItemQuality;

    function __construct($itemName, $sell_in, $ItemQuality)
    {
        $this->itemName = $itemName;
        $this->sell_in = $sell_in;
        $this->ItemQuality = $ItemQuality;
    }

    public function __toString()
    {
        return "{$this->itemName}, {$this->sell_in}, {$this->ItemQuality}";
    }

}