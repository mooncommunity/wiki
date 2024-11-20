<?php
if ($darkRPContent) {
    $AdminBasvuru = $darkrp_AdminBasvuru;
} elseif ($tttContent) {
    $AdminBasvuru = $ttt_AdminBasvuru;
}
?>

<div>
    <h3 class="standartcolor" id="adminyok"><b>Oyunda yetkili yok ve oyuncudan şikayetçiyim. Ne yapmalıyım?</b></h3>
    <p>Gerekli delilleri toplıyarak MoonGaming™ Discord sunucusuna gelip ticket açmanız gerekmektedir.</p>
</div>
<br>
<div>
    <h3 class="standartcolor" id="kanit"><b>Video kaydım var, nereye yüklemeliyim?</b></h3>
    <div class="row">
        <div class="alert alert-danger">
            <span>Fotoğraf çoğu durumda yeterli olmamaktadır.</span>
        </div>
        <div class="col-md-4">
            <ul style="list-style-type: '- ">
                <li><a href="https://youtube.com" target="_blank">Youtube</a> <b class="text-danger-emphasis">[Video
                        için]</b></li>
                <li><a href="https://streamable.com" target="_blank">Streamable</a> <b class="text-danger-emphasis">[Video
                        için]</b></li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul style="list-style-type: '* ">
                <li><a href="https://imgur.com/" target="_blank">Imgur</a> <b class="text-success-emphasis">[Fotoğraf
                        için]</b></li>
                <li><a href="https://hizliresim.com/" target="_blank">Hızlı Resim</a> <b class="text-success-emphasis">[Fotoğraf
                        için]</b></li>
            </ul>
        </div>
        <p>Platformlarını kullanabilirsiniz.</p>

    </div>
</div>
<br>
<div>
    <h3 class="standartcolor" id="bantemyiz"><b>Sunucudan uzaklaştırıldım, nasıl itiraz edebilirim?</b></h3>
    <p>MoonGaming™ Discord sunucusuna gelip ticket açmanız gerekmektedir.</p>
</div>
<br>
<div>
    <h2 class="standartcolor" id="basvuru">Başvurular</h2>
    <p>Oyun içerisinde başvurabilceğin alanlar bu kısımda yer almaktadır.</p>
    <div>
        <h3 class="standartcolor" id="admin"><b>Yetkili nasıl olabilirim?</b></h3>
        <p>Yetkili olabilmek için <a href="<?= $AdminBasvuru ?>" target="_blank">başvuru</a>
            yapmanız gerekmektedir. Başvurunuz olumlu sonuçlanırsa geri dönüş yapılacaktır.</p>

        <h4 class="standartcolor"><b>Red edildiğimi nereden öğrenebilirim?</b></h4>
        <p>Başvuru sayısı fazla olduğundan dolayı maalesef red edilenlere dönüş yapılmamaktadır. 1 hafta
            içinde
            dönüş yapılmazsa başvurunuz red edilmiştir.</p>
    </div>
    <?php if ($darkRPContent) {
        ?>
        <br>
        <div>
            <h3 class="standartcolor" id="bilimadami"><b>Bilim Adamı Nasıl Olunur?</b></h3>
            <p>Saat Kulesi'ndeki NPC'den belge almalı ve gerekli meslekte deneyim kazanmalısınız.</p>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="basvuru-egm"><b>Emniyet Genel Müdürü nasıl olurum?</b></h3>
            <p>Bu pozisyona alım yapılmamaktadır; Üst Yönetim Kurulu tarafından belirlenir.</p>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="basvuru-mit-mustesari"><b>Millî İstihbarat Teşkilatı Müsteşarı nasıl
                    olurum?</b></h3>
            <p>Üst Yönetim Kurulu tarafından, görevlerinde üstün başarı gösteren ve Millî İstihbarat
                Teşkilatının
                gerektirdiği yetkinlikleri etkili bir şekilde sergileyen sunucumuzdaki yetkililere verilir.</p>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="basvuru-poh"><b>Polis Özel Harekât Polisi, Polis Özel Harekât Keskin Nişancısı
                    ve Polis Özel Harekât
                    Doktoru nasıl olurum?</b></h3>
            <p>Polis Özel Harekât Polisi olmak için Polis Asayiş Memuru mesleğinde 5. seviyeye ulaşmanız ulaştığınızda,
                Discord sunucumuzda başvuru odasına gelip
                başvurabilirsiniz.</p>
            <p>Polis Özel Harekât Keskin Nişancısı olmak için Polis Asayiş Memuru mesleğinde 5. seviyeye ulaşmanız ve
                keskin nişancı tecrübesine sahip olmanız gerekmektedir. Ayrıca, takım çalışmasına yatkınlık şarttır.
                Eğer bunları karşılıyor iseniz , Discord sunucumuzda başvuru odasına gelip
                başvurabilirsiniz.</p>
            <p>Polis Özel Harekât Doktoru olmak için Doktor mesleğinde 5. seviyeye ulaştığınızda, Discord sunucumuzda
                başvuru odasına gelip
                başvurabilirsiniz.</p>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="basvuru-joh"><b>Jandarma Özel Harekat Komandosu ve Jandarma Özel Harekat
                    Doktoru nasıl
                    olurum?</b></h3>
            <div class="alert alert-info" role="alert">
                Jandarma Özel Harekat Komandosu/Doktoru şu anlık kapalıdır.
            </div>
            <p>Jandarma Özel Harekat Komandosu olabilmek için Polis Özel Harekat Polisi mesleğinde 5. seviye ve
                ya
                Jandarma Komutanı 3. Seviye ulaştığınızda, Discord sunucumuzda başvuru odasına gelip
                başvurabilirsiniz.</p>
            <p>Jandarma Özel Harekat Doktoru olabilmek için Polis Özel Harekat Doktoru mesleğinde 5. seviyeye
                ulaştığınızda, Discord sunucumuzda başvuru odasına gelip başvurabilirsiniz.</p>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="basvuru-baron"><b>Baron nasıl olurum?</b></h3>
            <p>Bu pozisyona alım yapılmamaktadır; Üst Yönetim Kurulu tarafından belirlenir.</p>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="basvuru-sefir"><b>Sefir nasıl olurum?</b></h3>
            <p>Bu pozisyona alım yapılmamaktadır; Üst Yönetim Kurulu tarafından belirlenir.</p>
        </div>
        <br>
        <div>
            <h3 class="standartcolor" id="family"><b>Aile kurmak istiyorum, ne yapmam gerekiyor?</b></h3>
            <ul>
                <li>DarkRP'de aktif oynayan toplamda 5 <strong>Aktif</strong> aile üyeniz olmalı. (<a
                            href="https://discord.com/channels/308530419748306944/1133035250562367570/1243927571175833611"
                            target="_blank"><i class="fa-brands fa-discord"></i></a>)
                </li>
                <li>Discord sunucumuzda tüm aile üyeleriniz bulunmalıdır.</li>
                <li>Aşağıdaki formata göre doldurmalısınız.</li>
                <li>Aile üyelerinizi ve kendinizi Discord etiketi ile belirtmelisiniz.</li>
            </ul>

            <pre>
Family Adı:
Family Lideri:
Familya Üyeleri:
</pre>
            <p>Her şey tamam ise Discord sunucumuzda <b>destek odasına</b> gidip mesajınızın altına <b>DarkRP
                    Üstadı</b> etiketlemeniz gerekiyor.</p>
        </div>
    <?php } ?>
</div>
