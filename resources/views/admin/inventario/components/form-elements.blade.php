<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ID_INVENTARIO'), 'has-success': fields.ID_INVENTARIO && fields.ID_INVENTARIO.valid }">
    <label for="ID_INVENTARIO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventario.columns.ID_INVENTARIO') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ID_INVENTARIO" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ID_INVENTARIO'), 'form-control-success': fields.ID_INVENTARIO && fields.ID_INVENTARIO.valid}" id="ID_INVENTARIO" name="ID_INVENTARIO" placeholder="{{ trans('admin.inventario.columns.ID_INVENTARIO') }}">
        <div v-if="errors.has('ID_INVENTARIO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ID_INVENTARIO') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('FECHA'), 'has-success': fields.FECHA && fields.FECHA.valid }">
    <label for="FECHA" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventario.columns.FECHA') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.FECHA" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('FECHA'), 'form-control-success': fields.FECHA && fields.FECHA.valid}" id="FECHA" name="FECHA" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('FECHA')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('FECHA') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('COD_P'), 'has-success': fields.COD_P && fields.COD_P.valid }">
    <label for="COD_P" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventario.columns.COD_P') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.COD_P" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('COD_P'), 'form-control-success': fields.COD_P && fields.COD_P.valid}" id="COD_P" name="COD_P" placeholder="{{ trans('admin.inventario.columns.COD_P') }}">
        <div v-if="errors.has('COD_P')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('COD_P') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ID_PLANTA'), 'has-success': fields.ID_PLANTA && fields.ID_PLANTA.valid }">
    <label for="ID_PLANTA" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventario.columns.ID_PLANTA') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ID_PLANTA" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ID_PLANTA'), 'form-control-success': fields.ID_PLANTA && fields.ID_PLANTA.valid}" id="ID_PLANTA" name="ID_PLANTA" placeholder="{{ trans('admin.inventario.columns.ID_PLANTA') }}">
        <div v-if="errors.has('ID_PLANTA')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ID_PLANTA') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('CI_EMPLEADO'), 'has-success': fields.CI_EMPLEADO && fields.CI_EMPLEADO.valid }">
    <label for="CI_EMPLEADO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.inventario.columns.CI_EMPLEADO') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.CI_EMPLEADO" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('CI_EMPLEADO'), 'form-control-success': fields.CI_EMPLEADO && fields.CI_EMPLEADO.valid}" id="CI_EMPLEADO" name="CI_EMPLEADO" placeholder="{{ trans('admin.inventario.columns.CI_EMPLEADO') }}">
        <div v-if="errors.has('CI_EMPLEADO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('CI_EMPLEADO') }}</div>
    </div>
</div>


