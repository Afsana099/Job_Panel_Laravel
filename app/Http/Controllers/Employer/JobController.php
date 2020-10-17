<?php

namespace App\Http\Controllers\Employer;

use App\Job;
use App\Apply;
use App\Category;
use App\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{


    public function index()
    {

    }

    public function applied()
    {
        $jobs = DB::table('jobs')
            ->select('jobs.id', 'applies.user_id as applier_id', 'exp_salery', 'users.name as name', 'jobs.title', 'jobs.company', 'applies.created_at')
            ->join('applies', 'job_id', 'jobs.id')
            ->join('users', 'users.id', 'applies.user_id')
            ->where('jobs.user_id', Auth::id())
            ->get();
        return view('employer.job.index', compact('jobs'));
        //return view('employer.job.view');

    }

    public function create()
    {

        $categories = Category::all();
        return view('employer.job.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'logo' => 'image'
        ]);

        $job = $request->all();
        $job['user_id'] = Auth::id();
        $job['status'] = 1;

        if ($request->has('logo')) {
            $job['logo'] = $request->logo->store('/job/logo');
        }

        Job::create($job);

        return redirect()->back()->with('success', 'Job Added Successfully');
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
