DROP TABLE IF EXISTS math;
DROP TABLE IF EXISTS eng;
DROP TABLE IF EXISTS jap;
DROP TABLE IF EXISTS mng_tbl;

CREATE TABLE math(
ymd char(8),
subject varchar,
name varchar,
score int
);
CREATE TABLE eng(
ymd char(8),
subject varchar,
name varchar,
score int
);
CREATE TABLE jap(
ymd char(8),
subject varchar,
name varchar,
score int
);
CREATE TABLE mng_tbl(
ydm char(8),
name varchar,
math     int,
japanese int,
english  int,
science  int,
society  int,
total    int
);

INSERT INTO math(ymd, name, subject, score) VALUES
('20180811', 'Ken', 'math', 70),
('20180921', 'Ken', 'math', 50),
('20180811', 'Jun', 'math', 70),
('20180921', 'Jun', 'math', 90),
('20180811', 'Aki', 'math', 90),
('20180921', 'Aki', 'math', 95);

INSERT INTO jap (ymd, name, subject, score) VALUES
('20180811', 'Ken', 'jap', 50),
('20180921', 'Ken', 'jap', 90),
('20180811', 'Jun', 'jap', 70),
('20180921', 'Jun', 'jap', 100),
('20180811', 'Aki', 'jap', 80),
('20180921', 'Aki', 'jap', 90);

INSERT INTO eng (ymd, name, subject, score) VALUES
('20180811', 'Ken', 'eng', 80),
('20180921', 'Ken', 'eng', 100),
('20180811', 'Jun', 'eng', 80),
('20180921', 'Jun', 'eng', 100),
('20180811', 'Aki', 'eng', 90),
('20180921', 'Aki', 'eng', 95);
