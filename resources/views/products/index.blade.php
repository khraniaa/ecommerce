<doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title> page des products</title>
</head>
<body>
<ul>
	@foreach($products as $product)
	<li> {{products->nom}}</li>li>
	@endforeach
</ul>
</body>
</html>