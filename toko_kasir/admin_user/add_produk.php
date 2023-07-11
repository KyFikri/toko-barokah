<?php include 'header.php'; ?>

<?php include '../koneksi.php'; ?>
<div class="container-center">
    <br/><br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel" style="background-color: #B9CECC">
            <div class="panel-heading">
                <h4> Add New Produk</h4>
            </div>
            <div class="panel-body">
            <a href="product.php" class="btn btn-sm btn-info pull-right"> Kembali </a>
                    <br/><br/>
                <form method="post" action="add_produk_1.php">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="number" class="form-control" name="id_produk" placeholder="Input ID!">
                    </div>
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" placeholder="Input nama produk!">
                    </div>
                    <div class="form-group">
                        <label>Detail Produk</label>
                        <input type="text" class="form-control" name="detail_produk" placeholder="Input detail produk!">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control" name="harga" placeholder="Input harga!">
                    </div class="text-left">
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" class="form-control" name="stok" placeholder="Input stok!">
                    </div class="text-left">
                    <br/>
                    <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>