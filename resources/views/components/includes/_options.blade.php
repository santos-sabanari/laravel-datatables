@if ($paginationEnabled || $searchEnabled)
    <div class="row mb-4">
        @if ($paginationEnabled && $perPageEnabled)
            <div class="col-4 col-md-6 form-inline">
                <select wire:model="perPage" class="form-control">
                    @if (is_array($perPageOptions))
                        @foreach ($perPageOptions as $option)
                            <option>{{ $option }}</option>
                        @endforeach
                    @else
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    @endif
                </select>
            </div>
        @endif

        @if ($searchEnabled)
            <div class="col-8 col-md-6">
                <input
                    @if (is_numeric($searchDebounce)) wire:model.debounce.{{ $searchDebounce }}ms="search"
                    @elseif($searchDebounce == false) wire:model.lazy="search"
                    @endif

                    @if ($disableSearchOnLoading) wire:loading.attr="disabled" @endif
                    class="form-control"
                    type="text"
                    placeholder="{{ $searchLabel }}"
                />
            </div>
        @endif
    </div>
@endif
