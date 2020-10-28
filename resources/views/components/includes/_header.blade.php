@if ($tableHeaderEnabled)
    <thead class="{{ $tableHeaderClass }}">
        @include('laravel-datatables::components.includes._columns')
    </thead>
@endif
