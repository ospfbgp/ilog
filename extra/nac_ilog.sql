USE ilog;

CREATE TABLE `ignition_catId_10` (
    `datetime` datetime DEFAULT NULL,
    `IP` varchar(32) DEFAULT NULL,
    `MAC` varchar(32) DEFAULT NULL,
    `Username` varchar(100) DEFAULT NULL,
    `Switch` varchar(100) DEFAULT NULL,
    `SwitchPortId` varchar(100) DEFAULT NULL,
    `Hostname` varchar(100) DEFAULT NULL,
    `OS` varchar(100) DEFAULT NULL,
    `State` varchar(100) DEFAULT NULL,
    `ExtendedState` varchar(100) DEFAULT NULL,
    `Reason` varchar(100) DEFAULT NULL,
    `NACAppliance` varchar(100) DEFAULT NULL,
    `seq` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`seq`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

GRANT ALL PRIVILEGES ON ilog.* TO 'ilog'@'localhost' IDENTIFIED BY 'ilogpassword';
