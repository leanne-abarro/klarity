$(function (){
	$("[data-field]").each(function (i,e){

		var url = window.location.href;

		var options = {
			type:"textarea",
			submitdata: {
				_method: "PUT",
				_token: $("#token").text(),
				field: $(e).attr("data-field")
			},
			submit:"OK"
		};

		$(e).editable(url,options);

	});
});

