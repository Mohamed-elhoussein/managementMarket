@extends("dash.style.main")


@section("content")

<a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>


<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Table with contextual classes</h4>
        <p class="card-description"> Add class <code>.table-{color}</code>
        </p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> # </th>
              <th>  name </th>
              <th> Price </th>
              <th> sale </th>
              <th> count </th>
              <th> cateogry </th>
              <th> Images </th>
              <th> edite/delete </th>
            </tr>
          </thead>
          <tbody>
                @foreach ($products as  $key=>$product)

                <tr class="table-primary">
                <td> {{ ++$key }}</td>
                <td> {{ $product->name }} </td>
                <td> {{ $product->price }} </td>
                <td> {{ $product->sale }} </td>
                <td> {{ $product->count }} </td>
                <td> {{ $product->cateogry }} </td>
                <td>
                    @foreach ($product->images as $file )
                    <img src="{{ asset('storage/images/'.$file["file"]) }}" alt="">
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary">edite</a>

                    <form action="{{ route('product.destroy',$product->id) }}" method="post">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                 </td>
                </tr>
                @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
