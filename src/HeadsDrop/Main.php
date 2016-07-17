<?php

namespace HeadsDrop;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\utils\TextFormat as TF;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener {

    public function onEnable(){
        $this->getLogger()->info("HeadsDrop enabled v2");
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function onDeath(PlayerDeathEvent $event) {
        $player = $event->getEntity();
        $cause = $event->getEntity()->getLastDamageCause();
        if($cause instanceof EntityDamageByEntityEvent) {
            $killer = $cause->getDamager();
            if($killer instanceof Player) {
                $head = rand(1,2);
                switch($head){
                    case 1:
                        break;
                        break;
                        break;
                        break;
                        
                        case 2:
                            $killer->getInventory()->addItem(144);
                            $killer->sendTip(TF::BLUE."Head dropped");
                            break;
                }
            }
        }
    }
}
