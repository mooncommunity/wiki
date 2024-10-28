<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="mb-4">TTT Başlarken</h1>
        <hr>
        <br>
        <div>
            <h3 id="gerekli-eklentiler-ve-ayarlar">Gerekli Eklentiler ve Ayarlar</h3>
            <br>
            <div class="alert alert-info" role="alert">
                <a href="https://steamcommunity.com/workshop/filedetails/?id=369504622" target="_blank">
                    https://steamcommunity.com/workshop/filedetails/?id=369504622
                </a> adresindeki tüm eklentilere tek tek abone olmanız gerekmektedir.
            </div>

            <ul>
                <li><b>Workshop Eklentileri</b>: <a href="steam://connect/91.151.94.211:28015?appid=4000"
                                                    target="_blank">TTT sunucumuza</a> katılmadan önce, <a
                            href="https://steamcommunity.com/workshop/filedetails/?id=369504622" target="_blank">workshop</a>
                    eklentilerini indiriniz. Eğer oyunda iseniz indirme işlemi sonrası Garry's Mod'u tamamen
                    kapatıp açmanız gerekmektedir.
                </li>
                <li><b>Chromium Betası</b>: Daha iyi performans ve özellikler için <b>Chromium</b> betasına
                    geçmeniz gerekmektedir.
                </li>
            </ul>

            <div class="content-ref-box">
                <p>
                    <a id="chromeBox" href="<?= $baseUrl; ?>/ttt-baslarken/chromium" target="_blank">
                        <i class="fa-brands fa-chrome"></i> Chromium nedir? Nasıl Chromium betasına geçerim?
                    </a>
                </p>
            </div>
            <br>
            <h4>Oyun deneyiminizi iyileştirmek için</h4>
            <ul>
                <li><b>Counter Strike: Source</b>: Daha iyi ve sorunsuz bir oyun deneyimi için CS:S gereklidir.
                </li>
            </ul>
            <div class="content-ref-box">
                <p>
                    <a id="cssBox" href="<?= $baseUrl; ?>/content" target="_blank">
                        <i class="fa-solid fa-cubes"></i> CS:S Content Nasıl İndiririm?
                    </a>
                </p>
            </div>
            <hr>
            <br>

            <div>
                <h3 id="tus">Temel Kısayollar</h3>
                <br>
                <ul>
                    <li><strong>F1:</strong> Yardım menüsünü açar. İzleyici modundan çıkabilirsiniz.</li>
                    <li><strong>F8:</strong> Hasar logları gibi bilgileri gösterir.</li>
                    <li><strong>TAB:</strong> Oyuncu listesini ve skorlarını görebilirsiniz.</li>
                    <li><strong>Q:</strong> Elinizdeki silahı yere atmanızı sağlar.</li>
                    <li><strong>C:</strong> Dedektif/Hain mağazasını açar.</li>
                    <li><strong>Shift:</strong> Hainlerin birbiriyle konuşmasını sağlar.</li>
                    <li><strong>I:</strong> Envanterinizi açmanızı sağlar.</li>
                </ul>
            </div>

            <hr>
            <br>

            <div>
                <h3 id="chat">Sohbet ve İletişim</h3>
                <div style="margin-left: 15px">
                    <li><strong>/PM &lt;İsim&gt;:</strong> Belirli bir kullanıcıya özel mesaj atmanızı
                        sağlar.<br><em>Örnek:</em><br><code>/PM Ozgur Sunucu hakkında bir şey sorabilir
                            miyim?</code></li>
                    <hr>
                    <li><strong>@&lt;Mesaj&gt;:
                        </strong> Yetkili sohbete mesaj yazar.<br><em>Örnek:</em><br><code>@Vuenx hile gibi
                            izliyebilir misiniz?
                        </code></li>
                    <hr>
                    <li><strong>!menu:
                        </strong> Genel menüyü açar<br><em>Örnek:</em><br><code>!menu
                        </code></li>
                    <hr>
                    <li><strong>!report:
                        </strong> Son sizi vuran oyuncuyu raporlar<br><em>Örnek:</em><br><code>!report
                        </code></li>
                    <br>
                </div>
            </div>

            <hr>
            <br>

            <div>
                <h3 id="dil">Oyunun dilini Türkçe yapamıyor muyum?</h3>
                <p>Maalesef, oyunun içerik arayüzü İngilizcedir ve dil seçimi yapılamamaktadır.</p>
            </div>
            <hr>
            <br>
            <div>
                <h3 id="izleyici">İzleyici modundayım, nasıl oyuna dönebilirim?</h3>
                <p>Eğer ölmediyseniz ve ekranda uçarak geziyorsanız, muhtemelen izleyici modundasınız. Bunu
                    düzeltmek için "F1" tuşuna basarak "Settings" kısmına gidiniz. Ardından "Spectate-only mode
                    (always stay spectator)" seçeneğinin işaretini kaldırınız. Bu sayede bir sonraki raunda
                    otomatik olarak katılacaksınız.</p>
                <div class="col-6 mx-auto text-center">
                    <img src="<?= $baseUrl ?>/assets/image/ttt_spectate.png" alt="TTT izleyici modu ayarları"
                         class="img-fluid">
                </div>
            </div>

            <hr>
            <br>

            <div>
                <h3 id="dedektifolmamak">Mümkün olduğunca dedektif olmaktan kaçınmak istiyorum?</h3>
                <p>"F1" tuşuna basarak "Settings" kısmına gidiniz. Ardından "Avoid being selected a Detective"
                    seçeneğinin işaretleyiniz.</p>
                <div class="col-6 mx-auto text-center">
                    <img src="<?= $baseUrl ?>/assets/image/ttt_detective.png" alt="TTT Dedektif Olmama ayarları"
                         class="img-fluid">
                </div>
            </div>
            <hr>
            <br>

            <div>
                <h3 id="test">Test Odası nedir?</h3>
                <p>Test odası, oyuncunun hain mi yoksa masum mu olduğunu anlamak için kullanılır. Eğer teste
                    girerseniz ve hain iseniz kırmızı ışık yanar, masum iseniz yeşil ışık yanar. Burada
                    dikkat
                    edilmesi gereken nokta, Hainlerin testi yanıltabilmesidir; bu yüzden kırmızı yanan
                    kişiyi
                    hemen öldürmek yerine yeniden test yapmanız tavsiye edilir. Ayrıca Test cihazını çalıştırmak
                    için her mapte değişen bir item mevcut o item bulmanız ve gerekli yere yerleştirmeniz
                    gerekmekte.</p>
            </div>
            <hr>
            <br>

            <div>
                <h3 id="weapon">Oyundaki tüm silahlarım nerede?</h3>
                <br>
                <p>Üzerinizde bulunan tüm silahlarınız 1, 2, 3, 4, 5 slotlarınızda bulunmaktadır. Bu slotlara
                    erişmek
                    için '1', '2' gibi numaralara basıp kullanabilirsiniz veya mouse'unuzun orta tekerleği ile
                    erişebilirsiniz. Silahlarınız sağ alt kısımda gözükür</p>

                <div class="col-6 mx-auto text-center">
                    <img src="<?= $baseUrl ?>/assets/image/ttt_silahbar.png" alt="Silahlar" class="img-fluid">
                </div>
            </div>
            <hr>
            <br>
            <div>
                <h3 id="magneto">Eşyaları nasıl taşıyabilirim?</h3>
                <br>
                <p>5 silah slotunuzda yer alan "Magneto Stick" ile eşyaya sağ tıklama yaparak
                    taşıyabilirsiniz.</p>

                <div class="col-6 mx-auto text-center">
                    <img src="<?= $baseUrl ?>/assets/image/ttt_magneto.png" alt="Magneto Stick" class="img-fluid">
                </div>
            </div>

            <hr>
            <br>

            <div>
                <h3 id="weaponn">Silahımda Bazı Şeyler Yazıyor, Onlar Ne Anlama Geliyor?</h3>
                <p>
                    <strong class="text-success-emphasis">Accuracy/Doğruluk:</strong> Silahın ne kadar isabetli
                    atış yapacağını belirler. Ne
                    kadar fazlaysa, mermiler o kadar isabetli gider.
                </p>
                <p>
                    <strong class="text-danger-emphasis">Kick/Sekme:</strong> Silahın sekme derecesini belirler ne kadar
                    az (-) olursa silah o kadar az seker.
                </p>
                <p>
                    <strong class="text-primary-emphasis">Range/Menzil:</strong> Silahın atış menzilini
                    belirler. Ne kadar fazlaysa, silah o
                    kadar uzağa ateş eder.
                </p>
                <p>
                    <strong class="text-secondary">Weight/Ağırlık:</strong> Silahın ağırlığını belirler. Silah
                    ne kadar hafifse, o
                    kadar hızlı; ne kadar ağırsa, o kadar yavaş koşarsınız.
                </p>
                <p>
                    <strong class="text-success-emphasis">Push Force/İktirme Gücü:</strong> Yakın dövüş
                    silahıyla oyuncuya sağ tıkladığınızda,
                    itme gücünüzü belirler. Ne kadar fazla olursa, oyuncuları o kadar fazla itersiniz.
                </p>
                <p>
                    <strong class="text-danger-emphasis">Push Delay/İktirme Gecikmesi:</strong> Yakın dövüş
                    silahıyla oyuncuyu tekrar itmek
                    için gereken bekleme süresini belirler.
                </p>
                <p>
                    <strong class="text-primary-emphasis">DMG/Hasar:</strong> Silahın vereceği hasarı belirler.
                </p>
                <p>
                    <strong class="text-secondary">RPM/Atış Hızı:</strong> Silahın dakikada attığı mermi
                    sayısını belirler.
                </p>
                <p>
                    <strong class="text-danger-emphasis">MAG/Şarjör:</strong> Silahın bir şarjörde alabileceği
                    maksimum mermi sayısını
                    belirler.
                </p>
            </div>
            <hr>
            <br>

            <div>
                <h3 id="silah-nadirlik">Aynı Silahların Farklı Varyasyonları Nedir?</h3>
                <p>Görevlerden veya diğer yollarla elde ettiğiniz silahların farklı varyasyonları da mevcuttur. Bu
                    silahların ateş gücü, atış hızı gibi özellikleri nadirliğine göre değişmektedir. İşte normalden en
                    nadir olana kadar sıralama:</p>
                <ul style="list-style-type: '- ">
                    <li class="text-secondary">Standart</li>
                    <li class="text-success-emphasis">Worn</li>
                    <li class="text-danger-emphasis">Specialized</li>
                    <li class="text-primary-emphasis">Superior</li>
                    <li class="text-warning-emphasis">High-end</li>
                    <li class="text-info-emphasis">Cosmic</li>
                    <li class="text-danger-emphasis">Ascended</li>
                    <li class="text-primary-emphasis">Planetary</li>
                </ul>
            </div>
            <hr>
            <br>
            <h3 id="mutator">Mutator Nedir?</h3>
            <p>Mutatorlar, silahınızdaki bazı özellikleri değiştirmenizi sağlayan eşyalardır. Bazıları Destekçi Kredisi
                ile satın alınabilir.</p>
            <div class="accordion" id="mutatorAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-success-emphasis" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseAscendedTalent" aria-expanded="false"
                                aria-controls="collapseAscendedTalent">
                            Ascended Talent Mutator
                        </button>
                    </h2>
                    <div id="collapseAscendedTalent" class="accordion-collapse collapse"
                         aria-labelledby="headingAscendedTalent" data-bs-parent="#mutatorAccordion">
                        <div class="accordion-body">
                            Bu öğeyi kullanmak, herhangi bir "Ascended" nadirlikteki silahın yeteneklerini rastgele
                            olarak değiştirmenize olanak tanır.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-success-emphasis" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseAscendedStat" aria-expanded="false"
                                aria-controls="collapseAscendedStat">
                            Ascended Stat Mutator
                        </button>
                    </h2>
                    <div id="collapseAscendedStat" class="accordion-collapse collapse"
                         aria-labelledby="headingAscendedStat" data-bs-parent="#mutatorAccordion">
                        <div class="accordion-body">
                            Bu öğeyi kullanmak, herhangi bir "Ascended" silahın istatistiklerini rastgele olarak
                            ayarlamanıza olanak tanır.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-success-emphasis" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseCosmicTalent" aria-expanded="false"
                                aria-controls="collapseCosmicTalent">
                            Cosmic Talent Mutator
                        </button>
                    </h2>
                    <div id="collapseCosmicTalent" class="accordion-collapse collapse"
                         aria-labelledby="headingCosmicTalent" data-bs-parent="#mutatorAccordion">
                        <div class="accordion-body">
                            Bu öğeyi kullanmak, herhangi bir "Cosmic" nadirlikteki silahın yeteneklerini rastgele olarak
                            değiştirmenize olanak tanır.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-success-emphasis" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseCosmicStat" aria-expanded="false"
                                aria-controls="collapseCosmicStat">
                            Cosmic Stat Mutator
                        </button>
                    </h2>
                    <div id="collapseCosmicStat" class="accordion-collapse collapse" aria-labelledby="headingCosmicStat"
                         data-bs-parent="#mutatorAccordion">
                        <div class="accordion-body">
                            Bu öğeyi kullanmak, herhangi bir "Cosmic" silahın istatistiklerini rastgele olarak
                            ayarlamanıza olanak tanır.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-success-emphasis" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseHighEndTalent" aria-expanded="false"
                                aria-controls="collapseHighEndTalent">
                            High-end Talent Mutator
                        </button>
                    </h2>
                    <div id="collapseHighEndTalent" class="accordion-collapse collapse"
                         aria-labelledby="headingHighEndTalent" data-bs-parent="#mutatorAccordion">
                        <div class="accordion-body">
                            Bu öğeyi kullanmak, herhangi bir "High-end" nadirlikteki silahın yeteneklerini rastgele
                            olarak değiştirmenize olanak tanır.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-success-emphasis" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseHighEndStat" aria-expanded="false"
                                aria-controls="collapseHighEndStat">
                            High-end Stat Mutator
                        </button>
                    </h2>
                    <div id="collapseHighEndStat" class="accordion-collapse collapse"
                         aria-labelledby="headingHighEndStat" data-bs-parent="#mutatorAccordion">
                        <div class="accordion-body">
                            Bu öğeyi kullanmak, herhangi bir "High-end" silahın istatistiklerini rastgele olarak
                            ayarlamanıza olanak tanır.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed text-success-emphasis" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseNameMutator" aria-expanded="false"
                                aria-controls="collapseNameMutator">
                            Name Mutator
                        </button>
                    </h2>
                    <div id="collapseNameMutator" class="accordion-collapse collapse"
                         aria-labelledby="headingNameMutator" data-bs-parent="#mutatorAccordion">
                        <div class="accordion-body">
                            Silahlarınıza takma adlar verebilmenizi sağlayan tek kullanımlık bir eşyadır.
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <br>

            <div>
                <h3 id="bind">Disguiser ve hızlı yanıtlar için tuş nasıl atıyabilirim?</h3>
                <p>"F1" Tuşuna basınız ardından "Custom Binds" menüsüne geliniz buradan tuş ataması
                    yapabilirsiniz.</p>
                <div class="col-6 mx-auto text-center">
                    <img src="<?= $baseUrl ?>/assets/image/ttt_custom_binds.png" alt="Custom Binds" class="img-fluid">
                </div>
            </div>
            <hr>
            <br>
            <div>
                <h3 id="kutu">Kutu ve silah nasıl elde edebilirim?</h3>
                <p><strong>Kutu ve Silah,</strong> IC krediniz, çekiliş, oyuncularla takas yaparak veya el sonu düşen
                    rastgele droptan
                    elde edilebilir.</p>
            </div>
            <hr>
            <br>
            <div>
                <h3 id="kredi">Envanter Kredisi ve C Menü Kredisi nasıl kazanırım?</h3>
                <p>Envanter kredisi kazanmak için bulunduğunuz role göre roundu tamamlamanız gerekir. Örneğin,
                    masumsanız roundun masumlar tarafından kazanılması gerekir.</p>
                <p>C Menü kredisi kazanmak için dedektifseniz hain öldürmeniz, hainseniz masum veya dedektif
                    öldürmeniz gerekir.</p></div>
            <div>
                <hr>
                <br>

                <div>
                    <?php
                    function addDetectivesCard($title, $description, $imageUrl, $isFaw = false)
                    {
                        $containerId = $isFaw ? 'Detectives-card-faw' : 'Detectives-card';
                        echo '
    <div class="col-6 col-sm-4 col-md-4 col-lg-4 mb-3">
        <div class="card h-100">
            <img src="' . htmlspecialchars($imageUrl) . '" class="card-img-top" alt="' . htmlspecialchars($title) . '" style="width: 65px; height: 65px; margin: auto; margin-top: 1%;">
            <div class="card-body text-center">
                <h5 class="card-title text-primary-emphasis" style="font-size: 0.9rem;">' . htmlspecialchars($title) . '</h5>
                <p class="card-text" style="font-size: 0.8rem;">' . htmlspecialchars($description) . '</p>
            </div>
        </div>
    </div>';
                    }

                    function addTraitorsCard($title, $description, $imageUrl, $isFaw = false)
                    {
                        $containerId = $isFaw ? 'Traitors-card-faw' : 'Traitors-card';
                        echo '
    <div class="col-6 col-sm-4 col-md-4 col-lg-4 mb-3">
        <div class="card h-100">
            <img src="' . htmlspecialchars($imageUrl) . '" class="card-img-top" alt="' . htmlspecialchars($title) . '" style="width: 65px; height: 65px; margin: auto; margin-top: 1%;">
            <div class="card-body text-center">
                <h5 class="card-title text-danger-emphasis" style="font-size: 0.9rem;">' . htmlspecialchars($title) . '</h5>
                <p class="card-text" style="font-size: 0.8rem;">' . htmlspecialchars($description) . '</p>
            </div>
        </div>
    </div>';
                    }

                    $detectives = [
                        ['title' => "Body Armor (Vücut Zırhı)", 'description' => "Vurulduğunda mermi hasarını %35 azaltır. Dedektifler için varsayılan ekipmandır.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_body-armor.png"],
                        ['title' => "Hermes Boots (Hermes Çizmeleri)", 'description' => "Açıp kapatmak için G tuşuna bas. Hareket hızını artırır.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_hermes-boots.png"],
                        ['title' => "Radar", 'description' => "Yaşam belirtilerini taramanı sağlar. Satın alır almaz otomatik taramaya başlar. Bu menünün Radar sekmesinden yapılandırabilirsin.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_radar.png"],
                        ['title' => "Thunder Thighs (Şimşek Baldırlar)", 'description' => "Bu muhtemelen seni öldürecek. Düşme hasarını azaltacak bir şeyler kullanman tavsiye edilir. Sol tıklama, baktığın yöne doğru seni fırlatır. Sağ tıklama ise sadece yukarı doğru fırlatır.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_thunder-thighs_1.png"],
                        ['title' => "Blink (Işınlanma)", 'description' => "Vuuş vuuş. Birincil: Hedef almak için basılı tut. İkincil: Işınlanmayı iptal et.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_blink_1.png", 'favorite' => true],
                        ['title' => "Grappling Hook (Kanca)", 'description' => "Bir tırmanma kancası. Duvarlara tırman ya da uzaktaki nesneleri yakala.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_grappling-hook_1.png"],
                        ['title' => "Sandwich (Sandviç)", 'description' => "Bir atıştırmalık al ve kendini veya başkalarını iyileştir. Yere attığında dikkatli ol, bozulabilir.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_sandwich_1.png"],
                        ['title' => "Binoculars (Dürbün)", 'description' => "Cesetlere zoom yap ve onları uzaktan teşhis et. Sınırsız kullanım, ancak teşhis birkaç saniye alır.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_binoculars.png"],
                        ['title' => "Briefcase (Evrak Çantası)", 'description' => "Bu evrak çantası, kullanıldığında cephane verir. Sağlık İstasyonu'na benzer.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_briefcase_1.png"],
                        ['title' => "Cure (Tedavi)", 'description' => "BioBall veya zombinin neden olduğu enfeksiyonu geri çeviren bir tedavi.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_cure.png"],
                        ['title' => "Defuser (İmha Cihazı)", 'description' => "Bir C4 bombasını anında etkisiz hale getirir. Sınırsız kullanım. C4'ü taşırken fark etmek daha kolay olacaktır.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_defuser.png"],
                        ['title' => "Disarmer (Silahsızlandırıcı)", 'description' => "O hainler ve silahları! Hepsini silahsızlandıralım. 2 mermi, her mermi hedefin tüm silahlarını düşürmesini sağlar. Dikkatli kullan.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_disarmer.png"],
                        ['title' => "Door Buster (Kapı Patlatıcı)", 'description' => "Kapılara yerleştirilebilir. Sağ tıkla kapıyı patlat, patlat ve yolundaki herkesi öldür.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_door-buster_1.png"],
                        ['title' => "Health Station (Sağlık İstasyonu)", 'description' => "Yerleştirildiğinde insanları iyileştirir. Yavaş şarj olur. Herkes kullanabilir ve hasar görebilir. Kullanıcılarının DNA örnekleri alınabilir.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_health-station.png", 'favorite' => true],
                        ['title' => "High Jump (Yüksek Zıplama)", 'description' => "O çatıya zıplayamıyor musun? Sadece beni donat ve her şeyi başarabiliriz! Sadece elde kullanılabilir. Ayrıca düşme hasarını ortadan kaldırır.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_high-jump_1.png"],
                        ['title' => "Homerun Bat (Homerun Sopası)", 'description' => "Sol tıkla bir home run vur! 3 kullanım hakkı var.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_homerun-bat_1.png"],
                        ['title' => "Identification Bomb Defuser (Kimlik Bombası İmha Cihazı)", 'description' => "Kimlik bombası yerleştirilmiş bir cesede sol tıklayarak bombayı etkisiz hale getir!", 'imageUrl' => "$baseUrl/assets/image/ttt_c_identification-bomb-defuser.png"],
                        ['title' => "Jet Pack (Jet Paketi)", 'description' => "Seç ve yukarı itiş yapmak için Zıpla tuşuna bas. Yere inişe dikkat et.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_jet-pack_1.png"],
                        ['title' => "Peace Sentry (Barış Nöbetçisi)", 'description' => "Barış nöbetçisi kurabilir ve o kişinin önünde birini vuran herkese saldırabilir.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_peace-sentry.png"],
                        ['title' => "Plasma Grenade (Plazma Bombası)", 'description' => "Bir Halo silahı değil.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_plasma-grenade_1.png"],
                        ['title' => "Portable Tester (Taşınabilir Test Cihazı)", 'description' => "İnsanları test etmek için taşınabilir bir cihaz.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_portable-tester.png", 'favorite' => true],
                        ['title' => "RSB Defuser (RSB İmha Cihazı)", 'description' => "Uzaktan Yapışkan Bomba için bir imha cihazı.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_rsb-defuser.png"],
                        ['title' => "S&W 500", 'description' => "Tek atışta bir teröristi ortadan kaldır.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_sANDw-500.png"],
                        ['title' => "Teleporter (Işınlayıcı)", 'description' => "Daha önce işaretlenmiş bir noktaya ışınlan. Işınlanma ses çıkarır ve kullanım sayısı sınırlıdır.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_teleporter_1.png"],
                        ['title' => "UMP Prototype (UMP Prototipi)", 'description' => "Hedefleri sersemleten deneysel SMG. Standart SMG mermisi kullanır.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_ump-prototype.png"],
                        ['title' => "Visualizer (Görselleştirici)", 'description' => "Olay yeri inceleme cihazı. Cesedi analiz ederek kurbanın nasıl öldüğünü gösterir, ancak yalnızca kurban ateşli silahla öldüyse.", 'imageUrl' => "$baseUrl/assets/image/ttt_c_visualizer.png"],
                    ];

                    $traitors = [
                        [
                            'title' => "Body Armor (Vücut Zırhı)",
                            'description' => "Vurulduğunda mermi hasarını %35 azaltır. Dedektifler için varsayılan ekipmandır.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_body-armor.png",
                            'favorite' => true
                        ],
                        [
                            'title' => "Disguiser (Kamuflaj)",
                            'description' => "Kimlik bilgilerini gizler. Ayrıca bir kurbanın son gördüğü kişi olmanı da engeller. Bu menünün Disguise (Kamuflaj) sekmesinde veya Numpad Enter tuşuna basarak açıp kapatabilirsin.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_disguiser.png"
                        ],
                        [
                            'title' => "Hermes Boots (Hermes Çizmeleri)",
                            'description' => "Açıp kapatmak için G tuşuna bas. Hareket hızını artırır.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_hermes-boots.png"
                        ],
                        [
                            'title' => "Radar",
                            'description' => "Yaşam belirtilerini taramanı sağlar. Satın alır almaz otomatik taramaya başlar. Bu menünün Radar sekmesinden yapılandırabilirsin.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_radar.png"
                        ],
                        [
                            'title' => "Thunder Thighs (Şimşek Baldırlar)",
                            'description' => "Bu muhtemelen seni öldürecek. Düşme hasarını azaltacak bir şeyler kullanman tavsiye edilir. Sol tıklama, baktığın yöne doğru seni fırlatır. Sağ tıklama ise sadece yukarı doğru fırlatır.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_thunder-thighs.png"
                        ],
                        [
                            'title' => "AWP",
                            'description' => "Susturuculu AWP keskin nişancı tüfeği. Sadece iki mermisi vardır. Kurbanlar öldüğünde bağırmaz.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_awp.png"
                        ],
                        [
                            'title' => "Banana Bomb (Muz Bombası)",
                            'description' => "Taze kokuyor. Sol tıklama ile fırlat, sağ tıklama ile klasik sıkma sesini çıkart + Patlama süresini değiştir.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_banana-bomb.png"
                        ],
                        [
                            'title' => "Blink (Işınlanma)",
                            'description' => "Vuuş vuuş. Birincil: Hedef almak için basılı tut. İkincil: Işınlanmayı iptal et.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_blink.png"
                        ],
                        [
                            'title' => "C4",
                            'description' => "Güçlü zaman ayarlı patlayıcı.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_c4.png",
                            'favorite' => true
                        ],
                        [
                            'title' => "Grappling Hook (Kanca)",
                            'description' => "Bir tırmanma kancası. Duvarlara tırman ya da uzaktaki nesneleri yakala.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_grappling-hook.png"
                        ],
                        [
                            'title' => "Jihad Bomb (Cihat Bombası)",
                            'description' => "Kendini Allah'a feda et. 72 bakire seni bekliyor.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_jihad-bomb.png"
                        ],
                        [
                            'title' => "Knife (Bıçak)",
                            'description' => "Yaralı hedefleri anında ve sessizce öldürür, ancak sadece tek kullanımlıktır. Alternatif ateş ile fırlatılabilir.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_knife.png"
                        ],
                        [
                            'title' => "Mine Turtle (Mayın Kaplumbağa)",
                            'description' => "MERHABA! NOT: Herkes tarafından vurulup yok edilebilir.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_mine-turtle.png",
                            'favorite' => true
                        ],
                        [
                            'title' => "Proximity Mine (Yakınlık Mayını)",
                            'description' => "Birisi yaklaştığında patlar.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_proximity-mine.png"
                        ],
                        [
                            'title' => "Sandwich (Sandviç)",
                            'description' => "Bir atıştırmalık al ve kendini veya başkalarını iyileştir. Yere attığında dikkatli ol, bozulabilir.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_sandwich.png",
                            'favorite' => true
                        ],
                        [
                            'title' => "Attack Forcer (Saldırı Zorlayıcı)",
                            'description' => "1 Dart. Bir oyuncuyu saldırmaya zorla!",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_attack-forcer.png"
                        ],
                        [
                            'title' => "Biohazard Ball (Biyolojik Tehlike Topu)",
                            'description' => "Bulaşıcı bir zombi eti topu! Masumlara (Innocents) fırlat ve onları zombiye dönüştür! Zombiler diğer oyuncuları enfekte edebilir! Sol tık: Fırlat",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_biohazard-ball.png"
                        ],
                        [
                            'title' => "Boomerang",
                            'description' => "Sol tıkla bumerangı sert bir şekilde fırlat, sağ tıkla yumuşak ve hassas fırlat (duvarlardan geri sekebilir)",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_boomerang.png"
                        ],
                        [
                            'title' => "Briefcase (Evrak Çantası)",
                            'description' => "Bu evrak çantası, kullanıldığında cephane verir. Sağlık İstasyonu'na benzer.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_briefcase.png"
                        ],
                        [
                            'title' => "Chicken Egg (Tavuk Yumurtası)",
                            'description' => "Saldırgan bir tavuk! Fazla sinirlendirirsen patlar!",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_chicken-egg.png"
                        ],
                        [
                            'title' => "Cloaking Device (Görünmezlik Cihazı)",
                            'description' => "Tutarsan neredeyse görünmez olursun. İsmini, gölgelerini ya da üzerindeki kan izlerini gizlemez.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_cloaking-device.png"
                        ],
                        [
                            'title' => "Combobulator (Combobulator)",
                            'description' => "Patladığında etrafındaki her şeyi kendine çeken ters bir discombobulator.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_combobulator.png"
                        ],
                        [
                            'title' => "DNA Eradicator (DNA Yok Edici)",
                            'description' => "Bir DNA parçasını silemiyor musun? Birini suçlamak mı istiyorsun? Bu tam sana göre! Ama dikkat et, o kişi sen olabilirsin.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_DNA-eradicator.png"
                        ],
                        [
                            'title' => "Death Faker (Ölüm Sahteleyici)",
                            'description' => "Sahte bir ceset oluşturur. Bu menüdeki Death Faker sekmesinden ceset bilgilerini değiştirebilirsin. MOUSE2 ile kan yerleştir.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_death-faker.png"
                        ],
                        [
                            'title' => "Decoy (Sahte Hedef)",
                            'description' => "Dedektiflere sahte bir radar sinyali gösterir ve DNA tarayıcılarını kandırarak senin DNA'ını değil, Decoy'un yerini gösterir.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_decoy.png"
                        ],
                        [
                            'title' => "Door Buster (Kapı Patlatıcı)",
                            'description' => "Kapılara yerleştirilebilir. Sağ tıkla kapıyı patlat, patlat ve yolundaki herkesi öldür.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_door-buster.png"
                        ],
                        [
                            'title' => "Door Locker (Kapı Kilitleyici)",
                            'description' => "Kapıyı kısa bir süreliğine kilitlemeni sağlar! İnsanlar kapını vurup kırabilir!",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_door-locker.png"
                        ],
                        [
                            'title' => "Drachenlord",
                            'description' => "Drachenlord Prügel'ı çıkarır! Kullandığında hemen seni öldürür.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_drachenlord.png"
                        ],
                        [
                            'title' => "Fake Portable Tester (Sahte Taşınabilir Test Cihazı)",
                            'description' => "İnsanların kullanması için sahte bir test cihazı bırak!",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_fake-portable-tester.png"
                        ],
                        [
                            'title' => "Flare Gun (Alev Silahı)",
                            'description' => "Cesetleri yakmak için kullanılabilir, böylece cesetler asla bulunamaz. Sınırlı cephanesi vardır. Bir ceset yakıldığında belirgin bir ses çıkar.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_flare-gun.png"
                        ],
                        [
                            'title' => "Freeze Gun (Dondurucu Silah)",
                            'description' => "İnsanları dondurabilen bir silah! Sadece canlıları dondurabilir, cesetlerde kullanma!",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_freeze-gun.png"
                        ],
                        [
                            'title' => "Gas Grenade (Gaz Bombası)",
                            'description' => "Bir alanda zamanla hasar verir. Kurbanı öldürmez, sadece alanı terk etmezse canını 1'e kadar indirir. Tüm oyunculara zarar verir!",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_gas-grenade.png"
                        ],
                        [
                            'title' => "Harpoon (Zıpkın)",
                            'description' => "Fırlatılabilir Zıpkın.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_harpoon.png"
                        ],
                        [
                            'title' => "Health Grenade (Sağlık Bombası)",
                            'description' => "Bir alanda zamanla can iyileştirir (saniyede 2).",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_health-grenade.png"
                        ],
                        [
                            'title' => "High Jump (Yüksek Zıplama)",
                            'description' => "O çatıya zıplayamıyor musun? Sadece beni donat ve her şeyi başarabiliriz! Sadece elde kullanılabilir. Ayrıca düşme hasarını ortadan kaldırır.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_high-jump.png"
                        ],
                        [
                            'title' => "Homerun Bat (Homerun Sopası)",
                            'description' => "Sol tıkla bir home run vur! 3 kullanım hakkı var.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_homerun-bat.png"
                        ],
                        [
                            'title' => "Homing Pigeon (Hedef Bulan Güvercin)",
                            'description' => "Hedefi bulan bir uçan güvercin.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_homing-pigeon.png"
                        ],
                        [
                            'title' => "Identification Bomb (Kimlik Bombası)",
                            'description' => "İşaretlenmiş bir ceset (Sol Tık) kimliği teşhis edildikten sonra patlar.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_identification-bomb.png"
                        ],
                        [
                            'title' => "Ignite Station (Ateşleme İstasyonu)",
                            'description' => "Bir oyuncu kullanmaya çalıştığında ateş tutmasını sağlar. Normal bir Detectives sağlık istasyonu gibi görünür.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_ignite-station.png"
                        ],
                        [
                            'title' => "Jet Pack (Jet Paketi)",
                            'description' => "Seç ve yukarı itiş yapmak için Zıpla tuşuna bas. Yere inişe dikkat et.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_jet-pack.png"
                        ],
                        [
                            'title' => "M4 SLAM (M4 SLAM)",
                            'description' => "Manuel olarak patlatılabilen veya bir duvara mayın olarak yerleştirilebilen bir mayın. NOT: Herkes tarafından vurulup yok edilebilir.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_m4-slam.png"
                        ],
                        [
                            'title' => "Minigun",
                            'description' => "Bir kez çıkarıldıktan sonra geri koyulamaz! Bu odayı temizleyen silahı aldıktan 60 saniye sonra otomatik olarak kendini yok edersin!",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_minigun.png"
                        ],
                        [
                            'title' => "Newton Launcher (Newton Fırlatıcı)",
                            'description' => "İnsanları güvenli bir mesafeden it. Sınırsız mermi, ama yavaş ateşler.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_newton-launcher.png"
                        ],
                        [
                            'title' => "Newton Puller (Newton Çekici)",
                            'description' => "İnsanları güvenli bir mesafeden ÇEK. Sınırsız mermi, ama yavaş ateşler.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_newton-puller.png"
                        ],
                        [
                            'title' => "Piegon Bomb (Güvercin Bombası)",
                            'description' => "Yakındaki masum birini gördüğünde canlı bir zaman bombasına dönüşen bir kuş. Sol tıkla yerleştir.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_piegon-bomb.png"
                        ],
                        [
                            'title' => "Plasma Grenade (Plazma Bombası)",
                            'description' => "Bir Halo silahı değil.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_plasma-grenade.png"
                        ],
                        [
                            'title' => "Poltergeist",
                            'description' => "Eşyalara thumper yerleştirerek onları şiddetle fırlatır. Enerji patlamaları yakınlardaki insanlara zarar verir.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_poltergeist.png"
                        ],
                        [
                            'title' => "Position Swapper (Pozisyon Değiştirici)",
                            'description' => "Sağ tıkla bir hedef seç, sol tıkla değiştir ve yeniden yükle ile hedefi iptal et!",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_position-swapper.png"
                        ],
                        [
                            'title' => "Predator Blade (Yırtıcı Bıçağı)",
                            'description' => "İçindeki avcıyı uyandır. Vücut zırhı olmayan herkesi anında öldürür.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_predator-blade.png"
                        ],
                        [
                            'title' => "Radio",
                            'description' => "Dikkat dağıtmak veya aldatmak için ses çalar. Radyoyu bir yere yerleştir, ardından bu menüdeki Radio sekmesini kullanarak sesler çal.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_radio.png"
                        ],
                        [
                            'title' => "Remote Sticky Bomb (Uzaktan Yapışkan Bomba)",
                            'description' => "Bir Uzaktan Yapışkan Bomba. \"Yaşayan Bomba\"",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_remote-sticky-bomb.png"
                        ],
                        [
                            'title' => "Sentry Turret (Nöbet Kulesi)",
                            'description' => "Masumlara saldıran bir nöbetçi kurma yeteneğine sahipsin.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_sentry-turret.png"
                        ],
                        [
                            'title' => "Silenced Pistol (Susturuculu Tabanca)",
                            'description' => "Düşük sesli tabanca, normal tabanca mermisi kullanır. Kurbanlar öldüğünde çığlık atmaz.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_silenced-pistol.png"
                        ],
                        [
                            'title' => "Spring Mine (Zıplama Mayını)",
                            'description' => "BOINNNNNNG!",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_spring-mine.png"
                        ],
                        [
                            'title' => "Teleporter (Işınlayıcı)",
                            'description' => "Daha önce işaretlenmiş bir noktaya ışınlan. Işınlanma ses çıkarır ve kullanım sayısı sınırlıdır.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_teleporter.png"
                        ],
                        [
                            'title' => "Throwable Manhacks (Fırlatılabilir Manhack)",
                            'description' => "Sol tıkla havaya bir manhack fırlat. 3 kullanım hakkı var.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_throwable-manhacks.png"
                        ],
                        [
                            'title' => "Combobulator (Combobulator)",
                            'description' => "Patladığında etrafındaki her şeyi kendine çeken ters bir discombobulator.",
                            'imageUrl' => "{$baseUrl}/assets/image/ttt_c_combobulator.png"
                        ]
                    ];
                    ?>
                    <h3 id="cmenu">Dedektif/Hain iken hangi ekipmanları kullanabilirim?</h3>
                    <ul class="nav nav-tabs" id="cmenu-item" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Detectives-tab" data-bs-toggle="tab"
                                    data-bs-target="#Detectives" type="button" role="tab" aria-controls="Detectives"
                                    aria-selected="true">Dedektif
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Traitors-tab" data-bs-toggle="tab" data-bs-target="#Traitors"
                                    type="button" role="tab" aria-controls="Traitors" aria-selected="false">Hain
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="cmenu-item-tab">
                        <div class="tab-pane fade show active" id="Detectives" role="tabpanel"
                             aria-labelledby="Detectives-tab">
                            <div class="row" id="Detectives-card-faw">
                                <h5>Önerdiklerimiz:</h5>
                                <?php
                                foreach ($detectives as $detective) {
                                    if (isset($detective['favorite']) && $detective['favorite']) {
                                        addDetectivesCard($detective['title'], $detective['description'], $detective['imageUrl'], true);
                                    }
                                }
                                ?>
                            </div>
                            <hr style="border-top: 2px solid var(--bs-primary-text-emphasis);">
                            <div class="row" id="Detectives-card">
                                <?php
                                foreach ($detectives as $detective) {
                                    addDetectivesCard($detective['title'], $detective['description'], $detective['imageUrl']);
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Traitors" role="tabpanel" aria-labelledby="Traitors-tab">
                            <div class="row" id="Traitors-card-faw">
                                <h5>Önerdiklerimiz:</h5>
                                <?php
                                foreach ($traitors as $traitor) {
                                    if (isset($traitor['favorite']) && $traitor['favorite']) {
                                        addTraitorsCard($traitor['title'], $traitor['description'], $traitor['imageUrl'], true);
                                    }
                                }
                                ?>
                            </div>
                            <hr style="border-top: 2px solid var(--bs-danger-text-emphasis);">
                            <div class="row" id="Traitors-card">
                                <?php
                                foreach ($traitors as $traitor) {
                                    addTraitorsCard($traitor['title'], $traitor['description'], $traitor['imageUrl']);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <div>
                <h3 id="envanter">Envanter nedir? Burada ne yapabilirim?</h3>
                <ul class="nav nav-tabs" id="envantertabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="envanter-tab" data-bs-toggle="tab"
                                data-bs-target="#envanter-tab-pane" type="button" role="tab"
                                aria-controls="envanter-tab-pane" aria-selected="true">Envanter
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="oyuncu-tab" data-bs-toggle="tab"
                                data-bs-target="#oyuncu-tab-pane" type="button" role="tab"
                                aria-controls="oyuncu-tab-pane" aria-selected="false">Oyuncu
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ticaret-tab" data-bs-toggle="tab"
                                data-bs-target="#ticaret-tab-pane" type="button" role="tab"
                                aria-controls="ticaret-tab-pane" aria-selected="false">Ticaret
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="dukkan-tab" data-bs-toggle="tab"
                                data-bs-target="#dukkan-tab-pane" type="button" role="tab"
                                aria-controls="dukkan-tab-pane" aria-selected="false">Dükkan
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ayarlar-tab" data-bs-toggle="tab"
                                data-bs-target="#ayarlar-tab-pane" type="button" role="tab"
                                aria-controls="ayarlar-tab-pane" aria-selected="false">Ayarlar
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gorevler-tab" data-bs-toggle="tab"
                                data-bs-target="#gorevler-tab-pane" type="button" role="tab"
                                aria-controls="gorevler-tab-pane" aria-selected="false">Görevler
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="vip-tab" data-bs-toggle="tab"
                                data-bs-target="#vip-tab-pane" type="button" role="tab"
                                aria-controls="vip-tab-pane" aria-selected="false">VIP
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="envanter-tabs">
                    <div class="tab-pane fade show active" id="envanter-tab-pane" role="tabpanel"
                         aria-labelledby="envanter-tab" tabindex="0">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= $baseUrl ?>/assets/image/ttt_envanter.png" class="img-fluid"
                                     alt="Envanter">
                            </div>
                            <div class="col-md-6">
                                <p>Buradan karakterinizin kıyafetlerini ve silahlarını değiştirebilirsiniz.</p>
                                <p>Ayrıca kutu açılımını da buradan yapabilirsiniz.</p>
                                <p>Eşya sağ tıklayıp geri dönüştürebilirsiniz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="oyuncu-tab-pane" role="tabpanel" aria-labelledby="oyuncu-tab"
                         tabindex="0">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= $baseUrl ?>/assets/image/ttt_envanter_oyuncu.png" class="img-fluid"
                                     alt="Oyuncu">
                            </div>
                            <div class="col-md-6">
                                <p>Seviyenizi, tecrübe puanınızı ve K/D durumunuzu görüntüleyebilirsiniz.</p>
                                <p>Ayrıca buradan ekipmanlarınız için hızlı slot seçimi yapabilirsiniz. Örneğin,
                                    bir ekipman "Moon" olarak adlandırılabilir ve bu ekipmana farklı eşyalar
                                    ekleyebilirsiniz. Hızlı seçim avantajı sağlar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ticaret-tab-pane" role="tabpanel"
                         aria-labelledby="ticaret-tab" tabindex="0">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= $baseUrl ?>/assets/image/ttt_envanter_ticaret.png" class="img-fluid"
                                     alt="Ticaret">
                            </div>
                            <div class="col-md-6">
                                <p>Buradan eşyalarınızı arkadaşlarınız ile takas yapabilirsiniz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dukkan-tab-pane" role="tabpanel" aria-labelledby="dukkan-tab"
                         tabindex="0">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= $baseUrl ?>/assets/image/ttt_envanter_dukkan.png" class="img-fluid"
                                     alt="Dükkan">
                            </div>
                            <div class="col-md-6">
                                <p>Buradan oyun içi kazandığınız Envanter Kredisi (IC) ile kutu satın
                                    alabilirsiniz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ayarlar-tab-pane" role="tabpanel"
                         aria-labelledby="ayarlar-tab" tabindex="0">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= $baseUrl ?>/assets/image/ttt_envanter_ayarlar.png" class="img-fluid"
                                     alt="Ayarlar">
                            </div>
                            <div class="col-md-6">
                                <p>Buradan "Otomatik Bunny Yap" açabilirsiniz. </p>
                                <p>Eşya Geri Dönüştürme Hızı
                                    ayarlıyabilirsiniz. </p>
                                <p>Dilerseniz perfomans moduna alıp FPS artışı
                                    sağlıyabilirsiniz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gorevler-tab-pane" role="tabpanel"
                         aria-labelledby="gorevler-tab" tabindex="0">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= $baseUrl ?>/assets/image/ttt_envanter_gorevler.png" class="img-fluid"
                                     alt="Görevler">
                            </div>
                            <div class="col-md-6">
                                <p>Görevleri tamamlayarak silahınızın daha nadir versiyonlarına sahip
                                    olabilirsiniz.</p>
                                <p>Silahınızın nadir versiyonlarına eriştikçe, silahın özellikleri de
                                    değişmektedir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="vip-tab-pane" role="tabpanel" aria-labelledby="vip-tab"
                         tabindex="0">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= $baseUrl ?>/assets/image/ttt_envanter_vip.png" class="img-fluid"
                                     alt="VIP">
                            </div>
                            <div class="col-md-6">
                                <p>Satın aldığınız destekçi kredilerini burada kullanabilirsiniz.</p>
                                <p>Böylelikle IC Kredisi'ne dönüştürmüş olursunuz.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <br>
            <div>
                <h3 id="event" class="mb-3">Etkinlik Düzenleniyor mu?</h3>
                <p>Belli aralıklarla üstadlarımız tarafından etkinlik düzenlenmektedir.</p>
                <p>Ödül değişmektedir. Genellikle IC kredi verilmektedir.</p>
                <ul class="list-group mb-3">
                    <li class="list-group-item">
                        <h5 class="text-success-emphasis">Boss Raund</h5>
                        <p>Bir kişi dinozora dönüşür ve herkes o dinozora dönüşen kişiyi öldürmeye çalışır. Aynı zamanda
                            hayatta kalmanız gerekir.</p>
                    </li>
                    <li class="list-group-item">
                        <h5 class="text-primary-emphasis">Stalker Raund</h5>
                        <p>Bir kişi görünmez olur ve herkes o görünmez kişiyi öldürmeye çalışır. Aynı zamanda hayatta
                            kalmanız gerekir.</p>
                    </li>
                    <li class="list-group-item">
                        <h5 class="text-danger-emphasis">Patlayan Tavuk</h5>
                        <p>Silahlarınızı hiçbir şekilde kullanamazsınız ve etrafa tavuklar spamlanır. Bu tavuklar
                            zıplayabilir. Hayatta kalmaya çalışmanız gerekir.</p>
                    </li>
                </ul>
            </div>
            <hr>
            <br>
        </div>

        <hr>
        <blockquote>
            Başlarken bilmeniz gerekenler serimiz burada son bulmaktadır. Daha fazlası için diğer
            rehberlerimize de göz atmayı unutmayın.
        </blockquote>

        <div class="content-ref-box">
            <p>
                <a id="sssBox" href="<?= $baseUrl; ?>/ttt-baslarken/sss">
                    <i class="fas fa-question"></i> Sıkça Sorulan Sorular
                </a>
            </p>
        </div>
        <br>
    </div>

</main>