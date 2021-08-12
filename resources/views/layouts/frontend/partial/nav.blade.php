<!-- Section Navbar -->

<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark bg-alpha ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="#" width="35" height="35" class="d-inline-block align-top" alt="">
            CE
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey"
                aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse " id="navbarKey">

            <ul class="navbar-nav ml-auto text-center ">
                <li class="nav-item active">

                    <a class="nav-link  fas fa-book"   href="#" > ครอสเรียน <span class="sr-only">(current)</span></a>

                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fas fa-book " href="##" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                         ข่าว/ประกาศ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"> News & Blog </a>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link fas fa-address-card" href="about-us.html"> เกี่ยวกับเรา</a> </li>


                <li class="nav-item   ">
                    <a class="nav-link  fas fa-sign-in-alt" href="{{ route('login') }}">  เข้าสู่ระบบ</a></li>


            </ul>

        </div>
    </div>

</nav>
