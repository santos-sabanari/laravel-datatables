@if (is_numeric($refresh))
    <div class="{{ $wrapperClass }}" wire:poll.{{ $refresh }}.ms>
@elseif (is_string($refresh))
    <div class="{{ $wrapperClass }}" wire:poll="{{ $refresh }}">
@else
    <div class="{{ $wrapperClass }}">
@endif
    @include('laravel-datatables::components.includes._offline')
    @include('laravel-datatables::components.includes._options')
    @include('laravel-datatables::components.includes._loading')

    @if (is_string($responsive))
        <div class="{{ $responsive }}">
    @endif

        <table class="{{ $tableClass }}">
            @include('laravel-datatables::components.includes._header')

            @include('laravel-datatables::components.includes._body')
            @include('laravel-datatables::components.includes._footer')
        </table>

    @if (is_string($responsive))
        </div>
    @endif

    @include('laravel-datatables::components.includes._pagination')
</div>
