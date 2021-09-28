
function change(){

	var show = document.getElementById('show');

	if (show.type=="password") {
		show.type = 'text';
	}
	else{
		show.type = 'password';
	}
}

