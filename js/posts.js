$(document).ready( function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);

    $('#btnNewPost').click(function() {
      $('#btnNewPost').css('display', 'none');
      $('#newPost').css('display', 'block');
    });

    function clearNewPost() {
      $('#userId').val('');
      $('#title').val('');
      $('#location').val('');
      $('#details').val('');
      $('#totalExpenses').val('');
    }

    $('#btnPost').click(function() {
      $('#btnNewPost').css('display', 'initial');
      $('#newPost').css('display', 'none');

        console.log($('#coverPhotoInput'));
      $.ajax({
        url: "../services/register_post.php",
        type: "post",
        data: {
          userId: $('#userId').val(),
          title: $('#title').val(),
          location: $('#location').val(),
          details: $('#details').val(),
          totalExpenses: $('#totalExpenses').val(),
          imgUpload: $('#imgUpload').attr('src')
        },
        success: function(result){
          console.log(result);
          clearNewPost();
        }
      });
    });

    $("#location").placepicker();

    $('.file-input :file').on('fileselect', function(event, label) {
      var input = $(this).parents('.post-more').find(':text'),
        log = label;

      if( input.length ) {
        input.val(log);
      } else {
        if( log ) alert(log);
      }

    });
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('#imgUpload').attr('src', e.target.result);
          $('.card-image').css('display', 'block');
          // console.log('cc');
          // console.log(e.target);
          // console.log(URL.createObjectURL(event.target.result));
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#coverPhotoInput").change(function(){
      readURL(this);
    });

    $("#photosInput").change(function(){
      var total_file=document.getElementById("photosInput").files.length;
      console.log(total_file);
      if (total_file > 0) {
        $('.card-photos').css('display', 'block');
      }
      for(var i=0;i<total_file;i++)
      {
        $('.carousel-inner').append(
          "<div class=\"item " + ((i === 0) ? "active" : "") + "\">" +
            "<div class='col-xs-4'><a href=\"#\"><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></a></div>" +
          "</div>");
      }
      var i = 0;
      $('.multi-item-carousel .item').each(function(){
        console.log('wow ' + i);
        var next = $(this).next();
        console.log(next);
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length>0) {
          next.next().children(':first-child').clone().appendTo($(this));
        } else {
        	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
        i++;
      });
    });

    $('.amount').mask("000,000,000.00", {reverse: true});
});
