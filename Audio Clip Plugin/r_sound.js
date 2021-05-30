(function($){

jQuery( document ).ready(function() {
jQuery("[data-audio-url]").each(
function(){
jQuery(this).on('click', function() {
var mp3Url = jQuery(this).attr('data-audio-url');
var a = new Audio(mp3Url);
a.play();
});
}
);
});
})(jQuery);
