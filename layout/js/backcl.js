var lang = "";

console.log('as');

setTimeout(
    function(){
      console.log('object45');
      $(".slide-logo").css('display','none');
      $('.slide-presentation').css('display','flex');
    }, 4500);

$(function(){
    'use strict';
    
    $(".btn-lang").click(function() {
        $('.besoin1').animate({
            height:'100vh'
        });
        $('.besoin2').animate({
            height:'100vh'
        });
        $('.hopital').css("display",'block');
        $('.taxi').css("display",'block');
        $('.logo').fadeOut("slow");
        $('.logo-mult').fadeIn("slow");
        $('.besoin3').css('display','flex');
        $('.besoin4').css('display','flex');
    });
    $(".close").click(function() {
        $('.popup-ticket').css('display','none');
        $('.popup-ticket3').css('display','none');
    });

    $(".slide-logo").click(function() {
        $('.this').css('display','none').delay(500);
    });

    $("#opt1").click(function() {
        $('.popup-ticket').css('display','flex');
    });
    $("#opt2").click(function() {
        $('.popup-ticket3').css('display','flex');
    });
    $(".ar").click(function() {
        $("#taxi").attr("src", "data/images/taxiar.png");
        $("#hopital").attr("src", "data/images/hospitalar.png");
        $("#pharmacy").attr("src", "data/images/1.png");
        $("#covid").attr("src", "data/images/2.png");
        lang = 'ar';
    });
    $(".fr").click(function() {
        $("#taxi").attr("src", "data/images/taxi.png");
        $("#hopital").attr("src", "data/images/hopital.png");
        $("#pharmacy").attr("src", "data/images/4.png");
        $("#covid").attr("src", "data/images/3.png");
        lang = 'fr';
    });
    $('.besoin1').click(function () { 
        window.location.href = "taxi.php?lang="+lang;
    });
    $('.besoin2').click(function () { 
        window.location.href = "hopital.php?lang="+lang;
    });
    $('#sub-res').click(function () { 
        if($('#name-taxi').val() !== "" && $('#tel-taxi').val() !== ""){
            $(this).css({'background-color':'var(--main-color)','color':'white'});
            $('.ticket-taxi').css('display','flex');
        }
    });
    $(".close2").click(function() {
        $('.ticket-taxi').css('display','none');
    });
});

console.log('stt hello');

