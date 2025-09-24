<?php

namespace App\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Rungis extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(-1,0);
    }

    public function name() : string {
        return "Marché de Rungis";
    }

    public function description() : string {
        return 'Amid the endless stalls and towering crates of the Rungis market, the scent of blood and fresh meat hangs heavy in the air. Suddenly, a massive Giganotosaurus looms above the chaos, its jaws dripping and eyes blazing, ready to crush anything that dares to move.';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [];
    }
}