<?php

namespace App\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Spear extends Item_Equippable {

    public function name() : string {
        return 'Spear';
    }

    public function description() : string {
        return 'A spear made from a Triceratops horn, can pierce heavy armour';
    }

    public function body_part() : string {
        return 'hand';
    }

    public function statistics() : array {
        return [
            'damage'=>300,
            'pierce'=>20
        ];
    }
}
