'providers' => [
        ............
        Yajra\Datatables\DatatablesServiceProvider::class,

    ],



'aliases' => [
        ................
        'DataTables' => Yajra\DataTables\Facades\DataTables::class,

    ],




    After adding service provider and alias details, now we want to publish following package under this application, so we can use this package under Laravel. So for this we have to go to command prompt and write following command.


    php artisan vendor:publish --provider=Yajra\Datatables\DataTablesService