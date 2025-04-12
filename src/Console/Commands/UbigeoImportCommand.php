<?php

namespace Holacliente\LaravelUbigeo\Console\Commands;

use Illuminate\Console\Command;
use Holacliente\LaravelUbigeo\Models\Ubigeo; // Si tienes un modelo


class UbigeoImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ubigeo:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Ubigeo data into the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting Ubigeo data import...');

        // Add your logic to import Ubigeo data here
        // Example: Reading a file and inserting data into the database

        $this->info('Ubigeo data import completed successfully.');
        return Command::SUCCESS;
    }
}