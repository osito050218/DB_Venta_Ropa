//Arrow function
	const validar=()=>{
		const prove_nombre=document.querySelector("#prove_nombre");
		const prove_empresa=document.querySelector("#prove_empresa");
		const prove_direccion=document.querySelector("#prove_direccion");
		const prove_telefono=document.querySelector("#prove_telefono");
		const prove_producto=document.querySelector("#prove_producto");
		const prove_cantidad=document.querySelector("#prove_cantidad");


		if(prove_nombre.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo nombre es obligatorio',
			});
			
			return false;
		}
		if(prove_empresa.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo empresa es obligatorio',
			});
			
			return false;
		}
		if(prove_direccion.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo direccion es obligatorio',
			});
			
			return false;
		}
		if(prove_telefono.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo telefono es obligatorio',
			});
			
			return false;
		}
		if(prove_producto.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo producto es obligatorio',
			});
			
			return false;
		}
		if(prove_cantidad.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo cantidad es obligatorio',
			});
			
			return false;
		}
		


	}