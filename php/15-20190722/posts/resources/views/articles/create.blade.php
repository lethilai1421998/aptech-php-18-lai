@extends('app')
@section('sidebar')
<form action="{{asset('/articles')}}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <textarea name="content" id="editor">This is some sample content.</textarea>
  <script>
    CKEDITOR.replace('editor', {
      filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
      filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
    });
  </script>
  <div class="container w-50 my-3">
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <label for="">Title</label>
          <input type="text" class="form-control" name="title" id="" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="">Slug</label>
          <input type="text" class="form-control" name="slug" id="" placeholder="Slug">
        </div>
        <div class="form-group">
          <label for="">Description</label>
          <input type="text" class="form-control" name="description" id="" placeholder="Description">
        </div>
        <div class="form-group">
          <label for="">Image Path</label>
          <input type="text" class="form-control" name="image_path" id="" placeholder="Image Path">
        </div>
        <div class="form-group">
          <label for="categories" class="font-weight-bold">Category</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Add</button>
      </div>
    </div>
  </div>
</form>


@endsection
@push('scripts')
<script>
  $('#select2-multi').select2();
</script>
@endpush