function Insert(account,placeName) {

  if (account=="") {
    alert("請先登入會員");
  }else {
    $.ajax({
        type:"POST",
        url: "favorite/insert.php",
        data:{
          'account':account,
          'placeName':placeName
        },
        success:function(data){
          alert(data);//轉回指定葉面
        },
        error:function(data){
          alert(data);
        }
      });
  }
}
