<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Edit page</title>
</head>
<body style="background-color:steelblue">
<br>
<br>
<div class="row">
<div class="col md 3"></div>
<div class="col md 6">
                <form action="{{ route('update', $post->id) }}" method="POST">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                                <div class="mb-3">
                                    <label>Tittle</label>
                                    <input type="text" class="form-control" value="{{$post->post_tittle}}" name="post_tittle">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Content</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="post_content" rows="3" value ="{{$post->post_content}}">{{$post->post_content}}</textarea>
                                </div>
                                <label>Category</label>
                                <select class="form-control" value= "{{$post->post_category}}" name="post_category">
                                        <option value="">Choose...</option>
                                        <option value="football">Football</option>
                                        <option value="golf">Golf</option>
                                        <option value="pingpong">Ping Pong</option>
                                        <option value="racing">Racing</option>
                                </select>
                                <div class="mb-3">
                                        <label>Post Tag</label>
                                        <input type="text" class="form-control" value="{{$post->post_tags}}" name="post_tags">
                                </div>
                                <button type = "submit" class="btn btn-primary"> Post

                                </button>
                        </div>
                    </div>

                </form>
</div>
<div class="col md 3">
            <div class="mb-3">
                                <a href= "{{ route('read_all') }}" type="submit" class="btn btn-info"  > GO BACK

                                </a>
            </div>
</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>