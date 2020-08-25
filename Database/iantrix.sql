CREATE TABLE `antique_sale` (`soa` varchar(40) DEFAULT NULL,`eoa` varchar(40) DEFAULT NULL,`antique_name` varchar(40) DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;
  
INSERT INTO `antique_sale` (`soa`, `eoa`, `antique_name`) VALUES('1-july-2019', '11-august-2019', 'Radio'),('2-july-2019', '12-august-2019', 'Alex telephone'),('3-july-2019', '13-august-2019', 'Home clock'),('4-july-2019', '14-august-2019', 'Home wallclock'),('5-july-2019', '15-august-2019', 'Oldage compass'),('6-july-2019', '16-august-2019', 'Ringing telephone'),('7-july-2019', '17-august-2019', 'Old bulb'),('8-july-2019', '18-august-2019', 'Eassy chair'),('9-july-2019', '19-august-2019', 'Run-fan');
  


CREATE TABLE `antique` ( `antique_image` varchar(40) NOT NULL, `antique_name` varchar(30) NOT NULL, `antique_category` varchar(30) NOT NULL,`antique_age` varchar(30) NOT NULL, `antique_price` int(10) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1; 
 
INSERT INTO `antique` (`antique_image`, `antique_name`, `antique_category`, `antique_age`, `antique_price`) VALUES('images/image1.jpg', 'Radio', 'electric', ' 121 yrs', 12000),('images/image2.jpg', 'Alex telephone', 'electric', '90 yrs', 9000),('images/image3.jpg', 'Home clock', 'clock', ' 145 yrs', 124000),('images/image4.jpg', 'Home wallclock', 'clock', '45 yrs', 70000),('images/image5.jpg', 'Oldag compass', 'compass', ' 165 yrs', 100000),('images/image6.jpg', 'Ringing telephone', 'telephone', ' 200 yrs', 25000),('images/image7.jpg', 'Old bulb', 'electric', ' 60 yrs', 90000),('images/image8.jpg', 'Eassy chair', 'life-style', ' 60 yrs', 7000),('images/image9.jpg', 'Run-fan', 'life-style', '200 yrs', 30000);



CREATE TABLE `cus_account` ( `account_id` int(20) NOT NULL, `account_type` varchar(30) NOT NULL, `account_amount` int(30) NOT NULL,`antique_id` int(20) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
INSERT INTO `cus_account` (`account_id`, `account_type`, `account_amount`, `antique_id`) VALUES(2008, 'Savings', 1600, 1008),(2009, 'Current', 400, 1009); 

 


CREATE TABLE `purchase` ( `antique_id` int(20) NOT NULL,`antique_name` varchar(30) NOT NULL,`cus_name` varchar(30) NOT NULL, `bank_name` varchar(20) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
INSERT INTO `purchase` (`antique_id`, `antique_name`, `cus_name`, `bank_name`) VALUES(1008, 'Radio', 'suhaas', 'SBI'),(1009, 'Alex telephone', 'harshitha', 'Axis'); 

 
CREATE TABLE `customer` ( `cus_name` varchar(20) NOT NULL,`cus_password` varchar(10) NOT NULL,`cus_dob` date NOT NULL, `cus_email` varchar(30) NOT NULL,`cus_phone` bigint(30) NOT NULL,  `cus_address` varchar(40) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `customer` (`cus_name`, `cus_password`, `cus_dob`, `cus_email`, `cus_phone`, `cus_address`) VALUES('suhaas', 'suhaas', '1999-11-01', 'suhaasswamy1999@gmail.com', 9916452082, 'bangalore'),('harshitha', 'harshitha', '1999-10-31', 'harshitha1999@gmail.com', 7349429388, 'bangalore'); 



  
ALTER TABLE `antique_sale` ADD KEY `antique_name_ibfk_1` (`antique_name`);
    
ALTER TABLE `antique` ADD PRIMARY KEY (`antique_name`);  
  
ALTER TABLE `cus_account` ADD PRIMARY KEY (`account_id`),ADD KEY `antique_id` (`antique_id`);  
  
ALTER TABLE `purchase` ADD PRIMARY KEY (`antique_id`),ADD KEY `antique_name` (`antique_name`),ADD KEY `cus_name` (`cus_name`);  
  
ALTER TABLE `customer` ADD PRIMARY KEY (`cus_name`);
    
  
  
 
ALTER TABLE `cus_account` MODIFY `account_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2010; 
  
ALTER TABLE `purchase` MODIFY `antique_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;
   
ALTER TABLE `antique_sale` ADD CONSTRAINT `antique_sale_ibfk_1` FOREIGN KEY (`antique_name`) REFERENCES `antique` (`antique_name`) ON DELETE CASCADE ON UPDATE CASCADE;         //this is throwing error
  
ALTER TABLE `cus_account` ADD CONSTRAINT `antique_id` FOREIGN KEY (`antique_id`) REFERENCES `auction` (`antique_id`) ON DELETE CASCADE ON UPDATE CASCADE;
  
ALTER TABLE `purchase` ADD CONSTRAINT `cus_name` FOREIGN KEY (`cus_name`) REFERENCES `customer` (`cus_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;
  




 
 
 
  







  
