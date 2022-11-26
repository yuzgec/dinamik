@extends('frontend.layout.app')

@section('content')
    <div class="bixol-breadcrumb" data-background="/frontend/images/banner.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>Api Dökümantasyonu</h1>
                <a href="{{ route('home') }}">Anasayfa <i class="fas fa-angle-double-right"></i></a>
                <a href="#">Kurumsal <i class="fas fa-angle-double-right"></i></a>
                <span>Api</span>
            </div>
        </div>
    </div>


    <section class="service-details pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sr-sidebar">

                        <div class="sidebar-widget sr-list-widget">
                            <div class="widget-title">
                                <h5>Kullanım Örnekleri</h5>
                            </div>
                            <div class="list-nav">
                                <ul>
                                    <li><a href="#">PHP Kullanım Örneği</a></li>
                                    <li><a href="#">Java Kullanım Örneği</a></li>
                                    <li><a href="#">C# Kullanım Örneği</a></li>
                                    <li><a href="#">Pyhton Kullanım Örneği</a></li>
                                    <li><a href="#">Javascript Kullanım Örneği</a></li>
                                </ul>
                            </div>
                        </div>

                        @include('frontend.layout.sozlesme')

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="sr-details-content">
                        <div class="pera-text mt-20">
                            <h3><span style="font-size:13pt">Hata Kodları</span></h3>

                            <p><span >&Ouml;nceden tanımlı hata kodları aşağıdaki tabloda ayrıntılarıyla verilmiştir.</span></p>

                            <p><strong><span >HATA KODU A&Ccedil;IKLAMA</span></strong></p>

                            <table  style="border-collapse:collapse; border:none">
                                <tbody>
                                <tr>
                                    <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:91px">
                                        <p><span >01</span></p>
                                    </td>
                                    <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:523px">
                                        <p><span >&nbsp;Hatalı Kullanıcı Adı, Şifre yada Bayi Kodu</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="">
                                        <p><span >02</span></p>
                                    </td>
                                    <td >
                                        <p><span >&nbsp;Yetersiz Kredi / &Ouml;denmemiş Fatura Borcu</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="">
                                        <p><span >03</span></p>
                                    </td>
                                    <td >
                                        <p><span >&nbsp;Tanımsız Action Parametresi</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="">
                                        <p><span >05</span></p>
                                    </td>
                                    <td >
                                        <p><span >&nbsp;Xml D&uuml;ğ&uuml;m&uuml; Eksik yada Hatalı</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="">
                                        <p><span >06</span></p>
                                    </td>
                                    <td >
                                        <p><span >&nbsp;Tanımsız Orginator</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="">
                                        <p><span >07</span></p>
                                    </td>
                                    <td >
                                        <p><span >&nbsp;Mesaj Kodu (ID) yok</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="">
                                        <p><span >09</span></p>
                                    </td>
                                    <td >
                                        <p><span >&nbsp;Tarih alanları hatalı</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="">
                                        <p><span >10</span></p>
                                    </td>
                                    <td >
                                        <p><span >&nbsp;Sms G&ouml;nderilemedi</span></p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <p>&nbsp;</p>

                            <h3><span style="font-size:13pt">Kullanıcı bilgileri kontrol&uuml;</span></h3>

                            <p><span >&Ouml;rnek Kullanıcı Bilgileri Kontrol&uuml; i&ccedil;in hazırlanmış XML ifadesi</span></p>

                            <p>&nbsp;</p>
                            <code>
                            <p><span >&lt;UserControl&gt;</span></p>

                            <p><span >&lt;UserName&gt;test-2222&lt;/UserName&gt;</span></p>

                            <p><span >&lt;PassWord&gt;test&lt;/PassWord&gt;</span></p>

                            <p><span >&lt;Action&gt;4&lt;/Action&gt;</span></p>

                            <p><span >&lt;/UserControl&gt;</span></p>
                            </code>
                            <p>&nbsp;</p>

                            <p><span >Yukarıdaki XML ifadesinde:</span></p>

                            <p><span >&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;, kullanıcı adınız, kullanıcıadı-bayikodu şeklinde girilecektir. </span></p>

                            <p><span >&lt;PassWord&gt; parametre d&uuml;ğ&uuml;m&uuml;,şifreniz,</span></p>

                            <p><span >&lt;Action&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilen XML ifadesinin hangi işlev i&ccedil;in g&ouml;nderildiği bilgisini ifade eder.</span></p>

                            <p><span >&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;ne değişken aktarılırken parametre değeri kullanıcıadı-bayikodu şeklinde </span></p>

                            <p><span >olmalıdır.</span></p>

                            <p>&nbsp;</p>

                            <p><span >XML ifadesini bir XMLHTTP isteği oluşturup Gateway&rsquo;a g&ouml;nderdiğinizde aşağıdaki geri d&ouml;n&uuml;ş değerlerini alırsınız:</span></p>

                            <p><span >1. İşlem başarılıysa:</span></p>

                            <p><span >Kont&ouml;r ve originator bilgileri gelir</span></p>

                            <p><span >15</span></p>

                            <p><span >Test1</span></p>

                            <p><span >Test2 </span></p>

                            <p><span >şeklinde</span></p>

                            <p>&nbsp;</p>

                            <p><span >Not: Originator bilgisi SMS g&ouml;nderimlerinizde hedef GSM numarasının &ldquo;G&ouml;nderen&rdquo; kısmında &ccedil;ıkacak olan bilgiyi </span></p>

                            <p><span >ifade etmektedir. Bu bilgi 11 karakterlik n&uuml;merik ya da alfa n&uuml;merik karakterlerden oluşan (T&uuml;rk&ccedil;e ve &amp;,&lt;,&gt; gibi &ouml;zel </span></p>

                            <p><span >karakterler i&ccedil;ermeyen) bir ifade olabilir.</span></p>

                            <p>&nbsp;</p>

                            <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>

                            <h2><span style="font-size:14pt">SMS G&Ouml;NDERİMİ</span></h2>

                            <p><span >SingleTextSMS ; Aynı mesaj metnini bir yada birden fazla GSM numarasına g&ouml;ndermek i&ccedil;in kullanılır.</span></p>

                            <p><span >MultiTextSMS ; Farklı mesaj metinlerini farklı GSM numaralarına g&ouml;ndermek i&ccedil;in kullanılır.</span></p>

                            <p><span >Bu her iki XML ifadesinde de karakter uzunluğu standart 160 karakter olup, 160 karakteri ge&ccedil;en mesajlarda giden </span></p>

                            <p><span >her mesajın uzunluğu 153 karaktere d&uuml;şmektedir.</span></p>

                            <p>&nbsp;</p>

                            <h3><span style="font-size:13pt">SingleTextSMS</span></h3>

                            <p><span >Aşağıdaki &ouml;rnekte SingleTextSMS XML ifadesi g&ouml;sterilmektedir.</span></p>

                            <p>&nbsp;</p>
                            <code>
                            <p><span >SingleTextSMS XML ifadesi &ouml;rneği :</span></p>

                            <p><span >&lt;SingleTextSMS&gt;</span></p>

                            <p><span >&lt;UserName&gt;test-2222&lt;/UserName&gt;</span></p>

                            <p><span >&lt;PassWord&gt;test&lt;/PassWord&gt;</span></p>

                            <p><span >&lt;Action&gt;0&lt;/Action&gt;</span></p>

                            <p><span >&lt;Mesgbody&gt;deneme mesaj metni&lt;/Mesgbody&gt;</span></p>

                            <p><span >&lt;Numbers&gt;5321234567,5551234567,5441234567&lt;/Numbers&gt;</span></p>

                            <p><span >&lt;Originator&gt;test&lt;/Originator&gt;</span></p>

                            <p><span >&lt;SDate&gt;240320130930&lt;/SDate&gt;</span></p>

                            <p><span >&lt;ExDate&gt;240320131030&lt;/ExDate&gt;</span></p>

                            <p><span >&lt;/SingleTextSMS&gt;</span></p>
                            </code>
                            <p>&nbsp;</p>

                            <p><span >Yukarıdaki XML ifadesinde;</span></p>

                            <p><span >&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml; kullanıcı adınızı,</span></p>

                            <p><span >&lt;PassWord&gt; parametre d&uuml;ğ&uuml;m&uuml;, şifrenizi,</span></p>

                            <p><span >&lt;Action&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilen XML ifadesinin hangi işlev i&ccedil;in g&ouml;nderildiği bilgisini,</span></p>

                            <p><span >&lt;Mesgbody&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilecek mesaj i&ccedil;eriğini,</span></p>

                            <p><span >&lt;Numbers&gt; parametre d&uuml;ğ&uuml;m&uuml;, mesajın g&ouml;nderileceği GSM numaralarını,</span></p>

                            <p><span >&lt;Originator&gt; parametre d&uuml;ğ&uuml;m&uuml;, mesajın g&ouml;nderildiği GSM numarasında g&ouml;nderen kısmında &ccedil;ıkacak ifadeyi,</span></p>

                            <p><span >&lt;SDate&gt; parametre d&uuml;ğ&uuml;m&uuml;, G&uuml;nAyYılSaatDakika şeklinde g&ouml;nderim zamanını ifade eder.</span></p>

                            <p><span >&lt;ExDate&gt; parametre d&uuml;ğ&uuml;m&uuml;, G&uuml;nAyYılSaatDakika şeklinde g&ouml;nderim zamanının bitimini ifade eder.</span></p>

                            <p><span >&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;ne değişken aktarılırken parametre değeri kullanıcıadı-bayikodu şeklinde </span></p>

                            <p><span >olmalıdır. </span></p>

                            <p><span >&lt;Originator&gt; parametre d&uuml;ğ&uuml;m&uuml;ne herhangi bir değer girmezseniz kullanıcıya ait tanımlanmış olan ilk Originator </span></p>

                            <p><span >bilgisi kullanılır.</span></p>

                            <p><span >&lt;SDate&gt; parametre d&uuml;ğ&uuml;m&uuml;ne bir değer girmezseniz mesaj g&ouml;nderim işlemi hemen başlar. Bir değer belirtirseniz </span></p>

                            <p><span >mesaj g&ouml;nderim işlemi o tarih,saat,dakika yapılır.</span></p>

                            <p><span >&lt;ExDate&gt; parametre d&uuml;ğ&uuml;m&uuml;ne bir değer girmezseniz mesaj iletme işlemi standart olarak 24saat devam eder. Bir </span></p>

                            <p><span >değer belirtirseniz mesaj g&ouml;nderim işlemi o tarih,saat,dakika sonlandırılır.</span></p>

                            <p><span >XML ifadesi Gateway&rsquo;a ulaştığında iki &ccedil;eşit geri d&ouml;n&uuml;ş değeri alınır:</span></p>

                            <p><span >1. İşlem başarılıysa: &ldquo;ID: 27765&rdquo; şeklinde mesaj g&ouml;nderim paketine ait ID bilgisi d&ouml;ner.</span></p>

                            <p>&nbsp;</p>

                            <p><strong><span style="font-size:13pt">MultiTextSMS</span></strong></p>

                            <p><span >Aşağıdaki &ouml;rnekte MultiText XML ifadesi g&ouml;sterilmektedir.</span></p>

                            <p>&nbsp;</p>

                            <p><span >&Ouml;rnek 5.2.1 - MultiTextSMS XML ifadesi &ouml;rneği :</span></p>
                            <code>
                            <p><span >&lt;MultiTextSMS&gt;</span></p>

                            <p><span >&lt;UserName&gt;test-2222&lt;/UserName&gt;</span></p>

                            <p><span >&lt;PassWord&gt;test&lt;/PassWord&gt;</span></p>

                            <p><span >&lt;Action&gt;1&lt;/Action&gt;</span></p>

                            <p><span >&lt;Messages&gt;</span></p>

                            <p><span >&lt;Message&gt;</span></p>

                            <p><span >&lt;Mesgbody&gt;deneme mesaj metni 1&lt;/Mesgbody&gt;</span></p>

                            <p><span >&lt;Number&gt;5321234567&lt;/Number&gt;</span></p>

                            <p><span >&lt;/Message&gt;</span></p>

                            <p><span >&lt;Message&gt;</span></p>

                            <p><span >&lt;Mesgbody&gt;deneme mesaj metni 2&lt;/Mesgbody&gt;</span></p>

                            <p><span >&lt;Number&gt;5551234567&lt;/Number&gt;</span></p>

                            <p><span >&lt;/Message&gt;</span></p>

                            <p><span >&lt;/Messages&gt;</span></p>

                            <p><span >&lt;Originator&gt;Ntest&lt;/Originator&gt;</span></p>

                            <p><span >&lt;SDate&gt;240320110930&lt;/SDate&gt;</span></p>

                            <p><span >&lt;ExDate&gt;240320111030&lt;/ExDate&gt;</span></p>

                            <p><span >&lt;/MultiTextSMS&gt;</span></p>
                            </code>
                            <p>&nbsp;</p>

                            <p><span >Yukarıdaki XML ifadesinde;</span></p>

                            <p><span >&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;, kullanıcı adınızı,</span></p>

                            <p><span >&lt;PassWord&gt; parametre d&uuml;ğ&uuml;m&uuml;, şifrenizi,</span></p>

                            <p><span >&lt;Action&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilen XML ifadesinin hangi işlev i&ccedil;in g&ouml;nderildiği bilgisini,</span></p>

                            <p><span >&lt;Mesgbody&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilecek mesaj i&ccedil;eriğini,</span></p>

                            <p><span >&lt;Numbers&gt; parametre d&uuml;ğ&uuml;m&uuml;, mesajın g&ouml;nderileceği GSM numaralarını,</span></p>

                            <p><span >&lt;Originator&gt; parametre d&uuml;ğ&uuml;m&uuml;, mesajın g&ouml;nderildiği GSM numarasında g&ouml;nderen kısmında &ccedil;ıkacak ifadeyi,</span></p>

                            <p><span >&lt;SDate&gt; parametre d&uuml;ğ&uuml;m&uuml;, G&uuml;nAyYılSaatDakika şeklinde g&ouml;nderim zamanını ifade eder.</span></p>

                            <p><span >&lt;ExDate&gt; parametre d&uuml;ğ&uuml;m&uuml;, G&uuml;nAyYılSaatDakika şeklinde g&ouml;nderim zamanının bitimini ifade eder.</span></p>

                            <p><span >&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;ne değişken aktarılırken parametre değeri kullanıcıadı-bayikodu şeklinde </span></p>

                            <p><span >olmalıdır. </span></p>

                            <p><span >&lt;Originator&gt; parametre d&uuml;ğ&uuml;m&uuml;ne herhangi bir değer girmezseniz kullanıcıya ait tanımlanmış olan ilk Originator </span></p>

                            <p><span >bilgisi kullanılır.</span></p>

                            <p><span >&lt;SDate&gt; parametre d&uuml;ğ&uuml;m&uuml;ne bir değer girmezseniz mesaj g&ouml;nderim işlemi hemen baslar. Bir değer belirtirseniz </span></p>

                            <p><span >mesaj g&ouml;nderim işlemi o tarih,saat,dakika yapılır.</span></p>

                            <p><span >&lt;ExDate&gt; parametre d&uuml;ğ&uuml;m&uuml;ne bir değer girmezseniz mesaj iletme işlemi standart olarak 24saat devam eder. Bir </span></p>

                            <p><span >değer belirtirseniz mesaj g&ouml;nderim işlemi o tarih,saat,dakika sonlandırılır.</span></p>

                            <p><span >XML ifadesi Gateway&rsquo;a ulaştığında iki &ccedil;eşit geri d&ouml;n&uuml;ş değeri alınır:</span></p>

                            <p><span >1. İşlem başarılıysa: &ldquo;ID: 27765&rdquo; şeklinde mesaj g&ouml;nderim paketine ait Id bilgisi d&ouml;ner.</span></p>

                            <p>&nbsp;</p>

                            <h2><strong><span style="font-size:14pt">RAPORLAMA</span></strong></h2>

                            <p><span >Tarih Bazında Rapor ; İki tarih arasında yapılan SMS g&ouml;nderimlerinin toplu halde raporlanmasında kullanılır.</span></p>

                            <p><span >ID Bazında Rapor ; Bir SMS paketine ait mesaj g&ouml;nderim hareketlerini raporlamada kullanılır.</span></p>

                            <p>&nbsp;</p>

                            <h3><strong><span style="font-size:13pt">Tarih Bazında Rapor</span></strong></h3>

                            <p><span >Aşağıdaki &ouml;rnekte tarih bazında rapor i&ccedil;in gereken XML ifadesi g&ouml;sterilmektedir.</span></p>

                            <p>&nbsp;</p>

                            <p><span >&Ouml;rnek Tarih bazında rapor i&ccedil;in gerekli XML ifadesi :</span></p>
                            <code>
                            <p><span >&lt;DateReport&gt;</span></p>

                            <p><span >&lt;UserName&gt;test-2222&lt;/UserName&gt;</span></p>

                            <p><span >&lt;PassWord&gt;test&lt;/PassWord&gt;</span></p>

                            <p><span >&lt;Action&gt;2&lt;/Action&gt;</span></p>

                            <p><span >&lt;fdate&gt;24032013&lt;/fdate&gt;</span></p>

                            <p><span >&lt;ldate&gt;01052013&lt;/ldate&gt;</span></p>

                            <p><span >&lt;/DateReport&gt;</span></p>
                                </code>
                            <p>&nbsp;</p>

                            <p><span >Yukarıdaki XML ifadesinde;</span></p>

                            <p><span >&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;, kullanıcı adınızı,</span></p>

                            <p><span >&lt;PassWord&gt; parametre d&uuml;ğ&uuml;m&uuml; şifrenizi,</span></p>

                            <p><span >&lt;Action&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilen XML ifadesinin hangi işlev i&ccedil;in g&ouml;nderildiği bilgisini,</span></p>

                            <p><span >&lt;fdate&gt; parametre d&uuml;ğ&uuml;m&uuml;, raporun başlangı&ccedil; tarihini (G&uuml;nAyYıl),</span></p>

                            <p><span >&lt;ldate&gt; parametre d&uuml;ğ&uuml;m&uuml;, raporun bitiş tarihini (G&uuml;nAyYıl) ifade etmektedir.</span></p>

                            <p><span >&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;ne değişken aktarılırken parametre değeri kullanıcıadı-bayikodu şeklinde </span></p>

                            <p><span >olmalıdır.</span></p>

                            <p><span >XML ifadesi Gateway&rsquo;a ulaştığında iki &ccedil;eşit geri d&ouml;n&uuml;ş değeri alınır:</span></p>

                            <p><span >İşlem başarılıysa: 27765;test;3;02.10.2006 12:26:59</span></p>

                            <p><span >Burada; 1.değer paket numarası;2. değer orginator;3. Sms Adedi;4.Değer tarih ve saat olarak gelir.</span></p>

                            <p>&nbsp;</p>

                            <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>

                            <h3><strong><span style="font-size:13pt">ID Bazında Rapor</span></strong></h3>

                            <p><span >Aşağıdaki &ouml;rnekte ID bazında rapor i&ccedil;in gerekli XML ifadesi g&ouml;sterilmektedir.</span></p>

                            <p>&nbsp;</p>

                            <p><span >&Ouml;rnek 6.2.1 ID Bazında Rapor i&ccedil;in gerekli XML ifadesi :</span></p>
                            <code>
                            <p><span >&lt;SingleReport&gt;</span></p>

                            <p><span >&lt;UserName&gt;test-2222&lt;/UserName&gt;</span></p>

                            <p><span >&lt;PassWord&gt;test&lt;/PassWord&gt;</span></p>

                            <p><span >&lt;Action&gt;3&lt;/Action&gt;</span></p>

                            <p><span >&lt;MsgID&gt;2776325&lt;/MsgID&gt;</span></p>

                            <p><span >&lt;/SingleReport&gt;</span></p>
                            </code>
                            <p>&nbsp;</p>

                            <p><span >Yukarıdaki XML ifadesinde;</span></p>

                            <p><span >&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;, kullanıcı adınızı,</span></p>

                            <p><span >&lt;PassWord&gt; parametre d&uuml;ğ&uuml;m&uuml;, şifrenizi,</span></p>

                            <p><span >&lt;Action&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilen XML ifadesinin hangi işlev i&ccedil;in g&ouml;nderildiği bilgisini, bu bilgi 3 ise sade rapor 6 ise detaylı rapor sunmaktadır.</span></p>

                            <p><span >&lt;MsgID&gt; parametre d&uuml;ğ&uuml;m&uuml;, rapor almak istenilen SMS paketine ait ID bilgisini ifade etmektedir.</span></p>

                            <p><span >&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;ne değişken aktarılırken parametre değeri kullanıcıadı-bayikodu şeklinde </span></p>

                            <p><span >olmalıdır. </span></p>

                            <p><span >XML ifadesi Gateway&rsquo;a ulaştığında iki &ccedil;eşit geri d&ouml;n&uuml;ş değeri alınır:</span></p>

                            <p><span >1. İşlem başarılıysa: </span></p>
                            <code>
                            <p><span >905321234567 1</span></p>

                            <p><span >905551234567 2</span></p>

                            <p><span >905441234567 3</span></p>

                            <p><span >Burada; 12 haneli telefon numarasından sonra gelen değer ; </span></p>

                            <p><span >1 (iletildi)</span></p>

                            <p><span >2 (beklemede)</span></p>

                            <p><span >3 (zaman aşımı)</span></p>

                            <p><span >4 (iletilmedi)</span></p>
                                </code>
                            <p><span >2. Hata oluşmuşsa: Bknz. Hata Kodları</span></p>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
