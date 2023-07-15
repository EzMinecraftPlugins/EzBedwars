<?php

declare(strict_types=1);

namespace EzMinecraftPlugins\EzBedwars;

use pocketmine\plugin\PluginBase;
use EzBedwars\commands\BedwarsCommand;
class Loader extends PluginBase {
    final function onEnable(): void
    {
final function onCommand(CommandSender $sender, Command $command, string $value, array $args): bool {
if (isset($args[0])) {
            switch ($args[0]) {
                case 'setup':
                if ($sender->hasPermission("EzBedwars.setup"){
                    
return true;
                    }
                    else {
$sender->sendMessage("Error: No Perm");
                    return false;
}  
                case 'setting':
                case 'settings':
                case 'edit':
                
                    break;
                    
                default:
                    $sender->sendMessage("§cUsage: /bedwars (Subcommand)");
                    break;
            }
        }
    }
}
