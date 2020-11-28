<?php

namespace MacFJA\Test;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Symfony\Component\Process\Process;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $process = new Process(['echo', 'There are no issues with dependencies']);
        $io->warning('The version 5.1 of Symfony\Component\Process\Process allow an array as the content of the command to execute.');
        $io->warning('But the old version ship within Composer (for PHP 5.3 compatibility) expect a string.');
        $io->warning('The plugin will fail if the version used is the one from Composer!');
        try {
            $process->run();
            $io->write('<info>'.$process->getOutput().'</info>');
        } catch (\Exception $exception) {
            $io->critical('The wrong dependency have been used!');
            exit(1);
        }
    }
    public function deactivate(Composer $composer, IOInterface $io) {}
    public function uninstall(Composer $composer, IOInterface $io) {}
}