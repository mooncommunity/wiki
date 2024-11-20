<div>
    <div>
        <h2 class="standartcolor" id="teknik">Teknik Sorunlar</h2>
        <p>Oyunu oynarken her zaman düzgün çalışmıyabiliyor. O yüzden bir sorunla karşılaştığımızda
            bu sorunları çözmemiz gerekiyor.</p>
        <br>
        <div>
            <h3 class="standartcolor" id="error"><b>Etrafta her şey error, ne
                    yapmalıyım? <?= $darkRPContent ? "/ Herkesin Elleri Yukarıda" : "" ?> / Bazı karakterler
                    gözükmüyor</b></h3>
            <p>Gerekli workshopları indirdiğinizden emin olunuz.</p>
            <div class="content-ref-box">
                <p>
                    <a id="baslarkenBox"
                       href="<?= $baseUrl ?>/<?= $darkRPContent ? 'darkrp-baslarken' : ($tttContent ? 'ttt-baslarken' : '') ?>#gerekli-eklentiler-ve-ayarlar"
                       target="_blank">
                        <i class="<?= $darkRPContent ? 'fa-regular fa-hand' : ($tttContent ? 'fa-solid fa-graduation-cap' : '') ?>"></i>
                        <?= $darkRPContent ? 'DarkRP' : ($tttContent ? 'TTT' : '') ?>
                        Başlarken - Gerekli Eklentiler ve Ayarlar
                    </a>
                </p>
            </div>
            <br>
            <p>Eğer workshopların <b class="text-primary-emphasis">hepsini indirmenize</b> rağmen <b
                        class="text-danger">error</b> alıyorsanız deneyebileceğiniz birkaç
                yöntem
                bulunmaktadır. Bunlar şunlardır:</p>

            <div class="alert alert-danger" role="alert">
                <span><strong>Missing Map</strong> Hatası alıyor iseniz <span
                            class="text-primary-emphasis">Özel İçerikleri indirme</span>
                göz atınız.</span>
            </div>

            <div class="accordion" id="errorAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="text-teal accordion-button collapsed" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorTwoWorkshop" aria-expanded="true">
                            Sadece MoonGaming Workshoplarını İndirme
                        </button>
                    </h2>
                    <div id="collapseErrorTwoWorkshop" class="accordion-collapse collapse"
                         data-bs-parent="#errorAccordion">
                        <div class="accordion-body">
                            <div class="row">

                                <div class="col-12">
                                    <p> Sorun bize ait olmıyan workshoplarınız var ise ondan kaynaklı
                                        olabilir. Bu
                                        Durumda bize ait olmıyan workshopları kaldırmanız gerekmekte. </p>
                                    <ul style="list-style-type: '* '">
                                        <li>
                                            <a href=" <?= $darkRPContent ? $darkrp_workshop : ($tttContent ? $ttt_workshop : '') ?>">Workshop</a>
                                            gidelim.
                                        </li>
                                        <li>"<i class="fa-solid fa-plus"></i> Hepsine abone ol" basalım</li>
                                        <li>"Aboneliklerimin Üzerine Yaz" basalım.</li>
                                        <li>Eksik addon/eklentileri kontrol edelim bazı eklentiler ekleyemiyor steam.
                                        </li>
                                        <p>Addon/Eklentilerin sağında <i class="fa-solid fa-plus"></i> işareti var ise
                                            abone olunmamış demektir. <i class="fa-solid fa-check"></i> işareti var ise
                                            abone olunmuş demektir. </p>
                                    </ul>
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-primary-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorContentDownload" aria-expanded="true">
                            Özel İçerikleri indirme
                        </button>
                    </h2>
                    <div id="collapseErrorContentDownload" class="accordion-collapse collapse"
                         data-bs-parent="#errorAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/gmod_dosya.png" alt="Garry's Mod Ayarları"
                                         class="img-fluid img-zoom">
                                </div>
                                <div class="col-md-6">
                                    <ol>
                                        <li>Garry's mod açın</li>
                                        <li>Ayarlar menüsüne Gelin</li>
                                        <li>"Oyun sunucusu bilgisayarınıza özel içerik indirmeyi denediğinde" kısmın
                                            altındaki
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
                        <button class="accordion-button collapsed text-success-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorSteamGameCheck" aria-expanded="false">
                            Oyun Dosyası Doğrulama
                        </button>
                    </h2>
                    <div id="collapseErrorSteamGameCheck" class="accordion-collapse collapse"
                         data-bs-parent="#errorAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                         class="img-fluid img-zoom">
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
                                    <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png"
                                         alt="Steam Yüklü Dosyalar"
                                         class="img-fluid img-zoom">
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
                                data-bs-target="#collapseErrorCacheFolder" aria-expanded="false">
                            Cache Klasörünü Silme
                        </button>
                    </h2>
                    <div id="collapseErrorCacheFolder" class="accordion-collapse collapse"
                         data-bs-parent="#errorAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                         class="img-fluid img-zoom">
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
                                    <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png"
                                         alt="Steam Yüklü Dosyalar"
                                         class="img-fluid img-zoom">
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
                        <button class="accordion-button collapsed text-danger" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorFactoryReset" aria-expanded="false">
                            Fabrika Ayarlarına Sıfırlama
                        </button>
                    </h2>
                    <div id="collapseErrorFactoryReset" class="accordion-collapse collapse"
                         data-bs-parent="#errorAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <br>
                                <div class="alert alert-warning" role="alert">
                                    Bu işlemi yaptığınızda tüm workshoplarınız, config dosyalarınız data dosyalarınız,
                                    workshop/server workshoplarınız cacheleri silinecektir. Workshoplar aboneliklerinize
                                    göre
                                    tekrar yüklenecektir.
                                </div>
                                <br>
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                         class="img-fluid img-zoom">
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
                                    <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png"
                                         alt="Steam Yüklü Dosyalar"
                                         class="img-fluid img-zoom">
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
                        <button class="accordion-button collapsed text-danger-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorReInstall" aria-expanded="false">
                            Garry's Mod silip tekrar yükleme
                        </button>
                    </h2>
                    <div id="collapseErrorReInstall" class="accordion-collapse collapse"
                         data-bs-parent="#errorAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                         class="img-fluid img-zoom">
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
                                    <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png"
                                         alt="Steam Yüklü Dosyalar"
                                         class="img-fluid img-zoom">
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
        <br>
        <div>
            <h3 class="standartcolor" id="brokendownload">Steam'de Garry's Mod indirirken 'Bozuk İndirme' hatası
                alıyorum, nasıl
                çözebilirim?</h3>
            <div class="accordion" id="brokendownloadAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-success-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#brokendownloadcollapse1" aria-expanded="false"
                                aria-controls="brokendownloadcollapse1">
                            Önbelleği Temizleme
                        </button>
                    </h2>
                    <div id="brokendownloadcollapse1" class="accordion-collapse collapse"
                         aria-labelledby="brokendownloadheading1"
                         data-bs-parent="#brokendownloadAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <br>
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/steam_menu_ayarlar.png" alt="Steam Ayarları"
                                         class="img-fluid img-zoom">
                                </div>
                                <div class="col-md-6">
                                    <ol>
                                        <li>Menüden "Steam" seçiniz.</li>
                                        <li>"Ayarlar" tıklayınız.</li>
                                    </ol>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/steam_menu_ayarlar_indirmeler.png"
                                             alt="Steam Ayarlar - İndirmeler"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol start="4">
                                            <li>İndirmeler sekmesine gidin.</li>
                                            <li>"Önbelleği Temizle" basınız.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-primary-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#brokendownloadcollapse2" aria-expanded="false"
                                aria-controls="brokendownloadcollapse2">
                            İndirme Bölgesi Değiştirme
                        </button>
                    </h2>
                    <div id="brokendownloadcollapse2" class="accordion-collapse collapse"
                         aria-labelledby="brokendownloadheading2"
                         data-bs-parent="#brokendownloadAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <br>
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/steam_menu_ayarlar.png" alt="Steam Ayarları"
                                         class="img-fluid img-zoom">
                                </div>
                                <div class="col-md-6">
                                    <ol>
                                        <li>Menüden "Steam" seçiniz.</li>
                                        <li>"Ayarlar" tıklayınız.</li>
                                    </ol>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/steam_menu_ayarlar_indirmeler_1.png"
                                             alt="Steam Ayarlar - İndirmeler"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol start="4">
                                            <li>İndirmeler sekmesine gidin.</li>
                                            <li>"İndirme bölgesini" değiştiriniz</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="menuerror"><b>Ana Menüye düşüyorum / Oyun aniden kapanıyor</b></h3>
            <p>Deneyebileceğiniz birkaç yöntem bulunmaktadır. Bunlar şunlardır:</p>

            <div class="accordion" id="errorMenuAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-teal" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorMenuNetworkProblem" aria-expanded="true">
                            İnternet Bağlantınızı Kontrol Edin
                        </button>
                    </h2>
                    <div id="collapseErrorMenuNetworkProblem" class="accordion-collapse collapse"
                         data-bs-parent="#errorMenuAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <br>
                                <div class="alert alert-danger" role="alert">
                                    Eğer ana menüye atıyor ise deneyiniz.
                                </div>
                                <br>
                                <div class="col">
                                    <p>Yavaş bağlantınız var ise sunucu ile iletişim kurmak uzun sürecektir bu yüzden
                                        oyunun ana
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
                        <button class="accordion-button collapsed text-primary-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorMenuSystemReq" aria-expanded="true">
                            Sistem Gereksinimlerini Karşılıyor mu?
                        </button>
                    </h2>
                    <div id="collapseErrorMenuSystemReq" class="accordion-collapse collapse"
                         data-bs-parent="#errorMenuAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <p>Bilgisayarınız <a href="https://store.steampowered.com/app/4000/Garrys_Mod/" target="_blank">Garry's mod</a> sistem gereksinimlerini karşılamıyor ise sorun bundan kaynaklı olabilir. Bilgisayarınızda düzgün çalışabilmesi için en az önerilen sistem gereksinimlerine sahip olduğundan emin olunuz. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-success-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorMenuSteamGameCheck" aria-expanded="false">
                            Oyun Dosyası Doğrulama
                        </button>
                    </h2>
                    <div id="collapseErrorMenuSteamGameCheck" class="accordion-collapse collapse"
                         data-bs-parent="#errorMenuAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                         class="img-fluid img-zoom">
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
                                    <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png"
                                         alt="Steam Yüklü Dosyalar"
                                         class="img-fluid img-zoom">
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
                        <button class="accordion-button collapsed text-warning-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorMenuGPUCacheFolder" aria-expanded="false">
                            GPUCache Klasörünü Silme
                        </button>
                    </h2>
                    <div id="collapseErrorMenuGPUCacheFolder" class="accordion-collapse collapse"
                         data-bs-parent="#errorMenuAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                         class="img-fluid img-zoom">
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
                                    <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png"
                                         alt="Steam Yüklü Dosyalar"
                                         class="img-fluid img-zoom">
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
                        <button class="accordion-button collapsed text-warning" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorMenuCacheFolder" aria-expanded="false">
                            Cache Klasörünü Silme
                        </button>
                    </h2>
                    <div id="collapseErrorMenuCacheFolder" class="accordion-collapse collapse"
                         data-bs-parent="#errorMenuAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                         class="img-fluid img-zoom">
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
                                    <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png"
                                         alt="Steam Yüklü Dosyalar"
                                         class="img-fluid img-zoom">
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
                        <button class="accordion-button collapsed text-danger" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorMenuFactoryReset" aria-expanded="false">
                            Fabrika Ayarlarına Sıfırlama
                        </button>
                    </h2>
                    <div id="collapseErrorMenuFactoryReset" class="accordion-collapse collapse"
                         data-bs-parent="#errorMenuAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <br>
                                <div class="alert alert-warning" role="alert">
                                    Bu işlemi yaptığınızda tüm workshoplarınız, config dosyalarınız data dosyalarınız,
                                    workshop/server workshoplarınız cacheleri silinecektir. Workshoplar aboneliklerinize
                                    göre
                                    tekrar yüklenecektir.
                                </div>
                                <br>
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                         class="img-fluid img-zoom">
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
                                    <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png"
                                         alt="Steam Yüklü Dosyalar"
                                         class="img-fluid img-zoom">
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
                        <button class="accordion-button collapsed text-danger-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseErrorMenuReInstall" aria-expanded="false">
                            Garry's Mod silip tekrar yükleme
                        </button>
                    </h2>
                    <div id="collapseErrorMenuReInstall" class="accordion-collapse collapse"
                         data-bs-parent="#errorMenuAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="Steam Ayarları"
                                         class="img-fluid img-zoom">
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
                                    <img src="<?= $baseUrl ?>/assets/image/steam_yuklu_dosyalar.png"
                                         alt="Steam Yüklü Dosyalar"
                                         class="img-fluid img-zoom">
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
        <br>
        <div>
            <h3 class="standartcolor" id="gpumemory"><b>"This typically means you are running out of Video Memory on
                    your GPU" hatası
                    alıyorum?</b></h3>
            <ul style="list-style-type: '- '">
                <li>
                    <a href="https://support.microsoft.com/tr-tr/topic/en-son-directx-s%C3%BCr%C3%BCm%C3%BCn%C3%BC-y%C3%BCkleme-d1f5ffa5-dae2-246c-91b1-ee1e973ed8c2#:~:text=DirectX%2C%20Windows'da%20bulunan%2C,%C3%A7al%C4%B1%C5%9Fmas%C4%B1n%C4%B1%20sa%C4%9Flayan%20bir%20bile%C5%9Fen%20k%C3%BCmesidir."
                       target="_blank">DirectX</a> güncel olduğundan emin olunuz.
                </li>
                <li>Ekran kartınızın sürücü güncel olduğundan emin olunuz</li>
                <li>Garry's Mod Sistem gereksinimlerini karşıladığından emin olunuz.</li>
            </ul>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="console"><b>Konsol/Console Nedir?</b></h3>
            <p>oyuncuların oyun içindeki komutları girerek çeşitli işlemler yapmalarını sağlayan bir araçtır. Bu
                konsol sayesinde oyun ayarlarını değiştirmek, hata ayıklamak gibi işlemler
                gerçekleştirilebilir.</p>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="eskitarayici"><b>Eski Tarayıcıyı Nasıl Açarım?</b></h3>
            <div class="accordion" id="oldServerBrowserAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-info-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseoldServerBrowserGraphics" aria-expanded="false">
                            Grafiksel Arayüz ile
                        </button>
                    </h2>
                    <div id="collapseoldServerBrowserGraphics" class="accordion-collapse collapse"
                         data-bs-parent="#oldServerBrowserAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/gmod_menu1.png" alt="Garry's mod menü"
                                         class="img-fluid img-zoom">
                                </div>
                                <div class="col-md-6">
                                    <ol>
                                        <li>"Çevrim içi oyuncu bul" tıklayınız.</li>
                                        <li>"Eski Tarayıcı" tıklayınız.</li>
                                        <li>MoonGaming Sunucusunu aratınız</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-purple" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseoldServerBrowserConsole" aria-expanded="false">
                            Console/Konsol ile
                        </button>
                    </h2>
                    <div id="collapseoldServerBrowserConsole" class="accordion-collapse collapse"
                         data-bs-parent="#oldServerBrowserAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/gmod_console_key.png" alt="Gmod tuş atama"
                                         class="img-fluid img-zoom">
                                </div>
                                <div class="col-md-6">
                                    <ol>
                                        <li>"Ayarlar" gidiniz.</li>
                                        <li>"Klavye" tıklayınız.</li>
                                        <li>"Geliştirici Konsoluna geçiş" bulun ve <kbd>é</kbd> tuşunu
                                            atayınız.
                                        </li>
                                        <li>Uygula basınız.</li>
                                        <li><kbd>é</kbd> tuşuna basarak konsolu açınız</li>
                                        <li>
                                            <code>gamemenucommand openserverbrowser</code> yazınız.
                                        </li>
                                        <li>MoonGaming Sunucusunu aratınız</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="ip"><b><?php if ($darkRPContent) {
                        echo "DarkRP";
                    } elseif ($tttContent) {
                        echo "TTT";
                    } ?> Sunucusu gözükmüyor ne yapmam lazım?</b></h3>
            <div class="accordion" id="ipAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-danger-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseIPNetworkProblem" aria-expanded="false">
                            İnternet bağlantınızı kontrol edin
                        </button>
                    </h2>
                    <div id="collapseIPNetworkProblem" class="accordion-collapse collapse"
                         data-bs-parent="#ipAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col">
                                    <p>Yavaş bağlantınız var ise sunucu ve sunucu listeleriyle iletişim kurmak uzun
                                        sürecektir bunu çözmek için </p>
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
                        <button class="accordion-button collapsed text-info-emphasis" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseIPConsole" aria-expanded="false">
                            Konsol kullanarak bağlanın
                        </button>
                    </h2>
                    <div id="collapseIPConsole" class="accordion-collapse collapse"
                         data-bs-parent="#ipAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/gmod_console_key.png" alt="Gmod tuş atama"
                                         class="img-fluid img-zoom">
                                </div>
                                <div class="col-md-6">
                                    <ol>
                                        <li>"Ayarlar" gidiniz.</li>
                                        <li>"Klavye" tıklayınız.</li>
                                        <li>"Geliştirici Konsoluna geçiş" bulun ve <kbd>é</kbd> tuşunu
                                            atayınız.
                                        </li>
                                        <li>Uygula basınız.</li>
                                        <li><kbd>é</kbd> tuşuna basarak konsolu açınız</li>
                                        <li>
                                            <code>connect <?= $darkRPContent ? $darkrp_ip : ($tttContent ? $ttt_ip : '') ?></code>
                                            yazınız.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-purple" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseIPDNS" aria-expanded="false">
                            DNS Önbelleğini temizleyin ve DNS Değiştirin
                        </button>
                    </h2>
                    <div id="collapseIPDNS" class="accordion-collapse collapse"
                         data-bs-parent="#ipAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <img src="<?= $baseUrl ?>/assets/image/windows_powershell.png"
                                         alt="Windows Powershell"
                                         class="img-fluid img-zoom">
                                </div>
                                <div class="col-md-6">
                                    <ol>
                                        <li>"Windows Powershell" gidiniz.</li>
                                        <li>Aşağıdaki komutu yazınız.</li>
                                        <code>ipconfig /flushdns</code>
                                    </ol>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/windows_denetim_ag.png"
                                             alt="denetim masası"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol start="3">
                                            <li>"Denetim Masası" gidiniz.</li>
                                            <li>"Ağ ve Internet" gidiniz.</li>
                                            <li>"Ağ ve Paylaşım Merkezi" gidiniz.</li>
                                            <li>Mevcut internet bağlantınızın üzerine tıklayın.</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/windows_denetim_dns.png"
                                             alt="dns ayarları"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol start="7">
                                            <li>"Özellikler" butonuna tıklayın.</li>
                                            <li>İnternet Protokolü Sürüm 4 (TCP/IPv4)’ü seçin ve "Özellikler" butonuna
                                                tıklayın.
                                            </li>
                                            <li>Yeni DNS adresini girin.</li>
                                            <small>Örneğin: 1.1.1.1 , 8.8.8.8</small>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-teal" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseIPOldBrowser" aria-expanded="false">
                            Eski Tarayıcı ile açmayı deneyin
                        </button>
                    </h2>
                    <div id="collapseIPOldBrowser" class="accordion-collapse collapse"
                         data-bs-parent="#ipAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col">
                                    <p>Eski Tarayıcı nasıl açıcağınızı bilmiyor iseniz <a style="text-decoration: none;"
                                                                                          href="#eskitarayici">Eski
                                            Tarayıcı</a> Kısmına bakınız.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-secondary" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseIPSteam" aria-expanded="false">
                            Steam Sunucuları çalışıyor mu?
                        </button>
                    </h2>
                    <div id="collapseIPSteam" class="accordion-collapse collapse"
                         data-bs-parent="#ipAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col">
                                    <p>Steam sunucularında problem var ise oyuna bağlanmaktada sorun yaşıyacaksınızdır.
                                        Steam problem olup olmadığını kontrol ediniz. Ayrıca Steam Her Salı Gece Bakım
                                        yapmakta.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="modeldetayi">Bazı araçlar ve insanlar garip duruyor ve ya hiç gözükmüyor /
                Görüntüler iç içe
                giriyor. Ne Yapmam Gerekiyor?</h3>
            <?php if ($darkRPContent) { ?>
                <p><kbd>ESC</kbd> tuşuna basınız, ardından "Oyun Ayarları"na basınız. "Görüntü" kısmına
                    gelerek "Gelişmiş"e
                    tıklayınız ve ardından "Model Detayı"nı yüksek seviyeye ayarlayınız.
                </p>
                <p>Ancak, bu değişikliği
                    yaptığınızda oyundan donup kapanabilir. O yüzden bu değişikliği yaparken üzerinde Bio-organ vb
                    kullanmamış olmanızı öneririz.</p>
            <?php } ?>
            <?php if ($tttContent) { ?>
                <p><kbd>ESC</kbd> tuşuna basınız, ardından "Ayarlar" basınız. "Görüntü" kısmına gelerek
                    "Gelişmiş"e
                    tıklayınız ve ardından "Model Detayı"nı yüksek seviyeye ayarlayınız.
                </p>
                <p>Ancak, bu değişikliği
                    yaptığınızda oyundan donup kapanabilir. O yüzden bu değişikliği yaparken round çıkmayı göze almanız
                    gerekmekte.</p>
            <?php } ?>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="tus"><b>Tuşlarım çalışmıyor, neden?</b></h3>
            <p>Bir problem oluşmuş olabilir, oyun ayarlarından klavye menüsüne gelerek varsayılan düzeye geçip
                sorunu kontrol edebilirsiniz.</p>
            <p>Eğer sorun çözülmez ise konsolu (<kbd>é</kbd>) açınız ve aşağıdaki komutları yazınız.</p>
            <pre><code>unbindall
exec config_default.cfg
</code></pre>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="mikrofon"><b>Oyunda sesim diğer oyunculara gitmiyor, ne yapmalıyım?</b></h3>
            <p>İlk önce oyun ayarlarından iletişim sekmesinden mikrofonunuzu test etmelisiniz. Ardından mikrofon
                ayarlarına girip Steam arayüzüne yönlendirecek ve orada mikrofonunuzu seçmelisiniz. Test
                yaptığınız
                halde ses gitmiyorsa, Windows ayarlarınızdan kontrol etmeniz gerekebilir. Sanal mikrofon
                uygulamaları varsa bunları devre dışı bırakıp tekrar deneyiniz.</p>
        </div>
        <br>
    </div>
    <?php
    if ($darkRPContent) { ?>
        <div>
            <h2 class="standartcolor" id="erisim">Erişim</h2>
            <p>Erişim sorunları burada yer almaktadır.</p>
            <div>
                <h3 class="standartcolor" id="yurtdisi"><b>Yurtdışından bağlanıyorum, sunucuya nasıl katılırım?</b></h3>
                <p>MoonGaming™ Discord sunucusuna gelip ticket açmanız gerekmektedir.</p>
            </div>
            <div>
                <h3 class="standartcolor" id="ailepaylasimi"><b>Aile Paylaşımı ile sunucuya nasıl katılırım?</b></h3>
                <p>MoonGaming™ Discord sunucusuna gelip ticket açmanız gerekmektedir.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="geforcenow"><b>GeForce Now ile sunucuya nasıl katılırım?</b></h3>
                <p>MoonGaming™ Discord sunucusuna gelip ticket açmanız gerekmektedir.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="geforcenow-beta"><b>GeForce Now'da Garry's Mod nasıl betaya alırım?</b>
                </h3>
                <p>Maalesef, Chromium betasına geçiremezsiniz; GeForce Now bunu desteklememektedir.</p>
            </div>
        </div>
        <br>
    <?php } ?>
    <div>
        <h2 class="standartcolor" id="oyun">Oyun Deneyimi</h2>
        <p>Oyun deneyiminizi iyileştircek bilgi edinebilceğiniz kısımlar burada yer almaktadır.</p>
        <div>
            <h3 class="standartcolor" id="sunucutus">
                <b><?= $darkRPContent ? "F1, F2, F3, F4, M, T" : ($tttContent ? "F1, F8, M, I" : "") ?> gibi
                    tuşları başka tuşa atayabilir miyim?</b></h3>
            <p>Sunucumuza özel tuş atamaları olduğu için değiştiremezsiniz.</p>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="fps"><b>FPS Nasıl Artırabilirim?</b></h3>
            <?php if ($darkRPContent) { ?>
                <p><kbd>ESC</kbd> tuşuna basınız, ardından Menüden FPS Yükseltme seçiniz.
                </p>
            <?php } ?>
            <?php if ($tttContent) { ?>
                <p><kbd>I</kbd> tuşuna basınız, Ayarlar Tıklayınız, FPS Yükseltme Seçiniz
                </p>
            <?php } ?>
        </div>
    </div>