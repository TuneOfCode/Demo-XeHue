/* Ẩn - hiện thanh navbar */
$('.navbar-list').css('display', '-moz-grid-line');
$('#btn-navbar').click(function(){
    $('.navbar-list').css('display', 'gird');
    $('.navbar-list > li').css('display', 'block');
    $('.navbar-list').toggle(500);
})

// Nút chuyển lên đầu trang
$(function(){
    if($(".btn-top").length > 0){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) $(".btn-top").fadeIn();
                else $(".btn-top").fadeOut();
        });
        $(".btn-top").click(function () {
            $("body,html").animate({scrollTop: 0}, "slow");
        });
    }		
})