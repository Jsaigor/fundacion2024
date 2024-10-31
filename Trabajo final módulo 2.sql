1_
#Obtener las ciudades mas pobladas de cada pa�s, ordenadas por nombre
#del pa�s de manera ascendente. Usar alias para los campos del resultado.
#Resultado parcial sobre 232 filas:

select distinct c.name as ciudad, p.name as "pa�s", c.population as "poblaci�n" 
from city c, country p 
where c.countrycode=p.code 
and c.population in (select max(c2.population) 
from city c2 where c.countrycode=c2.countrycode) 
order by p.name asc;

2_
#Porcentaje de personas que hablan cada idioma en Andorra y cantidad de
#personas que dicho porcentaje representa.

select (cl.percentage*p.population/100) as "Cantidad de personas que hablan", cl.language as "Lenguaje"
from countrylanguage cl, country p
where cl.countrycode in (select code from country where name='Andorra') 
and p.code=cl.countrycode;

3_
#Obtener la densidad de poblaci�n por regi�n. Listar solo las tres regiones
#m�s densamente pobladas ordenadas por densidad de manera descendente.

select region as "Regi�n", (sum(population)/sum(surfacearea)) as "Densidad" 
from country 
group by region
order by population desc
limit 3;

4_
#Obtener un listado con los pa�ses que tienen mas de dos idiomas oficiales.
#Resultado total:

select p.name as "Pais", count(cl.language) as "Total de idiomas Oficiales"
from countrylanguage cl
join country p on p.code=cl.countrycode
where cl.isofficial = 'T'
group by p.name
having count(cl.language) > 2;

5_
#Calcular la riqueza per capita (GNP / Poblaci�n) de cada continente.
#Ordenar en forma descendente.
select continent as "Continente", (gnp/population) as "Producto Nacional Bruto per capita" from country
group by continent
order by 2 desc;

6_
#Encontrar los pa�ses donde el porcentaje de poblaci�n que habla su idioma oficial es de m�s del 80%. 
#Ordenar los resultados de forma descendente.
select * from countrylanguage
where isofficial='T'
and percentage > 80
order by 2 desc;

7_
#Calcular para cada continente el pa�s cuya capital tiene la mayor proporci�n de poblaci�n respecto al pa�s completo.

select c.continent as "Continente", p.name as "Pais", city.name as "Capital", (city.population/p.population) as "Proporci�n" from country p 
join city on city.id=p.capital join country c on c.code=p.code 
--where p.population > 0 
order by 1, 3 DESC;