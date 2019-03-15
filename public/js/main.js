$('body').swipe({
   swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
    //console.log(event.target.className);
    var cl = event.target.className;


    if (cl=='title title_promo' || cl=='inn inn_promo' || cl=='text_promo' || cl=='btn btn-green btn-promo' || cl=='ov'){

    }else{
         if ($(window).width()<1180){
           if (direction=='left' || direction=='right'){
             $("nav ul").toggle("slide", {direction: "right" }, 400);
             if ($('body').hasClass('mo')) $('body').removeClass('mo'); else $('body').addClass('mo');
           }
          }
    }
   }
});

$(document).ready(function(){

  //$(window).on( "swipeleft", function( event ) { alert('asd'); } )

  $('.slider__promo').slick({arrows:false,dots:true});

  $('.open__modal').fancybox();

  $('.i_phone').mask('+7 (999) 999-99-99');


  $("nav .pull").on('click', function(e) {
    e.preventDefault();
    if ($(this).hasClass('act')){
      $(this).removeClass('act');
      $('body,html').removeClass('hs');
    }else{
      $(this).addClass('act');
      $('body,html').addClass('hs');
    }
    $("nav ul").toggle("slide", {direction: "right" }, 400);
  });


  $("nav .pull_m").on('click', function(e) {
    e.preventDefault();
    $(this).hide();
    $('body').removeClass('mo');
    if ($(this).hasClass('act')){
      $(this).removeClass('act');
      $('body,html').removeClass('hs');
    }else{
      $(this).addClass('act');
      $('body,html').addClass('hs');
    }
    $("nav ul").toggle("slide", {direction: "right" }, 400);
  });


  $("#contacts .filters li").on('click', function(e) {
    e.preventDefault();
    $("#contacts .filters li").removeClass('active');
    $(this).addClass('active');
    $("#contacts .tab").hide();
    $("#contacts .tab."+$(this).attr('data-tab')).show();
  });




  var nav = $('header');

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      nav.addClass("f-nav");
    } else {
      nav.removeClass("f-nav");
    }
  });

  var wow = new WOW( {
      mobile:    false
    });
  wow.init();

  $(".fancybox-close-small").on('click', function(e) {
    e.preventDefault();
    $.fancybox.close(true);
  });

});



    var locations = [['<p>Адрес</p>', 55.769121,37.470368, 'img/map.png'],];


    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: new google.maps.LatLng(55.769121,37.470368),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();
    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: {
          url: locations[i][3],
          scaledSize: new google.maps.Size(32, 32)
        }
      });
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }



function closeModal(){
    $.fancybox.close(true);
}


function sendForm(form_id,res_div) {
    var msg = $('#'+form_id).serialize();


    $.ajax({
      type: 'POST',
      url: 'send.php',
      data: msg,
      success: function(data){

        $.fancybox.close(true);
        $('#thanks').fancybox().trigger('click');
        setTimeout(closeModal, 5000);

        $(".fancybox-close-small").on('click', function(e) {
          e.preventDefault();
          $.fancybox.close(true);
        });

        jQuery("#"+form_id).trigger("reset");
      },
      error:  function(xhr, str){

        $.fancybox.close(true);
        $('#thanks').fancybox().trigger('click');
        setTimeout(closeModal, 5000);

        $(".fancybox-close-small").on('click', function(e) {
          e.preventDefault();
          $.fancybox.close(true);
        });

        jQuery("#"+form_id).trigger("reset");
      }
    });
}