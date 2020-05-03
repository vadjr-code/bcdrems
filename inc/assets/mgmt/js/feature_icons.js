$('.icon-selector-list').each(function () {
	$.each(icons, function (key, value) {
		var icon_cont = $('<label>').addClass('col-3 p-3'),
			input_radio = $('<input type="radio">').attr('name', 'icon').val(value),
			icon_fa = $('<i>').addClass(value + ' fa-fw fa-lg');
		icon_cont.append(input_radio);
		icon_cont.append(icon_fa);
		$('.icon-selector-list').append(icon_cont);
	});
	$('.icon-selector-list > label:first-child > input').attr('checked', 'checked');
});