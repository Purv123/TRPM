-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2021 at 09:43 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TPRM`
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
(1, '<p>Risk Karma is fast-growing MSSP focused on providing rapid, impactful, and cost-effective Cybersecurity Risk solutions for both Enterprises (1st Parties) and their Vendors/Suppliers (3rd Parties). Our focus is in (4) key areas: 1) Comprehensive continuous cyber risk monitoring and rating service for enterprises and their third parties 2) (RaaS) Ransomware-as-a-service - proactive continuous monitoring that acts as an&nbsp;early warning system for ransomware attacks, 3) (TPRM) as-a-Service is an assessment, advisory and consulting service and 4) Security Assessment Questionnaire&nbsp;(SAQ) as-a-Service supplier&nbsp;risk assessments.&nbsp;</p>\r\n', '<p>The risks third parties pose to enterprises continue to mount even as security leaders accelerate their efforts to improve security overall. As CISOs improve the network, cloud, endpoint, application, and user-level security, third parties have become the entry points for some of the largest breaches and ransomware attacks to date.&nbsp;The need to make third-party assessments in all organizations a top concern has already been validated. The proven way to fulfill and act on this growing concern is to conduct third-party risk assessments either yourself or through a trusted outsourced service provider. A third-party risk assessment is an analysis of&nbsp;vendor risk&nbsp;posed by an organization&rsquo;s third-party relationships along the entire supply chain, including vendors, service providers, and&nbsp;suppliers. Risks to be considered include security risk, business continuity risk, privacy risk, and reputational risk. Third-party risk assessments continue to remain a crucial part of every third-party risk management program (TPRM). We exist to help lessen the burden (both financially and resources-wise) on organizations in conducting effective due diligence on themselves and their entire supplier chain.</p>\r\n\r\n<h2><strong>Did You Know:</strong></h2>\r\n\r\n<ul>\r\n	<li>60% of companies don&#39;t monitor the security practices of their 3rd party vendors.</li>\r\n	<li>63% of data breaches are caused by security vulnerabilities introduced by a third party.</li>\r\n	<li>80% of companies never saw the ransomware attacks coming from their 3rd Party vendors.</li>\r\n	<li>23% of all cyberattacks on businesses are caused by ransomware.</li>\r\n	<li>66% don&#39;t have internal resources to verify their third-party vendor&#39;s security.</li>\r\n	<li>69% of companies have suffered from a security breach resulting from vendor access in the last year.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Risk Karma&rsquo;s (TPRM) as-a-Service&nbsp;is an assessment, advisory and consulting service offering driven to help solve the many challenges organizations face when managing the ever-increasing risks from outsourcing to third parties.&nbsp;We are a talented team of ex-CISOs and top-notch security professionals that have a passion for the Enterprise Cyber Security and TPRM space. As a team, we have been advising and consulting on topics of Enterprise Cyber Risk and Third-Party Risk Management in various capacities over the last 15 years.&nbsp;We are experts in our domain and don&#39;t try to do all things cyber security, this keeps us effective, focused, and relevant to our&nbsp;client&#39;s specific needs which then allows us to ultimately achieve their desired outcomes.</p>\r\n\r\n<h2><strong>Our Target Audience:&nbsp;</strong></h2>\r\n\r\n<p>Our services while primarily directed towards our client&#39;s 3rd parties are&nbsp;often leveraged by our clients themselves as a proactive cost-effective&nbsp;way to continuously monitor their own cyber security posture (Cyber Hygiene) and as an early warning system for ransomware attacks.&nbsp;Risk Karma seeks to help small and medium-sized businesses (SMBs) develop a course of action to identify, assess and remediate attack surface weakness as well as monitor third-party (vendors/suppliers) that pose a high risk.</p>\r\n');

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
(1, '14-08-2021', '<p>Continuous Monitoring &ndash; The missing critical element of your TPRM program</p>', '<p>Point-in-time security evaluations are common and necessary.&nbsp; However, there is a need to perform something more ongoing and active; this is called Continuous Monitoring.&nbsp;</p>', '<p>Continuous Monitoring.&nbsp; It is designed to fill in the gap between the point-in-time assessments discussed above.&nbsp; This activity has typically been reliant solely on vendor reputation software: the tool sends an alert of a bad score on a particular third party, and the third-party risk team member will engage with the vendor about the alert. This has resulted in a lot of fatigue among third parties and often is a conversation that does not change the risk.&nbsp; There is a need to change this approach and can be accomplished by aggregating and correlating the alerts from cyber risk rating services, responses on security questionnaires, and vendor reputational software combined with internal due diligence and the nature of the threat in the alert.&nbsp;</p>\r\n\r\n<p>There are no doubt&nbsp;cyber risk rating services and their ability to provide continuous monitoring on suppliers have a key role to play in managing risk with suppliers that&#39;s objective, repeatable and scalable. Learning from cyber security trends (positive/negatives) over time on our supplier provides the best possible way to proactively manage risk with our suppliers. The world is slowly moving away from relying on&nbsp;security questionnaires as a leading indicator of risk and starting to consider&nbsp;cyber risk rating services as the new leading indicator of risk across their entire supply change. Removing the typical&nbsp;and dangerous combined &quot;point-in-time&quot; assessments and &quot;cherry-picking&quot; which vendor to assess model that many organizations use today. Most intake processes today for determining which supplier to assess that rely&nbsp;on determining&nbsp;inherent risk are 80% subjective and don&#39;t account for the criticality of the supplier to the organization.&nbsp;</p>'),
(4, '14-08-2021', '<p>Cybersecurity Third-Party Risk &ndash; The true risk.</p>', '<p>Many companies focus on all the third-party risk domains, not cybersecurity risk.&nbsp; There is a financial risk, reputational risk, country risk, and many others.&nbsp; However, cybersecurity risk is most often the largest financial and reputational risk to your firm.&nbsp;</p>', '<p>Countless public breaches that are associated with large, well-known companies were the result of a cybersecurity breach at their third party.&nbsp; While there are other domains for review with third-party risk management, it is cybersecurity risk that involves the most frequent and public breaches.&nbsp; Focusing on the cybersecurity domain requires the third-party risk team has information security expertise.</p>\r\n\r\n<p>Many companies&rsquo; third-party risk management organizations do not often have this level of experience or expertise.&nbsp; Many companies compensate for this by creating a checklist for their assessor to follow.&nbsp; There are two major problems with this approach: first, without that expertise, it is very unlikely the assessor will recognize any inconsistency or illogical answer from a vendor; second, the checklist approach does not allow for follow-ups that provide a more complete picture of the security at the vendor. If your TPRM is small with limited experience and expertise then leverage TPRM providers to augment your team&rsquo;s efforts to meet your objectives and desired outcomes.</p>'),
(5, '14-09-2021', '<p>Third-Party Risk: Reactive to Predictive</p>', '<p>Almost every third-party risk management organization is reactive: reliant on a breach or security incident notification from a vendor.&nbsp; As due diligence efforts, point-in-time assessments, and Continuous Monitoring, produce results and data, it becomes possible to change into predictive.&nbsp; Use the data to change to a predictive model. Very much like vulnerability management, this approach allows CISOs and their teams to focus on what is the highest risk, not the totality of all vendors.</p>', '<p>Supplier/Vendor/Third-party Risk Management: the process, technology, and people whose goal is to lower the risk created by third parties (vendors/supplier).&nbsp; Surveys of a wide range of companies, across multiple industries, routinely find that less than 50% have a program to manage this risk. Those that do perform it, do it minimally: part of a compliance exercise, designed to keep the regulators and oversight bodies satisfied.&nbsp; After COVID-19 sent many onshore and offshore resources to work from home and cyber-threats exploded over 800%, this lack of a serious approach to third party risk (when compared to how firms perform their own internal security controls) became apparent in the corresponding explosion of third party breaches, ransomware attacks, and security incidents.Supplier/Vendor/Third-party Risk Management: the process, technology, and people whose goal is to lower the risk created by third parties (vendors/supplier).&nbsp; Surveys of a wide range of companies, across multiple industries, routinely find that less than 50% have a program to manage this risk. Those that do perform it, do it minimally: part of a compliance exercise, designed to keep the regulators and oversight bodies satisfied.&nbsp; After COVID-19 sent many onshore and offshore resources to work from home and cyber-threats exploded over 800%, this lack of a serious approach to third party risk (when compared to how firms perform their own internal security controls) became apparent in the corresponding explosion of third party breaches, ransomware attacks, and security incidents.</p>'),
(9, '14-09-2021', '<p>Prioritize third-party risks based on the criticality of the third party.</p>', '<p>Organizations need to consider in addition to both inherent risk and residual risk, if a supplier&nbsp;is a critical one to my organization. Understanding Risk Rating vs. Criticality is key.</p>', '<p>Organizations are expanding their IT and business footprints, and this means sharing data and interacting more and more with third parties &ndash; which can increase their threat surface dramatically. But not all third-party risks carry the same weight when it comes to potential impact. Organizations need to consider in addition to both inherent risk and residual risk, if a&nbsp;supplier is a critical one to my organization. There needs to be a defined process those organizations should use to prioritize third-party risks based on the criticality of the third party. And once your entire supply chain has been categorized in terms of who is active/critical then and only then can you start to define the level of due diligence required for your third parties based on understood inherent risk. And, as well actively track any required remediation based on findings resulting from identified residual risk.</p>\r\n\r\n<p><strong>Some helpful terms and concepts:</strong></p>\r\n\r\n<p><strong><em>Understanding Risk Rating vs. Criticality</em></strong></p>\r\n\r\n<p>The risk rating refers to the inherent risk of a product or service before considering the control environment.&nbsp;All engagements can and should have an initial risk rating.<strong> </strong>The risk rating informs the organization of the level of due diligence to conduct, what is expected as far as continuous monitoring, and the frequency of risk reviews and assessments.</p>\r\n\r\n<p><strong>Understanding Inherent vs. Residual Supplier &nbsp;Risk</strong></p>\r\n\r\n<p>Inherent risk can be defined by the combined profile risk and related risk of the supplier. Inherent risk can, however, be mitigated through a variety of controls such as proper employee training, technical controls, or implementing a clear set of procedures. After these mitigating controls are put in place, you are then left with the residual risk or what we refer to as control risks which you can further assessment to determine if it&rsquo;s acceptable to your organization.</p>\r\n\r\n<p><strong>Criticality</strong></p>\r\n\r\n<p>Critical is not a risk rating; rather, it&rsquo;s a specific subset of your vendors. All vendors are either critical or non-critical. Critical denotes that if the vendor fails to provide the product or service, as expected, there could be materially negative impacts to the organization or its customers and consumers. Criticality is essentially determined by the service&#39;s impact on your day-to-day operations. Meaning a high risk vendor-defined as one that has a high level of inherent risk and maybe even residual risk may still not require the same level of due diligence if it&rsquo;s not a critical supplier.</p>'),
(10, '14-10-2021', '<p>Using combined human-powered and AI to semi-auto complete incoming questionnaires.</p>', '<p>This concept of outsourcing the task of filling out questionnaires&nbsp;takes away the pain and frustration&nbsp;of completing security questionnaires. This can save IT, sales, and security leaders dozens of hours&nbsp;on security questionnaire documents and&nbsp;speed up the sales cycle by 25 to 35% or greater in some cases. Organizations can reinvest the saved time on higher leverage high-value activities. What a concept&hellip;. Waking up to a completed questionnaire in your inbox.</p>', '<p>Organizations regardless of acting as first-parties or third-parties all face the same problem, the never-ending flow of customer and prospect security questionnaires. This never-ending burn can cripple organizations chewing up staff&rsquo;s time and effort and worse preventing the staff from working on more proactive operational and revenue-generating activities. Completing an incoming security questionnaire can&rsquo;t be ignored it&rsquo;s become an item on the critical path to building trust with prospects and customers. Organizations are now more willing to outsource this activity to consulting firms that can manage this activity for them from cradle to grave allowing them to simply sign off the completed questionnaire before it&rsquo;s submitted to the prospect or customer. When looking at options that are being offered from ones that are 100% manual or ones that are 100% automated using AI, perhaps the best solutions are those that leverage both. A possible solution that effectively solves this problem using combined human-powered and AI to semi-auto complete incoming questionnaires. This would also help reduce cost from something that is 100% manually done versus one that also leverages some level of AI to accomplish this task faster and more efficiently. This area is ripe for maturity and new solutions will emerge allowing solutions that are not only cost-effective but highly accurate and easy to integrate into sell-side supporting processes. &nbsp;</p>\r\n\r\n<p><strong>Summary</strong></p>\r\n\r\n<p>Whether is a powerful automation tool with human assistance or a powerful human-powered service with automation assistance both are on the rise to solve this problem and are only getting better and better. Powered by AI/Machine Learning or 100% human-powered or somewhere in between, these solutions can automatically complete questionnaires for you based on your best answers while continuing to build a growing security knowledge-based repository &ndash; which only gets smarter with every completed questionnaire.</p>'),
(11, '14-10-2021', '<p>Stay Ahead of Third-Party Ransomware Attacks With Cyber Risk Rating Intelligence</p>', '<p>The Third-Party Ransomware Attack You Never Saw Coming. Ransomware Attacks On Your Third Parties Put Your Business At Risk.</p>', '<p>It&rsquo;s no secret that ransomware attacks are massively on the rise. Over the past 18 months, ransomware has emerged as the premier way for threat actors to make money.&nbsp;Ransomware demands are doubling every six months, and for large enterprises, those demands are often for millions of dollars. &nbsp;80% of companies never saw the ransomware attacks coming from their 3rd Party vendors. The ransomware moved from their 3rd party vendors to them! Threat actors use the third-party&rsquo;s privileged access to jump over to your own organization.</p>\r\n\r\n<p>3rd Parties affected by cyber-attacks aren&rsquo;t often swift or detailed when it comes to breach disclosure. In the case of a devastating ransomware attack, incident response and cleanup come first &mdash; something that can take days or even weeks. But if your third party has been hit by ransomware, you don&rsquo;t have time to wait for your third party to issue a statement. In addition, breach disclosures often lack key details such as what type of ransomware was used. You need better, faster information, so you can react at speed.</p>\r\n\r\n<p>Did you know:</p>\r\n\r\n<ul>\r\n	<li>23% of all cyberattacks on businesses are caused by ransomware.</li>\r\n	<li>80% of companies never saw the ransomware attacks coming from their 3rd Party vendors.</li>\r\n</ul>'),
(12, '22-10-2021', '<p>Understand &quot;true&quot; inherent risk.</p>', '<p>Organizations need to accurately understand and measure inherent risk in a non-subjective or unbiased manner.</p>', '<p>Having a poor understanding of inherent risk. Resources to monitor and manage risk are often limited, and these limited resources should be focused on the third-party relationships with the highest potential risk. But if the potential, or inherent risk, is not accurately understood it will lead to wasted assessment, monitoring, and management efforts. Unfortunately, many organizations rush to assess the controls of a specific vendor without truly understanding the nature of the business activity being impacted and the service being provided. Bringing together a combination of relationship risk PLUS profile risk to obtain a better context of the business relationship and use case involve becomes critical.</p>'),
(13, '22-10-2021', '<p>Third-Party Risk Management (TPRM) programs are (still) deficient.</p>', '<p>The greater the dependency on third-party providers, the larger the &lsquo;third party risk&rsquo;, and that risk means that the firm is increasingly vulnerable to both the actions (or inactions) of those third parties as well as any internal or external event that affects them. In essence, firms who outsource a large number of activities consequentially become part of a complex, interconnected ecosystem. Even more complex when you consider the implications of third-party providers to the third parties that you&rsquo;re directly contracting (the so-called fourth or fifth parties in the network).</p>', '<p>Since the early 1990s, business strategy was often influenced by the core competency approach, in which a company focused on the capabilities that gave it a competitive advantage. As a result, parts of their businesses operations that did not directly align to core competencies were outsourced to third-party providers, and many remaining support functions were insufficiently resourced. Simultaneously, many companies, particularly those competing on cost or emerging technology, increased their dependency on third-party providers, thereby increasing the size and complexity of their operating networks. The propagation of this network complexity to include third, fourth, and fifth party providers expanded the vulnerability of organizations and gave rise to opportunities for failure from operational inconsistency and the rise of cyberattacks. Keep in mind that fourth and fifth parties are your vendor&rsquo;s third parties and subcontractors.&nbsp;They are subject to the same risk as your vendors, thus putting your organization at risk. If one of your vendor&rsquo;s third parties is breached by an attacker, that attacker could access your network or sensitive information via a third party&#39;s environment. Therefore, at a time when third-party risk management is currently needed most, it is still deficient in many organizations. Increased regulatory scrutiny reflects this gap.</p>'),
(14, '24-10-2021', '<p>Email breach at the vendor to the alliance of dental practices impacts numerous practices, more than 170,000 patients.</p>', '<p>Even the&nbsp;dental industry is not impervious to&nbsp;these third-party data breaches. As technology evolves so do the risks to a dental practice especially when it comes to HIPAA and other related security breaches of sensitive data.</p>', '<p>For the second time in the past year, an alliance serving dental practices has been hit with a cyberattack.&nbsp; Last year&rsquo;s attack impacted patients at Kids First Dentistry &amp; Orthodontics, a subsidiary of Professional Dental Alliance of Connecticut.&nbsp; They reported a ransomware attack on First Impressions Orthodontics impacted their patients. This year, a number of state Professional Dental Alliance (PDA) units are reporting to HHS and patients following a breach at their vendor, <strong>North American Dental Management (NADM</strong>). Tens of thousands of dental patients probably aren&rsquo;t smiling after it was revealed that their protected health information may have been exposed.</p>\r\n\r\n<p>NADM&rsquo;s breach, which was the result of a phishing attack, took place between March 31 and April 1, 2021. A few email accounts of the vendor named North American Dental Management were accessed by an unauthorized user, according to a&nbsp;<strong>breach notice</strong>&nbsp;released by one of PDA&rsquo;s affiliates. NADM provides administrative and technical support services for Professional Dental Alliance offices.</p>'),
(15, '24-10-2021', '<p>Why Organizations Are Choosing to Outsource Vendor Assessments</p>', '<p>Assessing vendors, or due diligence is one of the more complex third-party risk management (TPRM) activities. From conducting cyber risk rating and/or sending out vendor questionnaires, gathering documents, and having suitable risk experts to evaluate the vendor&#39;s control environment, the process can be very laborious, especially if your vendor population has continuous growth and the vendor relationship increase in complexity. Hint - The solution is not to build an army of vendor risk analysts.</p>', '<p>If your&nbsp;TPRM program is understaffed, you&rsquo;re not alone. Even though this is a common situation, it&rsquo;s less than an optimal one to be in. Outsourcing vendor risk assessments are a growing trend and one that makes sense for many organizations. There are many compelling reasons why TPRM programs need to increase capacity, but adding additional full-time employees (FTEs) isn&#39;t always an option. Two key things to consider: 1) Consider the sheer volume of vendors in scope from three buckets a) Past vendors that have been on-boarded with no or very little due diligence conducted b) Existing vendors going through procurement as part of a purchasing initiative and c) future vendors in the pipeline, POC or in the evaluation stage. 2) Are the administrative tasks cost-efficient?&nbsp;Consider, is this the best and highest use of your IT and security staff. What else is not getting done, because key resources are focused on conducting supplier assessments and worse, your limited TPRM staff only has so many hours in a day to get it all done.&nbsp;Maybe it&rsquo;s time to consider options to outsource assessments at least in some type of well-defined capacity in order to achieve your TPRM program&rsquo;s outcomes.</p>'),
(16, '25-10-2021', '<p>The Future of Vendor Risk Assessments: A Zero Trust Approach</p>', '<p>Data is the lifeblood of today&rsquo;s digital businesses, and protecting it from theft, misuse, and abuse is the No. 1 responsibility of every data security professional. Hackers stealing customer data can erase millions in profits within weeks, stolen intellectual property can erase competitive advantage overnight, and unexpected privacy abuses can bring unwanted scrutiny and fines from regulators while inflicting reputational damage that can last months, even years.</p>', '<p><strong>Data security breaches are increasingly attributed to vendors</strong>&nbsp;and other third parties that service the company under attack. Roughly&nbsp;<strong>one-third of all breaches</strong>&nbsp;in the last few years have occurred as a result of external attacks targeting a third-party supplier (a Top 3 attack vector), according to Forrester&rsquo;s Business Technographics Global Security Survey. Despite growing reliance on vendors and other third parties, organizations are inconsistent in their information security protocols for assessing vendors. As data security breaches are reaching crisis proportions, companies continue to struggle to secure a growing portion of their business &ndash; their third parties.</p>\r\n\r\n<p>Our research shows that a staggering<strong>&nbsp;90 percent of companies</strong>&nbsp;don&rsquo;t know who their third parties are and what business they&rsquo;re doing with them. Conventional information security measures and GRC tools have lulled companies into a false sense of security. &nbsp;Without knowledge of the problem and proper security protocols in place, companies can&rsquo;t categorize the level of risk or take appropriate action based on each particular situation. &nbsp;They&rsquo;ll leave themselves open to attacks that cause harm to company revenue, reputation, and regulatory profiles. Achieving a high level of certainty with data risk across even a hand full of vendors, let alone across your entire supply chain is no easy feat. It&#39;s an endless effort that must continue.</p>'),
(17, '25-10-2021', '<p>Third-Party Relationships Risky Business.</p>', '<p>Virtually all organizations today rely on third-party relationships to support business operations. Most enterprises depend on outsourcers, product vendors, third-party service providers, and partners to improve efficiencies, be more competitive, and reduce costs. The harsh reality is that with added business value also comes added risk.</p>\r\n\r\n<p>Maintaining operational integrity is a top priority for most organizations; however, a startling number do not have processes in place to fully understand and manage the true business risk of third-party relationships. Whom an organization does business with can dramatically increase risk exposure, potentially threatening an organization&rsquo;s valuable information assets, compliance with industry regulations, and corporate reputation.</p>', '<p>There&rsquo;s clearly a lot at stake, and many companies do not have a unified view of corporate risk due to the following road-blocks:</p>\r\n\r\n<ol>\r\n	<li>Uncertainty: Managing risk is often low on the priority list for organizations, as the task is daunting and raises questions about where and how to begin.</li>\r\n	<li>Undefined methodologies: Without implementing a structured, proven approach to risk management, organizations struggle to gain an accurate understanding of the potential risks of third-party relationships.</li>\r\n	<li>Lack of visibility: Risk management and compliance practices are typically managed in silos, across internal departments, and using individual point products, precluding that ability to have a single view of the risk environment.</li>\r\n	<li>Geographical barriers: Third parties are often located across multiple locations, making it challenging to streamline the assessment, as well as track and report risk for all relationships.</li>\r\n	<li>Evolving data protection and privacy laws: Many organizations struggle to keep pace with new regulations tied to data security, hampering the effectiveness of security controls.</li>\r\n	<li>Lack of standardized processes: Risk management processes need to be proactive and flexible enough to adapt to dynamic business environments, yet structured enough to ensure consistent analysis across multiple third parties.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>'),
(18, '25-10-2021', '<p>3rd Party Risk: &#39;You&#39;ve Been Breached - How Do I Re-build Trust With You?&#39;</p>', '<p>SolarWinds, Kaseya, and the next big supply chain security breach &ndash; all have the same point in common: Their attackers seek to breach the most enterprises possible solely via the third-party technology they use. This seems to be the newest trend.</p>', '<p>As a potential target, you may want to be proactive and look to detect warning signs even before your infected partner does. One possible way is to use a cyber risk rating and ransomware early warning indicator services. When you notice a steep negative trend in either a technical cyber risk score or a ransomware index rating you can get in front of it with your supplier. You can notify your supplier to review the identified weak controls and if needed cut off access, but what then? How does your partner subsequently validate that it&#39;s clean and give you the confidence to restore access? How do you protect your critical systems and data in a new extended world where every supply-chain relationship needs to constantly be verified before it&#39;s trusted? There is no silver bullet to answer these questions. But what is certain is - the more proactive you get with effective cyber security and ransomware continuous monitoring of your supplier chain the better the chance you have to prevent or at least minimize any potential damage. The more you know&hellip;</p>');

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
(1, '  fas fa-thumbs-up', '  Guide With Expertise', '  We work with customers and vendors in a consultative/advisory and collaborative way.'),
(2, ' fab fa-angellist', '  Keep Promises', '  We are vigilant and focused on doing what we say and, where possible, exceed customer expectations.'),
(3, ' fas fa-paper-plane', ' Cultivate Progress', ' We help customers evolve their vendor risk management maturity at the right pace.'),
(4, ' fas fa-clock', ' Constantly Evolve & Mature', ' We continuously improve what we do, and increase the value we bring to our customers.'),
(5, '   fas fa-handshake', '   Help Customer Achieve Desired Outcomes', '   We help businesses prioritize their efforts in a practical manner be impactful.'),
(6, '     fas fa-phone', '  Get In Front of What is Ahead', ' Think Bigger. See Further. Act Sooner. Provide our client proactive actionable insights on their suppliers.'),
(7, ' fas fa-unlink', ' Remain Connected', ' Our client relationships matter. We invest in our client relationship with a shared risk/shared reward model. We do the right thing to build trust.'),
(12, ' fa fa-archive', 'Stay Focused', 'TPRM is all we do. We remain focused on our goals. Instead of being a jack of all trades, we rather be a master of one.');

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
(1, '<p>Our trusted advisors help our customers get on the proactive side of cyber risk, data breaches, and ransomware attacks prevention and safeguard their shareholder, customer, and employee data &ndash; Our consulting team consists of seasoned former CISOs, security/compliance and risk management practitioners, and corporate security program directors working together to achieve your goals!</p>\r\n\r\n<p>Our consultants help organizations:<br />\r\n1. Assist in evaluating GRC tools and Cyber Risk Rating solutions to help align their needs with the tools/solutions that be considered.<br />\r\n2. Develop from the ground up or enhance existing 3rd party risk management programs to help achieve desired outcomes.<br />\r\n3. Develop, align and design TPRM best practices to drive proactive cyber risk management.</p>\r\n\r\n<p>We can help and support any business in any vertical &ndash; guaranteed!</p>\r\n\r\n<h6>&nbsp;</h6>\r\n\r\n<h6 style=\"text-align:center\"><span style=\"color:#dc3545\"><strong>Partial list of companies we have assisted:</strong></span></h6>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `consulting_logo`
--

CREATE TABLE `consulting_logo` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consulting_logo`
--

INSERT INTO `consulting_logo` (`id`, `image`) VALUES
(2, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/Keane.png'),
(3, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/Neohapsis.png'),
(4, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/Syntel.jfif'),
(5, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/cylance.png'),
(6, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/ebay.png'),
(7, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/experian.png'),
(8, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/intuit.png'),
(9, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/pimcco.png'),
(10, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/qualcomn.png'),
(11, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/saban%20brand.png'),
(12, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/sony%20pictures.png'),
(13, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/state%20street.png'),
(14, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/tizor.png'),
(15, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/wipro.png'),
(16, 'https://tprmtest.000webhostapp.com/images/infosys.jpg');

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
(3, '24-06-2021', 'test111', 'test@test.com', 'test', 'test'),
(4, '08-11-2021', 'Test', 'test@testgmaill.com', 'adfasdf', 'Testtttttttttt'),
(5, '08-11-2021', 'Test', 'test@testgmaill.com', 'adfsafasfdasfasdf', 'Test Message'),
(6, '08-11-2021', '', '', '', ''),
(7, '08-11-2021', '', '', '', ''),
(8, '08-11-2021', '', '', '', ''),
(9, '08-11-2021', '', '', '', ''),
(10, '08-11-2021', '', '', '', '');

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
(1, '<p style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"background-color:#ffffff\"><strong><em><span style=\"color:#040c2c\"><strong><em>Gain a real-time security perspective&nbsp;on your organization and/or your vendors from a hacker&rsquo;s perspective!</em></strong></span></em></strong></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:12pt\"><span style=\"font-size:18px\"><strong><span style=\"background-color:#ffffff\"><span style=\"color:#212529\"><strong>We would love to hear from you!</strong></span></span></strong></span><br />\r\n<span style=\"font-size:12.0000pt\"><span style=\"background-color:#ffffff\"><span style=\"color:#212529\">Whatever questions you have about our solutions, features/benefits, or pricing.</span></span></span><br />\r\n<span style=\"font-size:12.0000pt\"><span style=\"background-color:#ffffff\"><span style=\"color:#212529\">Our team will be ready to help you.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:12pt\"><strong><span style=\"font-size:14.0000pt\"><span style=\"color:#040c2c\"><strong>Contact us&nbsp;NOW for a no-obligation discovery call!</strong></span></span></strong></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ecosystempartners`
--

CREATE TABLE `ecosystempartners` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecosystempartners`
--

INSERT INTO `ecosystempartners` (`id`, `description`) VALUES
(1, '<h4><span style=\"color:#e31e24\"><strong>Our Eco-system Partner Referral Services:</strong></span></h4>\r\n\r\n<p>At Risk Karma we are dedicated to our services around enterprise and 3rd party cyber risk ratings and assessments services. With that said, we often get asked if we can do more cyber risk-related services like Application and Networking Pen Testing, Policy Development, Compliance Gap and Readiness Assessments (ISO Cert, SOC2 Advisory, HITRUST, HIPPA, and GDPR) or even offer Security Training and Courses and so on. While our experts can address these needs, we have decided to remain independent to avoid any conflict of interest with our customers. Just like you wouldn&rsquo;t want your home inspector to also provide you direct services on fixing the items identified in the inspection. There needs to be a line of separation.</p>\r\n\r\n<p>With that said, we are building out Risk Karma&rsquo;s eco-system of fully vetted Cyber Security Partners that can directly help our customers with their additional needs. Our referral services can include both cyber security services providers and products/tool providers as well. Our partners have been reviewed for quality, comprehensiveness, value, and price. In fact, if our customers decide to engage with any of our eco-system partners based on our direct permission-based referral they will receive additional pricing discounts compared to if they had contacted them directly. We are just getting started and we&rsquo;re excited to create a win/win scenario for all.</p>\r\n\r\n<h4><span style=\"color:#e31e24\"><strong>Summary:</strong></span></h4>\r\n\r\n<ul>\r\n	<li><strong>For our customers:</strong> We connect them to fully vetted cyber security providers, matching their specific needs to the supplier&rsquo;s expertise. Cyber security continues to be an industry with an increasing number of suppliers entering the market. Understanding the offerings (product or service), how it fits in their eco-system, who to work with can be a challenge, validation of the market and building trust takes a lot of time to achieve and research. There is never a cost to our customers to get matched with our vetted cyber security providers. (of course, there are never any obligations to engage &ndash; finally, the decision is always yours&nbsp;to make).&nbsp;</li>\r\n	<li><strong>For our eco-system cyber security partners/providers:</strong> We provide our eco-system partners with direct meaningful (permission-based) connections and lead exposure to both directly our clients and their suppliers. Specific needs are defined out of the outcomes of the assessments and the findings that need to be remediated.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#e31e24\"><strong>BTW, we support and provide exposure to all size partners/vendors...</strong></span></p>\r\n\r\n<p><u><strong>Start-up vendors</strong></u> &ndash; We completely understand how challenging the start-up journey can be and the work required to gain user and market exposure and traction in what&rsquo;s a very saturated cyber security marketplace. We provide you instant exposure and a consistent stream of qualified leads.</p>\r\n\r\n<p><u><strong>For more mature vendors (small-med sized) </strong></u>&ndash; We provide you direct exposure to get in front of prospects that are looking for your product or services and solutions while providing cost savings and reducing time and effort with traditional and expensive marketing activities.</p>\r\n\r\n<p><u><strong>For our larger more established vendors</strong></u> &ndash; we can help bring some of your newer/innovative unknown services and products to the market and to our customer base in a unique way to gain real-world feedback, pilots/POCs, and initial engagements.</p>\r\n\r\n<p><span style=\"color:#e31e24\"><strong>Just a small and growing list of our eco-system cyber security partners/providers:</strong></span></p>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://tprmtest.000webhostapp.com/images/abirnetworks.png\" style=\"height:100px; width:242px\" /></td>\r\n			<td style=\"text-align:center\"><a href=\"https://www.abirnetworks.com\">ABIR Networks</a></td>\r\n			<td>Pen Testing Services, Risk Advisory Services, and Security Training and Courses</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\"><img alt=\"\" src=\"https://tprmtest.000webhostapp.com/images/CyberRadarSystems.jpg\" style=\"height:100px; width:100px\" /></td>\r\n			<td style=\"text-align:center\"><a href=\"https://www.cyberradarsystems.com\">Cyber Radar Systems</a></td>\r\n			<td>Pen Testing Services</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

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
(1, '<p>Risk Karma is Third Party Risk Management Company.<br />\r\nRisk Karma&rsquo;s (TPRM) as-a-Service&nbsp;is an advisory and consulting service offering.</p>\r\n', '<h5><span style=\"color:#dc3545\"><strong><strong>[</strong>Offering #1] - Free Summary Cyber Risk Rating&nbsp;Report</strong></span></h5>\r\n\r\n<p>Zero-in on our own organization or&nbsp;a vendor with a <strong><u><u>Free </u></u></strong><strong><u><u>Summary Cyber Risk Rating Report</u></u></strong><strong><u>&nbsp;</u></strong>that includes a quick summary preview of either your company&nbsp;or your vendor&#39;s cyber risk rating. &nbsp;This rating will include a rating on a Technical, Compliance, and Financial Impact based but again at a high level just so that you can get a chance of the control risk areas we focus on. Full verbose details are of course in the paid full assessment/report.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://tprmtest.000webhostapp.com/images/technicalriskinsight.png\" /></p>\r\n\r\n<ul>\r\n	<li>Receive the&nbsp;FREE summary Cyber Rating within 24 hours.</li>\r\n	<li>Easy to understand letter grades</li>\r\n	<li>Calculated using open-source intelligence and industry standards, like MITRE and NIST, to further confirm the criticality of each threat.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>[REQUEST YOUR REPORT] - Go to &quot;Contact Us&quot; and submit your request.</strong></p>\r\n\r\n<p>Second One:</p>\r\n\r\n<h5><span style=\"color:#dc3545\"><strong>[Offering #2] -&nbsp;Benchmark your (TRPM) third-party risk program with a FREE Assessment</strong></span></h5>\r\n\r\n<p>Whether you&rsquo;re just starting your TPRM program or want to benchmark your existing program against industry best practices, it can be complex, time-consuming, and expensive to get started. Risk Karma can help.&nbsp;Request a free, one-hour Third-Party Risk Program Maturity Assessment. Built on practical hands-on knowledge of Risk Karma&rsquo;s seasoned ex-CISOs and TPRM program directors all with a combined 15 years of experience serving our growing list of SMB and enterprise customers, you&#39;ll walk away with an in-depth report on the state of your current TPRM program, plus practical recommendations for how to bring it to the next level so that your desired outcome can be achieved.</p>\r\n\r\n<p><strong>Here are the next steps&hellip;</strong></p>\r\n\r\n<ul>\r\n	<li>Enter your contact information on our &quot;Contact Us&quot; page. A Risk Karma third-party risk specialist will follow up with you within 2-3 business days.</li>\r\n	<li>After speaking with a Risk Karma specialist, you will answer a small 45-50 multiple-choice questionnaire using Risk Karma&rsquo;s TPRM Platform.</li>\r\n	<li>In about a week or so, you will receive a one-hour Maturity Assessment consulting session to review your customized TPRM Maturity Assessment report.</li>\r\n</ul>\r\n\r\n<p>The report will include Capability Maturity Model scores for content, coverage, roles &amp; responsibilities, remediation, and governance. It will also provide a 12-month action plan for program improvements and benchmark your program against peers and industry best practices.</p>\r\n\r\n<p><strong>[REQUEST YOUR TPRM Maturity Assessment] - Go to &quot;Contact Us&quot; and submit your request.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n');

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
  `datemodified` datetime NOT NULL 
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
  `datemodified` timestamp NOT NULL 
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
(31, 16, 'On-site 3rd Party Assessment Services', 'Priced Based on Scope', 'Priced Based on Scope', 'Priced Based on Scope', 'Priced Based on Scope', '2021-10-05 19:57:14'),
(36, 18, 'Outsourced Completing Security Questionnaires', 'Call for pricing', 'Call for pricing ', 'Call for pricing', 'Call for pricing ', '2021-10-13 20:13:32');

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
(1, '<h4><strong>Pricing Notes:</strong></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">1. All Prices are List Price and Subject to Change<br />\r\n2. Volume Discounts Available (Ask for Details)</span></span></span></p>\r\n\r\n<h4><strong><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">Our Pricing Philosophy:</span></span></span></strong></h4>\r\n\r\n<h5><strong><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">Only pay for what you need:</span></span></span></strong></h5>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">Your Risk Karma cost is based on the number of suppliers you choose and whether annual continuous monitoring or point-in-time risk insights are needed. This ensures that the price is kept as low as possible and you won&#39;t be paying for unused features. You can always upgrade in the future. Point is to get started without the cost being a major issue.</span></span></span></p>\r\n\r\n<h4><strong><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">Unlimited users:</span></span></span></strong></h4>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">We do not charge per seat or per user. This approach lets you have as many users in the system as you need to support your vendor management program without worrying about breaking the bank.</span></span></span></p>\r\n\r\n<h4><strong><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">No long-term contract:</span></span></span></strong></h4>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri\">Each year you will have the option of renewing. With this approach, your company gets to decide if you&#39;re happy with Risk Karma, so it&#39;s in our best interest to keep you satisfied with delivering expected outcomes and excellent customer service.</span></span></span></p>\r\n');

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
  `datemodified` timestamp NOT NULL 
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
  `datemodified` date NOT NULL 
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
(1, '<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">We at Risk Karma, LLC and our affiliated companies worldwide (&ldquo;Risk Karma&rdquo;) are committed to respecting your online privacy and recognize your need for appropriate protection and management of any PERSONAL INFORMATION you share with us.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Risk Karma has established this ONLINE PRIVACY POLICY so that you can understand how we use and protect your PERSONAL INFORMATION. PERSONAL INFORMATION means any information that may be used to identify an individual, including, but not limited to, a first and last name, combined with a home or other physical address, and e-mail address, or other contact information, whether at work or at home. In general, you can visit Risk Karma&rsquo;s web pages without telling us who you are or revealing any PERSONAL INFORMATION about yourself. If you make certain purchases from Risk Karma on the web, use certain services provided by Risk Karma, or register new purchases with Risk Karma electronically, we may ask you to provide PERSONAL INFORMATION.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><strong><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\"><strong>1. NOTICE AND DISCLOSURE</strong></span></span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Risk Karma collects and uses your PERSONAL INFORMATION to provide our services, complete transactions, process payments, communicate with you, and provide you with information and updates regarding our products and services. Third parties may provide services and information available on Risk Karma.com on Risk Karma&rsquo;s behalf. Risk Karma may provide information, including PERSONAL INFORMATION that Risk Karma collects on the web to third-party service providers to help us deliver programs, products, information, and services. Service providers may also assist Risk Karma to maintain its website and mailing lists. These third-party service providers are obligated to protect your PERSONAL INFORMATION on Risk Karma&rsquo;s behalf and to comply with this ONLINE PRIVACY POLICY.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">We may also provide PERSONAL INFORMATION to our business partners who may have products and services that may be of interest to you, and who may use your PERSONAL INFORMATION for marketing purposes.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">If you choose to provide us with your PERSONAL INFORMATION, we may transfer that PERSONAL INFORMATION within Risk Karma, across borders, and from your country to other countries around the world. If you are subject to the European Union Data Protection Directive, laws implementing the Directive, or similar laws, you hereby freely consent to the transfer of your PERSONAL INFORMATION outside of the European Union to the United States and other countries and to the</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">use of your PERSONAL INFORMATION by Risk Karma as described in this ONLINE PRIVACY POLICY.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Risk Karma will only transfer your PERSONAL INFORMATION without your consent to third parties who are not bound to act on Risk Karma&rsquo;s behalf if such transfer is legally required, if necessary to protect the rights, property, or personal safety of Risk Karma, its customers and/or the public, or to Risk Karma&rsquo;s successors-in-interest.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><strong><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\"><strong>2. CHOICE</strong></span></span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">You may choose whether or not to provide PERSONAL INFORMATION to Risk Karma. If you choose not to provide the PERSONAL INFORMATION we request, you can still visit most of the Risk Karma website, but you may be unable to access certain options, offers, and services that require our interaction with you.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><strong><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\"><strong>3. SECURITY</strong></span></span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Risk Karma is committed to maintaining the security of your PERSONAL INFORMATION, and we take reasonable and appropriate precautions to protect the PERSONAL INFORMATION that you share with us from unauthorized access, disclosure, alteration, or destruction.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><strong><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\"><strong>4. COOKIES AND OTHER TRACKING TECHNOLOGIES</strong></span></span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Some of our web pages utilize &ldquo;COOKIES&rdquo; and other tracking technologies to store information about you on your computer hard drive when you access Risk Karma web pages using your browser. We may use cookies in order to provide you with a personalized level of service once you have registered. Otherwise, we will not use cookies if you simply visit the website. Some COOKIES and other technologies may serve to recall PERSONAL INFORMATION previously indicated by a web user. Most browsers allow you to control COOKIES, including whether or not to accept them and how to remove them.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">You may set most browsers to notify you if you receive a COOKIE or you may choose to block COOKIES with your browser, but please note that if you choose to block your COOKIES, certain parts of the website and application will not function properly.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">Tracking technologies may record information such as Internet domain and host names; Internet protocol (IP) addresses; browser software and operating system types; clickstream patterns; and dates and times that our site is accessed. Our use of COOKIES and other tracking technologies allows us to improve our website and your web experience. We may also analyze information that does not contain PERSONAL INFORMATION for trends and statistics.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><strong><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\"><strong>5. YOUR CONSENT</strong></span></span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Cambria\"><span style=\"font-size:12.0000pt\"><span style=\"font-family:Calibri\"><span style=\"color:#191311\">By using this website, you consent to the terms of our ONLINE PRIVACY POLICY and to Risk Karma&rsquo;s processing of PERSONAL INFORMATION for the purposes given above.</span></span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>6. CHANGES</strong></strong></p>\r\n\r\n<p>Risk Karma may from time to time update this ONLINE PRIVACY POLICY, and the date of any revisions will be stated at the top of this web page. If we make any material changes to this ONLINE PRIVACY POLICY, we will notify you and, at your request, Risk Karma will delete your PERSON</p>\r\n');

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
(1, '<h4>&nbsp;<strong>Case Study #1 - Latest Victim: Supplier- Kaseya </strong></h4>\r\n\r\n<p>On July 2, 2021, researchers discovered that more than 1,500 Kaseya Virtual System/Server&nbsp;Administrator (VSA) servers were compromised by the REvil ransomware group by exploiting an&nbsp;authentication bypass, an arbitrary file upload, and code injection vulnerabilities. Kaseya&nbsp;provides remote management solutions with these on-premise VSA servers to Managed&nbsp;Service Providers (MSPs) all around the world. These MSPs support and supply IT services to&nbsp;<span style=\"background-color:#ffffff\">many businesses including enterprise organizations, SMBs, local and state governments.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5><strong>What are Risk Karma&rsquo;s cyber ratings for Kaseya?</strong></h5>\r\n\r\n<p>Even though the exact initial access method used by threat actors to discover and exploit the&nbsp;vulnerability on Kaseya VSA servers is not known, our solution discovered that there are several</p>\r\n\r\n<p>indicators leading to known possibilities. <strong><span style=\"background-color:#ffff00\">After examining Kaseya&rsquo;s cyber posture over the last 12 months, our team discovered Kaseya&rsquo;s cyber rating dropped from a &lsquo;B&rsquo; to &lsquo;C&rsquo; on an A-to-F rating scale (84 to 76 on a 0-100 numerical scale).</span></strong><strong>&nbsp;</strong>The rating decreases mostly due to poor grades for Patch Management,</p>\r\n\r\n<p>Credential Management, Application Security, and SSL/TLS Strength. These ratings indicate the threat actors might have accessed some of Kaseya&rsquo;s systems through:</p>\r\n\r\n<ul>\r\n	<li>Exploiting unpatched vulnerabilities on out-of-date systems</li>\r\n	<li>Credential-stuffing attacks by using leaked credentials</li>\r\n	<li>Phishing attacks by exploiting the poor email configuration</li>\r\n	<li><span style=\"background-color:#ffffff\">SQL injection types of attacks on web applications</span></li>\r\n</ul>\r\n\r\n<p><span style=\"background-color:#ffffff\"><img alt=\"\" src=\"http://tprmtest.000webhostapp.com/images/proofofsolutions/case1img1.png\" style=\"display:block; height:385px; margin-left:auto; margin-right:auto; width:701px\" /></span></p>\r\n\r\n<p><span style=\"color:#000000\">Our new </span><span style=\"color:#1155cd\">Ransomware Susceptibility Index</span><span style=\"color:#000000\">&nbsp;(RSI) discovers the likelihood an organization&nbsp;will experience a ransomware attack on a scale of 0 (less likely) to 1 (highly likely). Our research&nbsp;shows that any company over.50 RSI&trade; is highly likely to become a victim.</span></p>\r\n\r\n<p><strong><span style=\"background-color:#ffff00\"><span style=\"color:#000000\">Before the incident, Kaseya&rsquo;s RSI&trade; was 0.651, indicating a high susceptibility to a ransomware&nbsp;</span></span></strong><span style=\"background-color:#ffffff\"><strong><span style=\"background-color:#ffff00\"><span style=\"color:#000000\">attack.</span></span></strong></span></p>\r\n\r\n<p><img alt=\"\" src=\"http://tprmtest.000webhostapp.com/images/proofofsolutions/case1img2.png\" style=\"display:block; height:216px; margin-left:auto; margin-right:auto; width:552px\" /><img alt=\"\" src=\"http://tprmtest.000webhostapp.com/images/proofofsolutions/case1img3.png\" style=\"display:block; height:307px; margin-left:auto; margin-right:auto; width:215px\" /></p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>Case Study #2 - Latest Victim: Health Service Executive</strong></h4>\r\n\r\n<p>On May 14, 2021, the Health Service Executive of Ireland suffered a major ransomware cyberattack that caused all of its IT systems nationwide to be shut down. This was the most significant cybercrime attack on an Irish state agency and the largest know attack against a health services computer system.</p>\r\n\r\n<p>What are Risk Karma&rsquo;s cyber ratings for Health Service Executive?</p>\r\n\r\n<p><img alt=\"\" src=\"http://tprmtest.000webhostapp.com/images/proofofsolutions/case1img4.png\" style=\"display:block; height:106px; margin-left:auto; margin-right:auto; width:701px\" /></p>\r\n\r\n<p><span style=\"color:#333333\">They were </span><strong><span style=\"background-color:#ffff00\"><span style=\"color:#000000\">54% more</span></span></strong>&nbsp;<span style=\"color:#333333\">susceptible to ransomware than the industry average !!!!</span>&nbsp;</p>\r\n');

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
(1, 'ourservices', '<p>Businesses and regulators expect organizations to assess the security of their third parties, but how can we assess the security of so many and keep the cost under control? Third-party breaches leave an organization powerless, exposed to severe reputation damage, and complicated clean-up to get back on track. Third-party relationships are vital to the success of an organization, but are the risk of doing business higher than the value? Establishing a third-party risk management program is essential to help organizations maintain visibility into their vendor ecosystem.</p>\r\n\r\n<p>The operational drain to keep up with hundreds to thousands of vendor relationships can be suffocating to an organization&rsquo;s resources. Vendors must be inventoried, analyzed for risk, have completed security risk assessments, implemented remediation requirements, and maintained year after year for up-to-date information. And what about when risks change? Organizations need a partner to help plan, develop and manage their third-party risk program successfully.</p>\r\n\r\n<p>Let us handle the manual labor of third-party risk assessment by collaborating with our experts to reduce the workload and to mature your program while confidently achieving your true desired program outcome. Our talented team can review and validate the security controls of your vendors and as well help track and manage remediation activity with your vendors.</p>\r\n\r\n<p><span style=\"font-size:36px\"><strong>Risk Karma&rsquo;s High-level Offering Details:</strong></span></p>\r\n\r\n<ul>\r\n	<li>Understand your company or third party&#39;s Cyber exposure</li>\r\n	<li>Ransomware (RSI) Assessment, know the likelihood of a ransomware attack on your organization or your third parties</li>\r\n	<li>Need annual cyber security monitoring performed on your organization and/or your third party&#39;s cyber security status&nbsp;</li>\r\n	<li>Leverage our outsourced service for Completing Security Questionnaires - so you don&#39;t have to</li>\r\n	<li>Needing to show compliance with your company&#39;s Cyber Security Insurance</li>\r\n	<li>No spreadsheets or questionnaires are needed (unless you also require them as well) &ndash; we can support you with both</li>\r\n	<li>All scores/ratings based on OPEN STANDARD (NIST, MITRE, FAIR, CVSS) &ndash; no hidden black box algorithms</li>\r\n	<li>Each company is assigned a numerical rating (analogous to a consumer credit score) based on over 20 cyber risk controls</li>\r\n	<li>Quantitative $ value Risk Scoring using Open FAIR risk framework</li>\r\n	<li>Management plan provided to improve the security status</li>\r\n	<li>Either a 60-day point-in-time snapshot or continuous 365-day annual management plans are available</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:36px\"><strong>Risk Karma&#39;s Core Services:</strong></span></p>\r\n');

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
(1, 'ourservices', '        TPRM Program </br> Advisory Services ', 'Gain valuable insight, visibility, and guidance to help </br> launch, operate, and mature your TPRM program'),
(5, 'ourservices', '  Security Assessment Questionnaire (SAQ) as-a-Service supplier risk assessments', 'Third-Party Security Questionnaire Assessment Services.  Automate the collection of data and scoring on the security risk questionnaires you send to vendors. We leverage industry-standard risk frameworks like ISO, NIST, SIG, and Vendor Security Alliance as well compliance frameworks like PCI & HIPAA. Included in this service are our document collections & triage services that ensure that you have the right documents on file for review and that they are current and comprehensive.'),
(6, 'ourservices', ' Third-Party Document Collection Service', 'his service is our document collections & triage service that ensures that you have the right documents on file for review and that they are current and comprehensive. Our team is gathering audit reports (SOC2 TYPE II), Industry Certifications (ISO 27001), Information security policies, business continuity plans, Certificates of insurance (COIs) and results from security testing results just to name a few.'),
(7, 'ourservices', ' Third-Party SOC Assessments', 'Systems and Organization Controls (SOC) audit report review. SOC reports have become the go-to evidence request for organizations when performing third-party due diligence and ongoing monitoring of their third party’s technical controls. Collecting, analyzing, and understanding these SOC reports is crucial to ensure the vendor is a safe partner. Risk Karma has a highly trained and qualiﬁed staﬀ of security professionals who assess the vendor’s SOC reports and provide a comprehensive assessment regarding the vendor’s internal controls.'),
(8, 'ourservices', ' Third-Party Risk Validation Services', 'Assess and risk rate all your vendors to make informed decisions and drive efficiencies. We review the supplier responses from questionnaires against collected documents and supplier interviews to validate that stated security controls exist and are implemented with the right level of maturity to be effective.'),
(9, 'ourservices', ' Third-Party Remediation Tracking Services', 'Gain comprehensive visibility into risk remediation efforts to ensure findings have been properly remediated. Have us work with your supplier to track and manage remediation till closure based on findings from an assessment. We facilitate the risk management process for the top 5-10 risks identified.'),
(10, 'ourservices', '(RaaS) Ransomware-as-a-Service', 'Early warning system for ransomware attacks. Helping our clients be in the know before an attack happens. Identify risk indicators early on so our clients can proactively address the risks that could lead to potential problems in the future.'),
(11, 'ourservices', ' Third-Party On-site Assessment Services', 'Use us to conduct supplier site visits when remote due diligence simply isn’t enough and you need to gain deeper insights and validation on supplier controls. Onsite assessments are one type of Third-Party Assessment and can be a great fit to evaluate an organization’s high-risk risk vendors. This type of assessment is designed to assess the highest tier vendors that process, store, or transmit critical data and information, such as personally identifiable information (PII), represent a high dollar spend, and are identified as a strategic long-term supplier.'),
(12, 'ourservices', ' Free Up Staff', 'Evolve your team from data collectors to risk managers. Allow your staff to be leveraged for the highest use/highest value. The Risk Karma TPRM Service can take your entire TPRM program – from conception and strategy to implementation and remediation or just portions of it. Stop chasing down vendor responses by outsourcing data/document collection, analysis, validation, and remediation efforts. In summary, Risk Karma can streamline your assessment activity, freeing your precious staff for more strategic projects saving you time and money.'),
(13, 'forenterprise', 'Manage/Mitigate Risk', 'Identify the third parties that pose you the greatest risk. Catalog suppliers based on risk and gain risk viability across your entire supply chain. Improve efficiency and productivity by focusing on managing risk, rather than on collecting vendor evidence.'),
(14, 'ourservices', ' On-demand Assessments', 'Accelerate sourcing, RFx, and evaluation processes with vendor intelligence without waiting on constrained internal teams to get it completed.'),
(15, 'ourservices', ' Scalability', 'As your company grows, so do your needs and our services grow with you. Regardless if you decided to outsource the entire supplier assessment process to us or simply leverage us only on certain aspects of your program as needed.'),
(16, 'forenterprise', 'Strategize', 'Create a prioritized risk-based mitigation strategy that fits your needs. Our services are all customized based on what you need. We don’t believe in one-size-fits-all.'),
(17, 'ourservices', ' Free Up Staff', 'Spend less time filling out assessments and more time promoting your positive security posture to your prospects and clients. Allow your staff to be leveraged for the highest use/highest value.'),
(18, 'ourservices', ' Defend and Showcase your Cyber Reputation', 'Review and correct any negative or false Cyber Security control discovered elements and improve your Cyber Security Risk Score before your customer asks you. Includes a specific strategy report with step-by-step instructions for a supplier to make the needed changes to improve their score/rating.'),
(19, 'forthirdparties', 'Get Back to your day job', 'Get either or both: Cyber Risk Scan & Scored Report / Industry-Standard Security Risk Assessment Questionnaire & Score Report and proactively share it with prospects and customers and then just only deal with any potential deltas in terms or questions/concerns versus starting from scratch every time a prospect or customer request a third party risk assessment on your organization. Save time and effort. We call this approach - draw blood once and re-use.'),
(20, 'ourservices', ' Mitigate Risk', 'Proactively managing risk on a continuous basis.'),
(21, 'forthirdparties', 'Grow Your Business', 'Drive business growth with proactive security engagement with other vendors as well as enterprises.'),
(28, 'ourservices', ' Outsource Filling out Questionnaires', 'This concept of outsourcing the task of filling out questionnaires takes away the pain and frustration of completing security questionnaires. This can save IT, sales, and security leaders dozens of hours on security questionnaire documents and speed up the sales cycle by 25 to 35% or greater in some cases. Organizations can reinvest the saved time on higher leverage high-value activities. What a concept…. Waking up to a completed questionnaire in your inbox.'),
(32, 'ourservices', 'Comprehensive Continuous Cyber Risk Rating Service', 'Effectively monitor your external security posture and proactively address the risks that could lead to potential cyber security problems in the future. Gain on-demand security & compliance risk insights and improve your Cyber Risk Ratings before your customers even reach out to you.'),
(33, 'ourservices', ' Outsourced Completing Security Questionnaires', 'This concept of outsourcing the task of filling out questionnaires takes away the pain and frustration of completing security questionnaires. This can save IT, sales, and security leaders dozens of hours on security questionnaire documents and speed up the sales cycle by 25 to 35% or greater in some cases. Organizations can reinvest the saved time on higher leverage high-value activities. What a concept…. Waking up to a completed questionnaire in your inbox.\r\n\r\nFor our enterprise and third-party vendors – Outsourced Questionnaire Response Services to Answer Security and Privacy Questionnaires and build a master questionnaire/response knowledge base. Our human and technology-powered solution help organizations answer incoming security, privacy, and due diligence questionnaires from their customers. The Questionnaire Response process and technology work for any questionnaire – regardless of industry-standard or framework – as well as one-off, custom questionnaires. Organizations are increasingly responding to incoming security, privacy, and due diligence questionnaires from their customers. This process can be time-consuming and cumbersome to answer hundreds of questions for separate vendors, questionnaires, and requests. We start with a baseline questionnaire either a new one or one you have already filled out. Then any time new security or privacy questionnaire comes your way you will forward it to us, we’ll get busy and fill in the responses based on knowledge from the base questionnaire you provided. With everyone, we do for you new questionnaires/responses automatically get added to your master questionnaire. Our ability to comprehensively complete future incoming questionnaires only gets better and better over time saving you tons of time and effort. With our Outsourced Questionnaire Response service, organizations can: • Have any incoming security, privacy, and due diligence questionnaires answered for them • Build an answer library • Collaborate internally and with requesting organizations to streamline due diligence on your behalf • Build and work as an extension of your security team in answering the due diligence questionnaire'),
(34, 'ourservices', '(RaaS) Ransomware-as-a-Service', 'Early warning system for ransomware attacks. Helping our clients be in the know before an attack happens. Identify risk indicators early on so our clients can proactively address the risks that could lead to potential problems in the future.'),
(36, 'ourservices', ' Outsourced Completing Security Questionnaires', 'This concept of outsourcing the task of filling out questionnaires takes away the pain and frustration of completing security questionnaires. This can save IT, sales, and security leaders dozens of hours on security questionnaire documents and speed up the sales cycle by 25 to 35% or greater in some cases. Organizations can reinvest the saved time on higher leverage high-value activities. What a concept…. Waking up to a completed questionnaire in your inbox. For our enterprise and third-party vendors – Outsourced Questionnaire Response Services to Answer Security and Privacy Questionnaires and build a master questionnaire/response knowledge base. Our human and technology-powered solution help organizations answer incoming security, privacy, and due diligence questionnaires from their customers. The Questionnaire Response process and technology work for any questionnaire – regardless of industry-standard or framework – as well as one-off, custom questionnaires. Organizations are increasingly responding to incoming security, privacy, and due diligence questionnaires from their customers. This process can be time-consuming and cumbersome to answer hundreds of questions for separate vendors, questionnaires, and requests. We start with a baseline questionnaire either a new one or one you have already filled out. Then any time new security or privacy questionnaire comes your way you will forward it to us, we’ll get busy and fill in the responses based on knowledge from the base questionnaire you provided. With everyone, we do for you new questionnaires/responses automatically get added to your master questionnaire. Our ability to comprehensively complete future incoming questionnaires only gets better and better over time saving you tons of time and effort. With our Outsourced Questionnaire Response service, organizations can: • Have any incoming security, privacy, and due diligence questionnaires answered for them • Build an answer library • Collaborate internally and with requesting organizations to streamline due diligence on your behalf • Build and work as an extension of your security team in answering the due diligence questionnaire\r\n'),
(37, 'ourservices', ' Outsourced Completing Security Questionnaires', 'This concept of outsourcing the task of filling out questionnaires takes away the pain and frustration of completing security questionnaires. This can save IT, sales, and security leaders dozens of hours on security questionnaire documents and speed up the sales cycle by 25 to 35% or greater in some cases. Organizations can reinvest the saved time on higher leverage high-value activities. What a concept…. Waking up to a completed questionnaire in your inbox. For our enterprise and third-party vendors – Outsourced Questionnaire Response Services to Answer Security and Privacy Questionnaires and build a master questionnaire/response knowledge base. Our human and technology-powered solution help organizations answer incoming security, privacy, and due diligence questionnaires from their customers. The Questionnaire Response process and technology work for any questionnaire – regardless of industry-standard or framework – as well as one-off, custom questionnaires. Organizations are increasingly responding to incoming security, privacy, and due diligence questionnaires from their customers. This process can be time-consuming and cumbersome to answer hundreds of questions for separate vendors, questionnaires, and requests. We start with a baseline questionnaire either a new one or one you have already filled out. Then any time new security or privacy questionnaire comes your way you will forward it to us, we’ll get busy and fill in the responses based on knowledge from the base questionnaire you provided. With everyone, we do for you new questionnaires/responses automatically get added to your master questionnaire. Our ability to comprehensively complete future incoming questionnaires only gets better and better over time saving you tons of time and effort. With our Outsourced Questionnaire Response service, organizations can: • Have any incoming security, privacy, and due diligence questionnaires answered for them • Build an answer library • Collaborate internally and with requesting organizations to streamline due diligence on your behalf • Build and work as an extension of your security team in answering the due diligence questionnaire'),
(38, 'forenterprise', '(RaaS) Ransomware-as-a-Service', 'Early warning system for ransomware attacks. Helping our clients be in the know before an attack happens. Identify risk indicators early on so our clients can proactively address the risks that could lead to potential problems in the future.'),
(39, 'forenterprise', 'Comprehensive Continuous Cyber Risk Rating Service', 'Effectively monitor your external security posture and proactively address the risks that could lead to potential cyber security problems in the future. Gain on-demand security & compliance risk insights and improve your Cyber Risk Ratings before your customers even reach out to you.');

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
(1, '<p>VENDOR CYBER SECURITY RISK ASSESSMENT &ndash; DASHBOARD &amp; REPORT</p>', '<p>Cyber Risk rating is calculated using the MITRE Cyber Threat Susceptibility Assessment (CTSA), Common weakness Risk Analysis Framework (CWRAF), Common Weakness Scoring System (CWSS), and Common Vulnerability Scoring System (CVVS).</p>', 'http://tprmtest.000webhostapp.com/images/solutions/dashboardandreport.png'),
(2, '<p>RISK SCORE CARD</p>', '<p>Our System evaluates the security posture for 4 main groups namely Safeguard, Privacy, Resiliency &amp; Reputation, and 20 unique categories. This data is compiled into a simple, readable report with letter-grade scores to help identify and mitigate potential security risks. Each category has a summary or top riskiest assets and technical details along with mitigation, compliance, standards &amp; regulation details can be found at the bottom of each category and the Knowledge Base.</p>', 'http://tprmtest.000webhostapp.com/images/solutions/RiskScoreCard.png'),
(3, '<p>RANSOMWARE (RSI) ASSESSMENT</p>', '<p>Uncover your ransomware susceptibility &ndash; know the likelihood of a ransomware attack on your organization or your third parties. The ransomware susceptibility index (RSI) follows a process of inspecting, transforming, and modeling collected data from a variety of OSINT sources (internet-wide scanners, hacker forums, the deep/dark web, and more). Using the data and machine learning, the correlation between controls items is identified to provide approximations. The susceptibility scale ranges from 1.0 (lowest likelihood of attack) to 1.0 (highest likelihood of attack). The RSI examines 26 unique controls to calculate index approximations.</p>', 'http://tprmtest.000webhostapp.com/images/solutions/RSI.png'),
(4, 'Cyber Security Risk Assessment', '', 'http://tprmtest.000webhostapp.com/images/solutions/CyberSecurityRiskAssessment.png'),
(5, 'Fair Risk Rating', 'The FAIRTM (Factor Analysis of Information Risk) cyber risk framework has emerged as the premier Value at Risk (VaR) framework for cybersecurity and operational risk. The FAIRTM Institute is a non-profit professional organization dedicated to advancing the discipline of measuring and managing information risk.', 'http://tprmtest.000webhostapp.com/images/solutions/FairRiskRating.png'),
(6, '<p>Opensource Intelligence</p>', '<p>Cyber Risk Scorecard uses Open Source Intelligence services to collect, analyze and report security-related events and findings. Security companies and hackers are always scanning publicly accessible networks and sharing their data on the internet. This is commonly referred to as Open-Source Intelligence (OSINT).</p>', 'http://tprmtest.000webhostapp.com/images/solutions/OpensourceIntelligence.png');

-- --------------------------------------------------------

--
-- Table structure for table `technicalriskinsight`
--

CREATE TABLE `technicalriskinsight` (
  `id` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technicalriskinsight`
--

INSERT INTO `technicalriskinsight` (`id`, `description`) VALUES
(1, '<p><strong><span style=\"font-size:18px\"><span style=\"color:#333333\">Risk Karma solution uses open-source intelligence (OSINT) techniques to collect data from 400+ OSINT resources via a span of Internet-wide scanners. </span>Data is <span style=\"color:#333333\">collected from 400+ resources. There are several categories that the solution collects data from:</span></span></strong></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:12pt\"><span style=\"color:#333333\">Threat Intelligence</span></span></li>\r\n	<li><span style=\"font-size:12pt\"><span style=\"color:#333333\">Exploits &amp; Advisories</span></span></li>\r\n	<li><span style=\"font-size:12pt\"><span style=\"color:#333333\">Dark Web</span></span></li>\r\n	<li><span style=\"font-size:12pt\"><span style=\"color:#333333\">Archives</span></span></li>\r\n	<li><span style=\"font-size:12pt\"><span style=\"color:#333333\">Forums / Blogs / IRC</span></span></li>\r\n	<li><span style=\"font-size:12pt\"><span style=\"color:#333333\">Search Engines</span></span></li>\r\n	<li><span style=\"font-size:12pt\"><span style=\"color:#333333\">Business Records</span></span></li>\r\n	<li><span style=\"font-size:12pt\"><span style=\"color:#333333\">Public Records</span></span></li>\r\n	<li><span style=\"font-size:12pt\"><span style=\"color:#333333\">Social Networks</span></span></li>\r\n	<li><span style=\"font-size:12pt\"><span style=\"color:#333333\">Internet-Wide scanners</span></span></li>\r\n</ul>\r\n');

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
(1, '<p>&nbsp;</p>\r\n\r\n<p><strong>1. TERMS AND CONDITIONS OF USE</strong><br />\r\nThe following terms and conditions of use (&ldquo;TERMS OF USE&rdquo;) apply to all visitors to or users of this website. By accessing this website, the visitor or user acknowledges acceptance of these terms and conditions. In the case of any violation of these TERMS OF USE, Risk Karma, LLC (Risk Karma&rdquo;) reserves the right to seek all remedies available at law and in equity for such violations. These TERMS OF USE apply to all visits to the Risk Karma website, both now and in the future.</p>\r\n\r\n<p><strong>2. NOTICE SPECIFIC TO DOCUMENTS AVAILABLE ON THIS WEBSITE</strong><br />\r\nPermission to use Documents (such as white papers, press releases, datasheets, and FAQs) from this server (&ldquo;DOCUMENTS&rdquo;) is granted, provided that (1) the below copyright notice appears in all copies and that both the copyright notice and this permission notice appear, (2) use of such DOCUMENTS from this server is for informational and non-commercial or personal use only and will not be copied or posted on any network computer or broadcast in any media, and (3) no modifications of any DOCUMENTS are made. Use for any other purpose is expressly prohibited by law. DOCUMENTS specified above do not include the design or layout of the RiskKarma.com website or any other Risk Karma owned, operated, licensed, or controlled site. Elements of Risk Karma&rsquo;s website are protected by trade dress and other laws and may not be copied or imitated in whole or in part. No logo, graphic, sound, or image from the Risk Karma website may be copied or retransmitted unless expressly permitted in writing by Risk Karma.</p>\r\n\r\n<p><strong>3. DISCLAIMERS AND LIMITATION OF LIABILITY</strong><br />\r\nIN NO EVENT SHALL Risk Karma AND/OR ITS RESPECTIVE SUPPLIERS BE LIABLE FOR ANY DAMAGES, INCLUDING WITHOUT LIMITATION DIRECT, SPECIAL, INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION OR OTHERWISE, ARISING OUT OF OR IN CONNECTION WITH THE DOCUMENTS, PROVISION OF OR FAILURE TO PROVIDE SERVICES, OR THE USE OR PERFORMANCE OF INFORMATION AVAILABLE FROM THIS SERVER, OR OTHERWISE RELATED TO THE USE OF THIS WEBSITE. THE DOCUMENTS AND RELATED GRAPHICS PUBLISHED ON THIS SERVER COULD INCLUDE TECHNICAL INACCURACIES OR TYPOGRAPHICAL ERRORS. CHANGES ARE PERIODICALLY ADDED TO THE INFORMATION HEREIN. Risk Karma AND/OR ITS RESPECTIVE SUPPLIERS MAY MAKE CHANGES TO THE DOCUMENTS DESCRIBED HEREIN AT ANY TIME. Risk Karma AND/OR ITS RESPECTIVE SUPPLIERS MAKE NO REPRESENTATIONS ABOUT THE SUITABILITY OF THE INFORMATION CONTAINED IN THE DOCUMENTS AND RELATED GRAPHICS PUBLISHED ON THIS SERVER FOR ANY PURPOSE. ALL SUCH DOCUMENTS AND RELATED GRAPHICS ARE PROVIDED &ldquo;AS IS&rdquo; WITHOUT A WARRANTY OF ANY KIND. Risk Karma AND/OR ITS RESPECTIVE SUPPLIERS HEREBY DISCLAIM ALL WARRANTIES AND CONDITIONS WITH REGARD TO THIS INFORMATION, INCLUDING ALL IMPLIED WARRANTIES AND CONDITIONS OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, SATISFACTORY QUALITY, TITLE, AND NON-INFRINGEMENT AND THEIR EQUIVALENTS.</p>\r\n\r\n<p><strong>4. COMPLIANCE WITH APPLICABLE LAWS; EXPORT CONTROL LAWS; U.S. GOVERNMENT-RESTRICTED RIGHTS</strong><br />\r\nUser access to this website is governed by all applicable federal, state, and local laws. All information available on the website is subject to U.S. export control laws and may also be subject to the laws of the country where you reside. You warrant that you will comply in all respects with the Export Administration Regulations and all other export and re-export laws, rules, and restrictions applicable to your use of this website hereunder. All Risk Karma products and publications are commercial in nature. Use, duplication or disclosure by the United States Government is subject to the restrictions set forth in DFARS 252.227-7013, DFARS 252.227-7015, and FAR 52.227-19. Any use, modification, reproduction, release, performance, display, or disclosure of this website by the U.S. Government shall be governed solely by the terms of these TERMS OF USE and shall be prohibited except to the extent expressly permitted by these TERMS OF USE.</p>\r\n\r\n<p><strong>5. THIRD-PARTY STATEMENTS ON Risk Karma &rsquo;S WEBSITE</strong><br />\r\nRisk Karma may, but is not obligated to, monitor or review statements made by third parties on Risk Karma &rsquo;S website. Users or other third parties may post statements or information on some portions of the Risk Karma website from time to time. Risk Karma makes no representation as to the accuracy, appropriateness, legality, ownership or other aspects of such statements or information. Risk Karma expressly disclaims any liability for such third-party statements under criminal or civil laws relating to defamation, intellectual property infringement, privacy, obscenity, or other areas of law.</p>\r\n\r\n<p><strong>6. LINKS TO THIRD PARTY SITES</strong><br />\r\nTHE LINKS IN Risk Karma &rsquo;S WEBSITE WILL LET YOU LEAVE Risk Karma &rsquo;S WEBSITE. THE LINKED SITES ARE NOT UNDER THE CONTROL OF Risk Karma AND Risk Karma IS NOT RESPONSIBLE FOR THE CONTENTS OF ANY LINKED SITE OR ANY LINK CONTAINED IN A LINKED SITE, OR ANY CHANGES OR UPDATES TO SUCH SITES. Risk Karma IS PROVIDING THESE LINKS TO YOU ONLY AS A CONVENIENCE, AND THE INCLUSION OF ANY LINK DOES NOT IMPLY ENDORSEMENT BY Risk Karma OF THE SITE.</p>\r\n\r\n<p><strong>7. COPYRIGHT NOTICE</strong><br />\r\nCopyright&copy; 2021 Risk Karma, LLC, 6789 Quail Hill Parkway, Suite 533 Irvine CA 92603, U.S.A. Any rights not expressly granted herein are reserved.</p>\r\n\r\n<p><strong>8. TRADEMARKS</strong><br />\r\nRisk Karma third-party risk assessment services and Risk Karma Risk Report are trademarks of Risk Karma registered in the United States and other countries. Other trademarks belong to their respective holders.</p>\r\n\r\n<p><strong>9. GENERAL</strong><br />\r\nThese TERMS OF USE shall not be governed by the U.N. Convention on Contracts for the International Sale of Goods; rather, these TERMS OF USE shall be governed by the laws of the State of California, including its Uniform Commercial Code, without reference to conflicts of laws principles. These TERMS OF USE constitute the entire agreement between us and supersedes any other communications or advertising with respect to Risk Karma&rsquo;s website. The waiver of a breach of any term hereof shall in no way be construed as a waiver of any other term or breach hereof. If any provision of these TERMS OF USE is held invalid or unenforceable, such provision shall be revised to the extent necessary to cure the invalidity or unenforceability, and the remainder of the TERMS OF USE shall continue in full force and effect. The person agreeing to these TERMS OF USE represents and warrants that such person is authorized to bind and does so bind his or her principal or employer and has the adequate legal capacity to enter these TERMS OF USE. You may not assign these TERMS OF USE or any rights or obligations hereunder, directly or indirectly, by operation of law or otherwise, without the prior written consent of Risk Karma. Subject to the foregoing sentence, these TERMS OF USE shall inure to the benefit of and be binding upon the parties and their respective successors and permitted assigns.</p>\r\n');

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
(1, '<p>Third-Party Risk Management (TPRM) is about knowing what drives risks, and while the processes and tools are important, they should be enabling people to make smart decisions. Focus on identifying what relationships are truly critical, set risk reduction instead of merely risk identification as the end goal, and make continual improvements rather than attempting to build a perfect solution. Working with a team of specialists can help achieve regulatory compliance by realizing the benefits of an effective and efficient third-party risk management program that is tailored to the needs of different stakeholders and business units.</p>\r\n\r\n<p>Risk Karma&rsquo;s Third-Party Risk Management as-a-Service is helping organizations of all sizes, in all the verticals to manage their third party risks; through its management services approach. Select and engage in services based on your needs and pay as you go or simply leverage our entire services offering with a straightforward annual subscription fee.</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong>[Risk Karma (TPRM) as-a-Service offering can bring an average 60% reduction in manual work, 45% reduction in time to identify and mitigate risk, and 300% increase in team productivity]</strong></span></p>\r\n\r\n<ul>\r\n	<li>If you&rsquo;re just getting started in setting up a TRPM program in your organization and need some guidance we can help accelerate your third-party risk management program and drive forward solutions/services that deliver outcomes.</li>\r\n	<li>If you already have a mature TPRM program in place and just need help augmenting existing staff &ndash; we can help.</li>\r\n	<li>If you need to assess third parties as part of an RFP/RFI process only &ndash; we can help.</li>\r\n	<li>If you need help and guidance in evaluating GRC solutions or cyber risk rating solutions &ndash; we can help.</li>\r\n	<li>If you simply just need help in certain aspects of your third-party risk assessment processes like 1) document collection and gathering for supplier due-diligence activities or 2) validating controls stated by suppliers in their questionnaire responses or 3) tracking and managing remediation activities on assessed suppliers or all of the above - we can help.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:36px\"><strong>Our&nbsp;Goals&nbsp;Are&nbsp;Simple:</strong></span></p>\r\n\r\n<ul>\r\n	<li>Offer solutions/services that you can select as you grow and at the time needed with flexible pricing options that meet almost all budgets requirements and needs.</li>\r\n	<li>Offer integrated TPRM related services that drive desired program outcomes for your organization.</li>\r\n	<li>Offer greater risk visibility across your entire&nbsp;supplier chain - gain a 360-degree view Identify IT and business exposures with inside-out assessment and outside-in monitoring, eliminating coverage gaps and informing risk-based decision making.</li>\r\n	<li>Offer quicker assessment capabilities - automate the process of collecting, analyzing, remediating, and reporting on vendor evidence.</li>\r\n	<li>Offer continuous monitoring - that allows you to make better risk-based decisions with technical insight into threats, breaches, ransomware, and network health, combined with a strategic view of business risks.</li>\r\n	<li>Offering advisory/consulting - to help plan, optimize and mature your TPRM program. With our advisory and consulting services, and/or simply take advantage of managed services options.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong>In short &ndash; You need third-party risk assessments done and we do third-party risk assessments. In fact, it&#39;s ALL we do. This is a serendipitous collision made in haven&hellip;</strong></span></p>\r\n');

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
(1, '<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong><em>Our mission and </em><em>strategy </em><em>are simple: serve - not sell; collaborate - not compete.</em></strong></span></p>\r\n\r\n<p>Risk Karma is helping redefine third-party risk management (TPRM), by providing greater risk insight from security risk ratings and security questionnaires assessments on the front-end with risk validation and remediation tracking assistance on the back-end. Our questionnaire assessments are based on standardized risk frameworks like NIST, ISO, SIG, and our cyber risk ratings are based on standards risk analysis and scoring standards like MITRE, CVSS, NIST, and FAIR. No black box or secret sauce ratings here.</p>\r\n\r\n<p>Risk Karma seeks to help small and medium-sized businesses (SMBs) organizations develop a course of action to identify, assess and remediate attack surface weakness as well as monitor third-party (vendors/suppliers) that pose a high risk.</p>\r\n\r\n<p><span style=\"font-size:36px\"><strong>Key Takeaways:&nbsp;</strong></span></p>\r\n\r\n<ul>\r\n	<li>Industry Expertise - At the center of the Risk Karma&rsquo;s (TPRM) as-a-Service solution are industry thought leaders and security practitioners with deep hands-on experience in developing, launching, maturing, and operating&nbsp;third-party risk programs for companies of all sizes and across all industry sectors.</li>\r\n	<li>Skilled Team - Ex-CISOs, Seasoned Security Practitioners &amp; Program Managers, 25+ years of combined experience in Supplier Risk Management.</li>\r\n	<li>Risk Karma&nbsp;automates the whole process from risk assessment to engagement, remediation, and ongoing monitoring.</li>\r\n	<li>Risk Karma solutions help prevent data breaches caused by your 3rd party vendors and mitigate 3rd-party ransomware attacks.</li>\r\n	<li>Ability to cost-effectively scale third-party risk management program efforts.</li>\r\n	<li>Make quick, intelligent, and consistent decisions on your relationships with your third parties.</li>\r\n	<li>We offer outcome-driven enablement of cybersecurity risk rating services, context-based security questionnaires, early identification of ransomware/data breach susceptibility.</li>\r\n	<li>We help executives and frontline teams prioritize cyber risk and mitigation efforts, deliver business value and provide independent leadership on-demand/as needed.</li>\r\n	<li>Quick Response/Quick Engagement &ndash; Service offered at the time of need when most effective.</li>\r\n	<li>No Geek SpeakEasy to understand and actionable risk insights and data to make a difference.</li>\r\n	<li>Reduced overall costs by conducting third-party assessments.</li>\r\n	<li>Save time/effort -&nbsp;Risk Karma can execute in hours, not days or weeks. We<strong> </strong>will do all the work for you, in a fraction of the time of traditional methods and for a fraction of the cost.</li>\r\n	<li>Our offering lets you address potential risks with fewer resources and in less time.</li>\r\n	<li>Gives you an opportunity to concentrate on your core business functions.</li>\r\n	<li>Offers you a framework for your organization and your vendors.</li>\r\n	<li>Enhances the integrity, confidentiality, and obtainability of your services.</li>\r\n	<li>Drives financial and operational competencies.</li>\r\n	<li>Better assurances that the reputation and quality of your services and products are not ruined.</li>\r\n	<li>Not to mention we offer the most accurate way to gain immediate risk insight and to baseline any major gaps using Open Source Intelligence (OSINT), same as what pen testers and hackers use, giving you an accurate point in time view or a continuous view of your vendors, your own organization or even just companies you have a vested interest in.&nbsp;</li>\r\n	<li>Bottom line - Drive better desired risk-based outcomes with your third parities relationships</li>\r\n</ul>\r\n\r\n<div>\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:36px\"><strong>General Use Cases (vertical/industry agnostic solutions):</strong></span></p>\r\n\r\n<ul>\r\n	<li>Allow existing staff to focus on contracted third parties and us to handle third-party assessments during RFI/RFP evaluations.</li>\r\n	<li>Allow existing staff to focus on high-risk complex strategic third parties and us to handle med-risk tactical third parties leveraged for short-term project work.</li>\r\n	<li>Allows companies to better position and posture themselves prior to purchasing cybersecurity insurance. Risk Karma can help the company to feel confident in their cybersecurity status when they negotiate their cyber security policy with insurance carriers.&nbsp;</li>\r\n	<li>Augment existing staff and allow us to take care of supplier assessment overflow when and as needed like during end-of-quarter when deals need to be executed.</li>\r\n	<li>Better empower tools investments - Tools (automation) alone can only help collect and gather data, human-based risk analysis drives true risk identification through validation and remediation services.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:36px\"><strong>Vertical Specific&nbsp;Use Cases (small sample):</strong></span></p>\r\n\r\n<p><strong>CYBER INSURANCE CARRIERS:</strong>&nbsp;<em>Risk reduction in cyber underwriting.</em>&nbsp;Risk Karma&rsquo;s<em> </em>supervisory cybersecurity practices can foster sustainable cyber risk underwriting.&nbsp;Identified challenges - Modeling cyber risk as input for underwriting decisions remains underdeveloped, Risk Karma can assist insurance companies in better accessing cyber risk with quantifiable data before determining policy worthiness and premiums based on tangible risk data Risk Karma can provide. Risk Karma&rsquo;s cyber risk rating services can be used on the initial assessment of companies looking for cyber insurance and/or as a way to monitor ongoing risk in case premiums need to be adjusted based on fluctuation of residual risk. Risk Karma can&nbsp;offer ideas. Contact us.</p>\r\n\r\n<p><strong>THIRD-PARTY RISK MANAGEMENT FOR LAW FIRMS AND LEGAL DEPARTMENTS:&nbsp;</strong><em>Risk reduction in protecting corporate and/or client data.&nbsp;</em>&nbsp;A law firm or a&nbsp;financial firm&rsquo;s legal department, in particular, faces thorny challenges when it comes to managing risk across internal and external counsel. Legal firms have different&mdash;and generally less stringent&mdash;risk management requirements, so data shared with them can be at risk. Cyber attackers keep law firms in their sites, because data gained in an attack is useful in and of itself, but might also tip investors about possible activities such as upcoming mergers &amp; acquisitions. Reputation is also at risk: If a law firm is breached, word gets out about that firm and about its clients, such as financial firms. What can a legal department do to manage this bigger risk exposure? Risk Karma can&nbsp;offer&nbsp;ideas. Contact us.</p>\r\n</div>\r\n\r\n<div style=\"text-align:center\">&nbsp;</div>\r\n');

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
-- Indexes for table `consulting_logo`
--
ALTER TABLE `consulting_logo`
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
-- Indexes for table `ecosystempartners`
--
ALTER TABLE `ecosystempartners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newofferings`
--
ALTER TABLE `newofferings`
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
-- Indexes for table `technicalriskinsight`
--
ALTER TABLE `technicalriskinsight`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- AUTO_INCREMENT for table `consulting_logo`
--
ALTER TABLE `consulting_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ecosystempartners`
--
ALTER TABLE `ecosystempartners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newpricelist`
--
ALTER TABLE `newpricelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pricelistcolumns_mapping`
--
ALTER TABLE `pricelistcolumns_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `solution_screenshots`
--
ALTER TABLE `solution_screenshots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `technicalriskinsight`
--
ALTER TABLE `technicalriskinsight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
