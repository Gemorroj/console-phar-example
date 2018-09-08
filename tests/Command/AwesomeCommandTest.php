<?php

namespace ConsolePharExample\Tests\Command;

use ConsolePharExample\Command\AwesomeCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class AwesomeCommandTest extends TestCase
{
    public function testExecute()
    {
        $application = new Application();
        $application->add(new AwesomeCommand());
        $command = $application->find('cpe:awesome');

        $commandTester = new CommandTester($command);
        $commandTester->setInputs(['no']);

        $commandTester->execute([
            'command' => $command->getName(),
        ]);

        $output = $commandTester->getDisplay();
        $this->assertContains('You are wrong!', $output);
    }
}
