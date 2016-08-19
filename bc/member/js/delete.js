$(document).ready(function() {
  $("#bootbox-confirm").on(ace.click_event, function() {
    var t = $("input[name='accounts']").val();

    bootbox.confirm("Are you sure?", function(result) {
      if (result) {
        $.post("member/delete.php",{name:t},function(data) {
          alerts(data,"member.php");
        });

      } else {
        alert("小心~~~別按錯了!!!");
      }
    });
  });
});
