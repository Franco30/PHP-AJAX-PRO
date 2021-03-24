        <!-- Add User -->
        <div class="modal fade adduser" id="adduser" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Add New User</h4>
                    </div>
                    <form class="form-horizontal" id="userform">
                        <div class="modal-body">
                            <div class="panel-body">
                                <h5 class="push-up-1">Username</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" id="username" name="username" class="form-control" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Password</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" id="password" name="password" class="form-control" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">User Type</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" id="userrole" name="userrole" class="form-control" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type = "button" id="addnew" class = "btn btn-primary">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- End Add User -->