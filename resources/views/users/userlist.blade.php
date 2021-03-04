@extends('layout')
@section('content')
    <div class="container">
        {{-- common-header  --}}
        <div class="header-container">
            <form action="">
                <ul>
                    <li>
                        <h2>SCM Bulletin Board</h2>
                    </li>
                    <li>
                        <a type="action" href="{{ ('/userlist') }}">Users</a>
                    </li>
                    <li>
                        <a type="action" href="{{ ('/createuser') }}">User</a>
                    </li>
                    <li>
                        <a type="action" href="{{ ('/postlist') }}">Posts</a>
                    </li>
                    <li>
                        <label class="loginuser"  for="loginUser">Loginuser Name</label>
                    </li>
                    <li>
                        <a href="">Logout</a>
                    </li>
                </ul>
            </form>
        </div>
        {{-- user-list --}}
        <div class="userlist-container">
            <form action="{{ route('users.index') }}" method="POST">
                <div class="row first">
                    <h3>User List</h3>
                </div>
                <div class="row second">
                    <ul>
                        <li>
                            <input type="text" name="name" id="" placeholder="search name">
                        </li>
                        <li>
                            <input type="text" name="email" id="" placeholder="search email">
                        </li>
                        <li>
                            <input type="text" name="created-from" id="" placeholder="create-from Date">
                        </li>
                        <li>
                            <input type="text" name="created-to" id="" placeholder="create-to Date">
                        </li>
                        <li>
                            <button>Search</button>
                        </li>
                        <li>
                            <button type="button" onclick="location.href='{{ route('users.create') }}'">Add</button>
                        </li>
                    </ul>
                </div>
                <div class="row third">
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created Use</th>
                            <th>Phone</th>
                            <th>Birth Date</th>
                            <th>Address</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            <th colspan="2">Action</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td><a href="">{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->bod }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    {{-- <a class="btn btn-info" href="{{ route('blogs.show',$blog->title) }}">Show</a> --}}
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="row fouth">
                    {!! $users->links() !!}
                </div>
            </form>
        </div>
    </div>
@endsection
