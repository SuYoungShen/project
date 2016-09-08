$(document).ready(function() {

  $("td a[name='Delete']").on(ace.click_event, function() {
    // var DeAccountss=[];
    var DeViewpoint = $("input[name='DeViewpoint[]']").val();
    // DeAccountss.push(DeAccounts);
    alert(DeViewpoint);
    bootbox.confirm("Are you sure?", function(result) {
      if (result) {
        $.ajax({
          type:"POST",
          url: "view/place/delete.php",
          data:{'DeViewpoints[]':DeViewpoint},
          success:function(data){
            alert(data);
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
    var Delete = $("input[name='DeViewpoint[]']").val();
    Deletes.push(Delete);
    bootbox.confirm("Are you sure?", function(result) {
      if (result) {
        $.ajax({
          type:"POST",
          url: "member/delete.php",
          data:{'DeViewpoints[]':Deletes},
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
