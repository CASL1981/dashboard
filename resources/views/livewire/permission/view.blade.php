<div>
  <x-otros.view-card>
    <x-slot name="title">Permisos</x-slot>
    <x-slot name="button">
      <div class="btn-group float-right" role="group" aria-label="Basic example"></div>
    </x-slot>
    <div class="col-12">
      <div class="table-responsive tableFixHead">
        <table id="users-list" class="table">
          <thead>
            <x-table.th field="name" :sortField="$sortField" :sortDirection="$sortDirection">Permiso</x-table.th>
            <th>Check</th>
          </thead>
          <tbody>
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
          </tbody>
        </table>

        {{-- <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th class="text-center">Create</th>
                    <th class="text-center">read</th>
                    <th class="text-center">Update</th>
                    <th class="text-center">Delete</th>
                    <th class="text-center">Toggle</th>
                </tr>
            </thead>
            <tbody>
              @forelse ($permissions as $key => $permission)
                <tr>
                  <td class="">{{ $permission->name }}</td>
                  <div class="form-group">
                      @can('role update')
                      <x-table.td class="text-center">
                          <div class="status-toggle">
                            <input type="checkbox" class="form-check-input"
                            {{$permission->check ? 'checked' : '' }}
                            wire:click="addPermisssionKey('{{$permission->name . ' create'}}')"
                            class="check" id="status{{$key}}">
                            <label for="status{{$key}}" class="checktoggle"></label>
                          </div>
                      </x-table.td>
                      @endcan
                  </div>
                    <td class="text-center"> aqi
                      <div class="form-group">
                          @can('role update')
                          <x-table.td class="text-center">
                              <div class="status-toggle">
                                <input type="checkbox" class="form-check-input"
                                {{$permission->check ? 'checked' : '' }}
                                wire:click="addPermisssionKey('{{$permission->name . ' create'}}')"
                                class="check" id="status{{$key}}">
                                <label for="status{{$key}}" class="checktoggle"></label>
                              </div>
                          </x-table.td>
                          @endcan
                      </div>
                    </td>
                    <td class="text-center">
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td class="text-center">
                        <input class="form-check-input" type="checkbox">
                    </td>
                </tr>
              @empty
              <tr>
                <x-table.td colspan="7">
                  <x-otros.error-search></x-otros.error-search>
                </x-table.td>
              </tr>
              @endforelse
            </tbody>
        </table> --}}
      </div>
    </div>
    <x-slot name="pagination">
      {!! $permissions->links() !!}
    </x-slot>
  </x-otros.view-card>
</div>
