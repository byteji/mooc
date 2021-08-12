@extends('layouts.app')


@section('content')

<div class="container">
    <div class="container">
        <div align="center" class="row">
            <div class="col-md-12 col-sm-12 col-xl-12">
                <p style="font-size: medium">Computer Engineering Ep1</p>
            </div>
            <div class="col-md-12 col-sm-12 col-xl-12">
                <button>back</button>
                <button>next</button>
            </div>
        </div>
    </div>
    
    <div style="margin-top: 0.75rem" class="row justify-content-center">
        <div class="col-md-6s col-sm-12 embed-responsive embed-responsive-16by9 ">
            <div id="container">
                <video controls crossorigin playsinline
                    data-poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
                    <!-- Video files -->
                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                        type="video/mp4" size="576" />
                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4"
                        type="video/mp4" size="720" />
                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4"
                        type="video/mp4" size="1080" />

                    <!-- Caption files -->
                    <track kind="captions" label="English" srclang="en"
                        src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default />
                    <track kind="captions" label="Français" srclang="fr"
                        src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt" />

                    <!-- Fallback for browsers that don't support the <video> element -->
                    <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                        download>Download</a>
                </video>
            </div>

        </div>
    </div>
</div>
<br>
<footer align="center" class="bg-white shadow-sm2">
    <div style="padding: 0.75rem ;" class="container">
        Copyright &copy; <?php
                $date = getDate(date("U"));
                 echo "$date[year]";?> All rights reserved | This website is made with <i class=""></i> by
        CE MOOC</a>
    </div>
</footer>

@endsection