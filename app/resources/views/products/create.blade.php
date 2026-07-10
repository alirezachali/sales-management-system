@extends('layouts.app')


@section('title','افزودن کالا')


@section('content')

<div class="card">

    <div class="card-header">
        <h3 class="card-title">
            افزودن کالا
        </h3>
    </div>


    <div class="card-body">


        <form method="POST"
              action="{{ route('products.store') }}">

            @csrf


            <div class="row">


                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        بارکد
                    </label>

                    <input type="text"
                           name="barcode"
                           class="form-control @error('barcode') is-invalid @enderror"
                           value="{{ old('barcode') }}">

                    @error('barcode')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>



                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        نام کالا
                    </label>

                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}">

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>



                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        دسته بندی
                    </label>

                    <select name="category_id"
                            class="form-select">

                        <option value="">
                            انتخاب کنید
                        </option>


                        @foreach($categories as $category)

                            <option value="{{ $category->id }}"
                                @selected(old('category_id') == $category->id)>

                                {{ $category->name }}

                            </option>

                        @endforeach


                    </select>

                </div>



                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        قیمت خرید
                    </label>

                    <input type="number"
                           name="buy_price"
                           class="form-control"
                           value="{{ old('buy_price',0) }}">

                </div>



                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        قیمت فروش
                    </label>

                    <input type="number"
                           name="sell_price"
                           class="form-control"
                           value="{{ old('sell_price',0) }}">

                </div>



                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        موجودی اولیه
                    </label>

                    <input type="number"
                           step="0.001"
                           name="stock"
                           class="form-control"
                           value="{{ old('stock',0) }}">

                </div>



                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        واحد
                    </label>

                    <select name="unit"
                            class="form-select">


                        <option value="عدد">
                            عدد
                        </option>


                        <option value="کیلوگرم">
                            کیلوگرم
                        </option>


                        <option value="لیتر">
                            لیتر
                        </option>


                    </select>

                </div>



                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        وضعیت
                    </label>


                    <select name="is_active"
                            class="form-select">


                        <option value="1">
                            فعال
                        </option>


                        <option value="0">
                            غیرفعال
                        </option>


                    </select>


                </div>


            </div>



            <div class="mt-3">

                <button class="btn btn-primary">

                    <i class="bi bi-save"></i>

                    ذخیره کالا

                </button>


                <a href="{{ route('products.index') }}"
                   class="btn btn-secondary">

                    بازگشت

                </a>

            </div>


        </form>


    </div>

</div>


@endsection