<?php
include_once "inc/config.php";
if ($_POST['id']) {
	$id = $_POST['id'];
	$sql = "SELECT * from name where id = $id";
	$query = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($query)) {
		?>
        <form action="edit.php" method="POST">
            <input type="hidden" name="id" class="form-control" id="idInput" value="<?php echo $row['id'] ?>" name="nama">
            <div class="form-group">
                <input type="text" name="nama" class="form-control" id="nameInput" value="<?php echo $row['nama'] ?>" name="nama">
            </div>
            <div class="form-group">
                <select class="form-control" id="workSelect" name="pekerjaan" required>
                    <?php
$sql = "SELECT * from work";
		$result = mysqli_query($conn, $sql);
		while ($row1 = mysqli_fetch_array($result)) {
			?>
                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1] ?></option>
                    <?php
}
		?>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" id="salarySelect" name="gaji" required>
                    <?php
$sql = "SELECT * from salary";
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result)) {
			?>
                        <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                    <?php
}
		?>
                </select>
            </div>
            <button type="submit" class="btn btn-warning text-light btn-md" style="float: right;">EDIT DATA</button>
        </form>
    <?php

	}
}
?>