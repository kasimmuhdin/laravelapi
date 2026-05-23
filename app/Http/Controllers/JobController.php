<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class JobController extends Controller
{
    // GET /jobs
    public function index()
    {
        $lates = Job::with('employer')
            ->latest();
        return view('job.index', [
            'jobs' => $lates
                ->paginate(15),
        ]);
    }

    // GET /job/create
    public function create()
    {
        return view('job.create');
    }

    // GET /job/{job}
    public function show(Job $job)
    {
        return view('job.show', [
            'job' => $job,
        ]);
    }

    // POST /jobs
    public function store(StoreJobRequest $request)
    {
        $job = Job::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'employer_id' => 1
        ]);

        Mail::to($job->employer->user)->queue(
            new JobPosted($job),
        );

        return redirect('/jobs')
            ->with('success', 'Job created successfully!');
    }

    // GET /job/{job}/edit
    public function edit(Job $job)
    {



        return view('job.edit', [
            'job' => $job,
        ]);
    }

    // PATCH /job/{job}
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => 'required|string',
            'salary' => 'required|string'
        ]);

        $job->update([
            'title' => $request->title,
            'salary' => $request->salary,
        ]);

        return redirect('/job/' . $job->id);
    }

    // DELETE /job/{job}
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }
}
