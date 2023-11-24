<div class="page-heading">
    <div class="page-breadcrumb">
        <h1 class="page-title page-title-sep">Data Produk</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="la la-home font-20"></i></a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item">DataProduk</li>
        </ol>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="box-title">Data Produk
            <div class="float-right">
                <a href="<?php echo site_url('page/new-produk') ?>" class="btn btn-success">+Produk</a>
            </div>
        </h5>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Diskon</th>
                        <th>Stock</th>
                        <th>Kategori</th>
                        <th>Sub Kategori</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $this->db->join('tb_kategori', 'tb_kategori.kategori_id = tb_produk.produk_kategori');
                    $this->db->join('tb_subkategori', 'tb_subkategori.subkategori_id = tb_produk.produk_subkategori');
                    $this->db->order_by('produk_date', 'DESC');
                    $getdata = $this->db->get('tb_produk');
                    foreach ($getdata->result() as $show) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $show->produk_nama ?></td>
                            <td><?php echo $show->produk_deskripsi ?></td>
                            <td align="left">Rp. <?php echo number_format($show->produk_harga, 0, ',', '.') ?></td>
                            <td><?php echo $show->produk_diskon ?> %</td>
                            <td><?php echo $show->produk_stock ?></td>
                            <td><?php echo $show->kategori_name ?></td>
                            <td><?php echo $show->subkategori_name ?></td>
                            <td><img src="<?php echo base_url('/assets/frontend/img/'. $show->produk_gambar) ?>" style="width:100px"></td>
                            <td>
                                <a href="<?php echo site_url("page/edit-produk/".$show->produk_code) ?>" class="btn btn-sm btn-primary text-white" >
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="javascript:void(0)" onclick="hapusdata('<?php echo $show->produk_code ?>')" class="btn btn-sm btn-danger text-white"><i class="fas fa-trash-alt"></i></a>
                        </tr>
                    <?php } ?>
                </tbody> 
            </table>
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
                        url: '<?php echo site_url('postdata/admin_post/produk/hapusproduk') ?>',
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