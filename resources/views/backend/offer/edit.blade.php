@extends('backend.layout.app')
@section('title', 'Teklif Oluştur')
@section('content')
    {{Form::model($Edit, ["route" => ["teklif.update", $Edit->id],'enctype' => 'multipart/form-data'])}}
    @method('PUT')
        <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <h4 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Teklif Oluştur
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
                <x-form-inputtext label="Firma Adı" name="company_name"/>
                <x-form-inputtext label="Firma Yetkilisi" name="company_officer"/>
                <x-form-inputtext label="Firma Telefon" name="company_phone"/>
                <x-form-inputtext label="Firma Email" name="company_email"/>
                <div class="row">
                    <div class="col-3">
                        Teklif İçeriği
                    </div>
                    <div class="col-9">
                        <textarea label="Açıklama" name="desc" id="aciklama">

                            {!! $Edit->content  !!}
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

        CKEDITOR.replace( 'aciklama', {
            filebrowserUploadUrl: "{{ route('service.postUpload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            height : 400,
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
