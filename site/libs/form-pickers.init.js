		!function ($) {
			"use strict";
			var FormPickers = function () { };
			FormPickers.prototype.init = function () {
				$('.datepiker').flatpickr();
				$('.datimepiker').flatpickr({
					enableTime: true,
					dateFormat: "d-m-Y H:i"
				});
			},
			$.FormPickers = new FormPickers, $.FormPickers.Constructor = FormPickers
		}(window.jQuery),
		function ($) {
			"use strict";
			$.FormPickers.init()
		}(window.jQuery);
