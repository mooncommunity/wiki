<?php
$AdminBasvuru = $fivem_AdminBasvuru;
?>
<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="standartcolor mb-4">Sıkça Sorulan Sorular</h1>
        <div>
            <h2 class="standartcolor" id="teknik">Teknik Sorunlar</h2>
            <p>Oyunu oynarken her zaman düzgün çalışmıyabiliyor. O yüzden bir sorunla karşılaştığımızda
                bu sorunları çözmemiz gerekiyor.</p>
            <div class="alert alert-info"><span>Aradığınız sorun burada yer almıyor ise <a
                            href="https://docs.fivem.net/docs/support/client-issues/" class="no-text-decoration"> FiveM İstemci Sorunları Dökümanlarına (İngilizce) </a> Bakınız.</span>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="cache"><b>FiveM cache nasıl temizlerim?</b></h3>
                <div class="accordion" id="fivemcacheAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-danger" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapsefivemcacheDelete" aria-expanded="false">
                                Cache Klasörünü Silme
                            </button>
                        </h2>
                        <div id="collapsefivemcacheDelete" class="accordion-collapse collapse"
                             data-bs-parent="#fivemcacheAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/fivem_config_run.png"
                                             alt="Windows Çalıştır Komutu"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol>
                                            <li>FiveM Kapatınız ve <kbd><i class="fa-brands fa-windows"></i></kbd>+<kbd>R</kbd>
                                                tuşlarına
                                                basarak "Çalıştır" uygulamasını açınız.
                                            </li>
                                            <li><code>%localappdata%/FiveM/FiveM.app/data</code> yazınız ve
                                                <kbd>Enter</kbd> basınız.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/fivem_data_folder.png"
                                             alt="FiveM.app Data klasörü"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol start="3">
                                            <li>"cache" klasörünü siliniz.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-purple" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapsefivemcacheServerDelete" aria-expanded="false">
                                Server Cache Klasörünü Silme
                            </button>
                        </h2>
                        <div id="collapsefivemcacheServerDelete" class="accordion-collapse collapse"
                             data-bs-parent="#fivemcacheAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/fivem_config_run.png"
                                             alt="Windows Çalıştır Komutu"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol>
                                            <li>FiveM Kapatınız ve <kbd><i class="fa-brands fa-windows"></i></kbd>+<kbd>R</kbd>
                                                tuşlarına
                                                basarak "Çalıştır" uygulamasını açınız.
                                            </li>
                                            <li><code>%localappdata%/FiveM/FiveM.app/data</code> yazınız ve
                                                <kbd>Enter</kbd> basınız.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/fivem_data_folder.png"
                                             alt="FiveM.app Data klasörü"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol start="3">
                                            <li>"server-cache" klasörünü siliniz.</li>
                                            <li>"server-cache-priv" klasörünü siliniz.</li>
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
                <h3 class="standartcolor" id="steambrokendownload">Steam'de Grand Theft Auto V indirirken 'Bozuk
                    İndirme' hatası
                    alıyorum, nasıl
                    çözebilirim?</h3>
                <div class="accordion" id="steambrokendownloadAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-success-emphasis" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#steambrokendownloadcollapse1" aria-expanded="false"
                                    aria-controls="steambrokendownloadcollapse1">
                                Steam İndirme Önbelleği Temizleme
                            </button>
                        </h2>
                        <div id="steambrokendownloadcollapse1" class="accordion-collapse collapse"
                             aria-labelledby="steambrokendownloadheading1"
                             data-bs-parent="#steambrokendownloadAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/steam_menu_ayarlar.png"
                                             alt="Steam Ayarları"
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
                                    data-bs-target="#steambrokendownloadcollapse2" aria-expanded="false"
                                    aria-controls="steambrokendownloadcollapse2">
                                Steam İndirme Bölgesi Değiştirme
                            </button>
                        </h2>
                        <div id="steambrokendownloadcollapse2" class="accordion-collapse collapse"
                             aria-labelledby="steambrokendownloadheading2"
                             data-bs-parent="#steambrokendownloadAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/steam_menu_ayarlar.png"
                                             alt="Steam Ayarları"
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
                <h3 class="standartcolor" id="steambrokendisk">Steam'de Grand Theft Auto V indirirken 'Disk Yazma'
                    hatası
                    alıyorum, nasıl
                    çözebilirim?</h3>
                <div class="accordion" id="steambrokendiskAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-warning-emphasis" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#steambrokendiskcollapse1" aria-expanded="false"
                                    aria-controls="steambrokendiskcollapse1">
                                Disk Onarma
                            </button>
                        </h2>
                        <div id="steambrokendiskcollapse1" class="accordion-collapse collapse"
                             aria-labelledby="steambrokendiskheading1"
                             data-bs-parent="#steambrokendiskAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/windows_disk_onarma.png"
                                             alt="C: Diski özellikler"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol>
                                            <li>Oyunun kurulu olduğu sürücüye gidiniz.</li>
                                            <li>Sağ tıklayınız ve "Özellikler" basınız.</li>
                                            <li>"Araçlar" sekmesine geliniz ve "Denetle" diyiniz.</li>
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
                                    data-bs-target="#steambrokendiskcollapse2" aria-expanded="false"
                                    aria-controls="steambrokendiskcollapse2">
                                Disk Alan var mı? / Salt Okunur Modda mı?
                            </button>
                        </h2>
                        <div id="steambrokendiskcollapse2" class="accordion-collapse collapse"
                             aria-labelledby="steambrokendiskheading2"
                             data-bs-parent="#steambrokendiskAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <ol>
                                                <li>Yeterli Alan Olduğuna Emin Olunuz.</li>
                                                <li>Eğer SSD kullanıyorsanız Yazma Ömrü dolmuş olabilir.</li>
                                                <li>Eğer HDD kullanıyorsanız donanımsal/yazılımsal olarak Bad Sector
                                                    oluşmuş
                                                    olabilir
                                                </li>
                                            </ol>
                                            <p>Daha fazla bilgi için lütfen arama motorlarını Kullanınız.</p>
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
                <h3 class="standartcolor" id="gtavcheck">Grand Theft Auto V oyun dosyalarını nasıl
                    doğruluyabilirim?</h3>
                <div class="accordion" id="gtavcheckAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="color: #00adee;" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#gtavcheckcollapse1" aria-expanded="false"
                                    aria-controls="gtavcheckcollapse1">
                                Steam
                            </button>
                        </h2>
                        <div id="gtavcheckcollapse1" class="accordion-collapse collapse"
                             aria-labelledby="gtavcheckheading1"
                             data-bs-parent="#gtavcheckAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/steam_gtav_ozellikler.png"
                                             alt="Steam Ayarları"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol>
                                            <li>Steam kütüphanesine gelin.</li>
                                            <li>Grand Theft Auto V'a sağ tıklayın ve Özellikler'i seçin.</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/steam_gtav_yuklu_dosyalar.png"
                                             alt="Steam Yüklü Dosyalar"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol start="3">
                                            <li>Yüklü Dosyalar</li>
                                            <li>"Oyun dosyaların bütünlüğünü doğrula" butonuna tıklayın.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" style="color: #ffcf00;" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#gtavcheckcollapse2" aria-expanded="false"
                                    aria-controls="gtavcheckcollapse2">
                                Rockstar Games
                            </button>
                        </h2>
                        <div id="gtavcheckcollapse2" class="accordion-collapse collapse"
                             aria-labelledby="gtavcheckheading2"
                             data-bs-parent="#gtavcheckAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/rockstargames_yonet.png"
                                             alt="Rockstar Games Launcher"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol>
                                            <li>"Settings" basınız</li>
                                            <li>"My installed games" kısmının altındaki "Grand Theft Auto V" seçiniz
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/rockstargames_ayarlar.png"
                                             alt="Rockstar Games Yüklü Dosyalar"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol start="3">
                                            <li>"Verify game file integrity" yanındaki "verify integrity" basınız</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-white" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#gtavcheckcollapse3" aria-expanded="false"
                                    aria-controls="gtavcheckcollapse3">
                                Epic Games
                            </button>
                        </h2>
                        <div id="gtavcheckcollapse3" class="accordion-collapse collapse"
                             aria-labelledby="gtavcheckheading3"
                             data-bs-parent="#gtavcheckAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/epicgames_yonet.png"
                                             alt="Epic Games Kütüphane"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol>
                                            <li>Epic Games kütüphanesine gelin.</li>
                                            <li>Grand Theft Auto V yanındaki <i class="fa-solid fa-ellipsis"></i>(ellipsis)
                                                tıklayınız ve Yönet seçin.
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 text-center">
                                        <img src="<?= $baseUrl ?>/assets/image/epicgames_ayarlar.png"
                                             alt="Epic Games Yüklü Dosyalar"
                                             class="img-fluid img-zoom">
                                    </div>
                                    <div class="col-md-6">
                                        <ol start="3">
                                            <li>Dosyaları Doğrula yanındaki "Doğrula" basınız.</li>
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
                <h3 class="standartcolor" id="grafik"><b>Normal GTA V'te yaptığım grafik ayarları FiveM'de gözükmüyor,
                        nasıl düzeltebilirim?</b></h3>
                <div class="accordion" id="graphicFolderAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-success-emphasis" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseGraphicFolder" aria-expanded="false"
                                    aria-controls="collapseGraphicFolder">
                                El ile Değiştirme
                            </button>
                        </h2>
                        <div id="collapseGraphicFolder" class="accordion-collapse collapse"
                             data-bs-parent="#graphicFolderAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="col">
                                        <ol>
                                            <li>FiveM Kapatınız ve <kbd><i class="fa-brands fa-windows"></i></kbd>+<kbd>R</kbd>
                                                tuşlarına
                                                basarak "Çalıştır" uygulamasını açınız.
                                            </li>
                                            <li><code>%appdata%\CitizenFX\gta5_settings.xml</code> yazınız ve
                                                <kbd>Enter</kbd> tuşuna basınız. Ardından Notepad vb. bir uygulama ile
                                                açınız.
                                            </li>
                                            <li><kbd><i class="fa-brands fa-windows"></i></kbd>+<kbd>R</kbd> tuşlarına
                                                basarak "Çalıştır" uygulamasını açınız.
                                            </li>
                                            <li><code>%userprofile%\Documents\Rockstar Games\GTA V\settings.xml</code>
                                                yazınız ve <kbd>Enter</kbd> tuşuna basınız. Ardından Notepad vb. bir
                                                uygulama ile açınız ve içindekileri <code>gta5_settings.xml</code>
                                                dosyasına kopyalayınız.
                                            </li>
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
                                    data-bs-target="#collapseGraphicFolder1" aria-expanded="false"
                                    aria-controls="collapseGraphicFolder1">
                                CMD Yardımıyla Değiştirme
                            </button>
                        </h2>
                        <div id="collapseGraphicFolder1" class="accordion-collapse collapse"
                             data-bs-parent="#graphicFolderAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="col">
                                        <ol>
                                            <li>FiveM Kapatınız ve "Komut İstemi" uygulamasını açınız.</li>
                                            <li>
                                                <pre><code>copy "%userprofile%\Documents\Rockstar Games\GTA V\settings.xml" "%appdata%\CitizenFX\gta5_settings.xml" /Y</code></pre>
                                                yazınız ve <kbd>Enter</kbd> tuşuna basınız.
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
                                    data-bs-target="#collapseGraphicFolder2" aria-expanded="false"
                                    aria-controls="collapseGraphicFolder2">
                                PowerShell Yardımıyla Değiştirme
                            </button>
                        </h2>
                        <div id="collapseGraphicFolder2" class="accordion-collapse collapse"
                             data-bs-parent="#graphicFolderAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="col">
                                        <ol>
                                            <li>FiveM Kapatınız ve "Windows PowerShell" veya "PowerShell Core"
                                                uygulamasını açınız.
                                            </li>
                                            <li>
                                                <pre><code>Copy-Item "$env:userprofile\Documents\Rockstar Games\GTA V\settings.xml" "$env:appdata\CitizenFX\gta5_settings.xml" -Force</code></pre>
                                                yazınız ve <kbd>Enter</kbd> tuşuna basınız.
                                            </li>
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
                <h3 class="standartcolor" id="ses"><b>FiveM, Mikrofonum Kapalı ve Oyuncuların Konuşmaları Bana Gelmiyor, Nasıl Düzeltirim?</b></h3>
                <div class="row">
                    <div class="col-md-6">
                        <ol>
                            <li><kbd>ESC</kbd> basınız, "Settings" Kısmına geliniz.</li>
                            <li>"Voice Chat" sekmesine gelin</li>
                            <li>"Voice Chat Enabled" değerini "On" yapınız.</li>
                            <li>"Output Device" çıkış cihazı seçiniz.</li>
                            <li>"Microphone Enabled" değerini "On" yapınız.</li>
                            <li>"Input Device" giriş cihazı seçiniz.</li>
                        </ol>
                    </div>

                    <div class="col-md-6">
                        <img src="<?= $baseUrl ?>/assets/image/fivem_settings_voice.png"
                             class="img-fluid img-zoom mx-auto d-block">
                    </div>
                </div>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="tus"><b>FiveM Özel Tuşlarımı Nasıl Sıfırlarım</b></h3>
                <div class="accordion" id="keybindingAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-success-emphasis" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseKeyFolder" aria-expanded="false"
                                    aria-controls="collapseKeyFolder">
                                El ile Silme
                            </button>
                        </h2>
                        <div id="collapseKeyFolder" class="accordion-collapse collapse"
                             data-bs-parent="#keybindingAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="col">
                                        <ol>
                                            <li>FiveM Kapatınız ve <kbd><i class="fa-brands fa-windows"></i></kbd>+<kbd>R</kbd>
                                                tuşlarına
                                                basarak "Çalıştır" uygulamasını açınız.
                                            </li>
                                            <li><code>%appdata%\CitizenFX\fivem.cfg</code> yazınız ve
                                                <kbd>Enter</kbd> tuşuna basınız. Ardından Notepad vb. bir uygulama ile
                                                açınız.
                                            </li>
                                            <li><code>rbind</code> ile başlıyan kısımları siliniz</li>
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
                                    data-bs-target="#collapseKeyFolder1" aria-expanded="false"
                                    aria-controls="collapseKeyFolder1">
                                CMD Yardımıyla Silme
                            </button>
                        </h2>
                        <div id="collapseKeyFolder1" class="accordion-collapse collapse"
                             data-bs-parent="#keybindingAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="col">
                                        <ol>
                                            <li>FiveM Kapatınız ve "Komut İstemi" uygulamasını açınız.</li>
                                            <li>
                                                <pre><code>findstr /V "rbind" "%AppData%\CitizenFX\fivem.cfg" > "%AppData%\CitizenFX\fivem_new.cfg" && move /Y "%AppData%\CitizenFX\fivem_new.cfg" "%AppData%\CitizenFX\fivem.cfg"</code></pre>
                                                yazınız ve <kbd>Enter</kbd> tuşuna basınız.
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
                                    data-bs-target="#collapseKeyFolder2" aria-expanded="false"
                                    aria-controls="collapseKeyFolder2">
                                PowerShell Yardımıyla Silme
                            </button>
                        </h2>
                        <div id="collapseKeyFolder2" class="accordion-collapse collapse"
                             data-bs-parent="#keybindingAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <br>
                                    <div class="col">
                                        <ol>
                                            <li>FiveM Kapatınız ve "Windows PowerShell" veya "PowerShell Core"
                                                uygulamasını açınız.
                                            </li>
                                            <li>
                                                <pre><code>Get-Content "$env:AppData\CitizenFX\fivem.cfg" | Where-Object { $_ -notmatch "rbind" } | Set-Content "$env:AppData\CitizenFX\fivem_new.cfg"; Move-Item -Force "$env:AppData\CitizenFX\fivem_new.cfg" "$env:AppData\CitizenFX\fivem.cfg"</code></pre>
                                                yazınız ve <kbd>Enter</kbd> tuşuna basınız.
                                            </li>
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
            <h2 class="standartcolor" id="erisim">Erişim</h2>
            <p>Erişim sorunları burada yer almaktadır.</p>
            <br>
            <div>
                <h3 class="standartcolor" id="buygtav"><b>Hangi Platformdaki GTA V Destekleniyor?</b></h3>
                <p>FiveM'in desteklediği platformlar aşağıda yer almaktadır; bu platformlar dışında satın alınan veya
                    oynanan GTA 5 desteklenmemektedir.</p>
                <div class="alert alert-info"><i class="fa-brands fa-linux text-warning-emphasis"></i> Maalesef, FiveM
                    İstemcisi Linux üzerinde çalışmamaktadır.</span>
                </div>
                <ul>
                    <li><a href="https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/" target="_blank"
                           class="no-text-decoration">Steam (PC Platform)</a></li>
                    <li><a href="https://store.rockstargames.com/game/buy-gta-v" target="_blank"
                           class="no-text-decoration">Rockstar Games (PC Platform)</a></li>
                    <li><a href="https://store.epicgames.com/tr/p/grand-theft-auto-v" target="_blank"
                           class="no-text-decoration">Epic Games Store (PC Platform)</a></li>
                </ul>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="globalban"><b>FiveM'den global olarak yasaklandım. Nasıl
                        katılabilirim?</b>
                </h3>
                <p>FiveM'den global olarak yasaklandıysanız, maalesef sunucumuza katılamazsınız. Eğer yanlış bir şekilde
                    yasaklandığınızı düşünüyorsanız, <a href="https://docs.fivem.net/docs/support/ban-faq/#false-bans"
                                                        target="_blank" class="no-text-decoration">FiveM desteğine</a>
                    itiraz etmelisiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="onlineban"><b>Grand Theft Auto: Online'da yasaklandım. FiveM'e girebilir
                        miyim?</b></h3>
                <p>FiveM ve GTA: Online farklı platformlardır, bu nedenle GTA: Online yasağınız FiveM'de geçerli
                    değildir. Yani giriş yapabilirsiniz.</p>
            </div>
            <br>
        </div>
        <div>
            <h2 class="standartcolor" id="oyun">Oyun Deneyimi</h2>
            <p>Oyun deneyiminizi iyileştircek bilgi edinebilceğiniz kısımlar burada yer almaktadır.</p>
            <br>
            <div>
                <h3 class="standartcolor" id="extendedtext"><b>Extended Texture Budget Nedir?</b></h3>
                <p>FiveM ekibi tarafından geliştirilen, FiveM’e özgü, oyun içindeki dokuların bellekte ne kadar yer
                    kaplayabileceğini belirleyen bir ölçeklendirme ayarıdır. Bu özellik, dokuların daha yüksek kalitede
                    ve
                    keskin görünmesini sağlarken aynı zamanda performansı optimize etmenize yardımcı olur.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="arac"><b>Araç Nasıl Satın Alabilirim?</b></h3>
                <p>"<i class="custom-i gta-galeri"></i> Galeri" gidip araç satın alabilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="ehliyet"><b>Araç Ehliyeti Nereden Alabilirim?</b></h3>
                <p><i class="fa-solid fa-shield-halved"></i> Şehir Hizmetleri'ne
                    gidip ehliyet başvurabilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="aracesya"><b>Araç Torpidosuna eşya nasıl koyabilirim?</b></h3>
                <p>Araç içinde <kbd>F2</kbd> tuşunu kullanarak eşya koyabilir ve ya alabilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="aracmenu"><b>Araç bindiğimde sol altta bir menü var. Nasıl
                        kullanabilirim?</b></h3>
                <p>Sadece şöför kullanabilir, <kbd>CAPS LOCK</kbd> tuşuna basarak etkileşime geçebilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="silah"><b>Silah Nereden Alabilirim?</b></h3>
                <p>"<i class="custom-i gta-gun"></i> Gunshop" gidip silah satın alabilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="ruhsat"><b>Silah Ruhsatı Nereden Alabilirim?</b></h3>
                <p>Polis Departmanına gidip Silah Ruhsatı çıkarmak istediğinizi söylemelisiniz</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="rapor"><b>Rapor Nereden Alabilirim?</b></h3>
                <p><i class="custom-i gta-hospital"></i> Hastane'ye gidip doktor ile görüşmelisiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="taksi"><b>Takside NPC Yolcu Nasıl Alınır/Taksi Metre Nasıl Açabilirim?</b>
                </h3>
                <p><kbd>F3</kbd> tuşuna basarak meslekler bölmesinden gerçekleştirebilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="pets"><b>Evcil Hayvan Nasıl Alabilirim?</b></h3>
                <p>UwU Cafe'ye gidip personelle konuşup evcil hayvan satın almak istediğinizi belirtmelisiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="report"><b>Oyuncudan şikayetçiyim. Ne
                        yapmalıyım?</b></h3>
                <p>Gerekli delilleri toplıyarak MoonGaming™ Discord sunucusuna gelip ticket açmanız gerekmektedir.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="kanit"><b>Video kaydım var, nereye yüklemeliyim?</b></h3>
                <div class="row">
                    <div class="alert alert-danger">
                        <span>Fotoğraf çoğu durumda yeterli olmamaktadır.</span>
                    </div>
                    <div class="col-md-4">
                        <ul style="list-style-type: '- ">
                            <li><a href="https://youtube.com" target="_blank">Youtube</a> <b
                                        class="text-danger-emphasis">[Video
                                    için]</b></li>
                            <li><a href="https://streamable.com" target="_blank">Streamable</a> <b
                                        class="text-danger-emphasis">[Video
                                    için]</b></li>
                            <li><a href="https://odysee.com/" target="_blank">Odysee</a> <b
                                        class="text-danger-emphasis">[Video
                                    için]</b></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul style="list-style-type: '* ">
                            <li><a href="https://imgur.com/" target="_blank">Imgur</a> <b class="text-success-emphasis">[Fotoğraf
                                    için]</b></li>
                            <li><a href="https://hizliresim.com/" target="_blank">Hızlı Resim</a> <b
                                        class="text-success-emphasis">[Fotoğraf
                                    için]</b></li>
                        </ul>
                    </div>
                    <p>Platformlarını kullanabilirsiniz.</p>

                </div>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="bantemyiz"><b>Sunucudan uzaklaştırıldım, nasıl itiraz edebilirim?</b></h3>
                <p>MoonGaming™ Discord sunucusuna gelip ticket açmanız gerekmektedir.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="admin"><b>Yetkili nasıl olabilirim?</b></h3>
                <p>Yetkili olabilmek için <a href="<?= $AdminBasvuru ?>" target="_blank">başvuru</a>
                    yapmanız gerekmektedir. Başvurunuz olumlu sonuçlanırsa geri dönüş yapılacaktır.</p>

                <h4 class="standartcolor"><b>Red edildiğimi nereden öğrenebilirim?</b></h4>
                <p>Başvuru sayısı fazla olduğundan dolayı maalesef red edilenlere dönüş yapılmamaktadır. 1 hafta
                    içinde
                    dönüş yapılmazsa başvurunuz red edilmiştir.</p>
            </div>
        </div>
    </div>
</main>