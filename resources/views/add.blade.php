<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" style = "fontsize: 10px" href="#">Project TPM - Ryu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
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
    <hr>

    <form action="{{route('task.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="mb-3">
            <label style="margin-left: 1%; font-weight:bold"exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="task_input" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @error('task_input')
                <div class="alert alert-danger">{{$message}}</div>
             @enderror
            </div>
             <div class="mb-3">
                <label style="margin-left: 1%; font-weight:bold"for="exampleInputPassword1" class="form-label">Due date</label>
                <input type="date" name="due_input" class="form-control" id="exampleInputPassword1">
                @error('due_input')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label style="margin-left: 1%; font-weight:bold"for="exampleInputPassword1" class="form-label">Subject</label>
                <select name="subject_input" id="exampleInputPassword1">
                    @forelse ($subject as $item)
                      <option value="{{$item->id}}">{{$item->subject}}</option>
                    @empty
                      <option value="">No item</option>
                    @endforelse
                  </select>
                @error('subject_input')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
        </div>
        <div class="mb-3">
            <label style="margin-left: 1%; font-weight:bold"for="exampleInputPassword1" class="form-label">Description</label>
            <input type="text"name="description_input" class="form-control" id="exampleInputPassword1">
            @error('description_input')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label style="margin-left: 1%; font-weight:bold"for="exampleInputPassword1" class="form-label">Image</label>
            <input type="file"name="task_image_input" class="form-control" id="exampleInputPassword1">
            @error('task_image_input')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        </div>
      
        
        <button style="margin-left: 1%"type="submit" class="btn btn-primary">Add</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>