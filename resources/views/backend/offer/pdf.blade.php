<!doctype html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $Detail->company_name }} - Fiyat Teklifi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        *{
            font-family:"DeJaVu Sans",monospace;
        }

        body {
            min-height: 100vh;
            min-height: -webkit-fill-available;
        }

        p{
            font-size: 13px;
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
           <div style="margin-top:40px">
               <h2 class="text-center mt-3 mb-2">SMS FİYAT TEKLİFİ</h2>

               <h5 class="text-capitalize">Firma Adı : {{ $Detail->company_name }}</h5>
               <h6 class="text-capitalize" style="margin-top: -10px">Syn. {{ $Detail->company_officer }}</h6>
           </div>

           <div style="margin-top:20px">
               {!! mb_convert_encoding($Detail->content, 'HTML-ENTITIES', 'UTF-8') !!}
           </div>
       </div>

       <div class="footer">
           <img src="{{ url('backend/pdf/alt.jpg?ver=3') }}" class="img-fluid">
       </div>
   </div>

</body>
</html>

