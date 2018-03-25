$(document).ready(function () {
    $(document).on('mouseenter', '.divbutton', function () {
        $(this).find(":button").show();
    }).on('mouseleave', '.divbutton', function () {
        $(this).find(":button").hide();
    });

    $('#btnSubmit').click(function() {
      $.ajax({
        url: "../services/changeprofilepic.php",
        type: "post",
        data: {
          imgUpload: $('#imgUpload').attr('src')
        },
        success: function(result){
          console.log(result);
          location.reload();
        }
      });
    });

    function readPic(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('#imgUpload').attr('src', e.target.result);
          $('.card-image').css('display', 'block');
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#profilePhotoInput").change(function(){
      readPic(this);
    });
});
