const checktablet = window.matchMedia("(max-width: 767px)");
let isTablet = window.matchMedia("(max-width: 767px)").matches;

checktablet.addEventListener("change", function (e) {
  isTablet = e.matches;
});

$(document).ready(function () {
  $(".datapicker").flatpickr({
    allowInput: true,
    monthSelectorType: "static",
  });
  SlideDropdownsLeftSideInside();
  RightSideMenu();
  handleDarkMode();
  maxLength();
  validationForm();
});

function SlideDropdownsLeftSideInside() {
  var $elements = $(".left-side-menu").find("ul li");

  $elements.find(".nav-second-level").slideUp();

  function show($el) {
    $el.addClass("active");
    $el.children(".nav-second-level").stop().slideDown();
  }

  function hide($el) {
    $el.removeClass("active");
    $el.children(".nav-second-level").stop().slideUp();
  }

  $elements.hover(
    function () {
      show($(this));
    },
    function () {
      !$(this).hasClass("clicked") && hide($(this));
    }
  );

  $elements.click(function () {
    if ($(this).hasClass("clicked")) {
      $(this).removeClass("clicked");

      hide($(this));
    } else {
      $(this).addClass("clicked");

      show($(this));
    }
  });
}

function RightSideMenu() {
  $(".button-menu-mobile").click(function () {
    $("body").toggleClass(isTablet ? " sidebar-enable" : "enlarged");
  });

  $(".right-bar-toggle, .rightbar-overlay").click(function () {
    $("body").toggleClass("right-bar-enabled");
  });
}

function handleDarkMode() {
  $("#chbfixedaddt").on("click", function () {
    if ($("#chbfixedaddt")[0].checked) {
      $("body").addClass("dark-mode");
    } else {
      $("body").removeClass("dark-mode");
    }
  });
}

function validationForm() {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      },
      false
    );
  });
}

function maxLength() {
  console.log(" it is working?");
  $("input[maxlength], textarea[maxlength]").maxlength({
    alwaysShow: true,
  });
}
