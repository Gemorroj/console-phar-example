<?php

namespace ConsolePharExample\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class AwesomeCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('cpe:awesome')
            ->setDescription('Test awesome command.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $answer = $io->choice('This is awesome app?', ['yes', 'no'], 'yes');
        if ('yes' === $answer) {
            $io->success('Yeah! This is awesome app! 🤗');
        } else {
            $io->error('You are wrong! 👿');
        }
    }
}
