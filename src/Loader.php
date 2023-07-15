<?php

declare(strict_types=1);

namespace EzMinecraftPlugins\EzBedwars;

use pocketmine\plugin\PluginBase;
use EzBedwars\commands\BedwarsCommand;
class Loader extends PluginBase {
    final function onEnable(): void
    {
final function onCommand(CommandSender $sender, Command $command, string $value, array $args): bool {
switch ($command->getName()) {
            case "bedwars":
    $this->BedwarsCommand();
}
    }
}
