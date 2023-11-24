<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <style>
        h2 {
            color: blue;
        }
    </style>
</head>
<body style="padding-left: 200px; margin-top: 100px; ">
<header>
    <h1> HEADER</h1>

    <h2>SỬ DỤNG PHP THUẦN :
        {{--        Sử dụng php thuần--}}
        {{--        <?php echo $title; ?>--}}


        {{--        BLADE--}}

        <h2>{{$title}}</h2>
    </h2>
</header>
<main>
    <h1> CONTENT</h1>
    <H2>

    </H2>
    <hr>
    VÒNG LẶP FOR
    @for($i=0;$i<3;$i++)
        <p>
            Sản phẩm : {{$i}} <br>
        </p>
    @endfor


    <table border="1">
        <thead>
        <th>
            STT
        </th>
        <th>
            Tên sản phẩm
        </th>
        <th>
            Giá sản phẩm
        </th>
        <th>
            Trạng thái
        </th>
        </thead> @foreach($dataArr as $item)
            <tbody>
            <tr>
                <td>
                    {{$item['n']}}
                </td>
                <td>
                    {{$item['name']}}
                </td>
                <td>
                    {{$item['price']}}
                </td>


                    <td>
                        @if($item['active']==0)
                        <p  >Đã hết hàng</p>
                        @else
                            <p>Còn hàng</p>


                        @endif
                    </td>

            </tr>


            </tbody>
        @endforeach
        {{--        <p>Tên sản phẩm : {{$item['name']}}</p>--}}
        {{--        <p>Giá sản phẩm : {{$item['price']}}</p>--}}
        {{--        <p>Tính năng sản phẩm : {{$item['active']}}</p>--}}
    </table>


    @forelse($dataArr as $item)
        <p>Tên sản phẩm : {{$item['name']}}</p>
    @empty
        <p>Không có gì</p>
    @endforelse





    {{--    IFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFff--}}


</main>
<footer>
    <h1>FOOTER</h1>
    <h2>{{$footer}}</h2>
    <H2>
        ĐỔ DỮ LIỆU TRONG DATA ARR ra bảng
        stt,tên sp, giá, tranjg thái
    </H2>
</footer>

</body>
</html>
