<x-layouts.app :title="__('Users')">
    <x-slot:actions>
        <x-button :href="route('admin.users.create')" icon="ti-plus">{{ __('New user') }}</x-button>
    </x-slot:actions>

    <x-card>
        <x-table.toolbar :state="$table" :placeholder="__('Search name or email...')" />

        <x-table>
            <x-slot:head>
                <x-table.th column="name" :state="$table">{{ __('Name') }}</x-table.th>
                <x-table.th column="email" :state="$table">{{ __('Email') }}</x-table.th>
                <x-table.th column="is_super_admin" :state="$table">{{ __('Role') }}</x-table.th>
                <x-table.th column="created_at" :state="$table">{{ __('Created') }}</x-table.th>
                <th class="w-1"></th>
            </x-slot:head>
            @forelse ($users as $user)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <x-avatar :name="$user->name" size="sm" class="me-2" />{{ $user->name }}
                        </div>
                    </td>
                    <td class="text-secondary">{{ $user->email }}</td>
                    <td><x-role-badge :user="$user" /></td>
                    <td class="text-secondary">{{ $user->created_at?->format('d/m/Y') }}</td>
                    <td class="text-nowrap">
                        <x-button :href="route('admin.users.edit', $user)" variant="secondary" size="sm" outline>{{ __('Edit') }}</x-button>
                        @unless ($user->is_super_admin)
                            <x-delete-button :action="route('admin.users.destroy', $user)" :confirm="__('Delete this user?')" />
                        @endunless
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        <x-empty :text="$table['search'] !== '' ? __('No results for ":term".', ['term' => $table['search']]) : null" />
                    </td>
                </tr>
            @endforelse
        </x-table>

        <x-table.footer :paginator="$users" />
    </x-card>
</x-layouts.app>
