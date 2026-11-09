<x-layouts.app :title="__('Users')">
    <x-slot:actions>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
            <i class="ti ti-plus me-1"></i> {{ __('New user') }}
        </a>
    </x-slot:actions>

    <x-card>
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('Role') }}</th>
                        <th class="w-1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td class="text-secondary">{{ $user->email }}</td>
                            <td><x-role-badge :user="$user" /></td>
                            <td class="text-nowrap">
                                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm">{{ __('Edit') }}</a>
                                @unless ($user->is_super_admin)
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="post" class="d-inline" onsubmit="return confirm(@js(__('Delete this user?')))">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">{{ __('Delete') }}</button>
                                    </form>
                                @endunless
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($users->hasPages())
            <x-slot:footer>{{ $users->links() }}</x-slot:footer>
        @endif
    </x-card>
</x-layouts.app>
