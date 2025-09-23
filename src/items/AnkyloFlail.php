<?php

namespace App\Game\Inventory;

use Jugid\Staurie\Game\Item_Equippable;

class AnkyloFlail extends Item_Equippable {

    public function name() : string {
        return 'AnkyloFlail';
    }

    public function description() : string {
        return 'A huge flail made from an ankylosaur tail, hit hard';
    }

    public function statistics() : array {
        return [
            'damage'=>300
        ];
    }
}