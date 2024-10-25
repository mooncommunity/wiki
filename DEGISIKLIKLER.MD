# 1.0.2

## Search için anahtar kelime "darkrp yeniyim" || "ttt yeniyim"

- TTT Nedir?
    - "Oyun başladığında herkes gizli rolünü öğrenir. Teröristler, masumları öldürmeden önce dedektifleri ve diğer
      teröristleri ortadan kaldırmalıdır. Dedektifler, şüpheli oyuncuları tespit edip masumları korumalıdır." yazısı "
      Oyun başladığında herkes gizli rolünü öğrenir. Teröristler, masumları öldürmeden önce dedektifleri ortadan
      kaldırmalıdır. Dedektifler, şüpheli oyuncuları tespit edip masumları korumalıdır." olarak güncellendi
- DarkRP Kariyer > Esnaf ve Siviller
    - Mühendis eklendi
    - İmam eklendi

- TTT Başlarken
    - "Etkinlik düzenleniyor mu?" eklendi.
    - "Sohbet ve İletişim" deki "pm" harfleri büyütüldü ("PM")

- Resim eklendi
    - src/assets/image/favicon.ico
    - src/assets/image/steam_menu_ayarlar.png
    - src/assets/image/steam_menu_ayarlar_indirmeler.png
    - src/assets/image/steam_menu_ayarlar_indirmeler_1.png

- DarkRP Başlarken > SSS
    - "Nasıl Dans Edebilirim?" eklendi
    - "Döviz nasıl alırım?" eklendi
    - "Oyunda görüntüler kesik kesik; bir taraf var, bir taraf yok. Görüntüler iç içe girmiş. Ne yapmam gerekiyor?"
      içeriği güncellendi.
    - "Fizik Silahı Rengini Nasıl Değiştirebilirim?" eklendi.
    - "Araç Ehliyeti Nereden Alabilirim?" eklendi
    - "Silah Ruhsatı Nereden Alabilirim?" eklendi
    - "Aracım hasarlı, nasıl tamir edebilirim?" eklendi
    - "İsmimi nasıl değiştireceğim?" eklendi
    - "Bilim İnsanı" yazıyordu "Bilim Adamı" olarak değiştirildi

- TTT Başlarken > SSS
    - "Oyunda görüntüler kesik kesik; bir taraf var, bir taraf yok. Görüntüler iç içe girmiş. Ne yapmam gerekiyor?"
      içeriği güncellendi.
    - Başvuru kısmı güncellendi.

- DarkRP Kariyer > Devlet Çalışanı
    - "Belediye Başkanı Nasıl Olacağım?" eklendi
    - "Belediye Başkan Yardımcısı Seçebiliyor muyum?" eklendi

- DarkRP Kariyer > Yasadışı Organizasyonlar
    - "Bitkiları" "Bitkileri" olarak düzenlendi.
    - "Bitki üretiminin" ID si ot du bitki olarak güncellendi.
    - "Korsan ve Eşkiyada Ürettiğim İthal eşyaları kime satabilirim?" ID si değiştirildi kacakesya dı ithalesya yapıldı
    - Çeçen Mafya Üyesi ve Çeçen Mafya Lideri tanımında Bitki üretimi vardı kaldırıldı.

- Meta etiketlerinden OG Image kaldırıldı (Resim yapılana kadar eklenmicek)
- aykafa.ico lokal dosyaya taşındı ve ismi favicon.ico oldu.

- "scripts.js" dosyası düzenlendi
    - H1, H2, H3, H4, H5 etiketlerinde ID varsa ve bu ID gidilirse artık sarı border gözükücek H etiketlerin
      çerçevesinde.

- "style.css" dosyası düzenlendi
    - `.highlighted` class eklendi.
    - `.Rounded-button` class eklendi.
    - `.desktop-content` class eklendi.

- "search.js" dosyası eklendi.
- Index sayfasında img classları ile oynandı.

# 1.0.1

- "Paralı Meslekler" Güncellendi
- "Bilim Adamı" Tanımı Güncellendi
- "Ekran Kaydı nasıl alabilirim?" eklendi

- DarkRP Başlarken > SSS
    - "Etrafta her şey error, ne yapmalıyım?" Yeni tab eklendiğinde görüntü bozulduğundan accordion geçildi
    - "Etrafta her şey error, ne yapmalıyım?" "GPUCache" eklendi.
    - "Etrafta her şey error, ne yapmalıyım?" başlığı "Etrafta her şey error, ne yapmalıyım? / Oyuna giremiyorum, ana
      menüye atıyor?" olarak güncellendi

- DarkRP Başlarken
    - "Sohbet ve İletişim" bölümüne /job komutu eklendi.

- TTT Başlarken > SSS
    - "Vape Token Sahibiyim, Ne Yapmalıyım?" sorusu eklendi.
    - "Etrafta her şey error, ne yapmalıyım?" Yeni tab eklendiğinde görüntü bozulduğundan accordion geçildi
    - "Etrafta her şey error, ne yapmalıyım?" "GPUCache" eklendi.
    - "Etrafta her şey error, ne yapmalıyım?" başlığı "Etrafta her şey error, ne yapmalıyım? / Oyuna giremiyorum, ana
      menüye atıyor?" olarak güncellendi

- TTT Başlarken
    - "Kutu ve Silah Nasıl Elde Edebilirim?" bölümü eklendi.
    - "Aynı Silahların Farklı Varyasyonları Nedir?" bölümü eklendi.
    - "Mutator Nedir?" bölümü eklendi.

- Kaynak yapısı değiştirildi, artık kodlar PHP ile bölündü ve `php_to_html.sh` dosyası ile HTML'ye çevriliyor.
- CSS dosyası düzenlendi:
    - Google Inter fontu eklendi.
    - `body` renginin tanımı kaldırıldı, bunun yerine `--bs-body-bg` ve `--bs-color-bg` değişkenleri eklendi.
    - Kullanılmayan CSS değerleri kaldırıldı.
    - `code` ve `pre` için renk düzeltmesi yapıldı.

- `noscript` için modal eklendi (JavaScript'in devre dışı bırakıldığı durumlarda görüntülenir).

# 1.0.0

- Sitedeki menüler iyileştirildi (açılır menü düzgün çalışmıyordu).
- JavaScript dosyasındaki URL kontrolü düzeltildi (linkin sonunda / olup olmamasından kaynaklanan sorunlar esnetildi).
- `assets/css/styles.css` güncellendi (`.accordion`, `code` ve `pre` için bazı ayarlamalar eklendi).

- Görsel değişiklikler:
    - `assets/image/darkrp_npc_ot.png` artık `assets/image/darkrp_npc_bitki.png`.
    - `assets/image/darkrp_illegal_printer.png` artık `assets/image/darkrp_printer.png`.
    - `assets/image/darkrp_illegal_printer_tamir.png` artık `assets/image/darkrp_printer_tamir.png`.
    - `assets/image/darkrp_illegal_yukseltme_2.png` artık `assets/image/darkrp_yukseltme_2.png`.
    - `assets/image/ttt_c_hain.png` silindi.
    - Yeni TTT ve TTT C menü ikonları eklendi.

- CS:S içerik sayfası düzenlendi.

- DarkRP Başlarken
    - "Önemli Yerler" başlığı fareyle üzerine gelindiğinde kenarlık eklendi. Mobil tasarımda uyarı işareti görünür
      olacak şekilde düzenlendi.
    - `detail/summary` etiketleri kullanılarak accordion yapısına geçirildi.
    - Daha fazla XP kazanma bölümündeki her bir `strong` etiketine renk atandı.
    - Eşyalar accordion yapısına geçirildi, her birine rastgele renk atandı ve yeni/eksik eşyalar eklendi.
    - Ücretli meslekler eklendi.
    - "Önemli yerler" bölümüne illegal faaliyet yerine bitki yetiştirme gibi faaliyetler yazıldı.

- DarkRP Başlarken > SSS
    - Eksik `div` etiketleri eklendi.
    - "Oyunda görüntüler kesik kesik; bir taraf var, bir taraf yok. Görüntüler iç içe geçmiş. Ne yapmalıyım?" sorusu
      eklendi.
    - "Oyunda yetkili yok ve bir oyuncudan şikayetçiyim. Ne yapmalıyım?" sorusu eklendi.
    - "Vergi levhası nasıl çıkarırım?" sorusu eklendi.

- DarkRP Kariyer
    - Giriş sayfasındaki ifadeler toparlandı.

- DarkRP Kariyer > Yasadışı Organizasyonlar
    - Sorun çıkarabilecek illegal ifadeler ve görsel adresleri güncellendi.
    - "Kirli Dolar Temizleme ve Bitki Satmanın Yolları Nelerdir?" adıyla güncellendi.
    - Meslek adları ve meslek ağacı kaldırılarak accordion yapısına geçildi. Sefir ve baron kırmızı renkle ayarlandı.
    - Familya için kısa bir bilgi eklendi.

- DarkRP Kariyer > Devlet Çalışanları
    - Meslek ağacı kaldırıldı ve accordion yapısına geçildi. EGM mavi, sivil polis ve MİT kırmızı renkle ayarlandı.

- TTT Başlarken
    - Gereksinimler başlığına önerilen olarak CS:S eklendi.
    - Sohbet ve iletişim güncellendi.
    - "İzleyici modundayım, nasıl oyuna dönebilirim?" eklendi.
    - "Mümkün olduğunca dedektif olmaktan kaçınmak istiyorum." eklendi.
    - "Test odası nedir?" eklendi.
    - "Oyundaki tüm silahlarım nerede?" eklendi.
    - "Silahımda bazı şeyler yazıyor, onlar ne anlama geliyor?" eklendi.
    - "Eşyaları nasıl taşıyabilirim?" eklendi.
    - "Disguiser ve hızlı yanıtlar için tuş nasıl atayabilirim?" eklendi.
    - "Envanter kredisi ve C menü kredisi nasıl kazanırım?" eklendi.
    - "Dedektif/Hain iken hangi ekipmanları kullanabilirim?" eklendi.
    - "Envanter nedir? Burada ne yapabilirim?" eklendi.

- TTT Başlarken > SSS
    - Eksik `div` etiketleri eklendi.
    - "Oyunda görüntüler kesik kesik; bir taraf var, bir taraf yok. Görüntüler iç içe geçmiş. Ne yapmalıyım?" sorusu
      eklendi.
    - "Oyunda yetkili yok ve bir oyuncudan şikayetçiyim. Ne yapmalıyım?" sorusu eklendi.
    - Yetkili nasıl olunur? eklendi.
    - Pembe-siyah hatası eklendi.

- DarkRP Başlarken
    - Resim altındaki `figure` etiketleri kaldırıldı.

- TTT Nedir? ve DarkRP Nedir?
    - Altına kutucuk eklendi.

# 0.0.1

- "TTT Başlarken" eklendi:
    - "Gerekli Eklentiler ve Ayarlar" eklendi.
    - "Chromium Nedir? Nasıl Chromium'a Geçerim?" eklendi.
    - "Linux kullanıyorum, sunucuya nasıl katılabilirim?" eklendi.
    - "Sıkça Sorulan Sorular" eklendi.
    - "Temel Kısayollar" eklendi.
    - "Oyunu İngilizce mi, Türkçe mi yapabiliyorum?" eklendi.
    - "Sanırım izleyici modundayım, nasıl oyuna dönebilirim?" eklendi.

- "TTT Nedir?" bölümü eklendi.

- "CS:S İçeriği Nasıl İndiririm?" eklendi.

- "Discord ID Nasıl Öğrenebilirim?" eklendi.

- "DarkRP Kariyer" eklendi:
    - "Devlet Çalışanları" eklendi.
    - "Esnaf ve Siviller" eklendi.
    - "Yasadışı Organizasyonlar" eklendi.

- "DarkRP Başlarken" eklendi:
    - "Gerekli Eklentiler ve Ayarlar" eklendi.
    - "Chromium Nedir? Nasıl Chromium'a Geçerim?" eklendi.
    - "Linux kullanıyorum, sunucuya nasıl katılabilirim?" eklendi.
    - "Sıkça Sorulan Sorular" eklendi.
    - "Temel Kısayollar" eklendi.
    - "Sohbet ve İletişim" eklendi.
    - "Oyundaki tüm silahlarım nerede?" eklendi.
    - "Telefon nasıl kullanırım?" eklendi.
    - "Önemli Yerler" eklendi.
    - "Depoya eşyamı nasıl koyabilirim?" eklendi.
    - "ATM Nasıl Kullanılır?" eklendi.
    - "Yapı (Build)" eklendi.
    - "Physics Gun ve Tool Gun Hakkında" eklendi.
    - "Daha Fazla XP Nasıl Kazanırım?" eklendi.
    - "Eşyalar" eklendi.

- "DarkRP Nedir?" eklendi.
- Ana sayfa (`index`) eklendi.
- 404 sayfası eklendi.
