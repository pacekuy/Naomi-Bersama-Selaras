@extends('backend.layout.main')

@section('dashboard', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Hello {{Auth::user()->name}} ! 🎉</h5>
                            <p class="mb-4">
                                Welcome to <span class="fw-bold"> Construction </span> dashboard, hope you
                                enjoy and have fun.
                            </p>

                            @php
                            $mytime = Carbon\Carbon::now();
                            @endphp

                            {{ date_default_timezone_get()}}
                            <h6 class="card-title text-primary">{{date("Y-m-d", $mytime->format('U'))}}, <span
                                    id="txt"></span></h6>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{asset('admin/assets/img/illustrations/man-with-laptop-light.png')}}"
                                height="140" alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png')}}"
                                data-app-light-img="illustrations/man-with-laptop-light.png')}}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('admin/assets/img/icons/unicons/chart-success.png')}}"
                                        alt="chart success" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Repository</span>
                            <h3 class="card-title mb-2">0</h3>
                            <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                0 Pending</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('admin/assets/img/icons/unicons/chart-success.png')}}"
                                        alt="chart success" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Repository</span>
                            <h3 class="card-title mb-2">0</h3>
                            <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                0 Peding</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection