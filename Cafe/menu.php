<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_daftar_menu");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<div class="col-lg-9  mt-2">
    <div class="card">
        <div class="card-header">
            Daftar Menu
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Tambah User</button>
                </div>
            </div>
            <!-- Modal Tambah User Baru-->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" required>
                                            <label for="floatingInput">Nama</label>
                                            <div class="invalid-feedback">
                                                Masukkan nama terlebih dahulu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required>
                                            <label for="floatingInput">Username</label>
                                            <div class="invalid-feedback">
                                                Masukkan Username
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="level" required>
                                                <option selected hidden value="">Pilih Level User</option>
                                                <option value="1">Owner/Admin</option>
                                                <option value="2">Kasir</option>
                                                <option value="3">Pelayan</option>
                                                <option value="4">Dapur</option>
                                            </select>
                                            <label for="floatingInput">Level User</label>
                                            <div class="invalid-feedback">
                                                Pilih Level User
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp">
                                            <label for="floatingInput">No HP</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingInput" placeholder="Password" disabled value="12345" name="password">
                                            <label for="floatingPassword">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="alamat" id="" style="height: 100px;"></textarea>
                                    <label for="floatingInput">Alamat</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_user_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Tambah User Baru-->

            <?php
            foreach ($result as $row) {
            ?>
                <!-- Modal View-->
                <div class="modal fade" id="ModalView<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" value="<?php echo $row['nama'] ?>">
                                                <label for="floatingInput">Nama</label>
                                                <div class="invalid-feedback">
                                                    Masukkan nama terlebih dahulu
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input disabled type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" value="<?php echo $row['username'] ?>">
                                                <label for="floatingInput">Username</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Username
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <select disabled class="form-select" aria-label="Default select example" required name="level" id="">
                                                    <?php
                                                    $data = array("Owner/Admin", "Kasir", "Pelayan", "Dapur");
                                                    foreach ($data as $key => $value) {
                                                        if ($row['level'] == $key + 1) {
                                                            echo "<option selected value='$key'>$value</option>";
                                                        } else {
                                                            echo "<option value='$key'>$value</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="floatingInput">Level User</label>
                                                <div class="invalid-feedback">
                                                    Pilih Level User
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-floating mb-3">
                                                <input disabled type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp" value="<?php echo $row['nohp'] ?>">
                                                <label for="floatingInput">No HP</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <textarea disabled class="form-control" name="alamat" id="" style="height: 100px;"><?php echo $row['alamat'] ?></textarea>
                                        <label for="floatingInput">Alamat</label>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal View-->

                <!-- Modal Edit-->
                <div class="modal fade" id="ModalEdit<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_edit_user.php" method="POST">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" required placeholder="Your Name" name="nama" value="<?php echo $row['nama'] ?>">
                                                <label for="floatingInput">Nama</label>
                                                <div class="invalid-feedback">
                                                    Masukkan nama terlebih dahulu
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input <?php echo ($row['username'] == $_SESSION['username_decafe']) ? 'disabled' : ''; ?> type="email" class="form-control" id="floatingInput" required placeholder="name@example.com" name="username" value="<?php echo $row['username'] ?>">
                                                <label for="floatingInput">Username</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Username
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" aria-label="Default select example" required name="level" id="">
                                                    <?php
                                                    $data = array("Owner/Admin", "Kasir", "Pelayan", "Dapur");
                                                    foreach ($data as $key => $value) {
                                                        if ($row['level'] == $key + 1) {
                                                            echo "<option selected value=" . ($key + 1) . ">$value</option>";
                                                        } else {
                                                            echo "<option value=" . ($key + 1) . ">$value</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="floatingInput">Level User</label>
                                                <div class="invalid-feedback">
                                                    Pilih Level User
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxx" name="nohp" value="<?php echo $row['nohp'] ?>">
                                                <label for="floatingInput">No HP</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="alamat" id="" style="height: 100px;"><?php echo $row['alamat'] ?></textarea>
                                        <label for="floatingInput">Alamat</label>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="input_user_validate" value="12345">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Edit-->

                <!-- Modal Delete-->
                <div class="modal fade" id="ModalDelete<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_user.php" method="POST">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <div class="col-lg-12">
                                        <?php
                                        if ($row['username'] == $_SESSION['username_decafe']) {
                                            echo "<div class='alert alert-danger'>Anda tidak bisa meghapus akun sendiri</div>";
                                        } else {
                                            echo "Apakah anda ingin menghapus user <b>$row[username]</b>";
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="input_user_validate" value="12345" <?php echo ($row['username'] == $_SESSION['username_decafe']) ? 'disabled' : ''; ?>>Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Delete-->

                <!-- Modal Reset Password -->
                <div class="modal fade" id="ModalResetPassword<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Password</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_reset_password.php" method="POST">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <div class="col-lg-12">
                                        <?php
                                        if ($row['username'] == $_SESSION['username_decafe']) {
                                            echo "<div class='alert alert-danger'>Anda tidak bisa mereset password sendiri</div>";
                                        } else {
                                            echo "Apakah anda ingin menghapus mereset password user <b>$row[username]</b> menjadi password bawaan sistem yaitu <b>password</b>";
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" name="input_user_validate" value="12345" <?php echo ($row['username'] == $_SESSION['username_decafe']) ? 'disabled' : ''; ?>>Reset Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Reset Password -->

            <?php
            }
            if (empty($result)) {
                echo "Data user tidak ada";
            } else {
            ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto Menu</th>
                                <th scope="col">Nama Menu</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td>
                                        <div style="width: 90px;">
                                            <img src="assets/img/<?php echo $row['foto']; ?>" class="img-thumbnail" alt="...">
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <?php echo $row['nama_menu']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['keterangan']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['kategori']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['harga']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['stok']; ?>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id']; ?>"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></i></button>
                                            <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id']; ?>"><i class="bi bi-trash"></i></i></button>
                                            <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalResetPassword<?php echo $row['id']; ?>"><i class="bi bi-key"></i></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            <?php }; ?>
        </div>
    </div>
</div>