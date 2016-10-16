$(document).ready(function() {
  //防呆
  function Foolproof(rule, place, me, min, max){

    var Val = $(place).val();
    var Length= Val.length;

    if(rule.test(Val)){
      $(place).css("border-color","green");
      return Val;

    }else if(Val ==""){
      // $(this).text('(必填)').css({"color":"red"});
      alert(me+"必填");
      BorderColorRed(place);

    }else if(Length < min){
      // $(this).text("(帳號不得小於4碼)").css({"color":"red"});
      alert(me+"不得小於"+min+"碼");
      BorderColorRed(place);

    }else if(Length > max){
      // $(this).text("(帳號不得超於10碼)").css({"color":"red"});
      alert(me+"不得超過於"+max+"碼");
      BorderColorRed(place);
    }else {
      alert("請輸入正確格式");
    }
  }
  //錯誤時,紅框
  function BorderColorRed(value){
    var data = value;
    $(data).css("border-color","red");
  }

function account(){

  var accountRule=/^[a-zA-z0-9]{4,10}$/;
  var accounts_p = "input[name='account']";
  var account_min = 4;
  var account_max = 10;
  var account_m = "帳號";

  $(accounts_p).blur(function(){
    Foolproof(accountRule, accounts_p, account_m, account_min, account_max);
  });//account
}

function password(){

  var passwordRule=/^[a-zA-z0-9]{5,36}$/;
  var password_p = "input[name='password']";
  var password_min = 5;
  var password_max = 36;
  var password_m = "密碼";

   $(password_p).blur(function(){
     Foolproof(passwordRule, password_p, password_m, password_min, password_max);
  });//password
}

function email(){
  var emailRule=/^[\w]+\@[a-zA-Z0-9]+\.[a-zA-z0-9]{2,4}$/;
  var email_p = "input[name='email']";
  // var password_min = 5;
  // var password_max = 36;
  var email_m = "email";

  $(email_p).blur(function(){
    Foolproof(emailRule, email_p, email_m);
  });//password
}

$("input[name='name']").blur(function(){

  var nameVal = $(this).val();

   if(nameVal){
     $(this).css("border-color","green");
   }else if(nameVal == ""){
     alert("必填")
     $(this).css("border-color","red");
   }
});//name

  account();
  password();
  email();


  $("button[name='registered']").click(function() {//註冊按鈕

    var accountRule=/^[a-zA-z0-9]{4,10}$/;
    var accounts_p = "input[name='account']";
    var account_min = 4;
    var account_max = 10;
    var account_m = "帳號";
    var account = Foolproof(accountRule, accounts_p, account_min, account_max, account_m);

    var passwordRule=/^[a-zA-z0-9]{5,36}$/;
    var password_p = "input[name='password']";
    var password_min = 5;
    var password_max = 36;
    var password_m = "密碼";
    var password = Foolproof(passwordRule, password_p, password_min, password_max, password_m);

    // var email = $("input[name='email']").val();
    // var name = $("input[name='name']").val();
    // var account = $("input[name='account']").val();
    // var password = $("input[name='password']").val();
    // var apassword = $("input[name='apassword']").val();
    //
    // if (email=="") {
    //
    //   alert("email空的ㄟ~~~");
    //
    // }else if (name=="") {
    //
    //   alert("姓名空的ㄟ~~~");
    //
    // }else if (account=="") {
    //
    //   alert("帳號空的ㄟ~~~");
    //
    // }else if ((password == "") || (apassword == "") ) {
    //   alert("密碼空的ㄟ~~~")
    //
    // }else{
    //   if (password == apassword) {
    //     $.ajax({
    //       type:"POST",
    //       url: "bc/member/insert.php",
    //       data:{
    //         'email':email,
    //         'name':name,
    //         'account':account,
    //         'password':password
    //       },
    //       success:function(data){
    //         alert(data);
    //         document.location.href="index.php";
    //       },
    //       error: function(data){
    //         alert(data);
    //       }
    //     });
    //   }else{
    //       alert("密碼不一致哦~~~");
    //   }//password==apassword
    // }




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
