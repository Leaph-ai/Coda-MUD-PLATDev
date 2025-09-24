<?php

namespace Jugid\Staurie\Example\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class SpawnMap extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,0);
    }

    public function name() : string {
        return "London's Underground";
    }

    public function description() : string {
        return 'In the wreckage of a destroyed London underground station, a train car still burns with flickering orange flames licking at twisted metal. Smoke curls upward, mixing with the distant wail of sirens. Amid the chaos, a streetwise mouse—dressed like a London thug with a hoodie, sneakers, and a cocky grin—leans casually against a scorched wall, unfazed by the destruction. In the distance, almost hidden in the haze, a tiny cosmic Compsognathus dinosaur shimmers faintly, its otherworldly glow contrasting with the grim urban ruin.';
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