$(document).scroll(function () {
    var y = $(this).scrollTop();
    var x = $(window).width();
    if (y > 0 && x > 1100) {
        document.getElementById("topbar").style.top = "-100px";
    } else {
        document.getElementById("topbar").style.top = "0px";
    }

});

// Slide In On Scroll //

var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    if (element_top_position <= window_bottom_position){
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
