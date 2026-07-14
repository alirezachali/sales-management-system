@extends('layouts.app')

@section('content')

<div class="container">

    <h2 class="mb-4">

        داشبورد مدیریت

    </h2>

    <div class="row g-4">

        <div class="col-md-3">

            <div class="card shadow-sm">

                <div class="card-body">

                    <h6>فروش امروز</h6>

                    <h3>

                        {{ number_format($todaySales) }}

                    </h3>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow-sm">

                <div class="card-body">

                    <h6>فاکتورهای امروز</h6>

                    <h3>

                        {{ $todayInvoices }}

                    </h3>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow-sm">

                <div class="card-body">

                    <h6>تعداد کالاها</h6>

                    <h3>

                        {{ $productsCount }}

                    </h3>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow-sm">

                <div class="card-body">

                    <h6>کالاهای کم موجودی</h6>

                    <h3>

                        {{ $lowStockProducts }}

                    </h3>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection