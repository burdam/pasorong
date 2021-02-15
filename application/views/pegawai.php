<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("/admin/_partials/head.php") ?>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view("/admin/_partials/sidebar.php") ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php $this->load->view("/admin/_partials/topbar.php") ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Sistem Informasi Izin Keluar Kantor</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">Data Pegawai</h6>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="DataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <?php $no = 1; ?>
                                            <tr>
                                                <th>
                                                    <center>No</center>
                                                </th>
                                                <th>
                                                    <center>NIP</center>
                                                </th>
                                                <th>
                                                    <center>Nama</center>
                                                </th>
                                                <th>
                                                    <center>Sub Unit Kerja</center>
                                                </th>
                                                <th>
                                                    <center>Golongan</center>
                                                </th>
                                                <th>
                                                    <center>

                                                        <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Add New</button>

                                                        <a href="<?= base_url('pegawai/tambah/'); ?>" class="btn btn-primary btn-circle btn-sm" data-toggle="model" data-target="#addModal">

                                                            <i class="fas fa-plus"></i>

                                                        </a>
                                                    </center>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    <center>No</center>
                                                </th>
                                                <th>
                                                    <center>NIP</center>
                                                </th>
                                                <th>
                                                    <center>Nama</center>
                                                </th>
                                                <th>
                                                    <center>Sub Unit Kerja</center>
                                                </th>
                                                <th>
                                                    <center>Golongan</center>
                                                </th>
                                                <th>
                                                    <center><a href="<?= base_url('pegawai/tambah/'); ?>" class="btn btn-primary btn-circle btn-sm" data-toggle="model" data-target="#addModal">

                                                            <i class="fas fa-plus"></i>

                                                        </a></center>
                                                </th>

                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach ($pegawai as $m) : ?>
                                                <tr>
                                                    <th scope="row">
                                                        <center><?= $no++; ?></center>
                                                    </th>
                                                    <td><?= $m['nip']; ?></td>
                                                    <td><?= $m['nama']; ?></td>
                                                    <td><?= $m['divisi']; ?></td>
                                                    <td>
                                                        <center><?= $m['gol']; ?></center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <a href="#" class="btn btn-info btn-sm btn-edit" data-nama="<?= $m['nama']; ?>" data-nip="<?= $m['nip']; ?>" data-gol="<?= $m['gol']; ?>" data-divisi="<?= $m['divisi']; ?>">Edit</a>

                                                            <a href="#" class="btn btn-danger btn-sm btn-delete" data-id_user="<?= $m['id_user']; ?>">Delete</a>




                                                            <a href="<?= base_url('pegawai/ubah/'); ?><?= $m['id_user']; ?>" class="btn btn-warning btn-circle btn-sm">
                                                                <i class="fas fa-edit"></i>
                                                            </a>



                                                            <a href="<?= base_url('pegawai/hapus/'); ?><?= $m['id_user']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Apakah Anda ingin menghapus data ini?');">
                                                                <i class="fas fa-trash"></i>
                                                            </a>

                                                        </center>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php $this->load->view("/admin/_partials/footer.php") ?>

        </div>
        <!-- End of Content Wrapper -->
        <!-- Modal Add Product-->
        <form action="/pegawai/tambah/" method="post">
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="product_name" placeholder="Product Name">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" name="product_price" placeholder="Product Price">
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select name="product_category" class="form-control">
                                    <option value="">-Select-</option>
                                    <?php foreach ($category as $row) : ?>
                                        <option value="<?= $row->category_id; ?>"><?= $row->category_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Add Product-->

        <!-- Modal Edit Product-->
        <form action="/product/update" method="post">
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control product_name" name="product_name" placeholder="Product Name">
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control product_price" name="product_price" placeholder="Product Price">
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select name="product_category" class="form-control product_category">
                                    <option value="">-Select-</option>
                                    <?php foreach ($category as $row) : ?>
                                        <option value="<?= $row->category_id; ?>"><?= $row->category_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="product_id" class="product_id">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Edit Product-->
        <!-- Modal Delete Product-->
        <form action="/pasorong/pegawai/hapus/" method="post">
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Pegawai</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <h4>Are you sure want to delete this product?</h4>

                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_user" class="id_user">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Delete Product-->

    </div>
    <!-- End of Page Wrapper -->

    <?php $this->load->view("/admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("/admin/_partials/modal.php") ?>
    <?php $this->load->view("/admin/_partials/js.php") ?>

</body>

</html>