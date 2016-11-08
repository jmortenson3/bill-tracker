;$(function() {
  var $larryTextWrapper = $('.larry-text-wrapper');
  var $larry = $('.larry-wrapper');
  var $larryArrow = $('.larry-arrow');
  
  var $features = $('.feature');
  
  $larry.hover(function() {
    console.log(this);
    $larryTextWrapper.show();
    $larryArrow.show();
  }, function() {
    $larryTextWrapper.hide();
    $larryArrow.hide();
  });
  
});