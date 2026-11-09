@props(['name' => '', 'src' => null, 'size' => null, 'color' => null])

<span {{ $attributes->class(['avatar', $size ? "avatar-{$size}" : null, $color ? "bg-{$color}-lt" : null]) }}
    @if ($src) style="background-image: url({{ $src }})" @endif>
    @unless ($src){{ str($name)->substr(0, 2)->upper() }}@endunless
</span>
