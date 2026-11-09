<x-layouts.app :title="__('Users')">
    <x-slot:actions>
        <x-button :href="route('admin.users.create')" icon="ti-plus">{{ __('New user') }}</x-button>
    </x-slot:actions>

    <x-card>
        <x-table>
            <x-slot:head>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Role') }}</th>
                <th class="w-1"></th>
            </x-slot:head>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td class="text-secondary">{{ $user->email }}</td>
                    <td><x-role-badge :user="$user" /></td>
                    <td class="text-nowrap">
                        <x-button :href="route('admin.users.edit', $user)" variant="secondary" size="sm" outline>{{ __('Edit') }}</x-button>
                        @unless ($user->is_super_admin)
                            <x-delete-button :action="route('admin.users.destroy', $user)" :confirm="__('Delete this user?')" />
                        @endunless
                    </td>
                </tr>
            @empty
                <tr><td colspan="4"><x-empty /></td></tr>
            @endforelse
        </x-table>
        @if ($users->hasPages())
            <x-slot:footer>{{ $users->links() }}</x-slot:footer>
        @endif
    </x-card>
</x-layouts.app>
