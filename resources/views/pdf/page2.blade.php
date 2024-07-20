<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .content {
            height: 700px;
            background-size: 100% 100%;
            text-align: start;
            color: white;
            background-image: url('{{ public_path('images/page1.png') }}');
            /* font-family: 'Courier New', Courier, monospace; */

        }

        .content h1 {
            padding: 290px 0 0 80px;

        }
    </style>
</head>

<body>
    <div class="content">
        {{-- <img src={{ public_path('images/page1.png') }} alt=""> --}}
        <h1>
            <b>
                BRO-CK-0169-Rizki
            </b>
        </h1>
        <h2 style="margin-left: 80px; letter-spacing: 2px;">
            Perumahan Griya Sepakat blok A8, Jakarta Timur
        </h2>
    </div>

</body>

</html>
