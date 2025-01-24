<?php

$darkrp_ip = "91.151.94.211:27015";
$darkrp_workshop = "https://steamcommunity.com/workshop/filedetails/?id=1545171095";
$darkrp_AdminBasvuru = "https://forms.gle/aThYDcDq2KCxbv1z8";

function darkrp_item_esya_toplama($percentage)
{
    return "Kirli dolar ve bitki üretimini tamamladığınızda (E tuşuna basarken) %$percentage XP bonusu sağlar.";
}

function darkrp_item_xp($type, $percentage)
{
    if ($type == 1) {
        return "%$percentage XP bonusu sağlar.";
    } else if ($type == 2) {
        return "$percentage XP bonusu sağlar.";
    }
}

$darkrpKeyboard = [
    "Genel" => [
        "iclass" => "fa-solid fa-globe",
        "class" => "darkrpgenel",
        "keyboard" => [
            [
                "key" => ["F1"],
                "description" => "FPS görünümü ve üçüncü şahıs (third-person) kamera görünümü arasında geçiş yapabilirsiniz."
            ],
            [
                "key" => ["F2"],
                "description" => "Sahip olduğunuz araçlara arkadaşlarınızı ekleyebilir, ev kiralayabilirsiniz (Kapıya bakıp yapmalısınız), evinize arkadaşlarınızı ekleyebilirsiniz."
            ],
            [
                "key" => ["F3"],
                "description" => "Araç içinde iseniz plaka değişimi yapmanızı sağlar. Ek olarak araçta değilseniz fare imlecinizi belirtir."
            ],
            [
                "key" => ["F4"],
                "description" => "Meslek, sevkiyat ve varlıklar menüsüne erişebilirsiniz."
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
                "key" => ["<i class=\"fa-solid fa-right-left\"></i>"],
                "description" => "Oyuncu listesi ve durumlarına bakabilirsiniz."
            ],
            [
                "key" => ["Q"],
                "description" => "Prop Çıkarabilceğiniz ve ya Tool Gun özelliklerini görebilceğiniz menüyü açar."
            ],
            [
                "key" => ["T"],
                "description" => "Teslim olmanızı sağlar. Eğer teslim olduysanız da elinizi indirmenizi sağlar."
            ],
            [
                "key" => ["Y"],
                "description" => "Oyun içerisinden Yazılı Sohbet açmanızı sağlar."
            ],
            [
                "key" => ["U"],
                "description" => "Oyun içerisinden Yazılı Parti Sohbet açmanızı sağlar."
            ],
            [
                "key" => ["I"],
                "description" => "Envanterinizi açmanızı sağlar."
            ],
            [
                "key" => ["M"],
                "description" => "Oyunun haritasının küçültülmüş halini gösterir. (Yokuş altına inince/Çıkınca harita değişir)"
            ],
            [
                "key" => ["X"],
                "description" => "Oyun içerisinden sesli konuşmanızı sağlar."
            ],
            [
                "key" => ["CTRL"],
                "description" => "Eğilmenizi Sağlar"
            ],
            [
                "key" => ["SPACE/BOŞLUK"],
                "description" => "Zıplamanızı Sağlar"
            ],
            [
                "key" => ["ALT"],
                "description" => "Yavaş Yürümenizi Sağlar"
            ],
            [
                "key" => ["<img src='$baseUrl/assets/image/Mouse-MiddleButton.png'>"],
                "description" => "üçüncü şahıs (third-person) modundayken sağ/sol omuz kamera geçişi yapar."
            ],
        ]
    ],
    "Araç" => [
        "iclass" => "fa-solid fa-car",
        "class" => "darkrpgenel",
        "keyboard" => [
            [
                "key" => ["R"],
                "description" => "Aracı Çalıştır/Kapat, Korna"
            ],
            [
                "key" => ["ALT", "<img src='$baseUrl/assets/image/Mouse-MiddleButton.png'>"],
                "description" => "Dörtlüleri Aç/Kapat"
            ],
            [
                "key" => ["ALT", "<img src='$baseUrl/assets/image/Mouse-LeftButton.png'>"],
                "description" => "Sol Sinyal/Flaşör Aç/Kapat"
            ],
            [
                "key" => ["ALT", "<img src='$baseUrl/assets/image/Mouse-RightButton.png'>"],
                "description" => "Sağ Sinyal/Flaşör Aç/Kapat"
            ],
            [
                "key" => ["F"],
                "description" => "Işıkları Aç/Kapat"
            ],
            [
                "key" => ["B"],
                "description" => "Hız Sabitleyicisi Aç/Kapat (!vcmod Seyir aktif edilmesi gerekli)"
            ],
            [
                "key" => ["ALT", "N"],
                "description" => "Aracı Kilitle"
            ],
            [
                "key" => ["T"],
                "description" => "Manuel Siren"
            ],
            [
                "key" => ["<img src='$baseUrl/assets/image/Mouse-RightButton.png'>"],
                "description" => "Uzun Süre basılı tutarsan Sireni Kapatıp/Açar, Kısa süreli tutarsan siren değiştirir."
            ],
            [
                "key" => ["<img src='$baseUrl/assets/image/Mouse-LeftButton.png'>"],
                "description" => "Uzun Süre basılı tutarsan Işıkları Kapatıp/Açar, Kısa süreli tutarsan Işık değiştirir."
            ]
        ]
    ],
    "Silah" => [
        "iclass" => "fa-solid fa-gun",
        "class" => "darkrpgenel",
        "keyboard" => [
            [
                "key" => ["R"],
                "description" => "Şarjör yeniler"
            ],
            [
                "key" => ["E", "R"],
                "description" => "Silah Modunu değiştirir."
            ],
        ]
    ],

];
$darkrpCommand = [
    "Genel" => [
        "iclass" => "fa-solid fa-globe",
        "class" => "darkrpgenel",
        "commands" => [
            [
                "name" => ["//", "/ooc"],
                "params" => ["Mesaj"],
                "description" => "Oyun dışında genel konuşmalar yapmak için kullanılır.",
                "example" => "// Etraf error gözüküyor nasıl çözebilirim?"
            ],
            [
                "name" => ["/looc"],
                "params" => ["Mesaj"],
                "description" => "Lokal OOC sohbeti yapmanızı sağlar.",
                "example" => "/looc Arkadaşlar rol ortasında hatalı emote atmayın lütfen"
            ],
            [
                "name" => ["/reklam", "/advert"],
                "params" => ["Mesaj"],
                "description" => "IC (In-Character) reklamlar ve duyurular yapmanızı sağlar.",
                "example" => "/reklam Şehirde yeni açılan Moon AVM bekleriz!"
            ],
            [
                "name" => ["/me"],
                "params" => ["Mesaj"],
                "description" => "Karakterinizin yaptığı eylemleri anlatmak için kullanılır.",
                "example" => "/me masaya oturur"
            ],
            [
                "name" => ["/pm"],
                "params" => ["Kişi", "Mesaj"],
                "description" => "Belirli bir kullanıcıya özel mesaj atmanızı sağlar.",
                "example" => "/pm Ozgur MoonGiller Sunucu hakkında bir şey sorabilir miyim?"
            ],
            [
                "name" => ["!asay", "@"],
                "params" => ["Mesaj"],
                "description" => "Yetkili sohbete mesaj yazar",
                "example" => "!asay Duvar sokağında MassRDM yapan biri var izliyebilir misiniz?"
            ],
            [
                "name" => ["/give"],
                "params" => ["Miktar"],
                "description" => 'CrossHair (<i class="fa-solid fa-plus" style="color: #63E6BE;"></i>) baktığınız kişiye para atar.',
                "example" => "/give 1000"
            ],
            [
                "name" => ["/drop"],
                "params" => [null],
                "description" => "Elinizde atılabilir silah var ise yere atmanızı sağlar.",
                "example" => "/drop"
            ],
            [
                "name" => ["/calladmin"],
                "params" => ["Sebep"],
                "description" => "Yetkili çağırmak için kullanılır.",
                "example" => "/calladmin Duvar arasına sıkıştım çekebilir misin?"
            ],
            [
                "name" => ["/112"],
                "params" => ["İhbar"],
                "description" => "İlk yardım ekiplerine ihbar vermenizi sağlar ayrıca konumunuzuda gönderir.",
                "example" => "/112 MoonAVM Önünde kalp krizi geçiren biri var."
            ],
            [
                "name" => ["/155"],
                "params" => ["İhbar"],
                "description" => "Polise ihbar vermenizi sağlar ayrıca konumunuzuda gönderir.",
                "example" => "/155 Silahlı adamlar var, korkuyorum."
            ],

            [
                "name" => ["/check"],
                "params" => ["Kişi", "Miktar"],
                "description" => "Çek yazmak için kullanılır.",
                "example" => "/check 'Kardelen MoonGiller' 1000"
            ],

            [
                "name" => ["/dropmoney"],
                "params" => ["Miktar"],
                "description" => "Yere belirtiğiniz miktarda para atar.",
                "example" => "/dropmoney 1000"
            ],
            [
                "name" => ["/ekipman"],
                "params" => [null],
                "description" => "Kullandığınız ekipmanları gösterir.",
                "example" => "/ekipman"
            ],

            [
                "name" => ["/job"],
                "params" => ["Metin"],
                "description" => "Oyuncu Karakteriniz altındaki yazıyı değiştirmenizi sağlar",
                "example" => "/job Asayiş Polis Memuru"
            ],

            [
                "name" => ["/write"],
                "params" => ["Yazı"],
                "description" => "Döküman yazmak için kullanılır.",
                "example" => "/write Michael MoonGiller aklı dengesi yerinde değildir."
            ],
            [
                "name" => ["/yazitura"],
                "params" => [null],
                "description" => "Yazı-Tura Atarsınız.",
                "example" => "/yazitura"
            ],
            [
                "name" => ["/zar"],
                "params" => [null],
                "description" => "Zar Atarsınız.",
                "example" => "/zar"
            ],
            [
                "name" => ["!menu"],
                "params" => [null],
                "description" => "Genel menüyü açar.",
                "example" => "!menu"
            ],
            [
                "name" => ["!parti"],
                "params" => [null],
                "description" => "Parti menüsünü açar.",
                "example" => "!parti"
            ],
            [
                "name" => ["!vcmod"],
                "params" => [null],
                "description" => "Araba içerisinde ki kontrolleri kontrol etmek için menü (Şöför koltuğunda olmalısınız)",
                "example" => "!vcmod"
            ],

        ]

    ],
    "Devlet Çalışanı" => [
        "iclass" => "fa-solid fa-walkie-talkie",
        "class" => "darkrplegal",
        "alert" => [
            "class" => "alert-info",
            "text" => "Warrant ve Wanted işlemleri için GBT Tablet kullanmanız önerilir."
        ],
        "commands" => [
            [
                "name" => ["/911"],
                "params" => ["Mesaj"],
                "description" => "911 Hattına mesaj gönderir.",
                "example" => "/911 Karakolda ağır silahlı adamlar var desteğe ihtiyacım var"
            ],
            [
                "name" => ["/t"],
                "params" => ["Mesaj"],
                "description" => "Elinizde Telsizi tutarken Telsizin frekansındaki diğer kişilere mesajınız gönderir.",
                "example" => "/t 92-61 konuşuyor just caddesindeki dönerci önüne takviye unsur talebimiz mevcut efendim"
            ],
            [
                "name" => ["/broadcast"],
                "params" => ["Mesaj"],
                "description" => "Belediye Başkanı iken duyuru gönderir.",
                "example" => "/broadcast Artan suç nedeniyle sokağa çıkma yasağı başlatılacaktır."
            ],
            [
                "name" => ["/lockdown"],
                "params" => [null],
                "description" => "Belediye Başkanı iken sokağa çıkma yasağı başlatır.",
                "example" => "/lockdown"
            ],
            [
                "name" => ["/unlockdown"],
                "params" => [null],
                "description" => "Belediye Başkanı iken sokağa çıkma yasağını bitirir.",
                "example" => "/unlockdown"
            ],
            [
                "name" => ["/lottery"],
                "params" => [null],
                "description" => "Belediye Başkanı iken piyango başlatmak için kullanılır.",
                "example" => "/lottery"
            ],
            [
                "name" => ["/warrant"],
                "params" => ["Kişi", "Sebep"],
                "description" => "Aranma izni çıkarmak için kullanılır.",
                "example" => "/warrant 'Micheal MoonGiller' 'Yasadışı Madde Şüphesi'"
            ],
            [
                "name" => ["/unwarrant"],
                "params" => ["Kişi"],
                "description" => "Aranma iznini iptal etmek için kullanılır.",
                "example" => "/unwarrant 'Micheal MoonGiller'"
            ],
            [
                "name" => ["/wanted"],
                "params" => ["Kişi", "Sebep"],
                "description" => "İllegal eylem sergilediği kesinleşen oyuncu için kullanılır.",
                "example" => "/wanted 'Hasan MoonGiller' 'Banka Soygunu'"
            ],
            [
                "name" => ["/unwanted"],
                "params" => ["Kişi"],
                "description" => "Aranıyor iptal etmek için kullanılır.",
                "example" => "/unwanted 'Micheal MoonGiller'"
            ],
            [
                "name" => ["/baskin"],
                "params" => [null],
                "description" => "Baskın başlatır.",
                "example" => "/baskin"
            ],
            [
                "name" => ["/baskinbitir"],
                "params" => [null],
                "description" => "Baskını bitirir.",
                "example" => "/baskinbitir"
            ],
        ]
    ],
    "Esnaf ve Siviller" => [
        "iclass" => "fa-solid fa-scale-balanced",
        "class" => "darkrpesnaf",
        "commands" => [
            [
                "name" => ["/balikbug"],
                "params" => [null],
                "description" => "Balıkçıda Oltanız Bug girdiğinde kullanabilceğiniz komut.",
                "example" => "/balikbug"
            ]
        ]
    ],
    "Yasadışı Organizasyonlar" => [
        "iclass" => "fa-solid fa-user-tie",
        "class" => "darkrpillegal",
        "commands" => [
            [
                "name" => ["/channel"],
                "params" => ["Numara"],
                "description" => "Kanalınızı belirtiğiniz numara ile değiştirir.",
                "example" => "/channel 5"
            ],
            [
                "name" => ["/radio"],
                "params" => ["Mesaj"],
                "description" => "Bulunduğunuz kanala mesaj gönderir.",
                "example" => "/radio Burada hareketlilik var"
            ],
            [
                "name" => ["/mug"],
                "params" => [null],
                "description" => "Oyun içerisinde oyuncu soymak için kullanılır.",
                "example" => "/mug"
            ],
            [
                "name" => ["/soygun"],
                "params" => [null],
                "description" => "Oyun içerisinde soygun başlatmak için kullanılır. (Arama çalma, illegal baskını)",
                "example" => "/soygun"
            ],
            [
                "name" => ["/soygunbitir"],
                "params" => [null],
                "description" => "Oyun içerisinde soygun bitirmek için kullanılır.",
                "example" => "/soygunbitir"
            ],
            [
                "name" => ["!asay isyan", "@isyan"],
                "params" => [null],
                "description" => "Sokağa çıkma yasağında isyan etmek için kullanılır.",
                "example" => "!asay isyan"
            ],
            [
                "name" => ["!asay +1", "@+1"],
                "params" => [null],
                "description" => "Toplu eylemlerde eylem gerçekleştirdiğinizi belirtmek için kullanılır.",
                "example" => "!asay +1"
            ],
            [
                "name" => ["!dondur"],
                "params" => [null],
                "description" => "Para Basma Makineleri, Saksılarınızı dondurur. <b>Dondurmayı geri açmanın komutu bulunmamaktadır.</b>",
                "example" => "!dondur"
            ],
        ]
    ]
];
$darkrpCity = [
    [
        "image" => "$baseUrl/assets/image/darkrp_belediye.jpg",
        "title" => "Belediye Binası",
        "description" => "Belediye binamızda, belediye başkanının odası, savcı ve hâkim odaları, Yargı Salonu ve MİT karakolu bulunmaktadır. Ayrıca kimlik değiştirme ve başkan adayı olma işlemleri için gerekli NPC'ler de burada mevcuttur."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_yenidukkan.jpg",
        "title" => "Yeni Dükkan",
        "description" => "Belediye Binasının ve Etüt Merkezin Arkasında Bulunan bu yapı da Esnaf rolleri yapabilirsiniz."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_pd.jpg",
        "title" => "Polis Karakolu",
        "description" => "Polis karakolumuz, güvenliğin sağlandığı ve suçla mücadele için önemli bir merkezdir. Karakol binamızda, alt katta bulunan hapishane ve sorgu odası ile birlikte suçluların tutulduğu ve sorgulandığı alanlar mevcuttur. Bu birimlerde, adaletin sağlanması için gerekli işlemler titizlikle gerçekleştirilmektedir. Ayrıca Teçhizat Dolabını kullanma belgesi buradaki NPC ile alınabilir."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_etut.jpg",
        "title" => "Etüt Merkezi",
        "description" => "Geçici olarak öğrenme becerilerinizi artıracak unsurlar tam da burada; bir göz atmalısınız."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_sirket1.jpg",
        "title" => "Şirket #1",
        "description" => "Genellikle baron ve sefirin toplu aktiviteler yürüttüğü mekandır."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_nobetcieczane.jpg",
        "title" => "Nöbetçi Eczane",
        "description" => "Şehirde eczacı bulunmadığında, 7/24 hizmet veren bio-organ ve seviyeli ilaç temin edebileceğiniz bir noktadır."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_moonshop.jpg",
        "title" => "MoonShop",
        "description" => "Kutu açmak için anahtarı, kadın NPC'sini aksesuar takıp çıkarmak için ortadaki NPC'yi ve karakterinizin birkaç özelliğini değiştirmek için dolabı MoonShop'u kullanabilirsiniz."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_banka.jpg",
        "title" => "Banka",
        "description" => "Oyuncuların para işlemlerini gerçekleştirebileceği, para yatırma ve çekme işlemlerini yapabileceği ve deponuza eşyalarınızı koyabileceğiniz mekandır. Dikkatli olun, içeride bankadan para çalanlar olabilir."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_npc_yemek.jpg",
        "title" => "Restoran",
        "description" => "Restoran, açlığınızı ve susuzluğunuzu gidermek için gerekli yiyecek ve içecekleri temin edebileceğiniz bir mekandır. Burada NPC'ler aracılığıyla sipariş vererek lezzetli yemeklerin tadını çıkarabilirsiniz."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_plaza.jpg",
        "title" => "Plaza/Gazino",
        "description" => "Burada oda kiralayıp Bitki yetiştiriciliği gibi aktiviteler gerçekleştirebilirsiniz. Ayrıca girişte bir gazino bulunmaktadır.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_mekanik.jpg",
        "title" => "Mekanik",
        "description" => "Araçların tamir ve modifikasyon işlemlerinin yapıldığı bir mekandır. Burada, oyuncular araçlarını tamir ettirip, çeşitli parçaları değiştirerek performanslarını artırabilirler. Ayrıca, aracın hasar durumunu kontrol etmek ve gerektiğinde bakım yapmak için de hizmet vermektedir."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_sirket2.jpg",
        "title" => "Şirket #2",
        "description" => "Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_saatkulesi.jpg",
        "title" => "Saat Kulesi",
        "description" => "Genellikle baron ve sefirin toplu aktiviteler yürüttüğü mekandır."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_sevgiapartmani.jpg",
        "title" => "Sevgi Apartmanı",
        "description" => "Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_aileapartmani.jpg",
        "title" => "Aile Apartmanı",
        "description" => "Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_galeri.jpg",
        "title" => "Galeri",
        "description" => "Burada her seviyeye uygun arabalar bulunmaktadır. Ayrıca biraz daha ilerisinde aracınızı çıkartabileceğiniz NPC mevcuttur."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_ormanalani.jpg",
        "title" => "Orman Bölgesi/Maden Alanı",
        "description" => "Buradaki evleri kiralayıp bitki yetiştirme vb. aktiviteler yürütebilirsiniz. Ayrıca maden alanı da burada yer almaktadır.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_poh.jpg",
        "title" => "Polis Özel Harekat Karakolu",
        "description" => "Polis Özel Harekat birimlerinin görev yaptığı, suçla mücadele ve güvenlik sağlama amacıyla faaliyet gösterdiği önemli bir merkezdir. Burada, özel eğitimli ekipler, acil durumlar için hazırlıklı olarak görev yapmaktadır."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_hastane.jpg",
        "title" => "Hastane",
        "description" => "ATT ve doktorun bulunduğu alan. Ayrıca buradaki NPC ile reçeteli/reçetesiz ilaç temin edebilirsiniz."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_luksgaleri.jpg",
        "title" => "Lüks Galeri",
        "description" => "Üst segment arabaların yer aldığı galeridir."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_fabrikalar.jpg",
        "title" => "Fabrikalar",
        "description" => "Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır. Aynı zamanda araç hurdalığı burada yer almaktadır.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_benzinlik.jpg",
        "title" => "Benzinlik",
        "description" => "Buradan benzin alabilir, deponuza eşya koyabilir veya benzin soygunu yapabilirsiniz. Biraz ilerisinde ganyan bayii bulunmaktadır, orayı da göz atmayı unutmayın."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_jandarmakarakol.jpg",
        "title" => "Jandarma Karakolu",
        "description" => "Jandarma Genel Komutanlığı'na bağlı birimlerin faaliyet gösterdiği, asayişin sağlandığı ve suçların önlenmesi için görev yapan önemli bir merkezdir. Burada, jandarma ekipleri, kırsal alanlarda güvenlik hizmeti sunmakta ve vatandaşların güvenliğini sağlamaktadır."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_gol.jpg",
        "title" => "Göl",
        "description" => "Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır. Ayrıca balıkçı mesleğine geçip burada balık tutabilirsiniz.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_keke.jpg",
        "title" => "KEKE Köyü",
        "description" => "Yasadışı işler yapanların ortak noktasıdır. Dikkatli olun, her an kendinizi bayılmış bir vaziyette bulabilirsiniz."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_baronfabrika.jpg",
        "title" => "Baron Fabrikası",
        "description" => "Baronun işlerini yürüttüğü çalışma noktası."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_avm.jpg",
        "title" => "AVM",
        "description" => "MoonCity simgesi olan AVM'de yapabileceğiniz bir şey yok maalesef."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_yenifabrikalar.jpg",
        "title" => "Yeni Fabrikalar",
        "description" => "Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_nisantasi.jpg",
        "title" => "Nişantaşı",
        "description" => "Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_ciftlik.jpg",
        "title" => "Çiftlik",
        "description" => "Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_ada_sivri.jpg",
        "title" => "Sivri Ada",
        "description" => "Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_ada_heybeli.jpg",
        "title" => "Heybeli Ada",
        "description" => "Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır.",
        "basealert" => true
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_korsan.jpg",
        "title" => "Korsan Bölgesi",
        "description" => "Yasadışı işler yapanların ortak noktasıdır. Dikkatli olun, her an kendinizi bayılmış bir vaziyette bulabilirsiniz."
    ],
    [
        "image" => "$baseUrl/assets/image/darkrp_ada_bilim.jpg",
        "title" => "Bilim Adası",
        "description" => "Bilim adamına aittir. Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır.",
        "basealert" => true
    ]
];
$darkrpPhoneApps = [
    [
        "name" => "Genel Bilgilendirme",
        "image" => "$baseUrl/assets/image/darkrp_telefon.png",
        "description" => [
            "Karakterinizin birinci silah slotunda yer almaktadır.",
            "Fare ile telefonda gezinebilirsiniz. Eğer fareyi oynattığınızda karakteriniz hareket ediyorsa, sol tıklamaya basıp tekrar deneyiniz.",
            "Karakterinizi tekrar hareket ettirmek için telefonu ekranın dışına doğru sürükleyiniz."
        ],
        "first" => true,
    ],
    [
        "name" => "Kamera",
        "image" => "$baseUrl/assets/image/darkrp_telefon_kamera.png",
        "description" => [
            "Oyun içerisinde fotoğraf çekmenizi sağlar.",
            "<i class=\"fa-solid fa-rotate-right\"></i> resmine basarak kameranızın ön kemaraya ve ya arka kameraya çevirebilirsiniz.",
        ],
    ],
    [
        "name" => "Galeri",
        "image" => "$baseUrl/assets/image/darkrp_telefon_galeri.png",
        "description" => [
            "Çektiğiniz fotoğraflar burada yer almaktadır.",
            "<i class=\"fa-solid fa-arrow-up-from-bracket\"></i> simgesine basarak X'e (eski adıyla Twitter) yüklemek üzere buluta yükleyebilirsiniz.",
        ],
    ],
    [
        "name" => "X (Twitter)",
        "image" => "$baseUrl/assets/image/darkrp_telefon_twitter.png",
        "description" => [
            "Oyun içi sosyal medya platformudur. Konuşulan paylaşılan içerikler IC olarak değerlendirilir.",
            "<i class=\"fa-solid fa-paperclip\"></i> simgesine basarak buluttaki fotoğrafını paylaşabilirsin.",
            "<i class=\"fa-regular fa-paper-plane\"></i> simgesine basarak yazdığın mesajı gönderebilirsin.",
        ],
    ],
    [
        "name" => "Papara",
        "image" => "$baseUrl/assets/image/darkrp_telefon_papara.png",
        "description" => [
            "ATM Gitmeden dakikalar içinde arkadaşına para gönderebilirsin.",
            "Buradan ayrıca bankadaki paranı kontrol edebilirsin!",
        ],
    ],
    [
        "name" => "Mesajlar",
        "image" => "$baseUrl/assets/image/darkrp_telefon_mesajlar.png",
        "description" => [
            "Arkadaşınıza buradan mesaj gönderebilir ve ya arıyabilirsiniz.",
            "Arkadaşınızı aramadan önce mesajlara girip daha sonra <i class=\"fa-solid fa-phone\"></i> resmine tıklamalısınız",
        ],
    ],
    [
        "name" => "Borsa",
        "image" => "$baseUrl/assets/image/darkrp_telefon_borsa.png",
        "description" => [
            "Canlı borsa takibi yapabilirsiniz.",
            "BTC, AVAX, ETH , USDT, DOGE, SOL canlı olarak telefondan takip edebileceksin!",
        ],
    ],
    [
        "name" => "Hesap Makinesi",
        "image" => "$baseUrl/assets/image/darkrp_telefon_hesapmak.png",
        "description" => [
            "Basit matematik işlemleri gerçekleştirebilirsiniz.",
            "Toplama, çıkarma, çarpma , bölme gibi işlemler yapmak daha kolay artık!",
        ],
    ],
    [
        "name" => "Ayarlar",
        "image" => "$baseUrl/assets/image/darkrp_telefon_ayarlar.png",
        "description" => [
            "Telefonun renk ayarlarını buradan değiştirebilirsiniz.",
        ],
    ],
];

$darkrpPaidJobs = [
    "Komisyoncu" => [
        "description" => "Bilim adamı olmak için sınava giren vatandaşlardan komisyon alıyorsun. Bu sayede, gelirini artırabilirsin.",
    ],
    "Vergi Rekortmeni" => [
        "description" => "Vergi ödenen her şeyden komisyon alıyorsun. Bu sayede, gelirini artırabilirsin.",
    ],
    "Premium Galeri Sahibi" => [
        "description" => "Premium araç galerisindeki NPC'lerden komisyon alarak para kazanıyorsun.",
    ],
    "Etüt Merkezi Sahibi" => [
        "description" => "Etüt Merkezindeki NPC'lerden komisyon alıyorsun.",
    ],
    "Eczane Sahibi" => [
        "description" => "Nöbetçi eczanedeki NPC'den komisyon alarak sağlık sektöründe yer alıyorsun.",
    ],
    "Garaj Sahibi" => [
        "description" => "Galeride araç çıkarma sırasında kesilen vergiden komisyon alıyorsun.",
    ],
    "Galeri Sahibi" => [
        "description" => "Galerideki NPC'lerden komisyon alarak aracını satıyorsun.",
    ],
    "Gazino Sahibi" => [
        "description" => "Gazinodaki faaliyetlerden komisyon alıyorsun ve eğlence dünyasında yer alıyorsun.",
    ],
    "Kuyumcu" => [
        "description" => "Kendi Döviz NPC'sinden yapılan alım/satım işlemlerinde komisyon kazanıyorsun.",
    ],
    "Moonexchange Sahibi" => [
        "description" => "Bankadaki döviz NPC'sinden yapılan alım/satım işlemlerinden komisyon alıyorsun.",
    ],
    "İhaleci" => [
        "description" => "MoonCity ihaleler düzenler. Kendi NPC aracılığıyla Kirli dolarları temizleyerek kazanç elde ediyorsun.",
        "dolar" => true,
    ],
    "Gece Kulübü Sahibi" => [
        "description" => "Gece kulübündeki NPC'lerden komisyon alıyor ve aynı zamanda Kirli dolarları temizliyorsun.",
        "dolar" => true,
    ],
    "Hastane Sahibi" => [
        "description" => "Doktor NPC'den komisyon alarak sağlık sektöründe yer ediniyorsun.",
    ],
    "Emlakçı" => [
        "description" => "MoonCity Kiralardan komisyon alıyorsun ve Kirli dolarları temizleyerek kazanç elde ediyorsun.",
        "dolar" => true,
    ],
    "Sigortacı" => [
        "description" => "MoonCity halkının sigorta poliçeleriyle ilgileniyorsun. Ayrıca Kirli dolarları temizleyerek kazanç elde ediyorsun.",
        "dolar" => true,
    ],
    "Lojistik" => [
        "description" => "MoonCity lojistik yardımını sen sağlıyorsun. Ayrıca Kirli dolarları temizleyerek kazanç elde ediyorsun.",
        "dolar" => true,
    ],
    "Ekspertiz" => [
        "description" => "Araçların son durumlarını inceleyip rapor oluşturuyorsun. Ayrıca Kirli dolarları temizleyerek kazanç elde ediyorsun.",
        "dolar" => true,
    ],
    "Balıkçı" => [
        "description" => "Balık NPC'den komisyon alarak deniz ürünleri ticareti yapıyorsun.",
    ],
    "Doğal Kaynaklar İşletmesi Sahibi" => [
        "description" => "Madenlerdeki NPC'lerden komisyon alıyorsun.",
    ],
    "Moonshop Dükkanı Sahibi" => [
        "description" => "Moonshop içindeki NPC'den ve dolaptan komisyon alıyorsun.",
    ],
    "Restoran Sahibi" => [
        "description" => "Yemek NPC'lerinden komisyon alarak gıda sektöründe yer alıyorsun.",
    ],
    "İthalci" => [
        "description" => "MoonCity, yerli malı geliştirmeye katkı sağlıyor ve bu ürünleri satıyorsun.",
        "ithal" => true,
    ],
    "Botanikçi" => [
        "description" => "Her tür bitkiyi satın alarak bu ürünlerden kazanç sağlıyorsun.",
        "bitki" => true,
    ],
    "Sosyal Medya Sahibi" => [
        "description" => "Sosyal medyada paylaşım yaparken ödenen ücretten komisyon alıyorsun.",
    ],
    "Benzinlik Sahibi" => [
        "description" => "Benzinlikteki NPC'den komisyon alıyorsun.",
    ],
    "Reklamcı" => [
        "description" => "/reklam komutunu kullanıldığında ödenen vergiden komisyon alıyorsun.",
    ],
    "Mekanik Sahibi" => [
        "description" => "Mekanikteki NPC'den komisyon alıyorsun.",
    ],
    "Güzellik Salonu Sahibi" => [
        "description" => "Artık MoonCity'de bir güzellik salonun var! Ayrıca, kirli dolarları temizlemeden kazanç sağlıyorsun.",
        "dolar" => true,
    ],
    "Yatırım Danışmanı" => [
        "description" => "Yatırımda o kadar ustasın ki bu deneyimini insanlarla paylaşıyorsun. Ayrıca, kirli dolarları temizlemeden kazanç sağlıyorsun.",
        "dolar" => true,
    ],
    "Polis Tedarikçisi" => [
        "description" => "Polis karakolundaki NPC'den komisyon alıyorsun.",
    ],
    "Taksi Durağı Sahibi" => [
        "description" => "Taksi NPC'den komisyon alıyor ve taksi durağının sahibi oluyorsun.",
    ],
    "Depo Sahibi" => [
        "description" => "Envanterden depoya eşya atıldığında vergiden komisyon alıyorsun.",
    ],
    "Muhasebeci" => [
        "description" => "MoonCity'nin en büyük şirketlerinden birinde muhasebecilik yapıyorsun. Ayrıca, kirli dolarları temizlemeden kazanç sağlıyorsun.",
        "dolar" => true,
    ]
];
// "vip" => 1 --> VIP
// "vip" => 2 --> VIP+
// "requirejobs" => [ARRAY] --> Nasıl bu mesleğe geçebilirim?
// "requireORjobs" => [ARRAY] --> Nasıl bu mesleğe geçebilirim? [, yerine veya ekler]
// "close" => true --> Bu Mesleğe geçemezsiniz.
// "whitelist" => true --> Bu meslek whitelistlidir. Daha fazla bilgi için Sıkça Sorulan Sorular - Başvurular bakınız.

// "gunshop" => true --> [ Silah dükkanı olduğunu belirtir. ]

// "printer" => true --> [ Para basma makinesi olduğunu belirtir. ]
// "bitki1" => true --> [ 1. Seviye Bitki olduğunu belirtir. ]
// "bitki2" => true --> [ 2. Seviye Bitki olduğunu belirtir. ]
// "bitki3" => true --> [ 3. Seviye Bitki olduğunu belirtir. ]

$darkrpJobs = [
    "legal" => [
        "name" => "Devlet Çalışanları",
        "jobs" => [
            [
                'title' => "Belediye İşçisi",
                'description' => "MoonCity’de her türlü arızayı gidermekle yükümlü devlet çalışanısın; şehrin gizli kahramanlarından biri!",
                'requirejobs' => null,
            ],
            [
                'title' => "Zabıta",
                'description' => "Şehirde düzeni sağlamak ve halk sağlığını korumak için görev yapıyorsun; sokakların gözü kulağısın!",
                'requirejobs' => null,
            ],
            [
                'title' => "Zabıta Amiri",
                'description' => "Ekipleri yönetip şehrin düzenini koruyorsun; vatandaşların haklarının güvencesi sensin. ",
                'requirejobs' => ["Zabıta"],
            ],
            [
                'title' => "Bekçi",
                'description' => "Gece ve gündüz devriye atarak güvenliği sağlıyorsun; olası tehlikelere karşı her an tetikte bekliyorsun. Asayiş Polis Amirini dinlemek zorundasın!",
                'requirejobs' => ["Güvenlik Görevlisi"],
            ],
            [
                'title' => "Gardiyan",
                'description' => "Polis karakolundaki hapishanede güvenliği sağlamakla görevli bir güvenlik görevlisisin. Asayiş Polis Amirini dinlemek zorundasın; senin gözün her şeyde!",
                'requirejobs' => null,
            ],
            [
                'title' => "Trafik Polis Memuru",
                'description' => "Şehir içinde yolların güvenliğini sağlamak, trafik akışını düzenlemek ve sürücülerin kurallara uymasını denetlemekle görevli birisin. Trafik Polis Amirini dinlemek zorundasın; eğer o yoksa Asayiş Polis Amirinin sözünü dinlemen gerekiyor.",
                'requirejobs' => ["Bekçi"],
            ],
            [
                'title' => "Trafik Polisi Amiri",
                'description' => "Trafik düzenini sağlamak için ekipleri yönetiyor, kazaların önlenmesi ve sürücülerin güvenliğinin artırılması için stratejiler geliştiriyorsun. Emniyet Genel Müdürünü dinlemek zorundasın.",
                'requirejobs' => ["Trafik Polis Memuru"],
            ],
            [
                'title' => "Yunus Polisi",
                'description' => "Hızlı müdahale ve devriye görevleriyle suç öncesi ve sonrası güvenliği sağlamakla sorumlusun. Motorlu devriye ekiplerinin bir parçası olarak sokaklarda her an hazır bekliyorsun. Asayiş Polis Amirini dinlemek zorundasın!",
                'requirejobs' => ["Trafik Polis Memuru"],
            ],
            [
                'title' => "Polis Asayiş Memuru",
                'description' => "Şehir içinde halkın güvenliğini sağlamak, suçları önlemek ve toplumsal düzeni korumak için aktif olarak devriye gezen bir güvenlik görevlisisin. Sokaklarda her an güvenliği sağlamakla görevlisin!",
                'requirejobs' => ["Trafik Polis Memuru"],
            ],
            [
                'title' => "Polis Asayiş Amiri",
                'description' => "Polis Asayiş ekiplerinin faaliyetlerini yöneterek, suç önleme stratejileri geliştiriyor ve toplumsal güvenliği artırmak için çalışıyorsun. Emniyet Genel Müdürünü dinlemek zorundasın; liderlik pozisyonunda senin de büyük bir rolün var!",
                'requirejobs' => ["Polis Asayiş Memuru"],
            ],
            [
                'title' => "Sivil Polis",
                'description' => "EGM'ye bağlı olarak illegal bölgelere sızıp bilgi topluyorsun. Bu sırada Polis Asayiş Amirini dinlemek zorundasın; gizli görevlerde bilgi senin en büyük silahın!",
                'requirejobs' => null,
                'vip' => 1
            ],
            [
                'title' => "Polis Özel Harekat Memuru",
                'description' => "Yüksek riskli operasyonlarda yer alarak terörle mücadele ve narkotik operasyonları gibi güvenlik tehditlerine karşı müdahale eden uzman bir güvenlik görevlisisin.",
                'requirejobs' => ["Polis Asayiş Memuru"],
                'whitelist' => true,
            ],
            [
                'title' => "Polis Özel Harekat Köpeği",
                'description' => "Polis özel harekat birimlerinde görev yapan eğitimli bir köpeksin. Acil durumlarda ekip üyelerine destek sağlarken, yaralıları bulma ve kurtarma görevlerinde de rol alıyorsun.",
                'requirejobs' => ["Sokak Köpeği", "Sokak Kedisi"],
            ],
            [
                'title' => "Polis Özel Harekat Doktoru",
                'description' => "Polis özel harekat birimlerinde görev yapan personele tıbbi destek sağlıyorsun. Acil durumlarda yaralıları tedavi ederek operasyon güvenliğine katkıda bulunuyorsun.",
                'requirejobs' => ["Doktor"],
                'whitelist' => true,
            ],
            [
                'title' => "Polis Özel Harekat Bulldozer",
                'description' => "Yüksek riskli operasyonlarda yer alarak terörle mücadele ve narkotik operasyonları gibi güvenlik tehditlerine karşı müdahale eden uzman bir güvenlik görevlisisin.",
                'requirejobs' => ["Polis Özel Harekat Memuru"],
                'whitelist' => true,
            ],
            [
                'title' => "Polis Özel Harekat Keskin Nişancısı",
                'description' => "Yüksek riskli operasyonlarda görev alarak terörle mücadele ve narkotik operasyonlarına karşı müdahale eden bir keskin nişancısın.",
                'requirejobs' => ["Polis Asayiş Memuru"],
                'whitelist' => true,
            ],
            [
                'title' => "Polis Özel Harekat Amiri",
                'description' => "Polis özel harekat ekiplerinin yönetimini üstleniyor, stratejik planlamalar yapıyorsun. Operasyonel başarı için personelinin eğitim ve gelişiminden sen sorumlusun; liderliğinle ekip ruhunu güçlendiriyorsun!",
                'requirejobs' => null,
                'whitelist' => true,
            ],
            [
                'title' => "Acil Tıp Teknisyeni",
                'description' => "MoonCity'de bayılmış insanları hayata döndürmek için çaba gösteriyorsun; acil durumlarda hayat kurtaran kahramanlardansın.",
                'requirejobs' => ["Belediye İşçisi"],
            ],
            [
                'title' => "Doktor",
                'description' => "MoonCity'de bayılmış olanları hayata döndürmekle ve reçete yazmakla görevlisin; sağlık hizmetlerinin vazgeçilmez bir parçasısın.",
                'requirejobs' => ["Acil Tıp Teknisyeni"],
            ],
            [
                'title' => "İtfaiye",
                'description' => "MoonCity'de çıkan yangınları söndürmekle görevli devlet çalışanı olarak, hayat kurtaran bir görev üstleniyorsun.",
                'requirejobs' => ["Belediye İşçisi", "Zabıta"],
            ],
            [
                'title' => "Belediye Başkanı",
                'description' => "MoonCity'nin yerel yönetimini yöneterek kamu hizmetlerini organize eden ve vatandaşların ihtiyaçlarına çözümler üreten lider sensin; şehirdeki toplumsal sorunlara karşı duyarlı bir yaklaşım sergiliyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Belediye Başkanı Yardımcısı",
                'description' => "Belediye Başkanına destek veriyor, onun görevlerini üstlenmesine yardımcı oluyorsun. Yerel yönetim süreçlerinde etkin bir rol oynayarak kamu hizmetlerinin düzenlenmesi ve vatandaşlarla iletişimin sağlanmasında önemli bir görev üstleniyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Hakim",
                'description' => "Adalet sisteminin işleyişini sağlayan ve davaları değerlendirip taraflar arasında adil bir karar veren bir yargı mensubusun. Hukukun üstünlüğünü koruyarak toplumsal düzenin sağlanmasında önemli bir rol üstleniyorsun.",
                'requirejobs' => ["Gardiyan"],
            ],
            [
                'title' => "Savcı",
                'description' => "Suçlamaları yöneten ve davaları takip eden bir hukuk uzmanısın. Adaletin tecelli etmesi için delilleri toplayıp mahkemeye sunarak kamu adına davaları açıyorsun.",
                'requirejobs' => ["Hakim"],
            ],
            [
                'title' => "Emniyet Genel Müdürü",
                'description' => "MoonCity'de güvenlik stratejilerini belirleyerek polis teşkilatının etkinliğini artırmak ve kamu güvenliğini sağlamakla sorumlusun. Tüm polis birimleri senin sözünü dinlemek zorunda; şehrin güvenliği senin elinde!",
                'requirejobs' => null,
                'whitelist' => true,
            ],
            [
                'title' => "Jandarma Özel Harekat Komandosu",
                'description' => "Yüksek riskli görevlerde uzmanlaşmış bir askeri personelsin. Terörle mücadele ve asayiş sağlama gibi kritik operasyonları gerçekleştirmek üzere eğitim aldın.",
                'requireORjobs' => ["Polis Özel Harekat Memuru", "Jandarma Komutanı"],
                'whitelist' => true,

            ],
            [
                'title' => "Jandarma Özel Harekat Doktoru",
                'description' => "Jandarma özel harekat birimlerinde görev yaparak personele tıbbi hizmet sunuyorsun. Acil durumlarda yaralıların tedavisini gerçekleştirip operasyonlarda sağlık güvenliğini sağlıyorsun.",
                'requirejobs' => ["Polis Özel Harekat Doktoru"],
                'whitelist' => true,

            ],
            [
                'title' => "Jandarma Özel Harekat Komutanı",
                'description' => "Jandarma Özel Harekat biriminin yönetiminden sorumlusun; operasyonel stratejileri belirleyerek ekibinin etkinliğini artırmak için liderlik yapıyorsun. Ekip arkadaşlarının güvenliği ve başarısı senin elinde!",
                'whitelist' => true,

            ],
            [
                'title' => "Milli Istihbarat Teskilatı Personeli",
                'description' => "Çeşitli birimlerde görev alarak ulusal güvenliği sağlamak için istihbarat toplama, analiz yapma ve operasyonel faaliyetlerde bulunan uzmanlardan birisin.",
                'requirejobs' => ["Sivil Polis"],
                'vip' => 2
            ],
            [
                'title' => "Milli Istihbarat Teskilatı Müsteşarı",
                'description' => "Milli İstihbarat Teşkilatı'nın en üst düzey yöneticisi olarak teşkilatın stratejik hedeflerini belirliyor ve operasyonlarını yönetiyorsun. Devletin güvenlik politikalarına yön vermekle sorumlusun; ulusal güvenlik için kritik bir rol oynuyorsun!",
                'requirejobs' => null,
                'whitelist' => true,
                'vip' => 2
            ],
            [
                'title' => "Jandarma",
                'description' => "Şehir dışında halkın güvenliğini sağlamak, suçları önlemek ve toplumsal düzeni korumak için devriye gezen bir güvenlik görevlisisin. Aktif bir şekilde görev alarak insanları koruma misyonunu üstleniyorsun.",
                'requirejobs' => ["Jandarma Trafik"],
            ],
            [
                'title' => "Jandarma Trafik",
                'description' => "Şehir dışında yolların güvenliğini sağlamakla, trafik akışını düzenlemekle ve sürücülerin kurallara uymasını denetlemekle sorumlusun. Trafikteki düzeni sağlamak için sürekli dikkatli olmalısın.",
                'requirejobs' => ["Polis Asayiş Memuru"],
            ],
            [
                'title' => "Jandarma Komutanı",
                'description' => "Jandarma ve jandarma trafik personelinin faaliyetlerini yöneterek suç önleme stratejileri geliştiriyor ve toplumsal güvenliği artırmak için çalışmalar yürütüyorsun. Liderlik becerilerinle ekibin başarısını sağlıyorsun. ",
                'requirejobs' => ["Polis Asayiş Amiri", "Jandarma"],
            ],
            [
                'title' => "Belediye Başkanı Koruması",
                'description' => "MoonCity'de belediye başkanını korumakla görevlisin; güvenlik sağlamak için her zaman tetikte olmalısın. Önemli bir sorumluluğun var!",
                'requirejobs' => ["Jandarma"],
            ],
            [
                'title' => "Belediye Başkanı Şoförü",
                'description' => "MoonCity'de belediye başkanının şoförlüğünü yapmakla görevlisin; onu güvenli bir şekilde her yere ulaştırmak için hazırda bekliyorsun. Sorumluluğun büyük!",
                'requirejobs' => ["Taksici"],
            ],
        ]
    ],
    "esnaf" => [
        "name" => "Esnaf ve Siviller",
        "jobs" => [
            [
                'title' => "Güvenlik Görevlisi",
                'description' => "Sen, bulunduğun yerde güvenliği sağlamakla görevlisin. Potansiyel tehlikeleri önceden sezip, olaylara hemen müdahale ediyorsun. İnsanların ve mülklerin güvenliği için elinden geleni yapıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Yapı Market Sahibi",
                'description' => "Fiziksel ve aletlerle donatılmış bir mağazanın sahibisin. Çeşitli inşaat ve güvenlik malzemelerini satarken, müşteri ihtiyaçlarını anlamak için sürekli bir çaba içindesin.",
                'requirejobs' => null,
            ],
            [
                'title' => "Poligon Sahibi",
                'description' => "Atış eğitimleri veren bir poligon işletiyorsun. Silah satışından, güvenli bir atış ortamı sağlamaya kadar birçok işle ilgileniyorsun. Ayrıca atış kursları düzenleyerek insanların becerilerini geliştirmelerine yardım ediyorsun.",
                'requirejobs' => null,
                'gunshop' => true,
            ],
            [
                'title' => "Çiğköfte Salonu Sahibi",
                'description' => "Lezzetli çiğköfteleri hazırlayıp sunarak, müşterilerine hijyenik ve keyifli bir ortamda hizmet vermeyi hedefliyorsun. Her lokmada damak tadını yakalamak için özen gösteriyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Garson",
                'description' => "Bir restoran veya kafede, sipariş alıp servis yaparak misafirlerin memnuniyetini sağlamaya çalışıyorsun. Gıda güvenliği ve hijyen konularına dikkat ederek, herkesin hoş bir deneyim yaşamasını sağlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "İtalyan Restoranı Sahibi",
                'description' => "İtalyan mutfağının lezzetlerini sunan bir restoranın sahibisin. Geleneksel tariflerle oluşturduğun menü, müşterilere unutulmaz bir yemek deneyimi yaşatmak için tasarlandı.",
                'requirejobs' => null,
            ],
            [
                'title' => "AVM Sahibi",
                'description' => "Farklı mağaza ve restoranları bir araya getiren bir alışveriş merkezinin sahibisin. Ziyaretçilere çeşitli alışveriş ve eğlence imkanı sunarken, AVM'nin yönetimini de üstleniyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Eczacı",
                'description' => "Hastaların sağlık ihtiyaçlarına yönelik ilaçlar sunuyorsun. Bio-organ ve Recoil gibi ürünlerle, sağlık konularında yardımcı olmayı amaçlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Simitçi",
                'description' => "Taze simitler ve diğer unlu mamuller üreterek, sokak lezzetleri sunuyorsun. Müşterilerin her zaman sıcak ve çıtır simitlerle mutlu olmasını sağlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Tavuk Pilavcı",
                'description' => "Lezzetli taze tavuk ve pilav sunarak, misafirlere doyurucu bir yemek deneyimi sağlıyorsun. Hızlı ve kaliteli hizmetinle, herkesin keyif almasını hedefliyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Kebapçı",
                'description' => "Çeşitli kebap çeşitlerini hazırlayıp sunarak, misafirlerine geleneksel Türk mutfağının tadını çıkarma fırsatı veriyorsun. Her kebapta ustalığını konuşturuyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Kafe Sahibi",
                'description' => "Kahve, çay ve atıştırmalıklar sunan bir kafenin sahibisin. Sıcak ve samimi bir ortam yaratmaya çalışarak, sosyal bir buluşma yeri olmayı hedefliyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Hamburgerci",
                'description' => "Taze malzemelerle hazırladığın hamburgerleri müşterilerine sunuyorsun. Her burgerde, lezzetli ve doyurucu bir deneyim yaşatmayı amaçlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Dönerci",
                'description' => "Döner kebap hazırlayıp sunarak, misafirlerine hızlı ve doyurucu bir yemek deneyimi yaşatıyorsun. Her lokmada lezzeti hissettirmeyi amaçlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Dondurmacı",
                'description' => "Farklı dondurma çeşitleri sunarak, yaz aylarında serinletici lezzetler sağlıyorsun. Taze ve doğal dondurmalarla müşteri memnuniyetini sağlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Çorba & Paça Salonu Sahibi",
                'description' => "Lezzetli çorba ve paça yemekleri sunarak, sıcak ve besleyici bir deneyim yaşatıyorsun. Geleneksel tatları yaşatmayı amaçlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Büfe Sahibi",
                'description' => "Atıştırmalıklar ve içecekler sunan küçük bir işletmenin sahibisin. Hızlı hizmetle, müşterilerin temel ihtiyaçlarını karşılamaya çalışıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Dövüş Sanatları Öğretmeni",
                'description' => "Öğrencilere dövüş sanatlarını ve savunma tekniklerini öğretmekle görevlisin. Fiziksel ve zihinsel gelişimi destekleyerek, öğrencilerin kendine güven kazanmasını sağlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Mekanik",
                'description' => "Araçların bakım ve onarımıyla ilgileniyorsun. Mekanik bilgi ve becerilerinle, sorunları hızlı bir şekilde çözmeye çalışıyorsun.",
                'requirejobs' => null,
                'vip' => 2
            ],
            [
                'title' => "Mühendis",
                'description' => "Farklı alanlarda mühendislik yaparak, yaratıcı çözümler üretiyorsun. Teknik sorunları çözmek için çok yönlü düşünme yeteneğinle projeler geliştiriyorsun.",
                'requirejobs' => ["Yapı market sahibi", "Poligon Sahibi"],
                'vip' => 2
            ],
            [
                'title' => "Taksici",
                'description' => "Müşterileri belirli noktalardan alıp istedikleri yere götürüyorsun. Güvenli ve konforlu bir ulaşım sağlamak için trafiği ve güzergahları iyi biliyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Dolmuş Şoförü",
                'description' => "Belirli bir rota üzerinde yolcu taşıyarak, uygun fiyatlarla ulaşım imkanı sunuyorsun. Toplu taşımaya katkıda bulunarak, insanların hayatlarını kolaylaştırıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Kargocu",
                'description' => "Çeşitli yerlerden gelen paketleri alıcılara ulaştırıyorsun. Kargo teslimatı yaparak, müşteri memnuniyetini sağlamayı ön planda tutuyorsun.",
                'requirejobs' => ["Kurye"],
            ],
            [
                'title' => "Maden İşçisi",
                'description' => "Maden ocaklarında çalışarak, madenleri çıkarmakla görevli birisin. İş güvenliği kurallarına dikkat ederek, zorlu koşullarda çalışıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Kereste İşçisi",
                'description' => "Ağaçları kesip kereste haline getiriyorsun. Kereste üretiminde çeşitli makineleri kullanarak kaliteli ahşap ürünler elde ediyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Doğal Kaynaklar Mühendisi",
                'description' => "Doğal kaynakların verimli kullanımını sağlamak için modern ekipmanlarla çalışıyorsun. Çevresel etkileri azaltarak, sürdürülebilir çözümler geliştiriyorsun.",
                'requirejobs' => ["Maden İşçisi", "Kereste İşçisi"],
            ],
            [
                'title' => "Doğal Kaynaklar Yüksek Mühendisi",
                'description' => "Doğal kaynakların verimli kullanımını sağlamak için modern ekipmanlarla çalışıyorsun. Çevresel etkileri azaltarak, sürdürülebilir çözümler geliştiriyorsun.",
                'requirejobs' => ["Maden İşçisi", "Kereste İşçisi"],
                'vip' => 2
            ],
            [
                'title' => "Ganyan Bayi Sahibi",
                'description' => "At yarışları üzerine bahis alarak gelir elde eden bir işletme sahibisin. Yarışları takip ediyor ve müşterilere bahis imkanı sunuyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Banka Sorumlusu",
                'description' => "Moon Bank'ta çalışan bir uzmansın. Müşteri taleplerine yanıt veriyor, hesapları yönetiyor ve bankanın kasasını koruyarak güvenliği sağlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "İthalatçı",
                'description' => "Yurtdışından ürünlerin ithalatını yapıyorsun. Daha geniş bir ürün yelpazesine sahip olmak için poligon sahibinden yardım alıyorsun.",
                'requirejobs' => ["Poligon Sahibi"],
                'gunshop' => true,
                'vip' => 2
            ],
            [
                'title' => "Müzisyen",
                'description' => "Müzik besteleme ve icra etme konusunda tutkulu bir sanatçısın. Farklı müzik tarzlarında eserler üreterek dinleyicilere müzik deneyimi sunuyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Dilenci",
                'description' => "Geçim sağlamak için sokaklarda para veya yiyecek talep eden birisin. Genellikle kalabalık yerlerde bulunuyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Kimsesiz Çocuk",
                'description' => "Ailesiz bir çocuksun ve ya bakım kurumunda yaşıyorsun ya da sokaktasın. Sevgi ve destek arayışı içindesin.",
                'requirejobs' => null,
            ],
            [
                'title' => "DJ",
                'description' => "Müzik seti veya bilgisayar kullanarak müzikleri miksleyen birisin. Partilerde eğlenceli atmosferler yaratıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Din Adamı",
                'description' => "Bir dinin inançlarını ve ritüellerini yürütüyorsun. Toplumu bilgilendirip rehberlik yapıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Kaykaycı",
                'description' => "Kaykay kullanarak çeşitli hareketler ve stiller geliştiren birisin. Genellikle sokaklarda, park veya özel alanlarda kayıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Oto Kurtarıcı",
                'description' => "Araçların yolda kalması durumunda yardım sağlayarak onları güvenli bir yere taşıyan bir profesyonelsin. Acil durumlarda sürücülere destek oluyorsun.",
                'requirejobs' => null,
                'close' => true
            ],
            [
                'title' => "Sokak Köpeği",
                'description' => "Sokaklarda yaşayan ve insanlardan bağımsız bir şekilde hayatta kalmaya çalışan bir köpeksin. İnsanlara karşı genellikle dostça bir tutum sergiliyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Sokak Kedisi",
                'description' => "Sokaklarda yaşayan ve beslenme ile barınma ihtiyaçlarını kendi başına karşılayan bir kedisin. İnsanlarla sınırlı bir ilişki kurarak hayatını sürdürüyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Balıkçı",
                'description' => "Küçük bir gölde balık tutarak geçimini sağlıyorsun. Doğayla iç içe, sakin bir yaşam sürüyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Piyangocu",
                'description' => "Piyango biletleri satan birisin. Müşterilere bilet satışı yaparak şans oyunlarıyla kazanç sağlamaya çalışıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Kurye",
                'description' => "Farklı yerlerden gelen paketleri alıcılara ulaştıran bir meslek dalında çalışıyorsun. Zaman baskısı altında çalışarak müşteri memnuniyetini sağlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "MoonTV Çalışanı",
                'description' => "MoonTV kanalı için içerik üreten ya da yayın sürecine katkı sağlayan birisin. Programları düzenleyip çekimlerde yer alıyorsun.",
                'requirejobs' => null,
                'vip' => 1
            ],
            [
                'title' => "İmam",
                'description' => "Dini liderlik yapan, vaazlar vererek insanlara rehberlik eden birisin. Camide veya topluluk içinde insanları bir araya getiriyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Avukat",
                'description' => "Hukuk alanında uzmanlaşmış birisin ve müvekkillerine yasal danışmanlık ile savunma hizmeti sunuyorsun. Mahkeme süreçlerinde müvekkillerini temsil ediyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Tekel Bayi Sahibi",
                'description' => "Alkol ve diğer ürünlerin satışını yapan bir dükkânın sahibisin. Müşterilerine çeşitli ürünler sunarak gelir elde ediyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Parkurcu",
                'description' => "Farklı zeminlerde ve engeller arasında akrobatik hareketler yaparak hızlı bir şekilde ilerleyen birisin. Fiziksel yeteneklerinle dikkat çekiyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Grafitici",
                'description' => "Grafiti sanatıyla sokaklara renk katan bir sanatçısın. Duvarlar veya çeşitli yüzeyler üzerinde yaratıcılığını sergiliyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Sokak Sanatçısı",
                'description' => "Sokaklarda performans sergileyerek insanlara eğlence sunan birisin. Genellikle bağışlarla geçimini sağlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Motel Sahibi",
                'description' => "Misafirlerine konaklama hizmeti sunan küçük bir otelin işletmecisisin. Konukların rahat bir konaklama deneyimi yaşamasını sağlıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Palyaço",
                'description' => "Eğlence ve gösteri amaçlı kostüm giyen, çocuklara ve yetişkinlere neşe katmak için mizah ve yetenek sergileyen birisin. Partilerde ve etkinliklerde performans gösteriyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Piyanist",
                'description' => "Piyano çalarak müzik yapan, konserler veren ya da çeşitli etkinliklerde performans sergileyen bir müzisyensin. Melodiler ve armonilerle dinleyicilere duygusal bir deneyim sunuyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Deve",
                'description' => "Sahibinden kaçan bu deve, şehirde gezerken sokak köpeği ve sokak kedisi gibi serbest bir yaşam sürüyor.",
                'requirejobs' => null,
            ],
            [
                'title' => "Ağır Yaşamlar Vakfı Başkanı",
                'description' => "Aşırı kilolu bir yaşam tarzına sahip, toplumdaki sorunlara karşı duyarsız kalabilen birisin. İyi niyetle hareket etsen de sağlıklı çözümler bulmakta zorlanıyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Ramazan Davulcusu",
                'description' => "Ramazan ayı boyunca sahur vaktinde insanları uyandırmak için davul çalan birisin. Geleneksel bir rol üstlenerek topluma hizmet ediyorsun.",
                'requirejobs' => null,
            ],
            [
                'title' => "Sihirbaz",
                'description' => "Eğlenceli ve ilginç gösterilerle izleyicileri şaşırtan bir sanatçısın. Illüzyon teknikleri kullanarak performans sergiliyorsun.",
                'requirejobs' => null,
            ],
        ]
    ],
    "illegal" => [
        "name" => "Yasadışı Organizasyonlar",
        "jobs" => [
            [
                'title' => "Keko",
                'description' => "Şehirde yeni olan ve yüksek hedefleri bulunan kişilerin başlangıç noktasıdır. Arabalar, yatlar ve villalar hayal değil, birer hedeftir. Unutma ki, tüm suçlar ufak bir şekilde başlar.",
                'requirejobs' => null,
                'printer' => true,
            ],
            [
                'title' => "Çete Üyesi",
                'description' => "Şehirde biraz zaman geçirip temelleri kavradıktan sonra, tebrikler! Artık ufak çetelerle gizli yerlerde kirli dolar kazanmanın tam zamanı.",
                'requirejobs' => ["Keko"],
                'printer' => true,
            ],
            [
                'title' => "Çete Lideri",
                'description' => "Artık arka sokakları tamamen tanıdın. Eskiden senin gibi tecrübesiz gençleri toplayarak bir çete kurmanın tam zamanı. Ne kadar toplu gezmek güvenli hissettirse de, diğer çetelerin ve polislerin dikkatini çekmemeye özen göster.",
                'requirejobs' => ["Çete Üyesi"],
                'printer' => true,
            ],
            [
                'title' => "Mülteci",
                'description' => "Savaş, zulüm veya diğer zorlayıcı koşullar nedeniyle yaşadıkları yerden kaçan ve güvenli bir yaşam arayan bireylerdir. Yeni bir topluma uyum sağlama çabası içindesin ve destek arayışındasın. Ayrıca hayatta kalmak için kirli dolar üretmeye çalışıyorsun; zor bir dönemden geçiyorsun.",
                'requirejobs' => null,
                'printer' => true,
            ],
            [
                'title' => "Mülteci Haklarını Koruma Derneği Başkanı",
                'description' => "Mültecilerin haklarını savunmak ve onlara ihtiyaç duydukları desteği sağlamakla görevli olan derneğin liderisin. Mültecilerin topluma entegrasyonunu sağlamak ve haklarını korumak için çeşitli projeler geliştiriyorsun.",
                'requirejobs' => ["Mülteci"],
                'printer' => true,
            ],
            [
                'title' => "Mafya Üyesi",
                'description' => "Sonunda biraz yaşlandın ve büyüklerin ligine adım attın. Artık basit suçlar ilgini çekmiyor; yeni açılan saksılardan güzel paralar kazanmaya başlayabilirsin.",
                'requirejobs' => ["Çete Üyesi"],
                "bitki1" => true,
            ],
            [
                'title' => "Mafya Babası",
                'description' => "Adı bile yeterli. Bu şehirde mafya babası olmak kolay olmasa da, olduğunda saygınlık beraberinde gelecektir.",
                'requirejobs' => ["Mafya Üyesi"],
                "bitki1" => true,
            ],
            [
                'title' => "Korsan",
                'description' => "Artık şehirde değilsin. Burada kendi kuralların var. Gerçek bir korsan ol ve korsan gibi yaşa.",
                'requirejobs' => ["Mafya Üyesi"],
                'printer' => true,
            ],
            [
                'title' => "Kaptan",
                'description' => "Korsanların başısın. Lüks bir yaşam sürmesen de, kaçak mallarla şehirdekilerden daha rahat bir yaşam sürdüğün kesin.",
                'requirejobs' => ["Korsan"],
                'printer' => true,
            ],
            [
                'title' => "Eşkiya",
                'description' => "Dağa çıkmak kolay olmasa da, burada çok sayıda saksılarınla ürettiğin mahsuller sana iyi bir kazanç sağlayacaktır. Sokağa çıkma yasağında devlete karşı gelerek şehri dar edebilirsin.",
                'requirejobs' => ["Korsan"],
                "bitki1" => true,
                "gunshop" => true,
            ],
            [
                'title' => "Elebaşı",
                'description' => "Köyün ağası sensin. Eşkiyaların emirlerine uymak zorundadır. Eğer biri emrine uymuyorsa, ona ceza vermek senin elindedir. Eşkiyalarınla beraber devlete kafa tutmanın eğlenceli bir yolunu keşfet!",
                'requirejobs' => ["Eşkiya"],
                "bitki1" => true,
                "gunshop" => true,
            ],
            [
                'title' => "Sefir",
                'description' => "MoonCity'nin Sefiri, Baron adına şehirdeki illegal eylemleri yürütmekten sorumludur. İllegaller ona saygı göstermek zorundadır.",
                'requirejobs' => null,
                'whitelist' => true,
            ],
            [
                'title' => "Baron",
                'description' => "Baron illegalin en tepesindeki kişidir. Tüm mafya, çete ve familyalar ona bağlı çalışmaktadır. İllegaller ona saygı göstermek zorundadır.",
                'requirejobs' => null,
                'whitelist' => true,
            ],
            [
                'title' => "Aşiret Üyesi",
                'description' => "Aşiretinin bir üyesi olarak, geçmişin ve geleneklerinle gurur duyuyorsun. Bitki üretimi ve kirli dolar üretimi yaparak, aşiretinin güçlenmesine katkıda bulunuyorsun. Ancak, bu yolda birçok tehlikeyle karşılaşacağının farkındasın.",
                'requirejobs' => ["Eşkiya", "Korsan"],
                'printer' => true,
                "bitki1" => true,
            ],
            [
                'title' => "Aşiret Lideri",
                'description' => "Aşiretin artık senin liderliğinde. Bitki ve kirli dolar üretimi konusundaki deneyimlerinle, diğer aşiretlerle mücadele etmelisin. Sadece gücünü korumakla kalmayacak, aynı zamanda aşiretini de daha ileriye taşımalısın.",
                'requirejobs' => ["Aşiret Üyesi"],
                'printer' => true,
                "bitki1" => true,
            ],
            [
                'title' => "İtalyan Mafya Üyesi",
                'description' => "İtalyan mafyası, gelenekleri ve aile bağlarıyla tanınır. Artık ailenin bir parçasısın ve yeraltı dünyasının sırlarını öğrenmeye başladın. Bitki üretimi ve kirli dolar üretimi yaparak, bu dünyanın tehlikeleriyle yüzleşmeyi öğreniyorsun.",
                'requirejobs' => ["Eşkiya", "Korsan"],
                'printer' => true,
                "bitki1" => true,
            ],
            [
                'title' => "İtalyan Mafya Babası",
                'description' => "Bir mafya babası olarak, gücünü ve otoriteni kanıtlaman gerekecek. Artık sadece Bitki üretmekle kalmayacak, aynı zamanda kirli dolar üretimiyle de ilgileneceksin. Düşmanların her köşede seni bekliyor; bu yüzden dikkatli olmalısın.",
                'requirejobs' => ["İtalyan Mafya Üyesi"],
                'printer' => true,
                "bitki1" => true,
            ],
            [
                'title' => "Rus Mafya Üyesi",
                'description' => "Şehirdeki en güçlü güçlerden birinin parçası olmanın gururunu yaşıyorsun. Rus mafyası, gizlilik ve sadakat üzerine kuruludur. Bitki üretimi yaparak ve kirli dolar basma konusunda yeteneklerinle dikkat çekmeye başladın; artık seni tanıyorlar ve saygı gösteriyorlar.",
                'requirejobs' => ["Eşkiya", "Korsan"],
                'printer' => true,
                "bitki1" => true,
            ],
            [
                'title' => "Rus Mafya Babası",
                'description' => "Bu şehirde Rus mafyasının lideri olmak, büyük bir sorumluluktur. Kendi çeteni kurduktan sonra, düşmanlarınla yüzleşmek zorunda kalacaksın. Bitki üretimi ve kirli dolar üretimi konularında söz sahibi olmanın yanı sıra, düşmanlarına karşı güç gösterileri yapmayı da öğrenmelisin.",
                'requirejobs' => ["Rus Mafya Üyesi"],
                'printer' => true,
                "bitki1" => true,
            ],
            [
                'title' => "Triads Mafya Üyesi",
                'description' => "Triads, tarih ve geleneklerle dolu bir kültüre sahip. Artık bu kültürün bir parçası olarak Bitki üretimi ve kirli dolar üretimi yapıyorsun. Gizli bağlantılarınla, bu karanlık dünyada kendine bir yer edinmeye çalışıyorsun.",
                'requirejobs' => ["Eşkiya", "Korsan"],
                'printer' => true,
                "bitki1" => true,
            ],
            [
                'title' => "Triads Mafya Lideri",
                'description' => "Triads'ın lideri olmak, büyük bir sorumluluktur. Artık sadece kendi çeteni değil, tüm örgütü yönetmek zorundasın. Bitki ve kirli dolar üretimi konusunda uzmanlaşarak, düşmanlarına karşı güçlü bir lider olmalısın. Her kararın, hem seni hem de çetenin kaderini belirleyecek.",
                'requirejobs' => ["Triads Mafya Üyesi"],
                'printer' => true,
                "bitki1" => true,
            ],
            [
                'title' => "Ninja",
                'description' => "Gizli görevlerde uzmanlaşmış, yüksek seviyede dövüş becerilerine sahip bir savaşçısın. Katana ustası olarak bu kılıcınla hızlı ve etkili saldırılar gerçekleştirebiliyorsun. Ayrıca, kirli dolar üretimi yaparak kendi kaynaklarını yaratma konusunda da oldukça beceriklisin. Hem karanlıkta hareket etmekte ustasın, hem de hayatta kalma becerilerinle dikkat çekiyorsun!",
                'requirejobs' => null,
                'vip' => 2,
                'printer' => true,
            ],
            [
                'title' => "Bilim Adamı",
                'description' => "Bilime adım atmaktan çekinmiyorsun. Sürekli yeni formüller deniyor ve sonunda Bitkinin kalitesini artıracak malzemeyi buluyorsun.",
                'requireORjobs' => ["Çingene Çetesi Lideri", "Kore Mafyası Lideri", "Haydut Çetesi Lideri", "Çeçen Mafya Lideri", "Tarikat Lideri", "Güney Kartel Lideri", "Kuzey Kartel Lideri", "Motor Çetesi Lideri"],
                "bitki1" => true,
                "bitki2" => true,
                "bitki3" => true,
            ],
            [
                'title' => "Emekli Doktor",
                'description' => "Artık yaşını almışsın. Yıllardır çalıştığın hastaneden emekli oldun; paran anca borçlarını kapatmaya yetiyor. Bu durumdan müzdaripsin ve karanlık tarafa geçmeyi kendine hak görüyorsun; bu da en büyük hakkındır.",
                'requirejobs' => ["Belediye İşçisi", "Acil Tıp Teknisyeni", "Doktor"],
                'printer' => true,
            ],

            [
                'title' => "Çingene Çetesi Üyesi",
                'description' => "Çingeneler, şehirde Bitki üretiminde söz sahibidir. Bitkiları yükseltebilme yeteneğine sahip olarak bu karanlık dünyada yer alabilirsin.",
                'requirejobs' => ["Triads Mafya Üyesi", "Aşiret Üyesi"],
                "bitki1" => true,
                "bitki2" => true,
            ],
            [
                'title' => "Çingene Çetesi Lideri",
                'description' => "Çingene çetesinin lideri olarak, Bitki üretim sürecini yönetmek ve çeteni en iyi şekilde yönlendirmek zorundasın. Bitkileri yükseltmek, seni diğer çetelerden ayıracak önemli bir özellik olacaktır.",
                'requirejobs' => ["Çingene Çetesi Üyesi", "Triads Mafya Lideri", "Aşiret Lideri"],
                "bitki1" => true,
                "bitki2" => true,
            ],
            [
                'title' => "Kore Mafyası Üyesi",
                'description' => "Kore mafyası, Triadslardan sonra Asya'dan gelen bir güç olarak, şehirde Bitki üretimi yapmaktadır. Bitkileri yükseltme yeteneğinle, bu güçlü gruba katılmanın avantajlarını kullanabilirsin.",
                'requirejobs' => ["Rus Mafya Üyesi", "Aşiret Üyesi"],
                "bitki1" => true,
                "bitki2" => true,
            ],
            [
                'title' => "Kore Mafyası Lideri",
                'description' => "Kore mafyasının lideri olarak, çetenin işlerini yürütmek ve düşmanlarına karşı güçlü bir duruş sergilemek senin sorumluluğundadır. Bitkileri yükseltme yeteneğin, seni diğer çetelerden ayıran en büyük özelliğin olacaktır.",
                'requirejobs' => ["Kore Mafyası Üyesi", "Rus Mafya Babası", "Aşiret Lideri"],
                "bitki1" => true,
                "bitki2" => true,
            ],
            [
                'title' => "Haydut Çetesi Üyesi",
                'description' => "Keke Köyü’nün yeni ferdi olarak, artık KEKE Köyünde Bitki üretimi yapma şansına sahipsin. Bitkileri yükseltme becerinle, şehirdeki diğer çetelerle rekabet edebilirsin.",
                'requirejobs' => ["İtalyan Mafya Üyesi", "Aşiret Üyesi"],
                "bitki1" => true,
                "bitki2" => true,
            ],
            [
                'title' => "Haydut Çetesi Lideri",
                'description' => "Haydut çetesinin lideri olarak, çetenin tüm operasyonlarını yönetmek senin sorumluluğundadır. Bitki üretimi ve yükseltme süreçlerini kontrol ederek, düşmanlarına karşı sağlam bir duruş sergilemelisin.",
                'requirejobs' => ["Haydut Çetesi Üyesi", "İtalyan Mafya Babası", "Aşiret Lideri"],
                "bitki1" => true,
                "bitki2" => true,
            ],
            [
                'title' => "Çeçen Mafya Üyesi",
                'description' => "Çeçen mafyasının bir üyesi olarak, yüksek seviye printerlarla para üretimi yapma fırsatına sahipsin. Çetenin gücünü artırmaya yardımcı olabilirsin.",
                'requirejobs' => ["Rus Mafya Üyesi", "Aşiret Üyesi"],
                'printer' => true,
            ],
            [
                'title' => "Çeçen Mafya Lideri",
                'description' => "Çeçen mafyasının lideri olarak, çetenin en üst düzey operasyonlarını yönetmek zorundasın. Yüksek seviye printerlarla para üretimi yaparak da ailene yardımcı olabilirsin.",
                'requirejobs' => ["Çeçen Mafyası Üyesi", "Rus Mafya Babası", "Aşiret Lideri"],
                'printer' => true,
            ],
            [
                'title' => "Tarikat Üyesi",
                'description' => "Dini bir yapı olan tarikatın bir üyesi olarak, yeni para basma makineleriyle para üretimi yapıyorsun. Ek olarak, liderinin önderliğinde ritüel rolleri yaparak tarikatın gizemli dünyasına adım atıyorsun.",
                'requirejobs' => ["İtalyan Mafya Üyesi", "Aşiret Üyesi"],
                'printer' => true,
            ],
            [
                'title' => "Tarikat Lideri",
                'description' => "Tarikatın lideri olarak, tüm üyeleri yönetmek ve yeni para basma makineleriyle para üretimini kontrol etmek senin sorumluluğundadır. Ayrıca, ritüel rolleri organize ederek, tarikatın gücünü artırmalısın.",
                'requirejobs' => ["Tarikat Üyesi", "İtalyan Mafya Babası", "Aşiret Lideri"],
                'printer' => true,
            ],
            [
                'title' => "Güney Kartel Üyesi",
                'description' => "Güney Karteli’nin bir üyesi olarak, şehirde Bitki üretimini üstleniyorsun. Bitkileri yükseltme yeteneğinle, kartelin gücüne katkıda bulunabilirsin.",
                'requirejobs' => ["Rus Mafya Üyesi", "Aşiret Üyesi"],
                "bitki1" => true,
                "bitki2" => true,
            ],
            [
                'title' => "Güney Kartel Lideri",
                'description' => "Güney Karteli’nin lideri olarak, tüm operasyonları yönetmek senin sorumluluğundadır. Bitkileri yükseltme ve üretim süreçlerini kontrol ederek, kartelin gücünü artırmalısın.",
                'requirejobs' => ["Güney Kartel Üyesi", "Rus Mafya Babası", "Aşiret Lideri"],
                "bitki1" => true,
                "bitki2" => true,
            ],
            [
                'title' => "Kuzey Kartel Üyesi",
                'description' => "Kuzey Karteli’nin bir üyesi olarak, şehirde Bitki üretimini üstleniyorsun. Bitkileri yükseltme becerinle, kartelin etkisini artırmak için mücadele edebilirsin.",
                'requirejobs' => ["İtalyan Mafya Üyesi", "Triads Mafya Üyesi"],
                "bitki1" => true,
                "bitki2" => true,
            ],
            [
                'title' => "Kuzey Kartel Lideri",
                'description' => "Kuzey Karteli’nin lideri olarak, tüm kartelin işlerini yönetmek zorundasın. Bitkileri yükseltme ve üretim süreçlerini kontrol ederek, kartelin en güçlü gücü haline gelmesini sağlamalısın.",
                'requirejobs' => ["Kuzey Kartel Üyesi", "İtalyan Mafya Babası", "Triads Mafya Lideri"],
                "bitki1" => true,
                "bitki2" => true,
            ],
            [
                'title' => "Motor Çetesi Üyesi",
                'description' => "Motor çetesinin bir üyesi olarak, sahip olduğun motorlarla şehirde illegal roller yapma fırsatına sahipsin. Ayrıca, yeni para basma makineleriyle para basma işlemlerine de katılabilirsin.",
                'requirejobs' => ["İtalyan Mafya Üyesi", "Triads Mafya Üyesi"],
                'printer' => true,
            ],
            [
                'title' => "Motor Çetesi Lideri",
                'description' => "Motor çetesinin lideri olarak, çeteni yönetmek ve yeni para basma makineleriyle para üretimini kontrol etmek zorundasın. Aynı zamanda, motorlarınla gerçekleştireceğin illegal eylemleri organize etmelisin.",
                'requirejobs' => ["Motor Çetesi Üyesi", "İtalyan Mafya Babası", "Triads Mafya Lideri"],
                'printer' => true,
            ]
        ]
    ]
];
$darkrpItems = [
    "XP Eşyaları" => [
        "class" => randomBSColor(3),
        "list-style-type" => '-',
        "alert-message" => "Hem 1. Seviye Saat hem de 2. Seviye Saat olması durumunda sadece 2. Seviye Saat çalışmaktadır.",
        "alert-color" => "info",
        [
            [
                "name" => "Kemik Kadro",
                "description" => darkrp_item_xp(1, 50),
                "box" => false,
                "class" => randomBSColor(0),
            ],
            [
                "name" => "Kötü Gün Dostu",
                "description" => darkrp_item_xp(1, 25),
                "box" => false,
                "class" => randomBSColor(1),
            ],
            [
                "name" => "Just'un Kutsanmış Bebeği",
                "description" => darkrp_item_xp(1, 50),
                "box" => true,
                "class" => randomBSColor(3),
            ],
            [
                "name" => "1. Seviye Saat",
                "description" => darkrp_item_xp(1, 10),
                "box" => true,
                "class" => randomBSColor(4),
            ],
            [
                "name" => "2. Seviye Saat",
                "description" => darkrp_item_xp(1, 25),
                "box" => true,
                "class" => randomBSColor(5),
            ],
            [
                "name" => "3. Seviye Saat",
                "description" => darkrp_item_xp(1, 50),
                "box" => true,
                "class" => randomBSColor(4),
            ],
            [
                "name" => "Kaliteli Viski",
                "description" => darkrp_item_xp(1, 25),
                "box" => false,
                "class" => randomBSColor(5),
            ],
            [
                "name" => "1. Seviye Özel Eşya Toplama",
                "description" => darkrp_item_esya_toplama(10),
                "box" => true,
                "class" => randomBSColor(0),
            ],
            [
                "name" => "2. Seviye Özel Eşya Toplama",
                "description" => darkrp_item_esya_toplama(15),
                "box" => true,
                "class" => randomBSColor(1),
            ],
            [
                "name" => "3. Seviye Özel Eşya Toplama",
                "description" => darkrp_item_esya_toplama(20),
                "box" => true,
                "class" => randomBSColor(2),
            ],
            [
                "name" => "XP Bileti",
                "description" => darkrp_item_xp(2, "1 saat boyunca 2x"),
                "box" => false,
                "class" => randomBSColor(2),
            ],
            [
                "name" => "Baronun Prosu",
                "description" => darkrp_item_xp(1, 10),
                "custombox" => "Barona hizmet edenler tarafından elde edilir.",
                "class" => randomBSColor(3),
            ],
            [
                "name" => "Baronun Emaneti",
                "description" => darkrp_item_xp(1, 50),
                "custombox" => "Baronun en sadık adamlarına verilir.",
                "class" => randomBSColor(4),
            ],
            [
                "name" => "Çakmak",
                "description" => darkrp_item_xp(1, 10),
                "box" => false,
                "class" => randomBSColor(5),
            ],
            [
                "name" => "Dambıl",
                "description" => darkrp_item_xp(1, 20),
                "box" => false,
                "class" => randomBSColor(0),
            ],
            [
                "name" => "Baston Şeker",
                "description" => darkrp_item_xp(1, 30),
                "box" => false,
                "class" => randomBSColor(1),
            ],
            [
                "name" => "Defibrilatör",
                "description" => "Baygın birini kaldırdığınızda %15 daha fazla XP verir.",
                "box" => true,
                "class" => randomBSColor(2),
            ],
            [
                "name" => "İngiliz Anahtarı",
                "description" => "Belediye işlerinde %20 daha fazla XP sağlar.",
                "box" => true,
                "class" => randomBSColor(3),
            ],
            [
                "name" => "İmamın Abdest Suyu",
                "description" => "İmamdan aldığınız XP bonusunu %20 oranında artırır.",
                "box" => true,
                "class" => randomBSColor(4),
            ],
            [
                "name" => "Fileto Bıçağı",
                "description" => "Balıklardan elde edilen tecrübeyle kazandığınız XP'yi %25 artırır.",
                "box" => true,
                "class" => randomBSColor(5),
            ],
            [
                "name" => "Beylik Tabancası",
                "description" => "Para basma makinelerini ve bitkileri yok ettiğinizde kazandığınız XP'yi %100 artırır. <span class='text-primary-emphasis'>(Devlet çalışanları için geçerlidir)</span>",
                "box" => true,
                "class" => "text-primary-emphasis",
            ],
            [
                "name" => "Türk Bayrağı",
                "description" => darkrp_item_xp(1, 50),
                "box" => false,
                "class" => "text-danger-emphasis",
            ],
            [
                "name" => "Fakirin Hazinesi",
                "description" => darkrp_item_xp(1, 25),
                "box" => false,
                "class" => randomBSColor(0),
            ],
        ]
    ],
    "Diğer Eşyalar" => [
        "class" => randomBSColor(4),
        "list-style-type" => '*',
        [
            [
                "name" => "Ay Taşı (Tek seferlik kullanım)",
                "description" => "Ölünce envanterinizdeki shipment, silah vb. düşebilen eşyalarınızın düşmesini önler.",
                "custombox" => "Madencideki NPC'den üretilebilir.",
                "class" => randomBSColor(0),
            ],
            [
                "name" => "Torpil kağıdı",
                "description" => "%50 daha fazla maaş almanı sağlar.",
                "box" => true,
                "class" => randomBSColor(1),
            ],
            [
                "name" => "Madenci Kitabı",
                "description" => "Maden toplarken daha fazla maden alırsınız.",
                "box" => true,
                "class" => randomBSColor(2),
            ],
            [
                "name" => "Odunculuk Kitabı",
                "description" => "Odun keserken daha fazla odun alırsınız.",
                "box" => true,
                "class" => randomBSColor(3),
            ],
            [
                "name" => "Balıkçılık Kitabı",
                "description" => "Balık tutarken daha fazla balık alırsınız.",
                "box" => true,
                "class" => randomBSColor(4),
            ],
            [
                "name" => "Emir Din Kitabı",
                "description" => "İlk yardım kiti kullanırken +15 daha fazla verir.",
                "box" => true,
                "class" => randomBSColor(5),
            ],
            [
                "name" => "Okunmuş Su",
                "description" => "Zırh bastığınızda +50 ekler.",
                "box" => true,
                "class" => randomBSColor(0),
            ],
            [
                "name" => "Zırhlı Kasa",
                "description" => "Deponuza 1 sayfa daha ekler.",
                "box" => true,
                "class" => randomBSColor(1),
            ],
            [
                "name" => "Deri Çanta",
                "description" => "Envanterinize 1 sayfa daha ekler.",
                "box" => true,
                "class" => randomBSColor(2),
            ],
            [
                "name" => "İlk Yardım Çantası",
                "description" => "Mevcut canınıza +100 can daha ekler.",
                "box" => true,
                "class" => randomBSColor(3),
            ],
            [
                "name" => "Just'ın İndirim Kuponu",
                "description" => "Galeri vb. yerlerde %10 indirimli satın alabilirsiniz.",
                "box" => true,
                "class" => randomBSColor(4),
            ],
            [
                "name" => "Cesaret Hapı (Tek seferlik kullanım)",
                "description" => "2 dakikalığına vücudun yüksek miktarda adrenalin (HP) salgılar. Sonrasında aşırı adrenalin nedeniyle kalp krizi geçirirsiniz.",
                "box" => true,
                "class" => "text-danger-emphasis",
            ],
            [
                "name" => "İthal Gübre",
                "description" => "Bitki üretimini tamamlarken +1 bitki verir.",
                "box" => true,
                "class" => randomBSColor(0),
            ],
            [
                "name" => "Çek Defteri",
                "description" => "Kirli dolar temizlerken %10 NPC'ye daha az komisyon ödersiniz.",
                "box" => true,
                "class" => randomBSColor(1),
            ],
            [
                "name" => "Tüccarın Cüzdanı",
                "description" => "Para basma makinesindeki parayı %?? artırır.",
                "box" => true,
                "class" => randomBSColor(2),
            ],
            [
                "name" => "Yapay Zeka Eklentisi",
                "description" => "Para basma makinesindeki parayı %25 artırır.",
                "box" => false,
                "class" => randomBSColor(3),
            ],
            [
                "name" => "Yüksek Kaliteli Gübre",
                "description" => "Bitki üretimini tamamlarken %50 şans ile +1 bitki verir. Bitki Paketleme makinesinde ise %25 şans ile +1 bitki verir.",
                "box" => false,
                "class" => randomBSColor(4),
            ],

        ]
    ],
];
$darkrpBalik = [
    [
        "name" => "Hız Balığı",
        "description" => "Balığı yedinizde Hızınızı arttırır. Maksimum 2 tane kullanabilirsiniz.",
        "class" => randomBSColor(0),
    ],
    [
        "name" => "Tavşan Balığı",
        "description" => "Balığı yedinizde Zıplama mesafenizi arttırır. Maksimum 2 tane kullanabilirsiniz.",
        "class" => randomBSColor(1),
    ],
    [
        "name" => "Yürek Balığı",
        "description" => "Balığı yedinizde Maksimum canınızı +100 artırır. Maksimum 400 can'a kadar kullanabilirsiniz.",
        "class" => randomBSColor(2),
    ],
    [
        "name" => "Güç Balığı",
        "description" => "Balığı yedinizde Maksimum canınızı +50 artırır. Maksimum 200 can'a kadar kullanabilirsiniz. 200 üstüne çıkarmak için yürek balığı kullanın.",
        "class" => randomBSColor(3),
    ],
    [
        "name" => "Gençlik Balığı",
        "description" => "Balığı yedinizde karakteriniz boyutu küçülür.",
        "class" => randomBSColor(4),
    ],
    [
        "name" => "Evrim Balığı",
        "description" => "Balığı yedinizde karakteriniz maymuna dönüşür.",
        "class" => randomBSColor(5),
    ],
    [
        "name" => "Tecrübe Balığı",
        "description" => "Balığı yedinizde bulunduğunuz meslekte XP kazanırsınız.",
        "class" => randomBSColor(0),
    ],
    [
        "name" => "Balık Kutusu",
        "description" => "Balığı yedinizde Şanslı iseniz kutu kazanırsınız.",
        "class" => randomBSColor(1),
    ],

];

?>