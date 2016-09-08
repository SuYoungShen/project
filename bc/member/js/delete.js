$(document).ready(function() {

  // $("td a[name='Delete']").on(ace.click_event, function() {
  //   // var DeAccountss=[];
  //   var DeAccounts = $("input[name='DeAccounts[]']").val();
  //   // DeAccountss.push(DeAccounts);
  //   alert(DeAccounts);
  //   bootbox.confirm("Are you sure?", function(result) {
  //     if (result) {
  //       $.ajax({
  //         type:"POST",
  //         url: "member/delete.php",
  //         data:{'DeAccountss[]':DeAccounts},
  //         success:function(data){
  //           alerts(data,"member.php");
  //         }
  //       });
  //
  //     } else {
  //       alert("小心~~~別按錯了!!!");
  //     }
  //   });
  // });

});
function Delete(De){
  
  bootbox.confirm("Are you sure?", function(result) {
     if (result) {
       $.ajax({
         type:"POST",
         url: "member/delete.php",
         data:{'DeAccountss[]':De},
         success:function(data){
           alerts(data,"member.php");
         }
       });

     } else {
       alert("小心~~~別按錯了!!!");
     }
   });
}
function OnlyDelete() {

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
            alerts(data,"member.php");//轉回指定葉面
          }
        });
      } else {
        alert("小心~~~別按錯了!!!");
      }
    });
  });
}
