<div class="card">    
    <div class="card-body">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <h4 class="card-title">{{ $title }}</h4>
        </div>
        <div class="col-md-4">
          <label class="w-100">
            <input wire:model='keyWord' type="search" class="form-control p-2" placeholder="Buscar">
          </label>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="btn-group float-right" role="group" aria-label="Basic example">
            {{ $button }}
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                <h6 class="dropdown-header">Exportable</h6>
                <a class="dropdown-item" href="#" wire:click="export('xlsx')" wire:loading.attr="disable">Excel</a>
                <a class="dropdown-item" href="#" wire:click="export('csv')" wire:loading.attr="disable">CSV</a>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        {{ $slot }}
      </div>
      <div class="row">
        {{ $pagination }}
      </div>
    </div>
</div>