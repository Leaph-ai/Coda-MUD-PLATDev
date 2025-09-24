<?php


namespace Jugid\Staurie\Example\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class LondonStreet extends Blueprint
{

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0, 1);
    }

    public function name(): string
    {
        return "London Street";
    }

    public function description(): string
    {
        return "A rain-soaked London street stretches under flickering gas lamps, shadows twisting in the fog. From the alleys, a pack of Cosmic Compies emerges, their star-lit bodies glimmering as they spread out with predatory intent, ready to swarm.";
    }

    public function position(): Position
    {
        return $this->position;
    }

    public function npcs(): array
    {
        return [];
    }

    public function items(): array
    {
        return [];
    }

    public function monsters(): array
    {
        return [];
    }
}