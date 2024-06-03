<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        /* Tambahkan CSS sesuai kebutuhan */
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>Date: {{ $date }}</p>
    <p>Invoice ID: {{ $invoice_id }}</p>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
