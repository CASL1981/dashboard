<?php

namespace Modules\Basics\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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

<<<<<<< HEAD

        foreach($modules as $rol){
            foreach($permissions as $per){
                Permission::create([
                    'name' => "{$rol} $per",
                    'modleo' => "{$rol}"
                ]);
            }
        }

        $admin->syncPermissions(Permission::all());

        Destination::factory(20)->create();
=======
        
        foreach($modules as $rol){            
            foreach($permissions as $per){                
                Permission::create(['name' => "{$rol} $per"]);
            }            
        }        
                
        $admin->syncPermissions(Permission::all());       
                
        $this->call(DestinationTableSeeder::class);
>>>>>>> 5bb051de6b225a6b1beed09a7a87a7415be26a08
        $this->call(EmployeeTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(ClientTableSeeder::class);
    }
}
