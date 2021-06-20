<?php
include "config/connection.php";
include "library/controller.php";

$go = new controller();
$tabel = "izone";
$redirect = "?menu=izmem";
@$where = "id = $_GET[id]";
@$tempat = "foto"; //tempat folder foto di dalam project review

if (isset($_POST['simpan'])) {
    $foto = $_FILES['foto'];
    $upload = $go->upload($foto, $tempat);
    @$field = array('nama'=>$_POST['mem'],
                'stgname'=>$_POST['stgname'],
                'bday'=>$_POST['bday'],
                'nation'=>$_POST['nation'],
                'foto'=>$upload);
    $go->simpan($con, $tabel, $field, $redirect);
}

if (isset($_GET['hapus'])) {
    $go->hapus($con, $tabel, $where, $redirect);
}
if(isset($_GET['edit'])){
    $edit = $go->edit($con, $tabel, $where);
}
if (isset($_POST['ubah'])) {
    $foto = $_FILES['foto'];
    $upload = $go->upload($foto, $tempat);
    if (empty($_FILES['foto'] ['name'])) {
        @$field = array('nama'=>$_POST['mem'],
                    'stgname'=>$_POST['stgname'],
                    'bday'=>$_POST['bday'],
                    'nation'=>$_POST['nation']);
        $go->ubah($con, $tabel, $field, $where, $redirect);
    }
    else {
        @$field = array('nama'=>$_POST['mem'],
                    'stgname'=>$_POST['stgname'],
                    'bday'=>$_POST['bday'],
                    'nation'=>$_POST['nation']);
        $go->ubah($con, $tabel, $field, $where, $redirect);
    }
}
?>

<div class="container mt-5 card">
    <div class="card-body">
        <h3 class="card-title m-3">Add Member</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <table align="center">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input class="form-control" type="text" name="mem" value = "<?php echo @$edit['nama']?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Stage Name</label>
                    <input class="form-control" type="text" name="stgname" value = "<?php echo @$edit['stgname']?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Birthday Date</label>
                    <input class="form-control" type="text" name="bday" value = "<?php echo @$edit['bday']?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nation</label>
                    <input class="form-control" type="text" name="nation" value = "<?php echo @$edit['nation']?>" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" name="foto">
                </div>   
                <tr>
                    <td></td>
                    <td></td>
                    <td><?php if(@$_GET['id']==""){ ?>
                            <input class="btn btn-outline-primary" type="submit" name="simpan" value="SIMPAN">
                        <?php }else{ ?>
                            <input class="btn btn-outline-success" type="submit" name="ubah" value="UBAH">
                        <?php } ?></td>
                </tr>   
            </table>
        </form>
    </div>
</div>

<div class="container">
    <table align="center" border="2" class="display mt-4 table table-striped table-hover table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Stage Name</th>
                <th>Birthday Date</th>
                <th>Nation</th>
                <th>Foto</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data = $go->tampil($con, $tabel);
                $no = 0;
                if($data==""){
                    echo "<tr><td colspan='4'>No Record</td></tr>";
                }else{

                foreach($data as $r){
                    $no++
            ?>
            <tr>
                <td><?php echo $r['nama'] ?></td>
                <td><?php echo $r['stgname'] ?></td>
                <td><?php echo $r['bday'] ?></td>
                <td><?php echo $r['nation'] ?></td>
                <td><img src="foto/<?php echo $r['foto']?>"width="50" height="70"></td>
                <td><a href="?menu=izmem&hapus&id=<?php echo $r['id'] ?>" onclick="return confirm('Hapus Data?')">HAPUS</a></td>
                <td><a href="?menu=izmem&edit&id=<?php echo $r['id'] ?>">EDIT</a></td>
            </tr>
            <?php } } ?>
        </tbody>
    </table>
</div>