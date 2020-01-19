var app = new Vue({
    el: '#content',
    data: {
        datos: null,
        datosForm: {
            nombre: null,
            apellido: null,
            localidad: null,
            provincia: null,
            area: null,
            numero: null,
            tipo: null,
            email: null,
            asunto: null,
            consulta: null,
            ip: null
        },
        resultado: false,
        error: false,
        mensaje: null
    },
    methods: {
        // Todo: validación de los campos
        enviarForm: function () {

            console.log(this.datosForm);
            /*
            if (this.datos == '' || this.datos == null) {
                this.error = true;
                this.mensaje = "Ingrese su DNI";
                this.resultado = false;
                this.datosPersona = null;
                return false;
            } else {
                this.error = false;
                this.mensaje = null;
            }
            */

            axios.post('http://contacto.desarrollosocial.gob.ar/api/crear_ticket.php', this.datosForm,{
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                }
            })
                .then((response) => {
                    this.datosPersona = null;
                    this.error = false;
                    this.mensaje = null;

                    console.log(response.data);
                    /*

                    if (response.data.status == "ok") {
                        this.datosPersona = response.data.data
                        this.resultado = true;
                    }else{
                        this.resultado = false;
                        this.datosPersona = null;
                        this.error = true;
                        this.mensaje = "Usted no se encuentra dentro de un operativo activo."
                    }
                    */

                })
                .catch(() => {
                    this.resultado = false;
                    this.datosPersona = null;
                    this.error = true;
                    this.mensaje = "Hubo un error, por favor vuelva a intentarlo más tarde."
                })

        }
    }
})

