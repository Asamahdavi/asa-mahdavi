
$(document).ready(function(){
  $("#tHeader-btn").click(function(){
    $("header").toggle();
  });
});

$(document).ready(function(){
    $("#search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#search-area *").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });