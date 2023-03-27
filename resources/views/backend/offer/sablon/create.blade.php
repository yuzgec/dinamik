@extends('backend.layout.app')
@section('title', 'Şablon Ekle')
@section('content')
    <div class="col-12">
        <div class="card">
            {{Form::open(['route' => 'sablon.store'])}}

                <div class="card-header d-flex justify-content-between">
                    <x-add title="Şablon"></x-add>
                    <div>
                        <x-back></x-back>
                        <x-save></x-save>
                    </div>
                </div>
                <div class="card-body">
                <x-form-inputtext label="Şablon Adı Giriniz" name="title"/>
                <x-form-textarea label="Şablon İçeriği" name="text" />

            </div>
            {{Form::close()}}
        </div>
    </div>

@endsection

@section('customJS')
    <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
    <script type="text/javascript">

        CKEDITOR.replace( 'aciklama', {
            filebrowserUploadUrl: "{{ route('page.postUpload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            height : 250,
            toolbar: [
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold']},
                { name: 'paragraph',items: [ 'BulletedList']},
                { name: 'colors', items: [ 'TextColor' ]},
                { name: 'styles', items: [ 'Format', 'FontSize']},
                { name: 'links', items : [ 'Link', 'Unlink'] },
                { name: 'insert', items : [ 'Image', 'Table']},
                { name: 'document', items : [ 'Source','Maximize' ]},
                { name: 'clipboard', items : [ 'PasteText', 'PasteFromWord' ]},
            ],
        });
    </script>
@endsection
