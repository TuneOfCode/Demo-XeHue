/* Ẩn - hiện thanh navbar */
$('.navbar-list').css('display', '-moz-grid-line');
$('#btn-navbar').click(function(){
    $('.navbar-list').css('display', 'gird');
    $('.navbar-list > li').css('display', 'block');
    $('.navbar-list').toggle(500);
})

// Lấy ngày giờ hiện tại cho ngày đi - giờ đi 
function lessTen(val) {
    if (val >= 10)
      return val;
    else
      return '0' + val;
  }
  
  $(document).ready(function(){
    var d = new Date();
    $('#day-input').val(lessTen(d.getFullYear()) + '-' + lessTen(d.getMonth() + 1) + '-' + lessTen(d.getDate()));
    $('#time-input').val(lessTen(d.getHours()) + ':' + lessTen(d.getMinutes()));
    console.log(d.getHours() + ':' + d.getMinutes())
  });


// Nút checkbox mở - đóng select
$('#rent-input').click(function(){
    if ($('#rent-input').is(':checked')) $('#rent-select').removeAttr("disabled");
    else $('#rent-select').attr('disabled', '');
})


// Nút chuyển lên đầu trang
$(function(){
    if($(".btn-top").length > 0){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) $(".btn-top").fadeIn();
                else $(".btn-top").fadeOut();
        });
        $(".btn-top").click(function () {
            $("body,html").animate({scrollTop: 0}, "slow");
        });
    }		
})

// Nút zalo 
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )
{document.getElementById("linkzalo").href="https://zalo.me/SĐT_Của_Bạn";}

