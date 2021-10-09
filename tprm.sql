-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 10:40 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tprm`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `tagline` varchar(1000) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `tagline`, `description`) VALUES
(1, '<p>Risk Karma is Third Party Risk Management Company.<br />\r\nRisk Karma&rsquo;s (TPRM) as-a-Service&nbsp;is an advisory and consulting service offering.</p>\r\n', '<p>The risks third parties pose to enterprises continue to mount even as security leaders accelerate their efforts to improve security overall. As CISOs improve network, cloud, endpoint, application and user level security, third parties have become the entry points for some of the largest breaches to date.&nbsp;The need to make third-party assessments in all organizations a top concern has already been validated. The proven way to fulfill and act on this growing concern is to conduct third-party risk assessments either yourself or through a trusted outsourced service provider. A third-party risk assessment is an analysis of&nbsp;vendor risk&nbsp;posed by an organization&rsquo;s third-party relationships along the entire supply chain, including vendors, service providers, and&nbsp;suppliers. Risks to be considered include security risk, business continuity risk, privacy risk, and reputational risk. Third-party risk assessments continue to remain a crucial part of every third-party risk management program (TPRM).</p>\r\n\r\n<p>Risk Karma&rsquo;s (TPRM) as-a-Service&nbsp;is an advisory and consulting service offering driven to help solve the many challenges organizations face when managing the ever-increasing risks from outsourcing to third parties.&nbsp;We are talented team of ex-CISOs and top-notch security professional that have a passion in the TPRM space.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `shortdescription` varchar(10000) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `date`, `title`, `shortdescription`, `description`) VALUES
(1, '23-06-2021', '<p>Mollitiam Industries is the Newest Cyberweapons Arms Manufacturer</p>', '<p>Wired is reporting on a company called Mollitiam Industries:</p>', '<p>Marketing materials left exposed online by a third-party claim Mollitiam&rsquo;s interception products, dubbed &ldquo;Invisible Man&rdquo; and &ldquo;Night Crawler,&rdquo; are capable of remotely accessing a target&rsquo;s files, location, and covertly turning on a device&rsquo;s camera and microphone. Its spyware is also said to be equipped with a keylogger, which means every keystroke made on an infected device &mdash; including passwords, search queries and messages sent via encrypted messaging apps &mdash; can be tracked and monitored.</p>\r\n\r\n<p>To evade detection, the malware makes use of the company&rsquo;s so-called &ldquo;invisible low stealth technology&rdquo; and its Android product is advertised as having &ldquo;low data and battery consumption&rdquo; to prevent people from suspecting their phone or tablet has been infected. Mollitiam is also currently marketing a tool that it claims enables &ldquo;mass surveillance of digital profiles and identities&rdquo; across social media and the dark web.</p>'),
(4, '24-06-2021', '<p>Targeted Cache Control</p>', '<p>Content delivery networks (CDNs) have been around and have evolved over a long time (in internet years). They all speak HTTP and you can safely rely on them to work with just about anything else that speaks HTTP. This is the beauty of standards -- HTTP in this case. What you cannot count on is there being a standard way to configure them. In some cases, this is understandable: they</p>', '<p>Content delivery networks (CDNs) have been around and have evolved over a long time (in internet years). They all speak HTTP and you can safely rely on them to work with just about anything else that speaks HTTP. This is the beauty of standards -- HTTP in this case. What you cannot count on is there being a standard way to configure them. In some cases, this is understandable: they all have different advanced features, after all. But when it comes to the basics, such as controlling how content is cached, it just makes sense to have one common way to do it. Standards tend to mean simpler documentation and fewer oddities (read: bugs).&nbsp; The winners are the users who end up saving time and gaining agility.</p>\r\n\r\n<p><a href=\"https://datatracker.ietf.org/doc/html/draft-cdn-control-header-01\">Targeted Cache Control</a>&nbsp;is the result of CDNs working together to come up with a clear and simple tool to make it easy for origins to address the CDN layer. The result is even more general and powerful: a technique to target practically any layer in the delivery of HTTP content. The first field to be defined by the draft spec is the&nbsp;<a href=\"https://datatracker.ietf.org/doc/html/draft-cdn-control-header-01#section-3\">CDN-Cache-Control</a>. A valid first reaction might be &quot;What? Another mechanism for controlling cache?&quot; But there are good reasons this is being added to the available tools. Read on to learn more.</p>\r\n\r\n<h2>What we have today</h2>\r\n\r\n<p>The standard header for controlling cache is aptly called&nbsp;<a href=\"https://datatracker.ietf.org/doc/html/rfc7234#section-5.2\">Cache-Control</a>. It provides a method for origins to indicate caching rules downstream. The original intent was between origin and browser. For example, a Cache-Control header in a response for a company&#39;s logo.jpg might look like:</p>'),
(5, '25-06-2021', '<p>Crypto Threats Surge by 500%, and It&#39;s All About the</p>', '<p>Previously reserved for early adopters and tech-savvy consumers, cryptocurrencies have gone mainstream -- with tech entrepreneurs and prominent financial institutions leading the charge. In the past year, rapidly increasing cryptocurrency rates, the introduction of new currencies, and the official trading of cryptocurrencies have called into question the threats posed by cryptomining abuse and cryptocurrency scams. In this blog, we&#39;ll examine how escalating currency rates and the continued adoption of cryptocurrencies</p>', '<p>Previously reserved for early adopters and tech-savvy consumers, cryptocurrencies have gone mainstream -- with&nbsp;<a href=\"https://www.cnbc.com/2021/02/08/tesla-buys-1point5-billion-in-bitcoin.html\">tech entrepreneurs</a>&nbsp;and prominent financial institutions leading the charge.</p>\r\n\r\n<p>In the past year, rapidly increasing cryptocurrency rates, the introduction of new currencies, and the official trading of cryptocurrencies have called into question the threats posed by cryptomining abuse and cryptocurrency scams.</p>\r\n\r\n<p>In this blog, we&#39;ll examine how escalating currency rates and the continued adoption of cryptocurrencies impact the threat landscape -- and what our data can tell us to expect in the future.</p>\r\n\r\n<h2>Malicious cryptomining malware traffic&nbsp;</h2>\r\n\r\n<p>In the past few years, malware variants that infect both personal computers and corporate servers have become an increasing trend. Their objective is to utilize infected device computing resources for cryptomining activities. Sampled DNS traffic data between January 2020 and March 2021 shows a correlation in the surging increase in traffic from cryptomining malware and the price increases of both Bitcoin and Ethereum cryptocurrencies.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `commitment`
--

CREATE TABLE `commitment` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commitment`
--

INSERT INTO `commitment` (`id`, `icon`, `title`, `description`) VALUES
(1, ' fas fa-thumbs-up', ' Guide With Expertise', ' We work with customers and vendors in a consultative/advisory and collaborative way'),
(2, ' fab fa-angellist', '  Keep Promises', '  We are vigilant and focused on doing what we say and, where possible, exceed customer expectations.'),
(3, ' fas fa-paper-plane', ' Cultivate Progress', ' We help customers evolve their vendor risk management maturity at the right pace.'),
(4, ' fas fa-clock', ' Constantly Evolve & Mature', ' We continuously improve what we do, and increase the value we bring to our customers.'),
(5, ' fas fa-handshake', ' Help Customer Achieve Desired Outcomes', ' We help businesses prioritize their efforts in a practical manner that’s impactful'),
(6, ' fas fa-phone', ' Help Customer Achieve Desired Outcomes', ' We help businesses prioritize their efforts in a practical manner that’s impactful'),
(7, ' fas fa-unlink', ' Remain Connected', ' Our client relationships matter. We invest in our client relationship with a shared risk/shared reward model. We do the right thing to build trust.'),
(12, 'fa fa-archive', 'Test Purpose', 'You can add any description currently i am adding for test purpose');

-- --------------------------------------------------------

--
-- Table structure for table `consulting`
--

CREATE TABLE `consulting` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consulting`
--

INSERT INTO `consulting` (`id`, `description`) VALUES
(1, '<p>Our trusted advisors help our customers get on the proactive side of cyber risk, data breaches and ransomware attacks prevention and safeguard their shareholder, customer and employee data &ndash; Our consulting team consists of seasoned former CISOs, security/compliance and risk management practitioners and corporate security program directors working together to achieve your goals!</p>\r\n\r\n<p>Our consultants help organizations:<br />\r\n1. Assist in evaluating GRC tools and Cyber Risk Rating solutions to help align their needs with the tools/solutions be considered.<br />\r\n2. Develop from ground up or enhance existing 3rd party risk management programs to help achieve desired outcomes.<br />\r\n3. Develop, align and design TPRM best practices to drive proactive cyber risk management.</p>\r\n\r\n<p>We can help and support any business in any vertical &ndash; guaranteed!</p>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h6 style=\"text-align:center\"><strong>Partial list of companies we have assisted:</strong></h6>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"5\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\">\r\n			<div><img alt=\"\" src=\"https://www.irvinecompany.com/wp-content/themes/irvinecompany-2019/assets/img/irvineco_600x60.png\" style=\"height:10px; width:100px\" /></div>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<div><img alt=\"\" src=\"data:image/jpeg;base64,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\" style=\"height:66px; width:100px\" /></div>\r\n			</td>\r\n			<td style=\"text-align:center\">\r\n			<div><img alt=\"\" src=\"https://www.cetera.com/themes/custom/cetera_portal/img/logo-dark.svg\" style=\"height:30px; width:100px\" /></div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><img alt=\"\" src=\"https://tprmtest.000webhostapp.com/images/companies/thales.png\" style=\"height:31px; width:100px\" /></td>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `date`, `name`, `email`, `subject`, `message`) VALUES
(3, '24-06-2021', 'test111', 'test@test.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `contactdescription`
--

CREATE TABLE `contactdescription` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactdescription`
--

INSERT INTO `contactdescription` (`id`, `description`) VALUES
(1, '<p style=\"text-align:center\"><span style=\"font-size:12pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><strong><em><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#040c2c\"><strong><em>Gain real time security perspective&nbsp;on your organization and/or your vendors from a hacker&rsquo;s perspective!</em></strong></span></span></span></em></strong></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><strong><span style=\"font-size:12.0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#212529\"><strong>We would love to hear from you!</strong></span></span></span></span></strong><br />\r\n<span style=\"font-size:12.0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#212529\">Whatever questions you have about our solutions, features/benefits or pricing.</span></span></span></span><br />\r\n<span style=\"font-size:12.0000pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"color:#212529\">Our team will be ready to help you.</span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><strong><span style=\"font-size:14.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#040c2c\"><strong>Contact us&nbsp;NOW for a no-obligation discovery call!</strong></span></span></span></strong></span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `newpricelist`
--

CREATE TABLE `newpricelist` (
  `id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `colname` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `col1` varchar(100) NOT NULL,
  `col2` varchar(100) NOT NULL,
  `col3` varchar(100) NOT NULL,
  `col4` varchar(100) NOT NULL,
  `datemodified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

CREATE TABLE `pricelist` (
  `id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `col1` varchar(100) NOT NULL DEFAULT '-',
  `col2` varchar(100) NOT NULL DEFAULT '-',
  `col3` varchar(100) NOT NULL DEFAULT '-',
  `col4` varchar(100) NOT NULL DEFAULT '-',
  `col5` varchar(100) NOT NULL DEFAULT '-',
  `datemodified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricelist`
--

INSERT INTO `pricelist` (`id`, `sequence`, `col1`, `col2`, `col3`, `col4`, `col5`, `datemodified`) VALUES
(1, 1, '', 'Comprehensive Cyber Risk Rating Services', 'Bundled </br> Cyber Risk Rating Service + Questionniare Asessment Service + Remediation Services', 'Comprehensive Cyber Risk Rating Service', 'Bundled </br> Cyber Risk Rating Service + Questionniare Asessment Service + Remediation Services', '2021-10-05 14:25:28'),
(2, 2, '', '$495 Per Supplier Asessment/Report', '$995 Per Supplier Asessment/Report', '$995 Per Supplier Asessment/Report', '$1499 Per Supplier Asessment/Report', '2021-10-05 14:25:28'),
(18, 12, '<b> Optional Add-on Services (Questionnaire Assessment & Remediation Service) </b>', '', '', '', '', '2021-10-05 16:43:24'),
(19, 13, 'Security Risk Questionnaire Assessment Services/w Scored Report & Evidence Collection', '$295/Supplier', 'Included', '$295/Supplier', 'Included', '2021-10-05 16:43:24'),
(20, 3, 'Ransomware Posture Assessment (Ransomware Susceptibility Index Report + Ransomware Rating/Score)', 'true', 'true', 'true', 'true', '2021-10-05 19:57:14'),
(21, 4, 'Cyber Risk Posture Assessment (Technical Report + Cyber Risk Rating/Score)', 'true', 'true', 'true', 'true', '2021-10-05 19:57:14'),
(22, 5, 'Compliance  Correlation Assessment. Mapped across 14 compliance frameworks (Compliance Report + Comp', 'true', 'true', 'true', 'true', '2021-10-05 19:57:14'),
(23, 6, 'Financial Risk Impact Assessment (FAIR Report + Fair Rating/Score', 'true', 'true', 'true', 'true', '2021-10-05 19:57:14'),
(24, 7, '-Remediation  Strategy Report - Explicit actionable information to make strategic mitigation decisio', 'true', 'true', 'true', 'true', '2021-10-05 19:57:14'),
(25, 8, 'Benchmark Report - Compare your company with others in your industry', 'true', 'true', 'true', 'true', '2021-10-05 19:57:14'),
(26, 9, 'Data Breach Index - Performance index that assigns and tracks the severity score to each breach and ', 'true', 'true', 'true', 'true', '2021-10-05 19:57:14'),
(27, 10, 'Annual Support & Maintenance', 'N/A', 'N/A', 'Included', 'Included', '2021-10-05 19:57:14'),
(28, 11, 'Online Technical Review Session (1 Hour/Month)', 'Included', 'Included', 'Included', 'Included', '2021-10-05 19:57:14'),
(29, 14, 'Risk Triage, Validation and Remediation Tracking Services', '$395/Supplier', 'Included', '$295/Supplier', 'Included', '2021-10-05 19:57:14'),
(30, 15, 'TPRM Program Advisory & Consulting Services', '$125/Hour', '$125/Hour', '$125/Hour', '$125/Hour', '2021-10-05 19:57:14'),
(31, 16, 'On-site 3rd Party Assessment Services', 'Priced Based on Scope', 'Priced Based on Scope', 'Priced Based on Scope', 'Priced Based on Scope', '2021-10-05 19:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `pricelistcolumns_mapping`
--

CREATE TABLE `pricelistcolumns_mapping` (
  `id` int(11) NOT NULL,
  `colname` varchar(100) NOT NULL,
  `nametodisplay` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricelistcolumns_mapping`
--

INSERT INTO `pricelistcolumns_mapping` (`id`, `colname`, `nametodisplay`, `cat`) VALUES
(1, 'col2', 'Comprehensive Cyber Risk Rating Service', 'Point-in-Time Snapshot Assessment (Duration: 60-days)'),
(2, 'col3', 'Bundled Cyber Risk Rating Service + Questionniare Asessment Service + Remediation Services', 'Point-in-Time Snapshot Assessment (Duration: 60-days)'),
(3, 'col4', 'Comprehensive Cyber Risk Rating Service', 'Continuous Assessment & Monitoring (Duration: Annual)'),
(4, 'col5', 'Bundled Cyber Risk Rating Service + Questionniare Asessment Service + Remediation Services', 'Continuous Assessment & Monitoring (Duration: Annual)');

-- --------------------------------------------------------

--
-- Table structure for table `pricelistdesc`
--

CREATE TABLE `pricelistdesc` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricelistdesc`
--

INSERT INTO `pricelistdesc` (`id`, `description`) VALUES
(1, '<h4><strong>Pricing Notes:</strong></h4>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">1. All Prices are List Price and Subject to Change<br />\r\n2. Volume Discounts Available (Ask for Details)</span></span></span></p>\r\n\r\n<h4><strong><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">Our Pricing Philosophy:</span></span></span></strong></h4>\r\n\r\n<h5><strong><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">Only pay for what you need:</span></span></span></strong></h5>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">Your Risk Karma cost is based on the number of suppliers you choose and whether annual continuous monitoring or point-in-time risk insights are needed . This ensures that the price is kept as low as possible and you won&#39;t be paying for unused features. You can always upgrade in the future. Point is to get started without cost being a major issue.</span></span></span></p>\r\n\r\n<h4><strong><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">Unlimited users:</span></span></span></strong></h4>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">We do not charge per-seat or per-user. This approach lets you have as many users in the system as you need to support your vendor management program without worrying about breaking the bank.</span></span></span></p>\r\n\r\n<h4><strong><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">No long-term contract:</span></span></span></strong></h4>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">Each year you will have the option of renewing. With this approach, your company gets to decide if you&#39;re happy with Risk Karma, so it&#39;s in our best interest to keep you satisfied with delivering expected outcomes and excellent customer service.</span></span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pricelist_60days`
--

CREATE TABLE `pricelist_60days` (
  `id` int(11) NOT NULL,
  `col1` varchar(1000) NOT NULL,
  `col2` varchar(1000) NOT NULL,
  `col3` varchar(1000) NOT NULL,
  `sequence` int(11) NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricelist_60days`
--

INSERT INTO `pricelist_60days` (`id`, `col1`, `col2`, `col3`, `sequence`, `datemodified`) VALUES
(2, '', 'Comprehensive Cyber Risk Rating Service', 'Bundled\r\n</br>Cyber Risk Rating Service + Questionniare Asessment Service + Remediation Services', 1, '2021-10-05 07:18:39'),
(3, 'Core Cyber Risk Rating Services', '$495\r\nPer Supplier Asessment/Report', '$995\r\nPer Supplier Asessment/Report', 2, '2021-10-05 07:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `pricelist_annual`
--

CREATE TABLE `pricelist_annual` (
  `id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `annual_col1` varchar(1000) NOT NULL,
  `annual_col2` varchar(1000) NOT NULL,
  `annual_col3` varchar(1000) NOT NULL,
  `annual_col4` varchar(1000) NOT NULL,
  `datemodified` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `privacypolicy`
--

CREATE TABLE `privacypolicy` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privacypolicy`
--

INSERT INTO `privacypolicy` (`id`, `description`) VALUES
(1, '<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">We at Risk Karma, LLC and our affiliated companies worldwide (&ldquo;Risk Karma&rdquo;) are committed to respecting your online privacy and recognize your need for appropriate protection and management of any PERSONAL INFORMATION you share with us.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Risk Karma has established this ONLINE PRIVACY POLICY so that you can understand how we use and protect your PERSONAL INFORMATION. PERSONAL INFORMATION means any information that may be used to identify an individual, including, but not limited to, a first and last name, combined with a home or other physical address, an e-mail address or other contact information, whether at work or at home. In general, you can visit Risk Karma&rsquo;s web pages without telling us who you are or revealing any PERSONAL INFORMATION about yourself. If you make certain purchases from Risk Karma on the web, use certain services provided by Risk Karma, or register new purchases with Risk Karma electronically, we may ask you to provide PERSONAL INFORMATION.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><strong><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\"><strong>1. NOTICE AND DISCLOSURE</strong></span></span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Risk Karma collects and uses your PERSONAL INFORMATION to provide our services, complete transactions, process payments, communicate with you and provide you with information and updates regarding our products and services. Third parties may provide services and information available on Risk Karma.com on Risk Karma&rsquo;s behalf. Risk Karma may provide information, including PERSONAL INFORMATION that Risk Karma collects on the web to third party service providers to help us deliver programs, products, information and services. Service providers may also assist Risk Karma maintain its web site and mailing lists. These third party service providers are obligated to protect your PERSONAL INFORMATION on Risk Karma&rsquo;s behalf, and to comply with this ONLINE PRIVACY POLICY.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">We may also provide PERSONAL INFORMATION to our business partners who may have products and services that may be of interest to you, and who may use your PERSONAL INFORMATION for marketing purposes.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">If you choose to provide us with your PERSONAL INFORMATION, we may transfer that PERSONAL INFORMATION within Risk Karma, across borders and from your country to other countries around the world. If you are subject to the European Union Data Protection Directive, laws implementing the Directive, or similar laws, you hereby freely consent to the transfer of your PERSONAL INFORMATION outside of the European Union to the United States and other countries and to the</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">use of your PERSONAL INFORMATION by Risk Karma as described in this ONLINE PRIVACY POLICY.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Risk Karma will only transfer your PERSONAL INFORMATION without your consent to third parties who are not bound to act on Risk Karma&rsquo;s behalf if such transfer is legally required, if necessary to protect the rights, property, or personal safety of Risk Karma, its customers and/or the public, or to Risk Karma&rsquo;s successors-in-interest.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><strong><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\"><strong>2. CHOICE</strong></span></span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">You may choose whether or not to provide PERSONAL INFORMATION to Risk Karma. If you choose not to provide the PERSONAL INFORMATION we request, you can still visit most of the Risk Karma web site, but you may be unable to access certain options, offers and services that require our interaction with you.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><strong><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\"><strong>3. SECURITY</strong></span></span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Risk Karma is committed to maintaining the security of your PERSONAL INFORMATION, and we take reasonable and appropriate precautions to protect the PERSONAL INFORMATION that you share with us from unauthorized access, disclosure, alteration or destruction.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><strong><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\"><strong>4. COOKIES AND OTHER TRACKING TECHNOLOGIES</strong></span></span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Some of our web pages utilize &ldquo;COOKIES&rdquo; and other tracking technologies to store information about you on your computer hard drive when you access Risk Karma web pages using your browser. We may use cookies in order to provide you with a personalized level of service once you have registered. Otherwise, we will not use cookies if you simply visit the web site. Some COOKIES and other technologies may serve to recall PERSONAL INFORMATION previously indicated by a web user. Most browsers allow you to control COOKIES, including whether or not to accept them and how to remove them.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">You may set most browsers to notify you if you receive a COOKIE or you may choose to block COOKIES with your browser, but please note that if you choose to block your COOKIES, certain parts of the web site and application will not function properly.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Tracking technologies may record information such as Internet domain and host names; Internet protocol (IP) addresses; browser software and operating system types; clickstream patterns; and dates and times that our site is accessed. Our use of COOKIES and other tracking technologies allows us to improve our web site and your web experience. We may also analyze information that does not contain PERSONAL INFORMATION for trends and statistics.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><strong><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\"><strong>5. YOUR CONSENT</strong></span></span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">By using this web site, you consent to the terms of our ONLINE PRIVACY POLICY and to Risk Karma&rsquo;s processing of PERSONAL INFORMATION for the purposes given above.</span></span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>6. CHANGES</strong></strong></p>\r\n\r\n<p>Risk Karma may from time to time update this ONLINE PRIVACY POLICY, and the date of any revisions will be stated at the top of this web page. If we make any material changes to this ONLINE PRIVACY POLICY, we will notify you and, at your request, Risk Karma will delete your PERSON</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `proofofsolution`
--

CREATE TABLE `proofofsolution` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proofofsolution`
--

INSERT INTO `proofofsolution` (`id`, `description`) VALUES
(1, '<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><strong><span style=\"font-size:14.0000pt\"><span style=\"font-family:Calibri\">Case Study #1 - Latest Victim: Supplier- Kaseya </span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">On July 2, 2021, researchers discovered that more than 1,500 Kaseya Virtual System/Server&nbsp;</span></span></span></span><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Administrator (VSA) servers were compromised by the REvil ransomware group by exploiting an&nbsp;</span></span></span></span><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">authentication bypass, an arbitrary file upload, and code injection vulnerabilities. Kaseya&nbsp;</span></span></span></span><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">provides remote management solutions with these on-premise VSA servers to Managed&nbsp;</span></span></span></span><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Service Providers (MSPs) all around the world. These MSPs support and supply IT services to&nbsp;</span></span></span></span><span style=\"font-size:12pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">many businesses including enterprise organizations, SMBs, local and state governments.</span></span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">What are Risk Karma&rsquo;s cyber ratings for Kaseya?</span></span></span></span></strong></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Even though the exact initial access method used by threat actors to discover and exploit the&nbsp;</span></span></span></span><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">vulnerability on Kaseya VSA servers is not known, our solution discovered that there are several</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">indicators leading to known possibilities. </span></span><strong><span style=\"font-size:12.0000pt\"><span style=\"background-color:#ffff00\"><span style=\"font-family:Calibri\">After examining Kaseya&rsquo;s cyber posture over the last 12 months, our team discovered Kaseya&rsquo;s cyber rating dropped from a &lsquo;B&rsquo; to &lsquo;C&rsquo; on an A-to-F rating scale (84 to 76 on a 0-100 numerical scale).</span></span></span></strong><strong>&nbsp;</strong><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">The rating decreases mostly due to poor grades for Patch Management,</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Credential Management, Application Security, and SSL/TLS Strength. These ratings indicate the threat actors might have accessed some of Kaseya&rsquo;s systems through:</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">●</span></span><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">&nbsp;Exploiting unpatched vulnerabilities on out-of-date systems</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">●</span></span><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">&nbsp;Credential-stuffing attacks by using leaked credentials</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">●</span></span><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">&nbsp;Phishing attacks by exploiting the poor email configuration</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">●</span></span><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">&nbsp;SQL injection types of attacks on web applications</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><img alt=\"\" src=\"http://tprmtest.000webhostapp.com/images/proofofsolutions/case1img1.png\" style=\"display:block; height:385px; margin-left:auto; margin-right:auto; width:701px\" /></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#000000\">Our new </span></span></span><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#1155cd\">Ransomware Susceptibility Index</span></span></span><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#000000\">&nbsp;(RSI) discovers the likelihood an organization&nbsp;</span></span></span></span></span><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#000000\">will experience a ransomware attack on a scale of 0 (less likely) to 1 (highly likely). Our research&nbsp;</span></span></span></span></span><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#000000\">shows that any company over .50 RSI&trade; is highly likely to become a victim.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><strong><span style=\"font-size:12.0000pt\"><span style=\"background-color:#ffff00\"><span style=\"font-family:Calibri\"><span style=\"color:#000000\">Before the incident, Kaseya&rsquo;s RSI&trade; was 0.651, indicating a high susceptibility to a ransomware&nbsp;</span></span></span></span></strong></span></span><span style=\"font-size:12pt\"><span style=\"background-color:#ffffff\"><span style=\"font-family:Calibri\"><strong><span style=\"font-size:12.0000pt\"><span style=\"background-color:#ffff00\"><span style=\"font-family:Calibri\"><span style=\"color:#000000\">Attack.</span></span></span></span></strong></span></span></span></p>\r\n\r\n<p><img alt=\"\" src=\"http://tprmtest.000webhostapp.com/images/proofofsolutions/case1img2.png\" style=\"display:block; height:216px; margin-left:auto; margin-right:auto; width:552px\" /><img alt=\"\" src=\"http://tprmtest.000webhostapp.com/images/proofofsolutions/case1img3.png\" style=\"display:block; height:307px; margin-left:auto; margin-right:auto; width:215px\" /></p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><strong><span style=\"font-size:14.0000pt\"><span style=\"font-family:Calibri\">Case Study #2 - Latest Victim: Health Service Executive</span></span></strong></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">On May 14 2021, the Health Service Executive of Ireland suffered a major ransomware cyberattack that caused all of its IT system nationwide to be shut down. This was the most significant cybercrime attack on an Irish state agency and the largest know attack against a health services computer system.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">What are Risk Karma&rsquo;s cyber ratings for Health Service Executive?</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><img alt=\"\" src=\"http://tprmtest.000webhostapp.com/images/proofofsolutions/case2img1.png\" style=\"display:block; height:106px; margin-left:auto; margin-right:auto; width:701px\" /></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#333333\">They were </span></span></span><strong><span style=\"font-size:12.0000pt\"><span style=\"background-color:#ffff00\"><span style=\"font-family:Calibri\"><span style=\"color:#000000\">54% more</span></span></span></span></strong>&nbsp;<span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#333333\">susceptible to ransomware than the industry average !!!!</span></span></span></span></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `servicedescription`
--

CREATE TABLE `servicedescription` (
  `id` int(11) NOT NULL,
  `servicetype` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicedescription`
--

INSERT INTO `servicedescription` (`id`, `servicetype`, `description`) VALUES
(1, 'ourservices', '<p>Businesses and regulators expect organizations to assess the security of their third parties, but how can we assess the security of so many and keep the cost under control? Third-party breaches leave an organization powerless, exposed to severe reputation damage and complicated clean-up to get back on track. Third-party relationships are vital to the success of an organization, but are the risk of doing business higher than the value? Establishing a third-party risk management program is essential to help organizations maintain visibility into their vendor ecosystem.</p>\r\n\r\n<p>The operational drain to keep up with hundreds to thousands of vendor relationships can be suffocating to an organization&rsquo;s resources. Vendors must be inventoried, analyzed for risk, have completed security risk assessments, implemented remediation requirements and maintained year after year for upto-date information. And what about when risks change? Organizations need a partner to help plan, develop and manage their third-party risk program successfully.</p>\r\n\r\n<p>Let us handle the manual labor of third party risk assessment by collaborating with our experts to reduce the workload and to mature your program while confidently achieving your true desired program outcome. Our talented team can review and validate the security controls of your vendors and as well help track and manage remediation activity with your vendors. Here is a snap shot of our services:</p>\r\n\r\n<div style=\"list-style:inherit\">\r\n<ul>\r\n	<li><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Understand your company or third party&#39;s Cyber exposure</span></span></li>\r\n	<li><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Ransomware (RSI) Assessment, know the likelihood of a ransomware attack on your organization or your third parties</span></span></li>\r\n	<li><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Need annual cyber security monitoring performed on your organization and/or your third party&#39;s cyber security status&nbsp;</span></span></li>\r\n	<li><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Needing to show compliance on your company&#39;s Cyber Security Insurance</span></span></li>\r\n	<li><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">No spreadsheets or questionnaires needed (unless you also require them as well) &ndash; we can support you with both</span></span></li>\r\n	<li><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">All scores/rating based on OPEN STANDARD (NIST, MITRE, FAIR, CVSS) &ndash; no hidden black box algorithms</span></span></li>\r\n	<li><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Each company is assigned a numerical rating (analogous to a consumer credit score) based on over 20 cyber risk controls</span></span></li>\r\n	<li><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Quantitative $ value Risk Scoring using Open FAIR risk framework</span></span></li>\r\n	<li><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Management plan provided to improve security status</span></span></li>\r\n	<li><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\">Either a 60-day point-in-time snapshot, or a continuous 365-day annual management plans are available</span></span></li>\r\n</ul>\r\n</div>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `title`, `description`) VALUES
(1, 'ourservices', '  TPRM Program </br> Advisory Services', 'Gain valuable insight, visibility and guidance to help </br> launch, operate and mature your TPRM program'),
(5, 'ourservices', 'Third-Party Security Questionnaire Assessment Services', 'Automate the collection of data and scoring on the security risk questionnaires you send to vendors. We leverage industry standard risk frameworks like ISO, NIST, SIG and Vendor Security Alliance as well compliance frameworks like PCI & HIPAA. Included in this service is our document collections & triage services that ensures that you have the right documents on file for review and that they are current and comprehensive.'),
(6, 'ourservices', 'Third-Party Document Collection Service', 'his service is our document collections & triage service that ensures that you have the right documents on file for review and that they are current and comprehensive. Our team is gathering audit reports (SOC2 TYPEII), Industry Certifications (ISO 27001), Information security policies, business continuity plans, Certificates of insurance (COIs) and results from security testing results just to name a few.'),
(7, 'ourservices', 'Third-Party SOC Assessments', 'Systems and Organization Controls (SOC) audit report review. SOC reports have become the go-to evidence request for organizations when performing third-party due diligence and ongoing monitoring of their third party’s technical controls. Collecting, analyzing and understanding these SOC reports is crucial to ensure the vendor is a safe partner. Risk Karma has a highly trained and qualiﬁed staﬀ of security professionals who assess the vendor’s SOC reports and provide a comprehensive assessment regarding the vendor’s internal controls.'),
(8, 'ourservices', 'Third-Party Risk Validation Services', 'Assess and risk rate all your vendors to make informed decisions and drive efficiencies. We review the supplier responses from questionnaires against collected documents and supplier interviews to validate stated security controls exist and are implemented with the right level of maturity to be effective.'),
(9, 'ourservices', 'Third-Party Remediation Tracking Services', 'Gain comprehensive visibility into risk remediation efforts to ensure finding s have been properly remediated. Have us work with your supplier to track and manage remediation till closure based on findings from an assessment. We facilitate the risk management process for the top 5-10 risks identified.'),
(10, 'ourservices', 'Third-Party Remediation Tracking Services', 'Gain comprehensive visibility into risk remediation efforts to ensure finding s have been properly remediated. Have us work with your supplier to track and manage remediation till closure based on findings from an assessment. We facilitate the risk management process for the top 5-10 risks identified.'),
(11, 'ourservices', 'Third-Party On-site Assessment Services', 'Use us to conduct supplier site visits when remote due diligence simply isn’t enough and you need to gain deeper insights and validation on supplier controls. Onsite assessments are one type of Third-Party Assessment, and can be a great fit to evaluate an organization’s high-risk risk vendors. This type of assessment is designed to assess the highest tier vendors that process, store, or transmit critical data and information, such as personally identifiable information (PII), represent a high dollar spend and are identified as a strategic long-term supplier.'),
(12, 'forenterprise', 'Free Up Staff', 'Evolve your team from data collectors to risk managers. Allow your staff to be leveraged for highest use/highest value. The Risk Karma TPRM Service can take your entire TPRM program – from conception and strategy to implementation and remediation or just portions of it. Stop chasing down vendor responses by outsourcing data/document collection, analysis, validation and remediation efforts. In summary, Risk Karma can streamline your assessment activity, freeing your precious staff for more strategic projects saving you time and money.'),
(13, 'forenterprise', 'Manage/Mitigate Risk', 'Identify the third parties that pose you the greatest risk. Catalog suppliers based on risk and gain risk viability across your entire supply chain. Improve efficiency and productivity by focusing on managing risk, rather than on collecting vendor evidence.'),
(14, 'forenterprise', 'On-demand Assessments', 'Accelerate sourcing, RFx and evaluation processes with vendor intelligence without waiting on constrained internal teams to get it completed.'),
(15, 'forenterprise', 'Scalability', 'As your company grows, so do your needs and our services grows with you. Regardless if you decided to outsource the entire supplier assessment process to us or simply leverage us only on certain aspects of your program as needed.'),
(16, 'forenterprise', 'Strategize', 'Create a prioritized risk-based mitigation strategy that fits your needs. Our services are all customized based on what you need. We don’t believe in one-size-fits-all.'),
(17, 'forthirdparties', 'Free Up Staff', 'Spend less time filling out assessments and more time promoting your positive security posture to your prospects and clients. Allow your staff to be leveraged for highest use/highest value.'),
(18, 'forthirdparties', 'Defend and Showcase your Cyber Reputation', 'Review and correct any negative or false Cyber Security control discovered elements and improve your Cyber Security Risk Score before your customer ask to you. Includes a specific strategy report with step-by-steps instructions for a supplier to make the needed changes to improve their score/rating.'),
(19, 'forthirdparties', 'Get Back to your day job', 'Get either or both: Cyber Risk Scan & Scored Report / Industry-Standard Security Risk Assessment Questionnaire & Score Report and proactively share it with prospects and customers and then just only deal with any potential deltas in terms or questions/concerns versus starting from scratch every time a prospect or customer request a third party risk assessment on your organization. Save time and effort. We call this approach - draw blood once and re-use.'),
(20, 'forthirdparties', 'Mitigate Risk', 'Proactively managing risk on continuous bases.'),
(21, 'forthirdparties', 'Grow Your Business', 'Drive business growth with proactive security engagement with other vendors as well as enterprises.');

-- --------------------------------------------------------

--
-- Table structure for table `solution_screenshots`
--

CREATE TABLE `solution_screenshots` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solution_screenshots`
--

INSERT INTO `solution_screenshots` (`id`, `title`, `content`, `image`) VALUES
(1, '<p>VENDOR CYBER SECURITY RISK ASSESSMENT &ndash; DASHBOARD &amp; REPORT</p>', '<p>Cyber Risk rating is calculated using the MITRE Cyber Threat Susceptibility Assessment (CTSA), Common weakness Risk Analysis Framework (CWRAF), Common Weakness Scoring System (CWSS) and Common Vulnerability Scoring System (CVVS).</p>', 'http://tprmtest.000webhostapp.com/images/solutions/dashboardandreport.png'),
(2, 'RISK SCORE CARD', 'Our System evaluates the security posture for 4 main groups namely Safeguard, Privacy, Resiliency & Reputation and 20 unique categories. This data is compiled into a simple, readable report with letter-grade scores to help identify and mitigate potential security risks. Each category has summary or top riskiest assets and technical details along with mitigation, compliance, standards & regulation details can be found at the bottom of each category and the Knowledge Base.\r\n\r\n', 'http://tprmtest.000webhostapp.com/images/solutions/RiskScoreCard.png'),
(3, 'RANSOMWARE (RSI) ASSESSMENT', 'Uncover your ransomware susceptibility – know the likelihood of a ransomware attack on your organization or your third parties. The ransomware susceptibility index (RSI) follows a process of inspecting, transforming, and modeling collected data from a variety of OSINT sources (internet wide scanners, hacker forums, the deep/dark web and more). Using the data and machine learning, the correlation between controls items is identified to provide approximations. The susceptibility scale ranges from 1.0 (lowest likelihood of attack) to 1.0 (highest likelihood of attack). The RSI examines 26 unique controls to calculate index approximations.\r\n\r\n', 'http://tprmtest.000webhostapp.com/images/solutions/RSI.png'),
(4, 'Cyber Security Risk Assessment', '', 'http://tprmtest.000webhostapp.com/images/solutions/CyberSecurityRiskAssessment.png'),
(5, 'Fair Risk Rating', 'The FAIRTM (Factor Analysis of Information Risk) cyber risk framework has emerged as the premier Value at Risk (VaR) framework for cybersecurity and operational risk. The FAIRTM Institute is a non-profit professional organization dedicated to advancing the discipline of measuring and managing information risk.', 'http://tprmtest.000webhostapp.com/images/solutions/FairRiskRating.png'),
(6, 'Opensource Intelligence', 'Cyber Risk Scorecard uses Open Source Intelligence services to collect, analyze and report security related events and findings. Security companies and hackers are always scanning publicly accessible networks and share their data on the internet. This commonly referred to as Open-Source Intelligence (OSINT).', 'http://tprmtest.000webhostapp.com/images/solutions/OpensourceIntelligence.png');

-- --------------------------------------------------------

--
-- Table structure for table `termsofuse`
--

CREATE TABLE `termsofuse` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `termsofuse`
--

INSERT INTO `termsofuse` (`id`, `description`) VALUES
(1, '<p>&nbsp;</p>\r\n\r\n<p><strong>1. TERMS AND CONDITIONS OF USE</strong><br />\r\nThe following terms and conditions of use (&ldquo;TERMS OF USE&rdquo;) apply to all visitors to or users of this website. By accessing this website, the visitor or user acknowledges acceptance of these terms and conditions. In the case of any violation of these TERMS OF USE, Risk Karma, LLC (Risk Karma&rdquo;) reserves the right to seek all remedies available at law and in equity for such violations. These TERMS OF USE apply to all visits to the Risk Karma website, both now and in the future.</p>\r\n\r\n<p><strong>2. NOTICE SPECIFIC TO DOCUMENTS AVAILABLE ON THIS WEBSITE</strong><br />\r\nPermission to use documents (such as white papers, press releases, datasheets and FAQs) from this server (&ldquo;DOCUMENTS&rdquo;) is granted, provided that (1) the below copyright notice appears in all copies and that both the copyright notice and this permission notice appear, (2) use of such DOCUMENTS from this server is for informational and non-commercial or personal use only and will not be copied or posted on any network computer or broadcast in any media, and (3) no modifications of any DOCUMENTS are made. Use for any other purpose is expressly prohibited by law. DOCUMENTS specified above do not include the design or layout of the RiskKarma.com website or any other Risk Karma owned, operated, licensed or controlled site. Elements of Risk Karma &rsquo;s website are protected by trade dress and other laws and may not be copied or imitated in whole or in part. No logo, graphic, sound or image from the Risk Karma website may be copied or retransmitted unless expressly permitted in writing by Risk Karma.</p>\r\n\r\n<p><strong>3. DISCLAIMERS AND LIMITATION OF LIABILITY</strong><br />\r\nIN NO EVENT SHALL Risk Karma AND/OR ITS RESPECTIVE SUPPLIERS BE LIABLE FOR ANY DAMAGES, INCLUDING WITHOUT LIMITATION DIRECT, SPECIAL, INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION OR OTHERWISE, ARISING OUT OF OR IN CONNECTION WITH THE DOCUMENTS, PROVISION OF OR FAILURE TO PROVIDE SERVICES, OR THE USE OR PERFORMANCE OF INFORMATION AVAILABLE FROM THIS SERVER, OR OTHERWISE RELATED TO THE USE OF THIS WEBSITE. THE DOCUMENTS AND RELATED GRAPHICS PUBLISHED ON THIS SERVER COULD INCLUDE TECHNICAL INACCURACIES OR TYPOGRAPHICAL ERRORS. CHANGES ARE PERIODICALLY ADDED TO THE INFORMATION HEREIN. Risk Karma AND/OR ITS RESPECTIVE SUPPLIERS MAY MAKE CHANGES TO THE DOCUMENTS DESCRIBED HEREIN AT ANY TIME. Risk Karma AND/OR ITS RESPECTIVE SUPPLIERS MAKE NO REPRESENTATIONS ABOUT THE SUITABILITY OF THE INFORMATION CONTAINED IN THE DOCUMENTS AND RELATED GRAPHICS PUBLISHED ON THIS SERVER FOR ANY PURPOSE. ALL SUCH DOCUMENTS AND RELATED GRAPHICS ARE PROVIDED &ldquo;AS IS&rdquo; WITHOUT WARRANTY OF ANY KIND. Risk Karma AND/OR ITS RESPECTIVE SUPPLIERS HEREBY DISCLAIM ALL WARRANTIES AND CONDITIONS WITH REGARD TO THIS INFORMATION, INCLUDING ALL IMPLIED WARRANTIES AND CONDITIONS OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, SATISFACTORY QUALITY, TITLE AND NON-INFRINGEMENT AND THEIR EQUIVALENTS.</p>\r\n\r\n<p><strong>4. COMPLIANCE WITH APPLICABLE LAWS; EXPORT CONTROL LAWS; U.S. GOVERNMENT-RESTRICTED RIGHTS</strong><br />\r\nUser access to this website is governed by all applicable federal, state and local laws. All information available on the website is subject to U.S. export control laws and may also be subject to the laws of the country where you reside. You warrant that you will comply in all respects with the Export Administration Regulations and all other export and re-export laws, rules and restrictions applicable to your use of this website hereunder. All Risk Karma products and publications are commercial in nature. Use, duplication, or disclosure by the United States Government is subject to the restrictions set forth in DFARS 252.227-7013, DFARS 252.227-7015 and FAR 52.227-19. Any use, modification, reproduction, release, performance, display or disclosure of this website by the U.S. Government shall be governed solely by the terms of these TERMS OF USE and shall be prohibited except to the extent expressly permitted by these TERMS OF USE.</p>\r\n\r\n<p><strong>5. THIRD-PARTY STATEMENTS ON Risk Karma &rsquo;S WEBSITE</strong><br />\r\nRisk Karma may, but is not obligated to, monitor or review statements made by third parties on Risk Karma &rsquo;S website. Users or other third parties may post statements or information on some portions of the Risk Karma website from time to time. Risk Karma makes no representation as to the accuracy, appropriateness, legality, ownership or other aspects of such statements or information. Risk Karma expressly disclaims any liability for such third party statements under criminal or civil laws relating to defamation, intellectual property infringement, privacy, obscenity, or other areas of law.</p>\r\n\r\n<p><strong>6. LINKS TO THIRD PARTY SITES</strong><br />\r\nTHE LINKS IN Risk Karma &rsquo;S WEBSITE WILL LET YOU LEAVE Risk Karma &rsquo;S WEBSITE. THE LINKED SITES ARE NOT UNDER THE CONTROL OF Risk Karma AND Risk Karma IS NOT RESPONSIBLE FOR THE CONTENTS OF ANY LINKED SITE OR ANY LINK CONTAINED IN A LINKED SITE, OR ANY CHANGES OR UPDATES TO SUCH SITES. Risk Karma IS PROVIDING THESE LINKS TO YOU ONLY AS A CONVENIENCE, AND THE INCLUSION OF ANY LINK DOES NOT IMPLY ENDORSEMENT BY Risk Karma OF THE SITE.</p>\r\n\r\n<p><strong>7. COPYRIGHT NOTICE</strong><br />\r\nCopyright&copy; 2021 Risk Karma, LLC, 19 Honeydew, Irvine, CA 92603, U.S.A. Any rights not expressly granted herein are reserved.</p>\r\n\r\n<p><strong>8. TRADEMARKS</strong><br />\r\nRisk Karma Shared Information Risk Bureau (SIRB), Risk Karma third party risk assessment services and Risk Karma Risk Report are trademarks of Risk Karma registered in the United States and other countries. Other trademarks belong to their respective holders.</p>\r\n\r\n<p><strong>9. GENERAL</strong><br />\r\nThese TERMS OF USE shall not be governed by the U.N. Convention on Contracts for the International Sale of Goods; rather, these TERMS OF USE shall be governed by the laws of the State of California, including its Uniform Commercial Code, without reference to conflicts of laws principles. These TERMS OF USE constitute the entire agreement between us and supersedes any other communications or advertising with respect to Risk Karma &rsquo;s website. The waiver of a breach of any term hereof shall in no way be construed as a waiver of any other term or breach hereof. If any provision of these TERMS OF USE is held invalid or unenforceable, such provision shall be revised to the extent necessary to cure the invalidity or unenforceability, and the remainder of the TERMS OF USE shall continue in full force and effect. The person agreeing to these TERMS OF USE represents and warrants that such person is authorized to bind and does so bind his or her principal or employer and has adequate legal capacity to enter these TERMS OF USE. You may not assign these TERMS OF USE or any rights or obligations hereunder, directly or indirectly, by operation of law or otherwise, without the prior written consent of Risk Karma. Subject to the foregoing sentence, these TERMS OF USE shall inure to the benefit of and be binding upon the parties and their respective successors and permitted assigns.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tprmasservice`
--

CREATE TABLE `tprmasservice` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tprmasservice`
--

INSERT INTO `tprmasservice` (`id`, `description`) VALUES
(1, '<p>Risk Karma&rsquo;s Third-Party Risk Management as-a-Service is helping organizations of all sizes, in all the verticals to manage their third party risks; through its manage services approach. Select and engage in services based on your needs and pay as you go or simply leverage our entire services offering with a straightforward annual subscription fee.</p>\r\n\r\n<ul>\r\n	<li>If you&rsquo;re just getting started in setting up a TRPM program in your organization and need some guidance we can help accelerate your third-party risk management program and drive forward solutions/services that deliver outcomes.</li>\r\n	<li>If you already have a mature TPRM program in place and just need help augmenting existing staff &ndash; we can help.</li>\r\n	<li>If you need to assess third parties as part of a RFP/RFI process only &ndash; we can help.</li>\r\n	<li>If you need help and guidance in evaluating GRC solutions or cyber risk rating solutions &ndash; we can help.</li>\r\n	<li>If you simply just need help in certain aspects of your third-party risk assessment processes like: 1) document collection and gathering for supplier due diligence activities or 2) validating controls stated by suppliers in their questionnaire responses or 3) tracking and managing remediation activities on assessed suppliers or all of the above - we can help.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:22px\"><strong><span style=\"color:#dc3545\">Our&nbsp;Goals</span>&nbsp;Are&nbsp;Simple</strong></span></div>\r\n\r\n<div style=\"text-align:center\">&nbsp;</div>\r\n\r\n<ul>\r\n	<li>To offer solutions/services you can select as you grow and at the time needed with flexible pricing options that meet most all budgets requirements and needs.</li>\r\n	<li>To offer integrated TPRM related services that drive desired program outcomes for your organization.</li>\r\n</ul>\r\n\r\n<p>Risk Karma (TPRM) as-a-Service offering can bring an average 60% reduction in manual work, 45% reduction in time to identify and mitigate risk, and 300% increase in team productivity.</p>\r\n\r\n<p>In short &ndash; You need third party risk assessments done and we do third party risk assessments. In fact&rsquo;s it ALL we do. This is a serendipitous collision made in haven&hellip;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `usecases`
--

CREATE TABLE `usecases` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usecases`
--

INSERT INTO `usecases` (`id`, `description`) VALUES
(1, '<ul>\r\n	<li>Allow existing staff to focus on contracted third parties and us to handle third party assessments during RFI/RFP evaluations.</li>\r\n	<li>Allow existing staff to focus on high-risk complex strategic third parties and us to handle med-risk tactical third parties leveraged for short-term project work.</li>\r\n	<li>Augment existing staff and allow us to take care of supplier assessment overflow when and as needed like during end-of-quarter when deals need to be executed.</li>\r\n	<li>Better empower tools investments - Tools (automation) alone can only help collect and gather data, human-based risk analysis drive true risk identification through validation and remediation services.</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`) VALUES
(8, 'test', 'Batosai Ednalan'),
(9, 'caite', 'Caite Ednalan'),
(11, 'NarutoUzumaki', 'Naruto Uzumaki'),
(12, 'SasukeUchiha', 'Sasuke Uchiha');

-- --------------------------------------------------------

--
-- Table structure for table `whyriskkarma`
--

CREATE TABLE `whyriskkarma` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whyriskkarma`
--

INSERT INTO `whyriskkarma` (`id`, `description`) VALUES
(1, '<ul>\r\n	<li>Industry Expertise. At the center of the Risk Karma&rsquo;s (TPRM) as-a-Service solution are industry thought leaders and security practitioners with deep experience in developing third-party risk programs and/or executing high quality 3rd party risk assessments for companies of all sizes and industry sectors.</li>\r\n	<li>Ability to cost effectively scale third-party risk management program efforts.</li>\r\n	<li>Make quick, intelligent and consistent decisions on your relationships with your third parties.</li>\r\n	<li>Reduced overall costs with conducting third party assessments.</li>\r\n	<li>It lets you address potential risks with fewer resources and in less time.</li>\r\n	<li>Gives you an opportunity to concentrate on your core business functions.</li>\r\n	<li>Offers you a framework for your organization and your vendors.</li>\r\n	<li>Enhances the integrity, confidentiality, and obtainability of your services.</li>\r\n	<li>Drives financial and operational competences.</li>\r\n	<li>Better assurances that the reputation and quality of your services and products are not ruined.</li>\r\n	<li>Bottom line - Drive better desired risk-based outcomes with your third parities relationships.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:26px\"><strong>Use<span style=\"color:#dc3545\"> Cases</span></strong></span></div>\r\n\r\n<div style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div>\r\n<ul>\r\n	<li>Allow existing staff to focus on contracted third parties and us to handle third party assessments during RFI/RFP evaluations.</li>\r\n	<li>Allow existing staff to focus on high-risk complex strategic third parties and us to handle med-risk tactical third parties leveraged for short-term project work.</li>\r\n	<li>Augment existing staff and allow us to take care of supplier assessment overflow when and as needed like during end-of-quarter when deals need to be executed.</li>\r\n	<li>Better empower tools investments - Tools (automation) alone can only help collect and gather data, human-based risk analysis drive true risk identification through validation and remediation services.</li>\r\n</ul>\r\n</div>\r\n\r\n<div style=\"text-align:center\">&nbsp;</div>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commitment`
--
ALTER TABLE `commitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consulting`
--
ALTER TABLE `consulting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactdescription`
--
ALTER TABLE `contactdescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newpricelist`
--
ALTER TABLE `newpricelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricelistcolumns_mapping`
--
ALTER TABLE `pricelistcolumns_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricelistdesc`
--
ALTER TABLE `pricelistdesc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricelist_60days`
--
ALTER TABLE `pricelist_60days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricelist_annual`
--
ALTER TABLE `pricelist_annual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacypolicy`
--
ALTER TABLE `privacypolicy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proofofsolution`
--
ALTER TABLE `proofofsolution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicedescription`
--
ALTER TABLE `servicedescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution_screenshots`
--
ALTER TABLE `solution_screenshots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termsofuse`
--
ALTER TABLE `termsofuse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tprmasservice`
--
ALTER TABLE `tprmasservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usecases`
--
ALTER TABLE `usecases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyriskkarma`
--
ALTER TABLE `whyriskkarma`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `commitment`
--
ALTER TABLE `commitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `consulting`
--
ALTER TABLE `consulting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newpricelist`
--
ALTER TABLE `newpricelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pricelistcolumns_mapping`
--
ALTER TABLE `pricelistcolumns_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pricelistdesc`
--
ALTER TABLE `pricelistdesc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricelist_60days`
--
ALTER TABLE `pricelist_60days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pricelist_annual`
--
ALTER TABLE `pricelist_annual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacypolicy`
--
ALTER TABLE `privacypolicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proofofsolution`
--
ALTER TABLE `proofofsolution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servicedescription`
--
ALTER TABLE `servicedescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `solution_screenshots`
--
ALTER TABLE `solution_screenshots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `termsofuse`
--
ALTER TABLE `termsofuse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usecases`
--
ALTER TABLE `usecases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `whyriskkarma`
--
ALTER TABLE `whyriskkarma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
