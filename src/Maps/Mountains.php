<?php


namespace App\Game\Maps;

use App\Game\Monsters\Argentavis;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Mountains extends Blueprint
{

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0, -1);
    }

    public function name(): string
    {
        return "Deadly Mountains";
    }

    public function description(): string
    {
        return 'You stand among jagged mountain peaks where icy winds howl through narrow passes. The rocks glisten faintly under a pale light, as if the very stone remembers ancient battles. From above, a piercing screech echoes—an Argentravis swoops down, its massive silver-feathered wings blotting out the sky. Its eyes burn with aggression, and every movement carries the promise of a deadly strike. The ground trembles slightly as it lands on a nearby cliff, talons digging deep into the stone, watching you with predatory intent.';
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
        return [new Argentavis()];
    }
}