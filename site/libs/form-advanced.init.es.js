!(function ($) {
  'use strict'
  var FormAdvanced = function () {}
  ;(FormAdvanced.prototype.initMaxLength = function () {
    $('.stymax').maxlength({
      warningClass: 'badge badge-success',
      separator: ' de ',
      threshold: 20,
      preText: 'Tipeaste ',
      postText: ' caracteres disponibles.',
      limitReachedClass: 'badge badge-danger'
    })
  }),
    (FormAdvanced.prototype.initMultiSelect = function () {
      if ($('[data-plugin="multiselect"]').length > 0)
        $('[data-plugin="multiselect"]').multiSelect($(this).data())
    }),
    (FormAdvanced.prototype.init = function () {
      var $this = this
      this.initMaxLength(), this.initMultiSelect()
    }),
    ($.FormAdvanced = new FormAdvanced()),
    ($.FormAdvanced.Constructor = FormAdvanced)
})(window.jQuery),
  (function ($) {
    'use strict'
    $.FormAdvanced.init()
  })(window.jQuery)
