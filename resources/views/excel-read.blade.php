<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excel Read Files</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <h1 class="bg-success text-center m-3 p-3 text-white">Excel File</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="{{'upload-data'}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Upload Excel File</label>
                        <input type="file" class="form-control" name="excelFile">
                        {{$errors->first('excelFile')}}
                        @csrf
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Save File">
                    </div>
                </form>
            </div>
        </div>
        @if (isset($results))
        <div class="row">
            <div class="col-sm-12">
                <table class="table tavle-bordered border">
                    <thead>
                        <tr>
                            <th>Product Code</th>
                            <th>Sku</th>
                            <th>Category</th>
                            <th>Tag</th>
                            <th>Product Title</th>
                            <th>Short Descriptin</th>
                            <th>Descriptin</th>
                            <th>Price</th>
                            <th>Sale Price</th>
                            <th>Stock</th>
                            <th>Madhesia</th>
                            <th>Ngjyra</th>
                            <th>Brand</th>
                            <th>Madhesia</th>
                            <th>Ngjyra</th>
                            <th>Descriptin</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($results as $row)
                            <tr>
                                <td>{{$row->product_code}}</td>
                                <td>{{$row->sku}}</td>
                                <td>{{$row->category}}</td>
                                <td>{{$row->tag}}</td>
                                <td>{{$row->product_title}}</td>
                                <td>{{$row->short_description}}</td>
                                <td>{{$row->description}}</td>
                                <td>{{$row->price}}</td>
                                <td>{{$row->sale_price}}</td>
                                <td>{{$row->stock}}</td>
                                <td>{{$row->madhesia}}</td>
                                <td>{{$row->ngjyra}}</td>
                                <td>{{$row->brand}}</td>
                                <td>{{$row->madhesia}}</td>
                                <td>{{$row->ngjyra}}</td>
                                <td>{{$row->description}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
    @endif
    </div>

    

</body>
</html>