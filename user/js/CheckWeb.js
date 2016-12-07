$(document).ready(function() {
  $("a#web").bind('click', function () {
    var value = $(this).val();
    if (value='#') {
      alert("景點介紹再補資料中,請稍候");
    }

  });
});
