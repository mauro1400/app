import AppForm from '../app-components/Form/AppForm';

Vue.component('empleado-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                CI_EMPLEADO:  '' ,
                NOMBRE_EMPLEADO:  '' ,
                APELLIDO_P:  '' ,
                APELLIDO_M:  '' ,
                FECHA_NAC:  '' ,
                FECHA_INICIO:  '' ,
                TELEFONO:  '' ,
                DIRECCION:  '' ,
                SALARIO:  '' ,
                SEXO:  false ,
                ID_PLANTA:  '' ,
                
            }
        }
    }

});