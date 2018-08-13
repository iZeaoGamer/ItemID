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
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\item\Item;
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

    /**
     * @param PlayerInteractEvent $e
     */
    public function onheld(PlayerItemHeldEvent $e){
        $playername = $e->getPlayer();
        $item = $e->getBlock();
        if(PlayerInteractEvent::PHYSICAL){
            $playername = $e->getPlayer();
            $item = $e->getBlock()->getName();
            /** @var Item $item */
            $e->getPlayer()->setMessage('§b§o§l•[Item-Name] -> '.$item.'•');
        }
    }
}
