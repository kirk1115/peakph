$(document).ready( function() {

  function saveGallery(postId, imageSrc, isLast) {
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
        if (isLast) {
          location.reload();
        }
      }
    });
  }

  function updateGallery() {
    var postId = $('#postId').val(), gallerySrc, galleryLen, i = 1;
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
          galleryLen = $('.carousel-inner').children().length;
          console.log('Gallery lengh: ' + galleryLen);
          $('.carousel-inner').children().each(function() {
            gallerySrc = $(this).children().first().children().children().attr('src');
            console.log('Saving >> ' + i);
            console.log('Saving >> ' + (i === galleryLen));
            saveGallery(postId, gallerySrc, i === galleryLen);
            i++;
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
    $('.overlay').css('display', 'block');
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
