<div class="form-group row align-items-center" :class="{'has-danger': errors.has('COD_P'), 'has-success': fields.COD_P && fields.COD_P.valid }">
    <label for="COD_P" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.COD_P') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.COD_P" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('COD_P'), 'form-control-success': fields.COD_P && fields.COD_P.valid}" id="COD_P" name="COD_P" placeholder="{{ trans('admin.product.columns.COD_P') }}">
        <div v-if="errors.has('COD_P')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('COD_P') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('NOMBRE_PRO'), 'has-success': fields.NOMBRE_PRO && fields.NOMBRE_PRO.valid }">
    <label for="NOMBRE_PRO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.NOMBRE_PRO') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.NOMBRE_PRO" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('NOMBRE_PRO'), 'form-control-success': fields.NOMBRE_PRO && fields.NOMBRE_PRO.valid}" id="NOMBRE_PRO" name="NOMBRE_PRO" placeholder="{{ trans('admin.product.columns.NOMBRE_PRO') }}">
        <div v-if="errors.has('NOMBRE_PRO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('NOMBRE_PRO') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('UNDAD_MEDIDA'), 'has-success': fields.UNDAD_MEDIDA && fields.UNDAD_MEDIDA.valid }">
    <label for="UNDAD_MEDIDA" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.UNDAD_MEDIDA') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.UNDAD_MEDIDA" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('UNDAD_MEDIDA'), 'form-control-success': fields.UNDAD_MEDIDA && fields.UNDAD_MEDIDA.valid}" id="UNDAD_MEDIDA" name="UNDAD_MEDIDA" placeholder="{{ trans('admin.product.columns.UNDAD_MEDIDA') }}">
        <div v-if="errors.has('UNDAD_MEDIDA')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('UNDAD_MEDIDA') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('FECHA_P'), 'has-success': fields.FECHA_P && fields.FECHA_P.valid }">
    <label for="FECHA_P" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.product.columns.FECHA_P') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.FECHA_P" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('FECHA_P'), 'form-control-success': fields.FECHA_P && fields.FECHA_P.valid}" id="FECHA_P" name="FECHA_P" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('FECHA_P')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('FECHA_P') }}</div>
    </div>
</div>


