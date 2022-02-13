# How To Run APP ? 

- Create `CI` database and `category` table 

`
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) 
`

- Navigate to `localhost/ci/category`
