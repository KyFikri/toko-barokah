<?php include 'header.php'; ?>

<div class="container-center">
    <div class="alert alert-info text-center" style="background-color: #B9CECC">
        <h3 style="margin-bottom: 10px;"><b>WELCOME!</b> to Sistem Toko Barokah</h3>
    </div>
    <br /><br /><br /><br />
    <div class="panel" style="background-color: #B9CECC">
        <div class="panel-heading">
            <h4>Data Produk</h4>
        </div>
        <div class="panel-body">
            <a href="add_produk.php" class="btn btn-sm btn-info pull-left">
            <img src="assets1/icons8-add-64.png" alt="" class="icon" width="10px" height="10px">    
            <i class="glyphicon glyphicon-plus"></i> Add</a><br /><br />
            <table class="table table-bordered table-striped" style="background-color: #FFFFFF">
                <tr>
                    <th width="1%">No</th>
                    <th width="5%">ID</th>
                    <th>Nama Produk</th>
                    <th>Detail Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th width="15%">Opsi</th>
                </tr>
                <?php
                include '../koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * FROM produk");
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['ID_PRODUK']; ?></td>
                        <td><?php echo $d['NAMA_PRODUK']; ?></td>
                        <td><?php echo $d['DETAIL_PRODUK']; ?></td>
                        <td><?php echo $d['HARGA']; ?></td>
                        <td><?php echo $d['STOK']; ?></td>
                        <td>
                            <a href="edit_product.php?id=<?php echo $d['ID_PRODUK']; ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="delete_product.php?id=<?php echo $d['ID_PRODUK']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
