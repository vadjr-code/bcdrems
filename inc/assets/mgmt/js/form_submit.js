$("form").each(function () {
	var fa = $(this);
	var fb = fa.data("submit");
	var fc = fb + ".php";
	var fd = $(['[data-output="' + fb + '"]']);
	var fe;
	fa.attr('method', 'POST');
	fa.submit(function (ev) {
		ev.preventDefault();
		$.ajax({
			url: mgmt_uri + "/request/" + fc,
			dataType: 'JSON'
		}).done(function (result) {
			fe = result;
			if (fe['results'] != "none") {
				// 	$.each(fe, function (key, value) {
				// 		fd.append();
				// 	});
			} else {
				
			}
		});
	});
});