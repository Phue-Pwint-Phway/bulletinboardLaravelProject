@extends('layout')
@section('content')
    <div class="container">
        {{-- common-header --}}
        <div class="header-container">
            <form action="/common" method="POST">
                <ul>
                    <li>
                        <h2>SCM Bulletin Board</h2>
                    </li>
                    <li>
                        <a type="action" href="{{ url('/users') }}">Users</a>
                    </li>
                    <li>
                        <a type="action" href="{{ route('users.create') }}">User</a>
                    </li>
                    <li>
                        <a type="action" href="{{ route('posts.index') }}">Posts</a>
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
        {{-- post-list --}}
        <div class="postlist-container">
            <form action="{{ route('posts.index') }}" method="POST">
                <div class="row1">
                    <h3>Post List</h3>
                </div>
                <div class="row2">
                    <ul>
                        <li>
                            <input type="text" placeholder="search all">
                        </li>
                        <li>
                            <button>Search</button>
                        </li>
                        <li>
                            <button type="button" onclick="location.href='{{ route('posts.create') }}'">Add</button>
                        </li>
                        <li>
                            <button type="button" onclick="location.href='{{ ('/uploadCSV') }}'">Upload</button>
                        </li>
                        <li>
                            <button>Download</button>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <div class="row3">
                    <table>
                        <tr>
                            <th>Post Title</th>
                            <th>Post Description</th>
                            <th>Posted Use</th>
                            <th>Posted Date</th>
                            <th colspan="2">Action</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td><a href="{{ route('posts.show',$post->title) }}">{{ $post->title }}</a></td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->id }}</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
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
                <div class="row4">
                    {!! $posts->links() !!}
                </div>
            </form>
        </div>
    </div>
@endsection
