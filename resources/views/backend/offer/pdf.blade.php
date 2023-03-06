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

        p{
            font-size: 14px;
            letter-spacing: .5px;
            line-height: 15px;
        }
    </style>
</head>
<body>
   <div class="">

       <div>
           <img src="{{ url('backend/pdf/ust.jpg') }}" class="img-fluid" style="margin-top:-55px">
           <div class="d-flex justify-content-end align-content-end">Tarih : {{ \Carbon\Carbon::parse($Detail->created_at)->format('d/m/Y')}}</div>
       </div>

       <div>
           <div style="margin-top:30px">
               <h4>Firma Adı : {{ $Detail->company_name }}</h4>
               <h5>Syn. {{ $Detail->company_officer }}</h5>
           </div>

           <div style="margin-top:20px">
               {!! mb_convert_encoding($Detail->content, 'HTML-ENTITIES', 'UTF-8') !!}
           </div>
       </div>

       <div class="absolute bottom-0">
           <img src="{{ url('backend/pdf/alt.jpg') }}" class="img-fluid" style="margin-top:50px">
       </div>
   </div>

</body>
</html>

