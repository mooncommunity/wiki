<?php
$darkRPContent = false;
$tttContent = true;
?>
<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="mb-4">Sıkça Sorulan Sorular</h1>
        <hr>
        <?php
        include("darkrp-ttt.sss.php");
        ?>
        <hr>
        <div>
            <h4 id="csscontent"><b>Pembe-Siyah Hatasını nasıl çözebilirim?</b></h4>
            <p>Workshoplarınız tamam ve düzgün ise büyük olasılıkla CS:S content'ten kaynaklı bir sorun çözmek için CS:S
                indiriniz.</p>
            <div class="content-ref-box">
                <p>
                    <a id="cssBox" href="#">
                        <i class="fa-solid fa-cubes"></i> CS:S Content Nasıl İndiririm?
                    </a>
                </p>
            </div>
        </div>
        <hr>
        <div>
            <h4 id="vapetoken"><b>Vape Token Sahibiyim, Ne Yapmalıyım?</b></h4>
            <p>Şu anda bu token devre dışıdır. Envanterinizde olduğunu gösteren bir ekran görüntüsü alarak Discord
                sunucumuzda bir destek talebi oluşturmanız gerekmektedir. Genellikle eşya sizden alınıp IC kredi olarak
                ödeme yapılmaktadır.</p>
        </div>
        <br>
</main>
<script>
    document.getElementById("baslarkenBox").href = baseUrl + "/ttt-baslarken#gerekli-eklentiler-ve-ayarlar";
    document.getElementById("baslarkenBox").innerHTML = '<i class="fa-solid fa-graduation-cap"></i> TTT Başlarken - Gerekli Eklentiler ve Ayarlar';
    document.getElementById("cssBox").href = baseUrl + "/content";
    document.getElementById("adminbasvuru").href = "https://forms.gle/Z5mZFT4sBVbQ49Yi6";
</script>