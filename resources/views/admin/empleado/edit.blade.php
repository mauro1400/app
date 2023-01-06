@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.empleado.actions.edit', ['name' => $empleado->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <empleado-form
                :action="'{{ $empleado->resource_url }}'"
                :data="{{ $empleado->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.empleado.actions.edit', ['name' => $empleado->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.empleado.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </empleado-form>

        </div>
    
</div>

@endsection