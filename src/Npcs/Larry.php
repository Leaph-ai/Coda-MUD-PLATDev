<?php
namespace App\Game\Npcs;
use Jugid\Staurie\Game\Npc;
use App\Game\Inventory;

class Larry extends Npc {
    public function name() : string { return "Larry"; }
    public function description() : string { return "From Rungis"; }
    public function speak() : string|array {
        return [
            "Hello there, I am Larry, the vendor of this market.",
            "I have been here for many years, selling the freshest produce.",
            "If you need anything, just let me know.",
            "But be quick, the market closes soon and I have to pack up!",
        ];
    }
}