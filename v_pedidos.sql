create view v_pedidos as

select pedidos.*, tabla_de_tablas.Valor estado, conductor.fullname
from pedidos
inner join
conductor on conductor.id=pedidos.id_conductor
inner join
tabla_de_tablas on tabla_de_tablas.id=pedidos.estado_id 