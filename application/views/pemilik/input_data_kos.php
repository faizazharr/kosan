 <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Input Data Kos</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form method="POST" action="<?php echo base_url('pemilik/insert_data_kos'); ?>" enctype="multipart/form-data">
                  <table>
                    <tr>
                      <td>Nama Kos</td>
                      <td><input type="text" name="nama_kos" class="input100"></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td><textarea name="alamat" rows="5" cols="55" class="input100">
                        
                      </textarea></td>
                    </tr>
                    <tr>
                      <td>Deskripsi</td>
                      <td><textarea name="deskripsi" rows="5" cols="55" class="input100"></textarea></td>
                    </tr>
                    <tr>
                      <td>Foto</td>
                      <td><input type="file" name="foto" class="input100"></td>
                    </tr>
                    <tr>
                      <td>Jenis Kos</td>
                      <td><select name="jenis_kosan">
                        <option value="Putra">kosan Putra</option>
                        <option value="Putri">Kosan Putri</option>
                        <option value="Campur">kosan Campur</option>
                      </select></td>
                    </tr>
                  </table>
                <button class="btn btn-info" type="submit" name="submit">Input Data</button>
                </form><br>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->