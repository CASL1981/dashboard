@props([
    'field' => '',
    'sortField' => '{{$sortField}}',
    'sortDirection' => '{{$sortDirection}}',
    ])
    
<th wire:click="sortBy('{{$field}}')" style="cursor: pointer;" {{ $attributes->merge(['class' => 'p-2']) }} >
    {{$slot}}
    {{-- @if ($sortField == $field && $sortDirection == 'asc')
        <i class="fas fa-sort-up float-right"></i>                
    @elseif ($sortField == $field && $sortDirection == 'desc')
        <i class="fas fa-sort-down float-right"></i>
    @else
        <i class="fas fa-sort float-right"></i>
    @endif --}}
</th>