<!DOCTYPE html>
<html>
	<head>
		<title>Limitasi Data</title>
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
    	<form method="post" action="<?php $_SERVER['PHP_SELF'];?>" name="frm_select">
            Tampilkan   
            <select name="row_page" onchange="document.forms.frm_select.submit();">     
              	<option>-- pilih --</option>     
                <option <?php if($_POST['row_page']=='5') echo "selected"; ?> value="5">5</option>     
                <option <?php if($_POST['row_page']=='10') echo "selected"; ?> value="10">10</option>     
                <option <?php if($_POST['row_page']=='20') echo "selected"; ?> value="20">20</option>     
                <option <?php if($_POST['row_page']=='50') echo "selected"; ?> value="50">50</option>     
                <option <?php if($_POST['row_page']=='100') echo "selected"; ?> value="100">100</option>   
            </select> 
            baris per halaman.   
        </form>  
		<?php 
		if (isset($_POST['row_page']) && $_POST['row_page']) 
		{   
			require_once './Koneksi.php';  
  			// Batas baris data   
			$row = $_POST['row_page'];
			// LENGKAPI
			$sql = "SELECT *  FROM mahasiswa LIMIT $row";   
			// Variabel $sql berisi pernyataan SQL retrieve dg limitasi  
  			$res = mysql_query($sql);  
			if ($res) 
			{     
				if (mysql_num_rows($res)) 
				{ 
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
		?>
    </body>
</html>