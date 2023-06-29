<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kemsis</title>
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
        <section class="breadcome-list">
            <form class="form-horizontal" method="post" action="encrypt-process.php" enctype="multipart/form-data">
            <legend >Form Enkripsi</legend>
            <div class="form-group">
                <label class="col-lg-2 control-label"  for="inputFile">File</label>
                    <div class="col-lg-4">
                        <input class="form-control" id="inputFile" placeholder="Input File" type="file" name="file" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label"  for="inputPassword">Key</label>
                    <div class="col-lg-4">
                        <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="pwdfile" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label" for="textArea"></label>
                    <div class="col-lg-2">
                        <input type="submit" name="encrypt_now" value="Enkripsi File" class="btn">
                    </div>
            </div>
        </form>
      </section>
    </div>
</body>
</html>