<?php
$edit_data = $this->db->get_where('schedules', array('horario_id' => $param2))->result_array();
foreach ($edit_data as $row) { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="entypo-plus-circled"></i>
                        <?php echo get_phrase('Editar Horario'); ?>
                    </div>
                </div>

                <div class="panel-body">

                    <?php echo form_open(site_url('admin/horario/edit/') . $param2, array(
                        'class' => 'form-horizontal form-groups-bordered validate',
                        'enctype' => 'multipart/form-data'
                    )); ?>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Hora de Entrada'); ?></label>

                        <div class="col-sm-5">
                            <input type="time" class="form-control" name="time_in" required value="<?php echo $row['time_in']; ?>" autofocus />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Hora de salida'); ?></label>

                        <div class="col-sm-5">
                            <input type="time" class="form-control" name="time_out" min="0" required value="<?php echo $row['time_out']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo get_phrase('edit'); ?></button>
                        </div>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>