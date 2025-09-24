<?php
namespace App\Game\Npcs;
use Jugid\Staurie\Game\Npc;
use App\Game\Inventory;

class SnakeChild extends Npc {
    public function name() : string { return "Snake Child"; }
    public function description() : string { return "Boolymon's alt"; }
    public function speak() : string|array {
        return [
            "Hey, i'm just a kid, please don't kill me!",
            "I hate you tho you killed my dad back in 2016",
            "But you know, I won't do anything so please don't hurt me",
            "I wont tell anyone you're here, don't worry",
        ];
        if($this->playerHasItem('Knife')) {
            return "Yo that's a knife you got there, eh? Can I have it? No? Okay...";
        }
    }
}