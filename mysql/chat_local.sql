CREATE database chat_local;
USE chat_local;

CREATE TABLE messages (
  msg_id int(11) NOT NULL,
  incoming_msg_id int(11) NOT NULL,
  outgoing_msg_id int(11) NOT NULL,
  msg varchar(1000) NOT NULL
);

INSERT INTO messages (msg_id, incoming_msg_id, outgoing_msg_id, msg) VALUES
(53, 1460937716, 882384917, 'Hola!!!'),
(54, 882384917, 1460937716, 'Que onda!!!'),
(55, 882384917, 1460937716, 'Que tal?');

CREATE TABLE users (
  user_id int(11) NOT NULL,
  unique_id int(11) NOT NULL,
  id_estudiante bigint(20) DEFAULT NULL,
  m_n varchar(255) DEFAULT NULL,
  fname varchar(255) NOT NULL,
  lname varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  img varchar(255) NOT NULL,
  status varchar(255) NOT NULL
);

INSERT INTO users (user_id, unique_id, id_estudiante, m_n, fname, lname, email, password, img, status) VALUES
(5209, 882384917, NULL, NULL, 'prueba', '.', 'prueba@hotmail.com', '$2y$10$CilB6HHuW8yXG0cRDPjPeugLsPMrR7HCMt/gGdyWFshv3Uphb.Dn2', '1641570392calcetin.jpeg', 'Active now'),
(5210, 1460937716, NULL, NULL, 'prueba', '.2', 'prueba2@hotmail.com', '$2y$10$i2DqzRf17mB21OLxIvRLd.Xu6LZsJhmFX3CJ93GLuG8UlXr3ss80G', '1641570489joker.jpg', 'Offline now');

ALTER TABLE messages
  ADD PRIMARY KEY (msg_id) USING BTREE;

ALTER TABLE users
  ADD PRIMARY KEY (user_id) USING BTREE,
  ADD KEY id_estudiante3 (id_estudiante) USING BTREE,
  ADD KEY unique_id (unique_id) USING BTREE;

ALTER TABLE messages
  MODIFY msg_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

ALTER TABLE users
  MODIFY user_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5209;
