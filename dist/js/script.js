function recaptcha_callback(){$(".send-button").removeClass("disabled")}$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(a){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=$(this.hash);(t=t.length?t:$("[name="+this.hash.slice(1)+"]")).length&&(a.preventDefault(),$("html, body").animate({scrollTop:t.offset().top},1e3,function(){var a=$(t);if(a.focus(),a.is(":focus"))return!1;a.attr("tabindex","-1"),a.focus()}))}}),$(".nav-trigger").on("click",function(){$("nav").toggleClass("active"),$(".nav-trigger").toggleClass("active")}),$("nav a").filter(function(){return this.href===location.href}).addClass("current"),$(document).ready(function(){$(".back-to-top").addClass("hidden")}),$(document).scroll(function(){0===$(window).scrollTop()?$(".back-to-top").addClass("hidden"):$(".back-to-top").removeClass("hidden")}),window.recaptcha_callback=recaptcha_callback;