@extends('frontend.layout.app')
@section('content')
    <div class="bixol-breadcrumb" data-background="/frontend/images/banner.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>Banka Hesap Bilgilerimiz</h1>
                <a href="{{ route('home') }}">Anasayfa <i class="fas fa-angle-double-right"></i></a>
                <a href="#">Kurumsal <i class="fas fa-angle-double-right"></i></a>
                <span>Banka Hesap</span>
            </div>
        </div>
    </div>

    <section class="service-details pt-50 pb-50">
        <div class="container">
            <div class="row">
                <table>
                    <tbody>
                        <thead>
                            <th>
                                Banka
                            </th>
                            <th>
                                IBAN
                            </th>
                            <th>
                                Firma Adı
                            </th>
                        </thead>
                        <tr>
                            <td >
                                <img src="/turkiyefinans.png"  style="width: 150px">
                            </td>
                            <td>
                                <br>TR720020600158026885620001
                            </td>
                            <td class="">
                                <br>DİNAMİK TELEKOMÜNİKASYON BİLİŞİM SİSTEMLERİ SANAYİ VE TİCARET LTD.ŞTİ
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
