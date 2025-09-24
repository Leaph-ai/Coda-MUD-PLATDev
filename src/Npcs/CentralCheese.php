<?php
namespace App\Game\Npcs;
use Jugid\Staurie\Game\Npc;
use App\Game\Inventory;

class CentralCheese extends Npc {
    public function name() : string { return "Central Cheese"; }
    public function description() : string { return "Gangsta mouse"; }
    public function speak() : string|array {
        return [
            "Wagwan fam what's good ?",
            "Oh dont look at me like that bro i'm just a mouse",
            "I know you're a snake but you may want to spare me, I got sum for you",
            "You want a knife maybe it's hot out there",
        ];
        if($this->playerHasItem('Knife')) {
            return "Yo you already got one i thought we were cool now go away";
        } else {
            $this->giveItem(new Inventory\Knife());
            return "Here take that, it's real sharp, be careful though";
        }
    }
}