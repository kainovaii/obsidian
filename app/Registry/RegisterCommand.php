<?php
namespace App\Registry;
use Core\Command\MigrateCommand;
use Symfony\Component\Console\Application;

class RegisterCommand {
    public function run()
    {
        $commmandManager = new Application();
        $commmandManager->add(new MigrateCommand());
        $commmandManager->run();
    }
}