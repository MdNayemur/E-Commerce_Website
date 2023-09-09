
@extends('backend.master_template.template')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Edit Category</h4>
      <p class="mg-b-0">You can edit category here</p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('subcategoryupdate',$subcategory->id) }}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="row">

        <div class="form-group">
          <label for="name">Category Name</label> 
          <input value="{{ $subcategory->subcatName }}" type="text" name="name" id="name" placeholder="Enter Sub Category Name" class="form-control" value="{{ old('name') }}">
          <span class="text-danger">
            @error('name')
              {{ $message }}
            @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="des">Category Description</label>
          <textarea name="des" id="des" placeholder="Enter Product Description" class="form-control">{{ old('des') }} {{ $subcategory->des }}</textarea>

          <span class="text-danger">
            @error('des')
              {{ $message }}
            @enderror
          </span>
        </div>

        </div>
        <div class="col-sm-6">

        <div class="form-group">
          <img src="{{ asset('backend/subcategoryimages/'.$subcategory->img) }}" height="150"/>
          <label for="image">Category Image</label> 
          <input type="file" name="image" class="form-control">
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
            <option value="1" @if($subcategory->status==1) selected @endif >Active</option>
            <option value="2" @if($subcategory->status==2) selected @endif >Inactive</option>
          </select>
        </div>

        <div class="form-group">
          <button class="form-control btn btn-info" >Update Category</button>
        </div>

        </div>
        </form>
      </div><!-- br-pagebody -->
@endsection