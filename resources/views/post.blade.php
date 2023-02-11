<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Post Page</title>
</head>
<body style="background-color:whitesmoke">
    <div class="container">
            <nav class="navbar navbar-light bg-secondary">
                        <br>
                        <br>
            </nav>

        <div class="row">

<div class="col md 8">
                <br>
            <h1 style="text-align:center; color:gray; font-size:Bold; font-family:Arial, Helvetica, sans-serif;">WELCOME TO POSTS</h1>
            <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">post_tittles</th>
                            <th scope="col">post_contents</th>
                            <th scope="col">post_categories</th>
                            <th scope="col">post_tags</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $key => $post)
                            <tr>
                                <th scope="row">{{$posts->firstitem() + $loop->index }}</th>
                                <th scope="row"><a>{{ $post->post_tittle }}</a></th>
                                <th scope="row">{{ $post->post_content}}</th>
                                <th scope="row">{{ $post->category_id}}</th>
                                <th scope="row">{{ $post->post_tags }}</th>
                                <th>
                                <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="{{ route('edit', $post->id) }}">Edit</a></li>
                                            <li><a class="dropdown-item" href="{{ route('trash', $post->id) }}">Trash</a></li>
                                        </ul>
                                </div>
                                </th> 
                            </tr>
                            @endforeach
                        </tbody>
                        
                </table>
                <!-- {{$posts->links('pagination::bootstrap-4')}} -->
                {{$posts->links()}}       

                <br>
            <h1 style="text-align:center; color:gray; font-size:Bold; font-family:Arial, Helvetica, sans-serif;">TRASH</h1>
            <table class="table table-secondary">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">post_tittles</th>
                            <th scope="col">post_contents</th>
                            <th scope="col">post_categories</th>
                            <th scope="col">post_tags</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trashs as $key => $post)
                            <tr>
                                <th scope="row">{{ $trashs ->firstitem() + $loop->index }}</th>
                                <th scope="row"><a>{{ $post->post_tittle }}</a></th>
                                <th scope="row">{{ $post->post_content}}</th>
                                <th scope="row">{{ $post->category_id }}</th>
                                <th scope="row">{{ $post->post_tags }}</th>
                                <th>
                                <div class="dropdown">
                                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="{{ route('restore', $post->id) }}">Restore</a></li>
                                            <li><a class="dropdown-item" href="{{ route('delete', $post->id) }}">Permanent Delete</a></li>
                                        </ul>
                                </div>
                                </th> 
                            </tr>
                            @endforeach
                        </tbody>
                        
                </table>
                <!-- {{$posts->links('pagination::bootstrap-4')}} -->
                {{$trashs ->links()}}
                        
        </div>

            <div class="col md 4">
                <form action="{{ route('store') }}" method="POST">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                                <div class="mb-3">
                                    <label>Tittle</label>
                                    <input type="text" class="form-control" name="post_tittle" placeholder="Tittle">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Content</label>
                                    <textarea class="form-control" 
                                        id="exampleFormControlTextarea1" name="post_content" rows="3"></textarea>
                                </div>
                                <label>Category</label>
                                <select class="form-control" name="category_id">
                                    <option value="">Choose...</option>

                                    @foreach($post_categorys as $item)
                                        <option value="{{$item->id}}">{{ $item->post_category }}</option>
                                     @endforeach
                                </select>
                                <div class="mb-3">
                                        <label>Post Tag</label>
                                        <input type="text" class="form-control" name="post_tags" placeholder="Post tag">
                                </div>
                                <button type= "submit" class="btn btn-primary"> Post

                                </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>