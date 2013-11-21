<!DOCTYPE html>
<html>
	<head>
		<title>Pencarian Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #F5F5F5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
</head>
    <body>
    	<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">   
        	Nama <input type="text" name="nama" size=40 value="<?php echo $_GET['nama']; ?>" />   <input type="submit" value="CARI" /> 
        </form>  
		<?php 
		if (isset($_GET['nama'])) 
		{   
			require_once './Koneksi.php';  
  			// Kata kunci pencarian   
  			$key = $_GET['nama'];  
  			// Variabel $sql berisi pernyataan SQL pencarian   
			$sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$key%'";  
  			$res = mysql_query($sql);  
 			if ($res) 
			{     
				$num = mysql_num_rows($res);     
				if ($num) 
				{       
					echo 'Ditemukan ' . $num . ' row(s)'; 
		?> 
      				<table border="1" cellspacing="1" cellpadding="5">       
						<tr>         
							<th>#</th>         
							<th width=100>NIM</th>         
							<th width=150>Nama</th>         
							<th>Alamat</th>       
						</tr> 
		<?php 
						$i = 1;       
						while ($row = mysql_fetch_row($res)) 
						{ 
		?>         
                            <tr>           
                                <td><?php echo $i;?></td>           
                                <td><?php echo $row[0];?></td>
                                <td><?php echo $row[1];?></td>           
                                <td><?php echo $row[2];?></td>
                            </tr>
		<?php         
							$i++;       
						}       
		?>       
        			</table>     
		<?php     
				} 
				else 
				{       
					echo 'Data Tidak Ditemukan';     
				}   
			}  
		} 
		else 
		{   
			echo 'Masukkan kata kunci pencarian'; 
		}  
		?>
    </body>
</html>