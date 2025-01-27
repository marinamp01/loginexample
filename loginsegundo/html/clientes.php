<h1>Listado de clientes</h1>

<table <table class="table table-success table-striped-columns border-success">
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Teléfono</td>
        <td>Email</td>
    </tr>
    <?php foreach($clientes as $cliente): ?>

    <tr>
        <td><?php echo $cliente['id'] ?></td>
        <td><?php echo $cliente['nombre'] ?></td>
        <td><?php echo $cliente['apellidos'] ?></td>
        <td><?php echo $cliente['telefono'] ?></td>
        <td><?php echo $cliente['email'] ?></td>
    </tr>
<?php endforeach; ?>
</table>
