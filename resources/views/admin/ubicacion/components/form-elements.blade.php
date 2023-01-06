<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ID_UBICACION'), 'has-success': fields.ID_UBICACION && fields.ID_UBICACION.valid }">
    <label for="ID_UBICACION" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ubicacion.columns.ID_UBICACION') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ID_UBICACION" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ID_UBICACION'), 'form-control-success': fields.ID_UBICACION && fields.ID_UBICACION.valid}" id="ID_UBICACION" name="ID_UBICACION" placeholder="{{ trans('admin.ubicacion.columns.ID_UBICACION') }}">
        <div v-if="errors.has('ID_UBICACION')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ID_UBICACION') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('DESIGNACION'), 'has-success': fields.DESIGNACION && fields.DESIGNACION.valid }">
    <label for="DESIGNACION" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ubicacion.columns.DESIGNACION') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.DESIGNACION" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('DESIGNACION'), 'form-control-success': fields.DESIGNACION && fields.DESIGNACION.valid}" id="DESIGNACION" name="DESIGNACION" placeholder="{{ trans('admin.ubicacion.columns.DESIGNACION') }}">
        <div v-if="errors.has('DESIGNACION')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('DESIGNACION') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('TIPO'), 'has-success': fields.TIPO && fields.TIPO.valid }">
    <label for="TIPO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ubicacion.columns.TIPO') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.TIPO" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('TIPO'), 'form-control-success': fields.TIPO && fields.TIPO.valid}" id="TIPO" name="TIPO" placeholder="{{ trans('admin.ubicacion.columns.TIPO') }}">
        <div v-if="errors.has('TIPO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('TIPO') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('CAPACIDAD'), 'has-success': fields.CAPACIDAD && fields.CAPACIDAD.valid }">
    <label for="CAPACIDAD" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ubicacion.columns.CAPACIDAD') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.CAPACIDAD" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('CAPACIDAD'), 'form-control-success': fields.CAPACIDAD && fields.CAPACIDAD.valid}" id="CAPACIDAD" name="CAPACIDAD" placeholder="{{ trans('admin.ubicacion.columns.CAPACIDAD') }}">
        <div v-if="errors.has('CAPACIDAD')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('CAPACIDAD') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ID_PLANTA'), 'has-success': fields.ID_PLANTA && fields.ID_PLANTA.valid }">
    <label for="ID_PLANTA" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.ubicacion.columns.ID_PLANTA') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ID_PLANTA" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ID_PLANTA'), 'form-control-success': fields.ID_PLANTA && fields.ID_PLANTA.valid}" id="ID_PLANTA" name="ID_PLANTA" placeholder="{{ trans('admin.ubicacion.columns.ID_PLANTA') }}">
        <div v-if="errors.has('ID_PLANTA')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ID_PLANTA') }}</div>
    </div>
</div>


