<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="standartcolor mb-4">TTT Başlarken</h1>
        <p>Her zaman ilk başlangıçlar zordur, bu kısımdaki bilgiler sunucumuzun temel
            mekaniklerini anlamana yardımcı olacak. Unutmamalısın ki öğrenmeye açık olman gerek. Bu rehber sadece temel
            kısımlara değinmektedir.</p>
        <div>
            <div>
                <h2 class="standartcolor" id="workshop">Gerekli Eklentiler ve Ayarlar</h2>
                <br>
                <div class="alert alert-info" role="alert">
                <span><a href="<?= $ttt_workshop ?>" target="_blank">
                    <?= $ttt_workshop ?>
                    </a> hepsine tek tek abone olmalısınız. </span>
                </div>

                <ul style="list-style-type: '* ">
                    <li><b class="text-teal">Workshop Eklentileri</b>: <a href="<?= $ttt_ip1 ?>"
                                                                          target="_blank">TTT
                            sunucumuza</a> katılmadan önce, <a
                                href="<?= $ttt_workshop ?>" target="_blank">workshop</a>
                        indirin. Eğer oyunda iseniz indirme işlemi sonrası Garry's mod komple kapatıp açınız.
                    </li>
                    <li><b class="text-warning">Chromium Betası</b>: Daha iyi performans ve
                        özellikler
                        için <b>Chromium</b> betasına
                        geçmeniz
                        gerekmektedir.
                    </li>
                </ul>

                <div class="content-ref-box">
                    <p>
                        <a id="chromeBox" href="<?= $baseUrl; ?>/ttt-baslarken/chromium" target="_blank">
                            <i class="fa-brands fa-chrome"></i> Chromium Nedir? Nasıl Chromium Geçerim?
                        </a>
                    </p>
                </div>
                <br>
                <h3 class="standartcolor">Oyun deneyiminizi iyileştirmek için</h3>
                <ul style="list-style-type: '+ ">
                    <li><b class="text-primary">Counter Strike: Source</b>: Daha iyi ve sorunsuz bir
                        oyun deneyimi için CS:S gereklidir.
                    </li>
                </ul>
                <div class="content-ref-box">
                    <p>
                        <a id="cssBox" href="<?= $baseUrl; ?> /css" target="_blank">
                            <i class="fa-solid fa-cubes"></i> CS:S Content Nasıl İndiririm?
                        </a>
                    </p>
                </div>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="tus">Temel Kısayollar</h2>
                <br>
                <ul id="tusUL" style="list-style-type: '- '">
                    <?php foreach ($tttKeyboard as $shortcut): ?>
                        <li>
                            <strong>
                                <?php foreach ($shortcut['key'] as $key): ?>
                                    <kbd><?php echo $key; ?></kbd>
                                    <?php if (next($shortcut['key'])) echo ' + '; ?>
                                <?php endforeach; ?>
                            </strong>
                            <span><?php echo $shortcut['description']; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="chat">Sohbet ve İletişim</h2>
                <br>
                <ul id="chatTabs">
                    <?php
                    $tabId = 0;

                    foreach ($tttCommand as $command) {
                        ?>
                        <li id="<?= 'command-' . $tabId ?>" class="command-item">
                            <strong><?= implode(' veya ', $command['name']) ?></strong>
                            <i class="text-warning-emphasis">
                                <?= implode(' ', array_map(fn($p) => $p !== null ? "&lt;{$p}&gt;" : '', $command['params'])) ?>
                            </i> :
                            <span><?= $command['description'] ?></span><br>
                            <em class="text-success-emphasis">Örnek:</em><br>
                            <code><?= $command['example'] ?></code>
                        </li>
                        <hr>
                        <?php
                        $tabId++;
                    }
                    ?>
                </ul>
            </div>

            <br>
            <div>
                <h2 class="standartcolor" id="dil">Oyunun dilini Türkçe yapamıyor muyum?</h2>
                <p>Maalesef, oyunun içerik arayüzü İngilizcedir ve dil seçimi yapılamamaktadır.</p>
            </div>
            <br>

            <div>
                <h2 class="standartcolor" id="izleyici">İzleyici modundayım, nasıl oyuna dönebilirim?</h2>
                <p>Eğer ölmediyseniz ve ekranda uçarak geziyorsanız, muhtemelen izleyici modundasınız. Bunu
                    düzeltmek için <kbd>F1</kbd> tuşuna basarak "Settings" kısmına gidiniz. Ardından "Spectate-only mode
                    (always stay spectator)" seçeneğinin işaretini kaldırınız. Bu sayede bir sonraki raunda
                    otomatik olarak katılacaksınız.</p>
                <div class="col-6 mx-auto text-center">
                    <img src="<?= $baseUrl ?>/assets/image/ttt_spectate.png" alt="TTT izleyici modu ayarları"
                         class="img-fluid img-zoom">
                </div>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="dedektifolmamak">Mümkün olduğunca dedektif olmaktan kaçınmak istiyorum?</h2>
                <p><kbd>F1</kbd> tuşuna basarak "Settings" kısmına gidiniz. Ardından "Avoid being selected a Detective"
                    seçeneğinin işaretleyiniz.</p>
                <div class="col-6 mx-auto text-center">
                    <img src="<?= $baseUrl ?>/assets/image/ttt_detective.png" alt="TTT Dedektif Olmama ayarları"
                         class="img-fluid img-zoom">
                </div>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="test">Test Odası nedir?</h2>
                <p>Test odası, oyuncunun hain mi yoksa masum mu olduğunu anlamak için kullanılır. Eğer teste
                    girerseniz ve hain iseniz kırmızı ışık yanar, masum iseniz yeşil ışık yanar. Burada
                    dikkat
                    edilmesi gereken nokta, Hainlerin testi yanıltabilmesidir; bu yüzden kırmızı yanan
                    kişiyi
                    hemen öldürmek yerine yeniden test yapmanız tavsiye edilir. Ayrıca Test cihazını çalıştırmak
                    için her mapte değişen bir item mevcut o item bulmanız ve gerekli yere yerleştirmeniz
                    gerekmekte.</p>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="weaponslot">Oyundaki tüm silahlarım nerede?</h2>
                <p>Üzerinizde bulunan tüm silahlarınız 1, 2, 3, 4, 5 slotlarınızda bulunmaktadır. Bu slotlara
                    erişmek
                    için '1', '2' gibi numaralara basıp kullanabilirsiniz veya mouse'unuzun orta tekerleği ile
                    erişebilirsiniz. Silahlarınız sağ alt kısımda gözükür</p>

                <div class="col-6 mx-auto text-center">
                    <img src="<?= $baseUrl ?>/assets/image/ttt_silahbar.png" alt="Silahlar" class="img-zoom img-fluid">
                </div>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="magneto">Eşyaları nasıl taşıyabilirim?</h2>
                <p>5 silah slotunuzda yer alan "Magneto Stick" ile eşyaya sağ tıklama yaparak
                    taşıyabilirsiniz.</p>

                <div class="col-6 mx-auto text-center">
                    <img src="<?= $baseUrl ?>/assets/image/ttt_magneto.png" alt="Magneto Stick" class="img-zoom img-fluid">
                </div>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="weapon">Silahımda Bazı Şeyler Yazıyor, Onlar Ne Anlama Geliyor?</h2>
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
            <br>
            <div>
                <h2 class="standartcolor" id="silah-nadirlik">Aynı Silahların Farklı Varyasyonları Nedir?</h2>
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
            <br>
            <div>
                <h2 class="standartcolor" id="mutator">Mutator Nedir?</h2>
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
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="bind">Disguiser ve hızlı yanıtlar için tuş nasıl atıyabilirim?</h2>
                <p><kbd>F1</kbd> Tuşuna basınız ardından "Custom Binds" menüsüne geliniz buradan tuş ataması
                    yapabilirsiniz.</p>
                <div class="col-6 mx-auto text-center">
                    <img src="<?= $baseUrl ?>/assets/image/ttt_custom_binds.png" alt="Custom Binds" class="img-fluid img-zoom">
                </div>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="kutu">Kutu ve silah nasıl elde edebilirim?</h2>
                <p><strong>Kutu ve Silah,</strong> IC krediniz, çekiliş, oyuncularla takas yaparak veya el sonu düşen
                    rastgele droptan
                    elde edilebilir.</p>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="kredi">Envanter Kredisi ve C Menü Kredisi nasıl kazanırım?</h2>
                <p>Envanter kredisi kazanmak için bulunduğunuz role göre roundu tamamlamanız gerekir. Örneğin,
                    masumsanız roundun masumlar tarafından kazanılması gerekir.</p>
                <p>C Menü kredisi kazanmak için dedektifseniz hain öldürmeniz, hainseniz masum veya dedektif
                    öldürmeniz gerekir.</p></div>
            <div>
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

                    ?>
                    <h2 class="standartcolor" id="cmenu">Dedektif/Hain iken hangi ekipmanları kullanabilirim?</h2>
                    <ul class="nav nav-tabs" id="cmenu-item" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="tttdedektif nav-link active" id="Detectives-tab" data-bs-toggle="tab"
                                    data-bs-target="#Detectives" type="button" role="tab" aria-controls="Detectives"
                                    aria-selected="true">Dedektif
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="ttthain nav-link" id="Traitors-tab" data-bs-toggle="tab" data-bs-target="#Traitors"
                                    type="button" role="tab" aria-controls="Traitors" aria-selected="false">Hain
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="cmenu-item-tab">
                        <div class="tab-pane fade show active" id="Detectives" role="tabpanel"
                             aria-labelledby="Detectives-tab">
                            <div class="row" id="Detectives-card-faw">
                                <h5 class="standartcolor">Önerdiklerimiz:</h5>
                                <?php
                                foreach ($ttt_cmenu["dedectives"]["items"] as $detective) {
                                    if (isset($detective['favorite']) && $detective['favorite']) {
                                        addDetectivesCard($detective['title'], $detective['description'], $detective['imageUrl'], true);
                                    }
                                }
                                ?>
                            </div>
                            <hr style="border-top: 2px solid var(--bs-primary-text-emphasis);">
                            <div class="row" id="Detectives-card">
                                <?php
                                foreach ($ttt_cmenu["dedectives"]["items"] as $detective) {
                                    addDetectivesCard($detective['title'], $detective['description'], $detective['imageUrl']);
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Traitors" role="tabpanel" aria-labelledby="Traitors-tab">
                            <div class="row" id="Traitors-card-faw">
                                <h5 class="standartcolor">Önerdiklerimiz:</h5>
                                <?php
                                foreach ($ttt_cmenu["traitors"]["items"] as $traitor) {
                                    if (isset($traitor['favorite']) && $traitor['favorite']) {
                                        addTraitorsCard($traitor['title'], $traitor['description'], $traitor['imageUrl'], true);
                                    }
                                }
                                ?>
                            </div>
                            <hr style="border-top: 2px solid var(--bs-danger-text-emphasis);">
                            <div class="row" id="Traitors-card">
                                <?php
                                foreach ($ttt_cmenu["traitors"]["items"] as $traitor) {
                                    addTraitorsCard($traitor['title'], $traitor['description'], $traitor['imageUrl']);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <h2 class="standartcolor" id="envanter">Envanter nedir? Burada ne yapabilirim?</h2>
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
                <br>
                <div>
                    <h2 class="standartcolor" id="event">Etkinlik Düzenleniyor mu?</h2>
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
        </div>
    </div>

</main>