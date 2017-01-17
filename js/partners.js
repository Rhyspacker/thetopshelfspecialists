$(document).ready(function() {
  $("#partners-open").click(function () {
     $(".partners-container").toggleClass('open', 800);
  });
});

$(function () {
  $('#partners-open').on('click', function () {
     var $this = $(this),
         cValue = $this.text(),
         nValue = $this.data('text-swap');
     $this.text(nValue).data('text-swap', cValue);
   });
});
