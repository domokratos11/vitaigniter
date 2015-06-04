<?php
    $nombre= array(
        'name' => 'nombre_usuario',
        'placeholder'=> 'Nombre de usuario',
        'class' => 'form-control'
    );
    
    $adminright= array(
        '1' => 'Administrador',
        '0' => 'Usuario estandar'
    );
    
    $password = array(
        'name'=> 'password',
        'class' => 'form-control'
        
    );
    $password2 = array(
        'name'=> 'password2',
        'class' => 'form-control'
    );
    $enviar= array(
        'class'=> 'btn btn-default',
        'content'=> 'Actualizar',
        'type'=>'submit'
    );
?>

<?=form_open(base_url().'usuarios/guardar_usuario/0'); ?>
    <div class="form-group">
        <label for="nombre_usuario">Nombre de usuario</label>
        <?=form_input($nombre);?>
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <?= form_password($password); ?>
    </div>
    <div class="form-group">
        <label for="password">Repetir Contraseña</label>
        <?= form_password($password2);?>
    </div >
    <div class="form-group">
        <label for="adminrights">Nivel de usuario</label> 
        <?= form_dropdown('adminrights',$adminright,'1','class=form-control');?>
    </div>
        <?= form_button($enviar);?>
<?=form_close();?>


    
 