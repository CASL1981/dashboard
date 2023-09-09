<x-app-layout title="Roles">
    <div class="row grid-margin">
        <div class="col-md-4">            
            @livewire('roles')
        </div>
        {{-- <div class="col-md-8 offset-md-1"> --}}
        <div class="col-md-8">
            @livewire('permissions')
        </div>
    </div>
</x-app-layout>