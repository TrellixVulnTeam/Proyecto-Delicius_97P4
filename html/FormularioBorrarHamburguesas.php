<?php  include '../html/header.php';

?>
<div class="contenedor-formulario-eliminar">
    <div class="eliminar-formulario">
        <div class="eliminar-imagen">
            <div class="eliminar-overlay">
                <h3 class="eliminar-subtitulo">¿Qué Deseas Eliminar?</h3>
            </div>

                <form action="" method="GET" class="formulario eliminar-comida-formulario">
                    <label for="nombre">nombre</label>
                    <select name="hamburguesa" id="hamburguesa">
                                <option disabled="disabled" selected>--Seleccionar--</option>
                        <?php foreach($this->hamburguesas as $comida): ?>
                                <option value="<?=$comida['idhamburguesa']?>">Id: <?=$comida['idhamburguesa']?> Nombre: <?=$comida['nombre']?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="submit" value="Eliminar" class="formulario-submit">
                </form>
                
        </div>
    </div>
</div>  

<?php
    include '../html/footer.php';
?>