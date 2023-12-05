
<ul class="breadcrumb" style="margin-bottom: 5px;">
    <li>
        <a href="configAdmin.php?view=admin">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp; New Administrator
        </a>
    </li>
    <li>
        <a href="configAdmin.php?view=adminlist"><i class="fa fa-list-ol" aria-hidden="true"></i> &nbsp; Administrators</a>
    </li>
    <li>
        <a href="configAdmin.php?view=account"><i class="fa fa-address-card" aria-hidden="true"></i> &nbsp; My account</a>
    </li>
</ul>
<div class="container">
	<div class="row">
        <div class="col-xs-12">
            <div class="container-form-admin">
                <h3 class="text-info text-center">Add new administrator</h3>
                <form action="process/regAdmin.php" method="POST" role="form" class="FormCatElec" data-form="save">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">User name</label>
                                    <input class="form-control" type="text" name="admin-name" maxlength="9" pattern="[a-zA-Z0-9]{4,9}" required="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">New password</label>
                                    <input class="form-control" type="password" name="admin-pass1" required="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Repeat password</label>
                                    <input class="form-control" type="password" name="admin-pass2" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center"><button type="submit" class="btn btn-primary btn-raised">Add administrator</button></p>
                </form>
            </div>
        </div>
    </div>
</div>