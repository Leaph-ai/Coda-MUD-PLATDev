<?php

namespace App\Game\Inventory;

use Jugid\Staurie\Game\Item_Equippable;

class CompySkull extends Item_Equippable {

    public function name() : string {
        return 'CompySkull';
    }

    public function description() : string {
        return 'Are you more of a dinosaur than a snake if you wear this ?';
    }

        public function body_part() : string {
        return 'head';
    }

    public function statistics() : array {
        return [
            'defence'=>50
        ];
    }
}
