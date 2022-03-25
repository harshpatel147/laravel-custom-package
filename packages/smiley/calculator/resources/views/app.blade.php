<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	@if($errors->any())
	<h1>
		validation error
		<span style="font-weight:normal;">
            <ul>
                    @foreach ($errors->all() as $message)
                        <li style="color: red; font-size: 18px">{{ $message }}</li>
                    @endforeach
				</ul>
			</span>
	</h1>
	@endif
	@if(isset($result))
	<h1 style="text-align:center">
		Your Result 
		<span style="font-weight:normal">{{ $result }}</span>
	</h1>
	@endif
	<div style="border: 1px solid #ccc; width: 500px; height: 50px; display: flex; justify-content: center; align-items: center">
		<p>Sum</p>
		<form action="{{ route('calculator::add') }}" method="GET">
			<input name="a">
			<input name="b">
			<button type="submit">Sum</button>
		</form>
	</div>
	<br/>
	<br/>
	<div style="border: 1px solid #ccc; width: 500px; height: 50px; display: flex; justify-content: center; align-items: center">
		<p>Sub</p>
		<form action="{{ route('calculator::sub') }}" method="GET">
			<input name="a">
			<input name="b">
			<button type="submit">Sub</button>
		</form>
	</div>
	<br/>
	<br/>
	<div style="border: 1px solid #ccc; width: 500px; height: 50px; display: flex; justify-content: center; align-items: center">
		<p>Mul</p>
		<form action="{{ route('calculator::mul') }}" method="GET">
			<input name="a">
			<input name="b">
			<button type="submit">Mul</button>
		</form>
	</div>
	<br/>
	<br/>
	<div style="border: 1px solid #ccc; width: 500px; height: 50px; display: flex; justify-content: center; align-items: center">
		<p>Div</p>
		<form action="{{ route('calculator::div') }}" method="GET">
			<input name="a">
			<input name="b">
			<button type="submit">Div</button>
		</form>
	</div>
</body>
</html>