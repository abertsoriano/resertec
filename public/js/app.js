$('#addRow').on('click', addRow);

function addRow(e) {
	var $input = $('<div class="form-group"><input type="text" name="data[]" class="form-control"></div>');
	var $inputs = $('.data-container input:last');

	if ($inputs.val().trim() === '') {
		$inputs.focus();
		return;
	}

	$('.data-container').append($input).find('input:last').focus();
}
