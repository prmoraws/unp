```sh
php artisan make:migration create_categorias_table
php artisan make:migration create_cargos_table
php artisan make:migration create_grupos_table
```

```sh
php artisan make:model Categoria
php artisan make:model Cargo
php artisan make:model Grupo
```

Crias os elementos
```sh
php artisan make:livewire categorias
php artisan make:livewire cargos
php artisan make:livewire grupos
```

Habilitar Storage Link
```sh
php artisan storage:link
```

