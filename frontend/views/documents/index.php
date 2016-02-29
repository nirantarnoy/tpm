<?php
$this->title = 'Submenus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
            <div class="col-lg-12" style="text-align:left;">
               <div class="page-header">
                   <h1><i class="glyphicon glyphicon-book" style="color: green"></i> <?= $modelheader->name;?></h1>
                </div>
            </div>
         
    </div>
    <div class="row" style="margin-top: 20px;">
<!--            <div class="col-lg-6">
                <div class="media">
                    <div class="media-left">
                       <div style="font-size:25px;color:#fff; height:50px;width:50px;background-color:#fff;vertical-align:middle;text-align:center;line-height:50px;">
                           <div class="thumbnail">
                               <img src="../../uploads/photo/meteor-logo.png" alt="">
                           </div>
                       </div>
                       
                    </div>
                    <div class="media-body">
                        <a href="showreport.aspx?repid=1" target="_blank" style="text-decoration:none;">
                             <h4 class="media-heading"></h4>
                         <p>รายงานยอดขายตาม INVOICE แยกตามผู้ขาย</p>
                        </a>
                       
                    </div>
                </div>
            </div>-->

     <?php if(count($model)>0):?>
           <?php foreach ($model as $data):?> 
            <div class="col-sm-3">
              <div class="thumbnail">
                  <img src="../../uploads/photo/<?=$data->photo;?>" alt="">
                <div class="caption">
                    <?php if($data->document !=''):?>
                            <a href="../../uploads/doc/<?=$data->document;?>" style="text-decoration: none;">
                                <h4><?=$data->name;?></h4>
<!--                          <p>เอกสารและข้อมูลเครื่อง Model</p>-->
                            </a>
                    <?php else:?>
                            <a href="index.php?r=documents/showdoc&id=<?=$data->id;?>" style="text-decoration: none;">
                                <h4><?=$data->name;?></h4>
<!--                          <p>เอกสารและข้อมูลเครื่อง Model</p>-->
                            </a>
                    <?php endif;?>
                    
                  
                 </div>
              </div>
            </div>
            <?php endforeach;?>
     <?php endif;?>      
    </div>
</div>
