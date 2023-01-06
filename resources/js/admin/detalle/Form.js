import AppForm from '../app-components/Form/AppForm';

Vue.component('detalle-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                ID_DETALLE:  '' ,
                PRECIO_ALMACEN:  '' ,
                PRECIO_VENTA:  '' ,
                COD_P:  '' ,
                ID_PLANTA:  '' ,
                CI_EMPLEADO:  '' ,
                
            }
        }
    }

});