
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Edit Order Data</h4>
      <p class="mg-b-0">You can only edit payment and delivery status</p>
    </div>
</div>

      <div class="br-pagebody">
        <div class="row">
          <div class="offset-2 col-md-7">
            <form action="{{ Route('orderupdate',$orderedit->id) }}" method="post">
              @csrf
            <div class="form-group">
              <label for="name">User Id</label> 
              <input type="text" name="userId" id="userId" placeholder="Enter Product Name" class="form-control" value="{{ $orderedit->userId }}"readonly>
             </div>

             <div class="form-group">
              <label for="name">Total Payable</label> 
              <input type="text" name="totalPayable" id="totalPayable" placeholder="Enter Product Name" class="form-control" value="{{ $orderedit->totalPayable }}"readonly>
             </div>

             <div class="form-group">
              <label for="paymentstatus">Payment Status</label>
              <select name="payStatus" id="payStatus" class="form-control">
                <option value="">-----Select Payment Status-----</option>
                <option value="1" @if ($orderedit->payStatus == '1') selected @endif>Cash on</option>
                <option value="2" @if ($orderedit->payStatus == '2') selected @endif>Online Payment</option>
                <option value="3" @if ($orderedit->payStatus == '3') selected @endif>Paid</option>
              </select>
             </div>

             <div class="form-group">
              <label for="status">Delivery Status</label>
              <select name="status" id="status" class="form-control">
                <option value="">-----Select Delivery Status-----</option>
                <option value="1" @if ($orderedit->status == 1) selected  @endif>Pending</option>
                <option value="2" @if ($orderedit->status == 2) selected  @endif>Delivered</option>
              </select>
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Update Order Status</button>
             </div>

            </form>
          	
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection