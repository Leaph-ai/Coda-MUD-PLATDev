<?php

namespace App\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class AnkyloFlail extends Item_Equippable {

    public function name() : string {
        return 'AnkyloFlail';
    }

    public function description() : string {
        return 'A huge flail made from an ankylosaur tail, hit hard';
    }

    public function body_part() : string {
        return 'hand';
    }

    public function statistics() : array {
        return [
            'damage'=>300
        ];
    }
}