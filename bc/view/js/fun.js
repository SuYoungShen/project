	$(document).ready(function() {
		var placeName = $("select[name='placeName']").val();//地區名
		var viewpoint = $("input[name='viewpoint']").val();//景點名
		var attractions = $("input[name='attractions']").val();//景點介紹
		var arrival = $("input[name='arrival']").val();//如何到達

	$("button[name='insert']").click(function() {
			$.ajax({
				type:"POST",
				url: "view/place/insert.php",
				data:{
					"placeNames":placeName,
					"viewpoints":viewpoint,
					"attractionss":attractions,
					"arrivals":arrival
				},
				success:function(data){//data傳回的訊息
					alert(data);
				},
				error:function(data) {
					alert(data);
				}
			});
		});
	});
