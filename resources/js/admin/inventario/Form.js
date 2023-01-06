import AppForm from '../app-components/Form/AppForm';

Vue.component('inventario-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                ID_INVENTARIO:  '' ,
                FECHA:  '' ,
                COD_P:  '' ,
                ID_PLANTA:  '' ,
                CI_EMPLEADO:  '' ,
                
            }
        }
    }

});