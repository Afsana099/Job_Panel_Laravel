<?php

namespace App\Http\Controllers\Seeker;

use App\Job;
use App\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{

    public function index()
    {
    //     $categories = Category::all();
    //     $jobs = Job::all();
    //     return view('front.job.index', compact('categories','jobs'));
    }
    public function applied()
    {
        $jobs = Job::join('applies', 'job_id', 'jobs.id')->where('jobs.user_id', Auth::id())->get('jobs.id', 'applies.user_id as apllier', 'exp_salery');
        return $jobs;
        // return Apply::find($jobs);
        return view('seeker.job.index', compact('jobs'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
       //
    }


    public function show(Job $job)
    {
        // $jobs = Category::find($job->category->id)->jobs->skip($job->id);
        // return view('front.job.show', compact('job', 'jobs'));
    }


    public function edit(Job $job)
    {
        //
    }


    public function update(Request $request, Job $job)
    {
        //
    }


    public function destroy(Job $job)
    {
        //
    }
}
