$('#addRow').on('click', addRow);
$('div.panel-body.data-container').on('click', '.btn-danger', deleteRow);

$('#content-gallery').on('click', '.btn-danger', deleteGallery);
$('#content-products').on('click', '.custom-delete-btn', deleteProduct);
$('#table-product').on('click', '.edit-product', editProduct);

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


function deleteProduct(e) {
    e.preventDefault();

    if (confirm('Seguro de eliminar este prducto?')) {

        var id = $(e.currentTarget).data('id');
        var type = $(e.currentTarget).data('flag');
        var url = $('#formDeleteProduct').prop('action').replace(':ID', id);
        var $content = $(e.currentTarget).closest(type === 'T' ? '.col-sm-12' : '.col-sm-3');
        var buttons = $content.find(':button');

        buttons.prop('disabled', true);
        $.ajax({
            url: url,
            method: 'post',
            dataType: 'json'
        }).done(function (data) {
            $content.remove();
            alert('Producto eliminado');
        }).fail(function (err) {
            alert('Contacte con sistemas\n' + err);
        }).always(function (e) {
            buttons.prop('disabled', false);
        });

    }
}

function editProduct(e) {
    e.preventDefault();
    var id = $(e.currentTarget).data('id');
    var $modal = $('#modal-product-edit');
    var $row = $(e.currentTarget).closest('.row');
    var name = $row.find('span.product-name').text();
    var desc = $row.find('div.product-desc').html();
    var $form = $('#formEditProduct');

    $modal.find('form').attr('action', $form.attr('action').replace(':ID', id));

    $modal.modal('show');
    $modal.find('input.name').val(name);
    $modal.find('div.desc').html(desc);
}

$('#form-product-edit, #form-add-product').on('submit', function (e) {
    var $form = $(e.currentTarget);

    $form.find('.hidden-desc-value').val($form.find('.wysihtml5-product').html());
    disabledButton($form);
});

$('.form-edit-product-slider').on('submit', function (e) {
    disabledButton($(e.currentTarget));
});

$('#modal-product-edit').on('hide.bs.modal', function (e) {
    $(e.currentTarget).find('form').trigger('reset');
});

function disabledButton($form) {
    $form.find(':button').prop('disabled', true);
}