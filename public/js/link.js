$( document ).ready(function() {

    $('#link').change(function(){
        if($(this).val() == ''){
            $(this).addClass( "is-invalid");
        }else{
            $('#link_error').hide();
            $(this).removeClass( "is-invalid");
        }
    });

    $('#description').change(function(){
        if($(this).val() == ''){
            $(this).addClass( "is-invalid");
        }else{
            $('#description_error').hide();
            $(this).removeClass( "is-invalid");
        }
    });

    $('#save-link').on('click', function(e) {
        console.log('click');

        let link = $('#link').val();
        let description = $('#description').val();

        if(isValide(link, description)){
            console.log('ok');
        }else{
            e.preventDefault();

            if(link == ''){
                $('#link_error').show();
                $('#link').addClass( "is-invalid");
            }

            if(description == ''){
                $('#description_error').show();
                $('#description').addClass( "is-invalid");
            }

        }
    });


    function isValide(link, description){
        return (link && link != '') && (description && description != '');
    }

    $('.link-card').hover(
        function() {
            $( this ).find('.short-description').hide();
            $( this ).find( ".icons" ).show();
            $( this ).find('.long-description').show();

        }, function() {
            $('.icons').hide();
            $('.long-description').hide();
            $('.short-description').show();
        }
    );

});

