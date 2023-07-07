<?= $this->section('content') ?>
<div class="row">

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Surat Saya</p>
                <h4 class="mb-0">Surat Kehilangan</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" onclick="ajukanKehilangan()">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Surat Kehilangan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                     <!--POP UP TAMBAH PENGAJUAN-->
                          <div class="modal-body">
                            <form id="form">
                            <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tgl" type="date" class="form-control" >
                                  <input id="id" hidden>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">NIK</label>
                                  <input id="nik" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama</label>
                                  <input id="nama" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nomor KK</label>
                                  <input id="no_kk" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Kelamin</label>
                                  <select class="form-control" id="jk" readonly>
                                    <option value="perempuan">Perempuan</option>
                                    <option value="laki-laki">Laki-laki</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Pekerjaan</label>
                                  <input id="pekerjaan" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Alamat</label>
                                  <input id="alamat" type="text" class="form-control" readonly>
                                </div>

                                
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Keperluan</label>
                                  <input id="keperluan" type="text" class="form-control">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Keterangan</label>
                                  <input id="ket" type="text" class="form-control">
                                </div>

                                <div class="mt-3">
                                <button type="button" onclick="saveKehilangan()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan</button>
                                </div>

                                <div class="mt-3">
                                <button type="button" onclick="enableEdit()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Edit</button>
                                </div>
                            </form>
                          </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
          </div>
        </div>

        
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pengantar Saya</p>
                <h4 class="mb-0">Pengajuan SKCK</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn bg-gradient-dark btn-lg w-100 mt-4 mb-0" onclick="ajukanSkck()">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pengajuan SKCK</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                     <!--POP UP TAMBAH PENGAJUAN-->
                     <div class="modal-body">
                     <form id="form">
                            <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tglskck" type="date" class="form-control" >
                                  <input id="idskck" hidden>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">NIK</label>
                                  <input id="nikskck" type="number" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama</label>
                                  <input id="namaskck" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nomor KK</label>
                                  <input id="no_kkskck" type="number" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal Lahir</label>
                                  <input id="ttlskck" type="date" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Kelamin</label>
                                  <select class="form-control" id="jk_skck" readonly>
                                    <option value="perempuan">Perempuan</option>
                                    <option value="laki-laki">Laki-laki</option>
                                  </select>
                                </div>


                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Agama</label>
                                  <select id="agamaskck" class="form-control"  readonly>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                  </select>
                                  </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Kewarganegaraan</label>
                                  <select class="form-control" id="kewarganegaraanskck" readonly>
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                  </select>
                                </div>

                            
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Pekerjaan</label>
                                  <input id="pekerjaanskck" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Perkawinan</label>
                                  <select class="form-control" id="kawinskck" readonly>
                                
                                <option value="menikah">Menikah</option>
                                <option value="belum_menikah">Belum Menikah</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Alamat</label>
                                  <input id="alamatskck" type="text" class="form-control" readonly>
                                </div>

                                <div class="mt-3">
                                  <button type="button" onclick="saveSkck()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Ajukan SKCK</button>
                                </div>
                                <div class="mt-3">
                                <button type="button" onclick="enableEditskck()" class="btn bg-gradient-danger btn-lg w-100 mt-4 mb-0">Edit</button>
                                </div>
                              </form>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pengantar Saya</p>
                <h4 class="mb-0">Pengajuan SKTM</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" onclick="ajukanSktm()">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan SKTM</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                     <!--POP UP TAMBAH PENGAJUAN-->
                     <div class="modal-body">
                            <form action="#" id="form" >
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tglsktm" type="date" class="form-control">
                                  <input id="idsktm" name="idsktm" hidden>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nomor KK</label>
                                  <input id="no_kksktm" type="number" class="form-control"  readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama</label>
                                  <input id="namasktm" type="text" class="form-control"  readonly>
                                </div>


                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">NIK</label>
                                  <input id="niksktm" type="number" class="form-control"  readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Kelamin</label>
                                  <select class="form-control" id="jksktm" readonly>
                                    <option value="perempuan">Perempuan</option>
                                    <option value="laki-laki">Laki-laki</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">TTL</label>
                                  <input id="ttlsktm" type="date" class="form-control"  readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Perkawinan</label>
                                  <select class="form-control" id="stswargasktm" readonly>
                                <option value="menikah">Menikah</option>
                                <option value="belum_menikah">Belum Menikah</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Alamat</label>
                                  <input id="alamatsktm" type="text" class="form-control"  readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama Ayah</label>
                                  <input id="nama_ayahsktm" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Ttl Ayah</label>
                                  <input id="ttlayahsktm" type="date" class="form-control" readonly>
                                </div>


                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Agama</label>
                                  <select id="agamasktm" class="form-control"  readonly>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                  </select>
                                  </div>


                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Pekerjaan</label>
                                  <input id="pekerjaansktm" type="text" class="form-control" readonly >
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Alamat Ayah</label>
                                  <input id="alamatayahsktm" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Gaji</label>
                                  <input id="gajisktm" type="number" class="form-control" >
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Keperluan</label>
                                  <input id="keperluansktm" type="text" class="form-control" >
                                </div>

                                <div class="mt-3">
                                  <button type="button" onclick="saveSktm()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan</button>
                                </div>

                                <div class="mt-3">
                                  <button type="button" onclick="enableEditsktm()" class="btn bg-gradient-warning btn-lg w-100 mt-4 mb-0">Edit Data</button>
                                </div>

                              </form>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
          </div>
        </div>
        

      
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pengantar Saya</p>
                <h4 class="mb-0">Pengajuan Surat Usaha</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn bg-gradient-dark btn-lg w-100 mt-4 mb-0" onclick="ajukanSpu()">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Usaha</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                     <!--POP UP TAMBAH PENGAJUAN-->
                     <div class="modal-body">
                            <form action="#" id="form">
                            <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tglspu" type="date" class="form-control">
                                  <input id="idspu" hidden>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nomor KK</label>
                                  <input id="no_kkspu" type="number" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">NIK</label>
                                  <input id="nikspu" type="number" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama</label>
                                  <input id="namaspu" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Kelamin</label>
                                  <select class="form-control" id="jkspu" readonly>
                                    <option value="perempuan">Perempuan</option>
                                    <option value="laki-laki">Laki-laki</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal Lahir</label>
                                  <input id="ttlspu" type="date" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Alamat</label>
                                  <input id="alamatspu" type="text" class="form-control" readonly>
                                </div>



                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Usaha</label>
                                  <input id="nama_usahaspu" type="text" class="form-control">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Usaha</label>
                                  <select class="form-control" id="jenis_usahaspu">
                                    <option value="Perorangan">Perorangan</option>
                                    <option value="PT">PT</option>
                                  </select>
                                </div>
                              
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Alamat Usaha</label>
                                  <input id="alamat_usahaspu" type="text" class="form-control">
                                </div>

                                <div class="mt-3">
                                  <button type="button" onclick="saveSpu()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan</button>
                                </div>
                                <div class="mt-3">
                                  <button type="button" onclick="enableEditspu()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Edit Data</button>
                                </div>
                              </form>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pengantar Saya</p>
                <h4 class="mb-0"> Surat Ket Penghasilan</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn btn-success btn-lg w-100 mt-4 mb-0" onclick="ajukanGaji()">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Ket Penghasilan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                     <!--POP UP TAMBAH PENGAJUAN-->
                     <div class="modal-body">
                            <form action="#" id="form">
                            <input hidden id="id" name="id">
                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tglgaji" type="date" class="form-control">
                                  <input id="idgaji"  name="id" hidden>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nomor KK</label>
                                  <input id="no_kkgaji" type="number" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">NIK</label>
                                  <input id="nikgaji" type="number" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama</label>
                                  <input id="namagaji" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Jenis Kelamin</label>
                                  <select class="form-control" id="jkgaji" readonly>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                  </select>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal Lahir</label>
                                  <input id="ttlgaji" type="date" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Pekerjaan</label>
                                  <input id="pekerjaangaji" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">No KIP</label>
                                  <input id="no_kipgaji" type="text" class="form-control">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">No KIS</label>
                                  <input id="no_kisgaji" type="text" class="form-control">
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Keterangan</label>
                                  <input id="ketgaji" type="text" class="form-control">
                                </div>

                               


                                <div class="mt-3">
                                  <button type="button" onclick="saveGaji()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan</button>
                                </div>
                                <div class="mt-3">
                                  <button type="button" onclick="enableEditgaji()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Edit Data</button>
                                </div>
                              </form>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                  </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Pengantar Saya</p>
                <h4 class="mb-0">Pengajuan KTP</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
           <div class="card-footer p-3">
              <button type="button" class="btn bg-gradient-dark btn-lg w-100 mt-4 mb-0" onclick="ajukanKtp()">Ajukan Sekarang!</button>
            </div>
          </div>
                  <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Pengantar KTP</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                     <!--POP UP TAMBAH PENGAJUAN-->
                          <div class="modal-body">
                            <form id="form">
                               <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Tanggal</label>
                                  <input id="tglktp" type="date" class="form-control">
                                  <input id="idktp"  name="id" hidden>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">NIK</label>
                                  <input id="nikktp" type="text" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nomor KK</label>
                                  <input id="no_kkktp" type="number" class="form-control" readonly>
                                </div>

                                <div class="input-group input-group-static mb-3">
                                  <label class="ms-0">Nama</label>
                                  <input id="namaktp" type="text" class="form-control" readonly>
                                </div>
                        
                                <div class="input-group input-group-static mb-3">
                                <label for="exampleFormControlSelect1" class="ms-0">Keperluan</label>
                                  <select class="form-control" id="keperluanktp">
                                    <option value="Belum Pernah Mengajukan">Belum Pernah Mengajukan</option>
                                  </select>
                                </div>

                                <div class="mt-3">
                                <button type="button" onclick="Ktpsubmit()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Simpan</button>
                                </div>
                                <div class="mt-3">
                                <button type="button" onclick="enableEditktp()" class="btn bg-gradient-success btn-lg w-100 mt-4 mb-0">Edit</button>
                                </div>
                            </form>
                          </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
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
<script src="<?= base_url('js/riwayat/sktm/Sktm.js') ?>"></script>
<script src="<?= base_url('js/riwayat/sktm/saveSktm.js') ?>"></script>
<script src="<?= base_url('js/riwayat/kehilangan/Kehilangan.js') ?>"></script>
<script src="<?= base_url('js/riwayat/kehilangan/saveKehilangan.js') ?>"></script>
<script src="<?= base_url('js/riwayat/spu/Spu.js') ?>"></script>
<script src="<?= base_url('js/riwayat/spu/saveSpu.js') ?>"></script>
<script src="<?= base_url('js/riwayat/skck/Skck.js') ?>"></script>
<script src="<?= base_url('js/riwayat/skck/saveSkck.js') ?>"></script>
<script src="<?= base_url('js/riwayat/gaji/Gaji.js') ?>"></script>
<script src="<?= base_url('js/riwayat/gaji/saveGaji.js') ?>"></script>
<script src="<?= base_url('js/riwayat/KTP/Ktp.js') ?>"></script>
<script src="<?= base_url('js/riwayat/KTP/Ktpsubmit.js') ?>"></script>
<script>
function ajukanKehilangan() {
  $.ajax({
    url: base_url + "dashboard/kehilangan/ajukan",
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond);
  
      $("#id").val(respond.id);
      $("#tgl").val(respond.tgl);
      $("#nik").val(respond.nik);
      $("#no_kk").val(respond.no_kk);
      $("#nama").val(respond.nama);
      $("#jk").val(respond.jk);
      $("#pekerjaan").val(respond.pekerjaan);
      $("#alamat").val(respond.alamat);
      $("#keperluan").val(respond.keperluan);
      $("#ket").val(respond.keterangan);
      $("#status").val(respond.status);
      // $('[name="suratkehilangan"]').val(respond.data.suratkehilangan);

      $("#exampleModal6").modal("show");
      $(".modal-title").text("Edit");
      $("#statushilang").removeAttr("hidden");
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
}

function enableEdit() {
    document.getElementById("nik").readOnly = false;
    document.getElementById("nama").readOnly = false;
    document.getElementById("no_kk").disable = false;
    document.getElementById("jk").readOnly = false;
    document.getElementById("pekerjaan").readOnly = false;
    document.getElementById("alamat").readOnly = false;
  }

  function ajukanSktm() {
  $.ajax({
    url: base_url + "dashboard/SKTM/ajukan",
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond);
  
      $("#idsktm").val(respond.id);
      $("#tglsktm").val(respond.tgl);
      $("#niksktm").val(respond.nik);
      $("#no_kksktm").val(respond.no_kk);
      $("#namasktm").val(respond.nama);
      $("#jksktm").val(respond.jk);
      $("#ttlsktm").val(respond.ttl);
      $("#stswargasktm").val(respond.kawin); 
      $("#alamatsktm").val(respond.alamat); 
      $("#nama_ayahsktm").val(respond.nama_ayah);  
      $("#ttlayahsktm").val(respond.ttlayah);
      $("#agamasktm").val(respond.agama);
      $("#pekerjaansktm").val(respond.pekerjaan);
      $("#alamatayahsktm").val(respond.alamatayah);
      $("#gajisktm").val(respond.gaji);
      $("#keperluansktm").val(respond.keperluan);
      $("#statussktm").val(respond.status);
      // $('[name="suratkehilangan"]').val(respond.data.suratkehilangan);

      $("#exampleModal8").modal("show");
      $(".modal-title").text("Edit");
      $("#statussktm").removeAttr("hidden");
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
}

function enableEditsktm() {
    document.getElementById("niksktm").readOnly = false;
    document.getElementById("namasktm").readOnly = false;
    document.getElementById("no_kksktm").disable = false;
    document.getElementById("jksktm").readOnly = false;
    document.getElementById("ttlsktm").readOnly = false;
    document.getElementById("stswargasktm").readOnly = false;
    document.getElementById("alamatsktm").readOnly = false;
    document.getElementById("nama_ayahsktm").readOnly = false;
    document.getElementById("ttlayahsktm").readOnly = false;
    document.getElementById("agamasktm").readOnly = false;
    document.getElementById("pekerjaansktm").readOnly = false;
    document.getElementById("alamatayahsktm").readOnly = false;
 

  }

  function ajukanSpu() {
  $.ajax({
    url: base_url + "dashboard/SPU/ajukan",
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond);
  
      $("#idspu").val(respond.id);
      $("#tglspu").val(respond.tgl);
      $("#nikspu").val(respond.nik);
      $("#no_kkspu").val(respond.no_kk);
      $("#namaspu").val(respond.nama);
      $("#jkspu").val(respond.jk);
      $("#ttlspu").val(respond.ttl);
      $("#alamatspu").val(respond.alamat); 
      $("#nama_usahaspu").val(respond.nama_usaha);  
      $("#jenis_usahaspu").val(respond.jenis_usaha);
      $("#alamat_usahaspu").val(respond.alamat_usaha);
      $("#statusspu").val(respond.status);
      // $('[name="suratkehilangan"]').val(respond.data.suratkehilangan);

      $("#exampleModal10").modal("show");
      $(".modal-title").text("Edit");
      $("#statusspu").removeAttr("hidden");
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
}

function enableEditspu() {
    document.getElementById("nikspu").readOnly = false;
    document.getElementById("namaspu").readOnly = false;
    document.getElementById("no_kkspu").disable = false;
    document.getElementById("jkspu").readOnly = false;
    document.getElementById("ttlspu").readOnly = false;
    document.getElementById("alamatspu").readOnly = false;
    document.getElementById("nama_usahaspu").readOnly = false;
    document.getElementById("jenis_usahaspu").readOnly = false;
    document.getElementById("alamat_usahaspu").readOnly = false;
   
  }

  function ajukanSkck() {
  $.ajax({
    url: base_url + "dashboard/skck/ajukan",
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond);
  
      $("#idskck").val(respond.id);
      $("#tglskck").val(respond.tgl);
      $("#nikskck").val(respond.nik);
      $("#no_kkskck").val(respond.no_kk);
      $("#namaskck").val(respond.nama);
      $("#jk_skck").val(respond.jk);
      $("#ttlskck").val(respond.ttl);
      $("#agamaskck").val(respond.agama);
      $("#kewarganegaraanskck").val(respond.kewarganegaraan);
      $("#kawinskck").val(respond.kawin);
      $("#pekerjaanskck").val(respond.pekerjaan);
      $("#alamatskck").val(respond.alamat); 
      $("#statusskck").val(respond.status);
      // $('[name="suratkehilangan"]').val(respond.data.suratkehilangan);

      $("#exampleModal7").modal("show");
      $(".modal-title").text("Edit");
      $("#statusskck").removeAttr("hidden");
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
}

function enableEditskck() {
    document.getElementById("nikskck").readOnly = false;
    document.getElementById("namaskck").readOnly = false;
    document.getElementById("no_kkskck").disable = false;
    document.getElementById("jk_skck").readOnly = false;
    document.getElementById("ttlskck").readOnly = false;
    document.getElementById("agamaskck").readOnly = false;
    document.getElementById("kewarganegaraanskck").readOnly = false;
    document.getElementById("kawinskck").readOnly = false;
    document.getElementById("pekerjaanskck").readOnly = false;
    document.getElementById("alamatskck").readOnly = false;
  }


  function ajukanGaji() {
  $.ajax({
    url: base_url + "dashboard/gaji/ajukan",
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond);

      $("#idgaji").val(respond.id);
      $("#tglgaji").val(respond.tgl);
      $("#nikgaji").val(respond.nik);
      $("#no_kkgaji").val(respond.no_kk);
      $("#namagaji").val(respond.nama);
      $("#ttlgaji").val(respond.ttl);
      $("#pekerjaangaji").val(respond.pekerjaan);
      $("#no_kipgaji").val(respond.no_kip);
      $("#no_kisgaji").val(respond.no_kis);
      $("#ketgaji").val(respond.ket);

      // Create and display the image element
      var imgElement = document.createElement("img");
      imgElement.src = respond.scankk;
      imgElement.alt = "Scan KK";
      $("#scankkgaji").empty().append(imgElement);

      $("#statusgaji").val(respond.status);
      
      $("#exampleModal9").modal("show");
      $(".modal-title").text("Edit");
      $("#statusgaji").removeAttr("hidden");
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(jqXHR);
      swal.fire({
        icon: "error",
        title: errorThrown,
        text: "Error getting data from AJAX.",
      });
    },
  });
}

function enableEditgaji() {
    document.getElementById("nikgaji").readOnly = false;
    document.getElementById("namagaji").readOnly = false;
    document.getElementById("no_kkgaji").disable = false;
    document.getElementById("ttlgaji").readOnly = false;
    document.getElementById("pekerjaangaji").readOnly = false;
    document.getElementById("no_kipgaji").readOnly = false;
    document.getElementById("no_kisgaji").readOnly = false;
    document.getElementById("ketgaji").readOnly = false;
    
  }

  function ajukanKtp() {
  $.ajax({
    url: base_url + "dashboard/KTP/ajukan",
    type: "GET",
    dataType: "JSON",
    success: function (respond) {
      console.log(respond);
  
      $("#idktp").val(respond.id);
      $("#tglktp").val(respond.tgl);
      $("#nikktp").val(respond.nik);
      $("#no_kkktp").val(respond.no_kk);
      $("#namaktp").val(respond.nama);
      $("#keperluanktp").val(respond.keperluan); 
      $("#keteranganktp").val(respond.keterangan);
      // $('[name="suratkehilangan"]').val(respond.data.suratkehilangan);

      $("#exampleModal4").modal("show");
      $(".modal-title").text("Edit");
      $("#statusktp").removeAttr("hidden");
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
}

function enableEditktp() {
    document.getElementById("nikktp").readOnly = false;
    document.getElementById("namaktp").readOnly = false;
    document.getElementById("no_kkktp").disable = false;
    document.getElementById("keperluanktp").readOnly = false;
    document.getElementById("keteranganktp").readOnly = false;
   
  }
</script>
<?= $this->endSection() ?>


