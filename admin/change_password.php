<?php include_once('layout/top.php'); ?>

<title>Change Password</title>

<?php include_once('layout/header.php'); ?>

<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="content-header row">
        </div>

        <div class="content-body">
            <div class="row">

                <div class="col-xs-12">
                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Change Password</h4>
                            <a class="heading-elements-toggle">
                                <i class="icon-ellipsis font-medium-3"></i>
                            </a>
                        </div>

                        <div class="card-body collapse in">
                            <div class="card-block">

                                <form action="update_password.php" method="post">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="current_password">
                                                        Current Password <span style="color:red">*</span>
                                                    </label>
                                                    <input
                                                        type="password"
                                                        id="current_password"
                                                        class="form-control"
                                                        placeholder="Current Password"
                                                        name="current_password"
                                                        required=""
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="new_password">
                                                        New password <span style="color:red">*</span>
                                                    </label>
                                                    <input
                                                        type="password"
                                                        id="new_password"
                                                        class="form-control"
                                                        placeholder="New Password"
                                                        name="new_password"
                                                        required=""
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="confirm_password">
                                                        Confirm password <span style="color:red">*</span>
                                                    </label>
                                                    <input
                                                        type="password"
                                                        id="confirm_password"
                                                        class="form-control"
                                                        placeholder="Confirm Password"
                                                        name="confirm_password"
                                                        required=""
                                                    >
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </form>

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