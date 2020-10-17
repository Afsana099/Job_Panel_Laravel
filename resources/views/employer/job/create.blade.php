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

<!-- Start POST JOB -->
<div class="job_details_area">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-3">
                <div class="view_left">
                    @include('employer.partials.sidebar')
                </div>
            </div>
            <div class="col-md-9">
                <div class="edit_resume_area">
                    <div class="container">
                        <div class="form">
                            <form action="{{ url('employer/job') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Job Title *</label>
                                    <input type="text" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" required>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Job status </label>
                                    <select name="tags">
                                        <option value="Part Time">
                                            Part Time
                                        </option>
                                        <option value="Full Time">
                                            Full Time
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>End Date (optional)</label>
                                    <input type="date" name="deadline">
                                </div>
                                <h5>Company Details
                                </h5>
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" name="company">
                                </div>
                                <div class="form-group">
                                    <label>Company Website (optional)</label>
                                    <input type="text" name="website">
                                </div>
                                <div class="form-group">
                                    <label>Salary</label>
                                    <input type="text" name="salary">
                                </div>
                                <div class="form-group">
                                    <label>Company Logo</label>
                                    <input type="file" name="logo">
                                </div>
                                <div class="job_apply">
                                    <input type="submit" class="btn btn-primary" value="Post Job">
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- End Edit Resume -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
