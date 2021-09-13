<?php

namespace ShanevAPI;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\level\sound\ExplodeSound;

class Main extends PluginBase {
    public function onEnable() {
        $this->getLogger()->info("Плагин был написан человеком под именем: @shanevdev");
    }

    public function onCommand(CommandSender $s, Command $cmd, $label, array $args) {
        switch($cmd->getName()) {
            case "start":
                $s->sendMessage("Тебе выдан стартовый набор удачного использования.");
                $kirasa = new Item($311, 0, 1);
                $kirasa->setCustomName("Кираса: ". $p->getName . " игрока");
                $kirasa->getPlayer()->addItem($kirasa);
                $kirasa->getEnchantment(Enchantment::getEnchantment(0)->setLevel(1));
                $s->getLevel()->addSound(new ExplodeSound($s));
        }
        break;

        switch($cmd->getName()) {
            case "explodesound-test":
                $s->sendMessage("Test message");
                $s->getLevel()->addSound(new ExplodeSound($s));
            }
        }
    }
}