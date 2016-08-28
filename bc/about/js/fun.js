$(document).ready(function() {

  $("button[name='AboutSubmit']").on(ace.click_event, function() {
    // var DeAccountss=[];
    var About = $("textarea[name='About']").val();
    if (About == "") {
      alert("請輸入資料");
    // }else {
    //   $.ajax({
    //     type:"POST",
    //     url: "about/about.php",
    //     data:{'About':About},
    //     success:function(data){
    //       alert(data);
    //     }
    //   });
    } 


  });

});

// function test(data){
//   dataa=data;
//     document.getElementById("form-field-8").value=dataa;
// }
