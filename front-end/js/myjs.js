$(function(){
  $("i.icon").addClass('fa-3x');
  $("div.class-body").addClass('text-justify');
  $('div.hreview').addClass('col-md-3');
  $('div.hreview').addClass('col-sm-4');
  $('div.hreview').addClass('col-xs-6');
  $('img').addClass('img-responsive');
  $('div.row div.col-md-3').addClass('thumbnail');

  $('div.review').masonry({
    itemSelector: '.hreview'
  })

})
