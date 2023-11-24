<div class="page-heading">
    <div class="page-breadcrumb">
        <h1 class="page-title page-title-sep">Data Sub-Kategori</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="la la-home font-20"></i></a></li>
            <li class="breadcrumb-item">Sub-Kategori</li>
            <li class="breadcrumb-item">Data Sub-Kategori</li>
        </ol>
    </div>
</div>

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
                        <option selected disabled>Pilih Kategori</option>
                        <?php $getkategori = $this->db->get('tb_kategori');
                        foreach ($getkategori->result() as $show) { ?>
                            <option value="<?php echo $show->kategori_id ?>"><?php echo $show->kategori_name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nama Sub-Kategori</label>
                    <input type="text" class="form-control" name="subkategori_name" autocomplete="off">
                </div>
                <div class="form-group">
                    <div class="float-left">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
                <script type="text/javascript" charset="utf-8" async defer>
                    $('#simpankategori').submit(function(event) {
                        event.preventDefault();

                        $.ajax({
                                url: '<?php echo site_url('postdata/admin_post/kategori/newsubkategori') ?>',
                                type: 'POST',
                                dataType: 'json',
                                data: $('#simpankategori').serialize(),
                            })
                            .done(function(data) {

                                updateCSRF(data.csrf_data);

                                swal(
                                    data.heading,
                                    data.message,
                                    data.type
                                ).then(function() {
                                    if (data.status) {
                                        location.reload();
                                    }
                                });

                            })
                    });
                </script>

            </div>
        </div>
    </div>

    <div class="col-lg-7">

        <div class="card card-fullheight -le ">
            <div class="card-body">
                <h5 class="box-title">Data Sub-Kategori</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Nama Sub-Kategori</th>
                            <th width="15%"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        $limit       = 10;
                        $offset      = ($this->input->get('page')) ? $this->input->get('page') : 0;
                        $no          = $offset + 1;
                        $this->db->order_by('subkategori_id', 'DESC');
                        $getdata = $this->db->get('tb_subkategori', $limit, $offset);

                        $totaldata = $this->db->get('tb_subkategori')->num_rows();
                        foreach ($getdata->result() as $show) {
                        ?>
                            <tr>
                                <th><?php echo $no++ ?></th>
                                <td><?php echo $show->subkategori_name ?></td>
                                <td></td>
                                <td>
                                <a data-href="<?php echo site_url('modal/admin/update-subkategori?code=' . $show->subkategori_kode) ?>" data-title="Subkategori Update" data-remote="false" data-toggle="modal" data-target="#dinamicModal" data-backdrop="static" data-keyboard="false" class="btn btn-sm btn-primary text-white" title="Subkategori Update">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="hapusdata('<?php echo $show->subkategori_kode ?>')" class="btn btn-sm btn-danger text-white"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function hapusdata(code) {
        swal({
            allowOutsideClick: false,
            title: 'Apakah Anda Yakin',
            text: "Subkategori Akan Dihapus & Tidak Dapat Dikembalikan!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                        url: '<?php echo site_url('postdata/admin_post/kategori/hapussubkategori') ?>',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            code: code,
                            <?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>'
                        }
                    })

                    .done(function(data) {

                        swal(
                            data.header,
                            data.message,
                            data.type,
                        ).then(function() {

                            if (data.status) {
                                location.reload();
                            }

                        });

                    })
            }
        });
    }
</script>