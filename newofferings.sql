-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 02:26 PM
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
-- Table structure for table `newofferings`
--

CREATE TABLE `newofferings` (
  `id` int(11) NOT NULL,
  `tagline` varchar(1000) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newofferings`
--

INSERT INTO `newofferings` (`id`, `tagline`, `description`) VALUES
(1, '<p>Risk Karma is Third Party Risk Management Company.<br />\r\nRisk Karma&rsquo;s (TPRM) as-a-Service&nbsp;is an advisory and consulting service offering.</p>\r\n', '<p><strong>Risk Karma&rsquo;s High-level Offering Details:</strong></p>\r\n\r\n<ul>\r\n	<li>Understand your company or third party&#39;s Cyber exposure</li>\r\n	<li>Ransomware (RSI) Assessment, know the likelihood of a ransomware attack on your organization or your third parties</li>\r\n	<li>Need annual cyber security monitoring performed on your organization and/or your third party&#39;s cyber security status&nbsp;</li>\r\n	<li>Leverage our outsourced service for Completing Security Questionnaires - so you don&#39;t have to</li>\r\n	<li>Needing to show compliance on your company&#39;s Cyber Security Insurance</li>\r\n	<li>No spreadsheets or questionnaires needed (unless you also require them as well) &ndash; we can support you with both</li>\r\n	<li>All scores/rating based on OPEN STANDARD (NIST, MITRE, FAIR, CVSS) &ndash; no hidden black box algorithms</li>\r\n	<li>Each company is assigned a numerical rating (analogous to a consumer credit score) based on over 20 cyber risk controls</li>\r\n	<li>Quantitative $ value Risk Scoring using Open FAIR risk framework</li>\r\n	<li>Management plan provided to improve security status</li>\r\n	<li>Either a 60-day point-in-time snapshot, or a continuous 365-day annual management plans are available</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Our Eco-system Partner Referral Services:</strong></p>\r\n\r\n<p>At Risk Karma we dedicated to our services around enterprise and 3rd party cyber risk ratings and assessments services. With that said, we often get asked if we can do more cyber risk related services like Application and Networking Pen Testing, Policy Development, Compliance Gap and Readiness Assessments (ISO Cert, SOC2 Advisory, HITRUST, HIPPA and GDPR) or even offer Security Training and Courses and so on. While our experts can address these needs, we have decided to remain independent to avoid any conflict of interest with our customers. Just like you wouldn&rsquo;t want your home inspector to also provide you direct services on fixing the items identified in the inspection. There needs to be a line of separation.</p>\r\n\r\n<p>With that said, we are building out Risk Karma&rsquo;s eco-system of fully vetted Cyber Security Partners that can directly help our customer with their additional needs. Our referral services can include both cyber security services providers and products/tool providers as well. Our partners have been review for quality, comprehensiveness, value and price. In fact if our customers decide to engage with any of our eco-system partners based on our direct permission-based referral they will receive additional pricing discounts compared to if they had contacted them directly. We are just getting started and we&rsquo;re excited to create a win/win scenario for all.</p>\r\n\r\n<p><strong>Summary:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>For our customer:</strong> We connect them to fully vetted cyber security providers, matching their specific needs to the supplier&rsquo;s expertise. Cyber security continues to be an industry with an increasing number of suppliers entering the market. Understanding the offerings (product or service), how it fits in their eco-system, who to work with can be a challenge, validation of the market and building trust takes a lot of time to achieve and research. There is never a cost to our customer to get matched with our vetted cyber security providers. (of course, there is never any obligations to engage &ndash; finally decision is always theirs to make).&nbsp;</li>\r\n	<li><strong>For our eco-system cyber security partners/providers:</strong> We provide our eco-system partners&nbsp;direct meaningful (permission-based) connections and lead exposure to both directly our clients and their suppliers. Specific needs are defined out of the outcomes of the assessments and the findings that need to be remediated.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>BTW, we support and provide expsoure to all size partners/vendors...</strong></p>\r\n\r\n<p><u><strong>Start-up vendors</strong></u> &ndash; We completely understand how challenging the start-up journey can be and the work required to gain user and market exposure and traction in what&rsquo;s a very saturated cyber security marketplace. We provide you instant exposure and a consistent stream of qualified leads.</p>\r\n\r\n<p><u><strong>For more mature vendors (small-med sized) </strong></u>&ndash; We provide you direct exposure to get in front of prospects that are looking for your product or services and solutions while providing cost savings and reducing time and effort with traditional and expensive marketing activities.</p>\r\n\r\n<p><u><strong>For our larger more established vendors</strong></u> &ndash; we can help bring some of your newer/innovative unknown services and products to the market and to our customer base in a unique way to gain real-world feedback, pilots/POCs and initial engagements.</p>\r\n\r\n<p><strong>Just a small and growing list of our eco-system cyber security partners/providers:</strong></p>\r\n\r\n<ul>\r\n	<li>LOGO&nbsp; | ABIR Neworks | <a href=\"https://www.abirnetworks.com/\">https://www.abirnetworks.com</a>&nbsp;| Pen Testing Services, Risk Advisory Services and Security Training and Courses</li>\r\n	<li>LOGO | Cyber Radar Systems |&nbsp;https://www.cyberradarsystems.com&nbsp;| Pen Testing Services</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newofferings`
--
ALTER TABLE `newofferings`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
