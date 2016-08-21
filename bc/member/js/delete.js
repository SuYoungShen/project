$(document).ready(function() {
  $("td > a[name='Delete']").on(ace.click_event, function() {
    var DeAccounts = $("input[name='DeAccounts']").val();

    bootbox.confirm("Are you sure?", function(result) {
      if (result) {
        $.post("member/delete.php",{DeAccounts:DeAccounts},function(data) {
          alerts(data,"member.php");
        });
      } else {
        alert("小心~~~別按錯了!!!");
      }
    });
  });

});

function TableHeaderDelete() {
  $(".table-header > a[name='Delete']").on(ace.click_event, function() {
    var DeAccounts = $("input[name='DeAccounts']").val();

    bootbox.confirm("Are you sure?", function(result) {
      if (result) {
        $.post("member/delete.php",{DeAccounts:DeAccounts},function(data) {
          alerts(data,"member.php");
        });
      } else {
        alert("小心~~~別按錯了!!!");
      }
    });
  });
}
