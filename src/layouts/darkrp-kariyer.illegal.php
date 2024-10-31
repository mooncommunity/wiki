<?php
$bitkiCount = 0;
$dolarCount = 0;
$ithalCount = 0;
foreach ($darkrpPaidJobs as $paidjob) {
    if (!empty($paidjob["bitki"])) {
        $bitkiCount++;
    }
    if (!empty($paidjob["dolar"])) {
        $dolarCount++;
    }
}
$paidjob_dolarbitki_difference = abs($bitkiCount - $dolarCount);

foreach ($darkrpPaidJobs as $paidjob) {
    $ithalCount = 0;
    if (!empty($paidjob["ithal"])) {
        $ithalCount++;
    }
}
?>
<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="mb-4">Yasadışı Organizasyonlar</h1>
        <hr>
        <br>
        <div>
            <h2 class="text-danger" id="meslek">Meslekler</h2>
            <div class="accordion" id="accordionJobs">
                <?php foreach ($illegalJobs as $index => $job): ?>
                    <?php $isBaronOrSefir = ($job['title'] === 'Baron' || $job['title'] === 'Sefir');
                    $isVip = (isset($job['vip']) && $job['vip'] === 1);
                    $isVipPlus = (isset($job['vip']) && $job['vip'] === 2); ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>"
                                    aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                    aria-controls="collapse<?= $index ?>">
                                <span class="<?= $isBaronOrSefir ? 'text-danger' : 'text-warning-emphasis' ?>"><?= htmlspecialchars($job['title']) ?> </span>
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

        <div>
            <h3 id="kekoyapabilcekleri">Keko Mesleğinde...</h3>
            <br>
            <ul>
                <li>2 Kişi ile 30 dakikada bir adam soyabilirsiniz.</li>
                <li>Benzinlik ve banka gibi yerlerde soygun yapamazsınız.</li>
                <li>Baskın gerçekleştiremezsiniz.</li>
                <li>Sadece Para Basma Makinesi çıkarma yetkiniz vardır.</li>
                <li>3. seviyeye ulaştığınızda Çete Üyesi mesleğine erişim sağlayabilirsiniz.</li>
            </ul>
        </div>

        <hr>
        <br>

        <div>
            <h3 id="carjack">Nasıl Araba Çalabilirim?</h3>
            <p>Araba çalmak için, 2. seviye çete üyesi olmalısınız arabaya bakarak <code>/soygun</code> komutu
                ile araç çalabilirsiniz.
                Ayrıca, 1 saatte bir araç çalabilirsiniz. (Bu kural aynı veya farklı araba için farketmez.)</p>
        </div>
        <hr>
        <br>

        <div>
            <div class="row">
                <h3 id="bankasoygun">Banka Soygunu Nasıl Yapılır?</h3>
                <div class="col-md-8">
                    <p>Bankanın kasa tarafına geçerek para kısmına gidebilir ve "E" tuşuna basarak banka soygunu
                        gerçekleştirebilirsiniz. En az üç kişinin bulunduğu bir grup oluşturmalısınız; tüm
                        soyguncuların aynı parti içinde yer alması ve en az 4. seviye çete üyesi veya üstü
                        mesleklere sahip olmaları gerekmektedir.</p>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_banka_para.png" class="img-fluid"
                         alt="Para">
                </div>
                <div class="col-md-4 mobile-content">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_banka_para.png" class="img-fluid"
                         alt="Para">
                </div>
            </div>


        </div>
        <hr>
        <br>

        <div>
            <div class="row">
                <h3 id="dolar">Kirli Dolar Üretimi</h3>
                <div class="col-md-8">
                    <p>Kirli Dolar için gerekli mesleklere erişiminiz olmalıdır. Kirli Dolar için Keko ve Rus
                        Mafya Üyesi gibi mesleklerde olmalısınız. Her meslekte Kirli Dolar üretilmemektedir.</p>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_printer.png" class="img-fluid"
                         alt="Kirli Dolar Üretimi">
                </div>
                <div class="col-md-4 mobile-content">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_printer.png" class="img-fluid"
                         alt="Kirli Dolar Üretimi">
                </div>
            </div>
        </div>

        <hr>
        <br>

        <div>
            <div class="row">
                <h3 id="printer">Para Basma Makinesi Nedir? Nasıl Çalışır?</h3>
                <div class="col-md-4 d-none d-md-block">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_printer.png" class="img-fluid"
                         alt="Kirli Dolar Üretimi">
                    <hr>
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_printer_tamir.png" class="img-fluid"
                         alt="Tamir Paketi">
                </div>

                <div class="col-md-8">
                    <p>
                        Printer, temelinde kirli dolar ürettiğimiz bir makinedir. Bu makineyi Keko'dan itibaren
                        birçok
                        illegal meslek çıkarabilir.
                        Makineyi çıkarmak çok basittir; F4 menüsünden "Varlıklar" bölümüne giderek, ardından
                        "Para Basma
                        Makinesi" eşyalarına ulaşabilirsiniz.
                        Bu menünün altında, maksimum ne kadar makine çıkarabildiğiniz görünmektedir. Bastığınız
                        para
                        miktarı ve çıkarabildiğiniz makine sayısı,
                        bulunduğunuz meslekteki seviyeye ve diğer üst mesleklerdeki seviyeye göre değişiklik
                        gösterebilir. Keko mesleğindeki oyuncu ile
                        İtalyan mafyası mesleğindeki oyuncunun bastığı para bir değildir.
                    </p>
                    <p>Ayrıca mühendis çağırarak saksınızın daha performanslı çalışmasını sağlayabilirsiniz.</p>
                    <h5>Para Basma Makinenizin Bakımı İçin Kullanmanız Gereken Eşyalar:</h5>
                    <p class="text-danger">Bar dolu olduğu takdirde Para Basma Makinesine sürüklemeniz durumunda
                        işe
                        yaramıcaktır.</p>
                    <ul>
                        <li><strong>Tamir Paketi:</strong> Yatay eksende kırmızı olarak gözüken büyük bar,
                            makinenizin
                            can barıdır. Tamir kiti ile canını yenileyebilirsiniz.
                        </li>
                        <li><strong>Mürekkep:</strong> Dikey eksende sol tarafta yer alan mürekkep barı,
                            makinenizin
                            mürekkep yenilemenizi sağlar
                        </li>
                        <li><strong>Kağıt:</strong> Dikey eksende sağ tarafta yer alan kağıt barı, makinenizin
                            kağıdını
                            yenilemenizi sağlar.
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mobile-content">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_printer.png" class="img-fluid"
                         alt="Kirli Dolar Üretimi">
                    <hr>
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_printer_tamir.png" class="img-fluid"
                         alt="Tamir Paketi">
                </div>
            </div>
        </div>
        <hr>
        <br>
        <div>
            <div class="row">
                <h3 id="bitki">Bitki Üretimi</h3>
                <div class="col-md-8">
                    <p>Bitki üretebilmek için gerekli mesleklere erişiminiz olmalıdır. Bitki üretimi
                        için Keko ve Çete Üyesi mesleklerinde gerekli seviyeleri tamamladıktan sonra Mafya Üyesi
                        mesleğine erişim sağlarsınız. Mafya Üyesi olarak, bitki yetiştirmek için saksı çıkarma
                        yetkiniz olacaktır. Her meslekte Bitki üretilmemektedir.</p>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_saksi.png" class="img-fluid" alt="Bitki Üretimi">
                </div>
                <div class="col-md-4 mobile-content">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_saksi.png" class="img-fluid" alt="Bitki Üretimi">
                </div>
            </div>
        </div>

        <hr>
        <br>

        <div>
            <div class="row">
                <h3 id="bitkiupgrade">Bitkimi Nasıl Yükseltebilirim?</h3>
                <div class="col-md-4 d-none d-md-block">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_yukseltme_2.png" class="img-fluid"
                         alt="Bitki Yükseltme">
                </div>
                <div class="col-md-8">
                    <p>Bitkinizin kalitesini artırmak için aşağıdaki mesleklerden birinde olmanız
                        gerekmektedir:</p>
                    <p>Bu meslekler F4 menüsünden "Varlıklar" bölümüne giderek, ardından "Bitki Paketleme"
                        adlı aracı çıkarak gerçekleştirmektedir.</p>
                    <ul>
                        <li>Çingene Çetesi Üyesi</li>
                        <li>Kore Mafyası Üyesi</li>
                        <li>Haydut Çetesi Üyesi</li>
                        <li>Güney Kartel Üyesi</li>
                        <li>Kuzey Kartel Üyesi</li>
                    </ul>
                    <p>Ayrıca, bu meslekler dışında bilim adamı da bu mesleklerin yükselttiği Bitkiyi bir
                        üst seviyeye taşıyabilmektedir.</p>
                </div>
                <div class="col-md-4 mobile-content">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_yukseltme_2.png" class="img-fluid"
                         alt="Bitki Yükseltme">
                </div>

            </div>
        </div>

        <hr>
        <br>

        <div>
            <div class="row">
                <h3 id="saksi">Saksı Nedir? Nasıl Çalışır?</h3>
                <div class="col-md-8">
                    <p>
                        Saksı, Bitki üretebildiğiniz bir araçtır. Bitki üretmeye, Mafya Üyesi
                        olduğunuzda başlayabilirsiniz. Mafya Üyesi olmak için en az Çete Üyesi 5. seviye
                        olmalısınız. Mafya Üyesi olduğunuzda, yine F4 menüsünden çıkardığınız saksılar ile
                        Bitki üretebilirsiniz. Ancak saksının 3 gereksinimi vardır: toprak, bitki tohumu ve
                        su. Bitki tohumu ve suyu, oyundaki belirli NPC'lerden (Niştantaşı AVM, Çiftlik Taksi
                        vb.) temin edebilirsiniz. Bu ürünleri temin ettikten sonra, saksıya bakarak 2 kere E
                        tuşuna basmanız yeterlidir (ilk başta toprak ekilecek, daha sonra bitki tohumu).
                    </p>
                    <p>
                        Sulama işi ilk başta biraz karışık görünebilir, ancak bazı püf noktaları vardır. Aslında
                        bitkiyi 2 kere sulamak yeterlidir. Birincisi, ilk ektiğiniz zaman su barını tamamlamak;
                        ikincisi, bu bar yarıya geldiğinde tekrar doldurmaktır. Sürekli sulamak gereksiz ve
                        yorucu olacaktır, bu yüzden buna dikkat etmelisiniz. Saksıda "MoonGaming™" yazısını
                        gördüğünüzde, tebrikler! Saksınız hasat edilmeye hazır.
                    </p>
                    <p>Ayrıca mühendis çağırarak saksınızın daha performanslı çalışmasını sağlayabilirsiniz.</p>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_saksi1.png" class="img-fluid"
                         alt="Saksı Nedir Nasıl Çalışır?">
                    <hr>
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_saksi.png" class="img-fluid"
                         alt="Saksı Nedir Nasıl Çalışır?">
                </div>
                <div class="col-md-4 mobile-content">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_saksi1.png" class="img-fluid"
                         alt="Saksı Nedir Nasıl Çalışır?">
                    <hr>
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_saksi.png" class="img-fluid"
                         alt="Saksı Nedir Nasıl Çalışır?">
                </div>
            </div>
        </div>

        <hr>
        <br>

        <div>
            <h3 id="temizleme" class="mb-4">Kirli Dolar Temizleme ve Bitki Satmanin Yolları Nelerdir?</h3>
            <div class="alert alert-info" role="alert">
                Meslek perm sahiplerinin kimler olduğunu öğrenmek için Discord sunucumuzda <strong>Meslek
                    Sahipleri</strong> kanalına göz atabilirsiniz.
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kirli Dolar Temizleme Yöntemleri</h5>
                            <p class="card-text">
                                Kirli Dolar Temizlemenın iki yolu bulunmaktadır: birincisi, NPC'ye komisyonlu
                                olarak
                                temizletmek, diğeri ise uygun meslek permine sahip kişileri bularak onlara daha
                                düşük komisyonla temizletmektir.
                            </p>
                            <h6 style="color: green;" class="mt-3">Meslekler</h6>
                            <ul>
                                <?php
                                foreach ($darkrpPaidJobs as $paidjobName => $paidjobData) {
                                    if (!empty($paidjobData["dolar"])) {
                                        ?>
                                        <li><?= $paidjobName ?></li>
                                        <?php
                                    }
                                }
                                if ($dolarCount < $bitkiCount) {
                                    for ($i = 0; $i < $paidjob_dolarbitki_difference; $i++) {
                                        ?>
                                        <li style="visibility: hidden;">&nbsp;</li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>

                            <h6 class="text-primary-emphasis">Örnek Satış Diyalogu</h6>
                            <p>+ Dolarlarım çamura düştü temizleyebilcek var mı?</p>
                            <p>- Dert etmeyin, Dolarlarınızı temizlemek ve eski haline döndürmek için yardımcı
                                olabiliriz.</p>
                            <p style="color: mediumpurple" class="mt-3">Temizleyebileceğiniz NPC</p>
                            <div class="card mb-4">
                                <img src="<?= $baseUrl ?>/assets/image/darkrp_npc_para.png" class="card-img-top"
                                     alt="Plaza Önündeki NPC">
                                <div class="card-body">
                                    <p class="card-text">Polis Karakolunun karşısındaki plaza havuzun önünde
                                        görebilirsiniz.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bitki Satma Yöntemleri</h5>
                            <p class="card-text">
                                Bitki Satmanın iki yolu bulunmaktadır: birincisi, NPC'ye komisyonlu satmak,
                                diğeri ise uygun meslek permine sahip kişileri bularak onlara daha
                                düşük komisyonla satmaktır.

                            </p>
                            <h6 style="color: green;" class="mt-3">Meslekler</h6>
                            <ul>
                                <?php
                                foreach ($darkrpPaidJobs as $paidjobName => $paidjobData) {
                                    if (!empty($paidjobData["bitki"])) {
                                        ?>
                                        <li><?= $paidjobName ?></li>
                                        <?php
                                    }
                                }
                                if ($bitkiCount < $dolarCount) {
                                    for ($i = 0; $i < $paidjob_dolarbitki_difference; $i++) {
                                        ?>
                                        <li style="visibility: hidden;">&nbsp;</li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>


                            <h6 class="text-primary-emphasis">Örnek Satış Diyalogu</h6>
                            <p>+ Papatya tohumu ve bitki satın alıcak var mı?</p>
                            <p>- Tabii, Ercan Botanikçilik Olarak Bitkinizi Satın Alabiliriz.</p>
                            <p style="color: mediumpurple" class="mt-3">Satabilceğiniz NPC</p>
                            <div class="card mb-4">
                                <img src="<?= $baseUrl ?>/assets/image/darkrp_npc_bitki.png" class="card-img-top"
                                     alt="Market Arkası NPC">
                                <div class="card-body">
                                    <p class="card-text">Hamburger Restorantının karşısında görebilirsiniz.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <br>
        <div>
            <h3 id="ithalesya" class="mb-4">Korsan ve Eşkiyada ürettiğim İthal eşyaları kime satabilirim?</h3>
            <div class="alert alert-info" role="alert">
                Meslek perm sahiplerinin kimler olduğunu öğrenmek için Discord sunucumuzda <strong>Meslek
                    Sahipleri</strong> kanalına göz atabilirsiniz.
            </div>
            <ul>
                <?php
                foreach ($darkrpPaidJobs as $paidjobName => $paidjobData) {
                    if (!empty($paidjobData["ithal"])) {
                        ?>
                        <li><?= $paidjobName ?></li>
                        <?php
                    }
                }
                ?>
            </ul>
            <p>Mesleklerine sahip kişilere satabilirsiniz.</p>
        </div>

        <hr>
        <br>

        <div>
            <h3 id="factiongereksinim">Faction Mesleklerine Nasıl Geçebilirim?</h3>
            <p>Faction mesleklerine erişim sağlamak için öncelikle Keko mesleğine başlayıp 3. seviyeye
                ulaşmanız gerekmektedir. Ardından, şu mesleklere geçiş yapabilirsiniz:</p>
            <ul>
                <li>Çete Üyesi (5. Seviye)</li>
                <li>Mafya Üyesi (5. Seviye)</li>
                <li>Eşkiya (5. Seviye)</li>
                <li>Korsan (5. Seviye)</li>
            </ul>
            <p>Bu mesleklerde gerekli seviyelere ulaştıktan sonra aşağıdaki 4 adet faction mesleğine erişim
                sağlayabilirsiniz:</p>
            <ul>
                <li>Rus Mafya Üyesi</li>
                <li>İtalyan Mafya Üyesi</li>
                <li>Triads Mafya Üyesi</li>
                <li>Aşiret Üyesi</li>
            </ul>
        </div>
        <hr>

        <div>
            <h3 id="aile">Familya/Aile Nedir? Neden Bir Familya/Aileye Katılmalıyım?</h3>
            <p>Aile, birkaç oyuncunun bir araya gelerek oluşturduğu topluluktur. Bir aileye katılmanın bazı avantajları
                şunlardır:</p>
            <ul style="list-style-type: '+ '">
                <li><strong class="text-primary-emphasis">Oyunun mekaniklerini daha hızlı kavrama:</strong> Ailendeki
                    diğer üyeler oyuna daha hakimse, bu durumdan sen de faydalanarak oyunu daha hızlı öğrenebilirsin.
                </li>
                <li><strong class="text-success-emphasis">Daha hızlı gelişim:</strong> Genellikle aile üyeleri, üretim
                    araçlarını birbirlerine vererek hızlı bir şekilde gelişmeyi destekler.
                </li>
                <li><strong class="text-warning">Yeni bir sosyal ortam:</strong> Aileye katılarak diğer üyelerle sohbet
                    edebilir ve yeni bir sosyal çevre edinebilirsin.
                </li>
            </ul>
            <p>Bunlar sadece birkaç avantaj. Eğer bu seni cezbediyorsa, Discord'daki familya odasından familya
                liderleriyle
                iletişime geçebilirsin.
            </p>
        </div>
        <div class="content-ref-box">
            <p>
                <a id="familyaBox" href="<?= $baseUrl; ?>/darkrp-baslarken/sss#family" target="_blank">
                    <i class="fas fa-question"></i> Sıkça Sorulan Sorular - Aile Nasıl Kurarım?
                </a>
            </p>
        </div>
<br>
    </div>
</main>
