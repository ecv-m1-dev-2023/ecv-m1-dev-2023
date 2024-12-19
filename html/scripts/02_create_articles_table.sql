USE `fake_reddit`;
CREATE TABLE IF NOT EXISTS articles (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    date TIMESTAMP DEFAULT NOW() NOT NULL,
    author VARCHAR(100) NOT NULL,
    img VARCHAR(255) NOT NULL,
    content TEXT NOT NULL
);