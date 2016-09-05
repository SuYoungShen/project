$(document).ready(function() {

	$("button[name='insert']").click(function() {

		var placeName = $("select[name='placeName']").val();//地區名
		var viewpoint = $("input[name='viewpoint']").val();//景點名
		var attractions = $("input[name='attractions']").val();//景點介紹
		var arrival = $("input[name='arrival']").val();//如何到達
		// var picName = $("input[name='picName[]']").files();//圖片

			var file_data = $("input[name='picName[]']").prop('files')[0];
			
			var form_data = new FormData();
			form_data.append('file', file_data);


			$.ajax({
				type:"POST",
				url: "view/place/insert.php",
				cache: false,
                contentType: false,
                processData: false,
                data: form_data,
				success:function(data){//data傳回的訊息
					alert(data);
				},
				error:function(data) {
					alert(data);
				}
			});
		});
	});
