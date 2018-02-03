<?php

namespace GlidedRose;

class GildedRose
{

    private $items;

    function __construct($items)
    {
        $this->items = $items;
    }

    function update_quality()
    {
        foreach ($this->items as $item) {
            if ($item->itemName != 'Aged Brie' and $item->itemName != 'Backstage passes to a TAFKAL80ETC concert') {
                if ($item->ItemQuality > 0) {
                    if ($item->itemName != 'Sulfuras, Hand of Ragnaros') {
                        $item->ItemQuality = $item->ItemQuality - 1;
                    }
                }
            } else {
                if ($item->ItemQuality < 50) {
                    $item->ItemQuality = $item->ItemQuality + 1;
                    if ($item->itemName == 'Backstage passes to a TAFKAL80ETC concert') {
                        if ($item->sell_in < 11) {
                            if ($item->ItemQuality < 50) {
                                $item->ItemQuality = $item->ItemQuality + 1;
                            }
                        }
                        if ($item->sell_in < 6) {
                            if ($item->ItemQuality < 50) {
                                $item->ItemQuality = $item->ItemQuality + 1;
                            }
                        }
                    }
                }
            }

            if ($item->itemName != 'Sulfuras, Hand of Ragnaros') {
                $item->sell_in = $item->sell_in - 1;
            }

            if ($item->sell_in < 0) {
                if ($item->itemName != 'Aged Brie') {
                    if ($item->itemName != 'Backstage passes to a TAFKAL80ETC concert') {
                        if ($item->ItemQuality > 0) {
                            if ($item->itemName != 'Sulfuras, Hand of Ragnaros') {
                                $item->ItemQuality = $item->ItemQuality - 1;
                            }
                        }
                    } else {
                        $item->ItemQuality = $item->ItemQuality - $item->ItemQuality;
                    }
                } else {
                    if ($item->ItemQuality < 50) {
                        $item->ItemQuality = $item->ItemQuality + 1;
                    }
                }
            }
        }
    }
}
