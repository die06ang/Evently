<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Registrar Usuario</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Usuario
                    <input type="text" name="email" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label>Contraseña
                    <input type="password" name="password" class="form-control">
                </label>
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="Submit">
            <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>events">Cancel</a>
        </form>
    </div>
</div>