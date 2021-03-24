<!-- Add User -->
<div class="modal fade adduser" id="adduser" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead"><strong>New User</strong></h4>
            </div>
            <form action="" method="post" id="form-data">
                <div class="modal-body">
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="text" name="fullname" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label>User Type</label>
                            <input type="text" name="userrole" class="form-control" required />
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="insert" id="insert" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- End Add User -->
