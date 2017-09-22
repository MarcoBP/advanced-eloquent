<!DOCTYPE html>
<html>
	<head>
		<title>Relaciones</title>
	</head>
	<body>
		@foreach($categories as $category)
			<p>
				{{ $category->name }}
				({{ $category->num_books }})
			</p>
			@foreach($category->public_books as $book)
				<li>
					<strong> {{ $book->title }} </strong>
					({{ $book->status }})
					{{ $book->description }}
				</li>
			@endforeach
		@endforeach
	</body>
</html>