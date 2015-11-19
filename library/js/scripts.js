jQuery(document).ready(function($) {

$('.comment img[data-gravatar]').each(function(){
  $(this).attr('src',$(this).attr('data-gravatar'));
});

});

colymn();
