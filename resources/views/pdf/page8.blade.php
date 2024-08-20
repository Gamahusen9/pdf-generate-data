<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .tabledua {
            padding: 5px;
            width: 100%;
            border-collapse: collapse;
        }

        .tabledua td {
            padding: 10px;
            border: 1px solid #000;
            vertical-align: top;
        }

        .tdpartdua {
            text-align: center;
        }

        .tdpartdua img {
            max-width: 100%;
            height: auto;
        }

        .tdpartdua hr {
            border: 1px solid #000;
            margin: 10px 0;
        }

        .space {
            height: 500px;
        }

        .space-300 {
            height: 300px;
        }

        .tdpartdua p, .tdpartdua h4 {
            margin: 0;
            padding: 0;
        }

        .tdpartdua h4 {
            font-size: 16px;
            margin-top: 5px;
        }

        .tdpartdua p span {
            font-size: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 10px;
            border: 1px solid #000;
            vertical-align: top;
        }

        table tr td {
            text-align: center;
        }

        .table-signature {
            border: 1px solid #000;
        }

        .table-signature td {
            height: 20px;
        }

        .table-signature tr td {
            border-top: 1px solid #000;
        }

        .table-revisi {
            border: 1px solid black;
            width: 100%;
        }

        .table-revisi td {
            padding: 10px;
            border: 1px solid #000;
        }

        .table-revisi tr td {
            border-top: 1px solid #000;
        }
    </style>
</head>

<body>
    <table border="1">
        <tr>
            <td><img src="{{ public_path('storage/order/page3.png') }}" alt=""></td>
            <td>
                <table class="tabledua">
                    <tr>
                        <td class="tdpartdua">
                            <p>ID Klien</p>
                            <hr>
                            <h4>BRO-CK-00169RIZKI</h4>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdpartdua">
                            <p>PROYEK</p>
                            <hr>
                            <h4>PAKET BANGUN RUMAH CUSTOM-BRO RUMAH RIZKI</h4>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdpartdua">
                            <p>LOKASI</p>
                            <hr>
                            <h4>PERUMAHAN GIRIYA SEPAKAT KEL.CILANGKAP KEC.CIPAYUNG, JAKARTA TIMUR</h4>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdpartdua">
                            <p>DEVELOPMENT</p>
                            <hr>
                            <img src="{{ public_path('images/signature.png') }}" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td class="tdpartdua">
                            <p>JUDUL GAMBAR</p>
                            <hr>
                            <h4>LAYOUT EKSISTING</h4>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdpartdua">
                            <p>
                                DISETUJUI OLEH
                                <br>
                                <span>(KLIEN BRO)</span>
                            </p>
                            <div class="space">
                                <br><br><br><hr>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdpartdua">
                            <p>CEO BINA RUMAH ONLINE (BRO)</p>
                            <div class="space space-300">
                                <br><br><br><hr>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table-signature">
                                <tr>
                                    <td>CIVIL</td>
                                    <td>MARKETING</td>
                                </tr>
                                <tr>
                                    <td><br><br><hr></td>
                                    <td><br><br><hr></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-revisi">
                            <table>
                                <tr>
                                    <td>No</td>
                                    <td>Revisi</td>
                                    <td>Skala</td>
                                </tr>
                                <tr>
                                    <td><b>01</b></td>
                                    <td></td>
                                    <td><b>1:75</b></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
