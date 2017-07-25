<!DOCTYPE html>
<html lang="{{$locale}}" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<link rel="shortcut icon" href="/img/favicon.png" type="image/png">
		<meta name="author" content="" />
		<meta name="description" content="@yield('description')" />
		<meta name="keywords"  content="@yield('keywords')" />
		<meta name="Resource-type" content="Document" />
		<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="/css/style.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	</head>
	<body class="container-fluid mn-body">

	@include('includes.header_blog')

	@yield('content')

	@include('includes.footer_blog')

  </body>
</html>
