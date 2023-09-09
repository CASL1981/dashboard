<?php

namespace Modules\Basics\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Basics\Entities\Destination;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class BasicsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        $admin = Role::find(1);

        $modules = [
            'destination',
            'employee',
            'client',
            'payment'
        ];

        //CRUD
        $permissions = [
            'create',
            'read',
            'update',
            'delete',
            'toggle'
        ];


        foreach($modules as $rol){
            foreach($permissions as $per){
                Permission::create([
                    'name' => "{$rol} $per",
                    'modelo' => "{$rol}"
                ]);
            }
        }

        $admin->syncPermissions(Permission::all());

        Destination::factory(20)->create();
        $this->call(EmployeeTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(ClientTableSeeder::class);
    }
}
