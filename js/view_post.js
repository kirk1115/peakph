$(document).ready( function() {
  $('#btnSetAsPrivate').click(function() {
    console.log('Set as Private => ' + $('#postId').val());
    $.ajax({
      url: '../services/set_as_private_post.php',
      type: 'post',
      data: {
        postId: $('#postId').val()
      },
      success: function(result) {
        console.log(result);
      },
      error: function(result) {
        console.log(result);
      }
    });
  });

  $('#btnRemovePost').click(function() {
    console.log('Remove Post => ' + $('#postId').val());
    $.ajax({
      url: '../services/remove_post.php',
      type: 'post',
      data: {
        postId: $('#postId').val()
      },
      success: function(result) {
        console.log(result);
      },
      error: function(result) {
        console.log(result);
      }
    });
  });
});
