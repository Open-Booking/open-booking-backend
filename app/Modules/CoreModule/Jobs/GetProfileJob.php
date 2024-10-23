<?php

namespace App\Modules\CoreModule\Jobs;

use App\Models\User;
use App\Next\Core\Job;
use Illuminate\Support\Facades\Auth;

class GetProfileJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Retrieve the authenticated user data
        $user = User::with('role')->findOrFail(Auth::id());

        return $user;
    }
}