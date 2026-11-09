@props(['action', 'confirm' => null, 'label' => null])

<form action="{{ $action }}" method="post" class="d-inline" onsubmit="return confirm(@js($confirm ?? __('Are you sure?')))">
    @csrf
    @method('delete')
    <x-button type="submit" variant="danger" size="sm" outline>{{ $label ?? __('Delete') }}</x-button>
</form>
