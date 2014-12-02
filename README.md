# Hello world!

This is a placeholder README file for your PHP project. Update it with information about your
project, so others can find out more.

#Home Screen Feature (Database)

##Setup

###Table: users

<table>
	<tr>
		<th>Column</th>
		<th>Data-Type</th>
		<th>Length/Values</th>
		<th>Notes</th>
	</tr>
	<tr>
		<td>id</td>
		<td>INT</td>	
		<td>-</td>
		<td>Primary Key, Autoincrement</td>
	</tr>
	<tr>
		<td>first_name</td>
		<td>VARCHAR</td>	
		<td>255</td>
		<td></td>
	</tr>
	<tr>
		<td>last_name</td>
		<td>VARCHAR</td>	
		<td>255</td>
		<td></td>
	</tr>
	<tr>
		<td>password</td>
		<td>VARCHAR</td>	
		<td>255</td>
		<td></td>
	</tr>
	<tr>
		<td>username</td>
		<td>VARCHAR</td>	
		<td>255</td>
		<td></td>
	</tr>
</table>

###Table: messages

<table>
	<tr>
		<th>Column</th>
		<th>Data-Type</th>
		<th>Length/Values</th>
		<th>Notes</th>
	</tr>
	<tr>
		<td>id</td>
		<td>INT</td>	
		<td>-</td>
		<td>Primary Key, Autoincrement</td>
	</tr>
	<tr>
		<td>body</td>
		<td>TEXT</td>	
		<td>-</td>
		<td></td>
	</tr>
	<tr>
		<td>subject</td>
		<td>VARCHAR</td>	
		<td>255</td>
		<td></td>
	</tr>
	<tr>
		<td>user_id</td>
		<td>INT</td>	
		<td></td>
		<td>FOREIGN KEY references id in users table</td>
	</tr>
	<tr>
		<td>recipient_ids</td>
		<td>VARCHAR</td>	
		<td>255</td>
		<td>*Not sure how to save multiple user ids in one column but this was the structure given, I suggest using pipe separated digits as a string eg. ‘2|6|7’</td>
	</tr>
</table>

###Table: message_read

<table>
	<tr>
		<th>Column</th>
		<th>Data-Type</th>
		<th>Length/Values</th>
		<th>Notes</th>
	</tr>
	<tr>
		<td>id</td>
		<td>INT</td>	
		<td>-</td>
		<td>Primary Key, Autoincrement</td>
	</tr>
	<tr>
		<td>message_id</td>
		<td>INT</td>	
		<td>-</td>
		<td>FOREIGN KEY references id in messages table</td>
	</tr>
	<tr>
		<td>reader_id</td>
		<td>INT</td>	
		<td>-</td>
		<td>FOREIGN KEY references id in users table</td>
	</tr>
	<tr>
		<td>user_id</td>
		<td>INT</td>	
		<td></td>
		<td>FOREIGN KEY references id in users table</td>
	</tr>
	<tr>
		<td>date</td>
		<td>datetime</td>	
		<td>-</td>
		<td></td>
	</tr>
</table>

###To get the 10 most recent messages for a user:
Select the last 10 from the messages table where the specified user’s id is in the recipient_ids of the message. The problem above in the messages table makes this slightly more difficult than usual. I suggest the following solution while trying to keep with the question’s specifications:
SELECT * FROM messages ORDER BY id DESC – to get all messages sorted by most recent.
Loop through the messages and use a function to check if the specified id is in the messages recipient_ids column. If it is, add it to an array. 
Stop looping when either the array size reaches 10 or there are no more messages to check.
What do you guys think?

###To send the message:
INSERT INTO messages (body, subject, user_id, recipient_ids) VALUES (body, subject, user_id, recipient_ids).

###Here are some SQL commands you can run to get the mysql db up quickly:

####users
	
	
	CREATE TABLE IF NOT EXISTS `users` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `first_name` varchar(255) NOT NULL,
	  `last_name` varchar(255) NOT NULL,
	  `password` varchar(255) NOT NULL,
	  `username` varchar(255) NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

####messages
    
	CREATE TABLE IF NOT EXISTS `messages` (
  	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`body` text NOT NULL,
  	`subject` varchar(255) NOT NULL,
  	`user_id` int(11) NOT NULL,
  	`recipient_ids` varchar(255) NOT NULL,
  	PRIMARY KEY (`id`),
  	KEY `user_id` (`user_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

	ALTER TABLE `messages`
  	ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
	

####message_read
	CREATE TABLE IF NOT EXISTS `message_read` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `message_id` int(11) NOT NULL,
	  `reader_id` int(11) NOT NULL,
	  `date` datetime NOT NULL,
	  PRIMARY KEY (`id`),
	  KEY `message_id` (`message_id`,`reader_id`),
	  KEY `reader_id` (`reader_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

	ALTER TABLE `message_read`
	ADD CONSTRAINT `message_read_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
	ADD CONSTRAINT `message_read_ibfk_2` FOREIGN KEY (`reader_id`) REFERENCES `users` (`id`),
	ADD CONSTRAINT `message_read_ibfk_1` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`);
