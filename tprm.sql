-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 11:08 AM
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
(1, '<p style=\"text-align:center\"><strong>We would love to hear from you</strong><br />\r\nWhat ever questions you have about pricing, features, trails, need a demo.<br />\r\nOur team will be ready to help you.</p>\r\n');

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
(1, 'ourservices', '<p>Businesses and regulators expect organizations to assess the security of their third parties, but how can we assess the security of so many and keep the cost under control? Third-party breaches leave an organization powerless, exposed to severe reputation damage and complicated clean-up to get back on track. Third-party relationships are vital to the success of an organization, but are the risk of doing business higher than the value? Establishing a third-party risk management program is essential to help organizations maintain visibility into their vendor ecosystem.</p>\r\n\r\n<p>The operational drain to keep up with hundreds to thousands of vendor relationships can be suffocating to an organization&rsquo;s resources. Vendors must be inventoried, analyzed for risk, have completed security risk assessments, implemented remediation requirements and maintained year after year for upto-date information. And what about when risks change? Organizations need a partner to help plan, develop and manage their third-party risk program successfully.</p>\r\n\r\n<p>Let us handle the manual labor of third party risk assessment by collaborating with our experts to reduce the workload and to mature your program while confidently achieving your true desired program outcome. Our talented team can review and validate the security controls of your vendors and as well help track and manage remediation activity with your vendors. Here is a snap shot of our services:</p>\r\n');

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
(1, '<ul>\r\n	<li>Industry Expertise. At the center of the Risk Karma&rsquo;s (TPRM) as-a-Service solution are industry thought leaders and security practitioners with deep experience in developing third-party risk programs and/or executing high quality 3rd party risk assessments for companies of all sizes and industry sectors. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</li>\r\n	<li>Ability to cost effectively scale third-party risk management program efforts.</li>\r\n	<li>Make quick, intelligent and consistent decisions on your relationships with your third parties.&nbsp; &nbsp;&nbsp;</li>\r\n	<li>Reduced overall costs with conducting third party assessments.</li>\r\n	<li>It lets you address potential risks with fewer resources and in less time.</li>\r\n	<li>Gives you an opportunity to concentrate on your core business functions.</li>\r\n	<li>Offers you a framework for your organization and your vendors.</li>\r\n	<li>Enhances the integrity, confidentiality, and obtainability of your services.</li>\r\n	<li>Drives financial and operational competences.</li>\r\n	<li>Better assurances that the reputation and quality of your services and products are not ruined.</li>\r\n	<li>Bottom line - Drive better desired risk-based outcomes with your third parities relationships.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style=\"text-align:center\"><span style=\"font-size:26px\"><strong>Use<span style=\"color:#dc3545\"> Cases</span></strong></span></div>\r\n\r\n<div style=\"text-align:center\">&nbsp;</div>\r\n\r\n<div>\r\n<ul>\r\n	<li>Allow existing staff to focus on contracted third parties and us to handle third party assessments during RFI/RFP evaluations.</li>\r\n	<li>Allow existing staff to focus on high-risk complex strategic third parties and us to handle med-risk tactical third parties leveraged for short-term project work.</li>\r\n	<li>Augment existing staff and allow us to take care of supplier assessment overflow when and as needed like during end-of-quarter when deals need to be executed.</li>\r\n	<li>Better empower tools investments - Tools (automation) alone can only help collect and gather data, human-based risk analysis drive true risk identification through validation and remediation services.</li>\r\n</ul>\r\n</div>\r\n\r\n<div style=\"text-align:center\">&nbsp;</div>\r\n');

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
-- Indexes for table `pricelist`
--
ALTER TABLE `pricelist`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
