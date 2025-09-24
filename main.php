<?php

require_once __DIR__.'/vendor/autoload.php';

use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Map\Map;
use App\Game\Maps;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Component\Inventory\Inventory;

use Mon\Name\Space;
use Jugid\Staurie\Staurie;

$staurie = new Staurie('My game');

$staurie->register([
    Console::class, 
    PrettyPrinter::class,
]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text'=> 'Welcome to this awesome test adventure',
    'labels'=> [
        'new_game' => 'Enter the world',
        'quit'=> 'Exit game',
    ]
]);

// $character = $container->registerComponent(MainCharacter::class);
// $character->configuration([
//     'ask_name' => false,
//     'ask_gender' => false,
//     'character_has_name' => true,
//     'character_has_gender' => true,
// ]);

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory'=>__DIR__.'/src/Maps',
    'namespace'=>'App\\Game\\Maps',
    'navigation'=>true,
    'map_enable'=>true,
    'compass_enable'=>true,
    'x_start'         => 0,
    'y_start'         => 0
]);

$inventory = $container->registerComponent(Inventory::class);
$inventory->configuration([
    'max_items'=>10,
    'max_weight'=>1000
]);

$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'text'=>[
        'This is an introduction to test the introduction component',
        'You can use it multiline by using an array in configuration'
    ],
    'title'=>'Chapter 1 : The new game',
    'scrolling'=>false
]);

$staurie->run();