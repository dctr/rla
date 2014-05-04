DROP TABLE   achievements;
CREATE TABLE achievements (
  creationDate DATE NOT NULL,
  description VARCHAR(150) NOT NULL,
  id INT NOT NULL AUTO_INCREMENT,
  imageURL VARCHAR(500),
  unlockDate DATE,
  unlockText VARCHAR(1000),
  title VARCHAR(75) NOT NULL,
  url VARCHAR(75) NOT NULL,
  PRIMARY KEY(id),
  UNIQUE INDEX(url)
);
