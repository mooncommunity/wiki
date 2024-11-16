<?php
$baseUrl_Path = "";
$baseUrl = "https://b0.moonrehber.com" . $baseUrl_Path;
//$baseUrl = "http://0.0.0.0:4000" . $baseUrl_Path;
$DefaultOGImage = "/assets/image/og-image.png";
//================================================================
$darkrp_workshop = "https://steamcommunity.com/workshop/filedetails/?id=1545171095";
$ttt_workshop = "https://steamcommunity.com/workshop/filedetails/?id=369504622";

$darkrp_ip = "91.151.94.211:27015";
$ttt_ip = "91.151.94.211:28015";

$darkrp_ip1 = "steam://connect/$darkrp_ip";
$ttt_ip1 = "steam://connect/$ttt_ip";

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
                "description" => "Belediye işlerinde %20 daha fazla XP sağlar. Kutulardan çıkar.",
                "class" => randomBSColor(3),
            ],
            [
                "name" => "İmamın Abdest Suyu",
                "description" => "İmamdan aldığınız XP bonusunu %20 oranında artırır. Kutulardan çıkar.",
                "class" => randomBSColor(4),
            ],
            [
                "name" => "Fileto Bıçağı",
                "description" => "Balıklardan elde edilen tecrübeyle kazandığınız XP'yi %25 artırır. Kutulardan çıkar.",
                "class" => randomBSColor(5),
            ],
            [
                "name" => "Beylik Tabancası",
                "description" => "Para basma makinelerini ve bitkileri yok ettiğinizde kazandığınız XP'yi %100 artırır. Kutulardan çıkar. <span class='text-primary-emphasis'>(Devlet çalışanları için geçerlidir)</span>",
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
                "description" => "Kirli dolar temizlerken %10 NPC'ye daha az komisyon ödersiniz. Kutulardan çıkar.",
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
        'description' => "MoonCity’de her türlü arızayı gidermekle yükümlü devlet çalışanısın; şehrin gizli kahramanlarından biri!",
        'req' => null
    ],
    [
        'title' => "Zabıta",
        'description' => "Şehirde düzeni sağlamak ve halk sağlığını korumak için görev yapıyorsun; sokakların gözü kulağısın!",
        'req' => null
    ],
    [
        'title' => "Zabıta Amiri",
        'description' => "Ekipleri yönetip şehrin düzenini koruyorsun; vatandaşların haklarının güvencesi sensin. ",
        'req' => "İlk önce Zabıta Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Bekçi",
        'description' => "Gece ve gündüz devriye atarak güvenliği sağlıyorsun; olası tehlikelere karşı her an tetikte bekliyorsun. Asayiş Polis Amirini dinlemek zorundasın!",
        'req' => null
    ],
    [
        'title' => "Gardiyan",
        'description' => "Polis karakolundaki hapishanede güvenliği sağlamakla görevli bir güvenlik görevlisisin. Asayiş Polis Amirini dinlemek zorundasın; senin gözün her şeyde!",
        'req' => null
    ],
    [
        'title' => "Trafik Polis Memuru",
        'description' => "Şehir içinde yolların güvenliğini sağlamak, trafik akışını düzenlemek ve sürücülerin kurallara uymasını denetlemekle görevli birisin. Trafik Polis Amirini dinlemek zorundasın; eğer o yoksa Asayiş Polis Amirinin sözünü dinlemen gerekiyor.",
        'req' => "İlk önce Bekçi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Trafik Polisi Amiri",
        'description' => "Trafik düzenini sağlamak için ekipleri yönetiyor, kazaların önlenmesi ve sürücülerin güvenliğinin artırılması için stratejiler geliştiriyorsun. Emniyet Genel Müdürünü dinlemek zorundasın.",
        'req' => "İlk önce Trafik Polis Memuru Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Yunus Polisi",
        'description' => "Hızlı müdahale ve devriye görevleriyle suç öncesi ve sonrası güvenliği sağlamakla sorumlusun. Motorlu devriye ekiplerinin bir parçası olarak sokaklarda her an hazır bekliyorsun. Asayiş Polis Amirini dinlemek zorundasın!",
        'req' => "İlk önce Trafik Polis Memuru Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Polis Asayiş Memuru",
        'description' => "Şehir içinde halkın güvenliğini sağlamak, suçları önlemek ve toplumsal düzeni korumak için aktif olarak devriye gezen bir güvenlik görevlisisin. Sokaklarda her an güvenliği sağlamakla görevlisin!",
        'req' => "İlk önce Trafik Polis Memuru Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Polis Asayiş Amiri",
        'description' => "Polis Asayiş ekiplerinin faaliyetlerini yöneterek, suç önleme stratejileri geliştiriyor ve toplumsal güvenliği artırmak için çalışıyorsun. Emniyet Genel Müdürünü dinlemek zorundasın; liderlik pozisyonunda senin de büyük bir rolün var!",
        'req' => "İlk önce Polis Asayiş Memuru Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Sivil Polis",
        'description' => "EGM'ye bağlı olarak illegal bölgelere sızıp bilgi topluyorsun. Bu sırada Polis Asayiş Amirini dinlemek zorundasın; gizli görevlerde bilgi senin en büyük silahın!",
        'req' => null,
        'vip' => 1
    ],
    [
        'title' => "Polis Özel Harekat Memuru",
        'description' => "Yüksek riskli operasyonlarda yer alarak terörle mücadele ve narkotik operasyonları gibi güvenlik tehditlerine karşı müdahale eden uzman bir güvenlik görevlisisin.",
        'req' => "İlk önce Polis Asayiş Memuru Mesleğinde Deneyim Kazanman gerekiyor.",
        'whitelist' => true,
    ],
    [
        'title' => "Polis Özel Harekat Köpeği",
        'description' => "Polis özel harekat birimlerinde görev yapan eğitimli bir köpeksin. Acil durumlarda ekip üyelerine destek sağlarken, yaralıları bulma ve kurtarma görevlerinde de rol alıyorsun.",
        'req' => "İlk önce Sokak Köpeği ve Sokak Kedisi Mesleğinde Deneyim Kazanman gerekiyor.",
        'whitelist' => true,
    ],
    [
        'title' => "Polis Özel Harekat Doktoru",
        'description' => "Polis özel harekat birimlerinde görev yapan personele tıbbi destek sağlıyorsun. Acil durumlarda yaralıları tedavi ederek operasyon güvenliğine katkıda bulunuyorsun.",
        'req' => "İlk önce Doktor Mesleğinde Deneyim Kazanman gerekiyor.",
        'whitelist' => true,
    ],
    [
        'title' => "Polis Özel Harekat Bulldozer",
        'description' => "Yüksek riskli operasyonlarda yer alarak terörle mücadele ve narkotik operasyonları gibi güvenlik tehditlerine karşı müdahale eden uzman bir güvenlik görevlisisin.",
        'req' => "İlk önce Polis Özel Harekat Memuru Mesleğinde Deneyim Kazanman gerekiyor.",
        'whitelist' => true,
    ],
    [
        'title' => "Polis Özel Harekat Keskin Nişancısı",
        'description' => "Yüksek riskli operasyonlarda görev alarak terörle mücadele ve narkotik operasyonlarına karşı müdahale eden bir keskin nişancısın.",
        'req' => "İlk önce Polis Asayiş Memuru Mesleğinde Deneyim Kazanman gerekiyor.",
        'whitelist' => true,
    ],
    [
        'title' => "Polis Özel Harekat Amiri",
        'description' => "Polis özel harekat ekiplerinin yönetimini üstleniyor, stratejik planlamalar yapıyorsun. Operasyonel başarı için personelinin eğitim ve gelişiminden sen sorumlusun; liderliğinle ekip ruhunu güçlendiriyorsun!",
        'req' => null,
        'whitelist' => true,
    ],
    [
        'title' => "Acil Tıp Teknisyeni",
        'description' => "MoonCity'de bayılmış insanları hayata döndürmek için çaba gösteriyorsun; acil durumlarda hayat kurtaran kahramanlardansın.",
        'req' => "İlk önce Belediye İşçisi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Doktor",
        'description' => "MoonCity'de bayılmış olanları hayata döndürmekle ve reçete yazmakla görevlisin; sağlık hizmetlerinin vazgeçilmez bir parçasısın.",
        'req' => "İlk önce Acil Tıp Teknisyeni Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "İtfaiye",
        'description' => "MoonCity'de çıkan yangınları söndürmekle görevli devlet çalışanı olarak, hayat kurtaran bir görev üstleniyorsun.",
        'req' => "İlk önce Belediye İşçisi ve Zabıta Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Belediye Başkanı",
        'description' => "MoonCity'nin yerel yönetimini yöneterek kamu hizmetlerini organize eden ve vatandaşların ihtiyaçlarına çözümler üreten lider sensin; şehirdeki toplumsal sorunlara karşı duyarlı bir yaklaşım sergiliyorsun.",
        'req' => null
    ],
    [
        'title' => "Belediye Başkanı Yardımcısı",
        'description' => "Belediye Başkanına destek veriyor, onun görevlerini üstlenmesine yardımcı oluyorsun. Yerel yönetim süreçlerinde etkin bir rol oynayarak kamu hizmetlerinin düzenlenmesi ve vatandaşlarla iletişimin sağlanmasında önemli bir görev üstleniyorsun.",
        'req' => null
    ],
    [
        'title' => "Hakim",
        'description' => "Adalet sisteminin işleyişini sağlayan ve davaları değerlendirip taraflar arasında adil bir karar veren bir yargı mensubusun. Hukukun üstünlüğünü koruyarak toplumsal düzenin sağlanmasında önemli bir rol üstleniyorsun.",
        'req' => "İlk önce Gardiyan Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Savcı",
        'description' => "Suçlamaları yöneten ve davaları takip eden bir hukuk uzmanısın. Adaletin tecelli etmesi için delilleri toplayıp mahkemeye sunarak kamu adına davaları açıyorsun.",
        'req' => "İlk önce Hakim Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Emniyet Genel Müdürü",
        'description' => "MoonCity'de güvenlik stratejilerini belirleyerek polis teşkilatının etkinliğini artırmak ve kamu güvenliğini sağlamakla sorumlusun. Tüm polis birimleri senin sözünü dinlemek zorunda; şehrin güvenliği senin elinde!",
        'req' => null,
        'whitelist' => true,
    ],
    [
        'title' => "Jandarma Özel Harekat Komandosu",
        'description' => "Yüksek riskli görevlerde uzmanlaşmış bir askeri personelsin. Terörle mücadele ve asayiş sağlama gibi kritik operasyonları gerçekleştirmek üzere eğitim aldın.",
        'req' => "İlk önce Polis Özel Harekat Memuru ve ya Jandarma Komutanı Mesleğinde Deneyim Kazanman gerekiyor.",
        'whitelist' => true,
        'close' => true
    ],
    [
        'title' => "Jandarma Özel Harekat Doktoru",
        'description' => "Jandarma özel harekat birimlerinde görev yaparak personele tıbbi hizmet sunuyorsun. Acil durumlarda yaralıların tedavisini gerçekleştirip operasyonlarda sağlık güvenliğini sağlıyorsun.",
        'req' => "İlk önce Polis Özel Harekat Doktoru Mesleğinde Deneyim Kazanman gerekiyor.",
        'whitelist' => true,
        'close' => true
    ],
    [
        'title' => "Jandarma Özel Harekat Komutanı",
        'description' => "Jandarma Özel Harekat biriminin yönetiminden sorumlusun; operasyonel stratejileri belirleyerek ekibinin etkinliğini artırmak için liderlik yapıyorsun. Ekip arkadaşlarının güvenliği ve başarısı senin elinde!",
        'req' => null,
        'whitelist' => true,
        'close' => true
    ],
    [
        'title' => "Milli Istihbarat Teskilatı Personeli",
        'description' => "Çeşitli birimlerde görev alarak ulusal güvenliği sağlamak için istihbarat toplama, analiz yapma ve operasyonel faaliyetlerde bulunan uzmanlardan birisin.",
        'req' => "İlk önce Sivil Polis Mesleğinde Deneyim Kazanman gerekiyor.",
        'vip' => 2
    ],
    [
        'title' => "Milli Istihbarat Teskilatı Müsteşarı",
        'description' => "Milli İstihbarat Teşkilatı'nın en üst düzey yöneticisi olarak teşkilatın stratejik hedeflerini belirliyor ve operasyonlarını yönetiyorsun. Devletin güvenlik politikalarına yön vermekle sorumlusun; ulusal güvenlik için kritik bir rol oynuyorsun!",
        'req' => null,
        'whitelist' => true,
        'vip' => 2
    ],
    [
        'title' => "Jandarma",
        'description' => "Şehir dışında halkın güvenliğini sağlamak, suçları önlemek ve toplumsal düzeni korumak için devriye gezen bir güvenlik görevlisisin. Aktif bir şekilde görev alarak insanları koruma misyonunu üstleniyorsun.",
        'req' => "İlk önce Jandarma Trafik Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Jandarma Trafik",
        'description' => "Şehir dışında yolların güvenliğini sağlamakla, trafik akışını düzenlemekle ve sürücülerin kurallara uymasını denetlemekle sorumlusun. Trafikteki düzeni sağlamak için sürekli dikkatli olmalısın.",
        'req' => "İlk önce Jandarma Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Jandarma Komutanı",
        'description' => "Jandarma ve jandarma trafik personelinin faaliyetlerini yöneterek suç önleme stratejileri geliştiriyor ve toplumsal güvenliği artırmak için çalışmalar yürütüyorsun. Liderlik becerilerinle ekibin başarısını sağlıyorsun. ",
        'req' => "İlk önce Jandarma ve Polis Asayiş Amiri Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Belediye Başkanı Koruması",
        'description' => "MoonCity'de belediye başkanını korumakla görevlisin; güvenlik sağlamak için her zaman tetikte olmalısın. Önemli bir sorumluluğun var!",
        'req' => "İlk önce Jandarma Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Belediye Başkanı Şoförü",
        'description' => "MoonCity'de belediye başkanının şoförlüğünü yapmakla görevlisin; onu güvenli bir şekilde her yere ulaştırmak için hazırda bekliyorsun. Sorumluluğun büyük!",
        'req' => "İlk önce Taksici Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
];

$esnafJobs = [
    [
        'title' => "Güvenlik Görevlisi",
        'description' => "Sen, bulunduğun yerde güvenliği sağlamakla görevlisin. Potansiyel tehlikeleri önceden sezip, olaylara hemen müdahale ediyorsun. İnsanların ve mülklerin güvenliği için elinden geleni yapıyorsun.",
        'req' => null
    ],
    [
        'title' => "Yapı Market Sahibi",
        'description' => "Fiziksel ve aletlerle donatılmış bir mağazanın sahibisin. Çeşitli inşaat ve güvenlik malzemelerini satarken, müşteri ihtiyaçlarını anlamak için sürekli bir çaba içindesin.",
        'req' => null
    ],
    [
        'title' => "Poligon Sahibi",
        'description' => "Atış eğitimleri veren bir poligon işletiyorsun. Silah satışından, güvenli bir atış ortamı sağlamaya kadar birçok işle ilgileniyorsun. Ayrıca atış kursları düzenleyerek insanların becerilerini geliştirmelerine yardım ediyorsun.",
        'req' => null,
        'gunshop' => true,
    ],
    [
        'title' => "Çiğköfte Salonu Sahibi",
        'description' => "Lezzetli çiğköfteleri hazırlayıp sunarak, müşterilerine hijyenik ve keyifli bir ortamda hizmet vermeyi hedefliyorsun. Her lokmada damak tadını yakalamak için özen gösteriyorsun.",
        'req' => null
    ],
    [
        'title' => "Garson",
        'description' => "Bir restoran veya kafede, sipariş alıp servis yaparak misafirlerin memnuniyetini sağlamaya çalışıyorsun. Gıda güvenliği ve hijyen konularına dikkat ederek, herkesin hoş bir deneyim yaşamasını sağlıyorsun.",
        'req' => null
    ],
    [
        'title' => "İtalyan Restoranı Sahibi",
        'description' => "İtalyan mutfağının lezzetlerini sunan bir restoranın sahibisin. Geleneksel tariflerle oluşturduğun menü, müşterilere unutulmaz bir yemek deneyimi yaşatmak için tasarlandı.",
        'req' => null
    ],
    [
        'title' => "AVM Sahibi",
        'description' => "Farklı mağaza ve restoranları bir araya getiren bir alışveriş merkezinin sahibisin. Ziyaretçilere çeşitli alışveriş ve eğlence imkanı sunarken, AVM'nin yönetimini de üstleniyorsun.",
        'req' => null
    ],
    [
        'title' => "Eczacı",
        'description' => "Hastaların sağlık ihtiyaçlarına yönelik ilaçlar sunuyorsun. Bio-organ ve Recoil gibi ürünlerle, sağlık konularında yardımcı olmayı amaçlıyorsun.",
        'req' => null
    ],
    [
        'title' => "Simitçi",
        'description' => "Taze simitler ve diğer unlu mamuller üreterek, sokak lezzetleri sunuyorsun. Müşterilerin her zaman sıcak ve çıtır simitlerle mutlu olmasını sağlıyorsun.",
        'req' => null
    ],
    [
        'title' => "Tavuk Pilavcı",
        'description' => "Lezzetli taze tavuk ve pilav sunarak, misafirlere doyurucu bir yemek deneyimi sağlıyorsun. Hızlı ve kaliteli hizmetinle, herkesin keyif almasını hedefliyorsun.",
        'req' => null
    ],
    [
        'title' => "Kebapçı",
        'description' => "Çeşitli kebap çeşitlerini hazırlayıp sunarak, misafirlerine geleneksel Türk mutfağının tadını çıkarma fırsatı veriyorsun. Her kebapta ustalığını konuşturuyorsun.",
        'req' => null
    ],
    [
        'title' => "Kafe Sahibi",
        'description' => "Kahve, çay ve atıştırmalıklar sunan bir kafenin sahibisin. Sıcak ve samimi bir ortam yaratmaya çalışarak, sosyal bir buluşma yeri olmayı hedefliyorsun.",
        'req' => null
    ],
    [
        'title' => "Hamburgerci",
        'description' => "Taze malzemelerle hazırladığın hamburgerleri müşterilerine sunuyorsun. Her burgerde, lezzetli ve doyurucu bir deneyim yaşatmayı amaçlıyorsun.",
        'req' => null
    ],
    [
        'title' => "Dönerci",
        'description' => "Döner kebap hazırlayıp sunarak, misafirlerine hızlı ve doyurucu bir yemek deneyimi yaşatıyorsun. Her lokmada lezzeti hissettirmeyi amaçlıyorsun.",
        'req' => null
    ],
    [
        'title' => "Dondurmacı",
        'description' => "Farklı dondurma çeşitleri sunarak, yaz aylarında serinletici lezzetler sağlıyorsun. Taze ve doğal dondurmalarla müşteri memnuniyetini sağlıyorsun.",
        'req' => null
    ],
    [
        'title' => "Çorba & Paça Salonu Sahibi",
        'description' => "Lezzetli çorba ve paça yemekleri sunarak, sıcak ve besleyici bir deneyim yaşatıyorsun. Geleneksel tatları yaşatmayı amaçlıyorsun.",
        'req' => null
    ],
    [
        'title' => "Büfe Sahibi",
        'description' => "Atıştırmalıklar ve içecekler sunan küçük bir işletmenin sahibisin. Hızlı hizmetle, müşterilerin temel ihtiyaçlarını karşılamaya çalışıyorsun.",
        'req' => null
    ],
    [
        'title' => "Dövüş Sanatları Öğretmeni",
        'description' => "Öğrencilere dövüş sanatlarını ve savunma tekniklerini öğretmekle görevlisin. Fiziksel ve zihinsel gelişimi destekleyerek, öğrencilerin kendine güven kazanmasını sağlıyorsun.",
        'req' => null
    ],
    [
        'title' => "Mekanik",
        'description' => "Araçların bakım ve onarımıyla ilgileniyorsun. Mekanik bilgi ve becerilerinle, sorunları hızlı bir şekilde çözmeye çalışıyorsun.",
        'req' => null,
        'vip' => 2
    ],
    [
        'title' => "Mühendis",
        'description' => "Farklı alanlarda mühendislik yaparak, yaratıcı çözümler üretiyorsun. Teknik sorunları çözmek için çok yönlü düşünme yeteneğinle projeler geliştiriyorsun.",
        'req' => "İlk önce Yapı market sahibi ve Poligon Sahibi Mesleğinde Deneyim Kazanman gerekiyor.",
        'vip' => 2
    ],
    [
        'title' => "Taksici",
        'description' => "Müşterileri belirli noktalardan alıp istedikleri yere götürüyorsun. Güvenli ve konforlu bir ulaşım sağlamak için trafiği ve güzergahları iyi biliyorsun.",
        'req' => null
    ],
    [
        'title' => "Dolmuş Şoförü",
        'description' => "Belirli bir rota üzerinde yolcu taşıyarak, uygun fiyatlarla ulaşım imkanı sunuyorsun. Toplu taşımaya katkıda bulunarak, insanların hayatlarını kolaylaştırıyorsun.",
        'req' => null
    ],
    [
        'title' => "Kargocu",
        'description' => "Çeşitli yerlerden gelen paketleri alıcılara ulaştırıyorsun. Kargo teslimatı yaparak, müşteri memnuniyetini sağlamayı ön planda tutuyorsun.",
        'req' => null
    ],
    [
        'title' => "Maden İşçisi",
        'description' => "Maden ocaklarında çalışarak, madenleri çıkarmakla görevli birisin. İş güvenliği kurallarına dikkat ederek, zorlu koşullarda çalışıyorsun.",
        'req' => null
    ],
    [
        'title' => "Kereste İşçisi",
        'description' => "Ağaçları kesip kereste haline getiriyorsun. Kereste üretiminde çeşitli makineleri kullanarak kaliteli ahşap ürünler elde ediyorsun.",
        'req' => null
    ],
    [
        'title' => "Doğal Kaynaklar Mühendisi",
        'description' => "Doğal kaynakların verimli kullanımını sağlamak için modern ekipmanlarla çalışıyorsun. Çevresel etkileri azaltarak, sürdürülebilir çözümler geliştiriyorsun.",
        'req' => "İlk önce Maden İşçisi ve Kereste İşçisi Mesleğinde Deneyim Kazanman gerekiyor."
    ],
    [
        'title' => "Doğal Kaynaklar Yüksek Mühendisi",
        'description' => "Doğal kaynakların verimli kullanımını sağlamak için modern ekipmanlarla çalışıyorsun. Çevresel etkileri azaltarak, sürdürülebilir çözümler geliştiriyorsun.",
        'req' => "İlk önce Maden İşçisi ve Kereste İşçisi Mesleğinde Deneyim Kazanman gerekiyor.",
        'vip' => 2
    ],
    [
        'title' => "Ganyan Bayi Sahibi",
        'description' => "At yarışları üzerine bahis alarak gelir elde eden bir işletme sahibisin. Yarışları takip ediyor ve müşterilere bahis imkanı sunuyorsun.",
        'req' => null
    ],
    [
        'title' => "Banka Sorumlusu",
        'description' => "Moon Bank'ta çalışan bir uzmansın. Müşteri taleplerine yanıt veriyor, hesapları yönetiyor ve bankanın kasasını koruyarak güvenliği sağlıyorsun.",
        'req' => null
    ],
    [
        'title' => "İthalatçı",
        'description' => "Yurtdışından ürünlerin ithalatını yapıyorsun. Daha geniş bir ürün yelpazesine sahip olmak için poligon sahibinden yardım alıyorsun.",
        'req' => "Önce Poligon Sahibi deneyimi kazanmalısın.",
        'gunshop' => true,
        'vip' => 2
    ],
    [
        'title' => "Müzisyen",
        'description' => "Müzik besteleme ve icra etme konusunda tutkulu bir sanatçısın. Farklı müzik tarzlarında eserler üreterek dinleyicilere müzik deneyimi sunuyorsun.",
        'req' => null
    ],
    [
        'title' => "Dilenci",
        'description' => "Geçim sağlamak için sokaklarda para veya yiyecek talep eden birisin. Genellikle kalabalık yerlerde bulunuyorsun.",
        'req' => null
    ],
    [
        'title' => "Kimsesiz Çocuk",
        'description' => "Ailesiz bir çocuksun ve ya bakım kurumunda yaşıyorsun ya da sokaktasın. Sevgi ve destek arayışı içindesin.",
        'req' => null
    ],
    [
        'title' => "DJ",
        'description' => "Müzik seti veya bilgisayar kullanarak müzikleri miksleyen birisin. Partilerde eğlenceli atmosferler yaratıyorsun.",
        'req' => null
    ],
    [
        'title' => "Din Adamı",
        'description' => "Bir dinin inançlarını ve ritüellerini yürütüyorsun. Toplumu bilgilendirip rehberlik yapıyorsun.",
        'req' => null
    ],
    [
        'title' => "Kaykaycı",
        'description' => "Kaykay kullanarak çeşitli hareketler ve stiller geliştiren birisin. Genellikle sokaklarda, park veya özel alanlarda kayıyorsun.",
        'req' => null
    ],
    [
        'title' => "Oto Kurtarıcı",
        'description' => "Araçların yolda kalması durumunda yardım sağlayarak onları güvenli bir yere taşıyan bir profesyonelsin. Acil durumlarda sürücülere destek oluyorsun.",
        'req' => null,
        'close' => true
    ],
    [
        'title' => "Sokak Köpeği",
        'description' => "Sokaklarda yaşayan ve insanlardan bağımsız bir şekilde hayatta kalmaya çalışan bir köpeksin. İnsanlara karşı genellikle dostça bir tutum sergiliyorsun.",
        'req' => null
    ],
    [
        'title' => "Sokak Kedisi",
        'description' => "Sokaklarda yaşayan ve beslenme ile barınma ihtiyaçlarını kendi başına karşılayan bir kedisin. İnsanlarla sınırlı bir ilişki kurarak hayatını sürdürüyorsun.",
        'req' => null
    ],
    [
        'title' => "Balıkçı",
        'description' => "Küçük bir gölde balık tutarak geçimini sağlıyorsun. Doğayla iç içe, sakin bir yaşam sürüyorsun.",
        'req' => null
    ],
    [
        'title' => "Piyangocu",
        'description' => "Piyango biletleri satan birisin. Müşterilere bilet satışı yaparak şans oyunlarıyla kazanç sağlamaya çalışıyorsun.",
        'req' => null
    ],
    [
        'title' => "Kurye",
        'description' => "Farklı yerlerden gelen paketleri alıcılara ulaştıran bir meslek dalında çalışıyorsun. Zaman baskısı altında çalışarak müşteri memnuniyetini sağlıyorsun.",
        'req' => null
    ],
    [
        'title' => "MoonTV Çalışanı",
        'description' => "MoonTV kanalı için içerik üreten ya da yayın sürecine katkı sağlayan birisin. Programları düzenleyip çekimlerde yer alıyorsun.",
        'req' => null,
        'vip' => 1
    ],
    [
        'title' => "İmam",
        'description' => "Dini liderlik yapan, vaazlar vererek insanlara rehberlik eden birisin. Camide veya topluluk içinde insanları bir araya getiriyorsun.",
        'req' => null
    ],
    [
        'title' => "Avukat",
        'description' => "Hukuk alanında uzmanlaşmış birisin ve müvekkillerine yasal danışmanlık ile savunma hizmeti sunuyorsun. Mahkeme süreçlerinde müvekkillerini temsil ediyorsun.",
        'req' => null
    ],
    [
        'title' => "Tekel Bayi Sahibi",
        'description' => "Alkol ve diğer ürünlerin satışını yapan bir dükkânın sahibisin. Müşterilerine çeşitli ürünler sunarak gelir elde ediyorsun.",
        'req' => null
    ],
    [
        'title' => "Parkurcu",
        'description' => "Farklı zeminlerde ve engeller arasında akrobatik hareketler yaparak hızlı bir şekilde ilerleyen birisin. Fiziksel yeteneklerinle dikkat çekiyorsun.",
        'req' => null
    ],
    [
        'title' => "Grafitici",
        'description' => "Grafiti sanatıyla sokaklara renk katan bir sanatçısın. Duvarlar veya çeşitli yüzeyler üzerinde yaratıcılığını sergiliyorsun.",
        'req' => null
    ],
    [
        'title' => "Sokak Sanatçısı",
        'description' => "Sokaklarda performans sergileyerek insanlara eğlence sunan birisin. Genellikle bağışlarla geçimini sağlıyorsun.",
        'req' => null
    ],
    [
        'title' => "Motel Sahibi",
        'description' => "Misafirlerine konaklama hizmeti sunan küçük bir otelin işletmecisisin. Konukların rahat bir konaklama deneyimi yaşamasını sağlıyorsun.",
        'req' => null
    ],
    [
        'title' => "Palyaço",
        'description' => "Eğlence ve gösteri amaçlı kostüm giyen, çocuklara ve yetişkinlere neşe katmak için mizah ve yetenek sergileyen birisin. Partilerde ve etkinliklerde performans gösteriyorsun.",
        'req' => null
    ],
    [
        'title' => "Piyanist",
        'description' => "Piyano çalarak müzik yapan, konserler veren ya da çeşitli etkinliklerde performans sergileyen bir müzisyensin. Melodiler ve armonilerle dinleyicilere duygusal bir deneyim sunuyorsun.",
        'req' => null
    ],
    [
        'title' => "Deve",
        'description' => "Sahibinden kaçan bu deve, şehirde gezerken sokak köpeği ve sokak kedisi gibi serbest bir yaşam sürüyor.",
        'req' => null
    ],
    [
        'title' => "Ağır Yaşamlar Vakfı Başkanı",
        'description' => "Aşırı kilolu bir yaşam tarzına sahip, toplumdaki sorunlara karşı duyarsız kalabilen birisin. İyi niyetle hareket etsen de sağlıklı çözümler bulmakta zorlanıyorsun.",
        'req' => null
    ],
    [
        'title' => "Ramazan Davulcusu",
        'description' => "Ramazan ayı boyunca sahur vaktinde insanları uyandırmak için davul çalan birisin. Geleneksel bir rol üstlenerek topluma hizmet ediyorsun.",
        'req' => null
    ],
    [
        'title' => "Sihirbaz",
        'description' => "Eğlenceli ve ilginç gösterilerle izleyicileri şaşırtan bir sanatçısın. Illüzyon teknikleri kullanarak performans sergiliyorsun.",
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
        'req' => "İlk önce Keko Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Çete Lideri",
        'description' => "Artık arka sokakları tamamen tanıdın. Eskiden senin gibi tecrübesiz gençleri toplayarak bir çete kurmanın tam zamanı. Ne kadar toplu gezmek güvenli hissettirse de, diğer çetelerin ve polislerin dikkatini çekmemeye özen göster.",
        'req' => "İlk önce Çete Lideri Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Mülteci",
        'description' => "Savaş, zulüm veya diğer zorlayıcı koşullar nedeniyle yaşadıkları yerden kaçan ve güvenli bir yaşam arayan bireylerdir. Yeni bir topluma uyum sağlama çabası içindesin ve destek arayışındasın. Ayrıca hayatta kalmak için kirli dolar üretmeye çalışıyorsun; zor bir dönemden geçiyorsun.",
        'req' => null
    ],
    [
        'title' => "Mülteci Haklarını Koruma Derneği Başkanı",
        'description' => "Mültecilerin haklarını savunmak ve onlara ihtiyaç duydukları desteği sağlamakla görevli olan derneğin liderisin. Mültecilerin topluma entegrasyonunu sağlamak ve haklarını korumak için çeşitli projeler geliştiriyorsun.",
        'req' => "İlk önce Mülteci Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Mafya Üyesi",
        'description' => "Sonunda biraz yaşlandın ve büyüklerin ligine adım attın. Artık basit suçlar ilgini çekmiyor; yeni açılan saksılardan güzel paralar kazanmaya başlayabilirsin.",
        'req' => "İlk önce Çete Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Mafya Babası",
        'description' => "Adı bile yeterli. Bu şehirde mafya babası olmak kolay olmasa da, olduğunda saygınlık beraberinde gelecektir.",
        'req' => "İlk önce Mafya Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Korsan",
        'description' => "Artık şehirde değilsin. Burada kendi kuralların var. Gerçek bir korsan ol ve korsan gibi yaşa.",
        'req' => "İlk önce Mafya Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Kaptan",
        'description' => "Korsanların başısın. Lüks bir yaşam sürmesen de, kaçak mallarla şehirdekilerden daha rahat bir yaşam sürdüğün kesin.",
        'req' => "İlk önce Korsan Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Eşkiya",
        'description' => "Dağa çıkmak kolay olmasa da, burada çok sayıda saksılarınla ürettiğin mahsuller sana iyi bir kazanç sağlayacaktır. Sokağa çıkma yasağında devlete karşı gelerek şehri dar edebilirsin.",
        'req' => "İlk önce Korsan Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Elebaşı",
        'description' => "Köyün ağası sensin. Eşkiyaların emirlerine uymak zorundadır. Eğer biri emrine uymuyorsa, ona ceza vermek senin elindedir. Eşkiyalarınla beraber devlete kafa tutmanın eğlenceli bir yolunu keşfet!",
        'req' => "İlk önce Eşkiya Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Sefir",
        'description' => "MoonCity'nin Sefiri, Baron adına şehirdeki illegal eylemleri yürütmekten sorumludur. İllegaller ona saygı göstermek zorundadır.",
        'req' => null,
        'whitelist' => true,
    ],
    [
        'title' => "Baron",
        'description' => "Baron illegalin en tepesindeki kişidir. Tüm mafya, çete ve familyalar ona bağlı çalışmaktadır. İllegaller ona saygı göstermek zorundadır.",
        'req' => null,
        'whitelist' => true,
    ],
    [
        'title' => "Aşiret Üyesi",
        'description' => "Aşiretinin bir üyesi olarak, geçmişin ve geleneklerinle gurur duyuyorsun. Bitki üretimi ve kirli dolar üretimi yaparak, aşiretinin güçlenmesine katkıda bulunuyorsun. Ancak, bu yolda birçok tehlikeyle karşılaşacağının farkındasın.",
        'req' => "İlk önce Eşkiya ve Korsan Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Aşiret Lideri",
        'description' => "Aşiretin artık senin liderliğinde. Bitki ve kirli dolar üretimi konusundaki deneyimlerinle, diğer aşiretlerle mücadele etmelisin. Sadece gücünü korumakla kalmayacak, aynı zamanda aşiretini de daha ileriye taşımalısın.",
        'req' => "İlk önce Aşiret Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "İtalyan Mafya Üyesi",
        'description' => "İtalyan mafyası, gelenekleri ve aile bağlarıyla tanınır. Artık ailenin bir parçasısın ve yeraltı dünyasının sırlarını öğrenmeye başladın. Bitki üretimi ve kirli dolar üretimi yaparak, bu dünyanın tehlikeleriyle yüzleşmeyi öğreniyorsun.",
        'req' => "İlk önce Eşkiya ve Korsan Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "İtalyan Mafya Babası",
        'description' => "Bir mafya babası olarak, gücünü ve otoriteni kanıtlaman gerekecek. Artık sadece Bitki üretmekle kalmayacak, aynı zamanda kirli dolar üretimiyle de ilgileneceksin. Düşmanların her köşede seni bekliyor; bu yüzden dikkatli olmalısın.",
        'req' => "İlk önce İtalyan Mafya Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Rus Mafya Üyesi",
        'description' => "Şehirdeki en güçlü güçlerden birinin parçası olmanın gururunu yaşıyorsun. Rus mafyası, gizlilik ve sadakat üzerine kuruludur. Bitki üretimi yaparak ve kirli dolar basma konusunda yeteneklerinle dikkat çekmeye başladın; artık seni tanıyorlar ve saygı gösteriyorlar.",
        'req' => "İlk önce Eşkiya ve Korsan Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Rus Mafya Babası",
        'description' => "Bu şehirde Rus mafyasının lideri olmak, büyük bir sorumluluktur. Kendi çeteni kurduktan sonra, düşmanlarınla yüzleşmek zorunda kalacaksın. Bitki üretimi ve kirli dolar üretimi konularında söz sahibi olmanın yanı sıra, düşmanlarına karşı güç gösterileri yapmayı da öğrenmelisin.",
        'req' => "İlk önce Rus Mafya Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Triads Mafya Üyesi",
        'description' => "Triads, tarih ve geleneklerle dolu bir kültüre sahip. Artık bu kültürün bir parçası olarak Bitki üretimi ve kirli dolar üretimi yapıyorsun. Gizli bağlantılarınla, bu karanlık dünyada kendine bir yer edinmeye çalışıyorsun.",
        'req' => "İlk önce Eşkiya ve Korsan Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Triads Mafya Lideri",
        'description' => "Triads'ın lideri olmak, büyük bir sorumluluktur. Artık sadece kendi çeteni değil, tüm örgütü yönetmek zorundasın. Bitki ve kirli dolar üretimi konusunda uzmanlaşarak, düşmanlarına karşı güçlü bir lider olmalısın. Her kararın, hem seni hem de çetenin kaderini belirleyecek.",
        'req' => "İlk önce Triads Mafya Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Ninja",
        'description' => "Gizli görevlerde uzmanlaşmış, yüksek seviyede dövüş becerilerine sahip bir savaşçısın. Katana ustası olarak bu kılıcınla hızlı ve etkili saldırılar gerçekleştirebiliyorsun. Ayrıca, kirli dolar üretimi yaparak kendi kaynaklarını yaratma konusunda da oldukça beceriklisin. Hem karanlıkta hareket etmekte ustasın, hem de hayatta kalma becerilerinle dikkat çekiyorsun!",
        'req' => null,
        'vip' => 2
    ],
    [
        'title' => "Bilim Adamı",
        'description' => "Bilime adım atmaktan çekinmiyorsun. Sürekli yeni formüller deniyor ve sonunda Bitkinin kalitesini artıracak malzemeyi buluyorsun.",
        'req' => "İlk önce Yeni Faction lider(Tarikat, Kore, Motorcu Çetesi...) Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Emekli Doktor",
        'description' => "Artık yaşını almışsın. Yıllardır çalıştığın hastaneden emekli oldun; paran anca borçlarını kapatmaya yetiyor. Bu durumdan müzdaripsin ve karanlık tarafa geçmeyi kendine hak görüyorsun; bu da en büyük hakkındır.",
        'req' => "İlk önce Belediye İşçisi, ATT ve Doktor Mesleğinde Deneyim Kazanman gerekiyor.",
    ],

    [
        'title' => "Çingene Çetesi Üyesi",
        'description' => "Çingeneler, şehirde Bitki üretiminde söz sahibidir. Bitkiları yükseltebilme yeteneğine sahip olarak bu karanlık dünyada yer alabilirsin.",
        'req' => "İlk önce Triads Mafye Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Çingene Çetesi Lideri",
        'description' => "Çingene çetesinin lideri olarak, Bitki üretim sürecini yönetmek ve çeteni en iyi şekilde yönlendirmek zorundasın. Bitkileri yükseltmek, seni diğer çetelerden ayıracak önemli bir özellik olacaktır.",
        'req' => "İlk önce Çingene Çetesi Üyesi, riads Mafye Lideri ve Aşiret Lideri Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Kore Mafyası Üyesi",
        'description' => "Kore mafyası, Triadslardan sonra Asya'dan gelen bir güç olarak, şehirde Bitki üretimi yapmaktadır. Bitkileri yükseltme yeteneğinle, bu güçlü gruba katılmanın avantajlarını kullanabilirsin.",
        'req' => "İlk önce Rus Mafyası Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Kore Mafyası Lideri",
        'description' => "Kore mafyasının lideri olarak, çetenin işlerini yürütmek ve düşmanlarına karşı güçlü bir duruş sergilemek senin sorumluluğundadır. Bitkileri yükseltme yeteneğin, seni diğer çetelerden ayıran en büyük özelliğin olacaktır.",
        'req' => "İlk önce Kore Mafyası Üyesi, Rus Mafyası Babası ve Aşiret Lideri Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Haydut Çetesi Üyesi",
        'description' => "Keke Köyü’nün yeni ferdi olarak, artık KEKE Köyünde Bitki üretimi yapma şansına sahipsin. Bitkileri yükseltme becerinle, şehirdeki diğer çetelerle rekabet edebilirsin.",
        'req' => "İlk önce İtalyan Mafye Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Haydut Çetesi Lideri",
        'description' => "Haydut çetesinin lideri olarak, çetenin tüm operasyonlarını yönetmek senin sorumluluğundadır. Bitki üretimi ve yükseltme süreçlerini kontrol ederek, düşmanlarına karşı sağlam bir duruş sergilemelisin.",
        'req' => "İlk önce Haydut Çetesi Üyesi, İtalyan Mafye Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Çeçen Mafya Üyesi",
        'description' => "Çeçen mafyasının bir üyesi olarak, yüksek seviye printerlarla para üretimi yapma fırsatına sahipsin. Çetenin gücünü artırmaya yardımcı olabilirsin.",
        'req' => "İlk önce Rus Mafyası Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Çeçen Mafya Lideri",
        'description' => "Çeçen mafyasının lideri olarak, çetenin en üst düzey operasyonlarını yönetmek zorundasın. Yüksek seviye printerlarla para üretimi yaparak da ailene yardımcı olabilirsin.",
        'req' => "İlk önce Çeçen Mafya Üyesi, Rus Mafya Babası ve Aşiret Lideri Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Tarikat Üyesi",
        'description' => "Dini bir yapı olan tarikatın bir üyesi olarak, yeni para basma makineleriyle para üretimi yapıyorsun. Ek olarak, liderinin önderliğinde ritüel rolleri yaparak tarikatın gizemli dünyasına adım atıyorsun.",
        'req' => "İlk önce İtalyan Mafye Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Tarikat Lideri",
        'description' => "Tarikatın lideri olarak, tüm üyeleri yönetmek ve yeni para basma makineleriyle para üretimini kontrol etmek senin sorumluluğundadır. Ayrıca, ritüel rolleri organize ederek, tarikatın gücünü artırmalısın.",
        'req' => "İlk önce Tarikat Üyesi, İtalyan Mafye Babası ve Aşiret Lideri Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Güney Kartel Üyesi",
        'description' => "Güney Karteli’nin bir üyesi olarak, şehirde Bitki üretimini üstleniyorsun. Bitkileri yükseltme yeteneğinle, kartelin gücüne katkıda bulunabilirsin.",
        'req' => "İlk önce Rus Mafyası Üyesi ve Aşiret Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Güney Kartel Lideri",
        'description' => "Güney Karteli’nin lideri olarak, tüm operasyonları yönetmek senin sorumluluğundadır. Bitkileri yükseltme ve üretim süreçlerini kontrol ederek, kartelin gücünü artırmalısın.",
        'req' => "İlk önce Güney Kartel Üyesi, Rus Mafya Babası ve Aşiret Lideri Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Kuzey Kartel Üyesi",
        'description' => "Kuzey Karteli’nin bir üyesi olarak, şehirde Bitki üretimini üstleniyorsun. Bitkileri yükseltme becerinle, kartelin etkisini artırmak için mücadele edebilirsin.",
        'req' => "İlk önce İtalyan Mafye Üyesi ve Triads Mafye Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Kuzey Kartel Lideri",
        'description' => "Kuzey Karteli’nin lideri olarak, tüm kartelin işlerini yönetmek zorundasın. Bitkileri yükseltme ve üretim süreçlerini kontrol ederek, kartelin en güçlü gücü haline gelmesini sağlamalısın.",
        'req' => "İlk önce Kuzey Kartel Üyesi, İtalyan Mafye Babası ve Triads Mafye Lideri Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Motor Çetesi Üyesi",
        'description' => "Motor çetesinin bir üyesi olarak, sahip olduğun motorlarla şehirde illegal roller yapma fırsatına sahipsin. Ayrıca, yeni para basma makineleriyle para basma işlemlerine de katılabilirsin.",
        'req' => "İlk önce İtalyan Mafye Üyesi ve Triads Mafye Üyesi Mesleğinde Deneyim Kazanman gerekiyor.",
    ],
    [
        'title' => "Motor Çetesi Lideri",
        'description' => "Motor çetesinin lideri olarak, çeteni yönetmek ve yeni para basma makineleriyle para üretimini kontrol etmek zorundasın. Aynı zamanda, motorlarınla gerçekleştireceğin illegal eylemleri organize etmelisin.",
        'req' => "İlk önce Motor Çetesi Üyesi, İtalyan Mafye Babası ve Triads Mafye Lideri Mesleğinde Deneyim Kazanman gerekiyor.",
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