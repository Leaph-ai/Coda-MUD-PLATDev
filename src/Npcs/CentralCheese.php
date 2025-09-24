<?php
namespace App\Game\Npcs;
use Jugid\Staurie\Game\Npc;
use App\Game\Items;

class CentralCheese extends Npc {
    public function name() : string { return "CentralCheese"; }
    public function description() : string { return "Gangsta mouse"; }
    public function speak() : string|array {
        return [
            "Wagwan fam what's good ?",
            "Oh dont look at me like that bro i'm just a mouse",
            "I know you're a snake but you may want to spare me, I got sum for you",
            "You want a knife maybe it's hot out there",
        ];
    }
}