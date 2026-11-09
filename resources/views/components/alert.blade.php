@props(['type' => 'info', 'title' => null, 'dismissible' => false])

<div {{ $attributes->class(['alert', "alert-{$type}", 'alert-dismissible' => $dismissible]) }} role="alert">
    @if ($title)<h4 class="alert-heading">{{ $title }}</h4>@endif
    {{ $slot }}
    @if ($dismissible)<a class="btn-close" data-bs-dismiss="alert" aria-label="{{ __('Close') }}"></a>@endif
</div>
