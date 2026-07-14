<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>فاکتور</title>
</head>
<body>

<h2>فاکتور فروش</h2>

<p>شماره فاکتور: {{ $sale->invoice_number }}</p>

<p>تاریخ: {{ $sale->created_at }}</p>

<hr>

<table border="1" cellpadding="5" cellspacing="0" width="100%">
    <tr>
        <th>کالا</th>
        <th>تعداد</th>
        <th>قیمت</th>
        <th>جمع</th>
    </tr>

    @foreach($sale->items as $item)
        <tr>
            <td>{{ $item->product->name }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ number_format($item->unit_price) }}</td>
            <td>{{ number_format($item->line_total) }}</td>
        </tr>
    @endforeach

</table>

<hr>

<h3>جمع کل: {{ number_format($sale->final_price) }} تومان</h3>

<script>
window.onload = function () {
    window.print();
}
</script>

</body>
</html>