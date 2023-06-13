<?php
require_once 'header.php';
require_once 'sidebar.php';
$nama = $_POST["nama"];
$skill = $_POST["skill"];
$skor = 0;

// Buat logic nentuin skor dari skill
foreach ($skill as $s) {
    // cek skill nya
    switch ($s) {
        case 'html':
            $skor = $skor + 10;
            $skor += 10;
            break;
        case 'css':
            $skor = $skor + 10;
            $skor += 10;
            break;
        case 'javascript':
            $skor = $skor + 20;
            $skor += 10;
            break;
        case 'bootstrap':
            $skor = $skor + 20;
            $skor += 10;
            break;
        case 'php':
            $skor = $skor + 30;
            $skor += 10;
            break;
        case 'python':
            $skor = $skor + 30;
            $skor += 10;
            break;
        case 'java':
            $skor = $skor + 50;
            $skor += 10;
            break;
        default:
            # code...
            break;
    }
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
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
                            <h3 class="card-title">Judul</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1>Form Pendaftaran</h1>
                            <form method="POST" action="praktikum03.php">
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-8">
                                        <input id="nama" name="nama" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Skill Web & Programming</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html">
                                            <label for="skill[]_0" class="custom-control-label">HTML</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css">
                                            <label for="skill[]_1" class="custom-control-label">CSS</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="javascript">
                                            <label for="skill[]_2" class="custom-control-label">Javascript</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="bootstrap">
                                            <label for="skill[]_3" class="custom-control-label">Bootstrap</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php">
                                            <label for="skill[]_4" class="custom-control-label">PHP</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="python">
                                            <label for="skill[]_5" class="custom-control-label">Python</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java">
                                            <label for="skill[]_6" class="custom-control-label">Java</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <?php
                            echo "Nama : " . $nama . "<br>";
                            echo "Skill : ";
                            foreach ($skill as $s) {
                                echo $s . ",";
                            }
                            echo "<br> Skor : " . $skor;


                            ?>

                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
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