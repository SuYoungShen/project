	$(document).ready(function() {
		var test = $("select[name='select']").val();

	$(":submit").click(function() {
				$.ajax({
					type:"POST",
					url: "view/place.php",
					data:{"selects":test},
					success:function(data){
						document.location.href=data;
						alert("成功");//轉回指定葉面
					}
				});

		});
	});
