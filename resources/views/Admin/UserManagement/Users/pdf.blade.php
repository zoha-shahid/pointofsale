<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="invoice.css"></head>
<body style="padding: 3rem">
<h1>Invoice</h1>
Awesome company<br />
7026 Hunters Creek Dr<br />



<table class="table">
    <thead>
    <tr>
        <th>Item Code</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Total Price</th>
    </tr>
    </thead>

 {{--   {{ for order_line in invoice.order_lines }}
    <tr>
        <td>{{ order_line.item_code | html.escape }}</td>
        <td>{{ order_line.description | html.escape }}</td>
        <td class="text-end">${{ order_line.quantity }}</td>
        <td class="text-end">${{ order_line.unit_price | math.format "F2" }}</td>
        <td class="text-end">${{ order_line.total_price | math.format "F2" }}</td>
    </tr>
    {{ end }}--}}


</table>
</body>
</html>
