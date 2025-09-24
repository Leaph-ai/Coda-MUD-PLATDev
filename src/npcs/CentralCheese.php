<?php
namespace App\Game\Npcs;
use Jugid\Staurie\Game\Npc;
use App\Game\Inventory;

class CentralCheese extends Npc {
    public function name() : string { return "Central Cheese"; }
    public function description() : string { return "La souris la plus ghetto du métro"; }
    public function speak() : string|array {
        return [
            "Wagwan man tu veux un couteau ?",
        ];
        if($this->playerHasItem('Knife')) {
            return "T'as déjà le tiens man te fous pas de moi";
        } else {
            $this->giveItem(new Inventory\Knife());
            return "Tiens prends ce couteau man, ça te servira c'est chaud ici";
        }
    }
}