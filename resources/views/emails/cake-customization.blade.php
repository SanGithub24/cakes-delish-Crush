<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Cake Customization Order</title>
</head>
<body>
<h2>New Cake Customization Order</h2>
<p><strong>Cake Name:</strong> {{ $data['cake_name'] }}</p>
<p><strong>Weight:</strong> {{ $data['weight'] }} kg</p>
<p><strong>With Egg or Egg less:</strong> {{ $data['egg_preference'] }}</p>
<p><strong>Number of Layers:</strong> {{ $data['layers'] }}</p>
<p><strong>Additional Flavor:</strong> {{ $data['flavor'] }}</p>
<p><strong>Filling Type:</strong> {{ $data['filling'] }}</p>
<p><strong>Topping Preference:</strong> {{ $data['topping'] }}</p>
<p><strong>Preferred Color:</strong> {{ $data['color'] }}</p>
<p><strong>Special Message on Cake:</strong> {{ $data['message'] }}</p>
<p><strong>Preferred Delivery Date:</strong> {{ $data['delivery_date'] }}</p>
</body>
</html>
