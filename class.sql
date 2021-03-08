SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `classics` (
                         `id` int(11) NOT NULL INCREMENT ,
                         `name` varchar(255) DEFAULT NULL,
                         `age` tinyint(4) DEFAULT NULL,
                         `address` varchar(200) DEFAULT NULL,
                         `telephone` varchar(20) DEFAULT NULL
)

INSERT INTO `classics` (`id`, `name`, `age`, `address`, `telephone`) VALUES
(1, 'Nguyen Van A', 25, 'Ha Noi', '09875343534'),
(2, 'Nguyen THi B', 19, 'Thanh Hoa', '09875342342'),
(3, 'Nguyen Tuan K', 22, 'Thai Binh', '0978534234'),
(4, 'Nguyen Van C', 24, 'Phu Tho', '0987432123')

ALTER TABLE `classics`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `classics`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;