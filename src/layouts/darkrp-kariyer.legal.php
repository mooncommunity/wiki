<?php
$jobs = [
    [
        'title' => "Belediye İşçisi",
        'description' => "MoonCity'de arızaları tamir etmekle görevli devlet çalışanıdır.",
        'req' => null
    ],
    [
        'title' => "Zabıta",
        'description' => "Şehir düzenini korumak ve halk sağlığını sağlamak için görev yapan önemli bir kuruluştur.",
        'req' => null
    ],
    [
        'title' => "Zabıta Amiri",
        'description' => "Ekiplerini yöneterek şehirdeki düzenin sağlanmasında ve vatandaşların haklarının korunmasında kritik bir rol oynar.",
        'req' => "İlk önce Zabıta Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Bekçi",
        'description' => "Gece ve gündüz devriye atarak güvenliği sağlamak ve olası tehlikelere karşı önlem almakla görevli bir güvenlik görevlisidir. Asayiş Polis Amirini dinlemek zorunda.",
        'req' => null
    ],
    [
        'title' => "Gardiyan",
        'description' => "Polis Karakolunda Hapishanede güvenlikten sorumlu Polis birimidir. Asayiş Polis Amirini dinlemek zorunda.",
        'req' => null
    ],
    [
        'title' => "Trafik Polis Memuru",
        'description' => "Şehir içinde, Yolların güvenliğini sağlamak, trafik akışını düzenlemek ve sürücülerin kurallara uymasını denetlemekle sorumludur. Trafik Polis Amirini dinlemek zorunda eğer yok ise Asayiş Polis Amirinin sözünü dinlemek zorunda.",
        'req' => "İlk önce Bekçi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Trafik Polisi Amiri",
        'description' => "Trafik düzenini sağlamak için ekipleri yöneterek, kazaların önlenmesi ve sürücülerin güvenliğinin artırılması konusunda stratejiler geliştirir. Emniyet Genel Müdürünü dinlemek zorunda.",
        'req' => "İlk önce Trafik Polis Memuru Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Yunus Polisi",
        'description' => "Hızlı müdahale ve devriye görevleriyle suç öncesi ve sonrası güvenliği sağlamakla sorumlu olan, motorlu devriye ekiplerini oluşturan polis birimidir. Asayiş Polis Amirini dinlemek zorunda.",
        'req' => "İlk önce Trafik Polis Memuru mesleğinde deneyim kazanmanız gerekiyor."
    ],
    [
        'title' => "Polis Asayiş Memuru",
        'description' => "Şehir içinde, Halkın güvenliğini sağlamak, suçları önlemek ve toplumsal düzeni korumak amacıyla aktif olarak devriye gezen bir güvenlik görevlisidir.",
        'req' => "İlk önce Trafik Polis Memuru Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Polis Asayiş Amiri",
        'description' => "Polis Asayiş ekiplerinin faaliyetlerini yöneterek, suç önleme stratejilerini geliştirmek ve toplumsal güvenliği artırmak için çalışmalar yürütür.  Emniyet Genel Müdürünü dinlemek zorunda.",
        'req' => "İlk önce Polis Asayiş Memuru Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Sivil Polis",
        'description' => "EGM Bağlı olarak illegal bölgelere sızarak bilgi toplar. Polis Asayiş Amirini dinlemek zorundadır.",
        'req' => null,
        'vip' => 1
    ],
    [
        'title' => "Polis Özel Harekat Memuru",
        'description' => "Yüksek riskli operasyonlarda görev alarak, terörle mücadele, narkotik operasyonları ve diğer güvenlik tehditlerine karşı müdahalede bulunan uzman bir güvenlik görevlisidir.",
        'req' => "İlk önce Polis Asayiş Memuru Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Polis Özel Harekat Köpeği",
        'description' => "Polis özel harekat birimlerinde görev alan, eğitimli bir köpektir. Acil durumlarda ekip üyelerine destek sağlarken, operasyonların güvenliğini artırmak için yaralıları bulma ve kurtarma görevlerinde de rol oynar.",
        'req' => "İlk önce Sokak Köpeği ve Sokak Kedisi mesleğinde deneyim kazanmanız gerekiyor."
    ],
    [
        'title' => "Polis Özel Harekat Doktoru",
        'description' => "Polis özel harekat birimlerinde görev yapan personele tıbbi destek sağlamakla birlikte, acil durumlarda yaralıların tedavisini yaparak operasyon güvenliğini artırmaya katkıda bulunur.",
        'req' => "İlk önce Doktor Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Polis Özel Harekat Bulldozer",
        'description' => "Yüksek riskli operasyonlarda görev alarak, terörle mücadele, narkotik operasyonları ve diğer güvenlik tehditlerine karşı müdahalede bulunan uzman bir güvenlik görevlisidir.",
        'req' => "İlk önce Polis Özel Harekat Memuru Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Polis Özel Harekat Keskin Nişancısı",
        'description' => "Yüksek riskli operasyonlarda görev alarak, terörle mücadele, narkotik operasyonları ve diğer güvenlik tehditlerine karşı müdahalede bulunan uzman bir güvenlik görevlisidir.",
        'req' => "Öncelikle Polis Asayiş mesleğinde deneyim kazanmanız, keskin nişancı tecrübesi edinmeniz ve ekip çalışmasına yatkın olmanız gerekmektedir."
    ],
    [
        'title' => "Polis Özel Harekat Amiri",
        'description' => "Polis özel harekat ekiplerinin yönetimini üstlenerek, stratejik planlamalar yapar ve operasyonel başarıyı sağlamak için personelinin eğitim ve gelişiminden sorumludur.",
        'req' => null
    ],
    [
        'title' => "Acil Tıp Teknisyeni",
        'description' => "MoonCity, bayılmış olan insanları hayata döndürmek için çaba gösterir.",
        'req' => "İlk önce Belediye İşçisi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Doktor",
        'description' => "MoonCity, bayılmış olan insanları hayata döndürmekle ve reçete yazmakla görevlidir.",
        'req' => "İlk önce Acil Tıp Teknisyeni Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "İtfaiye",
        'description' => "MoonCity, çıkan yangıları söndürmekle görevli olan devlet çalışanlarıdır.",
        'req' => "İlk önce Belediye İşçisi ve Zabıta Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Belediye Başkanı",
        'description' => "MoonCity'nin yerel yönetimini yöneten, şehirdeki kamu hizmetlerini organize eden ve vatandaşların ihtiyaçlarını karşılamak için çalışarak toplumsal sorunlara çözümler üreten liderdir.",
        'req' => null
    ],
    [
        'title' => "Belediye Başkanı Yardımcısı",
        'description' => "Belediye Başkanına destek veren ve onun görevlerini üstlenmesine yardımcı olan, yerel yönetim süreçlerinde etkin rol oynayan liderdir. Şehirdeki kamu hizmetlerinin düzenlenmesi ve vatandaşlarla iletişimin sağlanmasında önemli bir görevi vardır.",
        'req' => null
    ],
    [
        'title' => "Hakim",
        'description' => "Adalet sisteminin işleyişini sağlayan, davaları değerlendirip taraflar arasında adil bir karar veren yargı mensubudur. Hukukun üstünlüğünü koruyarak, toplumsal düzenin sağlanmasında önemli bir rol üstlenir.",
        'req' => "İlk önce Gardiyan mesleğinde deneyim kazanmanız gerekiyor."
    ],
    [
        'title' => "Savcı",
        'description' => "Suçlamaları yöneten ve davaları takip eden, adaletin tecelli etmesi için delilleri toplayarak mahkemeye sunan hukuk uzmanıdır. Kamu adına davaları açarak, suçluların cezalandırılmasını sağlar.",
        'req' => "İlk önce Hakim mesleğinde deneyim kazanmanız gerekiyor."
    ],
    [
        'title' => "Emniyet Genel Müdürü",
        'description' => "MoonCity şehir içinde güvenlik stratejilerini belirleyerek, polis teşkilatının etkinliğini artırmak ve kamu güvenliğini sağlamakla sorumlu en üst düzey yetkilidir. Tüm polis birimleri sözünü dinlemek zorundadır.",
        'req' => null
    ],
    [
        'title' => "Jandarma Özel Harekat Komandosu",
        'description' => "Yüksek riskli görevlerde uzmanlaşmış, terörle mücadele ve asayiş sağlama gibi kritik operasyonları gerçekleştirmek üzere eğitim almış bir askeri personeldir.",
        'req' => "İlk önce Polis Özel Harekat Memuru ve ya Jandarma Komutanı Mesleğinde Deneyim Kazanmanız gerekiyor.",
        'close' => true
    ],
    [
        'title' => "Jandarma Özel Harekat Doktoru",
        'description' => "Jandarma özel harekat birimlerinde görev yapan personele tıbbi hizmet sunarak, acil durumlarda yaralıların tedavisini gerçekleştirir ve operasyonlarda sağlık güvenliğini sağlar.",
        'req' => "İlk önce Polis Özel Harekat Doktoru Mesleğinde Deneyim Kazanmanız gerekiyor.",
        'close' => true
    ],
    [
        'title' => "Jandarma Özel Harekat Komutanı",
        'description' => "Jandarma Özel harekat biriminin yönetiminden sorumlu olup, operasyonel stratejileri belirleyerek, ekibinin etkinliğini artırmak için liderlik yapar.",
        'req' => null,
        'close' => true
    ],
    [
        'title' => "Milli Istihbarat Teskilatı Personeli",
        'description' => "Çeşitli birimlerinde görev alarak, ulusal güvenliği sağlamak amacıyla istihbarat toplama, analiz yapma ve operasyonel faaliyetlerde bulunan uzmanlardan oluşur.",
        'req' => "İlk önce Sivil Polis Mesleğinde Deneyim Kazanmanız gerekiyor.",
        'vip' => 2
    ],
    [
        'title' => "Milli Istihbarat Teskilatı Müsteşarı",
        'description' => "Milli İstihbarat Teşkilatı'nın en üst düzey yöneticisi olup, teşkilatın stratejik hedeflerini belirler, operasyonlarını yönetir ve devletin güvenlik politikalarına yön vermekle sorumludur.",
        'req' => null,
        'vip' => 2
    ],
    [
        'title' => "Jandarma",
        'description' => "Şehir dışında, Halkın güvenliğini sağlamak, suçları önlemek ve toplumsal düzeni korumak amacıyla aktif olarak devriye gezen bir güvenlik görevlisidir.",
        'req' => "İlk önce Jandarma Trafik Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Jandarma Trafik",
        'description' => "Şehir dışında, Yolların güvenliğini sağlamak, trafik akışını düzenlemek ve sürücülerin kurallara uymasını denetlemekle sorumludur.",
        'req' => "İlk önce Polis Asayiş Memuru Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Jandarma Komutanı",
        'description' => "Jandarma ve Jandarma trafik personellerin faaliyetlerini yöneterek, suç önleme stratejilerini geliştirmek ve toplumsal güvenliği artırmak için çalışmalar yürütür.",
        'req' => "İlk önce Jandarma ve Polis Asayiş Amiri Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Belediye Başkanı Koruması",
        'description' => "MoonCity, Belediye başkanı korumakla görevlidir.",
        'req' => "İlk önce Jandarma Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Belediye Başkanı Şoförü",
        'description' => "MoonCity, Belediye başkanın şöförlüğünü yapmakla görevlidir.",
        'req' => "İlk önce Taksici Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
];
?>
<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1>Devlet Çalışanı</h1>
        <hr>
        <br>
        <div>
            <div>
                <h2 class="text-info" id="meslek">Meslekler</h2>
                <div class="accordion" id="accordionJobs">
                    <?php foreach ($jobs as $index => $job): ?>
                        <?php
                        $isEGM = ($job['title'] === 'Emniyet Genel Müdürü');
                        $isSivil = ($job['title'] === 'Milli Istihbarat Teskilatı Personeli' || $job['title'] === 'Milli Istihbarat Teskilatı Müsteşarı' || $job['title'] === 'Sivil Polis');
                        $isVip = (isset($job['vip']) && $job['vip'] == 1);
                        $isVipPlus = (isset($job['vip']) && $job['vip'] == 2);
                        ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>"
                                        aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                        aria-controls="collapse<?= $index ?>">
                                    <span class="<?= $isEGM ? 'text-primary-emphasis' : ($isSivil ? 'text-danger' : 'text-warning-emphasis') ?>"><?= htmlspecialchars($job['title']) ?></span>
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
                                    <?php if (!empty($job['req'])): ?>
                                        <h5 class="text-primary-emphasis">Nasıl bu mesleğe geçebilirim?</h5>
                                        <p><?= htmlspecialchars($job['req']) ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <hr>
            <br>

            <div>
                <h3 id="kiyafet">Evrim balığını (Maymun karakteri) kullanabilir miyim?</h3>
                <p>Hayır, hakim, savcı, belediye başkanı, belediye başkan yardımcısı, bekçi, polis, jandarma, PÖH,
                    JÖH gibi mesleklerde evrim balığını kullanmamalısınız. Eğer kullandıysanız, kıyafet dolabına
                    giderek normal hale dönmeniz gerekmektedir.</p>
            </div>

            <hr>
            <br>

            <div>
                <h3 id="bekci">Bekçi İken Ne Yapmalıyım?</h3>
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

            <hr>
            <br>

            <div>
                <div class="row">
                    <div class="col-md-8">
                        <h3 id="belediyeisci">Belediye İşçisiyim, Nasıl Görevimi Yerine Getirebilirim?</h3>
                        <p>5 dakikada bir ekranınıza tamir ikonu gelmektedir. Polis karakolundan araç çıkararak
                            tamir ikonunun olduğu yere gidip görevinizi yerine getirmeye başlayabilirsiniz.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_belediyeisci.png" class="img-fluid"
                             alt="Belediye İşçisi">
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <div>
                <h3 id="baskanaday" class="my-4">Belediye Başkanı Nasıl Olacağım?</h3>
                <p>İlk önce Belediye binasın girişindeki "YSK Sorumlusu" adaylığınızı ortaya koymanız gerekmektedir.
                    Daha sonra seçim süreci başlıcak seçim süreci bitince en çok oy alan aday Belediye başkanı
                    olacaktır.</p>
            </div>
            <div>
                <h3 id="baskanyardimcisi" class="my-4">Belediye Başkan Yardımcısı Seçebiliyor muyum?</h3>
                <p>Evet, belediye başkan yardımcısı seçebiliyorsunuz. Belediye binasın girişindeki "YSK Sorumlusu" ile
                    seçebilirsiniz.</p>
            </div>
            <div>
                <h3 id="dolap">Polis Sağlık Dolabı ve Teçhizat Dolabı Nedir?</h3><br>
                <p>
                    Polis Sağlık Dolabı, Polislerin ihtiyaçlarını karşılama konusundaki en etkili etkenlerden
                    biridir.
                    Polis Sağlık Dolabıyla etkileşime geçildiği zaman Sizi bulunduğunuz polis mesleğine göre can,
                    zırh
                    (Polis Özel Harekat/Jandarma Özel Harekat/MIT'seniz eğer ek olarak Ayakkabı, Kulaklık, Çelik
                    yelek, Kask) verir.
                </p>
                <ul>
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

            <hr>
            <br>

            <div>
                <h3 id="taser">Taser Hangi Durumlarda Kullanılmalıdır ve Kullanılmamalıdır?</h3>
                <p>Taser, bir polis memurunun şüphelileri ölümcül olmayan bir şekilde etkisiz hale getirmesine
                    yardımcı olan bir teçhizattır. Ancak, taser kullanımı belirli durumlarla sınırlıdır. Aşağıda,
                    taserin hangi durumlarda kullanılmaması gerektiği belirtilmiştir:</p>
                <h5>Kullanılmaması Gereken Durumlar</h5>
                <ul>
                    <li><strong>Elinde Silah Olan Bir Şüpheli:</strong> Eğer şüphelinin elinde bir silah varsa,
                        taser kullanmak tehlikeli olabilir.
                    </li>
                    <li><strong>Kelepçelenmiş Bir Şüpheli:</strong> Zaten kelepçelenmiş bir şüpheliye taser
                        kullanmak gereksizdir.
                    </li>
                    <li><strong>Kaçma veya Zarar Verme Olasılığı Olmayan Bir Şüpheli:</strong> Eğer şüpheli herhangi
                        bir şekilde kaçmaya veya zarar vermeye niyetli değilse, taser kullanmak uygun değildir.
                    </li>
                </ul>
                <p>Taser kullanımında dikkatli olunmalı ve sadece gerektiğinde başvurulmalıdır.</p>
            </div>

            <hr>
            <br>
            <div>
                <h3 id="gbt" class="my-4">GBT Tablet Nedir, Nasıl Kullanılır?</h3>
                <p>GBT Tablet, emniyet birimlerinin işini kolaylaştıran teknolojik bir cihazdır. 5 kategoriye
                    ayrılmaktadır.</p>


                <div class="list-group mb-4">
                    <div class="list-group-item">
                        <h5>1. GBT Menüsü</h5>
                        <p>Bu menüde oyuncular ve bilgileri yer almaktadır: arama izni, baskın izni, ceza puanı,
                            kişinin geçmişi, sahip olduğu araçlar ve ehliyet bilgileri burada bulunur.</p>
                    </div>
                    <div class="list-group-item">
                        <h5>2. Arananlar</h5>
                        <p>MoonCity'de arama kararı çıkanlar bu menüde gözükür.</p>
                    </div>
                    <div class="list-group-item">
                        <h5>3. Panik Butonu</h5>
                        <p>Acil desteğe mi ihtiyacınız var? Konumunuzu GPS aracılığıyla emniyet birimlerine
                            bildirin.</p>
                    </div>
                    <div class="list-group-item">
                        <h5>4. Suçlu Transfer İsteği</h5>
                        <p>Suçlunun başka birimlere mi teslim edilmesi gerekiyor? O zaman bu menü tam size göre.</p>
                    </div>
                    <div class="list-group-item">
                        <h5>5. Raporlar</h5>
                        <p>Burada baskın sonucu gelişen olayların raporu tutulmaktadır. Birçok oyuncu ne yazık ki
                            burayı kullanmamaktadır.</p>
                    </div>
                </div>

                <div class="text-center">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_gbt.png" class="img-fluid" alt="GBT Tablet Görseli">
                </div>
            </div>

            <hr>
            <br>
            <div>
                <h3 id="suclu">Bir Suçlu yakaladım nasıl role devam etmeliyim?</h3><br>
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

            <hr>
            <br>

            <div>
                <h3 id="asayis-sivil">Sivil Polis, Asayiş Memurundan Üstün Müdür?</h3><br>
                <p>Hayır, her iki ekip de Emniyet Genel Müdürlüğü’ne bağlıdır. Sivil polis amiri aynı zamanda asayiş
                    polis amiridir. Sivil polis ile asayiş memurunu ayıran tek şey görevleridir. İki taraf da
                    birbirine saygılı ve düzgün bir şekilde konuşmalı, birlikte çalışmalıdır.</p>
            </div>

            <hr>
            <br>

            <div>
                <h3 id="sivil-polis-mit">Sivil Polis ve MIT'in görevi nedir?</h3><br>
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
                <ul>
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

            <hr>
            <br>

            <div>
                <h3 id="baskansokagacikma">Başkan Olarak Sokağa Çıkma Yasağı Başlatmadan Ne Yapmalıyım?</h3>
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
                <ul>
                    <li>Fikir alışverişi yapın.</li>
                    <li>Görevlendirme yapın.</li>
                    <li>Duyurusunu planlayın ve yayınlayın.</li>
                    <li>Ek olarak, yasak esnasında güvenli bir yerde saklanmayı ihmal etmeyin.</li>
                </ul>
            </div>
        </div>
        <br>
</main>