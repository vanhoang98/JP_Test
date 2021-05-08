$(document).ready(function() {   
   $("#listCategory").DataTable({
        "columnDefs": [
            { "width": "20px", "targets": 0 },
            { "width": "100px", "targets": 1 },
            { "width": "100px", "targets": 2 },
            { "width": "70px", "targets": 3, "orderable": false },
            { "width": "70px", "targets": 4, "orderable": false },
        ],
    });

    $('#editCategory').on('show.bs.modal', function(e) {
        var button = $(e.relatedTarget);
        var id = button.data('id');
        var name = button.data('name');
        var description = button.data('description');
        var modal = $(this);

        modal.find('.modal-body .id').val(id);
        modal.find('.modal-body .name').val(name);
        modal.find('.modal-body .description').val(description);
    });

    $("#listCategoryPost").DataTable({
        "columnDefs": [
            { "width": "20px", "targets": 0 },
            { "width": "100px", "targets": 1 },
            { "width": "100px", "targets": 2 },
            { "width": "70px", "targets": 3, "orderable": false },
            { "width": "70px", "targets": 4, "orderable": false },
        ],
    });

    $('#editCategoryPost').on('show.bs.modal', function(e) {
        var button = $(e.relatedTarget);
        var id = button.data('id');
        var name = button.data('name');
        var description = button.data('description');
        var modal = $(this);

        modal.find('.modal-body .id').val(id);
        modal.find('.modal-body .name').val(name);
        modal.find('.modal-body .description').val(description);
    });
});
