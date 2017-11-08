var ContactoIngles = Backbone.Model.extend({
    initialize: function() {
        this.nombre_lleno = false;
        this.telefono_lleno = false;
        this.asunto_lleno = false;
        this.mensaje_lleno = false;
        this.valido = false;
        this.nombre_lleno_mensaje = 'Name';
        this.telefono_lleno_mensaje = 'Phone';
        this.asunto_lleno_mensaje = 'Subject';
        this.mensaje_lleno_mensaje = 'Message';
    }, 
    validar: function() {
        if(this.get("nombre_lleno") == true && this.get("telefono_lleno") == true && this.get("asunto_lleno") == true && this.get("mensaje_lleno") == true){
            this.set({valido : true});
        }else{
            this.set({valido : false});
        }
    },
    toJSON: function() {
        var usuario = new Object();
        usuario.nombre = $("#txtNombre").val();
        usuario.telefono = $("#txtTelefono").val();
        usuario.asunto = $("#txtAsunto").val();
        usuario.mensaje = $("#txtMensaje").val();

        return usuario;
    }
});