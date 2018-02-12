DROP TABLE IF EXISTS "author";

CREATE TABLE "author"(

  --Column      Data Type     Constraints    --
  author_id     SERIAL        PRIMARY KEY   NOT NULL,
  first_name    VARCHAR(255)                NOT NULL,
  last_name     VARCHAR(255)                NOT NULL,
  date_added    TIMESTAMP                   DEFAULT NOW()
);