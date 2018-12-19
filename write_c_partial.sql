-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 04:29 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `write_c`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_answer`
--

CREATE TABLE `question_answer` (
  `id` int(11) NOT NULL,
  `question_answer_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question_answer`
--

INSERT INTO `question_answer` (`id`, `question_answer_details`) VALUES
(1, '<font size=\"4\">1. Can you tell me a little about yourself?<br>This question seems simple, so many people fail to prepare for it, but it\'s crucial. Here\'s the deal: Don\'t give your complete employment (or personal) history. Instead give a pitch—one that’s concise and compelling and that shows exactly why you’re the right fit for the job. Start off with the 2-3 specific accomplishments or experiences that you most want the interviewer to know about, then wrap up talking about how that prior experience has positioned you for this specific role.<br><br>2. What do you know about the company?<br></font><div><font size=\"4\">Any candidate can read and regurgitate the company’s “About” page. So, when interviewers ask this, they aren\'t necessarily trying to gauge whether you understand the mission—they want to know whether you care about it. Start with one line that shows you understand the company\'s goals, using a couple key words and phrases from the website, but then go on to make it personal. Say, “I’m personally drawn to this mission because…” or “I really believe in this approach because…” and share a personal example or two.<br></font></div><div><font size=\"4\"><br></font></div><font size=\"4\">3. What are your greatest professional strengths?<br>When answering this question, interview coach Pamela Skillings recommends being accurate (share your true strengths, not those you think the interviewer wants to hear); relevant (choose your strengths that are most targeted to this particular position); and specific (for example, instead of “people skills,” choose “persuasive communication” or “relationship building”). Then, follow up with an example of how you\'ve demonstrated these traits in a professional setting.</font><br>');

-- --------------------------------------------------------

--
-- Table structure for table `radio_codes`
--

CREATE TABLE `radio_codes` (
  `id` int(11) NOT NULL,
  `radio_codes_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `radio_codes`
--

INSERT INTO `radio_codes` (`id`, `radio_codes_details`) VALUES
(1, '<b>COMMON CODES</b><br><div align=\"left\">10-01 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Call Your Command <br>10-02 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Report To Your Command <br>10-03 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Call Dispatcher By Telephone <br>10-04 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Acknowledgment<br>10-05 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Repeat Message <br>10-06 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Standby<br>10-07 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Verify Address<br></div>&nbsp;<br><b>POSSIBLE CRIMES</b> <br>10-10 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Possible Crime (prowler, suspicious person/vehicle, shots . red, etc.) <br>10-11 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Alarm (specify type) <br>10-12 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Police Of.cer/Security Holding Suspect <br>10-13 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Assist Police Of.cer <br>10-14 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; License Plate Check - Occupied &amp; Suspicious ­Verify If Stolen <br>10-15 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; License Plate Check - Verify If Stolen -Occupied or Not<br>10-16 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Vehicle is Reported Stolen <br>10-17 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Vehicle is Not Reported Stolen <br>10-18 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Warrant Check Shows an Active Warrant <br>10-19 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Warrant Check Negative <br><b><br>CRIMES IN PAST </b><br>10-20 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Past Robbery <br>10-21 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Past Burglary <br>10-22 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Past Larceny (specify: auto, from person/other) <br>10-24 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Past Assault (specify) <br>10-29 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Other Crimes In The Past (specify) <br><br><b>CRIMES IN PROGRESS </b><br>10-30 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Robbery In Progress<br>10-31 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Burglary In Progress<br>10-32 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Larceny In Progress (specify: auto, from person/other) <br>10-33 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Explosive Device Or Threat<br>NOTE: &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Portable radio should NOT be used when in the presence of a suspected bomb, explosive or incendiary device. <br>10-34 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Assault In Progress (specify) <br>10-39 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Other Crime In Progress (specify) <br>10-40V &nbsp;&nbsp;&nbsp; &nbsp; Panic Alarm (carjacking, Lojack signal, star alert) <br>10-44 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Hazardous Materials/Suspicious Packages/Substances <br><br><b>NON-CRIME INCIDENTS</b> <br>10-50 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Disorderly Person/Group or Noise <br>10-51 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Roving Band (specify direction of travel &amp; number in group) <br>10-51M &nbsp;&nbsp;&nbsp;&nbsp; Roving Band of Motorcycles<br>10-51B &nbsp;&nbsp;&nbsp; &nbsp; Roving Band of Bicycles<br>10-51V &nbsp;&nbsp;&nbsp; &nbsp; Roving Band of Vehicles <br>10-51P &nbsp;&nbsp;&nbsp; &nbsp; Roving Band of People (impromptu marches) <br>10-52 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Dispute (specify) <br>10-53 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Vehicle Collision (specify) <br>10-54 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Ambulance Case (specify type) <br>10-55 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Ambulance Case No R.M.P. Required 1 of 4 <br>10-56 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Verify if Ambulance Needed <br>10-57 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Second Call for Ambulance – 2nd call — verify <br>10-58 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Assist Ambulance (specify type of assist) <br>10-59 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Alarm of Fire (specify type) <br>10-60H &nbsp;&nbsp;&nbsp; &nbsp; Research (disabled vehicle) <br>10-60I &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Broadcast (chase/pursuit) <br>10-61 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Precinct Assignment – not available (Give condition and/or location, e.g., mail run, at S.H., patrol with Pct. C.O., etc.) <br>10-62 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Out of Service–Mechanical (Give condition and location, e.g., gas at another pct., .at tire at service station, etc.). <br>10-63 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Out of Service — Meal <br><br>10-65 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Utility Trouble (specify nature and if ESU responding or not) <br><br>10-66 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Unusual Incident Examples: train derailment/collision,&nbsp; plane crash, building collapse. <br>10-67 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Traf. c/Parking Condition (specify) <br>10-68 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; See Complainant re: (specify) <br>10-69 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Other Non-Crime Incident (specify) <br>10-71 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Housing Authority Sex Offender Address Veri.cation <br>10-75B &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bus Investigation <br>10-75C &nbsp;&nbsp;&nbsp; &nbsp; Community Visit <br>10-75D &nbsp;&nbsp;&nbsp; &nbsp; Directed Patrol <br>10-75E &nbsp;&nbsp;&nbsp; &nbsp; Community Event <br>10-75F &nbsp;&nbsp;&nbsp; &nbsp; Family/Home Visit (Domestic Violence Prevention) <br>10-75I &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Interior Patrol <br>10-75L &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Cabaret Trained Supervisor Inspecting Licensed Premise <br>10-75M &nbsp;&nbsp;&nbsp; &nbsp; Train Run/Mobile Order Maintenance Sweep <br>10-75O &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Train Order Maintenance Sweep (TOMS) <br>10-75P &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Directed Patrol at School Location <br>10-75S &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Station Inspection — By Transit Bureau Personnel <br>10-75T &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Transit Patrol/Inspection — By Non-Transit Bureau Personnel <br>10-75W &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Warrant Check <br><br><b>INTERIM STATUS</b> <br>10-80 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Cancel (specify unneeded service) <br>10-81A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Authorized Tow Arrived <br>10-81N &nbsp;&nbsp;&nbsp; &nbsp; Request for Authorized Tow <br>10-82 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Veri. cation/Arrest (give number detained) <br>10-83 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Report/Noti.cation at Station House <br>10-84 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Arrived at Scene <br>10-85 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Need Additional Unit (specify type &amp; reason) <br>10-86 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Person In/Person Out of Vehicle (indicate time) <br>10-87 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Unit to Hospital (specify hospital) <br>10-88 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Vehicle Pursuit as a result of another assignment <br>10-89 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Other Interim Status (specify) <br><br><b>FINAL DISPOSITIONS </b><br>Final Dispositions (90-97, 99) are to be used only when a unit is completely .<br>Fnished with an assignment (including paperwork, forms and noti.cations) and is available for another assignment. <br>Disposition code is to be selected and transmitted by the unit. <br><br>10-90F1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DOMESTIC INCIDENT REPORT prepared -No offense of domestic violence is alleged. <br>10-90F2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DOMESTIC INCIDENT REPORT prepared -Unfounded report of domestic violence. <br>10-90I(1) &nbsp;&nbsp; &nbsp; Language Line Utilized <br>10-90I(2) &nbsp;&nbsp;&nbsp; Certi.ed Member of the Service Utilized <br>10-90I(4) &nbsp;&nbsp;&nbsp; Bilingual Member of the Public Utilized<br>10-90I(5) &nbsp;&nbsp;&nbsp; No Interpretation Necessary <br>10-90J1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DOMESTIC INCIDENT REPORT prepared -No offense of child abuse is alleged. <br>10-90J2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DOMESTIC INCIDENT REPORT prepared ­Offense of reported child abuse is unfounded. <br>10-90N &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Notice service - Unfounded or Unnecessary Alarm <br>10-90N3 &nbsp; &nbsp; &nbsp; Notice Service - Unfounded or Unnecessary Alarm To be used if service of a notice of an alarm is to be made at a later time when premises are open. <br>10-90U &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Unable to Gain Entrance <br>10-90V2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Unsuccessful Visit <br>10-90X &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Unfounded <br>10-90Y &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Unnecessary<br>10-90Z &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Gone on Arrival <br>10-91 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Non-Crime Corrected <br>10-91V &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Home Visit / Non-Crime <br>10-92 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Arrest <br>10-92C &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Crime Arrest (felony/misdemeanor), include number arrested in all cases. <br>10-92F &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Family Offense Arrest made <br>10-92J &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Child Abuse Arrest effected <br>10-92Q &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Other Arrest (specify type) <br>10-93C &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; COMPLAINT REPORT prepared - report of a crime, (felony or misdemeanor, including a Juvenile Report for a crime). <br>10-93F &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; COMPLAINT REPORT/DOMESTIC INCIDENT is prepared for a Family Offense. <br>10-93J &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; COMPLAINT REPORT/DOMESTIC INCIDENT is prepared for Child Abuse. <br>10-93Q &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Other Report Prepared (no arrest) [P.A.R. etc.] <br>10-94 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Handled by Previous Tour <br>10-95 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Non-Crime Referred by Another Agency <br>10-96 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Summons Served <br>10-97H &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Patient Removed to Hospital<br>10-97R &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Patient Refused Medical Aid <br>10-97E1 &nbsp;&nbsp; &nbsp;&nbsp; EDP Admitted to Hospital <br>10-97E2 &nbsp;&nbsp; &nbsp;&nbsp; EDP Released from Hospital <br>10-97E3 &nbsp;&nbsp; &nbsp;&nbsp; ESU Assisted in Removing EDP <br>10-97E4 &nbsp;&nbsp; &nbsp;&nbsp; Voluntary Surrender to ESU or Hostage Negotiation Team (HNT) <br>10-97E5 &nbsp;&nbsp; &nbsp;&nbsp; ESU Removal Less Than Lethal Used <br>10-98 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Resuming Patrol / Available (not acceptable as a .nal disposition from last unit on scene) <br>10-99 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Other Final Disposition (must include remarks) <br>10-99T4 &nbsp;&nbsp; &nbsp; Vehicle Collision – No Tow Truck Required <br>10-99T5 &nbsp;&nbsp; &nbsp; Vehicle Collision – DARP Tow Required <br>10-99T6 &nbsp;&nbsp; &nbsp; Vehicle Collision – Other Tow Serviced <br>10-99T7 &nbsp;&nbsp; &nbsp; Vehicle Collision – DARP and Other Tow Serviced <br>10-99T8 &nbsp;&nbsp; &nbsp; Vehicle Collision – Highway-Authorized Tow Serviced <br>10-99T9 &nbsp;&nbsp; &nbsp; Vehicle Collision (DARP requested, waited thirty minutes, made second request, resumed patrol) <br><br><b>RAPID MOBILIZATION </b><br>Code &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Responding Unit <br>Level One &nbsp; &nbsp; &nbsp;&nbsp; Special Operations Division Strategic Response Group <br>Level Two &nbsp; &nbsp; &nbsp; Special Operations Division Strategic Response Group – City-Wide <br>Level Three &nbsp;&nbsp;&nbsp; Local Borough Precinct personnel <br>Level Four &nbsp;&nbsp; &nbsp;&nbsp; Precinct personnel – City-Wide <br><br><br><br><br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_answer`
--
ALTER TABLE `question_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio_codes`
--
ALTER TABLE `radio_codes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_answer`
--
ALTER TABLE `question_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `radio_codes`
--
ALTER TABLE `radio_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
