<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                  <form>
                  <div class="form-group row">
                    <label for="nama" class="col-2 col-form-label">Nama</label> 
                    <div class="col-4">
                      <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-2 col-form-label">Alamat</label> 
                    <div class="col-4">
                      <input id="alamat" name="alamat" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal" class="col-2 col-form-label">Tanggal</label> 
                    <div class="col-4">
                      <div class="input-group">
                        <input id="tanggal" name="tanggal" placeholder="hh/bb/tttt" type="text" class="form-control"> 
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <i class="fa fa-calendar-o"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                  <label for="produk" class="col-2 col-form-label">Produk</label> 
                  <div class="col-4">
                    <select id="produk" name="produk" class="custom-select">
                      <option value="lightstick">Lightstick</option>
                      <option value="pc">Photocards</option>
                      <option value="album">Album</option>
                      <option value="skzoo">SKZOO</option>
                      <option value="hoodie">Hoodie</option>
                      <option value="ring">Rings</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                <label for="hp" class="col-2 col-form-label">Nomor HP</label> 
                <div class="col-4">
                  <input id="hp" name="hp" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-2 col-form-label">Email</label> 
                <div class="col-4">
                  <input id="email" name="email" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
                <div class="col-4">
                  <input id="jumlah" name="jumlah" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="deskripsi" class="col-2 col-form-label">Deskripsi</label> 
                <div class="col-4">
                  <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                </div>
              <div class="form-group row">
          <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>