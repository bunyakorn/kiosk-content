<style>
    img.img-avatar {
        width: 40px;
        height: 40px;
        border-radius: 5px;
    }
</style>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">สรุปข้อมูลของผู้ใช้งานระบบ</h3>
            </div>
            <div class="card-body">
                <?php
$dstatus = $datauser->status;
if ($dstatus == "admin") {
    ?>
                <div class="data-user">
                    <table class="table table-borderless table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">email</th>
                                <th scope="col">Department</th>
                                <th scope="col">Avatar</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
foreach ($data[1] as $row):
    ?>
                            <tr>
                                <td><?php echo $row->fullname ?></td>
                                <td><?php echo $row->email ?></td>
                                <td><?php echo $row->department ?></td>
                                <td><img src="assets/images/users/avatars/<?php echo $row->avatars ?>" class="img-avatar"></td>
                                <td><?php echo $row->status ?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
                <?php }?>
                <div class="jumbotron">
                    <h1 class="display-3">สวัสดีผู้ใช้งานระบบประชาสัมพันธ์</h1>
                    <p class="lead">เราชาว อก. ร่วมด้วยช่วยกัน สร้างสรรค์ผลงานนวัตกรรมและสื่อประชาสัมพันธ์ภาพลักษณ์
                        วิถีของ คณะอุตสาหกรรมเกษตร ให้ชาวมหาวิทยาลัยเกษตรศาสตร์และบุคคลภายนอกให้ได้รับทราบ</p>
                    <hr class="my-4">
                    <div class="data-user">

                    </div>
                    <p>ระบบอยู่ในช่วงการพัฒนาเพื่อให้สามารถใช้งานได้อย่างมีประสิทธิภาพ</p>
                    <p class="lead m-0">
                        <a class="btn btn-instagram btn-lg" href="javascript:void(0);" role="button">Testing</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row close -->

<!-- Modal -->
<div class="modal fade" id="formAddDataUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form action="<?php echo BASEURL; ?>/profileAccount/addUser" method="POST" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data User </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="add-avavars">
            <h3 class="mb-0 mx-4 card-title text-cyan">อัพโหลดรูปภาพประจำตัว</h3>
            <div class="card-body">
                <input type="file" name="file_avatar" id="file_avatar" class="dropify" required/>
            </div>
            <!-- fix -->
            <div class="mx-4">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">username</label>
                        <input type="text" class="form-control" id="username" name="username" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fullnmae">Fullname</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="firstname && lastname" required>
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <select id="department" name="department" class="form-control" required >
                        <option selected>Choose...</option>
                        <option value="Office Station">สำนักงานเลขานุการ</option>
                        <option value="pkmt">เทคโนโลยีการบรรจุ และวัสดุ</option>
                        <option value="fst">วิทยาศาสตร์และเทคโนโลยีการอาหาร</option>
                        <option value="biot">เทคโนโลยีชีวภาพ</option>
                        <option value="tts">วิทยาการสิ่งทอ</option>
                        <option value="ait">เทคโนโลยีอุตสาหกรรมเกษตร</option>
                        <option value="pd">พัฒนาผลิตภัณฑ์</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Status</label>
                        <select id="inputState" class="form-control" name="status" required >
                            <option selected>Choose...</option>
                            <option>user</option>
                            <option>admin</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>

