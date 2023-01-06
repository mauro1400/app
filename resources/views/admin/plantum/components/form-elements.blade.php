<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ID_PLANTA'), 'has-success': fields.ID_PLANTA && fields.ID_PLANTA.valid }">
    <label for="ID_PLANTA" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.plantum.columns.ID_PLANTA') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ID_PLANTA" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ID_PLANTA'), 'form-control-success': fields.ID_PLANTA && fields.ID_PLANTA.valid}" id="ID_PLANTA" name="ID_PLANTA" placeholder="{{ trans('admin.plantum.columns.ID_PLANTA') }}">
        <div v-if="errors.has('ID_PLANTA')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ID_PLANTA') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('NOMBRE_PL'), 'has-success': fields.NOMBRE_PL && fields.NOMBRE_PL.valid }">
    <label for="NOMBRE_PL" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.plantum.columns.NOMBRE_PL') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.NOMBRE_PL" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('NOMBRE_PL'), 'form-control-success': fields.NOMBRE_PL && fields.NOMBRE_PL.valid}" id="NOMBRE_PL" name="NOMBRE_PL" placeholder="{{ trans('admin.plantum.columns.NOMBRE_PL') }}">
        <div v-if="errors.has('NOMBRE_PL')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('NOMBRE_PL') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('DESCIPCION'), 'has-success': fields.DESCIPCION && fields.DESCIPCION.valid }">
    <label for="DESCIPCION" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.plantum.columns.DESCIPCION') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.DESCIPCION" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('DESCIPCION'), 'form-control-success': fields.DESCIPCION && fields.DESCIPCION.valid}" id="DESCIPCION" name="DESCIPCION" placeholder="{{ trans('admin.plantum.columns.DESCIPCION') }}">
        <div v-if="errors.has('DESCIPCION')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('DESCIPCION') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ENCARGADO'), 'has-success': fields.ENCARGADO && fields.ENCARGADO.valid }">
    <label for="ENCARGADO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.plantum.columns.ENCARGADO') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ENCARGADO" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ENCARGADO'), 'form-control-success': fields.ENCARGADO && fields.ENCARGADO.valid}" id="ENCARGADO" name="ENCARGADO" placeholder="{{ trans('admin.plantum.columns.ENCARGADO') }}">
        <div v-if="errors.has('ENCARGADO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ENCARGADO') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('APELLIDO_ENC'), 'has-success': fields.APELLIDO_ENC && fields.APELLIDO_ENC.valid }">
    <label for="APELLIDO_ENC" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.plantum.columns.APELLIDO_ENC') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.APELLIDO_ENC" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('APELLIDO_ENC'), 'form-control-success': fields.APELLIDO_ENC && fields.APELLIDO_ENC.valid}" id="APELLIDO_ENC" name="APELLIDO_ENC" placeholder="{{ trans('admin.plantum.columns.APELLIDO_ENC') }}">
        <div v-if="errors.has('APELLIDO_ENC')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('APELLIDO_ENC') }}</div>
    </div>
</div>


