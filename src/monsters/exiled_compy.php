<?php

namespace App\Game\Monsters;

use Jugid\Staurie\Game\Monster;

class exiled_compy extends Monster {

    public function name() : string {
        return 'Exiled Compy';
    }

    public function description(): string {
        return 'THIS, IS, THE, FRAIL, SURVIVOR!';
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int {
        return 20;
    }

    public function defense(): int {
        return 2;
    }

    public function attack() : int {
        return 5;
    }

    public function experience(): int {
        return 11;
    }

    public function skills(): array {
        return [
            'Charge' => 20,
            'bite' => 20,
        ];
    }
}
