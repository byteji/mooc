@extends('layouts.frontend.master_student')

@section('title','home')

@push('css')

@endpush

@section('content')
<!--================End Home ส่วนรูป =================-->

<!-- Section subject  details  -->
  <section class=" subject_details_inner py-5 ">
   <div class="container   "> 
     <div class="row">
           <div class="col-lg-6 py-3 p-lg-0  ">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZWjEMjiagcg?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div> 
            <div class="col-lg-6 subject_right_text details_right_content ">
                  <div  class="table_subject_details"> 

                  <table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
   
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
  
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
 
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>

  </tr>
</table>
                  </div>

            
                <!-- <h2>ทำความรู้จักกับเราให้ดียิ่งขึ้น...</h2>
                <p>เราทำการสอนการเขียนเว็บไซต์สำหรับมือใหม่ ด้วยภาษาต่างๆได้แก่ AngularJS Firebase VueJs2 HTML5 CSS3 PHP MySQLi Laravel5 Bootstrap4</p>
                <br>

                <h3>เราคาดหวังไว้ว่า...</h3>
              
                จะสอนนักเรียนทุกคน ให้สามารถสร้างเว็บไซต์ขึ้นมาด้วยตัวเอง และเรียนรู้องค์ประกอบ ทุกอย่างที่จำเป็นต่อการเริ่มสร้างเว็บไซต์ขึ้นมา เพื่อให้สามารถประกอบอาชีพ, เข้าสมัครงาน, ทำโปรเจคจบ, หรือทำโปรเจคที่ตัวเองคาดหวังไว้ ให้สำเร็จ -->
             </div>  

        </div>
    </div>



</section>











<!--================ to-top =================-->
<div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


@endsection






@push('js')
@endpush
