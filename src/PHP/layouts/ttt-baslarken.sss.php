<?php
$darkRPContent = false;
$tttContent = true;
?>
<main class="col-md-6 ms-sm-auto col-lg-8 px-md-4">
    <div class="content pt-3">
        <h1 class="mb-4 standartcolor">Sıkça Sorulan Sorular</h1>
        <?php
        include("darkrp-ttt.sss.php");
        ?>
        <br>
        <div>
            <div>
                <h3 class="standartcolor" id="csscontent"><b>Pembe-Siyah Hatasını nasıl çözebilirim?</b></h3>
                <p>Workshoplarınız tamam ve düzgün ise büyük olasılıkla CS:S content'ten kaynaklı bir sorun çözmek için CS:S
                    indiriniz.</p>
                <div class="content-ref-box">
                    <p>
                        <a id="cssBox" href="<?= $baseUrl; ?>/content">
                            <i class="fa-solid fa-cubes"></i> CS:S Content Nasıl İndiririm?
                        </a>
                    </p>
                </div>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="vapetoken"><b>Vape Token Sahibiyim, Ne Yapmalıyım?</b></h3>
                <p>Şu anda bu token devre dışıdır. Envanterinizde olduğunu gösteren bir ekran görüntüsü alarak Discord
                    sunucumuzda bir destek talebi oluşturmanız gerekmektedir. Genellikle eşya sizden alınıp IC kredi olarak
                    ödeme yapılmaktadır.</p>
            </div>
            <br>
            <div>
                <h3 class="standartcolor" id="bunny"><b>Otomatik Bunny Nasıl Yaparım?</b></h3>
                <p>I Tuşu ile envanterinizi açınız daha sonrasında ayarlardan otomatik bunny aktif ediniz.</p>
            </div>
        </div>
        <br>
        <?php
        include("darkrp-ttt.sss1.php");
        ?>
        <hr>
        <br>
</main>