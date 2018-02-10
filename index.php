<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function printLineBreak()
{
    return (PHP_SAPI === 'cli' ? PHP_EOL : '<br />');
}

require_once 'vendor/autoload.php';

use \GildedRose\GildedRose;
use \GildedRose\Item;

echo "OMGHAI!" . printLineBreak();

$items = array(
    new Item('+5 Dexterity Vest', 10, 20),
    new Item('Aged Brie', 2, 0),
    new Item('Elixir of the Mongoose', 5, 7),
    new Item('Sulfuras, Hand of Ragnaros', 0, 80),
    new Item('Sulfuras, Hand of Ragnaros', -1, 80),
    new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    new Item('Backstage passes to a TAFKAL80ETC concert', 10, 49),
    new Item('Backstage passes to a TAFKAL80ETC concert', 5, 49),
    // this conjured item does not work properly yet
    new Item('Conjured Mana Cake', 3, 6)
);

$app = new GildedRose($items);

$days = 2;

if (!empty($argv) && count($argv) > 1) {
    $days = (int)$argv[1];
}

for ($i = 0; $i < $days; $i++) {
    echo("-------- day $i --------") . printLineBreak();
    echo("name, sellIn, quality") . printLineBreak();
    foreach ($items as $item) {
        echo $item . printLineBreak();
    }
    echo printLineBreak();
    $app->updateQuality();
}
