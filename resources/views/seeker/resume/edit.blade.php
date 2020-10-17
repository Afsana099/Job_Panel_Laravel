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
<!-- Start Edit Resume -->
<div class="job_details_area">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-3">
                <div class="view_left">
                    @include('seeker.partials.sidebar')
                </div>
            </div>
            <div class="col-md-9">
                <div class="edit_resume_area">
                    <div class="container">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="Personal-tab" data-toggle="tab" href="#Personal" role="tab" aria-controls="Personal" aria-selected="true">Personal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Education-tab" data-toggle="tab" href="#Education" role="tab" aria-controls="Education" aria-selected="false">Educational Qualification</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Experience-tab" data-toggle="tab" href="#Experience" role="tab" aria-controls="Experience" aria-selected="false">Work Experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Training-tab" data-toggle="tab" href="#Training" role="tab" aria-controls="Training" aria-selected="false">Training</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Curricular-tab" data-toggle="tab" href="#Curricular" role="tab" aria-controls="Curricular" aria-selected="false">Extra Curricular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Achivement-tab" data-toggle="tab" href="#Achivement" role="tab" aria-controls="Achivement" aria-selected="false">Skill</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Password-tab" data-toggle="tab" href="#Password" role="tab" aria-controls="Password" aria-selected="false">Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Photo-tab" data-toggle="tab" href="#Photo" role="tab" aria-controls="Photo" aria-selected="false">Photo</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Personal" role="tabpanel" aria-labelledby="Personal-tab">
                                <form action="{{ url('seeker/profileUpdate') }}" method="POST">
                                    @csrf
                                    <div class="create-resume_form">
                                        <div class="form-group">
                                            <label>Full Name *</label>
                                            <input type="text" value="{{ Auth::user()->name }}" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Father Name *</label>
                                            <input type="text" name="father" value="{{ Auth::user()->father }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Mother Name *</label>
                                            <input type="text" name="mother" value="{{ Auth::user()->mother }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth *</label>
                                            <input type="date" name="date_of_birth" value="{{ Auth::user()->date_of_birth }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Gender *</label>
                                            <select name="gender">
                                                <option value="{{ Auth::user()->gender }}">{{ Auth::user()->gender }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Religion *</label>
                                            <select name="religion">
                                                <option value="{{ Auth::user()->religion }}">{{ Auth::user()->religion }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status *</label>
                                            <select name="marital_status">
                                                <option value="{{ Auth::user()->marital_status }}">{{ Auth::user()->marital_status }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input type="text" value="{{ Auth::user()->email }}" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone *</label>
                                            <input type="text" value="{{ Auth::user()->mobile }}" name="mobile">
                                        </div>
                                        <div class="form-group">
                                            <label>District *</label>
                                            <select name="district">
                                                <option value="{{ Auth::user()->district }}">{{ Auth::user()->district }}</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Present Address *</label>
                                            <input type="text" value="{{ Auth::user()->address }}" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label>National ID </label>
                                            <input type="text" name="nid" value="{{ Auth::user()->nid }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Career Objective *</label>
                                            <input cols="45" rows="5" name="objective" value="{{ Auth::user()->objective }}"></input>
                                        </div>
                                        <div class="job_apply">
                                            <button type="submit" class="btn btn-warning" style="margin-top: 30px;">Update</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Education" role="tabpanel" aria-labelledby="Education-tab">
                                <form action="{{ url('seeker/edu_add') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="create-resume_form">
                                        <div class="form-group">
                                            <label>Degree Name *</label>
                                            <select name="degree_name" required>
                                                @foreach ($degrees as $degree)
                                                <option value="{{ $degree->name }}">{{ $degree->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Degree Title *</label>
                                            <input type="text" name="degree_title">
                                        </div>
                                        <div class="form-group">
                                            <label>Major Subject *</label>
                                            <input type="text" name="major_sub">
                                        </div>
                                        <div class="form-group">
                                            <label>Institution Name *</label>
                                            <input type="text" name="institution">
                                        </div>
                                        <div class="form-group">
                                            <label>Course Type *</label>
                                            <select name="course">
                                                <option value="ongoing">ongoing</option>
                                                <option value="completed">completed</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Result</label>
                                            <input type="text" name="result">
                                        </div>
                                        <div class="form-group">
                                            <label>Passing Year</label>
                                            <input type="text" name="pass_year">
                                        </div>
                                        <div class="job_apply">
                                            <button class="btn btn-primary" type="submit" style="margin-top: 30px;">Add</button>
                                        </div>
                                    </div>
                                </form>
                                
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Degree Name</th>
                                                <th scope="col">Degree Title</th>
                                                <th scope="col">Major Subject</th>
                                                <th scope="col">Institution</th>
                                                <th scope="col">Course</th>
                                                <th scope="col">Result</th>
                                                <th scope="col">Pass</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @php($i=0)
                                                @foreach ($educations as $education)
                                                <th scope="row">{{++$i}}</th>
                                                <td>{{$education->degree_name}}</td>
                                                <td>{{$education->degree_title}}</td>
                                                <td>{{$education->major_sub}}</td>
                                                <td>{{$education->institution}}</td>
                                                <td>{{$education->course}}</td>
                                                <td>{{$education->result}}</td>
                                                <td>{{$education->pass_year}}</td>
                                                <td>
                                                    
                                                    <button data-id="{{ $education->id }}" data-user_id="{{ $education->user_id }}" data-degree_name="{{ $education->degree_name }}" data-degree_title="{{ $education->degree_title }}" data-major_sub="{{ $education->major_sub }}" data-institution="{{ $education->institution }}" data-course="{{ $education->course }}" data-result="{{ $education->result }}" data-pass_year="{{ $education->pass_year }}" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalScrollable">
                                                    <i class="fas fa-user-edit">Update</i></button>
                                                    <button data-id="{{ $education->id }}" data-target="#deleteEducation" id="#deleteEducationAmount" type="button" class="btn btn-danger" data-toggle="modal"
                                                    ><i class="fas fa-trash">Delete</i>
                                                </button></td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Experience" role="tabpanel" aria-labelledby="Experience-tab">
                                <form action="{{ url('seeker/experience_add') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="create-resume_form">
                                        <div class="form-group">
                                            <label>Designation*</label>
                                            <input type="text" name="desgination">
                                        </div>
                                        <div class="form-group">
                                            <label>Company*</label>
                                            <input type="text" name="company">
                                        </div>
                                        <div class="form-group">
                                            <label>Starting Date*</label>
                                            <input type="date" name="start_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Job Status</label>
                                            <select name="job_status">
                                                <option value="Resigned">Resigned</option>
                                                <option value="Still Working">still Working</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ending Date*</label>
                                            <input type="date" name="end_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Responsibilities*</label>
                                            <input type="text" name="response">
                                        </div>
                                        <div class="job_apply">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">Company</th>
                                                <th scope="col">Responsibilities</th>
                                                <th scope="col">Start Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">End Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @php($i=0)
                                                @foreach($experiences as $experience)
                                                <th scope="row">{{++$i}}</th>
                                                <td>{{$experience->desgination}}</td>
                                                <td>{{$experience->company}}</td>
                                                <td>{{$experience->response}}</td>
                                                <td>{{$experience->start_date}}</td>
                                                <td>{{$experience->job_status}}</td>
                                                <td>{{$experience->end_date}}</td>
                                                <td>
                                                    <button data-id="{{ $experience->id }}" data-user_id="{{ $experience->user_id }}" data-desgination="{{ $experience->desgination }}" data-company="{{ $experience->company }}" data-response="{{ $experience->response }}" data-start_date="{{ $experience->start_date }}" data-job_status="{{ $experience->job_status }}" data-end_date="{{ $experience->end_date }}" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalExperience">
                                                    <i class="fas fa-user-edit">Update</i></button>
                                                    <button data-id="{{ $experience->id }}" data-target="#deleteExperience" id="#deleteExperienceAmount" type="button" class="btn btn-danger" data-toggle="modal"
                                                    ><i class="fas fa-trash">Delete</i>
                                                </button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Training" role="tabpanel" aria-labelledby="Training-tab">
                                <form action="{{url('seeker/trainings_add')}}" method="POST">
                                    @csrf
                                    <div class="create-resume_form">
                                        <div class="form-group">
                                            <label>Title*</label>
                                            <input type="text" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label>Institution*</label>
                                            <input type="text" name="institution">
                                        </div>
                                        <div class="form-group">
                                            <label>Location*</label>
                                            <input type="text" name="location">
                                        </div>
                                        <div class="form-group">
                                            <label>Duration</label>
                                            <input type="text" name="duration">
                                        </div>
                                        <div class="form-group">
                                            <label>Details*</label>
                                            <input type="text" name="details">
                                        </div>
                                        <div class="job_apply">
                                            <button type="submit" class="btn btn-primary" style="margin-top: 30px;">Add</button>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Institution </th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @php($i=0)
                                                @foreach($trainings as $training)
                                                <th scope="row">{{++$i}}</th>
                                                <td>{{$training ->title}}</td>
                                                <td>{{$training ->institution}}</td>
                                                <td>{{$training ->location}}</td>
                                                <td>{{$training ->duration}}</td>
                                                <td>{{$training ->details}}</td>
                                                <td>
                                                    <button data-id="{{$training ->id}}" data-user_id="{{$training ->user_id}}" data-title="{{$training ->title}}" data-institution="{{$training ->institution}}" data-location="{{$training ->location}}" data-duration="{{$training ->duration}}" data-details="{{$training ->details}}" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalTraining">
                                                    <i class="fas fa-user-edit">Update</i></button>
                                                    <button data-id="{{$training ->id}}" data-target="#deleteTraining" id="#deleteTrainingAmount" type="button" class="btn btn-danger" data-toggle="modal"
                                                    ><i class="fas fa-trash">Delete</i>
                                                </button></td>
                                                </tr>
                                                @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Curricular" role="tabpanel" aria-labelledby="Curricular-tab">
                                <form action="{{url('seeker/extras_add')}}" method="POST">
                                    @csrf
                                    <div class="create-resume_form">
                                        <div class="form-group">
                                            <label>Organization*</label>
                                            <input type="text" name="organization">
                                        </div>
                                        <div class="form-group">
                                            <label>Position*</label>
                                            <input type="text" name="position">
                                        </div>
                                        <div class="form-group">
                                            <label>Duration*</label>
                                            <input type="text" name="duration">
                                        </div>
                                        <div class="form-group">
                                            <label>Details</label>
                                            <input type="text" name="details">
                                        </div>
                                        <div class="job_apply">
                                            <button type="submit" class="btn btn-primary" style="margin-top: 30px;">Add</button>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Organization</th>
                                                <th scope="col">Position</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @php($i=0)
                                                @foreach($extras as $extra)
                                                <th scope="row">{{++$i}}</th>
                                                <td>{{$extra->organization}}</td>
                                                <td>{{$extra->position}}</td>
                                                <td>{{$extra->duration}}</td>
                                                <td>{{$extra->details}}</td>
                                                <td>
                                                    <button data-id="{{$extra ->id}}" data-user_id="{{$extra ->user_id}}" data-organization="{{$extra ->organization}}" data-position="{{$extra ->position}}" data-duration="{{$extra ->duration}}" data-details="{{$extra ->details}}"  type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalExtra">
                                                    <i class="fas fa-user-edit">Update</i></button>
                                                    <button data-id="{{$extra ->id}}" data-target="#deleteExtra" id="#deleteExtraAmount" type="button" class="btn btn-danger" data-toggle="modal"
                                                    ><i class="fas fa-trash">Delete</i>
                                                </button></td>
                                                </tr>
                                                @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Achivement" role="tabpanel" aria-labelledby="Achivement-tab">
                                <form action="{{url('seeker/achivements_add')}}" method="POST">
                                    @csrf
                                    <div class="create-resume_form">
                                        <div class="form-group">
                                            <label>Add Skill</label>
                                            <input type="text" name="details">
                                        </div>
                                        <div class="job_apply">
                                            <button type="submit" class="btn btn-primary" style="margin-top: 30px;">Add</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="view_edit_form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @php($i=0)
                                                @foreach($achivements as $achivement)
                                                <th scope="row">1</th>
                                                <td>{{$achivement->details}}</td>
                                                <td><button data-id="{{$achivement ->id}}" data-user_id="{{$achivement ->user_id}}"data-details="{{$achivement ->details}}"  type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalAchivement">
                                                    <i class="fas fa-user-edit">Update</i></button>
                                                    <button data-id="{{$achivement ->id}}" data-target="#deleteAchivement" id="#deleteAchivementAmount" type="button" class="btn btn-danger" data-toggle="modal"
                                                    ><i class="fas fa-trash">Delete</i>
                                                </button></td>
                                                </tr>
                                                @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="Password" role="tabpanel" aria-labelledby="Password-tab">
                                
                                <form action="{{url('seeker/password_change')}}" method="POST">
                                    @csrf
                                    <div class="create-resume_form">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" name="old_password">
                                        </div>

                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password_confirmation" required>
                                        </div>
                                        <div class="job_apply">
                                            <button type="submit" class="btn btn-warning">Update</button>
                                        </div>
                                  </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Photo" role="tabpanel" aria-labelledby="Photo-tab">
                    
                        <form action="{{ url('seeker/photo_change') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="create-resume_form edit_resume_photo">
                    <img id="image_preview_container"
                        src="{{ url('public/storage/'.$user->picture) }}" />
                        <div class="form-group">
                            <input type="file" name="picture" id="image"/>
                        </div>
                        <div class="job_apply">
                        <button type="submit" class="btn btn-warning" style="margin-bottom: 40px;">Update</button>
                        </div>
                        </form>
                        </div>
                               
                        
                    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Edit Resume -->
            </div>
        </div>
    </div>
</div>
<!--Update Education Modal Center -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('seeker/edu_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        @foreach ($educations as $education)
                        <input type="hidden" value="{{ $education->id }}" name="id" id="id">
                        <input type="hidden" value="{{ $education->user_id }}" name="user_id" id="user_id">
                        @endforeach
                        <label class="font-weight-bold">Degree Name</label>
                        <input value="text" name="degree_name" id="degree_name" class="form-control  mb-3" type="text" placeholder="Update Degree Name" readonly>
                        <label class="font-weight-bold">Degree Title</label>
                        <input name="degree_title" id="degree_title" class="form-control  mb-3" type="text" placeholder="Update Degree Title">
                        <label class="font-weight-bold">Major Subject</label>
                        <input name="major_sub" id="major_sub" class="form-control  mb-3" type="text" placeholder="Update Name">
                        <label class="font-weight-bold">Institution</label>
                        <input name="institution" id="institution" class="form-control  mb-3" type="text" placeholder="Update Name">
                        <label class="font-weight-bold">Course</label>
                        <input name="course" id="course" class="form-control  mb-3" type="text" placeholder="Update Name">
                        <label class="font-weight-bold">Result</label>
                        <input name="result" id="result" class="form-control  mb-3" type="text" placeholder="Update Name">
                        <label class="font-weight-bold">Passing Year</label>
                        <input name="pass_year" id="pass_year" class="form-control  mb-3" type="text" placeholder="Update Name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Update Education Modal Center -->
<!--Delete Education Modal Center -->
<div class="modal fade" id="deleteEducation" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteEducationAmount">Delete Education</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('seeker/edu_delete') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    Are You Sure,You Want To Delete This Education Amount?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Update Experience Modal Center -->
<div class="modal fade" id="exampleModalExperience" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('seeker/experience_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        @foreach($experiences as $experience)
                        <input type="hidden" value="{{$experience->id}}" name="id" id="id">
                        <input type="hidden" value="{{$experience->user_id}}" name="user_id" id="user_id">
                        @endforeach
                        <label class="font-weight-bold">Desgination</label>
                        <input value="text" name="desgination" id="desgination" class="form-control  mb-3" type="text" placeholder="Update Degree Name">
                        <label class="font-weight-bold">company</label>
                        <input name="company" id="company" class="form-control  mb-3" type="text" placeholder="Update Degree Title">
                        <label class="font-weight-bold">Start Date</label>
                        <input name="start_date" id="start_date" class="form-control  mb-3" type="date" placeholder="Update Name">
                        <label class="font-weight-bold">Job Status</label>
                        <select name="job_status" id="job_status" class="form-control  mb-3">
                            <option value="Resigned">Resigned</option>
                            <option value="Still Working">Still Working</option>
                        </select>
                        <label class="font-weight-bold">End Date</label>
                        <input name="end_date" id="end_date" class="form-control  mb-3" type="text" placeholder="Update Name">
                        <label class="font-weight-bold">Responsibilities</label>
                        <input name="response" id="response" class="form-control  mb-3" type="text" placeholder="Update Name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Update Experience Modal Center -->
<!--Delete Experience Modal Center -->
<div class="modal fade" id="deleteExperience" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteEducationAmount">Delete Experience</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('seeker/experience_delete') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    Are You Sure,You Want To Delete This Experience?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Update Training Modal Center -->
<div class="modal fade" id="exampleModalTraining" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('seeker/trainings_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        @foreach($trainings as $training)
                        <input type="hidden" value="{{$training->id}}" name="id" id="id">
                        <input type="hidden" value="{{$training->user_id}}" name="user_id" id="user_id">
                        @endforeach
                        <label class="font-weight-bold">Title</label>
                        <input value="text" name="title" id="title" class="form-control  mb-3" type="text" placeholder="Update Degree Name">
                        <label class="font-weight-bold">Institution</label>
                        <input name="institution" id="institution" class="form-control  mb-3" type="text" placeholder="Update Degree Title">
                        <label class="font-weight-bold">Location</label>
                        <input name="location" id="location" class="form-control  mb-3" type="text" placeholder="Update Name">
                        <label class="font-weight-bold">duration</label>
                        <input name="duration" id="duration" class="form-control  mb-3" type="text" placeholder="Update Name">
                        <label class="font-weight-bold">Responsibilities</label>
                        <input name="details" id="details" class="form-control  mb-3" type="text" placeholder="Update Name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Update Training Modal Center -->
<!--Delete Training Modal Center -->
<div class="modal fade" id="deleteTraining" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTrainingAmount">Delete Training</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('seeker/trainings_delete')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    Are You Sure,You Want To Delete This Training Amount?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Update Extra Modal Center -->
<div class="modal fade" id="exampleModalExtra" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('seeker/extras_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        @foreach($extras as $extra)
                        <input type="hidden" value="{{$extra->id}}" name="id" id="id">
                        <input type="hidden" value="{{$extra->user_id}}" name="user_id" id="user_id">
                        @endforeach
                        <label class="font-weight-bold">Organization</label>
                        <input value="text" name="organization" id="organization" class="form-control  mb-3" type="text" placeholder="Update Degree Name">
                        <label class="font-weight-bold">Position</label>
                        <input name="position" id="position" class="form-control  mb-3" type="text" placeholder="Update Degree Title">
                        <label class="font-weight-bold">Duration</label>
                        <input name="duration" id="duration" class="form-control  mb-3" type="text" placeholder="Update Name">
                        <label class="font-weight-bold">Details</label>
                        <input name="details" id="details" class="form-control  mb-3" type="text" placeholder="Update Name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Update Extra Modal Center -->
<!--Delete Extra Modal Center -->
<div class="modal fade" id="deleteExtra" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTrainingAmount">Delete Education</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('seeker/extras_delete')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    Are You Sure,You Want To Delete This ExtraCurricular?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Update Achivement Modal Center -->
<div class="modal fade" id="exampleModalAchivement" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('seeker/achivements_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        @foreach($achivements as $achivement)
                        <input type="hidden" value="{{$achivement->id}}" name="id" id="id">
                        <input type="hidden" value="{{$achivement->user_id}}" name="user_id" id="user_id">
                        @endforeach
                        <label class="font-weight-bold">Details</label>
                        <input name="details" id="details" class="form-control  mb-3" type="text" placeholder="Update Name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Update Achivement Modal Center -->
<!--Delete Achivement Modal Center -->
<div class="modal fade" id="deleteAchivement" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTrainingAmount">Delete Skills</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('seeker/achivements_delete')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    Are You Sure,You Want To Delete This Skills?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@endsection
@section('scripts')
<script>

    $(document).ready(function(){

        //Live upload profile photo
        $('#upload_avater').hide();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#image').change(function () {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#image_preview_container').attr('src', e.target.result);
                $('#upload_avater').show();
            }
            reader.readAsDataURL(this.files[0]);
        });



    });




/*-----Education Modal Update Scripts-----*/
$('#exampleModalScrollable').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var degree_name = button.data('degree_name')
var degree_title = button.data('degree_title')
var major_sub = button.data('major_sub')
var institution = button.data('institution')
var course = button.data('course')
var result = button.data('result')
var pass_year = button.data('pass_year')
var modal = $(this)
modal.find('.modal-title').text('Update Education')
modal.find('.modal-body #degree_name').val(degree_name);
modal.find('.modal-body #degree_title').val(degree_title);
modal.find('.modal-body #major_sub').val(major_sub);
modal.find('.modal-body #institution').val(institution);
modal.find('.modal-body #course').val(course);
modal.find('.modal-body #result').val(result);
modal.find('.modal-body #pass_year').val(pass_year);
});
/*-----Education Modal Delete Scripts-----*/
$('#deleteEducation').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var modal = $(this)
modal.find('.modal-title').text('Delete Education')
modal.find('.modal-body #id').val(id);
});
/*-----Experience Modal Update Scripts-----*/
$('#exampleModalExperience').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var desgination = button.data('desgination')
var company = button.data('company')
var start_date = button.data('start_date')
var job_status = button.data('job_status')
var end_date = button.data('end_date')
var response = button.data('response')
var modal = $(this)
modal.find('.modal-title').text('Update Experience')
modal.find('.modal-body #desgination').val(desgination);
modal.find('.modal-body #company').val(company);
modal.find('.modal-body #start_date').val(start_date);
modal.find('.modal-body #job_status').val(job_status);
modal.find('.modal-body #end_date').val(end_date);
modal.find('.modal-body #response').val(response);
});
/*-----Experience Modal Delete Scripts-----*/
$('#deleteExperience').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var modal = $(this)
modal.find('.modal-title').text('Delete Experience')
modal.find('.modal-body #id').val(id);
});
/*-----Training Modal Update Scripts-----*/
$('#exampleModalTraining').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var title = button.data('title')
var institution = button.data('institution')
var location = button.data('location')
var duration = button.data('duration')
var details = button.data('details')
var modal = $(this)
modal.find('.modal-title').text('Update Training')
modal.find('.modal-body #title').val(title);
modal.find('.modal-body #institution').val(institution);
modal.find('.modal-body #location').val(location);
modal.find('.modal-body #duration').val(duration);
modal.find('.modal-body #details').val(details);
});
/*-----Training Modal Delete Scripts-----*/
$('#deleteTraining').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var modal = $(this)
modal.find('.modal-title').text('Delete Training')
modal.find('.modal-body #id').val(id);
});
/*-----ExtraCurricular Modal Update Scripts-----*/
$('#exampleModalExtra').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var organization = button.data('organization')
var position = button.data('position')
var duration = button.data('duration')
var details = button.data('details')
var modal = $(this)
modal.find('.modal-title').text('Update ExtraCurricular')
modal.find('.modal-body #organization').val(organization);
modal.find('.modal-body #position').val(position);
modal.find('.modal-body #duration').val(duration);
modal.find('.modal-body #details').val(details);
});
/*-----ExtraCurricular Modal Delete Scripts-----*/
$('#deleteExtra').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var modal = $(this)
modal.find('.modal-title').text('Delete ExtraCurricular')
modal.find('.modal-body #id').val(id);
});
/*-----Achivement Modal Update Scripts-----*/
$('#exampleModalAchivement').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var details = button.data('details')
var modal = $(this)
modal.find('.modal-title').text('Update Achivement')
modal.find('.modal-body #details').val(details);
});
/*-----Achivement Modal Delete Scripts-----*/
$('#deleteAchivement').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var modal = $(this)
modal.find('.modal-title').text('Delete Achivement')
modal.find('.modal-body #id').val(id);
});

</script>
@endsection