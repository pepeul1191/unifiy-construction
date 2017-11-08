var FormContactoView = Backbone.View.extend({
		el: '.contacto-form',
		initialize: function(){

		},
		events: {
	   "click #btnEnviar": "Guardar"
		},
		validarNombreLleno: function(event) {
				if($("#txtNombre").val() == ""){
						$("#txtNombre").addClass("has-error");
						$("#txtNombre").attr("placeholder", this.model['nombre_lleno_mensaje']);
		    this.model.set({nombre_lleno : false});
				}else{
						$("#txtNombre").removeClass("has-error");
						$("#txtNombre").attr("placeholder", "");
		    this.model.set({nombre_lleno : true});
				}
		}, 
		validarTelefonoLleno: function(event) {
				if($("#txtTelefono").val() == ""){
						$("#txtTelefono").addClass("has-error");
		    $("#txtTelefono").attr("placeholder", this.model['telefono_lleno_mensaje']);
		    this.model.set({telefono_lleno : false});
				}else{
						$("#txtTelefono").removeClass("has-error");
						$("#txtTelefono").attr("placeholder", "");
		    this.model.set({telefono_lleno : true});
				}
		}, 
		validarAsuntoLleno: function(event) {
				if($("#txtAsunto").val() == ""){
						$("#txtAsunto").addClass("has-error");
		    $("#txtAsunto").attr("placeholder", this.model['asunto_lleno_mensaje']);
		    this.model.set({asunto_lleno : false});
				}else{
						$("#txtAsunto").removeClass("has-error");
						$("#txtAsunto").attr("placeholder", "");
		    this.model.set({asunto_lleno : true});
				}
		}, 
		validarMensajeLleno: function(event) {
				if($("#txtMensaje").val() == ""){
						$("#txtMensaje").addClass("has-error");
		    $("#txtMensaje").attr("placeholder", this.model['mensaje_lleno_mensaje']);
		    this.model.set({mensaje_lleno : false});
				}else{
						$("#txtMensaje").removeClass("has-error");
						$("#txtMensaje").attr("placeholder", "");
		    this.model.set({mensaje_lleno : true});
				}
		}, 
		Guardar: function(event){
			this.validarNombreLleno();
			this.validarTelefonoLleno();
			this.validarAsuntoLleno();
			this.validarMensajeLleno();
			this.model.validar();
			if(this.model.get("valido") == true){
				console.log(this.model.toJSON());
				/*
				$.ajax({
	      		type: "POST",
	      		url: BASE_URL + "registro/guardar_usuario",
	      		data: "correo=" + $("#txtCorreo").val(),
	      		async: false,
	      		success: function(data){
	      			if(data >= 1){
	      				$("#txtCorreo").parent().addClass("has-error");
	      				$("#txtCorreo").parent().find("span").html("El correo ya se encuentra asociado a un usuario registrado");
	      				correo_valido_valor = false;
	      			}else{
	      				$("#txtCorreo").parent().removeClass("has-error");
	      				$("#txtCorreo").parent().find("span").html("");
	      				correo_valido_valor = true;
	      			}
	      		},
	      		error: function(data){
	      			//FALTA MANEJAR EL ERROR DEL AJAX
	      		}
	      	});
				*/
			}else{
				
			}
		}
});	