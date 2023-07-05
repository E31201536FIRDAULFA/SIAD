<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div class="card-header pb-0 justify-content-between align-items-center mb-3">
              <h6>List Pengajuan</h6>
              <button type="button" class="btn btn-lg btn-info btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Buat Anggaran
              </button>
              <button type="button" class="btn btn-lg btn-warning btn-lg mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#eksporpdf">
                Ekspor PDF
              </button>
            </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Rencana Anggaran Belanja Tahunan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                      <!--POP UP TAMBAH PENGAJUAN-->
                        <div class="modal-body">
                            <form action="#" id="form">
                              <input type="text" name="id" id="id" hidden>
                             
                            <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" name="tgl">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Bidang</label>
                                  <select class="form-control" id="bidang" name="bidang">
                                  <option >---Pilih Bidang---</option>
                                    <option value="Pelayanan Masyarakat">Pelayanan Masyarakat</option>
                                    <option value="Pembangunan Daerah">Pembangunan Daerah</option>
                                    <option value="Pemberdayaan Lingkungan">Pemberdayaan Lingkungan</option>
                                    <option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
                                    <option value="Pendidikan Daerah">Pendidikan Daerah</option>
                                    <option value="Administrasi Pemerintahan">Administrasi Pemerintahan</option>
                                    <option value="Teknologi">Teknologi</option>
                                    <option value="Infrastruktur Daerah">Infrastruktur Daerah</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Pelaksana</label>
                                  <input id="pelaksana" type="text" class="form-control" name="pelaksana">
                                </div>


                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Anggaran Pagu</label>
                                  <input id="anggaran" type="number" class="form-control" name="anggaran">
                                </div>

                              

                                <div class="mt-3">
                                  <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" onclick="saverab()">Simpan</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
                </div>

              


                <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-4">
                <table class="table align-items-center mb-0" id="myTable">
                  <thead>
                    <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bidang</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pelaksana</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Anggaran Pagu</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opsi</th>

                        </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($content as $data): ?>
                  <tr>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['tgl'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['bidang'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['pelaksana'] ?></span></td>
                    <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?= $data['anggaran'] ?></span></td>
    
                  
                    <td class="align-middle text-center">

                      <button onclick="buttonEdit(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-info mb-0">
                        Edit
                      </button>
                      <button onclick="buttonDelete(<?= $data['id'] ?>)" type="button" class="btn bg-gradient-danger mb-0">
                        Delete
                      </button>
                    </td>
                  </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      

<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/SignOut.js') ?>"></script>
<script src="<?= base_url('js/Modules.js') ?>"></script>
<script src="<?= base_url('js/KEUANGAN/getapbd.js') ?>"></script>
<script src="<?= base_url('js/KEUANGAN/saverab.js') ?>"></script>
<script>
 

function buttonDelete(id) {
  Swal.fire({
    title: "Anda yakin?",
    text: "Aksi ini tidak dapat dipulihkan!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, Hapus!",
  }).then(function (respond) {
    if (respond.value) {
      var base_url = "http://localhost:8080/";
      $.ajax({
        url: base_url + "dashboard/rab/delete/" + id,
        type: "GET",
        dataType: "JSON",
        success: function (respond) {
          swal
            .fire({
              position: "top-end",
              icon: "success",
              title: "Surat berhasil dihapus!",
              showConfirmButton: false,
              timer: 2000,
            })
            .then(function () {
              location.reload();
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
          swal.fire(
            thrownError,
            "Ada yang salah! coba lagi beberapa saat.",
            "error"
          );
        },
      });
    }
  });
  var modal = document.getElementById("exampleModal");
  modal.addEventListener("hidden.bs.modal", function (event) {
    location.reload();
  });
}

function buttonEdit(id) {
  $("#form")[0].reset();
  $.ajax({
    url: base_url + "dashboard/rab/update/" + id,
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond.data);

      $('[name="id"]').val(respond.data.id);
      $('[name="tgl"]').val(respond.data.tgl);
      $('[name="bidang"]').val(respond.data.bidang);
      $('[name="pelaksana"]').val(respond.data.pelaksana);
      $('[name="anggaran"]').val(respond.data.anggaran);
      

      $("#exampleModal").modal("show");
      $(".modal-title").text("Edit");
    
     
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(jqXHR);
      swal.fire({
        icon: "error",
        title: errorThrown,
        text: "Error get data from ajax.",
      });
    },
  });
  $("#exampleModal").on("hidden.bs.modal", function () {
    location.reload();
  });
}


</script>
<?= $this->endSection() ?>