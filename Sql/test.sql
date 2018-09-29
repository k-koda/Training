DROP TABLE IF EXISTS sub_tbl;

create table sub_tbl(
id int,
name varchar
);

DROP FUNCTION IF EXISTS test_func();

CREATE OR REPLACE FUNCTION test_func()
RETURNS text AS $$
DECLARE
val_sub text;

BEGIN
--create view sub_view as select * from math;
select subject into val_sub from sub_view limit 1;
execute '
insert into math(ymd, name, subject, score) select ymd, name, subject, 100 from '||val_sub||';
';
/*
insert into mng_tbl(ydm, name) values ('20180811', 'Ken');

update table
set val_sub=subject, score=score
from 
where
*/

RETURN '000';
END;
$$ LANGUAGE plpgsql;

select test_func();
