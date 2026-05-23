<?php

namespace App\Services;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class WelcomeEmailService
{
    public function send(User $user)
    {
        // fake email sending

        Mail::to($user->email)->send(new WelcomeMail());
    }
}
