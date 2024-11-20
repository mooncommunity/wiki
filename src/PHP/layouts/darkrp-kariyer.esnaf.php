<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <div class="content pt-3">
            <h1 class="darkrpesnaf" style="">Esnaf ve Siviller</h1>
            <p>Esnaf meslekleri sunucumuzda önemlidir. Çünkü sattıkları ve sundukları hizmet çoğu
                oyuncu için önemlidir şimdi Esnaf ve Siviller hakkında temel bilgileri öğrenelim.</p>
            <div>
                <h2 class="standartcolor" id="meslek">Meslekler</h2>
                <div class="accordion" id="accordionJobs">
                    <?php foreach ($darkrpJobs['esnaf']['jobs'] as $index => $job): ?>
                        <?php
                        $isVip = (isset($job['vip']) && $job['vip'] === 1);
                        $isVipPlus = (isset($job['vip']) && $job['vip'] === 2);
                        ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>"
                                        aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                        aria-controls="collapse<?= $index ?>">
                                    <span style="color: var(--darkrp-job-green-border)"><?= htmlspecialchars($job['title']) ?></span>
                                    <?php if ($isVip) {
                                        ?>
                                        <span style="padding-left: 1%; color: #16bb00">[VIP]</span>
                                        <span style="padding-left: 1%; color: #19d100">[VIP+]</span>
                                    <?php } ?>
                                    <?php if ($isVipPlus) {
                                        ?>
                                        <span style="padding-left: 1%; color: #16bb00">[VIP+]</span>
                                    <?php } ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $index ?>"
                                 class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                                 aria-labelledby="heading<?= $index ?>" data-bs-parent="#accordionJobs">
                                <div class="accordion-body">
                                    <?php if (isset($job["close"]) && $job["close"]) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            Bu meslek şu anda kullanılmamaktadır. Yani bu mesleğe geçemezsiniz.
                                        </div>
                                    <?php } ?>
                                    <p><?= htmlspecialchars($job['description']) ?></p>
                                    <?php if (!empty($job['requirejobs']) || !empty($job['requireORjobs'])): ?>
                                        <h5 class="text-primary-emphasis">Nasıl bu mesleğe geçebilirim?</h5>
                                        <?php if (!empty($job['requirejobs'])): ?>
                                            <p>İlk önce
                                                <?= implode(', ', array_map(fn($job) => '<b>' . htmlspecialchars($job) . '</b>', $job['requirejobs'])) ?>
                                                mesleğinde deneyim kazanman gerekiyor.</p>
                                        <?php elseif (!empty($job['requireORjobs'])): ?>
                                            <p>İlk önce
                                                <?= implode(' veya ', array_map(fn($job) => '<b>' . htmlspecialchars($job) . '</b>', $job['requireORjobs'])) ?>
                                                mesleğinde deneyim kazanman gerekiyor.</p>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if (!empty($job['whitelist'])): ?>
                                        <small class="text-light">Bu meslek whitelistlidir. Daha fazla bilgi için <a
                                                    style="text-decoration: none"
                                                    href="<?= $baseUrl ?>/darkrp-baslarken/sss#basvuru"> Sıkça
                                                Sorulan Sorular - Başvurular</a> bakınız.</small>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="yiyecekveicecek">1. Yiyecek ve İçecek Sektörü</h2>
                <br>
                <p>Tüm esnaf mesleklerinde olduğu gibi, yiyecek ve içecek satışı yapabilmeniz ve rolünüzü
                    gerçekleştirebilmeniz için bir standınız ya da bir dükkanınız olması gerekiyor. Şehirdeki
                    boş
                    dükkanları kiralayabilir veya Duvar Sokağı'nda kendi standınızı inşa edebilirsiniz. Dükkan
                    kiralamış olsanız bile, iç mekanını tamamen kendi zevkinize göre dekore edebilir ve böylece
                    rolünüzü daha gerçekçi bir hale getirebilirsiniz. İyi dekore edilmiş bir mekan, müşterilerin
                    ilgisini çeker ve rol yapma deneyiminizi zenginleştirir.</p>

                <p>Yiyecek ve içecek sektöründeki esnaflar, oyuncuların açlık ve susuzluk ihtiyaçlarını
                    karşılamak
                    için zorunlu olarak etkileşime girdiği mesleklerdir. Oyunda, belirli aralıklarla açlık ve
                    susuzluk ihtiyacını gidermek gerektiğinden, bu meslekler rol yapmaya oldukça elverişli bir
                    yapıya sahiptir. Bu esnaflar, hem hayatta kalmak için önemli bir hizmet sunar hem de
                    oyuncularla
                    sürekli iletişim halinde kalarak şehir yaşamına canlılık katar.</p>

                <h3 class="standartcolor" id="yiyecekveicecek-meslekler">Meslekler</h3>

                <div class="row">
                    <div class="col-md-6">
                        <ul class="mobile-no-margin" style="list-style-type: '- '">
                            <li>Çiğ Köfte Salonu Sahibi</li>
                            <li>İtalyan Restoranı Sahibi</li>
                            <li>Simitçi</li>
                            <li>Tavuk Pilavcı</li>
                            <li>Kebapçı</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="mobile-no-margin" style="list-style-type: '- '">
                            <li>Kafe Sahibi</li>
                            <li>Hamburgerci</li>
                            <li>Dönerci</li>
                            <li>Dondurmacı</li>
                            <li>Tekel Bayi Sahibi</li>
                        </ul>
                    </div>

                </div>
                <br>
                <h3 class="standartcolor" id="yiyecekveicecek-meslek-urunleri">Meslek Ürünleri</h3>
                <p>İlgili mesleğin malzemelerine erişmek için <kbd>F4</kbd> tuşuna basarak açılan menüden Tezgahlar
                    sekmesine
                    girebilirsiniz. Her esnafın kendine özgü tezgahları ve malzemeleri bu sekmede bulunur.
                    Örneğin,
                    bir Çiğ Köfte Salonu Sahibi iseniz, işinizi yürütmek için bir adet çiğ köfte tezgahına sahip
                    olmanız gerekmektedir. Bu tezgahlar, hem ürünlerinizi hazırlamak hem de satış yapmak için
                    gereklidir.</p>
                <br>
                <h3 class="standartcolor" id="yiyecekveicecek-fiyatlandirma">Fiyatlandırma</h3>
                <p>Yiyecek ve içecek sektöründe fiyatlandırma abartılı olmamalıdır. Unutmayın, bu meslek grubu
                    temel
                    olarak rol yapma deneyimi için vardır. Oyuncular, rolünüzden keyif aldıklarında genellikle
                    cömert davranır ve size fazlasıyla yüklü miktarda ödeme yapabilirler. Bu yüzden, aşırı
                    fiyatlandırmadan kaçının ve rol yapmayı ön planda tutun. Hem gerçekçi fiyatlar belirlemek
                    hem de
                    rol yaparak oyunun tadını çıkarmak en iyi stratejidir.</p>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="ticarivehizmetsektoru">2. Ticari ve Hizmet Sektörü</h2>
                <br>
                <h3 class="standartcolor" id="ticarivehizmetsektoru-yapimarket">Yapı Market Rehberi</h3>
                <p>İlk rehberimiz Yapı Market. Yapı marketlerde satılan ürünler, Garry's Mod'un temel eşyaları
                    olan
                    Physic Gun ve Tool Gun ile ilgilidir. Bu eşyalar, oyuncuların inşaat ve yapı işlemlerinde
                    kullanmaları gereken olmazsa olmaz malzemelerdir. Dolayısıyla, bu eşyaları edinmek isteyen
                    her
                    oyuncu, mutlaka yapı market esnafından alışveriş yapmak zorundadır. Bu nedenle, yapı market
                    mesleği hem sürekli müşteri trafiği sağlayan hem de rol yapmaya oldukça müsait bir meslek
                    grubudur. Oyuncularla sürekli etkileşimde olacağınız bu meslek, şehrin yapı ihtiyaçlarını
                    karşılamada önemli bir rol oynar.</p>

                <h4 class="standartcolor" id="ticarivehizmetsektoru-yapimarket-urunleri">Yapı Market Ürünleri</h4>
                <p>Yapı marketlerde, oyuncuların inşaattan güvenliğe kadar çeşitli ihtiyaçlarını
                    karşılayabilecek
                    ürünler satılmaktadır. İşte yapı markette bulabileceğiniz ürünlerin listesi ve kısa
                    açıklamaları:</p>

                <ul class="list-group">
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(0) ?>">Tool Gun, Physic Gun, Gravity Gun</strong>:
                        <span>Oyunun temel araçlarıdır ve inşaat, nesne manipülasyonu gibi işlevler için kullanılır.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(1) ?>">Fotoğraf Makinesi</strong>:
                        <span>Oyun arayüzlerini görünmez hale getirerek, gerçek bir kamera açısıyla fotoğraf çekme imkanı sağlar.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(2) ?>">Kapı Alarmı</strong>:
                        <span>Evinizin kapısına yetkisiz giriş olduğunda alarm devreye girer.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(3) ?>">Kapı Patlatıcı</strong>:
                        <span>Kilitli kapıları patlatarak açmanızı sağlar.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(4) ?>">Maymuncuk</strong>:
                        <span>Kilitli araç ve ev kapılarını zorla açmak için kullanılır.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(5) ?>">Portatif Keypad Kırıcı</strong>:
                        <span>Tool Gun ile yapılan keypad’leri açar.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(0) ?>">İlk Yardım Kiti</strong>:
                        <span>Sağlık değerlerinizi yükseltir, sağlık yenilemek için kullanılır.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(1) ?>">Araç Alarmı</strong>:
                        <span>Aracınıza takıldığında, çalınma girişimlerinde alarm devreye girer.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(2) ?>">Araç Takip Cihazı</strong>:
                        <span>Aracınızı haritada görmenizi sağlar, araç takibi için kullanılır.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(3) ?>">Ayakkabı (Seviye 1-5)</strong>:
                        <span>Seviyesine göre daha hızlı hareket etmenizi sağlar.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(4) ?>">Kask (Seviye 1-5)</strong>:
                        <span>Kafadan alınan hasarı azaltır.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(5) ?>">Kulaklık (Seviye 1-5)</strong>:
                        <span>Daha yükseğe zıplamanızı sağlar.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(0) ?>">Çelik Yelek (Seviye 1-5)</strong>:
                        <span>Vücudunuza gelen hasarı seviyesine bağlı olarak azaltır.</span>
                    </li>
                </ul>
                <br>

                <h3 class="standartcolor" id="ticarivehizmetsektoru-eczaci">Eczacı Rehberi</h3>
                <p>Sıradaki rehberimiz, DarkRP ve MoonGaming™ sunucularında hayati öneme sahip bir meslek olan
                    Eczacıya ait. Eczacı, oyuncuların sağlık ihtiyaçlarını karşılayan önemli bir rol oynar.
                    Eczanede
                    satılan ürünler, oyuncuların sağlık değerlerini yükseltmesi için vazgeçilmezdir. Bu da
                    eczacının
                    sürekli etkileşim halinde olduğu bir meslek olduğunu gösterir.</p>

                <h4 class="standartcolor" id="ticarivehizmetsektoru-eczaci-urunler">Eczanede Satılan Ürünler</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(1) ?>">Bio-Organ (Seviye 1-5)</strong>:
                        <span>Maksimum HP değerinin artmasını sağlar. Örneğin, bir adet Bio-Organ 3 ve Bio-Organ 5 tüketirseniz, maksimum sağlık değeriniz 500'e ulaşabilir.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(2) ?>">Polis Bio-Organ (Seviye 1-5)</strong>:
                        <span>Normal Bio-Organ ile aynı işlevi görür ancak sadece polisler tarafından kullanılabilir. Maksimum HP artışı sağlar. Örneğin, bir adet Bio-Organ 3 ve Bio-Organ 5 kullanan bir polis, maksimum sağlık değerini 500’e çıkarabilir.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(3) ?>">İlaç (Seviye 1-5)</strong>:
                        <span>Mermilerin sekmesini (recoil) azaltır, ateşli silahlarla yapılan atışlarda daha isabetli olmanızı sağlar.</span>
                    </li>
                </ul>
                <br>
                <h3 class="standartcolor" id="ticarivehizmetsektoru-poligon">Poligon Rehberi</h3>
                <p>Poligon mesleği, DarkRP ve MoonGaming™ sunucularında oyuncuların silah kullanma becerilerini
                    geliştirebilecekleri ve çeşitli silahlar ile mermiler satın alabilecekleri bir rolü temsil
                    eder.
                    Bu meslekte, basit tabancalardan hafif makineli tüfeklere kadar geniş bir yelpazede silahlar
                    satılmaktadır. Ayrıca, farklı seviyelerdeki mermiler de poligondan temin edilebilir.</p>

                <p>Poligon işletmecisi olarak, oyuncuların silah eğitimlerine yardımcı olabilir ve onlara
                    ihtiyaç
                    duydukları silahları sağlayarak oyuncuların savaş yeteneklerini geliştirmelerine katkıda
                    bulunabilirsiniz.</p>

                <h4 class="standartcolor" id="ticarivehizmetsektoru-poligon-urunler">Poligon Ürünleri</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(0) ?>">Tabanca (Seviye 1-5)</strong>:
                        <span>Her seviyede farklı özelliklere sahip tabancalar.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(1) ?>">Ateşli Silahlar (Seviye 1-5)</strong>:
                        <span>Her seviyede farklı ateşli silahlar.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(2) ?>">Makinalı Tüfekler (Seviye 1-5)</strong>:
                        <span>Her seviyede farklı makineli tüfekler.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(3) ?>">Muhimmat Kutusu</strong>:
                        <span>Silahınıza şarjör sağlamaktadır.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(4) ?>">Farklı Seviye Mermiler</strong>:
                        <span>Merminin gücünü artırmaktadır.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(5) ?>">Çelik Yelek (2. ve 3. Kalite)</strong>:
                        <span>Zırh sağlamaktadır.</span>
                    </li>
                </ul>
                <br>
                <h3 class="standartcolor" id="ticarivehizmetsektoru-ithalatci">İthalatçı Rehberi</h3>
                <p>İthalatçı mesleği, DarkRP ve MoonGaming™ sunucularında oyunculara geniş bir silah yelpazesi
                    sunan ve ağır silahlar temin edebilen özel bir rolü temsil eder. Bu meslek, oyuncuların daha
                    güçlü ve çeşitli silahları edinerek savaş yeteneklerini en üst düzeye çıkarmalarına yardımcı
                    olur. Ağır makineli tüfekler ve özel mühimmat seçenekleri ile daha stratejik savaşlara
                    olanak tanır.</p>
                <p>İthalatçı olarak, oyunculara nadir ve güçlü silahlar sağlayarak onların daha etkili savaş
                    becerileri kazanmalarına katkıda bulunabilirsiniz.</p>

                <h4 class="standartcolor" id="ticarivehizmetsektoru-ithalatci-urunler">İthalatçı Ürünleri</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(0) ?>">Tabanca (Seviye 1-5)</strong>:
                        <span>Her seviyede farklı özelliklere sahip tabancalar.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(1) ?>">Ateşli Silahlar (Seviye 1-5)</strong>:
                        <span>Farklı seviyelerde çeşitli ateşli silahlar.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(2) ?>">Ağır Silahlar (Seviye 1-5)</strong>:
                        <span>Ağır makineli tüfekler gibi güçlü silahlar.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(3) ?>">Muhimmat Kutusu</strong>:
                        <span>Silahınıza şarjör sağlamaktadır.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(4) ?>">Farklı Seviye Mermiler</strong>:
                        <span>Merminin gücünü artırmaktadır.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(5) ?>">Çelik Yelek (1. , 2. ve 3. Kalite)</strong>:
                        <span>Zırh sağlamaktadır.</span>
                    </li>
                </ul>

                <br>
                <h3 class="standartcolor" id="ticarivehizmetsektoru-muhendis">Mühendis Rehberi</h3>
                <p>Mühendis mesleği, DarkRP ve MoonGaming™ sunucularında oyuncuların Bitki üretme ve para basma
                    makineleri için donanım
                    yükseltme katkı sağlıyabilceği bir rolü temsil
                    eder.
                    Bu meslekte, İnsanların Bitki üretimine katkıda bulunabilir ve ya para basma makinelerine katkıda
                    bulunabilirsiniz..</p>

                <h4 class="standartcolor" id="ticarivehizmetsektoru-muhendis-urunler">Mühendis Ürünleri</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(5) ?>">Mühendis Kiti</strong>:
                        <span>Bitki Üretimine ve ya Para basma makinesini yükseltmenizi sağlar. Sadece Mühendisin silah itemlerinde bulunur.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(4) ?>">Fan Eklentisi</strong>:
                        <span>Para basma makinesinin sıcaklığını kontrol altına almak için kullanılır.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(3) ?>">Para Yazılımı</strong>:
                        <span>Para basma makinesinin para miktarını artırmak için kullanılır.</span>
                    </li>
                    <li class="list-group-item">
                        <strong class="<?= randomBSColor(2) ?>">Zırh Paketi</strong>:
                        <span>Para basma makinesinin yanlışlıkla isabet eden kurşunlarda canını korumayı sağlar. Fakat yine canı azalır.</span>
                    </li>
                </ul>

                <br>
                <h3 class="standartcolor" id="ticarivehizmetsektoru-imam">İmam Rehberi</h3>
                <p>İmam mesleği, DarkRP ve MoonGaming™ sunucularında oyuncuların XP Kazanmasını sağlarlar.
                    Bu meslekte, İnsanlara belli ücret karşılığında üfleyerek daha fazla XP Kazanmasını
                    sağlıyabilirsiniz.</p>
                <br>
                <h3 class="standartcolor">Sonuç</h3>
                <p>Yiyecek ve içecek sektörü ile ticari ve hizmet sektöründe bulunan esnaf meslekleri, DarkRP
                    sunucularında rol yapma deneyiminizi zenginleştiren ve oyunculara etkileşim fırsatları sunan
                    önemli unsurlardır. Her meslek grubu, kendi içinde sunduğu hizmetler ve etkileşim olanakları
                    ile
                    oyunculara farklı deneyimler yaşatmaktadır.</p>
            </div>
            <br>
            <div>
                <h2 class="standartcolor" id="sss">Bilinmesi Gerekenler...</h2>
                <br>
                <div>
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="standartcolor" id="poscihazi">POS Cihazı Hakkında</h3>
                            <p>Müşterinin yanında nakit yok mu? O zaman banka kartıyla ödeme yapabilir.</p>
                            <ol>
                                <li>Rakamları kullanarak miktarı giriniz.</li>
                                <li>Giriş tuşuna basınız.</li>
                                <li>Müşterinin kartını okutmasını isteyiniz.</li>
                            </ol>
                            <p>Her şey tamam!</p>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= $baseUrl ?>/assets/image/darkrp_pos.png" class="img-fluid" alt="POS Cihazı">
                        </div>
                    </div>
                </div>
                <br><br>
                <div>
                    <h3 class="standartcolor" id="maden">Madende Bulduğum Kükürt, Demir, Çelik, Elmas ve Altın ile Ne
                        Yapabilirim?</h3>
                    <p>Madende bulduğunuz kükürt, demir, çelik, elmas ve altın gibi malzemeleri, maden
                        girişindeki NPC'yi kullanarak çeşitli eşyalar craftlayabilir veya bu malzemeleri NPC'ye
                        satarak gelir elde edebilirsiniz.</p>
                </div>
            </div>
            <br>
        </div>
        <hr>
        <blockquote>
            DarkRP Kariyer Esnaf ve Siviller için bilmeniz gerekenler serimiz burada son bulmaktadır. Daha fazlası için
            diğer
            rehberlerimize de göz atmayı unutmayın.
        </blockquote>

        <div class="content-ref-box">
            <p>
                <a id="sssBox" href="<?= $baseUrl; ?>/darkrp-kariyer/illegal">
                    <i class="fa-solid fa-user-tie"></i> Yasadışı Organizasyonlar
                </a>
            </p>
        </div>
    </div>
</main>

