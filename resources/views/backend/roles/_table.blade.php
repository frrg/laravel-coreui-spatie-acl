<table class="table table-hover table-responsive-sm table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Roles</th>
            <th>Dibuat</th>
            <th class="text-right">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($roles as $role)
        <tr>
            <td>{{ $loop->iteration + $roles->firstItem() - 1 }}</td>
            <td>
                <p>{{ $role->name }}</p>
            </td>

            <td>
                <p>{{ tanggalWaktu($role->created_at) }}</p>
            </td>
            <td class="text-center">

                <a href="{{ route('roles.show',$role->id) }}" class="btn btn-outline-info btn-sm m-1">Show</a>

                <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-outline-warning btn-sm m-1">Edit</a>
                <button @click='hapus(@json(route("roles.destroy",$role->id)))' class="btn btn-outline-danger btn-sm m-1">Delete</button>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">Roles tidak ada</td>
        </tr>
        @endforelse
    </tbody>
</table>