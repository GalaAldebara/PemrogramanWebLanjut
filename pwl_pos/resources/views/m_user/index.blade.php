@extends('m_user/template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>CRUD User</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('m_user.create') }}" style="background-color: #0056b3; border-color: #0056b3;"> Input User</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th width="20%" class="text-center">User Id</th>
                <th width="20%" class="text-center">Level Id</th>
                <th width="20%" class="text-center">Username</th>
                <th width="20%" class="text-center">Nama</th>
                <th width="20%" class="text-center">Password</th>
                <th width="20%" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($useri as $m_user)
            <tr>
                <td class="text-center">{{ $m_user->user_id }}</td>
                <td class="text-center">{{ $m_user->level_id }}</td>
                <td>{{ $m_user->username }}</td>
                <td>{{ $m_user->nama }}</td>
                <td>{{ $m_user->password }}</td>
                <td class="text-center">
                    <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('m_user.show', $m_user->user_id) }}" style="background-color: #2c0eed; border-color: #fafafa;">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit', $m_user->user_id) }}" style="background-color: #0edeed; border-color: #fafafa;">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
