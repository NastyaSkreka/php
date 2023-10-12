<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="bg-primary">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 ">
                <li><a href="#" class="nav-link px-2 text-white link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Activity</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Food</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Settings</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-secondary">Login out</button>
            </div>
        </header>
    </div>
</div>
@yield('main_content')

</body>
</html>
