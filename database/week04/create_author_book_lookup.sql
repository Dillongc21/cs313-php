DROP TABLE IF EXISTS "author_book_lookup";

CREATE TABLE "author_book_lookup"(

  --Column      Data Type     Constraints    --
  book_id       INT           REFERENCES book(book_id)      NOT NULL,
  author_id     INT           REFERENCES author(author_id)  NOT NULL
);