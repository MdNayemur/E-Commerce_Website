
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>User Data</h4>
      <p class="mg-b-0">All users data are here</p>
    </div>
</div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12">
          <table class="table">
              <thead>
                <tr>
                  <th>#Sl</th>
                  <th>User Name</th>
                  <th>User Email</th>
                  <th>Role</th>
                </tr>
              </thead>
              <tbody>
              @php $sl=1 @endphp
                @foreach ($user as $data)
                <tr>
                  <td>{{ $sl }}</td>
                  <td>{{ $data->fname }}</td>
                  <td>{{ $data->email }}</td>
                  <td>
                @if ($data->role==1)
                <span class="badge badge-primary">Admin</span>
                @else
                <span class="badge badge-secondary">User</span>
                @endif
                </td>
                </tr>
                @php $sl++ @endphp
                @endforeach

              </tbody>

            </table>
          	
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection