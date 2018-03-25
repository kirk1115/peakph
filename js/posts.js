$(document).ready( function() {
    $('#btnNewPost').click(function() {
      if ($('#btnNewPost .h4').text() !== 'Cancel') {
        $('#btnNewPost .h4').text('Cancel');
        $('#btnNewPost .glyphicon').removeClass('glyphicon-plus-sign');
        $('#btnNewPost .glyphicon').addClass('glyphicon-remove-sign');
      } else {
        $('#btnNewPost .h4').text('New Post');
        $('#btnNewPost .glyphicon').removeClass('glyphicon-remove-sign');
        $('#btnNewPost .glyphicon').addClass('glyphicon-plus-sign');
      }
    });

    function clearNewPost() {
      $('#userId').val('');
      $('#title').val('');
      $('#location').val('');
      $('#details').val('');
      $('#totalExpenses').val('');
      $('#imgUpload').attr('src', '');
      $('.card-image').css('display', 'none');
      console.log($('.carousel-inner').children().length);
      clearGallery();
    }

    function clearGallery() {
      console.log('clears');
      $('.card-photos').css('display', 'none');
      $('.carousel-inner').empty();
    }

    function saveGallery(postId, imageSrc) {
      $.ajax({
        url: "../services/register_gallery.php",
        type: "post",
        data: {
          postId: postId,
          image: imageSrc
        },
        success: function(result){
          $('.overlay').css('display', 'none');
          console.log(result);
          clearGallery();
          location.reload();
        }
      });
    }

    $('#btnPost').click(function() {
      $('#btnNewPost').css('display', 'initial');
      $('#newPost').css('display', 'none');

      $('.overlay').css('display', 'block');
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

          var gallerySrc;
          $('.carousel-inner').children().each(function() {
            gallerySrc = $(this).children().first().children().children().attr('src');
            saveGallery(result, gallerySrc);
          });
          if ($('.carousel-inner').children().length === 0) {
            location.reload();
          }
          clearNewPost();
        }
      });
    });

    // $("#location").placepicker();
    $('.amount').mask("000,000,000.00", {reverse: true});
});
