<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title" >
                    <i class="entypo-plus-circled"></i>
                    <?php echo get_phrase('Agregar Horario'); ?>
                </div>
            </div>
            <div class="panel-body">

                <?php echo form_open(site_url('admin/horario/create'), array('class' => 'form-horizontal form-groups-bordered', 'enctype' => 'multipart/form-data')); ?>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Hora Entrada'); ?></label>

                    <div class="col-sm-5">
                        <input type="time" class="form-control" name="time_in" value="" required autofocus />
                    </div>
                </div>
                
                <span id="designation">
                    <br>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Hora Salida'); ?></label>

                        <div class="col-sm-5">
                            <input type="time" class="form-control" name="time_out" value="" required />
                        </div>
                    </div>
                </span>
                
                
            

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-info"><?php echo get_phrase('submit'); ?></button>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script>
    
    $('#designation_input').hide();
    
    // CREATING BLANK DESIGNATION INPUT
    var blank_designation = '';
    $(document).ready(function () {
        blank_designation = $('#designation_input').html();
    });

    function add_designation()
    {
        $("#designation").append(blank_designation);
    }

    // REMOVING DESIGNATION INPUT
    function deleteParentElement(n) {
        n.parentNode.parentNode.parentNode.removeChild(n.parentNode.parentNode);
    }

</script>