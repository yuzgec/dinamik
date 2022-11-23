@extends('frontend.layout.app')

@section('content')


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
                                    @foreach($Pages as $item)
                                        <li>
                                            <a href="{{ route('corporatedetail',$item->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @endforeach
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

                            <p><span style="font-size:12pt">&Ouml;nceden tanımlı hata kodları aşağıdaki tabloda ayrıntılarıyla verilmiştir.</span></p>

                            <p><strong><span style="font-size:12pt">HATA KODU A&Ccedil;IKLAMA</span></strong></p>

                            <table cellspacing="0" class="MsoTableGrid" style="border-collapse:collapse; border:none">
                                <tbody>
                                <tr>
                                    <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:91px">
                                        <p><span style="font-size:12pt">01</span></p>
                                    </td>
                                    <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:523px">
                                        <p><span style="font-size:12pt">&nbsp;Hatalı Kullanıcı Adı, Şifre yada Bayi Kodu</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:91px">
                                        <p><span style="font-size:12pt">02</span></p>
                                    </td>
                                    <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:523px">
                                        <p><span style="font-size:12pt">&nbsp;Yetersiz Kredi / &Ouml;denmemiş Fatura Borcu</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:91px">
                                        <p><span style="font-size:12pt">03</span></p>
                                    </td>
                                    <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:523px">
                                        <p><span style="font-size:12pt">&nbsp;Tanımsız Action Parametresi</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:91px">
                                        <p><span style="font-size:12pt">05</span></p>
                                    </td>
                                    <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:523px">
                                        <p><span style="font-size:12pt">&nbsp;Xml D&uuml;ğ&uuml;m&uuml; Eksik yada Hatalı</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:91px">
                                        <p><span style="font-size:12pt">06</span></p>
                                    </td>
                                    <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:523px">
                                        <p><span style="font-size:12pt">&nbsp;Tanımsız Orginator</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:91px">
                                        <p><span style="font-size:12pt">07</span></p>
                                    </td>
                                    <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:523px">
                                        <p><span style="font-size:12pt">&nbsp;Mesaj Kodu (ID) yok</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:91px">
                                        <p><span style="font-size:12pt">09</span></p>
                                    </td>
                                    <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:523px">
                                        <p><span style="font-size:12pt">&nbsp;Tarih alanları hatalı</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:91px">
                                        <p><span style="font-size:12pt">10</span></p>
                                    </td>
                                    <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:523px">
                                        <p><span style="font-size:12pt">&nbsp;Sms G&ouml;nderilemedi</span></p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <p>&nbsp;</p>

                            <h3><span style="font-size:13pt">Kullanıcı bilgileri kontrol&uuml;</span></h3>

                            <p><span style="font-size:12pt">&Ouml;rnek Kullanıcı Bilgileri Kontrol&uuml; i&ccedil;in hazırlanmış XML ifadesi</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">&lt;UserControl&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt;test-2222&lt;/UserName&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;PassWord&gt;test&lt;/PassWord&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Action&gt;4&lt;/Action&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;/UserControl&gt;</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">Yukarıdaki XML ifadesinde:</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;, kullanıcı adınız, kullanıcıadı-bayikodu şeklinde girilecektir. </span></p>

                            <p><span style="font-size:12pt">&lt;PassWord&gt; parametre d&uuml;ğ&uuml;m&uuml;,şifreniz,</span></p>

                            <p><span style="font-size:12pt">&lt;Action&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilen XML ifadesinin hangi işlev i&ccedil;in g&ouml;nderildiği bilgisini ifade eder.</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;ne değişken aktarılırken parametre değeri kullanıcıadı-bayikodu şeklinde </span></p>

                            <p><span style="font-size:12pt">olmalıdır.</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">XML ifadesini bir XMLHTTP isteği oluşturup Gateway&rsquo;a g&ouml;nderdiğinizde aşağıdaki geri d&ouml;n&uuml;ş değerlerini alırsınız:</span></p>

                            <p><span style="font-size:12pt">1. İşlem başarılıysa:</span></p>

                            <p><span style="font-size:12pt">Kont&ouml;r ve originator bilgileri gelir</span></p>

                            <p><span style="font-size:12pt">15</span></p>

                            <p><span style="font-size:12pt">Test1</span></p>

                            <p><span style="font-size:12pt">Test2 </span></p>

                            <p><span style="font-size:12pt">şeklinde</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">Not: Originator bilgisi SMS g&ouml;nderimlerinizde hedef GSM numarasının &ldquo;G&ouml;nderen&rdquo; kısmında &ccedil;ıkacak olan bilgiyi </span></p>

                            <p><span style="font-size:12pt">ifade etmektedir. Bu bilgi 11 karakterlik n&uuml;merik ya da alfa n&uuml;merik karakterlerden oluşan (T&uuml;rk&ccedil;e ve &amp;,&lt;,&gt; gibi &ouml;zel </span></p>

                            <p><span style="font-size:12pt">karakterler i&ccedil;ermeyen) bir ifade olabilir.</span></p>

                            <p>&nbsp;</p>

                            <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>

                            <h2><span style="font-size:14pt">SMS G&Ouml;NDERİMİ</span></h2>

                            <p><span style="font-size:12pt">SingleTextSMS ; Aynı mesaj metnini bir yada birden fazla GSM numarasına g&ouml;ndermek i&ccedil;in kullanılır.</span></p>

                            <p><span style="font-size:12pt">MultiTextSMS ; Farklı mesaj metinlerini farklı GSM numaralarına g&ouml;ndermek i&ccedil;in kullanılır.</span></p>

                            <p><span style="font-size:12pt">Bu her iki XML ifadesinde de karakter uzunluğu standart 160 karakter olup, 160 karakteri ge&ccedil;en mesajlarda giden </span></p>

                            <p><span style="font-size:12pt">her mesajın uzunluğu 153 karaktere d&uuml;şmektedir.</span></p>

                            <p>&nbsp;</p>

                            <h3><span style="font-size:13pt">SingleTextSMS</span></h3>

                            <p><span style="font-size:12pt">Aşağıdaki &ouml;rnekte SingleTextSMS XML ifadesi g&ouml;sterilmektedir.</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">SingleTextSMS XML ifadesi &ouml;rneği :</span></p>

                            <p><span style="font-size:12pt">&lt;SingleTextSMS&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt;test-2222&lt;/UserName&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;PassWord&gt;test&lt;/PassWord&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Action&gt;0&lt;/Action&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Mesgbody&gt;deneme mesaj metni&lt;/Mesgbody&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Numbers&gt;5321234567,5551234567,5441234567&lt;/Numbers&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Originator&gt;test&lt;/Originator&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;SDate&gt;240320130930&lt;/SDate&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;ExDate&gt;240320131030&lt;/ExDate&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;/SingleTextSMS&gt;</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">Yukarıdaki XML ifadesinde;</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml; kullanıcı adınızı,</span></p>

                            <p><span style="font-size:12pt">&lt;PassWord&gt; parametre d&uuml;ğ&uuml;m&uuml;, şifrenizi,</span></p>

                            <p><span style="font-size:12pt">&lt;Action&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilen XML ifadesinin hangi işlev i&ccedil;in g&ouml;nderildiği bilgisini,</span></p>

                            <p><span style="font-size:12pt">&lt;Mesgbody&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilecek mesaj i&ccedil;eriğini,</span></p>

                            <p><span style="font-size:12pt">&lt;Numbers&gt; parametre d&uuml;ğ&uuml;m&uuml;, mesajın g&ouml;nderileceği GSM numaralarını,</span></p>

                            <p><span style="font-size:12pt">&lt;Originator&gt; parametre d&uuml;ğ&uuml;m&uuml;, mesajın g&ouml;nderildiği GSM numarasında g&ouml;nderen kısmında &ccedil;ıkacak ifadeyi,</span></p>

                            <p><span style="font-size:12pt">&lt;SDate&gt; parametre d&uuml;ğ&uuml;m&uuml;, G&uuml;nAyYılSaatDakika şeklinde g&ouml;nderim zamanını ifade eder.</span></p>

                            <p><span style="font-size:12pt">&lt;ExDate&gt; parametre d&uuml;ğ&uuml;m&uuml;, G&uuml;nAyYılSaatDakika şeklinde g&ouml;nderim zamanının bitimini ifade eder.</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;ne değişken aktarılırken parametre değeri kullanıcıadı-bayikodu şeklinde </span></p>

                            <p><span style="font-size:12pt">olmalıdır. </span></p>

                            <p><span style="font-size:12pt">&lt;Originator&gt; parametre d&uuml;ğ&uuml;m&uuml;ne herhangi bir değer girmezseniz kullanıcıya ait tanımlanmış olan ilk Originator </span></p>

                            <p><span style="font-size:12pt">bilgisi kullanılır.</span></p>

                            <p><span style="font-size:12pt">&lt;SDate&gt; parametre d&uuml;ğ&uuml;m&uuml;ne bir değer girmezseniz mesaj g&ouml;nderim işlemi hemen başlar. Bir değer belirtirseniz </span></p>

                            <p><span style="font-size:12pt">mesaj g&ouml;nderim işlemi o tarih,saat,dakika yapılır.</span></p>

                            <p><span style="font-size:12pt">&lt;ExDate&gt; parametre d&uuml;ğ&uuml;m&uuml;ne bir değer girmezseniz mesaj iletme işlemi standart olarak 24saat devam eder. Bir </span></p>

                            <p><span style="font-size:12pt">değer belirtirseniz mesaj g&ouml;nderim işlemi o tarih,saat,dakika sonlandırılır.</span></p>

                            <p><span style="font-size:12pt">XML ifadesi Gateway&rsquo;a ulaştığında iki &ccedil;eşit geri d&ouml;n&uuml;ş değeri alınır:</span></p>

                            <p><span style="font-size:12pt">1. İşlem başarılıysa: &ldquo;ID: 27765&rdquo; şeklinde mesaj g&ouml;nderim paketine ait ID bilgisi d&ouml;ner.</span></p>

                            <p>&nbsp;</p>

                            <p><strong><span style="font-size:13pt">MultiTextSMS</span></strong></p>

                            <p><span style="font-size:12pt">Aşağıdaki &ouml;rnekte MultiText XML ifadesi g&ouml;sterilmektedir.</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">&Ouml;rnek 5.2.1 - MultiTextSMS XML ifadesi &ouml;rneği :</span></p>

                            <p><span style="font-size:12pt">&lt;MultiTextSMS&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt;test-2222&lt;/UserName&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;PassWord&gt;test&lt;/PassWord&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Action&gt;1&lt;/Action&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Messages&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Message&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Mesgbody&gt;deneme mesaj metni 1&lt;/Mesgbody&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Number&gt;5321234567&lt;/Number&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;/Message&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Message&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Mesgbody&gt;deneme mesaj metni 2&lt;/Mesgbody&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Number&gt;5551234567&lt;/Number&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;/Message&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;/Messages&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Originator&gt;Ntest&lt;/Originator&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;SDate&gt;240320110930&lt;/SDate&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;ExDate&gt;240320111030&lt;/ExDate&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;/MultiTextSMS&gt;</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">Yukarıdaki XML ifadesinde;</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;, kullanıcı adınızı,</span></p>

                            <p><span style="font-size:12pt">&lt;PassWord&gt; parametre d&uuml;ğ&uuml;m&uuml;, şifrenizi,</span></p>

                            <p><span style="font-size:12pt">&lt;Action&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilen XML ifadesinin hangi işlev i&ccedil;in g&ouml;nderildiği bilgisini,</span></p>

                            <p><span style="font-size:12pt">&lt;Mesgbody&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilecek mesaj i&ccedil;eriğini,</span></p>

                            <p><span style="font-size:12pt">&lt;Numbers&gt; parametre d&uuml;ğ&uuml;m&uuml;, mesajın g&ouml;nderileceği GSM numaralarını,</span></p>

                            <p><span style="font-size:12pt">&lt;Originator&gt; parametre d&uuml;ğ&uuml;m&uuml;, mesajın g&ouml;nderildiği GSM numarasında g&ouml;nderen kısmında &ccedil;ıkacak ifadeyi,</span></p>

                            <p><span style="font-size:12pt">&lt;SDate&gt; parametre d&uuml;ğ&uuml;m&uuml;, G&uuml;nAyYılSaatDakika şeklinde g&ouml;nderim zamanını ifade eder.</span></p>

                            <p><span style="font-size:12pt">&lt;ExDate&gt; parametre d&uuml;ğ&uuml;m&uuml;, G&uuml;nAyYılSaatDakika şeklinde g&ouml;nderim zamanının bitimini ifade eder.</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;ne değişken aktarılırken parametre değeri kullanıcıadı-bayikodu şeklinde </span></p>

                            <p><span style="font-size:12pt">olmalıdır. </span></p>

                            <p><span style="font-size:12pt">&lt;Originator&gt; parametre d&uuml;ğ&uuml;m&uuml;ne herhangi bir değer girmezseniz kullanıcıya ait tanımlanmış olan ilk Originator </span></p>

                            <p><span style="font-size:12pt">bilgisi kullanılır.</span></p>

                            <p><span style="font-size:12pt">&lt;SDate&gt; parametre d&uuml;ğ&uuml;m&uuml;ne bir değer girmezseniz mesaj g&ouml;nderim işlemi hemen baslar. Bir değer belirtirseniz </span></p>

                            <p><span style="font-size:12pt">mesaj g&ouml;nderim işlemi o tarih,saat,dakika yapılır.</span></p>

                            <p><span style="font-size:12pt">&lt;ExDate&gt; parametre d&uuml;ğ&uuml;m&uuml;ne bir değer girmezseniz mesaj iletme işlemi standart olarak 24saat devam eder. Bir </span></p>

                            <p><span style="font-size:12pt">değer belirtirseniz mesaj g&ouml;nderim işlemi o tarih,saat,dakika sonlandırılır.</span></p>

                            <p><span style="font-size:12pt">XML ifadesi Gateway&rsquo;a ulaştığında iki &ccedil;eşit geri d&ouml;n&uuml;ş değeri alınır:</span></p>

                            <p><span style="font-size:12pt">1. İşlem başarılıysa: &ldquo;ID: 27765&rdquo; şeklinde mesaj g&ouml;nderim paketine ait Id bilgisi d&ouml;ner.</span></p>

                            <p>&nbsp;</p>

                            <h2><strong><span style="font-size:14pt">RAPORLAMA</span></strong></h2>

                            <p><span style="font-size:12pt">Tarih Bazında Rapor ; İki tarih arasında yapılan SMS g&ouml;nderimlerinin toplu halde raporlanmasında kullanılır.</span></p>

                            <p><span style="font-size:12pt">ID Bazında Rapor ; Bir SMS paketine ait mesaj g&ouml;nderim hareketlerini raporlamada kullanılır.</span></p>

                            <p>&nbsp;</p>

                            <h3><strong><span style="font-size:13pt">Tarih Bazında Rapor</span></strong></h3>

                            <p><span style="font-size:12pt">Aşağıdaki &ouml;rnekte tarih bazında rapor i&ccedil;in gereken XML ifadesi g&ouml;sterilmektedir.</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">&Ouml;rnek Tarih bazında rapor i&ccedil;in gerekli XML ifadesi :</span></p>

                            <p><span style="font-size:12pt">&lt;DateReport&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt;test-2222&lt;/UserName&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;PassWord&gt;test&lt;/PassWord&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Action&gt;2&lt;/Action&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;fdate&gt;24032013&lt;/fdate&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;ldate&gt;01052013&lt;/ldate&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;/DateReport&gt;</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">Yukarıdaki XML ifadesinde;</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;, kullanıcı adınızı,</span></p>

                            <p><span style="font-size:12pt">&lt;PassWord&gt; parametre d&uuml;ğ&uuml;m&uuml; şifrenizi,</span></p>

                            <p><span style="font-size:12pt">&lt;Action&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilen XML ifadesinin hangi işlev i&ccedil;in g&ouml;nderildiği bilgisini,</span></p>

                            <p><span style="font-size:12pt">&lt;fdate&gt; parametre d&uuml;ğ&uuml;m&uuml;, raporun başlangı&ccedil; tarihini (G&uuml;nAyYıl),</span></p>

                            <p><span style="font-size:12pt">&lt;ldate&gt; parametre d&uuml;ğ&uuml;m&uuml;, raporun bitiş tarihini (G&uuml;nAyYıl) ifade etmektedir.</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;ne değişken aktarılırken parametre değeri kullanıcıadı-bayikodu şeklinde </span></p>

                            <p><span style="font-size:12pt">olmalıdır.</span></p>

                            <p><span style="font-size:12pt">XML ifadesi Gateway&rsquo;a ulaştığında iki &ccedil;eşit geri d&ouml;n&uuml;ş değeri alınır:</span></p>

                            <p><span style="font-size:12pt">İşlem başarılıysa: 27765;test;3;02.10.2006 12:26:59</span></p>

                            <p><span style="font-size:12pt">Burada; 1.değer paket numarası;2. değer orginator;3. Sms Adedi;4.Değer tarih ve saat olarak gelir.</span></p>

                            <p>&nbsp;</p>

                            <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>

                            <h3><strong><span style="font-size:13pt">ID Bazında Rapor</span></strong></h3>

                            <p><span style="font-size:12pt">Aşağıdaki &ouml;rnekte ID bazında rapor i&ccedil;in gerekli XML ifadesi g&ouml;sterilmektedir.</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">&Ouml;rnek 6.2.1 ID Bazında Rapor i&ccedil;in gerekli XML ifadesi :</span></p>

                            <p><span style="font-size:12pt">&lt;SingleReport&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt;test-2222&lt;/UserName&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;PassWord&gt;test&lt;/PassWord&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;Action&gt;3&lt;/Action&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;MsgID&gt;2776325&lt;/MsgID&gt;</span></p>

                            <p><span style="font-size:12pt">&lt;/SingleReport&gt;</span></p>

                            <p>&nbsp;</p>

                            <p><span style="font-size:12pt">Yukarıdaki XML ifadesinde;</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;, kullanıcı adınızı,</span></p>

                            <p><span style="font-size:12pt">&lt;PassWord&gt; parametre d&uuml;ğ&uuml;m&uuml;, şifrenizi,</span></p>

                            <p><span style="font-size:12pt">&lt;Action&gt; parametre d&uuml;ğ&uuml;m&uuml;, g&ouml;nderilen XML ifadesinin hangi işlev i&ccedil;in g&ouml;nderildiği bilgisini, bu bilgi 3 ise sade rapor 6 ise detaylı rapor sunmaktadır.</span></p>

                            <p><span style="font-size:12pt">&lt;MsgID&gt; parametre d&uuml;ğ&uuml;m&uuml;, rapor almak istenilen SMS paketine ait ID bilgisini ifade etmektedir.</span></p>

                            <p><span style="font-size:12pt">&lt;UserName&gt; parametre d&uuml;ğ&uuml;m&uuml;ne değişken aktarılırken parametre değeri kullanıcıadı-bayikodu şeklinde </span></p>

                            <p><span style="font-size:12pt">olmalıdır. </span></p>

                            <p><span style="font-size:12pt">XML ifadesi Gateway&rsquo;a ulaştığında iki &ccedil;eşit geri d&ouml;n&uuml;ş değeri alınır:</span></p>

                            <p><span style="font-size:12pt">1. İşlem başarılıysa: </span></p>

                            <p><span style="font-size:12pt">905321234567 1</span></p>

                            <p><span style="font-size:12pt">905551234567 2</span></p>

                            <p><span style="font-size:12pt">905441234567 3</span></p>

                            <p><span style="font-size:12pt">Burada; 12 haneli telefon numarasından sonra gelen değer ; </span></p>

                            <p><span style="font-size:12pt">1 (iletildi)</span></p>

                            <p><span style="font-size:12pt">2 (beklemede)</span></p>

                            <p><span style="font-size:12pt">3 (zaman aşımı)</span></p>

                            <p><span style="font-size:12pt">4 (iletilmedi)</span></p>

                            <p><span style="font-size:12pt">2. Hata oluşmuşsa: Bknz. Hata Kodları</span></p>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
