
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Add Item Page</h4>
      <p class="mg-b-0">Add your items here</p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('item.store') }}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-sm-6">

            <div class="form-group">
              <label for="catId">Category</label>
              <select name="item_code" id="item_code" class="form-control">
                <option value="0">---select sub category---</option>
                @foreach($subcats as $subcat)
                <option value="{{ $subcat->id }}">{{ $subcat->subcatName }}</option>
                @endforeach
              </select>
              <span class="text-danger">
                @error('catId')
                  {{ $message }}
                @enderror
              </span>
            </div>

          	 <div class="form-group">
              <label for="name">Item Name</label> 
              <input type="text" name="name" id="name" placeholder="Enter Items Name" class="form-control" value="{{ old('name') }}">
              <span class="text-danger">
                @error('name')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
               <label for="des">Item Description</label>
               <textarea name="des" id="des" placeholder="Enter Item Description" class="form-control">{{ old('des') }}</textarea>

              <span class="text-danger">
                @error('des')
                  {{ $message }}
                @enderror
              </span>
             </div>
             <div class="form-group">
              <label for="name">Product Sale Price</label> 
              <input type="text" name="salePrice" id="salePrice" placeholder="Enter Product Sale Price" class="form-control" value="{{ old('salePrice') }}">
              <span class="text-danger">
                @error('salePrice')
                  {{ $message }}
                @enderror
              </span>
             </div>

            </div>
            <div class="col-sm-6">
            
             <div class="form-group">
              <label for="name">Product Discount Price</label> 
              <input type="text" name="disPrice" id="disPrice" placeholder="Enter Product Discount Price" class="form-control" value="{{ old('disPrice') }}">
              <span class="text-danger">
                @error('disPrice')
                  {{ $message }}
                @enderror
              </span>
             </div>
  
             <div class="form-group">
              <label for="pic">Item Image</label> <br>
              <input type="file" name="pic" class="form-control">
              <span>Recommended resulation for this image is 1100*1100px</span>
              <span class="text-danger">
                @error('image')
                  {{ $message }}
                @enderror
              </span>
             </div>
            
             <div class="form-group">
               <button class="form-control btn btn-info" >Add Product</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
@endsection