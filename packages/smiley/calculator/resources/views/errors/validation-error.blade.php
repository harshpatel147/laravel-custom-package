<!DOCTYPE html>
<html>
<head>
	<title>Calculator Error</title>
</head>
<body>
	<h1 style="text-align:center">
		validation error
		<span style="font-weight:normal">
            <ul>
                @if(!empty($errors) && $errors->any())
                    @foreach ($errors->all() as $message) {
                        <li>{{ $message }}</li>
                    @endforeach
                @endif
            </ul>
        </span>
	</h1>
</body>
</html>