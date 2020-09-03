<?php
$this->title = "ระบบการเงิน/ใบแจ้งหนี้ Invoice Maker";
?>
<div class="financial-default-index">
    <h1><?php //  $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
</div>



<div class="row">
<div class="col-4">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="คำค้น">
  <div class="input-group-prepend">
    <button class="btn btn-outline-primary" type="button"><i class="fas fa-search"></i> ค้นหา</button>
    
  </div>
</div>
</div>
<div class="col-8">
<button type="button" class="btn btn-default"><i class="fas fa-print"></i> พิมพ์</button>
<button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> สร้างใบเสนอราคา</button>
  <button type="button" class="btn btn-secondary"><i class="fas fa-plus"></i> สร้างใบส่งของ</button>
  <button type="button" class="btn btn-success"><i class="fas fa-plus"></i> สร้างใบแจ้งหนี้</button>
  <button type="button" class="btn btn-info"><i class="fas fa-plus"></i> สร้างใบเสร็จ</button>
  <button type="button" class="btn btn-warning"><i class="fas fa-plus"></i> สร้างใบกำกับ</button>    
</div>
</div>


<div class="card">
              <div class="card-header">
                <h3 class="card-title">Striped Full Width Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>เลขที่เอกสาร</th>
                      <th>ประเภทเอกสาร</th>
                      <th style="width: 40px">วันที่สร้าง</th>
                      <th style="width: 40px">ชื่อลูกค้า</th>
                      <th style="width: 40px">เบอร์โทรศัพท์ลูกค้า</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td>
                      <td><span class="badge bg-danger">55%</span></td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Clean database</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">70%</span></td>
                      <td><span class="badge bg-warning">70%</span></td>
                      <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Cron job running</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-primary">30%</span></td>
                      <td><span class="badge bg-primary">30%</span></td>
                      <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                      <td><span class="badge bg-success">90%</span></td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
