jQuery(document).ready(function () {
  jQuery("#generate_button").on("click", function (event) {
    event.preventDefault(); // Prevent the form from getting submitted

    var name = jQuery("#url").val();
    var name2 = "";
    // $("#display_hide").hide();
    if (name == "") {
      jQuery("#url").val(name2);
    } else {
      jQuery.ajax({
        type: "GET",
        url: "././ajax.php",
        data: {
          url: name,
        },
        success: function (html) {
          jQuery("#display").html(html).show();
        },
      });
      // console.log(url);

      // Change the URL bar
      var newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname + "?url=" + encodeURIComponent(name);
      window.history.pushState({path:newUrl},'',newUrl);
    }
  });
});
