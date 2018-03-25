$(document).ready( function() {

  function saveGallery(postId, imageSrc) {
    console.log('Registering gallery => ' + postId);
    $.ajax({
      url: "../services/register_gallery.php",
      type: "post",
      data: {
        postId: postId,
        image: imageSrc
      },
      success: function(result){
        console.log(result);
      }
    });
  }

  function updateGallery() {
    var postId = $('#postId').val(), gallerySrc;
    console.log('Deleting gallery => ' + postId);
    $.ajax({
      url: '../services/delete_gallery.php',
      type: 'post',
      data: {
        postId: postId
      },
      success: function(result) {
        console.log(result);
        if (result > 0) {
          $('.carousel-inner').children().each(function() {
            gallerySrc = $(this).children().first().children().children().attr('src');
            saveGallery(postId, gallerySrc);
          });
        }
      },
      error: function(result) {
        console.log(result);
      }
    });
  }

  $('#btnUpdate').click(function() {
    var coverPhoto = null;
    if ($('#oCoverPhoto').val() !== $('#imgUpload').attr('src')) {
      coverPhoto = $('#imgUpload').attr('src');
    }
    console.log('Updating => ' + $('#postId').val());
    $.ajax({
      url: '../services/update_post.php',
      type: 'post',
      data: {
        postId: $('#postId').val(),
        title: $('#title').val(),
        location: $('#location').val(),
        details: $('#details').val(),
        totalExpenses: $('#totalExpenses').val(),
        coverPhoto: coverPhoto
      },
      success: function(result) {
        console.log(result);
        if ($('#hasGalleryChanges').val() === 'Y') {
          updateGallery();
        }
      },
      error: function(result) {
        console.log(result);
      }
    });
  });
});
