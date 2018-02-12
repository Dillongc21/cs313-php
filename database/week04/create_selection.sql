DROP TABLE IF EXISTS "selection";

CREATE TABLE "selection"(

  --Column        Data Type     Constraints--
  selection_id    SERIAL        PRIMARY KEY                     NOT NULL,
  selection_text  VARCHAR(1000) UNIQUE                          NOT NULL,
  chapter_id      INT           REFERENCES chapter(chapter_id)  NOT NULL,
  date_added      TIMESTAMP                                     DEFAULT NOW()
);