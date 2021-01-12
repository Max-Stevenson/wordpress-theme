$(function () {
  var $window = $(window);

  $("section[data-type='background']").each(function () {
    var $backgroundObject = $(this);
    $(window).scroll(function () {
      var yPosition = - ($window.scrollTop() / $backgroundObject.data("speed"));
      var coords = "50% " + yPosition + "px";

      $backgroundObject.css({ backgroundPosition: coords});
    })
  })
})