@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.plantum.actions.edit', ['name' => $plantum->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <plantum-form
                :action="'{{ $plantum->resource_url }}'"
                :data="{{ $plantum->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.plantum.actions.edit', ['name' => $plantum->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.plantum.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </plantum-form>

        </div>
    
</div>

@endsection