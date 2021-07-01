const checktablet = window.matchMedia('(max-width: 767px)')
let isTablet = window.matchMedia('(max-width: 767px)').matches

checktablet.addEventListener('change', function (e) {
  isTablet = e.matches
})

$(document).ready(function () {
  $('.datapicker').flatpickr({
    allowInput: true
  })
  SlideDropdownsLeftSideInside()
  MenuBehavior()
  dropdown()
})

function SlideDropdownsLeftSideInside() {
  var $elements = $('.left-side-menu').find('ul li')

  $elements.find('.nav-second-level').slideUp()

  function show() {
    $(this).addClass('active')
    $(this).children('.nav-second-level').stop().slideDown()
  }

  function hide() {
    $(this).removeClass('active')
    $(this).children('.nav-second-level').stop().slideUp()
  }

  $elements.hover(
    function () {
      show()
    },
    function () {
      !$(this).hasClass('clicked') && hide()
    }
  )

  $elements.click(function () {
    if ($(this).hasClass('clicked')) {
      $(this).removeClass('clicked')
      
      isTablet && show()
    } else {
      $(this).addClass('clicked')

      isTablet && hide()
    }
  })
}

function MenuBehavior() {
  $('.button-menu-mobile').click(function () {
    $('body').toggleClass(isTablet ? ' sidebar-enable' : 'enlarged')
  })

  $('.right-bar-toggle').click(function () {
    $('body').toggleClass('right-bar-enabled')
  })
}

function dropdown() {
  $('.dropdown').click(function () {
    $(this).toggleClass('show')
    $(this).children('.dropdown-menu').toggleClass('show')
  })
}
