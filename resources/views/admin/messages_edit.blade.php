<html>
<head>

    <link href="{{asset('assets')}}/admin/img/logo/logo.png" rel="icon">
    <title>Message Detail</title>
    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/css/ruang-admin.min.css" rel="stylesheet">
</head>
<body>


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Message Detail</h1>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                @include('home.message')
                <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group table-responsive p-3">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{$data->message}}</td>
                            </tr>
                            <tr>
                                <th>Admin Note</th>
                                <td><textarea rows="3" cols="60"
                                              id="note" name="note">{{$data->note}}</textarea></td>
                            </tr>
                            <tr>
                                <th>
                                <td>
                                    <button type="submit" class="btn btn-primary">Update Message</button>
                                </td>
                                </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
</div>
</body>
</html>
