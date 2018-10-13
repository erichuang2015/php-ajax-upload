$(function() {
  $("#btn").on("click", function() {
    let form = new FormData($("form")[0]);
    $.ajax({
      type: "POST",
      url: "index.php",
      data: form,
      contentType: false,
      cache: false,
      processData: false,
      success: function(msg) {
        console.log(msg);
      }
    });
  });
});
