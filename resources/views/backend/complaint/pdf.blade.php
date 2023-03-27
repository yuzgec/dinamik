<!doctype html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $Detail->firma.' | '.$Detail->baslik }} - Şikayet Yazısı</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        *{
            font-family:"DeJaVu Sans",monospace;
            list-style: none !important;
            font-weight: normal !important;
        }

        body {
            min-height: 100vh;
            min-height: -webkit-fill-available;
        }

        p{
            font-size: 14px;
            letter-spacing: .5px;
            line-height: 15px;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
        }

        .header {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
   <div class="">

       <div>
           <img src="{{ url('backend/pdf/ust.jpg?ver=3') }}" class="img-fluid header">
       </div>
       <div class="text-center">Tarih : {{ \Carbon\Carbon::parse($Detail->created_at)->format('d/m/Y')}}</div>

       <div>
           <div style="margin-top:50px">
               <h5 class="text-center mt-3">T.C.</h5>
               <h5 class="text-center">{{ $Detail->kime }}</h5>
               <h5 class="text-center">{{ $Detail->nereye }}</h5>

           </div>

           <div style="margin-top:20px">
               {!! mb_convert_encoding($Detail->text, 'HTML-ENTITIES', 'UTF-8') !!}
           </div>
            <br><br><br>
           <ul>
               <li>Başlık : {{ $Detail->baslik }}</li>
               <li>Firma : {{ $Detail->firma }}</li>
               <li>Ad Soyad : {{ $Detail->adsoyad }}</li>
               <li>VD. : {{ $Detail->vergidaire }}</li>
               <li>VD N0 : {{ $Detail->vergino }}</li>
               <li>Telefon : {{ $Detail->telefon }}</li>
               <li>Email : {{ $Detail->email }}</li>
           </ul>

       </div>

       <div class="footer">
           <img src="{{ url('backend/pdf/alt.jpg?ver=3') }}" class="img-fluid">
       </div>
   </div>

</body>
</html>

