DROP TABLE IF EXISTS "chapter";

CREATE TABLE "chapter"(

  --Column      Data Type     Constraints    --
  chapter_id    SERIAL        PRIMARY KEY               NOT NULL,
  title         VARCHAR(255)                            NOT NULL,
  number        INT,
  book_id       INT           REFERENCES book(book_id)  NOT NULL,
  date_added    TIMESTAMP                               DEFAULT NOW()
);