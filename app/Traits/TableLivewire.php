<?php

namespace App\Traits;


trait TableLivewire
{

    public $sortField = 'id', $sortDirection = 'desc'; //variables de ordenamiento
    public $selectedModel = [];
    public $selectedModelRadio = 0;
    public $selectAll = false;
    public $bulkDisabled = true;
    public $selected_id;
    public $keyWord;    
    
    protected $paginationTheme = 'bootstrap';
    
    public function sortBy($field)
    {        
        $this->sortDirection = $this->sortField === $field
        ? $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc'
        : 'asc';
        
        $this->sortField = $field;
    }
    
    
    public function updatingKeyWord()
    {
        $this->resetPage();
    }
    
    function method()
    {
        return $this->selected_id ? $this->update() : $this->store();
    }
    
    public function cancel()
    {
        $this->resetInput();
    }
    
    private function resetInput()
    {		
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
    }

}