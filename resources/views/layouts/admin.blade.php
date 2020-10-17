<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Job Panel</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,400,500,700,800,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/all.min.css') }}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/owl.carousel.min.css') }}" />
    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{ asset('public/admin/assets/images/favicon.ico') }}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/bootstrap.min.css') }}" />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/style.css') }}" />

    <!--Dashboard Css Link-->

    <!-- Custom fonts for this template-->
    <link href="{{ asset('public/dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('public/dashboard/css/sb-admin-2.min.css') }}" rel="stylesheet">

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
<body id="page-top">

    @include('partials.header')
    @yield('content')
<!-----Page DataTables Custom(Search) Scripts----->




    <!--Dashboard Js Link-->
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('public/dashboard/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('public/dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('public/dashboard/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('public/dashboard/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('public/dashboard/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('public/dashboard/js/demo/chart-pie-demo.js') }}"></script>
    <!-- Page level plugins -->
<script src="{{asset('public/dashboard/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $(document).ready(function () {
    $('#dataTable').DataTable(); // ID From dataTable
    $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
</script>
    
    @yield('scripts')
    @include('partials.toastr')
</body>
</html>
