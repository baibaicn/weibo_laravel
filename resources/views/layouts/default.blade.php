<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Weibo App') - Laravel新手入门教程</title>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" herf="/">Weibo App</a>
			<ul class="navbar-nav justify-content-end">
				<li class="nav-item"><a href="/help" class="nav-link">帮助</a></li>
				<li class="nav-item"><a href="/" class="nav-link">登录</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
		@yield('content')
	</div>
</body>
</html>