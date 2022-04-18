//Arrow function
	const validar=()=>{
		const usu_nombre=document.querySelector("#usu_nombre");
		const usu_apellido=document.querySelector("#usu_apellido");
		const usu_cedula=document.querySelector("#usu_cedula");
		const usu_telefono=document.querySelector("#usu_telefono");
		const email=document.querySelector("#email");
		const password=document.querySelector("#password");
		if(usu_nombre.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo nombre es obligatorio',
			});
			
			return false;
		}
		if(usu_apellido.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo apellido es obligatorio',
			});
			
			return false;
		}
		if(usu_cedula.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo cedula es obligatorio',
			});
			
			return false;
		}
		if(usu_telefono.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo telefono es obligatorio',
			});
			
			return false;
		}
		if(email.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo email es obligatorio',
			});
			
			return false;
		}
		if(password.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo contraseña es obligatorio',
			});
			
			return false;
		}


	}