$(document).ready(function () {
    $("#SignUp").submit(function (e) {
        var nama = $("#nama").val();
        var email = $("#email").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var password_confirm = $("#password_confirm").val();
        e.preventDefault();
        if (password != password_confirm) {
            Swal.fire({
                title: 'Oops...',
                text: 'Password anda tidak sama!'
            });
        } else if (nik.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'nik harus diisi!'
            });
        } else if (nama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
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
            $.ajax({
                url: base_url + 'register',
                type: "POST",
                data: {
                    "nik": nik,
                    "nama": nama,
                    "username": username,
                    "password": password,
                    "email": email,

                },
                dataType: "JSON",
                success: function (respond) {
                    if (respond.status == true) {
                        Swal.fire({
                            icon: respond.icon,
                            title: respond.title,
                            text: respond.text,
                            timer: 3000,
                            showCancelButton: false,
                            showConfirmButton: false
                        })
                            .then(function () {
                                window.location.href = base_url + 'login';
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
                    alert('Error registering!');
                }
            });
        }
    });
});