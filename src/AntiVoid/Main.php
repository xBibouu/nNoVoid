<?php

namespace AntiVoid;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{

    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onVoid(PlayerMoveEvent $event) {
        $player = $event->getPlayer();
        $pos = $player->getPosition();
        if ($pos->getY() < 0) {
            $player->teleport($player->getWorld()->getSpawnLocation());
        }
    }
}