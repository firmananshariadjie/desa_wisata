@extends('admin.template.main')
@section('route')
    <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
            <li class="breadcrumb-item"><a href="/admin/home"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="/admin/user_list">Dashboard</a></li>
        </ol>
    </nav>
@endsection

@section('card-body1')
    <div class="col-xl-6 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Content Kind</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $content_kind }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                            <i class="ni ni-active-40"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('card-body2')
    <div class="col-xl-6 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Content</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $content }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                            <i class="ni ni-chart-pie-35"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('container')
    <!-- Argon Scripts -->
    <!-- Core -->
@endsection
