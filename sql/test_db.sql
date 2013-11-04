-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2013 at 08:12 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`) VALUES
(1, 'Titre 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam turpis neque, placerat eu arcu id, feugiat fringilla purus. Phasellus imperdiet dui orci, a sollicitudin ligula imperdiet quis. Nullam feugiat orci magna, in ultricies tortor hendrerit quis. Donec non tortor bibendum, venenatis ante consectetur, malesuada dolor. Suspendisse gravida aliquam lorem et sollicitudin. Mauris quis nisl a mauris vestibulum ullamcorper. Suspendisse fermentum pulvinar eros, vitae malesuada enim volutpat a. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer facilisis ut urna vel eleifend.'),
(2, 'Titre 2', 'Donec felis diam, lobortis eget pretium in, rutrum quis velit. Aenean non purus odio. Praesent porttitor nisl eu velit convallis, id vehicula dolor blandit. Donec mattis ullamcorper tortor, ac congue eros malesuada ut. Etiam at mi mattis, sagittis velit nec, eleifend purus. Sed interdum justo eu vestibulum tincidunt. Curabitur ullamcorper porttitor sem. Ut porttitor laoreet orci, in fermentum nisi tempor sit amet. Sed condimentum metus lacinia libero posuere, at ultricies quam ornare. Nam tincidunt gravida dui, non pulvinar turpis. Nullam ut turpis auctor, mollis arcu eu, porttitor nunc. Proin non fringilla orci, ut lacinia dui. Integer quis faucibus felis, vel congue lectus. Nulla id sapien scelerisque mauris ullamcorper imperdiet id laoreet orci. Vestibulum a varius dui. Sed imperdiet massa eget lacinia feugiat.'),
(3, 'Titre 3', 'Vestibulum vel porttitor metus, placerat ultricies nulla. Phasellus pharetra erat vitae diam mollis, et viverra odio fringilla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed in leo pulvinar, egestas nunc non, pharetra lacus. Etiam nunc tellus, gravida vel congue vitae, hendrerit quis sem. Nulla vitae consequat sem, eget posuere metus. Aliquam auctor diam quis ante rhoncus imperdiet.'),
(4, 'Titre 4', 'Morbi rhoncus quam eget auctor condimentum. In tempus mi nec eros aliquet laoreet. Nullam non mauris pretium, luctus mi eget, gravida mauris. Nullam cursus ornare sapien, eu malesuada lacus ullamcorper eget. Proin quis molestie ipsum. Nulla eget porttitor nunc, nec ultrices tortor. In vitae molestie orci, ut gravida leo. Maecenas congue volutpat rhoncus. Etiam cursus mauris at metus tempus, ut sollicitudin nibh molestie. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis ligula diam, mattis non dolor ac, venenatis vehicula nulla. Curabitur ultrices sollicitudin justo nec auctor. Integer faucibus scelerisque eros et aliquam.');
