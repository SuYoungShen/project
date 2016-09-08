$(document).ready(function() {

  $("td a[name='Delete']").on(ace.click_event, function() {
    // var DeAccountss=[];
    var DeViewpoint = $("input[name='Delete[]']").val();
    // DeAccountss.push(DeAccounts);
    
    bootbox.confirm("Are you sure?", function(result) {
      if (result) {
        $.ajax({
          type:"POST",
          url: "view/place/delete.php",
          data:{'Delete[]':DeViewpoint},
          success:function(data){
            alerts(data,"member.php");
          }
        });

      } else {
        alert("小心~~~別按錯了!!!");
      }
    });
  });
});

function OnlyDelete() {

  $(".table-header a[name='Delete']").on(ace.click_event, function() {
    var Deletes=[];
    var Delete = $("input[name='Delte[]']").val();
    Deletes.push(Delete);
    bootbox.confirm("Are you sure?", function(result) {
      if (result) {
        $.ajax({
          type:"POST",
          url: "member/delete.php",
          data:{'Delete[]':Deletes},
          success:function(data){
            alerts(data,"member.php");//轉回指定葉面
          }
        });
      } else {
        alert("小心~~~別按錯了!!!");
      }
    });
  });
}
