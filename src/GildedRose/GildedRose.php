<?php

namespace GildedRose;

class GildedRose
{

    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    function UpdateQuality()
    {
        foreach ($this->items as $item) {

            switch ($item->itemName) {
                case 'Aged Brie':
                    $agedbrie = new Items\AgedBrieItem;
                    $agedbrie->UpdateItemQuality($item);
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    $backstage = new Items\BackstageItem;
                    $backstage->UpdateItemQuality($item);
                    break;
                case 'Elixir of the Mongoose':
                    $mongoose = new Items\ElixirMongooseItem;
                    $mongoose->UpdateItemQuality($item);
                    break;
                case '+5 Dexterity Vest':
                    $dexterity = new Items\DexterityVestItem;
                    $dexterity->UpdateItemQuality($item);
                    break;
                case 'Sulfuras, Hand of Ragnaros':
                    $sulfuras = new Items\SulfurasItem;
                    $sulfuras->UpdateItemQuality($item);
                    break;
                case (preg_match('/Conjured.*/', $item->itemName) ? true : false):
                    $sulfuras = new Items\ConjuredItems;
                    $sulfuras->UpdateItemQuality($item);
                    break;
            }

        }

        return;
    }
}
