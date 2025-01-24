<?php

$ttt_ip = "91.151.94.211:28015";
$ttt_workshop = "https://steamcommunity.com/workshop/filedetails/?id=369504622";
$ttt_AdminBasvuru = "https://forms.gle/Z5mZFT4sBVbQ49Yi6";

$tttCommand = [
    [
        "name" => ["/PM"],
        "params" => ["İsim"],
        "description" => "Belirli bir kullanıcıya özel mesaj atmanızı sağlar.",
        "example" => "/PM Ozgur Sunucu hakkında bir şey sorabilir miyim?"
    ],
    [
        "name" => ["@"],
        "params" => ["Mesaj"],
        "description" => "Yetkili sohbete mesaj yazar.",
        "example" => "@Vuenx hile gibi izliyebilir misiniz?"
    ],
    [
        "name" => ["!menu"],
        "params" => [],
        "description" => "Genel menüyü açar",
        "example" => "!menu"
    ],
    [
        "name" => ["!report"],
        "params" => [],
        "description" => "Son sizi vuran oyuncuyu raporlar",
        "example" => "!report"
    ],
];
$tttKeyboard = [
    [
        "key" => ["F1"],
        "description" => "Yardım menüsünü açar. İzleyici modundan çıkabilirsiniz."
    ],
    [
        "key" => ["F8"],
        "description" => "Hasar logları gibi bilgileri gösterir."
    ],
    [
        "key" => ["<i class=\"fa-solid fa-right-left\"></i>"],
        "description" => "Oyuncu listesini ve skorlarını görebilirsiniz."
    ],
    [
        "key" => ["F10"],
        "description" => "Oyun Konsolunu Açar/Kapatır"
    ],
    [
        "key" => ["é"],
        "description" => "Oyun Konsolunu Açar/Kapatır"
    ],
    [
        "key" => ["Q"],
        "description" => "Elinizdeki silahı yere atmanızı sağlar."
    ],
    [
        "key" => ["Y"],
        "description" => "Oyun içerisinden Yazılı Sohbet açmanızı sağlar."
    ],
    [
        "key" => ["I"],
        "description" => "Envanterinizi açmanızı sağlar."
    ],
    [
        "key" => ["M"],
        "description" => "Genel menüyü açar."
    ],
    [
        "key" => ["C"],
        "description" => "Dedektif/Hain mağazasını açar."
    ],
    [
        "key" => ["X"],
        "description" => "Oyun içerisinden sesli konuşmanızı sağlar."
    ],
    [
        "key" => ["SHIFT"],
        "description" => "Hainlerin birbiriyle konuşmasını sağlar."
    ],
];
$ttt_cmenu = [
    'dedectives' => [
        'items' => [
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

        ]
    ],
    'traitors' => [
        'items' => [
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
        ]
    ]
];
?>