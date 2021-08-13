@extends('layouts.frontend.master')

@section('title','Index')

@push('css')

@endpush

@section('content')
<!--================End Home ส่วนรูป =================-->

<!-- Section Carousel -->

<section id="carouselExampleIndicators" class="carousel slide center1  " data-ride="carousel" >
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

    <div class="carousel-inner  ">
        <div class="carousel-item active">

            <img class=" img-fluid" src="{{ asset('assets/frontend/img/carousel/1.png') }}"
                alt="First slide">
            <div class="backscreen"></div>
        </div>
<!--- --------------------------------------------------------------------------------->
    <div class="carousel-item ">
            <img class=" img-fluid" src="{{ asset('assets/frontend/img/carousel/2.png') }}" alt="//">
        </div>
<!--- --------------------------------------------------------------------------------->
    <div class="carousel-item ">
            <img class=" img-fluid" src="{{ asset('assets/frontend/img/carousel/3.png') }}" alt="//">
        </div>
<!--- --------------------------------------------------------------------------------->
    </div>



    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>

<!--  END  Section Carousel -->

<!-- Section Hope -->
<br>
<section class="jumbotron  jaa  text-center">
    <div class="container ">
        <h1 class="">CE MOOC </h1>
        <p class=""> เกิดจากอยากให้ทุกคนได้เรียนรู้  </p>
    </div>
</section>

<!-- END  Section Hope -->


<!-- Blog -->
 <section class="container">

    <h1 class="border-short-bottom text-center"> ครอส</h1>
    <div class="row">

        <section class="col-12 col-sm-6 col-md-4 p-2">
            <div class="card h-100">
                
                <a href="#" class="warpper-card-img">
                    <img class="card-img-top" src="{{asset('assets/frontend/img/projects/p1.png')}}" alt="Coding">
                </a>
                <div class="card-body ">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title</p>
                </div>
                <div class="p-3">
                    <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </section>

        <section class="col-12 col-sm-6 col-md-4 p-2">
            <div class="card h-100">
                <a href="#" class="warpper-card-img">
                    <img class="card-img-top" src="{{asset('assets/frontend/img/projects/p2.png')}}" alt="Coding">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title</p>
                </div>
                <div class="p-3">
                    <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </section>

        <section class="col-12 col-sm-6 col-md-4 p-2">
            <div class="card h-100">
                <a href="#" class="warpper-card-img">
                    <img class="card-img-top" src="{{asset('assets/frontend/img/projects/p3.png')}}" alt="Coding">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title</p>
                </div>
                <div class="p-3">
                    <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </section>

        <section class="col-12 col-sm-6 col-md-4 p-2">
            <div class="card h-100">
                <a href="#" class="warpper-card-img">
                    <img class="card-img-top" src="{{asset('assets/frontend/img/projects/p4.png')}}" alt="Coding">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title</p>
                </div>
                <div class="p-3">
                    <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </section>

        <section class="col-12 col-sm-6 col-md-4 p-2">
            <div class="card h-100">
                <a href="#" class="warpper-card-img">
                    <img class="card-img-top" src="{{asset('assets/frontend/img/projects/p5.png')}}" alt="Coding">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title</p>
                </div>
                <div class="p-3">
                    <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </section>

        <section class="col-12 col-sm-6 col-md-4 p-2">
            <div class="card h-100">
                <a href="#" class="warpper-card-img">
                    <img class="card-img-top" src="{{asset('assets/frontend/img/projects/p6.png')}}" alt="Coding">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title</p>
                </div>
                <div class="p-3">
                    <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </section>
    </div>
</section>


<!--================  เส้นคั่น =================-->

<hr width=80% size=50 color=363636>

<!--================ เส้นคั่น =================-->

<!--================ Course =================-->

<section class="projects_area p_120">

    <div class="container">
        <h1 class="border-short-bottom text-center"> Course</h1>
        <h4 class=" text-center"> แสดงวิชาตามหมวดหมู่</h4>


        <div class="projects_fillter">

            <ul class="filter list">

                <li class="active" data-filter="*"><a href="">All Course </a></li>
                <li data-filter=".brand "><a href="">Hardware</a></li>
                <li data-filter=".work "><a href="">Software </a></li>
                <li data-filter=".web" ><a href="">Network</a></li>
            </ul>

        </div>


        <div class="projects_inner row ">

            <section class=" col-12 col-sm-6 col-md-4 p-2  web ">

            <div class="projects_item">

                <div class="card h-100  ">

                     <a href="#" class="warpper-card-img  ">

                        <img class=" card-img-top " src="{{asset('assets/frontend/img/projects/p1.png')}}" alt="Coding">

                    </a>
                    <div class="card-body">
                        <h5 class="card-title">ไพทอน</h5>
                        <p class="card-text">มาเรียนกับเรากันเถอะ</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                    </div>
                    </div>

                </div>


            </section>

            <!--=========================================================================================================-->
            <section class="col-12 col-sm-6 col-md-4 p-2  work ">

            <div class="projects_item">

                <div class="card h-100  ">

                    <a href="#" class="warpper-card-img  ">

                        <img class=" card-img-top " src="{{asset('assets/frontend/img/projects/p2.png')}}" alt="Coding">

                    </a>

                    <div class="card-body">
                        <h5 class="card-title">จาวา</h5>
                        <p class="card-text">มาเรียนกับเรากันเถอะ</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                    </div>

                </div>
                </div>
            </section>

            <!--=========================================================================================================-->
            <section class="col-12 col-sm-6 col-md-4 p-2 work ">

            <div class="projects_item">

                <div class="card h-100  ">

                    <a href="#" class="warpper-card-img  ">

                        <img class="card-img-top  " src="{{asset('assets/frontend/img/projects/p3.png')}}" alt="Coding">

                    </a>

                    <div class="card-body">
                        <h5 class="card-title">ภาษา ซี </h5>
                        <p class="card-text">มาเรียนกับเรากันเถอะ</p>
                    </div>

                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                    </div>
                  </div>

                </div>
            </section>
            <!--=========================================================================================================-->
            <section class="col-12 col-sm-6 col-md-4 p-2 web ">

            <div class="projects_item">

                <div class="card h-100  ">

                    <a href="#" class="warpper-card-img  ">
                        <img class=" card-img-top " src="{{asset('assets/frontend/img/projects/p4.png')}}" alt="Coding">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">แอนดรอย</h5>
                        <p class="card-text">มาเรียนกับเรากันเถอะ</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                    </div>
                </div>
                </div>
            </section>
            <!--=========================================================================================================-->
            <section class="col-12 col-sm-6 col-md-4 p-2  web ">

            <div class="projects_item">

                <div class="card h-100  ">
                    <a href="#" class="warpper-card-img  ">
                        <img class=" card-img-top " src="{{asset('assets/frontend/img/projects/p5.png')}}" alt="Coding">

                    </a>
                    <div class="card-body">
                        <h5 class="card-title">ดีไซน์ ux/ui</h5>
                        <p class="card-text">มาเรียนกับเรากันเถอะ</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                    </div>
 </div>
                </div>
            </section>
            <!--=========================================================================================================-->
            <section class="col-12 col-sm-6 col-md-4 p-2 brand web ">

  <div class="projects_item">
                <div class="card h-100   ">

                    <a href="#" class="warpper-card-img  ">


                        <img class=" card-img-top " src="{{asset('assets/frontend/img/projects/a.png')}}" alt="Coding">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">ลองๆเทรสๆๆ</h5>
                        <p class="card-text">มาเรียนกับเรากันเถอะ</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                    </div>

                </div>

    </div>
            </section>

            <!--=========================================================================================================-->
        </div>

    </div>
</section>


<!--================ END Course =================-->

<!--================  เส้นคั่น =================-->
<br>
<hr width=80% size=50 color=363636>

<!--================ เส้นคั่น =================-->


<!--================ to-top =================-->
<div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>



@endsection



@push('js')

@endpush
