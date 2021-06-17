CREATE DEFINER=`root`@`localhost` PROCEDURE `retrieveFood`(IN date_eaten varchar(255))
BEGIN
	select
		food
	from
		food_table
	where
		food_table.date_eaten = date_eaten;
END