<?php

Namespace; Heal_plugin

use Pocketmine\Plugin\PluginBase

use Pocketmine\command\Command

use Pocketmine\command\CommandSender

class main extends PluginBase{

Public function onEnable(){

  $this->getserver()->getLogger()->info("Heal plugin is enable");
 
Public function onDisable(){

   $this->getserver()->getLogger()->info("Heal plugin is disable");
   

         public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){

 case 'heal':
                      $sender->setHealth(20);
 break;
           case 'message':
 $this->getServer()->broadcastMassage($args[->])
     break;
            case 'cre1':
     $player = $sender->getPlayer();
                                        $player->setGamemode(1);
              break; 
            case 'sur0':
    $player = $sender->getPlayer();
               $player->setGamemode(0);
   break;
            case 'adv3':
     $player = $sender->getPlayer();
$player->setGamemode(3);
      


