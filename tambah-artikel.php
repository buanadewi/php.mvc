<?php include "koneksiMVC.php"?>
<?php
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = mysqli_query($con, "DELETE FROM pdf_data WHERE id='$id'");
    header("Location: tambah-artikel.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>
	<style>
            /* style.css */

    *{
        margin: 0; padding: 0; box-sizing: border-box;
    }
    body{
        justify-content: center;
        align-items: center;
    }

    /* Form */

    .form-input{
        max-width: 400px;
    }

    /* Styling HTML Table */

    table{
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 10px;
        margin: auto;
    }
    th,td{
        border: 1px solid #dfdede;
        padding: 8px 25px;
        justify-content: center;
        text-align: center;
        align-items: center;
        color: grey;
    }
    th{
        text-transform: uppercase;
        font-weight: 900;
    }
    td{ font-size: 1.2rem; }

    </style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<div class="form-input py-2">
		<div class="form-group">
		<input type="text" class="form-control" name="name"
				placeholder="Masukkan Judul Artikel" required>
		</div>								
		<div class="form-group">
		<input type="file" name="pdf_file"
				class="form-control" accept=".pdf"
				title="Upload PDF"/>
		</div>
		<div class="form-group">
		<input type="submit" class="btnRegister"
				name="submit" value="Submit">
		</div>
</div>
</form>

<?php
    include('koneksiMVC.php');
	if (isset($_POST['submit'])) {

		$name = $_POST['name'];

		if (isset($_FILES['pdf_file']['name']))
		{
		$file_name = $_FILES['pdf_file']['name'];
		$file_tmp = $_FILES['pdf_file']['tmp_name'];

        $target_path = "pdf/";
        $target_path = $target_path . basename($_FILES['pdf_file']['name']);
    
        if(move_uploaded_file($_FILES['pdf_file']['tmp_name'], $target_path)) {
            echo "The file ". basename( $_FILES['pdf_file']['name']). " has been uploaded";
        } else {
            echo "There was an error uploading the file, please try again!";
        }

		$insertquery = $mysqli->query("INSERT INTO pdf_data(username,filename) VALUES('$name','$file_name')");
		}
		else
		{
		?>
			<div class=
			"alert alert-danger alert-dismissible
			fade show text-center">
			<a class="close" data-dismiss="alert"
				aria-label="close">×</a>
			<strong>Failed!</strong>
				File must be uploaded in PDF format!
			</div>
		<?php
		}
	}
?>

<div class="container" style="margin-top:30px">
		<div class="row">		
			<div class="col-lg-6 col-md-6 col-12">
			<div class="card">
				<div class="card-header text-center">
				<h4>Records from Database</h4>
				</div>
				<div class="card-body">
				<div class="table-responsive">
					<table>
						<thead>
							<th>ID</th>
							<th>Nama Artikel</th>
							<th>FileName</th>
                            <th>Delete</th>
						</thead>
						<tbody>
						<?php
							$selectQuery = "select * from pdf_data";
							$squery = $mysqli->query("SELECT * FROM pdf_data");

							while (($result = mysqli_fetch_assoc($squery))) {
						?>
						<tr>
							<td><?php echo $result['id']; ?></td>
							<td><?php echo $result['username']; ?></td>
							<td><?php echo $result['filename']; ?></td>
                            <td colspan="2">
                            <?php
							$sql = "select id, username from pdf_data order by id asc";
							$res = mysqli_query($con, $sql);
							while ($data = mysqli_fetch_array($res)) {
							?>
								<div align="justify">
									<span><?php echo $data["username"]; ?></span>
									<a href="tambah-artikel.php?delete=<?php echo $data["id"] ?>"><button class="button">Delete</button></a>
									<hr>
								</div>
							<?php
							}
							?>

                            </td>
						</tr>
						<?php
							}
						?>
						</tbody>
					</table>			
					</div>
				</div>
			</div>
		</div>
	</div>
	<li><a href="profileee.php">Home</a></li>
</body>
</html>