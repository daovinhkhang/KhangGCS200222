<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LEGOshop</title>
  </head>
  <body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>LEGOshop</h2>
                <div style="margin-right: 20%; float: right;">
                    <a href="{{url('add')}}" class="btn btn-outline-success">Add New</a>

                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}

                    </div>
                @endif
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Image1</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr>
                            <td>{{$row->productID}}</td>
                            <td>{{$row->productName}}</td>
                            <td>{{$row->productPrice}}</td>
                            <td><img src="images/products/{{$row->productImage1}}" alt="" height="90px" width="90px"></td>
                            <td>
                                <a href="{{url('edit/'. $row->productID)}}" class="btn btn-primary">Edit</a>
                                <a href="{{url('delete/'. $row->productID)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>    
  </body>
</html>