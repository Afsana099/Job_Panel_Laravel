@extends('layouts.admin')

@section('content')
<!-- Start Header Banner Area -->
<div class="jobs_banner_area">
    <div class="container">
        <div class="banner_content">
        </div>
    </div>
</div>
<!-- End Header Banner Area -->
<!-- Job Post Form -->
<div class="job_post_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="job_post_form">
                    <form action="{{ url('seeker/resume/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="single_create_resume">
                            <h3>NO PROFILE YET? CREATE A NEW ONE :</h3>
                            <h5>PERSONAL INFORMATION</h5>
                            <div class="create-resume_form">
                                <div class="form-group">
                                    <label>Full Name *</label>
                                    <input type="text" name="name" value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Father Name *</label>
                                    <input type="text" name="father" value="{{ old('father') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Mother Name *</label>
                                    <input type="text" name="mother" value="{{ old('mother') }}"  required>
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth *</label>
                                    <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Gender *</label>
                                    <select name="gender" value="{{ old('gender') }}" required>
                                        <option>Female</option>
                                        <option>Male</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Separated Religion *</label>
                                    <select name="religion" value="{{ old('religion') }}" required>
                                        <option>islam</option>
                                        <option>himduism</option>
                                        <option>buddhi</option>
                                        <option>christian</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Marital Status *</label>
                                    <select name="marital_status" value="{{ old('marital_status') }}" required>
                                        <option>married</option>
                                        <option>unmarried</option>
                                        <option>widowed</option>
                                        <option>single</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" name="email">
                                </div> --}}
                                <div class="form-group">
                                    <label>Phone *</label>
                                    <input type="text" name="mobile" value="{{ old('mobile') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>District *</label>
                                    <select name="district" value="{{ old('district') }}" required>
                                        <option>sylhet</option>
                                        <option>dhaka</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Present Address *</label>
                                    <input type="text" name="address" value="{{ old('address') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="single_create_resume">
                            <h5>EDUCATIONAL QUALIFICATION</h5>
                            <div class="create-resume_form">
                                <div class="form-group">
                                    <label>Degree Name *</label>
                                    <select name="degree_name" value="{{ old('degree_name') }}" required>
                                        <option>hsc</option>
                                        <option>ssc</option>
                                        <option>bechelor</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Degree Title *</label>
                                    <input type="text" name="degree_title" value="{{ old('degree_title') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Major Subject *</label>
                                    <input type="text" name="degree_major" value="{{ old('degree_major') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Institute Name *</label>
                                    <input type="text" name="degree_institute" value="{{ old('degree_institute') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Course Type *</label>
                                    <select name="degree_course_type" value="{{ old('degree_course_type') }}" required>
                                        <option>ongoing</option>
                                        <option>complete</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Result</label>
                                    <input type="text" name="degree_result" value="{{ old('degree_result') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Passing Year</label>
                                    <input type="text" name="degree_passed_year" value="{{ old('degree_passed_year') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="single_create_resume">
                            <h5>PROFESSIONAL INFORMATION</h5>
                            <div class="create-resume_form">
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" name="prof_designation" value="{{ old('prof_designation') }}" >
                                </div>
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" name="prof_company" value="{{ old('prof_company') }}" >
                                </div>
                                <div class="form-group">
                                    <label>Job Starting Date *</label>
                                    <input type="date" name="prof_start" value="{{ old('prof_start') }}" >
                                </div>
                                <div class="form-group">
                                    <label>Job Status</label>
                                    <select name="prof_status" value="{{ old('prof_status') }}" >
                                        <option>status</option>
                                        <option>still continuing</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Job Ending Date *</label>
                                    <input type="date" name="prof_end" value="{{ old('prof_end') }}" >
                                </div>
                            </div>
                        </div>
                        <div class="single_create_resume">
                            <h5>LOGIN INFORMATION</h5>
                            <div class="create-resume_form">
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="text" name="email" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="password" name="password"  required>
                                </div>
                                <div class="form-group">
                                    <label>Retype Password *</label>
                                    <input type="password" name="password_confirmation" required>
                                </div>
                                <div class="form-group">
                                    <label>Profile Photo *</label>
                                    <input type="file" name="picture" placeholder="choose image" value="{{ old('picture') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="job_apply">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
