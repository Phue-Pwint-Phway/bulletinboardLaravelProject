@extends('layout')
@section('content')
    <div class="container">
        {{-- common-header --}}
        <div class="header-container">
            <form action="/common" method="GET">
                <ul>
                    <li>
                        <h2>SCM Bulletin Board</h2>
                    </li>
                    <li>
                        <a type="action" href="{{ url('/userlist') }}">Users</a>
                    </li>
                    <li>
                        <a type="action" href="{{ url('/createuser') }}">User</a>
                    </li>
                    <li>
                        <a type="action" href="{{ url('/postlist') }}">Posts</a>
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
            <form action="/postlist" method="GET">
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
                            <button type="button" onclick="location.href='{{ ('/createpost') }}'">Add</button>
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
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <tr>
                            <td><a href="">Title 1</a></td>
                            <td>Description 1</td>
                            <td>User 1</td>
                            <td>5/10/2019</td>
                            <td><button>Edit</button></td>
                            <td><button>Delete</button></td>
                        </tr>
                        <tr>
                            <td><a href="">Title2</a></td>
                            <td>Description 2</td>
                            <td>User 1</td>
                            <td>5/4/2019</td>
                            <td><button>Edit</button></td>
                            <td><button>Delete</button></td>
                        <tr>
                            <td><a href="">Title 3</a></td>
                            <td>Description 3</td>
                            <td>User 1</td>
                            <td>4/10/2019</td>
                            <td><button>Edit</button></td>
                            <td><button>Delete</button></td>
                        </tr>
                        <tr>
                            <td><a href="">Title 4</a></td>
                            <td>Description 4</td>
                            <td>User 2</td>
                            <td>5/11/2019</td>
                            <td><button>Edit</button></td>
                            <td><button>Delete</button></td>
                        </tr>
                        <tr>
                            <td><a href="">Title 5</a></td>
                            <td>Description 5</td>
                            <td>User 2</td>
                            <td>9/10/2019</td>
                            <td><button>Edit</button></td>
                            <td><button>Delete</button></td>
                        </tr>
                        <tr>
                            <td><a href="">Title 6</a></td>
                            <td>Description 6</td>
                            <td>User 3</td>
                            <td>11/12/2019</td>
                            <td><button>Edit</button></td>
                            <td><button>Delete</button></td>
                        </tr>
                    </table>
                </div>
                <div class="row4">
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
