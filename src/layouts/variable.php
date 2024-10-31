<?php
$baseUrl_Path = "";
$baseUrl = "https://b0.moonrehber.com" . $baseUrl_Path;
$DefaultOGImage = "/assets/image/og-image.png";
//================================================================
$darkrp_workshop = "https://steamcommunity.com/workshop/filedetails/?id=1545171095";
$ttt_workshop = "https://steamcommunity.com/workshop/filedetails/?id=369504622";

$darkrp_ip = "https://moonrp.com/darkrpconnect";
$ttt_ip = "steam://connect/91.151.94.211:28015";

$darkrp_AdminBasvuru = "https://forms.gle/aThYDcDq2KCxbv1z8";
$ttt_AdminBasvuru = "https://forms.gle/Z5mZFT4sBVbQ49Yi6";
//================================================================
function randomBSColor($index = null)
{
    $colors = ['text-primary-emphasis', 'text-success-emphasis', 'text-danger-emphasis', 'text-warning-emphasis', 'text-info-emphasis', 'text-secondary'];
    if ($index !== null && $index >= 0 && $index < count($colors)) {
        return $colors[$index];
    }
    return $colors[array_rand($colors)];
}

function darkrp_item_esya_toplama($percentage)
{
    return "Kirli dolar ve bitki üretimini tamamladığınızda (E tuşuna basarken) %$percentage XP bonusu sağlar. Kutulardan çıkar.";
}

function darkrp_item_xp($type, $percentage)
{
    if ($type == 1) {
        return "%$percentage XP bonusu sağlar. Kutulardan çıkar.";
    } else if ($type == 2) {
        return "%$percentage XP bonusu sağlar. Kutulardan çıkmaz.";
    }
}

$darkrpCity = [
    [
        "image" => "$baseUrl/assets/image/darkrp_belediye.jpg",
        "title" => "Belediye Binası",
        "description" => "Belediye binamızda, belediye başkanının odası, savcı ve hâkim odaları, Yargı Salonu ve MİT karakolu bulunmaktadır. Ayrıca kimlik değiştirme ve başkan adayı olma işlemleri için gerekli NPC'ler de burada mevcuttur."
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
        "description" => "Bitki yetiştirme vb. aktiviteler yürütebileceğiniz yeni bir alandır.",
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
        "image" => "$baseUrl/assets/image/darkrp_avm.jpg",
        "title" => "AVM",
        "description" => "MoonCity simgesi olan AVM'de yapabileceğiniz bir şey yok maalesef."
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
        "description" => "Etüt Merkezindeki NPC'lerden komisyon alarak öğrenim sürecine katkıda bulunuyorsun.",
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
        "description" => "Kendi NPC aracılığıyla Kirli dolarları temizleyerek kazanç elde ediyorsun.",
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
        "description" => "Kiralardan komisyon alıyor ve Kirli dolarları temizliyorsun.",
        "dolar" => true,
    ],
    "Sigortacı" => [
        "description" => "Kirli dolarları temizleyerek sigorta sektöründe iş yapıyorsun.",
        "dolar" => true,
    ],
    "Lojistik" => [
        "description" => "Kirli dolarları temizleyerek tedarik zincirinde yer alıyorsun.",
        "dolar" => true,
    ],
    "Ekspertiz" => [
        "description" => "Kirli dolarları temizleyerek değerleme yapıyorsun.",
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
        "description" => "İthal malları alıp yurtdışına gönderiyorsun.",
        "ithal" => true,
    ],
    "Botanikçi" => [
        "description" => "Bitkileri alıp yurtdışına pazarla para kazanıyorsun.",
        "bitki" => true,
    ],
    "Sosyal Medya Sahibi" => [
        "description" => "Sosyal medyada paylaşım yaparken ödenen vergiden komisyon alıyorsun.",
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
        "description" => "Kirli dolarları temizleyerek güzellik sektöründe yer alıyorsun.",
        "dolar" => true,
    ],
    "Yatırım Danışmanı" => [
        "description" => "Kirli dolarları temizleyerek yatırım fırsatları sağlıyorsun.",
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
        "description" => "Kirli dolarları temizleyerek finans sektöründe yer alıyorsun.",
        "dolar" => true,
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
                "name" => "XP Bileti",
                "description" => "1 saat boyunca 2x XP bonusu sağlar. Kutulardan çıkmaz.",
                "class" => randomBSColor(0),
            ],
            [
                "name" => "Just'un Kutsanmış Bebeği",
                "description" => darkrp_item_xp(1, 50),
                "class" => randomBSColor(1),
            ],
            [
                "name" => "1. Seviye Saat",
                "description" => darkrp_item_xp(1, 10),
                "class" => randomBSColor(2),
            ],
            [
                "name" => "2. Seviye Saat",
                "description" => darkrp_item_xp(1, 25),
                "class" => randomBSColor(3),
            ],
            [
                "name" => "3. Seviye Saat",
                "description" => darkrp_item_xp(1, 50),
                "class" => randomBSColor(4),
            ],
            [
                "name" => "Kaliteli Viski",
                "description" => darkrp_item_xp(2, 25),
                "class" => randomBSColor(5),
            ],
            [
                "name" => "1. Seviye Özel Eşya Toplama",
                "description" => darkrp_item_esya_toplama(10),
                "class" => randomBSColor(0),
            ],
            [
                "name" => "2. Seviye Özel Eşya Toplama",
                "description" => darkrp_item_esya_toplama(15),
                "class" => randomBSColor(1),
            ],
            [
                "name" => "3. Seviye Özel Eşya Toplama",
                "description" => darkrp_item_esya_toplama(20),
                "class" => randomBSColor(2),
            ],
            [
                "name" => "Baronun Prosu",
                "description" => darkrp_item_xp(2, 10) . ' <b>Barona hizmet edenler tarafından elde edilir.</b>',
                "class" => randomBSColor(3),
            ],
            [
                "name" => "Baronun Emaneti",
                "description" => darkrp_item_xp(2, 50) . ' <b>Baronun en sadık adamlarına verilir.</b>',
                "class" => randomBSColor(4),
            ],
            [
                "name" => "Çakmak",
                "description" => darkrp_item_xp(2, 10),
                "class" => randomBSColor(5),
            ],
            [
                "name" => "Dambıl",
                "description" => darkrp_item_xp(2, 20),
                "class" => randomBSColor(0),
            ],
            [
                "name" => "Baston Şeker",
                "description" => darkrp_item_xp(2, 30),
                "class" => randomBSColor(1),
            ],
            [
                "name" => "Defibrilatör",
                "description" => "Baygın birini kaldırdığınızda %15 daha fazla XP verir. Kutulardan çıkar.",
                "class" => randomBSColor(2),
            ],
            [
                "name" => "İngiliz Anahtarı",
                "description" => "Belediye işlerinde %?? daha fazla XP sağlar.",
                "class" => randomBSColor(3),
            ],
            [
                "name" => "İmamın Abdest Suyu",
                "description" => "İmamdan aldığınız XP bonusunu %?? oranında artırır. Kutulardan çıkar.",
                "class" => randomBSColor(4),
            ],
            [
                "name" => "Fileto Bıçağı",
                "description" => "Balıklardan elde edilen tecrübeyle kazandığınız XP'yi %?? artırır. Kutulardan çıkar.",
                "class" => randomBSColor(5),
            ],
            [
                "name" => "Beylik Tabancası",
                "description" => "Para basma makinelerini ve bitkileri yok ettiğinizde kazandığınız XP'yi %?? artırır. Kutulardan çıkar. <span class='text-primary-emphasis'>(Devlet çalışanları için geçerlidir)</span>",
                "class" => "text-primary-emphasis",
            ],
            [
                "name" => "Türk Bayrağı",
                "description" => darkrp_item_xp(2, 50),
                "class" => "text-danger-emphasis",
            ],
        ]
    ],
    "Diğer Eşyalar" => [
        "class" => randomBSColor(4),
        "list-style-type" => '*',
        [
            [
                "name" => "Ay Taşı (Tek seferlik kullanım)",
                "description" => "Ölünce envanterinizdeki shipment, silah vb. düşebilen eşyalarınızın düşmesini önler. Madencideki NPC'den üretilebilir.",
                "class" => randomBSColor(0),
            ],
            [
                "name" => "Torpil kağıdı",
                "description" => "%50 daha fazla maaş almanı sağlar.",
                "class" => randomBSColor(1),
            ],
            [
                "name" => "Madenci Kitabı",
                "description" => "Maden toplarken daha fazla maden alırsınız.",
                "class" => randomBSColor(2),
            ],
            [
                "name" => "Odunculuk Kitabı",
                "description" => "Odun keserken daha fazla odun alırsınız.",
                "class" => randomBSColor(3),
            ],
            [
                "name" => "Balıkçılık Kitabı",
                "description" => "Balık tutarken daha fazla balık alırsınız.",
                "class" => randomBSColor(4),
            ],
            [
                "name" => "Emir Din Kitabı",
                "description" => "İlk yardım kiti kullanırken +15 daha fazla verir.",
                "class" => randomBSColor(5),
            ],
            [
                "name" => "Okunmuş Su",
                "description" => "Zırh bastığınızda +50 ekler. Kutulardan çıkar.",
                "class" => randomBSColor(0),
            ],
            [
                "name" => "Zırhlı Kasa",
                "description" => "Deponuza 1 sayfa daha ekler. Kutulardan çıkar.",
                "class" => randomBSColor(1),
            ],
            [
                "name" => "Deri Çanta",
                "description" => "Envanterinize 1 sayfa daha ekler. Kutulardan çıkar.",
                "class" => randomBSColor(2),
            ],
            [
                "name" => "İlk Yardım Çantası",
                "description" => "Mevcut canınıza +100 can daha ekler. Kutulardan çıkar.",
                "class" => randomBSColor(3),
            ],
            [
                "name" => "Just'ın İndirim Kuponu",
                "description" => "Galeri vb. yerlerde %10 indirimli satın alabilirsiniz. Kutulardan çıkar.",
                "class" => randomBSColor(4),
            ],
            [
                "name" => "Cesaret Hapı (Tek seferlik kullanım)",
                "description" => "2 dakikalığına vücudun yüksek miktarda adrenalin (HP) salgılar. Sonrasında aşırı adrenalin nedeniyle kalp krizi geçirirsiniz. Kutulardan çıkar.",
                "class" => "text-danger-emphasis",
            ],
            [
                "name" => "İthal Gübre",
                "description" => "Bitki üretimini tamamlarken +1 bitki verir.",
                "class" => randomBSColor(0),
            ],
            [
                "name" => "Çek Defteri",
                "description" => "Kirli dolar temizlerken %?? NPC'ye daha az komisyon ödersiniz. Kutulardan çıkar.",
                "class" => randomBSColor(1),
            ],
            [
                "name" => "Tüccarın Cüzdanı",
                "description" => "Para basma makinesindeki parayı %?? artırır. Kutulardan çıkar.",
                "class" => randomBSColor(2),
            ]
        ]
    ],
];

$legalJobs = [
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

$esnafJobs = [
    [
        'title' => "Güvenlik Görevlisi",
        'description' => "Görev yaptığı alanda güvenliği sağlamak, potansiyel tehlikeleri önceden tespit etmek ve olaylara müdahale etmekle sorumlu olan profesyoneldir. İnsanların ve mülklerin güvenliğini koruma amacı güder.",
        'req' => null
    ],
    [
        'title' => "Yapı Market Sahibi",
        'description' => "Physic Gun ve Tool Gun gibi özel araçların yanı sıra fotoğraf makinesi, araç alarmı, çelik yelek, kulaklık ve kask gibi malzemeleri satarak para kazanan kişidir. İnşaat ve güvenlik sektörüne yönelik ürün yelpazesini genişleterek müşteri ihtiyaçlarını karşılamayı hedefler.",
        'req' => null
    ],
    [
        'title' => "Poligon Sahibi",
        'description' => "Atış eğitimi ve pratikleri sunan bir poligonun sahibi olan kişidir. Tabanca gibi çeşitli silahların satışını yaparak ve güvenli bir atış ortamı sağlayarak para kazanır. Ayrıca, atış kursları düzenleyerek bireylerin becerilerini geliştirmelerine yardımcı olur.",
        'req' => null
    ],
    [
        'title' => "Çiğköfte Salonu Sahibi",
        'description' => "Çiğköfte satışına yönelik bir işletmenin sahibi olan kişidir. Lezzetli çiğköfteleri hazırlayarak ve sunarak, müşterilerine hijyenik bir ortamda hizmet vermeyi hedefler.",
        'req' => null
    ],
    [
        'title' => "Garson",
        'description' => "Restoran veya kafe gibi mekanlarda müşterilere hizmet veren, sipariş alıp servis yapan ve misafirlerin memnuniyetini sağlamaya yönelik çalışan kişidir. Gıda güvenliği ve hijyen kurallarına uygun olarak hizmet verir.",
        'req' => null
    ],
    [
        'title' => "İtalyan Restoranı Sahibi",
        'description' => "İtalyan mutfağına yönelik lezzetler sunan bir restoranın sahibi olan kişidir. Müşterilere kaliteli yemek deneyimi sağlamak için geleneksel İtalyan tariflerini kullanarak menü oluşturur ve işletmenin yönetimini üstlenir.",
        'req' => null
    ],
    [
        'title' => "AVM Sahibi",
        'description' => "Alışveriş merkezi işleten ve yöneten kişidir. Farklı mağaza ve restoranların yer aldığı bir alan sunarak, ziyaretçilere çeşitli alışveriş ve eğlence imkanları sağlar. AVM'nin genel yönetimi, pazarlaması ve müşteri memnuniyetinin sağlanmasında önemli rol oynar.",
        'req' => null
    ],
    [
        'title' => "Eczacı",
        'description' => "İlaçların dağıtımını yapan, hastaların sağlık ihtiyaçlarını karşılamak üzere Bio-organ ve Recoil gibi ilaçları satan sağlık profesyonelidir.",
        'req' => null
    ],
    [
        'title' => "Simitçi",
        'description' => "Geleneksel simit ve diğer unlu mamulleri üreterek satan esnaftır. Müşterilerine taze simitler sunarak, sokak lezzetlerinin keyfini çıkarmalarına yardımcı olur.",
        'req' => null
    ],
    [
        'title' => "Tavuk Pilavcı",
        'description' => "Taze pişirilmiş tavuk ve pilav sunarak, misafirlere lezzetli ve doyurucu bir yemek deneyimi sağlayan kişidir. Müşterilerin ihtiyaçlarına göre hızlı ve kaliteli hizmet verir.",
        'req' => null
    ],
    [
        'title' => "Kebapçı",
        'description' => "Çeşitli kebap çeşitleri hazırlayıp sunan bir esnaftır. Müşterilerine lezzetli et yemekleri ve mezeler sunarak, geleneksel Türk mutfağının tadını çıkarma fırsatı verir.",
        'req' => null
    ],
    [
        'title' => "Kafe Sahibi",
        'description' => "Müşterilere kahve, çay, atıştırmalıklar ve çeşitli içecekler sunan bir kafenin sahibidir. Sıcak ve samimi bir ortam yaratarak, sosyal bir alan sağlamayı amaçlar.",
        'req' => null
    ],
    [
        'title' => "Hamburgerci",
        'description' => "Çeşitli hamburger çeşitleri hazırlayıp satan esnaftır. Taze malzemeler kullanarak, müşterilerine lezzetli ve doyurucu burgerler sunar.",
        'req' => null
    ],
    [
        'title' => "Dönerci",
        'description' => "Döner kebap hazırlayıp satan esnaftır. Müşterilerine lezzetli dönerler ve yan ürünler sunarak, hızlı ve doyurucu bir yemek deneyimi sağlar.",
        'req' => null
    ],
    [
        'title' => "Dondurmacı",
        'description' => "Farklı dondurma çeşitleri sunarak serinletici lezzetler sağlayan esnaftır. Yaz aylarında taze ve doğal dondurmalarla müşteri memnuniyetini hedefler.",
        'req' => null
    ],
    [
        'title' => "Çorba & Paça Salonu Sahibi",
        'description' => "Lezzetli çorba ve paça yemekleri sunan bir işletmenin sahibidir. Müşterilere sıcak ve besleyici yemekler sunarak, geleneksel tatları yaşatmayı amaçlar.",
        'req' => null
    ],
    [
        'title' => "Büfe Sahibi",
        'description' => "Atıştırmalıklar, içecekler ve çeşitli günlük ihtiyaç maddeleri satan küçük bir işletmenin sahibidir. Hızlı hizmet sunarak, müşterilerin temel ihtiyaçlarını karşılamayı hedefler.",
        'req' => null
    ],
    [
        'title' => "Dövüş Sanatları Öğretmeni",
        'description' => "Öğrencilere dövüş sanatları tekniklerini, savunma yöntemlerini ve disiplinini öğretmekle görevli olan kişidir. Fiziksel ve zihinsel gelişimi destekleyerek, öğrencilerin kendine güven kazanmalarına yardımcı olur.",
        'req' => null
    ],
    [
        'title' => "Mekanik",
        'description' => "Araç mekanik sistemlerin bakım, onarım ve işletilmesi ile ilgilenen meslek grubudur. Mekanik bilgi ve becerilerini kullanarak, çeşitli takılabilir parçaları sunar.",
        'req' => null,
        'vip' => 2
    ],
    [
        'title' => "Mühendis",
        'description' => "Mühendisler, para basma makineleri, saksı gibi çeşitli ürünlerin tasarım ve üretim süreçlerinde çalışarak teknik çözümler geliştirirler. Farklı alanlarda sahip oldukları problem çözme yetenekleri ile yenilikçi projeler üretirler.",
        'req' => "İlk önce Yapı market sahibi ve Poligon Sahibi Mesleğinde Deneyim Kazanmanız gerekiyor.",
        'vip' => 2
    ],
    [
        'title' => "Taksici",
        'description' => "Müşterileri belirli bir noktadan alarak istedikleri yere ulaştıran, taksi hizmeti sunan kişidir. Güvenli ve konforlu bir ulaşım sağlamak için trafiği ve güzergahları iyi bilmelidir.",
        'req' => null
    ],
    [
        'title' => "Dolmuş Şoförü",
        'description' => "Belirli bir rota üzerinde yolcu taşımakla görevli olan şofördür. Müşterilere uygun fiyatlarla ulaşım imkanı sunarak, toplu taşıma hizmetine katkı sağlar.",
        'req' => null
    ],
    [
        'title' => "Kargocu",
        'description' => "Kargoculuk, yapı market sahipleri, poligon sahipleri, ithalatçılar ve eczacılar gibi çeşitli yerlerden gelen paketlerin alıcılara ulaştırılmasını sağlamakla görevli olan bir meslektir. Kargo teslimatı ve takip işlemlerine odaklanarak, müşteri memnuniyetini ön planda tutar.",
        'req' => null
    ],
    [
        'title' => "Maden İşçisi",
        'description' => "Maden ocaklarında çalışarak, madenlerin çıkarılması, işlenmesi ve taşınması işlemlerini gerçekleştiren kişidir. İş güvenliği kurallarına uyarak, zorlu şartlar altında çalışır.",
        'req' => null
    ],
    [
        'title' => "Kereste İşçisi",
        'description' => "Ağaçları kesip işleyerek kereste haline getiren kişidir. Kereste üretiminde çeşitli makineleri kullanarak, kaliteli ahşap ürünler elde eder.",
        'req' => null
    ],
    [
        'title' => "Doğal Kaynaklar Mühendisi",
        'description' => "Doğal kaynakların verimli ve sürdürülebilir kullanımını sağlamak amacıyla, maden ocaklarında ve ormanlık alanlarda çalışarak modern alet ve ekipmanlar kullanır. Madenci veya keresteci olarak, iş süreçlerini optimize eder ve çevresel etkileri minimize eder.",
        'req' => "İlk önce Maden İşçisi ve Kereste İşçisi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Doğal Kaynaklar Yüksek Mühendisi",
        'description' => "Doğal kaynakların verimli ve sürdürülebilir kullanımını sağlamak amacıyla, maden ocaklarında ve ormanlık alanlarda çalışarak modern alet ve ekipmanlar kullanır. Madenci veya keresteci olarak, iş süreçlerini optimize eder ve çevresel etkileri minimize eder.",
        'req' => "İlk önce Maden İşçisi ve Kereste İşçisi Mesleğinde Deneyim Kazanmanız gerekiyor.",
        'vip' => 2
    ],
    [
        'title' => "Ganyan Bayi Sahibi",
        'description' => "At yarışları üzerine bahis alarak gelir elde eden bir işletme sahibidir. Yarışların takibini yapar ve müşterilere bahis olanakları sunar.",
        'req' => null
    ],
    [
        'title' => "Banka Sorumlusu",
        'description' => "Moon Bank'ta çalışan ve bankanın kasasını koruyarak finansal işlemleri yöneten bir uzmandır. Müşteri taleplerine yanıt verir, hesapları yönetir ve güvenliği sağlamak için gerekli önlemleri alır.",
        'req' => null
    ],
    [
        'title' => "İthalatçı",
        'description' => "Yurtdışından ürün veya hizmetlerin ithalatını yapan bir iş insanıdır. Poligon sahibine göre ürün yelpazesi daha fazladır.",
        'req' => "İlk önce Poligon Sahibi Mesleğinde Deneyim Kazanmanız gerekiyor.",
        'vip' => 2
    ],
    [
        'title' => "Müzisyen",
        'description' => "Müzik besteleme, icra etme ve sahne performanslarıyla müzik dünyasında yer alan bir sanatçıdır. Farklı müzik tarzlarında eserler üretir ve dinleyicilere müzik deneyimi sunar.",
        'req' => null
    ],
    [
        'title' => "Dilenci",
        'description' => "Geçim sağlamak amacıyla toplumda çeşitli yerlerde para veya yiyecek talep eden kişidir. Genellikle sokaklarda veya kalabalık yerlerde bulunurlar.",
        'req' => null
    ],
    [
        'title' => "Kimsesiz Çocuk",
        'description' => "Ailesi olmayan ve bir bakım kurumunda veya sokakta yaşayan çocuklardır. Genellikle sevgi ve destek arayışında olurlar.",
        'req' => null
    ],
    [
        'title' => "DJ",
        'description' => "Müzik seti veya bilgisayar kullanarak müzikleri miksleyen ve partilerde veya etkinliklerde performans sergileyen kişidir. Farklı müzik türlerini harmanlayarak dinleyicilere eğlenceli bir deneyim sunar.",
        'req' => null
    ],
    [
        'title' => "Din Adamı",
        'description' => "Bir dinin inançlarını, öğretilerini ve ritüellerini yürüten ve bu konuda toplumu bilgilendiren kişidir. Genellikle ibadetlerin yönetimi ve dini konularda rehberlik yapar.",
        'req' => null
    ],
    [
        'title' => "Kaykaycı",
        'description' => "Kaykay kullanarak çeşitli hareketler ve stiller geliştiren, bu sporla ilgilenen kişidir. Genellikle sokaklarda, park veya özel kaykay alanlarında kayar.",
        'req' => null
    ],
    [
        'title' => "Oto Kurtarıcı",
        'description' => "Araçların yolda kalması durumunda yardım sağlayarak onları güvenli bir yere taşıyan profesyoneldir. Acil durumlarda 24 saat hizmet vererek sürücülere destek olur.",
        'req' => null,
        'close' => true
    ],
    [
        'title' => "Sokak Köpeği",
        'description' => "Sokaklarda yaşayan, genellikle insanlardan bağımsız olarak hayatta kalmaya çalışan köpeklerdir. İnsanlara karşı genellikle dostça bir tutum sergileyebilirler.",
        'req' => null
    ],
    [
        'title' => "Sokak Kedisi",
        'description' => "Sokaklarda yaşayan, beslenme ve barınma ihtiyaçlarını genellikle kendi başına karşılayan kedilerdir. İnsanlarla sınırlı bir ilişki kurarak hayatlarını sürdürürler.",
        'req' => null
    ],
    [
        'title' => "Belıkçı",
        'description' => "Küçük bir gölde, balık tutarak geçimini sağlar.",
        'req' => null
    ],
    [
        'title' => "Piyangocu",
        'description' => "Piyango biletleri satan ve kazananları belirleyen kişidir. Müşterilere bilet satışı yaparak, şans oyunları ile kazanç sağlamaya çalışır.",
        'req' => null
    ],
    [
        'title' => "Kurye",
        'description' => "Yapı market sahipleri, poligon sahipleri, ithalatçılar ve eczacılar gibi çeşitli yerlerden gelen paketlerin alıcılara ulaştırılmasını sağlamakla görevli olan bir meslektir. Kargo teslimatı ve takip işlemlerine odaklanarak, müşteri memnuniyetini ön planda tutar. Paketlerin veya belgelerin belirli bir adrese hızlı bir şekilde ulaştırılmasını sağlar. Genellikle zaman baskısı altında çalışır ve müşteri memnuniyetine odaklanır.",
        'req' => null
    ],
    [
        'title' => "MoonTV Çalışanı",
        'description' => "MoonTV kanalı için içerik üreten veya yayın sürecine katkı sağlayan kişidir. Programların düzenlenmesi, çekimlerin yapılması ve yayın öncesi hazırlıklarda yer alır.",
        'req' => null,
        'vip' => 1
    ],
    [
        'title' => "İmam",
        'description' => "Toplumda dini liderlik yapan, vaazlar vererek insanlara rehberlik eden, inanç ve ahlak konularında eğitim veren bir kişidir. İmam, camide veya topluluk içinde dini görevlerini yerine getirirken, insanları bir araya getirir ve toplumsal dayanışmayı güçlendirir.",
        'req' => null
    ],
    [
        'title' => "Avukat",
        'description' => "Hukuk alanında uzmanlaşmış, müvekkillerine yasal danışmanlık ve savunma hizmeti sunan kişidir. Mahkeme süreçlerinde müvekkillerini temsil eder.",
        'req' => null
    ],
    [
        'title' => "Tekel Bayi Sahibi",
        'description' => "Alkol ve diğer ürünlerin satışını yapan bir dükkânın sahibi ve işletmecisidir. Müşterilerine çeşitli ürünler sunarak gelir elde eder.",
        'req' => null
    ],
    [
        'title' => "Parkurcu",
        'description' => "Farklı zeminlerde ve engeller arasında akrobatik hareketler yaparak hızlı bir şekilde ilerleyen kişidir. Fiziksel yetenekleri ve çevikliği ile dikkat çeker.",
        'req' => null
    ],
    [
        'title' => "Grafitici",
        'description' => "Grafiti sanatıyla sokaklara renk katan ve mesajlar ileten bir sanatçıdır. Duvarlar veya çeşitli yüzeyler üzerinde yaratıcılığını sergiler.",
        'req' => null
    ],
    [
        'title' => "Sokak Sanatçısı",
        'description' => "Sokaklarda performans sergileyerek ya da eserler yaratarak insanlara eğlence sunan sanatçıdır. Genellikle bağışlarla geçimlerini sağlar.",
        'req' => null
    ],
    [
        'title' => "Motel Sahibi",
        'description' => "Misafirlerine konaklama hizmeti sunan küçük otel veya motelin işletmecisidir. Konukların rahat bir konaklama deneyimi yaşamasını sağlamak için çalışır.",
        'req' => null
    ],
    [
        'title' => "Palyaço",
        'description' => "Eğlence ve gösteri amaçlı kostüm giyen, çocuklara ve yetişkinlere neşe katmak için mizah ve yetenek sergileyen kişidir. Partilerde ve etkinliklerde performans gösterir.",
        'req' => null
    ],
    [
        'title' => "Piyanist",
        'description' => "Piyano çalarak müzik yapan, konserler veren veya çeşitli etkinliklerde performans sergileyen müzisyendir. Melodiler ve armonilerle dinleyicilere duygusal bir deneyim sunar.",
        'req' => null
    ],
    [
        'title' => "Deve",
        'description' => "Sahibinden kaçan bu deve şehirde gezer tıpki sokak köpeği, sokak kedisi gibi.",
        'req' => null
    ],
    [
        'title' => "Ağır Yaşamlar Vakfı Başkanı",
        'description' => "Aşırı kilolu ve tembel bir yaşam tarzına sahip olan, toplumdaki sorunlara duyarsız kalabilen kişidir. Vakfın başkanı olarak, iyi niyetle hareket etse de, genellikle hareketsiz bir yaşam sürmekte ve bu nedenle kendisi için sağlıklı çözümler üretmekte zorlanmaktadır.",
        'req' => null
    ],
    [
        'title' => "Ramazan Davulcusu",
        'description' => "Ramazan ayı boyunca sahur vaktinde insanları uyandırmak için davul çalan kişidir. Geleneksel bir rol üstlenerek topluma hizmet eder.",
        'req' => null
    ],
    [
        'title' => "Sihirbaz",
        'description' => "İlginç ve eğlenceli gösterilerle izleyicileri şaşırtan, illüzyon teknikleri kullanarak performans sergileyen sanatçıdır. Eğlence dünyasında dikkat çeker.",
        'req' => null
    ],
];

$illegalJobs = [
    [
        'title' => "Keko",
        'description' => "Şehirde yeni olan ve yüksek hedefleri bulunan kişilerin başlangıç noktasıdır. Arabalar, yatlar ve villalar hayal değil, birer hedeftir. Unutma ki, tüm suçlar ufak bir şekilde başlar.",
        'req' => null
    ],
    [
        'title' => "Çete Üyesi",
        'description' => "Şehirde biraz zaman geçirip temelleri kavradıktan sonra, tebrikler! Artık ufak çetelerle gizli yerlerde kirli dolar kazanmanın tam zamanı.",
        'req' => "İlk önce Keko Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Çete Lideri",
        'description' => "Artık arka sokakları tamamen tanıdın. Eskiden senin gibi tecrübesiz gençleri toplayarak bir çete kurmanın tam zamanı. Ne kadar toplu gezmek güvenli hissettirse de, diğer çetelerin ve polislerin dikkatini çekmemeye özen göster.",
        'req' => "İlk önce Çete Lideri Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Mülteci",
        'description' => "Savaş, zulüm veya diğer zorlayıcı koşullar nedeniyle yaşadıkları yerden kaçan ve güvenli bir yaşam arayan bireylerdir. Yeni bir topluma uyum sağlama çabası içindedirler ve destek arayışındadırlar. Ayrıca kirli dolar üreterek hayatta kalmaya çalışırlar.",
        'req' => null
    ],
    [
        'title' => "Mülteci Haklarını Koruma Derneği Başkanı",
        'description' => "Mültecilerin haklarını savunmak ve ihtiyaç duydukları desteği sağlamakla görevli olan, derneğin faaliyetlerini yöneten liderdir. Mültecilerin topluma entegrasyonu ve haklarının korunması için çeşitli projeler geliştirmektedir.",
        'req' => "İlk önce Mülteci mesleğinde deneyim kazanmanız gerekiyor."
    ],

    [
        'title' => "Mafya Üyesi",
        'description' => "Sonunda biraz yaşlandın ve büyüklerin ligine adım attın. Artık basit suçlar ilgini çekmiyor; yeni açılan saksılardan güzel paralar kazanmaya başlayabilirsin.",
        'req' => "İlk önce Çete Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Mafya Babası",
        'description' => "Adı bile yeterli. Bu şehirde mafya babası olmak kolay olmasa da, olduğunda saygınlık beraberinde gelecektir.",
        'req' => "İlk önce Mafya Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Korsan",
        'description' => "Artık şehirde değilsin. Burada kendi kuralların var. Gerçek bir korsan ol ve korsan gibi yaşa.",
        'req' => "İlk önce Mafya Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Kaptan",
        'description' => "Korsanların başısın. Lüks bir yaşam sürmesen de, kaçak mallarla şehirdekilerden daha rahat bir yaşam sürdüğün kesin.",
        'req' => "İlk önce Korsan Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Eşkiya",
        'description' => "Dağa çıkmak kolay olmasa da, burada çok sayıda saksılarınla ürettiğin mahsuller sana iyi bir kazanç sağlayacaktır. Sokağa çıkma yasağında devlete karşı gelerek şehri dar edebilirsin.",
        'req' => "İlk önce Korsan Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Elebaşı",
        'description' => "Köyün ağası sensin. Eşkiyaların emirlerine uymak zorundadır. Eğer biri emrine uymuyorsa, ona ceza vermek senin elindedir. Eşkiyalarınla beraber devlete kafa tutmanın eğlenceli bir yolunu keşfet!",
        'req' => "İlk önce Eşkiya Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Sefir",
        'description' => "MoonCity'nin Sefiri, Baron adına şehirdeki illegal eylemleri yürütmekten sorumludur. İllegaller ona saygı göstermek zorundadır.",
        'req' => null
    ],
    [
        'title' => "Baron",
        'description' => "Baron illegalin en tepesindeki kişidir. Tüm mafya, çete ve familyalar ona bağlı çalışmaktadır. İllegaller ona saygı göstermek zorundadır.",
        'req' => null
    ],
    [
        'title' => "Aşiret Üyesi",
        'description' => "Aşiretinin bir üyesi olarak, geçmişin ve geleneklerinle gurur duyuyorsun. Bitki üretimi ve kirli dolar üretimi yaparak, aşiretinin güçlenmesine katkıda bulunuyorsun. Ancak, bu yolda birçok tehlikeyle karşılaşacağının farkındasın.",
        'req' => "İlk önce Eşkiya ve Korsan Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Aşiret Lideri",
        'description' => "Aşiretin artık senin liderliğinde. Bitki ve kirli dolar üretimi konusundaki deneyimlerinle, diğer aşiretlerle mücadele etmelisin. Sadece gücünü korumakla kalmayacak, aynı zamanda aşiretini de daha ileriye taşımalısın.",
        'req' => "İlk önce Aşiret Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "İtalyan Mafya Üyesi",
        'description' => "İtalyan mafyası, gelenekleri ve aile bağlarıyla tanınır. Artık ailenin bir parçasısın ve yeraltı dünyasının sırlarını öğrenmeye başladın. Bitki üretimi ve kirli dolar üretimi yaparak, bu dünyanın tehlikeleriyle yüzleşmeyi öğreniyorsun.",
        'req' => "İlk önce Eşkiya ve Korsan Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "İtalyan Mafya Babası",
        'description' => "Bir mafya babası olarak, gücünü ve otoriteni kanıtlaman gerekecek. Artık sadece Bitki üretmekle kalmayacak, aynı zamanda kirli dolar üretimiyle de ilgileneceksin. Düşmanların her köşede seni bekliyor; bu yüzden dikkatli olmalısın.",
        'req' => "İlk önce İtalyan Mafya Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Rus Mafya Üyesi",
        'description' => "Şehirdeki en güçlü güçlerden birinin parçası olmanın gururunu yaşıyorsun. Rus mafyası, gizlilik ve sadakat üzerine kuruludur. Bitki üretimi yaparak ve kirli dolar basma konusunda yeteneklerinle dikkat çekmeye başladın; artık seni tanıyorlar ve saygı gösteriyorlar.",
        'req' => "İlk önce Eşkiya ve Korsan Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Rus Mafya Babası",
        'description' => "Bu şehirde Rus mafyasının lideri olmak, büyük bir sorumluluktur. Kendi çeteni kurduktan sonra, düşmanlarınla yüzleşmek zorunda kalacaksın. Bitki üretimi ve kirli dolar üretimi konularında söz sahibi olmanın yanı sıra, düşmanlarına karşı güç gösterileri yapmayı da öğrenmelisin.",
        'req' => "İlk önce Rus Mafya Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Triads Mafya Üyesi",
        'description' => "Triads, tarih ve geleneklerle dolu bir kültüre sahip. Artık bu kültürün bir parçası olarak Bitki üretimi ve kirli dolar üretimi yapıyorsun. Gizli bağlantılarınla, bu karanlık dünyada kendine bir yer edinmeye çalışıyorsun.",
        'req' => "İlk önce Eşkiya ve Korsan Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Triads Mafya Lideri",
        'description' => "Triads'ın lideri olmak, büyük bir sorumluluktur. Artık sadece kendi çeteni değil, tüm örgütü yönetmek zorundasın. Bitki ve kirli dolar üretimi konusunda uzmanlaşarak, düşmanlarına karşı güçlü bir lider olmalısın. Her kararın, hem seni hem de çetenin kaderini belirleyecek.",
        'req' => "İlk önce Triads Mafya Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Ninja",
        'description' => "Gizli görevlerde uzmanlaşmış, yüksek seviyede dövüş becerilerine sahip bir savaşçıdır. Katana ustasıdır ve bu kılıcıyla hızlı ve etkili saldırılar gerçekleştirebilir. Ayrıca, kirli dolar üretimi yaparak kendi kaynaklarını yaratma konusunda da beceriklidir.",
        'req' => null,
        'vip' => 2
    ],
    [
        'title' => "Bilim Adamı",
        'description' => "Bilime adım atmaktan çekinmiyorsun. Sürekli yeni formüller deniyor ve sonunda Bitkinin kalitesini artıracak malzemeyi buluyorsun.",
        'req' => "İlk önce Yeni Faction lider(Tarikat, Kore, Motorcu Çetesi...) Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Emekli Doktor",
        'description' => "Artık yaşını almışsın. Yıllardır çalıştığın hastaneden emekli oldun; paran anca borçlarını kapatmaya yetiyor. Bu durumdan müzdaripsin ve karanlık tarafa geçmeyi kendine hak görüyorsun; bu da en büyük hakkındır.",
        'req' => "İlk önce Belediye İşçisi, ATT ve Doktor Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],

    [
        'title' => "Çingene Çetesi Üyesi",
        'description' => "Çingeneler, şehirde Bitki üretiminde söz sahibidir. Bitkiları yükseltebilme yeteneğine sahip olarak bu karanlık dünyada yer alabilirsin.",
        'req' => "İlk önce Triads Mafye Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Çingene Çetesi Lideri",
        'description' => "Çingene çetesinin lideri olarak, Bitki üretim sürecini yönetmek ve çeteni en iyi şekilde yönlendirmek zorundasın. Bitkileri yükseltmek, seni diğer çetelerden ayıracak önemli bir özellik olacaktır.",
        'req' => "İlk önce Çingene Çetesi Üyesi, riads Mafye Lideri ve Aşiret Lideri Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Kore Mafyası Üyesi",
        'description' => "Kore mafyası, Triadslardan sonra Asya'dan gelen bir güç olarak, şehirde Bitki üretimi yapmaktadır. Bitkileri yükseltme yeteneğinle, bu güçlü gruba katılmanın avantajlarını kullanabilirsin.",
        'req' => "İlk önce Rus Mafyası Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Kore Mafyası Lideri",
        'description' => "Kore mafyasının lideri olarak, çetenin işlerini yürütmek ve düşmanlarına karşı güçlü bir duruş sergilemek senin sorumluluğundadır. Bitkileri yükseltme yeteneğin, seni diğer çetelerden ayıran en büyük özelliğin olacaktır.",
        'req' => "İlk önce Kore Mafyası Üyesi, Rus Mafyası Babası ve Aşiret Lideri Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Haydut Çetesi Üyesi",
        'description' => "Keke Köyü’nün yeni ferdi olarak, artık KEKE Köyünde Bitki üretimi yapma şansına sahipsin. Bitkileri yükseltme becerinle, şehirdeki diğer çetelerle rekabet edebilirsin.",
        'req' => "İlk önce İtalyan Mafye Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Haydut Çetesi Lideri",
        'description' => "Haydut çetesinin lideri olarak, çetenin tüm operasyonlarını yönetmek senin sorumluluğundadır. Bitki üretimi ve yükseltme süreçlerini kontrol ederek, düşmanlarına karşı sağlam bir duruş sergilemelisin.",
        'req' => "İlk önce Haydut Çetesi Üyesi, İtalyan Mafye Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Çeçen Mafya Üyesi",
        'description' => "Çeçen mafyasının bir üyesi olarak, yüksek seviye printerlarla para üretimi yapma fırsatına sahipsin. Çetenin gücünü artırmaya yardımcı olabilirsin.",
        'req' => "İlk önce Rus Mafyası Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Çeçen Mafya Lideri",
        'description' => "Çeçen mafyasının lideri olarak, çetenin en üst düzey operasyonlarını yönetmek zorundasın. Yüksek seviye printerlarla para üretimi yaparak da ailene yardımcı olabilirsin.",
        'req' => "İlk önce Çeçen Mafya Üyesi, Rus Mafya Babası ve Aşiret Lideri Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Tarikat Üyesi",
        'description' => "Dini bir yapı olan tarikatın bir üyesi olarak, yeni para basma makineleriyle para üretimi yapıyorsun. Ek olarak, liderinin önderliğinde ritüel rolleri yaparak tarikatın gizemli dünyasına adım atıyorsun.",
        'req' => "İlk önce İtalyan Mafye Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Tarikat Lideri",
        'description' => "Tarikatın lideri olarak, tüm üyeleri yönetmek ve yeni para basma makineleriyle para üretimini kontrol etmek senin sorumluluğundadır. Ayrıca, ritüel rolleri organize ederek, tarikatın gücünü artırmalısın.",
        'req' => "İlk önce Tarikat Üyesi, İtalyan Mafye Babası ve Aşiret Lideri Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Güney Kartel Üyesi",
        'description' => "Güney Karteli’nin bir üyesi olarak, şehirde Bitki üretimini üstleniyorsun. Bitkileri yükseltme yeteneğinle, kartelin gücüne katkıda bulunabilirsin.",
        'req' => "İlk önce Rus Mafyası Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Güney Kartel Lideri",
        'description' => "Güney Karteli’nin lideri olarak, tüm operasyonları yönetmek senin sorumluluğundadır. Bitkileri yükseltme ve üretim süreçlerini kontrol ederek, kartelin gücünü artırmalısın.",
        'req' => "İlk önce Güney Kartel Üyesi, Rus Mafya Babası ve Aşiret Lideri Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Kuzey Kartel Üyesi",
        'description' => "Kuzey Karteli’nin bir üyesi olarak, şehirde Bitki üretimini üstleniyorsun. Bitkileri yükseltme becerinle, kartelin etkisini artırmak için mücadele edebilirsin.",
        'req' => "İlk önce İtalyan Mafye Üyesi ve Triads Mafye Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Kuzey Kartel Lideri",
        'description' => "Kuzey Karteli’nin lideri olarak, tüm kartelin işlerini yönetmek zorundasın. Bitkileri yükseltme ve üretim süreçlerini kontrol ederek, kartelin en güçlü gücü haline gelmesini sağlamalısın.",
        'req' => "İlk önce Kuzey Kartel Üyesi, İtalyan Mafye Babası ve Triads Mafye Lideri Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Motor Çetesi Üyesi",
        'description' => "Motor çetesinin bir üyesi olarak, sahip olduğun motorlarla şehirde illegal roller yapma fırsatına sahipsin. Ayrıca, yeni para basma makineleriyle para basma işlemlerine de katılabilirsin.",
        'req' => "İlk önce İtalyan Mafye Üyesi ve Triads Mafye Üyesi Mesleğinde Deneyim Kazanmanız gerekiyor."
    ],
    [
        'title' => "Motor Çetesi Lideri",
        'description' => "Motor çetesinin lideri olarak, çeteni yönetmek ve yeni para basma makineleriyle para üretimini kontrol etmek zorundasın. Aynı zamanda, motorlarınla gerçekleştireceğin illegal eylemleri organize etmelisin.",
        'req' => "İlk önce Motor Çetesi Üyesi, İtalyan Mafye Babası ve Triads Mafye Lideri Mesleğinde Deneyim Kazanmanız gerekiyor."
    ]
];

$ttt_detectives = [
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
];

$ttt_traitors = [
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
];
?>