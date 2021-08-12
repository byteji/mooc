
 /* หน้าบาร์เมนู*/
 $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    if (scrollTop > 1) {
        $('#navbar').css('padding', '0px 25px')
    } else {
        $('#navbar').css('padding', '5px')
    }
})
/*   ลูกเล่น to-top  */
$('.to-top').click(function (){
    $('html, body').animate({scrollTop: '0px'}, 800);
})
/*   END ลูกเล่น to-top  */

 /*   ไอคอน หน้าหน้าบาร์เมนู*/
function sideMenu() {
	var show = false;
	var el = $('.side-menu-toggle i');
	var bar = 'fas fa-bars';		   //=
	var times = 'fas fa-times';	//x

	$('.side-menu-toggle').click(function(e) {
		e.preventDefault();
		$('.side-menu').toggleClass('show');
		show = !show;
		//สลับ = กับ x
		if (show) {
			el.removeClass(bar).addClass(times);
		} else {
			el.removeClass(times).addClass(bar);
		}
	});

	$('.side-menu a').click(function(event) {
		if ($(this).next('ul').length) {		//ถ้ามีเมนูย่อย
			event.preventDefault();
			$(this).next().toggle('fast');
			$(this).children('i:last-child').toggleClass('fa-caret-down fa-caret-left');
		}
	});
}

 /*   END ไอคอน หน้าหน้าบาร์เมนู*/

/*  img-responsive ไอคอนฟุตเตอร์ */
$("#indexContent img").addClass("img-responsive");
$("#indexContent img").css('display', 'block');
$("#indexContent img").css('margin', 'auto');
/*   END img-responsive ไอคอนฟุตเตอร์ */


 /*   LOGIN */
const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
 /*  END  LOGIN */

/*  Isotope Fillter js แยก หมวดหมูวิชา
    /*----------------------------------------------------*/
	function projects_isotope(){
        if ( $('.projects_area').length ){
            // Activate isotope in container
			$(".projects_inner").imagesLoaded( function() {
                $(".projects_inner").isotope({
                    layoutMode: 'fitRows',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });
            });

            // Add isotope click function
            $(".filter li").on('click',function(){
                $(".filter li").removeClass("active");
                $(this).addClass("active");

                var selector = $(this).attr("data-filter");
                $(".projects_inner").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: "linear",
                        queue: false,
                    }
                });
                return false;
            });
        }
    }
    projects_isotope();
/*-----------END isotope ------------*/
