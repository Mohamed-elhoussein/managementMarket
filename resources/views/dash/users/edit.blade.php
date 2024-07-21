
@extends("dash.style.main")


@section("content")

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        <form id="my-form" class="forms-sample" method="post" action="{{ route('user.update',$admin->id) }}">
            @csrf
            @method('PUT')
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" value="{{ $admin->name }}" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="text" value="{{ $admin->email }}" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>



          <div class="form-group">
            <label for="exampleSelectGender">Gender</label>
            <select name="gender" class="form-control" id="exampleSelectGender">
              <option @selected($admin->gender==1) value="1">Male</option>
              <option @selected($admin->gender==0) value="0">Female</option>
            </select>
          </div>
          @foreach (config('permissions.per_user') as $key=>$val )
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="permission[]"

              @foreach ($admin->permission as  $per_admin)
                    @checked($val==$per_admin)
              @endforeach value="{{ $val }}" class="form-check-input">
              
              {{ $key }} <i class="input-helper">
                </i></label>
          </div>

          @endforeach

          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>


@endsection


@section("script")
{!! JsValidator::formRequest('App\Http\Requests\UserRequest', '#my-form'); !!}

@endsection
