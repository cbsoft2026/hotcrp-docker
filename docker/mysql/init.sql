--
-- HotCRP multi-conference database setup
--
-- Each conference must have its own database name and privileges.
--
-- 1. Replace <confid> with the actual conference identifier.
--

CREATE USER IF NOT EXISTS 'hotcrp'@'%' IDENTIFIED BY 'hotcrp';

CREATE DATABASE IF NOT EXISTS `testconf`;
GRANT ALL PRIVILEGES ON `testconf`.* TO 'hotcrp'@'%';

CREATE DATABASE IF NOT EXISTS `latam-se-school`;
GRANT ALL PRIVILEGES ON `latam-se-school`.* TO 'hotcrp'@'%';

--
-- --------------------------------------------------------------------
-- EXAMPLE (copy for each new conference)
-- --------------------------------------------------------------------
--
-- CREATE DATABASE IF NOT EXISTS `<confid>`;
-- GRANT ALL PRIVILEGES ON `<confid>`.* TO 'hotcrp'@'%';
--

FLUSH PRIVILEGES;