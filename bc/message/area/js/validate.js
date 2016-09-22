// function validate(){
  // $.validator.setDefaults({
  //     submitHandler: function() {
  //       alert("提交事件!");
  //     }
  // });
  /* Act on the event */
    // var email = $("#email").val();
    // if (validateEmail(email)) {
    //   alert('Nice!! your Email is valid, now you can continue..');
    // }else {
    //   alert('Invalid Email Address');
    //   // e.preventDefault();
    // }
    // function validateEmail(email) {
    //   var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    //   if (filter.test(email)) {
    //     return true;
    //   }
    //   else {
    //     return false;
    //   }
    // }
$(document).ready(function(){
  
//     var account=/^[a-zA-z0-9]{4,10}$/;
//      $("input[name='account']").blur(function(){
//        var accountVal = $(this).val();
//        var accountLength= accountVal.length;
//         if(account.test(accountVal)){
//             $('.account').text('');
//             $(this).css("border-color","green");
//
//         }else if(accountVal ==""){
//             $('.account').text('(必填)').css({"color":"red"});
//             $(this).css("border-color","red");
//
//         }else if(accountLength < 4){
//           $('.account').text("(帳號不得小於4碼)").css({"color":"red"});
//           $(this).css("border-color","red");
//
//         }else if(accountLength > 10){
//           $('.account').text("(帳號不得超於10碼)").css({"color":"red"});
//           $(this).css("border-color","red");
//         }
//     });//account
//
//     var password=/^[a-zA-z0-9]{5,36}$/;
//      $("input[name='password']").blur(function(){
//        var passwordVal = $(this).val();
//        var passwordLength= passwordVal.length;
//         if(password.test(passwordVal)){
//             $('.password').text('');
//             $(this).css("border-color","green");
//
//         }else if(passwordVal ==""){
//             $('.password').text('(必填)').css({"color":"red"});
//             $(this).css("border-color","red");
//
//         }else if(passwordLength < 5 ){
//           $('.password').text("(帳號不得小於5碼)").css({"color":"red"});
//           $(this).css("border-color","red");
//
//         }else if(passwordLength > 36){
//           $('.password').text("(帳號不得超於10碼)").css({"color":"red"});
//           $(this).css("border-color","red");
//         }
//     });//password
//
//     var email=/^[\w]+\@[a-zA-Z0-9]+\.[a-zA-z0-9]{2,4}$/;
//     $("input[name='email']").blur(function(){
//       var emailVal = $(this).val();
//
//        if(email.test(emailVal)){
//            $('.email').text('');
//            $(this).css("border-color","green");
//
//        }else if(emailVal ==""){
//            $('.email').text('(必填)').css({"color":"red"});
//            $(this).css("border-color","red");
//        }else {
//          $('.email').text('(請填入正確格式)').css({"color":"red"});
//          $(this).css("border-color","red");
//        }
//    });//email
//
//
//    $("input[name='name']").blur(function(){
//
//      var nameVal = $(this).val();
//
//       if(nameVal){
//           $('.name').text('');
//           $(this).css("border-color","green");
//       }else if(nameVal == ""){
//           $('.name').text('(必填)').css({"color":"red"});
//           $(this).css("border-color","red");
//       }
//    });//name
//
//
//   $(":reset").click(function() {//重設
//     $(".reset").text("");
//     $("input").css("border-color","");
//   });
//

});
