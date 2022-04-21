<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrador = User::factory()->create([
            'email' => 'contabilidad@coodescor.org.co'
        ]);

        $vendedor = User::factory()->create([
            'email' => 'vendedor@coodescor.org.co'
        ]);

        $cliente = User::factory()->create([
            'email' => 'cliente@coodescor.org.co'
        ]);

        $admin = Role::create(['name' => 'administrador']);
        $seller = Role::create(['name' => 'vendedor']);
        $client = Role::create(['name' => 'cliente']);
        $role = Role::create(['name' => 'role']);

        //CRUD

        $permissions = [
            'create',
            'read',
            'update',
            'delete',
            'toggle'
        ];

        foreach(Role::all() as $rol){
            foreach($permissions as $per){
                $rol->name =='administrador' ? $rol->name = 'usuario' : $rol->name;
                Permission::create(['name' => "{$rol->name} $per"]);
            }
        }        
        
        $admin->syncPermissions(Permission::all());
        $seller->syncPermissions(Permission::where('name', 'like', '%vendedor%')->get());
        $client->syncPermissions(Permission::where('name', 'like', '%cliente%')->get());
        $role->syncPermissions(Permission::where('name', 'like', '%role%')->get());
        
        $administrador->assignRole('administrador');
        $cliente->assignRole('cliente');
        $vendedor->assignRole('vendedor');       
        
    }
}