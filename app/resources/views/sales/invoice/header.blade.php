<div class="center">

    <h3>فروشگاه بزرگ نمونه</h3>

    <div>سوپرمارکت شبانه روزی</div>

    <div>021-12345678</div>

    <div>تهران</div>

</div>

<div class="line"></div>

<div class="row">

    <span>شماره:</span>

    <span>{{ $sale->invoice_number }}</span>

</div>

<div class="row">

    <span>تاریخ:</span>

    <span>{{ $sale->created_at->format('Y/m/d H:i') }}</span>

</div>

<div class="row">

    <span>صندوق دار:</span>

    <span>{{ $sale->user->name ?? '-' }}</span>

</div>

<div class="line"></div>