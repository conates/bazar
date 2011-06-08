<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($producto->getId(), 'producto_edit', $producto) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombre">
  <?php echo $producto->getNombre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_precio_venta">
  <?php echo $producto->getPrecioVenta() ?>
</td>
