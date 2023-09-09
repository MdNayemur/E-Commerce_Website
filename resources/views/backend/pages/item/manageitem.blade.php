
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Manage Items </h4>
      <p class="mg-b-0">Manage your items here</p>
    </div>
</div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12">
          	 <table class="table">
              <thead>
                <tr>
                  <th>#sl</th>
                  <th>Category</th>
                  <th>Item Name</th>
                  <th>Description</th>
                  <th>Sale Price</th>
                  <th>Discount Price</th>
                  <th>Image</th>
                  <th>Delete</th>
                </tr>
              </thead> 

              <tbody>
                @php $sl=1 @endphp
                @foreach ($items as $data)
                  <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->subcat->subcatName }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->des }}</td>
                    <td>{{$data->salePrice }}</td>
                    <td>{{$data->disPrice}}</td>
                    <td><img height="80" src="{{ asset('backend/items/'.$data->pic)  }}" /></td>
                    <td>
                      <!-- <a href="{{ Route('item.edit', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a> -->
                      <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-target='#delete{{ $data->id }}' data-toggle="modal"></i></button>
                    </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to delete this product?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{  Route('item.delete', $data->id) }}" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
                   @php $sl++ @endphp
                @endforeach
              </tbody>

             </table> 
            </div>
          </div><!-- col-3 -->
      </div><!-- br-pagebody -->
@endsection