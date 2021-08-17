
<!-- Section Navbar -->
<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); ?>

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
               <li class="nav-item"  <?php echo $file_name ==  'index' ? 'active': '' ?>" >

                 <a class="nav-link"   href="{{ url('/') }}" > หน้าแรก  <span class="sr-only">(current)</span></a>
              </li>

                <li class="nav-item" <?php echo $file_name == 'home' ? 'active': '' ?> >
                      <a class="nav-link " href="{{url('/home')}}"> ครอสเรียน  </a> 
                </li>

                <li  class="nav-item"  >
                    <a class="nav-link " href="http://www.ce.fit.ssru.ac.th/home"> ข่าวสาร  </a>
                </li>  


              <!-- <li class="nav-item dropdown" " > 
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> ข่าวสาร </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"> ข่าวสาร </a>
                    </div> 
                </li> -->

                <li class="nav-item" <?php echo $file_name == '#' ? 'active': '' ?> >
                    <a class="nav-link " href=" "> เกี่ยวกับเรา  </a>
                </li> 
                
                </ul>

                <ul class="navbar-nav ml-auto " >
                   <li class="nav-item " >
                         <!-- <a href="{{route('login')}}" class="btn btn-outline-success my-2 my-sm-0" role="button">เข้าสู่ระบบ</a> -->
                    
                       <!-- <button id="btnSignin" type="submit" class= "btn btn-outline-success my-2 my-sm-0" >  เข้าสู่ระบบ </button></li> -->
                       <button id="btnSignin" class="btn btn-outline-success my-2 my-sm-0" type="button"> เข้าสู่ระบบ</button>
                  
                  <li class="nav-item ">
                   <a href="{{route('register')}}">
                      <button   type="submit"  class="btn btn-success my-2 my-sm-0 ">  ลงทะเบียน </button></li>
                    </a>
                </ul>

                </div>
        </div>
    </div>

</nav>
  
    <!-- Section log in -->
    <div id="modalSignin" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">สมาชิกเข้าสู่ระบบ</h5>
                    <button class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="logi">Login:</label>
                            <input type="text" id="login" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pswd">Password:</label>
                            <input type="password" id="pswd" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">เข้าสู่ระบบ</button>
                    <button class="btn btn-warning">ลืมรหัสผ่าน</button>
                    <button class="btn btn-success">ลงทะเบียน </button>
                </div>
            </div>
        </div>
    </div> 
    <!-- Section log in -->