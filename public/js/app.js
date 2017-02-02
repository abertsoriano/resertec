$('#addRow').on('click', addRow);
$('div.panel-body.data-container').on('click', '.btn-danger', deleteRow);

$('#content-gallery').on('click', '.btn-danger', deleteGallery);

function addRow(e) {
	var $input = $('<div class="form-group"><div class="input-group"><input type="text" name="data[]" class="form-control"><div class="input-group-btn"><button type="button" class="btn btn-danger">X</button></div></div></div>');
	var $inputs = $('.data-container input:last');

	if ($inputs.val().trim() === '') {
		$inputs.focus();
		return;
	}

	$('.data-container').append($input).find('input:last').focus();
}

function deleteRow(e) {
	$(e.currentTarget).closest('.form-group').remove();
}


function deleteGallery(e) {
	e.preventDefault();

	if (confirm('Seguro de eliminar esta imagen de la galeria?')) {

        var id = $(e.currentTarget).data('id');
        var url = $('#formDeleteGallery').prop('action').replace(':ID', id);
        var $content = $(e.currentTarget).closest('.col-sm-3');
        var buttons = $content.find(':button');

        buttons.prop('disabled', true);
        $.ajax({
            url: url,
            method: 'post',
            dataType: 'json'
        }).done(function (data) {
            $content.remove();
            alert('Imagen eliminada');
        }).fail(function (err) {
            alert('Contacte con sistemas\n' + err);
        }).always(function (e) {
            buttons.prop('disabled', false);
        });

    }
}