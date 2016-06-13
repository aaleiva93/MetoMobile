create view v_pedidos as

select pedidos.*, tabla_de_tablas.Valor estado, conductor.fullname
from pedidos
inner join
conductor on conductor.id=pedidos.id_conductor
inner join
tabla_de_tablas on tabla_de_tablas.id=pedidos.estado_id 





create view v_incidencia as
select pedidos.*, incidencia.descripcion incidencia_descripcion, incidencia.id_pedido id_pedido, incidencia.id incidencia_id, incidencia.num_incidencia, incidencia.id_imagen, incidencia.fecha, conductor.fullname, tabla_de_tablas.Valor estado
from pedidos
inner join
conductor on conductor.id=pedidos.id_conductor
inner join
incidencia on incidencia.id=pedidos.id_incidencia
inner join
tabla_de_tablas on tabla_de_tablas.id=pedidos.estado_id 


create view v_incidencia as
select incidencia.*, pedidos.num_pedido, conductor.fullname, tabla_de_tablas.Valor estado
from pedidos
inner join
conductor on conductor.id=pedidos.id_conductor
inner join
incidencia on incidencia.id_pedido=pedidos.id
inner join
tabla_de_tablas on tabla_de_tablas.id=pedidos.estado_id 