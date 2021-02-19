<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                <div class="panel-body">
                    <form action="{{ route('import')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="">Upload Excel File</label>
                        <input type="file" class="form-control" name="file" accept=".cvs">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save File">
                            <a href="{{ route('export')}}" class="btn btn-warning">Export</a>
                        </div>
                    </form>
                    @yield('csv_data')
                </div>
            </div>
        </div>
    </div>
</body>
</html>