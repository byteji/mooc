@extends('layouts.frontend.master')

@section('title','Index')

@push('css')

@endpush

@section('content')

<!-- Section Carousel -->
<div class="container">

<section id="myCarousel" class="carousel slide  carousel1  " data-ride="carousel" >
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner  ">

        <div class="carousel-item active">
                  <img class=" img-fluid" src="{{ asset('assets/frontend/img/carousel/1.png') }}" alt="First slide">
            <div class="backscreen"></div>
        </div>
        
<!--- --------------------------------------------------------------------------------->
     <div class="carousel-item ">
                 <img class=" img-fluid" src="{{ asset('assets/frontend/img/carousel/2.png') }}" alt="//">
            <div class="backscreen"></div>
        </div> 
<!--- --------------------------------------------------------------------------------->
     <div class="carousel-item ">
                <img class=" img-fluid" src="{{ asset('assets/frontend/img/carousel/3.png') }}" alt="//">
            <div class="backscreen"></div>
        </div> 
<!--- --------------------------------------------------------------------------------->
    </div> <!--  .carousel-inner -->


 <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
   

</section>  
</div>

<!--  END  Section Carousel -->

<!-- Section jumbotron -->
<br>


<div class="jumbotron jumb text-center" style ="padding-bottom: 20px;"  >
 		<div class="container-fluid">
			<h1 class="jumbotron-heading font-weight-bold " style="color:#f06eaa" >CE MOOCx </h1>
            <p class="lead "> คอร์สเรียนออนไลน์ฟรี ที่ มหาวิทยาลัยราชภัฎสวนสุนันทา สาขาวิชาวิศกรรมคอมพิวเตอร์ เพราะเราเชื่อว่าทุกคนมีสิทธิที่จะเรียนรู้ และควรจะได้เรียนรู้ตลอดชีวิตมาร่วมกันฝึกทักษะทางความคิด
                                            ความสามารถ และสติปัญญาเพื่อพัฒนาศักยภาพของตนเองได้ที่ <span style="color:#f06eaa" >CEMOOCx</span> </p>
			<p>
				<a href="http://www.ce.fit.ssru.ac.th/page/information" class="btn btn-success my-2"> ประวัติสาขา </a>
				<a href="#" class="btn btn-secondary my-2">เกี่ยวกับเรา</a>
			</p>
		</div>
 	</div>


<!-- END  Section Hope -->


<!-- Blog -->
 <section class="container">

    <h1 class="border-short-bottom text-center"> ครอสเรียนแนะนำ </h1>
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
                    <a href="#" class="btn btn-success btn-block">อ่านต่อได้ที่</a>
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
                    <a href="#" class="btn btn-success btn-block">อ่านต่อได้ที่</a>
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
                    <a href="#" class="btn btn-success btn-block">อ่านต่อได้ที่</a>
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
                    <a href="#" class="btn btn-success btn-block">อ่านต่อได้ที่</a>
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
                    <a href="#" class="btn btn-success btn-block">อ่านต่อได้ที่</a>
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
                    <a href="#" class="btn btn-success btn-block">อ่านต่อได้ที่</a>
                </div>
            </div>
        </section>
    </div>
</section>


<!--================  เส้นคั่น =================-->

<hr width=80% size=50 color=363636>



<!--================ ข่าวสาร =================-->
<section class="container">
       <div class="text-center">
          <h2  class="border-short-bottom2  " >  ข่าวสารชาววิศวกรรมคอมสวนสุนันทา  </h2>
            <p >กิจกรรมสาขาวิศวกรรมคอมพิวเตอร์ </p>
         </div>
       <!-- <div class="row">  -->
 


 



<!--================ END ข่าวสาร =================-->
</section>



<!--================  เส้นคั่น =================-->
<br>
<hr width=80% size=50 color=363636>






<!--================ to-top =================-->
<div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>



@endsection



@push('js')

@endpush
