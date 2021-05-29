<?php

namespace App\Console\Commands;

use App\Models\Account;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateSuperUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'superuser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a super user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = $this->ask('Username');
        $email = $this->ask('Email');
        $password = $this->secret('Password');
        $password_confirmation = $this->secret('Confirm Password');

        $this->createSuperUser($user, $email, $password, $password_confirmation);
    }

    public function createSuperUser(string $user, string $email, string $password, string $password_confirmation)
    {
        if ($password_confirmation != $password) {
            $this->error('Passwords do not match.');
            return;
        }

        $inputs = [
            'name' => $user,
            'password' => Hash::make($password),
            'email' => $email,
            'type' => 5
        ];

        try {
            Account::create($inputs);
        } catch (\Exception $exception) {
            $this->error($exception->getMessage());
        }

        $this->info("Superuser created successfully.");
    }
}
