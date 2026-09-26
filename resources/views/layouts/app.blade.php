<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Task Manager</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 0; padding: 0; }
        .container { max-width: 900px; margin: 40px auto; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background: #2c3e50; color: #fff; }
        .btn { padding: 6px 12px; border-radius: 4px; text-decoration: none; color: #fff; font-size: 13px; border: none; cursor: pointer; }
        .btn-add { background: #27ae60; }
        .btn-edit { background: #2980b9; }
        .btn-delete { background: #c0392b; }
        .btn-status { background: #8e44ad; }
        .status-pending { color: #e67e22; font-weight: bold; }
        .status-completed { color: #27ae60; font-weight: bold; }
        .alert { background: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
        form.inline { display: inline; }
        input[type=text], textarea, input[type=date], select {
            width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px;
            border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;
        }
        label { font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>