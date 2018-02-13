DROP TABLE IF EXISTS "topic";

CREATE TABLE "topic" (
  --Column      Data Type     Constraints    --
  id            SERIAL        PRIMARY KEY   NOT NULL,
  name          VARCHAR(255)  NOT NULL
);

INSERT INTO "topic" (name)
    VALUES ('Faith'), ('Sacrifice'), ('Charity');