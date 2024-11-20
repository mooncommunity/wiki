<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="standartcolor mb-4">Ekran Kaydı nasıl alabilirim?</h1>
        <br>
        <p>Ekran kaydı almak için önerdiğimiz bazı uygulamalar: Xbox Game Bar, OBS Studio, Nvidia App (Betada onun
            yerine Nvidia GeForce kullanabilirsiniz), Steam</p>
        <br>

        <ul class="nav nav-tabs" id="screenRecordTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="xbox-tab" data-bs-toggle="tab" data-bs-target="#xbox" type="button"
                        role="tab" aria-controls="xbox" aria-selected="true">Xbox Game Bar <i
                            class="text-primary fa-brands fa-windows"></i></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="obs-tab" data-bs-toggle="tab" data-bs-target="#obs" type="button"
                        role="tab" aria-controls="obs" aria-selected="false">OBS Studio <i
                            class="text-primary fa-brands fa-windows"></i> <i
                            class="fa-brands fa-linux text-warning-emphasis"></i></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="nvidia-tab" data-bs-toggle="tab" data-bs-target="#nvidia" type="button"
                        role="tab" aria-controls="nvidia" aria-selected="false">Nvidia App <i
                            class="text-primary fa-brands fa-windows"></i></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="steam-tab" data-bs-toggle="tab" data-bs-target="#steam" type="button"
                        role="tab" aria-controls="steam" aria-selected="false">Steam <i
                            class="text-primary fa-brands fa-windows"></i> <i
                            class="fa-brands fa-linux text-warning-emphasis"></i></button>
            </li>
        </ul>

        <div class="tab-content mt-4" id="screenRecordTabsContent">
            <div class="tab-content mt-4" id="screenRecordTabsContent">
                <div class="tab-pane fade show active" id="xbox" role="tabpanel" aria-labelledby="xbox-tab">
                    <div class="row align-items-center mb-4">
                        <div class="col-12 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/xbox_game_bar_1.png" alt="Xbox Game Bar Ayarları"
                                 class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-12">
                            <ol>
                                <li>Windows Ayarlar'a gidiniz.</li>
                                <li>"Oyun" sekmesine gidiniz.</li>
                                <li>"Yakalamalar" bölümüne gidiniz.</li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center mb-4">
                        <div class="col-12 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/xbox_game_bar_2.png" alt="Xbox Game Bar Ayarları"
                                 class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-12">
                            <ol>
                                <li>"Olanları kaydet" seçeneğini etkinleştiriniz.</li>
                                <li>"Sonuncuyu kaydet" için istediğiniz bir zamanı seçiniz.</li>
                                <li>Diğer ayarları kendinize göre kişiselleştiriniz.</li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center mb-4">
                        <div class="col-12 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/xbox_game_bar_3.png" alt="Xbox Game Bar Ayarları"
                                 class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12">
                            <ol>
                                <li>Oyuna giriniz.</li>
                                <li>"Windows Tuşu + G" tuş kombinasyonuna basınız.</li>
                                <li>"Yakalama" menüsünde, fotoğraf ve kayıt simgesinin ortasında kalan simgeye
                                    tıklayınız.
                                </li>
                                <li>Kayıt almak istediğinizde, tekrar aynı simgeye basarak kaydı başlatınız.</li>
                                <li>Öneri: Özellikle ilk kullanımda, birkaç kere test amaçlı kayıt yaparak
                                    alışabilirsiniz.
                                </li>
                            </ol>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="tab-pane fade" id="obs" role="tabpanel" aria-labelledby="obs-tab">
                    <div class="accordion" id="obsAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-primary" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseOBSStudioWindows" aria-expanded="true"
                                        aria-controls="collapseOBSStudioWindows">
                                    <i class="text-primary fa-brands fa-windows"></i> Windows
                                </button>
                            </h2>
                            <div id="collapseOBSStudioWindows" class="accordion-collapse collapse"
                                 aria-labelledby="headingOBSStudioWindows" data-bs-parent="#obsAccordion">
                                <div class="accordion-body">
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_1.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12">
                                            <ol>
                                                <li>OBS Studio'yu indiriniz.</li>
                                                <li>OBS Studio'yu açınız.</li>
                                                <li>Sihirbaz çıkarsa, kayıt odaklı ilerleyiniz.</li>
                                                <li>En sağdaki "Ayarlar" kısmına tıklayınız.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_2.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12">
                                            <ol>
                                                <li>"Kayıt" menüsüne gidiniz.</li>
                                                <li>"Tekrar Oynatma Arabelleği" seçeneğini işaretleyiniz.</li>
                                                <li>"Maksimum Tekrar Süresi"ni saniye cinsinden giriniz.</li>
                                                <li>"Azami Bellek" değerini, en az 1024 MB olacak şekilde
                                                    kişiselleştiriniz.
                                                </li>
                                                <li>"Tamam" butonuna basınız.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_3.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <ol>
                                                <li>"Kaynaklar" kısmının altındaki "+" butonuna basınız.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_4.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <ol>
                                                <li>"Oyun Yakalama" seçeneğini seçiniz.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_5.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <ol>
                                                <li>"Mod" olarak "Belirli bir pencereyi yakala" seçeneğini seçiniz.</li>
                                                <li>"Pencere" olarak "gmod.exe" dosyasını seçiniz.</li>
                                                <li>İsteğe bağlı olarak "Sesi yakala" ve "İmleci Yakala" seçeneklerini
                                                    işaretleyebilirsiniz.
                                                </li>
                                                <li>"Tamam" butonuna basınız.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_6.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <ol>
                                                <li>Oluşturduğumuz "Oyun Yakalama"ya sağ tıklayınız.</li>
                                                <li>"Dönüştür" seçeneğini bulup "Ekrana sığdır" seçeneğini seçiniz.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_7.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <ol>
                                                <li>"Tekrar Oynatma Arabelleği'ni başlat" butonuna basınız.</li>
                                                <li>Artık video kayıtları RAM'e yazılacak ve ihtiyacımız olduğunda
                                                    "Tekrar Oynatma Arabelleği'ni başlat" kısmının yanındaki indirme
                                                    simgesinden bilgisayara kaydedebileceksiniz.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-warning-emphasis" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOBSStudioLinux"
                                        aria-expanded="true" aria-controls="collapseOBSStudioLinux">
                                    <i class="fa-brands fa-linux text-warning-emphasis"></i> Linux (Wayland)
                                </button>
                            </h2>
                            <div id="collapseOBSStudioLinux" class="accordion-collapse collapse"
                                 aria-labelledby="headingOBSStudioLinux" data-bs-parent="#obsAccordion">
                                <div class="accordion-body">
                                    <div class="alert alert-danger" role="alert">
                                        <p>Xwaylandvideobridge gerekebilir. Bu durumda, Flatpak sürümünü kullanıyorsanız
                                            Flatpak'tan temin etmelisiniz; yerel olarak kullanıyorsanız paket
                                            yöneticinizden temin etmelisiniz.</p>
                                        <p>Ekran paylaşımı için PipeWire kullanılmaktadır. Dağıtımınız PipeWire
                                            desteklemiyorsa bu yöntem işe yaramaz veya pipewire geçmeniz gerekir. </p>
                                    </div>

                                    <br>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_1.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12">
                                            <ol>
                                                <li>OBS Studio'yu indiriniz.</li>
                                                <li>OBS Studio'yu açınız.</li>
                                                <li>Sihirbaz çıkarsa, kayıt odaklı ilerleyiniz.</li>
                                                <li>En sağdaki "Ayarlar" kısmına tıklayınız.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_2.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12">
                                            <ol>
                                                <li>"Kayıt" menüsüne gidiniz.</li>
                                                <li>"Tekrar Oynatma Arabelleği" seçeneğini işaretleyiniz.</li>
                                                <li>"Maksimum Tekrar Süresi"ni saniye cinsinden giriniz.</li>
                                                <li>"Azami Bellek" değerini, en az 1024 MB olacak şekilde
                                                    kişiselleştiriniz.
                                                </li>
                                                <li>"Tamam" butonuna basınız.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_3.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <ol>
                                                <li>"Kaynaklar" kısmının altındaki "+" butonuna basınız.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_4.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <ol>
                                                <li>"Ekran Yakalama (PipeWire)" seçeneğini seçiniz.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_5.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <ol>
                                                <li>"Pencereler" tıklayınız</li>
                                                <li>"Garry's Mod" Tıklayın</li>
                                                <li>"Tamam" butonuna basınız.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_6.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <ol>
                                                <li>Oluşturduğumuz "Ekran Yakalama (PipeWire)"ya sağ tıklayınız.</li>
                                                <li>"Dönüştür" seçeneğini bulup "Ekrana genişlet" seçeneğini seçiniz.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-12 text-center">
                                            <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_7.png"
                                                 alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <ol>
                                                <li>"Tekrar Oynatma Arabelleği'ni başlat" butonuna basınız.</li>
                                                <li>Artık video kayıtları RAM'e yazılacak ve ihtiyacımız olduğunda
                                                    "Tekrar Oynatma Arabelleği'ni başlat" kısmının yanındaki indirme
                                                    simgesinden bilgisayara kaydedebileceksiniz.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nvidia" role="tabpanel" aria-labelledby="nvidia-tab">
                    <div class="row align-items-center mb-4">
                        <div class="col-12 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/nvidia_app_1.png" alt="nvidia app"
                                 class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-12">
                            <ol>
                                <li>Nvidia App gidiniz.</li>
                                <li>"Ayarlar" sekmesine gidiniz.</li>
                                <li>"NVIDIA yer paylaşımı" aktif ediniz.</li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center mb-4">
                        <div class="col-12 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/nvidia_app_2.png" alt="nvidia app"
                                 class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-12">
                            <ol>
                                <li>Oyuna giriniz 2 dakika bekleyin.</li>
                                <li>"ALT+Z" tuşlarına basınız</li>
                                <li>En üstte yukardaki çark resmine basınız.</li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center mb-4">
                        <div class="col-12 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/nvidia_app_3.png" alt="nvidia app"
                                 class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-12">
                            <ol>
                                <li>"Video yakalama" sekmesine gidiniz.</li>
                                <li>"Anında Yeniden Oynatma Süresi" 10 dakika olarak ayarlayınız.</li>
                                <li>Kişisel ayarlamalarınızı yapınız.</li>
                            </ol>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center mb-4">
                        <div class="col-12 text-center">
                            <img src="<?= $baseUrl ?>/assets/image/nvidia_app_4.png" alt="nvidia app"
                                 class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-12">
                            <ol>
                                <li>"Anında Yeniden Oynatma" gidiniz</li>
                                <li>Etkinleştiriniz.</li>
                            </ol>
                            <p>Böylelikle video son 10 dakikası her zaman ram kayıt edilecek istediğiniz taktirde buraya
                                girip indirebilceksiniz bilgisayarınıza.</p>
                        </div>
                    </div>
                    <hr>
                    <br>
                </div>

                    <div class="tab-pane fade" id="steam" role="tabpanel" aria-labelledby="steam-tab">
                        <div class="row mb-4">
                            <div class="col-md-6 text-center">
                                <img src="<?= $baseUrl ?>/assets/image/steam_menu_ayarlar.png" alt="Steam Ayarları" class="img-fluid w-100">
                            </div>
                            <div class="col-md-6">
                                <ol>
                                    <li>Steam'i açın.</li>
                                    <li>"Steam" sekmesine tıklayın.</li>
                                    <li>"Ayarlar" seçeneğine tıklayın.</li>
                                </ol>
                            </div>
                        </div>

                        <hr>
                        <div class="row align-items-center mb-4">
                            <div class="col-12 text-center">
                                <img src="<?= $baseUrl ?>/assets/image/steam_menu_ayarlar_oyunkaydi.png"
                                     alt="Steam Ayarlar - Oyun Kaydı"
                                     class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-12">
                                <ol>
                                    <li>"Oyun Kaydı" Tıklayınız.</li>
                                    <li>"Arka Planda Kaydet" seçiniz</li>

                                    <li>"Kısayol Tuşları" bölümünde "Oyunun Son <code>X</code> saniyesini klip olarak
                                        kaydet" kısmındaki X(10) 600 saniye (10 dakika) ayarlayınız.
                                    </li>
                                    <li>"Kısayol Tuşları" bölümünde "Oyunun Son <code>X</code> saniyesini klip olarak
                                        kaydet" kısmındaki "Ayarla..." basınız ve tuş atayınız.
                                    </li>
                                    <li class="text-danger">Ayrıca "Mikrofonu Kaydet" seçeneğin aktif ediniz.</li>
                                </ol>
                                <p>Artık oyuna girdiğinizde steam otomatik olarak ekran kaydı almaya başlıcak.
                                    Atadığınız tuş ilede son 10 dakikayı alabilceksiniz.</p>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="tab-pane fade" id="obs" role="tabpanel" aria-labelledby="obs-tab">
                        <div class="accordion" id="obsAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed text-primary" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseOBSStudioWindows" aria-expanded="true"
                                            aria-controls="collapseOBSStudioWindows">
                                        <i class="text-primary fa-brands fa-windows"></i> Windows
                                    </button>
                                </h2>
                                <div id="collapseOBSStudioWindows" class="accordion-collapse collapse"
                                     aria-labelledby="headingOBSStudioWindows" data-bs-parent="#obsAccordion">
                                    <div class="accordion-body">
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_1.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12">
                                                <ol>
                                                    <li>OBS Studio'yu indiriniz.</li>
                                                    <li>OBS Studio'yu açınız.</li>
                                                    <li>Sihirbaz çıkarsa, kayıt odaklı ilerleyiniz.</li>
                                                    <li>En sağdaki "Ayarlar" kısmına tıklayınız.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_2.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12">
                                                <ol>
                                                    <li>"Kayıt" menüsüne gidiniz.</li>
                                                    <li>"Tekrar Oynatma Arabelleği" seçeneğini işaretleyiniz.</li>
                                                    <li>"Maksimum Tekrar Süresi"ni saniye cinsinden giriniz.</li>
                                                    <li>"Azami Bellek" değerini, en az 1024 MB olacak şekilde
                                                        kişiselleştiriniz.
                                                    </li>
                                                    <li>"Tamam" butonuna basınız.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_3.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <ol>
                                                    <li>"Kaynaklar" kısmının altındaki "+" butonuna basınız.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_4.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <ol>
                                                    <li>"Oyun Yakalama" seçeneğini seçiniz.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_5.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <ol>
                                                    <li>"Mod" olarak "Belirli bir pencereyi yakala" seçeneğini
                                                        seçiniz.
                                                    </li>
                                                    <li>"Pencere" olarak "gmod.exe" dosyasını seçiniz.</li>
                                                    <li>İsteğe bağlı olarak "Sesi yakala" ve "İmleci Yakala"
                                                        seçeneklerini
                                                        işaretleyebilirsiniz.
                                                    </li>
                                                    <li>"Tamam" butonuna basınız.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_6.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <ol>
                                                    <li>Oluşturduğumuz "Oyun Yakalama"ya sağ tıklayınız.</li>
                                                    <li>"Dönüştür" seçeneğini bulup "Ekrana sığdır" seçeneğini
                                                        seçiniz.
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_7.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <ol>
                                                    <li>"Tekrar Oynatma Arabelleği'ni başlat" butonuna basınız.</li>
                                                    <li>Artık video kayıtları RAM'e yazılacak ve ihtiyacımız olduğunda
                                                        "Tekrar Oynatma Arabelleği'ni başlat" kısmının yanındaki indirme
                                                        simgesinden bilgisayara kaydedebileceksiniz.
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed text-warning-emphasis" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOBSStudioLinux"
                                            aria-expanded="true" aria-controls="collapseOBSStudioLinux">
                                        <i class="fa-brands fa-linux text-warning-emphasis"></i> Linux (Wayland)
                                    </button>
                                </h2>
                                <div id="collapseOBSStudioLinux" class="accordion-collapse collapse"
                                     aria-labelledby="headingOBSStudioLinux" data-bs-parent="#obsAccordion">
                                    <div class="accordion-body">
                                        <div class="alert alert-danger" role="alert">
                                            <p>Xwaylandvideobridge gerekebilir. Bu durumda, Flatpak sürümünü
                                                kullanıyorsanız
                                                Flatpak'tan temin etmelisiniz; yerel olarak kullanıyorsanız paket
                                                yöneticinizden temin etmelisiniz.</p>
                                            <p>Ekran paylaşımı için PipeWire kullanılmaktadır. Dağıtımınız PipeWire
                                                desteklemiyorsa bu yöntem işe yaramaz veya pipewire geçmeniz
                                                gerekir. </p>
                                        </div>

                                        <br>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_1.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12">
                                                <ol>
                                                    <li>OBS Studio'yu indiriniz.</li>
                                                    <li>OBS Studio'yu açınız.</li>
                                                    <li>Sihirbaz çıkarsa, kayıt odaklı ilerleyiniz.</li>
                                                    <li>En sağdaki "Ayarlar" kısmına tıklayınız.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_2.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12">
                                                <ol>
                                                    <li>"Kayıt" menüsüne gidiniz.</li>
                                                    <li>"Tekrar Oynatma Arabelleği" seçeneğini işaretleyiniz.</li>
                                                    <li>"Maksimum Tekrar Süresi"ni saniye cinsinden giriniz.</li>
                                                    <li>"Azami Bellek" değerini, en az 1024 MB olacak şekilde
                                                        kişiselleştiriniz.
                                                    </li>
                                                    <li>"Tamam" butonuna basınız.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_3.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <ol>
                                                    <li>"Kaynaklar" kısmının altındaki "+" butonuna basınız.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_4.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <ol>
                                                    <li>"Ekran Yakalama (PipeWire)" seçeneğini seçiniz.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_5.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <ol>
                                                    <li>"Pencereler" tıklayınız</li>
                                                    <li>"Garry's Mod" Tıklayın</li>
                                                    <li>"Tamam" butonuna basınız.</li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_6.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <ol>
                                                    <li>Oluşturduğumuz "Ekran Yakalama (PipeWire)"ya sağ tıklayınız.
                                                    </li>
                                                    <li>"Dönüştür" seçeneğini bulup "Ekrana genişlet" seçeneğini
                                                        seçiniz.
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-12 text-center">
                                                <img src="<?= $baseUrl ?>/assets/image/obs_studio_linux_7.png"
                                                     alt="OBS Studio Arayüzü" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <ol>
                                                    <li>"Tekrar Oynatma Arabelleği'ni başlat" butonuna basınız.</li>
                                                    <li>Artık video kayıtları RAM'e yazılacak ve ihtiyacımız olduğunda
                                                        "Tekrar Oynatma Arabelleği'ni başlat" kısmının yanındaki indirme
                                                        simgesinden bilgisayara kaydedebileceksiniz.
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


        </div>
    </div>
</main>
