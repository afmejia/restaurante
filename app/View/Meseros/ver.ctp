<h2>Detalle del meser@ <?php echo $mesero['Mesero']['nombre']; ?></h2>

<p><strong>DNI: </strong><?php echo $mesero['Mesero']['dni']; ?></p>
<p><strong>Teléfono: </strong><?php echo $mesero['Mesero']['telefono']; ?></p>
<p><strong>Creado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $mesero['Mesero']['created']); ?></p>
<p><strong>Modificado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $mesero['Mesero']['modified']); ?></p>

<?php
echo $this->Html->link('Volver a la lista de meseros', array('controller' => 'meseros', 'action' => 'index'));
 ?>
