<?php

namespace ladik;


use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\utils\TextFormat as L;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerJoinEvent;


class main extends PluginBase implements Listener{
    
      public function onEnable() {
          $this->getServer()->getLogger()->info(self::getPrefix()."Â§aAktivovan!");
          $this->getServer()->getPluginManager()->registerEvents($this, $this);
     }
      
      public static function getPrefix(){
        return "Â§lÂ§4[Â§rÂ§6ServerJoinMessageÂ§lÂ§4] Â§rÂ§f";
    }     
     public function onJoin(PlayerJoinEvent $event){
      	$player = $event->getPlayer();
		$name = $player->getName();
     $player->sendPopup("Â§1 Welcome to server Â§4 $name");
     $player->sendMessage("Â§a---------------------- ");
     $player->sendMessage("Â§e Hello ");
     $player->sendMessage("Â§e Enjoy the game Â§4$name");
     $player->sendMessage("Â§a----------------------");
    }             
 } 
