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
        @foreach($roles as $role)
        <tr>
            <td>{{ $loop->iteration + $roles->firstItem() - 1 }}</td>
            <td>
                <p>{{ $role->name }}</p>
            </td>

            <td>
                <p>{{ tanggalWaktu($role->created_at) }}</p>
            </td>
            <td class="text-right">
                <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                <button @click='hapus(@json(route("roles.destroy",$role->id)))' class="btn btn-outline-danger btn-sm">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>