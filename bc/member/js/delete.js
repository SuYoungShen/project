$(document).ready(function() {

  $("td a[name='Delete']").on(ace.click_event, function() {
    var DeAccountss=[];
    var DeAccounts = $("input[name='DeAccounts[]']").val();
    DeAccountss.push(DeAccounts);

    bootbox.confirm("Are you sure?", function(result) {
      if (result) {
        $.ajax({
          type:"POST",
          url: "member/delete.php",
          data:{'DeAccountss[]':DeAccountss},
          success:function(data){
            alerts(data);
          }
        });

      } else {
        alert("小心~~~別按錯了!!!");
      }
    });
  });


});

function TableHeaderDelete() {

  $(".table-header a[name='Delete']").on(ace.click_event, function() {
    var DeAccountss=[];
    var DeAccounts = $("input[name='DeAccounts[]']").val();
    DeAccountss.push(DeAccounts);
    bootbox.confirm("Are you sure?", function(result) {
      if (result) {
        $.ajax({
          type:"POST",
          url: "member/delete.php",
          data:{'DeAccountss[]':DeAccountss},
          success:function(data){
            alerts(data);//轉回指定葉面
          }
        });
      } else {
        alert("小心~~~別按錯了!!!");
      }
    });
  });
}