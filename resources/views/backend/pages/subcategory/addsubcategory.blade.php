
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Add Category</h4>
      <p class="mg-b-0">Add All the Category here</p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('subcategoryinsert') }}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-sm-6">


          	 <div class="form-group">
              <label for="name">Category Name</label> 
              <input type="text" name="name" id="name" placeholder="Enter Sub Category Name" class="form-control" value="{{ old('name') }}">
              <span class="text-danger">
                @error('name')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
               <label for="des">Category Description</label>
               <textarea name="des" id="des" placeholder="Enter Product Description" class="form-control">{{ old('des') }}</textarea>

              <span class="text-danger">
                @error('des')
                  {{ $message }}
                @enderror
              </span>
             </div>

            </div>
            <div class="col-sm-6">

             <div class="form-group">
              <label for="image">Category Image</label> 
              <input type="file" name="image" class="form-control">
              <span>recommended resulation for this picture is 120*120px </span>
              <span class="text-danger">
                @error('image')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="status">Category Status</label>
              <select name="status" id="status" class="form-control">
                <option value="">-----Select Status-----</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
              </select>
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Add Category</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
@endsection