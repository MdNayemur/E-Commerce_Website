@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Pending Orders</h4>
      <p class="mg-b-0">All the pending orders are here</p>
    </div>
</div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#Sl</th>
                        <th>Order Id</th>
                        <th>User Id</th>
                        <th>total Payable</th>
                        <th>Pay Status</th>
                        <th>Delivery Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @php $sl=1 @endphp
                @foreach ($odr as $data)
                @if($data->status==1)
                <tr>
                <td>{{ $sl }}</td>
                <td>{{ $data->id}}</td>
                <td>{{ $data->userId }}</td>
                <td>{{ $data->totalPayable }}</td>
                <td>
                @if ($data->payStatus==1)
                <span class="badge badge-danger">Cash On</span>
                @elseif($data->payStatus==2)
                <span class="badge badge-danger">Online Payment</span>
                @else
                <span class="badge badge-success">paid</span>

                @endif
                </td>
                <td>
                @if ($data->status==1)
                <span class="badge badge-warning">Pending</span>
                @endif
                </td>
                <td>
                <a href="{{ Route('orderedit', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                </td>
                </tr>
                @php $sl++ @endphp
                @endif
                @endforeach
                </tbody>

            </table>
          	
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection