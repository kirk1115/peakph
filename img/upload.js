$(document).ready( function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    $('.multi-item-carousel').carousel({
      interval: false
    });
    function clearGallery() {
      console.log('clears');
      $('.card-photos').css('display', 'none');
      $('.carousel-inner').empty();
    }

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
          console.log('ada');
          console.log(e.target);
          $('#imgUpload').attr('src', e.target.result);
          $('.card-image').css('display', 'block');
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#coverPhotoInput").change(function(){
      readURL(this);
    });

    $("#photosInput").change(function(){
      clearGallery();
      var total_file = document.getElementById("photosInput").files.length;
      if (total_file > 0) {
        $('.card-photos').css('display', 'block');
      }
      $('#hasGalleryChanges').val('Y');
      $('.overlay').css('display', 'block');
      $('.carousel-indicators').empty();
      for(var i = 0; i < total_file; i++)
      {
        $('.carousel-indicators')
          .append("<li data-target=\"#myCarousel\" data-slide-to=\"" + i + "\" class=\"" + (i == 0 ? "active" : "") + "\"></li>");
        var rd = new FileReader();
        rd.onload = function (e) {
          $('.carousel-inner').append(
            "<div class=\"item " + (i > total_file - 1 ? "active" : "") + "\">" +
              "<div class='col-xs-4'><a href=\"#\"><img class='img-responsive' src='"+e.target.result+"'></a></div>" +
            "</div>");
          i = i - 1;
          if (i == 0) {
            $('.multi-item-carousel .item').each(function(){
              // console.log('wow ' + i);
              var next = $(this).next();
              if (!next.length) {
                next = $(this).siblings(':first');
              }
              next.children(':first-child').clone().appendTo($(this));

              if (next.next().length>0) {
                next.next().children(':first-child').clone().appendTo($(this));
              } else {
              	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
              }
            });
            $('.overlay').css('display', 'none');
          }
        }
        rd.readAsDataURL(event.target.files[i]);
      }
    });
});
