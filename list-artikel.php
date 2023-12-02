<?php include('koneksiMVC.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
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
        padding: 8px 50px;
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

    .card{
        width: 1000px;
    }

    </style>
</head>
<body>
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
                            <th>View</th>
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
                            <td>
                            <form action="baca-artikel.php" method="post">

                            <br>

                            <button>READ MORE</button>

                            </form>

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
    <form action="profileee.php" method="post">

                            <br>

                            <button>HOME</button>

                            </form>
</body>
</html>
