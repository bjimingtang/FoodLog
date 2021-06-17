CREATE DEFINER=`root`@`localhost` PROCEDURE `insertFood`(IN food varchar(255), 
							   IN date_eaten varchar(255))
BEGIN
	INSERT INTO
		food_table (food, date_eaten)
	VALUES
		(food,
        date_eaten);
END