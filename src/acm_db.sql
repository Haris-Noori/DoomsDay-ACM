/* DATABASE FILE
DATABASE NAME: acm_db
*/

DROP DATABASE IF EXISTS acm_db;
CREATE DATABASE acm_db;
USE acm_db;

CREATE TABLE participants(
    p_id INT(5),
    p_name VARCHAR(20),
    p_cnic INT(13),
    p_phone INT(11)
);