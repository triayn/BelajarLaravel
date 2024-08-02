<div>
    <a href="{{ route('users.create') }}" class="btn btn-md btn-success mb-3">TAMBAH USER</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">Nama</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="" class="btn btn-sm btn-primary">EDIT</a>
                    <button wire:click="destroy({{ $user->id }})" class="btn btn-sm btn-danger">HAPUS</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>