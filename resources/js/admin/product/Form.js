import AppForm from '../app-components/Form/AppForm';

Vue.component('product-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                COD_P:  '' ,
                NOMBRE_PRO:  '' ,
                UNDAD_MEDIDA:  '' ,
                FECHA_P:  '' ,
                
            }
        }
    }

});