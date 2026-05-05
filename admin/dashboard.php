<?php include_once('layout/top.php'); ?>

<title>Dashboard</title>

<?php include_once('layout/header.php'); ?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="content-header row">
        </div>

        <div class="content-body">
            <!-- stats -->

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-xs-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">

                                <div class="media">
                                    <div class="media-body text-xs-left">

                                        <h3 class="deep-orange">
                                            <?php if (isset($no_of_enquiries)): ?>
                                                <?= $no_of_enquiries; ?>
                                            <?php endif; ?>
                                        </h3>

                                        <a href="<?= $adminurl ?>/enquiries.php">
                                            <span>Enquiries</span>
                                        </a>

                                    </div>

                                    <div class="media-right media-middle">
                                        <i class="icon-diagram deep-orange font-large-2 float-xs-right"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php include_once('layout/footer.php'); ?>