<div class="col-12">
    <div class="table-responsive">
        <table id="users-list" class="table">
        <thead>
            <tr>
                {{-- enbaezado --}}
                {{ $head }}
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
        </table>
    </div>
    
</div>