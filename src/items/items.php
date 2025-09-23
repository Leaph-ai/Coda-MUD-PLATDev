<?php

namespace App\Game\Inventory;

use Jugid\Staurie\Game\Item_Equippable;

class Knife extends Item_Equippable {

    public function name() : string {
        return 'Knife';
    }

    public function description() : string {
        return 'A sharp knife obtained from Central Cheese';
    }

    public function body_part() : string {
        return 'hand';
    }

    public function satistics() : array {
        return [
            'damage'=>40
        ];
    }
}
