<div class="page-heading">
    <div class="page-breadcrumb">
        <h1 class="page-title page-title-sep">Data Kategori</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="la la-home font-20"></i></a></li>
            <li class="breadcrumb-item">Kategori</li>
            <li class="breadcrumb-item">Data Kategori</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-5">
        <div class="card -right">
            <div class="card-body">
                <div class="form-group">
                    <h5 class="box-title">Kategori Baru</h5>
                </div>
                <?php echo form_open('', 'id="simpankategori"'); ?>
                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" class="form-control" name="kategori_name" autocomplete="off">
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
                                url: '<?php echo site_url('postdata/admin_post/kategori/newkategori') ?>',
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
                <h5 class="box-title">Data Kategori</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Nama Kategori</th>
                            <th width="15%">Sub</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $limit       = 10;
                        $offset      = ($this->input->get('page')) ? $this->input->get('page') : 0;
                        $no          = $offset + 1;
                        $this->db->order_by('kategori_id', 'DESC');
                        $getdata = $this->db->get('tb_kategori', $limit, $offset);

                        $totaldata = $this->db->get('tb_kategori')->num_rows();
                        foreach ($getdata->result() as $show) {
                        ?>
                            <tr>
                                <th><?php echo $no++ ?></th>
                                <td><?php echo $show->kategori_name ?></td>
                                <td>
                                    <a href="data-subkategori" class="btn btn-primary">open</a>
                                </td>
                                <td>
                                    <a data-href="<?php echo site_url('modal/admin/update-kategori?code=' . $show->kategori_kode) ?>" data-title="Kategori Update" data-remote="false" data-toggle="modal" data-target="#dinamicModal" data-backdrop="static" data-keyboard="false" class="btn btn-sm btn-primary text-white" title="Kategori Update">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="hapusdata('<?php echo $show->kategori_kode ?>')" class="btn btn-sm btn-danger text-white"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php echo $this->paginationmodel->paginate('data-kategori', $totaldata, $limit) ?>

            </div>
        </div>
    </div>
</div>
<script>
    function hapusdata(code) {
        swal({
            allowOutsideClick: false,
            title: 'Apakah Anda Yakin',
            text: "Kategori Akan Dihapus & Tidak Dapat Dikembalikan!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {

                $.ajax({
                        url: '<?php echo site_url('postdata/admin_post/kategori/hapuskategori') ?>',
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