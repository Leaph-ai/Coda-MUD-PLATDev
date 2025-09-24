<?php

namespace App\Game\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Swamp extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,0);
    }

    public function name() : string {
        return "Swamp";
    }

    public function description() : string {
        return 'You find yourself in a murky swamp, where twisted trees loom over stagnant waters. The air is thick with humidity and the scent of decay. In the distance, the croak of frogs and the buzz of insects create an eerie symphony. Suddenly, a massive Lystrosaurus emerges from the water, its tusked snout breaking the surface as it surveys its surroundings with beady eyes. Its leathery skin glistens with moisture, and it lets out a low, rumbling growl that reverberates through the swamp, warning you to stay away from its territory.';
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