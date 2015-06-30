$(document).ready(function() {
  $('input.text').addClass('form-control input-lg').wrap('<div class="row"></div>');
  $('.field-label').hide();
  $('input[type="submit"]').addClass('btn btn-success btn-lg');

  var labels = $('.field-label');
  labels.each(function(index,element) {
    var id = '#' + element.htmlFor;
    // console.log($(id));
    // console.log(element.html);
    $(id).attr('placeholder',$(element).text());
  });
});
