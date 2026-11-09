@extends('layouts.app')

@section('title', 'Users')

@section('actions')
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
        <i class="ti ti-plus me-1"></i> New user
    </a>
@endsection

@section('content')
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="w-1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td class="text-secondary">{{ $user->email }}</td>
                        <td>
                            @if ($user->is_super_admin)
                                <span class="badge bg-red-lt">Super admin</span>
                            @else
                                <span class="badge bg-blue-lt">Admin</span>
                            @endif
                        </td>
                        <td class="text-nowrap">
                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm">Edit</a>
                            @unless ($user->is_super_admin)
                                <form action="{{ route('admin.users.destroy', $user) }}" method="post" class="d-inline" onsubmit="return confirm('Delete this user?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            @endunless
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if ($users->hasPages())
        <div class="card-footer">{{ $users->links() }}</div>
    @endif
</div>
@endsection
