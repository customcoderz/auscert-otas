/* Splash fade out */
$(function(){
   setTimeout(function() {
      $("#splash").fadeOut("slow", function() {
         $("#content").show();
      });
   }, 2000);
});