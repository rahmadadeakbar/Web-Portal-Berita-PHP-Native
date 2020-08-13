<?php include 'header.php' ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Data User</h4>
            <p class="card-description">
              Masukkan Data User
            </p>
            <form class="forms-sample" action="proses/input_user.php" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">Username</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="username" required>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Password</label>
                <input type="password" class="form-control" id="exampleInputName1" placeholder="Password" name="password" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">No HP</label>
                <input type="number" class="form-control" id="exampleInputEmail3" placeholder="Email" name="nohp" required>
              </div>


              <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih User</label>
                <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="level">
                  <option value="admin">Admin</option>
                  <option value="operator">Operator</option>
                  <option value="autor">Autor</option>
                </select>
              </div>


              <button type="submit" class="btn btn-success mr-2" type="submit" name="input_user">Submit</button>
              <button class="btn btn-light" type="reset">Reset</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Striped Table</h4>
            <p class="card-description">
              Add class
              <code>.table-striped</code>
            </p>
            <div class="table-responsive">
              <table class="table table-striped table-bordered data">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Level</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- proses menampilkan data dari database -->
                  <?php
                  $show_query = mysqli_query($koneksi, "SELECT * FROM user");
                  if (mysqli_num_rows($show_query) == 0) {
                    echo '<tr><td>Tidak ada data</td></tr>';
                  } else {
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($show_query)) {
                  ?>
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['no_hp']; ?></td>
                        <td><?php echo $data['level']; ?></td>
                        <td>
                          <a href="" class="btn btn-warning">Edit</a>
                          <a href="" class="btn btn-info">View</a>
                          <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                  <?php
                      $no++;
                    }
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        </>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
        <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
        <i class="mdi mdi-heart text-danger"></i>
      </span>
    </div>
  </footer>
  <!-- partial -->
</div>
<?php include 'footer.php' ?>