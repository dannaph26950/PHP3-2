<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
   TÊN : <input type="text" name="user"><br>

    SĐT : <input type="tel" name="tel"><br>
    SĐT : <input type="hidden" name="_method" value="PUT"><br>

    ĐỊA CHỈ : <input type="text" name="address"><br>

    EMAIL : <input type="email" name="email"><br>

    ĐỊA CHỈ : <input type="text"  ><br>
    <button type=submit">Gửi</button>

</form>
</body>
</html>
