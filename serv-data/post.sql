CREATE TABLE post
(
  post_id      INT NOT NULL AUTO_INCREMENT,
   title        VARCHAR(255) NOT NULL,
   subtitle     VARCHAR(255) NOT NULL,
   content     TEXT NOT NULL,
   author     VARCHAR(255) NOT NULL,
   author_url   VARCHAR(255) NOT NULL,
   publish_date DATE,
  image_url   VARCHAR(255) NOT NULL,
  featured     TINYINT(1) DEFAULT 0,
  tag_type   VARCHAR(255) NOT NULL,
  tag_text   VARCHAR(255) NOT NULL,
  color__button  VARCHAR(255) NULL,
  PRIMARY KEY (post_id)
) 
ENGINE = InnoDB
CHARACTER SET = utf8mb4
COLLATE utf8mb4_unicode_ci