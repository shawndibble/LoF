(function($) {
    "use strict";

    /* ==============================================
    LOADER -->
    =============================================== */

    $(window).load(function() {
        $('#loader').delay(600).fadeOut('slow');
        $('#loader-container').delay(600).fadeOut('slow');
        $('body').delay(600).css({'overflow':'visible'});
    })

    /* ==============================================
    HOME PACK SELECT -->
    =============================================== */

    $('#pack').change(function () {
      updateHomePackDescription();
    })

    $('.book-now').click(function () {
      var value = $(this).data('val');
      $('#pack').selectpicker('val', value);
      $('#pack').selectpicker('refresh');
      updateHomePackDescription();
    });

    /* ==============================================
    HOME FORM SUBMISSION -->
    =============================================== */

      $('#custom-button').click(function(){
        $(this).closest('form').attr("action", "options.php");
      });

      $('#home-book-button').click(function() {
        if ($('#pack').val() == 'custom_pack') {
          $(this).closest('form').attr("action", "options.php");
        } else {
          $(this).closest('form').attr("action", "success.php");
        }
      });

    /* ==============================================
    MENU HOVER -->
    =============================================== */

    $(".header .dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );

    /* ==============================================
    ACCORDION -->
    =============================================== */

    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('icon-minus icon-plus');
    }
    $('#accordion').on('hidden.bs.collapse', toggleChevron);
    $('#accordion').on('shown.bs.collapse', toggleChevron);

    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('icon-minus icon-plus');
    }
    $('#accordion1').on('hidden.bs.collapse', toggleChevron);
    $('#accordion1').on('shown.bs.collapse', toggleChevron);

    /* ==============================================
    CIRCLE -->
    =============================================== */

        $('#circle1').circleProgress({
            value: 0.36,
            size: 200,
            thickness: 10,
            fill: { color: '#ffc926' }
        });
        $('#circle2').circleProgress({
            value: 0.58,
            size: 200,
            thickness: 10,
            fill: { color: '#ffc926' }
        });
        $('#circle3').circleProgress({
            value: 0.70,
            size: 200,
            thickness: 10,
            fill: { color: '#ffc926' }
        });
        $('#circle4').circleProgress({
            value: 0.90,
            size: 200,
            thickness: 10,
            fill: { color: '#ffc926' }
        });

    /* ==============================================
    PROGRESS BAR -->
    =============================================== */

    $('.progress .progress-bar').progressbar({transition_delay: 800});

    /* ==============================================
    LIGHTBOX -->
    =============================================== */

    jQuery('a[data-gal]').each(function() {
        jQuery(this).attr('rel', jQuery(this).data('gal'));
        });
    jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});

    /* ==============================================
    CAROUSEL -->
    =============================================== */

        $('#testimonials').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            dots:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })

        $('.owl-fullwidth').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })

    /* ==============================================
    DATAPICKER -->
    =============================================== */

        $('.datetimepicker').datetimepicker();

    /* ==============================================
    MAP -->
    =============================================== */

    var locations = [
        ['OUR INFORMATIONS', 30.267153, -97.74306079999997, 2]
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
            scrollwheel: false,
            navigationControl: true,
            mapTypeControl: false,
            scaleControl: false,
            draggable: true,
            styles: [ { "stylers": [ { "hue": "#000" },  {saturation: -100},
                {gamma: 1.6} ] } ],
            center: new google.maps.LatLng(30.267153, -97.74306079999997),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map ,
            icon: 'images/dummy.png'
            });


          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(locations[i][0]);
              infowindow.close(map, marker);
            }
          })(marker, i));
        }

})(jQuery);

function updateHomePackDescription() {
  var selected = $('#pack').val();
  $('.pack-description > div').addClass('hidden');
  $('.'+selected).removeClass('hidden');
}
