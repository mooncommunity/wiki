document.addEventListener('DOMContentLoaded', function () {
    const searchData = [
        {
            name: 'Anasayfa',
            url: `${baseUrl}/`,
            content: '',
            tags: ['anasayfa']
        },
        {
            name: 'DarkRP Nedir',
            url: `${baseUrl}/darkrp`,
            content: '',
            tags: ['drp', 'rp', 'yeniyim', "darkrp yeniyim"]
        },
        {
            name: 'DarkRP Oyun Kuralları',
            url: `https://moonrp.com/oyunkurallari`,
            content: 'Mutlaka bilinmesi gereken oyun kuralları',
            tags: ['drp', 'rp', 'kurallar', 'yeniyim', "darkrp yeniyim"]
        },
        {
            name: 'DarkRP Başlarken',
            url: `${baseUrl}/darkrp-baslarken`,
            content: 'DarkRP Başlıyan herkesin bilmesi gerekenler',
            tags: ['drp', 'rp', 'başlarken', 'yeniyim', "darkrp yeniyim"]
        },
        {
            name: 'DarkRP - Chromium Nedir? Nasıl Chromium Geçerim?',
            url: `${baseUrl}/darkrp-baslarken/chromium`,
            content: 'Garry\'s Mod için Chromium güncellemesi, HTML panelleri ve medya içeriği için daha iyi performans ve uyumluluk sağlar, oyunculara daha akıcı bir deneyim sunar.',
            tags: ['drp', 'rp', 'chrome', 'beta', 'steambeta', 'yeniyim', "darkrp yeniyim"]
        },
        {
            name: 'DarkRP - Linux distrosu kullanıyorum, nasıl sunucuya katılabilirim?',
            url: `${baseUrl}/darkrp-baslarken/linux`,
            content: 'Proton, Linux\'ta Windows oyunlarını çalıştırmak için optimize edilmiş bir uyumluluk aracıdır. Native Linux sürümleri için alternatif sunarken, native desteği olmayan oyunlarda performansı artırır ve geniş oyun yelpazesi sağlar',
            tags: ['drp', 'rp', 'linux', 'proton', 'opensuse', 'ubuntu', 'debian', 'fedora']
        },
        {
            name: 'DarkRP Başlarken - Gerekli Eklentiler ve Ayarlar',
            url: `${baseUrl}/darkrp-baslarken#gerekli-eklentiler-ve-ayarlar`,
            content: 'Oyuna girmeden önce yapılması gerekenler...',
            tags: ['drp', 'rp', 'workshop', 'chromium', 'error', 'yeniyim', "darkrp yeniyim"]
        },
        {
            name: 'DarkRP Başlarken - Temel Kısayollar',
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
            name: 'DarkRP Başlarken - Oyundaki tüm silahlarım nerede?',
            url: `${baseUrl}/darkrp-baslarken#weapon`,
            content: 'Silah slotlarım nerede?',
            tags: ['drp', 'rp', 'weapon', 'silah']
        },
        {
            name: 'DarkRP Başlarken - Telefon nasıl kullanırım?',
            url: `${baseUrl}/darkrp-baslarken#phone`,
            content: 'Telefon kullanımını öğren...',
            tags: ['drp', 'rp', 'telefon', 'arama', 'mesaj', 'para', 'kamera', 'borsa']
        },
        {
            name: 'DarkRP Başlarken - Önemli yerler',
            url: `${baseUrl}/darkrp-baslarken#city`,
            content: 'Bilmen gereken lokasyonlar...',
            tags: ['drp', 'rp', 'city', 'şehir']
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
            name: 'DarkRP Başlarken - build',
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
            name: 'DarkRP Başlarken - Daha Fazla XP Nasıl Kazanırım?',
            url: `${baseUrl}/darkrp-baslarken#xp`,
            content: 'XP Nasıl Kazanırım?',
            tags: ['drp', 'rp', 'xp', 'xpboost', 'mg', 'tag', 'happy hours', 'etüt']
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
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'error', 'whitelist', 'wh', 'yetkili', 'sefir', 'mit', 'DirectX', 'baron', 'pöh', 'jöh']
        },
        {
            name: 'DarkRP SSS - Etrafta her şey error, ne yapmalıyım? / Oyuna giremiyorum, ana menüye atıyor?',
            url: `${baseUrl}/darkrp-baslarken/sss#error`,
            content: 'Etrafımda herşey error...',
            tags: ['drp', 'rp', 'sss', 'error']
        },
        {
            name: 'DarkRP SSS - "This typically means you are running out of Video Memory on your GPU" hatası alıyorum?',
            url: `${baseUrl}/darkrp-baslarken/sss#gpumemory`,
            content: 'Engine error geliyor ekranıma...',
            tags: ['drp', 'rp', 'sss', 'error', 'engineerror', 'gpu', 'ekrankarti', 'gpumemory']
        },
        {
            name: 'DarkRP SSS - Oyunda görüntüler kesik kesik; bir taraf var, bir taraf yok. Görüntüler iç içe girmiş. Ne yapmam gerekiyor?',
            url: `${baseUrl}/darkrp-baslarken/sss#modeldetayi`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'error', 'engineerror', 'gpu', 'ekrankarti']
        },
        {
            name: 'DarkRP SSS - Konsol/Console Nedir?',
            url: `${baseUrl}/darkrp-baslarken/sss#console`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'console', 'konsole']
        },
        {
            name: 'DarkRP SSS - Tuşlarım çalışmıyor, neden?',
            url: `${baseUrl}/darkrp-baslarken/sss#tus`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'tuş', 'keyboard']
        },
        {
            name: 'DarkRP SSS - Oyunda sesim diğer oyunculara gitmiyor, ne yapmalıyım?',
            url: `${baseUrl}/darkrp-baslarken/sss#mikrofon`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'sanal', 'mikrofon']
        },
        {
            name: 'DarkRP SSS - F1, F2, F3, F4, M, T gibi tuşları başka tuşa atayabilir miyim?',
            url: `${baseUrl}/darkrp-baslarken/sss#sunucutus`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'tuş', 'sunucutuş']
        },
        {
            name: 'DarkRP SSS - Aile Paylaşımı ile sunucuya nasıl katılırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#ailepaylasimi`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'wh', 'sunucutuş']
        },
        {
            name: 'DarkRP SSS - GeForce Now ile sunucuya nasıl katılırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#geforcenow`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'wh', 'geforce now']
        },
        {
            name: 'DarkRP SSS - GeForce Now\'da Garry\'s Mod nasıl betaya alırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#geforcenow-beta`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'wh', 'geforce now']
        },
        {
            name: 'DarkRP SSS - Oyunda bayıldım, sonrasında ilk yardım ekibi gelip beni canlandırdı ve silahımı atamıyorum, neden?',
            url: `${baseUrl}/darkrp-baslarken/sss#bayilmak`,
            content: 'Bayıldım, doktor kaldırdı silah droplıyamıyorum...',
            tags: ['drp', 'rp', 'sss', 'att', 'bayilma']
        },
        {
            name: 'DarkRP SSS - Envanterimdeki kutuyu nasıl açabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#kutu`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'kutu', 'moonshop']
        },
        {
            name: 'DarkRP SSS - Araç Nereden Satın Alabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#arac`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'araba', 'galeri']
        },
        {
            name: 'DarkRP SSS - Aracım NPC\'de yok, aracımı nasıl çıkartacağım?',
            url: `${baseUrl}/darkrp-baslarken/sss#araccikarma`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'araba', 'galeri']
        },
        {
            name: 'DarkRP SSS - Aracımın yakıtı bitti, nasıl doldurabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#yakit`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'araba', 'yakıt', 'dizel', 'elektrik', 'benzin']
        },
        {
            name: 'DarkRP SSS - Parti belgesi nedir, parti ne işe yarar?',
            url: `${baseUrl}/darkrp-baslarken/sss#parti`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'parti', 'benzinlik', 'soygun', 'baskın']
        },
        {
            name: 'DarkRP SSS - Fizik Silahı Rengini Nasıl Değiştirebilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#guncolor`,
            content: 'Physic Gun Rengini Nasıl Değiştirebilirim?',
            tags: ['drp', 'rp', 'sss', 'Physic Gun', 'Fizik Gun', 'Gun', 'color', 'renk', 'sandbox']
        },
        {
            name: 'DarkRP SSS - Oyunda yetkili yok ve oyuncudan şikayetçiyim. Ne yapmalıyım?',
            url: `${baseUrl}/darkrp-baslarken/sss#adminyok`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'admin', 'ticket']
        },
        {
            name: 'DarkRP SSS - Sunucudan uzaklaştırıldım, nasıl itiraz edebilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#bantemyiz`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'admin', 'bantemyiz', 'haksizban', 'yasaklanma']
        },
        {
            name: 'DarkRP SSS - Yetkili nasıl olabilirim?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-poh`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'admin', 'mod']
        },
        {
            name: 'DarkRP SSS - Polis Özel Harekat Polisi ve Polis Özel Harekat Doktoru nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-poh`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'wh', 'poh', 'doktor', 'asayiş']
        },
        {
            name: 'DarkRP SSS - Jandarma Özel Harekat Komandosu ve Jandarma Özel Harekat Doktoru nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-joh`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'wh', 'joh', 'doktor', 'jandarma', 'sıhhiye']
        },
        {
            name: 'DarkRP SSS - Millî İstihbarat Teşkilatı Müsteşarı nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-mit-mustesari`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'wh', 'mit', 'sivilpolis']
        },
        {
            name: 'DarkRP SSS - Emniyet Genel Müdürü nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-egm`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'wh', 'egm']
        },
        {
            name: 'DarkRP SSS - Baron nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-baron`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'wh', 'baron']
        },
        {
            name: 'DarkRP SSS - Sefir nasıl olurum?',
            url: `${baseUrl}/darkrp-baslarken/sss#basvuru-sefir`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'wh', 'sefir']
        },
        {
            name: 'DarkRP SSS - Bilim Adamı Nasıl Olunur?',
            url: `${baseUrl}/darkrp-baslarken/sss#bilimadami`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'bitki', '3seviye']
        },
        {
            name: 'DarkRP SSS - Vergi Levhası nasıl çıkartırım?',
            url: `${baseUrl}/darkrp-baslarken/sss#vergilev`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'esnaf', 'vergi', 'gm_spawn']
        },
        {
            name: 'DarkRP SSS - Aile kurmak istiyorum, ne yapmam gerekiyor?',
            url: `${baseUrl}/darkrp-baslarken/sss#vergilev`,
            content: 'DarkRP moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['drp', 'rp', 'sss', 'aile', 'familya', 'baron', 'sefir']
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
            tags: ['drp', 'rp', 'bekçi', 'legal', 'yeniyim', "darkrp yeniyim"]
        },
        {
            name: 'Devlet Çalışanı - Belediye İşçisiyim, Nasıl Görevimi Yerine Getirebilirim?',
            url: `${baseUrl}/darkrp-kariyer/legal#belediyeisci`,
            content: 'Belediye işçisi ne yapıyor...',
            tags: ['drp', 'rp', 'belediye', 'işçi', 'legal', 'yeniyim', "darkrp yeniyim"]
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
            name: 'Devlet Çalışanı - Başkan Olarak Sokağa Çıkma Yasağı Başlatmadan Ne Yapmalıyım?',
            url: `${baseUrl}/darkrp-kariyer/legal#baskansokagacikma`,
            content: 'Kamu düzenini sağlamak ve vatandaşlara hizmet etmek için sorumluluk taşır; güvenlik, vergi toplama ve yasaların uygulanmasında aktif rol oynar.',
            tags: ['drp', 'rp', 'baskan', 'sokağa', 'lockdown', 'legal', 'polis', 'jandarma', 'sivilpolis', 'jandarma', 'özel harekat']
        },
        {
            name: 'DarkRP Kariyer - Esnaf ve Siviller',
            url: `${baseUrl}/darkrp-kariyer/esnaf`,
            content: 'Esnaf ve siviller, toplumun ekonomik ve sosyal yapı taşlarıdır. İşbirliği ve dayanışma ile yerel ekonomiyi destekleyerek toplumsal yaşamı güçlendirirler.',
            tags: ['drp', 'rp', 'yemek', 'kafe', 'dönerci', 'hamburgerci', 'imam', 'yapı market', 'poligon sahibi', 'ithalatçı', 'pos', 'maden', 'elmas']
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
            tags: ['drp', 'rp', 'yapı market', 'poligon sahibi', 'ithalatçı', 'pos']
        },
        {
            name: 'Esnaf ve Siviller - Yapı Market Ürünleri',
            url: `${baseUrl}/darkrp-kariyer/esnaf#ticarivehizmetsektoru-yapimarket-urunleri`,
            content: 'Yapı marketlerde satılan ürünler, Garry\'s Mod\'un temel eşyaları olan Physic Gun ve Tool Gun ile ilgilidir. Bu eşyalar, oyuncuların inşaat ve yapı işlemlerinde kullanmaları gereken olmazsa olmaz malzemelerdir. ',
            tags: ['drp', 'rp', 'yapı market', 'Tool Gun', 'Physic Gun', 'Gravity Gun', 'Fotoğraf Makinesi', 'kask', 'ayakkabı', 'çelik yelek']
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
            tags: ['drp', 'rp', 'İthalatçı', 'Tabanca', 'Ateşli Silahlar', 'Makinalı Silahlar', 'Muhimmat Kutusu', 'Farklı Seviye Mermiler', 'x Kalite Çelik Yelek']
        },
        {
            name: 'Esnaf ve Siviller - İthalatçı Satılan Ürünler',
            url: `${baseUrl}/darkrp-kariyer/esnaf#ticarivehizmetsektoru-ithalatci-urunler`,
            content: 'İthalatçı mesleği, DarkRP ve MoonGaming sunucularında oyunculara geniş bir silah yelpazesi sunan ve ağır silahlar temin edebilen özel bir rolü temsil eder.',
            tags: ['drp', 'rp', 'İthalatçı', 'Tabanca', 'Ateşli Silahlar', 'Ağır Silahlar', 'Muhimmat Kutusu', 'Farklı Seviye Mermiler', 'x Kalite Çelik Yelek']
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
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'baron', 'bilim', 'sefir', 'keko', 'temizlik']
        },
        {
            name: 'Yasadışı Organizasyonlar - Meslekler',
            url: `${baseUrl}/darkrp-kariyer/illegal#meslek`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'baron', 'bilim', 'sefir', 'keko', 'temizlik']
        },
        {
            name: 'Yasadışı Organizasyonlar - Keko Mesleğinde...',
            url: `${baseUrl}/darkrp-kariyer/illegal#kekoyapabilcekleri`,
            content: 'İlk adımlar önemli...',
            tags: ['drp', 'rp', 'illegal', 'yeniyim', 'keko', "darkrp yeniyim"]
        },
        {
            name: 'Yasadışı Organizasyonlar - Nasıl Araba Çalabilirim?',
            url: `${baseUrl}/darkrp-kariyer/illegal#carjack`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'araba', 'soygun']
        },
        {
            name: 'Yasadışı Organizasyonlar - Banka Soygunu Nasıl Yapılır?',
            url: `${baseUrl}/darkrp-kariyer/illegal#bankasoygun`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'banka', 'soygun']
        },
        {
            name: 'Yasadışı Organizasyonlar - Kirli Dolar Üretimi',
            url: `${baseUrl}/darkrp-kariyer/illegal#dolar`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'dolar', 'printer']
        },
        {
            name: 'Yasadışı Organizasyonlar - Para Basma Makinesi Nedir? Nasıl Çalışır?',
            url: `${baseUrl}/darkrp-kariyer/illegal#printer`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'dolar', 'printer', 'mühendis']
        },
        {
            name: 'Yasadışı Organizasyonlar - Bitki Üretimi',
            url: `${baseUrl}/darkrp-kariyer/illegal#bitki`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'bitki', 'saksi', 'mühendis']
        },
        {
            name: 'Yasadışı Organizasyonlar - Bitkimi Nasıl Yükseltebilirim?',
            url: `${baseUrl}/darkrp-kariyer/illegal#bitkiupgrade`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'bitki', 'saksi', 'mühendis', '2seviye', '3seviye']
        },
        {
            name: 'Yasadışı Organizasyonlar - Saksı Nedir? Nasıl Çalışır?',
            url: `${baseUrl}/darkrp-kariyer/illegal#saksi`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'bitki', 'saksi', 'mühendis']
        },
        {
            name: 'Yasadışı Organizasyonlar - Kirli Dolar Temizleme ve Bitki Satmanin Yolları Nelerdir?',
            url: `${baseUrl}/darkrp-kariyer/illegal#temizleme`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'bitki', 'dolar', 'satma', 'npc', 'meslek', 'botanikci', 'sigortaci']
        },
        {
            name: 'Yasadışı Organizasyonlar - Korsan ve Eşkiyada ürettiğim İthal eşyaları kime satabilirim?\n',
            url: `${baseUrl}/darkrp-kariyer/illegal#ithalesya`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'korsan', 'eşkıya', 'ithal']
        },
        {
            name: 'Yasadışı Organizasyonlar - Faction Mesleklerine Nasıl Geçebilirim?',
            url: `${baseUrl}/darkrp-kariyer/illegal#factiongereksinim`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'faction', 'rus', 'italyan', 'triads', 'aşiret']
        },
        {
            name: 'Yasadışı Organizasyonlar - Familya/Aile Nedir? Neden Bir Familya/Aileye Katılmalıyım?',
            url: `${baseUrl}/darkrp-kariyer/illegal#aile`,
            content: 'Yasadışı organizasyonlar, kanun dışı faaliyetlerde bulunan gruplardır. Suç, dolandırıcılık ve yasa ihlalleri gibi eylemlerle toplum güvenliğini tehdit eder.',
            tags: ['drp', 'rp', 'illegal', 'familya', 'aile']
        },
        {
            name: 'TTT Nedir',
            url: `${baseUrl}/ttt`,
            content: '',
            tags: ['ttt', 'Trouble in Terrorist Town', 'yeniyim', "ttt yeniyim"]
        },
        {
            name: 'TTT Oyun Kuralları',
            url: `https://moonrp.com/oyunkurallari`,
            content: 'Mutlaka bilinmesi gereken oyun kuralları',
            tags: ['ttt', 'Trouble in Terrorist Town', 'kurallar', 'yeniyim', "ttt yeniyim"]
        },
        {
            name: 'TTT Başlarken',
            url: `${baseUrl}/ttt-baslarken`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'başlarken', 'yeniyim', "ttt yeniyim"]
        },
        {
            name: 'TTT - Chromium Nedir? Nasıl Chromium Geçerim?',
            url: `${baseUrl}/ttt-baslarken/chromium`,
            content: 'Garry\'s Mod için Chromium güncellemesi, HTML panelleri ve medya içeriği için daha iyi performans ve uyumluluk sağlar, oyunculara daha akıcı bir deneyim sunar.',
            tags: ['ttt', 'Trouble in Terrorist Town', 'chrome', 'beta', 'steambeta', 'yeniyim', "ttt yeniyim"]
        },
        {
            name: 'TTT - Linux distrosu kullanıyorum, nasıl sunucuya katılabilirim?',
            url: `${baseUrl}/ttt-baslarken/linux`,
            content: 'Proton, Linux\'ta Windows oyunlarını çalıştırmak için optimize edilmiş bir uyumluluk aracıdır. Native Linux sürümleri için alternatif sunarken, native desteği olmayan oyunlarda performansı artırır ve geniş oyun yelpazesi sağlar',
            tags: ['ttt', 'Trouble in Terrorist Town', 'linux', 'proton', 'opensuse', 'ubuntu', 'debian', 'fedora']
        },
        {
            name: 'TTT Başlarken - Gerekli Eklentiler ve Ayarlar',
            url: `${baseUrl}/ttt-baslarken#gerekli-eklentiler-ve-ayarlar`,
            content: 'Oyuna girmeden önce yapılması gerekenler...',
            tags: ['ttt', 'Trouble in Terrorist Town', 'workshop', 'chromium', 'error', 'yeniyim', "ttt yeniyim"]
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
            tags: ['ttt', 'Trouble in Terrorist Town', 'spectate', 'izleyici', "uçuyorum"]
        },
        {
            name: 'TTT Başlarken - Test Odası nedir?',
            url: `${baseUrl}/ttt-baslarken#test`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'tester', 'haintespit', "dedektif", "masum", "yeniyim", "ttt yeniyim"]
        },
        {
            name: 'TTT Başlarken - Oyundaki tüm silahlarım nerede?',
            url: `${baseUrl}/ttt-baslarken#weapon`,
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
            url: `${baseUrl}/ttt-baslarken#weaponn`,
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
            tags: ['ttt', 'Trouble in Terrorist Town', 'kredi', 'c menü kredi', 'hain', 'dedektif', 'yeniyim', "ttt yeniyim"]
        },
        {
            name: 'TTT Başlarken - Dedektif/Hain iken hangi ekipmanları kullanabilirim?',
            url: `${baseUrl}/ttt-baslarken#cmenu`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'etüt', 'eczane', 'botanikçi', 'ithalci', 'gece']
        },
        {
            name: 'TTT Başlarken - Envanter nedir? Burada ne yapabilirim?',
            url: `${baseUrl}/ttt-baslarken#envanter`,
            content: 'TTT Başlıyan herkesin bilmesi gerekenler',
            tags: ['ttt', 'Trouble in Terrorist Town', 'envanter', 'takas', 'kutu', 'destekçi']
        },
        {
            name: 'TTT Başlarken - Sıkça Sorulan Sorular',
            url: `${baseUrl}/ttt-baslarken/sss`,
            content: 'TTT moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'whitelist', 'yetkili', 'DirectX']
        },
        {
            name: 'TTT SSS - Etrafta her şey error, ne yapmalıyım? / Oyuna giremiyorum, ana menüye atıyor?',
            url: `${baseUrl}/ttt-baslarken/sss#error`,
            content: 'Etrafımda herşey error...',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error']
        },
        {
            name: 'TTT SSS - "This typically means you are running out of Video Memory on your GPU" hatası alıyorum?',
            url: `${baseUrl}/ttt-baslarken/sss#gpumemory`,
            content: 'Engine error geliyor ekranıma...',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'engineerror', 'gpu', 'ekrankarti', 'gpumemory']
        },
        {
            name: 'TTT SSS - Oyunda görüntüler kesik kesik; bir taraf var, bir taraf yok. Görüntüler iç içe girmiş. Ne yapmam gerekiyor?',
            url: `${baseUrl}/ttt-baslarken/sss#modeldetayi`,
            content: 'TTT moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'error', 'engineerror', 'gpu', 'ekrankarti']
        },
        {
            name: 'TTT SSS - Konsol/Console Nedir?',
            url: `${baseUrl}/ttt-baslarken/sss#console`,
            content: 'TTT moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'console', 'konsole']
        },
        {
            name: 'TTT SSS - Tuşlarım çalışmıyor, neden?',
            url: `${baseUrl}/ttt-baslarken/sss#tus`,
            content: 'TTT moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'tuş', 'keyboard']
        },
        {
            name: 'TTT SSS - Oyunda sesim diğer oyunculara gitmiyor, ne yapmalıyım?',
            url: `${baseUrl}/ttt-baslarken/sss#mikrofon`,
            content: 'TTT moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'sanal', 'mikrofon']
        },
        {
            name: 'TTT SSS - Pembe-Siyah Hatasını nasıl çözebilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#csscontent`,
            content: 'TTT moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'css', 'pembe', 'kare', 'yeniyim', "ttt yeniyim"]
        },
        {
            name: 'TTT SSS - Vape Token Sahibiyim, Ne Yapmalıyım?',
            url: `${baseUrl}/ttt-baslarken/sss#ailepaylasimi`,
            content: 'TTT moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'Token', 'envanter']
        },
        {
            name: 'TTT SSS - Oyunda yetkili yok ve oyuncudan şikayetçiyim. Ne yapmalıyım?',
            url: `${baseUrl}/ttt-baslarken/sss#adminyok`,
            content: 'TTT moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'admin', 'ticket']
        },
        {
            name: 'TTT SSS - Yetkili nasıl olabilirim?',
            url: `${baseUrl}/ttt-baslarken/sss#admin`,
            content: 'TTT moduyla ilgili en sık sorulan soruların yanıtlarını keşfedin; oyun kuralları, meslekler, para kazanma yöntemleri ve rol yapma ipuçlarıyla oyun deneyiminizi zenginleştirin.',
            tags: ['ttt', 'Trouble in Terrorist Town', 'sss', 'admin', 'mod']
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
            url: `https://www.shopier.com/ShowProductNew/storefront.php?shop=MoonGamingTR`,
            content: '',
            tags: ['mg', 'moongaming', 'xp', 'vip', 'vip+', 'kutu', 'destekci', 'kredi']
        },
        {
            name: 'Steam ID Bulucu',
            url: `https://www.steamidfinder.com/`,
            content: 'Steam ID öğrenin...',
            tags: ['dc', 'steam', 'id', 'steam64', 'steamhex']
        },

    ];


    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    const searchIcon = document.getElementById('searchIcon');
    const clearSearch = document.getElementById('clearSearch');

    const topMenu = document.getElementById('top-menu');
    const navbarNav = document.getElementById('navbarNav');

    function toggleSearchIcon() {
        if (window.innerWidth < 767) {
            topMenu.appendChild(searchIcon);
        } else {
            navbarNav.parentNode.insertBefore(searchIcon, navbarNav.nextSibling);
        }
    }

    toggleSearchIcon();
    window.addEventListener('resize', toggleSearchIcon);

    searchIcon.addEventListener('click', () => {
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
            } else {
                searchResults.innerHTML = '<li class="list-group-item">Sonuç bulunamadı.</li>';
            }
        } else {
            clearSearch.style.display = 'none';
            searchResults.innerHTML = '';
        }
    });
});