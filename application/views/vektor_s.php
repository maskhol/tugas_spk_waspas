<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <?php $this->load->view("_partials/navbar.php") ?>
        <?php $this->load->view("_partials/sidebar.php") ?>

        <div class="dashboard-wrapper" style="background-color: silver;">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header" style="font-family: 'Electrolize', sans-serif; font-weight:bold;">Normaliasi Untuk C1 (Cost) :</h5>
                            <br>
                            <?php
                            $i = 0;
                            foreach ($alternatif as $data_alter) { ?>

                                <h5 style="text-indent: 20px;">A <sub>(<?= $data_alter->nama ?>)</sub> = <?= $min ?> / <?= $data_alter->c1 ?></h5>
                                <h5 style="text-indent: 20px;">= <?= $normalisasi[$i][0] ?></h5>
                                <br>

                            <?php $i++;
                            } ?>
                        </div>
                        <div class="card">
                            <h5 class="card-header" style="font-family: 'Electrolize', sans-serif; font-weight:bold;">Normaliasi Untuk C2 (Benefit) :</h5>
                            <br>
                            <?php
                            $i = 0;
                            foreach ($alternatif as $data_alter) { ?>

                                <h5 style="text-indent: 20px;">A <sub>(<?= $data_alter->nama ?>)</sub> = <?= $data_alter->c2 ?> / <?= $max ?></h5>
                                <h5 style="text-indent: 20px;">= <?= $normalisasi[$i][1] ?></h5>

                                <br>
                            <?php $i++;
                            } ?>

                        </div>
                        <div class="card">
                            <h5 class="card-header" style="font-family: 'Electrolize', sans-serif; font-weight:bold;">Normaliasi Untuk C3 (Benefit) :</h5>
                            <br>
                            <?php
                            $i = 0;
                            foreach ($alternatif as $data_alter) { ?>

                                <h5 style="text-indent: 20px;">A <sub>(<?= $data_alter->nama ?>)</sub> = <?= $max ?> / <?= $data_alter->c3 ?></h5>
                                <h5 style="text-indent: 20px;">= <?= $normalisasi[$i][2] ?></h5>

                                <br>
                            <?php $i++;
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("_partials/js.php") ?>
</body>

</html>