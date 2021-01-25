CREATE TABLE `people` (
  `id`   INTEGER PRIMARY KEY AUTO_INCREMENT,
  `name` TEXT NOT NULL,
  `mail` TEXT,
  `age` INTEGER
);

-- mock data
INSERT INTO `people` VALUES
  (1, 'taro', 'taro@yamada.jp', 35),
  (2, 'hanako', 'hanako@flower.com', 24),
  (3, 'sachiko', 'sachi@happy.org', 47);
