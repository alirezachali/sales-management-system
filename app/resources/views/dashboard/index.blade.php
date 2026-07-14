@extends('layouts.app')

@section('content')

<div class="container">

    <h2 class="mb-4">

        داشبورد مدیریت

    </h2>

    <div class="row g-4">

        <div class="col-lg-3 col-md-6">

            <div class="card dashboard-card">

                <div class="card-body">

                    <div class="dashboard-icon bg-sales">

                        💰

                    </div>

                    <div class="dashboard-title">

                        فروش امروز

                    </div>

                    <div class="dashboard-number">

                        {{ number_format($todaySales) }}

                    </div>

                    <small>

                        تومان

                    </small>

                </div>

            </div>

        </div>



        <div class="col-lg-3 col-md-6">

            <div class="card dashboard-card">

                <div class="card-body">

                    <div class="dashboard-icon bg-invoice">

                        🧾

                    </div>

                    <div class="dashboard-title">

                        فاکتورهای امروز 

                    </div>

                    <div class="dashboard-number">

                        {{ $todayInvoices }}

                    </div>

                </div>

            </div>

        </div>


        <div class="col-lg-3 col-md-6">

            <div class="card dashboard-card">

                <div class="card-body">

                    <div class="dashboard-icon bg-product">

                        📦

                    </div>

                    <div class="dashboard-title">

                        تعداد کالاها

                    </div>

                    <div class="dashboard-number">

                        {{ $productsCount }}

                    </div>

                </div>

            </div>

        </div>
        

        <div class="col-lg-3 col-md-6">

            <div class="card dashboard-card">

                <div class="card-body">

                    <div class="dashboard-icon bg-stock">

                        ⚠️

                    </div>

                    <div class="dashboard-title">

                        کالاهای کم موجود

                    </div>

                    <div class="dashboard-number">

                        {{ $lowStockProducts }}

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection