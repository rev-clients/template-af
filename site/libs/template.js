$(document).ready(function () {
  $('.datapicker').flatpickr({
    allowInput: true
  })
  SlideDropdownsLeftSideInside()
  MenuBehavior()
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
  $('.button-menu-mobile').click(function () {
    $('body').toggleClass('enlarged')
  })

  $('.right-bar-toggle').click(function () {
    $('body').toggleClass('right-bar-enabled')
  })
}
