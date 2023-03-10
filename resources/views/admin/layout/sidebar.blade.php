<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/products') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.product.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/planta') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.plantum.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/empleados') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.empleado.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/ubicacions') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.ubicacion.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/detalles') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.detalle.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/inventarios') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.inventario.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
