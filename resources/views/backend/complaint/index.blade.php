@extends('backend.layout.app')
@section('title', 'Şikayet Listele')
@section('customCSS')
    <style>

        .btn .icon {
            width: 1.5rem;
            height: 1.5rem;
            color: white;
            margin: 0 0 0 0;
        }
    </style>
@endsection
@section('content')
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <h4 class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Şikayet Listesi [{{ $All->total() }}]
                    </h4>
                </div>
                <div class="d-flex justify-content-between">
                    <a class="btn btn-primary btn-sm me-1" href="{{  url()->previous() }}" title="Geri">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 18v-6a3 3 0 0 0 -3 -3h-10l4 -4m0 8l-4 -4" /></svg>
                        Geri
                    </a>
                    <a class="btn btn-primary btn-sm me-1" href="{{ route('sikayet.create') }}" title="Şikayet Ekle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        Şikayet Oluştur
                    </a>
                </div>
            </div>

            <div class="table-responsive p-2">
                <div class="row">
                    <div class="col-md-10 col-12">
                        <div class="mb-3">
                            <div class="form-label"><small>Arama</small></div>
                            <form action="" method="GET">
                                <div class="input-icon mb-3">
                                    <input type="text" name="q" value="{{ request('q') }}" class="form-control" placeholder="Arama…">
                                    <span class="input-icon-addon">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>
                                    </span>
                                </div>
                                @if(request('q'))
                                <a href="{{ route('sikayet.index') }}" class="btn btn-primary btn-sm">Sıfırla </a>
                                @endif
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2 col-12">
                        <div class="form-label"><small>Listele</small></div>
                        <select name="liste" class="form-select" onchange="location = this.options[this.selectedIndex].value">
                            <option>Listele</option>
                            <option value="{{ url()->current() }}?liste=5" {{ (request('liste') == 5) ? 'selected' : null }}">5</option>
                            <option value="{{ url()->current() }}?liste=15" {{ (request('liste') == 15) ? 'selected' : null }}">15</option>
                            <option value="{{ url()->current() }}?liste=25" {{ (request('liste') == 25) ? 'selected' : null }}">25</option>
                            <option value="{{ url()->current() }}?liste=50" {{ (request('liste') == 50) ? 'selected' : null }}">50</option>
                        </select>
                    </div>
                    {{--<div class="col-md-2 col-12">
                        <div class="form-label"><small>Filtrele</small></div>
                        <select name="filtre" class="form-select" onchange="location = this.options[this.selectedIndex].value">
                            <option> Sıralama</option>
                            <option value="{{ url()->current() }}?filtre=bugun" {{ (request('bugun')) ? 'selected' : null }}">Bugün</option>
                            <option value="{{ url()->current() }}?filtre=dun" {{ (request('dun')) ? 'selected' : null }}">Dün</option>
                            <option value="{{ url()->current() }}?filtre=hafta" {{ (request('hafta') == 25) ? 'selected' : null }}">Haftalık</option>
                            <option value="{{ url()->current() }}?filtre=ay" {{ (request('ay') == 50) ? 'selected' : null }}">Aylık</option>
                            <option value="{{ route('Şikayetler') }}">Hepsi</option>
                        </select>
                    </div>--}}
                <table class="table table-hover table-striped table-bordered table-center">
                    <thead>
                    <tr>
                        <th>PDF</th>
                        <th>Firma</th>
                        <th>Başlık</th>
                        <th>Kime</th>
                        <th>Nereye</th>

                        @if(auth()->user()->is_admin == 2)
                        <th>Temsilci</th>
                        @endif
                        <th class="d-none d-lg-table-cell">Tarihi</th>
                        <th>İşlemler</th>
                        <th class="w-1"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($All as $item)
                        <tr>
                            <td>
                                <a href="{{ url($item->file) }}?ver={{ rand(1,9) }}" target="_blank" title="{{str_replace('complaint/','', $item->file)}}">
                                   @if($item->id%2==0 )
                                    <x-icon.download-black/>
                                   @else
                                    <x-icon.download-white/>
                                   @endif
                                </a>
                            </td>
                            <td>
                                <span class="text-capitalize">{{ $item->sikayet_numarasi }}</span>
                            </td>
                            <td>
                                <span class="text-capitalize">{{ $item->firma }}</span>
                            </td>
                            <td>
                                {{ $item->baslik }}
                            </td>
                            <td>
                                {{ $item->nereye }}
                            </td>
                            <td>
                                {{ $item->kime }}
                            </td>


                            @if(auth()->user()->is_admin == 2)
                            <td>
                                {{ $item->getUser->name }}
                            </td>
                            @endif
                            <td class="d-none d-lg-table-cell">
                                <span title="{{ $item->created_at->diffForHumans() }}">
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}
                                </span>

                            </td>
{{--
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <button class="btn btn-sm btn-secondary" style="margin-right:5px" disabled>
                                        <x-icon.sms/>
                                        @if($item->smsCount > 0)
                                            ({{ $item->smsCount }})
                                        @endif
                                    </button>
                                    <a class="btn btn-sm btn-{{ ($item->send_email == 0) ? 'secondary' : 'success' }} "
                                       href="{{ route('emailGonder', $item->id) }}"
                                       title="Kullanıcıya ({{ $item->emailCount }}) adet email gönderilmiştir. ">
                                        <x-icon.mail/>
                                       --}}{{-- @if($item->emailCount > 0)
                                            ({{ $item->emailCount }})
                                        @endif--}}{{--
                                    </a>
                                </div>

                            </td>--}}
                            <td>
                                <a href="{{ route('sikayet.edit', $item->id) }}"><x-icon.edit/></a>
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

                <div class="col-12 col-md-12 mt-3">{{ $All->appends(['siralama' => 'sikayet', 'liste' => request('liste'), 'q' => request('q')])->links() }}</div>
            </div>

        </div>
    </div>
@endsection
