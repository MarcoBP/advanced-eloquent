<!DOCTYPE html>
<html>
	<head>
		<title>Relaciones</title>
	</head>
	<body>
		@foreach($categories as $category)
			<p>
				{{ $category->name }}
			</p>
			@foreach($category->books as $book)
				<li>
					<strong> {{ $book->title }} </strong>
					{{ $book->description }}
				</li>
			@endforeach
		@endforeach
	</body>
</html>