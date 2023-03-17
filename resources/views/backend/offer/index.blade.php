@extends('backend.layout.app')
@section('title', 'Teklif Listele')
@section('content')
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <h4 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Teklif Listesi [{{ $All->total() }}]
                    </h4>
                </div>
                <div class="d-flex justify-content-between">
                    <a class="btn btn-primary btn-sm me-1" href="{{  url()->previous() }}" title="Geri">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 18v-6a3 3 0 0 0 -3 -3h-10l4 -4m0 8l-4 -4" /></svg>
                        Geri
                    </a>
                    <a class="btn btn-primary btn-sm me-1" href="{{ route('teklifolustur') }}" title="Teklif Ekle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Teklif Oluştur
                    </a>
                </div>
            </div>


            <div class="table-responsive p-2">
                <div class="mb-3">
                    <form action="" method="GET">
                        <div class="input-icon mb-3">
                            <input type="text" name="q" value="{{ old('q') }}" class="form-control" placeholder="Arama…">
                            <span class="input-icon-addon">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                            </span>
                        </div>
                    </form>

                </div>
                <table class="table table-hover table-striped table-bordered table-center">
                    <thead>
                    <tr>
                        <th>PDF</th>
                        <th>Firma Adı</th>
                        <th>Firma Yetkili</th>
                        <th>Firma Telefon</th>
                        <th>Firma Email</th>
                        <th class="d-none d-lg-table-cell">Oluşturma Tarihi</th>
                        <th>İşlemler</th>
                        <th class="w-1"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($All as $item)
                        <tr>
                            <td>
                                <a href="{{ url('offer/'.$item->id.'.pdf') }}" target="_blank">Önizle</a>
                            </td>
                            <td>
                                {{ $item->company_name }}
                            </td>
                            <td>
                                {{ $item->company_officer }}
                            </td>

                            <td>
                                {{ $item->company_phone }}
                            </td>
                            <td>
                                {{ $item->company_email }}
                            </td>

                            <td class="d-none d-lg-table-cell">
                                {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}
                            </td>

                            <td class="d-flex">
                                <button class="btn btn-sm btn-secondary" style="margin-right:5px" disabled>SMS</button>
                                <a class="btn btn-sm btn-{{ ($item->send_email == 0) ? 'secondary' : 'success' }}"
                                   href="{{ route('emailGonder', $item->id) }}">E-MAİL</a>
                            </td>
                            <td>
                                <a href="{{ route('teklif.edit', $item->id) }}">Düzenle</a>
                            </td>
                        </tr>
                        <div class="modal modal-blur fade" id="silmeonayi{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Silme Onayı</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Silmek üzeresiniz. Bu işlem geri alınmamaktadır.
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>
                                            İptal Et
                                        </a>
                                        <form action="{{ route('page.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm ms-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                Silmek İstiyorum
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>

                <div class="col-12 col-md-12 mt-3">{{ $All->appends(['siralama' => 'teklif', 'q' => request('q')])->links() }}</div>
            </div>

        </div>
    </div>
@endsection
