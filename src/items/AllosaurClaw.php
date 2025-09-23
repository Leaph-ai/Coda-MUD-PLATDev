<?php

namespace App\Game\Inventory;

use Jugid\Staurie\Game\Item_Equippable;

class AllosaurClaw extends Item_Equippable {

    public function name() : string {
        return 'AllosaurClaw';
    }

    public function description() : string {
        return 'This Allosaur won\'t be clawing at anything anymore, still sharp';
    }

    public function statistics() : array {
        return [
            'damage'=>350,
            'pierce'=>30
        ];
    }
}