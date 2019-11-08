# OneproviderApi
Randon numbers generator 

How to:
1 - setup database parameters in db.php file
2 - create table 'numbers' with columns integer 'id'(auto inc.) and integer 'value' (
  CREATE TABLE `api_db`.`numbers` ( `id` INT NOT NULL AUTO_INCREMENT , `value` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
)
3 - use url 
  HOSTNAME/oneprovider/api/generate to generate new number
  HOSTNAME/oneprovider/api/retrieve/ID to get number with by id
