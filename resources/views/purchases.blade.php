<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<h2>Purchases</h2>
<table>
    <tr>
        <th>Purchase ID</th>
        <th>Offering title</th>
        <th>Quantity</th>
        <th>Unit price</th>
        <th>Total</th>
    </tr>
    @foreach($purchases as $purchase)
        <tr>
            <td>{{$purchase->id}}</td>
            <td>{{$purchase->offering->title}}</td>
            <td>{{$purchase->quantity}}</td>
            <td>{{$purchase->offering->price}}</td>
            <td>{{$purchase->total}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
