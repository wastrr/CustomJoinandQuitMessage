<?php

namespace wastrr;

use pocketmine\{
  Player,
  event\Listener,
  plugin\PluginBase,
  event\player\PlayerJoinEvent,
  event\player\PlayerQuitEvent
};

class Main extends PluginBase implements Listener {
  public function onEnable(): void {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function onJoin(PlayerJoinEvent $event): void {
    $player = $event->getPlayer();
    $name = $player->getName();
    $event->setJoinMessage("§7[§a+§7] §9$name");
  }

  public function onQuit(PlayerQuitEvent $event): void {
    $player = $event->getPlayer();
    $name = $player->getName();
    $event->setQuitMessage("§7[§c-§7] §9$name");
  }
}