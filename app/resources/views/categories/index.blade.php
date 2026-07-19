
@extends('layouts.app')

@section('title', 'مدیریت دسته‌بندی محصولات')

@section('content')

<div class="container">

    <div class="card dashboard-card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h4 class="mb-0">
                <i class="bi bi-tags-fill me-2"></i>
                مدیریت دسته‌بندی محصولات
            </h4>

            <button class="btn btn-success" id="btnAddCategory">
                <i class="bi bi-plus-circle"></i>
                افزودن دسته‌بندی
            </button>

        </div>

        <div class="card-body">

            <div class="row mb-4">

                <div class="col-md-4">

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>

                        <input type="text"
                               class="form-control"
                               placeholder="جستجوی دسته‌بندی...">

                    </div>

                </div>

            </div>

            <div class="table-responsive">

                <table class="table table-hover table-bordered align-middle text-center">

                    <thead class="table-light">

                    <tr>

                        <th width="70">ردیف</th>

                        <th>نام دسته‌بندی</th>

                        <th width="140">تعداد کالا</th>

                        <th width="180">تاریخ ایجاد</th>

                        <th width="140">عملیات</th>

                    </tr>

                    </thead>

                    <tbody>

                    @forelse($categories as $category)

                        <tr>

                            <td>
                                {{ $loop->iteration + (($categories->currentPage()-1) * $categories->perPage()) }}
                            </td>

                            <td class="text-start">
                                {{ $category->name }}
                            </td>

                            <td>

                                <span class="badge bg-primary">

                                    {{ $category->products_count }}

                                </span>

                            </td>

                            <td>

                                {{ $category->created_at->format('Y/m/d') }}

                            </td>

                            <td>

                                <button class="btn btn-sm btn-primary">

                                    <i class="bi bi-pencil-square"></i>

                                </button>

                                <button class="btn btn-sm btn-danger">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5" class="py-5">

                                <i class="bi bi-inbox fs-1 text-secondary"></i>

                                <div class="mt-3">

                                    هنوز هیچ دسته‌بندی ثبت نشده است.

                                </div>

                            </td>

                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

            <div class="mt-4 d-flex justify-content-center">

                {{ $categories->links() }}

            </div>

        </div>

    </div>

</div>

@endsection