<?php
namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'hello',
    hidden: false,
)]
class HelloCommand extends Command
{
    protected function configure(): void
    {
        $this->addArgument('bool', InputArgument::REQUIRED, 'bool');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('bool');

        
        if ($arg1 === 'yes')
        {
            $io->success('Hello');
        } else {
            $io->error('Not hello');
        }

        return COMMAND::SUCCESS;
    }
}