<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php
                $bankAccount=ejecutarSQL::consultar("SELECT * FROM cuentabanco");
                if(mysqli_num_rows($bankAccount)>=1){
                  $bankD=mysqli_fetch_array($bankAccount, MYSQLI_ASSOC);
            ?>
                  <div class="container-form-admin">
                  <form action="./process/updateBank.php" method="POST" role="form" class="form-content FormCatElec" data-form="update">
                    <h3 class="text-info text-center">Update bank account</h3>
                    <input type="hidden" name="id" value="<?php echo $bankD['id']; ?>">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Acconut number</label>
                                    <input class="form-control" type="text" name="bancoCuenta" value="<?php echo $bankD['NumeroCuenta']; ?>" maxlength="50" required="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Bank name</label>
                                    <input class="form-control" type="text" name="bancoNombre" value="<?php echo $bankD['NombreBanco']; ?>" maxlength="50" required="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Owner name</label>
                                    <input class="form-control" type="text" name="bancoBeneficiario" value="<?php echo $bankD['NombreBeneficiario']; ?>" maxlength="50" required="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Account type</label>
                                    <input class="form-control" type="text" name="bancoTipo" value="<?php echo $bankD['TipoCuenta']; ?>" maxlength="50" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center"><button type="submit" class="btn btn-success btn-raised">Update  bank account</button></p>
                  </form>
                  </div>
            <?php
                }else{
            ?>
              <div class="container-form-admin">
              <form action="./process/regBank.php" method="POST" role="form" class="FormCatElec" data-form="save">
                <h3 class="text-info text-center">Add bank account</h3>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Account name</label>
                                <input class="form-control" type="text" name="bancoCuenta" maxlength="50" required="">
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">bank name</label>
                                <input class="form-control" type="text" name="bancoNombre" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Owner name</label>
                                <input class="form-control" type="text" name="bancoBeneficiario" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Account type</label>
                                <input class="form-control" type="text" name="bancoTipo" maxlength="50" required="">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center"><button type="submit" class="btn btn-primary btn-raised">Add bank account</button></p>
              </form>
              </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>