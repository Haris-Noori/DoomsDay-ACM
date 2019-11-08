/* DATABASE FILE
DATABASE NAME: acm_db
*/

DROP DATABASE IF EXISTS acm_db;
CREATE DATABASE acm_db;
USE acm_db;

CREATE TABLE students(
    p_id INT(5),
    P_name VARCHAR(20),
    CNIC INT(13),
    p_phone INT(11)
);