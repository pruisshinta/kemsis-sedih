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

            <section class="breadcome-list">
                        <div class="card-body">
                            <?php
                            $id_file = $_GET['id_file'];
                            $query = mysqli_query($connect,"SELECT * FROM file WHERE id_file='$id_file'");
                            $data2 = mysqli_fetch_array($query);
                            ?>
                            <h3 align="center" style="">Dekripsi File <i style=""><?php echo $data2['file_name_finish'] ?></i></h3><br>
                            <form class="form-horizontal" method="post" action="decrypt-process.php">
                            <div class="table-responsive">
                            <table class="tabele" style="">
                                <tr>
                                  <td>Nama File Sumber</td>
                                  <td>:</td>
                                  <td><?php echo $data2['file_name_source']; ?></td>
                                </tr>
                                <tr>
                                  <td>Nama File Enkripsi</td>
                                  <td>:</td>
                                  <td><?php echo $data2['file_name_finish']; ?></td>
                                </tr>
                                <tr>
                                  <td>Masukkan Password Untuk Mendekrip</td>
                                  <td></td>
                                  <td>
                                  <div class="col-md-6">
                                      <input type="hidden" name="fileid" value="<?php echo $data2['id_file'];?>">
                                  <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="pwdfile" required><br>
                                  <input type="submit" name="decrypt_now" value="Dekripsi File" class="btn">
                                  </div>
                                </td>
                                </tr>
                            </table>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        <!-- <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <h2 style="color:#fff;">Enkripsi File</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#file').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": true,
          "order": [0, "asc"]
        });
        });
        </script>
    <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/datatables/js/jquery.dataTables.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>