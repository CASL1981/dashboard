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