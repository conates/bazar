<td colspan="3">
  <?php echo __('%%id%% - %%nombre%% - %%precio_venta%%', array('%%id%%' => link_to($producto->getId(), 'producto_edit', $producto), '%%nombre%%' => $producto->getNombre(), '%%precio_venta%%' => $producto->getPrecioVenta()), 'messages') ?>
</td>
