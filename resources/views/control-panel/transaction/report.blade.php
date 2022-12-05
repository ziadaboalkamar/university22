@extends('layout.app')
@section("css")
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/charts/apexcharts.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/plugins/charts/chart-apex.css")}}">
    @stop
@section('content')
    <!-- Line Chart Card -->
    <div class="row">

        <div class="col-lg-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-header align-items-start pb-5">
                    <div>
                        <h2 class="font-weight-bolder">{{$transactions->products->name}}</h2>
                        <p class="card-text">from store {{$transactions->stores->name}}</p>
                        <h2 class="font-weight-bolder">{{$purchase_price}} $</h2>
                        <p class="card-text">with {{$product_count}} pay</p>


                    </div>

                </div>
            </div>
        </div>

    </div>
    <!--/ Line Chart Card -->
@endsection
@section("js")
    <script src="{{asset("app-assets/vendors/js/charts/apexcharts.min.js")}}"></script>
    <script src="{{asset("app-assets/js/scripts/cards/card-statistics.js")}}"></script>

@endsection
