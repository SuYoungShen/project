$(document).ready(function() {
  $("a#web").click(function() {
    var value = $(this).val();
    if (value!='') {
      alert(value);
    }else {
      alert("空");

    }
  });
});
