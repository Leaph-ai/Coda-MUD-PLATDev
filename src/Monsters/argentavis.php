<?php

namespace App\Game\Monsters;

use Jugid\Staurie\Game\Monster;

class argentavis extends Monster {

    public function name() : string {
        return 'Compy Gang';
    }

    public function description(): string {
        return 'THIS, IS, THE, SKY, PREDATOR!';
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
            'Talons Strike' => 20,
            'Dive Bomb' => 30,
        ];
    }
}
