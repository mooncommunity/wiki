<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="standartcolor mb-4">DarkRP Başlarken</h1>
        <p>Her zaman ilk başlangıçlar zordur, bu kısımdaki bilgiler sunucumuzun temel
            mekaniklerini anlamana yardımcı olacak. Unutmamalısın ki öğrenmeye açık olman gerek. Bu rehber sadece temel
            kısımlara değinmektedir.</p>
        <div>
            <h2 class="standartcolor" id="workshop">Gerekli Eklentiler ve Ayarlar</h2>
            <br>
            <div class="alert alert-info" role="alert">
                <span><a href="<?= $darkrp_workshop ?>" target="_blank">
                    <?= $darkrp_workshop ?>
                    </a> hepsine tek tek abone olmalısınız. </span>
            </div>

            <ul style="list-style-type: '* ">
                <li><b class="text-teal">Workshop Eklentileri</b>: <a href="<?= $darkrp_ip1 ?>"
                                                                      target="_blank">DarkRP
                        sunucumuza</a> katılmadan önce, <a
                            href="<?= $darkrp_workshop ?>" target="_blank">workshop</a>
                    indirin. Eğer oyunda iseniz indirme işlemi sonrası Garry's mod komple kapatıp açınız.
                </li>
                <li><b class="text-warning">Chromium Betası</b>: Daha iyi performans ve özellikler
                    için <b>Chromium</b> betasına
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

        <br>
        <div>
            <h2 class="standartcolor" id="tus">Temel Kısayollar</h2>
            <br>
            <ul id="tusUL" style="list-style-type: '- ">
                <li><strong><span class="key">F1</span></strong><span> FPS görünümü ve üçüncü şahıs (third-person) kamera görünümü arasında geçiş yapabilirsiniz.</span>
                </li>
                <li><strong><span class="key">F2</span></strong><span> Sahip olduğunuz araçlara arkadaşlarınızı ekleyebilir, ev kiralayabilirsiniz (Kapıya bakıp yapmalısınız), evinize arkadaşlarınızı ekleyebilirsiniz. </span>
                </li>
                <li><strong><span class="key">F3</span></strong><span> Araç içinde iseniz plaka değişimi yapmanızı sağlar. Ek olarak araçta değilseniz fare imlecinizi belirtir. </span>
                </li>
                <li><strong><span class="key">F4</span></strong><span> Meslek, sevkiyat ve varlıklar menüsüne erişebilirsiniz.</span>
                </li>
                <li><strong><span class="key">TAB</span></strong><span> Oyuncu listesi ve durumlarına bakabilirsiniz.
                </span></li>
                <li><strong><span class="key">M</span></strong><span>Oyunun haritasının küçültülmüş halini gösterir. (Yokuş altına inince/Çıkınca harita değişir) </span>
                </li>
                <li><strong><span class="key">T</span></strong><span> Teslim olmanızı sağlar. Eğer teslim olduysanız da elinizi indirmenizi sağlar. </span>
                </li>
                <li><strong><span class="key">I</span></strong><span> Envanterinizi açmanızı sağlar.</span></li>
            </ul>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="chat">Sohbet ve İletişim</h2>
            <br>
            <ul class="nav nav-tabs" id="chatTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link darkrpgenel active" id="general-tab" data-bs-toggle="tab" href="#general"
                       role="tab">Genel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link darkrplegal" id="legal-tab" data-bs-toggle="tab" href="#legal" role="tab">Devlet
                        Çalışanı</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link darkrpesnaf" id="esnaf-tab" data-bs-toggle="tab" href="#esnaf" role="tab">Esnaf
                        ve Siviller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link darkrpillegal" id="illegal-tab" data-bs-toggle="tab" href="#illegal"
                       role="tab">Yasadışı Organizasyonlar</a>
                </li>
            </ul>

            <div class="tab-content" id="chatTabsContent">
                <div class="tab-pane fade show active" id="general" role="tabpanel">
                    <br>
                    <ul style="list-style-type: '— ';">
                        <li><strong>// veya /ooc &lt;Mesaj&gt;:</strong><span> Oyun dışında genel konuşmalar yapmak
                            için kullanılır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>//
                                Etraf error gözüküyor nasıl çözebilirim?</code></li>
                        <hr>
                        <li><strong>/looc &lt;Mesaj&gt;:</strong><span> Lokal OOC sohbeti yapmanızı
                            sağlar.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/looc
                                Arkadaşlar rol ortasında hatalı emote atmayın lütfen</code></li>
                        <hr>
                        <li><strong>/reklam veya /advert &lt;Mesaj&gt;:</strong><span> IC (In-Character) reklamlar ve
                            duyurular
                            yapmanızı sağlar.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/reklam
                                Şehirde yeni açılan Moon AVM
                                bekleriz!</code></li>
                        <hr>
                        <li><strong>!asay &lt;Mesaj&gt;:</strong><span> Yetkili sohbete mesaj
                            yazar</span><br><em class="text-success-emphasis">Örnek:</em><br><code>!asay
                                Duvar sokağında MassRDM yapan biri var izliyebilir misiniz?</code>
                        </li>
                        <hr>
                        <li><strong>/pm &lt;Kişi&gt;:</strong><span> Belirli bir kullanıcıya özel mesaj atmanızı
                            sağlar.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/pm Ozgur
                                MoonGiller Sunucu hakkında bir şey
                                sorabilir
                                miyim?</code></li>
                        <hr>
                        <li>
                            <strong>/me:</strong><span> Karakterinizin yaptığı eylemleri anlatmak için kullanılır.</span><br><em
                                    class="text-success-emphasis">Örnek:</em><br><code>/me
                                masaya oturur</code></li>
                        <hr>
                        <li><strong>/dropmoney &lt;Miktar&gt;:</strong><span> Yere belirtiğiniz miktarda para
                            atar.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/dropmoney
                                1000</code></li>
                        <hr>
                        <li><strong>/drop:</strong><span> Elinizde atılabilir silah var ise yere atmanızı
                            sağlar.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/drop</code>
                        </li>
                        <hr>
                        <li><strong>/calladmin &lt;Sebep&gt;:</strong><span> Yetkili çağırmak için
                            kullanılır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/calladmin
                                Duvar arasına sıkıştım çekebilir misin?</code></li>
                        <hr>
                        <li><strong>/write &lt;Yazı&gt;:</strong><span> Döküman yazmak için
                            kullanılır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/write
                                Michael MoonGiller aklı dengesi yerinde değildir.</code></li>
                        <hr>
                        <li><strong>/check &lt;Kişi&gt;
                                &lt;Miktar&gt;:</strong><span> Çek yazmak için kullanılır.</span><br><em
                                    class="text-success-emphasis">Örnek:</em><br><code>/check
                                'Kardelen MoonGiller' 1000</code></li>
                        <hr>
                        <li><strong>!menu:</strong><span> Genel menüyü
                            açar.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>!menu</code>
                        </li>
                        <hr>
                        <li><strong>!parti</span></strong><span> Parti menüsünü
                            açar.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>!parti</code>
                        </li>
                        <hr>
                        <li><strong>/job &lt;metin&gt;:</strong><span> Oyuncu Karakteriniz altındaki yazıyı değiştirmenizi
                            sağlar</span>
                            <br><em class="text-success-emphasis">Örnek:</em><br><code>/job Asayiş Polis Memuru</code>
                        </li>
                        <br>
                    </ul>
                </div>

                <div class="tab-pane fade" id="legal" role="tabpanel">
                    <br>
                    <ul style="list-style-type: '— '">
                        <li><strong>/911 &lt;Mesaj&gt;:</strong><span> 911 Hattına mesaj
                            gönderir.<br><em class="text-success-emphasis">Örnek:</em><br><code>/911 Karakolda ağır silahlı adamlar var
                                desteğe
                                ihtiyacım var</span></code></li>
                        <hr>
                        <li><strong>/t &lt;Mesaj&gt;:</strong><span> Telsizin frekansındaki diğer kişilere mesajınız
                            gönderir.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/t 92-61
                                konuşuyor just caddesindeki dönerci
                                önüne
                                takviye unsur talebimiz mevcut efendim</code></li>
                        <hr>
                        <li><strong>/broadcast &lt;Mesaj&gt;:</strong><span> Belediye Başkanı iken duyuru
                            gönderir.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/broadcast Artan
                                suç nedeniyle sokağa çıkma
                                yasağı
                                başlatılacaktır.</code></li>
                        <hr>
                        <li><strong>/lockdown:</strong><span> Belediye Başkanı iken sokağa çıkma yasağı
                            başlatır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/lockdown</code>
                        </li>
                        <hr>
                        <li><strong>/unlockdown:</strong><span> Belediye Başkanı iken sokağa çıkma yasağını
                            bitirir.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/unlockdown</code>
                        </li>
                        <hr>
                        <li><strong>/lottery:</strong><span> Belediye Başkanı iken piyango başlatmak için
                            kullanılır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/lottery</code>
                        </li>
                        <hr>
                        <div class="alert alert-info" role="alert">
                            <span>Warrant ve Wanted işlemleri için GBT Tablet kullanmanız önerilir.</span>
                        </div>
                        <br>
                        <li><strong>/warran<span class="key">T</span></strong><span> Aranma izni çıkarmak için
                            kullanılır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/warrant
                                'Micheal MoonGiller' 'Yasadışı
                                Madde
                                Şüphesi'</code></li>
                        <hr>
                        <li><strong>/unwarran<span class="key">T</span></strong><span> Aranma iznini iptal etmek için
                            kullanılır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/unwarrant
                                'Micheal MoonGiller'</code></li>
                        <hr>
                        <li><strong>/wanted:</strong><span> İllegal eylem sergilediği kesinleşen oyuncu için
                            kullanılır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/wanted 'Hasan
                                MoonGiller' 'Banka
                                Soygunu'</code></li>
                        <hr>
                        <li><strong>/unwanted:</strong><span> Aranıyor iptal etmek için
                            kullanılır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/unwanted
                                'Hasan MoonGiller'</code>
                        </li>
                        <hr>
                        <li><strong>/baskin:</strong><span> Baskın
                            başlatır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>/baskin</code>
                        </li>
                        <hr>
                        <li><strong>/baskinbitir:</strong><span> Baskını
                            bitirir.</span><br><em
                                    class="text-success-emphasis">Örnek:</em><br><code>/baskinbitir</code></li>
                    </ul>
                    <br>
                </div>

                <div class="tab-pane fade" id="illegal" role="tabpanel">
                    <br>
                    <ul style="list-style-type: '— '">
                        <li><strong>/channel &lt;Numara&gt;:
                            </strong><span> Kanalınızı belirtiğiniz numara ile değiştirir.</span><br><em
                                    class="text-success-emphasis">Örnek:</em><br><code>/channel
                                5</code></li>
                        <hr>
                        <li><strong>/radio
                                &lt;Mesaj&gt;:
                            </strong><span
                            > Bulunduğunuz kanala mesaj gönderir.</span><br><em
                                    class="text-success-emphasis">Örnek:</em><br><code>/radio
                                Burada
                                hareketlilik var</code></li>
                        <hr>
                        <li><strong>/mug:</strong><span> Oyun içerisinde oyuncu soymak için kullanılır.</span><br><em
                                    class="text-success-emphasis">Örnek:</em><br><code>/mug</code></li>
                        <hr>
                        <li><strong>/soygun:</strong><span> Oyun içerisinde soygun başlatmak için kullanılır. (Arama
                            çalma,
                            illegal baskını)</span><br><em
                                    class="text-success-emphasis">Örnek:</em><br><code>/soygun</code></li>
                        <hr>
                        <li><strong>/soygunbitir:</strong><span> Oyun içerisinde soygun bitirmek için
                            kullanılır.</span><br><em
                                    class="text-success-emphasis">Örnek:</em><br><code>/soygunbitir</code></li>
                        <hr>
                        <li><strong>!asay isyan:</strong><span> Sokağa çıkma yasağında isyan etmek için
                            kullanılır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>!asay
                                isyan</code></li>
                        <hr>
                        <li><strong>!asay +1:</strong><span> Toplu eylemlerde eylem gerçekleştirdiğinizi
                            belirtmek
                            için kullanılır.</span><br><em class="text-success-emphasis">Örnek:</em><br><code>!asay
                                +1</code></li>
                        <hr>
                        <li><strong>!dondur:</strong><span> Para Basma Makineleri, Saksılarınızı dondurur. <strong>Dondurmayı
                                geri açmanın komutu
                                bulunmamaktadır.</strong><br><em
                                        class="text-success-emphasis">Örnek:</em><br><code>!dondur</code></li>
                    </ul>
                    <br>
                </div>

                <div class="tab-pane fade" id="esnaf" role="tabpanel">
                    <br>
                    <ul style="list-style-type: '— '">
                        <li><strong>/balikbug:</strong><span> Balıkçıda Oltanız Bug girdiğinde kullanabilceğiniz
                                komut.</span>
                            <br><em class="text-success-emphasis">Örnek:</em><br><code>/balikbug</code></li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="weaponslot">Oyundaki tüm silahlarım nerede?</h2>
            <br>
            <p>Üzerinizde bulunan tüm silahlarınız 1, 2, 3, 4, 5 slotlarınızda bulunmaktadır. Bu slotlara
                erişmek
                için '1', '2' gibi numaralara basıp kullanabilirsiniz veya mouse'unuzun orta tekerleği ile
                erişebilirsiniz.</p>
            <div class="col-12 mx-auto text-center">
                <img src="<?= $baseUrl ?>/assets/image/darkrp_silahbar.png" alt="Silahlar"
                     class="img-fluid mx-auto d-block">
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="build">Build</h2>
            <br>
            <p><span class="key">Q</span> Tuşuna basarak eşyalara göz atabilirsiniz. Her eşyayı çıkartamayabilirsiniz
                bazı eşyalar
                sunucumuzda kara listeye alınır.</p>
            <p>Göz at kısmından bizim addonlarımıza ait eşyaları kullanabilir veya Garry's Mod sunduğu
                eşyaları
                kullanabilirsiniz.</p>
            <div>
                <img src="<?= $baseUrl ?>/assets/image/darkrp_qmenu.png" alt="" class="img-fluid mx-auto d-block">
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="toolgun">Physhic Gun ile Tool Gun Hakkında</h2>
            <br>
            <ul style="list-style-type: '* '">
                <li class="text-success-emphasis">Physhic Gun/Fizik Gun ve Tool Gun "Yapı Market Sahibi"
                    mesleğindeki insanlardan satın alabilirsiniz.
                </li>
                <li class="text-primary-emphasis">Eşya sabitlemek, Eşya Döndürmek, Eşyayı Hareket ettirmek için <b>Physhic
                        Gun/Fizik Gun</b> sahip olmalısınız.
                </li>
                <li class="text-secondary-emphasis">Görünmez Kapı yapmak, button koymak, build kopyalamak için <b>Tool
                        Gun</b> sahip olmalısınız.
                </li>
            </ul>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="toolgun-ozellikleri">Bazı Tool Gun özellikleri</h3>
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
        <br>
        <div>
            <h4 class="standartcolor" id="toolgun-dugme">Düğmeli Görünmez Kapı Nasıl Yapılır?</h4>
            <div class="row">
                <div class="col-12">
                    <ol>
                        <li>İlk önce <span class='key'>Q</span> basın. Ardından Sağ taraftan Düğme Seçiniz.</li>
                        <li>Düğme Bir Tuş Atınız Örneğin <span class='key'>Numpad 0</span></li>
                        <li>Düğmeyi koyacağınız yere tool gun ile vurunuz.</li>
                        <li><span class='key'>Q</span> Basın. Ardından Sağ Taraftan Görünmez Kapı Seçiniz.</li>
                        <li>Düğme ile aynı tuşu seçiniz ve görünmez kapı olacak noktayı tool gun ile vurunuz.</li>
                    </ol>
                </div>
                <div class="accordion" id="accordion-toolgun-dugme">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-purple" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse-toolgun-dugme">
                                Video Örnek
                            </button>
                        </h2>
                        <div id="collapse-toolgun-dugme" class="accordion-collapse collapse"
                             data-bs-parent="#accordion-toolgun-dugme">
                            <div class="accordion-body">
                                <div class="video-container">
                                    <video src="<?= $baseUrl ?>/assets/video/darkrp_toolgun_button.mp4"
                                           class="player img-fluid col-12" controls muted autoplay loop></video>
                                    <div class="yt-player ratio ratio-16x9" style="display: none;">
                                        <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/iRZgtwDin9Y?si=nz-XEMMpx1pMuNfg"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen></iframe>
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
            <h4 class="standartcolor" id="toolgun-keypad">Keypad/Parola Görünmez Kapı Nasıl Yapılır?</h4>
            <div class="row">
                <div class="col-12">
                    <ol>
                        <li>İlk önce <span class='key'>Q</span> basın. Ardından Sağ taraftan Keypad Seçiniz.</li>
                        <li>Ne kadar Süre açık kalıcağı kısmını 5 saniye olarak ayarlayın.</li>
                        <li>Parola Giriniz (En fazla 4 hane olabilir)</li>
                        <li>Keypad için Açma Tuşu Atınız Örneğin <span class='key'> Numpad +</span></li>
                        <li>Keypad koyacağınız yere tool gun ile vurunuz.</li>
                        <li><span class='key'>Q</span> Basın. Ardından Sağ Taraftan Görünmez Kapı Seçiniz.</li>
                        <li>Düğme ile aynı tuşu seçiniz ve görünmez kapı olacak noktayı tool gun ile vurunuz.</li>
                    </ol>
                </div>
                <div class="accordion" id="accordion-toolgun-keypad">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-purple" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse-toolgun-keypad">
                                Video Örnek
                            </button>
                        </h2>
                        <div id="collapse-toolgun-keypad" class="accordion-collapse collapse"
                             data-bs-parent="#accordion-toolgun-keypad">
                            <div class="accordion-body">
                                <div class="video-container">
                                    <video src="<?= $baseUrl ?>/assets/video/darkrp_toolgun_keypad.mp4"
                                           class="player img-fluid col-12" controls muted autoplay loop></video>
                                    <div class="yt-player ratio ratio-16x9" style="display: none;">
                                        <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/8swMXC5T0M8?si=QO8olTUtUtzxuTi4"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen></iframe>
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
            <h4 class="standartcolor" id="toolgun-isik">Işık Nasıl Koyarım?</h4>
            <div class="row">
                <div class="col-12">
                    <ol>
                        <li>İlk önce <span class='key'>Q</span> basın. Ardından Sağ taraftan Işık Seçiniz.</li>
                        <li>Halat uzunluğu vb. Ayarlayın</li>
                        <li>Renk Seçiniz</li>
                        <li>Işık koyacağınız yere tool gun ile vurunuz.</li>
                    </ol>
                </div>
                <div class="accordion" id="accordion-toolgun-isik">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-purple" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse-toolgun-isik">
                                Video Örnek
                            </button>
                        </h2>
                        <div id="collapse-toolgun-isik" class="accordion-collapse collapse"
                             data-bs-parent="#accordion-toolgun-isik">
                            <div class="accordion-body">
                                <div class="video-container">
                                    <video src="<?= $baseUrl ?>/assets/video/darkrp_toolgun_isik.mp4"
                                           class="player img-fluid col-12" controls muted autoplay loop></video>
                                    <div class="yt-player ratio ratio-16x9" style="display: none;">
                                        <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/PPWvGxTN5po?si=EE2Q3Cd-lilWJPdF"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen></iframe>
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
            <h2 class="standartcolor" id="city">Önemli yerler</h2>
            <br>
            <p>Şehirdeki herkesin bilmesi gereken yerlerden kareler</p>
            <div class="alert alert-success mobile-content" role="alert">
                <span>Resimlerin üzerine tıklarsanız kısa yazımızı görebilirsiniz.</span>
            </div>
            <div class="row" id="cardContainer">
                <?php foreach ($darkrpCity as $index => $city): ?>
                    <div class="col-md-4" data-bs-toggle="modal"
                         data-bs-target="#modal<?php echo $index; ?>">
                        <div class="card">
                            <img src="<?php echo htmlspecialchars($city['image']); ?>" class="card-img-top"
                                 alt="<?php echo htmlspecialchars($city['title']); ?>">
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
                                    <img src="<?php echo htmlspecialchars($city['image']); ?>"
                                         class="img-fluid mx-auto d-block"
                                         alt="<?php echo htmlspecialchars($city['title']); ?>">
                                    <hr style="border: none">
                                    <p><?php echo htmlspecialchars($city['description']); ?></p>
                                    <?php if (isset($city["basealert"]) && $city["basealert"]) { ?>
                                        <div class="alert alert-warning" role="alert">
                                            <span>Size ait olmıyan Daireler/Binalarda bitki yetiştiriciliği vb. eylemler
                                                yapamazsınız.</span>
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
        <br>
        <div>
            <h2 class="standartcolor" id="phone">Telefon nasıl kullanırım?</h2>
            <br>
            <div class="accordion" id="phoneAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button text-danger" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePhoneGlobal" aria-expanded="true"
                                aria-controls="collapsePhoneGlobal">
                            Genel Bilgilendirme
                        </button>
                    </h2>
                    <div id="collapsePhoneGlobal" class="accordion-collapse collapse show"
                         data-bs-parent="#phoneAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <br>
                                    <p>Karakterinizin birinci silah slotunda yer almaktadır.</p>
                                    <p class="text-primary-emphasis">Fare ile telefonda gezinebilirsiniz. Eğer
                                        fareyi oynattığınızda
                                        karakteriniz
                                        hareket ediyorsa, sol tıklamaya basıp tekrar deneyiniz.</p>
                                    <p class="text-teal">Karakterinizi tekrar hareket ettirmek için telefonu ekranın
                                        dışına doğru
                                        sürükleyiniz.</p>
                                </div>
                                <div class="col-md-2 col-12">
                                    <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon.png"
                                         style="align-items: center;" alt="Telefon"
                                         class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePhoneCamera" aria-expanded="true"
                                aria-controls="collapsePhoneCamera">
                            Kamera
                        </button>
                    </h2>
                    <div id="collapsePhoneCamera" class="accordion-collapse collapse"
                         data-bs-parent="#phoneAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <p>Oyun içerisinde fotoğraf çekmenizi sağlar</p>
                                    <p class="text-primary-emphasis"><i
                                                class="fa-solid fa-rotate-right"></i>
                                        resmine basarak kameranızın ön kemaraya ve ya arka kameraya
                                        çevirebilirsiniz.</p>
                                </div>
                                <div class="col-md-2 col-12">
                                    <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_kamera.png"
                                         style="align-items: center;" alt="Telefon - Kamera"
                                         class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePhoneGaleri" aria-expanded="false"
                                aria-controls="collapsePhoneGaleri">
                            Galeri
                        </button>
                    </h2>
                    <div id="collapsePhoneGaleri" class="accordion-collapse collapse"
                         data-bs-parent="#phoneAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <p>Çektiğiniz fotoğraflar burada yer almaktadır.</p>
                                    <p class="text-primary-emphasis">
                                        <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                        simgesine basarak X'e (eski adıyla Twitter) yüklemek üzere buluta
                                        yükleyebilirsiniz.
                                    </p>
                                </div>
                                <div class="col-md-2 col-12">
                                    <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_galeri.png"
                                         style="align-items: center;" alt="Telefon - Galeri"
                                         class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePhoneTwitter" aria-expanded="false"
                                aria-controls="collapsePhoneTwitter">
                            X (Twitter)
                        </button>
                    </h2>
                    <div id="collapsePhoneTwitter" class="accordion-collapse collapse"
                         data-bs-parent="#phoneAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <p>Oyun içi sosyal medya platformudur. Konuşulan paylaşılan
                                        içerikler IC olarak değerlendirilir.</p>
                                    <p class="text-primary-emphasis">
                                        <i class="fa-solid fa-paperclip"></i>
                                        simgesine basarak buluttaki fotoğrafını paylaşabilirsin.
                                    </p>
                                    <p class="text-teal">
                                        <i class="fa-regular fa-paper-plane"></i>
                                        simgesine basarak yazdığın mesajı gönderebilirsin.
                                    </p>
                                </div>
                                <div class="col-md-2 col-12">
                                    <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_twitter.png"
                                         style="align-items: center;" alt="Telefon - X(Twitter)"
                                         class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePhonePapara" aria-expanded="false"
                                aria-controls="collapsePhonePapara">
                            Papara
                        </button>
                    </h2>
                    <div id="collapsePhonePapara" class="accordion-collapse collapse"
                         data-bs-parent="#phoneAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <p>ATM Gitmeden dakikalar içinde arkadaşına para
                                        gönderebilirsin.</p>
                                    <p class="text-primary-emphasis">Buradan ayrıca bankadaki paranı kontrol
                                        edebilirsin!</p>
                                </div>
                                <div class="col-md-2 col-12">
                                    <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_papara.png"
                                         style="align-items: center;" alt="Telefon - Papara"
                                         class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePhoneMessage" aria-expanded="false"
                                aria-controls="collapsePhoneMessage">
                            Mesajlar
                        </button>
                    </h2>
                    <div id="collapsePhoneMessage" class="accordion-collapse collapse"
                         data-bs-parent="#phoneAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <p>Arkadaşınıza buradan mesaj gönderebilir ve ya
                                        arıyabilirsiniz.</p>
                                    <p class="text-danger-emphasis">Arkadaşınızı aramadan önce mesajlara girip daha
                                        sonra <i class="fa-solid fa-phone"></i> resmine tıklamalısnıız
                                    </p>
                                </div>
                                <div class="col-md-2 col-12">
                                    <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_mesajlar.png"
                                         style="align-items: center;" alt="Telefon - Mesajlar"
                                         class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePhoneBorsa" aria-expanded="false"
                                aria-controls="collapsePhoneBorsa">
                            Borsa
                        </button>
                    </h2>
                    <div id="collapsePhoneBorsa" class="accordion-collapse collapse"
                         data-bs-parent="#phoneAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <p>Canlı borsa takibi yapabilirsiniz.</p>
                                    <p class="text-primary-emphasis">BTC, AVAX, ETH , USDT, DOGE, SOL canlı olarak
                                        telefondan takip edebileceksin!</p>
                                </div>
                                <div class="col-md-2 col-12">
                                    <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_borsa.png"
                                         style="align-items: center;" alt="Telefon - Borsa"
                                         class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePhoneCalc" aria-expanded="false"
                                aria-controls="collapsePhoneCalc">
                            Hesap Makinesi
                        </button>
                    </h2>
                    <div id="collapsePhoneCalc" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <p>Basit matematik işlemleri gerçekleştirebilirsiniz.</p>
                                    <p class="text-primary-emphasis">Toplama, çıkarma, çarpma , bölme gibi işlemler
                                        yapmak daha kolay artık!</p>
                                </div>
                                <div class="col-md-2 col-12">
                                    <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_hesapmak.png"
                                         style="align-items: center;" alt="Telefon - Hesap Makinesi"
                                         class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsePhoneSettings" aria-expanded="false"
                                aria-controls="collapsePhoneSettings">
                            Ayarlar
                        </button>
                    </h2>
                    <div id="collapsePhoneSettings" class="accordion-collapse collapse"
                         data-bs-parent="#phoneAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-10 col-12">
                                    <p>Telefonun renk ayarlarını buradan değiştirebilirsiniz.</p>
                                </div>
                                <div class="col-md-2 col-12">
                                    <img src="<?= $baseUrl ?>/assets/image/darkrp_telefon_ayarlar.png"
                                         style="align-items: center;" alt="Telefon - Hesap Makinesi"
                                         class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="depo">Depoya Eşyamı Nasıl Koyabilirim?</h2>
            <br>
            <div class="row">
                <div class="col-md-8 col-12">
                    <ul style="list-style-type: '- '">
                        <li>Depo senin için güvenli bir alan! Çünkü buraya koyduğun eşyalar
                            Hayata kısa süreliğine gözlerini kapattığında veya oyunda ayrıldığında kaybolmaz.
                        </li>
                        <br>
                        <li class="text-danger-emphasis">Unutmamalısın! Her eşya istediğin kadar koyamayabilirsin
                            örneğin deponda barındırabileceğin silah sayısı kısıtlı olabilir! Ayrıca hayata kısa
                            süreliğine gözlerini kapattığında yere eşya düşürürsün.
                        </li>
                    </ul>
                    <br>
                    <ol>
                        <h5 class="standartcolor">Eşyalarımı Nasıl Depoya Koyacağım?</h5>
                        <li class="text-teal">Depo Görevlisi NPC'nin yanına gidin ve <span class="key">E</span> tuşuna
                            basınız. (Banka,
                            Benzinlik gibi
                            yerlerde depo görevlisi NPC bulunmaktadır.)
                        </li>
                        <br>
                        <li class="text-info-emphasis">Açılan ekranda eşyalarınızı yukarıya sürükleyiniz.</li>
                    </ol>
                </div>
                <div class="col-md-4 col-12">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_depo.png" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>

        <br>
        <div>
            <h2 class="standartcolor" id="atm">ATM Nasıl Kullanılıyor?</h2>
            <br>
            <div class="row">
                <div class="col-md-8 col-12">
                    <ul style="list-style-type: '* '">
                        <li>Banka senin cebindeki paralarını güvende tutabilceğin alandır. Hayata
                            kısa süreliğine gözlerini kapattığında ve ya oyunda ayrıldığında kaybolmaz. O
                            yüzden para kazandıkça ATM yatırmayı unutmamalısın
                        </li>
                        <br>
                        <li class="text-danger-emphasis">Neden mi unutmamalısın? Çünkü Hayata kısa süreliğine
                            gözlerini kapattığında yere para düşürürsün.
                        </li>
                    </ul>
                    <br>
                    <ol>
                        <h5 class="standartcolor">Paramı Nasıl Bankaya Koyacağım?</h5>
                        <li class="text-teal">Bir ATM Yanına gidiniz ve 3 silah slotunuzdan "Kredi Kartı" seçiniz.
                        </li>
                        <br>
                        <li class="text-info-emphasis">ATM Doğru tutunuz ve Sol Click yapınız.</li>
                    </ol>
                </div>
                <div class="col-md-4 col-12">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_atm.png" class="img-fluid mx-auto d-block">
                </div>
            </div>

        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="xp">Daha Fazla XP Nasıl Kazanırım?</h2>
            <br>
            <div class="alert alert-danger" role="alert">
                <span>15 dakikada kazanılacak XP ile ilgili bilgilendirme yapılmaktadır (Üretim ve Baskın hariç).  Eşya toplamaya yönelik XP artırımı arıyorsanız, oyundaki Etüt Merkezi'ni ziyaret ediniz.</span>
            </div>
            <br>
            <p>Daha fazla XP kazanmak için şu yollar mevcuttur:</p>
            <ul style='list-style-type: "> "'>
                <li><strong class="text-primary">[MG] Etiketi</span></strong> Steam hesabınızın profil
                    ismi düzenleme kısmına gidin. Profilinizi düzenleyerek profil adınızın sonuna [MG]
                    ekleyin; bu sayede alacağınız XP miktarı artacaktır.
                </li>
                <li><strong class="text-success">İmam</span></strong> Oyunda kendinizi imam
                    üfletebilirsiniz. Bu, size ölene kadar veya oyundan çıkana kadar %25 daha fazla XP
                    kazandıracaktır.
                </li>
                <li><strong class="text-danger">Happy Hours:</strong> Oyunda 18:00 - 24:00 arasında
                    geçerli olan 2x XP fırsatıdır.
                </li>
                <li><strong class="text-warning">Etüt merkezi</span></strong> Geçici olarak öğrenme
                    becerilerinizi geliştirir.
                </li>
                <li><strong class="text-info">Üretim:</strong> Bitki Yetiştiriciliği ve Para Basma Makinesi başarıyla tamamlandığında, <span class="key">E</span> tuşuna basarak XP kazanabilirsiniz.</li>
                <li><strong class="text-primary">Baskın:</strong> Baskınlarda ele geçirilen
                    araçlardan kazanabilirsiniz. <span
                            class="text-secondary">(Baskın süresi boyunca)</span></li>
                <li><strong class="text-secondary">VIP, VIP+ Satın Alma:</strong> VIP veya VIP+ alarak XP
                    değerlerinizi, VIP ya da VIP+ süreniz boyunca artırabilirsiniz.
                </li>
                <li><strong class="text-success">2x/4x Etkinlikler:</span></strong> Bazı saatlerde üstadlar tarafından
                    x2/x4 XP açılmaktadır.
                </li>
                <li><strong class="text-danger">Eşyalar:</strong> XP eşyaları satın alabilirsiniz.</li>
            </ul>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="meslekperm">Ücretli Meslekler Neler?</h2>
            <br>
            <ul style="list-style-type: '+ '">
                <li>Satın alım için discord sunucumuzda ticket açmanız gerekmektedir.</li>
                <li class="text-primary-emphasis">Mavi renkli meslekler pasif gelirlidir ve ya diğer kategorisinde yer
                    almaktadır.
                </li>
                <li class="text-success-emphasis">Yeşil meslekler kirli dolar temizler.</li>
                <li class="text-warning-emphasis">Sarı meslekler İthal eşya alım satım yaparlar.</li>
                <li class="text-danger-emphasis">Kırmızı meslekler bitki alım satım yaparlar.</li>
            </ul>
            <ul class="list-group mb-3">
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
            <h2 class="standartcolor" id="item">Eşyalar</h2>
            <p>Oyun içerisinde gelişiminize katkı sağlayacak birçok eşya mevcuttur:</p>
            <div class="alert alert-warning" role="alert">
                <span>Aksi belirtilmedikçe katkı sağladıkları XP, 15 dakikada gelen XP'dir.</span>
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
                                        <span><?= $categoryData['alert-message'] ?></span>
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