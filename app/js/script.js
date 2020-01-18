/* Smooth scroll */
$('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex','-1');
            $target.focus();
          };
        });
      }
    }
});

/* Nav */
$(".nav-trigger").on("click",function(){
  $("nav").toggleClass("active");
  $(".nav-trigger").toggleClass("active");
});

/* Current page selector */
$('nav a').filter(function(){
  return this.href === location.href;
}).addClass('current');

/* Back to top */
$(document).ready(function(){
  $(".back-to-top").addClass("hidden");
});

$(document).scroll(function() {
   if($(window).scrollTop() === 0) {
     $(".back-to-top").addClass("hidden");
   }
   else {
     $(".back-to-top").removeClass("hidden");
   }
});

/* Form */
window.recaptcha_callback = recaptcha_callback;
function recaptcha_callback() {
  $('.send-button').removeClass('disabled');
};
