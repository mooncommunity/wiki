<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="mb-4">Linux distrosu kullanıyorum, nasıl sunucuya katılabilirim?</h1>
        <hr>
        <div class="alert alert-info" role="alert">
            <strong>Bilgi:</strong> Linux kullanıcıların bir sorun yaşaması halinde internetten araştırma
            yapması gerekmektedir. Bu rehber sadece oyuna nasıl bağlanabileceklerini anlatmaktadır.
        </div>

        <p>Sunucumuza katılmanın iki yolu mevcuttur. Birincisi <a href="#native">Linux sürümünü</a> kullanmak,
            ikinci seçenek ise <a href="#proton">Uyumluluk modu (Proton ile Windows sürümü)</a> kullanmaktır.
        </p>

        <h2 id="native">1. Native Sürüm</h2>
        <p>İndirdiğiniz gibi kullanabilirsiniz.</p>

        <h3>Oyun girdiğimde menüler gözükmüyor, nasıl çözebilirim?</h3>

        <div class="alert alert-danger" role="alert">
            <strong>Uyarı:</strong> Bu adım üçüncü şahıs tarafından düzenleme içerir. Oyunun orijinal dosyasına
            müdahale eder. Bir sorun yaşanması halinde sorumluluk kabul edilmemektedir.
        </div>

        <p><a href="https://github.com/solsticegamestudios/GModCEFCodecFix/releases">GModCEFCodecFix</a> ile
            oyunun açılışındaki menü sorununuzu çözebilirsiniz.</p>

        <div class="alert alert-success" role="alert">
            <strong>GModCEFCodecFix Projesi Nedir?</strong> Bu projenin amacı Linux ve macOS kullanıcıların
            chromium menü sorununu çözmek, chromium sürümünü en güncel hale getirmek, H.264 (MP4) ve AAC gibi
            sahipli video/ses codec'lerini etkinleştirmek, yazılımsal WebGL desteği sunmak ve kısıtlı olarak GPU
            hızlandırma sunmaktır.
        </div>

        <ol>
            <li>
                <a href="https://github.com/solsticegamestudios/GModCEFCodecFix/releases/latest/download/GModCEFCodecFix-Linux">GModCEFCodecFix-Linux</a>
                dosyasını indirdikten sonra terminalinizi açınız.
            </li>
            <li>GModCEFCodecFix-Linux dosyasının bulunduğu konuma gidiniz.</li>
        </ol>

        <pre><code>bash
# Kullandığınız dile göre klasör ismi değişebilir
cd Downloads
chmod +x GModCEFCodecFix-Linux
./GModCEFCodecFix-Linux -a 0
# -a 0 parametresi işlem tamamlandıktan sonra direkt oyunu başlatmak içindir
</code></pre>

        <h3>Peki, GModCEFCodecFix nasıl kaldırırım?</h3>
        <p>Steam'dan oyun dosyalarının bütünlüğünü doğruladığınızda Steam değiştirilen dosyaları tekrar
            indirecektir.</p>

        <h3>"Unable to load module engine_client.so" hatası alıyorum?</h3>
        <p>OpenSSL sürümünüz GMod ile uyumsuz olmasından veya OpenSSL yüklü olmamasından kaynaklıdır.</p>
        <pre><code>bash
wget https://www.openssl.org/source/old/1.0.1/openssl-1.0.1u.tar.gz
tar xzf openssl-1.0.1u.tar.gz
cd openssl-1.0.1u
./config shared
make -j$(nproc)
cp {libssl,libcrypto}.so* ~/.steam/steam/steamapps/common/GarrysMod/bin/linux64
rm -r openssl-1.0.1u*
</code></pre>

        <h3>Steam Overlay Çalışmıyor?</h3>
        <p>Steam overlay Linux sürümünde ne yazık ki düzgün çalışmamaktadır. Devre dışı bırakabilirsiniz.</p>

        <h3>Oyun bazı kısımları bu sürümde düzgün çalışmıyor gibi ne yapabilirim?</h3>
        <p><a href="#proton">Uyumluluk Modunda</a> oynamayı deniyebilirsiniz.</p>

        <h3 class="text-purple">Oyun içerisinde bazı simgeler [] şeklinde ne yapmalıyım?</h3>
        <p>Bu tamamen Windows fontlarıyla alakalı, Windows fontlarının tamamına sahip olmadığınızdan kaynaklı.
            <code>~/.local/share/fonts/</code> giderek eksik fontları bir şekilde tamamlamanız gerekmekte.</p>

        <hr>

        <h2 id="proton">2. Uyumluluk modu (Proton)</h2>
        <p>Oyunuzu uyumluluk moduna almanız gerekiyor. Peki Garry's Mod Linux sürümü sunmuyor mu? Evet, sunuyor
            fakat addonlarımızın birçoğu Windows'a göre ayarlanıyor. Olası sorunlarını minimalize etmek amacıyla
            uyumluluk modunda kullanmanızı öneriyoruz.</p>

        <h3>Garry's Mod uyumluluk moduna nasıl alırım?</h3>

        <table class="table border-0">
            <tr>
                <td class="border-0 text-center" style="width: 50%;">
                    <p><img src="<?= $baseUrl ?>/assets/image/steam_ayarlar.png" alt="" class="img-fluid"></p>
                </td>
                <td class="border-0">
                    <ol>
                        <li>İlk önce Steam kütüphanenize geliniz.</li>
                        <li>Garry's Mod'u bulup sağ tıklayın.</li>
                        <li>Özellikler...</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td class="border-0 text-center" style="width: 50%;">
                    <img src="<?= $baseUrl ?>/assets/image/steam_proton.png" alt="" class="img-fluid">
                </td>
                <td class="border-0">
                    <ol start="4">
                        <li>Uyumluluk</li>
                        <li>"Belirli bir Steam Play uyumluluk aracının kullanılmasını zorla" işaretleyiniz.</li>
                        <li>"Proton Experimental" veya "Proton 9.0" seçiniz.</li>
                    </ol>
                </td>
            </tr>
        </table>

        <h3 class="text-purple">Oyun içerisinde bazı simgeler [] şeklinde ne yapmalıyım?</h3>
        <p>Bu tamamen windows fontlarıyla alakalı windows fontların tamamına sahip olmadığınızdan kaynaklı.
            steamapps klasörüne giderek <code>compatdata/4000/pfx/driver_c/windows/fonts</code> giderek eksik
            fontları bir şekilde tamamlamanız gerekmekte.</p>
    </div>
</main>