<div>
    <x-otros.view-card>
      <x-slot name="title">Permisos</x-slot>
      <x-slot name="button">
        <div class="btn-group float-right" role="group" aria-label="Basic example"></div>
      </x-slot>
      <x-table.table>
        <x-slot name="head" model="$permissions">          
          <x-table.th field="name" :sortField="$sortField" :sortDirection="$sortDirection">Permiso</x-table.th>
          <th>Check</th>
        </x-slot>
        @forelse ($permissions as $key => $permission)
          <tr>
            <div class="form-group">
                <x-table.td>{{ $permission->name }}</x-table.td>
                @can('role update')
                <x-table.td class="text-center">
                    <div class="status-toggle">
                      <input type="checkbox" class="form-check-input"
                      {{$permission->check ? 'checked' : '' }}
                      wire:click="addPermisssionKey('{{$permission->name}}')"
                       class="check" id="status{{$key}}">
                       <label for="status{{$key}}" class="checktoggle"></label>
                    </div>
                </x-table.td>
                @endcan
            </div>                
          </tr>
        @empty
        <tr>
          <x-table.td colspan="7">
            <x-otros.error-search></x-otros.error-search>
          </x-table.td>              
        </tr>
        @endforelse
        @include('livewire.role.form')    
      </x-table.table>
      <x-slot name="pagination">
        {!! $permissions->links() !!}
      </x-slot>
    </x-otros.view-card>
  </div>
