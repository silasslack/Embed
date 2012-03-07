function savePost(acc){
	var h1 = $("#txt_head1").val();
	var h2 = $("#txt_head2").val();
	var cont = $("#txt_content").val();
	$.ajax({
		type: "POST",
		url: "include/savePost.php",
		data: "h1="+h1+"&h2="+h2+"&cont="+cont,
		success: function(returned){
			$("#result_sent").html(returned);
			showContent(acc);
		}
	});
}
function deletePost(acc,postid){
	$.ajax({
		type: "POST",
		url: "include/deletePost.php",
		data: "id="+postid,
		success: function(returned){
			$("#result_sent").html(returned);
			showContent(acc);
		}
	});
}
function sendRegForm(){
	var login = $("#login").val();
	var email = $("#email").val();
	var password = $("#password").val();
	var cpassword = $("#cpassword").val();
	$.ajax({
		type: "POST",
		url: "register-exec.php",
		data: "login="+login+"&email="+email+"&password="+password+"&cpassword="+cpassword,
		success: function(returned){
			$("#regresult").html(returned);
		}
	});
}
function showContent(acc){
	var edit = "true";
	$.ajax({
		type: "POST",
		url: "showContent.php",
		data: "account="+acc+"&edit="+edit,
		success: function(returned){
			$("#mainleftcontent").html(returned);
		}
	});
}
function showForm(acc){
	$.ajax({
		type: "POST",
		url: "include/createForm.php",
		data: "account="+acc,
		success: function(returned){
			$("#mainleftform").html(returned);
		}
	});
}
function showSettings(acc){
	$.ajax({
		type: "POST",
		url: "include/showSettings.php",
		data: "account="+acc,
		success: function(returned){
			$("#mainright").html(returned);
		}
	});
}
function updateSettings(acc){
	var TAG_OUTER_ST = $('#TAG_OUTER_ST').val();
	var TAG_OUTER_END = $('#TAG_OUTER_END').val();
	var TAG_1_ST = $('#TAG_1_ST').val();
	var TAG_1_END = $('#TAG_1_END').val();
	var TAG_2_ST = $('#TAG_2_ST').val();
	var TAG_2_END = $('#TAG_2_END').val();
	var TAG_3_ST = $('#TAG_3_ST').val();
	var TAG_3_END = $('#TAG_3_END').val();
	$.ajax({
		type: "POST",
		url: "include/updateSettings.php",
		data: "account="+acc+"&TAG_OUTER_ST="+TAG_OUTER_ST+"&TAG_OUTER_END="+TAG_OUTER_END+"&TAG_1_ST="+TAG_1_ST+"&TAG_2_ST="+TAG_2_ST+"&TAG_3_ST="+TAG_3_ST+"&TAG_1_END="+TAG_1_END+"&TAG_2_END="+TAG_2_END+"&TAG_3_END="+TAG_3_END,
		success: function(returned){
			$("#result_sent").html(returned);
			showSettings(acc);
			showContent(acc);
		}
	});
}