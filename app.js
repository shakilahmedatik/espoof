$(document).ready(function(){
	$("#btn").on('click',function(){
		var mailist = $("#to").val().split("\n");
		var tmailist =  mailist.length;
		for (var current = 0; current < tmailist; current++) {
		var from = $("#from").val();
		var name = $("#name").val();
		var sub = $("#sub").val();
		var msg = $("#msg").val();
		var to = mailist[current];
		var data = "ajax=1&from=" + from + "&name=" + name + "&sub=" + sub + "&msg=" + msg + "&to=" + to;
			$.ajax({
				type : 'POST',
				data:  data,
				success: function(data) {
	                $("#result").append(data);
	            }
			});
		}


	});
});