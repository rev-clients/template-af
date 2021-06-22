$(document).ready(function () {
  $menu = $('.left-side-menu').find('ul').find('li')

  $menu.find('ul ul').slideUp()

  $menu.hover(
    function () {
      $(this).addClass('active')
      $(this).children('ul').stop()
      $(this).children('ul').slideDown()
      if ($(this).hasClass('clicked')) {
        $(this).children('ul').slideDown()
      }
    },
    function () {
      $(this).removeClass('active')
      $(this).children('ul').stop()
      $(this).children('ul').slideUp()
    }
  )

  $(this)
    .children('ul')
    .children('li')
    .click(function () {
      if ($(this).hasClass('clicked')) {
        $(this).removeClass('clicked')
      } else {
        $(this).addClass('clicked')
      }
      console.log('Click : ', $(this).hasClass('clicked'))
    })

  $('.button-menu-mobible').click(function () {})
})
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
