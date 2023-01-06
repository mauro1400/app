import AppForm from '../app-components/Form/AppForm';

Vue.component('ubicacion-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                ID_UBICACION:  '' ,
                DESIGNACION:  '' ,
                TIPO:  '' ,
                CAPACIDAD:  '' ,
                ID_PLANTA:  '' ,
                
            }
        }
    }

});