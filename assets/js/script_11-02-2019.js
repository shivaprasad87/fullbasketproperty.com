function scaleCaptcha(elementWidth) {
    $(".g-recaptcha").each(function (i, v) {
        // Width of the reCAPTCHA element, in pixels
        var reCaptchaWidth = 304;
        // Get the containing element's width
        var containerWidth = $(v).closest('form').width();

        // Only scale the reCAPTCHA if it won't fit
        // inside the container
        if (reCaptchaWidth > containerWidth) {
            // Calculate the scale
            var captchaScale = containerWidth / reCaptchaWidth;
            // Apply the transformation
            $(v).css({
                'transform': 'scale(' + captchaScale + ')'
            });
        }
    });

}

$(function () {

    // Initialize scaling
    // scaleCaptcha();

    // Update scaling on window resize
    // Uses jQuery throttle plugin to limit strain on the browser
    // $(window).resize( $.throttle( 100, scaleCaptcha ) );

});
$(document).ready(function () {
    $('.price_range, .property_geo, .min_baths, .min_bed').iCheck({
        checkboxClass: 'icheckbox_square-yellow',
        radioClass: 'iradio_square',
        increaseArea: '20%' // optional
    });

    function random(owlSelector) {
        owlSelector.children().sort(function () {
            return Math.round(Math.random()) - 0.5;
        }).each(function () {
            $(this).appendTo(owlSelector);
        });
    }

    $('.owl-carousel').owlCarousel({
        autoPlay: 8000, //Set AutoPlay to 3 seconds
        items: 3,
        margin: 50,
        dots: true,
        beforeInit: function (elem) {
            //Parameter elem pointing to $("#owl-demo")
            random(elem);
        },
        itemsDesktop: [1199, 3],
        temsDesktopSmall: [979, 3]
    });

})
$(window).resize(function () {
    setTimeout(function () {
        $('.faq').css('height', $('.faq_next').css('height'));
    }, 1000);

    setTimeout(function () {
        $('.bg-img').css('height', $('.fac-section').css('height'));
    }, 1000);
});
if (typeof search != 'undefined' && search != null) {

    $.ajax({
        type: 'GET',
        url: base_url + 'home/price_range',
        data: {},
        success: function (data) {
            var data = JSON.parse(data);

            $("#price").slider({id: "slider12c", min: parseInt(data.min), max: parseInt(data.max), range: true});
        }
    });
    $("#property").slider({id: "slider12c", min: 1, max: 4, range: true});
    $("#baths").slider({id: "slider12c", min: 1, max: 120, range: true});
    $("#bed").slider({id: "slider12c", min: 100, max: 12000, range: true});
} else {

    $.ajax({
        type: 'GET',
        url: base_url + 'home/price_range',
        data: {},
        success: function (data) {
            var data = JSON.parse(data);

            $("#price").slider({
                id: "slider12c",
                min: parseInt(data.min),
                max: parseInt(data.max),
                range: true,
                value: [parseInt(data.min), parseInt(data.max)]
            });
        }
    });
    $("#property").slider({id: "slider12c", min: 1, max: 4, range: true, value: [1, 4]});
    $("#baths").slider({id: "slider12c", min: 1, max: 120, range: true, value: [1, 120]});
    $("#bed").slider({id: "slider12c", min: 100, max: 12000, range: true, value: [100, 12000]});
}

function openNav() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("mySidenav").style.width = "335px";
    document.getElementById("main").style.marginLeft = "335px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}

$(document).ready(function () {
    $('#list').click(function (event) {
        event.preventDefault();
        $("#showPattern").val('list-group-item');
        console.log($("#showPattern").val());
        $('#products .item').addClass('list-group-item');
        $('#products .item').removeClass('grid-group-item');
    });
    $('#grid').click(function (event) {
        event.preventDefault();
        $("#showPattern").val('grid-group-item');
        console.log($("#showPattern").val());
        $('#products .item').removeClass('list-group-item');
        $('#products .item').addClass('grid-group-item');
    });
    $('.input-3').rating({displayOnly: true, step: 0.5});
    $('.listing-section #list').click(function () {
        $('#grid').removeClass('active');
        $(this).addClass('active')
    })
    $('.listing-section #grid').click(function () {
        $('#list').removeClass('active');
        $(this).addClass('active')
    })
});

toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "500",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

$(".favourite").click(function () {

    var id = $(this).data('id');
    var url = $(this).data('url');
    var that = $(this);
    if ($(this).data('access') == 'denied') {
        toastr["warning"]("<div><a href='" + url + "'>Please Login To Make as Favourites. Click Here</a></div>");
    } else {
        $.ajax({
            type: 'POST',
            url: url,
            data: {id: id},
            success: function (data) {
                if (that.hasClass('fa-heart')) {
                    that.removeClass('fa-heart');
                    that.addClass('fa-heart-o');
                    toastr["info"]("<div>Removed from favourites list</div>");
                } else {
                    that.removeClass('fa-heart-o');
                    that.addClass('fa-heart');
                    toastr["success"]("<div>Added to favourites list</div>");
                }
            }
        });
    }

});

$(document).ready(function () {
    $('.advanced-search').click(function () {
        $('.city-section .search-area').slideToggle();
    })
})
$(window).scroll(function () {
    if ($(window).scrollTop() >= 200) {
        $('.sub-header').addClass('fixed-header');
    }
    else {
        $('.sub-header').removeClass('fixed-header');
    }
});
// Can also be used with $(document).ready()
$(document).ready(function () {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
    $('.specslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });

    if (typeof lightSlider != 'undefined') {
        var deviceWidth = $(window).width();
        var itemCount = 4;
        if (deviceWidth >= 200 && deviceWidth < 480) {
            itemCount = 1;
        } else if (deviceWidth >= 480 && deviceWidth < 786) {
            itemCount = 2
        } else if (deviceWidth >= 786 && deviceWidth < 1024) {
            itemCount = 3
        }
        $("#achievments").lightSlider({
            item: itemCount,
            autoWidth: false
        });

        $(".ach_modal_opener").on('click', function (e) {
            e.preventDefault();

            $("#achievement_modal .ach_image").prop('src', $(this).find('.image').text());
            $("#achievement_modal .ach_comment").html($(this).find('.comment').html());
            $("#achievement_modal").modal('show');
        })

        $(document).ready(function () {

            var _scroll = true, _timer = false, _floatbox = $("#contact_form"), _floatbox_opener = $(".contact-opener");
            _floatbox.css("left", "-261px"); //initial contact form position

            //Contact form Opener button
            _floatbox_opener.click(function () {
                if (_floatbox.hasClass('visiable')) {
                    _floatbox.animate({"left": "-261px"}, {duration: 300}).removeClass('visiable');
                } else {
                    _floatbox.animate({"left": "0px"}, {duration: 300}).addClass('visiable');
                }
            });

            //Effect on Scroll
            $(window).scroll(function () {
                if (_scroll) {
                    _floatbox.animate({"top": "100px"}, {duration: 300});
                    _scroll = false;
                }
                if (_timer !== false) {
                    clearTimeout(_timer);
                }
                _timer = setTimeout(function () {
                    _scroll = true;
                    _floatbox.animate({"top": "100px"}, {easing: "linear"}, {duration: 500});
                }, 400);
            });


            //reset previously set border colors and hide all message on .keyup()
            $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function () {
                $(this).css('border-color', '');
                $("#result").slideUp();
            });

        });
    }


    /** GET A CALL BACK ACTION */
    $(document).on('click', ".btn-call-back", function (e) {
        e.preventDefault();
        var propContact = $("#prop-contact");
        $("#prop-id").val($(this).data('id'));
        propContact.find(".prop-name").text($(this).closest(".row").find(".group.inner.list-group-item-heading").text());
        propContact.modal('show');
    });
    $(document).on('submit', '#prop-form', function (e) {
        e.preventDefault();
        var that = $(this);
        $.post(site_url + 'home/property_enquiry', $(this).serialize(), function (response) {
            response = JSON.parse(response);
            if (typeof response.status != 'undefined' && response.status == 'failed') {
                toastr["error"]("Captcha authentication failed !");
                grecaptcha.reset();
                // that.trigger('reset');
            } else {
                toastr["success"]("Your enquiry submitted and you will get a call back as soon as possible.");
                that.trigger('reset');
                grecaptcha.reset();
                $("#prop-contact").modal('hide');
            }
        });
    });
    /** END GET A CALL BACK ACTION */


    /** Refine Search */
    function refine() {
        $(".pagination").hide();
        $("#products").html('<center><br /><i class="fa fa-spinner fa-spin fa-2x"></i></center>');
        $.post(site_url + 'home/refine_search', post_data, function (response) {
            $("#products").html(response);
            $(".prop-count").text($(document).find(".list-group .item").length);
            $(document).find('.input-3').rating({displayOnly: true, step: 0.5});
        })
    }
    var post_data = {};
    $(".refine-filter a").on('click', function (e) {
        e.preventDefault();
        var search = $(this).closest('.refine-filter');
        search.find('.filter-label').text($(this).text());
            post_data['showPattern'] = $(".list-group-item").length > 0 ? 'list-group-item' : 'grid-group-item';
        if ($(this).attr('data-bed'))
            post_data['bed'] = $(this).data('bed');
        if ($(this).attr('data-budget'))
            post_data['budget'] = $(this).data('budget');
        if ($(this).attr('data-status'))
            post_data['status'] = $(this).data('status');
        refine();
    });
    /** End Refine Search */

    $(".btn-blog-connect").on('click', function(){
       var right = $(document).find(".blog-sticky").css('right');
       if (right === '0px'){
           $(".blog-sticky").stop().animate({
               right : '-270px'
           },1000);
           $(this).stop().animate({
               right : '-40px'
           },1000);
       }else{
           $(".blog-sticky").stop().animate({
               right : '0px'
           },1000);
           $(this).stop().animate({
               right : '230px'
           },1000);
       }
    });
});

$('#filter_city').change(function(){
    $.get(site_url+'home/locations/'+$(this).val(), function(resp){
        $("#filter_location").html(resp);
    });
});