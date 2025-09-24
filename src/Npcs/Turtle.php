<?php
namespace App\Game\Npcs;
use Jugid\Staurie\Game\Npc;
use App\Game\Inventory;

class CentralCheese extends Npc {
    public function name() : string { return "Wise Turtle"; }
    public function description() : string { return "The wise turtle that lives in the swamp"; }
    public function speak() : string|array {
        return [
            "Hello there, young snake.",
            "I have lived in this swamp for many years, and I have seen many things.",
            "If you seek wisdom, you must be patient and listen.",
            "The world is full of dangers, but also of opportunities.",
            "Remember to always stay true to yourself and your values.",
            "Now, go forth and explore the world with an open heart and mind.",
        ];
    }
}