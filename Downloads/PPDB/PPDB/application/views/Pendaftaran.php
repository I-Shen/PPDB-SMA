<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/images/LOGO.png') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/gaya.css') ?>">
    <link href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bgnya">
    <div class="kotakup">
        <div align="center" class="kotakup kotakupp">

            <img src="<?= base_url('asset/images/LOGO.png') ?>" width="5%" align="center">

            <div align="center" class="garisup">
                <h1>LAMAN ADMIN
                    <a href="<?= base_url('index.php/Adm_ctrl/adminnya') ?>">
                        <button class="btn" id="tombol"><i class="fa fa-home"></i></button>
                    </a>
                    <button class="btn" id="tombolpopup" onclick="openNav()"><i class="fa fa-bars"></i></button>

                </h1>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <button class="closebtn" onclick="closeNav()">&times;</button>
            <a href="<?= base_url('index.php/Adm_ctrl/profil') ?>">PROFIL ADMIN</a>
            <a href="<?= base_url('index.php/Adm_ctrl/PPDB') ?>">PENDAFTAR</a>
            <a href="<?= base_url('index.php/Adm_ctrl/settanggal') ?>">SET TANGGAL</a>
            <a href="<?= base_url('index.php/Adm_ctrl/logout') ?>"><i class="fas fa-sign-out-alt"></i>LOGOUT</a>
        </div>

        <div class="desainbawah1">
            <!-- Tab links -->
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">PENDAFTAR</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">DITERIMA</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">REVISI</button>
            </div>

            <!-- Tab content -->
            <div id="London" class="tabcontent">
                <div>
                    <table border="1" align="CENTER" class="desain_table">
                        <tr align="CENTER">
                            <th>ID BUKTI</th>
                            <th>GAMBAR</th>
                            <th>NOMER WA</th>
                            <th>PILIHAN</th>
                        </tr>
                        <?php
                        $view_bukti = $bukti_pembayaran->result_array();
                        foreach ($view_bukti as $view_table) {
                        ?>
                            <tr align="CENTER">
                                <td><?= $view_table['id_bukti'] ?></td>
                                <td>
                                    <img src="<?= base_url() . 'asset/images/' . $view_table['bukti_transfer'] ?>" width="100" height="100">

                                </td>
                                <td><?= $view_table['no_wa'] ?></td>
                                <td>
                                    <dl>
                                        <dt style="margin: 10px;">
                                            <a href="<?php echo base_url('index.php/Adm_ctrl/validasi_bukti/') . $view_table['id_bukti'] ?>" class="desain_tombol">PROSES</a>
                                        </dt>
                                        <dt>
                                            <a href="<?php echo base_url('index.php/Adm_ctrl/lihat/') . $view_table['id_bukti'] ?>" class="desain_tombol">LIHAT</a>
                                        </dt>
                                    </dl>

                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </table>
                </div>
            </div>

            <div id="Paris" class="tabcontent">
                <table border="1" align="CENTER" class="desain_table">
                    <tr align="CENTER">
                        <th>ID validasi</th>
                        <th>BUKTI</th>
                        <th>STATUS</th>
                        <th>PILIHAN</th>
                    </tr>
                    <?php
                    $view_bukti = $validasi_bukti->result_array();
                    foreach ($view_bukti as $view_table) {
                    ?>
                        <tr align="CENTER">
                            <td><?= $view_table['id_valbuk'] ?></td>
                            <td>
                                <!--<img src="<?= base_url() . 'asset/images/' . $view_table['bukti_transfer'] ?>" width="100" height="100">-->

                            </td>
                            <td><?= $view_table['stts'] ?></td>
                            <td>
                                <dl>
                                    <dt style="margin: 10px;">
                                        <a href="<?php echo base_url('index.php/Adm_ctrl/validasi_bukti/') . $view_table['id_bukti'] ?>" class="desain_tombol">PROSES</a>
                                    </dt>
                                    <dt>
                                        <a href="<?php echo base_url('index.php/Adm_ctrl/lihat/') . $view_table['id_bukti'] ?>" class="desain_tombol">LIHAT</a>
                                    </dt>
                                </dl>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>

            <div id="Tokyo" class="tabcontent">
                <table border="1" align="CENTER" class="desain_table">
                    <tr align="CENTER">
                        <th>ID BUKTI</th>
                        <th>GAMBAR</th>
                        <th>NOMER WA</th>
                        <th>PILIHAN</th>
                    </tr>
                    <?php
                    $view_bukti = $bukti_pembayaran->result_array();
                    foreach ($view_bukti as $view_table) {
                    ?>
                        <tr align="CENTER">
                            <td><?= $view_table['id_bukti'] ?></td>
                            <td><img src="<?= base_url() . 'asset/images/' . $view_table['bukti_transfer'] ?>" width="100" height="100"></td>
                            <td><?= $view_table['no_wa'] ?></td>
                            <td>
                                <dl>
                                    <dt style="margin: 10px;">
                                        <a href="<?php echo base_url('index.php/Adm_ctrl/validasi_bukti/') . $view_table['id_bukti'] ?>" class="desain_tombol">PROSES</a>
                                    </dt>
                                    <dt>
                                        <a href="<?php echo base_url('index.php/Adm_ctrl/lihat/') . $view_table['id_bukti'] ?>" class="desain_tombol">LIHAT</a>
                                    </dt>
                                </dl>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>

            </div>


        </div>



        <script language="javascript" src=" <?= base_url('asset/js/design.js') ?>"></script>
</body>

</html>