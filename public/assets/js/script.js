$(document).ready(function() {

    ClassicEditor
    .create( document.querySelector( '#editor' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList'],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' }
            ]
        }
    } )
        .catch( error => {
            console.error( error );
        } );

    function showImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
            $('#imagePreview').removeClass('d-none');
            $('#imagePreview').addClass('d-block');
        }
    };

    $('#photo').change(function(){
        showImage(this);
    });














});
