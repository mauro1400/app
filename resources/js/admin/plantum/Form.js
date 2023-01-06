import AppForm from '../app-components/Form/AppForm';

Vue.component('plantum-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                ID_PLANTA:  '' ,
                NOMBRE_PL:  '' ,
                DESCIPCION:  '' ,
                ENCARGADO:  '' ,
                APELLIDO_ENC:  '' ,
                
            }
        }
    }

});