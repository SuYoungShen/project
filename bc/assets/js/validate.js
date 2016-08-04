function validate(){
  $.validator.setDefaults({
      submitHandler: function() {
        alert("提交事件!");
      }
  });

  $().ready(function() {
    // 提交时验证表单
    var validator = $("#test").validate({

      rules:{
        account:{
          required: true,
          minlength: 4
        },
        password: {
            required: true,
            minlength: 5
        },
        email: {
          required: true,

        },
        name: {
          required: true
        }
      },
      messages: {
        account: {
          required: " (必填)",
          minlength: " (帳號不得少於4個)"
        },
        password: {
          required: " (必填)",
          minlength: " (密碼不得少於5個)",
          // maxlength: " (字母不能少于 5 个且不能大于 12 个)"
        },
        email: {
          required: "(必填)",
          email: "請輸入正確的email格式"
        },

        name:"不能為空值"
      }
    });
    $(".cancel").click(function() {
      validator.resetForm();
    });
  });
};
