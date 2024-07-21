@extends("dash.style.main")

@section("content")
<a href="{{ route('user.create') }}" class="btn btn-primary">Add User</a>

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
              <th> Email </th>
              <th> gender </th>
              <th> edite/delete </th>
            </tr>
          </thead>
          <tbody>
                @foreach ($admins as  $key=>$admin)

                <tr class="table-primary">
                <td> {{ ++$key }}</td>
                <td> {{ $admin->name }} </td>
                <td> {{ $admin->email }} </td>
                <td> {{ $admin->gender==1?"male":"female" }} </td>
                <td>
                    <a href="{{ route('user.edit',$admin->id) }}" class="btn btn-primary">edite</a>

                    <form action="{{ route('user.destroy',$admin->id) }}" method="post">
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

