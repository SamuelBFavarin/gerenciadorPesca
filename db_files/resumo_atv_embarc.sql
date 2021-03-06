select 
	count(distinct e.nome) as cont,
    sum(cap.peso),
    e.nome, 
    extract (month from v.data_inicio) as mes,
    extract (year from v.data_inicio) as ano
from viagem as v
	left join embarcacao as e on (v.embarcacao_id = e.id)
    left join lance as l on (l.viagem_id = v.id)
    left join captura_especie as cap on(cap.lance_id = l.id)
group by
	e.nome, mes, ano