@extends('admin/layouts/master')
@section('css')
	<style type="text/css">
    .card-body thead th {
        text-align: center!important;
    }

    .card-body thead th {
        padding: 0px;
    }

    card-body{
    	font-family: "Times New Roman"!important;
    } 

  </style>
@stop

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Danh mục sản phẩm</h1>
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
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Danh sách</h3>
							<div id="message"></div>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th style="padding: 0px">STT</th>
										<th>Tên Danh Mục Sản Phẩm</th>
										<th colspan="2">Sửa Hoặc Xóa Danh Mục Sản Phẩm</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($categoryList as $category)
									<tr>
										<td>{{++$count}}</td>
										<td>{{$category->name}}</td>
										<td ><a class="btn btn-warning"style="color: white" href="{{route('category_edit', ['id'=>$category->id])}}">Sửa</a></td>
										<td><button onclick="deleteCategory({{$category->id}})" class="btn btn-danger">Xóa</button></td>
									</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr>
										<th>STT</th>
										<th>Tên Danh Mục Sản Phẩm</th>
									</tr>
								</tfoot>
							</table>
							<div style="margin-top: 10px">{{ $categoryList->links() }}</div>
						</div>
						<!-- /.card-body -->
					</div>
				</div>
				<!-- /.col -->
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
	$(function () {
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});

	function deleteCategory(id){
			var option = confirm('Bạn có chắc chắn muốn xóa danh mục sản phẩm này không?')
			if (!option) {
				return
			}

		$.post('{{route('category_delete')}}', {
			'id': id,
			'_token': '{{csrf_token()}}'
		} , function(data){
			alert("Xóa danh mục sản phẩm thành công");
			location.reload();
		})
	}
</script>
@stop





