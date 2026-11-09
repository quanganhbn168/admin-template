{{-- Slot = <tbody> rows. Pass <x-slot:head> with <th> cells. Use inside <x-card>. --}}
@props(['head' => null])

<div class="table-responsive">
    <table {{ $attributes->class(['table', 'table-vcenter', 'card-table']) }}>
        @if ($head)<thead><tr>{{ $head }}</tr></thead>@endif
        <tbody>{{ $slot }}</tbody>
    </table>
</div>
