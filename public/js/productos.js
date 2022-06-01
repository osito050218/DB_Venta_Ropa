//Arrow function
	const validar=()=>{
		const prove_id=document.querySelector("#prove_id");
		const pro_nombre=document.querySelector("#pro_nombre");
		const pro_descripcion=document.querySelector("#pro_descripcion");
		
		if(prove_id.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo proveedor es obligatorio',
			});
			
			return false;
		}
			

		if(pro_nombre.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo nombre es obligatorio',
			});
			
			return false;
		}

		if(pro_descripcion.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo descripcion es obligatorio',
			});
			
			return false;
		}

		
	}