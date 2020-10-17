<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use App\Apply;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function applied()
    {
        $jobs = DB::table('jobs')
            ->select('jobs.id', 'applies.user_id as applier_id', 'exp_salery', 'users.name as name', 'jobs.title', 'jobs.company', 'applies.created_at')
            ->join('applies', 'job_id', 'jobs.id')
            ->join('users', 'users.id', 'applies.user_id')
            ->where('jobs.user_id', Auth::id())
            ->get();
        // return $jobs;
        return view('admin.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.job.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
