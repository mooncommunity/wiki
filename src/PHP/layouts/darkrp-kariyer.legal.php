<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="darkrplegal">Devlet Çalışanı</h1>
        <p>MoonCity sana ihtiyacı var... Hemen Devlet Çalışanı olarak eğitimine başla böylelikle
            Stajyerlik yaparken daha az zorlanacaksın. Unutma! Öğrenmeye açık olmalısın herşey burada olamaz değil mi
            stajyer?</p>
        <div>
            <br>
            <div>
                <div>
                    <h2 class="standartcolor" id="meslek">Meslekler</h2>
                    <div class="accordion" id="accordionJobs">
                        <?php foreach ($darkrpJobs['legal']['jobs'] as $index => $job): ?>
                            <?php
                            $isEGM = ($job['title'] === 'Emniyet Genel Müdürü');
                            $isSivil = ($job['title'] === 'Milli Istihbarat Teskilatı Personeli' || $job['title'] === 'Milli Istihbarat Teskilatı Müsteşarı' || $job['title'] === 'Sivil Polis');
                            $isVip = (isset($job['vip']) && $job['vip'] == 1);
                            $isVipPlus = (isset($job['vip']) && $job['vip'] == 2);
                            ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>"
                                            type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>"
                                            aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                            aria-controls="collapse<?= $index ?>">
                                        <span class="<?= $isEGM ? 'text-primary' : ($isSivil ? 'text-danger' : 'text-primary-emphasis') ?>"><?= htmlspecialchars($job['title']) ?></span>
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
                    <h2 class="standartcolor" id="kiyafet">Evrim balığını (Maymun karakteri) kullanabilir miyim?</h2>
                    <p>Hayır, hakim, savcı, belediye başkanı, belediye başkan yardımcısı, bekçi, polis, jandarma, PÖH,
                        JÖH gibi mesleklerde evrim balığını kullanmamalısınız. Eğer kullandıysanız, kıyafet dolabına
                        giderek normal hale dönmeniz gerekmektedir.</p>
                </div>
                <br>

                <div>
                    <h2 class="standartcolor" id="bekci">Bekçi İken Ne Yapmalıyım?</h2>
                    <p>Bekçi mesleği, Emniyet Teşkilatı'nın temel taşıdır. Herkesin bir gün yaşayabileceği bu mesleğin
                        temel görevleri şu şekildedir:</p>
                    <ol>
                        <li>Bekçi mesleğinde amacınız, insanları yargılamak değil, yargı makamına teslim etmek olduğunu
                            unutmayın.
                        </li>
                        <li>Göreviniz, çarşı ve mahallelerde devriye atarak herhangi bir suçun işlenmesini engellemek
                            veya işlendiğinde gözaltına alarak ifadesi için gerekli makama iletmektir.
                        </li>
                        <li>Unutmayın, bekçi olarak kimseyi hapse atamaz ve motorlu taşıtları kullanarak devriye
                            atamazsınız.
                        </li>
                    </ol>
                </div>

                <br>

                <div>
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="standartcolor" id="belediyeisci">Belediye İşçisiyim, Nasıl Görevimi Yerine
                                Getirebilirim?</h2>
                            <p>5 dakikada bir ekranınıza tamir ikonu gelmektedir. Polis karakolundan araç çıkararak
                                tamir ikonunun olduğu yere gidip görevinizi yerine getirmeye başlayabilirsiniz.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= $baseUrl ?>/assets/image/darkrp_belediyeisci.png" class="img-fluid img-zoom"
                                 alt="Belediye İşçisi">
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <h2 class="standartcolor" id="dolap">Polis Sağlık Dolabı ve Teçhizat Dolabı Nedir?</h2><br>
                    <p>
                        Polis Sağlık Dolabı, Polislerin ihtiyaçlarını karşılama konusundaki en etkili etkenlerden
                        biridir.
                        Polis Sağlık Dolabıyla etkileşime geçildiği zaman Sizi bulunduğunuz polis mesleğine göre can,
                        zırh
                        (Polis Özel Harekat/Jandarma Özel Harekat/MIT'seniz eğer ek olarak Ayakkabı, Kulaklık, Çelik
                        yelek, Kask) verir.
                    </p>
                    <ul style="list-style-type: '— '">
                        <li>Polis Sağlık Dolabını kullandığınız zaman 2 dakikalık cooldown'ı vardır.</li>
                        <li>Teçhizat Dolabındaki tüm silahları alamayabilirsiniz. Bunun sebebi bazı silahlar daha yüksek
                            seviye isteyebilir veya daha yüksek bir meslek grubu isteyebilir. (örnek: Bekçi mesleğinde
                            5. seviye olmanıza rağmen m3 super90 alamamanız.)
                        </li>
                        <li>Teçhizat dolabından silah almanın limiti VIP'niz yoksa 1, VIP'niz varsa eğer 3 tanedir.</li>
                        <li>Polis Sağlık Dolabını istediğiniz zaman kullanabilirken, Teçhizat dolabını sadece Lockdown
                            (Olağanüstü hal) durumlarında kullanabilirsiniz.
                        </li>
                    </ul>
                </div>
                <br>

                <div>
                    <h2 class="standartcolor" id="taser">Taser Hangi Durumlarda Kullanılmalıdır ve
                        Kullanılmamalıdır?</h2>
                    <p>Taser, bir polis memurunun şüphelileri ölümcül olmayan bir şekilde etkisiz hale getirmesine
                        yardımcı olan bir teçhizattır. Ancak, taser kullanımı belirli durumlarla sınırlıdır. Aşağıda,
                        taserin hangi durumlarda kullanılmaması gerektiği belirtilmiştir:</p>
                    <h5 class="standartcolor">Kullanılmaması Gereken Durumlar</h5>
                    <ul style="list-style-type: '* '">
                        <li><span><strong class="text-secondary">Elinde Silah Olan Bir Şüpheli:</strong> Eğer şüphelinin elinde bir silah varsa,
                            taser kullanmak tehlikeli olabilir.</span>
                        </li>
                        <li><span><strong class="text-danger">Kelepçelenmiş Bir Şüpheli:</strong> Zaten kelepçelenmiş bir şüpheliye taser
                            kullanmak gereksizdir.</span>
                        </li>
                        <li><span><strong
                                        class="text-teal">Kaçma veya Zarar Verme Olasılığı Olmayan Bir Şüpheli:</strong> Eğer şüpheli herhangi
                            bir şekilde kaçmaya veya zarar vermeye niyetli değilse, taser kullanmak uygun değildir.</span>
                        </li>
                    </ul>
                    <p>Taser kullanımında dikkatli olunmalı ve sadece gerektiğinde başvurulmalıdır.</p>
                </div>
                <br>
                <div>
                    <h2 id="gbt" class="standartcolor my-4">GBT Tablet Nedir, Nasıl Kullanılır?</h2>
                    <p>GBT Tablet, emniyet birimlerinin işini kolaylaştıran teknolojik bir cihazdır. 5 kategoriye
                        ayrılmaktadır.</p>


                    <div class="list-group mb-4">
                        <div class="list-group-item">
                            <h5 class="text-danger-emphasis">1. GBT Menüsü</h5>
                            <p>Bu menüde oyuncular ve bilgileri yer almaktadır: arama izni, baskın izni, ceza puanı,
                                kişinin geçmişi, sahip olduğu araçlar ve ehliyet bilgileri burada bulunur.</p>
                        </div>
                        <div class="list-group-item">
                            <h5 class="text-primary-emphasis">2. Arananlar</h5>
                            <p>MoonCity'de arama kararı çıkanlar bu menüde gözükür.</p>
                        </div>
                        <div class="list-group-item">
                            <h5 class="text-info-emphasis">3. Panik Butonu</h5>
                            <p>Acil desteğe mi ihtiyacınız var? Konumunuzu GPS aracılığıyla emniyet birimlerine
                                bildirin.</p>
                        </div>
                        <div class="list-group-item">
                            <h5 class="text-warning-emphasis">4. Suçlu Transfer İsteği</h5>
                            <p>Suçlunun başka birimlere mi teslim edilmesi gerekiyor? O zaman bu menü tam size göre.</p>
                        </div>
                        <div class="list-group-item">
                            <h5 class="text-primary-emphasis">5. Raporlar</h5>
                            <p>Burada baskın sonucu gelişen olayların raporu tutulmaktadır. Birçok oyuncu ne yazık ki
                                burayı kullanmamaktadır.</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_gbt.png" class="img-fluid img-zoom"
                             alt="GBT Tablet Görseli">
                    </div>
                </div>
                <br>
                <div>
                    <h2 class="standartcolor" id="suclu">Bir Suçlu yakaladım nasıl role devam etmeliyim?</h2><br>
                    <p>
                        Bir süpheliyi yakaladıktan sonra direkt cezaevine göndermemelisiniz, unutmayın kimse kanıtlanana
                        kadar suçlu değildir.
                        İlk olarak aktif Hakim veya Savcı bulunup bulunmadığına bakmanız lazım. Eğer ki varsa onlara
                        devretmeden önce
                        şüphelinin yazılı veya sözlü (tercihe bağlı) ifadesini almanız gerekmektedir. İfadeyi aldıktan
                        sonra ise
                        gerekli makama sizin götürmeniz gerekmektedir. Eğer ki Hakim veya Savcı yok veya ulaşamıyorsanız
                        şüphelinin ifadesini aldıktan sonra bir karar verilmesi lazım. Bu kararı siz veremezsiniz, bir
                        üstünüz veya
                        aynı rütbedeki bir memuru çağırıp o kişiye ifadeyi ve olayı ek olarak delilleri aktarıp karar
                        vermesini
                        beklemelisiniz. Ardından karar göre ya serbest bırakırsınız ya da suçlarından dolayı hapse
                        atarınız.
                    </p>
                </div>
                <br>

                <div>
                    <h2 class="standartcolor" id="asayis-sivil">Sivil Polis, Asayiş Memurundan Üstün Müdür?</h2><br>
                    <p>Hayır, her iki ekip de Emniyet Genel Müdürlüğü’ne bağlıdır. Sivil polis amiri aynı zamanda asayiş
                        polis amiridir. Sivil polis ile asayiş memurunu ayıran tek şey görevleridir. İki taraf da
                        birbirine saygılı ve düzgün bir şekilde konuşmalı, birlikte çalışmalıdır.</p>
                </div>
                <br>

                <div>
                    <h2 class="standartcolor" id="sivil-polis-mit">Sivil Polis ve MIT'in görevi nedir?</h2><br>
                    <p>
                        Sivil Polis ve MIT'in asıl görevi şehir içerisinde veya dışında, halkın arasında sivil olarak
                        gezerken,
                        halkı olumsuz durumlar yapması konusunda teşvik eden kişileri, illegal eylemler yapan kişileri
                        yakalayıp
                        etkisiz hale getirmesi gerekmektedir. Bu durumlardan birine örnek vermek gerekirse, Eşkiyaların
                        köyü
                        olan KEKE Köyündeki illegal faaliyetlerin fotoğraf olarak Sosyal Medyaya atılmasının sonucunda
                        KEKE Köyüne sızılması işlemi MIT'in ve Sivil Polisin sorumluluğudur.
                    </p>
                    <ul style="list-style-type: '+ '">
                        <li>Sivil Polis ve MIT Personelleri sızma işlemleri haricinde illegal eylemlerde bulunmamalıdır.
                            (örnek: Sırtında silahla gezmek, polislere hakaret edip kaçmak)
                        </li>
                        <li>Sivil Polis veya MIT Personelleri Polis Özel Harekat veya Jandarma Özel Harekat bulunuyorken
                            operasyon yürütemezler yani
                            Polis Özel Harekat'leri veya Jandarma Özel Harekat'leri baskına alamama gibi bir durumu
                            yoktur.
                            Sızılması gereken yerlere girip istihbarat alıp raporlarını bölgenin ilgili birimine
                            iletmeleri gerekir.
                        </li>
                    </ul>
                </div>
                <br>
                <div>
                    <h2 id="baskanaday" class="standartcolor my-4">Belediye Başkanı Nasıl Olacağım?</h2>
                    <p>İlk önce Belediye binasın girişindeki "YSK Sorumlusu" adaylığınızı ortaya koymanız gerekmektedir.
                        Daha sonra seçim süreci başlıcak seçim süreci bitince en çok oy alan aday Belediye başkanı
                        olacaktır.</p>
                </div>
                <br>
                <div>
                    <h2 id="baskanyardimcisi" class="standartcolor my-4">Belediye Başkan Yardımcısı Seçebiliyor
                        muyum?</h2>
                    <p>Evet, belediye başkan yardımcısı seçebiliyorsunuz. Belediye binasın girişindeki "YSK Sorumlusu"
                        ile
                        seçebilirsiniz.</p>
                </div>
                <br>
                <div>
                    <h2 class="standartcolor" id="baskansokagacikma">Başkan Olarak Sokağa Çıkma Yasağı Başlatmadan Ne
                        Yapmalıyım?</h2>
                    <p>Belediye başkanı olarak sokağa çıkma yasağı uygulayacaksanız, bu kararı kendiniz vermemelisiniz.
                        Öncelikle Emniyet Teşkilatı'ndan ve diğer teşkilatlardan her şubenin veya bölümün en yetkili
                        kişileri ile bir toplantı düzenleyip fikir alışverişi yapmalısınız.</p>
                    <p>Eğer toplantı sonucunda sokağa çıkma yasağı ilan etmeye hemfikir iseniz, ilk olarak yasağı
                        başlatmadan 4 veya 5 dakika önce duyuru kısmından:</p>
                    <blockquote>
                        “Birazdan ... sebebinden dolayı devlet yetkilileri olarak aldığımız karar sonucu sokağa çıkma
                        yasağı ilan edilecektir, bir an önce evlerinize geçiniz.”
                    </blockquote>
                    <p>şeklinde, temel olarak yasağın sebebini belirtip vatandaşa eve geçme çağrısında bulunun.</p>
                    <p>Kısaca temel prensipler olarak şunları takip edin:</p>
                    <ul style="list-style-type: '- '">
                        <li>Fikir alışverişi yapın.</li>
                        <li>Görevlendirme yapın.</li>
                        <li>Duyurusunu planlayın ve yayınlayın.</li>
                        <li>Ek olarak, yasak esnasında güvenli bir yerde saklanmayı ihmal etmeyin.</li>
                    </ul>
                </div>
            </div>
            <br>
            <hr>
            <blockquote>
                DarkRP Kariyer Devlet Çalışanları için bilmeniz gerekenler serimiz burada son bulmaktadır. Daha fazlası
                için diğer
                rehberlerimize de göz atmayı unutmayın.
            </blockquote>

            <div class="content-ref-box">
                <p>
                    <a id="sssBox" href="<?= $baseUrl; ?>/darkrp-kariyer/esnaf">
                        <i class="fa-solid fa-scale-balanced"></i> Esnaf ve Siviller
                    </a>
                </p>
            </div>

        </div>
</main>