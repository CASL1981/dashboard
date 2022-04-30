<?php

namespace Modules\Basics\Http\Livewire;

use App\Traits\TableLivewire;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Basics\Entities\Destination;

class Destinations extends Component
{
    use WithPagination;
    use TableLivewire;

    public $costcenter, $name, $address, $phone, $location, $minimun, $maximun;

    protected function rules() 
    {
        return [
            'costcenter' => 'required', 
            'name' => 'required|min:3|max:100',
            'address' => 'nullable', 
            'phone' => 'nullable',
            'location' => 'nullable', 
            'minimun' => 'nullable|numeric',
            'maximun' => 'nullable|numeric'
        ];
    }
    
    public function render()
    {
        $this->bulkDisabled = count($this->selectedModel) < 1;

        $destinations = Destination::search('name', $this->keyWord)
        ->search('costcenter', $this->keyWord)
        ->search('address', $this->keyWord)
        ->orderBy($this->sortField, $this->sortDirection)
        ->paginate(10);

        return view('basics::livewire.destination.view', compact('destinations'));
    }

    public function store()
    {        
        $validate = $this->validate();    	
        
        Destination::create($validate);        
        
        $this->resetInput();        
    	$this->emit('alert', ['type' => 'success', 'message' => 'Destination creado']);
        
    }

    public function edit()
    {        
        $record = Destination::findOrFail($this->selected_id);
            	
        $this->costcenter = $record->costcenter;
        $this->name = $record->name;
        $this->address = $record->address;
        $this->phone = $record->phone;
        $this->location = $record->location;
        $this->minimun = $record->minimun;
        $this->maximun = $record->maximun;

        $this->show = true;
    }

    public function update()
    {
        $validate = $this->validate();

        if ($this->selected_id) {
    		$record = Destination::find($this->selected_id);
            $record->update($validate);

            $this->resetInput();            
    		$this->emit('alert', ['type' => 'success', 'message' => 'Destination actualizado']);
        }
    }   

    public function updatedSelectAll($value)
    {
        $value ? $this->selectedModel = Destination::pluck('id') : $this->selectedModel = [];
    }
}
