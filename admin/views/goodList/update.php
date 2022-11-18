<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>信息</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">
        <?php  $form = $this->beginWidget('CActiveForm', get_form_list());?>
        <div class="box-detail-tab">
            <ul class="c">
                <li class="current">基本信息</li>
            </ul>
        </div><!--box-detail-tab end-->
        <div class="box-detail-bd">
            <div style="display:block;" class="box-detail-tab-item">

                <table>
                    <tr>
                        <td width="10%"><?php echo $form->labelEx($model, 'code'); ?></td>
                        <td width="10%">
                            <?php echo $form->textField($model, 'code', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'code', $htmlOptions = array()); ?>
                        </td>
                        <td width="10%"><?php echo $form->labelEx($model, 'value'); ?></td>
                        <td width="10%">
                            <?php echo $form->textField($model, 'value', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'value', $htmlOptions = array()); ?>
                        </td>
                        <td width="10%"><?php echo $form->labelEx($model, 'size'); ?></td>
                        <td width="10%">
                            <?php echo $form->textField($model, 'size', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'size', $htmlOptions = array()); ?>
                        </td>
                        <td width="10%"><?php echo $form->labelEx($model, 'price'); ?></td>
                        <td width="10%">
                            <?php echo $form->textField($model, 'price', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'price', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                </table>

            </div><!--box-detail-tab-item end   style="display:block;"-->

        </div><!--box-detail-bd end-->

        <div class="box-detail-submit"><button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button><button class="btn" type="button" onclick="we.back();">取消</button></div>

        <?php $this->endWidget(); ?>
    </div><!--box-detail end-->
</div><!--box end-->
