<?php

namespace App\Game\Inventory;

use Jugid\Staurie\Game\Item_Equippable;

class BasicGun extends Item_Equippable {

    public function name() : string {
        return 'BasicGun';
    }

    public function description() : string {
        return 'A small gun, better than a knife but need ammunitions';
    }

    public function statistics() : array {
        return  [
            'damage'=>120
        ];
    }

}