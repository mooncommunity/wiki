import { baseUrl } from './scripts.js';
document.addEventListener('DOMContentLoaded', function () {
    const searchData = [
        {
            name: 'Anasayfa',
            url: `${baseUrl}/`,
            content: '',
            tags: ['anasayfa']
        },
        {
            name: 'DarkRP Nedir?',
            url: `${baseUrl}/darkrp`,
            content: '',
            tags: ['drp', 'rp', "darkrp yeniyim"]
        },
        {
            name: 'DarkRP Oyun Kuralları',
            url: `https://moonrp.com/oyunkurallari`,
            content: 'Mutlaka bilinmesi gereken oyun kuralları',
            tags: ['drp', 'rp', 'kurallar', "darkrp yeniyim"]
        },
        {
            name: 'DarkRP Başlarken',
            url: `${baseUrl}/darkrp-baslarken`,
            content: 'DarkRP Başlıyan herkesin bilmesi gerekenler',
            tags: ['drp', 'rp', 'başlarken', "darkrp yeniyim"]
        },
        {
            name: 'DarkRP - Chromium Nedir? Nasıl Chromium Geçerim?',
            url: `${baseUrl}/darkrp-baslarken/chromium`,
            content: 'Garry\'s Mod için Chromium güncellemesi, HTML panelleri ve medya içeriği için daha iyi performans ve uyumluluk sağlar, oyunculara daha akıcı bir deneyim sunar.',
            tags: ['drp', 'rp', 'chrome', 'beta', 'steambeta', "darkrp yeniyim"]
        },
        {
            name: 'DarkRP - Linux distrosu kullanıyorum, nasıl sunucuya katılabilirim?',
            url: `${baseUrl}/darkrp-baslarken/linux`,
            content: 'Proton, Linux\'ta Windows oyunlarını çalıştırmak için optimize edilmiş bir uyumluluk aracıdır. Native Linux sürümleri için alternatif sunarken, native desteği olmayan oyunlarda performansı artırır ve geniş oyun yelpazesi sağlar',
            tags: ['drp', 'rp', 'linux', 'proton', 'opensuse', 'ubuntu', 'debian', 'fedora']
        },
        {
            name: 'DarkRP Başlarken - Gerekli Eklentiler ve Ayarlar',
            url: `${baseUrl}/darkrp-baslarken#workshop`,
            content: 'Oyuna girmeden önce yapılması gerekenler...',
            tags: ['drp', 'rp', 'workshop', 'chromium', 'error', "darkrp yeniyim"]
        },
        {
            name: 'DarkRP Başlarken - Kısayollar',
            url: `${baseUrl}/darkrp-baslarken#tus`,
            content: 'Sunucuya özel tuşlar...',
            tags: ['drp', 'rp', 'tuş', 'sunucutuş']
        },
        {
            name: 'DarkRP Başlarken - Sohbet ve İletişim',
            url: `${baseUrl}/darkrp-baslarken#chat`,
            content: 'İşini kolaylaştırcak komutlar burada...',
            tags: ['drp', 'rp', 'komut', 'command', 'chat', 'legal', 'Devlet çalışanı', 'esnaf', 'genel', 'illegal', 'Yasadışı organizasyonlar']
        },
        {
            name: 'DarkRP Başlarken - Meslek Nasıl Seçebilirim?',
            url: `${baseUrl}/darkrp-baslarken#meslek`,
            content: '',
            tags: ['drp', 'rp', 'F4', 'legal', 'esnaf', 'illegal', 'Devlet Çalışanı', 'Esnaf ve Siviller', 'Yasadışı Organizasyonlar']
        },
        {
            name: 'DarkRP Başlarken - Oyundaki tüm silahlarım nerede?',
            url: `${baseUrl}/darkrp-baslarken#weaponslot`,
            content: 'Silah slotlarım nerede?',
            tags: ['drp', 'rp', 'weapon', 'silah']
        },
        {
            name: 'DarkRP Başlarken - Silah Nereden Alabilirim?',
            url: `${baseUrl}/darkrp-baslarken#silah`,
            content: '',
            tags: ['drp', 'rp', 'gun', 'poligon', 'ithalatçı', 'tabanca', 'pompalı']
        },
        {
            name: 'DarkRP Başlarken - Nasıl Build Yapabilirim?',
            url: `${baseUrl}/darkrp-baslarken#build`,
            content: 'Eşya nasıl çıkartırım?',
            tags: ['drp', 'rp', 'inşaat', 'build', 'fizikgun', 'toolgun', 'physicgun']
        },
        {
            name: 'DarkRP Başlarken - Physhic Gun ile Tool Gun Hakkında',
            url: `${baseUrl}/darkrp-baslarken#toolgun`,
            content: 'Tool Gun için bazı ipuçları',
            tags: ['drp', 'rp', 'inşaat', 'build', 'fizikgun', 'toolgun', 'physicgun']
        },
        {
            name: 'DarkRP Başlarken - Bazı Tool Gun özellikleri',
            url: `${baseUrl}/darkrp-baslarken#toolgun-ozellikleri`,
            content: '',
            tags: ['drp', 'rp', 'inşaat', 'build', 'fizikgun', 'toolgun', 'physicgun', 'materyal', 'renk', 'açı-matik', 'görünmez kapı', 'istifleyici', 'kopyalayıcı', 'buddies']
        },
        {
            name: 'DarkRP Başlarken - Düğmeli Görünmez Kapı Nasıl Yapılır?',
            url: `${baseUrl}/darkrp-baslarken#toolgun-dugme`,
            content: '',
            tags: ['drp', 'rp', 'inşaat', 'build', 'fizikgun', 'toolgun', 'physicgun', 'button', 'Düğme', 'Görünmez Kapı']
        },
        {
            name: 'DarkRP Başlarken - Keypad/Parola Görünmez Kapı Nasıl Yapılır?',
            url: `${baseUrl}/darkrp-baslarken#toolgun-keypad`,
            content: '',
            tags: ['drp', 'rp', 'inşaat', 'build', 'fizikgun', 'toolgun', 'physicgun', 'keypad', 'Parola', 'Görünmez Kapı']
        },
        {
            name: 'DarkRP Başlarken - Işık Nasıl Koyarım?',
            url: `${baseUrl}/darkrp-baslarken#toolgun-isik`,
            content: '',
            tags: ['drp', 'rp', 'inşaat', 'build', 'fizikgun', 'toolgun', 'physicgun', 'lamba', 'aydınlatma', 'ışık']
        },
        {
            name: 'DarkRP Başlarken - Kopyalayıcı ile Buildimi nasıl kopyalarım?',
            url: `${baseUrl}/darkrp-baslarken#toolgun-kopyalayici`,
            content: '',
            tags: ['drp', 'rp', 'inşaat', 'build', 'fizikgun', 'toolgun', 'physicgun', 'kopyalayici', 'kb_duplicator']
        },
        {
            name: 'DarkRP Başlarken - Kopyalayıcı ile Buildimi nasıl yapıştırırım?',
            url: `${baseUrl}/darkrp-baslarken#toolgun-kopyalayici1`,
            content: '',
            tags: ['drp', 'rp', 'inşaat', 'build', 'fizikgun', 'toolgun', 'physicgun', 'kopyalayici', 'kb_duplicator']
        },
        {
            name: 'DarkRP Başlarken - Önemli yerler',
            url: `${baseUrl}/darkrp-baslarken#city`,
            content: 'Bilmen gereken lokasyonlar...',
            tags: ['drp', 'rp', 'city', 'şehir']
        },
        {
            name: 'DarkRP Başlarken - Kıyafet Nasıl Değiştirebilirim?',
            url: `${baseUrl}/darkrp-baslarken#kiyafet`,
            content: '',
            tags: ['drp', 'rp', "DarkRP yeniyim", "kıyafet", "clothes", "shirt", "karakter", "moonshop"]
        },
        {
            name: 'DarkRP Başlarken - Telefon nasıl kullanırım?',
            url: `${baseUrl}/darkrp-baslarken#phone`,
            content: 'Telefon kullanımını öğren...',
            tags: ['drp', 'rp', 'telefon', 'arama', 'mesaj', 'para', 'kamera', 'borsa']
        },
        {
            name: 'DarkRP Başlarken - Depoya eşyamı nasıl koyabilirim?',
            url: `${baseUrl}/darkrp-baslarken#depo`,
            content: 'DarkRP Başlıyan herkesin bilmesi gerekenler',
            tags: ['drp', 'rp', 'depo', 'banka']
        },
        {
            name: 'DarkRP Başlarken - ATM Nasıl Kullanılıyor?',
            url: `${baseUrl}/darkrp-baslarken#atm`,
            content: 'DarkRP Başlıyan herkesin bilmesi gerekenler',
            tags: ['drp', 'rp', 'atm', 'banka']
        },
        {
            name: 'DarkRP Başlarken - Daha Fazla XP Nasıl Kazanırım?',
            url: `${baseUrl}/darkrp-baslarken#xp`,
            content: 'XP Nasıl Kazanırım?',
            tags: ['drp', 'rp', 'xp', 'xpboost', 'mg', 'tag', 'happy hours', 'etüt']
        },
        {
            name: 'DarkRP Başlarken - Para Nasıl Kazanırım?',
            url: `${baseUrl}/darkrp-baslarken#money`,
            content: '',
            tags: ['drp', 'rp', 'money']
        },
        {
            name: 'DarkRP Başlarken - Ücretli Meslekler neler?',
            url: `${baseUrl}/darkrp-baslarken#meslekperm`,
            content: 'Botanikçi, İthalci, Hastane Sahibi, Etüt Merkezi Sahibi...',
            tags: ['drp', 'rp', 'etüt', 'eczane', 'botanikçi', 'ithalci', 'gece']
        },
        {
            name: 'DarkRP Başlarken - Eşyalar',
            url: `${baseUrl}/darkrp-baslarken#item`,
            content: 'Oyunda bulunan gelişiminizi olumlu etkileyen eşyalar',
            tags: ['drp', 'rp', 'xp', 'medkit', 'kitap', 'baron']
        },
        {
            name: 'DarkRP Başlarken - Sıkça Sorulan Sorular',
            url: `${baseUrl}/darkrp-baslarken/sss`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'error', 'whitelist', 'wh', 'yetkili', 'sefir', 'mit', 'DirectX', 'baron', 'pöh', 'jöh']
        },
        {
            name: 'DarkRP SSS - Teknik Sorunlar',
            url: `${baseUrl}/darkrp-baslarken/sss#teknik`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'error', 'darkrp yeniyim', 'destek']
        },
        {
            name: 'DarkRP SSS - Etrafta her şey error, ne yapmalıyım? / Herkesin Elleri Yukarıda / Bazı karakterler gözükmüyor',
            url: `${baseUrl}/darkrp-baslarken/sss#error`,
            content: 'Etrafımda herşey error...',
            tags: ['drp', 'rp', 'sss', 'error', 'darkrp yeniyim', 'destek', 'eller']
        },
        {
            name: 'DarkRP SSS - Steam\'de Garry\'s Mod indirirken \'Bozuk İndirme\' hatası alıyorum, nasıl çözebilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#steambrokendownload`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'error', 'darkrp yeniyim', 'destek', 'steam']
        },
        {
            name: 'DarkRP SSS - Steam\'de Garry\'s Mod indirirken \'Disk Yazma\' hatası alıyorum, nasıl çözebilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#steambrokendisk`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'error', 'darkrp yeniyim', 'destek', 'steam']
        },
        {
            name: 'DarkRP SSS - Ana Menüye düşüyorum / Oyun aniden kapanıyor',
            url: `${baseUrl}/darkrp-baslarken/sss#menuerror`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'error', 'darkrp yeniyim', 'destek', 'gpucache']
        },
        {
            name: 'DarkRP SSS - "This typically means you are running out of Video Memory on your GPU" hatası alıyorum?',
            url: `${baseUrl}/darkrp-baslarken/sss#gpumemory`,
            content: 'Engine error geliyor ekranıma...',
            tags: ['drp', 'rp', 'sss', 'error', 'engineerror', 'gpu', 'ekrankarti', 'gpumemory']
        },
        {
            name: 'DarkRP SSS - "Steam VAC sunucularına bağlanılamadı."',
            url: `${baseUrl}/ttt-baslarken/sss#vacnetwork`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'error', 'vac', 'firewall', 'modem', 'router']
        },
        {
            name: 'DarkRP SSS - "Failed To Connect After 6 Retries" nasıl çözebilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#connectfailed`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'error', 'vac', 'firewall', 'modem', 'router']
        },
        {
            name: 'DarkRP SSS - Konsol/Console Nedir?',
            url: `${baseUrl}/darkrp-baslarken/sss#console`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'console', 'konsole']
        },
        {
            name: 'DarkRP SSS - Eski Tarayıcıyı Nasıl Açarım?',
            url: `${baseUrl}/darkrp-baslarken/sss#eskitarayici`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'legacy', 'browser', 'openserverbrowser']
        },
        {
            name: 'DarkRP SSS - DarkRP Sunucusu gözükmüyor ne yapmam lazım?',
            url: `${baseUrl}/darkrp-baslarken/sss#ip`,
            content: 'Sunucu kaydoldu...',
            tags: ['drp', 'rp', 'sss', 'sunucu gözükmüyor', 'vpn', 'proxy']
        },
        {
            name: 'DarkRP SSS - Bazı araçlar ve insanlar garip duruyor ve ya hiç gözükmüyor / Görüntüler iç içe giriyor. Ne Yapmam Gerekiyor?',
            url: `${baseUrl}/darkrp-baslarken/sss#modeldetayi`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'error', 'model', 'detay']
        },
        {
            name: 'DarkRP SSS - Tuşlarım çalışmıyor, neden?',
            url: `${baseUrl}/darkrp-baslarken/sss#tus`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'tuş', 'keyboard', 'key']
        },
        {
            name: 'DarkRP SSS - Oyunda sesim diğer oyunculara gitmiyor, ne yapmalıyım?',
            url: `${baseUrl}/darkrp-baslarken/sss#mikrofon`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'sanal', 'mikrofon']
        },
        {
            name: 'DarkRP SSS - Erişim',
            url: `${baseUrl}/darkrp-baslarken/sss#erisim`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'wh', 'darkrp yeniyim', 'destek']
        },
        {
            name: 'DarkRP SSS - Yurtdışından bağlanıyorum, sunucuya nasıl katılırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#yurtdisi`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'wh', 'yurtdisi']
        },
        {
            name: 'DarkRP SSS - Aile Paylaşımı ile sunucuya nasıl katılırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#ailepaylasimi`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'wh', 'family', 'aile', 'steamaile']
        },
        {
            name: 'DarkRP SSS - GeForce Now ile sunucuya nasıl katılırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#geforcenow`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'wh', 'geforce now']
        },
        {
            name: 'DarkRP SSS - GeForce Now\'da Garry\'s Mod nasıl betaya alırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#geforcenow-beta`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'wh', 'geforce now']
        },
        {
            name: 'DarkRP SSS - Oyun Deneyimi',
            url: `${baseUrl}/darkrp-baslarken/sss#oyun`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'darkrp yeniyim', 'destek']
        },
        {
            name: 'DarkRP SSS - F1, F2, F3, F4, M, T gibi tuşları başka tuşa atayabilir miyim?',
            url: `${baseUrl}/darkrp-baslarken/sss#sunucutus`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'tuş', 'sunucutuş', 'key']
        },
        {
            name: 'DarkRP SSS - FPS Nasıl Artırabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#fps`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'fps']
        },
        {
            name: 'DarkRP SSS - İsmimi nasıl değiştireceğim?',
            url: `${baseUrl}/darkrp-baslarken/sss#isimdegistirme`,
            content: 'Kimliğimi değiştirmek istiyorum',
            tags: ['drp', 'rp', 'sss', 'nickname', 'name', 'lastname', 'displayname']
        },
        {
            name: 'DarkRP SSS - Nasıl Dans Edebilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#dance`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'dance', 'dans', 'anahtar', 'r', '_DarkRP_AnimationMenu']
        },
        {
            name: 'DarkRP SSS - Koltuğa nasıl oturacağım?',
            url: `${baseUrl}/darkrp-baslarken/sss#alte`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'alte', 'koltuk', 'oturmak']
        },
        {
            name: 'DarkRP SSS - Araç Ehliyeti Nereden Alabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#ehliyet`,
            content: 'Sürücü belgesi nasıl alırım?',
            tags: ['drp', 'rp', 'sss', 'cars', 'araba', 'ehliyet', 'sürücü belgesi']
        },
        {
            name: 'DarkRP SSS - Silah Ruhsatı Nereden Alabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#ruhsat`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'gun', 'ehliyet', 'ruhsat']
        },
        {
            name: 'DarkRP SSS - Yılbaşı kredisi nasıl elde edebilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#yilbasikredisi`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'kredi', 'noel']
        },
        {
            name: 'DarkRP SSS - Oyunda bayıldım, sonrasında ilk yardım ekibi gelip beni canlandırdı ve silahımı atamıyorum, neden?',
            url: `${baseUrl}/darkrp-baslarken/sss#bayilmak`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'att', 'doktor', 'ilk yardim', 'ambulans', 'drop']
        },
        {
            name: 'DarkRP SSS - Parti belgesi nedir, parti ne işe yarar?',
            url: `${baseUrl}/darkrp-baslarken/sss#parti`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'belge', 'parti', 'benzinlik', 'soygun', 'mug', 'raid', 'baskın']
        },
        {
            name: 'DarkRP SSS - Araç Nereden Satın Alabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#arac`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'araba', 'galeri']
        },
        {
            name: 'DarkRP SSS - Aracım NPC\'de yok, aracımı nasıl çıkartacağım?',
            url: `${baseUrl}/darkrp-baslarken/sss#araccikarma`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'araba', 'galeri']
        },
        {
            name: 'DarkRP SSS - Aracımın yakıtı bitti, nasıl doldurabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#yakit`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'araba', 'yakıt', 'dizel', 'elektrik', 'benzin']
        },
        {
            name: 'DarkRP SSS - Aracım hasarlı, nasıl tamir edebilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#aractamir`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'araba', 'mekanik', 'galeri', 'tamir', 'motor']
        },
        {
            name: 'DarkRP SSS - Susuzluğumu ve açlığımı nasıl gidereceğim?',
            url: `${baseUrl}/darkrp-baslarken/sss#yemek`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'yemek', 'su', 'ayran', 'döner', 'pilav', 'simit']
        },
        {
            name: 'DarkRP SSS - Nasıl canımı artırabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#recete`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'recete', 'doktor', 'ilaç', 'reçetesiz', 'hp', 'can']
        },
        {
            name: 'DarkRP SSS - Nasıl 500 can olunur?',
            url: `${baseUrl}/darkrp-baslarken/sss#bioorgan`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'bio', 'organ', 'eczacı', 'hp', 'can']
        },
        {
            name: 'DarkRP SSS - Nasıl 300 zırh olunur?',
            url: `${baseUrl}/darkrp-baslarken/sss#zirh`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'zırh', '1. Kalite', 'Çelik Yelek', 'Yelek', 'can']
        },
        {
            name: 'DarkRP SSS - VIP ve VIP+ Meslekler Neler?',
            url: `${baseUrl}/darkrp-baslarken/sss#vip`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'vip', 'vip+', 'meslekler', 'ithalatçı', 'mühendis', 'sivil polis', 'milli']
        },
        {
            name: 'DarkRP SSS - Envanterimdeki kutuyu nasıl açabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#kutu`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'kutu', 'moonshop']
        },
        {
            name: 'DarkRP SSS - Envanterimde Aksesuar Nasıl Kullanılır?',
            url: `${baseUrl}/darkrp-baslarken/sss#kiyafet`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'kutu', 'moonshop']
        },
        {
            name: 'DarkRP SSS - Piyango bileti Nasıl Alırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#piyango`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'milli piyango', 'piyango', 'gazino']
        },
        {
            name: 'DarkRP SSS - Döviz Nasıl Alırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#doviz`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'dolar', 'btc', 'bitcoin', 'kripto', 'euro', 'sterlin']
        },
        {
            name: 'DarkRP SSS - Vergi Levhası nasıl çıkartırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#vergilev`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'vergi', 'levha', 'zabıta', 'esnaf']
        },
        {
            name: 'DarkRP SSS - Physhic Gun/Fizik Gun Rengini Nasıl Değiştirebilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#guncolor`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'Fizik Gun', 'Fizik Silah', 'Renk', 'C Menü']
        },
        {
            name: 'DarkRP SSS - Dans Menüsünü Anahtar Olmadan Nasıl Açarım?',
            url: `${baseUrl}/darkrp-baslarken/sss#dancebind`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'console', 'dans', '_DarkRP_AnimationMenu']
        },
        {
            name: 'DarkRP SSS - Kopyalayıcı ile kaydettiğim build arkadaşımla nasıl paylaşırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#dancebind`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'builder', 'paylaş', 'kb_duplicator']
        },
        {
            name: 'DarkRP SSS - Auto-disconnect süresini nasıl uzatırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#timeout`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'auto-disconnect', 'timeout']
        },
        {
            name: 'DarkRP SSS - Oyunda yetkili yok ve oyuncudan şikayetçiyim. Ne yapmalıyım?',
            url: `${baseUrl}/darkrp-baslarken/sss#adminyok`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'admin yok', 'şikayetçiyim']
        },
        {
            name: 'DarkRP SSS - Video kaydım var, nereye yüklemeliyim?',
            url: `${baseUrl}/darkrp-baslarken/sss#kanit`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'admin yok', 'şikayetçiyim', 'ss']
        },
        {
            name: 'DarkRP SSS - Sunucudan uzaklaştırıldım, nasıl itiraz edebilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#bantemyiz`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'ban temyiz', 'itiraz']
        },
        {
            name: 'DarkRP SSS - Başvurular',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'basvuru']
        },
        {
            name: 'DarkRP SSS - Yetkili nasıl olabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#admin`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'basvuru', 'admin', 'Gorevli yetkili']
        },
        {
            name: 'DarkRP SSS - Bilim Adamı Nasıl Olunur?',
            url: `${baseUrl}/darkrp-baslarken/sss#bilimadami`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'bilim insani', '3 seviye']
        },
        {
            name: 'DarkRP SSS - Emniyet Genel Müdürü nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-egm`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'egm']
        },
        {
            name: 'DarkRP SSS - Millî İstihbarat Teşkilatı Müsteşarı nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-mit-mustesari`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'mit']
        },
        {
            name: 'DarkRP SSS - Polis Özel Harekât Polisi, Polis Özel Harekât Keskin Nişancısı ve Polis Özel Harekât Doktoru nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-poh`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'pöh', 'sniper', 'doktor', 'pöh doktor']
        },
        {
            name: 'DarkRP SSS - Jandarma Özel Harekat Komandosu ve Jandarma Özel Harekat Doktoru nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-joh`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'jöh', 'doktor', 'jöh doktor']
        },
        {
            name: 'DarkRP SSS - Baron nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-baron`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'baron', 'sefir']
        },
        {
            name: 'DarkRP SSS - Sefir nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-sefir`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'baron', 'sefir']
        },
        {
            name: 'DarkRP SSS - Aile kurmak istiyorum, ne yapmam gerekiyor?',
            url: `${baseUrl}/darkrp-baslarken/sss#family`,
            content: '',
            tags: ['drp', 'rp', 'sss', 'familya', 'aile', 'family']
        },
        {
            name: 'DarkRP Kariyer',
            url: `${baseUrl}/darkrp-kariyer`,
            content: 'Devlet Çalışanı, Esnaf, Siviller ve Yasadışı Organizasyonlar için roller, sorumluluklar ve oyun içi dinamikler hakkında bilgiler. Oyunculara en uygun kariyer seçimini yapmaları için ipuçları sunar.',
            tags: ['drp', 'rp', 'legal', 'illegal', 'esnaf', 'yetkili']
        },
        {
            name: 'DarkRP Kariyer - Devlet Çalışanı',
            url: `${baseUrl}/darkrp-kariyer/legal`,
            content: 'Kamu düzenini sağlamak ve vatandaşlara hizmet etmek için sorumluluk taşır; güvenlik, vergi toplama ve yasaların uygulanmasında aktif rol oynar.',
            tags: ['drp', 'rp', 'legal', 'doktor', 'polis', 'jandarma', 'sivilpolis', 'belediye işçisi', 'jandarma', 'özel harekat']
        },
        {
            name: 'Devlet Çalışanı - Meslekler',
            url: `${baseUrl}/darkrp-kariyer/legal#meslek`,
            content: 'Kamu düzenini sağlamak ve vatandaşlara hizmet etmek için sorumluluk taşır; güvenlik, vergi toplama ve yasaların uygulanmasında aktif rol oynar.',
            tags: ['drp', 'rp', 'legal', 'doktor', 'polis', 'jandarma', 'sivilpolis', 'belediye işçisi', 'jandarma', 'özel harekat']
        },
        {
            name: 'Devlet Çalışanı - Evrim balığını (Maymun karakteri) kullanabilir miyim?',
            url: `${baseUrl}/darkrp-kariyer/legal#kiyafet`,
            content: 'Maymun olmak yasak mı?',
            tags: ['drp', 'rp', 'balık', 'evrim', 'maymun', 'legal', 'doktor', 'polis', 'jandarma', 'sivilpolis', 'jandarma', 'özel harekat']
        },
        {
            name: 'Devlet Çalışanı - Bekçi İken Ne Yapmalıyım?',
            url: `${baseUrl}/darkrp-kariyer/legal#bekci`,
            content: 'Bekçi mesleği, Emniyet Teşkilatı\'nın temel taşıdır.',
            tags: ['drp', 'rp', 'bekçi', 'legal', "darkrp yeniyim"]
        },
        {
            name: 'Devlet Çalışanı - Belediye İşçisiyim, Nasıl Görevimi Yerine Getirebilirim?',
            url: `${baseUrl}/darkrp-kariyer/legal#belediyeisci`,
            content: 'Belediye işçisi ne yapıyor...',
            tags: ['drp', 'rp', 'belediye', 'işçi', 'legal', "darkrp yeniyim"]
        },
        {
            name: 'Devlet Çalışanı - Polis Sağlık Dolabı ve Teçhizat Dolabı Nedir?',
            url: `${baseUrl}/darkrp-kariyer/legal#dolap`,
            content: 'Polis Sağlık Dolabı, Polislerin ihtiyaçlarını karşılama konusundaki en etkili etkenlerden biridir. ',
            tags: ['drp', 'rp', 'Teçhizat', 'Sağlık', 'legal', 'polis', 'jandarma', 'sivilpolis', 'jandarma', 'özel harekat']
        },
        {
            name: 'Devlet Çalışanı - Taser Hangi Durumlarda Kullanılmalıdır ve Kullanılmamalıdır?',
            url: `${baseUrl}/darkrp-kariyer/legal#taser`,
            content: 'Taser, bir polis memurunun şüphelileri ölümcül olmayan bir şekilde etkisiz hale getirmesine yardımcı olan bir teçhizattır.',
            tags: ['drp', 'rp', 'Taser', 'legal', 'polis', 'jandarma', 'sivilpolis', 'jandarma', 'özel harekat']
        },
        {
            name: 'Devlet Çalışanı - GBT Tablet Nedir, Nasıl Kullanılır?',
            url: `${baseUrl}/darkrp-kariyer/legal#gbt`,
            content: 'GBT Tablet, emniyet birimlerinin işini kolaylaştıran teknolojik bir cihazdır.',
            tags: ['drp', 'rp', 'GBT', 'legal', 'polis', 'jandarma', 'sivilpolis', 'jandarma', 'özel harekat']
        },
        {
            name: 'Devlet Çalışanı - Bir Suçlu yakaladım nasıl role devam etmeliyim?',
            url: `${baseUrl}/darkrp-kariyer/legal#suclu`,
            content: 'Bir süpheliyi yakaladıktan sonra direkt cezaevine göndermemelisiniz, unutmayın kimse kanıtlanana kadar suçlu değildir.',
            tags: ['drp', 'rp', 'şüpheli', 'hapis', 'zanlı', 'legal', 'polis', 'jandarma', 'sivilpolis', 'jandarma', 'özel harekat']
        },
        {
            name: 'Devlet Çalışanı - Sivil Polis, Asayiş Memurundan Üstün Müdür?',
            url: `${baseUrl}/darkrp-kariyer/legal#asayis-sivil`,
            content: 'Kamu düzenini sağlamak ve vatandaşlara hizmet etmek için sorumluluk taşır; güvenlik, vergi toplama ve yasaların uygulanmasında aktif rol oynar.',
            tags: ['drp', 'rp', 'asayiş', 'legal', 'polis', 'sivilpolis']
        },
        {
            name: 'Devlet Çalışanı - Sivil Polis ve MIT\'in görevi nedir?',
            url: `${baseUrl}/darkrp-kariyer/legal#sivil-polis-mit`,
            content: 'Kamu düzenini sağlamak ve vatandaşlara hizmet etmek için sorumluluk taşır; güvenlik, vergi toplama ve yasaların uygulanmasında aktif rol oynar.',
            tags: ['drp', 'rp', 'şüpheli', 'hapis', 'zanlı', 'legal', 'polis', 'jandarma', 'sivilpolis', 'jandarma', 'özel harekat']
        },
        {
            name: 'Devlet Çalışanı - Belediye Başkanı Nasıl Olacağım?',
            url: `${baseUrl}/darkrp-kariyer/legal#baskanaday`,
            content: 'Belediye Başkanı adayı nasıl olurum?',
            tags: ['drp', 'rp', 'belediye', 'başkan', 'ysk', 'aday', 'legal']
        },
        {
            name: 'Devlet Çalışanı - Belediye Başkan Yardımcısı Seçebiliyor muyum?',
            url: `${baseUrl}/darkrp-kariyer/legal#baskanyardimcisi`,
            content: 'Belediye Başkanı yardımcısı nasıl seçerim?',
            tags: ['drp', 'rp', 'belediye', 'başkan yardımcısı', 'ysk', 'aday', 'legal']
        },
        {
            name: 'Devlet Çalışanı - Başkan Olarak Sokağa Çıkma Yasağı Başlatmadan Ne Yapmalıyım?',
            url: `${baseUrl}/darkrp-kariyer/legal#baskansokagacikma`,
            content: 'Kamu düzenini sağlamak ve vatandaşlara hizmet etmek için sorumluluk taşır; güvenlik, vergi toplama ve yasaların uygulanmasında aktif rol oynar.',
            tags: ['drp', 'rp', 'baskan', 'sokağa', 'lockdown', 'legal', 'polis', 'jandarma', 'sivilpolis', 'jandarma', 'özel harekat']
        },
        {
            name: 'DarkRP Kariyer - Esnaf ve Siviller',
            url: `${baseUrl}/darkrp-kariyer/esnaf`,
            content: 'Esnaf ve siviller, toplumun ekonomik ve sosyal yapı taşlarıdır. İşbirliği ve dayanışma ile yerel ekonomiyi destekleyerek toplumsal yaşamı güçlendirirler.',
            tags: ['drp', 'rp', 'yemek', 'kafe', 'dönerci', 'hamburgerci', 'imam', 'yapı market', 'poligon sahibi', 'ithalatçı', 'mühendis', 'imam', 'pos', 'maden', 'elmas']
        },
        {
            name: 'Esnaf ve Siviller - Yiyecek ve İçecek Sektörü',
            url: `${baseUrl}/darkrp-kariyer/esnaf#yiyecekveicecek`,
            content: 'Tüm esnaf mesleklerinde olduğu gibi, yiyecek ve içecek satışı yapabilmeniz ve rolünüzü gerçekleştirebilmeniz için bir standınız ya da bir dükkanınız olması gerekiyor.',
            tags: ['drp', 'rp', 'yemek', 'kafe', 'dönerci', 'hamburgerci']
        },
        {
            name: 'Esnaf ve Siviller - Ticari ve Hizmet Sektörü',
            url: `${baseUrl}/darkrp-kariyer/esnaf#yiyecekveicecek`,
            content: 'Esnaf ve siviller, toplumun ekonomik ve sosyal yapı taşlarıdır. İşbirliği ve dayanışma ile yerel ekonomiyi destekleyerek toplumsal yaşamı güçlendirirler.',
            tags: ['drp', 'rp', 'yapı market', 'poligon sahibi', 'ithalatçı', 'mühendis', 'imam', 'pos']
        },
        {
            name: 'Esnaf ve Siviller - Yapı Market Ürünleri',
            url: `${baseUrl}/darkrp-kariyer/esnaf#ticarivehizmetsektoru-yapimarket-urunleri`,
            content: 'Yapı marketlerde satılan ürünler, Garry\'s Mod\'un temel eşyaları olan Physic Gun ve Tool Gun ile ilgilidir. Bu eşyalar, oyuncuların inşaat ve yapı işlemlerinde kullanmaları gereken olmazsa olmaz malzemelerdir. ',
            tags: ['drp', 'rp', 'yapı market', 'Tool Gun', 'Physic Gun', 'Fizik Gun', 'Gravity Gun', 'Fotoğraf Makinesi', 'kask', 'ayakkabı', 'çelik yelek']
        },
        {
            name: 'Esnaf ve Siviller - Eczanede Satılan Ürünler',
            url: `${baseUrl}/darkrp-kariyer/esnaf#ticarivehizmetsektoru-eczaci-urunler`,
            content: 'DarkRP ve MoonGaming sunucularında hayati öneme sahip bir meslek olan Eczacıya ait. Eczacı, oyuncuların sağlık ihtiyaçlarını karşılayan önemli bir rol oynar.',
            tags: ['drp', 'rp', 'Eczacı', 'Bio-Organ', 'İlaç', 'Recoil']
        },
        {
            name: 'Esnaf ve Siviller - Poligon Satılan Ürünler',
            url: `${baseUrl}/darkrp-kariyer/esnaf#ticarivehizmetsektoru-poligon-urunler`,
            content: 'Poligon mesleği, DarkRP ve MoonGaming sunucularında oyuncuların silah kullanma becerilerini geliştirebilecekleri ve çeşitli silahlar ile mermiler satın alabilecekleri bir rolü temsil eder.',
            tags: ['drp', 'rp', 'İthalatçı', 'Tabanca', 'pompalı', 'Ateşli Silahlar', 'Makinalı Silahlar', 'Muhimmat Kutusu', 'Farklı Seviye Mermiler', 'x Kalite Çelik Yelek']
        },
        {
            name: 'Esnaf ve Siviller - İthalatçı Satılan Ürünler',
            url: `${baseUrl}/darkrp-kariyer/esnaf#ticarivehizmetsektoru-ithalatci-urunler`,
            content: 'İthalatçı mesleği, DarkRP ve MoonGaming sunucularında oyunculara geniş bir silah yelpazesi sunan ve ağır silahlar temin edebilen özel bir rolü temsil eder.',
            tags: ['drp', 'rp', 'İthalatçı', 'Tabanca', 'pompalı', 'Ateşli Silahlar', 'Ağır Silahlar', 'Muhimmat Kutusu', 'Farklı Seviye Mermiler', 'x Kalite Çelik Yelek']
        },
        {
            name: 'Esnaf ve Siviller - Mühendis Ürünleri',
            url: `${baseUrl}/darkrp-kariyer/esnaf#ticarivehizmetsektoru-muhendis-urunler`,
            content: 'Mühendisin olmazsa olmaz eşyaları',
            tags: ['drp', 'rp', 'mühendis', 'fan eklentisi', 'para yazılımı', 'zırh paketi', 'kit']
        },
        {
            name: 'Esnaf ve Siviller - İmam Rehberi',
            url: `${baseUrl}/darkrp-kariyer/esnaf#ticarivehizmetsektoru-imam`,
            content: '',
            tags: ['drp', 'rp', 'imam', 'üfleme', 'xp', 'boost']
        },
        {
            name: 'Esnaf ve Siviller - Balıkçı Rehberi',
            url: `${baseUrl}/darkrp-kariyer/esnaf#ticarivehizmetsektoru-balikci`,
            content: '',
            tags: ['drp', 'rp', 'imam', 'üfleme', 'xp', 'boost']
        },
        {
            name: 'Esnaf ve Siviller - POS Cihazı Hakkında',
            url: `${baseUrl}/darkrp-kariyer/esnaf#poscihazi`,
            content: 'Müşterinin yanında nakit yok mu? O zaman banka kartıyla ödeme yapabilir.',
            tags: ['drp', 'rp', 'POS', 'kredi']
        },
        {
            name: 'Esnaf ve Siviller - Madende Bulduğum Kükürt, Demir, Çelik, Elmas ve Altın ile Ne Yapabilirim?',
            url: `${baseUrl}/darkrp-kariyer/esnaf#maden`,
            content: 'Madende bulduğunuz kükürt, demir, çelik, elmas ve altın gibi malzemeleri,',
            tags: ['drp', 'rp', 'kükürt', 'elmas', 'aytasi', 'çelik', 'elmas']
        },
        {
            name: 'DarkRP Kariyer - Yasadışı Organizasyonlar',
            url: `${baseUrl}/darkrp-kariyer/illegal`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'baron', 'bilim', 'sefir', 'keko', 'temizlik']
        },
        {
            name: 'Yasadışı Organizasyonlar - Meslekler',
            url: `${baseUrl}/darkrp-kariyer/illegal#meslek`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'baron', 'bilim', 'sefir', 'keko', 'temizlik']
        },
        {
            name: 'Yasadışı Organizasyonlar - Keko Mesleğinde...',
            url: `${baseUrl}/darkrp-kariyer/illegal#kekoyapabilcekleri`,
            content: 'İlk adımlar önemli...',
            tags: ['drp', 'rp', 'illegal', 'keko', "darkrp yeniyim"]
        },
        {
            name: 'Yasadışı Organizasyonlar - Nasıl Araba Çalabilirim?',
            url: `${baseUrl}/darkrp-kariyer/illegal#carjack`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'araba', 'soygun']
        },
        {
            name: 'Yasadışı Organizasyonlar - Banka Soygunu Nasıl Yapılır?',
            url: `${baseUrl}/darkrp-kariyer/illegal#bankasoygun`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'banka', 'soygun']
        },
        {
            name: 'Yasadışı Organizasyonlar - Kirli Dolar Üretimi',
            url: `${baseUrl}/darkrp-kariyer/illegal#dolar`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'dolar', 'printer']
        },
        {
            name: 'Yasadışı Organizasyonlar - Para Basma Makinesi Nedir? Nasıl Çalışır?',
            url: `${baseUrl}/darkrp-kariyer/illegal#printer`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'dolar', 'printer', 'mühendis']
        },
        {
            name: 'Yasadışı Organizasyonlar - Bitki Üretimi',
            url: `${baseUrl}/darkrp-kariyer/illegal#bitki`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'bitki', 'saksi', 'mühendis']
        },
        {
            name: 'Yasadışı Organizasyonlar - Bitkimi Nasıl Yükseltebilirim?',
            url: `${baseUrl}/darkrp-kariyer/illegal#bitkiupgrade`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'bitki', 'saksi', 'mühendis', '2seviye', '3seviye']
        },
        {
            name: 'Yasadışı Organizasyonlar - Saksı Nedir? Nasıl Çalışır?',
            url: `${baseUrl}/darkrp-kariyer/illegal#saksi`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'bitki', 'saksi', 'mühendis']
        },
        {
            name: 'Yasadışı Organizasyonlar - Kirli Dolar Temizleme ve Bitki Satmanin Yolları Nelerdir?',
            url: `${baseUrl}/darkrp-kariyer/illegal#temizleme`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'bitki', 'dolar', 'satma', 'npc', 'meslek', 'botanikci', 'sigortaci']
        },
        {
            name: 'Yasadışı Organizasyonlar - Korsan ve Eşkiyada ürettiğim İthal eşyaları kime satabilirim?\n',
            url: `${baseUrl}/darkrp-kariyer/illegal#ithalesya`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'korsan', 'eşkıya', 'ithal']
        },
        {
            name: 'Yasadışı Organizasyonlar - Faction Mesleklerine Nasıl Geçebilirim?',
            url: `${baseUrl}/darkrp-kariyer/illegal#factiongereksinim`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'faction', 'rus', 'italyan', 'triads', 'aşiret']
        },
        {
            name: 'Yasadışı Organizasyonlar - Familya/Aile Nedir? Neden Bir Familya/Aileye Katılmalıyım?',
            url: `${baseUrl}/darkrp-kariyer/illegal#aile`,
            content: '',
            tags: ['drp', 'rp', 'illegal', 'familya', 'aile']
        },
        {
            name: 'FiveM Nedir?',
            url: `${baseUrl}/fivem`,
            content: '',
            tags: ['FiveM', "FiveM yeniyim"]
        },
        {
            name: 'FiveM Oyun Kuralları',
            url: `https://moonrp.com/fivemkurallar`,
            content: 'Mutlaka bilinmesi gereken oyun kuralları',
            tags: ['FiveM', 'kurallar', "FiveM yeniyim"]
        },
        {
            name: 'FiveM Başlarken',
            url: `${baseUrl}/fivem-baslarken`,
            content: 'FiveM Başlıyan herkesin bilmesi gerekenler',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim"]
        },
        {
            name: 'FiveM Başlarken - Sunucuya katılmadan önce dikkat edilmesi gerekenler',
            url: `${baseUrl}/fivem-baslarken#first`,
            content: 'Oyunu açmadan önce yapılması gerekenler...',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim"]
        },
        {
            name: 'FiveM Başlarken - Temel Kısayollar',
            url: `${baseUrl}/fivem-baslarken#tus`,
            content: 'Sunucuya özel tuşlar...',
            tags: ['FiveM', 'tuş', 'sunucutuş']
        },
        {
            name: 'FiveM Başlarken - Sohbet ve İletişim',
            url: `${baseUrl}/fivem-baslarken#chat`,
            content: 'İşini kolaylaştırcak komutlar burada...',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim"]
        },
        {
            name: 'FiveM Başlarken - Meslekler',
            url: `${baseUrl}/fivem-baslarken#meslek`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "polis", "doktor", "taksi", "pizza", "çöpçü", "hakim", "avukat", "savcı"]
        },
        {
            name: 'FiveM Başlarken - Oyunda Nasıl Para Kazanabilirim?',
            url: `${baseUrl}/fivem-baslarken#money`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "money", "cash", "market", "banka"]
        },
        {
            name: 'FiveM Başlarken - Açlığımı ve Susuzluğumu nasıl giderebilirim?',
            url: `${baseUrl}/fivem-baslarken#yemek`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "yemek", "içecek", "cafe", "market"]
        },
        {
            name: 'FiveM Başlarken - Kıyafet Nasıl Değiştirebilirim?',
            url: `${baseUrl}/fivem-baslarken#kiyafet`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "kıyafet", "clothes", "shirt", "karakter"]
        },
        {
            name: 'FiveM Başlarken - F3 Menüsü Nedir?',
            url: `${baseUrl}/fivem-baslarken#f3menu`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "F3", "Meslek", "Moon Özel", "Günlük Çark", "Günlük Görevler", "Playtime Shop", "Kıyafet", "Tıraş", "Traş", "Animasyon", "Konumlar", "Harita", "etkileşim", "kucakla", "kelepçele", "tutukla", "kamu"]
        },
        {
            name: 'FiveM Başlarken - Telefon Nasıl Kullanırım?',
            url: `${baseUrl}/fivem-baslarken#phone`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "Telefon", "Phone", "Mesaj", "Servis", "911"]
        },
        {
            name: 'FiveM Başlarken - Takas Nasıl Yaparım?',
            url: `${baseUrl}/fivem-baslarken#takas`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "takas", "trade", "item"]
        },
        {
            name: 'FiveM Başlarken - Balık Nasıl Tutulur ?',
            url: `${baseUrl}/fivem-baslarken#balik`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "Legal Balık"]
        },
        {
            name: 'FiveM Başlarken - Çöp Kutusu Karıştırma',
            url: `${baseUrl}/fivem-baslarken#copkutusu`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim"]
        },
        {
            name: 'FiveM Başlarken - Karpuz Toplama ve Satma',
            url: `${baseUrl}/fivem-baslarken#karpuz`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "Tarla"]
        },
        {
            name: 'FiveM Başlarken - Üzüm Toplama ve Satma',
            url: `${baseUrl}/fivem-baslarken#uzum`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "Tarla"]
        },
        {
            name: 'FiveM Başlarken - Üzüm Nasıl İşlenir ?',
            url: `${baseUrl}/fivem-baslarken#uzumisleme`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "Tarla"]
        },
        {
            name: 'FiveM Başlarken - Yasadışı Balıkçılık Nasıl Yapılır ?',
            url: `${baseUrl}/fivem-baslarken#balikillegal`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "illegal"]
        },
        {
            name: 'FiveM Başlarken - Market Soygunu Nasıl Gerçekleştirebilirim?',
            url: `${baseUrl}/fivem-baslarken#market`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "illegal"]
        },
        {
            name: 'FiveM Başlarken - Banka Soygunu Nasıl Gerçekleştirebilirim?',
            url: `${baseUrl}/fivem-baslarken#banka`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "illegal"]
        },
        {
            name: 'FiveM Başlarken - Vangelico Jewelry Nasıl Soyabilirim?',
            url: `${baseUrl}/fivem-baslarken#elmas`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "illegal", "elmas mağazası"]
        },
        {
            name: 'FiveM Başlarken - Tıbbi Bitki Nasıl Toplarım? ve Nasıl Paketlerim ?',
            url: `${baseUrl}/fivem-baslarken#bitki`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "illegal", "bitki"]
        },
        {
            name: 'FiveM Başlarken - Aromatik Otlar Nasıl Toplarım? ve Nasıl Paketlerim ?',
            url: `${baseUrl}/fivem-baslarken#bitki1`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "illegal", "bitki"]
        },
        {
            name: 'FiveM Başlarken - Şeker Üretimi Nasıl Yapabilirim? ve Nasıl Paketlerim ?',
            url: `${baseUrl}/fivem-baslarken#kristal`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "illegal"]
        },
        {
            name: 'FiveM Başlarken - Arabamı Hurdalığa Nasıl Veririm?',
            url: `${baseUrl}/fivem-baslarken#hurdalik`,
            content: '',
            tags: ['FiveM', 'başlarken', "FiveM yeniyim", "illegal", "araba"]
        },
        {
            name: 'FiveM Başlarken - Sıkça Sorulan Sorular',
            url: `${baseUrl}/fivem-baslarken/sss`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'error', 'whitelist', 'wh', 'yetkili']
        },
        {
            name: 'FiveM SSS - Teknik Sorunlar',
            url: `${baseUrl}/fivem-baslarken/sss#teknik`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'darkrp yeniyim', 'destek']
        },
        {
            name: 'FiveM SSS - FiveM cache nasıl temizlerim?',
            url: `${baseUrl}/fivem-baslarken/sss#cache`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'destek', 'önbellek', 'sunucu önbellek', 'sunucu cache', 'server cache']
        },
        {
            name: 'FiveM SSS - Steam\'de Grand Theft Auto V indirirken \'Bozuk İndirme\' hatası alıyorum, nasıl çözebilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#steambrokendownload`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'error', 'FiveM yeniyim', 'destek', 'steam']
        },
        {
            name: 'FiveM SSS - Steam\'de Grand Theft Auto V indirirken \'Disk Yazma\' hatası alıyorum, nasıl çözebilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#steambrokendisk`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'error', 'FiveM yeniyim', 'destek', 'steam']
        },
        {
            name: 'FiveM SSS - Grand Theft Auto V oyun dosyalarını nasıl doğruluyabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#gtavcheck`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'error', 'FiveM yeniyim', 'destek', 'steam', 'epic games', 'rockstar games']
        },
        {
            name: 'FiveM SSS - Normal GTA 5\'te yaptığım grafik ayarları FiveM\'de gözükmüyor, nasıl düzeltebilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#grafik`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'FiveM ayarlar', 'gta5 ayarlar', 'gta ayarlar']
        },
        {
            name: 'FiveM SSS - FiveM, Mikrofonum Kapalı ve Oyuncuların Konuşmaları Bana Gelmiyor, Nasıl Düzeltirim?',
            url: `${baseUrl}/fivem-baslarken/sss#ses`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'FiveM ayarlar', 'gta5 ayarlar', 'gta ayarlar', "hapör", "mikrofon", "ses"],
        },
        {
            name: 'FiveM SSS - Erişim Sorunlar',
            url: `${baseUrl}/fivem-baslarken/sss#erisim`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'wh', 'FiveM yeniyim', 'destek']
        },
        {
            name: 'FiveM SSS - Hangi Platformdaki GTA V Destekleniyor?',
            url: `${baseUrl}/fivem-baslarken/sss#buygtav`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'wh', 'FiveM yeniyim', 'destek', 'epic games', 'rockstar games', 'steam', 'korsan gta']
        },
        {
            name: 'FiveM SSS - FiveM\'den global olarak yasaklandım. Nasıl katılabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#globalban`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'ban', 'destek', 'global']
        },
        {
            name: 'FiveM SSS - Grand Theft Auto: Online\'da yasaklandım. FiveM\'e girebilir miyim?',
            url: `${baseUrl}/fivem-baslarken/sss#onlineban`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'ban', 'destek', 'gta:o', 'online', 'gta']
        },
        {
            name: 'FiveM SSS - Oyun Deneyimi',
            url: `${baseUrl}/fivem-baslarken/sss#oyun`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'FiveM yeniyim', 'destek']
        },
        {
            name: 'FiveM SSS - Extended Texture Budget Nedir?',
            url: `${baseUrl}/fivem-baslarken/sss#extendedtext`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'Extended', 'Texture', 'Budget', 'graphics', 'grafik']
        },
        {
            name: 'FiveM SSS - FiveM Özel Tuşlarımı Nasıl Sıfırlarım',
            url: `${baseUrl}/fivem-baslarken/sss#tus`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'tuş', 'tus', 'klavye']
        },
        {
            name: 'FiveM SSS - Araç Nasıl Satın Alabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#arac`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'araba', 'satın alma', 'kiralık galeri', 'galeri'],
        },
        {
            name: 'FiveM SSS - Araç Ehliyeti Nereden Alabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#ehliyet`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'araba', 'driver', 'driver license', 'Sürücü Belgesi'],
        },
        {
            name: 'FiveM SSS - Araç Torpidosuna eşya nasıl koyabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#aracesya`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'araba', 'eşya', 'torpido', 'emanet'],
        },
        {
            name: 'FiveM SSS - Araç bindiğimde sol altta bir menü var. Nasıl kullanabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#aracmenu`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'arabada müzik açma', 'navigasyon', 'drift modu'],
        },
        {
            name: 'FiveM SSS - Silah Nereden Alabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#silah`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'weapon', 'silah', 'gun shop', 'gunshop'],
        },
        {
            name: 'FiveM SSS - Silah Ruhsatı Nereden Alabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#ruhsat`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'ruhsat', 'weapon', 'weapon license'],
        },
        {
            name: 'FiveM SSS - Rapor Nereden Alabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#rapor`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'EMS', 'Hastane', 'Doktor', 'Sağlık Raporu']
        },
        {
            name: 'FiveM SSS - Takside NPC Yolcu Nasıl Alınır/Taksi Metre Nasıl Açabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#taksi`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'taxi', 'taksi', 'müşteri']
        },
        {
            name: 'FiveM SSS - Evcil Hayvan Nasıl Alabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#pets`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'hayvan', 'pet']
        },
        {
            name: 'FiveM SSS - Oyuncudan şikayetçiyim. Ne yapmalıyım?',
            url: `${baseUrl}/fivem-baslarken/sss#report`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'şikayetçiyim']
        },
        {
            name: 'FiveM SSS - Video kaydım var, nereye yüklemeliyim?',
            url: `${baseUrl}/fivem-baslarken/sss#kanit`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'admin yok', 'şikayetçiyim', 'ss']
        },
        {
            name: 'FiveM SSS - Sunucudan uzaklaştırıldım, nasıl itiraz edebilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#bantemyiz`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'ban temyiz', 'itiraz']
        },
        {
            name: 'FiveM SSS - Yetkili nasıl olabilirim?',
            url: `${baseUrl}/fivem-baslarken/sss#admin`,
            content: '',
            tags: ['FiveM', 'rp', 'sss', 'basvuru', 'admin']
        },
        {
            name: 'TTT Nedir?',
            url: `${baseUrl}/ttt`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', "ttt yeniyim"]
        },
        {
            name: 'TTT Oyun Kuralları',
            url: `https://moonrp.com/tttkurallar`,
            content: 'Mutlaka bilinmesi gereken oyun kuralları',
            tags: ['ttt', 'Trouble in Terrorist Town', 'kurallar', "ttt yeniyim"]
        },
        {
            name: 'TTT Başlarken',
            url: `${baseUrl}/ttt-baslarken`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'başlarken', "ttt yeniyim"]
        },
        {
            name: 'TTT - Chromium Nedir? Nasıl Chromium Geçerim?',
            url: `${baseUrl}/ttt-baslarken/chromium`,
            content: 'Garry\'s Mod için Chromium güncellemesi, HTML panelleri ve medya içeriği için daha iyi performans ve uyumluluk sağlar, oyunculara daha akıcı bir deneyim sunar.',
            tags: ['ttt', 'Trouble in Terrorist Town', 'chrome', 'beta', 'steambeta', "ttt yeniyim"]
        },
        {
            name: 'TTT - Linux distrosu kullanıyorum, nasıl sunucuya katılabilirim?',
            url: `${baseUrl}/ttt-baslarken/linux`,
            content: 'Proton, Linux\'ta Windows oyunlarını çalıştırmak için optimize edilmiş bir uyumluluk aracıdır. Native Linux sürümleri için alternatif sunarken, native desteği olmayan oyunlarda performansı artırır ve geniş oyun yelpazesi sağlar',
            tags: ['ttt', 'Trouble in Terrorist Town', 'linux', 'proton', 'opensuse', 'ubuntu', 'debian', 'fedora']
        },
        {
            name: 'TTT Başlarken - Gerekli Eklentiler ve Ayarlar',
            url: `${baseUrl}/ttt-baslarken#workshop`,
            content: 'Oyuna girmeden önce yapılması gerekenler...',
            tags: ['ttt', 'Trouble in Terrorist Town', 'workshop', 'chromium', 'error', "ttt yeniyim"]
        },
        {
            name: 'TTT Başlarken - Temel Kısayollar',
            url: `${baseUrl}/ttt-baslarken#tus`,
            content: 'Sunucuya özel tuşlar...',
            tags: ['ttt', 'Trouble in Terrorist Town', 'tuş', 'sunucutuş']
        },
        {
            name: 'TTT Başlarken - Sohbet ve İletişim',
            url: `${baseUrl}/ttt-baslarken#chat`,
            content: 'İşini kolaylaştırcak komutlar burada...',
            tags: ['ttt', 'Trouble in Terrorist Town', 'komut', 'command', 'chat']
        },
        {
            name: 'TTT Başlarken - Oyunun dilini Türkçe yapamıyor muyum?',
            url: `${baseUrl}/ttt-baslarken#dil`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'dil', 'ingilizce']
        },
        {
            name: 'TTT Başlarken - İzleyici modundayım, nasıl oyuna dönebilirim?',
            url: `${baseUrl}/ttt-baslarken#izleyici`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'spectate', 'izleyici', "uçuyorum", "yeniyim", "ttt yeniyim"]
        },
        {
            name: 'TTT Başlarken - Mümkün olduğunca dedektif olmaktan kaçınmak istiyorum?',
            url: `${baseUrl}/ttt-baslarken#dedektifolmamak`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'spectate', 'izleyici', "dedektif", "dedective"]
        },
        {
            name: 'TTT Başlarken - Test Odası nedir?',
            url: `${baseUrl}/ttt-baslarken#test`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'tester', 'haintespit', "dedektif", "masum", "yeniyim", "ttt yeniyim"]
        },
        {
            name: 'TTT Başlarken - Oyundaki tüm silahlarım nerede?',
            url: `${baseUrl}/ttt-baslarken#weaponslot`,
            content: 'Silah slotlarım nerede?',
            tags: ['ttt', 'Trouble in Terrorist Town', 'weapon', 'silah']
        },
        {
            name: 'TTT Başlarken - Eşyaları nasıl taşıyabilirim?',
            url: `${baseUrl}/ttt-baslarken#magneto`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'magneto', 'Stick', 'esya', 'tasima']
        },
        {
            name: 'TTT Başlarken - Silahımda Bazı Şeyler Yazıyor, Onlar Ne Anlama Geliyor?',
            url: `${baseUrl}/ttt-baslarken#weapon`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'dmg', 'silah', 'weapon']
        },
        {
            name: 'TTT Başlarken - Aynı Silahların Farklı Varyasyonları Nedir?',
            url: `${baseUrl}/ttt-baslarken#silah-nadirlik`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'Standart', 'Worn', 'Specialized', 'Superior', 'Cosmic', 'Ascended', 'Planetary']
        },
        {
            name: 'TTT Başlarken - Mutator Nedir?',
            url: `${baseUrl}/ttt-baslarken#mutator`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'Name mutator', 'Stat Mutator', 'Talent Mutator']
        },
        {
            name: 'TTT Başlarken - Disguiser ve hızlı yanıtlar için tuş nasıl atıyabilirim?',
            url: `${baseUrl}/ttt-baslarken#bind`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'Disguiser', 'bind', 'hızıyanıt']
        },
        {
            name: 'TTT Başlarken - Kutu ve silah nasıl elde edebilirim?',
            url: `${baseUrl}/ttt-baslarken#kutu`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'kutu', 'crate']
        },
        {
            name: 'TTT Başlarken - Envanter Kredisi ve C Menü Kredisi nasıl kazanırım?',
            url: `${baseUrl}/ttt-baslarken#kredi`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'kredi', 'c menü kredi', 'hain', 'dedektif', "ttt yeniyim"]
        },
        {
            name: 'TTT Başlarken - Dedektif/Hain iken hangi ekipmanları kullanabilirim?',
            url: `${baseUrl}/ttt-baslarken#cmenu`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'c menü', 'dedective', 'terrorist', 'dedektif', 'hain', 'katil']
        },
        {
            name: 'TTT Başlarken - Envanter nedir? Burada ne yapabilirim?',
            url: `${baseUrl}/ttt-baslarken#envanter`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'envanter', 'takas', 'kutu', 'destekçi']
        },
        {
            name: 'TTT Başlarken - Etkinlik Düzenleniyor mu?',
            url: `${baseUrl}/ttt-baslarken#event`,
            content: 'Etkinlik ve Etkinlik...',
            tags: ['ttt', 'Trouble in Terrorist Town', 'event', 'etkinlik', 'IC Kredi', 'Envanter Kredisi', "ttt yeniyim"]
        },
        {
            name: 'TTT Başlarken - Sıkça Sorulan Sorular',
            url: `${baseUrl}/ttt-baslarken/sss`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'token', 'bunny']
        },
        {
            name: 'TTT SSS - Teknik Sorunlar',
            url: `${baseUrl}/ttt-baslarken/sss#teknik`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'ttt yeniyim', 'destek']
        },
        {
            name: 'TTT SSS - Etrafta her şey error, ne yapmalıyım? / Bazı karakterler gözükmüyor',
            url: `${baseUrl}/ttt-baslarken/sss#error`,
            content: 'Etrafımda herşey error...',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'ttt yeniyim', 'destek', 'eller']
        },
        {
            name: 'TTT SSS - Steam\'de Garry\'s Mod indirirken \'Bozuk İndirme\' hatası alıyorum, nasıl çözebilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#steambrokendownload`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'ttt yeniyim', 'destek', 'steam']
        },
        {
            name: 'TTT SSS - Steam\'de Garry\'s Mod indirirken \'Disk Yazma\' hatası alıyorum, nasıl çözebilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#steambrokendisk`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'ttt yeniyim', 'destek', 'steam']
        },
        {
            name: 'TTT SSS - Ana Menüye düşüyorum / Oyun aniden kapanıyor',
            url: `${baseUrl}/ttt-baslarken/sss#menuerror`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'ttt yeniyim', 'destek', 'gpucache']
        },
        {
            name: 'TTT SSS - "This typically means you are running out of Video Memory on your GPU" hatası alıyorum?',
            url: `${baseUrl}/ttt-baslarken/sss#gpumemory`,
            content: 'Engine error geliyor ekranıma...',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'engineerror', 'gpu', 'ekrankarti', 'gpumemory']
        },
        {
            name: 'TTT SSS - "Steam VAC sunucularına bağlanılamadı."',
            url: `${baseUrl}/ttt-baslarken/sss#vacnetwork`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'vac', 'firewall', 'modem', 'router']
        },
        {
            name: 'TTT SSS - "Failed To Connect After 6 Retries" nasıl çözebilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#connectfailed`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'vac', 'firewall', 'modem', 'router']
        },
        {
            name: 'TTT SSS - Konsol/Console Nedir?',
            url: `${baseUrl}/ttt-baslarken/sss#console`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'console', 'konsole']
        },
        {
            name: 'TTT SSS - Eski Tarayıcıyı Nasıl Açarım?',
            url: `${baseUrl}/ttt-baslarken/sss#eskitarayici`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'legacy', 'browser', 'openserverbrowser']
        },
        {
            name: 'TTT SSS - TTT Sunucusu gözükmüyor ne yapmam lazım?',
            url: `${baseUrl}/ttt-baslarken/sss#ip`,
            content: 'Sunucu kaydoldu...',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'sunucu gözükmüyor', 'vpn', 'proxy']
        },
        {
            name: 'TTT SSS - Bazı araçlar ve insanlar garip duruyor ve ya hiç gözükmüyor / Görüntüler iç içe giriyor. Ne Yapmam Gerekiyor?',
            url: `${baseUrl}/ttt-baslarken/sss#modeldetayi`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'model', 'detay']
        },
        {
            name: 'TTT SSS - Tuşlarım çalışmıyor, neden?',
            url: `${baseUrl}/ttt-baslarken/sss#tus`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'tuş', 'keyboard', 'key']
        },
        {
            name: 'TTT SSS - Oyunda sesim diğer oyunculara gitmiyor, ne yapmalıyım?',
            url: `${baseUrl}/ttt-baslarken/sss#mikrofon`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'sanal', 'mikrofon']
        },
        {
            name: 'TTT SSS - FPS Nasıl Artırabilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#fps`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'fps']
        },
        {
            name: 'TTT SSS - F1, F8, M, I gibi tuşları başka tuşa atayabilir miyim?',
            url: `${baseUrl}/ttt-baslarken/sss#sunucutus`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'tuş', 'sunucutuş', 'key']
        },
        {
            name: 'TTT SSS - Pembe-Siyah Hatasını nasıl çözebilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#csscontent`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'css', 'Counter-Strike: Source', 'cs:s']
        },
        {
            name: 'TTT SSS - Vape Token Sahibiyim, Ne Yapmalıyım?',
            url: `${baseUrl}/ttt-baslarken/sss#vapetoken`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'token', 'vape']
        },
        {
            name: 'TTT SSS - Otomatik Bunny Nasıl Yaparım?',
            url: `${baseUrl}/ttt-baslarken/sss#bunny`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'bunny']
        },
        {
            name: 'TTT SSS - Auto-disconnect süresini nasıl uzatırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#timeout`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'auto-disconnect', 'timeout']
        },
        {
            name: 'TTT SSS - Oyunda yetkili yok ve oyuncudan şikayetçiyim. Ne yapmalıyım?',
            url: `${baseUrl}/ttt-baslarken/sss#adminyok`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'admin yok', 'şikayetçiyim']
        },
        {
            name: 'TTT SSS - Video kaydım var, nereye yüklemeliyim?',
            url: `${baseUrl}/ttt-baslarken/sss#kanit`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'admin yok', 'şikayetçiyim', 'ss']
        },
        {
            name: 'TTT SSS - Sunucudan uzaklaştırıldım, nasıl itiraz edebilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#bantemyiz`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'ban temyiz', 'itiraz']
        },
        {
            name: 'TTT SSS - Başvurular',
            url: `${baseUrl}/ttt-baslarken/sss#basvuru`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'basvuru']
        },
        {
            name: 'TTT SSS - Yetkili nasıl olabilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#admin`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'basvuru', 'admin', 'Gorevli yetkili']
        },
        {
            name: 'Counter-Strike: Source Content Nasıl İndiririm?',
            url: `${baseUrl}/content`,
            content: 'CS:S Content Nasıl İndiririm?',
            tags: ['ttt', 'Trouble in Terrorist Town', 'garry\'s mod', 'gmod', 'css', 'pembe-siyah']
        },
        {
            name: 'Discord ID Nasıl Öğrenebilirim?',
            url: `${baseUrl}/discordid`,
            content: 'Discord ID Nasıl Öğrenebilirim?',
            tags: ['dc', 'discord', 'id']
        },
        {
            name: 'Ekran Kaydı nasıl alabilirim?',
            url: `${baseUrl}/ekrankaydi`,
            content: 'Ekran Kaydı nasıl alabilirim?',
            tags: ['obs', 'nvidia', 'xbox', 'game', 'bar']
        },
        {
            name: 'MoonGaming - Anasayfa',
            url: `https://moonrp.com/`,
            content: '',
            tags: ['mg', 'moongaming', 'anasayfa']
        },
        {
            name: 'MoonGaming - Discord',
            url: `https://discord.gg/moongaming`,
            content: '',
            tags: ['mg', 'moongaming', 'discord', 'dc']
        },
        {
            name: 'MoonGaming - Market',
            url: `https://moonrp.com/market`,
            content: 'VIP, VIP+ hakkında detaylı bilgi',
            tags: ['mg', 'moongaming', 'xp', 'vip', 'vip+']
        },
        {
            name: 'MoonGaming - Shopier',
            url: `https://www.shopier.com/MoonGamingTR`,
            content: 'XP, Kredi, VIP, VIP+ , Kutular, İmzalı Araçlar, LSPD Aboneliği vb...',
            tags: ['mg', 'moongaming', 'xp', 'vip', 'vip+', 'kutu', 'destekci', 'kredi']
        },
        {
            name: 'Steam ID Bulucu',
            url: `https://steamdb.info/calculator/`,
            content: 'Steam ID öğrenin...',
            tags: ['dc', 'steam', 'id', 'steam64', 'steamhex']
        },
    ];
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    const searchIcon = document.getElementById('searchButton');
    const clearSearch = document.getElementById('clearSearch');
    const topMenu = document.getElementById('topMenu');
    const navbarNav = document.getElementById('navbarNav');
    function toggleSearchIcon() {
        var _a;
        if (window.innerWidth < 767) {
            topMenu.appendChild(searchIcon);
        }
        else {
            (_a = navbarNav.parentNode) === null || _a === void 0 ? void 0 : _a.insertBefore(searchIcon, navbarNav.nextSibling);
        }
    }
    toggleSearchIcon();
    window.addEventListener('resize', toggleSearchIcon);
    searchIcon.addEventListener('click', () => {
        // @ts-ignore
        const modal = new bootstrap.Modal(document.getElementById('searchModal'));
        modal.show();
    });
    clearSearch.addEventListener('click', () => {
        searchInput.value = '';
        searchResults.innerHTML = '';
        clearSearch.style.display = 'none';
    });
    searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase();
        searchResults.innerHTML = '';
        if (query) {
            clearSearch.style.display = 'block';
            const filteredData = searchData.filter(item => {
                return item.name.toLowerCase().includes(query) ||
                    item.content.toLowerCase().includes(query) ||
                    item.tags.some(tag => tag.toLowerCase().includes(query));
            });
            if (filteredData.length > 0) {
                filteredData.forEach(item => {
                    const listItem = document.createElement('li');
                    listItem.className = 'list-group-item';
                    listItem.innerHTML = `<a style="text-decoration: none" href="${item.url}"><b>${item.name}</b></a>${item.content ? ': ' + item.content : ''}`;
                    searchResults.appendChild(listItem);
                });
            }
            else {
                searchResults.innerHTML = '<li class="list-group-item">Sonuç bulunamadı.</li>';
            }
        }
        else {
            clearSearch.style.display = 'none';
            searchResults.innerHTML = '';
        }
    });
});
