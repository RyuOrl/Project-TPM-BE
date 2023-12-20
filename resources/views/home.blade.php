<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Project TPM - Ryu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">
                        </a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <br>
    
    <div class="image-home">
        {{-- <img src="../../public/img/House-ServerInfo.jpg" alt=""> --}}
        <p1 style="margin-left: 1%; font-size: 18px">Press this button if you want to add a task</p1>
        <br>
        <br>
        
        <a style="margin-left: 1%; height:40px;width:100px" href="/add" class="btn btn-secondary" >Add Task</a>
    </div>
    
<div style="overflow-x:auto;">
    <hr>
    <table class="table table-dark table-hover" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th scope="col" style="padding: 10px; text-align: center;">ID</th>
                <th scope="col" style="padding: 10px;text-align: center;">Task</th>
                <th scope="col" style="padding: 10px;text-align: center;">Due Date</th>
                <th scope="col" style="padding: 10px;text-align: center;">Subject</th>
                <th scope="col" style="padding: 10px;text-align: center;">Description</th>
                <th scope="col" style="padding: 10px;text-align: center;">Image</th>
                <th scope="col" style="padding: 10px;text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks_list as $task)
            <tr>
                <th scope="row" style="padding: 10px;text-align: center;">{{ $task->id }}</th>
                <td style="padding: 10px;text-align: center;">{{ $task->task }}</td>
                <td style="padding: 10px;text-align: center;">{{ $task->due }}</td>
                <td style="padding: 10px;text-align: center;">{{ $task->subject->subject }}</td>
                <td style="padding: 10px;text-align: center;">{{ $task->description }}</td>
                <td style="padding: 10px;text-align: center;">
                    <img src="{{asset('storage/' . $task->task_image_path)}}" alt="{{$task->task}}"
                        style="max-width: 250px; max-height: 250px">
                </td>
                <td style="padding: 10px;text-align: center;">
                    <a href="/update/{{$task->id}}" class="btn btn-warning">Update</a>
                    <a href="/delete/{{$task->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <p style="margin-left: 1%; color: red">No task yet.</p>
            </tr>
            @endforelse
        </tbody>
    </table>
    <hr>
</div>


   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>