<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'product' => [
        'title' => 'Product',

        'actions' => [
            'index' => 'Product',
            'create' => 'New Product',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'COD_P' => 'COD P',
            'NOMBRE_PRO' => 'NOMBRE PRO',
            'UNDAD_MEDIDA' => 'UNDAD MEDIDA',
            'FECHA_P' => 'FECHA P',
            
        ],
    ],

    'plantum' => [
        'title' => 'Planta',

        'actions' => [
            'index' => 'Planta',
            'create' => 'New Plantum',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'ID_PLANTA' => 'ID PLANTA',
            'NOMBRE_PL' => 'NOMBRE PL',
            'DESCIPCION' => 'DESCIPCION',
            'ENCARGADO' => 'ENCARGADO',
            'APELLIDO_ENC' => 'APELLIDO ENC',
            
        ],
    ],

    'empleado' => [
        'title' => 'Empleado',

        'actions' => [
            'index' => 'Empleado',
            'create' => 'New Empleado',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'CI_EMPLEADO' => 'CI EMPLEADO',
            'NOMBRE_EMPLEADO' => 'NOMBRE EMPLEADO',
            'APELLIDO_P' => 'APELLIDO P',
            'APELLIDO_M' => 'APELLIDO M',
            'FECHA_NAC' => 'FECHA NAC',
            'FECHA_INICIO' => 'FECHA INICIO',
            'TELEFONO' => 'TELEFONO',
            'DIRECCION' => 'DIRECCION',
            'SALARIO' => 'SALARIO',
            'SEXO' => 'SEXO',
            'ID_PLANTA' => 'ID PLANTA',
            
        ],
    ],

    'ubicacion' => [
        'title' => 'Ubicacion',

        'actions' => [
            'index' => 'Ubicacion',
            'create' => 'New Ubicacion',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'ID_UBICACION' => 'ID UBICACION',
            'DESIGNACION' => 'DESIGNACION',
            'TIPO' => 'TIPO',
            'CAPACIDAD' => 'CAPACIDAD',
            'ID_PLANTA' => 'ID PLANTA',
            
        ],
    ],

    'detalle' => [
        'title' => 'Detalle',

        'actions' => [
            'index' => 'Detalle',
            'create' => 'New Detalle',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'ID_DETALLE' => 'ID DETALLE',
            'PRECIO_ALMACEN' => 'PRECIO ALMACEN',
            'PRECIO_VENTA' => 'PRECIO VENTA',
            'COD_P' => 'COD P',
            'ID_PLANTA' => 'ID PLANTA',
            'CI_EMPLEADO' => 'CI EMPLEADO',
            
        ],
    ],

    'inventario' => [
        'title' => 'Inventario',

        'actions' => [
            'index' => 'Inventario',
            'create' => 'New Inventario',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'ID_INVENTARIO' => 'ID INVENTARIO',
            'FECHA' => 'FECHA',
            'COD_P' => 'COD P',
            'ID_PLANTA' => 'ID PLANTA',
            'CI_EMPLEADO' => 'CI EMPLEADO',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];