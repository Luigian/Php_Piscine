SELECT COUNT(*) AS "nb susc", FLOOR(AVG(price)) AS "av susc", MOD(SUM(duration_sub), 42) as "ft" FROM subscription;
