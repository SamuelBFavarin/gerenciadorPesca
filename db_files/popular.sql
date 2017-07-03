insert into viagem (embarcacao_id, porto_inicio_id, porto_fim_id, data_inicio, data_fim) values (2,5,6,TIMESTAMP '2017-07-03 15:36:38', TIMESTAMP '2017-07-10 15:36:38');

insert into lance (hora_inicio, hora_fim, comprimento_rede, area_total_rede, tamanho_malha, profundidade, latitude, longitude, viagem_id)
	values (TIMESTAMP '2017-07-03 15:59:00',TIMESTAMP '2017-07-03 16:40:00',1,1,1,1,1,1,2);

insert into lance (hora_inicio, hora_fim, comprimento_rede, area_total_rede, tamanho_malha, profundidade, latitude, longitude, viagem_id)
	values (TIMESTAMP '2017-07-03 17:59:00',TIMESTAMP '2017-07-03 19:40:00',1,1,1,1,1,1,2);
    
insert into captura_especie (peso, especie_id, lance_id) values (50,48,2); 
insert into captura_especie (peso, especie_id, lance_id) values (60,48,3); 
insert into captura_especie (peso, especie_id, lance_id) values (25,48,3); 
insert into captura_especie (peso, especie_id, lance_id) values (45,48,2);
insert into captura_especie (peso, especie_id, lance_id) values (10,48,2); 

insert into viagem (embarcacao_id, porto_inicio_id, porto_fim_id, data_inicio, data_fim) values (2,5,6,TIMESTAMP '2017-07-03 15:36:38', TIMESTAMP '2017-07-10 15:36:38');

insert into lance (hora_inicio, hora_fim, comprimento_rede, area_total_rede, tamanho_malha, profundidade, latitude, longitude, viagem_id)
	values (TIMESTAMP '2017-07-03 15:59:00',TIMESTAMP '2017-07-03 16:40:00',1,1,1,1,1,1,3);

insert into lance (hora_inicio, hora_fim, comprimento_rede, area_total_rede, tamanho_malha, profundidade, latitude, longitude, viagem_id)
	values (TIMESTAMP '2017-07-03 17:59:00',TIMESTAMP '2017-07-03 19:40:00',1,1,1,1,1,1,3);
    
insert into captura_especie (peso, especie_id, lance_id) values (50,48,2); 
insert into captura_especie (peso, especie_id, lance_id) values (60,48,3); 
insert into captura_especie (peso, especie_id, lance_id) values (25,48,3); 
insert into captura_especie (peso, especie_id, lance_id) values (45,48,2);
insert into captura_especie (peso, especie_id, lance_id) values (10,48,2); 

select * from captura_especie
select * from lance
select * from viagem
select * from embarcacao
select * from porto
select * from especie