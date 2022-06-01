
	const validar=()=>{
		const cli_id=document.querySelector("#cli_id");
		const fac_no=document.querySelector("#fac_no");
		const fac_fecha=document.querySelector("#fac_fecha");
		const fac_descuento=document.querySelector("#fac_descuento");
		const fac_iva=document.querySelector("#fac_iva");
		const fac_total=document.querySelector("#fac_total");
		const fac_tipo_pago=document.querySelector("#fac_tipo_pago");
		const fac_observaciones=document.querySelector("#fac_observaciones");
		
		

			

		if(cli_id.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo cliente es obligatorio',
			});
			
			return false;
		}

		if(fac_no.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo numero de la factura es obligatorio',
			});
			
			return false;
		}

		if(fac_fecha.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo fecha es obligatorio',
			});
			
			return false;
		}

		if(fac_descuento.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo descuento es obligatorio',
			});
			
			return false;
		}

		if(fac_iva.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo iva es obligatorio',
			});
			
			return false;
		}

		if(fac_total.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo total es obligatorio',
			});
			
			return false;
		}

		if(fac_tipo_pago.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo forma de pago es obligatorio',
			});
			
			return false;
		}

		if(fac_observaciones.value.length==0){
			Swal.fire({
				icon:'error',
				title:'Error',
				text:'El campo observaciones es obligatorio',
			});
			
			return false;
		}
		


		
	}