<div>
    <h4 id="error"><b>Etrafta her şey error, ne yapmalıyım? / Oyuna giremiyorum, ana menüye atıyor?</b></h4>
    <div class="alert alert-danger" role="alert">
        <strong>Missing Map</strong> Hatası alıyor iseniz <a href="#tab0" data-bs-toggle="tab"
                                                             role="tab"
                                                             aria-controls="tab4">Özel içerik
            indirme</a>
        göz atınız.
    </div>
    <p>Gerekli workshopları indirdiğinizden emin olunuz.</p>
    <div class="content-ref-box">
        <p>
            <a id="baslarkenBox" href="#" target="_blank">
                <i class="fa-regular fa-hand"></i> DarkRP Başlarken - Gerekli Eklentiler ve Ayarlar
            </a>
        </p>
    </div>
    <br>
    <p>Eğer workshopların <b class="text-primary-emphasis">hepsini indirmenize</b> rağmen <b
                class="text-danger">error</b> alıyorsanız veya ana menüye dönüyorsa, deneyebileceğiniz birkaç yöntem
        bulunmaktadır. Bunlar şunlardır:</p>

    <div class="accordion" id="faqAccordion">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-primary-emphasis" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                    Özel İçerikleri indirme
                </button>
            </h2>
            <div id="collapse0" class="accordion-collapse collapse" aria-labelledby="heading0"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/gmod_dosya.png" alt="Garry's Mod Ayarları"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <ol>
                                <li>Garry's mod açın</li>
                                <li>Ayarlar menüsüne Gelin</li>
                                <li>"Oyun sunucusu bilgisayarınıza özel içerik indirmeyi denediğinde" kısmın altındaki
                                    butona gelin
                                </li>
                                <li>"Sunucudaki özel dosyaları indir" seçiniz.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-success-emphasis" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    Oyun Dosyası Doğrulama
                </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <ol>
                                <li>İlk önce Steam kütüphanesine geliniz.</li>
                                <li>Garry's Mod bulup sağ tıklayın.</li>
                                <li>Özellikler...</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png" alt="Steam Yüklü Dosyalar"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <ol start="4">
                                <li>Yüklü Dosyalar sekmesine gidin.</li>
                                <li>"Oyun dosyaların bütünlüğünü doğrula" butonuna tıklayın.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-warning" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    Cache Klasörünü Silme
                </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <ol>
                                <li>Steam kütüphanesine gelin.</li>
                                <li>Garry's Mod'a sağ tıklayın ve Özellikler'i seçin.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png" alt="Steam Yüklü Dosyalar"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <ol start="4">
                                <li>Yüklü Dosyalar</li>
                                <li>"Göz at..." tıklayın.</li>
                                <li>"garrysmod" klasörüne gidiniz.</li>
                                <li>"cache" klasörünü siliniz.</li>
                                <li>"download" klasörü var ise siliniz.</li>
                                <li>"downloadlist" klasörü var ise siliniz.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-warning-emphasis" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    GPUCache Klasörünü Silme
                </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    <div class="row">
                        <br>
                        <div class="alert alert-danger" role="alert">
                            Eğer ana menüye atıyor ve ya oyun aniden kapanıyor ise deneyiniz.
                        </div>
                        <br>
                        <div class="col-md-6 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <ol>
                                <li>Steam kütüphanesine gidin ve Garry's Mod'a sağ tıklayın.</li>
                                <li>Özellikler'i seçin ve Yüklü Dosyalar sekmesine gidin.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png" alt="Steam Yüklü Dosyalar"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <ol start="4">
                                <li>"Göz at..." tıklayın.</li>
                                <li>Yüklü Dosyalar</li>
                                <li>"Göz at..." tıklayın.</li>
                                <li>"ChromiumCache" ve "GPUCache" klasörleri varsa silin.</li>
                                <li>"crashes" klasörü ve "chromium.log" dosyaları varsa silin.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-info-emphasis" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    İnternet bağlantınızı kontrol edin
                </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    <div class="row">
                        <br>
                        <div class="alert alert-danger" role="alert">
                            Eğer ana menüye atıyor ise deneyiniz.
                        </div>
                        <br>
                        <div class="col">
                            <p>Yavaş bağlantınız var ise sunucu ile iletişim kurmak uzun sürecektir bu yüzden oyunun ana
                                menüsüne düşüyor olabilirsiniz bunu çözmek için </p>
                            <ol>
                                <li>Hızlı ve Stabil İnternet bağlantısına geçiniz</li>
                                <li>VPN, Proxy kullanıyor iseniz bunlarda hızınızı yavaşlatıcaktır devre dışı
                                    bırakınız
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-danger" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    Fabrika Ayarlarına Sıfırlama
                </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    <div class="row">
                        <br>
                        <div class="alert alert-warning" role="alert">
                            Bu işlemi yaptığınızda tüm workshoplarınız, config dosyalarınız data dosyalarınız,
                            workshop/server workshoplarınız cacheleri silinecektir. Workshoplar aboneliklerinize göre
                            tekrar yüklenecektir.
                        </div>
                        <br>
                        <div class="col-md-6 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <ol>
                                <li>Steam kütüphanesine gelin ve Garry's Mod'a sağ tıklayın.</li>
                                <li>Özellikler'den Yüklü Dosyalar sekmesine gidin.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png" alt="Steam Yüklü Dosyalar"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <ol start="4">
                                <li>Yüklü Dosyalar</li>
                                <li>"Göz at..." tıklayın.</li>
                                <li>"FactoryReset-Gmod" dosyasına çift tıklayın.</li>
                                <li>Y/N sorusuna "Y" yazınız.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-danger-emphasis" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    Garry's Mod silip tekrar yükleme
                </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <ol>
                                <li>Steam kütüphanesine gelin ve Garry's Mod'a sağ tıklayın.</li>
                                <li>Özellikler'den Yüklü Dosyalar sekmesine gidin.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png" alt="Steam Yüklü Dosyalar"
                                 class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <ol start="4">
                                <li>Yüklü Dosyalar</li>
                                <li>"Göz at..." tıklayın.</li>
                                <li>Buradaki herşeyi siliniz</li>
                                <li>Ardından Steam kütüphanesine gelin ve Garry's Mod'a sağ tıklayın.</li>
                                <li>"Yönet" tıklayın ve "Kaldır" diyip oyunu tekrar yükleyiniz.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div>
    <h4 id="gpumemory"><b>"This typically means you are running out of Video Memory on your GPU" hatası
            alıyorum?</b></h4>

    <li>
        <a href="https://support.microsoft.com/tr-tr/topic/en-son-directx-s%C3%BCr%C3%BCm%C3%BCn%C3%BC-y%C3%BCkleme-d1f5ffa5-dae2-246c-91b1-ee1e973ed8c2#:~:text=DirectX%2C%20Windows'da%20bulunan%2C,%C3%A7al%C4%B1%C5%9Fmas%C4%B1n%C4%B1%20sa%C4%9Flayan%20bir%20bile%C5%9Fen%20k%C3%BCmesidir."
           target="_blank"> DirectX</a> güncel olduğundan emin olunuz.
    </li>
    <li>Ekran kartınızın sürücü güncel olduğundan emin olunuz</li>
    <li>Garry's Mod Sistem gereksinimlerini karşıladığından emin olunuz.</li>
</div>
<hr>

<div>
    <h4 id="modeldetayi">Oyunda görüntüler kesik kesik; bir taraf var, bir taraf yok. Görüntüler iç içe
        girmiş. Ne yapmam gerekiyor?</h4>
    <p>ESC tuşuna basınız, ardından "Oyun Ayarları"na basınız. Görüntü kısmına gelerek "Gelişmiş"e
        tıklayınız ve ardından "Model Detayları"nı yüksek seviyeye ayarlayınız. Ancak, bu değişikliği
        yaptığınızda oyundan donup kapanabilir. O yüzden bu değişikliği yaparken üzerinde Bio-organ vb
        kullanmamış olmanızı öneririz.</p>
</div>

<hr>
<div>
    <h4 id="console"><b>Konsol/Console Nedir?</b></h4>
    <p>oyuncuların oyun içindeki komutları girerek çeşitli işlemler yapmalarını sağlayan bir araçtır. Bu
        konsol sayesinde oyun ayarlarını değiştirmek, hata ayıklamak gibi işlemler
        gerçekleştirilebilir.</p>
</div>
<hr>

<div>
    <h4 id="tus"><b>Tuşlarım çalışmıyor, neden?</b></h4>
    <p>Bir problem oluşmuş olabilir, oyun ayarlarından klavye menüsüne gelerek varsayılan düzeye geçip
        sorunu kontrol edebilirsiniz.</p>
    <p>Eğer sorun çözülmez ise konsolu (é tuşu) açınız ve aşağıdaki komutları yazınız.</p>
    <pre><code>unbindall
exec config_default.cfg
</code></pre>
</div>
<hr>
<div>
    <h4 id="mikrofon"><b>Oyunda sesim diğer oyunculara gitmiyor, ne yapmalıyım?</b></h4>
    <p>İlk önce oyun ayarlarından iletişim sekmesinden mikrofonunuzu test etmelisiniz. Ardından mikrofon
        ayarlarına girip Steam arayüzüne yönlendirecek ve orada mikrofonunuzu seçmelisiniz. Test
        yaptığınız
        halde ses gitmiyorsa, Windows ayarlarınızdan kontrol etmeniz gerekebilir. Sanal mikrofon
        uygulamaları varsa bunları devre dışı bırakıp tekrar deneyiniz.</p>
</div>
<hr>
<div>
    <h4 id="adminyok"><b>Oyunda yetkili yok ve oyuncudan şikayetçiyim. Ne yapmalıyım?</b></h4>
    <p>Gerekli delilleri toplayarak Discord'da bir destek talebi (ticket) açabilirsiniz.</p>
</div>
<hr>
<div>
    <h4 id="bantemyiz"><b>Sunucudan uzaklaştırıldım, nasıl itiraz edebilirim?</b></h4>
    <p>MoonGaming™ Discord sunucusuna gelip ticket açmanız gerekmektedir.</p>
</div>
<hr>
<div>
    <h4 id="admin"><b>Yetkili nasıl olabilirim?</b></h4>
    <p>Yetkili olabilmek için <a id="adminbasvuru"
                                 href="#">başvuru</a>
        yapmanız gerekmektedir. Başvurunuz olumlu sonuçlanırsa geri dönüş yapılacaktır.</p>

    <h5><b>Red edildiğimi nereden öğrenebilirim?</b></h5>
    <p>Başvuru sayısı fazla olduğundan dolayı maalesef red edilenlere dönüş yapılmamaktadır. 1 hafta
        içinde
        dönüş yapılmazsa başvurunuz red edilmiştir.</p>
</div>