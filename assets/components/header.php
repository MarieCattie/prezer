<header class="header">
        <div class="header__content container">
            <a class="logo" href="index.php">

                <img src="assets/img/logos/<?= $logo["logo_img"] ?>" alt="">  <?php if($logo["slogan"] !== '') { ?>
                    <p class="logo__slogan"><?= $logo["slogan"] ?></p>
                <? } ?>
            </a>

            <div class="container-flex">
                <p class="header__username"><?= $user["surname"] ?> <?=  $user["name"] ?></p>
                <div class="avatar">
                    <?php
                    if($user["avatar"] !== null)
                    {?>
                        <img src="assets/img/avatars/<?= $user["avatar"] ?>" alt="">
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </header>