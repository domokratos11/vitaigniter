<table class="table table-bordered">
    <thead>
    <th>Nombre de usuario</th>
    <th>Privilegios</th>
    <th>Acción</th>
    </thead>
    <tbody>
        <?php
            foreach($usuarios->result() as $usuario):
                ?>
        <tr>
            <td><?= $usuario->nombre_usuario?></td>
            <td><?= ($usuario->adminrights==1)?"Administrador":"Usuario estandar" ?></td>
            <td><a href="<?= base_url()."usuarios/editar_usuario/".$usuario->id?>">Editar</a> 
            -<a href="<?= base_url()."usuarios/eliminar_usuario/".$usuario->id?>">Eliminar</a>
            </td>
        </tr>
            <?php
            endforeach;
        ?>
    </tbody>
</table>