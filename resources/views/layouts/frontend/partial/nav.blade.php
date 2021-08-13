
<!-- Section Navbar -->
<nav id="navbar" class="navbar  navbar-expand-lg fixed-top navbar-dark bg-alpha ">
    <div class="container">
        <a class="navbar-brand logo " href="#">
             <img src="{{asset('assets/frontend/img/cex.png')}}" width="65" height="60" class="d-inline-block align-top" alt="">
         </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey"
                aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
         </button>
             <div class="collapse navbar-collapse  nav-link  " id="navbarKey">

             <ul class="navbar-nav ml-auto text-center ">
               <li class="nav-item active">
                 <a class="nav-link"   href="#" > หน้าแรก <span class="sr-only">(current)</span></a>
              </li>
                <li class="nav-item">
                  <a class="nav-link " href="about-us.html"> ครอสเรียน </a> </li>
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  " href="##" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> ข่าวสาร </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"> ข่าวสาร </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="about-us.html"> เกี่ยวกับเรา  </a>
                </li> 

                </ul>

                
                  <!--  ปุ่ม -->
                <ul class="navbar-nav ml-auto text-center "  >
                    <li class="nav-item   ">
                      <a class="nav-link  " href="{{ route('login') }}">  เข้าสู่ระบบ</a></li>

                    <li class="nav-item   ">
                      <a class="nav-link  " href="{{ route('login') }}">  สมัครสมาชิก </a></li
                </ul>
                </div>
        </div>
    </div>

</nav>
