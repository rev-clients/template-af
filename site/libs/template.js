$(document).ready(function () {
  SlideDropdownsLeftSideInside()
})

function SlideDropdownsLeftSideInside() {
  var $elements = $('.left-side-menu').find('ul li')

  $elements.find('.nav-second-level').slideUp()

  $elements.hover(
    function () {
      $(this).addClass('active')
      $(this).children('.nav-second-level').stop().slideDown()
    },
    function () {
      if (!$(this).hasClass('clicked')) {
        $(this).removeClass('active')
        $(this).children('.nav-second-level').stop().slideUp()
      }
    }
  )

  $elements.click(function () {
    if ($(this).hasClass('clicked')) {
      $(this).removeClass('clicked')
    } else {
      $(this).addClass('clicked')
    }
  })
}

function MenuBehavior() {
  $('.button-menu-mobible').click(function () {})
}

/*$(document).ready(function () {
  $('#button-menu-mobile').click(function () {
    $('.left-side-menu').css({
      width: '70px'
    })
    $('.content-page').css({
      margin: '70px 0 0 100px'
    })
  })
})*/
