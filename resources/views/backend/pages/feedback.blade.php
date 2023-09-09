
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Feedback</h4>
      <p class="mg-b-0">All the user feedbacks are here</p>
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
                  <th>Order Id</th>
                  <th>User Feedback</th>
                </tr>
              </thead>
              <tbody>
              @php $sl=1 @endphp
                @foreach ($feed as $data)
                <tr>
                  <td>{{ $sl }}</td>
                  <td>{{ $data->userName }}</td>
                  <td>{{ $data->userEmail }}</td>
                  <td>{{ $data->orderId }}</td>
                  <td>{{ $data->userFeedback }}</td>
                </tr>
                @php $sl++ @endphp
                @endforeach
              </tbody>

            </table>
          	
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection