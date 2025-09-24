<?php
namespace App\Game\Npcs;
use Jugid\Staurie\Game\Npc;
use App\Game\Inventory;

class MoutainBoar extends Npc {
    public function name() : string { return "Moutain Boar"; }
    public function description() : string { return "A large and powerful boar that roams the mountains."; }
    public function speak() : string|array {
        return [
            "Grunt... Grunt...",
            "I hope obelix won't catch me today...",
            "The mountains are dangerous, be careful if you venture here.",
            "I may look tough, but I'm just trying to survive out here.",
        ];
    }
}