<div class="page-header">
    <h1>Tambah Aturan:</h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if($_POST) include'aksi.php'?>
        <form method="post" action="?m=aturan_tambah">
            <div class="form-group">
                <label>Diagnosa <span class="text-danger">*</span></label>
                <select class="form-control" name="kode_penyakit">
                    <option value=""></option>
                    <?=get_penyakit_option($_POST['kode_penyakit'])?>
                </select>
            </div>
            <div class="form-group">
                <label>Gejala <span class="text-danger">*</span></label>
                <select class="form-control" name="kode_gejala">
                    <option value=""></option>
                    <?=get_gejala_option($_POST['kode_gejala'])?>
                </select>
            </div>
            <div class="form-group">
                <label>Nilai <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nilai" value="<?=$_POST['nilai']?>"/>
            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;Simpan</button>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-danger" href="?m=aturan"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Kembali</a>
            </div>
        </form>
    </div>
</div>