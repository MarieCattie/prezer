<header class="header">
    <div class="header__content container">
        <?php if (isset($_SESSION["user"])) : ?>
            <a class="logo" href="index.php">
                <img src="assets/img/logos/<?= $logo["logo_img"] ?>" alt=""> <?php if ($logo["slogan"] !== '') { ?>
                    <p class="logo__slogan"><?= $logo["slogan"] ?></p>
                <? } ?>
            </a>
            <div class="container-flex">
                <p class="header__username"><?= $user["surname"] ?> <?= $user["name"] ?></p>
                <div class="avatar">
                    <?php
                    if ($user["avatar"] !== null) { ?>
                        <img src="assets/img/avatars/<?= $user["avatar"] ?>" alt="">
                    <?php }
                    ?>
                </div>
            </div>
        <?php else : ?>
            <a class="logo" href="landing.php">
                <img src="assets/img/logos/logo.svg" alt=""> <?php if ($logo["slogan"] !== '') { ?>
                    <p class="logo__slogan"><?= $logo["slogan"] ?></p>
                <? } ?>
            </a>
            <div class="container-flex">
                <a href="about.php" class="btn second-btn mr-15">О сервисе</a>
                <a href="index.php" class="btn action-btn btn-medium">Личный кабинет</a>
            </div>
        <?php endif; ?>
    </div>

</header>