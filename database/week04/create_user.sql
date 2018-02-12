DROP TABLE IF EXISTS "user";

CREATE TABLE "user"(

--Column      Data Type     Constraints    --
  user_id     SERIAL        PRIMARY KEY   NOT NULL,
  username    VARCHAR(20)   UNIQUE        NOT NULL,
  password    VARCHAR(255)                NOT NULL,
  first_name  VARCHAR(255)                NOT NULL,
  last_name   VARCHAR(255)                NOT NULL,
  date_added  TIMESTAMP                   DEFAULT NOW()
);