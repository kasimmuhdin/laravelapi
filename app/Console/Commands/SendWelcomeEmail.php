<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Services\WelcomeEmailService;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;


class SendWelcomeEmail extends Command
{
    /**
     * Execute the console command.
     */
    protected $signature = 'mail:welcome {user}';

    protected $description = 'Send welcome email';
    public function handle(WelcomeEmailService $welcome)
    {
        $userId = $this->argument('user');
        $user = User::find($userId);

        if (!$user) {
            $this->error('User Not Found');
            return;
        }

        $welcome->send($user);
        $this->info("Welcom Email Successfuly sent");
    }
}
