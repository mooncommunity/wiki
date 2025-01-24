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
            <h2 class="standartcolor" id="tus">Kısayollar</h2>
            <br>
            <ul class="nav nav-tabs" id="chatTabs" role="tablist">
                <?php
                $tabId = 0;

                foreach ($darkrpKeyboard as $category => $details) {
                    $class = $details['class'];
                    $fonticon = $details['iclass'];
                    $activeClass = $tabId === 0 ? 'active' : '';
                    ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $class ?> <?= $activeClass ?>" id="<?= 'keyboard-' . $tabId ?>-tab"
                           data-bs-toggle="tab" href="#<?= 'keyboard-' . $tabId ?>" role="tab"><i
                                    class="<?= $fonticon ?>"></i> <?= $category ?></a>
                    </li>
                    <?php
                    $tabId++;
                }
                ?>
            </ul>

            <div class="tab-content" id="chatTabsContent">
                <?php
                $tabId = 0;

                foreach ($darkrpKeyboard as $category => $details) {
                    $activeClass = $tabId === 0 ? 'show active' : '';
                    ?>
                    <div class="tab-pane fade <?= $activeClass ?>" id="<?= 'keyboard-' . $tabId ?>" role="tabpanel">
                        <br>
                        <ul id="tusUL" style="list-style-type: '- '">
                            <?php
                            foreach ($details['keyboard'] as $shortcut) {
                                ?>
                                <li>
                                    <strong>
                                        <?php foreach ($shortcut['key'] as $key): ?>
                                            <kbd><?php echo $key; ?></kbd>
                                            <?php if (next($shortcut['key'])) echo ' + '; ?>
                                        <?php endforeach; ?>
                                    </strong>
                                    <span><?php echo $shortcut['description']; ?></span>
                                </li>
                                <hr>
                                <?php
                            }
                            ?>
                        </ul>
                        <br>
                    </div>
                    <?php
                    $tabId++;
                }
                ?>
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="chat">Sohbet ve İletişim</h2>
            <br>
            <ul class="nav nav-tabs" id="chatTabs" role="tablist">
                <?php
                $tabId = 0;

                foreach ($darkrpCommand as $category => $details) {
                    $class = $details['class'];
                    $fonticon = $details['iclass'];
                    $activeClass = $tabId === 0 ? 'active' : '';
                    ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $class ?> <?= $activeClass ?>" id="<?= 'command-' . $tabId ?>-tab"
                           data-bs-toggle="tab" href="#<?= 'command-' . $tabId ?>" role="tab"><i
                                    class="<?= $fonticon ?>"></i> <?= $category ?></a>
                    </li>
                    <?php
                    $tabId++;
                }
                ?>
            </ul>

            <div class="tab-content" id="chatTabsContent">
                <?php
                $tabId = 0;

                foreach ($darkrpCommand as $category => $details) {
                    $activeClass = $tabId === 0 ? 'show active' : '';
                    ?>
                    <div class="tab-pane fade <?= $activeClass ?>" id="<?= 'command-' . $tabId ?>" role="tabpanel">
                        <?php
                        if (isset($details['alert'])) {
                            $alertClass = $details['alert']['class'];
                            $alertText = $details['alert']['text'];
                            ?>
                            <br>
                            <div class="alert <?= $alertClass ?>" role="alert"><?= $alertText ?></div>
                            <?php
                        }
                        ?>
                        <br>
                        <ul style="list-style-type: '— '">
                            <?php
                            foreach ($details['commands'] as $command) {
                                $commandNames = implode(' veya ', $command['name']);
                                $params = implode(' ', array_map(fn($p) => $p !== null ? "&lt;{$p}&gt;" : '', $command['params']));
                                $description = $command['description'];
                                $example = $command['example'];
                                ?>
                                <li>
                                    <strong><?= $commandNames ?></strong> <i
                                            class="text-warning-emphasis"> <?= $params ?></i> :
                                    <span> <?= $description ?></span><br>
                                    <em class="text-success-emphasis">Örnek:</em><br>
                                    <code><?= $example ?></code>
                                </li>
                                <hr>
                                <?php
                            }
                            ?>
                        </ul>
                        <br>
                    </div>
                    <?php
                    $tabId++;
                }
                ?>
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="meslek">Meslek Nasıl Seçebilirim?</h2>
            <p><kbd>F4</kbd> tuşuna bastığınızda meslek seçiminizi gerçekleştirebilirsin.</p>

            <div class="container">
                <?php foreach ($darkrpJobs as $categoryName => $categoryData): ?>
                    <?php
                    $buttonClass = match ($categoryName) {
                        'legal' => 'darkrplegal',
                        'esnaf' => 'darkrpesnaf',
                        'illegal' => 'darkrpillegal',
                        'yetkili' => 'darkrpgenel',
                        default => '',
                    };
                    ?>
                    <button type="button" class="btn active <?= $buttonClass ?> text-center" style="margin-right: 1rem; margin-bottom: 1rem;"
                            data-bs-toggle="modal" data-bs-target="#<?= htmlspecialchars($categoryName) ?>JobsModal">
                        <?= ucfirst($categoryData['name']) ?>
                    </button>
                <?php endforeach; ?>

                <?php foreach ($darkrpJobs as $categoryName => $categoryData): ?>
                    <div class="modal fade" id="<?= htmlspecialchars($categoryName) ?>JobsModal" tabindex="-1"
                         aria-labelledby="<?= htmlspecialchars($categoryName) ?>JobsLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-purple"
                                        id="<?= htmlspecialchars($categoryName) ?>JobsLabel">
                                        <?= ucfirst($categoryData['name']) ?>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="accordion" id="<?= htmlspecialchars($categoryName) ?>accordionJobs">
                                        <?php foreach ($categoryData['jobs'] as $index => $job): ?>
                                            <?php
                                            $isEGM = ($job['title'] === 'Emniyet Genel Müdürü');
                                            $isSivil = in_array($job['title'], [
                                                'Milli Istihbarat Teskilatı Personeli',
                                                'Milli Istihbarat Teskilatı Müsteşarı',
                                                'Sivil Polis'
                                            ]);
                                            $isBaronOrSefir = ($job['title'] === 'Baron' || $job['title'] === 'Sefir');

                                            $JobClass = '';
                                            $JobColor = '';

                                            if ($categoryName === "legal") {
                                                $JobClass = $isEGM ? 'text-primary' : ($isSivil ? 'text-danger' : 'text-primary-emphasis');
                                            } elseif ($categoryName === "esnaf") {
                                                $JobColor = "var(--darkrp-job-green-border)";
                                            } elseif ($categoryName === "yetkili") {
                                                $JobClass = 'text-secondary';
                                            } elseif ($categoryName === "illegal") {
                                                $JobClass = $isBaronOrSefir ? 'text-danger' : 'text-danger-emphasis';
                                            }

                                            $isVip = (isset($job['vip']) && $job['vip'] === 1);
                                            $isVipPlus = (isset($job['vip']) && $job['vip'] === 2);
                                            ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse<?= htmlspecialchars($categoryName . $index) ?>"
                                                            aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                                            aria-controls="collapse<?= htmlspecialchars($categoryName . $index) ?>">
                                            <span class="<?= htmlspecialchars($JobClass) ?>"
                                                  style="<?= $JobColor ? 'color:' . htmlspecialchars($JobColor) : '' ?>">
                                                <?= htmlspecialchars($job['title']) ?>
                                            </span>
                                                        <?php if ($isVip): ?>
                                                            <span style="padding-left: 1%; color: #16bb00">[VIP]</span>
                                                        <?php endif; ?>
                                                        <?php if ($isVipPlus): ?>
                                                            <span style="padding-left: 1%; color: #16bb00">[VIP+]</span>
                                                        <?php endif; ?>
                                                    </button>
                                                </h2>
                                                <div id="collapse<?= htmlspecialchars($categoryName . $index) ?>"
                                                     class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                                                     aria-labelledby="heading<?= htmlspecialchars($index) ?>"
                                                     data-bs-parent="#<?= htmlspecialchars($categoryName) ?>accordionJobs">
                                                    <div class="accordion-body">
                                                        <?php if (!empty($job["close"])): ?>
                                                            <div class="alert alert-danger" role="alert">
                                                                Bu meslek şu anda kullanılmamaktadır. Yani bu mesleğe
                                                                geçemezsiniz.
                                                            </div>
                                                        <?php endif; ?>
                                                        <p><?= htmlspecialchars($job['description']) ?></p>
                                                        <?php if (!empty($job['requirejobs']) || !empty($job['requireORjobs'])): ?>
                                                            <h5 class="text-primary-emphasis">Nasıl bu mesleğe
                                                                geçebilirim?</h5>
                                                            <?php if (!empty($job['requirejobs'])): ?>
                                                                <p>
                                                                    İlk
                                                                    önce <?= implode(', ', array_map(fn($job) => '<b>' . htmlspecialchars($job) . '</b>', $job['requirejobs'])) ?>
                                                                    mesleğinde deneyim kazanman gerekiyor.
                                                                </p>
                                                            <?php endif; ?>
                                                            <?php if (!empty($job['requireORjobs'])): ?>
                                                                <p>
                                                                    İlk
                                                                    önce <?= implode(' veya ', array_map(fn($job) => '<b>' . htmlspecialchars($job) . '</b>', $job['requireORjobs'])) ?>
                                                                    mesleğinde deneyim kazanman gerekiyor.
                                                                </p>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <?php if (!empty($job['whitelist'])): ?>
                                                            <small class="text-light">
                                                                Bu meslek whitelistlidir. Daha fazla bilgi için <a
                                                                        href="<?= htmlspecialchars($baseUrl) ?>/darkrp-baslarken/sss#basvuru"
                                                                        style="text-decoration: none">Sıkça Sorulan
                                                                    Sorular - Başvurular</a> bakınız.
                                                            </small>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
            <h2 class="standartcolor" id="silah"><b>Silah Nereden Alabilirim?</b></h2>
            <p>Aşağıdaki mesleklerde olan kişilerden alabilirsin:</p>
            <p>Kırmızı renkli meslekler, Sadece ithal silah üretip satabiliyorlar. Silah ruhsatı kapsamında değillerdir.
                Silah ruhsatı kapsamındaki silahlar, yeşil renkli mesleklerde bulunur. <a class="no-text-decoration"
                                                                                          href="https://moonrp.com/oyunkurallari"
                                                                                          target="_blank">Daha fazla
                    bilgi için oyun kurallarına göz atınız.</a></p>
            <ul style="list-style-type: '— '">
                <?php foreach ($darkrpJobs as $category => $data): ?>
                    <?php foreach ($data['jobs'] as $job): ?>
                        <?php if (isset($job["gunshop"]) && $job["gunshop"]): ?>
                            <li class="<?= $category === 'legal' ? 'text-primary-emphasis' : ($category === 'esnaf' ? 'text-success' : 'text-danger') ?>">
                                <?= htmlspecialchars($job['title']) ?>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="build">Nasıl Build Yapabilirim?</h2>
            <br>
            <p><kbd>Q</kbd> Tuşuna basarak eşyalara göz atabilirsiniz. Her eşyayı çıkartamayabilirsiniz
                bazı eşyalar
                sunucumuzda kara listeye alınır.</p>
            <p>Göz at kısmından bizim addonlarımıza ait eşyaları kullanabilir veya Garry's Mod sunduğu
                eşyaları
                kullanabilirsiniz.</p>
            <div>
                <img src="<?= $baseUrl ?>/assets/image/darkrp_qmenu.png" alt=""
                     class="img-fluid img-zoom mx-auto d-block">
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
                        <li>İlk önce <kbd>Q</kbd> basın. Ardından Sağ taraftan Düğme Seçiniz.</li>
                        <li>Düğme Bir Tuş Atınız Örneğin <kbd>Numpad 0</kbd></li>
                        <li>Düğmeyi koyacağınız yere tool gun ile vurunuz.</li>
                        <li><kbd>Q</kbd> Basın. Ardından Sağ Taraftan Görünmez Kapı Seçiniz.</li>
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
                                           class="player img-fluid col-12" controls muted loop></video>
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
                        <li>İlk önce <kbd>Q</kbd> basın. Ardından Sağ taraftan Keypad Seçiniz.</li>
                        <li>Ne kadar Süre açık kalıcağı kısmını 5 saniye olarak ayarlayın.</li>
                        <li>Parola Giriniz (En fazla 4 hane olabilir)</li>
                        <li>Keypad için Açma Tuşu Atınız Örneğin <kbd> Numpad +</kbd></li>
                        <li>Keypad koyacağınız yere tool gun ile vurunuz.</li>
                        <li><kbd>Q</kbd> Basın. Ardından Sağ Taraftan Görünmez Kapı Seçiniz.</li>
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
                                           class="player img-fluid col-12" controls muted loop></video>
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
                        <li>İlk önce <kbd>Q</kbd> basın. Ardından Sağ taraftan Işık Seçiniz.</li>
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
                                           class="player img-fluid col-12" controls muted loop></video>
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
            <h4 class="standartcolor" id="toolgun-kopyalayici">Kopyalayıcı ile Buildimi nasıl kopyalarım?</h4>
            <div class="row">
                <div class="col-12">
                    <p>Kopyalayıcı ile Kare bir alan oluşturmamız gerekiyor.</p>
                    <ol>
                        <li>İlk önce <kbd>Q</kbd> basın. Ardından Sağ taraftan Kopyalayıcı Seçiniz.</li>
                        <li>Tool Gun ile Birinci Alanı(POS 1) seçmek için ateş edelim.</li>
                        <li>Tool Gun ile İkinci Alanı(POS 2) seçmek için ateş edelim.</li>
                        <li>Daha Sonra istediğimiz eşyaları kapsayıp kapsamadığını kontrol edelim.</li>
                        <li><kbd>Q</kbd> Basarak kopyaladığımız kareye bir isim verelim ve "Kaydet" basalım.</li>
                    </ol>
                    <p>Eğer buildinizi arkadaşlarınızla paylaşmak istiyor iseniz <a class="no-text-decoration"
                                                                                    href="<?= $baseUrl ?>/darkrp-baslarken/sss#kopyalayici">DarkRP
                            Başlarken - Sıkça Sorulan Sorular</a> ziyaret ediniz.</p>
                </div>
                <div class="accordion" id="accordion-toolgun-kopyalayici">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-purple" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse-toolgun-kopyalayici">
                                Video Örnek
                            </button>
                        </h2>
                        <div id="collapse-toolgun-kopyalayici" class="accordion-collapse collapse"
                             data-bs-parent="#accordion-toolgun-kopyalayici">
                            <div class="accordion-body">
                                <div class="video-container">
                                    <video src="<?= $baseUrl ?>/assets/video/darkrp_toolgun_kopyalayici.mp4"
                                           class="player img-fluid col-12" controls muted loop></video>
                                    <div class="yt-player ratio ratio-16x9" style="display: none;">
                                        <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/ted--pBOB5A"
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
            <h4 class="standartcolor" id="toolgun-kopyalayici1">Kopyalayıcı ile Buildimi nasıl yapıştırırım?</h4>
            <div class="row">
                <div class="col-12">
                    <ol>
                        <li>İlk önce <kbd>Q</kbd> basın. Ardından Sağ taraftan Kopyalayıcı Seçiniz.</li>
                        <li>Sağ taraftan buildimizi bulalım.</li>
                        <li>Kopyaladığımız konumda oluşması için "Orjinal Konuma Yapıştır" işaretliyelim.</li>
                        <li>Daha sonra <i class="fa-solid fa-cube"></i> resmine tıklıyalım.</li>
                        <li>Sol Click basalım.</li>
                    </ol>
                    <p>Eğer buildinizi arkadaşlarınızla paylaşmak istiyor iseniz <a class="no-text-decoration"
                                                                                    href="<?= $baseUrl ?>/darkrp-baslarken/sss#kopyalayici">DarkRP
                            Başlarken - Sıkça Sorulan Sorular</a> ziyaret ediniz.</p>
                </div>
                <div class="accordion" id="accordion-toolgun-kopyalayici1">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed text-purple" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse-toolgun-kopyalayici1">
                                Video Örnek
                            </button>
                        </h2>
                        <div id="collapse-toolgun-kopyalayici1" class="accordion-collapse collapse"
                             data-bs-parent="#accordion-toolgun-kopyalayici1">
                            <div class="accordion-body">
                                <div class="video-container">
                                    <video src="<?= $baseUrl ?>/assets/video/darkrp_toolgun_kopyalayici1.mp4"
                                           class="player img-fluid col-12" controls muted loop></video>
                                    <div class="yt-player ratio ratio-16x9" style="display: none;">
                                        <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/j01eGKNlrmY"
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
            <h2 class="standartcolor" id="kiyafet">Kıyafet Nasıl Değiştirebilirim?</h2>
            <p>Kıyafetleriniz tamamen değiştirmek mümkün değildir, MoonShop gidip dolap ve girişteki Ortadaki NPC
                Kullanarak Kıyafetinizi veya Oyuncu Modelinizi değiştirebilirsiniz.</p>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="phone">Telefon nasıl kullanırım?</h2>
            <br>
            <div class="accordion" id="phoneAccordion">
                <?php foreach ($darkrpPhoneApps as $index => $app): ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button <?php echo isset($app['first']) && $app['first'] ? 'text-danger' : 'collapsed'; ?>"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePhone<?php echo $index; ?>"
                                    aria-expanded="<?php echo isset($app['first']) && $app['first'] ? 'true' : 'false'; ?>"
                                    aria-controls="collapsePhone<?php echo $index; ?>">
                                <?php echo htmlspecialchars($app['name']); ?>
                            </button>
                        </h2>
                        <div id="collapsePhone<?php echo $index; ?>"
                             class="accordion-collapse collapse<?php echo isset($app['first']) && $app['first'] ? ' show' : ''; ?>"
                             data-bs-parent="#phoneAccordion">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-10 col-12">
                                        <?php
                                        $descriptionClasses = [
                                            '',
                                            'text-primary-emphasis',
                                            'text-teal',
                                            'text-danger-emphasis',
                                        ];
                                        foreach ($app['description'] as $descIndex => $desc):
                                            $class = isset($descriptionClasses[$descIndex]) ? $descriptionClasses[$descIndex] : '';
                                            ?>
                                            <p class="<?php echo $class; ?>"><?php echo $desc; ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-md-2 col-12">
                                        <img src="<?php echo htmlspecialchars($app['image']); ?>"
                                             style="align-items: center;"
                                             alt="<?php echo htmlspecialchars($app['name']); ?>"
                                             class="img-fluid img-zoom mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
                        <li class="text-teal">Depo Görevlisi NPC'nin yanına gidin ve <kbd>E</kbd> tuşuna
                            basınız. (Banka,
                            Benzinlik gibi
                            yerlerde depo görevlisi NPC bulunmaktadır.)
                        </li>
                        <br>
                        <li class="text-info-emphasis">Açılan ekranda eşyalarınızı yukarıya sürükleyiniz.</li>
                    </ol>
                </div>
                <div class="col-md-4 col-12">
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_depo.png" class="img-fluid img-zoom mx-auto d-block">
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
                    <img src="<?= $baseUrl ?>/assets/image/darkrp_atm.png" class="img-fluid img-zoom mx-auto d-block">
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
                <li><strong class="text-primary">[MG] Etiketi :</span></strong> Steam hesabınızın profil
                    ismi düzenleme kısmına gidin. Profilinizi düzenleyerek profil adınızın sonuna [MG]
                    ekleyin; bu sayede alacağınız XP miktarı artacaktır.
                </li>
                <li><strong class="text-success">İmam :</span></strong> Oyunda kendinizi imam
                    üfletebilirsiniz. Bu, size ölene kadar veya oyundan çıkana kadar %25 daha fazla XP
                    kazandıracaktır.
                </li>
                <li><strong class="text-danger">Happy Hours :</strong> Oyunda 18:00 - 24:00 arasında
                    geçerli olan 2x XP fırsatıdır.
                </li>
                <li><strong class="text-warning">Etüt merkezi :</span></strong> Geçici olarak öğrenme
                    becerilerinizi geliştirir.
                </li>
                <li><strong class="text-info">Üretim :</strong> Bitki Yetiştiriciliği ve Para Basma Makinesi başarıyla
                    tamamlandığında, <kbd>E</kbd> tuşuna basarak XP kazanabilirsiniz.
                </li>
                <li><strong class="text-primary">Baskın :</strong> Baskınlarda ele geçirilen
                    araçlardan kazanabilirsiniz. <span
                            class="text-secondary">(Baskın süresi boyunca)</span></li>
                <li><strong class="text-secondary">VIP, VIP+ Satın Alma :</strong> VIP veya VIP+ alarak XP
                    değerlerinizi, VIP ya da VIP+ süreniz boyunca artırabilirsiniz.
                </li>
                <li><strong class="text-success">2x/4x Etkinlikler :</span></strong> Bazı saatlerde üstadlar tarafından
                    x2/x4 XP açılmaktadır.
                </li>
                <li><strong class="text-danger">Eşyalar :</strong> XP eşyaları satın alabilirsiniz.</li>
            </ul>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="money">Para Nasıl Kazanırım?</h2>
            <br>
            <ul style='list-style-type: "- "'>
                <li><strong class="text-primary">Maaş :</span></strong> Devlet Çalışanı ile Esnaf ve Siviller
                    kategorisinde meslekler 15 dakikada bir maaş alırlar.
                </li>
                <li><strong class="text-success">Ticaret :</span></strong> Esnaf ve Siviller kategorisinde yer alan bazı
                    meslekler <kbd>F4</kbd> üzerinden sevkiyat kısmından tüketiciler için eşya çıkartmaktadır. Bunlardan
                    Kurallar çerçevesinde belli kazançlar sağlıyabilirsiniz.
                </li>
                <li><strong class="text-danger">Üretim :</strong> Yasadışı Organizasyonlar <kbd>F4</kbd> den
                    Varlıklardan çıkardıkları üretim eşyalarıyla çaba göstererek para kazanabilir.
                </li>
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
                                            <?php if (isset($item['box']) || isset($item['custombox'])) {
                                                if (isset($item['box']) && $item['box']) {
                                                    $BoxStatus = "Kutulardan Çıkar.";
                                                } else {
                                                    $BoxStatus = "Kutulardan Çıkmaz.";
                                                }
                                                ?>
                                                <span class="text-purple"> <?= isset($item['custombox']) ? $item['custombox'] : $BoxStatus ?></span>
                                                <?php
                                            }
                                            ?>
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