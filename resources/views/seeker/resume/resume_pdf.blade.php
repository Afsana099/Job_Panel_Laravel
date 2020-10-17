<!DOCTYPE html>
<html>
	<head>
		<title>PDF</title>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	</head>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;

	}

	img {
	width: 100%;
	}
	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
	margin: 0px;
	font-weight: 700;
	}
	ul{
	margin:0;
	padding:0;
	list-style:none
	}
	p{
	font-size:14px;
	margin-bottom:0px;
	}
	body {
	font-family: 'Noto Sans', sans-serif;
	font-size: 14px;
	line-height: 1.4;
	background-color: aliceblue;
	}
	h3{
	margin-bottom: 50px;
    color: #03578e;
    text-transform: uppercase;
    letter-spacing: 1px;
    word-spacing: 5px;
    text-align: center;
	}
	/* Banner Area Css  */
	.banner_content {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	}
	.banner_content h2 {
	color: #777373;
	margin-bottom: 15px;
	}
	.banner_content p {
	color: #959090;
	text-align: center;
	font-size: 16px;
	}
	.section_title p {
	color: #ACACAD;
	line-height: 22px;
	}
	.section_title h4 {
	color: #333333;
	margin-bottom: 12px;
	font-weight: 700;
	}
	.single_categories {
	text-align: center;
	padding: 40px 102px;
	background-color: #fff;
	transition: .4s;
	cursor: pointer;
	margin: auto 50px 50px auto;
	box-shadow: 0 5px 25px 0 rgba(41,128,185,0.15);
	}
	.single_categories:hover {
	background-color: #F9FCFF;
	}
	.single_categories:nth-child(4n+0) {
	border-right: 1px solid #f1f1f1;
	}
	.single_categories:last-child {
	border-right: 1px solid #f1f1f1;
	}
	.cat_icon i {
	font-size: 24px;
	width: 55px;
	height: 55px;
	background-color: #4DADF5;
	color: #fff;
	border-radius: 50%;
	line-height: 55px;
	text-align: center;
	margin-bottom: 10px;
	transform: scale(1);
	transition: .4s;
	}
	.single_categories:hover .cat_icon i {
	transform: scale(1.1);
	}
	.single_categories p {
	font-size: 16px;
	font-weight: 600;
	color: #777777;
	}
	.single_categories span {
	font-size: 13px;
	color: #9a9a9a;
	}
	/* Start How It Works  */
	.how_it_work_area {
	padding: 70px 0px;
	}
	.how_it_work_list {
	display: flex;
	flex-wrap: wrap;
	}
	.joblist_area {
	padding: 70px 0px;
	}
	.joblist a {
	display: block;
	}
	.single_work {
	flex: 0 0 33%;
	width: 33%;
	text-align: center;
	padding: 9px 28px;
	}
	.single_work i {
	color: #4DADF5;
	font-size: 44px;
	margin-bottom: 14px;
	}
	.single_work h5 {
	margin-bottom: 10px;
	color: #777777;
	}
	.single_work p {
	line-height: 23px;
	color: #908f8f;
	}
	.single_job {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	padding: 11px 18px;
	border-radius: 2px;
	margin-bottom: 10px;
	border: 1px solid #ddd;
	align-items: center;
	position: relative;
	}
	.single_job:before {
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	background-color: #24324A;
	content: '';
	width: 6px;
	opacity: 0;
	transition: .3s;
	}
	.single_job:hover:before {
	opacity: 1;
	}
	.job_company_logo {
	flex: 0 0 30%;
	width: 30%;
	display: flex;
	align-items: center;
	}
	.job_company_logo img {
	width: 20%;
	margin-right: 15px;
	}
	.job_location {
	display: flex;
	align-items: center;
	}
	.job_location i {
	color: #595E66;
	margin-right: 4px;
	}
	.job_title h5 {
	color: #777777;
	text-transform: capitalize;
	font-size: 17px;
	}
	.job_title p {
	color: #908f8f;
	}
	.job_type p {
	padding: 5px 30px;
	text-transform: capitalize;
	font-weight: 600;
	border-radius: 3px;
	}
	.job_location p {
	color: #908f8f;
	}
	p.part_time {
	color: #57C586;
	background-color: #D5FFE7;
	}
	p.full_time {
	background-color: #FFD8D2;
	color: #FF8E7C;
	}
	.joblist_btn a {
	display: inline-block;
	font-size: 16px;
	text-transform: capitalize;
	padding: 10px 27px;
	background-color: #595E66;
	color: #ffff;
	border-radius: 7px;
	transition: .4s;
	}
	.joblist_btn a:hover {
	background-color: #24324A;
	}
	.joblist_btn {
	text-align: center;
	margin-top: 41px;
	}
	/* Start Footer Area  Css*/
	.footer_area {
	padding: 55px 0;
	background: #605f5f;
	}
	.footer_logo a {
	text-transform: capitalize;
	letter-spacing: 2px;
	color: #7af269;
	display: block;
	}
	.single_footer1 p,.single_footer3 p {
	color: white;
	text-transform: capitalize;
	margin-top: 30px;
	word-spacing: 2px;
	line-height: 23px;
	text-align: justify;
	letter-spacing: 1px;
	
	}
	.single_footer2 {
	padding: 0px 60px;
	}
	.fa.fa-envelope {
	margin-left: 10px;
	font-size: 23px;
	margin-top: 15px;
	color: white;
	}
	.jobs_logo_content {
	color: #fff;
	margin-left: 30px;
	}
	.jobs_logo_content h2 {
	margin-bottom: 8px;
	text-transform: capitalize;
	}
	.jobs_banner_right {
	padding: 16px 35px;
	display: inline-table;
	background-color: #595E66;
	color: #fff;
	cursor: pointer;
	}
	.job_details_area {
	margin-top: 80px;
	margin-bottom: 80px;
	}
	.job_details_left {
	padding: 23px 22px;
	box-shadow: 0 0 14px rgba(191,191,191,.24);
	margin-right: 20px;
	}
	.job_details_right {
	padding: 23px 22px;
	box-shadow: 0 0 14px rgba(191,191,191,.24);
	display: inline-table;
	}
	.single_job_del {
	margin-bottom: 52px;
	}
	.single_job_del h5 {
	margin-bottom: 16px;
	color: #191c1e;
	text-transform: capitalize;
	}
	.single_job_del p,.single_job_del ol{
	line-height: 29px;
	color: #908f8f;
	font-size: 15px;
	}
	.single_job_del ol li {
	margin-bottom: 5px;
	}
	.job_details_right h5 {
	line-height: 28px;
	color: #191c1e;
	margin-bottom: 20px;
	}
	ul.company_social {
	display: flex;
	justify-content: space-between;
	flex-wrap: wrap;
	}
	ul.company_social li a {
	padding: 5px 8px;
	background-color: #D5FFE7;
	color: #8CC586;
	transition: .5s;
	}
	ul.company_social li a:hover {
	color: #595E66;
	}
	/*========================== CREATE RESUME ============================*/
	.create-resume_form .form-group:nth-child(3n+0) {
	margin-right: 0px;
	}
	.create-resume_form {
	display: flex;
	flex-wrap: wrap;
	}
	.create-resume_form .form-group {
	width: 32.2%;
	margin-right: 13px;
	}
	.single_create_resume {
	margin-bottom: 25px;
	}
	.view_right {
	padding: 23px 22px;
	box-shadow: 0 0 14px rgba(191,191,191,.24);
	margin-right: 20px;
	}
	.flex2 {
	display: flex;
	}
	.single_profile_box_left {
	margin-right: 20px;
	}
	.single_profile_box_right {
	background-color: #8fbecc;
	width: 60%;
	padding: 20px;
	margin-left:250px;
	}
	.single_profile_box_left img {
	width: 200px;
	height: 180px;
	}

	.profile_top.flex {
	background-color: #FAFAFA;
	padding: 12px 7px;
	margin-bottom: 13px;
	}

	.single_profile_box {
	padding: 10px 20px;
	}
	.single_profile_box_img{
	display:inline-flex;
	}
	.single_child_box {
	margin-bottom: 22px;
	padding: 5px 50px;
	}
	.single_profile_box h6 {
	margin-bottom: 5px;
	font-size: 18px;
	text-transform: capitalize;
	color: white;
	background-color: black;
	padding: 8px;
	}
	.single_profile_box p {
	line-height: 23px;
	color: #090808;
	font-size: 14px;
	}
	.single_child_box span {
	display: block;
	margin-bottom: 4px;
	}
	span.ex-title {
	color: black;
	font-weight: 700;
	text-transform: capitalize;
	font-size: 18px;
	}
	label {
	color: #0d0c0c;
	font-size: 18px;
	margin-bottom: 25px;
	margin-right: 25px;
	margin-left: 10px;
	}
	.send-button input {
	margin: 15px 210px !important;
	padding: 6px 45px;
	border-radius: 25px;
	box-shadow: 3px 2px 2px black;
	margin-bottom: 35px;
	}
	.form-row {
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
	margin-right: -5px;
	margin-left: -5px;
	align-items: baseline;
	}
	.cat_icon.icon_img img {
	width: 47px;
	height: 47px;
	border-radius: 50%;
	margin-bottom: 13px;
	}
	</style>
	<body>
		<!-- End Header Banner Area -->
		<!-- Start Job Details Area -->
		<div class="job_details_area">
			<div class="container-fluid">
				<div class="row no-gutters">
					<div class="col-md-12">
						<h3>Carriculum vitae</h3>
						<div class="view_right">
							<div class="profile_top flex">
								<div class="profile_top_left">
									
								</div>
							</div>
							<div class="profile_des">
								<div class="single_profile_box_img">
									<div class="single_profile_box_left">
										<img src="{{ url('public/storage/'.$user->picture) }}">
									</div>
									<div class="single_profile_box_right">
										<h4 style="margin-right: 150px">{{ $user->name }}</h4>
										<p><i class="fas fa-home"></i>{{ $user->address }}</p>
										<p><i class="far fa-envelope"></i>{{ $user->email }}</p>
										<p><i class="fas fa-phone"></i>{{ $user->mobile }}</p>
									</div>
								</div>
								<div class="single_profile_box">
									<h6>OBJECTIVE</h6>
									<p class="ml-5">{{ $user->objective }}</p>
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
									<h6>EDUCATION</h6>
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
									<h6>PERSONAL</h6>
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
	</body>
</html>