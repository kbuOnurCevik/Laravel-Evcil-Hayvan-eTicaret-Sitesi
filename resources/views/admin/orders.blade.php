@extends('layouts.admin')

@section('title','Admin Order List')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Order List</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order List</li>
            </ol>
        </div>


        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>User</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Details</th>
                                <th>Note</th>
                            </tr>
                            </thead>
                            @foreach($datalist as $rs)
                                <tbody>
                                <td>{{$rs->id}}</td>
                                <td>
                                    <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}"
                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1000 height=800')">{{$rs->user->name}}</a>
                                </td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->total}}₺</td>
                                <td>{{$rs->created_at}}</td>
                                <td>{{$rs->status}}</td>
                                <td>
                                    <a href="{{route('admin_order_show',['id'=>$rs->id])}}"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=800')">
                                        <img src="{{asset('assets/admin/img')}}/edit.jpg" height="25"></a>
                                </td>
                                <td>{{$rs->note}}</td>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
    <!---Container Fluid-->
@endsection

@section('footer')

    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
    <script src="{{asset('assets')}}/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

@endsection
