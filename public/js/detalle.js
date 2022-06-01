//Arrow function
	const validar=()=>{
		const fad_cantidad=document.querySelector("#fad_cantidad");
		
		
			

		if(fad_cantidad.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo cantidad es obligatorio',
			});
			
			return false;
		}


		
	}