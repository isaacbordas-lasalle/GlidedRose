<?php

namespace GildedRose;

class GildedRose
{

    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    function updateQuality(): void
    {
        foreach ($this->items as $item) {

            switch ($item->name) {
                case 'Aged Brie':
                    $agedbrie = new Items\AgedBrieItem;
                    $agedbrie->updateItemQuality($item);
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    $backstage = new Items\BackstageItem;
                    $backstage->updateItemQuality($item);
                    break;
                case 'Elixir of the Mongoose':
                    $mongoose = new Items\ElixirMongooseItem;
                    $mongoose->updateItemQuality($item);
                    break;
                case '+5 Dexterity Vest':
                    $dexterity = new Items\DexterityVestItem;
                    $dexterity->updateItemQuality($item);
                    break;
                case 'Sulfuras, Hand of Ragnaros':
                    $sulfuras = new Items\SulfurasItem;
                    $sulfuras->updateItemQuality($item);
                    break;
                case (preg_match('/Conjured.*/', $item->name) ? true : false):
                    $sulfuras = new Items\ConjuredItems;
                    $sulfuras->updateItemQuality($item);
                    break;
            }

        }

        return;
    }
}
