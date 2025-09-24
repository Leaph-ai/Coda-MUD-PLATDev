<?php

namespace App\Game\Inventory;

use Jugid\Staurie\Game\Item_Equippable;

class test extends Item_Equippable {

    public function name() : string {
        return '';
    }

    public function description() : string {
        return '';
    }

    public function body_part() : string {
        return 'hand';
    }

    public function statistics() : array {
        return [
            'damage'=>0
        ];
    }
}

// Damage order
//knife -> CompyTooth -> BasicGun -> AnkyloFlail -> Spear -> AllosaurClaw