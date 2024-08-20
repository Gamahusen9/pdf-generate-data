<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROPOSAL PENAWARAN</title>
    <style>
        .text {
            /* font-family: Arial, Helvetica, sans-serif; */
            font-size: 12px;
            margin-left: 100px;
            margin-top: 50px;
            text-justify: inter-word;
            text-align: justify;
        }

        .text ul {
            margin-top: 50px;
            list-style: none;
        }

        .text li {
            margin-bottom: 20px;
        }

        .text .lokasi {
            margin-left: 40px;
        }
    </style>
</head>

<body>
    <img src={{ public_path('images/p.png') }} style="width:700px; margin-left: 40px" alt="">
    <div class="paragraf-reponsive" style="width: 640">
        <div class="text">
            <p class="lokasi">Tangerang Selatan, {{ now() }}</p>
            <div class="content-text" style="margin-left: 40px;">
                <p>
                    Nomor: 383/SPw/BIC-BRO/V/2024 <br> <br>
                    Lampiran : 1 Rangkap Proposal <br> <br>
                    Perihal : Penawaran Harga
                </p>
                <p>Kepata YTH,</p>
                <p style="font-weight: bold"><b>Up. Gama</b></p>
                <p>di Tempat
                </p>
                <span>Sehubungan dengan adanya rencana pembangunan / renovasi rumah Gama telah
                    kami terima data teknis secara umum, sebagai berikut :</span>
            </div>
            {{-- <p style="margin-left: 80px">
                Nama
                Pemilik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                Rizki
                <br>
                Lokasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                Perumahan Griya Sepakat blok A8, Jakarta Timur
                <br>
                Rencana Pembangunan&nbsp;&nbsp;&nbsp;&nbsp;: Bangun Baru Lantai 2
                <br>
                Luasan Pembangunan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ± 132 m2 Luasan Pembangunan : ± 132 m2
                <br>
            </p> --}}
            <table style="margin-left: 80px; font-size:12px;">
                <tr>
                    <td>Nama Pemilik</td>
                    <td style="padding-left:50px;"><p>: Gama </p></td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td style="padding-left:50px;"><p>: Pakaladen Road</p></td>
                </tr>
                <tr>
                    <td>Rencana Pembangunan</td>
                    <td style="padding-left:50px;"><p>: Buatkan Rumah Dengan Bagus</p></td>
                </tr>
                <tr>
                    <td>Luasan Pembangunan</td>
                    <td style="padding-left:50px;"><p>: 200 M2 </p></td>
                </tr>
            </table>


            <p class="content-text" style="margin-left: 40px;">Berhubungan dengan data diatas
                dan hasil survey lokasi secara langsung, maka kami dari Tim Bina Rumah Online (BRO) menawarkan jasa kami
                sebagaimana terlampir di dalam Proposal Design dan Estimasi Biaya.</p>
            <p style="margin-left: 40px">Adapun keunggulan Bina Rumah Online (BRO) yang kami
                tawarkan ke bapak / ibu dalam menggunakan jasa kami, yaitu:</p>

            <p style="margin-left: 80px;">
                <b>Legalitas Jelas</b>, Sehingga dana bapak/ibu aman. <br> <br>
                <b>Berkualitas</b></>,kami didukung oleh tenaga ahli professional. <br> <br>
                <b>Transparansi</b>, dapat membuat bapak/ibu nyaman. <br> <br>
                <b>Bergaransi</b>, kami memberikan garansi sehingga bapak/ibu tenang. <br>
            </p>

            <p class="content-text" style="margin-left: 40px">Demikian yang dapat kami sampaikan, atas perhatiannya kami
                ucapkan terimakasih</p>

            <div class="signature" style="margin-left:350px">
                <p style="text-align: center">Hormat Kami,</p>
                <img style="margin-left: 40px" src="{{ public_path('images/signature.png') }}" width="100px"
                    alt=""> <br>
                <p style="text-align: center"> <b> <em>Azhari Zaki Al Qadri, ST</em></b>
                    CEO Bina Rumah Online (BRO)</p>

            </div>
        </div>
    </div>

</body>

</html>
