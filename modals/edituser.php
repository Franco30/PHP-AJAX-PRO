<div class="modal fade edituser" id="edit" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>Edit User</strong></h4>
            </div>
            <form action="" method="post" id="edit-form-data">

                <div class="modal-body">

                    <div class="panel-body">

                        <input type="hidden" name="id" id="id">

                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" required />

                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" id="username" required />
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" id="password" required />
                        </div>

                        <div class="form-group">
                            <label>User Type</label>
                            <input type="text" class="form-control" name="userrole" id="userrole" required />
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="update" id="update"> Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </form>
        </div>
    </div>
</div>
