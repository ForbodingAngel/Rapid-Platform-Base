jQuery(document).ready(function ($) {
	var simple_select = false;

	function simple_customize_hide() {
		$(".simple-customize").addClass( 'simple-customize-hide' );
		$(".simple-select-button").addClass( 'simple-customize-hide' );
		$(".simple-select-info").addClass( 'simple-customize-show' );
		$(".customize-control-content").removeClass( 'simple-customize-hide' );
	}
	function simple_customize_show() {
		$(".simple-customize-hide").removeClass( 'simple-customize-hide' );

		$(".simple-select-info").removeClass( 'simple-customize-show' );
	}
	function simple_customize_reveal() {
		$(".simple-customize-reveal").removeClass( 'simple-customize-reveal' );
	}

	function iframeDetect()
	{
		if ( $("iframe").length > 0 )
		{
			clearInterval(iframeDetector);

			$("iframe").contents().on('click', function (e) {
				if (simple_select) {
					var theseParents = $.map($(e.target).parents().not('html').not('body'), function(elm) {
						var entry = elm.tagName.toLowerCase();
						if (elm.className) {
							entry += "." + elm.className.replace(/ /g, '.');
						}
						return entry
					});

					if ($("#customize-strict-grab").is(':checked')) {
						theseParents = theseParents[0];
					} else {
						theseParents.reverse();
						theseParents = theseParents.join(" ");
					}

					simple_select = false;

					$("#simple_customize_selected").val(theseParents);
					$("#simple_customize_label").val($(e.target).text().trim());
					$("#simple_customize_default").val($(e.target).css('color'));

					var styled = window.getComputedStyle(e.target);
					$("#simple_customize_selector_auto").find('option').remove().end();

					for(var i = 0; i < styled.length; i++) {
						$("#simple_customize_selector_auto").append('<option value="' + styled[i] + '">' + styled[i] + '</option>');
					}

					simple_customize_reveal();
					simple_customize_show();
				}
			});
		}
	}

	$("#simple_customize_selector_auto").change(function (e) {
		$("#simple_customize_default").val($("iframe").contents().find($("#simple_customize_selected").val()).css($(this).val()));
	});

	var iframeDetector = setInterval( iframeDetect, 200 );

	$("#simple_customize_selector").on('click', function (e) {
		simple_select = true;
		simple_customize_hide();
	});

	$("#simple_customize_cancel").on('click', function (e) {
		simple_select = false;
		simple_customize_show();
	});


	$("#simple_customize_store").click(function (e) {
		e.preventDefault();
		$.post(
			SimpleCustomize.ajaxurl,
			{
				action: 'simple-customize-new-object',
				label: $("#simple_customize_label").val(),
				object: $("#simple_customize_selected").val(),
				default: $("#simple_customize_default").val(),
				selector: $("#simple_customize_selector_auto").val(),
				selector_manual: $("#simple_customize_selector_manual").val(),
				category: $("#simple_customize_category").val(),
				_nonce: SimpleCustomize.customizerNonce
			}, function (response) {
				location.reload();
			}
		);
	});
});