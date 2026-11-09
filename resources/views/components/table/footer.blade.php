{{-- "Showing 1-15 of 40" + page links for a paginator. --}}
@props(['paginator'])

<div class="d-flex flex-wrap align-items-center gap-2 p-3 border-top">
    <p class="m-0 text-secondary">
        @if ($paginator->total() > 0)
            {{ __('Showing :from to :to of :total entries', ['from' => $paginator->firstItem(), 'to' => $paginator->lastItem(), 'total' => $paginator->total()]) }}
        @else
            {{ __('No entries') }}
        @endif
    </p>
    @if ($paginator->hasPages())
        {{-- the bootstrap-4 view prints only the page buttons (our own text is on the left) --}}
        <div class="ms-auto">{{ $paginator->onEachSide(1)->links('pagination::bootstrap-4') }}</div>
    @endif
</div>
