<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadgets List</title>
</head>
<body>
    <h1>Available Gadgets</h1>
    <ul>
        @foreach($gadgets as $gadget)
            <li><strong>{{ $gadget['name'] }}</strong> - {{ $gadget['brand'] }} ({{ $gadget['price'] }})</li>
        @endforeach    
    </ul>
</body>
</html>