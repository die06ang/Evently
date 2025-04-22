<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Crea Evento</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Share Title
                    <input type="text" name="title" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label>Body
                    <textarea name="body" class="form-control"></textarea>
                </label>
            </div>
            <div class="form-group">
                <label>Link
                    <input type="text" name="link" class="form-control">
                </label>
            </div>
            <input class="btn btn-primary" name="submit" type="submit" value="Submit">
            <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>events">Cancel</a>
        </form>
    </div>
</div>