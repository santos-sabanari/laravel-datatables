@if ($tableFooterEnabled)
    <tfoot class="{{ $tableFooterClass }}">
        @include('laravel-datatables::components.includes._columns')
    </tfoot>
@endif
