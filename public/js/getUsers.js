$(document).ready(function () {
    $.ajax({
        url: base_url + "dashboard/users/data",
        type: "GET",
        dataType: "json",
        success: function (respond) {
            let tableBody = $('#table tbody');
            let number = 1;
            for (let i = 0; i < respond.length; i++) {
                let row = $('<tr></tr>');
                let no = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(number++);

                let nama = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].nama);
                let nik = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].nik);
                let username = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].username);
                let email = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].email);
                let role = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].role);
                let buttonEdit = $('<button type="button" class="btn bg-gradient-info mb-0"></button>').text('Edit').attr('id', respond[i].id);
                buttonEdit.click(function () {
                    $('#form')[0].reset();
                    var userId = $(this).attr('id');
                    $.ajax({
                        url: base_url + 'dashboard/users/update/' + userId,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function (respond) {
                            console.log(respond.data);

                            $('[name="id"]').val(respond.data.id);

                            $('[name="nama"]').val(respond.data.nama);
                            $('[name="nik"]').val(respond.data.nik);
                            $('[name="username"]').val(respond.data.username);
                            $('[name="email"]').val(respond.data.email);
                            $('[name="role"]').val(respond.data.role);

                            $('#exampleModal').modal('show');
                            $('.modal-title').text('Edit');
                            $('#pass').hide();
                            $('#pass2').hide();
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);
                            swal.fire({
                                icon: 'error',
                                title: errorThrown,
                                text: 'Error get data from ajax.'
                            })
                        }
                    });
                });
                let buttonDelete = $('<button type="button" class="btn bg-gradient-danger mb-0"></button>').text('Delete').attr('id', respond[i].id);
                buttonDelete.click(function () {
                    var userId = $(this).attr('id');
                    Swal.fire({
                        title: 'Anda yakin?',
                        text: 'Aksi ini tidak dapat dipulihkan!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus!'
                    }).then(function (respond) {
                        if (respond.value) {
                            var base_url = 'http://localhost:8080/';
                            $.ajax({
                                url: base_url + 'dashboard/users/delete/' + userId,
                                type: 'GET',
                                dataType: 'JSON',
                                success: function (respond) {
                                    swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'User berhasil dihapus!',
                                        showConfirmButton: false,
                                        timer: 2000
                                    })
                                        .then(function () {
                                            location.reload();
                                        });
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    swal.fire(thrownError, "Ada yang salah! coba lagi beberapa saat.", "error");
                                }
                            });
                        };
                    });
                    var modal = document.getElementById('exampleModal');
                    modal.addEventListener('hidden.bs.modal', function (event) {
                        location.reload();
                    })
                });
                row.append(no, nama, nik, username, email, role, buttonEdit, buttonDelete);
                tableBody.append(row);
            }
        }
    });
});