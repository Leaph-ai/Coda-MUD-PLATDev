<?php

namespace App\Game\Inventory;

use Jugid\Staurie\Game\Item_Equippable;

class CompyFang extends Item_Equippable {

    public function name() : string {
        return 'CompyFang';
    }

    public function description() : string {
        return 'A fang from the compy you killed, there\'s still blood on it';
    }

    public function statistics() : array {
        return [
            'damage'=>80
        ];
    }
}
