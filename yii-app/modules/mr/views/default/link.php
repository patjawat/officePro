<?php
use yii\helpers\Html;
?>
<div class="d-flex bd-highlight mb-3">
  <div class="p-2 bd-highlight">
<a name="" id="" class="btn btn-primary" href="#" role="button">รายการ</a>
<a name="" id="" class="btn btn-secondary" href="#" role="button">จองห้องหระชุม</a>
  
  </div>
  <div class="ml-auto p-2 bd-highlight">
  <?=Html::a('ตั้งค่า',['/mr/meeting-room'], ['class' => 'btn btn-secondary'])?>
<div class="btn-group">
                    <button type="button" class="btn btn-secondary">ตั้งค่า</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-1px, 37px, 0px);">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                      </div>
                    </button>
                  </div>
  </div>
</div>
