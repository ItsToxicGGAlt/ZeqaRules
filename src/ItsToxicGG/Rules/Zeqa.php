<?php

namespace ItsToxicGG\Rules;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use ItsToxicGG\Rules\Command\RulesCommand;

class Zeqa extends PluginBase{
  
  public function onEnable(): void{
    $this->getLogger()->Info("Enabled");
  }
}
