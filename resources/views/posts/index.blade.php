<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 border-right">
                            <h4>Posts</h4>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <form class="p-4 shadow bg-white rounded">
                                    <h4 class="mb-3">بحث</h4>
                                    <div class="row text-left">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-0">
                                                <input type="text"  name="title" class=" form-control "/>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-0">
                                                <input type="text"  name="email" class=" form-control "/>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-0">
                                                <input type="text"  name="post" class=" form-control "/>
                                            </div>
                                        </div><!--end col-->

                                    </div>

                                </form>
                            </div><!--end col-->
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-hover ">
                                <thead class="bg-light ">
                                <tr>
                                    <th>No.</th>
                                    <th>Post Title</th>
                                    <th>No. Comments</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($res as $key=>$post)
                                    <td><small>{{$key+1}}</small></td>

                                    <td><a href="{{route('post.show',$post['id'])}}"><small>{{$post['title']}}</small></a></td>
                                    <td><a href="#"><small>{{$post['totalComments']}}</small></a></td>
                                    <td><a href="{{route('post.show',$post['id'])}}"><small>Show</small></a></td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
