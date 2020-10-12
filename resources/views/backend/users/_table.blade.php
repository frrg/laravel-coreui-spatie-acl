<table class="table table-responsive-sm table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $key => $user)
        <tr>
            <td>{{ $loop->iteration + $users->firstItem() - 1 }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                <label class="badge badge-success">{{ $v }}</label>
                @endforeach
                @endif
            </td>
            <td class="text-center">

                <a href="{{ route('users.show',$user->id) }}" class="btn btn-outline-info btn-sm m-1">Show</a>

                <a href="{{ route('users.edit',$user->id) }}" class="btn btn-outline-warning btn-sm m-1">Edit</a>
                <button @click='hapus(@json(route("users.destroy",$user->id)))' class="btn btn-outline-danger btn-sm m-1">Delete</button>
            </td>
        </tr>
        @empty

        <tr>
            <td colspan="4" class="text-center">User tidak ada</td>
        </tr>
        @endforelse
    </tbody>
</table>
{{ $users->links() }}