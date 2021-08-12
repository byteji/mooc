 /* แผนที่*/
function initMap() {
    var uluru = {lat: 13.776431, lng: 100.508367};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}
 /* หน้าบาร์เมนู*/
$(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    if (scrollTop > 1) {
        $('#navbar').css('padding', '5px 25px')
    } else {
        $('#navbar').css('padding', '1px')
    }


})
 /* ล็อกอิน*/
$(function() {
   $('#btnSignin').click(function() {
       $('#modalSignin').modal();
   });
});

/* ปุ่มฟอม*/
$(function() {
    $('#bt').click(function() {
        $('#form.html').modal();
    });
 });



