<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ID_DETALLE'), 'has-success': fields.ID_DETALLE && fields.ID_DETALLE.valid }">
    <label for="ID_DETALLE" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.detalle.columns.ID_DETALLE') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ID_DETALLE" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ID_DETALLE'), 'form-control-success': fields.ID_DETALLE && fields.ID_DETALLE.valid}" id="ID_DETALLE" name="ID_DETALLE" placeholder="{{ trans('admin.detalle.columns.ID_DETALLE') }}">
        <div v-if="errors.has('ID_DETALLE')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ID_DETALLE') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('PRECIO_ALMACEN'), 'has-success': fields.PRECIO_ALMACEN && fields.PRECIO_ALMACEN.valid }">
    <label for="PRECIO_ALMACEN" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.detalle.columns.PRECIO_ALMACEN') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.PRECIO_ALMACEN" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('PRECIO_ALMACEN'), 'form-control-success': fields.PRECIO_ALMACEN && fields.PRECIO_ALMACEN.valid}" id="PRECIO_ALMACEN" name="PRECIO_ALMACEN" placeholder="{{ trans('admin.detalle.columns.PRECIO_ALMACEN') }}">
        <div v-if="errors.has('PRECIO_ALMACEN')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('PRECIO_ALMACEN') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('PRECIO_VENTA'), 'has-success': fields.PRECIO_VENTA && fields.PRECIO_VENTA.valid }">
    <label for="PRECIO_VENTA" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.detalle.columns.PRECIO_VENTA') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.PRECIO_VENTA" v-validate="'decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('PRECIO_VENTA'), 'form-control-success': fields.PRECIO_VENTA && fields.PRECIO_VENTA.valid}" id="PRECIO_VENTA" name="PRECIO_VENTA" placeholder="{{ trans('admin.detalle.columns.PRECIO_VENTA') }}">
        <div v-if="errors.has('PRECIO_VENTA')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('PRECIO_VENTA') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('COD_P'), 'has-success': fields.COD_P && fields.COD_P.valid }">
    <label for="COD_P" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.detalle.columns.COD_P') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.COD_P" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('COD_P'), 'form-control-success': fields.COD_P && fields.COD_P.valid}" id="COD_P" name="COD_P" placeholder="{{ trans('admin.detalle.columns.COD_P') }}">
        <div v-if="errors.has('COD_P')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('COD_P') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ID_PLANTA'), 'has-success': fields.ID_PLANTA && fields.ID_PLANTA.valid }">
    <label for="ID_PLANTA" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.detalle.columns.ID_PLANTA') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ID_PLANTA" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ID_PLANTA'), 'form-control-success': fields.ID_PLANTA && fields.ID_PLANTA.valid}" id="ID_PLANTA" name="ID_PLANTA" placeholder="{{ trans('admin.detalle.columns.ID_PLANTA') }}">
        <div v-if="errors.has('ID_PLANTA')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ID_PLANTA') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('CI_EMPLEADO'), 'has-success': fields.CI_EMPLEADO && fields.CI_EMPLEADO.valid }">
    <label for="CI_EMPLEADO" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.detalle.columns.CI_EMPLEADO') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.CI_EMPLEADO" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('CI_EMPLEADO'), 'form-control-success': fields.CI_EMPLEADO && fields.CI_EMPLEADO.valid}" id="CI_EMPLEADO" name="CI_EMPLEADO" placeholder="{{ trans('admin.detalle.columns.CI_EMPLEADO') }}">
        <div v-if="errors.has('CI_EMPLEADO')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('CI_EMPLEADO') }}</div>
    </div>
</div>


