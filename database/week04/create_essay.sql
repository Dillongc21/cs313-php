DROP TABLE IF EXISTS "essay";

CREATE TABLE "essay"(

  --Column        Data Type     Constraints--
  essay_id        SERIAL        PRIMARY KEY                         NOT NULL,
  essay_text      VARCHAR(1000) UNIQUE                              NOT NULL,
  selection_id    INT           REFERENCES selection(selection_id)  NOT NULL,
  date_added      TIMESTAMP                                         DEFAULT NOW()
);