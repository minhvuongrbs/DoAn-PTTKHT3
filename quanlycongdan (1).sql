-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2018 lúc 02:37 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlycongdan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer`
--

CREATE TABLE `answer` (
  `AnsId` int(10) NOT NULL,
  `QuestionId` int(10) NOT NULL,
  `EmployeeId` int(10) NOT NULL,
  `Content` text NOT NULL,
  `ResponseDay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorycriminal`
--

CREATE TABLE `categorycriminal` (
  `CacId` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `categorycriminal`
--

INSERT INTO `categorycriminal` (`CacId`, `Name`, `Content`) VALUES
(1, 'tromcuop', 't?i tr?m c??p'),
(2, 'cong vu', 'không ch?p hành lu?t v? an toàn giao thông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorypaper`
--

CREATE TABLE `categorypaper` (
  `CapId` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `citizen`
--

CREATE TABLE `citizen` (
  `CitId` int(10) NOT NULL,
  `FullName` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birthday` date NOT NULL,
  `HomeAddress` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `HomeTown` varchar(500) NOT NULL,
  `PlaceofBirth` varchar(100) NOT NULL,
  `Nation` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `IssuedBy` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(100) NOT NULL,
  `StatusMarriage` varchar(50) NOT NULL,
  `Academiclevel` varchar(20) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `CMND` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `citizen`
--

INSERT INTO `citizen` (`CitId`, `FullName`, `Birthday`, `HomeAddress`, `HomeTown`, `PlaceofBirth`, `Nation`, `Gender`, `Nationality`, `Religion`, `Date`, `IssuedBy`, `Description`, `Image`, `StatusMarriage`, `Academiclevel`, `Phone`, `CMND`, `Email`, `Status`) VALUES
(1, 'Tran Van Nam', '2018-05-22', 'Da Nang', 'Ha Tinh', 'Ha Tinh', 'Viet Nam', '0', 'Viet Nam', 'Khong', '2018-05-22', 'Ha Tinh', 'Nothing', '', '0', 'Trung Hoc Pho Thong', 913174122, 184231203, 'trannam123@gmai.com', b'1'),
(2, 'Tran Thai Bao', '1996-03-12', 'Qu?ng B?nh', 'Da Nang', 'Da Nang', 'Viet Nam', '1', 'Vi?t Nam', 'Không', '2018-05-01', '?à N?ng', 'Qu?ng Bình', '', '1', '??i h?c', 0, 1214123, 'hainam@gmail.com', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `criminalrecord`
--

CREATE TABLE `criminalrecord` (
  `CrrId` int(10) NOT NULL,
  `CategoryCriminalId` int(10) NOT NULL,
  `Number` varchar(50) NOT NULL,
  `ExecutionDate` date NOT NULL,
  `NumMonth` date NOT NULL,
  `CitizenId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `criminalrecord`
--

INSERT INTO `criminalrecord` (`CrrId`, `CategoryCriminalId`, `Number`, `ExecutionDate`, `NumMonth`, `CitizenId`) VALUES
(12, 1, 'rè1', '2018-05-03', '2018-05-21', 2),
(13, 2, 'ctqd 5341', '1123-03-12', '1628-02-14', 2),
(14, 1, 'dfafsdf1', '0121-12-12', '3232-02-13', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `EmpId` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Active` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `levels`
--

CREATE TABLE `levels` (
  `LevId` int(10) NOT NULL,
  `LevelName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `levels`
--

INSERT INTO `levels` (`LevId`, `LevelName`) VALUES
(1, 'pro');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `otherinformation`
--

CREATE TABLE `otherinformation` (
  `OthId` int(10) NOT NULL,
  `CitizenID` int(10) NOT NULL,
  `Passport` int(20) NOT NULL,
  `IssuedBy` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `FaName` varchar(100) NOT NULL,
  `MoName` varchar(100) NOT NULL,
  `MateName` varchar(100) NOT NULL,
  `NuInsurance` int(20) NOT NULL,
  `Job` varchar(100) NOT NULL,
  `Company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `papers`
--

CREATE TABLE `papers` (
  `PapId` int(10) NOT NULL,
  `CategoryPaperId` int(10) NOT NULL,
  `Content` text NOT NULL,
  `DateFill` date NOT NULL,
  `DeliveryDate` date NOT NULL,
  `ReceivingAgency` varchar(50) NOT NULL,
  `CitizenId` int(10) NOT NULL,
  `StatusPay` bit(1) NOT NULL,
  `Status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `QueId` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `Content` text NOT NULL,
  `RequestDay` date NOT NULL,
  `Address` varchar(200) NOT NULL,
  `UrlImage` varchar(100) NOT NULL,
  `UrlVideo` varchar(100) NOT NULL,
  `UrlFile` varchar(100) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `temporary`
--

CREATE TABLE `temporary` (
  `TemId` int(10) NOT NULL,
  `CitizenID` int(10) NOT NULL,
  `RegistrationDate` date NOT NULL,
  `DateEnd` date NOT NULL,
  `AddressCurrent` varchar(100) NOT NULL,
  `AddressNew` varchar(100) NOT NULL,
  `Discription` varchar(150) NOT NULL,
  `Status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UseId` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `LevelId` int(10) NOT NULL,
  `Citizenid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UseId`, `UserName`, `Password`, `LevelId`, `Citizenid`) VALUES
(2, 'vuong', '123', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`AnsId`),
  ADD KEY `QuestionId` (`QuestionId`),
  ADD KEY `EmployeeId` (`EmployeeId`);

--
-- Chỉ mục cho bảng `categorycriminal`
--
ALTER TABLE `categorycriminal`
  ADD PRIMARY KEY (`CacId`);

--
-- Chỉ mục cho bảng `categorypaper`
--
ALTER TABLE `categorypaper`
  ADD PRIMARY KEY (`CapId`);

--
-- Chỉ mục cho bảng `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`CitId`);

--
-- Chỉ mục cho bảng `criminalrecord`
--
ALTER TABLE `criminalrecord`
  ADD PRIMARY KEY (`CrrId`),
  ADD KEY `CategoryCriminalId` (`CategoryCriminalId`),
  ADD KEY `CitizenId` (`CitizenId`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmpId`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`LevId`);

--
-- Chỉ mục cho bảng `otherinformation`
--
ALTER TABLE `otherinformation`
  ADD PRIMARY KEY (`OthId`),
  ADD KEY `CitizenID` (`CitizenID`);

--
-- Chỉ mục cho bảng `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`PapId`),
  ADD KEY `CategoryPaperId` (`CategoryPaperId`),
  ADD KEY `CitizenId` (`CitizenId`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QueId`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `temporary`
--
ALTER TABLE `temporary`
  ADD PRIMARY KEY (`TemId`),
  ADD KEY `CitizenID` (`CitizenID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UseId`),
  ADD KEY `LevelId` (`LevelId`),
  ADD KEY `Citizenid` (`Citizenid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answer`
--
ALTER TABLE `answer`
  MODIFY `AnsId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categorycriminal`
--
ALTER TABLE `categorycriminal`
  MODIFY `CacId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `categorypaper`
--
ALTER TABLE `categorypaper`
  MODIFY `CapId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `citizen`
--
ALTER TABLE `citizen`
  MODIFY `CitId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `criminalrecord`
--
ALTER TABLE `criminalrecord`
  MODIFY `CrrId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `EmpId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `levels`
--
ALTER TABLE `levels`
  MODIFY `LevId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `otherinformation`
--
ALTER TABLE `otherinformation`
  MODIFY `OthId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `papers`
--
ALTER TABLE `papers`
  MODIFY `PapId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `QueId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `temporary`
--
ALTER TABLE `temporary`
  MODIFY `TemId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UseId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`QuestionId`) REFERENCES `questions` (`QueId`),
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`EmployeeId`) REFERENCES `employees` (`EmpId`);

--
-- Các ràng buộc cho bảng `criminalrecord`
--
ALTER TABLE `criminalrecord`
  ADD CONSTRAINT `criminalrecord_ibfk_1` FOREIGN KEY (`CategoryCriminalId`) REFERENCES `categorycriminal` (`CacId`),
  ADD CONSTRAINT `criminalrecord_ibfk_2` FOREIGN KEY (`CitizenId`) REFERENCES `citizen` (`CitId`);

--
-- Các ràng buộc cho bảng `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UseId`);

--
-- Các ràng buộc cho bảng `otherinformation`
--
ALTER TABLE `otherinformation`
  ADD CONSTRAINT `otherinformation_ibfk_1` FOREIGN KEY (`CitizenID`) REFERENCES `citizen` (`CitId`);

--
-- Các ràng buộc cho bảng `papers`
--
ALTER TABLE `papers`
  ADD CONSTRAINT `papers_ibfk_1` FOREIGN KEY (`CategoryPaperId`) REFERENCES `categorypaper` (`CapId`),
  ADD CONSTRAINT `papers_ibfk_2` FOREIGN KEY (`CitizenId`) REFERENCES `citizen` (`CitId`);

--
-- Các ràng buộc cho bảng `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UseId`);

--
-- Các ràng buộc cho bảng `temporary`
--
ALTER TABLE `temporary`
  ADD CONSTRAINT `temporary_ibfk_1` FOREIGN KEY (`CitizenID`) REFERENCES `citizen` (`CitId`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`LevelId`) REFERENCES `levels` (`LevId`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`Citizenid`) REFERENCES `citizen` (`CitId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
