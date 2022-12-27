$(document).ready(function(){
    
    var table = '#items-table';

    // Modal
    var modal = '#modalCreate';

    // form
    var form_create = '#add-item-form';

    // Form Create
    $(form_create).on('submit', function(event){
        event.preventDefault();

        var url = $(this).attr('data-action');

        console.log(url);
        $.ajax({
            url: url,
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
                // Closing Modal
                $(modal).modal('hide');

                // Reloading Page
                location.reload();

            },
            error: function(response) {
                console.log(response)
            }
        });
    });

});