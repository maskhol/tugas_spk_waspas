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
                            <h5 class="card-header" style="font-family: 'Electrolize', sans-serif; font-weight:bold;">Menghitung nilai Qi :</h5>
                            <br>
                            <?php
                            $i = 0;
                            foreach ($alternatif as $data_alter) { ?>

                                <h5 style="text-indent: 20px;">Qi <sub>(<?= $data_alter->nama ?>)</sub> = 0.5 X ( (<?= $normalisasi[$i][0] ?> X <?= $bobot->w1 ?>) + (<?= $normalisasi[$i][1] ?> X <?= $bobot->w2 ?>) + (<?= $normalisasi[$i][2] ?> X <?= $bobot->w3 ?>) )
                                    + 0,5 X ( (<?= $normalisasi[$i][0] ?> <sup><?= $bobot->w1 ?></sup>)+(<?= $normalisasi[$i][1] ?><sup><?= $bobot->w2 ?></sup>)+(<?= $normalisasi[$i][2] ?><sup><?= $bobot->w3 ?></sup>) )</h5>
                                <h5 style="text-indent: 20px;">=<?= $qi[$i] ?></h5>
                                <br>
                            <?php $i++;
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php $this->load->view("_partials/js.php") ?>
</body>

</html>