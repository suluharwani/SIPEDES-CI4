<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use CodeIgniter\Database\MigrationRunner;

class TravelMigrate extends BaseCommand
{
    protected $group       = 'Travel';
    protected $name        = 'travel:migrate';
    protected $description = 'Runs the travel template migrations against its isolated database.';

    public function run(array $params)
    {
        $runner = new MigrationRunner(config('Migrations'), 'travel');
        $runner->setNamespace('TravelMigrations');

        if (! $runner->latest('travel')) {
            CLI::error('Travel migration did not complete.');
            return EXIT_ERROR;
        }

        foreach ($runner->getCliMessages() as $message) {
            CLI::write($message);
        }

        CLI::write('Travel database migrations complete.', 'green');
        return EXIT_SUCCESS;
    }
}
