<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Produk</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                    </div>
                    <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Deskripsi</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>LS01</td>
                            <td>Lightstick</td>
                            <td>825000</td>
                            <td>25</td>
                            <td>Lightstick adalah aksesoris yang di desain cantik sebagai bentuk dukungan 
                                kepada sebuah idol group. 
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>PC01</td>
                            <td>Photocards</td>
                            <td>200000</td>
                            <td>64</td>
                            <td>Photocards, 1 set foto sebuah idol group yang 
                                dicetak dengan bahan berkualitas.
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>AB01</td>
                            <td>Album</td>
                            <td>330000</td>
                            <td>10</td>
                            <td>Album foto dari sebuah idol group.</td>
                            </tr>
                            <tr>
                            <th scope="row">4</th>
                            <td>BA01</td>
                            <td>SKZOO</td>
                            <td>150000</td>
                            <td>8</td>
                            <td>SKZOO adalah boneka yang menjadi ikon representatif dari 
                                masing-masing anggota idol group Stray Kids.
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">5</th>
                            <td>HD01</td>
                            <td>Hoodie</td>
                            <td>280000</td>
                            <td>30</td>
                            <td>Hoodie berbahan lembut yang mempunyai 
                                desain khusus khas grup idola, Stray Kids.
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">6</th>
                            <td>RS01</td>
                            <td>Rings</td>
                            <td>100000</td>
                            <td>10</td>
                            <td>Cincin yang didesain khusus oleh member grup idola,
                                Stray Kids untuk fans mereka.
                            </td>
                            </tr>
                        </tbody>
                        </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>