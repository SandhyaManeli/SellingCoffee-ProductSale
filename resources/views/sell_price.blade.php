<!-- resources/views/sell_price.blade.php -->

<h1>Sell Price Calculation - Gold Coffee</h1>
<form action="/calculate-sell-price" method="post">
    <!-- Your form fields here -->
    @csrf
    <button type="submit">Submit</button>
</form>
<table border="1">
    <tr>
        <th>Quantity</th>
        <th>Unit Cost</th>
        <th>Selling Price</th>
    </tr>
    <tr>
        <td>{{ $quantity }}</td>
        <td>{{ $unitCost }}</td>
        <td>{{ $sellingPrice }}</td>
    </tr>
</table>
