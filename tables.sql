CREATE TABLE `user` (
 `user_id` int(11) PRIMARY KEY AUTO_INCREMENT,
 `username` varchar(255) NOT NULL,
 `mobile_number` varchar(10) NOT NULL,
 `email_address` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 `contributions` int(11) NOT NULL DEFAULT '0'
);


CREATE TABLE `category` (
 `cat_id` int(11) primary key,
 `cat_name` varchar(255) NOT NULL,
);


CREATE TABLE 'songs' (
 'category_id' int(11) NOT NULL,
 `song_id` int(100) primary key AUTO_INCREMENT,
 `song_name` varchar(255) NOT NULL,
 `song_format` varchar(100) NOT NULL,
 `singer_name` varchar(100) NOT NULL,
 `movie_name` varchar(50) NOT NULL,
 `song_image` varchar(255) NOT NULL,
 `audio_file` varchar(255) NOT NULL,
  FOREIGN KEY (category_id) REFERENCES category(cat_id)
);
