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
            <form action="">
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
                            <button type="button" onclick="location.href='{{ url('/createuser') }}'">Add</button>
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
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td><a href="">user1</a></td>
                            <td>user1@gmail.com</td>
                            <td>user1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>2/9/2019</td>
                            <td>1/10/2019</td>
                            <td><button>Delete</button></td>
                        </tr>
                    </table>
                </div>
                <div class="row fouth">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">4</a></li>
                          <li class="page-item"><a class="page-link" href="#">5</a></li>
                          <li class="page-item"><a class="page-link" href="#">6</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                    </nav>
                </div>
            </form>
        </div>
    </div>
@endsection
