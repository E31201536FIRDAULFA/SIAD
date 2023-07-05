function saveUsers() {
    var id = $("#id").val();
    var password = $("#password").val();
    var password_confirm = $("#password_confirm").val();
    if (id) {
        url = base_url + 'dashboard/users/update/' + id;

        if (nama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (nik.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'nik harus diisi!'
            });
        } else if (username.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Username harus diisi!'
            });
        } else if (email.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Email harus diisi!'
            });
        } else {
            var form = $('#form')[0]; // Assuming 'form' is the ID of your form element
            var formData = new FormData(form);

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                dataType: "JSON",
                processData: false, // Important: prevent jQuery from automatically transforming the data into a query string
                contentType: false, // Important: tell jQuery not to set the Content-Type header
                success: function (respond) {
                    if (respond.status == true) {
                        Swal.fire({
                            icon: respond.icon,
                            title: respond.title,
                            text: respond.text,
                            timer: 3000,
                            showCancelButton: false,
                            showConfirmButton: false
                        }).then(function () {
                            location.reload();
                        });
                    } else if (respond.status == false) {
                        Swal.fire({
                            icon: respond.icon,
                            title: respond.title,
                            text: respond.text,
                        });
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi error!',
                        text: 'Silahkan coba lagi.'
                    });
                }
            });
        }

    } else {
        url = base_url + 'dashboard/users';
        if (password != password_confirm) {
            Swal.fire({
                title: 'Oops...',
                text: 'Password anda tidak sama!'
            });

        } else if (nama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (nik.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'nik harus diisi!'
            });
        } else if (username.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Username harus diisi!'
            });
        } else if (password.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Password harus diisi!'
            });
        } else if (email.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Email harus diisi!'
            });
        } else {
            var form = $('#form')[0]; // Assuming 'form' is the ID of your form element
            var formData = new FormData(form);

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                dataType: "JSON",
                processData: false, // Important: prevent jQuery from automatically transforming the data into a query string
                contentType: false, // Important: tell jQuery not to set the Content-Type header
                success: function (respond) {
                    if (respond.status == true) {
                        Swal.fire({
                            icon: respond.icon,
                            title: respond.title,
                            text: respond.text,
                            timer: 3000,
                            showCancelButton: false,
                            showConfirmButton: false
                        }).then(function () {
                            location.reload();
                        });
                    } else if (respond.status == false) {
                        Swal.fire({
                            icon: respond.icon,
                            title: respond.title,
                            text: respond.text,
                        });
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi error!',
                        text: 'Silahkan coba lagi.'
                    });
                }
            });
        }
    }
}