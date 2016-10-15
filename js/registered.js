$(document).ready(function() {

  // var accounts=/^[a-zA-z0-9]{4,10}$/;
  //  $("input[name='account']").blur(function(){
  //    var accountVal = $(this).val();
  //    var accountLength= accountVal.length;
  //     if(accounts.test(accountVal)){
  //         $('.account').text('');
  //         $(this).css("border-color","green");
  //
  //     }else if(accountVal ==""){
  //         // $(this).text('(必填)').css({"color":"red"});
  //         $(this).css("border-color","red");
  //
  //     }else if(accountLength < 4){
  //       // $(this).text("(帳號不得小於4碼)").css({"color":"red"});
  //       alert("帳號不得小於4碼");
  //       $(this).css("border-color","red");
  //
  //     }else if(accountLength > 20){
  //       // $(this).text("(帳號不得超於10碼)").css({"color":"red"});
  //       $(this).css("border-color","red");
  //     }
  // });//account
  var accountTEST=/^[a-zA-z0-9]{4,10}$/;
   $("input[name='account']").blur(function(){
     var accountVal = $(this).val();
     var accountLength= accountVal.length;
      if(accountTEST.test(accountVal)){
          $('.account').text('');
          $(this).css("border-color","green");

      }else if(accountVal ==""){
          $('.account').text('(必填)').css({"color":"red"});
          $(this).css("border-color","red");

      }else if(accountLength < 4){
        $('.account').text("(帳號不得小於4碼)").css({"color":"red"});
        $(this).css("border-color","red");

      }else if(accountLength > 10){
        $('.account').text("(帳號不得超於10碼)").css({"color":"red"});
        $(this).css("border-color","red");
      }
  });//account

  $("button[name='registered']").click(function() {//註冊按鈕

    var email = $("input[name='email']").val();
    var name = $("input[name='name']").val();
    var account = $("input[name='account']").val();
    var password = $("input[name='password']").val();
    var apassword = $("input[name='apassword']").val();

    if (email=="") {

      alert("email空的ㄟ~~~");

    }else if (name=="") {

      alert("姓名空的ㄟ~~~");

    }else if (account=="") {

      alert("帳號空的ㄟ~~~");

    }else if ((password == "") || (apassword == "") ) {
      alert("密碼空的ㄟ~~~")

    }else{
      if (password == apassword) {
        $.ajax({
          type:"POST",
          url: "bc/member/insert.php",
          data:{
            'email':email,
            'name':name,
            'account':account,
            'password':password
          },
          success:function(data){
            alert(data);
            document.location.href="index.php";
          },
          error: function(data){
            alert(data);
          }
        });
      }else{
          alert("密碼不一致哦~~~");
      }//password==apassword
    }




        // if (About == "") {
    //   alert("請輸入資料");
    // }else {
    //   $.ajax({
    //     type:"POST",
    //     url: "about/about.php",
    //     data:{'About':About},
    //     success:function(data){
    //       alert(data);
    //     }
    //   });
    // }
  });

  $("button[name='login']").click(function() {

    var account = $("input[name='login_account']").val();
    var password = $("input[name='login_password']").val();


      $.ajax({
          type:"POST",
          url: "login/check_login.php",
          data:{
            'login_account':account,
            'login_password':password
          },
          success:function(data){
            alert(data);
            document.location.href="index.php";
          },
          error: function(data){
            alert(data);
          }
        });



        // if (About == "") {
    //   alert("請輸入資料");
    // }else {
    //   $.ajax({
    //     type:"POST",
    //     url: "about/about.php",
    //     data:{'About':About},
    //     success:function(data){
    //       alert(data);
    //     }
    //   });
    // }
  });
  // $("button[name='login']").click(function() {
  //
  //   var account = $("input[name='account']").val();
  //   var password = $("input[name='password']").val();
  //
  //     $.ajax({
  //         type:"POST",
  //         url: "bc/member/insert.php",
  //         data:{
  //           'account':account,
  //           'password':password
  //         },
  //         success:function(data){
  //           alert(data);
  //           document.location.href="index.php";
  //         },
  //         error: function(data){
  //           alert(data);
  //         }
  //       });
  //
  //   // if (About == "") {
  //   //   alert("請輸入資料");
  //   // }else {
  //   //   $.ajax({
  //   //     type:"POST",
  //   //     url: "about/about.php",
  //   //     data:{'About':About},
  //   //     success:function(data){
  //   //       alert(data);
  //   //     }
  //   //   });
  //   // }
  // });
  //

});
