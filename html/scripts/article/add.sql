USE fake_reddit;
INSERT INTO
    articles (`title`, `date`, `author`, `img`, `content`)
VALUES
    (:title, :date, :author, :img_url, :content );
