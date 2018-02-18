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
                    $agedbrie = new Item\AgedBrieItem($item);
                    $agedbrie->updateItemQuality();
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    $backstage = new Item\BackstageItem($item);
                    $backstage->updateItemQuality();
                    break;
                case 'Elixir of the Mongoose':
                    $mongoose = new Item\ElixirMongooseItem($item);
                    $mongoose->updateItemQuality();
                    break;
                case '+5 Dexterity Vest':
                    $dexterity = new Item\DexterityVestItem($item);
                    $dexterity->updateItemQuality();
                    break;
                case 'Sulfuras, Hand of Ragnaros':
                    $sulfuras = new Item\SulfurasItem($item);
                    $sulfuras->updateItemQuality();
                    break;
                case (preg_match('/Conjured.*/', $item->name) ? true : false):
                    $sulfuras = new Item\ConjuredItem($item);
                    $sulfuras->updateItemQuality();
                    break;
            }

        }

        return;
    }
}
