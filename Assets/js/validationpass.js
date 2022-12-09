let inputPass = document.getElementById("confirmarPassReg")
let botonRegistroFinal = document.getElementById("botonRegistroFinal")
function passValidation(){
	let pass = document.getElementById("passwordReg").value
	let confirmarPass = document.getElementById("confirmarPassReg").value
	if (pass !== confirmarPass) {
		return false
	}
	return true
}
inputPass.addEventListener("keyup",function(event){
	event.preventDefault();
	if (!passValidation()) {
		inputPass.classList.add("border-danger");
		botonRegistroFinal.setAttribute('disabled','');
	}else{
		inputPass.classList.remove("border-danger");
		botonRegistroFinal.removeAttribute("disabled");
	}
});
function verPassword(){
	let pass = document.getElementById("passwordReg")
	if (pass.getAttribute("type")=="text") {
		pass.setAttribute("type","password");
		document.getElementById("iconoPass").classList.remove("fa-eye");
		document.getElementById("iconoPass").classList.add("fa-eye-slash");

	}else if (pass.getAttribute("type")=="password") {
		pass.setAttribute('type','text');
		document.getElementById("iconoPass").classList.remove("fa-eye-slash");
		document.getElementById("iconoPass").classList.add("fa-eye");
	}

}
function verPassword2(){
	let pass = document.getElementById("confirmarPassReg")
	if (pass.getAttribute("type")=="text") {
		pass.setAttribute("type","password");
		document.getElementById("iconoPass2").classList.remove("fa-eye");
		document.getElementById("iconoPass2").classList.add("fa-eye-slash");

	}else if (pass.getAttribute("type")=="password") {
		pass.setAttribute('type','text');
		document.getElementById("iconoPass2").classList.remove("fa-eye-slash");
		document.getElementById("iconoPass2").classList.add("fa-eye");
	}

}