select 
	sum(cap.peso) as peso_total,
    e.nome, 
    extract (month from l.hora_inicio) as mes,
    extract (year from l.hora_inicio) as ano
from captura_especie as cap
	inner join especie as e on (cap.especie_id = e.id)
    inner join lance as l on (cap.lance_id = l.id )
group by
	e.nome,extract (month from l.hora_inicio), extract (year from l.hora_inicio)