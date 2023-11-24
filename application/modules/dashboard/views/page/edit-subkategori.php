<div class="row">
    <div class="col-lg-5">
        <div class="card -right">
            <div class="card-body">
                <div class="form-group">
                    <h5 class="box-title">Sub-Kategori Baru</h5>
                </div>
                <?php echo form_open('', 'id="simpankategori"'); ?>
                <div class="form-group">
                    <label for="">Kategori Produk</label>
                    <select class="form-control form-control-rounded form-control-solid" name="subkategori_kategorid" id="kategori_id" onchange="getsubkategori()">
                        <option selected disabled value="<?php echo $subkategori->subkategori_kategorid ?>"><?php echo $subkategori->subkategori_name ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nama Sub-Kategori</label>
                    <input type="text" class="form-control" name="subkategori_name" autocomplete="off" value="<?php echo $subkategori->subkategori_name ?>">
                </div>
                <div class="form-group">
                    <div class="float-left">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>