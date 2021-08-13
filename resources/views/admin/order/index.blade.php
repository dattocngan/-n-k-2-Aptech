@extends('admin/layouts/master')
@section('css')
<style type="text/css">
  .card-body thead th {
    text-align: center!important;
  }

  .card-body thead th {
    padding: 5px 5px;
  }

  .card-title{
    display: flex;
    padding: 5px 0px;
  }


  tbody {
    text-align: center;
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
          <h1>Thống Kê Đơn Hàng</h1>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form method="get">
      <div class="row">
        <div class="col-8">
         <div class="form-group">
          <div class="input-group md-form form-sm form-2 pl-0">
            <input value="{{$customer_name}}" id="customer_name" name="customer_name" class="form-control my-0 py-1 amber-border" type="text" placeholder="Tên khách hàng cần tìm...">
          </div>
        </div>
      </div>
      <div class="col-2">
        <select name="sort" class="form-control">
            <option>--Thời Gian--</option>
            <option value="desc">Giảm Dần</option>
            <option value="asc">Tăng Dần</option>
        </select>
     </div>

      <div class="col-2">
        <button style="width: 100%" class="btn btn-success">Tìm</button>
     </div>
   </div>

 </form>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            @if (session('message'))
            <div class="alert alert-success">
              {{session('message')}}
            </div>
            @endif
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách</h3>
              <div id="message"></div>
            </div>
            <!-- /.card-header -->
            <div id ="data" class="card-body">
            
                <div class="card">
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Tên Khách Hàng</th>
                          <th>SĐT</th>
                          <th>Địa Chỉ</th>
                          <th>Ngày Đặt </th>
                          <th>Trạng Thái</th>
                          <th>Chi Tiết</th>
                          <th>Hủy Đơn</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($orderList as $order)
                        <tr>
                          <td>{{++$index}}</td>
                          <td>{{$order->user_name}}</td>
                          <td>{{$order->phone}}</td>
                          <td>{{$order->address}}</td>
                          <td>{{date('d-m-Y H:i:s', strtotime($order->order_date))}}</td>
                          <td>
                            <select class="form-control" onchange="updateOrderStatus(this, {{$order->id}})">
                                @foreach ($statusList as $status)
                                  <option 
                                     @if ($status->id == "1" || $status->name == "Hủy")
                                          {{"disabled"}}
                                      @endif
                                     @if ($order->order_status_name == $status->name)
                                          {{"selected"}}
                                      @endif
                                   value = "{{$status->id}}">{{$status->name}}
                                  </option>
                                @endforeach
                            </select>

                          </td>
                          <td><a href="{{route('order.show',['order'=>$order->id])}}">Xem Chi Tiết</a></td>
                        
                        </tr>
                      @endforeach

                    </tbody>

                  </table>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    <div style="margin-top: 10px">{{ $orderList->links() }}</div>

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


    function updateOrderStatus(that, order_id){
      var option = confirm('Bạn có chắc chắn muốn sửa trạng thái đơn hàng?');
      if (option == false) {
        return
        location.reload();
      }
      var status_id = $(that).val();

      $.post('{{route('order_update')}}', {
      'order_id': order_id,
      'status_id' : status_id,
      '_token': '{{csrf_token()}}'
    } , function(res){
        alert(res);
        location.reload();
      })
    }
  </script>
  @stop





