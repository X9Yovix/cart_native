$(document).ready(function () {
    $('.editbtn').on('click', function () {
        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#ref_cat').val(data[0]);
        $('#old_ref').val(data[0]);
        $('#name_cat').val(data[1]);
    });
});

$(document).ready(function () {
    $('.editProduct').on('click', function () {
        $('#editProductModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#ref_prod').val(data[0]);
        $('#oldRef_prod').val(data[0]);
        $('#name_prod').val(data[1]);
        $('#brand').val(data[2]);
        $('#desc_prod').val(data[3]);
        $('#price').val(data[4]);
        $('#img_prod').val(data[5]);
        $('#promo').val(data[6]);
        $('#qty').val(data[7]);
        $('#refCat').val(data[8]);
        console.log(data);
    });
});

$(document).ready(function () {
    $('#example').DataTable();
});