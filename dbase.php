<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());
	
	
	
	
	
	mysql_query("CREATE DATABASE pizzaparadise") or die(mysql_error());
	
	mysql_select_db("pizzaparadise") or die(mysql_error());
	
	mysql_query("CREATE TABLE user(  id_member int NOT NULL PRIMARY KEY,
									 email varchar(40) NOT NULL,
									 password varchar(20) NOT NULL,
									 level varchar(20) NOT NULL)") or die(mysql_error());
	
	mysql_query("CREATE TABLE member(
									 id_member int NOT NULL PRIMARY KEY,
									 Fname varchar(20) NOT NULL, 
									 Lname varchar(20) NOT NULL,
									 sex varchar(20) NOT NULL,
									 bdate date NOT NULL,
									 phone char(10) NOT NULL,
									 point int,
									 total_buy int)") or die(mysql_error());
	
	mysql_query("CREATE TABLE address_member(
					id_member int NOT NULL, 
					id_address_member int NOT NULL AUTO_INCREMENT, 
					name_building varchar(20) NOT NULL, 
					address_type  varchar(30) NOT NULL,
					postcode  varchar(10) NOT NULL,
					province  varchar(30) NOT NULL,
					road varchar(30), 
					address_no varchar(20) NOT NULL,
					room_no  varchar(30),
					floor  varchar(30),
					note varchar(100),
					PRIMARY KEY (id_address_member))") or die(mysql_error());	
		mysql_query("ALTER TABLE address_member AUTO_INCREMENT = 0") or die(mysql_error());		
		

	
		
	mysql_query("INSERT INTO user(id_member,email,password,level) VALUES(0,'admin',1234,'admin')") or die(mysql_error());	
	mysql_query("INSERT INTO member VALUES(0,'Panuwat','Jantawee','M','1993-03-12','0918801312',0,0)") or die(mysql_error());
	
	mysql_query("INSERT INTO user(id_member,email,password,level) VALUES(1,'benz7net@gmail.com',1234,'member')") or die(mysql_error());	
	mysql_query("INSERT INTO member VALUES(1,'Benznest','Strawberry','M','1993-03-12','0918801312',0,0)") or die(mysql_error());
	
	
	
	
		mysql_query("insert into address_member
			values(0,'','Benz Condo','home','55200','chaing mai','suthep','44','1201','2','')");
													   
		mysql_query("insert into address_member
			values(1,'','Benznest CS','home','11122','chaing mai','suthep','44','1201','2','')");
	
	mysql_query("CREATE TABLE food(
					id_food int(10) NOT NULL PRIMARY KEY , 
					name_food varchar(30), 
					id_cate int,
					price int ,
					detail_food varchar(200), 
					status varchar(20),
					rating int)") or die(mysql_error());		
	
	mysql_query("CREATE TABLE categories(
					id_cate int NOT NULL PRIMARY KEY , 
					name_cate varchar(30) NOT NULL)") or die(mysql_error());		
	
	mysql_query("CREATE TABLE basket(
					id_basket INT NOT NULL AUTO_INCREMENT,
					id_food   INT NOT NULL, 
					id_member   INT NOT NULL, 
					quantity  INT NOT NULL,
					total INT NOT NULL,
					PRIMARY KEY (id_basket))") or die(mysql_error());	
	mysql_query("ALTER TABLE basket AUTO_INCREMENT = 0") or die(mysql_error());
	
	
	mysql_query("CREATE TABLE order_list( 
					id_order int NOT NULL AUTO_INCREMENT, 
					id_food int NOT NULL , 
					id_member int NOT NULL , 
					quantity int NOT NULL, 
					total int NOT NULL,
					id_address_order int NOT NULL, 
					status_order varchar(20),
					PRIMARY KEY (id_order))") or die(mysql_error());
		mysql_query("ALTER TABLE order_list AUTO_INCREMENT = 0") or die(mysql_error());
	
	mysql_query("CREATE TABLE favorite(
					id_favorite int NOT NULL AUTO_INCREMENT,			   
					id_food int NOT NULL, 
					id_member int NOT NULL,
					PRIMARY KEY (id_favorite))") or die(mysql_error());	
	mysql_query("ALTER TABLE favorite AUTO_INCREMENT = 0") or die(mysql_error());
	
		mysql_query("CREATE TABLE address_order(
					id_address_order int NOT NULL,
					id_member int NOT NULL, 
					total_quantity int NOT NULL,
					total_pay int NOT NULL, 
					time_order DATETIME NOT NULL,
					name_building varchar(20) NOT NULL, 
					address_type  varchar(30) NOT NULL,
					postcode  varchar(10) NOT NULL,
					province  varchar(30) NOT NULL,
					road varchar(30), 
					address_no varchar(20) NOT NULL,
					room_no  varchar(30),
					floor  varchar(30),
					note varchar(100),
					status varchar(20),
					PRIMARY KEY (id_address_order))") or die(mysql_error());	
		
     mysql_query("CREATE TABLE statistic( 
					year int NOT NULL AUTO_INCREMENT, 
					total_sell int NOT NULL , 
					total_quantity int NOT NULL,
					total_benefit int NOT NULL,
					PRIMARY KEY (year))") or die(mysql_error());	
	mysql_query("ALTER TABLE statistic AUTO_INCREMENT = 2557") or die(mysql_error());
	
	mysql_query("INSERT INTO statistic VALUES(2557,0,0,0)");
	
	
mysql_query("INSERT INTO categories VALUES(1,'pizza')");
mysql_query("INSERT INTO categories VALUES(2,'fried chicken')");
mysql_query("INSERT INTO categories VALUES(3,'salad')");
mysql_query("INSERT INTO categories VALUES(4,'beverage')");
mysql_query("INSERT INTO categories VALUES(5,'icecream')");
mysql_query("INSERT INTO categories VALUES(6,'promotion')");
	
	
	

	
mysql_query("INSERT INTO food VALUES(1000,'Hawaiian',1,279,'Combining the sweet and sour taste of juicy pineapples with meaty ham and bacon.','ready',10)");
mysql_query("INSERT INTO food VALUES(1001,'Seafood Deluxe',1,349,'Those fishermen cry when we pile up all topped with lots of prawns, crab sticks.','ready',9)");
mysql_query("INSERT INTO food VALUES(1002,'Seafood Cocktail',1,349,'The keyword for this creation! Fresh prawns, succulent crab sticks.','ready',8)");
mysql_query("INSERT INTO food VALUES(1003,'Super Deluxe',1,299,'Everything from pork sausage, Italian sausage, pepperoni, ham, bacon, onion, capsicum.','ready',7)");
mysql_query("INSERT INTO food VALUES(1004,'Chicken Trio',1,299,'We put grilled chicken, garlic butter chicken and chicken marinade in mushroom sauce.','ready',6)");
mysql_query("INSERT INTO food VALUES(1005,'Italian Sausage',1,279,'Italian sausage, pepperoni, onion, mushroom and cherry tomatoes.','ready',0)");
mysql_query("INSERT INTO food VALUES(1006,'Tropical Seafood',1,349,'This seafood mix of crab sticks, pineapple and Thousand Island sauce is always delightful.','ready',0)");
mysql_query("INSERT INTO food VALUES(1007,'Shrimp Cocktail',1,349,'Fresh shrimp, mushroom, pineapple, cherry tomato and Thousand.','ready',0)");
mysql_query("INSERT INTO food VALUES(1008,'Meat Deluxe',1,299,'Chomp on pork and Italian sausages, pepperoni, ham, bacon and bacon bits.','ready',0)");
mysql_query("INSERT INTO food VALUES(1009,'Tropical Loaded',1,279,'Full of ham, crab sticks, pineapples and baked.','ready',0)");
mysql_query("INSERT INTO food VALUES(1010,'Bacon Super Delight',1,279,'Italian sausage, bacon, ham, sweet pepper and cherry tomatoes.','ready',0)");
mysql_query("INSERT INTO food VALUES(1011,'Double Pepperoni',1,279,'Comes with nothing else but pepperoni? Two times the normal size.','ready',0)");
mysql_query("INSERT INTO food VALUES(1012,'Aloha',1,279,'pepperoni pork sausage and juicy pineapple with Thousand Island sauce.','ready',0)");
mysql_query("INSERT INTO food VALUES(1013,'Double Cheese',1,279,'Create pizza with your choices of toppings while we double up the cheese.','ready',0)");
mysql_query("INSERT INTO food VALUES(1014,'Tom Yum Kung',1,349,'An authentic east-meets-west pizza indeed! Combining spicy Tom Yum's chilli.','ready',0)");
mysql_query("INSERT INTO food VALUES(1015,'Veggie',1,279,'Make no claims that Veggie Pizza or its ingredients are certified as vegetarian .','ready',0)");
mysql_query("INSERT INTO food VALUES(1016,'Canadian Bacon',1,279,'A Canadian style pizza that comes with lots of ham, bacon, bacon bits and corn.','ready',0)");
mysql_query("INSERT INTO food VALUES(1017,'Ham & Mushroom',1,279,'A simple pleasure in every bite.','ready',0)");
mysql_query("INSERT INTO food VALUES(1018,'Chicken Caldo',1,279,'If you are mad for chicken, don’t miss this one !!','ready',0)");
mysql_query("INSERT INTO food VALUES(1019,'Deluxe',1,299,'Pork sausage, ham, pepperoni, onion, capsicum and mushroom.','ready',0)");


mysql_query("INSERT INTO food VALUES(2000,'Baked chicken wings',2,129,'','ready',0)");
mysql_query("INSERT INTO food VALUES(2001,'Soft dough stuffed with soft cheese',2,59,'','ready',0)");
mysql_query("INSERT INTO food VALUES(2002,'Delicious hot spicy barbecue',2,129,'','ready',0)");
mysql_query("INSERT INTO food VALUES(2003,'Fried Chicken Mild 3 pcs',2,199,'','ready',0)");
mysql_query("INSERT INTO food VALUES(2004,'Fried Chicken Mild 6 pcs',2,389,'','ready',0)");
mysql_query("INSERT INTO food VALUES(2005.'Fried Chicken Mild 12 pcs',2,699,'','ready',0)");


mysql_query("INSERT INTO food VALUES(3000,'Salad Cream',3,99,'','ready',0)");
mysql_query("INSERT INTO food VALUES(3001,'Thousand Island',3,99,'','ready',0)");
mysql_query("INSERT INTO food VALUES(3002,'Shrimp Salad',3,159,'','ready',0)");
mysql_query("INSERT INTO food VALUES(3003,'Caesar's Salad',3,139,'','ready',0)");
mysql_query("INSERT INTO food VALUES(3004,'Tuna Salad',3,139,'','ready',0)");


mysql_query("INSERT INTO food VALUES(4000,'Pepsi 550 ml',4,25,'','ready',0)");
mysql_query("INSERT INTO food VALUES(4001,'Pepsi 1 Ltr',4,35,'','ready',0)");

mysql_query("INSERT INTO food VALUES(5000,'Mocha Almond Fudge Ice Cream',5,199,'','ready',0)");
mysql_query("INSERT INTO food VALUES(5001,'Chocolate Chip Ice Cream',5,199,'','ready',0)");
mysql_query("INSERT INTO food VALUES(5002,'Sticky Chewy Chocolate Ice Cream',5,199,'','ready',0)");
mysql_query("INSERT INTO food VALUES(5003,'Rum Raisin Ice Cream',5,199,'','ready',0)");
mysql_query("INSERT INTO food VALUES(5004,'Very Strawberry Ice Cream',5,199,'','ready',0)");
mysql_query("INSERT INTO food VALUES(5005,'Vanilla Ice Cream',5,199,'','ready',0)");


mysql_query("INSERT INTO food VALUES(6000,'Square Pizza',6,199,'Enjoy the new Square Pizza starting from only 199 Baht from The Pizza Company. The pizza comes with 9 pieces with various toppings of your choice.','ready',0)");
mysql_query("INSERT INTO food VALUES(6001,'Online Set',6,279,'Square Pizza* + Jumbo Hotdog Roll + Pepsi 550 ml. *Only applicable to 11 Classic toppings','ready',0)");
mysql_query("INSERT INTO food VALUES(6002,'Jumbo Hotdog Roll',6,69,'Enjoy delicious hot dog with cheese filling wrapped in crescent rolls, topped off with garlic and black pepper for superb taste. for 2 pieces!','ready',0)");
mysql_query("INSERT INTO food VALUES(6003,'Jumbo Pizza Puff',6,99,'Introducing Jumbo Pizza Puff, a folded delicious crust filled with mozzarella cheese and your favorite toppings: Hawaiian, Chicken Trio, Super Deluxe and Seafood Cocktail from only 99 Baht*. Try now! * Jumbo Pizza Puff Hawaiian 99 Baht, Chicken Trio and Super Deluxe 119 Baht.','ready',0)");
mysql_query("INSERT INTO food VALUES(6004,'DQ Vanilla Ice Cream',6,59,'Delicious with the soft serve smooth ice-cream From Dairy Queen.','ready',0)");
mysql_query("INSERT INTO food VALUES(6005,'Chicken Nuggets',6,79,'Introducing Chicken Nuggets from The Pizza Company!! Our tender and juicy chicken nuggets are cooked and marinated in delicious spices and fried to perfection. Enjoy with your choice of ketchup or chicken dipping sauces','ready',0)");
mysql_query("INSERT INTO food VALUES(6006,'Salad Lover',6,99,'For salad lovers, order a Salad at price starting ','ready',0)");
mysql_query("INSERT INTO food VALUES(6007,'Sud Kum Set',6,299,'Medium Pan or Thin Pizza + 4 pcs of Crispy Crunchy Wings or BBQ Chicken Wings + Garlic Bread applicable to 11 Classic toppings for Gourmet Seafood toppings add upsize to Large Pan or Thin pizza.','ready',0)");
mysql_query("INSERT INTO food VALUES(6008,'Kern Kum Set',6,399,'Medium Pan or Thin Pizza + Spaghett  + 4 pcs of Crispy Crunchy Wings or BBQ Chicken Wings + Garlic Bread','ready',0)");
mysql_query("INSERT INTO food VALUES(6009,'Yok Gang Set',6,499,'Medium Pan or Thin Pizza + 3 pcs of Fried Chicken + Spaghetti + Garlic Bread.','ready',0)");


// add peaple

mysql_query("INSERT INTO user(id_member,email,password,level) VALUES(2,'draginjames@hotmail.com',2222,'member')") or die(mysql_error());	
	
mysql_query("INSERT INTO member VALUES(2,'Apiwat','Auttama','M','1993-02-14','0816718747',0,0)") or die(mysql_error());

mysql_query("insert into address_member
			values(2,'','James Hotel','home','52000','chaing mai','suthep','54','1301','3','')");

//

mysql_query("INSERT INTO user(id_member,email,password,level) VALUES(3,'daidai@hotmail.com',3333,'member')") or die(mysql_error());	
	
mysql_query("INSERT INTO member VALUES(3,'Daisukea','Holi','M','1987-03-12','0914356778',0,0)") or die(mysql_error());

mysql_query("insert into address_member
			values(3,'','Infinity Condo','home','53200','chaing rai','suthep','77','6351','5','')");

//

mysql_query("INSERT INTO user(id_member,email,password,level) VALUES(4,'lovelovely_04@hotmail.com',4444,'member')") or die(mysql_error());	
	
mysql_query("INSERT INTO member VALUES(4,'TheLover','Forever','F','2000-06-06','0904329665',0,0)") or die(mysql_error());

mysql_query("insert into address_member
			values(4,'','Prama Home','home','10200','BangKok','bangrak','129/2','','','')");

//

mysql_query("INSERT INTO user(id_member,email,password,level) VALUES(5,'Google_GleGLe@Gmail.com',5555,'member')") or die(mysql_error());	
	
mysql_query("INSERT INTO member VALUES(5,'PanuwatGoogle','DotCom','F','2003-01-01','0919431335',0,0)") or die(mysql_error());

mysql_query("insert into address_member
			values(5,'','lily Condo','home','50500','chaing mai','kankron','98/2',4101','4','')");

//

mysql_query("INSERT INTO user(id_member,email,password,level) VALUES(6,'kuri_kok@hotmail.com',6666,'member')") or die(mysql_error());	
	
mysql_query("INSERT INTO member VALUES(6,'Doakamon','Jiramanee','F','1963-04-22','0849421443',0,0)") or die(mysql_error());

mysql_query("insert into address_member
			values(6,'','Home TingTong','home','52200','chaing mai','suthep','23','','','')");

//

mysql_query("INSERT INTO user(id_member,email,password,level) VALUES(7,'frii_pp2@hotmail.com',7777,'member')") or die(mysql_error());	
	
mysql_query("INSERT INTO member VALUES(7,'keaw','kumxaoj','M','1955-05-11','0918801312',0,0)") or die(mysql_error());

mysql_query("insert into address_member
			values(7,'','Cityhome','home','55200','chaing mai','citymung','34/23','','','')");

//

mysql_query("INSERT INTO user(id_member,email,password,level) VALUES(8,'veve_x@hotmail.com',8888,'member')") or die(mysql_error());	
	
mysql_query("INSERT INTO member VALUES(8,'Loveyou','Baby','F','1993-03-12','0918801312',0,0)") or die(mysql_error());

mysql_query("insert into address_member
			values(8,'','MidCondo','home','55200','chaing mai','suthep','36','1101','1','')");

//

mysql_query("INSERT INTO user(id_member,email,password,level) VALUES(9,'bb__Rok_rk@hotmail.com',9999,'member')") or die(mysql_error());	
	
mysql_query("INSERT INTO member VALUES(9,'Panuwat','Jantawee','M','1993-03-12','0918801312',0,0)") or die(mysql_error());

mysql_query("insert into address_member
			values(9,'','GlyMyhome','home','51100','chaing mai','bandong','99','1101','1','')");

//

mysql_query("INSERT INTO user(id_member,email,password,level) VALUES(10,'narak_a@hotmail.com',1010,'member')") or die(mysql_error());	
	
mysql_query("INSERT INTO member VALUES(10,'Narak','Leawngia','F','1993-03-12','0918801312',0,0)") or die(mysql_error());

mysql_query("insert into address_member
			values(10,'','NarakCondo','home','55200','chaing mai','ranak','21','2312','2','')");



	header("Location: index.php");
?>