@extends('backend.layout.app')
@section('title', 'Şablon Listele')
@section('content')
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <h4 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Şablon Listesi [{{ $All->count() }}]
                    </h4>
                </div>
                <div class="d-flex justify-content-between">
                    <a class="btn btn-primary btn-sm me-1" href="{{  url()->previous() }}" title="Geri">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 18v-6a3 3 0 0 0 -3 -3h-10l4 -4m0 8l-4 -4" /></svg>
                        Geri
                    </a>
                    <a class="btn btn-primary btn-sm me-1" href="{{ route('sablon.create') }}" title="S.S.S. Ekle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Şablon Ekle
                    </a>
                </div>
            </div>

            <div class="table-responsive p-2">
                <table class="table table-hover table-striped table-bordered table-center">
                    <thead>
                        <tr>
                            <th>Başlık</th>
                            <th>Durum</th>
                            <th class="d-none d-lg-table-cell">Oluşturma Tarihi</th>
                            <th class="d-none d-lg-table-cell"></th>
                        </tr>
                    </thead>
                    <tbody id="orders">
                    @foreach($All as $item)
                    <tr id="page_{{$item->id}}">

                        <td>
                            <div class="font-weight-medium">{{ $item->title }}</div>
                        </td>
                        <td class="text-center">
                            <label class="form-check form-check-single form-switch">
                                <input class="form-check-input switch" status-id="{{ $item->id }}"  type="checkbox" @if ($item->status == 1) checked @endif>
                            </label>
                        </td>
                        <td class="d-none d-lg-table-cell">
                            {{ $item->created_at->diffForHumans() }}
                        </td>
                        <td>

                            <a class="" href="{{ route('sablon.edit', $item->id) }}" title="Düzenle">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" /><path d="M16 5l3 3" /><path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999" /></svg>
                                Düzenle
                            </a>

                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection

@section('customJS')
    <script>
        $(document).ready(function() {
            $('.switch').change(function() {
                const id = $(this)[0].getAttribute('status-id');
                const status = $(this).prop('checked');

                $.get("{{route('sablon.onoff')}}", {id:id,status:status},
                    () => {
                        if(status) {}
                    });
            })
        })
    </script>
@endsection
