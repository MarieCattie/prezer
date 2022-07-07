<footer class="footer">
    <div class="footer__content container">
        <div>
            <a href="index.php" class="logo"><img src="assets/img/logos/<?= $logo["logo_img"] ?>" alt=""></a>
            <?php if($logo["slogan"] !== '') { ?>
            <p class="logo__slogan"><?= $logo["slogan"] ?></p>
            <? } ?>
        </div>
        <div class="container-flex">
            <a href="landing.php" class="btn second-btn mr-15">Перейти на главную</a>
            <a href="assets/php/logout.php" class="btn action-btn" id="exit">Выйти</a>
        </div>
    </div>
</footer>
