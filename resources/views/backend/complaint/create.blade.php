@extends('backend.layout.app')
@section('title', 'Teklif Oluştur')
@section('content')
    <form method="post" action="{{ route('sikayet.store') }}">
        @csrf
        <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <h4 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Şikayet Oluştur
                    </h4>
                </div>
                <div class="d-flex justify-content-between">
                    <a class="btn btn-primary btn-sm me-1" href="{{  url()->previous() }}" title="Geri">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 18v-6a3 3 0 0 0 -3 -3h-10l4 -4m0 8l-4 -4" /></svg>
                        Geri
                    </a>
                </div>
            </div>

            <div class="p-2">



                <x-form-inputtext label="Şikayet Numarası" name="sikayet_numarasi" id="input"/>
                <x-form-inputtext label="Hangi Kurum" name="nereye"/>
                <x-form-inputtext label="Hangi Bölüm" name="kime"/>

                <x-form-inputtext label="SMS Başlık" name="baslik"/>
                <x-form-inputtext label="Firma Adı" name="firma"/>
                <x-form-inputtext label="Ad Soyad" name="adsoyad"/>
                <x-form-inputtext label="Adres" name="adres"/>
                <x-form-inputtext label="Vergi Daire" name="vergidaire"/>
                <x-form-inputtext label="Vergi NO" name="vergino"/>
                <x-form-inputtext label="Telefon" name="telefon"/>
                <x-form-inputtext label="E-mail" name="email"/>

                <div class="row">
                    <div class="col-3">
                        Şikayet İçeriği
                    </div>
                    <div class="col-9">
                        <textarea label="Açıklama" name="text" id="aciklama">
                            Tarafımıza göndermiş olduğunuz -------------------------- sayı numaralı Bilgi ve Belge Talebi konulu yazınıza istinaden istemiş olduğunuz bilgiler ekte tarafınıza sunulmuştur.

                            <br><p style="text-align:right">Saygılarımızla.</p>
                        </textarea >

                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-10">Teklif Oluştur</button>

        </div>
    </div>
    </form>
@endsection

@section('customJS')
    <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
    <script type="text/javascript">

        let input = document.querySelector('#input');
        let info = document.querySelector('#no');
        function eventController(event) {
            info.innerHTML = event.target.value;
        }
        input.addEventListener('change', eventController, false)


        CKEDITOR.replace( 'aciklama', {
            height : 400,
            toolbar: [
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold']},
                { name: 'paragraph',items: [ 'BulletedList']},
                { name: 'colors', items: [ 'TextColor' ]},
                { name: 'styles', items: [ 'Format', 'FontSize','JustifyLeft', 'JustifyRight', 'JustifyCenter', 'JustifyBlock']},
                { name: 'links', items : [ 'Link', 'Unlink'] },
                { name: 'insert', items : [ 'Image', 'Table']},
                { name: 'document', items : [ 'Source','Maximize' ]},
                { name: 'clipboard', items : [ 'PasteText', 'PasteFromWord' ]},
            ],
        });


    </script>
@endsection
