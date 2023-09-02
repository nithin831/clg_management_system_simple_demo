

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

`


-- --------------------------------------------------------


-- Table structure for table `login`


CREATE TABLE `login` (
  `s_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Dumping data for table `login`


INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------


-- Table structure for table `students`


CREATE TABLE `students` (
  `roll_no` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `class` varchar(11) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Dumping data for table `students`


INSERT INTO `students` (`roll_no`, `name`, `father_name`, `class`, `mobile`, `email`, `password`, `remark`) VALUES
('1DS19CS051', 'Godlee', 'Joy', 'B', '1232313123', 'godlee@gmail.com', 'godlee@123', '');

-- --------------------------------------------------------

-- Table structure for table `teachers`

CREATE TABLE `teachers` (
  `s_no` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `courses` varchar(250) NOT NULL,
  'email' varchar(100) NOT NULL,
  'password' varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Dumping data for table `teachers`

INSERT INTO `teachers` (`s_no`, `t_id`, `name`, `mobile`, `courses`,'email','password') VALUES
(1, 101, 'darshan ', '9972727499', 'Physics, Maths','darshan@gmail.com',123);




-- Indexes for table `login`

ALTER TABLE `login`
  ADD PRIMARY KEY (`s_no`);


-- Indexes for table `teachers`

ALTER TABLE `teachers`
  ADD PRIMARY KEY (`s_no`);



-- AUTO_INCREMENT for table `login`

ALTER TABLE `login`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


-- AUTO_INCREMENT for table `teachers`

ALTER TABLE `teachers`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;


