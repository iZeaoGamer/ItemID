<?php
/// _______  _______  ___   ___   __    _  ___   ____   _   ___
//|       ||   _   ||   | |   | |  |  | ||   | |    | | | |   |
//|  _____||  |_|  ||   | |   | |   |_| ||   |  |   | | |_|   |
//| |_____ |       ||   | |   | |       ||   |  |   | |       |
//|_____  ||       ||   | |   | |  _    ||   |  |   | |___    |
// _____| ||   _   ||   | |   | | | |   ||   |  |   |     |   |
//|_______||__| |__||___| |___| |_|  |__||___|  |___|     |___|
// DONORS LIST: None.
//
namespace saiini\tv;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;

/**
 * Class Main
 * @package saiini\tv
 */
class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onint(PlayerInteractEvent $e){
        $e->getBlock();
        if(PlayerInteractEvent::RIGHT_CLICK_BLOCK){
            $playername = $e->getPlayer();
            $item= $e->getBlock();
            $e->getPlayer()->sendMessage("§1§o[Item] => ",$item, $playername);
        }
    }
}
