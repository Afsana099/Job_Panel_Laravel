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
                    @include('seeker.partials.sidebar')
                </div>
            </div>

            <div class="col-md-9">
                <div class="view_right">
                    <div class="profile_top flex">
                        <div class="profile_top_left">
                            <h4>My Profile</h4>
                        </div>
                        <div class="profile_top_right">
                            <p><a href="{{ url('seeker/profile/download') }}"><i class="fas fa-download"></i> Download CV</a></p>
                        </div>
                    </div>
                    <div class="profile_des">
                        <div class="single_profile_box flex2">
                            <div class="single_profile_box_left">
                                <img src="{{ url('public/storage/'.$user->picture) }}">
                            </div>
                            <div class="single_profile_box_right">
                                <h4>{{ $user->name }}</h4>
                                <p><i class="fas fa-home"></i>{{ $user->address }}</p>
                                <p><i class="far fa-envelope"></i>{{ $user->email }}</p>
                                <p><i class="fas fa-phone"></i>{{ $user->mobile }}</p>
                            </div>
                        </div>
                        <div class="single_profile_box">
                            <h6>OBJECTIVE</h6>
                            <p>{{ $user->objective }}</p>
                        </div>
                        <div class="single_profile_box">
                            <h6>WORK EXPERIENCE</h6>
                            @foreach($experiences as $experience)
                            <div class="single_child_box">
                                <span class="ex-title">{{$experience->desgination}}</span>
                                <span>{{$experience->company}}</span>
                                <span>
                                {!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($experience->start_date))) !!}-{!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($experience->end_date))) !!}</span>
                                <p>{{$experience->response}}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="single_profile_box">
                            <h6>EDUCATIONAL QUALIFICATION</h6>
                            @foreach ($educations as $education)
                            <div class="single_child_box">
                                <span class="ex-title">Institution:
                                    {{$education->institution}}</span>
                                <span>Degree Name:
                                    {{ $education->degree_name }}</span>
                                <span>Passing Year:
                                    {{ $education->pass_year }}</span>
                                <span>Result:
                                    {{ $education->result }} 
                                    ({{ $education->major_sub }})</span>
                            </div>
                             @endforeach

                        </div>
                        <div class="single_profile_box">
                            <h6>TRAINING</h6>
                            @php($i=0)
                            @foreach($trainings as $training)
                            <div class="single_child_box">
                                <span class="ex-title">{{$training ->title}}</span>
                                <p>{{$training ->details}}</p>
                                <span>Location - {{$training ->location}}</span>
                                <span>Institution - {{$training ->institution}}</span>
                                <span>Duration - {{$training ->duration}}</span>
                            </div>
                            @endforeach

                        </div>
                        <div class="single_profile_box">
                            <h6>SKILL</h6>
                            @php($i=0)
                            @foreach($achivements as $achivement)
                            <div class="single_child_box">
                                <p>{{$achivement->details}}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="single_profile_box">
                            <h6>PERSONAL INFORMATION</h6>
                            <div class="single_child_box">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Fathers Name</th>
                                            <td>{{ $user->father}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Mothers Name</th>
                                            <td>{{ $user->mother}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Date of Birth</th>
                                            <td>{{ $user->date_of_birth}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Gender</th>
                                            <td>{{ $user->gender}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Marital Status</th>
                                            <td>{{ $user->marital_status}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Religion</th>
                                            <td>{{ $user->religion}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">NID No</th>
                                            <td>{{ $user->nid}}</td>
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
<!-- End Job Details Area -->
@endsection
