<?php
$darkRPContent = true;
$tttContent = false;
?>
<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="standartcolor mb-4">Sıkça Sorulan Sorular</h1>
        <?php
        include("darkrp-ttt.sss.php");
        ?>
        <div>
            <br>
            <div>
                <h3 class="standartcolor" id="isimdegistirme"><b>İsmimi nasıl değiştireceğim?</b></h3>
                <p>Belediye binasın girişindeki doktor kıyafetli NPC ile isminizi değiştirebilirsiniz. </p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="dance"><b>Nasıl Dans Edebilirim?</b></h3>
                <p>Oyunda elinize anahtarı alınız ve <span class="key">R</span> tuşuna basınız ardından çıkan menüde dans seçiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="alte"><b>Koltuğa nasıl oturacağım?</b></h3>
                <div class="row">
                    <div class="col-md-8">
                        <ul>
                            <li>İlk önce FPS modunda iken koltuğun üstüne çıkın. Koltukla aynı seviyede olmalısınız
                                çapraz,yüksekte veya alçakta kalmanız durumunda olmaz.
                            </li>
                            <li>Üstüne çıktıktan sonra uygun pozisyonu arayınız</li>
                            <li>Pozisyonu bulduktan sonra <span class='key'>ALT</span> tuşu ile birlikte <span class='key'>E</span> basınız.</li>
                            <li>Kalmak isterseniz <span class='key'>E</span> tuşuna basınız.</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <img src="<?= $baseUrl ?>/assets/image/darkrp_koltuk_alte.gif"
                             class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="ehliyet"><b>Araç Ehliyeti Nereden Alabilirim?</b></h3>
                <p>Polis karakolunun içindeki "Ehliyet Sorumlusu" NPC doğru yanıtlar vererek ehliyet sahibi
                    olabilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="ruhsat"><b>Silah Ruhsatı Nereden Alabilirim?</b></h3>
                <p>Belediye Başkanından Cuzi fiyata kendine özel silah ruhsatı bastırabilirsin.</p>
            </div>
            <div>
                <h3 class="standartcolor" id="silah"><b>Silah Nereden Alabilirim?</b></h3>
                <p>Aşağıdaki mesleklerde olan kişilerden alabilirsin:</p>
                <ul style="list-style-type: '— '">
                    <?php foreach ($legalJobs as $index => $job): ?>
                        <?php if (isset($job["gunshop"]) && $job["gunshop"]): ?>
                            <li class="text-primary-emphasis"><?= htmlspecialchars($job['title']) ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php foreach ($esnafJobs as $index => $job): ?>
                        <?php if (isset($job["gunshop"]) && $job["gunshop"]): ?>
                            <li class="text-success"><?= htmlspecialchars($job['title']) ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php foreach ($illegalJobs as $index => $job): ?>
                        <?php if (isset($job["gunshop"]) && $job["gunshop"]): ?>
                            <li class="text-danger"><?= htmlspecialchars($job['title']) ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="bayilmak"><b>Oyunda bayıldım, sonrasında ilk yardım ekibi gelip beni
                        canlandırdı ve silahımı
                        atamıyorum, neden?</b></h3>
                <p>Oyunda bayıldıktan sonra ilk yardım ekibi gelip sizi hayata döndürdüğünde, silahınızı artık
                    droplayamazsınız.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="parti"><b>Parti belgesi nedir, parti ne işe yarar?</b></h3>
                <p>Parti oluşturmanızı sağlayan bir belgedir. Parti oluşturarak, aynı parti içerisinde bulunduğunuz
                    arkadaşlarınıza zarar vermenin önüne geçebilirsiniz. Daha da önemlisi, eğer yasa dışı bir
                    faaliyette
                    bulunuyorsanız, arkadaşlarınızla toplu eylem gerçekleştirirken parti oluşturmanız
                    gerekmektedir.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="arac"><b>Araç Nereden Satın Alabilirim?</b></h3>
                <p>Araç satın almak için galeriye gidip NPC'lerden satın alabilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="araccikarma"><b>Aracım NPC'de yok, aracımı nasıl çıkartacağım?</b></h3>
                <p>Araba satın aldığınızda, ilk olarak araç envanterinize eklenir. Envanterinizi açıp "Kullan"
                    dedikten
                    sonra NPC'den aracınızı çıkartabilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="yakit"><b>Aracımın yakıtı bitti, nasıl doldurabilirim?</b></h3>
                <p>Şehir çıkışındaki benzinliğe giderek NPC'den aracınıza uygun yakıtı almalısınız. Daha sonra
                    yakıtı
                    yere bırakıp aracınızın üzerine sürüklemelisiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="aractamir"><b>Aracım hasarlı, nasıl tamir edebilirim?</b></h3>
                <p>Mekanik ve ya Galeri gidip aracınızı tamir ettirebilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="yemek"><b>Susuzluğumu ve açlığımı nasıl gidereceğim?</b></h3>
                <p>Yemek NPC Giderek susuzluğunuzu ve açlığınızı giderebilirsiniz.</p>
                <p>NPC nerede bulucağınız bilmiyor iseniz <a href="<?= $baseUrl ?>/darkrp-baslarken#city">DarkRP
                        Başlarken -
                        Önemli Yerler</a> göz atınız.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="recete"><b>Nasıl canımı artırabilirim?</b></h3>
                <p>Reçeteli ve ya reçetesiz ilaç alarak canınızı artırabilirsiniz.</p>
                <p>Reçeteli ilaç almak için doktor mesleğinde kişilerden reçete almanız daha sonra ise hastanedeki NPC
                    gidip
                    ilaç almanız gerekmekte.</p>
                <p>Reçetesiz ilaç almak için hastanedeki NPC gidip ilaç almanız gerekmekte.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="bioorgan"><b>Nasıl 500 can olunur?</b></h3>
                <p>Öncelikle 3. seviye, ardından 5. seviye bio-organ kullanmanız gerekmektedir.</p>
                <p>Sonrasında reçeteli ya da reçetesiz ilaç içmeniz gerekir.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="zirh"><b>Nasıl 300 zırh olunur?</b></h3>
                <p>"Okunmuş Su" adlı eşyayı bulmanız gerekmektedir. Eşya envanterinizde bulunduğunda ve 1. kalite çelik
                    yelek kullandığınızda zırhınız 300 olacaktır.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="vip"><b>VIP ve VIP+ Meslekler Neler?</b></h3>
                <ul style="list-style-type: '— '">
                    <?php foreach ($legalJobs as $index => $job): ?>
                        <?php
                        $isVip = (isset($job['vip']) && $job['vip'] === 1);
                        $isVipPlus = (isset($job['vip']) && $job['vip'] === 2);
                        if ($isVip || $isVipPlus) {
                            ?>
                            <li class="text-primary-emphasis"><?= htmlspecialchars($job['title']) ?>
                            <?php if ($isVip) {
                                ?>
                                <span style="color: #16bb00">[VIP]</span>
                                <span style="color: #19d100">[VIP+]</span>
                            <?php } ?>
                            <?php if ($isVipPlus) {
                                ?>
                                <span style="color: #16bb00">[VIP+]</span>
                                </li>
                            <?php }
                        } ?>
                    <?php endforeach; ?>
                    <?php foreach ($esnafJobs as $index => $job): ?>
                        <?php
                        $isVip = (isset($job['vip']) && $job['vip'] === 1);
                        $isVipPlus = (isset($job['vip']) && $job['vip'] === 2);
                        if ($isVip || $isVipPlus) {
                            ?>
                            <li class="text-success"><?= htmlspecialchars($job['title']) ?>
                            <?php if ($isVip) {
                                ?>
                                <span style="color: #16bb00">[VIP]</span>
                                <span style="color: #19d100">[VIP+]</span>
                            <?php } ?>
                            <?php if ($isVipPlus) {
                                ?>
                                <span style="color: #16bb00">[VIP+]</span>
                                </li>
                            <?php }
                        } ?>
                    <?php endforeach; ?>
                    <?php foreach ($illegalJobs as $index => $job): ?>
                        <?php
                        $isVip = (isset($job['vip']) && $job['vip'] === 1);
                        $isVipPlus = (isset($job['vip']) && $job['vip'] === 2);
                        if ($isVip || $isVipPlus) {
                            ?>
                            <li class="text-danger"><?= htmlspecialchars($job['title']) ?>
                            <?php if ($isVip) {
                                ?>
                                <span style="color: #16bb00">[VIP]</span>
                                <span style="color: #19d100">[VIP+]</span>
                            <?php } ?>
                            <?php if ($isVipPlus) {
                                ?>
                                <span style="color: #16bb00">[VIP+]</span>
                                </li>
                            <?php }
                        } ?>
                    <?php endforeach; ?>
                </ul>
                <p>Diğer VIP ve VIP+ Ayrıcalıklarını MoonGaming - Market Sayfasından bakabilirsiniz.</p>
                <div class="content-ref-box">
                    <p>
                        <a id="mgmarketBox" href="https://moonrp.com/market" target="_blank">
                            <i class="fa-solid fa-shop"></i> MoonGaming - Market
                        </a>
                    </p>
                </div>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="kutu"><b>Envanterimdeki kutuyu nasıl açabilirim?</b></h3>
                <p>MoonShop'a gidip anahtar almalısınız. Ardından kutuyu anahtara sürükleyip "... ile birlikte aç" seçeneğine tıklamalısınız.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="piyango"><b>Piyango bileti Nasıl Alırım?</b></h3>
                <p>Gazino içindeki NPC satın alabilir ve ya Piyangocu mesleğinde kişilerden satın alabilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="doviz"><b>Döviz Nasıl Alırım?</b></h3>
                <p>Bankanın içindeki, doktor kıyafetli NPC'den döviz satın alabilirsiniz.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="vergilev"><b>Vergi Levhası nasıl çıkartırım?</b></h3>
                <p>konsolu açınız ve konsola aşağıdaki komutu yazınız ardından eşya önünüze gelicektir.</p>
                <code>gm_spawn models/props/diversion.mdl</code>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="guncolor"><b>Physhic Gun/Fizik Gun Rengini Nasıl Değiştirebilirim?</b>
                </h3>
                <ol>
                    <li>Garry's Mod'u açın ve "Sandbox" oyun modunu seçip "Yeni Bir Oyun Başlat" (Tek oyunculu)
                        seçeneğine
                        tıklayın.
                    </li>
                    <li>Bir harita seçin ve oyunu başlatın.</li>
                    <li>Oyuna girdikten sonra, <span class="key">C</span> tuşuna basarak "Oyuncu Modeli" menüsünü açın.</li>
                    <li>Açılan menüde "Renkler" kısmına gelin ve silah renginizi seçin.</li>
                    <li>Konsolu açın ve <code>kill</code> komutunu yazın. Ardından, seçtiğiniz renk aktif olacaktır.
                    </li>
                </ol>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="dancebind"><b>Dans Menüsünü Anahtar Olmadan Nasıl Açarım?</b></h3>
                <p>konsolu açınız ve konsola aşağıdaki komutu yazınız böylelikle <span class="key">0</span> bastığında Dans Menüsü açılacaktır.</p>
                <code>bind "0" "_DarkRP_AnimationMenu"</code>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="kopyalayici"><b>Kopyalayıcı ile kaydettiğim build arkadaşımla nasıl
                        paylaşırım?</b></h3>
                <div class="alert alert-info"><span>Arkadaşınızda aynı konuma yerleştirmelidir ve oyunu kapalı olmalı.</span> <span class="text-danger">Eğer çalışmaz ise türkçe karakter var
                    ise dosya adında onları siliniz ve dosyanın içindeki kullanıcı ad ve steamid kendi
                    bilgilerinizle değiştirilmeli.</span></div>
            </div>
                <ol>
                    <li>İlk önce Steam kütüphanesine geliniz.</li>
                    <li>Garry's Mod bulup sağ tıklayınız</li>
                    <li>Özellikler...</li>
                    <li>Yüklü Dosyalar sekmesine gidin</li>
                    <li>"Göz at..." tıklayın.</li>
                    <li>"garrysmod" klasörüne gidiniz.</li>
                    <li>"data" klasörüne gidiniz.</li>
                    <li>"kb_duplicator" klasörüne gidiniz.</li>
                    <li>Build dosyanızı arkadaşınıza gönderin.</li>
                </ol>
        </div>
        <br>
        <?php
        include("darkrp-ttt.sss1.php");
        ?>
        <hr>
        <br>
        <blockquote>
            Sıkça Sorulan Sorular başlangıç rehberimiz burada sonlanıyor. Daha fazlası için diğer rehberlerimize
            de göz atmayı unutmayın.
        </blockquote>
        <div class="content-ref-box">
            <p>
                <a id="kariyerBox" href="<?= $baseUrl ?>/darkrp-kariyer">
                    <i class="fa-solid fa-user-graduate"></i> DarkRP Kariyer
                </a>
            </p>
        </div>
    </div>
    <br>
</main>