CREATE TABLE `agenda(tijd over)`(
    `agenda_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `start_time` DATETIME NOT NULL,
    `end_time` DATETIME NOT NULL,
    `event_title` VARCHAR(255) NOT NULL,
    `event_desc` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `agenda(tijd over)` ADD PRIMARY KEY(`agenda_id`);
CREATE TABLE `pills`(
    `pill_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `pill-name` VARCHAR(255) NOT NULL,
    `pill_amount` BIGINT NOT NULL,
    `description` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `pills` ADD PRIMARY KEY(`pill_id`);
CREATE TABLE `notities`(
    `notitie_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` BIGINT NOT NULL,
    `title` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `date` DATE NOT NULL
);
ALTER TABLE
    `notities` ADD PRIMARY KEY(`notitie_id`);
CREATE TABLE `users`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `users` ADD PRIMARY KEY(`id`);
ALTER TABLE
    `notities` ADD CONSTRAINT `notities_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`id`);
ALTER TABLE
    `agenda(tijd over)` ADD CONSTRAINT `agenda(tijd over)_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`id`);
ALTER TABLE
    `pills` ADD CONSTRAINT `pills_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`id`);