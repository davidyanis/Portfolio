function menuButtonClicked() {
    var header = document.getElementById("header");
    header.classList.toggle("fullscreen")
 }

function scrollToTop() {
  window.scroll({
    top: 0,
    behavior: "smooth",
  });
}

$(document).ready(function() {
  $('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  });
  
  $('.field input').keyup(function() {

    var empty = false;
    $('.field input').each(function() {
        if ($(this).val().length == 0) {
            empty = true;
        }
    });

    if (empty) {
        $('.actions input').attr('disabled', 'disabled');
    } else {
        $('.actions input').removeAttr('disabled');
    }
  });
});

    // Smooth scroll to section on click
  function scrollNav() {
    $('.top-nav li a').click(function(){  
      //Toggle Class
    /*   $(".active").removeClass("active");      
      $(this).closest('a').addClass("active");
      var theClass = $(this).attr("class");
      $('.'+theClass).parent('a').addClass('active'); */
      //Animate
      $('html, body').stop().animate({
          scrollTop: $( $(this).attr('href') ).offset().top - 0
      }, 800);
      return false;
    });
   /*  $('.scrollTop a').scrollTop(); */
  }
  scrollNav();

  function scrollTop() {
    $('.scrollTop a').click(function(){  
      $('html, body').stop().animate({
          scrollTop: $( $(this).attr('href') ).offset().top - 0
      }, 800);
      return false;
    });
  }
  scrollTop();

  
