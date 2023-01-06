<div class="form-group row align-items-center" :class="{'has-danger': errors.has('CI_EMPLEADO'), 'has-success': fields.CI_EMPLEADO && fields.CI_EMPLEADO.valid }">
    <label for="CI_EMPLEADO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.CI_EMPLEADO') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.CI_EMPLEADO" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('CI_EMPLEADO'), 'form-control-success': fields.CI_EMPLEADO && fields.CI_EMPLEADO.valid}" id="CI_EMPLEADO" name="CI_EMPLEADO" placeholder="{{ trans('admin.empleado.columns.CI_EMPLEADO') }}">
        <div v-if="errors.has('CI_EMPLEADO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('CI_EMPLEADO') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('NOMBRE_EMPLEADO'), 'has-success': fields.NOMBRE_EMPLEADO && fields.NOMBRE_EMPLEADO.valid }">
    <label for="NOMBRE_EMPLEADO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.NOMBRE_EMPLEADO') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.NOMBRE_EMPLEADO" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('NOMBRE_EMPLEADO'), 'form-control-success': fields.NOMBRE_EMPLEADO && fields.NOMBRE_EMPLEADO.valid}" id="NOMBRE_EMPLEADO" name="NOMBRE_EMPLEADO" placeholder="{{ trans('admin.empleado.columns.NOMBRE_EMPLEADO') }}">
        <div v-if="errors.has('NOMBRE_EMPLEADO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('NOMBRE_EMPLEADO') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('APELLIDO_P'), 'has-success': fields.APELLIDO_P && fields.APELLIDO_P.valid }">
    <label for="APELLIDO_P" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.APELLIDO_P') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.APELLIDO_P" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('APELLIDO_P'), 'form-control-success': fields.APELLIDO_P && fields.APELLIDO_P.valid}" id="APELLIDO_P" name="APELLIDO_P" placeholder="{{ trans('admin.empleado.columns.APELLIDO_P') }}">
        <div v-if="errors.has('APELLIDO_P')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('APELLIDO_P') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('APELLIDO_M'), 'has-success': fields.APELLIDO_M && fields.APELLIDO_M.valid }">
    <label for="APELLIDO_M" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.APELLIDO_M') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.APELLIDO_M" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('APELLIDO_M'), 'form-control-success': fields.APELLIDO_M && fields.APELLIDO_M.valid}" id="APELLIDO_M" name="APELLIDO_M" placeholder="{{ trans('admin.empleado.columns.APELLIDO_M') }}">
        <div v-if="errors.has('APELLIDO_M')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('APELLIDO_M') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('FECHA_NAC'), 'has-success': fields.FECHA_NAC && fields.FECHA_NAC.valid }">
    <label for="FECHA_NAC" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.FECHA_NAC') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.FECHA_NAC" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('FECHA_NAC'), 'form-control-success': fields.FECHA_NAC && fields.FECHA_NAC.valid}" id="FECHA_NAC" name="FECHA_NAC" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('FECHA_NAC')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('FECHA_NAC') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('FECHA_INICIO'), 'has-success': fields.FECHA_INICIO && fields.FECHA_INICIO.valid }">
    <label for="FECHA_INICIO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.FECHA_INICIO') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.FECHA_INICIO" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('FECHA_INICIO'), 'form-control-success': fields.FECHA_INICIO && fields.FECHA_INICIO.valid}" id="FECHA_INICIO" name="FECHA_INICIO" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('FECHA_INICIO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('FECHA_INICIO') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('TELEFONO'), 'has-success': fields.TELEFONO && fields.TELEFONO.valid }">
    <label for="TELEFONO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.TELEFONO') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.TELEFONO" v-validate="'integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('TELEFONO'), 'form-control-success': fields.TELEFONO && fields.TELEFONO.valid}" id="TELEFONO" name="TELEFONO" placeholder="{{ trans('admin.empleado.columns.TELEFONO') }}">
        <div v-if="errors.has('TELEFONO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('TELEFONO') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('DIRECCION'), 'has-success': fields.DIRECCION && fields.DIRECCION.valid }">
    <label for="DIRECCION" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.DIRECCION') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.DIRECCION" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('DIRECCION'), 'form-control-success': fields.DIRECCION && fields.DIRECCION.valid}" id="DIRECCION" name="DIRECCION" placeholder="{{ trans('admin.empleado.columns.DIRECCION') }}">
        <div v-if="errors.has('DIRECCION')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('DIRECCION') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('SALARIO'), 'has-success': fields.SALARIO && fields.SALARIO.valid }">
    <label for="SALARIO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.SALARIO') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.SALARIO" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('SALARIO'), 'form-control-success': fields.SALARIO && fields.SALARIO.valid}" id="SALARIO" name="SALARIO" placeholder="{{ trans('admin.empleado.columns.SALARIO') }}">
        <div v-if="errors.has('SALARIO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('SALARIO') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('SEXO'), 'has-success': fields.SEXO && fields.SEXO.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="SEXO" type="checkbox" v-model="form.SEXO" v-validate="''" data-vv-name="SEXO"  name="SEXO_fake_element">
        <label class="form-check-label" for="SEXO">
            {{ trans('admin.empleado.columns.SEXO') }}
        </label>
        <input type="hidden" name="SEXO" :value="form.SEXO">
        <div v-if="errors.has('SEXO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('SEXO') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ID_PLANTA'), 'has-success': fields.ID_PLANTA && fields.ID_PLANTA.valid }">
    <label for="ID_PLANTA" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.empleado.columns.ID_PLANTA') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ID_PLANTA" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ID_PLANTA'), 'form-control-success': fields.ID_PLANTA && fields.ID_PLANTA.valid}" id="ID_PLANTA" name="ID_PLANTA" placeholder="{{ trans('admin.empleado.columns.ID_PLANTA') }}">
        <div v-if="errors.has('ID_PLANTA')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ID_PLANTA') }}</div>
    </div>
</div>


