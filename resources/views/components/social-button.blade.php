{{-- provider: facebook | github | google | instagram | linkedin | pinterest | twitter | x | youtube --}}
@props(['provider', 'href' => '#', 'label' => null])

<a href="{{ $href }}" {{ $attributes->class(['btn', "btn-{$provider}"]) }}>
    <i class="ti ti-brand-{{ $provider }} me-1"></i>{{ $label ?? __('Sign in with :provider', ['provider' => ucfirst($provider)]) }}
</a>
