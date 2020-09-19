-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 04:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shivayfinance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `username`, `email`, `phone`, `state`, `city`, `message`, `created_at`, `updated_at`) VALUES
(1, 'postgres', 'test@gmail.com', '9795403585', 'uttrakhand', 'vikashnagar', 'test stest test', '2020-05-30 11:51:51', '2020-05-30 11:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_req` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `name`, `description`, `doc_req`, `faq`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Business Loan', '<p class=\"cont\" style=\"box-sizing: inherit; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 14.9333px; letter-spacing: 0.159936px;\">A business loan can be availed with or without security, it depends on the bank that offers loan and then the amount of risk they are ready to take. Whether business loan is for an existing business or to start a brand new one, there are many banks in India that offers loan for both small and big businesses. Getting approval and money is possible within few days if you have all&nbsp;<span style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit;\">necessary documents</span></span>&nbsp;and if you meet the eligibility criteria.</p>', '<p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\"><span style=\"font-weight: 700;\">Typical Documents for Short Term Business Loan Application</span></p><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 35px; list-style-position: initial; list-style-image: initial; padding: 0px; color: rgb(63, 78, 92); font-family: Roboto, sans-serif; font-size: 15px;\"><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Income Tax returns of last 2 Years</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Last 2 years audit reports and audited Financials including those of associate companies if applicable<ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 35px; list-style: disc; padding: 0px;\"><li style=\"line-height: 27px; margin: 0px 0px 4px;\">( Your debtors and creditors list with transaction details is must)</li></ul></li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Last 12 months bank statements</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Certificate of Incorporation – for private limited companies</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Partnership deed for LLPs, MoA (Memorandum of Association) / &nbsp;AoA (Articles of Association) for Private Ltd companies</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Certificate of Registration for sole proprietors or Single Person Company</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Residence / Office Ownership Proof</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Aadhar Card for Directors, Promoters, Applicants</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Address Proof and Identity Proof&nbsp;<em>( Passport, Voter ID, PAN Card, Driving Licence, Aadhar Card )</em></li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Utility Bills for Telephone / Electricity / Internet</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Company and Directors PAN Numbers</li></ul><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 35px; list-style-position: initial; list-style-image: initial; padding: 0px; color: rgb(63, 78, 92); font-family: Roboto, sans-serif; font-size: 15px;\"><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Cash flow statements and cash flow projections for more than 1 Crore loans</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Equipment or Machinery Invoices or Performa invoices or Quotations for Equipment financing from vendors</li></ul>', '<p style=\"text-align: left;\"><span style=\"color: rgb(63, 78, 92); font-family: Roboto, sans-serif; font-size: 17px; background-color: rgba(0, 0, 0, 0.04);\"><b>What are the loan products you are offering currently?</b></span></p><p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\">Currently, we are engaging with several lenders to offer:</p><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 35px; list-style-position: initial; list-style-image: initial; padding: 0px; color: rgb(63, 78, 92); font-family: Roboto, sans-serif; font-size: 15px;\"><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Short Term Loans for working capital needs</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Medium Term Loans for various business needs</li></ul><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\">We usually are offering unsecured business loans for such products through our partners.</p><p style=\"text-align: left;\"><br></p>', 1, NULL, '2020-03-02 11:31:32'),
(2, 'Home Loan', '<p style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Home loan is the money borrowed from a bank or a housing finance institution on interest for buying / constructing / upgrading a residential real estate property.</p>', '<p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\"><span style=\"font-weight: 700;\">List of papers/ documents applicable to all applicants:</span></p><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 35px; list-style-position: initial; list-style-image: initial; padding: 0px; color: rgb(63, 78, 92); font-family: Roboto, sans-serif; font-size: 15px;\"><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Loan Application: Completed loan application form duly filled in and affixed with 3 Passport size photographs</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Proof of Identity (Any one): PAN/ Passport/ Driver’s License/ Voter ID card</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Proof of Residence/ Address (Any one): Recent copy of Telephone Bill/ Electricity Bill/Water Bill/ Piped Gas Bill or copy of Passport/ Driving License/ Aadhar Card</li></ul><p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\"><span style=\"font-weight: 700;\">Property Papers:</span></p><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 35px; list-style-position: initial; list-style-image: initial; padding: 0px; color: rgb(63, 78, 92); font-family: Roboto, sans-serif; font-size: 15px;\"><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Permission for construction (where applicable)</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Registered Agreement for Sale (only for Maharashtra)/Allotment Letter/Stamped Agreement for Sale</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Occupancy Certificate (in case of ready to move property)</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Share Certificate (only for Maharashtra), Maintenance Bill, Electricity Bill, property tax receipt</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Approved Plan copy (Xerox Blueprint) &amp; Registered Development agreement of the builder, Conveyance Deed (For New Property)</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Payment Receipts or bank A/C statement showing all the payments made to Builder/Seller</li></ul><p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\"><span style=\"font-weight: 700;\">Account Statement:</span></p><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 35px; list-style-position: initial; list-style-image: initial; padding: 0px; color: rgb(63, 78, 92); font-family: Roboto, sans-serif; font-size: 15px;\"><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Bank A/c. Statement (Individual) for last six months</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">If any previous loan from other Banks/Lenders, then Loan A/C statement for last 1 year</li></ul><p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\"><span style=\"font-weight: 700;\">Income Proof for Salaried Applicant/ Co-applicant/ Guarantor:</span></p><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 35px; list-style-position: initial; list-style-image: initial; padding: 0px; color: rgb(63, 78, 92); font-family: Roboto, sans-serif; font-size: 15px;\"><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Last 3 months Salary Slip.</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Copy of Form 16 for last 2 years or copy of IT Returns for last 2 financial years, acknowledged by IT Dept.</li></ul><p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\"><span style=\"font-weight: 700;\">Income Proof for Non-Salaried Co-applicant/ Guarantor:</span></p><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 35px; list-style-position: initial; list-style-image: initial; padding: 0px; color: rgb(63, 78, 92); font-family: Roboto, sans-serif; font-size: 15px;\"><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Business Registration Proof.</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Balance Sheet &amp; Profit &amp; loss A/c for last 3 years</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Business License Details(or equivalent)</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">TDS Certificate (Form 16A, if applicable)</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">Certificate of qualification (for C.A./ Doctor and other professionals)</li><li style=\"font-size: 18px; color: rgb(0, 0, 0); font-family: calibri; line-height: 27px; margin: 0px 0px 4px;\">IT returns for last 3 years</li></ul>', '<p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\"><span style=\"font-weight: 700;\">What is CIBIL ?</span></p><p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\">Credit Information Bureau (India) Limited, commonly known as CIBIL, is India’s first Credit Information Company or Credit Bureau. It maintains records of all credit-related activity of individuals and companies including loans and credit cards . The records are submitted to CIBIL by registered member banks and other financial institutions on a periodic (usually monthly) basis. Based on this data, CIBIL issues a Credit Information Report or CIR (commonly referred to as a credit report) and a credit score.</p><p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\">Please note that CIBIL is a database of credit information. It does not make any lending decisions. It provides data to banks and other lenders who use it as a quick and efficient resource to filter loan application.</p>', 1, NULL, '2020-03-02 11:39:02'),
(3, 'Car Loan', '<span style=\"color: rgb(52, 73, 94); font-family: Lato, Helvetica, Arial, sans-serif; background-color: rgb(238, 238, 238);\">With interest rates as low as&nbsp;</span><strong style=\"font-weight: bold; color: rgb(52, 73, 94); font-family: Lato, Helvetica, Arial, sans-serif; background-color: rgb(238, 238, 238);\">8.30% p.a.</strong><span style=\"color: rgb(52, 73, 94); font-family: Lato, Helvetica, Arial, sans-serif; background-color: rgb(238, 238, 238);\">&nbsp;and repayment tenure of up to 8 years, you can find the most suitable vehicle loan for your needs at BankBazaar. You can take the loan for 90% to 100% of the on-road price of the car.</span>', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 1.8; color: rgb(52, 73, 94); font-family: Lato, Helvetica, Arial, sans-serif;\">The<font color=\"#38acc9\"><span style=\"transition-duration: 0.25s; transition-property: all;\">&nbsp;car loan eligibility</span></font>&nbsp;criteria can be different for different banks. The common criteria are as follows:</p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 15px; padding: 0px 0px 0px 7px; line-height: 1.8; list-style-position: initial; list-style-image: initial; color: rgb(52, 73, 94); font-family: Lato, Helvetica, Arial, sans-serif;\"><li style=\"margin: 0px; padding: 0px; line-height: 1.8;\">Age between 18 years and 75 years</li><li style=\"margin: 0px; padding: 0px; line-height: 1.8;\">Minimum net monthly income of Rs. 20,000</li><li style=\"margin: 0px; padding: 0px; line-height: 1.8;\">At least 1 year of employment with the current employer</li><li style=\"margin: 0px; padding: 0px; line-height: 1.8;\">Must be salaried or self-employed, working for a government establishment or a private company</li></ul>', NULL, 1, NULL, '2020-03-02 11:50:05'),
(4, 'Personal Loan', '<p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\">Once you submit your application form and the required documents as per Bank/NDFC’s criteria, you can expect approval and disbursal within 2 to 5 working days, provided everything is in order. All loan approvals are at the sole discretion of the Lender.</p>', '<p class=\"cont\" style=\"box-sizing: inherit; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 14.9333px; letter-spacing: 0.159936px; text-align: justify;\">To avail a personal loan, an applicant needs to provide certain documents, either printed or in digital format, to the lender. The lender will ask for the documents to verify the following about the applicant:</p><ol style=\"box-sizing: inherit; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 14.9333px; letter-spacing: 0.159936px; text-align: justify;\"><li class=\"cont\" style=\"box-sizing: inherit; text-align: justify;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Identity:</span>&nbsp;Name, age, gender and physical appearence.</li><li class=\"cont\" style=\"box-sizing: inherit; text-align: justify;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Residence:</span>&nbsp;Permanent and current place of residence (in case both are different)</li><li class=\"cont\" style=\"box-sizing: inherit; text-align: justify;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Employment:</span>&nbsp;Whether the applicant is a salaried employee or a self-employed professional.</li><li class=\"cont\" style=\"box-sizing: inherit; text-align: justify;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Income:</span>&nbsp;Monthly in-hand income of the applicant.</li><li class=\"cont\" style=\"box-sizing: inherit; text-align: justify;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Loan Requirement:</span>&nbsp;Purpose, tenure and the desired loan amount.</li></ol><p class=\"cont\" style=\"box-sizing: inherit; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 14.9333px; letter-spacing: 0.159936px; text-align: justify;\">Whenever, there is a shortage of cash for any personal use, personal loans are the saviours. But, to be safe themselves, the lenders require a few set of documents from each applicant. The lenders have their own specific requirements, criteria and set of documents.</p><p class=\"cont\" style=\"box-sizing: inherit; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 14.9333px; letter-spacing: 0.159936px; text-align: justify;\">Above is the checklist of documents required by the personal loan lenders.</p>', '<p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\"><span style=\"font-weight: 700;\">What is CIBIL ?</span></p><p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\">Credit Information Bureau (India) Limited, commonly known as CIBIL, is India’s first Credit Information Company or Credit Bureau. It maintains records of all credit-related activity of individuals and companies including loans and credit cards . The records are submitted to CIBIL by registered member banks and other financial institutions on a periodic (usually monthly) basis. Based on this data, CIBIL issues a Credit Information Report or CIR (commonly referred to as a credit report) and a credit score.</p><p style=\"margin-right: 0px; margin-bottom: 13px; margin-left: 0px; font-size: 18px; font-family: calibri; line-height: 27px;\">Please note that CIBIL is a database of credit information. It does not make any lending decisions. It provides data to banks and other lenders who use it as a quick and efficient resource to filter loan application.</p>', 1, NULL, '2020-03-02 11:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `loan_requests`
--

CREATE TABLE `loan_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loantype_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_requests`
--

INSERT INTO `loan_requests` (`id`, `loantype_id`, `amount`, `purpose`, `business_name`, `business_age`, `state`, `city`, `email`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 23444, 'sdf', 'dfg', '1', 'uttrakhand', 'rishikesh', 'test@gmail.com', '9795403585', 1, '2020-02-08 09:20:15', '2020-02-08 09:20:15'),
(2, 4, 234, 'sdf', 'dfg', '1', 'uttrakhand', 'rishikesh', 'terrst@gmail.com', '9795403599', 1, '2020-02-08 09:26:05', '2020-02-08 09:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2020_01_23_013017_create_sliders_table', 1),
(11, '2020_02_01_020930_create_loans_table', 1),
(12, '2020_02_03_014605_create_partners_table', 1),
(14, '2020_02_08_101516_create_loan_requests_table', 2),
(17, '2020_02_13_152513_create_pages_table', 3),
(18, '2020_05_30_155319_create_contacts_table', 4),
(19, '2020_09_15_162712_create_permission_tables', 5),
(20, '2020_09_18_160043_create_admins_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `content`, `excerpt`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', '<p><span style=\"font-family: Impact;\">﻿</span><span style=\"font-family: Impact;\">this is testing</span></p>', 'testtt', 1, NULL, '2020-02-21 11:16:04'),
(2, 'Contact Us', 'contact-us', '<span style=\"background-color: rgb(255, 255, 0);\">this is contact us page</span>', NULL, 1, NULL, '2020-02-18 12:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `caption`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BOB', 'Bank Of Baroda', 'R742R0VRCRbUOG2YjwvQfsWP84U4pXNMwWW1h1gI.jpeg', 1, NULL, NULL),
(2, 'HDFC', 'HDFC Bank', 'uJeSeqk16utN6VEDAxPS2eX8evWx39ZqyKuyB5rK.jpeg', 1, NULL, NULL),
(3, 'SBI', 'State Bank Of India', 'ywQP55Tw114tsou95DORzzBR6nOjRszUhqDPEw8y.jpeg', 1, NULL, NULL),
(4, 'BOB 2', 'Bank Of Baroda 2', 'snnAJcwohQBGnBYzkojp7vFXhI8EjTwn3WKTRd0c.jpeg', 1, NULL, NULL),
(5, 'HDFC 2', 'HDFC Bank 2', 'MN0o5Ae6GLqtoydSICiQSdkwTpmjo0yA0uVrbiji.jpeg', 1, NULL, NULL),
(6, 'SBI 2', 'State Bank Of India 2', 'XG5ejJQqqDg2bWa16kcsKpNrD96KVD2RUNK4dPI2.jpeg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `caption`, `slide`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Slide One', 'Caption One', 'E9h8AbWmSNuBR5kpqZ1Fmea3wOBbBUINjtXIFR2i.jpeg', 1, NULL, NULL),
(2, 'Slide Two', 'Caption Two', '4rZcvC0OVLvQB3qabYXLYAKhYbPrcKNcd5EKEG8h.jpeg', 1, NULL, NULL),
(3, 'Slide Three', 'Caption Three', 'NC7BbRQSiIaOH4PL2E5oOK7W0JjMZTNDcrpyhLV8.jpeg', 1, NULL, NULL),
(4, 'Slide Four', 'Caption Four', 'IFIUFIoGVUrXevsxAOlgvp7ZinugaYYfVOguoMBm.jpeg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`),
  ADD UNIQUE KEY `contacts_phone_unique` (`phone`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_requests`
--
ALTER TABLE `loan_requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loan_requests_email_unique` (`email`),
  ADD UNIQUE KEY `loan_requests_phone_unique` (`phone`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loan_requests`
--
ALTER TABLE `loan_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
