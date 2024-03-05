window.limpiar_formulario = (container) => {

	let inputs = [].slice.call(container.getElementsByTagName('input'));
	inputs.forEach(function(element) {
		if (element.type != 'checkbox' && element.type != 'radio') {
			if (!element.dataset.limpiar || element.dataset.limpiar == "true") {
				element.value = "";
			}
		} else {
			if ( !element.dataset.checked || element.dataset.checked == "false") {
				element.checked = false;
			}
		}
	});

	let textareas = [].slice.call(container.getElementsByTagName('textarea'));
	textareas.forEach(function(element) {
		element.value = "";
	});

	let selects = [].slice.call(container.getElementsByTagName('select'));
	selects.forEach(function(element) {
		if (element.classList.contains("choices__input")) {
			let id = element.id;
			if (element.multiple) {
				choices[id].removeActiveItems();
				choices[id].setChoiceByValue([]);
			} else {
				choices[id].setChoiceByValue(['']);
			}
		} else {
			element.value = "";
		}
	});
}

window.validar_campos = (container) => {

	limpiar_validacion();

	let valid = true;
	container.querySelectorAll('.validar').forEach(function(element) {

		if ( !element.disabled && (!element.dataset.disabled || element.dataset.disabled == 'false')) {
			let valor = true;

			if (element.classList.contains("validar-radio")) {
				valor = element.querySelector("input:checked");
			} else {
				let val = element.value;
				valor = (val == "" || val == null) ? false : true; 
			}

			if ( !valor && !element.classList.contains("validar-opcional")) {
				let label = document.createElement('label');
				label.innerHTML = 'Debe completar este campo';
				label.classList.add('text-danger', 'fw-semibold', 'label-validator');

				if (element.classList.contains("choices__input")) {
					element.parentNode.parentNode.parentNode.appendChild(label)
				} else {
					element.parentNode.appendChild(label);
				}
				valid = false;
			} else {
				if (valor) {
					if ( (typeof element.dataset.min != 'undefined') && element.dataset.min != element.value.length ) {
						console.log(element.dataset.min , element.value.length);
						let label = document.createElement('label');
						label.innerHTML = 'Debe ingresar un número de celular válido';
						label.classList.add('text-danger', 'fw-semibold', 'label-validator');
	
						element.parentNode.appendChild(label);
						valid = false;
					} else if ( (typeof element.dataset.correo != 'undefined') && element.dataset.correo == 'true' ) {
						if ( !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)) ) {
							let label = document.createElement('label');
							label.innerHTML = 'Debe ingresar correo válido';
							label.classList.add('text-danger', 'fw-semibold', 'label-validator');
	
							element.parentNode.appendChild(label);
							valid = false;
						}
					}
				}
			}
		}
	});

	return valid
}

window.limpiar_validacion = () => {
	document.querySelectorAll('.label-validator').forEach(function(element) {
		element.remove();
	});
}

window.send_ajax = (url, type, params = null) => {
	return  new Promise((resolve, reject) => {
		let xmlhttp = new XMLHttpRequest();
		
		let endpoint = new URL(OPT.base_url + url);
		// endpoint.search = new URLSearchParams(data).toString()

		let type_request = (type == "POSTJSON") ? "POST" : type;
		
		xmlhttp.open(type_request, endpoint);
		xmlhttp.setRequestHeader("X-CSRF-TOKEN", OPT.token_csrf);

		if (type != "POST") {
			xmlhttp.setRequestHeader("Content-Type", "application/json");
			params = params ? JSON.stringify(params) : null;
		}

		openLoader();
		xmlhttp.send(params);
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200)
			{
				closeLoader();
				let data = JSON.parse(this.responseText);
				
				if (data.status) {
					resolve(data);
				} else {
					reject('error');
					swal( 'Error!', data["message"], 'error' );
				}
			}
		}
	});
}

window.openLoader = () => {
	// console.log('Open loader');
	let loader = document.getElementById('isem-loader');
	loader.classList.remove('d-none');
	document.body.style.overflow = 'hidden'; 
}
window.closeLoader = () => {
	// console.log('Close loader');
	let loader = document.getElementById('isem-loader');
	loader.classList.add('d-none');
	document.body.style.overflow = 'inherit';
}