<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>

    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Kazanımlar</div>
                            @php
                                $total=0;
                            @endphp
                            @foreach($datalist as $rs)
                                @php
                                    $total += $rs->total;
                                @endphp
                            @endforeach
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total}}₺</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span>Bu Yıl</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Satış Sayısı</div>
                            @php
                                $saleCount=0;
                            @endphp
                            @foreach($datalist as $rs)
                                @php
                                    $saleCount += 1;
                                @endphp
                            @endforeach
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$saleCount}}</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span>Bu Yıl</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New User Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Kullanıcı Sayısı</div>
                            @php
                                $userCount=0;
                            @endphp
                            @foreach($datauser as $rs)
                                @php
                                    $userCount += 1;
                                @endphp
                            @endforeach
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$userCount}}</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span>Bu Yıl</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Ürün Sayısı</div>
                            @php
                                $productCount=0;
                            @endphp
                            @foreach($dataproduct as $rs)
                                @php
                                    $productCount += 1;
                                @endphp
                            @endforeach
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$productCount}}</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span>Bu Yıl</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-shopping-basket fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews-->
        <div class="col-xl-6 col-lg-6 ">
            <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between" >
                    <h6 class="m-0 font-weight-bold text-light">Ürün Yorumları Denetle</h6>
                </div>
                <div>
                    @foreach($reviews as $rs)
                        <div class="customer-message align-items-center">
                            <a class="font-weight-bold" href="{{route('admin_review_show',['id'=>$rs->id])}}"
                               onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=800')">
                                <div class="text-truncate message-title">{{$rs->subject}} · {{$rs->review}}
                                </div>
                                <div class="small text-gray-500 message-time font-weight-bold">{{$rs->user->name}}
                                    · {{$rs->created_at}}</div>
                            </a>
                        </div>
                    @endforeach


                    <div class="card-footer text-center">
                        <a class="m-0 small text-primary card-link" href="{{route('admin_messages')}}">Daha Fazlasına
                            Göz At . <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews-->
        <div class="col-xl-6 col-lg-6 ">
            <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between" >
                    <h6 class="m-0 font-weight-bold text-light">İlan Yorumlarını Denetle</h6>
                </div>
                <div>
                    @foreach($reviewsdec as $rs)
                        <div class="customer-message align-items-center">
                            <a class="font-weight-bold" href="{{route('admin_reviewdec_show',['id'=>$rs->id])}}"
                               onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=800')">
                                <div class="text-truncate message-title">{{$rs->subject}} · {{$rs->review}}
                                </div>
                                <div class="small text-gray-500 message-time font-weight-bold">{{$rs->user->name}}
                                    · {{$rs->created_at}}</div>
                            </a>
                        </div>
                    @endforeach


                    <div class="card-footer text-center">
                        <a class="m-0 small text-primary card-link" href="{{route('admin_declarations')}}">Daha Fazlasına
                            Göz At . <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Message From Customer-->
        <div class="col-xl-6 col-lg-6 ">
            <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-light">Okunmamış Mesajlar</h6>
                </div>
                <div>
                    @foreach($lastmessages as $rs)
                        <div class="customer-message align-items-center">
                            <a class="font-weight-bold" href="{{route('admin_message_edit',['id'=>$rs->id])}}"
                               onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=800')">
                                <div class="text-truncate message-title">{{$rs->message}}
                                </div>
                                <div class="small text-gray-500 message-time font-weight-bold">{{$rs->name}}
                                    · {{$rs->created_at}}</div>
                            </a>
                        </div>
                    @endforeach


                    <div class="card-footer text-center">
                        <a class="m-0 small text-primary card-link" href="{{route('admin_messages')}}">Daha Fazlasına
                            Göz At . <i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

</div>
