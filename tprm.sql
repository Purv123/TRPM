-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 09:48 PM
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
(1, 'Risk Karma is Third Party Risk Management                                 Company. <br />Risk Karma’s (TPRM) as-a-Service is an advisory and consulting service offering.', '<p>The risks third parties pose to enterprises continue to mount even as security leaders accelerate their efforts to improve security overall. As CISOs improve network, cloud, endpoint, application and user level security, third parties have become the entry points for some of the largest breaches to date.&nbsp;The need to make third-party assessments in all organizations a top concern has already been validated. The proven way to fulfill and act on this growing concern is to conduct third-party risk assessments either yourself or through a trusted outsourced service provider. A third-party risk assessment is an analysis of&nbsp;vendor risk&nbsp;posed by an organization&rsquo;s third-party relationships along the entire supply chain, including vendors, service providers, and&nbsp;suppliers. Risks to be considered include security risk, business continuity risk, privacy risk, and reputational risk. Third-party risk assessments continue to remain a crucial part of every third-party risk management program (TPRM).</p>\r\n\r\n<p>Risk Karma&rsquo;s (TPRM) as-a-Service&nbsp;is an advisory and consulting service offering driven to help solve the many challenges organizations face when managing the ever-increasing risks from outsourcing to third parties.&nbsp;We are talented team of ex-CISOs and top-notch security professional that have a passion in the TPRM space.</p>\r\n');

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
(1, '23-06-2021', 'Mollitiam Industries is the Newest Cyberweapons Arms Manufacturer', 'Wired is reporting on a company called Mollitiam Industries:', '<p>Marketing materials left exposed online by a third-party claim Mollitiam’s interception products, dubbed “Invisible Man” and “Night Crawler,” are capable of remotely accessing a target’s files, location, and covertly turning on a device’s camera and microphone. Its spyware is also said to be equipped with a keylogger, which means every keystroke made on an infected device — including passwords, search queries and messages sent via encrypted messaging apps — can be tracked and monitored.</p>\r\n\r\n<p>To evade detection, the malware makes use of the company’s so-called “invisible low stealth technology” and its Android product is advertised as having “low data and battery consumption” to prevent people from suspecting their phone or tablet has been infected. Mollitiam is also currently marketing a tool that it claims enables “mass surveillance of digital profiles and identities” across social media and the dark web.</p>'),
(4, '24-06-2021', '<p>Targeted Cache Control</p>', '<p>Content delivery networks (CDNs) have been around and have evolved over a long time (in internet years). They all speak HTTP and you can safely rely on them to work with just about anything else that speaks HTTP. This is the beauty of standards -- HTTP in this case. What you cannot count on is there being a standard way to configure them. In some cases, this is understandable: they</p>', '<p>Content delivery networks (CDNs) have been around and have evolved over a long time (in internet years). They all speak HTTP and you can safely rely on them to work with just about anything else that speaks HTTP. This is the beauty of standards -- HTTP in this case. What you cannot count on is there being a standard way to configure them. In some cases, this is understandable: they all have different advanced features, after all. But when it comes to the basics, such as controlling how content is cached, it just makes sense to have one common way to do it. Standards tend to mean simpler documentation and fewer oddities (read: bugs).&nbsp; The winners are the users who end up saving time and gaining agility.</p>\r\n\r\n<p><a href=\"https://datatracker.ietf.org/doc/html/draft-cdn-control-header-01\">Targeted Cache Control</a>&nbsp;is the result of CDNs working together to come up with a clear and simple tool to make it easy for origins to address the CDN layer. The result is even more general and powerful: a technique to target practically any layer in the delivery of HTTP content. The first field to be defined by the draft spec is the&nbsp;<a href=\"https://datatracker.ietf.org/doc/html/draft-cdn-control-header-01#section-3\">CDN-Cache-Control</a>. A valid first reaction might be &quot;What? Another mechanism for controlling cache?&quot; But there are good reasons this is being added to the available tools. Read on to learn more.</p>\r\n\r\n<h2>What we have today</h2>\r\n\r\n<p>The standard header for controlling cache is aptly called&nbsp;<a href=\"https://datatracker.ietf.org/doc/html/rfc7234#section-5.2\">Cache-Control</a>. It provides a method for origins to indicate caching rules downstream. The original intent was between origin and browser. For example, a Cache-Control header in a response for a company&#39;s logo.jpg might look like:</p>'),
(5, '25-06-2021', '<p>Crypto Threats Surge by 500%, and It&#39;s All About the</p>', '<p>Previously reserved for early adopters and tech-savvy consumers, cryptocurrencies have gone mainstream -- with tech entrepreneurs and prominent financial institutions leading the charge. In the past year, rapidly increasing cryptocurrency rates, the introduction of new currencies, and the official trading of cryptocurrencies have called into question the threats posed by cryptomining abuse and cryptocurrency scams. In this blog, we&#39;ll examine how escalating currency rates and the continued adoption of cryptocurrencies</p>', '<p>Previously reserved for early adopters and tech-savvy consumers, cryptocurrencies have gone mainstream -- with&nbsp;<a href=\"https://www.cnbc.com/2021/02/08/tesla-buys-1point5-billion-in-bitcoin.html\">tech entrepreneurs</a>&nbsp;and prominent financial institutions leading the charge.</p>\r\n\r\n<p>In the past year, rapidly increasing cryptocurrency rates, the introduction of new currencies, and the official trading of cryptocurrencies have called into question the threats posed by cryptomining abuse and cryptocurrency scams.</p>\r\n\r\n<p>In this blog, we&#39;ll examine how escalating currency rates and the continued adoption of cryptocurrencies impact the threat landscape -- and what our data can tell us to expect in the future.</p>\r\n\r\n<h2>Malicious cryptomining malware traffic&nbsp;</h2>\r\n\r\n<p>In the past few years, malware variants that infect both personal computers and corporate servers have become an increasing trend. Their objective is to utilize infected device computing resources for cryptomining activities. Sampled DNS traffic data between January 2020 and March 2021 shows a correlation in the surging increase in traffic from cryptomining malware and the price increases of both Bitcoin and Ethereum cryptocurrencies.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('Test', 'test@test.com', 'Test Subject', 'Test Message');

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

CREATE TABLE `pricelist` (
  `id` int(11) NOT NULL,
  `col1` varchar(100) NOT NULL,
  `col2` varchar(100) NOT NULL,
  `col3` varchar(100) NOT NULL,
  `col4` varchar(100) NOT NULL,
  `col5` varchar(100) NOT NULL,
  `col6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricelist`
--

INSERT INTO `pricelist` (`id`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`) VALUES
(1, '', 'BASICSTARTER PLAN', 'NORMAL LIMITED SOLUTION', 'ADVANCED ADVANCED SOLUTION', 'PRO OUR COMPLETE SOLUTION', 'CAP OF UP TO 15 SUPPLIERS/MONTH 120 SUPPLIER/YEAR'),
(2, '', '$295/Report', '$495/Report', '$795/Report', '$995/Report', '$10,000/Monthly'),
(3, 'Cyber Risk Rating Services/w Scored Report', 'true', 'true', 'true', 'true', 'true'),
(4, 'Risk Validation & Prioritization Services', 'false', 'true', 'true', 'true', 'true'),
(5, 'Remediation Tracking Services', 'false', 'true', 'true', 'true', 'true'),
(6, 'Security Risk Questionnaire Assessment Services/w Scored Report', 'false', 'false', 'true', 'true', 'true'),
(7, 'Document Collections & Triage Services', 'false', 'false', 'true', 'true', 'true'),
(8, 'SOCK Assessments Services', 'false', 'false', 'false', 'true', 'true'),
(9, 'Risk Validation Services', 'false', 'false', 'false', 'true', 'true'),
(10, 'Remediation Tracking Services', 'false', 'false', 'false', 'true', 'true'),
(11, 'Trusted TPRM Program Advisory Services', '$65/Hour', '$65/Hour', '$65/Hour', '$65/Hour', 'Included (10 hours/Month)'),
(12, 'Cybersecurity Continuous Monitoring Service - TBD', 'Ad-HOC', 'Ad-HOC', 'Ad-HOC', 'Ad-HOC', 'Ad-HOC'),
(13, 'On-site Assessment Services - TBD', 'Ad-HOC', 'Ad-HOC', 'Ad-HOC', 'Ad-HOC', 'Ad-HOC');

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
(1, 'ourservices', 'TPRM Program Advisory Services', 'Gain valuable insight, visibility and guidance to help launch, operate and mature your TPRM program'),
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
-- Indexes for table `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
