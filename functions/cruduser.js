$(document).ready(function () {
    showUser();

    // insert ajax request
    $("#insert").click(function (e) {
        if ($("#form-data")[0].checkValidity()) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to add this user?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "crud/adduser.php",
                        type: "POST",
                        data: $("#form-data").serialize() + "&action=insert",
                        success: function (response) {
                            Swal.fire({
                                title: 'User added successfully!',
                                icon: 'success',
                                confirmButtonColor: '#95b75d',
                            })
                            console.log(response);
                            $('.adduser').modal('hide');
                            $("#form-data")[0].reset();
                            showUser();
                        }
                    });
                }
            });
        }
    });

    // Delete ajax request
    $("body").on("click", ".delBtn", function (e) {
        e.preventDefault();
        var tr = $(this).closest('tr');
        del_id = $(this).attr('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#95b75d',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "controller/controller.students.php",
                    type: "POST",
                    data: {
                        del_id: del_id,
                    },
                    success: function (response) {
                        showUser();
                        tr.css('background-color', '#ff6666');
                        Swal.fire({
                            title: 'Deleted!',
                            text: 'User deleted Successfully!',
                            icon: 'success',
                            confirmButtonColor: '#95b75d',
                        })
                        showUser();
                    }
                });
            }
        });
    });

    // get user request
    $("body").on("click", ".editBtn", function (e) {
        e.preventDefault();
        edit_id = $(this).attr('id');
        $.ajax({
            url: "crud/edituser.php",
            type: "POST",
            data: {
                edit_id: edit_id
            },
            success: function (response) {
                data = JSON.parse(response);
                $("#id").val(data.userid);
                $("#fullname").val(data.fullname);
                $("#username").val(data.username);
                $("#password").val(data.password);
                $("#userrole").val(data.userrole);
                console.log(data);
            }
        });
    });

    //update ajax request
    $("#update").click(function (e) {
        if ($("#edit-form-data")[0].checkValidity()) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure you want to update this user?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "crud/edituser.php",
                        type: "POST",
                        data: $("#edit-form-data").serialize() + "&action=update",
                        success: function (response) {
                            Swal.fire({
                                title: 'User updated successfully!',
                                icon: 'success',
                                confirmButtonColor: '#95b75d',
                            })
                            $('.edituser').modal('hide');
                            $("#edit-form-data")[0].reset();
                            showUser();
                        }
                    });
                }
            });
        }
    });

    //delete ajax request
    $('#btn_delete').click(function () {
        
        var tr = $(this).closest('tr');
        var id = [];

        $('.deleteuser:checkbox:checked').each(function (i) {
            id[i] = $(this).val();
        });

        if (id.length == 0) {
            Swal.fire({
                title: 'Please Select atleast one checkbox',
                icon: 'info'
            })
        } else {
            Swal.fire({
                title: 'Are you sure you want to delete this user?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#95b75d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: 'crud/deleteuser.php',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function (response) {
                            showUser();
                            tr.css('background-color', '#ff6666');
                            Swal.fire({
                                title: 'User deleted successfully!',
                                icon: 'success',
                                confirmButtonColor: '#95b75d',
                            })
                            showUser();
                        }

                    });

                }
            });
        }
        return false;
    });

});

//show users
function showUser() {
    $.ajax({
        url: 'tables/userlist.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#userTable').html(response);
            var table = $('#usertable').DataTable({
                order: [
                [1, 'desc']
            ]
            });
        }
    });
}
