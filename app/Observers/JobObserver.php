<?php

namespace App\Observers;

use App\Enums\JobStatus;
use App\Models\Job;
use JetBrains\PhpStorm\NoReturn;

class JobObserver
{
    /**
     * Handle the Job "creating" event.
     */
    public function creating(Job $job): void
    {
        $job->status = JobStatus::PENDING;
        $job->is_featured = false;

    }

    /**
     * Handle the Job "updated" event.
     */
    public function updated(Job $job): void
    {
        //
    }

    /**
     * Handle the Job "deleted" event.
     */
    public function deleted(Job $job): void
    {
        //
    }

    /**
     * Handle the Job "restored" event.
     */
    public function restored(Job $job): void
    {
        //
    }

    /**
     * Handle the Job "force deleted" event.
     */
    public function forceDeleted(Job $job): void
    {
        //
    }
}
