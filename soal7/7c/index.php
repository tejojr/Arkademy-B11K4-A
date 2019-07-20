<?php
include 'template/header.php';
include 'template/navbar.php';
include 'inc/config.php';
?>

<!-- isi -->
<div class="container">
    <!-- button tambah -->
    <p align="right"><a class="btn btn-warning" id="btnTambah" href="#" data-toggle="modal" data-target="#modalTambah" role="button"><span class="text-light">ADD</span></a></p>
    <div class="row" style="margin-top: 30px">
        <div class="col-md-12">
            <table id="data" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Work</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

$no = 1;
$sql = "SELECT name.id as id, name.nama as name, work.name as work, salary.salary as salary from name inner join work on work.id = name.id_work inner join salary on salary.id = name.id_salary";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)) {
	?>
                       <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td align="center">
                            <a href="index.php?id=<?php echo $row['id'] ?>" class='btn btn-danger delete-link' ><i class="fa fa-trash" aria-hidden="true"></i></a>

                            <button type="button" id="<?php echo $row['id'] ?>" class="view_data btn btn-default btn-md" onclick="edit()"><i class="fa fa-edit fa-sm"></i></button>


                        </td>
                    </tr>
                    <?php $no++;}?>
                </tbody>
            </table>
            <?php include "inc/config.php";
if (isset($_GET['id'])):
	$id = $_GET['id'];
	$sql = "DELETE FROM name WHERE id=$id";
	$query = mysqli_query($conn, $sql);

	if ($query):
		echo "<script>location.href='index.php'</script>";
	else:
		echo "<script>alert('Gagal')</script>";
	endif;
endif;
?>
    </div>
</div>

<!-- Modal tambah data -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> ADD Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form id="formTambah" method="POST" action="insert.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required="true">
                    </div>
                    <div class="form-group">
                        <label>Work</label>
                        <select class="form-control" id="workSelect" name="work" required>
                            <?php
$sql = "SELECT * from work";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	?>
                               <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                           <?php }?>

                       </select>
                   </div>
                   <div class="form-group">
                    <label>Salary</label>
                    <select class="form-control" id="salarySelect" name="salary" required>
                     <?php
$sql = "SELECT * from salary";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	?>
                       <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                   <?php }?>

               </select>
           </div>


       </div>
       <div class="modal-footer">
        <button type="submit" class="btn btn-warning btn-submit" id="submit" name="submit"><span class="text-light">Add</span></button>
    </div>
</form>
</div>
</div>
</div>

<!-- modal ubah data -->
<div id="modalEdit" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">EDIT DATA</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="data-karyawan">
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'template/footer.php';
?>

