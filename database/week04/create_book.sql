DROP TABLE IF EXISTS "book";

CREATE TABLE "book"(

  --Column      Data Type     Constraints    --
  book_id       SERIAL        PRIMARY KEY   NOT NULL,
  title         VARCHAR(255)                NOT NULL,
  volume        INT,
  date_added    TIMESTAMP                   DEFAULT NOW()
);