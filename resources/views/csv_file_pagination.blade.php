@extends('csv_file')



@section('csv_data')
    <table class="table table-bordered table-striped">
        <tr>
            <thead>
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
            </thead>
            <tbody>
                @foreach ($data as $row)
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
        </tr>
    </table>
@endsection