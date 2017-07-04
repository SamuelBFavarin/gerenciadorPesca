select 
	extract (month from v.data_inicio) as mes,
    extract (year from v.data_inicio) as ano,
    count(distinct e.id) as embarcacoes,
    sum( distinct cap.peso)as peso
from viagem as v
	left join embarcacao as e on (v.embarcacao_id = e.id)
    left join lance as l on (l.viagem_id = v.id)
    left join captura_especie as cap on(cap.lance_id = l.id)
group by
	v.id