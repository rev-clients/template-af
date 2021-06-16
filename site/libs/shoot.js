			$.fn.hasAttr = function(name) {  
				return this.attr(name) !== undefined;
			};
			$(document).ready(function() {
				$('.sabot').click(function(e) {
					e.preventDefault();
					var targuet = $(this).attr('data-some');
					$('#extfrm').attr('action',targuet);
					if($(this).hasAttr('data-val')) {
						var argum = $(this).attr('data-val');
						$('#extval').attr('value',argum);
					}
					if($(this).hasAttr('data-comp')) {
						var comp = $(this).attr('data-comp');
						$('#extcomp').attr('value',comp);
					}
					$('#extfrm').submit();
				});
			});
