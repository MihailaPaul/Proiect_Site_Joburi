-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 10:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobwise_proiect`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nume` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Parola` varchar(255) NOT NULL,
  `Poza` varchar(255) NOT NULL,
  `Token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `Nume`, `Email`, `Parola`, `Poza`, `Token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Mihaila Paul', 'paul.mihailaandres@gmail.com', '$2y$10$NqS00AHAuPoEFyi/m35iqOzE8Ec31eNlihh0OwcSLH46A93RXBQSi', 'admin.jpg', '', NULL, '2023-04-28 01:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `alegere_items`
--

CREATE TABLE `alegere_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `simbol_alegere` text NOT NULL,
  `titlu_alegere` text NOT NULL,
  `text_alegere` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alegere_items`
--

INSERT INTO `alegere_items` (`id`, `simbol_alegere`, `titlu_alegere`, `text_alegere`, `created_at`, `updated_at`) VALUES
(1, 'fas fa-briefcase', 'Aplica Rapida', 'Platforma noastra ofera o metoda simpla si rapida de aplicare pentru pozitia potrivita', '2023-04-03 06:42:09', '2023-05-25 20:03:26'),
(2, 'fas fa-search', 'Cautare Avansata', 'Sistemele noastre de cautare contin filtre performante care usureaza semnificant procesul de cautare.', '2023-04-03 06:44:49', '2023-05-25 20:09:38'),
(3, 'fas fa-lock', 'Securitate de ultima generatie', 'Sistemele noastre reduc semnificativ anunturile false , oferind utilizatorului siguranta ca anunturile vizualizate sunt reale.', '2023-04-03 06:47:10', '2023-06-08 14:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titlu` text NOT NULL,
  `slug` text NOT NULL,
  `scurta_descriere` text NOT NULL,
  `descriere` text NOT NULL,
  `vizualizari` text NOT NULL,
  `poza` text NOT NULL,
  `SEO_titlu` text DEFAULT NULL,
  `SEO_descriere` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titlu`, `slug`, `scurta_descriere`, `descriere`, `vizualizari`, `poza`, `SEO_titlu`, `SEO_descriere`, `created_at`, `updated_at`) VALUES
(1, 'Importanța dezvoltării profesionale în carieră', 'Importanța-dezvoltării-profesionale', 'Află cum investiția în învățare și dezvoltare continuă îți poate oferi avantaje competitive și cum să îți dezvolți abilitățile și cunoștințele în mod constant.', '<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"RO\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dezvoltarea profesională joacă un rol crucial &icirc;n progresul și succesul &icirc;n carieră. Prin investirea &icirc;n propriul dezvoltării, ne asigurăm că suntem &icirc;n pas cu schimbările din domeniul nostru și că avem abilitățile și cunoștințele necesare pentru a ne desfășura activitatea &icirc;n mod eficient. Aceasta poate include participarea la cursuri de formare, programe de mentorat sau coaching, sau &icirc;nvățarea prin experiență &icirc;n cadrul proiectelor. Prin prioritizarea dezvoltării profesionale, ne deschidem noi oportunități și creăm baze solide pentru o carieră de succes.</span></p>', '4', 'articol_1685048985.jpg', 'Importanța dezvoltării profesionale', 'Importanța dezvoltării profesionale în carieră', '2023-04-19 05:05:32', '2023-05-25 21:10:50'),
(2, 'Setarea obiectivelor SMART pentru succesul profesional', 'Setarea-obiectivelor-SMART', 'Descoperă cum să stabilești obiective specifice, măsurabile, atingibile, relevante și limitate în timp pentru a-ți ghida parcursul în dezvoltarea profesională.', '<p style=\"box-sizing: border-box; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; line-height: 1.6; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 16px; margin: 0px 0px 15px; outline: 0px; padding: 0px; vertical-align: baseline; background-color: #ffffff; text-align: justify;\"><span style=\"box-sizing: border-box; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Fie că ești la &icirc;nceput de drum &icirc;n căutarea unui&nbsp;<a style=\"box-sizing: border-box; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: #000000; text-decoration-line: none; transition: all 0.3s ease 0s;\" title=\"Locuri de muncă\" href=\"https://rosupertop.ro/informatii-despre/locuri-de-munca/\">loc de muncă</a>&nbsp;sau &icirc;ți dorești să &icirc;ți schimbi cariera, găsirea unui loc de muncă, potrivit pentru tine, poate fi o provocare. Dar nu trebuie să fie neapărat așa. Există c&acirc;țiva pași pe care &icirc;i poți urma, pentru a-ți crește șansele de a găsi locul de muncă ideal:</span></p>\r\n<p style=\"box-sizing: border-box; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; line-height: 1.6; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 16px; margin: 0px 0px 15px; outline: 0px; padding: 0px; vertical-align: baseline; background-color: #ffffff; text-align: justify;\"><span style=\"box-sizing: border-box; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">-Identifică-ți abilitățile și interesele!</span><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Primul pas &icirc;n căutarea unui loc de muncă, potrivit pentru tine, este să identifici ce abilități și ce interese ai. G&acirc;ndește-te la activitățile care &icirc;ți plac și la lucrurile la care ești bun sau bună. Acest lucru &icirc;ți va permite să te concentrezi asupra oportunităților de carieră, care se potrivesc cu acestea.</span></p>\r\n<div id=\"pub-26255149379603509f6b78526185dc071b32d820ab535c39\" class=\"pub-26255149379603509f6b78526185dc071b32d820ab535c39 pub-2625514937960350paragraf-1\" style=\"box-sizing: border-box; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; line-height: inherit; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; background-color: #ffffff;\"></div>\r\n<p style=\"box-sizing: border-box; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; line-height: 1.6; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 16px; margin: 0px 0px 15px; outline: 0px; padding: 0px; vertical-align: baseline; background-color: #ffffff; text-align: justify;\"><span style=\"box-sizing: border-box; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">-Explorează opțiunile de carieră!</span><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">După ce ai identificat ce &icirc;ți place și la ce ești bun sau bună, următorul pas este să &icirc;ncepi să explorezi opțiunile de carieră, care se potrivesc cu abilitățile și cu interesele tale. Caută&nbsp;<a style=\"box-sizing: border-box; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: #000000; text-decoration-line: none; transition: all 0.3s ease 0s;\" title=\"Jobs\" href=\"https://rosupertop.ro/jobs/\">joburi</a>&nbsp;&icirc;n domeniile care te interesează și &icirc;nvață c&acirc;t mai multe despre ele.</span></p>\r\n<p style=\"box-sizing: border-box; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; line-height: 1.6; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 16px; margin: 0px 0px 15px; outline: 0px; padding: 0px; vertical-align: baseline; background-color: #ffffff; text-align: justify;\"><span style=\"box-sizing: border-box; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">-Caută oportunitățile de networking!</span><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Uneori, cel mai bun mod de a afla despre oportunități de carieră, este prin networking. Participă la evenimente de networking sau &icirc;nt&acirc;lnește-te cu oameni din domeniul tău de interes și află mai multe despre oportunitățile disponibile.</span></p>\r\n<p style=\"box-sizing: border-box; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; line-height: 1.6; font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-size: 16px; margin: 0px 0px 15px; outline: 0px; padding: 0px; vertical-align: baseline; background-color: #ffffff; text-align: justify;\"><span style=\"box-sizing: border-box; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">-Actualizează-ți CV-ul și scrisoarea de intenție!</span><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; border: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Odată ce ai identificat oportunitățile care ți se potrivesc, asigură-te că CV-ul și scrisoarea ta de intenție sunt actualizate și se potrivesc cu postul pentru care aplici. Acestea sunt primele lucruri pe care le vede un angajator, deci este important să le faci să iasă &icirc;n evidență.</span></p>', '5', 'articol_1685049199.jpg', 'Setarea obiectivelor SMART', 'Sambala', '2023-04-19 05:41:36', '2023-05-25 21:13:30'),
(3, 'Avantajele mentoratului în dezvoltarea profesională', 'Avantajele-mentoratului', 'Mentoratul poate fi o resursă valoroasă în dezvoltarea profesională. Un mentor experimentat poate oferi îndrumare, consiliere și sfaturi personalizate în ceea ce privește cariera noastră.', '<p class=\"MsoNormal\"><span lang=\"RO\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mentoratul poate fi o resursă valoroasă &icirc;n dezvoltarea profesională. Un mentor experimentat poate oferi &icirc;ndrumare, consiliere și sfaturi personalizate &icirc;n ceea ce privește cariera noastră. Aceștia pot &icirc;mpărtăși din experiențele lor, ajut&acirc;ndu-ne să &icirc;nțelegem mai bine domeniul nostru de activitate și să identificăm oportunități de creștere. De asemenea, prin relația de mentorat, putem dezvolta abilități de leadership și construi relații valoroase &icirc;n industria noastră.</span></p>', '3', 'articol_1685049416.jpg', 'Avantajele mentoratului', 'Avantajele mentoratului în dezvoltarea profesională', '2023-04-19 05:44:43', '2023-05-25 21:18:46'),
(4, 'Importanța dezvoltării abilităților de comunicare în carieră', 'Importanța-dezvoltării-abilităților', 'Abilitățile de comunicare sunt esențiale în orice domeniu de activitate. O comunicare eficientă ne ajută să ne exprimăm ideile și să colaborăm cu colegii și clienții într-un mod clar și coerent.', '<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"RO\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Abilitățile de comunicare sunt esențiale &icirc;n orice domeniu de activitate. O comunicare eficientă ne ajută să ne exprimăm ideile și să colaborăm cu colegii și clienții &icirc;ntr-un mod clar și coerent. Dezvoltarea acestor abilități poate fi realizată prin practică și feedback constant. Participarea la training-uri sau cursuri specializate &icirc;n comunicare poate fi de mare ajutor &icirc;n &icirc;mbunătățirea calității comunicării noastre și &icirc;n construirea relațiilor profesionale solide.</span></p>', '9', 'articol_1685049571.jpg', 'Importanța dezvoltării abilităților', 'Importanța dezvoltării abilităților de comunicare în carieră', '2023-04-19 05:45:15', '2023-05-25 21:19:31'),
(5, 'Gestionarea eficientă a timpului în dezvoltarea profesională', 'Gestionarea-eficientă-a-timpului', 'O gestionare eficientă a timpului poate fi cheia succesului în atingerea obiectivelor și în creșterea în carieră', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: .5in;\"><span lang=\"RO\">Timpul este o resursă prețioasă &icirc;n dezvolt area profesională. O gestionare eficientă a timpului poate fi cheia succesului &icirc;n atingerea obiectivelor și &icirc;n creșterea &icirc;n carieră. Pentru a ne maximiza productivitatea, este important să identificăm prioritățile și să stabilim obiective clare. Planificarea activităților, delegarea sarcinilor și evitarea procrastinării sunt strategii utile &icirc;n gestionarea timpului. De asemenea, stabilirea unor limite clare &icirc;ntre viața profesională și cea personală ne ajută să menținem un echilibru sănătos și să ne concentrăm pe dezvoltarea profesională &icirc;n mod eficient.</span></p>', '2', 'articol_1685049709.jpg', 'Gestionarea eficientă a timpului', 'Gestionarea eficientă a timpului în dezvoltarea profesională', '2023-04-19 05:46:13', '2023-05-25 21:21:49'),
(6, 'Relevanța networking-ului în dezvoltarea profesională', 'Relevanța-networking', 'Networking-ul sau construirea unei rețele de relații profesionale solide poate juca un rol semnificativ în dezvoltarea carierei noastre.', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: .5in;\"><span lang=\"RO\">Networking-ul sau construirea unei rețele de relații profesionale solide poate juca un rol semnificativ &icirc;n dezvoltarea carierei noastre. Interacțiunea cu profesioniști din domeniul nostru, participarea la evenimente de networking și utilizarea platformelor online dedicate ne pot oferi oportunități de a cunoaște persoane influente și de a ne expune la noi idei și perspective. Prin networking, putem obține informații despre oportunități de carieră, putem primi recomandări și putem dezvolta colaborări valoroase.</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: .5in;\"><span lang=\"RO\">Acestea sunt doar c&acirc;teva aspecte importante ale dezvoltării profesionale. Este esențial să fim proactivi și să investim timp și efort &icirc;n propria creștere și &icirc;n obținerea unei performanțe superioare &icirc;n cariera noastră. Prin abordarea dezvoltării profesionale ca pe o călătorie continuă, vom avea oportunitatea de a ne atinge potențialul maxim și de a obține satisfacție și succes pe termen lung &icirc;n carieră.</span></p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span lang=\"RO\">&nbsp;</span></p>', '4', 'articol_1685049866.jpg', 'Relevanța networking', 'Relevanța networking-ului în dezvoltarea profesională', '2023-04-19 05:46:44', '2023-05-28 14:15:17'),
(7, 'Construirea unui plan de dezvoltare a carierei', 'Construirea-unui-plan', 'Descoperă importanța și avantajele construirii unui plan de dezvoltare a carierei și află cum să îți stabilești obiective clare, să identifici resursele necesare și să urmezi un plan strategic pentru a-ți atinge aspirațiile profesionale.', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: .5in;\"><span lang=\"RO\">Dezvoltarea carierei tale nu este un proces &icirc;nt&acirc;mplător, ci necesită o abordare strategică și bine planificată. Construirea unui plan de dezvoltare a carierei este un pas esențial pentru a-ți atinge obiectivele profesionale. &Icirc;n primul r&acirc;nd, &icirc;ncepe prin a-ți clarifica viziunea și a-ți stabili obiectivele pe termen scurt și lung. Identifică resursele necesare pentru a-ți atinge aceste obiective, cum ar fi formarea suplimentară, mentoratul sau participarea la conferințe relevante. Apoi, creează un plan de acțiune care să includă pașii necesari pentru a-ți atinge fiecare obiectiv. Monitorizează-ți progresul și ajustează-ți planul pe măsură ce avansezi &icirc;n carieră. Prin construirea și urmarea unui plan de dezvoltare a carierei, vei fi &icirc;n controlul propriului drum profesional și vei maximiza șansele de succes &icirc;n domeniul tău de activitate.</span></p>', '14', 'articol_1685050133.jpg', 'Construirea unui plan', 'Construirea unui plan de dezvoltare a carierei', '2023-04-19 05:47:41', '2023-06-08 21:50:24'),
(9, 'Gestionarea tranziei în dezvoltarea carierei', 'Gestionarea-tranziei', 'Descoperă cum să gestionezi cu succes tranzitia de la un nivel la altul în carieră, să faci față schimbărilor și să-ți valorifici resursele și abilitățile pentru a-ți atinge obiectivele în noua poziție sau domeniu de activitate.', '<p class=\"MsoNormal\" style=\"text-align: justify; text-indent: .5in;\"><span lang=\"RO\">Tranzitia &icirc;n dezvoltarea carierei poate fi provocatoare și solicitantă, dar și o oportunitate de creștere și &icirc;nvățare. Atunci c&acirc;nd faci pasul spre o nouă poziție sau domeniu de activitate, este important să te adaptezi la schimbările specifice și să-ți valorifici resursele și abilitățile pentru a-ți atinge obiectivele. &Icirc;n primul r&acirc;nd, &icirc;nțelege noile cerințe și așteptări asociate cu tranzitia. Fă o analiză a abilităților și competențelor tale actuale și identifică lacunele care necesită dezvoltare. Apoi, dezvoltă planuri de acțiune pentru a-ți &icirc;mbunătăți abilitățile și a te adapta la noile cerințe. Folosește resursele disponibile, cum ar fi cursurile de formare, mentorii sau rețelele profesionale, pentru a-ți sprijini procesul de tranziție. Menține &icirc;ncrederea și motivația, &icirc;nțeleg&acirc;nd că tranzitia poate fi o etapă normală &icirc;n dezvoltarea carierei și că succesul vine cu perseverență și adaptabilitate</span></p>', '36', 'articol_1685050269.jpg', 'Gestionarea tranziei', 'Gestionarea tranziei în dezvoltarea carierei', '2023-04-19 13:05:44', '2023-06-04 11:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume_candidat` varchar(255) NOT NULL,
  `pozitie` varchar(255) DEFAULT NULL,
  `nume_utilizator` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `poza` varchar(255) DEFAULT NULL,
  `biografie` text DEFAULT NULL,
  `numar_telefon` varchar(255) DEFAULT NULL,
  `tara` varchar(255) DEFAULT NULL,
  `adresa` varchar(255) DEFAULT NULL,
  `oras` varchar(255) DEFAULT NULL,
  `gen` varchar(255) DEFAULT NULL,
  `data_nastere` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `nume_candidat`, `pozitie`, `nume_utilizator`, `email`, `password`, `token`, `poza`, `biografie`, `numar_telefon`, `tara`, `adresa`, `oras`, `gen`, `data_nastere`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Stefan Mustata', 'Student', 'Stefan', 'stefan@gmail.com', '$2y$10$JMNX6/7Y/QSFbBWsz8Wgqez.dq1q3qNBglLeUWJK/7Uh5hkX4rr1S', '', 'poza_candidat_1684656050.jpg', '<p>Student in anul III la Universitatea Tehnica de Constructii Bucuresti unde studiez automatica si informatica aplicata.&nbsp;</p>', '0772105869', 'Romania', 'Soseaua Test nr.283, Bloc 20A, Scara D, Etaj 15, Apt.134', 'Bucuresti', 'Prefer sa nu mentionez', '2000-06-16', 1, '2023-04-24 08:25:57', '2023-05-21 06:56:55'),
(2, 'Hiroshi Tanaka', 'Director Banca', 'Tanaka', 'tanaka@gmail.com', '$2y$10$qMiGVDYxqjHIkJNUmrDjhu2R8M0ia/zuKUwwM/MVDSsmZdnUaFIWa', '', 'poza_candidat_1684877289.jpg', '<p class=\"MsoNormal\"><span lang=\"RO\">Sunt un candidat entuziast și dornic de a-mi aduce contribuția &icirc;n acest job. Am o pasiune pentru domeniul &icirc;n care activez și sunt motivat să &icirc;nvăț și să mă dezvolt constant. Abilitățile mele de comunicare și de lucru &icirc;n echipă mă ajută să colaborez eficient cu colegii și să contribui la succesul organizației. Sunt un problem solver și mă adaptez rapid la schimbări, av&acirc;nd abilitatea de a găsi soluții eficiente. &Icirc;mi asum responsabilitatea și sunt orientat către rezultate, av&acirc;nd mereu &icirc;n vedere obiectivele pe care le-am stabilit. Sunt &icirc;ncrezător &icirc;n abilitățile mele și &icirc;n capacitatea de a aduce valoare adăugată &icirc;n acest job. Sunt nerăbdător să &icirc;mi demonstrez competențele și să contribui la succesul organizației.</span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>', '0773106136', 'România', 'Bulevardul Republicii, nr. 25', 'Cluj-Napoca', 'Feminin', '2000-08-31', 1, '2023-05-23 20:36:57', '2023-05-23 21:28:09'),
(3, 'Benjamin Moore', 'Fara Ocupatie', 'Moore', 'moore@gmail.com', '$2y$10$0EaS/dTEJBXVfEqr21xJrOyhWu6/yKbxDD57.GpOP5m/84syfXR5.', '', 'poza_candidat_1684877148.jpg', '<p class=\"MsoNormal\"><span lang=\"RO\">Sunt un candidat entuziast și dornic de a-mi aduce contribuția &icirc;n acest job. Am o pasiune pentru domeniul &icirc;n care activez și sunt motivat să &icirc;nvăț și să mă dezvolt constant. Abilitățile mele de comunicare și de lucru &icirc;n echipă mă ajută să colaborez eficient cu colegii și să contribui la succesul organizației. Sunt un problem solver și mă adaptez rapid la schimbări, av&acirc;nd abilitatea de a găsi soluții eficiente. &Icirc;mi asum responsabilitatea și sunt orientat către rezultate, av&acirc;nd mereu &icirc;n vedere obiectivele pe care le-am stabilit. Sunt &icirc;ncrezător &icirc;n abilitățile mele și &icirc;n capacitatea de a aduce valoare adăugată &icirc;n acest job. Sunt nerăbdător să &icirc;mi demonstrez competențele și să contribui la succesul organizației.</span></p>', '0773104156', 'Romania', 'Piața Unirii, nr. 15', 'Timisoare', 'Masculin', '1988-02-16', 1, '2023-05-23 20:38:52', '2023-05-23 21:25:48'),
(4, 'Stefania Ionita', 'Programator Back-End', 'Ionita', 'ionita@gmail.com', '$2y$10$q48A0BWwV6JvYgSDZsbYjez2S2LMug8dgZLNcUA06pJ0YVJ7M8Rq2', '', 'poza_candidat_1684877437.jpg', '<p class=\"MsoNormal\"><span lang=\"RO\">Sunt un candidat entuziast și dornic de a-mi aduce contribuția &icirc;n acest job. Am o pasiune pentru domeniul &icirc;n care activez și sunt motivat să &icirc;nvăț și să mă dezvolt constant. Abilitățile mele de comunicare și de lucru &icirc;n echipă mă ajută să colaborez eficient cu colegii și să contribui la succesul organizației. Sunt un problem solver și mă adaptez rapid la schimbări, av&acirc;nd abilitatea de a găsi soluții eficiente. &Icirc;mi asum responsabilitatea și sunt orientat către rezultate, av&acirc;nd mereu &icirc;n vedere obiectivele pe care le-am stabilit. Sunt &icirc;ncrezător &icirc;n abilitățile mele și &icirc;n capacitatea de a aduce valoare adăugată &icirc;n acest job. Sunt nerăbdător să &icirc;mi demonstrez competențele și să contribui la succesul organizației.</span></p>', '0738193454', 'Franta', '123 Main Street Anytown', 'Paris', 'Altele', '2000-12-20', 1, '2023-05-23 20:39:40', '2023-05-23 21:30:37'),
(5, 'Alexander Becker', 'Operator Casa Marcat Lidl', 'Becker', 'becker@gmail.com', '$2y$10$v1timGcEeVAFU7tPBe/3ye1dPJsL.6Y4n7FFA0gHGypV..BkOegFy', '', 'poza_candidat_1684877623.jpg', '<p class=\"MsoNormal\"><span lang=\"RO\">Sunt un candidat entuziast și dornic de a-mi aduce contribuția &icirc;n acest job. Am o pasiune pentru domeniul &icirc;n care activez și sunt motivat să &icirc;nvăț și să mă dezvolt constant. Abilitățile mele de comunicare și de lucru &icirc;n echipă mă ajută să colaborez eficient cu colegii și să contribui la succesul organizației. Sunt un problem solver și mă adaptez rapid la schimbări, av&acirc;nd abilitatea de a găsi soluții eficiente. &Icirc;mi asum responsabilitatea și sunt orientat către rezultate, av&acirc;nd mereu &icirc;n vedere obiectivele pe care le-am stabilit. Sunt &icirc;ncrezător &icirc;n abilitățile mele și &icirc;n capacitatea de a aduce valoare adăugată &icirc;n acest job. Sunt nerăbdător să &icirc;mi demonstrez competențele și să contribui la succesul organizației.</span></p>', '0772123953', 'Canada', 'Soseaua Test nr.200, Bloc 10A, Scara C, Etaj 13, Apt.15', 'Ottawa', 'Prefer sa nu mentionez', '1979-06-22', 1, '2023-05-23 20:40:33', '2023-05-23 21:33:43'),
(8, 'Mihaila-Paul', NULL, 'Mihai', 'paul.mihailaandres@gmail.com', '$2y$10$JgQ13U8MZmBmYA3X6tGHqODtky5eQYS7OtSJzJvFvSo9YJnOdrxVe', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-06-11 19:00:49', '2023-06-11 19:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_documents`
--

CREATE TABLE `candidate_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `titlu` text NOT NULL,
  `fisier` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_documents`
--

INSERT INTO `candidate_documents` (`id`, `candidate_id`, `titlu`, `fisier`, `created_at`, `updated_at`) VALUES
(1, 1, 'CV', 'document_1684684382.pdf', '2023-05-21 12:53:02', '2023-05-21 12:53:02'),
(2, 1, 'Certificat Securitate Cibernetica', 'document_1684684551.pdf', '2023-05-21 12:55:51', '2023-05-21 12:55:51'),
(4, 3, 'CV', 'document_1684874825.pdf', '2023-05-23 20:47:05', '2023-05-23 20:47:05'),
(5, 3, 'Certificare Securitate', 'document_1684875509.pdf', '2023-05-23 20:58:29', '2023-05-23 20:58:29'),
(6, 2, 'CV', 'document_1684876084.pdf', '2023-05-23 21:08:04', '2023-05-23 21:08:04'),
(7, 4, 'CV', 'document_1684876530.pdf', '2023-05-23 21:15:30', '2023-05-23 21:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_education`
--

CREATE TABLE `candidate_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `nivel_invatamant` text NOT NULL,
  `institutie` text NOT NULL,
  `domeniu` text NOT NULL,
  `data_terminare` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_education`
--

INSERT INTO `candidate_education` (`id`, `candidate_id`, `nivel_invatamant`, `institutie`, `domeniu`, `data_terminare`, `created_at`, `updated_at`) VALUES
(1, 1, 'Facultate', 'Universitatea Tehnica de Constructii Bucuresti', 'Automatica si Informatica Aplicata', '2024', '2023-05-21 09:20:51', '2023-05-21 09:20:51'),
(2, 1, 'Liceu', 'Liceul Teoretic Dante Alighieri', 'Matematica-Informatica Intensiv Engleza', '2020', '2023-05-21 09:39:39', '2023-05-21 09:39:39'),
(6, 3, 'Licență', 'Universitatea Tehnică din București', 'Inginerie Electrică și Electronică', '2018', '2023-05-23 20:50:07', '2023-05-23 20:50:07'),
(7, 3, 'Master', 'Universitatea Politehnica din București', 'Managementul Proiectelor Tehnologice', '2020', '2023-05-23 20:50:34', '2023-05-23 20:50:34'),
(8, 3, 'Diplomă de Bacalaureat', 'Colegiul Național \"Gheorghe Lazăr\"', 'Științele Naturii', '2014', '2023-05-23 20:51:06', '2023-05-23 20:51:06'),
(9, 3, 'Certificare', 'Project Management Institute (PMI)', 'Certificat de Management al Proiectelor (PMP)', '2021', '2023-05-23 20:52:16', '2023-05-23 20:52:16'),
(10, 2, 'Certificare', 'Google Digital Garage', 'Marketing Digital', '2019', '2023-05-23 21:00:09', '2023-05-23 21:00:09'),
(11, 2, 'Certificare', 'Microsoft', 'Microsoft Certified Azure Developer', '2020', '2023-05-23 21:00:25', '2023-05-23 21:00:25'),
(12, 2, 'Licență', 'Universitatea Babeș-Bolyai din Cluj-Napoca', 'Informatică', '2017', '2023-05-23 21:02:05', '2023-05-23 21:02:05'),
(13, 2, 'Diplomă de Bacalaureat', 'Liceul Teoretic \"Mihai Eminescu\"', 'Matematică-Informatică', '2013', '2023-05-23 21:02:25', '2023-05-23 21:02:25'),
(14, 4, 'Licență', 'Universitatea Tehnică XYZ', 'Drept', '2016', '2023-05-23 21:10:27', '2023-05-23 21:10:27'),
(15, 4, 'Masterat', 'Universitatea ABC', 'Managementul Afacerilor', '2017', '2023-05-23 21:11:15', '2023-05-23 21:11:15'),
(16, 5, 'Masterat', 'Universitatea Națională de Științe Politice și Administrative', 'Relații Internaționale', '2019', '2023-05-23 21:17:53', '2023-05-23 21:17:53'),
(17, 5, 'Diploma de Tehnician', 'Colegiul Tehnic \"Gheorghe Asachi\"', 'Construcții Civile și Industriale', '2013', '2023-05-23 21:18:11', '2023-05-23 21:18:11'),
(18, 5, 'Certificarre', 'Scrum Alliance', 'Certified ScrumMaster (CSM)', '2018', '2023-05-23 21:18:41', '2023-05-23 21:18:41'),
(22, 8, 'Licență', 'Universitatea Tehnica de Constructii Bucuresti', 'Automatica si Informatica Aplicata', '2023', '2023-06-11 19:31:59', '2023-06-11 19:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_experiences`
--

CREATE TABLE `candidate_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `companie` text NOT NULL,
  `pozitie` text NOT NULL,
  `data_inceput` text NOT NULL,
  `data_finalizare` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_experiences`
--

INSERT INTO `candidate_experiences` (`id`, `candidate_id`, `companie`, `pozitie`, `data_inceput`, `data_finalizare`, `created_at`, `updated_at`) VALUES
(1, 1, 'Play Solutions', 'Web Developer', 'Iunie 2021', 'August 2021', '2023-05-21 12:10:10', '2023-05-21 12:10:10'),
(3, 3, 'XYZ Software Solutions', 'Dezvoltator Software', 'ianuarie 2017', 'prezent', '2023-05-23 20:56:24', '2023-05-23 20:56:24'),
(4, 3, 'ABC Tech Services', 'Junior Developer', 'martie 2015', 'decembrie 2016', '2023-05-23 20:56:56', '2023-05-23 20:56:56'),
(5, 3, 'PQR Web Development', 'Stagiar în Programare', 'iulie 2014', 'septembrie 2014', '2023-05-23 20:57:19', '2023-05-23 20:57:19'),
(6, 2, 'ABC Corporation', 'Specialist IT', 'septembrie 2019', 'martie 2021', '2023-05-23 21:06:58', '2023-05-23 21:06:58'),
(7, 2, 'XYZ Solutions', 'Programator Junior', 'aprilie 2017', 'august 2019', '2023-05-23 21:07:24', '2023-05-23 21:07:24'),
(8, 2, 'GHI Systems', 'Dezvoltator Full Stack', 'iunie 2012', 'decembrie 2013', '2023-05-23 21:07:48', '2023-05-23 21:07:48'),
(9, 4, 'ABC Manufacturing', 'Tehnician de producție', 'martie 2010', 'decembrie 2011', '2023-05-23 21:14:55', '2023-05-23 21:14:55'),
(10, 4, 'XYZ Travel Agency', 'Agent de turism', 'ianuarie 2012', 'iunie 2014', '2023-05-23 21:15:18', '2023-05-23 21:15:18'),
(11, 5, 'ABC Bank', 'Specialist în relații cu clienții', 'iulie 2014', 'februarie 2016', '2023-05-23 21:20:06', '2023-05-23 21:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_skills`
--

CREATE TABLE `candidate_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `competente` text NOT NULL,
  `nivel_competente` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_skills`
--

INSERT INTO `candidate_skills` (`id`, `candidate_id`, `competente`, `nivel_competente`, `created_at`, `updated_at`) VALUES
(1, 1, 'Programare in PHP', 'Avansat', '2023-05-21 10:57:37', '2023-05-21 10:57:37'),
(2, 1, 'Laravel', 'Mediu', '2023-05-21 10:58:26', '2023-05-21 10:58:26'),
(3, 1, 'SQL', 'Incepator', '2023-05-21 10:58:49', '2023-05-21 10:58:49'),
(4, 1, 'Ajax', 'Incepator', '2023-05-21 11:04:23', '2023-05-21 11:04:23'),
(7, 3, 'Programare orientată pe obiecte', 'Mediu', '2023-05-23 20:53:26', '2023-05-23 20:53:26'),
(8, 3, 'Dezvoltare web full-stack', 'Avansat', '2023-05-23 20:53:45', '2023-05-23 20:53:45'),
(9, 3, 'Securitatea Aplicatiilor', 'Incepator', '2023-05-23 20:54:05', '2023-05-23 20:54:05'),
(10, 3, 'Comunicare si Colaborare Echipa', 'Avansat', '2023-05-23 20:54:36', '2023-05-23 20:54:36'),
(11, 3, 'Dezvoltare Mobile', 'Incepator', '2023-05-23 20:55:01', '2023-05-23 20:55:01'),
(12, 2, 'Java', 'Incepator', '2023-05-23 21:03:33', '2023-05-23 21:03:33'),
(13, 2, 'Testare si Depanare Software', 'Avansat', '2023-05-23 21:03:54', '2023-05-23 21:03:54'),
(14, 2, 'Rezolvare de probleme si gandire analitica', 'Mediu', '2023-05-23 21:04:24', '2023-05-23 21:04:24'),
(15, 2, 'TypeScript', 'Avansat', '2023-05-23 21:04:42', '2023-05-23 21:04:42'),
(16, 2, 'React', 'Mediu', '2023-05-23 21:04:54', '2023-05-23 21:04:54'),
(17, 4, 'Capacitatea de organizare', 'Avansat', '2023-05-23 21:11:54', '2023-05-23 21:11:54'),
(18, 4, 'Gestionarea timpului', 'Avansat', '2023-05-23 21:12:09', '2023-05-23 21:12:09'),
(19, 4, 'Abilități de învățare rapidă', 'Mediu', '2023-05-23 21:12:20', '2023-05-23 21:12:20'),
(20, 4, 'Abilități de negociere', 'Incepator', '2023-05-23 21:12:36', '2023-05-23 21:12:36'),
(21, 4, 'Creativitate', 'Avansat', '2023-05-23 21:12:53', '2023-05-23 21:12:53'),
(22, 5, 'Microsoft Office', 'Avansat', '2023-05-23 21:19:28', '2023-05-23 21:19:28'),
(23, 5, 'Abilități de leadership', 'Mediu', '2023-05-23 21:19:39', '2023-05-23 21:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `candidat_applications`
--

CREATE TABLE `candidat_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `scrisoare_motivare` text NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidat_applications`
--

INSERT INTO `candidat_applications` (`id`, `candidate_id`, `job_id`, `scrisoare_motivare`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 50, 'Buna, vreau un job!\r\n\r\nVa rog.', 'Aplicat', '2023-05-25 07:44:06', '2023-05-25 07:44:06'),
(2, 1, 31, 'Buna , ce pret mai aveti la McCombo?\r\n\r\n\r\nPrea mult.', 'Respinsa', '2023-05-25 07:45:21', '2023-05-26 14:39:03'),
(3, 2, 50, 'Sunt cel mai bun pentru acest job. Vezi CV ul.', 'Aplicat', '2023-05-25 07:47:47', '2023-05-25 07:47:47'),
(4, 2, 31, 'Test', 'Acceptata', '2023-05-25 07:48:45', '2023-05-28 14:36:05'),
(5, 2, 48, 'Sunt desteapta', 'Acceptata', '2023-05-25 15:39:31', '2023-06-04 11:10:46'),
(6, 1, 48, 'Am determinarea si competentele necesare pentru a excela in aceasta pozitie', 'Aplicat', '2023-05-28 15:17:17', '2023-05-28 15:17:17'),
(8, 1, 47, 'Buna, testam aplicatiile la joburi in special trimiterea de email-uri', 'Aplicat', '2023-05-30 14:32:48', '2023-05-30 14:32:48'),
(10, 1, 46, 'Testam trimiterea de email', 'Acceptata', '2023-05-30 14:36:50', '2023-05-30 15:08:55'),
(22, 8, 65, 'Paragraf de motivare pentru documentatia proiectului.', 'Acceptata', '2023-06-11 20:27:30', '2023-06-11 21:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `candidat_bookmarks`
--

CREATE TABLE `candidat_bookmarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidat_bookmarks`
--

INSERT INTO `candidat_bookmarks` (`id`, `candidate_id`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 1, 46, '2023-05-24 16:27:46', '2023-05-24 16:27:46'),
(2, 1, 44, '2023-05-24 16:28:47', '2023-05-24 16:28:47'),
(3, 1, 39, '2023-05-24 16:45:27', '2023-05-24 16:45:27'),
(4, 1, 48, '2023-05-24 16:54:15', '2023-05-24 16:54:15'),
(7, 2, 50, '2023-05-25 15:39:55', '2023-05-25 15:39:55'),
(19, 2, 49, '2023-06-09 17:03:13', '2023-06-09 17:03:13'),
(20, 2, 48, '2023-06-09 17:03:14', '2023-06-09 17:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume_companie` varchar(255) NOT NULL,
  `nume_reprezentant` varchar(255) NOT NULL,
  `nume_utilizator` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `numar_telefon` varchar(255) DEFAULT NULL,
  `adresa` varchar(255) DEFAULT NULL,
  `companie_location_id` int(11) DEFAULT NULL,
  `companie_domain_id` int(11) DEFAULT NULL,
  `companie_size_id` int(11) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `descriere` text DEFAULT NULL,
  `map_code` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `nume_companie`, `nume_reprezentant`, `nume_utilizator`, `email`, `password`, `token`, `logo`, `numar_telefon`, `adresa`, `companie_location_id`, `companie_domain_id`, `companie_size_id`, `website`, `descriere`, `map_code`, `facebook`, `twitter`, `linkedin`, `instagram`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Adobe.Inc', 'Andrei Bădescu', 'Andrei', 'andreibadescu.adobe@gmail.com', '$2y$10$6moJL3TRn3nMcmFLHadDoONwVbkHGNQX.NtKkSt.6PYbO66oZUnxK', '', 'logo_companie1684873863.jpg', '0772107123', 'Soseaua Test nr.287, Bloc 15A, Scara A, Etaj 2, Apt.13, Intrare prin Acoperis', 7, 1, 5, 'www.utcb.ro', '<p class=\"MsoNormal\">Adobe este o companie globală de software cunoscută pentru soluțiile inovatoare &icirc;n domeniul creației digitale și a experiențelor vizuale. Cu o istorie bogată și o expertiză de peste 35 de ani, Adobe oferă instrumente și tehnologii care permit profesioniștilor și creatorilor să-și exprime creativitatea și să aducă la viață idei inovatoare.</p>\r\n<p class=\"MsoNormal\">Prin intermediul platformelor sale de software, Adobe oferă soluții avansate pentru design grafic, editare foto și video, creare de conținut web și dezvoltare de aplicații mobile. Portofoliul său cuprinde produse precum Adobe Photoshop, Illustrator, InDesign, Premiere Pro, Acrobat și multe altele, care sunt utilizate de milioane de profesioniști din &icirc;ntreaga lume.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2847.536139607167!2d26.122213312272226!3d44.463181999547515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUTCB!5e0!3m2!1sen!2sro!4v1683468755529!5m2!1sen!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-04-21 13:29:34', '2023-05-24 12:20:40'),
(7, 'McDonald\'s Corporation', 'Emily Johnson', 'Johnson', 'emily.johnson@mcdonald.com', '$2y$10$d5JtGb/AWa1L6IZrAyfl6OYZpYN6NXlgMdAJgsYvzEFC5A3zMCjli', '', 'logo_companie1684873757.png', '(555) 123-4567', '123 Main Street Anytown, CA 12345', 7, 4, 7, 'www.mcdonalds.com', '<p><span style=\"font-family: Speedee, sans-serif; font-size: 18px; text-align: center;\">McDonald&rsquo;s este cel mai mare lanţ de restaurante cu servire rapidă din lume. Peste 32.000 de restaurante, din peste 100 de ţări, servesc zilnic peste 60 de milioane de oameni. Ne preocupăm mereu să anticipăm şi să răspundem la schimbările din viaţa clienţilor, a angajaţilor şi a sistemului McDonald&rsquo;s, prin evoluţie constantă şi prin inovaţie.</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.432031870973!2d-87.65612303782724!3d41.883564914951116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2d30ceff07f1%3A0x98893d0c2dcccaf2!2sMcDonald&#39;s%20-%20Corporate%20Office!5e0!3m2!1sro!2sro!4v1684856791858!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/McDonalds/', 'www.twitter.com/McDonalds/', 'www.linkedin.com/McDonalds/', 'www.instagram.com/McDonalds/', 1, '2023-05-23 14:14:45', '2023-05-23 20:29:17'),
(8, 'Toyota Motor Corporation', 'Satoshi Mori', 'Mori', 'mori@toyota.com', '$2y$10$jOkZdaCtJREz.cgorOueNuE52vXflh47pZNpY4KpDRSIoC0xbQvie', '', 'logo_companie1684857704.jpg', '+81 90 1234 5678', '1-2-3 Shibuya, Shibuya-ku Tokyo 150-0000', 9, 5, 1, 'www.toyota.com', '<p class=\"MsoNormal\">Toyota Motor Europe coordoneaza numeroase activitati pentru aceasta regiune, de la vanzari si marketing, la design, cercetare si dezvoltare pentru viitoare modele.</p>\r\n<p class=\"MsoNormal\">Toyota Motor Europe (TME) este pozitionata in inima activitatii noastre din Europa, avand ca principala responsabilitate sa coordoneze activitatile de vanzare si marketing pentru automobilele Toyota si Lexus, dar si pentru componente. De asemenea, ofera suport pentru importatori si dealeri care gestioneaza activitatile la nivel de tara si ofera o planificare centralizata pentru produs, marketing si comunicare.<br />O alta responsabilitate este de a crea o strategie de afaceri care asigura ca produsele, preturile, marketing-ul si operatiunile de vanzare sa fie ideal adaptate la piata locala. Rolul TME a crescut in ultimii ani, deoarece am investit in extinderea centrului nostru european de cercetare, dezvoltare si design, dar si a centrului tehnic de langa Bruxelles, asa cum am facut si pentru ED2, studioul nostru de design.</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: normal; background: white;\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Influenta Toyota Motor Europe a crescut, de asemenea, in concordanta cu planul Toyota Global Vision anuntat de presedintele nostru, Akio Toyoda, in care s-a oferit centrului european mai multa greutate in planificarea si dezvoltarea viitoarelor modele de clasa mica si medie. Desi TME are sediul central in Bruxelles, logistica este cu adevarat internationala, un aspect reflectat de faptul ca aici lucreaza oameni cu mai mult de 60 de nationalitati diferite.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45552.647274424075!2d26.093313726294674!3d44.47334351275548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b2029d32de536f%3A0x7b64cd16d53cd799!2sToyota%20Bucure%C8%99ti%20Nord!5e0!3m2!1sro!2sro!4v1684857548912!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 14:19:05', '2023-05-24 12:14:47'),
(9, 'AUDI AG', 'Anna Schmidt', 'Schmidt', 'schmidt@audi.com', '$2y$10$rKTmew7WJFIGOUOXfkeKh.hlUZqZWsNSq8sZodnpih3S4bxPDjqCG', '', 'logo_companie1684873702.png', '+49 1234 567890', 'Musterstraße 123 12345 Berlin', 2, 5, 6, 'www.audi.com', '<p class=\"MsoNormal\">AUDI AG &icirc;nseamnă vehicule sportive, calitate superioară de construcție și design progresiv - pentru \"Vorsprung durch Technik\". Grupul Audi se numără printre cei mai importanți producători de mașini premium din lume.</p>\r\n<p class=\"MsoNormal\">Pentru a juca un rol instrumental &icirc;n modelarea transformării pe măsură ce ne &icirc;ndreptăm către o nouă eră a mobilității, compania &icirc;și pune &icirc;n aplicare strategia pas cu pas.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2608415.5195337767!2d7.454226572983986!3d50.324012622273266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e76124d111af9%3A0x80602985a3839164!2sAudi%20Zentrum%20M%C3%BCnchen%20Albrechtstra%C3%9Fe!5e0!3m2!1sro!2sro!4v1684858055347!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 14:20:47', '2023-05-24 12:16:02'),
(10, 'Automobile Dacia S.A', 'Cristina Pavel', 'Pavel', 'pavel@dacia.com', '$2y$10$YbZnUU9flR63OXBhMm/bPe/iob.fFY5bcUmiBlRus0IKMMMtbQdVS', '', 'logo_companie1684858410.jpg', '+40 123 456 789', 'Strada Victoriei nr. 10', 1, 5, 6, 'www.dacia.ro', '<p class=\"MsoNormal\"><span lang=\"RO\">Simplitate și onestitate, acestea sunt valorile Dacia. Ceea ce noi considerăm ca fiind esențial este să &icirc;ți oferim produsele potrivite la cel mai bun raport valoare-preț. Este at&acirc;t de simplu.</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 14:26:47', '2023-05-23 16:13:30'),
(11, 'Microsoft Corporation', 'Olivia Martinez', 'Martinez', 'martinez@microsoft.com', '$2y$10$d39nlAg1SGfj6nPNfcg/EOMzvRhmOBugYT9La4NxOGT4BMMojtsPu', '', 'logo_companie1684858629.jpg', '+61 2 1234 5678', '123 Smith Street Sydney, NSW 2000', 6, 1, 7, 'www.microsoft.com', '<p class=\"MsoNormal\"><span lang=\"RO\">Microsoft is a technology company that offers a range of products and services for your home or business. Some of its popular products include Surface devices, Microsoft 365 apps, Xbox games and consoles, Windows operating system, and Azure cloud platform. You can sign in or create a Microsoft account to access all your Microsoft apps and services with one account. You can also shop for Microsoft products and services online or find a store near you</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 14:28:33', '2023-05-23 16:17:09'),
(12, 'NN Group', 'Amelia Sinclair', 'Sinclair', 'sinclair@nn.com', '$2y$10$MIh4937PMHvCDPTvbykKgeCv4b/C9Q/jC87Qw2Tppt1xy2gilILXy', '', 'logo_companie1684873267.jpg', '+31 6 12345678', 'Janstraat 10 Amsterdam 1234 AB', 10, 6, 3, 'www.nn.com', '<p style=\"box-sizing: border-box; font-family: NNDagnyTextWeb, sans-serif; margin: 0px; line-height: 24px; color: #414141; font-size: 16px; text-align: center; background-color: #ffffff;\">Salut, noi suntem NN! Existăm pe piață de mai bine de 175 de ani și avem o misiune clară: venim cu soluții concrete pentru neprevăzut. Suntem &icirc;ncrezători că prin produsele financiare pe care le construim, ajutăm clienții să privească spre viitor cu mai mult curaj și mai multă &icirc;ncredere.</p>\r\n<p style=\"box-sizing: border-box; font-family: NNDagnyTextWeb, sans-serif; margin: 0px; line-height: 24px; color: #414141; font-size: 16px; text-align: center; background-color: #ffffff;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; font-family: NNDagnyTextWeb, sans-serif; margin: 0px; line-height: 24px; color: #414141; font-size: 16px; text-align: center; background-color: #ffffff;\">De aceea, căutăm mereu alternative financiare &icirc;n fața incertitudinii, de la&nbsp;<a style=\"box-sizing: border-box; color: #ea650d; text-decoration-line: none; background-color: transparent;\" href=\"https://www.nn.ro/viata/protectie\">asigurări de viață</a>&nbsp;și&nbsp;<a style=\"box-sizing: border-box; color: #ea650d; text-decoration-line: none; background-color: transparent;\" href=\"https://www.nn.ro/sanatate/asigurare-de-sanatate\">sănătate</a>, p&acirc;nă la produse de&nbsp;<a style=\"box-sizing: border-box; color: #ea650d; text-decoration-line: none; background-color: transparent;\" href=\"https://www.nn.ro/viata/economisire\">economisire</a>&nbsp;și&nbsp;<a style=\"box-sizing: border-box; color: #ea650d; text-decoration-line: none; background-color: transparent;\" href=\"https://www.nn.ro/viata/investitii\">investiții</a>&nbsp;pentru viitor și pentru&nbsp;<a style=\"box-sizing: border-box; color: #ea650d; text-decoration-line: none; background-color: transparent;\" href=\"https://www.nn.ro/pensii\">pensie</a>.&nbsp;</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 14:32:10', '2023-05-23 20:21:07'),
(13, 'Assicurazioni Generali', 'Marco Russo', 'Russo', 'russo@generali.com', '$2y$10$jdqpXDDgApg/bkblkq9EZeNREUNM/oD7v1a1GLrWPQ2Kt82vGRdiq', '', 'logo_companie1684859250.jpg', '+39 02 12345678', 'Via Roma 10 Roma 00100', 11, 6, 4, 'www.generali.com', '<p class=\"MsoNormal\"><span lang=\"RO\">Cu o istorie ce se &icirc;ntinde pe aproape două secole, Generali Rom&acirc;nia este unul dintre cei mai performanți și apreciați asiguratori din piața locală. Compania are o activitate compozită, cu un portofoliu echilibrat și o gamă de produse concepută pentru a acoperi eficient nevoile clienților de retail și corporate.</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 14:37:07', '2023-05-23 16:27:30'),
(14, 'PLAY SOLUTIONS SRL', 'Serban Dima', 'Dima', 'dima@playsolutions.com', '$2y$10$GMK37FyjCGEEEFLxP8id5.D91RuZZ0OKX4QI53DBLMeZRHH5hY7na', '', 'logo_companie1684859733.jpg', '+40772105869', 'Strada Libertății nr. 10', 1, 1, 2, 'www.playsolution.com', '<p class=\"MsoNormal\"><span lang=\"RO\">La Play Solutions credem foarte mult &icirc;n dialog și suntem de părere că orice problemă poate fi rezolvată prin intermediul unei COMUNICĂRI pozitive si eficiente. Punem mare preț pe seriozitate și considerăm că fiecare zi este o oportunitate de a excela, de a ne eficientiza activitatea și de a deveni cea mai bună versiune a noastră.</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 14:41:20', '2023-05-24 12:12:19'),
(15, 'CrowdStrike Holdings, Inc', 'Ava Taylor', 'Taylor', 'taylor@crowdstrike.com', '$2y$10$97NATQOvJyoNy5PuLsniMuYQBmgyyiADDmi3Gx1URgLAiWuOJoJ6i', '', 'logo_companie1684860020.png', '+34 123 456 789', 'Calle del Sol 10', 5, 1, 5, 'www.crowdstrike.com', '<p class=\"MsoNormal\"><span lang=\"RO\">CrowdStrike a redefinit securitatea cu cea mai avansată platformă nativă &icirc;n cloud din lume, care protejează și permite oamenilor, proceselor și tehnologiilor care conduc afacerile moderne. CrowdStrike securizează cele mai critice zone de risc - endpoint-urile și &icirc;ncărcările de lucru &icirc;n cloud, identitatea și datele - pentru a menține clienții &icirc;n fața adversarilor de astăzi și a opri &icirc;ncălcările de securitate. Cu ajutorul CrowdStrike Security Cloud, platforma CrowdStrike Falcon&reg; se bazează pe indicii &icirc;n timp real ale atacurilor, informații despre amenințările evolutive și telemetrie &icirc;mbogățită din &icirc;ntreaga companie pentru a furniza detectări deosebit de precise, protecție și remediere automată, v&acirc;nătoare de amenințări de elită și observabilitate prioritizată a vulnerabilităților - toate prin intermediul unui singur agent ușor. Cu CrowdStrike, clienții beneficiază de o protecție superioară, performanță mai bună, complexitate redusă și valoare imediată.</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 14:59:46', '2023-05-23 16:40:20'),
(16, 'Deloitte Digital', 'Sophia Adams', 'Adams', 'adams@deloitte.com', '$2y$10$1U1rHvKvKw6YnvD8TCMBXOshK50p52giZXBj6zL3Q5q1gOsOBiuHO', '', 'logo_companie1684873192.jpg', '+1 555 123 4567', '123 Main Street Anytown, CA 12345', 7, 7, 6, 'www.deloittedigital.com', '<p class=\"MsoNormal\">Suntem un ecosistem de profesioniști ingenioși și curajoși, concentrați pe performanță și inovație, ai căror impact depășește granițele. USI Deloitte Digital conduce, stimulează și facilitează clienții din SUA și din străinătate pentru a-i ajuta să se transforme digital și să fie pregătiți pentru viitor.</p>\r\n<p class=\"MsoNormal\">Răsp&acirc;ndiți pe mai multe locații din India, DD USI se specializează și lucrează la intersecția strategiei, experienței și tehnologiei pentru a stimula creșterea și inovația, colabor&acirc;nd cu echipele din SUA pentru a crea experiențe umane și memorabile pentru clienții noștri și pentru părțile interesate.</p>\r\n<p class=\"MsoNormal\">La USI, am crescut cu pași mari și continuăm să creștem &icirc;ntr-un ritm rapid! Am construit studiouri de design și realitate virtuală cu tehnologii de v&acirc;rf. Credem &icirc;n puterea colaborării și &icirc;n a fi o singură echipă integrată &icirc;ntre SUA și India. Demonstăm &icirc;ncredere și transparență &icirc;n tot ceea ce facem și promovăm o cultură a curajului și a diversității.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 15:11:55', '2023-05-24 12:15:16'),
(17, 'Sanador SRL', 'Stefania Rosu', 'Rosu', 'rosu@sanador.com', '$2y$10$HsVSYDHcX7QR.pUCHfxRRudI.wmvUJmwgwmP917t4MNjoUSqjrFba', '', 'logo_companie1684873015.jpg', '+40772107120', 'Soseaua Test nr.200, Bloc 15A, Scara A, Etaj 2, Apt.13, Intrare prin Acoperis', 1, 8, 4, 'www.sanador.com', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-indent: .5in;\">SANADOR s-a &icirc;nființat din dorința de a le oferi oamenilor soluții eficiente și performante pentru afecțiunile medicale cu care se confruntă, indiferent de natura și complexitatea acestora. <span lang=\"EN-US\">Vino la SANADOR</span>&nbsp;pentru a beneficia de servicii medicale performante, de grija atentă a celor mai exigenți medici, de ambianța unui mediu primitor și călduros &icirc;n care poți primi cele mai bune &icirc;ngrijiri medicale.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 15:17:18', '2023-05-24 12:11:10'),
(18, 'Vinci Group', 'Pierre Dupont', 'Dupont', 'dupont@vinci.com', '$2y$10$G9JYzzEtdfOs9lhuu6F29uq9I5FCbUMtuWysRTQAUorOj4UQwWuHy', '', 'logo_companie1684873064.jpg', '+33 1 23 45 67 89', '10 Rue de la Liberté Paris, 75001', 12, 2, 7, 'www.vinci.com', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; text-indent: .5in;\">VINCI este un lider mondial &icirc;n concesii, energie și construcții, activ &icirc;n peste 120 de țări. Ambiția noastră, &icirc;n răspuns la urgența climatică, este de a accelera transformarea mediilor de trai, infrastructurii și mobilității. De asemenea, ne propunem să promovăm progresul social prin a fi un grup umanist care exemplifică incluziunea și solidaritatea. Susținuți de performanța noastră economică și implicarea celor 272.000 de angajați, creăm o lume mai durabilă și abrațișăm pe deplin rolul nostru ca partener privat care lucrează &icirc;n interesul public.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 15:22:22', '2023-05-24 12:09:57'),
(19, 'G4S Global', 'Sherlock Watson', 'Watson', 'watson@g4s.com', '$2y$10$u1cELqF0X6euPTArGfVmfe6cS9yGMbfnc8DNe9ElS/f18dbK.tAO2', '', 'logo_companie1684860963.jpg', '+44 20 1234 5678', '10 High Street London, SW1A 1AA', 3, 9, 6, 'https://www.g4s.com/', '<p class=\"MsoNormal\"><span lang=\"RO\">G4S face parte din Allied Universal, o companie de servicii de securitate și facilități de frunte, care oferă servicii proactive de securitate și tehnologie de v&acirc;rf pentru a furniza soluții integrate de securitate personalizate, permiț&acirc;nd clienților să se concentreze pe activitatea lor principală. Prin intermediul unei forțe de muncă globale de aproximativ 800.000 de persoane, folosim cele mai bune practici &icirc;n comunitățile din &icirc;ntreaga lume. Cu venituri de aproximativ 20 miliarde de dolari, suntem susținuți de procese și sisteme eficiente care pot fi realizate doar prin scalabilitate, pentru a ne ajuta să ne respectăm promisiunea la nivel local: menținerea siguranței oamenilor, astfel &icirc;nc&acirc;t comunitățile noastre să prospere.</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'ro.linkedin.com/school/utcbro/', 'www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', 1, '2023-05-23 15:26:19', '2023-05-28 14:19:54'),
(23, 'Test', 'Mihai', 'Mihai', 'paul.mihailaandres@gmail.com', '$2y$10$FhDHkIQfbuBw5xlJgYfmeOWl5kbHGmIOz.lCa4/wmXo8xowRBc9Pe', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-06-11 21:05:40', '2023-06-11 21:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `companie_domains`
--

CREATE TABLE `companie_domains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume_domeniu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companie_domains`
--

INSERT INTO `companie_domains` (`id`, `nume_domeniu`, `created_at`, `updated_at`) VALUES
(1, 'IT', '2023-05-06 13:42:50', '2023-05-06 13:42:50'),
(2, 'Constructii', '2023-05-06 13:43:00', '2023-05-06 13:43:00'),
(4, 'Alimentatie', '2023-05-23 15:43:25', '2023-05-23 15:43:25'),
(5, 'Auto', '2023-05-23 15:52:09', '2023-05-23 15:52:09'),
(6, 'Asigurari', '2023-05-23 16:19:12', '2023-05-23 16:19:12'),
(7, 'Marketing', '2023-05-23 16:42:22', '2023-05-23 16:42:22'),
(8, 'Medical', '2023-05-23 16:47:35', '2023-05-23 16:47:35'),
(9, 'Securitate', '2023-05-23 16:54:05', '2023-05-23 16:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `companie_locations`
--

CREATE TABLE `companie_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume_locatie` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companie_locations`
--

INSERT INTO `companie_locations` (`id`, `nume_locatie`, `created_at`, `updated_at`) VALUES
(1, 'Romania', '2023-05-06 12:01:34', '2023-05-06 12:01:34'),
(2, 'Germania', '2023-05-06 12:01:45', '2023-05-06 12:01:45'),
(3, 'Marea Britanie', '2023-05-06 12:01:51', '2023-05-06 12:01:51'),
(4, 'Finlanda', '2023-05-06 12:01:55', '2023-05-06 12:01:55'),
(5, 'Spania', '2023-05-06 12:01:59', '2023-05-06 12:01:59'),
(6, 'Australia', '2023-05-06 12:02:02', '2023-05-06 12:02:02'),
(7, 'Statele Unite', '2023-05-06 12:02:13', '2023-05-06 12:02:13'),
(9, 'Japonia', '2023-05-23 15:54:15', '2023-05-23 15:54:15'),
(10, 'Olanda', '2023-05-23 16:20:09', '2023-05-23 16:20:09'),
(11, 'Italia', '2023-05-23 16:24:56', '2023-05-23 16:24:56'),
(12, 'Franta', '2023-05-23 17:00:46', '2023-05-23 17:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `companie_photos`
--

CREATE TABLE `companie_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `poza` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companie_photos`
--

INSERT INTO `companie_photos` (`id`, `company_id`, `poza`, `created_at`, `updated_at`) VALUES
(7, 19, 'poza_companie_1684938834.jpg', '2023-05-24 14:33:54', '2023-05-24 14:33:54'),
(8, 19, 'poza_companie_1684938844.jpg', '2023-05-24 14:34:04', '2023-05-24 14:34:04'),
(9, 19, 'poza_companie_1684938854.jpg', '2023-05-24 14:34:14', '2023-05-24 14:34:14'),
(10, 19, 'poza_companie_1684939246.jpg', '2023-05-24 14:40:46', '2023-05-24 14:40:46'),
(11, 7, 'poza_companie_1685029605.jpg', '2023-05-25 15:46:45', '2023-05-25 15:46:45'),
(12, 11, 'poza_companie_1685534749.jpg', '2023-05-31 12:05:49', '2023-05-31 12:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `companie_sizes`
--

CREATE TABLE `companie_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numar_angajati` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companie_sizes`
--

INSERT INTO `companie_sizes` (`id`, `numar_angajati`, `created_at`, `updated_at`) VALUES
(1, '< 10 Angajati', '2023-05-06 14:15:42', '2023-05-07 07:41:44'),
(2, '10-50 Angajati', '2023-05-06 14:16:45', '2023-05-06 14:16:45'),
(3, '50-100 Angajati', '2023-05-06 14:16:57', '2023-05-06 14:16:57'),
(4, '100-200 Angajati', '2023-05-06 14:17:08', '2023-05-06 14:17:08'),
(5, '200-500 Angajati', '2023-05-06 14:17:20', '2023-05-06 14:17:20'),
(6, '500-1000 Angajati', '2023-05-06 14:17:29', '2023-05-06 14:17:29'),
(7, '1000 +  Angajati', '2023-05-06 14:17:41', '2023-05-07 07:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `titlu` text NOT NULL,
  `descriere` text NOT NULL,
  `responsabilitati` text DEFAULT NULL,
  `cerinte` text DEFAULT NULL,
  `educatie` text DEFAULT NULL,
  `beneficii` text DEFAULT NULL,
  `locuri` int(11) NOT NULL,
  `job_category_id` int(11) NOT NULL,
  `job_location_id` int(11) NOT NULL,
  `job_type_id` int(11) NOT NULL,
  `job_experience_id` int(11) NOT NULL,
  `job_salary_range_id` int(11) NOT NULL,
  `map_code` text DEFAULT NULL,
  `este_promovat` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `titlu`, `descriere`, `responsabilitati`, `cerinte`, `educatie`, `beneficii`, `locuri`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_salary_range_id`, `map_code`, `este_promovat`, `created_at`, `updated_at`) VALUES
(1, 1, 'Senior web developer (php)', '<p>Postul este full time, si necesita prezenta la birou, in Finlanda. Nu este un job remote, va rugam nu aplicati daca nu aveti posibilitatea de a va prezenta. Salariul afisat este salariul NET. Exista posibilitatea de a lucra prin PFA/SRL unde suma poate fi mai mare. Test</p>', '<p style=\"line-height: 1;\">Angajatul va fi responsabil cu crearea paginilor web si a aplicatiilor web pentru clientii nostri cat si mentenanta acestora.</p>\r\n<p style=\"line-height: 1;\">&bull; Dezvolta aplicatii pe baza specificatiilor primite;</p>\r\n<p style=\"line-height: 1;\">&bull; Analizeaza si propune solutiile tehnice pentru proiectele in lucru;</p>\r\n<p style=\"line-height: 1;\">&bull; Efectueaza lucrari de mentenanta asupra aplicatiilor existente;</p>', '<p style=\"line-height: 1;\">&bull; Minim 3 ani de experienta in dezvoltarea de siteuri web si aplicatii in PHP;</p>\r\n<p style=\"line-height: 1;\">&bull; Bune cunostinte ale limbajului PHP: OOP</p>\r\n<p style=\"line-height: 1;\">&bull; Bune cunostinte de MySQL (optimizare, scalabilitate);</p>\r\n<p style=\"line-height: 1;\">&bull; Bune cunostinte de JavaScript/jQuery;</p>\r\n<p style=\"line-height: 1;\">&bull; Bune cunostinte de HTML si CSS;</p>\r\n<p style=\"line-height: 1;\">Reprezinta avantaj:</p>\r\n<p style=\"line-height: 1;\">&bull; Optimizarea aplicatiilor web cu volum mare de trafic;</p>\r\n<p style=\"line-height: 1;\">&bull; Sisteme de caching;</p>\r\n<p style=\"line-height: 1;\">&bull; Servicii web, API, REST</p>', '<p>Terminare unei facultati in domeniu sau an terminal</p>', '<p>&bull; Bonuri de masă</p>\r\n<p>&bull; Abonament medical</p>\r\n<p>&bull; Beneficii flexibilie: sport, vacanță, cărți, training-uri</p>\r\n<p>&bull; Program de lucru flexibil &amp; hybrid home/office</p>', 3, 8, 4, 2, 3, 4, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9436.365347823868!2d24.938167461945344!3d60.18484618456288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4681cadf4b32f6dd%3A0x146d63c75a810!2sFinland!5e0!3m2!1sen!2sro!4v1683794316633!5m2!1sen!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2023-05-11 05:50:44', '2023-05-23 10:43:52'),
(31, 7, 'Operator Casa Marcat', '<p class=\"MsoNormal\">Suntem &icirc;n căutarea unui casier responsabil și orientat către clienți pentru a se alătura echipei noastre la McDonald\'s. &Icirc;n calitate de casier, veți avea oportunitatea de a interacționa direct cu clienții noștri și de a asigura o experiență plăcută și eficientă la punctul de v&acirc;nzare.</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: 1;\">- Preluarea comenzilor clienților cu promptitudine și exactitate</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: 1;\">- &Icirc;ncasarea plăților și gestionarea corectă a tranzacțiilor financiare</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: 1;\">- Asigurarea unei comunicări clare și prietenoase cu clienții</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: 1;\">- Răspunderea de mentinerea și organizarea zonei de casă</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in; line-height: 1;\">- Respectarea standardelor de curățenie și igienă &icirc;n toate activitățile desfășurate</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Abilități excelente de comunicare și interacțiune cu clienții</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Atitudine pozitivă și orientare către servicii de calitate</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Abilitatea de a lucra eficient &icirc;ntr-un mediu rapid și dinamic</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Atentie la detalii și abilități matematice de bază</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Capacitatea de a respecta standardele stricte de igienă și curățenie</p>', '<p class=\"MsoNormal\">Studii medii sau echivalent</p>', '<p class=\"MsoNormal\">- Program flexibil pentru a se potrivi cu nevoile tale</p>\r\n<p class=\"MsoNormal\">- Training și dezvoltare profesională continuă</p>\r\n<p class=\"MsoNormal\">- Atmosferă de lucru plăcută și dinamică</p>\r\n<p class=\"MsoNormal\">- Reduceri la produsele McDonald\'s pentru angajați</p>', 4, 7, 1, 3, 1, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2023-05-23 17:25:44', '2023-05-28 14:32:36'),
(32, 7, 'Bucatar', '<p class=\"MsoNormal\">Căutăm un bucătar pasionat și creativ pentru a se alătura echipei noastre la McDonald\'s. &Icirc;n calitate de bucătar, veți fi responsabil de pregătirea și prezentarea produselor noastre delicioase, respect&acirc;nd standardele noastre stricte de calitate și siguranță alimentară.</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Pregătirea și gătirea produselor alimentare &icirc;n conformitate cu rețetele și procedurile noastre</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Respectarea standardelor de igienă și siguranță alimentară &icirc;n toate etapele procesului de preparare</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Asigurarea unei prezentări estetice și atrăgătoare a produselor</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Coordonarea și colaborarea cu ceilalți membri ai echipei de bucătărie pentru a asigura un flux eficient de lucru</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Gestionarea tocurilor și aprovizionarea pentru a asigura disponibilitatea ingredientelor necesare</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Experiență anterioară &icirc;n domeniul culinar sau &icirc;n bucătărie (reprezintă un avantaj, dar nu este obligatorie)</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Cunoștințe despre igienă și siguranță alimentară</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Abilități organizaționale și capacitatea de a lucra eficient &icirc;ntr-un mediu aglomerat</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Creativitate &icirc;n prezentarea și garnisirea produselor alimentare</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Atitudine pozitivă și abilități bune de comunicare</p>', '<p class=\"MsoNormal\">Studii medii sau echivalent</p>', '<p class=\"MsoNormal\">- Salariu competitiv și oportunități de avansare &icirc;n cadrul companiei</p>\r\n<p class=\"MsoNormal\">- Program flexibil pentru a se potrivi cu nevoile tale</p>\r\n<p class=\"MsoNormal\">- Training și dezvoltare profesională continuă</p>\r\n<p class=\"MsoNormal\">- Atmosferă de lucru plăcută și dinamică</p>\r\n<p class=\"MsoNormal\">- Reduceri la produsele McDonald\'s pentru angajați</p>', 2, 12, 1, 2, 2, 2, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 17:32:21', '2023-05-24 10:30:56'),
(33, 8, 'Mecanic', '<p class=\"MsoNormal\">Suntem &icirc;n căutarea unui mecanic specializat &icirc;n vehiculele Toyota pentru a se alătura echipei noastre. &Icirc;n calitate de mecanic Toyota, veți fi responsabil de diagnosticarea, repararea și &icirc;ntreținerea vehiculelor Toyota pentru a asigura funcționarea optimă și siguranța acestora.</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Efectuarea diagnozelor precise și corecte ale problemelor vehiculelor Toyota</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Efectuarea reparațiilor și &icirc;nlocuirilor necesare ale componentelor și sistemelor vehiculului</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Realizarea reviziilor periodice și &icirc;ntreținerii conform programului recomandat de producător</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Verificarea și ajustarea sistemelor de fr&acirc;nare, suspensie, direcție și alte componente esențiale</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- &Icirc;nregistrarea și documentarea corectă a tuturor serviciilor și reparațiilor efectuate</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Experiență anterioară &icirc;n domeniul mecanicii auto, cu o specializare &icirc;n vehiculele Toyota (reprezintă un avantaj)</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Cunoștințe solide despre funcționarea și sistemul de diagnosticare al vehiculelor Toyota</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Abilități excelente de diagnosticare și rezolvare a problemelor tehnice</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Atitudine pozitivă și abilități bune de comunicare</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Capacitatea de a lucra eficient &icirc;ntr-un mediu aglomerat și cu termene limită</p>', '<p class=\"MsoNormal\">Diplomă sau calificare &icirc;n domeniul mecanicii auto (reprezintă un avantaj)</p>', '<p class=\"MsoNormal\">- Salariu competitiv și oportunități de avansare &icirc;n cadrul companiei</p>\r\n<p class=\"MsoNormal\">- Program flexibil și echilibrat pentru a se potrivi cu nevoile tale</p>\r\n<p class=\"MsoNormal\">- Training și dezvoltare profesională continuă &icirc;n tehnologiile și sistemele Toyota</p>\r\n<p class=\"MsoNormal\">- Oportunitatea de a lucra cu vehicule de &icirc;naltă calitate și tehnologie avansată</p>\r\n<p class=\"MsoNormal\">- Atmosferă de lucru plăcută și colegială</p>', 1, 9, 7, 2, 3, 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 17:39:04', '2023-05-24 10:38:13'),
(34, 8, 'Programator Embedded', '<p class=\"MsoNormal\">Căutăm un programator embedded talentat și pasionat de tehnologie pentru a se alătura echipei noastre la Toyota. &Icirc;n calitate de programator embedded, veți fi responsabil de dezvoltarea și implementarea software-ului &icirc;n sistemele embedded utilizate &icirc;n vehiculele noastre Toyota, contribuind la &icirc;mbunătățirea funcționalității și performanței acestora.</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Dezvoltarea și implementarea software-ului embedded &icirc;n conformitate cu cerințele și specificațiile date</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Programarea și testarea modulelor și componentelor software &icirc;n sistemele embedded ale vehiculelor</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Identificarea și rezolvarea problemelor și erorilor &icirc;n software-ul embedded</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Colaborarea cu echipa de ingineri și dezvoltatori pentru a asigura integrarea corectă a software-ului</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Documentarea clară a codului și a procesului de dezvoltare</p>', '<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Experiență anterioară &icirc;n dezvoltarea de software embedded sau programare &icirc;n domeniul automotive (reprezintă un avantaj)</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Cunoștințe solide de programare &icirc;n limbajele C/C++ și a conceptelor de dezvoltare embedded</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Experiență &icirc;n utilizarea unor platforme și medii de dezvoltare precum IDE-uri și sisteme de operare embedded</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Abilități bune de rezolvare a problemelor și de g&acirc;ndire analitică</p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0in;\">- Capacitatea de a lucra &icirc;n echipă și de a comunica eficient</p>', '<p class=\"MsoNormal\">Studii superioare &icirc;n domeniul informaticii, ingineriei software sau o disciplină similară</p>', '<p class=\"MsoNormal\">- Salariu competitiv și oportunități de avansare &icirc;n cadrul companiei</p>\r\n<p class=\"MsoNormal\">- Proiecte interesante și tehnologii de ultimă generație &icirc;n domeniul automotive</p>\r\n<p class=\"MsoNormal\">- Training și dezvoltare profesională continuă &icirc;n domeniul dezvoltării software embedded</p>\r\n<p class=\"MsoNormal\">- Oportunitatea de a lucra &icirc;ntr-o echipă talentată și dinamică</p>\r\n<p class=\"MsoNormal\">- Beneficii suplimentare oferite de Toyota</p>', 1, 8, 7, 2, 4, 4, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 17:43:32', '2023-05-24 10:38:23'),
(35, 9, 'Designer Auto', '<p class=\"MsoNormal\">Suntem &icirc;n căutarea unui designer talentat și creativ pentru a se alătura echipei noastre de design la Audi. &Icirc;n calitate de designer pentru Audi, veți fi responsabil de dezvoltarea și conceptualizarea designului estetic și funcțional al vehiculelor noastre, contribuind la crearea unui aspect distinctiv și inovator.</p>', '<p class=\"MsoNormal\">- Dezvoltarea de concepte și schițe inițiale pentru designul exterior și interior al vehiculelor Audi</p>\r\n<p class=\"MsoNormal\">- Crearea de modele și renderizări digitale pentru a ilustra conceptele de design</p>\r\n<p class=\"MsoNormal\">- Colaborarea cu echipa de ingineri și dezvoltatori pentru a asigura viabilitatea tehnică a conceptelor de design</p>\r\n<p class=\"MsoNormal\">- Participarea la sesiuni de brainstorming și discuții de design pentru a contribui la dezvoltarea strategiei de design a mărcii Audi</p>\r\n<p class=\"MsoNormal\">- Monitorizarea tendințelor și inovațiilor &icirc;n domeniul designului auto pentru a aduce idei și soluții progresiste</p>', '<p class=\"MsoNormal\">- Experiență anterioară &icirc;n designul auto, preferabil &icirc;n industria automotive de lux</p>\r\n<p class=\"MsoNormal\">- Cunoștințe solide &icirc;n software-urile de design și modelare 3D, cum ar fi AutoCAD, Adobe Creative Suite, CATIA sau alte programe similare</p>\r\n<p class=\"MsoNormal\">- Abilități excelente de desen și vizualizare, cu atenție la detalii și proporții</p>\r\n<p class=\"MsoNormal\">- Capacitatea de a lucra &icirc;ntr-un mediu aglomerat și cu termene limită str&acirc;nse</p>\r\n<p class=\"MsoNormal\">- Abilități bune de comunicare și prezentare pentru a-și exprima ideile și conceptele de design</p>', '<p class=\"MsoNormal\">Diplomă de licență sau master &icirc;n design industrial, design de transport sau o disciplină similară</p>', '<p class=\"MsoNormal\">&nbsp;- Salariu competitiv și oportunități de avansare &icirc;n cadrul companiei</p>\r\n<p class=\"MsoNormal\">- Lucrul &icirc;ntr-un mediu creativ și inspirațional, alături de profesioniști talentați</p>\r\n<p class=\"MsoNormal\">- Proiecte interesante și provocatoare &icirc;n industria automotive de lux</p>\r\n<p class=\"MsoNormal\">- Training și dezvoltare profesională continuă &icirc;n domeniul designului auto</p>\r\n<p class=\"MsoNormal\">- Beneficii suplimentare oferite de Audi</p>', 2, 9, 2, 2, 3, 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2023-05-23 17:50:44', '2023-05-24 10:33:05'),
(36, 9, 'Mecanic Auto', '<p class=\"MsoNormal\">Suntem &icirc;n căutarea unui mecanic experimentat și calificat pentru a se alătura echipei noastre de service Audi. &Icirc;n calitate de mecanic Audi, veți fi responsabil de diagnosticarea, repararea și &icirc;ntreținerea vehiculelor Audi, asigur&acirc;ndu-vă că acestea sunt &icirc;n condiții optime de funcționare și siguranță.</p>', '<p class=\"MsoNormal\">- Diagnosticarea și identificarea defecțiunilor vehiculelor Audi utiliz&acirc;nd echipamente și software specializate</p>\r\n<p class=\"MsoNormal\">- Efectuarea reparațiilor și &icirc;nlocuirea componentelor defecte conform standardelor și procedurilor Audi</p>\r\n<p class=\"MsoNormal\">- Efectuarea reviziilor periodice și &icirc;ntreținerii preventive pentru a asigura funcționarea optimă a vehiculelor</p>\r\n<p class=\"MsoNormal\">- Testarea și verificarea vehiculelor după reparații pentru a se asigura că acestea sunt &icirc;n conformitate cu standardele de calitate Audi</p>\r\n<p class=\"MsoNormal\">- &Icirc;nregistrarea detaliată a lucrărilor efectuate și a componentelor utilizate &icirc;n sistemele de gestionare a service-ului</p>', '<p class=\"MsoNormal\">- Experiență anterioară &icirc;n domeniul mecanicii auto, cu o expertiză specifică &icirc;n vehiculele Audi (reprezintă un avantaj)</p>\r\n<p class=\"MsoNormal\">- Cunoștințe solide &icirc;n diagnosticarea și reparația vehiculelor, inclusiv utilizarea echipamentelor și a software-urilor specifice</p>\r\n<p class=\"MsoNormal\">- Abilități excelente de diagnosticare a defecțiunilor și rezolvare a problemelor tehnice</p>\r\n<p class=\"MsoNormal\">- Certificări și calificări relevante &icirc;n domeniul mecanicii auto (reprezintă un avantaj)</p>\r\n<p class=\"MsoNormal\">- Atitudine proactivă, atenție la detalii și capacitatea de a lucra eficient &icirc;ntr-un mediu aglomerat</p>', '<p class=\"MsoNormal\">Diplomă de calificare &icirc;n mecanică auto sau o disciplină similară</p>', '<p class=\"MsoNormal\">- Salariu competitiv și oportunități de avansare &icirc;n cadrul companiei</p>\r\n<p class=\"MsoNormal\">- Training și dezvoltare profesională continuă &icirc;n domeniul mecanicii auto și tehnologiilor Audi</p>\r\n<p class=\"MsoNormal\">- Lucrul &icirc;ntr-un mediu echipat cu echipamente și instrumente de ultimă generație</p>\r\n<p class=\"MsoNormal\">- Oportunitatea de a lucra cu vehicule de &icirc;naltă calitate și tehnologii avansate</p>\r\n<p class=\"MsoNormal\">- Beneficii suplimentare oferite de Audi</p>', 1, 9, 2, 2, 2, 2, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2023-05-23 18:26:48', '2023-05-24 10:33:18'),
(37, 10, 'Reprezentant Vanzari', '<p class=\"MsoNormal\">Suntem &icirc;n căutarea unui reprezentant de v&acirc;nzări entuziast și dinamic pentru a se alătura echipei noastre de v&acirc;nzări Dacia. &Icirc;n calitate de reprezentant de v&acirc;nzări Dacia, veți fi responsabil de promovarea și v&acirc;nzarea vehiculelor Dacia, dezvoltarea relațiilor cu clienții și asigurarea unei experiențe de cumpărare plăcute și satisfăcătoare.</p>', '<p class=\"MsoNormal\">- Prezentarea și promovarea vehiculelor Dacia către clienți potențiali</p>\r\n<p class=\"MsoNormal\">- Consilierea clienților &icirc;n alegerea vehiculului potrivit și oferirea de soluții personalizate</p>\r\n<p class=\"MsoNormal\">- Organizarea și efectuarea testelor de conducere pentru clienți</p>\r\n<p class=\"MsoNormal\">- Negocierea prețurilor și condițiilor de v&acirc;nzare &icirc;n conformitate cu politicile și procedurile companiei</p>\r\n<p class=\"MsoNormal\">- &Icirc;ntocmirea și gestionarea documentației necesare pentru &icirc;ncheierea tranzacțiilor de v&acirc;nzare</p>\r\n<p class=\"MsoNormal\">- Menținerea relațiilor cu clienții existenți și dezvoltarea rețelei de clienți potențiali</p>', '<p class=\"MsoNormal\">- Experiență anterioară &icirc;n v&acirc;nzări, preferabil &icirc;n industria auto</p>\r\n<p class=\"MsoNormal\">- Abilități excelente de comunicare și negociere</p>\r\n<p class=\"MsoNormal\">- Orientare către clienți și abilitatea de a oferi un serviciu de calitate superioară</p>\r\n<p class=\"MsoNormal\">- Capacitatea de a lucra &icirc;ntr-un mediu dinamic și de a-și atinge obiectivele de v&acirc;nzări</p>\r\n<p class=\"MsoNormal\">- Cunoștințe despre vehiculele Dacia și caracteristicile lor (reprezintă un avantaj)</p>', '<p class=\"MsoNormal\">Diplomă de licență sau echivalent &icirc;ntr-un domeniu relevant</p>', '<p class=\"MsoNormal\">- Salariu competitiv și comisioane atractive &icirc;n funcție de performanță</p>\r\n<p class=\"MsoNormal\">- Training și dezvoltare profesională continuă &icirc;n domeniul v&acirc;nzărilor și al vehiculelor Dacia</p>\r\n<p class=\"MsoNormal\">- Oportunitatea de a lucra &icirc;ntr-un mediu dinamic și plin de provocări</p>\r\n<p class=\"MsoNormal\">- Susținere și sprijin din partea echipei de management</p>\r\n<p class=\"MsoNormal\">- Beneficii suplimentare oferite de companie</p>', 3, 5, 1, 2, 4, 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 18:35:45', '2023-05-24 10:38:50'),
(38, 10, 'Sef Atelier Uzinele Dacia', '<p class=\"MsoNormal\">Uzinele Dacia caută un șef de atelier dedicat și experimentat pentru a conduce operațiunile de producție și mentenanță &icirc;n cadrul uzinei noastre. &Icirc;n calitate de șef de atelier, veți fi responsabil de coordonarea și supervizarea echipei de lucru, asigur&acirc;ndu-vă că producția se desfășoară &icirc;n mod eficient și &icirc;n conformitate cu standardele de calitate.</p>', '<p class=\"MsoNormal\">- Planificarea și organizarea activităților de producție și mentenanță &icirc;n cadrul uzinei Dacia</p>\r\n<p class=\"MsoNormal\">- Supervizarea echipei de lucru și asigurarea respectării procedurilor de lucru și a standardelor de calitate</p>\r\n<p class=\"MsoNormal\">- Monitorizarea fluxului de producție și identificarea potențialelor probleme sau &icirc;nt&acirc;rzieri</p>\r\n<p class=\"MsoNormal\">- Implementarea măsurilor de &icirc;mbunătățire continuă a eficienței și calității proceselor de producție</p>\r\n<p class=\"MsoNormal\">- Asigurarea respectării normelor de sănătate și securitate &icirc;n muncă &icirc;n cadrul atelierului</p>\r\n<p class=\"MsoNormal\">- Colaborarea cu alte departamente și echipe pentru a asigura o comunicare eficientă și un flux de lucru optim</p>', '<p class=\"MsoNormal\">- Experiență solidă &icirc;n industria auto, cu o expertiză &icirc;n producție și mentenanță</p>\r\n<p class=\"MsoNormal\">- Experiență anterioară &icirc;ntr-o poziție de conducere sau supervizare &icirc;ntr-un mediu de producție</p>\r\n<p class=\"MsoNormal\">- Cunoștințe solide &icirc;n domeniul tehnic și &icirc;n procesele de producție specifice industriei auto</p>\r\n<p class=\"MsoNormal\">- Abilități excelente de gestionare a echipei, cu capacitatea de a motiva și a dezvolta membrii echipei</p>\r\n<p class=\"MsoNormal\">- Orientare către rezultate și abilități de planificare și organizare</p>\r\n<p class=\"MsoNormal\">- Cunoștințe despre standardele de calitate și normele de sănătate și securitate &icirc;n muncă</p>', '<p class=\"MsoNormal\">Diplomă de licență &icirc;ntr-un domeniu tehnic sau echivalent</p>', '<p class=\"MsoNormal\">- Pachet salarial competitiv și beneficii suplimentare</p>\r\n<p class=\"MsoNormal\">- Oportunități de dezvoltare profesională și avansare &icirc;n cadrul companiei</p>\r\n<p class=\"MsoNormal\">- Lucrul &icirc;ntr-un mediu de producție modern, dotat cu echipamente și tehnologii de ultimă generație</p>\r\n<p class=\"MsoNormal\">- Oportunitatea de a lucra cu o echipă talentată și de a contribui la producția de vehicule Dacia de &icirc;naltă calitate</p>\r\n<p class=\"MsoNormal\">- Susținere și sprijin din partea managementului</p>', 1, 9, 1, 1, 1, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 18:42:44', '2023-05-24 10:39:03'),
(39, 11, 'Programator Front-End', '<p class=\"MsoNormal\">Căutăm un programator Front-end Microsoft talentat și pasionat pentru a se alătura echipei noastre. &Icirc;n calitate de programator Front-end Microsoft, veți fi responsabil de dezvoltarea și implementarea interfețelor utilizator pentru aplicații și site-uri web, utiliz&acirc;nd tehnologiile Microsoft și cele mai bune practici &icirc;n dezvoltarea front-end.</p>', '<p class=\"MsoNormal\">- Dezvoltarea și implementarea interfețelor utilizator pentru aplicații și site-uri web folosind tehnologiile Microsoft (de exemplu, ASP.NET, C#, TypeScript, Angular, React etc.)</p>\r\n<p class=\"MsoNormal\">- Colaborarea str&acirc;nsă cu echipa de dezvoltare și designerii pentru a transforma cerințele funcționale și design-ul &icirc;n interfețe utilizator funcționale și atractive</p>\r\n<p class=\"MsoNormal\">- Testarea și depanarea interfețelor utilizator pentru a asigura funcționalitatea corectă și o experiență de utilizare plăcută</p>\r\n<p class=\"MsoNormal\">- Optimizarea performanței și compatibilității interfețelor utilizator pentru diferite dispozitive și browsere</p>\r\n<p class=\"MsoNormal\">- Monitorizarea tendințelor și evoluțiilor &icirc;n domeniul dezvoltării front-end și aducerea de sugestii și &icirc;mbunătățiri pentru procesele și tehnologiile existente</p>', '<p class=\"MsoNormal\">- Experiență anterioară &icirc;n dezvoltarea front-end utiliz&acirc;nd tehnologiile Microsoft</p>\r\n<p class=\"MsoNormal\">- Cunoștințe solide de programare și experiență &icirc;n limbajele și framework-urile relevante, cum ar fi ASP.NET, C#, TypeScript, Angular, React etc.</p>\r\n<p class=\"MsoNormal\">- Cunoștințe bune de HTML, CSS și JavaScript</p>\r\n<p class=\"MsoNormal\">- Abilități excelente de rezolvare a problemelor și de depanare</p>\r\n<p class=\"MsoNormal\">- Capacitatea de a lucra &icirc;ntr-un mediu agil și de a gestiona sarcini multiple</p>\r\n<p class=\"MsoNormal\">- Atitudine proactivă și dorința de a &icirc;nvăța și a se dezvolta continuu &icirc;n domeniul dezvoltării front-end</p>', '<p class=\"MsoNormal\">- Diplomă de licență &icirc;n domeniul informaticii sau echivalent</p>\r\n<p class=\"MsoNormal\">- Cunoștințe avansate de programare și dezvoltare front-end utiliz&acirc;nd tehnologiile Microsoft</p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\">- Certificări relevante &icirc;n dezvoltarea front-end pe platforma Microsoft constituie un avantaj</p>', '<p class=\"MsoNormal\">- Salariu competitiv și pachet de beneficii atractiv</p>\r\n<p class=\"MsoNormal\">- Oportunități de creștere și dezvoltare profesională &icirc;ntr-un mediu stimulant</p>\r\n<p class=\"MsoNormal\">- Lucrul cu tehnologii de ultimă generație și participarea la proiecte interesante și variate</p>\r\n<p class=\"MsoNormal\">- Mediu de lucru colaborativ și echipă dedicată</p>\r\n<p class=\"MsoNormal\">- Flexibilitate &icirc;n programul de lucru și opțiuni de lucru la distanță (remote)</p>', 10, 8, 6, 1, 1, 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2023-05-23 18:49:16', '2023-05-24 10:39:28'),
(40, 11, 'Programator Back-End', '<p class=\"MsoNormal\">Căutăm un programator Back-End talentat și pasionat pentru a se alătura echipei noastre. &Icirc;n calitate de programator Back-End pentru Microsoft, veți fi responsabil de dezvoltarea și implementarea logicii de server, gestionarea bazelor de date și asigurarea funcționalității și performanței aplicațiilor noastre, utiliz&acirc;nd tehnologiile Microsoft și cele mai bune practici &icirc;n dezvoltarea Back-End.</p>', '<p class=\"MsoNormal\">- Dezvoltarea și implementarea logicii de server pentru aplicații utiliz&acirc;nd tehnologiile Microsoft (de exemplu, ASP.NET, C#, SQL Server etc.)</p>\r\n<p class=\"MsoNormal\">- Gestionarea și optimizarea bazelor de date pentru a asigura eficiența și securitatea acestora</p>\r\n<p class=\"MsoNormal\">- Colaborarea str&acirc;nsă cu echipa de dezvoltare și analiștii pentru a &icirc;nțelege cerințele funcționale și a transforma aceste cerințe &icirc;n funcționalități și servicii Back-End</p>\r\n<p class=\"MsoNormal\">- Testarea și depanarea aplicațiilor pentru a asigura funcționalitatea și performanța corectă</p>\r\n<p class=\"MsoNormal\">- Monitorizarea și optimizarea performanței și scalabilității aplicațiilor</p>\r\n<p class=\"MsoNormal\">- Răspunderea la problemele și solicitările de suport legate de funcționalitățile Back-End ale aplicațiilor</p>', '<p class=\"MsoNormal\">- Experiență anterioară &icirc;n dezvoltarea Back-End utiliz&acirc;nd tehnologiile Microsoft</p>\r\n<p class=\"MsoNormal\">- Cunoștințe solide de programare și experiență &icirc;n limbajele și framework-urile relevante, cum ar fi ASP.NET, C#, SQL Server etc.</p>\r\n<p class=\"MsoNormal\">- Cunoștințe bune de baze de date și experiență &icirc;n gestionarea și optimizarea acestora</p>\r\n<p class=\"MsoNormal\">- Abilități excelente de rezolvare a problemelor și de depanare</p>\r\n<p class=\"MsoNormal\">- Capacitatea de a lucra &icirc;ntr-un mediu agil și de a gestiona sarcini multiple</p>\r\n<p class=\"MsoNormal\">- Atitudine proactivă și dorința de a &icirc;nvăța și a se dezvolta continuu &icirc;n domeniul dezvoltării Back-End</p>', '<p class=\"MsoNormal\">- Diplomă de licență &icirc;n domeniul informaticii sau echivalent</p>\r\n<p class=\"MsoNormal\">- Cunoștințe avansate &icirc;n dezvoltarea Back-End utiliz&acirc;nd tehnologiile Microsoft, cum ar fi ASP.NET, C#, SQL Server etc.</p>\r\n<p class=\"MsoNormal\">- Experiență anterioară relevantă &icirc;n dezvoltarea Back-End pentru aplicații și sisteme complexe</p>\r\n<p>&nbsp;</p>\r\n<p class=\"MsoNormal\">- Certificări sau calificări suplimentare &icirc;n domeniul dezvoltării software și al tehnologiilor Microsoft constituie un avantaj</p>', '<p class=\"MsoNormal\">- Salariu competitiv și pachet de beneficii atractiv</p>\r\n<p class=\"MsoNormal\">- Oportunități de creștere și dezvoltare profesională &icirc;ntr-un mediu stimulant</p>\r\n<p class=\"MsoNormal\">- Lucrul cu tehnologii de ultimă generație și participarea la proiecte interesante și variate</p>\r\n<p class=\"MsoNormal\">- Mediu de lucru colaborativ și echipă dedicată</p>\r\n<p class=\"MsoNormal\">- Flexibilitate &icirc;n programul de lucru și opțiuni de lucru la distanță (remote)</p>', 1, 8, 5, 4, 3, 5, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2023-05-23 18:54:59', '2023-05-24 10:39:39'),
(41, 12, 'Operator Call Center', '<p class=\"MsoNormal\">Căutăm un operator Call Center entuziast și comunicativ pentru a se alătura echipei noastre din cadrul NN Asigurări. &Icirc;n calitate de operator Call Center, veți avea oportunitatea de a oferi suport clienților noștri &icirc;n ceea ce privește asigurările și serviciile noastre, gestion&acirc;nd apelurile telefonice și răspunz&acirc;nd la &icirc;ntrebările și solicitările acestora &icirc;ntr-un mod profesionist și eficient.</p>', '<p class=\"MsoNormal\">- Primirea și gestionarea apelurilor telefonice primite de la clienți</p>\r\n<p class=\"MsoNormal\">- Oferirea de informații și suport clienților referitor la produsele și serviciile noastre, inclusiv asigurări de viață, asigurări de sănătate, pensii și investiții</p>\r\n<p class=\"MsoNormal\">- Identificarea nevoilor și solicitărilor clienților și oferirea de soluții adecvate</p>\r\n<p class=\"MsoNormal\">- &Icirc;nregistrarea corectă și precisă a datelor și informațiilor relevante &icirc;n sistemul nostru intern</p>\r\n<p class=\"MsoNormal\">- Colaborarea str&acirc;nsă cu ceilalți membri ai echipei pentru a asigura un serviciu de calitate și satisfacția clienților</p>\r\n<p class=\"MsoNormal\">- Respectarea standardelor și politicilor de calitate ale companiei</p>', '<p class=\"MsoNormal\">- Abilități excelente de comunicare verbală și relaționare cu clienții</p>\r\n<p class=\"MsoNormal\">- Capacitatea de a lucra &icirc;ntr-un mediu dinamic și de a gestiona multiple apeluri telefonice &icirc;n același timp</p>\r\n<p class=\"MsoNormal\">- Atitudine pozitivă și orientare către satisfacția clienților</p>\r\n<p class=\"MsoNormal\">- Cunoașterea produselor și serviciilor de asigurări constituie un avantaj, dar nu este obligatorie</p>\r\n<p class=\"MsoNormal\">- Abilități de utilizare a calculatorului și cunoștințe de bază ale aplicațiilor Microsoft Office</p>\r\n<p class=\"MsoNormal\">- Flexibilitate &icirc;n programul de lucru și disponibilitatea de a lucra &icirc;n schimburi, inclusiv &icirc;n weekend-uri și sărbători</p>', '<p class=\"MsoNormal\">Diploma de bacalaureat sau echivalent</p>', '<p class=\"MsoNormal\">Salariu competitiv și pachet de beneficii atractiv</p>\r\n<p class=\"MsoNormal\">Oportunități de dezvoltare și avansare &icirc;n cadrul companiei</p>\r\n<p class=\"MsoNormal\">- Mediu de lucru plăcut și profesionist, &icirc;ntr-o echipă dinamică și dedicată</p>\r\n<p class=\"MsoNormal\">- Training și suport constant pentru a-ți &icirc;mbunătăți abilitățile și cunoștințele</p>\r\n<p class=\"MsoNormal\">- Posibilitatea de a interacționa cu clienți diversi și de a-ți dezvolta abilitățile de comunicare și gestionare a relațiilor cu clienții</p>', 3, 7, 4, 3, 2, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 19:01:19', '2023-05-24 10:35:13'),
(42, 12, 'Inspector Asigurari', '<p class=\"MsoNormal\">Căutăm un inspector asigurare dedicat și pasionat pentru a se alătura echipei noastre din cadrul NN Asigurări. &Icirc;n calitate de inspector asigurare, veți avea responsabilitatea de a evalua riscurile și de a oferi servicii de consultanță &icirc;n domeniul asigurărilor, asigur&acirc;ndu-vă că clienții noștri beneficiază de o acoperire adecvată și de un suport de calitate.</p>', '<p class=\"MsoNormal\">- Evaluarea riscurilor și nevoilor de asigurare ale clienților</p>\r\n<p class=\"MsoNormal\">- Identificarea și recomandarea celor mai potrivite produse și soluții de asigurare pentru clienți</p>\r\n<p class=\"MsoNormal\">- Elaborarea și prezentarea ofertelor de asigurare personalizate, &icirc;n conformitate cu nevoile și bugetul clienților</p>\r\n<p class=\"MsoNormal\">- Explicarea detaliilor și a clauzelor contractuale către clienți, asigur&acirc;ndu-se că aceștia &icirc;nțeleg pe deplin acoperirea și beneficiile poliței de asigurare</p>\r\n<p class=\"MsoNormal\">- Gestionarea și rezolvarea solicitărilor și reclamațiilor clienților &icirc;ntr-un mod prompt și profesionist</p>\r\n<p class=\"MsoNormal\">- Menținerea relațiilor de &icirc;ncredere cu clienții existenți și dezvoltarea de noi relații comerciale</p>', '<p class=\"MsoNormal\">- Experiență anterioară &icirc;n domeniul asigurărilor sau &icirc;ntr-un rol similar constituie un avantaj</p>\r\n<p class=\"MsoNormal\">- Cunoștințe solide &icirc;n domeniul asigurărilor și &icirc;n legislația aplicabilă</p>\r\n<p class=\"MsoNormal\">- Abilități excelente de comunicare și negociere, cu capacitatea de a construi relații solide cu clienții</p>\r\n<p class=\"MsoNormal\">- Orientare către rezultate și abilități de organizare și planificare eficientă a activității</p>\r\n<p class=\"MsoNormal\">- Cunoștințe de limba engleză constituie un avantaj</p>', '<p>Diploma de licență &icirc;ntr-un domeniu relevant, cum ar fi economie, finanțe sau asigurări</p>', '<p class=\"MsoNormal\">- Salariu competitiv și pachet de beneficii atractiv</p>\r\n<p class=\"MsoNormal\">- Oportunități de dezvoltare și avansare &icirc;n cadrul companiei</p>\r\n<p class=\"MsoNormal\">- Training și suport constant pentru a-ți &icirc;mbunătăți abilitățile și cunoștințele &icirc;n domeniul asigurărilor</p>\r\n<p class=\"MsoNormal\">- Mediu de lucru plăcut și profesionist, &icirc;ntr-o echipă dinamică și dedicată</p>', 3, 4, 5, 2, 4, 2, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 19:08:35', '2023-05-24 10:42:44'),
(43, 13, 'Functionar economic - Contabilitate primara', '<p class=\"MsoNormal\">&nbsp;Căutăm un contabil dedicat și precis pentru a se alătura echipei noastre din cadrul Generali Asigurări. &Icirc;n calitate de contabil, veți avea responsabilitatea de a asigura &icirc;nregistrarea corectă și precisă a tranzacțiilor financiare ale companiei, respect&acirc;nd legislația și politicile contabile &icirc;n vigoare.</p>', '<p class=\"MsoNormal\">- &Icirc;nregistrarea și verificarea facturilor, bonurilor și altor documente financiare</p>\r\n<p class=\"MsoNormal\">- Efectuarea reconcilierilor bancare și a altor concilieri contabile</p>\r\n<p class=\"MsoNormal\">- Monitorizarea și analiza conturilor și soldurilor financiare</p>\r\n<p class=\"MsoNormal\">- &Icirc;ntocmirea rapoartelor financiare și a situațiilor financiare lunare, trimestriale și anuale</p>\r\n<p class=\"MsoNormal\">- Participarea la procesul de audit intern și extern, oferind suport și documentație necesară</p>\r\n<p class=\"MsoNormal\">- Asigurarea conformității cu politicile și procedurile contabile și fiscale</p>\r\n<p class=\"MsoNormal\">- Colaborarea cu ceilalți membri ai echipei financiare și cu departamentele interne pentru a asigura acuratețea și integritatea datelor financiare</p>', '<p class=\"MsoNormal\">- Experiență anterioară &icirc;n domeniul contabilității, preferabil &icirc;n industria asigurărilor</p>\r\n<p class=\"MsoNormal\">- Cunoștințe solide de contabilitate și legislație fiscală</p>\r\n<p class=\"MsoNormal\">- Abilități excelente de analiză și atenție la detalii</p>\r\n<p class=\"MsoNormal\">- Cunoștințe avansate de operare pe calculator și utilizare a programelor de contabilitate</p>\r\n<p class=\"MsoNormal\">- Abilități bune de comunicare și de lucru &icirc;n echipă</p>\r\n<p class=\"MsoNormal\">- Orientare către rezultate și respectarea termenelor limită</p>', '<p class=\"MsoNormal\">Diplomă de licență &icirc;n contabilitate, finanțe sau domeniu similar</p>', '<p class=\"MsoNormal\">- Salariu competitiv și pachet de beneficii atractiv</p>\r\n<p class=\"MsoNormal\">- Oportunități de dezvoltare și avansare &icirc;n cadrul companiei</p>\r\n<p class=\"MsoNormal\">- Mediu de lucru plăcut și profesionist, &icirc;ntr-o echipă dinamică și dedicată</p>\r\n<p class=\"MsoNormal\">- Training și suport constant pentru a-ți &icirc;mbunătăți abilitățile și cunoștințele &icirc;n domeniul contabilității</p>', 1, 15, 1, 2, 3, 4, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 19:15:07', '2023-05-24 10:34:44'),
(44, 14, 'Programator Full Stack', '<p class=\"MsoNormal\">Căutăm un programator Full Stack talentat și creativ pentru a se alătura echipei noastre. &Icirc;n calitate de programator Full Stack, veți avea responsabilitatea de a dezvolta și implementa soluții software complete, at&acirc;t la nivel de front-end, c&acirc;t și de back-end, pentru a satisface nevoile și cerințele clienților noștri.</p>', '<p class=\"MsoNormal\">- Dezvoltarea și implementarea aplicațiilor web și a funcționalităților acestora, at&acirc;t &icirc;n partea de front-end, c&acirc;t și &icirc;n partea de back-end</p>\r\n<p class=\"MsoNormal\">- Crearea și &icirc;ntreținerea bazelor de date și a sistemelor de gestionare a conținutului</p>\r\n<p class=\"MsoNormal\">- Integrarea aplicațiilor cu servicii web și API-uri externe</p>\r\n<p class=\"MsoNormal\">- Optimizarea performanței și scalabilității aplicațiilor</p>\r\n<p class=\"MsoNormal\">- Testarea și depanarea aplicațiilor pentru a asigura funcționalitatea și calitatea acestora</p>\r\n<p class=\"MsoNormal\">- Colaborarea str&acirc;nsă cu echipa de dezvoltare și cu clienții pentru a &icirc;nțelege cerințele și a oferi soluții adecvate</p>\r\n<p class=\"MsoNormal\">- Participarea la &icirc;nt&acirc;lniri și sesiuni de brainstorming pentru a identifica noi funcționalități și &icirc;mbunătățiri ale produselor software</p>', '<p class=\"MsoNormal\">- Experiență anterioară &icirc;n dezvoltarea de aplicații web și cunoștințe solide de programare</p>\r\n<p class=\"MsoNormal\">- Cunoștințe de limbajele de programare front-end (cum ar fi HTML, CSS, JavaScript) și back-end (cum ar fi Java, Python, PHP, C#)</p>\r\n<p class=\"MsoNormal\">- Experiență &icirc;n lucrul cu framework-uri și tehnologii specifice, precum React, Angular, Node.js, Django, Laravel, etc.</p>\r\n<p class=\"MsoNormal\">- Abilități bune de rezolvare a problemelor și de analiză a cerințelor</p>\r\n<p class=\"MsoNormal\">- Capacitatea de a lucra &icirc;n echipă și de a comunica eficient</p>\r\n<p class=\"MsoNormal\">- Orientare către rezultate și atenție la detalii</p>', '<p class=\"MsoNormal\">Diplomă de licență &icirc;n domeniul informaticii, ingineriei software sau un domeniu similar</p>', '<p class=\"MsoNormal\">- Salariu competitiv și pachet de beneficii atractiv</p>\r\n<p class=\"MsoNormal\">- Oportunități de dezvoltare profesională și avansare &icirc;n carieră</p>\r\n<p class=\"MsoNormal\">- Proiecte interesante și provocatoare &icirc;ntr-un mediu de lucru dinamic și inovativ</p>\r\n<p class=\"MsoNormal\">- Posibilitatea de a lucra cu tehnologii de ultimă generație și de a contribui la dezvoltarea de soluții software inovatoare</p>', 1, 8, 1, 4, 4, 6, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2023-05-23 19:18:49', '2023-05-24 10:37:38');
INSERT INTO `jobs` (`id`, `company_id`, `titlu`, `descriere`, `responsabilitati`, `cerinte`, `educatie`, `beneficii`, `locuri`, `job_category_id`, `job_location_id`, `job_type_id`, `job_experience_id`, `job_salary_range_id`, `map_code`, `este_promovat`, `created_at`, `updated_at`) VALUES
(45, 15, 'Inginer Sistem de Securitate IT', '<p class=\"MsoNormal\">Căutăm un inginer sistem de securitate IT experimentat și motivat pentru a se alătura echipei noastre. &Icirc;n calitate de inginer sistem de securitate IT, veți juca un rol crucial &icirc;n protejarea infrastructurii și datelor noastre &icirc;mpotriva amenințărilor cibernetice. Veți fi responsabil de proiectarea, implementarea și monitorizarea măsurilor de securitate IT pentru a asigura un mediu sigur și protejat.</p>', '<p class=\"MsoNormal\">- Evaluarea și identificarea vulnerabilităților și amenințărilor de securitate la nivelul infrastructurii IT</p>\r\n<p class=\"MsoNormal\">- Proiectarea și implementarea soluțiilor de securitate IT, inclusiv sisteme de protecție firewall, sisteme de detecție și prevenire a intruziunilor (IDS/IPS), sisteme de autentificare și autorizare, criptare și altele</p>\r\n<p class=\"MsoNormal\">- Monitorizarea continuă a sistemelor de securitate pentru detectarea și răspunsul la incidente de securitate</p>\r\n<p class=\"MsoNormal\">- Efectuarea analizei de vulnerabilitate și a testelor de penetrare pentru a evalua nivelul de securitate și a identifica eventualele puncte slabe</p>\r\n<p class=\"MsoNormal\">- Implementarea și gestionarea politicilor de securitate IT, inclusiv politici de utilizare a resurselor IT, politici de gestionare a parolelor și altele</p>\r\n<p class=\"MsoNormal\">- Colaborarea str&acirc;nsă cu echipa de IT și cu alte departamente pentru a asigura implementarea și respectarea standardelor de securitate IT</p>\r\n<p class=\"MsoNormal\">- Monitorizarea tendințelor și evoluțiilor &icirc;n domeniul securității IT și recomandarea de soluții și tehnologii noi pentru a răspunde cerințelor de securitate</p>', '<p class=\"MsoNormal\">- Experiență anterioară &icirc;n domeniul securității IT, inclusiv cunoștințe solide de rețele și sisteme de securitate</p>\r\n<p class=\"MsoNormal\">- Cunoștințe avansate &icirc;n utilizarea și configurarea sistemelor de securitate, cum ar fi firewall-uri, IDS/IPS, sisteme de autentificare și altele</p>\r\n<p class=\"MsoNormal\">- Abilități bune de analiză și rezolvare a problemelor de securitate IT</p>\r\n<p class=\"MsoNormal\">- Cunoștințe despre normele și standardele de securitate IT, cum ar fi ISO 27001, GDPR și altele</p>\r\n<p class=\"MsoNormal\">- Certificări relevante &icirc;n domeniul securității IT (de exemplu, CEH, CISSP, CISM) constituie un avantaj</p>\r\n<p class=\"MsoNormal\">- Abilități bune de comunicare și de lucru &icirc;n echipă</p>\r\n<p class=\"MsoNormal\">- Orientare către rezultate și atenție la detalii</p>', '<p class=\"MsoNormal\">Diplomă de licență &icirc;n domeniul informaticii, ingineriei software, securității IT sau un domeniu similar</p>', '<p class=\"MsoNormal\">- Salariu competitiv și pachet de beneficii atractiv</p>\r\n<p class=\"MsoNormal\">- Oportunitatea de a lucra cu tehnologii avansate și de ultimă generație &icirc;n domeniul securității IT</p>\r\n<p class=\"MsoNormal\">- Mediu de lucru dinamic și colaborativ, &icirc;ntr-o echipă de profesioniști talentați și dedicați</p>\r\n<p class=\"MsoNormal\">- Proiecte interesante și variate, cu provocări tehnice și posibilitatea de a-ți dezvolta abilitățile și cunoștințele &icirc;n domeniul securității IT</p>\r\n<p class=\"MsoNormal\">- Posibilitatea de a contribui la protejarea datelor și infrastructurii unei companii de prestigiu</p>', 2, 8, 3, 4, 4, 6, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2023-05-23 19:27:36', '2023-05-24 10:40:13'),
(46, 16, 'Director Marketing', '<p class=\"MsoNormal\">Căutăm un Director Marketing talentat și experimentat pentru a conduce departamentul nostru de marketing. &Icirc;n calitate de Director Marketing, veți fi responsabil de dezvoltarea și implementarea strategiilor de marketing care vor sprijini creșterea și promovarea afacerii noastre. Veți coordona echipa de marketing și veți colabora str&acirc;ns cu alte departamente pentru a asigura coerența și eficiența campaniilor noastre de marketing.</p>', '<p class=\"MsoNormal\">- Dezvoltarea și implementarea strategiilor de marketing, inclusiv planificarea, bugetarea și monitorizarea rezultatelor</p>\r\n<p class=\"MsoNormal\">- Identificarea și analiza piețelor țintă, a concurenței și a tendințelor de piață pentru a dezvolta mesaje și tactici eficiente de marketing</p>\r\n<p class=\"MsoNormal\">- Coordonarea și gestionarea campaniilor de marketing, inclusiv publicitate, promovare, relații publice, evenimente și marketing online</p>\r\n<p class=\"MsoNormal\">- Monitorizarea performanțelor campaniilor de marketing și analiza rezultatelor pentru a face recomandări de &icirc;mbunătățire</p>\r\n<p class=\"MsoNormal\">- Gestionarea bugetului de marketing și asigurarea utilizării eficiente a resurselor financiare</p>\r\n<p class=\"MsoNormal\">- Colaborarea str&acirc;nsă cu echipele de v&acirc;nzări, dezvoltare produs și alte departamente pentru a asigura coerența și alinierea mesajelor și acțiunilor de marketing</p>\r\n<p class=\"MsoNormal\">- Supravegherea echipelor de marketing și oferirea de direcție și suport pentru dezvoltarea profesională a membrilor echipei</p>\r\n<p class=\"MsoNormal\">- Monitorizarea și evaluarea tendințelor și inovațiilor &icirc;n domeniul marketingului și implementarea de soluții noi și creative pentru a atinge obiectivele de marketing</p>', '<p class=\"MsoNormal\">- Experiență anterioară relevanță &icirc;ntr-o poziție similară de conducere &icirc;n domeniul marketingului</p>\r\n<p class=\"MsoNormal\">- Cunoștințe solide &icirc;n domeniul strategiilor și tacticii de marketing, inclusiv &icirc;nțelegerea canalelor de marketing online și offline</p>\r\n<p class=\"MsoNormal\">- Abilități excelente de comunicare și prezentare, at&acirc;t &icirc;n scris, c&acirc;t și verbal</p>\r\n<p class=\"MsoNormal\">- Orientare către rezultate și abilitatea de a lucra sub presiune și &icirc;n termene str&acirc;nse</p>\r\n<p class=\"MsoNormal\">- Capacitatea de a gestiona bugete de marketing și de a asigura utilizarea eficientă a resurselor financiare</p>\r\n<p class=\"MsoNormal\">- Abilități bune de conducere și de coordonare a echipei, cu capacitatea de a inspira și de a motiva membrii echipei</p>\r\n<p class=\"MsoNormal\">- Orientare către inovație și tendințe &icirc;n domeniul marketingului și capacitatea de a implementa soluții noi și creative</p>', '<p class=\"MsoNormal\">Diplomă de licență &icirc;n marketing, comunicare, business sau un domeniu similar</p>', '<p class=\"MsoNormal\">Pachet salarial competitiv și beneficii suplimentare atractive</p>\r\n<p class=\"MsoNormal\">Lucru &icirc;ntr-o echipă talentată și diversă, cu o cultură de colaborare și inovație</p>\r\n<p class=\"MsoNormal\">- Oportunitatea de a contribui la strategia de marketing a companiei și de a influența direcția de dezvoltare a brandului</p>\r\n<p class=\"MsoNormal\">- Acces la resurse și tehnologii avansate pentru a susține inițiativele de marketing</p>\r\n<p class=\"MsoNormal\">- Posibilitatea de a lucra cu clienți din diverse industrii și de a construi relații de lungă durată</p>', 1, 6, 6, 2, 4, 4, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2023-05-23 19:38:20', '2023-05-24 10:36:16'),
(47, 17, 'Neurochirurg', '<p class=\"MsoNormal\">Căutăm un neurochirurg dedicat și experimentat pentru a se alătura echipei noastre medicale. &Icirc;n calitate de neurochirurg, veți fi responsabil de diagnosticarea și tratamentul afecțiunilor neurologice și neurochirurgicale. Veți lucra &icirc;ntr-un mediu de &icirc;naltă calitate și veți avea acces la cele mai recente tehnologii și echipamente medicale.</p>', '<p class=\"MsoNormal\">Diagnosticarea și tratamentul afecțiunilor neurologice și neurochirurgicale</p>\r\n<p class=\"MsoNormal\">Efectuarea intervențiilor chirurgicale complexe la nivelul sistemului nervos central și periferic</p>\r\n<p class=\"MsoNormal\">Interpretarea rezultatelor investigațiilor imagistice și a testelor diagnostice pentru a stabili un plan de tratament adecvat</p>\r\n<p class=\"MsoNormal\">- Colaborarea str&acirc;nsă cu echipa medicală multidisciplinară pentru a oferi cele mai bune soluții de tratament pentru pacienți</p>\r\n<p class=\"MsoNormal\">- Monitorizarea și &icirc;ngrijirea postoperatorie a pacienților</p>\r\n<p class=\"MsoNormal\">- Participarea la activități de cercetare și educație medicală continuă pentru a răm&acirc;ne la curent cu cele mai recente avansuri &icirc;n domeniul neurochirurgiei</p>', '<p class=\"MsoNormal\">- Absolvirea unei facultăți de medicină și obținerea diplomei de medic</p>\r\n<p class=\"MsoNormal\">- Specializare &icirc;n neurochirurgie și certificare &icirc;n domeniu</p>\r\n<p class=\"MsoNormal\">- Experiență anterioară relevanță &icirc;n neurochirurgie</p>\r\n<p class=\"MsoNormal\">- Abilități excelente de comunicare și relaționare cu pacienții și colegii de echipă</p>\r\n<p class=\"MsoNormal\">- Capacitatea de a lucra sub presiune și de a lua decizii &icirc;n situații critice</p>\r\n<p class=\"MsoNormal\">- Orientare către rezultate și atenție la detalii</p>', '<p class=\"MsoNormal\">Diplomă de medic obținută &icirc;n cadrul unei facultăți de medicină recunoscute</p>', '<p class=\"MsoNormal\">- Salariu competitiv și beneficii atractive</p>\r\n<p class=\"MsoNormal\">- Mediu de lucru profesionist și de &icirc;naltă calitate</p>\r\n<p class=\"MsoNormal\">- Oportunități de dezvoltare profesională și avansare &icirc;n carieră</p>\r\n<p class=\"MsoNormal\">- Acces la cele mai recente tehnologii și echipamente medicale</p>\r\n<p class=\"MsoNormal\">- Colaborare cu o echipă medicală experimentată și dedicată</p>\r\n<p class=\"MsoNormal\">- Participare la congrese și evenimente medicale pentru a-ți &icirc;mbogăți cunoștințele și abilitățile &icirc;n domeniu</p>', 1, 1, 1, 2, 4, 6, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 19:49:14', '2023-05-24 10:34:17'),
(48, 19, 'Agent Securitate Pentru Situatii de Urgenta', '<p class=\"MsoNormal\">Căutăm un agent de securitate dedicat și pregătit pentru a se alătura echipei noastre &icirc;n asigurarea siguranței și gestionarea situațiilor de urgență. &Icirc;n calitate de agent de securitate pentru situații de urgență, veți fi responsabil de asigurarea unui mediu sigur și de implementarea măsurilor de prevenție și intervenție &icirc;n caz de situații critice.</p>', '<p class=\"MsoNormal\">- Monitorizarea și supravegherea zonelor de securitate pentru a detecta potențiale amenințări și riscuri de securitate</p>\r\n<p class=\"MsoNormal\">- Implementarea măsurilor de securitate, inclusiv controlul accesului și verificarea identității persoanelor</p>\r\n<p class=\"MsoNormal\">- Răspuns prompt și eficient &icirc;n caz de situații de urgență, precum incendii, inundații, accidente sau alte incidente similare</p>\r\n<p class=\"MsoNormal\">- Colaborarea str&acirc;nsă cu echipa de intervenție și serviciile de urgență pentru gestionarea eficientă a situațiilor de criză</p>\r\n<p class=\"MsoNormal\">- Monitorizarea și funcționarea sistemelor de alarmă, supraveghere video și alte echipamente de securitate</p>\r\n<p class=\"MsoNormal\">- Raportarea incidentelor și elaborarea documentației necesare</p>', '<p class=\"MsoNormal\">- Experiență anterioară &icirc;n domeniul securității sau &icirc;n domenii conexe</p>\r\n<p class=\"MsoNormal\">- Cunoștințe solide despre procedurile de securitate și protocoalele de intervenție &icirc;n situații de urgență</p>\r\n<p class=\"MsoNormal\">- Abilități bune de comunicare și gestionare a situațiilor de criză</p>\r\n<p class=\"MsoNormal\">- Capacitatea de a acționa calm și eficient &icirc;n situații tensionate și stresante</p>\r\n<p class=\"MsoNormal\">- Cunoașterea legislației și regulamentelor relevante &icirc;n domeniul securității</p>\r\n<p class=\"MsoNormal\">- Certificări sau instruire suplimentară &icirc;n domeniul securității și situațiilor de urgență reprezintă un avantaj</p>', '<p class=\"MsoNormal\">Studii medii sau superioare &icirc;n domeniul securității sau &icirc;ntr-un domeniu relevant</p>', '<p class=\"MsoNormal\">- Salariu competitiv și beneficii atractive</p>\r\n<p class=\"MsoNormal\">- Mediu de lucru profesionist și de &icirc;ncredere</p>\r\n<p class=\"MsoNormal\">- Oportunități de dezvoltare profesională și avansare &icirc;n carieră</p>\r\n<p class=\"MsoNormal\">- Formare și instruire continuă &icirc;n domeniul securității și situațiilor de urgență</p>\r\n<p class=\"MsoNormal\">- Echipament și tehnologie de ultimă generație pentru &icirc;ndeplinirea responsabilităților de securitate</p>\r\n<p class=\"MsoNormal\">- Posibilitatea de a contribui la siguranța și protecția comunității și a mediului &icirc;nconjurător</p>', 1, 2, 3, 3, 1, 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 19:56:36', '2023-05-24 10:41:20'),
(49, 18, 'Inginer Control Calitate Santier', '<p class=\"MsoNormal\">Căutăm un inginer CQ dedicat și experimentat pentru a se alătura echipei noastre pe șantier. &Icirc;n calitate de inginer CQ, veți fi responsabil de controlul calității și asigurarea conformității cu specificațiile și standardele &icirc;n cadrul proiectelor de construcție. Veți juca un rol crucial &icirc;n asigurarea calității lucrărilor și &icirc;n menținerea standardelor ridicate ale companiei.</p>', '<p class=\"MsoNormal\">- Planificarea și implementarea activităților de control al calității pe șantier</p>\r\n<p class=\"MsoNormal\">- Monitorizarea și verificarea proceselor de construcție pentru a asigura conformitatea cu specificațiile și standardele de calitate</p>\r\n<p class=\"MsoNormal\">- Efectuarea inspecțiilor și testelor de calitate pe materiale, echipamente și lucrări finalizate</p>\r\n<p class=\"MsoNormal\">- Identificarea și raportarea neregulilor sau defecțiunilor &icirc;n procesul de construcție</p>\r\n<p class=\"MsoNormal\">- Colaborarea str&acirc;nsă cu echipele de proiectare și construcții pentru a rezolva problemele de calitate și a implementa &icirc;mbunătățiri</p>\r\n<p class=\"MsoNormal\">- Asigurarea documentației și evidenței corespunzătoare pentru activitățile de control al calității</p>\r\n<p class=\"MsoNormal\">- Participarea la &icirc;nt&acirc;lniri și revizuiri periodice ale calității pentru a evalua performanța și a identifica oportunități de &icirc;mbunătățire</p>', '<p class=\"MsoNormal\">- Absolvirea unei facultăți de inginerie sau a unui domeniu relevant</p>\r\n<p class=\"MsoNormal\">- Experiență anterioară &icirc;n controlul calității &icirc;n domeniul construcțiilor sau &icirc;ntr-un domeniu similar</p>\r\n<p class=\"MsoNormal\">- Cunoștințe solide despre standardele și regulamentele de calitate &icirc;n construcții</p>\r\n<p class=\"MsoNormal\">- Abilități excelente de analiză și rezolvare a problemelor</p>\r\n<p class=\"MsoNormal\">- Cunoștințe de utilizare a instrumentelor și echipamentelor de măsurare și testare</p>\r\n<p class=\"MsoNormal\">- Capacitatea de a lucra &icirc;n echipă și de a comunica eficient cu toate nivelurile de personal</p>', '<p class=\"MsoNormal\">Diplomă de licență &icirc;n inginerie sau domeniu relevant</p>', '<p class=\"MsoNormal\">- Salariu competitiv și beneficii atractive</p>\r\n<p class=\"MsoNormal\">- Mediu de lucru dinamic și profesionist</p>\r\n<p class=\"MsoNormal\">- Oportunități de dezvoltare profesională și avansare &icirc;n carieră</p>\r\n<p class=\"MsoNormal\">- Posibilitatea de a lucra pe proiecte de construcții de amploare și impact</p>\r\n<p class=\"MsoNormal\">- Colaborare cu o echipă experimentată și dedicată &icirc;n domeniul construcțiilor</p>\r\n<p class=\"MsoNormal\">- Participare la proiecte inovatoare și complexe care contribuie la dezvoltarea infrastructurii</p>', 1, 3, 9, 2, 4, 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 20:08:55', '2023-05-24 10:31:55'),
(50, 18, 'Responsabil Laborator Chimic', '<p class=\"MsoNormal\">Căutăm un Responsabil Laborator Chimic dedicat și experimentat pentru a se alătura echipei noastre. &Icirc;n calitate de Responsabil Laborator Chimic, veți fi responsabil de coordonarea și supravegherea activităților desfășurate &icirc;n laboratorul chimic, asigur&acirc;nd respectarea standardelor de calitate și siguranță.</p>', '<p class=\"MsoNormal\">- Supervizarea și coordonarea activităților desfășurate &icirc;n laboratorul chimic</p>\r\n<p class=\"MsoNormal\">- Planificarea și organizarea analizelor și testelor chimice necesare</p>\r\n<p class=\"MsoNormal\">- Colectarea, pregătirea și analiza probelor chimice, respect&acirc;nd metodele și procedurile stabilite</p>\r\n<p class=\"MsoNormal\">- Interpretarea rezultatelor obținute și elaborarea rapoartelor și documentației corespunzătoare</p>\r\n<p class=\"MsoNormal\">- Asigurarea respectării normelor de siguranță și protecție &icirc;n laborator</p>\r\n<p class=\"MsoNormal\">- &Icirc;ntreținerea și calibrarea echipamentelor de laborator</p>\r\n<p class=\"MsoNormal\">- Colaborarea str&acirc;nsă cu echipa de cercetare și dezvoltare pentru a susține dezvoltarea produselor și &icirc;mbunătățirea proceselor chimice</p>', '<p class=\"MsoNormal\">- Studii superioare &icirc;n domeniul chimiei sau al chimiei aplicate</p>\r\n<p class=\"MsoNormal\">- Experiență anterioară &icirc;ntr-un rol similar &icirc;ntr-un laborator chimic</p>\r\n<p class=\"MsoNormal\">- Cunoștințe solide despre metodele și tehnicile de analiză chimică</p>\r\n<p class=\"MsoNormal\">- Familiarizat cu normele și reglementările de siguranță și protecție &icirc;n laborator</p>\r\n<p class=\"MsoNormal\">- Abilități bune de organizare și gestionare a timpului</p>\r\n<p class=\"MsoNormal\">- Capacitatea de a lucra cu precizie și atenție la detalii</p>\r\n<p class=\"MsoNormal\">- Abilități de comunicare și colaborare eficientă &icirc;n echipă</p>', '<p class=\"MsoNormal\">Diplomă de licență &icirc;n chimie sau domeniu relevant</p>', '<p class=\"MsoNormal\">- Salariu competitiv și pachet de beneficii atractiv</p>\r\n<p class=\"MsoNormal\">- Mediu de lucru profesionist și echipament de laborator modern</p>\r\n<p class=\"MsoNormal\">- Oportunități de dezvoltare profesională și avansare &icirc;n carieră</p>\r\n<p class=\"MsoNormal\">- Participarea la proiecte de cercetare și inovație &icirc;n domeniul chimiei</p>\r\n<p class=\"MsoNormal\">- Colaborare cu o echipă de profesioniști din domeniul chimiei</p>\r\n<p class=\"MsoNormal\">- Posibilitatea de a contribui la dezvoltarea produselor chimice și a proceselor de laborator</p>', 1, 13, 9, 3, 1, 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11392.425572706517!2d26.113147449749928!3d44.45148956214616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1f8be266fb881%3A0x7a3cbd9787d57288!2sUniversitatea%20Tehnic%C4%83%20de%20Construc%C8%9Bii%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1684858388674!5m2!1sro!2sro\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 0, '2023-05-23 20:13:56', '2023-05-24 10:32:24'),
(65, 7, 'Test 3', '<p>Test</p>', NULL, NULL, NULL, NULL, 1, 12, 6, 2, 1, 1, NULL, 0, '2023-06-09 23:59:13', '2023-06-09 23:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume_categorie` text NOT NULL,
  `simbol_categorie` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `nume_categorie`, `simbol_categorie`, `created_at`, `updated_at`) VALUES
(1, 'Medical', 'fas fa-stethoscope', '2023-03-29 11:00:50', '2023-03-29 11:00:50'),
(2, 'Securitate', 'fas fa-lock', '2023-03-29 11:02:24', '2023-05-23 16:58:11'),
(3, 'Constructie', 'fas fa-landmark', '2023-03-29 12:57:22', '2023-05-23 17:04:11'),
(4, 'Asigurari', 'fas fa-newspaper', '2023-03-29 12:58:37', '2023-05-23 19:04:59'),
(5, 'Vanzari', 'fas fa-shopping-bag', '2023-03-29 12:59:17', '2023-05-23 18:28:34'),
(6, 'Marketing', 'fas fa-bullhorn', '2023-03-29 13:00:02', '2023-03-29 13:00:02'),
(7, 'Relatii Clienti', 'fas fa-street-view', '2023-03-29 13:00:40', '2023-05-23 16:58:37'),
(8, 'Programare', 'fas fa-laptop-code', '2023-04-01 10:29:10', '2023-05-23 16:57:26'),
(9, 'Auto', 'fas fa-car', '2023-04-02 09:25:52', '2023-05-23 16:57:52'),
(12, 'Alimentatie', 'fas fa-utensils', '2023-04-02 09:42:36', '2023-05-23 17:29:51'),
(13, 'Chimie', 'fas fa-atom', '2023-04-02 09:42:45', '2023-05-23 20:05:58'),
(15, 'Finante', 'fas fa-money-bill', '2023-05-23 19:10:18', '2023-05-23 19:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `job_experiences`
--

CREATE TABLE `job_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume_experienta` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_experiences`
--

INSERT INTO `job_experiences` (`id`, `nume_experienta`, `created_at`, `updated_at`) VALUES
(1, 'Fara Experienta', '2023-05-06 09:05:20', '2023-05-06 09:05:20'),
(2, '1-2 Ani', '2023-05-06 09:05:30', '2023-05-06 09:05:30'),
(3, '3-5 Ani', '2023-05-06 09:05:42', '2023-05-06 09:05:42'),
(4, '5+ Ani', '2023-05-06 09:05:51', '2023-05-06 09:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `job_locations`
--

CREATE TABLE `job_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume_locatie` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_locations`
--

INSERT INTO `job_locations` (`id`, `nume_locatie`, `created_at`, `updated_at`) VALUES
(1, 'Romania', '2023-05-06 07:07:30', '2023-05-06 07:07:30'),
(2, 'Germania', '2023-05-06 07:07:40', '2023-05-06 07:07:40'),
(3, 'Marea Britanie', '2023-05-06 07:08:00', '2023-05-06 07:08:00'),
(4, 'Finlanda', '2023-05-06 07:08:10', '2023-05-06 07:08:10'),
(5, 'Spania', '2023-05-06 07:11:13', '2023-05-06 07:11:13'),
(6, 'Australia', '2023-05-06 07:11:21', '2023-05-06 07:11:21'),
(7, 'Japonia', '2023-05-06 07:11:30', '2023-05-23 17:44:17'),
(9, 'Franta', '2023-05-22 06:39:39', '2023-05-23 20:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `job_salary_ranges`
--

CREATE TABLE `job_salary_ranges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sume` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_salary_ranges`
--

INSERT INTO `job_salary_ranges` (`id`, `sume`, `created_at`, `updated_at`) VALUES
(1, 'Sub 500 €', '2023-05-06 10:42:18', '2023-05-06 10:51:20'),
(2, '500€ - 1000€', '2023-05-06 10:42:48', '2023-05-06 10:51:58'),
(3, '1000 € - 2000 €', '2023-05-06 10:46:06', '2023-05-06 10:46:34'),
(4, '2000 € - 3000 €', '2023-05-06 10:57:01', '2023-05-06 10:57:01'),
(5, '4000 €- 5000 €', '2023-05-06 10:57:21', '2023-05-06 10:58:09'),
(6, '+ 5000 €', '2023-05-06 10:57:36', '2023-05-06 11:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume_tip` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `nume_tip`, `created_at`, `updated_at`) VALUES
(1, 'Internship', '2023-05-06 08:19:29', '2023-05-06 08:19:29'),
(2, 'Full Time', '2023-05-06 08:19:45', '2023-05-06 08:19:45'),
(3, 'Part Time', '2023-05-06 08:19:54', '2023-05-06 08:19:54'),
(4, 'Proiect/Sezonier', '2023-05-06 08:25:09', '2023-05-06 08:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_24_131729_create_admins_table', 1),
(8, '2023_03_28_173914_create_pagina_acasa_items_table', 2),
(10, '2023_03_29_122625_create_job_categories_table', 3),
(12, '2023_04_02_131014_create_alegere_items_table', 4),
(13, '2023_04_17_130159_create_testimonials_table', 5),
(14, '2023_04_18_171418_create_articles_table', 6),
(15, '2023_04_19_133951_create_pagina_blog_items_table', 7),
(16, '2023_04_20_071543_create_pagina_categorii_items_table', 8),
(17, '2023_04_20_094143_create_packages_table', 9),
(18, '2023_04_20_145728_create_pagina_pachete_items_table', 10),
(19, '2023_04_21_102443_create_pagina_diverse_items_table', 11),
(20, '2023_04_21_142912_create_companies_table', 12),
(21, '2023_04_24_103533_create_candidates_table', 13),
(22, '2023_05_03_104208_create_orders_table', 14),
(25, '2023_05_06_093318_create_job_locations_table', 15),
(26, '2023_05_06_105343_create_job_types_table', 16),
(27, '2023_05_06_114752_create_job_experiences_table', 17),
(28, '2023_05_06_131530_create_job_salary_ranges_table', 18),
(29, '2023_05_06_144109_create_companie_locations_table', 19),
(30, '2023_05_06_162714_create_companie_domains_table', 20),
(31, '2023_05_06_165553_create_companie_sizes_table', 21),
(32, '2023_05_09_133135_create_companie_photos_table', 22),
(33, '2023_05_10_120035_create_jobs_table', 23),
(34, '2023_05_21_095926_create_candidate_education_table', 24),
(35, '2023_05_21_132038_create_candidate_skills_table', 25),
(36, '2023_05_21_144656_create_candidate_experiences_table', 26),
(37, '2023_05_21_153130_create_candidate_documents_table', 27),
(38, '2023_05_24_191749_create_candidat_bookmarks_table', 28),
(39, '2023_05_25_094031_create_candidat_applications_table', 29),
(40, '2023_05_30_105307_create_subscribers_table', 30),
(41, '2023_05_31_104753_create_settings_table', 31);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `numar_comanda` varchar(255) NOT NULL,
  `suma_platita` varchar(255) NOT NULL,
  `data_start` varchar(255) NOT NULL,
  `data_expirare` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `company_id`, `package_id`, `numar_comanda`, `suma_platita`, `data_start`, `data_expirare`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 2, '1683123666', '50', '03-05-2023', '01-08-2023', 0, '2023-05-03 11:21:06', '2023-05-20 07:12:32'),
(4, 1, 3, '1683124239', '100', '03-05-2023', '27-04-2024', 0, '2023-05-03 11:30:39', '2023-05-20 07:12:32'),
(9, 1, 2, '1684577552', '50', '20-05-2023', '18-08-2023', 1, '2023-05-20 07:12:32', '2023-05-20 07:12:32'),
(10, 8, 1, '1684857767', '1', '23-05-2023', '22-06-2023', 1, '2023-05-23 16:02:47', '2023-05-23 16:02:47'),
(11, 9, 2, '1684858118', '1', '23-05-2023', '21-08-2023', 0, '2023-05-23 16:08:38', '2023-05-23 17:45:11'),
(12, 10, 3, '1684858424', '1', '23-05-2023', '17-05-2024', 1, '2023-05-23 16:13:44', '2023-05-23 16:13:44'),
(13, 11, 1, '1684858691', '1', '23-05-2023', '22-06-2023', 0, '2023-05-23 16:18:11', '2023-05-31 12:05:35'),
(14, 12, 1, '1684859005', '1', '23-05-2023', '22-06-2023', 1, '2023-05-23 16:23:25', '2023-05-23 16:23:25'),
(15, 13, 1, '1684859078', '1', '23-05-2023', '22-06-2023', 1, '2023-05-23 16:24:38', '2023-05-23 16:24:38'),
(16, 14, 2, '1684859307', '1', '23-05-2023', '21-08-2023', 1, '2023-05-23 16:28:27', '2023-05-23 16:28:27'),
(17, 15, 2, '1684859791', '1', '23-05-2023', '21-08-2023', 1, '2023-05-23 16:36:31', '2023-05-23 16:36:31'),
(18, 16, 3, '1684860092', '1', '23-05-2023', '17-05-2024', 0, '2023-05-23 16:41:32', '2023-05-25 15:43:20'),
(19, 17, 1, '1684860433', '1', '23-05-2023', '22-06-2023', 1, '2023-05-23 16:47:13', '2023-05-23 16:47:13'),
(20, 19, 1, '1684860759', '1', '23-05-2023', '22-06-2023', 0, '2023-05-23 16:52:39', '2023-05-29 08:33:18'),
(21, 18, 1, '1684861221', '1', '23-05-2023', '22-06-2023', 0, '2023-05-23 17:00:21', '2023-05-23 19:58:25'),
(22, 7, 1, '1684862217', '1', '23-05-2023', '22-06-2023', 0, '2023-05-23 17:16:57', '2023-06-09 23:20:05'),
(23, 9, 2, '1684863911', '1', '23-05-2023', '21-08-2023', 1, '2023-05-23 17:45:11', '2023-05-23 17:45:11'),
(24, 11, 3, '1684867441', '1', '23-05-2023', '17-05-2023', 0, '2023-05-23 18:44:01', '2023-05-31 12:05:35'),
(25, 18, 2, '1684871905', '1', '23-05-2023', '31-06-2023', 1, '2023-05-23 19:58:25', '2023-05-23 19:58:25'),
(26, 19, 2, '1684938660', '1', '24-05-2023', '22-08-2023', 0, '2023-05-24 14:31:00', '2023-05-29 08:33:18'),
(27, 19, 3, '1684939233', '1', '24-05-2023', '18-05-2024', 0, '2023-05-24 14:40:33', '2023-05-29 08:33:18'),
(28, 7, 2, '1685029338', '1', '25-05-2023', '23-08-2023', 0, '2023-05-25 15:42:18', '2023-06-09 23:20:05'),
(29, 16, 1, '1685029400', '1', '25-05-2023', '24-06-2023', 1, '2023-05-25 15:43:20', '2023-05-25 15:43:20'),
(30, 19, 1, '1685283772', '25', '28-05-2023', '27-06-2023', 0, '2023-05-28 14:22:52', '2023-05-29 08:33:18'),
(31, 19, 2, '1685349198', '50', '29-05-2023', '28-08-2023', 1, '2023-05-29 08:33:18', '2023-05-29 08:33:18'),
(32, 11, 2, '1685534735', '50', '31-05-2023', '29-08-2023', 1, '2023-05-31 12:05:35', '2023-05-31 12:05:35'),
(36, 7, 3, '1686352805', '100', '10-06-2023', '04-06-2024', 1, '2023-06-09 23:20:05', '2023-06-09 23:20:05'),
(37, 23, 2, '1686519353', '50', '12-06-2023', '10-09-2023', 1, '2023-06-11 21:35:53', '2023-06-11 21:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume_pachet` varchar(100) NOT NULL,
  `pret_pachet` smallint(4) NOT NULL,
  `durata_pachet` smallint(4) NOT NULL,
  `numar_permis_joburi` tinyint(4) NOT NULL,
  `numar_permis_joburi_promovate` tinyint(4) NOT NULL,
  `numar_permis_poze` tinyint(4) NOT NULL,
  `numar_permis_videoclipuri` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `nume_pachet`, `pret_pachet`, `durata_pachet`, `numar_permis_joburi`, `numar_permis_joburi_promovate`, `numar_permis_poze`, `numar_permis_videoclipuri`, `created_at`, `updated_at`) VALUES
(1, 'Pachet Standard', 25, 30, 2, 0, 0, 0, '2023-04-20 08:21:27', '2023-05-25 21:04:20'),
(2, 'Pachet Ultra', 50, 90, 3, 2, 3, 1, '2023-04-20 08:25:17', '2023-05-25 21:04:25'),
(3, 'Pachet Pro', 100, 360, -1, -1, 6, 3, '2023-04-20 08:28:18', '2023-05-25 21:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `pagina_acasa_items`
--

CREATE TABLE `pagina_acasa_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titlu` text NOT NULL,
  `text` text DEFAULT NULL,
  `titlu_job` text NOT NULL,
  `categorie_job` text NOT NULL,
  `locatie_job` text NOT NULL,
  `text_buton` text NOT NULL,
  `fundal` text NOT NULL,
  `titlu_sectiune_categorie` text NOT NULL,
  `text_sectiune_categorie` text DEFAULT NULL,
  `stare_sectiune_categorie` text NOT NULL,
  `sectiune_alegere_titlu` text NOT NULL,
  `sectiune_alegere_text` text DEFAULT NULL,
  `sectiune_alegere_fundal` text NOT NULL,
  `sectiune_alegere_stare` text NOT NULL,
  `sectiune_recomandari_titlu` text NOT NULL,
  `sectiune_recomandari_text` text DEFAULT NULL,
  `sectiune_recomandari_stare` text NOT NULL,
  `sectiune_multumiri_titlu` text NOT NULL,
  `sectiune_multumiri_fundal` text NOT NULL,
  `sectiune_multumiri_stare` text NOT NULL,
  `sectiune_articole_titlu` text NOT NULL,
  `sectiune_articole_text` text DEFAULT NULL,
  `sectiune_articole_stare` text NOT NULL,
  `seo_titlu` text DEFAULT NULL,
  `seo_descriere` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagina_acasa_items`
--

INSERT INTO `pagina_acasa_items` (`id`, `titlu`, `text`, `titlu_job`, `categorie_job`, `locatie_job`, `text_buton`, `fundal`, `titlu_sectiune_categorie`, `text_sectiune_categorie`, `stare_sectiune_categorie`, `sectiune_alegere_titlu`, `sectiune_alegere_text`, `sectiune_alegere_fundal`, `sectiune_alegere_stare`, `sectiune_recomandari_titlu`, `sectiune_recomandari_text`, `sectiune_recomandari_stare`, `sectiune_multumiri_titlu`, `sectiune_multumiri_fundal`, `sectiune_multumiri_stare`, `sectiune_articole_titlu`, `sectiune_articole_text`, `sectiune_articole_stare`, `seo_titlu`, `seo_descriere`, `created_at`, `updated_at`) VALUES
(1, 'Gaseste Jobul Perfect Pentru Tine', 'Cauta joburi in orice domeniu si in orice tara, toate la un click distanta, cu functia noastra de cautare.', 'Cuvinte Cheie', 'Categorie Job', 'Locatie Job', 'Cauta Jobul Perfect', 'fundal_acasa.jpg', 'Domenii Joburi', 'Vezi domeniile cu cele mai multe oferte de angajare', 'Vizibila', 'De ce sa ne alegi pe noi ?', 'Folosim sisteme si algoritmi de ultima generatie pentrua a usura cautarea ta', 'sectiune_alegere_fundal.jpg', 'Vizibila', 'Cele mai populare anunturi', NULL, 'Vizibila', 'Comentariile Utilizatorilor Nostrii Multumiti', 'sectiune_multumiri_fundal.jpg', 'Invizibila', 'Cele Mai Noi Articole Despre Dezvoltarea Profesionala', 'Articolele noastre ajută la dezvoltarea atât pe plan profesional, cât și pe plan personal, îmbunătățind astfel toate aspectele vieții tale', 'Vizibila', 'JobWise - Lucrare Licenta', 'Lucrare Licenta', NULL, '2023-05-29 08:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `pagina_blog_items`
--

CREATE TABLE `pagina_blog_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titlu` text NOT NULL,
  `subtitlu` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagina_blog_items`
--

INSERT INTO `pagina_blog_items` (`id`, `titlu`, `subtitlu`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Cariera', 'Cariera', 'Cariera', NULL, '2023-05-25 21:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `pagina_categorii_items`
--

CREATE TABLE `pagina_categorii_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titlu` text NOT NULL,
  `SEO_titlu` text DEFAULT NULL,
  `SEO_descriere` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagina_categorii_items`
--

INSERT INTO `pagina_categorii_items` (`id`, `titlu`, `SEO_titlu`, `SEO_descriere`, `created_at`, `updated_at`) VALUES
(1, 'Domenii Joburi', 'Domenii Joburi', 'Categorii Job-uri Test', NULL, '2023-06-08 14:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `pagina_diverse_items`
--

CREATE TABLE `pagina_diverse_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titlu_logare` text NOT NULL,
  `seo_titlu_logare` text DEFAULT NULL,
  `seo_descriere_logare` text DEFAULT NULL,
  `titlu_inregistrare` text NOT NULL,
  `seo_titlu_inregistrare` text DEFAULT NULL,
  `seo_descriere_inregistrare` text DEFAULT NULL,
  `titlu_parola_uitata` text NOT NULL,
  `seo_titlu_parola_uitata` text DEFAULT NULL,
  `seo_descriere_parola_uitata` text DEFAULT NULL,
  `titlu_pagina_joburi` text NOT NULL,
  `seo_titlu_pagina_joburi` text DEFAULT NULL,
  `seo_descriere_pagina_joburi` text DEFAULT NULL,
  `titlu_pagina_companii` text NOT NULL,
  `seo_titlu_pagina_companii` text DEFAULT NULL,
  `seo_descriere_pagina_companii` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagina_diverse_items`
--

INSERT INTO `pagina_diverse_items` (`id`, `titlu_logare`, `seo_titlu_logare`, `seo_descriere_logare`, `titlu_inregistrare`, `seo_titlu_inregistrare`, `seo_descriere_inregistrare`, `titlu_parola_uitata`, `seo_titlu_parola_uitata`, `seo_descriere_parola_uitata`, `titlu_pagina_joburi`, `seo_titlu_pagina_joburi`, `seo_descriere_pagina_joburi`, `titlu_pagina_companii`, `seo_titlu_pagina_companii`, `seo_descriere_pagina_companii`, `created_at`, `updated_at`) VALUES
(1, 'Login', 'Login', 'Login 1', 'Crearea Contului', 'Inregistrare 1', 'Inregistrare 1', 'Parola Uitata', 'Parola Uitata', 'Parola Uitata', 'Anunturi Joburi', 'Joburi', 'Descriere pagina locuri-de-munca', 'Companii', 'Companii', 'Descriere pagina companii', NULL, '2023-06-09 19:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `pagina_pachete_items`
--

CREATE TABLE `pagina_pachete_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titlu` text NOT NULL,
  `SEO_titlu` text DEFAULT NULL,
  `SEO_descriere` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagina_pachete_items`
--

INSERT INTO `pagina_pachete_items` (`id`, `titlu`, `SEO_titlu`, `SEO_descriere`, `created_at`, `updated_at`) VALUES
(1, 'Pachete Companii', 'Pachete Companii', 'Pachete Companii', NULL, '2023-04-20 12:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_locatie` text DEFAULT NULL,
  `footer_telefon` text DEFAULT NULL,
  `footer_email` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `footer_locatie`, `footer_telefon`, `footer_email`, `facebook`, `twitter`, `linkedin`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'Bulevardul Lacul Tei 124, București', '+407721091234', 'jobwisecontact@gmail.com', 'https://www.facebook.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'https://www.twitter.com/UniversitateaTehnicaDeConstructiiBucuresti/', 'https://ro.linkedin.com/school/utcbro/', 'https://www.instagram.com/UniversitateaTehnicaDeConstructiiBucuresti/', NULL, '2023-05-31 09:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` text NOT NULL,
  `token` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `token`, `status`, `created_at`, `updated_at`) VALUES
(3, 'test@gmail.com', '', 1, '2023-05-30 09:13:03', '2023-05-30 09:13:12'),
(4, 'testfinal@mail.com', '', 1, '2023-05-30 09:25:10', '2023-05-30 09:25:27'),
(5, 'paul.mihailaandres@gmail.com', '', 1, '2023-06-11 15:07:31', '2023-06-11 15:50:48'),
(6, 'paul.mihailaandres@gmail.com', '3b3b41d00eed1d2e4aff11c66039124288c222c35c5efd557762367c68435373', 0, '2023-06-11 15:07:36', '2023-06-11 15:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nume` text NOT NULL,
  `pozitie` text NOT NULL,
  `comentariu` text NOT NULL,
  `poza` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `nume`, `pozitie`, `comentariu`, `poza`, `created_at`, `updated_at`) VALUES
(1, 'Stefan Ionita', 'CEO ABC Constructii', 'Cu ajutorul sistemelor oferite de platforma JobWise am reusit sa gasesc oamenii potriviti pentru noul nostru proiect de dezvoltare', 'recomandare_1685046898.jpg', '2023-04-18 11:01:14', '2023-05-25 20:40:38'),
(2, 'Robert Pana', 'Student Universitatea Politehnica din Bucuresti', 'Platforma JobWise face gasirea jobului potrivit facil chiar si pentru persoanele fara experienta ca mine. Multumesc pentru oportunitatea oferita!', 'recomandare_1685047062.jpg', '2023-04-18 11:01:43', '2023-05-25 20:44:02'),
(3, 'Andreea Rosu', 'Project Manager Microsoft', 'Facilitatile oferite de aceasta platforma sunt indispensabile pentru procesul nostru de recrutare.', 'recomandare_1685047102.jpg', '2023-04-18 11:54:30', '2023-05-25 20:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alegere_items`
--
ALTER TABLE `alegere_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_documents`
--
ALTER TABLE `candidate_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_education`
--
ALTER TABLE `candidate_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_experiences`
--
ALTER TABLE `candidate_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_skills`
--
ALTER TABLE `candidate_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidat_applications`
--
ALTER TABLE `candidat_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidat_bookmarks`
--
ALTER TABLE `candidat_bookmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companie_domains`
--
ALTER TABLE `companie_domains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companie_locations`
--
ALTER TABLE `companie_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companie_photos`
--
ALTER TABLE `companie_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companie_sizes`
--
ALTER TABLE `companie_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_experiences`
--
ALTER TABLE `job_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_locations`
--
ALTER TABLE `job_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_salary_ranges`
--
ALTER TABLE `job_salary_ranges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_acasa_items`
--
ALTER TABLE `pagina_acasa_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_blog_items`
--
ALTER TABLE `pagina_blog_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_categorii_items`
--
ALTER TABLE `pagina_categorii_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_diverse_items`
--
ALTER TABLE `pagina_diverse_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_pachete_items`
--
ALTER TABLE `pagina_pachete_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alegere_items`
--
ALTER TABLE `alegere_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `candidate_documents`
--
ALTER TABLE `candidate_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `candidate_education`
--
ALTER TABLE `candidate_education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `candidate_experiences`
--
ALTER TABLE `candidate_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `candidate_skills`
--
ALTER TABLE `candidate_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `candidat_applications`
--
ALTER TABLE `candidat_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `candidat_bookmarks`
--
ALTER TABLE `candidat_bookmarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `companie_domains`
--
ALTER TABLE `companie_domains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `companie_locations`
--
ALTER TABLE `companie_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `companie_photos`
--
ALTER TABLE `companie_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `companie_sizes`
--
ALTER TABLE `companie_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `job_experiences`
--
ALTER TABLE `job_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_locations`
--
ALTER TABLE `job_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_salary_ranges`
--
ALTER TABLE `job_salary_ranges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pagina_acasa_items`
--
ALTER TABLE `pagina_acasa_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pagina_blog_items`
--
ALTER TABLE `pagina_blog_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pagina_categorii_items`
--
ALTER TABLE `pagina_categorii_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pagina_diverse_items`
--
ALTER TABLE `pagina_diverse_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pagina_pachete_items`
--
ALTER TABLE `pagina_pachete_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
