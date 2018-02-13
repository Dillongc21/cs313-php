DROP TABLE IF EXISTS "scripture";

CREATE TABLE "scripture" (
  --Column      Data Type     Constraints    --
  id            SERIAL        PRIMARY KEY   NOT NULL,
  book          VARCHAR(255)  NOT NULL,
  chapter       INT           NOT NULL,
  verse         INT           NOT NULL,
  content       VARCHAR(4000) NOT NULL
);

CREATE TABLE "scripture-topic" (
  --Column      Data Type     Constraints    --
  topic_id      INT           REFERENCES topic(id),
  scripture_id  INT           REFERENCES scripture(id)
);