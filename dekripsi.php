<?php
session_start();
include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>File Enkripsi & Dekripsi AES</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- main CSS -->
    <link rel="stylesheet" type="text/css" href="css/assetmain.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar">
                        <ul class="metismenu" id="menu1">
                            <li>
                                <a class="nav-link" href="enkripsi.php" aria-expanded="false"><i class="icon nalika-unlocked icon-wrap"></i> <span class="text">Enkripsi</span></a>
                            </li>
                            <li>
                                <a class="nav-link" href="dekripsi.php" aria-expanded="false"><i class="icon nalika-unlocked icon-wrap"></i> <span class="text">Dekripsi</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <section class="breadcome-list">
            <div class="tabelnya">
                <div class="col-md-12">
                    <div class="tablenya" >
                    <table id="file" class="table">
                        <thead>
                            <tr>
                            <td width="10%"><strong>No</strong></td>
                            <td width="40%"><strong>Nama File Sumber</strong></td>
                            <td width="40%"><strong>Nama File Enkripsi</strong></td>
                            <td width="10%"><strong>Aksi</strong></td>
                            </tr>
                        </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            $query = mysqli_query($connect,"SELECT * FROM file");
                            while ($data = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data['file_name_source']; ?></td>
                                <td><?php echo $data['file_name_finish']; ?></td>
                                </td>
                                <td>
                                <?php
                                $a = $data['id_file'];
                                if ($data['status'] == 1) {
                                    echo '<a href="decrypt-file.php?id_file='.$a.'" class="btn btn-primary">Dekripsi File</a>';
                                }elseif ($data['status'] == 2) {
                                    echo '<a href="enkripsi.php" class="btn btn-success">Enkripsi File</a>';
                                }else {
                                    echo '<a href="dekripsi.php" class="btn btn-danger">Data Tidak Diketahui</a>';
                                }
                                ?>

                                </td>
                            </tr>
                            <?php
                            $i++;
                            } ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
</body>
</html>