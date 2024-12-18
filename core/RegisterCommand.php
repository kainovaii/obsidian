<?php
namespace Core;
use Core\Command\MigrateCommand;
use Core\Http\Service\Container;
use Symfony\Component\Console\Application;

class RegisterCommand {
    public function run()
    {
        $commmandManager = new Application();
        $commmandManager->add(new MigrateCommand());
        // Auto register command
        Container::get()->registerCommand($commmandManager);
        $commmandManager->run();
    }
}