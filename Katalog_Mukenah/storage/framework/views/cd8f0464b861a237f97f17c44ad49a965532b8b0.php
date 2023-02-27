<!DOCTYPE html>
<html>
	<head>
		<title>Katalog Mukenah</title>
		<link type="text/css" rel="stylesheet" href="tampilan.css">
	</head>
    <body>
        <?php
            if (DB::connection()->getPdo()){
                echo "Koneksi Berhasil".DB::connection()->getDatabaseName();
            }
        ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\Katalog_Mukenah\resources\views/koneksi.blade.php ENDPATH**/ ?>