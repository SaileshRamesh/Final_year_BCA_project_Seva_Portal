$(document).ready(function() {
    $(document).on('click', '#dataModal', function(e) {
        e.preventDefault();
        var empid = $(this).data('email');
        $('#dataModal').show();
        $('#dataModal-loader').hide();
        $.ajax({
                url: 'empData.php',
                type: 'POST',
                data: 'email=' + empid,
                dataType: 'json',
                cache: false
            })
            .done(function(data) {
                console.log(data.name);
                $('#dataModal').hide();
                $('#dataModal').show();
                $('#email').html(data.email);
                $('#passportoffice').html(data.passportoffice);
                $('#name').html(data.name);
                $('#surname').html(data.surname);
                $('#dob').html(data.dob);
                $('#apply').html(data.apply);
                $('#gender').html(data.gender);
                $('#citizen').html(data.citizen);
                $('#quali').html(data.quali);
                $('#a_num').html(data.a_num);
                $('#pan').html(data.pan);
                $('#address').html(data.address);
                $('#contact').html(data.contact);
                $('#a_copy').html(data.a_copy);
                $('#dataModal-loader').show();
            })
            .fail(function() {
                $('#dataModal').html('Error, Please try again...');
                $('#dataModal-loader').hide();
            });
    });
});