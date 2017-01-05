$(document).ready(function () {
	
	$('#contact').DataTable();

	$("#add-button").click(function (e) {
		e.preventDefault();
		$("#form-holder").show(500);
	});

		$("#close-button").click(function (e) {
			e.preventDefault();
			$("#form-holder").hide();
		});

			$("#add-contact").click(function (e) {
				e.preventDefault();
				$.ajax({
					url: 'http://localhost:8080/stalin_projects/stalin_codeig_blog/Datatablecontroller/add_contact', // point to server-side controller method
					cache: false,
					data: $("#contact-form").serialize(),
					type: 'post'
				}).done(function (url) {
					
					location.href = url;
				}).fail(function (url) {
					location.href = url;
				}).always(function (url) {
					location.href = url;
				});
			});

				$('.delete-button').click(function () {
					var deleteId = $(this).attr('id');
					$.ajax({
						url: 'http://localhost:8080/stalin_projects/stalin_codeig_blog/Datatablecontroller/delete_contact', // point to server-side controller method
						cache: false,
						data: "id=" + deleteId,
						type: 'post'
					}).done(function (url) {
						location.href = url;
					}).fail(function (url) {
						location.href = url;
					}).always(function (url) {
						location.href = url;
					});
				});
                
					//$('#contact tbody .edit-button').click(function () {
					$('#contact tbody').on('click', 'td .edit-button', function(event) {
						var par = $(this).parent().parent(); //tr
						var tdId = par.children("td:nth-child(1)");
						var tdName = par.children("td:nth-child(2)");
						var tdAddress = par.children("td:nth-child(3)");
						var tdPhone = par.children("td:nth-child(4)");
						var tdButtons = par.children("td:nth-child(5)");

						tdId.html(tdId.html());
						tdName.html("<input type='text' id='txtName' value='" + tdName.html() + "'/>");
						tdAddress.html("<textarea id='txtAddress'>" + tdAddress.html() + "</textarea>");
						tdPhone.html("<input type='text' id='txtPhone' value='" + tdPhone.html() + "'/>");
						tdButtons.html("<button class=\"update-button\">Save</button>&nbsp;<button class=\"cancel-button\">Cancel</button>");
					});
});

	$(document).on('click', '.update-button', function () {
		var par = $(this).parent().parent(); //tr
		var tdId = par.children("td:nth-child(1)");
		var tdName = par.children("td:nth-child(2)");
		var tdAddress = par.children("td:nth-child(3)");
		var tdPhone = par.children("td:nth-child(4)");
		$.ajax({
			url: 'http://localhost:8080/stalin_projects/stalin_codeig_blog/Datatablecontroller/update_contact', // point to server-side controller method
			cache: false,
			data: "id=" + tdId.html() + "&name=" + tdName.children("input[type=text]").val() + "&address=" + tdAddress.children("textarea").val() + "&phone=" + tdPhone.children("input[type=text]").val(),
			type: 'post'
		}).done(function (url) {
			location.href = url;
		}).fail(function (url) {
			location.href = url;
		}).always(function (url) {
			location.href = url;
		});
	});

		$(document).on('click', '.cancel-button', function () {
			$.ajax({
				url: 'http://localhost:8080/stalin_projects/stalin_codeig_blog/Datatablecontroller/cancel_contact', // point to server-side controller method
				cache: false,
				type: 'post'
			}).done(function (url) {
				location.href = url;
			}).fail(function (url) {
				location.href = url;
			}).always(function (url) {
				location.href = url;
			});
		});
		