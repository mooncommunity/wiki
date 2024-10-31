<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="mb-4">DarkRP Başlarken</h1>
        <hr>
        <br>
        <div>
            <h3 id="gerekli-eklentiler-ve-ayarlar">Gerekli Eklentiler ve Ayarlar</h3>
            <br>
            <div class="alert alert-info" role="alert">
                <a href="<?= $darkrp_workshop ?>" target="_blank">
                    <?= $darkrp_workshop ?>
                </a> hepsine tek tek abone olmalısınız.
            </div>

            <ul>
                <li><b>Workshop Eklentileri</b>: <a href="<?= $darkrp_ip ?>" target="_blank">DarkRP
                        sunucumuza</a> katılmadan önce, <a
                            href="<?= $darkrp_workshop ?>" target="_blank">workshop</a>
                    indirin. Eğer oyunda iseniz indirme işlemi sonrası Garry's mod komple kapatıp açınız.
                </li>
                <li><b>Chromium Betası</b>: Daha iyi performans ve özellikler için <b>Chromium</b> betasına
                    geçmeniz
                    gerekmektedir.
                </li>
            </ul>

            <div class="content-ref-box">
                <p>
                    <a id="chromeBox" href="<?= $baseUrl; ?>/darkrp-baslarken/chromium" target="_blank">
                        <i class="fa-brands fa-chrome"></i> Chromium Nedir? Nasıl Chromium Geçerim?
                    </a>
                </p>
            </div>
        </div>

        <hr>
        <br>

        <div>
            <h3 id="tus">Temel Kısayollar</h3>
            <br>
            <ul>
                <li><strong>F1:</strong> FPS görünümü ve üçüncü şahıs (third-person) kamera görünümü arasında
                    geçiş
                    yapabilirsiniz.
                </li>
                <li><strong>F2:</strong> Sahip olduğunuz araçlara arkadaşlarınızı ekleyebilir, ev
                    kiralayabilirsiniz
                    (Kapıya bakıp yapmalısınız), evinize arkadaşlarınızı ekleyebilirsiniz.
                </li>
                <li><strong>F3:</strong> Araç içinde iseniz plaka değişimi yapmanızı sağlar. Ek olarak araçta
                    değilseniz fare imlecinizi belirtir.
                </li>
                <li><strong>F4:</strong> Meslek, sevkiyat ve varlıklar menüsüne erişebilirsiniz.</li>
                <li><strong>TAB:</strong> Oyuncu listesi ve durumlarına bakabilirsiniz.</li>
                <li><strong>M:</strong> Oyunun haritasının küçültülmüş halini gösterir. (Yokuş altına
                    inince/Çıkınca
                    harita değişir)
                </li>
                <li><strong>T:</strong> Teslim olmanızı sağlar. Eğer teslim olduysanız da elinizi indirmenizi
                    sağlar.
                </li>
                <li><strong>I:</strong> Envanterinizi açmanızı sağlar.</li>
            </ul>
        </div>

        <hr>
        <br>

        <div>
            <h3 id="chat">Sohbet ve İletişim</h3>
            <br>
            <ul class="nav nav-tabs" id="chatTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="general-tab" data-bs-toggle="tab" href="#general"
                       role="tab">Genel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="legal-tab" data-bs-toggle="tab" href="#legal" role="tab">Legal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="illegal-tab" data-bs-toggle="tab" href="#illegal"
                       role="tab">İllegal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="esnaf-tab" data-bs-toggle="tab" href="#esnaf" role="tab">Esnaf</a>
                </li>
            </ul>

            <div class="tab-content" id="chatTabsContent">
                <div class="tab-pane fade show active" id="general" role="tabpanel">
                    <br>
                    <ul>
                        <li><strong>// veya /ooc &lt;Mesaj&gt;:</strong> Oyun dışında genel konuşmalar yapmak
                            için kullanılır.<br><em>Örnek:</em><br><code>//
                                Etraf error gözüküyor nasıl çözebilirim?</code></li>
                        <hr>
                        <li><strong>/looc &lt;Mesaj&gt;:</strong> Lokal OOC sohbeti yapmanızı
                            sağlar.<br><em>Örnek:</em><br><code>/looc
                                Arkadaşlar rol ortasında hatalı emote atmayın lütfen</code></li>
                        <hr>
                        <li><strong>/reklam veya /advert &lt;Mesaj&gt;:</strong> IC (In-Character) reklamlar ve
                            duyurular
                            yapmanızı sağlar.<br><em>Örnek:</em><br><code>/reklam Şehirde yeni açılan Moon AVM
                                bekleriz!</code></li>
                        <hr>
                        <li><strong>!asay &lt;Mesaj&gt;:</strong> Yetkili sohbete mesaj
                            yazar<br><em>Örnek:</em><br><code>!asay
                                Duvar sokağında MassRDM yapan biri var izliyebilir misiniz?</code>
                        </li>
                        <hr>
                        <li><strong>/pm &lt;Kişi&gt;:</strong> Belirli bir kullanıcıya özel mesaj atmanızı
                            sağlar.<br><em>Örnek:</em><br><code>/pm Ozgur MoonGiller Sunucu hakkında bir şey
                                sorabilir
                                miyim?</code></li>
                        <hr>
                        <li><strong>/me:</strong> Karakterinizin yaptığı eylemleri anlatmak için kullanılır.<br><em>Örnek:</em><br><code>/me
                                masaya oturur</code></li>
                        <hr>
                        <li><strong>/dropmoney &lt;Miktar&gt;:</strong> Yere belirtiğiniz miktarda para
                            atar.<br><em>Örnek:</em><br><code>/dropmoney 1000</code></li>
                        <hr>
                        <li><strong>/drop:</strong> Elinizde atılabilir silah var ise yere atmanızı
                            sağlar.<br><em>Örnek:</em><br><code>/drop</code>
                        </li>
                        <hr>
                        <li><strong>/calladmin &lt;Sebep&gt;:</strong> Yetkili çağırmak için
                            kullanılır.<br><em>Örnek:</em><br><code>/calladmin
                                Duvar arasına sıkıştım çekebilir misin?</code></li>
                        <hr>
                        <li><strong>/write &lt;Yazı&gt;:</strong> Döküman yazmak için
                            kullanılır.<br><em>Örnek:</em><br><code>/write
                                Michael MoonGiller aklı dengesi yerinde değildir.</code></li>
                        <hr>
                        <li><strong>/check &lt;Kişi&gt; &lt;Miktar&gt;:</strong> Çek yazmak için kullanılır.<br><em>Örnek:</em><br><code>/check
                                'Kardelen MoonGiller' 1000</code></li>
                        <hr>
                        <li><strong>!menu:</strong> Genel menüyü
                            açar.<br><em>Örnek:</em><br><code>!menu</code>
                        </li>
                        <hr>
                        <li><strong>!parti:</strong> Parti menüsünü
                            açar.<br><em>Örnek:</em><br><code>!parti</code>
                        </li>
                        <hr>
                        <li><strong>/job &lt;metin&gt;:</strong> Oyuncu Karakteriniz altındaki yazıyı değiştirmenizi
                            sağlar
                            <br><em>Örnek:</em><br><code>/job Asayiş Polis Memuru</code>
                        </li>
                        <br>
                    </ul>
                </div>

                <div class="tab-pane fade" id="legal" role="tabpanel">
                    <br>
                    <ul>
                        <li><strong>/911 &lt;Mesaj&gt;:</strong> 911 Hattına mesaj
                            gönderir.<br><em>Örnek:</em><br><code>/911 Karakolda ağır silahlı adamlar var
                                desteğe
                                ihtiyacım var</code></li>
                        <hr>
                        <li><strong>/t &lt;Mesaj&gt;:</strong> Telsizin frekansındaki diğer kişilere mesajınız
                            gönderir.<br><em>Örnek:</em><br><code>/t 92-61 konuşuyor just caddesindeki dönerci
                                önüne
                                takviye unsur talebimiz mevcut efendim</code></li>
                        <hr>
                        <li><strong>/broadcast &lt;Mesaj&gt;:</strong> Belediye Başkanı iken duyuru
                            gönderir.<br><em>Örnek:</em><br><code>/broadcast Artan suç nedeniyle sokağa çıkma
                                yasağı
                                başlatılacaktır.</code></li>
                        <hr>
                        <li><strong>/lockdown:</strong> Belediye Başkanı iken sokağa çıkma yasağı
                            başlatır.<br><em>Örnek:</em><br><code>/lockdown</code>
                        </li>
                        <hr>
                        <li><strong>/unlockdown:</strong> Belediye Başkanı iken sokağa çıkma yasağını
                            bitirir.<br><em>Örnek:</em><br><code>/unlockdown</code></li>
                        <hr>
                        <li><strong>/lottery:</strong> Belediye Başkanı iken piyango başlatmak için
                            kullanılır.<br><em>Örnek:</em><br><code>/lottery</code></li>
                        <hr>
                        <div class="alert alert-info" role="alert">
                            Warrant ve Wanted işlemleri için GBT Tablet kullanmanız önerilir.
                        </div>
                        <br>
                        <li><strong>/warrant:</strong> Aranma izni çıkarmak için
                            kullanılır.<br><em>Örnek:</em><br><code>/warrant 'Micheal MoonGiller' 'Yasadışı
                                Madde
                                Şüphesi'</code></li>
                        <hr>
                        <li><strong>/unwarrant:</strong> Aranma iznini iptal etmek için
                            kullanılır.<br><em>Örnek:</em><br><code>/unwarrant 'Micheal MoonGiller'</code></li>
                        <hr>
                        <li><strong>/wanted:</strong> İllegal eylem sergilediği kesinleşen oyuncu için
                            kullanılır.<br><em>Örnek:</em><br><code>/wanted 'Hasan MoonGiller' 'Banka
                                Soygunu'</code></li>
                        <hr>
                        <li><strong>/unwanted:</strong> Aranıyor iptal etmek için
                            kullanılır.<br><em>Örnek:</em><br><code>/unwanted
                                'Hasan MoonGiller'</code>
                        </li>
                        <hr>
                        <li><strong>/baskin:</strong> Baskın
                            başlatır.<br><em>Örnek:</em><br><code>/baskin</code>
                        </li>
                        <hr>
                        <li><strong>/baskinbitir:</strong> Baskını
                            bitirir.<br><em>Örnek:</em><br><code>/baskinbitir</code></li>
                    </ul>
                    <br>
                </div>

                <div class="tab-pane fade" id="illegal" role="tabpanel">
                    <br>
                    <ul>
                        <li><strong>/channel &lt;Numara&gt;:
                            </strong> Kanalınızı belirtiğiniz numara ile değiştirir.<br><em>Örnek:</em><br><code>/channel
                                5</code></li>
                        <hr>
                        <li><strong>/radio
                                &lt;Mesaj&gt;:
                            </strong> Bulunduğunuz kanala mesaj gönderir.<br><em>Örnek:</em><br><code>/radio Burada
                                hareketlilik var</code></li>
                        <hr>
                        <li><strong>/soygun:</strong> İllegal eylem gerçekleştirmek için kullanılır. (Arama
                            çalma,
                            illegal baskını)<br><em>Örnek:</em><br><code>/soygun</code></li>
                        <hr>
                        <li><strong>/soygunbitir:</strong> İllegal eylem bitirmek için
                            kullanılır.<br><em>Örnek:</em><br><code>/soygunbitir</code></li>
                        <hr>
                        <li><strong>!asay isyan:</strong> Sokağa çıkma yasağında isyan etmek için
                            kullanılır.<br><em>Örnek:</em><br><code>!asay isyan</code></li>
                        <hr>
                        <li><strong>!asay +1:</strong> Toplu eylemlerde eylem gerçekleştirdiğinizi
                            belirtmek
                            için kullanılır.<br><em>Örnek:</em><br><code>!asay +1</code></li>
                        <hr>
                        <li><strong>!dondur:</strong> Para Basma Makineleri, Saksılarınızı dondurur. <strong>Dondurmayı
                                geri açmanın komutu
                                bulunmamaktadır.</strong><br><em>Örnek:</em><br><code>!dondur</code></li>
                    </ul>
                    <br>
                </div>

                <div class="tab-pane fade" id="esnaf" role="tabpanel">
                    <br>
                    <ul>
                        <li><strong>/balikbug:</strong> Balıkçıda Oltanız Bug girdiğinde kullanabilceğiniz
                            komut.
                            <br><em>Örnek:</em><br><code>/balikbug</code></li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>

        <hr>
        <br>

        <div>
            <h3 id="weapon">Oyundaki tüm silahlarım nerede?</h3>
            <br>
            <p>Üzerinizde bulunan tüm silahlarınız 1, 2, 3, 4, 5 slotlarınızda bulunmaktadır. Bu slotlara
                erişmek
                için '1', '2' gibi numaralara basıp kullanabilirsiniz veya mouse'unuzun orta tekerleği ile
                erişebilirsiniz.</p>
            <div class="col-12 mx-auto text-center">
                <img src="<?= $baseUrl ?>/assets/image/darkrp_silahbar.png" alt="Silahlar" class="img-fluid">
            </div>
        </div>

        <hr>
        <br>

        <div>
            <h3 id="phone">Telefon nasıl kullanırım?</h3>
            <br>
            <p>Karakterinizin telefona erişebilmesi için silahlarınızın 1. slotunda yer alan telefonu alıp
                kullanabilirsiniz.</p>

            <div class="alert alert-info">
                Fare ile telefonda gezinebilirsiniz.<br>
                Eğer fare oynatınca karakteriniz hareket ediyor ise sol click basıp öyle deneyin.<br>
                Tekrar karakterinizle hareket etmek isterseniz telefonun dışına doğru hareket ettirip, telefon
                çerçevesini geçince karakteriniz tekrar hareket etmeye başlayacaktır.
            </div>

            <div class="col-6 mx-auto text-center">
                <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon.png" alt="Telefon" class="img-fluid">
            </div>
            <br>
            <ul class="nav nav-tabs" id="telefonTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="kamera-tab" data-bs-toggle="tab" href="#kamera"
                       role="tab">Kamera</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="galeri-tab" data-bs-toggle="tab" href="#galeri"
                       role="tab">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="twitter-tab" data-bs-toggle="tab" href="#twitter"
                       role="tab">Twitter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="papara-tab" data-bs-toggle="tab" href="#papara"
                       role="tab">Papara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mesajlar-tab" data-bs-toggle="tab" href="#mesajlar"
                       role="tab">Mesajlar</a>
                </li>
            </ul>

            <div class="tab-content" id="telefonTabsContent">
                <div class="tab-pane fade show active" id="kamera" role="tabpanel">
                    <br>
                    <ul>
                        <li>Oyun içerisinde fotoğraf çekmenizi sağlar.</li>
                        <li>Yönlendirme resmine basarak iç veya dış kameranızı ayarlayabilirsiniz.</li>
                    </ul>
                    <div class="mx-auto text-center">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_kamera.png" alt="Telefon - Kamera"
                             class="img-fluid">
                    </div>
                </div>

                <div class="tab-pane fade" id="galeri" role="tabpanel">
                    <br>
                    <ul>
                        <li>Çektiğiniz fotoğraflar burada yer almaktadır.</li>
                        <li>Yükleme ikonuna basarsanız fotoğrafınızı Twitter'a yükleyebilecek hale getirirsiniz.
                        </li>
                    </ul>
                    <div class="mx-auto text-center">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_galeri.png" alt="Telefon - Galeri"
                             class="img-fluid">
                    </div>
                </div>

                <div class="tab-pane fade" id="twitter" role="tabpanel">
                    <br>
                    <p>Fotoğraf yükleme: İlk önce çektiğiniz fotoğrafı buluta yüklemelisiniz. Ardından Twitter
                        sayaç
                        resmine tıklayıp fotoğrafınızı seçebilirsiniz.</p>
                    <div class="mx-auto text-center">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_twitter.png" alt="Telefon - Twitter"
                             class="img-fluid">
                    </div>
                </div>

                <div class="tab-pane fade" id="papara" role="tabpanel">
                    <br>
                    <ul>
                        <li>Banka hesabındaki parayı ATM gitmeden kolayca öğrenebilirsiniz.</li>
                        <li>Banka hesabındaki parayı kolaylıkla başka oyuncuya gönderebilirsiniz.</li>
                    </ul>
                    <div class="mx-auto text-center">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_papara.png" alt="Telefon - Papara"
                             class="img-fluid">
                    </div>
                </div>

                <div class="tab-pane fade" id="mesajlar" role="tabpanel">
                    <br>
                    <ul>
                        <li>Karşınızdaki oyuncuya buradan telefonuna mesaj gönderebilirsiniz.</li>
                        <li>Karşınızdaki oyuncuyu buradan telefonu arayabilirsiniz.</li>
                    </ul>
                    <div class="alert alert-info">
                        Oyuncuyu aramak için ilk önce mesajına gitmeniz gerekiyor, ardından yukarıda sağda arama
                        simgesine tıklayın.
                    </div>
                    <div class="mx-auto text-center">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_mesajlar.png" alt="Telefon - Mesajlar"
                             class="img-fluid">
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs mt-3" id="ekstraTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="borsa-tab" data-bs-toggle="tab" href="#borsa"
                       role="tab">Borsa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="hesap-tab" data-bs-toggle="tab" href="#hesapmakinesi" role="tab">Hesap
                        Makinesi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="ayarlar-tab" data-bs-toggle="tab" href="#ayarlar"
                       role="tab">Ayarlar</a>
                </li>
            </ul>

            <div class="tab-content" id="ekstraTabsContent">
                <div class="tab-pane fade show active" id="borsa" role="tabpanel">
                    <br>
                    <ul>
                        <li>Kurlarda gerçekleşen olayları görüntülemek için kullanabilirsiniz.</li>
                        <li>Örnek: BTC, AVAX, ETH, USDT, DOGE, SOL</li>
                    </ul>
                    <div class="mx-auto text-center">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_borsa.png" alt="Telefon - Borsa"
                             class="img-fluid">

                    </div>
                </div>

                <div class="tab-pane fade" id="hesapmakinesi" role="tabpanel">
                    <br>
                    <ul>
                        <li>Toplama, Çıkarma, Çarpma, Bölme işlemi yapmak için kullanabilirsiniz.</li>
                    </ul>
                    <div class="mx-auto text-center">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_hesapmak.png"
                             alt="Telefon - Hesap Makinesi"
                             class="img-fluid">

                    </div>
                </div>

                <div class="tab-pane fade" id="ayarlar" role="tabpanel">
                    <br>
                    <ul>
                        <li>Telefonun renk ayarlarını buradan değiştirebilirsiniz.</li>
                    </ul>
                    <div class="mx-auto text-center">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_ayarlar.png" alt="Telefon - Ayarlar"
                             class="img-fluid">

                    </div>
                </div>
            </div>
        </div>

        <hr>
        <br>

        <div>
            <h3 id="city">Önemli yerler</h3>
            <br>
            <p>Şehirdeki herkesin bilmesi gereken yerlerden kareler</p>
            <div class="alert alert-success mobile-content" role="alert">
                <p>Resimlerin üzerine tıklarsanız kısa yazımızı görebilirsiniz.</p>
                <br>
            </div>
            <div class="row" id="cardContainer">
                <?php foreach ($darkrpCity as $index => $city): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo htmlspecialchars($city['image']); ?>" class="card-img-top"
                                 alt="<?php echo htmlspecialchars($city['title']); ?>"
                                 data-bs-toggle="modal"
                                 data-bs-target="#modal<?php echo $index; ?>">
                            <div class="card-body">
                                <small class="card-title"><?php echo htmlspecialchars($city['title']); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal<?php echo $index; ?>" tabindex="-1"
                         aria-labelledby="modalLabel<?php echo $index; ?>" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        <?php echo htmlspecialchars($city['title']); ?>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo htmlspecialchars($city['image']); ?>" class="img-fluid"
                                         alt="<?php echo htmlspecialchars($city['title']); ?>">
                                    <hr style="border: none">
                                    <p><?php echo htmlspecialchars($city['description']); ?></p>
                                    <?php if (isset($city["basealert"]) && $city["basealert"]) { ?>
                                        <div class="alert alert-warning" role="alert">
                                            Size ait olmıyan Daireler/Binalarda bitki yetiştiriciliği vb. eylemler
                                            yapamazsınız.
                                        </div>
                                    <?php } ?>
                                    <hr style="border: none">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <hr>
        <br>

        <div>
            <h3 id="depo">Depoya eşyamı nasıl koyabilirim?</h3>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_depo.png" width="350" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Cüzi miktar karşılığında deponıza eşya koyabilir veya alabilirsiniz.</li>
                        <li>Depoya koyulan eşya ölünce düşmez.</li>
                        <li>Envantere belirli sayıda silah, shipment alabilirsiniz unutmayın.</li>
                        <li>Etkileşime geçmek için "e" tuşunu kullanın.</li>
                    </ul>
                    <hr>
                    <ol>
                        <li>Depo NPC yanına gidiniz (Banka'da Mevcut).</li>
                        <li>Eşyanızı yukarıdaki listeye sürükleyiniz.</li>
                    </ol>
                </div>

            </div>

            <hr>
            <br>

            <div>
                <h3 id="atm">ATM Nasıl Kullanılıyor?</h3>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_atm.png" width="350" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Buradan dilerseniz para çekebilir veya para yatırabilirsiniz. Yatırmak/Çekmek
                                için
                                ATM altındaki butonların üstüne gelip "e" tuşuna basmanız yeterli.
                            </li>
                        </ul>
                        <hr>
                        <ol style="list-style-type: none;">
                            <li style="display: flex;">
                                <span style="margin-right: 5px;">1)</span> 3 Slotunuzdaki Kredi Kartınızı
                                elinize alınız.
                            </li>
                            <li style="display: flex;">
                                <span style="margin-right: 5px;">2)</span> Sol Click yapınız.
                            </li>
                        </ol>

                    </div>
                </div>
            </div>

            <hr>
            <br>

            <div>
                <h3 id="build">Build</h3>
                <br>
                <p>"Q" Tuşuna basarak eşyalara göz atabilirsiniz. Her eşyayı çıkartamayabilirsiniz bazı eşyalar
                    sunucumuzda kara listeye alınır.</p>
                <p>Göz at kısmından bizim addonlarımıza ait eşyaları kullanabilir veya Garry's Mod sunduğu
                    eşyaları
                    kullanabilirsiniz.</p>
                <figure>
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_qmenu.png" alt="" class="img-fluid">
                    <figcaption></figcaption>
                </figure>
            </div>

            <hr>
            <br>

            <div>
                <h3 id="toolgun">Physhic Gun ile Tool Gun Hakkında</h3>
                <br>
                <ul>
                    <li>Eşyaları sabitlemek istiyorsanız Physhic Gun sahip olmalısınız, ardından eşyaya sağ
                        click
                        ile tıklamalısınız.
                    </li>
                    <li>Görünmez kapı yapmak istiyorsanız Tool Gun sahip olmalısınız.</li>
                </ul>

                <h5> Bazı Tool Gun özellikleri </h5>
                <br>
                <div class="accordion" id="toolgunAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseMaterial" aria-expanded="true"
                                    aria-controls="collapseMaterial">
                                Materyal
                            </button>
                        </h2>
                        <div id="collapseMaterial" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Nesnenin materyalini değiştirmenizi sağlar. Örneğin ahşap yapabilir, metal
                                yapabilirsiniz.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseColor" aria-expanded="false"
                                    aria-controls="collapseColor">
                                Renk
                            </button>
                        </h2>
                        <div id="collapseColor" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Nesneyi boyamanızı sağlar. Örneğin kırmızıya boyayabilirsiniz.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseAngleTool" aria-expanded="false"
                                    aria-controls="collapseAngleTool">
                                Açı-Matik
                            </button>
                        </h2>
                        <div id="collapseAngleTool" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Nesnenin yönünü X, Y, Z koordinatları belirterek değiştirmenizi sağlar. Örneğin
                                bir nesneyi çapraz bakacak şekilde ayarlayabilirsiniz.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseInvisibleDoor" aria-expanded="false"
                                    aria-controls="collapseInvisibleDoor">
                                Görünmez Kapı
                            </button>
                        </h2>
                        <div id="collapseInvisibleDoor" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Görünmez kapıya bir aktifleştirme tuşu atayıp aynı zamanda düğme ile keypad aynı
                                tuşları atarsanız, bunlardan çıkacak doğru ya da yanlış cevaba göre görünmez
                                kapının durumu da değişecektir.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseStacker" aria-expanded="false"
                                    aria-controls="collapseStacker">
                                İstifleyici
                            </button>
                        </h2>
                        <div id="collapseStacker" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                İstifleyici, belirttiğiniz ayarlara göre aynı eşyayı belirtilen konuma göre
                                spawnlar.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseDuplicator" aria-expanded="false"
                                    aria-controls="collapseDuplicator">
                                Kopyalayıcı
                            </button>
                        </h2>
                        <div id="collapseDuplicator" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Oyun içerisinde yaptığınız yapıları kaydetmenize olanak sağlar. İlk önce bir
                                konum seçersiniz, bu genellikle aşağıdan olur; sonrasında ise yapınız bittiği
                                yerin yukarısını seçersiniz ve kaydedersiniz.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBuddies" aria-expanded="false"
                                    aria-controls="collapseBuddies">
                                Buddies
                            </button>
                        </h2>
                        <div id="collapseBuddies" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Yararlı şeyler kategorisinde yer alır. Yaptığınız yapıların arkadaşlarınızda
                                taşınmasına veya silinmesine olanak veren bir sistemdir.
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <hr>
            <br>

            <div>
                <h3 id="xp">Daha Fazla XP Nasıl Kazanırım?</h3>
                <div class="alert alert-danger" role="alert">
                    15 dakikada gelen XP için geçerlidir. Eşya toplamaya yönelik XP artırımı arıyorsanız, oyunda
                    etüt merkezini ziyaret ediniz.
                </div>
                <p>Daha fazla XP kazanmak için şu yollar mevcuttur:</p>
                <ul style='list-style-type: "> "'>
                    <li><strong class="text-primary-emphasis">[MG] Etiketi:</strong> Steam hesabınızın profil
                        ismi düzenleme kısmına gidin. Profilinizi düzenleyerek profil adınızın sonuna [MG]
                        ekleyin; bu sayede alacağınız XP miktarı artacaktır.
                    </li>
                    <li><strong class="text-success-emphasis">İmam:</strong> Oyunda kendinizi imam
                        üfletebilirsiniz. Bu, size ölene kadar veya meslek değiştirene kadar %25 daha fazla XP
                        kazandıracaktır.
                    </li>
                    <li><strong class="text-secondary">VIP, VIP+ Satın Alma:</strong> VIP veya VIP+ alarak XP
                        değerlerinizi, VIP ya da VIP+ süreniz boyunca artırabilirsiniz.
                    </li>
                    <li><strong class="text-danger-emphasis">Happy Hours:</strong> Oyunda 18:00 - 24:00 arasında
                        geçerli olan 2x XP fırsatıdır.
                    </li>
                    <li><strong class="text-primary-emphasis">Etüt merkezi:</strong> Geçici olarak öğrenme
                        becerilerinizi geliştirir.
                    </li>
                    <li><strong class="text-success-emphasis">Baskın:</strong> Baskınlarda ele geçirilen
                        araçlardan kazanabilirsiniz. <span
                                class="text-danger-emphasis">(Baskın süresi boyunca)</span></li>
                    <li><strong class="text-secondary">Bazı saatlerde üstadlar tarafından x2/x4 XP
                            açılmaktadır.</strong></li>
                    <li><strong class="text-danger-emphasis">XP eşyaları satın alabilirsiniz.</strong></li>
                </ul>

            </div>

            <hr>
            <br>

            <div>
                <h3 id="meslekperm">Ücretli Meslekler neler?</h3>
                <ul class="list-group mb-3">
                    <div class="alert alert-info" role="alert">
                        Satın alım için discord sunucumuzda ticket açmanız gerekmektedir.
                    </div>
                    <?php
                    foreach ($darkrpPaidJobs as $jobName => $jobDetails) {
                        $titleClass = "text-primary-emphasis";
                        if (isset($jobDetails['dolar']) && $jobDetails['dolar']) {
                            $titleClass = "text-success-emphasis";
                        } elseif (isset($jobDetails['ithal']) && $jobDetails['ithal']) {
                            $titleClass = "text-warning-emphasis";
                        } elseif (isset($jobDetails['bitki']) && $jobDetails['bitki']) {
                            $titleClass = "text-danger-emphasis";
                        }
                        ?>
                        <li class="list-group-item">
                            <h5 class="<?= $titleClass; ?>"><?= $jobName; ?></h5>
                            <p><?= $jobDetails['description']; ?></p>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <hr>
            <br>
            <div>
                <h3 id="item">Eşyalar</h3>
                <p>Oyun içerisinde gelişiminize katkı sağlayacak birçok eşya mevcuttur:</p>
                <div class="alert alert-warning" role="alert">
                    Aksi belirtilmedikçe katkı sağladıkları XP, 15 dakikada gelen XP'dir.
                </div>

                <div class="accordion" id="accordionItems">
                    <?php foreach ($darkrpItems as $category => $categoryData): ?>
                        <?php
                        $categoryId = str_replace(' ', '', strtolower($category));
                        $categoryClass = $categoryData['class'];
                        $itemType = $categoryData['list-style-type'] . " ";
                        $items = $categoryData[0];
                        ?>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed <?= $categoryClass ?>" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse<?= $categoryId ?>"
                                        aria-expanded="false" aria-controls="collapse<?= $categoryId ?>">
                                    <?= $category ?>
                                </button>
                            </h2>

                            <div id="collapse<?= $categoryId ?>" class="accordion-collapse collapse"
                                 aria-labelledby="heading<?= $categoryId ?>" data-bs-parent="#accordionItems">
                                <div class="accordion-body">
                                    <?php
                                    if (isset($categoryData['alert-message']) && $categoryData['alert-message']) {
                                        ?>
                                        <div class="alert alert-<?= $categoryData['alert-color'] ? $categoryData['alert-color'] : 'info' ?>"
                                             role="alert">
                                            <?= $categoryData['alert-message'] ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <ul class="list-group">
                                        <?php foreach ($items as $item): ?>
                                            <li class="list-group-item">
                                                <strong class="<?= $item['class'] ?>"><?= $item['name'] ?>
                                                    :</strong> <?= $item['description'] ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>


                <hr>
                <blockquote>
                    Başlarken bilmeniz gerekenler serimiz burada son bulmaktadır. Daha fazlası için diğer
                    rehberlerimize de göz atmayı unutmayın.
                </blockquote>

                <div class="content-ref-box">
                    <p>
                        <a id="sssBox" href="<?= $baseUrl; ?>/darkrp-baslarken/sss">
                            <i class="fas fa-question"></i> Sıkça Sorulan Sorular
                        </a>
                    </p>
                </div>
            </div>

        </div>

</main>