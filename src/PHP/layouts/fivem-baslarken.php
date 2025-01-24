<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="standartcolor mb-4">FiveM Başlarken</h1>
        <p>Her zaman ilk başlangıçlar zordur, bu kısımdaki bilgiler sunucumuzun temel
            mekaniklerini anlamana yardımcı olacak. Unutmamalısın ki öğrenmeye açık olman gerek. Bu rehber sadece temel
            kısımlara değinmektedir.</p>
        <div>
            <h2 class="standartcolor" id="first">Sunucuya katılmadan önce dikkat edilmesi gerekenler</h2>
            <br>
            <ol>
                <li>GTA V sahibi olduğunuz platformun açık olduğundan emin olun. Epic Games'ten satın aldıysanız Epic
                    Games'i açınız; Rockstar Games'ten satın aldıysanız Rockstar Games'i açınız.
                </li>
                <li>Steam açık olduğundan emin olunuz.</li>
                <li>FiveM açınız, Sağ üstten <i class="fa-solid fa-gear"></i> (ayarlar) tıklayınız ve "Hesap" menüsünden
                    Oyuncu adı
                    giriniz. Oyuncu adı girerken özel karakter kullanmamaya ingilizce latin harfler kullanmaya özen
                    gösteriniz.
                </li>
                <li>Oyun görüntüsünü, sesini ve mikrofonunuzu net bir şekilde kaydeden bir <a class="no-text-decoration"
                                                                                              href="<?= $baseUrl; ?>/ekrankaydi">video
                        kayıt programı</a> kullanınız.
                </li>
            </ol>
            <p>Ayrıca, oyuna girdikten sonra kendinize göre grafik ayarlamaları yapmayı unutmayınız. Grafik ayarlarından
                "<a class="no-text-decoration" href="<?= $baseUrl; ?>/fivem-baslarken/sss#extendedtext">Extended
                    Texture Budget</a>" VRAM aşmıcak şekilde ayarlamayıda ihmal etmeyiniz. Bilgisayarınız kötü ise
                kapatabilir ve ya çok az açabilirsiniz.</p>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="gmod">Daha Önce Garry's Mod Sunucusunda Bulunanların Dikkatine</h2>
            <p><b>Oyun içeriği yapısı Garry's mod DarkRP Yapısından tamamen farklıdır, F4 Meslek Seçimi, Para Basma
                    Makinesi, Bitki Üretimi, Bitki Yükseltme vb. şeyler FiveM mevcut değildir.</b></p>
        </div>
        <div>
            <h2 class="standartcolor" id="tus">Temel Kısayollar</h2>
            <br>
            <div class="alert alert-info">
                <p>Dilerseniz tuşları, <kbd>ESC</kbd> tuşuna basıp "Settings" kısmından "Key Bindings"
                    değiştirebilirsiniz.</p>
                <p>FiveM özel tuşlar için FiveM kısmına bakınız.</p>
                <p>Sesli Konuşma Tuşları için GTA Online kısmına bakınız.</p>
            </div>

            <ul class="nav nav-tabs" id="chatTabs" role="tablist">
                <?php
                $tabId = 0;

                foreach ($fivemKeyboard as $category => $details) {
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

                foreach ($fivemKeyboard as $category => $details) {
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
            <ul id="chatTabs">
                <?php
                $tabId = 0;

                foreach ($fivemCommand as $command) {
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
            <h2 class="standartcolor" id="meslek">Meslekler / Departmanlar / İşletmeler</h2>
            <br>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php foreach ($fivemJobs as $job): ?>
                    <div class="col">
                        <div class="card">
                            <div class="<?= isset($job['class']) ? $job['class'] : "" ?> card-header fw-bold text-truncate"
                                <?= isset($job['color']) ? 'style="background-color:' . $job['color'] . '"' : "" ?> >
                                <span><?= (isset($job['paid']) && $job['paid']) ? '<i class="text-success-emphasis fa-solid fa-dollar-sign"></i>' : '' ?> <?= $job['name']; ?> <?= (isset($job['join']) && ($job['join'] == 'cityservices')) ? '<i class="text-light fa-solid fa-shield-halved"></i>' : ((isset($job['join']) && ($job['join'] == 'whitelist')) ? '<i class="text-white fa-solid fa-user-check"></i>' : ((isset($job['join']) && ($job['join'] == 'parttime')) ? '<i class="text-white fa-solid fa-stopwatch"></i>' : '')) ?></span>
                            </div>
                            <?php
                            if (isset($job['background'])) {
                                $JobBackground = "background-image: url('" . htmlspecialchars($job['background']) . "');";
                                $JobBackground .= "background-size: cover;";
                                $JobBackground .= "background-position: center;";
                            } else {
                                $JobBackground = null;
                            }
                            ?>
                            <div class="card-body"
                                 style="<?= isset($JobBackground) ? $JobBackground : '' ?> position: relative;">
                                <div style="<?= isset($JobBackground) ? 'position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.4); pointer-events: none; z-index: 1;' : '' ?>"></div>

                                <div style="position: relative; z-index: 2;">
                                    <small style="<?= isset($job['abbr']) ? '' : 'visibility: hidden;' ?>"
                                           class="text-start card-text">
                                        <b>Kısaltma:</b>
                                        <?= isset($job['abbr']) ? htmlspecialchars(strtoupper($job['abbr'])) : '-' ?>
                                    </small>

                                    <div class="text-end mt-2">
                                        <button type="button" class="btn btn-danger btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#JobsInfoModal-<?= $job['code']; ?>">
                                            Detayları Gör
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="JobsInfoModal-<?= $job['code']; ?>" tabindex="-1"
                         aria-labelledby="JobsInfoModalLabel-<?= $job['code']; ?>" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger"
                                        id="JobsInfoModalLabel-<?= $job['code']; ?>">
                                        <?= $job['name']; ?> - Detaylar
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex">
                                    <div class="flex-grow-1">
                                        <div class="mobile-content">
                                            <!--Sidebar mobil-->
                                            <?php if (isset($job['logo'])) { ?>
                                                <section class="text-center">
                                                    <img src="<?= htmlspecialchars($job['logo']) ?>"
                                                         class="img-fluid mb-3" alt="Meslek Resmi" width="150"
                                                         height="200">
                                                </section>
                                                <?php
                                            }
                                            ?>
                                            <section>
                                                <p class="text-light text-center"><?= $job['name']; ?></p>
                                            </section>
                                            <section>
                                                <h6 class="text-danger-emphasis">Kısaltma:</h6>
                                                <p><?= isset($job['abbr']) ? htmlspecialchars(strtoupper($job['abbr'])) : 'Kısaltım Bulunmamaktadır.' ?></p>
                                            </section>

                                            <section>
                                                <h6 class="text-teal">Başvuru:</h6>
                                                <?php
                                                switch ($job['join']) {
                                                    case "whitelist":
                                                        ?>
                                                        <p>Whitelist alınması gerekiyor.</p>
                                                        <?php
                                                        break;
                                                    case "cityservices":
                                                        ?>
                                                        <p><i class="fa-solid fa-shield-halved"></i> Şehir
                                                            Hizmetleri'ne
                                                            gidip mesleğe başvurabilirsiniz.</p>
                                                        <?php
                                                        break;
                                                    case "parttime":
                                                        ?>
                                                        <p>Haritada İlgili Mesleği Bulup Etkileşime Girmelisiniz.</p>
                                                        <?php
                                                        break;
                                                    default:
                                                        ?>
                                                        <p>Bilinmiyor...</p>
                                                        <?php
                                                        break;
                                                }
                                                ?>
                                            </section>
                                            <?php if (isset($job['joinlink'])) { ?>
                                                <section>
                                                    <h6 class="text-success-emphasis">Başvuru Adresi:</h6>
                                                    <p><a href="$job['joinlink'];" target="_blank"
                                                          class="no-text-decoration"><?= $job['joinlink']; ?></a>
                                                    </p>
                                                </section>
                                                <?php
                                            } ?>
                                            <?php if (isset($job['paid']) && $job['paid']) { ?>
                                                <section>
                                                    <h6 class="text-success-emphasis">Paralı Meslek:</h6>
                                                    <p>Evet</p>
                                                </section>
                                                <?php
                                            } ?>
                                            <br>
                                        </div>
                                        <section>
                                            <h4 class="text-info">Genel Bilgiler</h4>
                                            <br>
                                            <?php if (isset($job['description']) && is_array($job['description'])): ?>
                                                <?php foreach ($job['description'] as $desc): ?>
                                                    <div class="mb-3">
                                                        <h6 class="text-teal"><?= htmlspecialchars($desc['title']) ?></h6>
                                                        <p><?= $desc['content'] ?></p>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <p>Açıklama bulunmamaktadır.</p>
                                            <?php endif; ?>
                                        </section>

                                        <hr>

                                        <section>
                                            <h4 class="text-warning">Rütbeler</h4>
                                            <br>
                                            <?php if (isset($job['ranks']) && is_array($job['ranks']) && !empty($job['ranks'])): ?>
                                                <?php if ($job['join'] !== "cityservices" && $job['join'] !== "parttime"): ?>
                                                    <div class="alert alert-info" role="alert">
                                                        Rütbeler yalnızca oyundaki rütbeyi temsil eder ve güncelliğini
                                                        yitirmiş olabilir. Bu durumu göz önünde bulundurarak hareket
                                                        ediniz.
                                                    </div>
                                                <?php endif; ?>

                                                <ul class="list-group">
                                                    <?php $rankID = 0; ?>
                                                    <?php foreach ($job['ranks'] as $rank): ?>
                                                        <li class="list-group-item" data-bs-toggle="tooltip"
                                                            title="<?= $rankID . ' - ' . $rank ?>">
                                                            <span><?= $rank; ?></span>
                                                        </li>
                                                        <?php $rankID++; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php else: ?>
                                                <p>Rütbe durumu bilinmiyor veya rütbe mevcut değil.</p>
                                            <?php endif; ?>
                                        </section>
                                    </div>
                                    <br><br>
                                    <div class="ms-4 desktop-content" style="min-width: 300px; max-width: 1000px;">
                                        <?php if (isset($job['logo'])) { ?>
                                            <section class="text-center">
                                                <img src="<?= htmlspecialchars($job['logo']) ?>"
                                                     class="img-fluid mb-3" alt="Meslek Resmi" width="150"
                                                     height="200">
                                            </section>
                                            <?php
                                        }
                                        ?>
                                        <section>
                                            <p class="text-light text-center"><?= $job['name']; ?></p>
                                        </section>
                                        <section>
                                            <h6 class="text-danger-emphasis">Kısaltma:</h6>
                                            <p><?= isset($job['abbr']) ? htmlspecialchars(strtoupper($job['abbr'])) : 'Kısaltım Bulunmamaktadır.' ?></p>
                                        </section>

                                        <section>
                                            <h6 class="text-teal">Başvuru:</h6>
                                            <?php
                                            switch ($job['join']) {
                                                case "whitelist":
                                                    ?>
                                                    <p>Whitelist alınması gerekiyor.</p>
                                                    <?php
                                                    break;
                                                case "cityservices":
                                                    ?>
                                                    <p><i class="fa-solid fa-shield-halved"></i> Şehir Hizmetleri'ne
                                                        gidip mesleğe başvurabilirsiniz.</p>
                                                    <?php
                                                    break;
                                                case "parttime":
                                                    ?>
                                                    <p>Haritada İlgili Mesleği Bulup Etkileşime Girmelisiniz.</p>
                                                    <?php
                                                    break;
                                                default:
                                                    ?>
                                                    <p>Bilinmiyor...</p>
                                                    <?php
                                                    break;
                                            }
                                            ?>
                                        </section>
                                        <?php if (isset($job['joinlink'])) { ?>
                                            <section>
                                                <h6 class="text-success-emphasis">Başvuru Adresi:</h6>
                                                <p><a href="$job['joinlink'];" target="_blank"
                                                      class="no-text-decoration"><?= $job['joinlink']; ?></a></p>
                                            </section>
                                            <?php
                                        } ?>
                                        <?php if (isset($job['paid']) && $job['paid']) { ?>
                                            <section>
                                                <h6 class="text-success-emphasis">Paralı Meslek:</h6>
                                                <p>Evet</p>
                                            </section>
                                            <?php
                                        } ?>
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
            <h2 class="standartcolor" id="money">Oyunda Nasıl Para Kazanabilirim?</h2>
            <ul>
                <li><strong>Balıkçılık</strong>: "<i class="custom-i gta-olta"></i> İskele" gidip balık tutup para
                    kazanabilirsiniz.
                </li>
                <li><strong class="text-primary">Part time iş</strong>: <i class="text-success fa-solid fa-p"></i> Pizza
                    Mesleği, <i class="custom-i gta-gazete"></i> Gazetecilik, <i style="margin-top: 0.5rem;" class="custom-i gta-avcilik"></i>
                    Avcılık veya <i class="text-purple fa-solid fa-martini-glass"></i> Üzüm, <i
                            class="custom-i gta-karpuz"></i> Karpuz Toplayıcılık gibi işler yaparak para
                    kazanabilirsiniz.
                </li>
                <li><strong class="text-success">Maaş</strong>: Belli bir sürede banka hesabınıza maaş yatar (Legal
                    oyuncular için)
                </li>
                <li><strong class="text-danger">Yasadışı Eylemler</strong>: <i
                            class="text-success fa-solid fa-basket-shopping"></i> Market, <i
                            class="text-success fa-solid fa-dollar-sign"></i> Banka vb. gibi yerlerde yasadışı
                    eylemler yaparak para kazanabilirsiniz.
                </li>
            </ul>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="yemek">Açlığımı ve Susuzluğumu nasıl giderebilirim?</h2>
            <p>"<i class="text-success fa-solid fa-basket-shopping"></i> Market" giderek <i
                        class="text-success fa-solid fa-chevron-up fa-flip"></i> işaretinin üstüne gelip <kbd>E</kbd>
                basıp yiyecek ve içecek satın
                alabilirsiniz.</p>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="kiyafet">Kıyafet Nasıl Değiştirebilirim?</h2>
            <p>"<i class="fa-solid fa-shirt"></i> Kıyafetçi Dükkanı" gidip değiştirebilirsiniz.</p>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="f3menu">F3 Menüsü Nedir?</h2>
            <div class="row">
                <div class="col-md-8">
                    <p>Etkileşim kurabileceğiniz, haritada görünmeyen işaretleri açıp kapatabileceğiniz, animasyon
                        yapabileceğiniz, kıyafet ayarlarınızı düzenleyebileceğiniz, günlük çark çevirebileceğiniz,
                        yaralı
                        kaldırma, kişi kelepçeleme, aracınızı çevirebileceğiniz, Faturaları ödiyebilceğiniz ve garaja
                        park
                        edebileceğiniz vb.. eylemler için kullanılan bir radyal menüdür.</p>
                </div>
                <div class="col-md-4">
                    <img src="<?= $baseUrl ?>/assets/image/fivem_f3menu.png" class="img-fluid img-zoom"
                         alt="F3 Menü">
                </div>
            </div>

        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="phone">Telefon nasıl kullanırım?</h2>
            <br>
            <div class="accordion" id="phoneAccordion">
                <?php foreach ($fivemPhoneApps as $index => $app): ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button <?php echo isset($app['first']) && $app['first'] ? 'text-danger' : 'collapsed'; ?>"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePhone<?php echo $index; ?>"
                                    aria-expanded="<?php echo isset($app['first']) && $app['first'] ? 'true' : 'false'; ?>"
                                    aria-controls="collapsePhone<?php echo $index; ?>">
                                <?php echo htmlspecialchars($app['name']); ?> <?= isset($app['name1']) ? '(' . $app['name1'] . ')' : ''; ?>
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
            <h2 class="standartcolor" id="takas">Takas Nasıl Yaparım?</h2>
            <p>Takas yapmak istediğiniz kişi ile yan yana geliniz ardından <kbd>F2</kbd> açınız ve vermek istediğin
                eşyayı ver sürekleyin</p>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="balik">Balık Nasıl Tutulur ?</h2>
            <ol>
                <li>"<i class="custom-i gta-olta"></i> İskele" gidip, Balıkçı NPC'sinden olta ve yem alınız. Daha
                    sonra oltayı <kbd>1</kbd> numaralı slota, yemi ise <kbd>2</kbd> numaralı slota yerleştiriniz.
                </li>
                <li>Ardından denize doğru dönerek <kbd>1</kbd> tuşuna basınız. Daha sonra <kbd>2</kbd> tuşuna basarak
                    yemi takınız.
                </li>
                <li>Oltanıza balık geldiğinde ekranınızda belirlenen tuşlara sırayla basınız.</li>
            </ol>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="copkutusu">Çöp Kutusu Karıştırma</h2>
            <div class="row">
                <div class="col-md-8">
                    <p>Çöp Kutuların Yanına gidiniz ve <kbd>ALT</kbd> tuşuna basınız. Ardından Karıştırmaya Başlıcaktır.
                    </p>
                    <p>Şansınız var ise yemek, silah parçası vb. bulabilirsiniz.</p>
                </div>
                <div class="col-md-4">
                    <img src="<?= $baseUrl ?>/assets/image/fivem_copkutusu.png" class="img-fluid img-zoom"
                         alt="Çöp Kutusu">
                </div>
            </div>
        </div>
        <div>
            <h2 class="standartcolor" id="karpuz">Karpuz Toplama ve Satma</h2>
            <ol>
                <li>"<i class="custom-i gta-karpuz"></i> Karpuz toplama" alanına gidiniz. <i
                            class="text-purple fa-solid fa-angles-down"></i> simgesinin üzerine gelerek <kbd>E</kbd>
                    tuşuna basınız.
                </li>
                <li>Satmak için ise, "<i class="text-purple fa-solid fa-person"></i> Karpuz tarlası sahibi" gidiniz ve
                    <kbd>E</kbd>
                    tuşuna basınız.
                </li>
            </ol>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="uzum">Üzüm Toplama ve Satma</h2>
            <ol>
                <li><p><i class="text-purple fa-solid fa-martini-glass"></i> Üzüm toplama alanına gidiniz. <i
                                class="text-purple fa-solid fa-angles-down"></i> simgesinin üzerine gelerek <kbd>E</kbd>
                        tuşuna basınız.</p></li>
                <li><p>Üzümleri satmak için <i class="text-purple fa-solid fa-person"></i> üzüm tarlası sahibine gidiniz
                        ve <kbd>E</kbd> tuşuna basınız.</p></li>
            </ol>
        </div>
        <div>
            <h2 class="standartcolor" id="uzumisleme">Üzüm Nasıl İşlenir ?</h2>
            <p>Üzüm topladıktan sonra "<i class="text-purple fa-solid fa-person"></i> Üzüm Tarlası Sahibi" 'den Boş Şişe
                Satın Alın ve Ardından "<i class="text-purple fa-solid fa-martini-glass"></i> Üzüm İşleme" gidiniz ve
                <kbd>E</kbd> basınız </p>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="balikillegal">Yasadışı Balıkçılık Nasıl Yapılır ?</h2>
            <ol>
                <li>"<i class="custom-i gta-olta"></i> İskele" gidip Balıkçı NPC'sinden olta ve yem alınız. Daha
                    sonra oltayı <kbd>1</kbd> numaralı slota, illegal balık yemini ise <kbd>2</kbd> numaralı slota
                    yerleştiriniz.
                </li>
                <li>Ardından haritanızdan "<i class="custom-i gta-olta"></i> İllegal Balık Alanı"nı bulun ve oraya
                    gidiniz.
                </li>
                <li>Denize doğru dönerek <kbd>1</kbd> tuşuna basınız. Daha sonra <kbd>2</kbd> tuşuna basarak yemi
                    takınız.
                </li>
                <li>Oltanıza balık geldiğinde, ekranınızda beliren tuşlara sırayla basınız.</li>
            </ol>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="market"><i
                        class="text-success fa-solid fa-basket-shopping"></i> Market Soygunu Nasıl
                Gerçekleştirebilirim?</h2>
            <div class="row">
                <div class="col-md-8">
                    <ul style="list-style-type: '* '">
                        <li>İçeri girip NPC'ye silah doğrultunuz ve etrafına ateş ediniz. NPC ellerini kaldırdığında,
                            kasa tarafına geçip paraları alabilirsiniz.
                        </li>
                        <li>Kasalara ateş ettikten sonra silahınızı tekrar kılıfına sokup <kbd>E</kbd> tuşuna basmanız
                            yeterlidir.
                        </li>
                        <li>Arka kasa için matkap ihtiyacınız vardır. Eğer matkap mevcutsa, kasaya gidip <kbd>E</kbd>
                            tuşuna basınız ve ardından mini oyunu tamamlayınız.
                        </li>
                        <li><kbd><i class="fa-solid fa-caret-up"></i></kbd> ve <kbd><i
                                        class="fa-solid fa-caret-down"></i></kbd> tuşlarıyla matkabın hızını
                            ayarlayabilirsiniz. Dikkat ediniz, matkap fazla ısınırsa kırılır ve kasayı açamazsınız.
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="<?= $baseUrl ?>/assets/image/fivem_minigame_drill.png" class="img-fluid img-zoom"
                         alt="Minigame">
                </div>
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="banka"><i class="text-success fa-solid fa-dollar-sign"></i>
                Banka Soygunu Nasıl Gerçekleştirebilirim?</h2>
            <div class="row">
                <div class="col-md-8">
                    <ul>
                        <li>Soygun gerçekleştirmek için bir laptop'a ihtiyacınız vardır.
                        </li>
                        <li>İçeri girip arka tarafa doğru ilerleyiniz. Kasayı göreceksiniz.</li>
                        <li>Kasaya yaklaşarak <kbd>ALT</kbd> tuşuna basınız ve etkileşim noktasını bulunuz.</li>
                        <li>Mini oyunu geçmeye çalışınız. Tablette parlak olan ikonları tespit ediniz ve parlaklık başka
                            bir yere geçtiğinde doğru şekilde işaretleyiniz.
                        </li>
                        <li>Kısıtlı süreniz olduğunu unutmayınız.</li>
                        <li>Üç hakkınız vardır. Eğer üç kez yanlış yaparsanız işlem iptal edilir.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="<?= $baseUrl ?>/assets/image/fivem_minigame_laptop.png" class="img-fluid img-zoom"
                         alt="Minigame">
                </div>
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="elmas"><i class="fa-solid fa-gem"
                                                    style="color: #74C0FC;"></i>
                Vangelico Jewelry Nasıl Soyabilirim?</h2>
            <div class="row">
                <div class="col-md-8">
                    <ul style="list-style-type: '— '">
                        <li>Soygun gerçekleştirmek için bir levye ihtiyacınız vardır.</li>
                        <li>Vitrinlere yaklaşarak <kbd>ALT</kbd> tuşuna basınız ve etkileşim noktasını bulunuz.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="<?= $baseUrl ?>/assets/image/fivem_elmas_magaza.png" class="img-fluid img-zoom"
                         alt="Minigame">
                </div>
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="bitki">Tıbbi Bitki Nasıl Toplarım? ve Nasıl
                Paketlerim ?</h2>
            <div class="row">
                <div class="col-md-8">
                    <ul>
                        <li>"<i class="custom-i gta-bitki"></i> Toplama" alanına gidiniz.</li>
                        <li>Bitkilere yaklaşarak <kbd>ALT</kbd> tuşuna basınız ve etkileşim noktasını bulunuz.</li>
                        <li>"<i class="custom-i gta-bitki"></i> Paketleme" alanına gidiniz.</li>
                        <li>NPC bulup <kbd>ALT</kbd> tuşuna basınız ve etkileşim noktasını bulunuz.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="<?= $baseUrl ?>/assets/image/fivem_bitki.png" class="img-fluid img-zoom"
                         alt="Minigame">
                </div>
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="seker">Şeker Üretimi Nasıl Yapabilirim? ve Nasıl
                Paketlerim ?</h2>
            <div class="row">
                <div class="col">
                    <ul style="list-style-type: '> '">
                        <li>Şu malzemelere sahip olmalısınız: Liserjik Asit ve Dietilamid.</li>
                        <li>"<i class="text-danger bi bi-capsule"></i> Üretim" alanına gidiniz.</li>
                        <li>Kapıya yaklaşıp <kbd>E</kbd> tuşuna basarak içeri giriniz. Önünüzdeki tezgaha gidip
                            <kbd>ALT</kbd> tuşuna basarak üretime başlayınız.
                        </li>
                        <li>Paketlemek için bir NPC'nin yanına gidiniz. <kbd>ALT</kbd> tuşuna basarak etkileşim
                            noktasını bulunuz.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="bitki1">Aromatik Otlar Nasıl Toplarım? ve Nasıl
                Paketlerim ?</h2>
            <div class="row">
                <div class="col">
                    <ul style="list-style-type: '— '">
                        <li>"<i class="custom-i gta-bitki1"></i> Toplama" alanına gidiniz.</li>
                        <li>Masaya yaklaşarak <kbd>ALT</kbd> tuşuna basınız ve etkileşim noktasını bulunuz.</li>
                        <li>"<i class="custom-i gta-bitki1"></i> Paketleme" alanına gidiniz.</li>
                        <li>Bir NPC bulup <kbd>ALT</kbd> tuşuna basarak etkileşim noktasını bulunuz.</li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="kristal">Kristal Nasıl Yapabilirim?</h2>
            <div class="row">
                <div class="col">
                    <ul style="list-style-type: '- '">
                        <li><i class="custom-i gta-galeri"></i> Galeri'den Van kategorisindeki "Zirconium Journey"
                            aracına sahip olmalısınız.
                        </li>
                        <li>Şu malzemelere sahip olmalısınız: Lab, Aseton ve Lityum
                        </li>
                        <li>"<i class="custom-i gta-kurukafa"></i> Üretim bölgesi"ne gidiniz.</li>
                        <li>Araçtan inip kapıya doğru <kbd>ALT</kbd> tuşuna basınız ve doğru etkileşimi seçiniz.</li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div>
            <h2 class="standartcolor" id="hurdalik">Arabamı Hurdalığa Nasıl Veririm?</h2>
            <div class="row">
                <div class="col">
                    <ul>
                        <li>"<i class="custom-i gta-hurdalik"></i> Hurdalık" gidiniz.</li>
                        <li>Hangarın içindeki kırmızı dairenin içine giriniz ve <kbd>E</kbd> tuşuna basınız.</li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <blockquote>
            Başlarken bilmeniz gerekenler serimiz burada son bulmaktadır. Daha fazlası için diğer
            rehberlerimize de göz atmayı unutmayın.
        </blockquote>

        <div class="content-ref-box">
            <p>
                <a id="sssBox" href="<?= $baseUrl; ?>/fivem-baslarken/sss">
                    <i class="fas fa-question"></i> Sıkça Sorulan Sorular
                </a>
            </p>
        </div>
    </div>
</main>