<?php include_once('layout/top.php'); ?>
<title>Contact Enquiries</title>

<?php include_once('layout/header.php'); ?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Basic Tables start -->
            <!-- Bordered striped start -->

            <div class="row" style="margin-right: -31px; margin-left: -39px;">
                <div class="col-xs-12">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Enquiries</h4>
                            <a class="heading-elements-toggle">
                                <i class="icon-ellipsis font-medium-3"></i>
                            </a>
                        </div>

                        <div class="card-body collapse in">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Srno</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <!-- <th>Program</th> -->
                                            <th>Message</th>
                                            <th>Submitted at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $fetch = mysqli_query($conn, "SELECT * FROM enquiries ORDER BY created_at DESC");
                                        $i = 0;
                                        ?>

                                        <?php while ($row = mysqli_fetch_assoc($fetch)) { $i++; ?>

                                            <tr>
                                                <th scope="row"><?= $i; ?></th>

                                                <td>
                                                    <?php if (isset($row['name'])): ?>
                                                        <?= $row['name']; ?>
                                                    <?php endif; ?>
                                                </td>

                                                <td>
                                                    <?php if (isset($row['email'])): ?>
                                                        <?= $row['email']; ?>
                                                    <?php endif; ?>
                                                </td>

                                                <td>
                                                    <?php if (isset($row['phone'])): ?>
                                                        <?= $row['phone']; ?>
                                                    <?php endif; ?>
                                                </td>

                                            

                                                <td>
                                                    <?php
                                                    if ($row['message'] != '' && $row['message'] != NULL) {
                                                        echo $row['message'];
                                                    } else {
                                                        echo '-';
                                                    }
                                                    ?>
                                                </td>

                                                <td>
                                                    <?php if (isset($row['created_at'])): ?>
                                                        <?= date('d-m-Y h:i:s', strtotime($row['created_at'])); ?>
                                                    <?php endif; ?>
                                                </td>

                                                <td>
                                                    <a href="<?= $adminurl; ?>/delete_enquiry.php/?id=<?= $row['id']; ?>"
                                                       onclick="return confirm('Are you sure?')">
                                                        <i class="icon-trash3"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                        <?php } ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Bordered striped end -->
        </div>

    </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php include_once('layout/footer.php'); ?>