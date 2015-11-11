# Read Me

### Version 0.1
* remove ```user_guide``` folder to reduce size
* create new ```readme.md```
* dynamic content
* update ```config``` and ```autoload```
* rename ```feedback``` folder to ```assets```
* update ```.gitignore``` file to exclude ```database.php```
* create new model ```Mfeedback``` to store data
* add landing page with 5 apps logo
* create new database ```feedback_db```
* create table
```
CREATE TABLE `feedback` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `q1` int(11) DEFAULT '0',
  `q2` int(11) DEFAULT '0',
  `q3` int(11) DEFAULT '0',
  `q4` varchar(500) DEFAULT NULL,
  `q5` varchar(200) DEFAULT NULL,
  `ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

## TODO
* images on landing Page
* thank you page once user submitted feedback
* etc
