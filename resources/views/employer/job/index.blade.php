@extends('layouts.admin')

@section('content')
<!-- Start Header Banner Area -->
<div class="jobs_banner_area">
    <div class="container">
        <div class="jobs_banner_content width flex">
        </div>
    </div>
</div>
<!-- End Header Banner Area -->
<!-- Start Job Details Area -->
<div class="job_details_area">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-3">
                <div class="view_left">
                    @include('employer.partials.sidebar')
                </div>
            </div>
        <div class="col-md-9">
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="view_right">
                    <div class="profile_des">
                        <h4> Candidates Applied Jobs ({{ $jobs->count() }})</h4>
                        <div class="single_profile_box">
                            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Expected Salary</th>
                                        <th scope="col">Applied Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=0)
                                    @foreach ($jobs as $job)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $job->name }}</td>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->company }}</td>
                                        <td>{{ $job->exp_salery }}</td>
                                        <td>{{ $job->created_at }}
                                        </td>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!-- End Job Details Area -->
@endsection
