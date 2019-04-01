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