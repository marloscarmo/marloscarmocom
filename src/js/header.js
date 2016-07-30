/*
Background Menu
*/

var sectionHeight = $(window)[0].screen.availHeight;
var headerHeight = $('header').height();

if ($('.cover').length > 0) {
  $('header').removeClass('header-orange');

  $(window).scroll(function(e) {
    var scrollY = e.currentTarget.scrollY;

    if (scrollY > sectionHeight - headerHeight - 80) {
      $('header').addClass('header-orange');
    } else {
      $('header').removeClass('header-orange');
    }
  });
}


/*
Menu Navigation
*/

$('a').click(function(e) {
  var link = e.currentTarget.href;

  if (link.indexOf('#') > 0 ) {
    e.preventDefault();

    var id = link.split('#')[1];
    var sectionY = $('#' + id)[0].offsetTop;

    $('html, body').animate({
      scrollTop: sectionY - $('header').height()
    }, 500, 'swing');
  }
});

/*
Search box
*/

var toggleSearch = function(elemHide, elemShow) {
  elemHide.animate({
    width: 0,
    opacity: 0
  }, 100, function() {
    $(this).css('display', 'none');

    elemShow.css('width', 0).css('opacity', 0).css('display', 'block').animate({
      width: (elemShow.attr('class') == 'search-icon' ) ? 24 : 140,
      opacity: 1
    }, 200, function() {
      elemShow.focus();
    });
  });
};

$('.search-icon').click(function() {
  toggleSearch($('.search-icon'), $('.search-input'));
});

$('.search-input').blur(function() {
  toggleSearch($('.search-input'), $('.search-icon'));
});

/*
Hamburger Menu
*/

$('.nav-icon').click(function() {
  $('.nav-mobile')
    .css('opacity', '0')
    .css('display', '-webkit-box')
    .css('display', '-webkit-flex')
    .css('display', '-ms-flexbox')
    .css('transform', 'scale(0.90)')
    .css('-ms-transform', 'scale(0.90)')
    .css('-webkit-transform', 'scale(0.90)')
    .animate({ textIndent: 1 }, {
      step: function(now,fx) {
        $(this)
          .css('opacity', now)
          .css('transform','scale(' + ((now/10) + 0.9) + ')')
          .css('-ms-transform','scale(' + ((now/10) + 0.9) + ')')
          .css('-webkit-transform','scale(' + ((now/10) + 0.9) + ')');
      },
      duration: 300
    },'easeInOut');
});

$('.nav-mobile .close-btn').click(function() {
  $('.nav-mobile')
    .animate({ textIndent: 0 }, {
      step: function(now,fx) {
        $(this)
          .css('opacity', now)
          .css('transform','scale(' + ((now/10) + 0.9) + ')')
          .css('-ms-transform','scale(' + ((now/10) + 0.9) + ')')
          .css('-webkit-transform','scale(' + ((now/10) + 0.9) + ')');
      },
      duration: 200
    },'easeInOut', function() {
      $(this).css('display', 'none');
    });
});
