<?php

namespace Xinax\LaravelGettext\Commands;

use Illuminate\Console\Command;
use Xinax\LaravelGettext\FileSystem;
use Xinax\LaravelGettext\Config\ConfigManager;

class BaseCommand extends Command
{

    /**
     * Filesystem helper
     * @var \Xinax\LaravelGettext\FileSystem
     */
    protected $filesystem;

    /**
     * Package configuration data
     * @var Array
     */
    protected $configuration;    

    /**
     * Create a new command instance.
     *
     * @return \Xinax\LaravelGettext\Commands\BaseCommand
     */
    public function __construct()
    {
        $configManager = ConfigManager::create();
        $this->filesystem = new FileSystem($configManager->get());
        $this->configuration = $configManager->get();

        parent::__construct();
    }

}
