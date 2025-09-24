<?php

namespace App\Game\Inventory;

use Jugid\Staurie\Game\Item_Equippable;

class AnkylosaurShell extends Item_Equippable {

    public function name() : string {
        return 'AnkylosaurShell';
    }

    public function description() : string {
        return 'It\'s big, But it\'s hard';
    }

    public function body_part() : string {
        return 'chest';
    }

    public function statistics() : array {
        return [
            'defence'=>150
        ];
    }
}