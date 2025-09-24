<?php

namespace App\Game\Items;

use Jugid\Staurie\Game\Item_Equippable;

class BulletProofVest extends Item_Equippable {

    public function name() : string {
        return 'BulletProofVest';
    }

    public function description() : string {
        return 'What will a bullet proof vest do against COSMIC DINOSAURS!';
    }

    public function body_part() : string {
        return 'chest';
    }

    public function statistics() : array {
        return [
            'defense'=>10
        ];
    }
}
