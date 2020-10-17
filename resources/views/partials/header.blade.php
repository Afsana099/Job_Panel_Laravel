<style type="text/css">
    /* Base CSS */
/* a:focus { outline: 0 solid } */
a{display:inline-block;font-size: 18px;letter-spacing: 1px;}
a:hover{text-decoration:none;}
img {
    width: 100%;
    height: auto;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    margin:40px 0px;
    font-weight: 700;
    letter-spacing: 1px;
    color: #1d8a13;
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
}
.margin{margin: 50px 0px 130px 0px;}
.margin_180{
    margin: 108px 0px;
}
.no-padd{padding:0px;}
/* a{
    text-decoration:none;
    color:#fff
} */

/* Menu Area Css */
.menu_area {
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 999;
    background: #fafafa;
    border-bottom: 1px solid #f0efef;
}
.header_menu {
    display: flex;
    flex-flow: row;
    width: 100%;
    padding: 17px 0px;
}
.menu_area.sticky.scroll-header {
    position: fixed;
    width: 100%;
    top: 0;
    background: linear-gradient(to right, #18a55b, #faffd1);
}
.main_logo {
  margin: 0px;
  flex: 0 0 20%;
    width: 25%;
}
.main_logo a {
  display: block;
  font-size: 32px;
  color: #8c0c7e;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.main_logo a span{
  padding-left: 15px;
}
.menues {
    flex: 0 0  60%;
    width: 50%;
}
.menu_login_area {
    flex: 0 0 20%;
    width: 20%;
}
.menues ul li {
    display: inline-block;
    margin-right: 22px;
}
.menues ul {
    text-align: center;
}
.menues ul li a {
    width: 100px;
    margin-top: 10px;
    font-size: 16px;
    text-transform: capitalize;
    color: #131313;
    letter-spacing: 1px;
    position: relative;
}
.menu_login_area ul li {
    display: inline-block;
    margin-right: 11px;
}
.menu_login_area ul {
    text-align: right;
}
.menu_login_area ul li a {
    padding: 8px 10px;
    font-size: 16px;
    text-transform: capitalize;
    color: #0f0f0f;
    letter-spacing: 1px;
}
li a span {
  margin-left: 5px;
}
.menues ul li a:hover::before {
    content:" ";
    top: 57px;
    left: 50px;
    right: 0;
    bottom: 16px;
    background-color: brown;
    width: 6%;
    position: absolute;
    margin: 0 452px;
    transform: scaleX(1.2);
}
.menu_login_area ul li a:hover{
    color: blue;
}
</style>




<!-- Start Menu Area -->
<div class="menu_area sticky">
    <div class="container">
        <div class="header_menu">
            <div>
                <h2 class="main_logo">
                    <a href="{{ url('/') }}">Job<span>Panel</span></a>
                </h2>
            </div>
            <div class="menues">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    @guest
                    <li><a href="{{ url('seeker/resume/create') }}">Job<span>Seeker</span></a></li>
                    <li><a href="{{ url('employer/company/create') }}">Employer</a></li>

                    @endguest
                </ul>
            </div>
            <div class="menu_login_area">

                <div class="dropdown bg-transparent">
                    @guest
                    <a class="" href="{{ route('login') }}">Login</a>
                    @endguest
                    @auth
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{ url('public/storage/'.Auth::user()->picture) }}" alt="..." class="rounded-circle"
                            style="width: 32px">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        @if (Auth::user()->role == 'seeker')
                        <a class="dropdown-item" href="{{ url('seeker') }}">Dashboard</a>
                        @endif
                        @if (Auth::user()->role == 'admin')
                        <a class="dropdown-item" href="{{ url('admin') }}">Dashboard</a>
                        @endif
                        @if (Auth::user()->role == 'employer')
                        <a class="dropdown-item" href="{{ url('employer') }}">Dashboard</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Menu Area -->