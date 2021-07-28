@extends('admin/layouts/master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Nhập Thông Tin Bài Viết Tin Tức</h1>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $err)
            {{$err}}<br>
            @endforeach
          </div>
          @endif

          @if (session('message'))
          <div class="alert alert-success">
            {{session('message')}}
          </div>
          @endif

          <form method="post" action="">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Noi dung</label>
              <textarea id="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
          </form>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@stop

@section('js')
<script>
$(document).ready(function() {
    $("img").addClass("img-responsive");
    $("img").css("width", "100%");
  $('#content').summernote({
    height: 500,
    callbacks: {
        onImageUpload: function(files, editor, welEditable) {
            that = $(this);

            for (var i = 0; i < files.length; i++) {
              sendFile(files[i], that);
            }
        }
      }
  });

  

function sendFile(file, editor, welEditable) {
    data = new FormData();
    data.append("file", file);
     data.append("_token",'{{ csrf_token()}}');
    $.ajax({
      data: data,
      type: "POST",
      url: "sendfile",
      cache: false,
      contentType: false,
      processData: false,
      success: function(url) {
        console.log(url);
        $(that).summernote('insertImage', location.origin+'/'+url, '')
      }
    });
  }

});
</script>

 

@stop
