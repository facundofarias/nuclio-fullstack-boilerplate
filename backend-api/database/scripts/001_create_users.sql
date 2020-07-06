CREATE TABLE users
(
    id                bigint unsigned auto_increment,
    email             varchar(255) not null,
    username          varchar(255) not null,
    first_name        varchar(255) not null,
    last_name         varchar(255) not null,
    bio               varchar(999) null,
    email_verified_at timestamp    null,
    password          varchar(255) not null,
    remember_token    varchar(100) null,
    created_at        timestamp    null,
    updated_at        timestamp    null,
    PRIMARY KEY(id),
    INDEX (email),
    CONSTRAINT users_email_unique UNIQUE (email)
);
