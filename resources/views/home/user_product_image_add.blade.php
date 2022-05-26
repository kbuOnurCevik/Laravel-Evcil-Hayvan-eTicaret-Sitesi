<html>
<head>
    <title>Resim Galerisi</title>
    <link href="{{asset('assets')}}/admin/img/logo/logo.png" rel="icon">
    <title>@yield('title')</title>
    <link href="{{asset('assets')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/admin/css/ruang-admin.min.css" rel="stylesheet">
</head>
<body>


<div class="card mb-4">

    <div class="card-body">
        <h3 class="card-title">Ürün : {{$data->title}}</h3>
        <div class="row col-lg-4">
            @include('home.message')
        </div>
        <form action="{{route('user_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label><b>Başlık</b></label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label><b>Resim</b></label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Resim Ekle</button>
        </form>

        <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Başlık</th>
                <th>Resim</th>
                <th>Sil</th>
            </tr>
            </thead>
            <tbody>
            @foreach($images as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->title}}</td>
                    <td>
                        @if ($rs->image)
                            <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                        @endif
                    </td>
                    <td>
                        <a href="{{route('user_image_delete',['id'=>$rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Deleting ! Are you sure?')">
                            <img src="{{asset('assets/admin/img')}}/delete.png" height="25"></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
