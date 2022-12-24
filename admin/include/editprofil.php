<?php 
if(isset($_GET['data'])){
	$id_user = $_GET['data'];
	
    //get data nama email username password level foto
	$sql_d = "SELECT `id_user`, `nama`, `email`, `username`, `password`, `level` FROM `user` WHERE `id_user` = '$id_user'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
        $id_user= $data_d[0];
        $nama= $data_d[1];
        $email= $data_d[2];
        $username= $data_d[3];
        $pass= $data_d[4];
        $level= $data_d[5];
    }
}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Profil</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=profil">Profil</a></li>
              <li class="breadcrumb-item active">Edit Profil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Profil</h3>
   
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <?php if(!empty($_GET['notif'])){?>
      <?php if($_GET['notif']=="editnamakosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf data nama wajib di isi</div>
      <?php }?>
            <?php if($_GET['notif']=="editemailkosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf data email wajib di isi</div>
      <?php }?>
      <?php if($_GET['notif']=="edituserkosong"){?>
      <div class="alert alert-danger" role="alert">
      Maaf data username wajib di isi</div>
      <?php }?>
      <?php }?>

      <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-edit-profil" enctype="multipart/form-data">
      <div class="card-body">
          <div class="form-group row ">
            <label class="col-sm-12 col-form-label"><span class="text-info"><i class="fas fa-user-circle"></i> <u>Data User</u></span></label>
          </div>
          
          <div class="form-group row">
            <label for="foto" class="col-sm-2 col-form-label">Foto </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="email" id="email" value="<?php echo $email;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="username" id="username" value="<?php echo $username;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="password" id="password" value="">
              <span class="text-danger" style="font-weight:lighter;font-size:12px">
               *Jangan diisi jika tidak ingin mengubah password</span>
            </div>
          </div>
          <div class="form-group row">
            <label for="level" class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-7">
              <select class="form-control" id="jurusan" name="level">
                <option value="Superadmin">Superadmin</option>
                <option value="Admin">Admin</option>
              </select>
            </div>
          </div>
          <div class="col-sm-11">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>
          </div>
        </div>

      </div>
      
      </form>
    </div>
    <!-- /.card -->

    </section>