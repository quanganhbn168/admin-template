{{-- Person card: large avatar (photo or initials), name, role, optional star, action buttons (slot). --}}
@props(['name', 'role' => null, 'src' => null, 'starred' => false, 'gradient' => 'yellow'])

<x-card :gradient="$gradient" {{ $attributes }}>
    @if ($starred)<div class="position-absolute top-0 end-0 p-3 text-yellow"><i class="ti ti-star fs-2"></i></div>@endif
    <div class="card-body p-4 text-center">
        <x-avatar :name="$name" :src="$src" size="xl" class="mb-3 rounded-circle" />
        <h3 class="m-0 mb-1">{{ $name }}</h3>
        @if ($role)<div class="text-secondary">{{ $role }}</div>@endif
        @if (! $slot->isEmpty())<div class="btn-list btn-list-center mt-3">{{ $slot }}</div>@endif
    </div>
</x-card>
