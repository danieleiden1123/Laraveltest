// validate signup form on keyup and submit
$("#frmProject").validate({
    errorElement: 'span',
    errorClass: 'help-block error-help-block',
    errorPlacement: function (error, element) {
        if (element.parent('.input-group').length ||
            element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
            error.insertAfter(element.parent());
            // else just place the validation message immediatly after the input
        } else {
            error.insertAfter(element);
        }
    },
    highlight: function (element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
    },

    success: function (element) {
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
    },

    focusInvalid: true,
    submitHandler: function (form) {
        var $btn = $('#btnSubmit');
        $btn.attr('disabled', true);
        $btn.html('loading');
        $('.alert').hide();

        $.ajax({
            url: $('#frmProject').attr('action'),
            type: "POST",
            data: new FormData(form),
            contentType: false,
            cache: false,
            processData: false,
            success: function (res) {
                var message = res.message;
                $btn.attr('disabled', false);
                $btn.html('Submit');
                if (res.status == 200) {
                    $('.alert-success').show().html(message);
                    $('input, select, textarea').val('');
                    $('input[type="checkbox"]').prop('checked', false);
                    $('input[type="radio"]:first').prop('checked', true);
                    setTimeout(function () {
                        $('.alert').hide();
                    }, 5000);
                } else {
                    $('.alert-danger').show().html(message);
                }
            },
            error: function (err) {
                console.log(err);
                $('#error').show().html(message);
                $btn.attr('disabled', false);
                $btn.html('Submit');
            }
        });
    }
});