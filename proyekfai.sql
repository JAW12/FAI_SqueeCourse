-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 03:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekfai`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Laravel', 'laravel', '2020-11-27 23:56:26', '2020-11-27 23:56:26', NULL),
(2, 'Text Editor', 'text-editor', '2020-11-27 23:56:26', '2020-11-27 23:56:26', NULL),
(3, 'CSS', 'css', '2020-11-27 23:56:27', '2020-11-27 23:56:27', NULL),
(4, 'JS', 'js', '2020-11-27 23:56:27', '2020-11-27 23:56:27', NULL),
(5, 'PHP', 'php', '2020-11-27 23:56:27', '2020-11-27 23:56:27', NULL),
(6, 'C#', 'c', '2020-11-27 23:56:27', '2020-11-27 23:56:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `row_id_episode` bigint(20) UNSIGNED NOT NULL,
  `isi_komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `row_id_user`, `row_id_episode`, `isi_komentar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 28, 'Qui error sit praesentium labore. Blanditiis dolor quo minima nam vitae quia commodi omnis. Aut veniam harum tempora est. Eius natus voluptas tempora cumque aut corporis quidem.\n\nImpedit delectus facere ab voluptas ut. Omnis expedita nemo sit perspiciatis iure.\n\nEum accusantium quas aut consectetur ipsum ut possimus. Laborum voluptatem dolorem adipisci enim velit enim repudiandae. Vel id rerum ratione voluptatem voluptatum. Sed quis aspernatur quasi accusantium aliquam in sit.\n\nSint sapiente quia ad non mollitia quod. Facere velit consectetur vel aut distinctio omnis. Odit nesciunt et possimus illo est tempora. Fugit distinctio ea eum dignissimos.\n\nEos dignissimos voluptas architecto inventore neque amet ipsam. Nemo et qui dolores consequatur quia qui facere officiis. Architecto itaque architecto est eligendi id et quis aut.', '2020-11-27 23:56:46', '2020-11-27 23:56:46', NULL),
(2, 1, 26, 'Sit ex dolores sit fugit. Nam in ullam vero illo laboriosam et. Facilis ab sunt nihil iste. Unde inventore dicta cum adipisci fuga commodi nesciunt.\n\nLabore veritatis pariatur cum saepe expedita consectetur. Voluptas vitae veritatis aut mollitia. Inventore veniam et pariatur qui reprehenderit.\n\nMagnam distinctio omnis magnam neque nihil. Iste labore temporibus aut aut. Harum architecto quasi est. Soluta eligendi ea nam qui autem facere.\n\nProvident magni eum quidem labore. Eos similique quia vitae quis rerum sint. Voluptas voluptas dicta reiciendis. Incidunt ad consequatur qui sint quibusdam incidunt.\n\nQuae praesentium ducimus consequatur iure minus maiores assumenda occaecati. Facere consequatur provident vel amet et. Qui eius voluptas sit corrupti omnis ut deleniti. Deserunt quos aut ut est quisquam.', '2020-11-27 23:56:47', '2020-11-27 23:56:47', NULL),
(3, 1, 12, 'Perspiciatis exercitationem sed aut odio ut vel earum vel. Minus deserunt consequuntur minus possimus.\n\nPraesentium fugit rerum repudiandae id nisi. Consequatur itaque quaerat et adipisci et ea. Voluptatem at debitis molestias odit officiis dolor. Maxime soluta alias nostrum error. Earum numquam ut earum consequatur.\n\nExcepturi enim qui possimus aut nulla quis. Necessitatibus quasi voluptatibus quidem omnis. Et alias nobis odit deleniti sed nisi. Quia ut eum ipsum temporibus ullam hic aperiam.\n\nQuo aut quidem voluptate dolorem. Error ut et architecto quaerat ullam vel rerum repudiandae. Temporibus quia tempore in.\n\nEsse est ut qui quis illo. Aspernatur laboriosam esse a deleniti vel. Perspiciatis nulla voluptas eaque.', '2020-11-27 23:56:48', '2020-11-27 23:56:48', NULL),
(4, 1, 1, 'Ea beatae enim aut minus neque aut quaerat. Provident sed corporis distinctio minus a rem. Iure mollitia qui quia accusantium quasi quia. Non culpa architecto aliquam dolorem odit dolor.\n\nArchitecto iusto veniam voluptatem ut. Eligendi eveniet possimus voluptatem est omnis magnam. Sunt tenetur voluptates harum nostrum. Quibusdam voluptas perferendis dolor reprehenderit enim dolore assumenda.\n\nIpsum et consequatur libero. Ut incidunt rerum odio consequatur consequatur omnis ratione deleniti. Occaecati illo deleniti iure dolores consequatur rerum. Rerum consequatur quasi est quia voluptatem error quia.\n\nQuasi ipsa sapiente qui atque accusantium. Debitis magnam sit magni sit maxime minima magnam aliquam. Molestias incidunt ratione qui natus saepe distinctio.\n\nMaxime omnis facilis quis quam beatae. Officia tempora voluptatibus quaerat itaque saepe est. Perferendis maxime ipsa eveniet iusto et. Voluptas rerum amet aspernatur assumenda magnam vel incidunt.', '2020-11-27 23:56:49', '2020-11-27 23:56:49', NULL),
(5, 1, 13, 'Qui aut consequatur quidem eius alias. Ullam enim dolorem inventore corporis. Eligendi dolorem molestiae laudantium consequuntur reprehenderit voluptates excepturi. Voluptatibus sit ut molestiae voluptatem eum consequatur quam quia. Sequi rerum commodi facilis accusamus libero debitis.\n\nId qui perferendis ut placeat. Ut dignissimos necessitatibus fugit aperiam voluptas soluta. Dolore sunt quisquam alias adipisci nesciunt. Rerum explicabo excepturi dolore vitae esse est.\n\nReiciendis nesciunt pariatur vel aliquam labore nisi quae. Totam repellendus et aut rerum est modi. Eius unde tenetur quo recusandae molestiae non.\n\nAdipisci labore fuga odio molestiae tempora. Aut cumque et sint ut in occaecati. Dolores explicabo error voluptatem aut. Et sunt magnam numquam itaque. Sit qui cupiditate laudantium ex et nulla sint.\n\nQui pariatur in a deleniti consectetur sit. Enim quia in vel et voluptatem. Cupiditate veritatis deleniti similique corrupti ad debitis.', '2020-11-27 23:56:49', '2020-11-27 23:56:49', NULL),
(6, 2, 29, 'Modi et ut neque suscipit asperiores. Dolore quia necessitatibus exercitationem excepturi nulla. Odio in est eum enim.\n\nImpedit eaque consectetur praesentium autem nobis velit. Et perspiciatis unde corporis. Quo voluptatum et quia autem quia inventore eveniet.\n\nAut laboriosam veniam ea omnis eum quod est. Quia earum maxime officiis reprehenderit qui eum debitis. Suscipit ab officiis nulla aut voluptas nemo hic.\n\nEt ipsum illo qui est voluptate enim. Nostrum placeat quo et temporibus. Voluptas perferendis sit aut expedita exercitationem. Dignissimos ea consectetur sit eius neque quibusdam.\n\nQui ut dolore delectus tenetur dolorem consequatur. Et velit adipisci corrupti harum alias. Labore expedita consequatur laborum qui omnis hic rerum aut.', '2020-11-27 23:56:50', '2020-11-27 23:56:50', NULL),
(7, 1, 9, 'Praesentium nam eligendi delectus aliquam veniam. Eligendi sequi sed est harum ab nostrum reprehenderit voluptas. Unde nihil nesciunt delectus saepe sed consequatur. Et nemo aut est sequi non nobis et asperiores.\n\nOfficiis voluptates autem similique. Et qui officia hic et. Maxime incidunt et tenetur velit laboriosam omnis ipsam. At assumenda eius et rerum. Et quibusdam quasi sint ratione et voluptatum delectus.\n\nAutem quia esse nesciunt dolore voluptas. Porro sunt magnam aperiam placeat.\n\nQuam recusandae perferendis ut molestias quo dolorem et dolores. Nihil quia aspernatur sit distinctio eos consequatur corrupti. Voluptates delectus explicabo ipsam dolores ipsa.\n\nUt voluptatem eius eum consequatur omnis vitae a. Ut neque dolorum non esse eaque hic provident. Et laboriosam aut voluptas et sit.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(8, 1, 13, 'Ducimus explicabo ea omnis dolore quos laudantium. Omnis magnam molestiae mollitia occaecati ut. Ut quia itaque excepturi at eaque.\n\nA qui autem voluptatum corrupti ducimus culpa numquam. Libero aut et minus blanditiis. Dolorem omnis sed quo beatae. Natus ad pariatur et expedita totam voluptatem rerum neque.\n\nAdipisci corrupti sequi deserunt aut quos qui perferendis. Ipsum officiis nam rerum eaque amet earum.\n\nDolore soluta perferendis eius velit. Quis est similique excepturi nobis. Omnis impedit facere alias autem tenetur.\n\nEt sit nemo numquam omnis neque. Repellendus suscipit pariatur aliquam consequatur earum porro est. Voluptas ipsa harum at ad quisquam non iste. Omnis esse asperiores quia non atque modi ratione.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(9, 1, 3, 'Numquam est est voluptatem fugit. Hic qui fuga animi neque placeat. Quo dolores consectetur quaerat assumenda consequatur possimus distinctio.\n\nDolor occaecati ipsa est laboriosam. At itaque minima quia at vel optio. Est totam dolor iste temporibus incidunt sunt id. Iusto reprehenderit quae libero itaque excepturi.\n\nFuga hic et exercitationem perspiciatis tenetur totam. Qui nihil id facere inventore nihil eaque illo. Totam non libero ut eum minima. Nemo est nobis laborum dolor ut.\n\nDeserunt illo voluptatem illo nulla veniam quasi. Cupiditate asperiores nihil consequatur sequi aut id. Debitis occaecati quam et error repudiandae blanditiis facere.\n\nEnim ipsum aperiam consequuntur dolorum voluptatibus sed. Et itaque vitae consequatur voluptas maxime. Assumenda at asperiores nostrum explicabo ut nisi.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(10, 1, 29, 'Laborum commodi excepturi qui est possimus id aut. Cum veniam sequi corporis debitis. Temporibus ad necessitatibus aliquid dignissimos quae nisi vel. Et quaerat quia non qui.\n\nAt aspernatur quod rerum aliquid pariatur ad voluptatem. Veniam voluptatem veritatis sed et dolorem ab nemo. Beatae et hic quidem harum.\n\nIncidunt iusto ea asperiores dicta numquam dolorem rem. Et id voluptas aspernatur soluta est nulla. Doloremque saepe facere facere eum.\n\nFuga officia aut autem aut doloribus et. Dolorem eum eius ipsum magni dolores aliquid ipsum in. Totam sed fugiat facere recusandae qui.\n\nQuisquam veniam cum ad laboriosam illo molestiae et vitae. Accusantium omnis ea ut magni sit deserunt. Ut id deleniti consequatur dolor vel consequatur. Adipisci quia est id in vel architecto facilis enim.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(11, 2, 30, 'Labore placeat doloremque optio quia iusto autem possimus. Dolorem voluptatum exercitationem aliquam veniam eos magni. Totam impedit architecto est voluptates error.\n\nIllum aut harum et qui velit repellat. Quod voluptatem explicabo omnis vero et tempora. Occaecati saepe unde quidem nemo mollitia. Modi et unde saepe.\n\nVoluptatem repudiandae minima et consequatur. Velit sed vel molestias aliquid beatae. Iure doloremque ea quod. Aperiam consequatur et qui vel iure tempora odio.\n\nEum sunt soluta rerum ipsam. Aut illo sunt qui qui eos. Distinctio dolores neque unde voluptas culpa dignissimos est autem. Neque tenetur qui numquam nesciunt quos repellat.\n\nLaborum officiis blanditiis et omnis impedit aut. Amet necessitatibus aut quis consequatur maiores.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(12, 2, 4, 'At praesentium quo facilis qui in. Ipsam sit atque voluptatem ratione.\n\nSuscipit facere consequatur earum aut. Temporibus delectus neque explicabo magnam nemo. Consequuntur laborum consequatur architecto consectetur.\n\nSequi eos alias explicabo. Fugit quaerat eum et et id deleniti praesentium. Aperiam officia veritatis asperiores id.\n\nDistinctio officia cupiditate illum voluptatem quis. Et vero velit reprehenderit molestiae quisquam. Earum id rerum magni ipsam voluptates omnis enim quis. Enim iusto eos error qui vel sint.\n\nSoluta et non ratione. Cum voluptatum sit non ut nostrum natus. Sed id deserunt id cum similique veniam. Rerum et et unde fugit rerum possimus.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(13, 2, 8, 'Numquam quibusdam et voluptas veritatis voluptates veniam. Nam modi ullam sit voluptas vel aperiam. Consequatur ipsa doloremque quis officiis rerum quae. Totam ut fuga fugiat asperiores et voluptatem sunt voluptatem.\n\nEst reiciendis voluptatum porro sed eos optio. Blanditiis voluptatem qui similique nostrum dolorem ut suscipit. Esse est nemo enim distinctio voluptatem ratione. Ut molestias corrupti neque officia ad.\n\nEt excepturi accusantium ullam consequuntur rerum quia. Perferendis et doloribus omnis suscipit et possimus. Et et enim expedita est. Exercitationem animi saepe recusandae deserunt debitis reiciendis quia et. Dignissimos mollitia at iste nulla illum similique non.\n\nVoluptatem possimus provident minus. Consequatur modi facilis cum voluptatem quibusdam tempora sed. Debitis voluptas voluptatum et consequatur.\n\nLaborum odio debitis neque. Iure veniam quo velit earum et inventore dignissimos. Tempora provident sint qui et. Et odio neque velit non eum.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(14, 1, 10, 'Facere aut sit animi. Vero sint similique necessitatibus ad est qui. Distinctio quis culpa id et.\n\nPraesentium odit eaque dolorem cumque qui ipsum. Dolore sapiente doloribus qui autem cum similique dicta. Est ratione est quidem officia voluptatibus provident.\n\nUt voluptatem et a odit. Consequatur aut voluptas eligendi sint. Mollitia beatae voluptatem nostrum aut quia hic quia.\n\nSit qui et omnis corrupti voluptas. Et ut eum architecto voluptatem at. Quas quia aspernatur est sequi sequi earum rerum id. Expedita sed quasi deserunt aut aspernatur eveniet.\n\nQuidem ab aliquid explicabo. Facilis eius doloremque autem error. Et repudiandae nam rerum doloribus minima quis repellat.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(15, 1, 30, 'Necessitatibus eum et ut et. Ut labore quia quae ea. Eius debitis nisi officia rerum quasi ipsum omnis quia. Quo beatae qui perferendis et nobis minima molestiae.\n\nId consequatur ducimus doloremque hic qui harum non. Minima nobis iste voluptate et. Ut dolor totam sit aperiam consequatur aut assumenda.\n\nEst ut ab aliquam earum. Unde id officiis magni impedit harum quos. Voluptas delectus iste est vel quod.\n\nDolorem impedit quae ducimus dolores sed est. Ut excepturi quaerat non doloremque et dicta. Natus amet consequatur nisi vel omnis in. Qui inventore dolor ut cupiditate et.\n\nDeleniti voluptatem qui eos eaque aut aut. Ut officiis explicabo sint mollitia nihil hic. Quis rerum eum aspernatur ut ea sit in.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(16, 1, 1, 'Eum sunt consequatur tempore laudantium magnam sint ut numquam. Voluptatibus ipsum quod qui et dolores temporibus minus. Veniam pariatur qui similique voluptatem eius similique blanditiis.\n\nNumquam vero saepe ut hic. Eligendi perspiciatis corporis alias nobis aut. Odit vel expedita non dolor. Sunt velit repellendus nobis sit. Pariatur eligendi autem rerum hic est voluptatem quisquam.\n\nDolor quis excepturi omnis possimus voluptas. Eos autem voluptatem inventore laborum. Dicta voluptas voluptas numquam voluptate est.\n\nOdit nihil aliquid non tempora. Natus officia fugiat rerum doloremque omnis alias ipsa. Repellat ut commodi quos quam est distinctio ipsa. Eos reprehenderit accusamus maiores iste inventore qui. Et nisi totam cupiditate et eum.\n\nOmnis consequuntur sapiente fuga aut autem eaque est vero. Excepturi consequuntur ipsa fugiat voluptas velit et. Voluptates omnis voluptatem consequatur hic dicta.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(17, 1, 17, 'Laborum enim earum placeat dolor eaque. Impedit necessitatibus neque dolore ea. Officia suscipit deserunt neque eligendi id. Amet velit corporis ducimus.\n\nVoluptas accusamus nihil ipsum est. Aliquid dolor dolorem assumenda omnis possimus accusantium.\n\nVoluptatem quos rerum ut aut asperiores iure quo. Et repellendus alias voluptatibus. Quas debitis enim iure ea minus nostrum.\n\nSaepe earum perferendis adipisci eligendi illo nemo porro. Eaque quo id totam vel similique. Dolore nostrum animi consequatur odio ullam aut.\n\nBlanditiis culpa amet ullam eos adipisci quaerat aut. Nulla aut est doloribus doloremque. Ratione optio suscipit minima fuga. Placeat consequuntur ipsam et fugiat repudiandae quis.', '2020-11-27 23:56:54', '2020-11-27 23:56:54', NULL),
(18, 2, 1, 'Et inventore quia impedit et eos impedit rem autem. Et voluptas occaecati adipisci eos non sunt est porro. Aut repudiandae repudiandae ullam officiis maxime eos.\n\nNon repellat minima quia. Non inventore doloribus recusandae quibusdam labore.\n\nNisi est odio eum nihil. Atque quis consequatur ut iure cum id modi. Quibusdam odio quam odio. Rerum ullam natus et est aut placeat.\n\nEt et in occaecati nisi eum vel. Rerum quo sed et ea.\n\nEt omnis consequatur enim tempora voluptatem quia. Explicabo fugiat ipsa nobis laudantium doloribus. Officiis eveniet omnis eveniet architecto tempora. Ea distinctio modi et recusandae id natus assumenda.', '2020-11-27 23:56:54', '2020-11-27 23:56:54', NULL),
(19, 1, 23, 'Ea molestiae eveniet occaecati quaerat. Expedita eaque a similique est. Labore reiciendis in minima ut eveniet fuga.\n\nVoluptatum adipisci in perferendis necessitatibus impedit. Qui placeat consequatur et voluptatem molestiae sit tenetur quasi. Nostrum dicta deleniti eum asperiores.\n\nTempore quo qui deserunt sit eum necessitatibus. Architecto rerum dolore necessitatibus totam deleniti facere eos atque. Totam eum modi adipisci ullam officia delectus recusandae dolorem. Molestias nihil sed id architecto dolor.\n\nVeritatis quis eum qui dolorem sed maxime. Est minus quidem maiores. Reprehenderit occaecati quo qui neque voluptatem perspiciatis sunt. Nihil unde molestiae laboriosam consectetur.\n\nId architecto laudantium accusamus quos iure. Velit ut corporis asperiores sint ut delectus. Ut sed voluptas cum velit qui ab. Repudiandae corrupti maxime facilis velit. Voluptate odit dolor quo rerum at eos.', '2020-11-27 23:56:55', '2020-11-27 23:56:55', NULL),
(20, 1, 10, 'Inventore accusamus nisi sunt quis eius. Quaerat sed voluptas et deleniti eum. Dolores qui non in praesentium eius. Vel et dolor voluptatibus earum.\n\nAb sapiente nihil nesciunt. In vel quia facere. Beatae inventore assumenda quae quos exercitationem.\n\nTempore ducimus odio eum eaque qui et et eos. Enim accusamus cumque in optio voluptatum. Velit at voluptates placeat laudantium quia fugiat.\n\nEligendi aut accusantium sed animi rerum. Est esse sit placeat aut earum optio. Fugiat omnis vel praesentium beatae.\n\nEos veniam exercitationem laudantium aut sunt nam omnis. A cumque deleniti qui ad accusamus. Qui vel ad quis molestiae illo. Amet debitis ipsam est rerum dolor nihil.', '2020-11-27 23:56:56', '2020-11-27 23:56:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `d_user_kuis`
--

CREATE TABLE `d_user_kuis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_pengambilan_kuis` bigint(20) UNSIGNED NOT NULL,
  `row_id_soal` bigint(20) UNSIGNED NOT NULL,
  `jawaban_user` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_seri` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` int(11) NOT NULL,
  `status_berbayar` tinyint(4) NOT NULL COMMENT '0 = GRATIS, 1 = BERBAYAR',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `row_id_seri`, `judul`, `slug`, `url_youtube`, `durasi`, `status_berbayar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'What do we need ?', 'what-do-we-need', 'https://www.youtube.com/embed/-82XvDLsGKc', 375, 0, '2020-11-27 23:56:42', '2020-11-27 23:56:42', NULL),
(2, 1, 'Laravel Installation', 'laravel-installation', 'https://www.youtube.com/embed/8UjkrH6xYNg', 409, 0, '2020-11-27 23:56:42', '2020-11-27 23:56:42', NULL),
(3, 1, 'Valet & MySQL', 'valet-mysql', 'https://www.youtube.com/embed/H2tK1USF6x4', 515, 0, '2020-11-27 23:56:42', '2020-11-27 23:56:42', NULL),
(4, 2, 'Laravel, Composer, MySQL Installation', 'laravel-composer-mysql-installation', 'https://www.youtube.com/embed/ucV7ynY4M8A', 564, 0, '2020-11-27 23:56:42', '2020-11-27 23:56:42', NULL),
(5, 2, 'Laravel 7 Instalation', 'laravel-7-instalation', 'https://www.youtube.com/embed/XtEpLqr4xVg', 765, 0, '2020-11-27 23:56:42', '2020-11-27 23:56:42', NULL),
(6, 3, 'Preparation for Laravel 8', 'preparation-for-laravel-8', 'https://www.youtube.com/embed/pUxT0G2j5q8', 257, 0, '2020-11-27 23:56:43', '2020-11-27 23:56:43', NULL),
(7, 3, 'Model Directory Bash', 'model-directory-bash', 'https://www.youtube.com/embed/fFWiOO3xLww', 107, 0, '2020-11-27 23:56:43', '2020-11-27 23:56:43', NULL),
(8, 3, 'The new maintenance mode is awesome', 'the-new-maintenance-mode-is-awesome', 'https://www.youtube.com/embed/4shENynVKQQ', 309, 0, '2020-11-27 23:56:43', '2020-11-27 23:56:43', NULL),
(9, 3, 'Factory has changed', 'factory-has-changed', 'https://www.youtube.com/embed/DdhtOorFlSk', 326, 0, '2020-11-27 23:56:43', '2020-11-27 23:56:43', NULL),
(10, 4, 'Let\'s do it', 'lets-do-it', 'https://www.youtube.com/embed/LcxJcH11Hng', 864, 0, '2020-11-27 23:56:43', '2020-11-27 23:56:43', NULL),
(11, 4, 'What\'s your own theme?', 'whats-your-own-theme', 'https://www.youtube.com/embed/9AA83tEttsY', 952, 0, '2020-11-27 23:56:43', '2020-11-27 23:56:43', NULL),
(12, 4, 'Snippet is our best friend', 'snippet-is-our-best-friend', 'https://www.youtube.com/embed/VHRKxVBr3qM', 778, 1, '2020-11-27 23:56:44', '2020-11-27 23:56:44', NULL),
(13, 5, 'Grid', 'grid', 'https://www.youtube.com/embed/db88BsxsQ7w', 410, 0, '2020-11-27 23:56:44', '2020-11-27 23:56:44', NULL),
(14, 5, 'Responsive', 'responsive', 'https://www.youtube.com/embed/IAm1lSdcRns', 389, 0, '2020-11-27 23:56:44', '2020-11-27 23:56:44', NULL),
(15, 6, 'Mix and Bootstrap 5 Installation', 'mix-and-bootstrap-5-installation', 'https://www.youtube.com/embed/6z-mmJa3NT0', 754, 0, '2020-11-27 23:56:44', '2020-11-27 23:56:44', NULL),
(16, 6, 'Let\'s create a login page', 'lets-create-a-login-page', 'https://www.youtube.com/embed/z9UNSZf-0p0', 974, 0, '2020-11-27 23:56:44', '2020-11-27 23:56:44', NULL),
(17, 6, 'What a great navigations!', 'what-a-great-navigations', 'https://www.youtube.com/embed/_aeMjPUwHgA', 822, 1, '2020-11-27 23:56:44', '2020-11-27 23:56:44', NULL),
(18, 7, 'Which installations do we need?', 'which-installations-do-we-need', 'https://www.youtube.com/embed/0xqwsd1tVmU', 994, 0, '2020-11-27 23:56:44', '2020-11-27 23:56:44', NULL),
(19, 7, 'Let\'s use the utilities', 'lets-use-the-utilities', 'https://www.youtube.com/embed/3KZL6zJspXg', 583, 0, '2020-11-27 23:56:44', '2020-11-27 23:56:44', NULL),
(20, 7, 'Grid or Flexbox', 'grid-or-flexbox', 'https://www.youtube.com/embed/DSbTVrkrZqM', 646, 1, '2020-11-27 23:56:44', '2020-11-27 23:56:44', NULL),
(21, 8, 'Tailwind CSS and Mix Installations', 'tailwind-css-and-mix-installations', 'https://www.youtube.com/embed/ZuhhbL45QrM', 589, 0, '2020-11-27 23:56:44', '2020-11-27 23:56:44', NULL),
(22, 8, 'Let\'s implement the utilities', 'lets-implement-the-utilities', 'https://www.youtube.com/embed/qPNpr4yofkQ', 710, 0, '2020-11-27 23:56:45', '2020-11-27 23:56:45', NULL),
(23, 8, 'Container and configuration file', 'container-and-configuration-file', 'https://www.youtube.com/embed/sbI-e9eJbDI', 562, 1, '2020-11-27 23:56:45', '2020-11-27 23:56:45', NULL),
(24, 9, 'Laravel and vue setup', 'laravel-and-vue-setup', 'https://www.youtube.com/embed/Cq8OuP7ni8w', 586, 0, '2020-11-27 23:56:45', '2020-11-27 23:56:45', NULL),
(25, 9, 'Router for SPA', 'router-for-spa', 'https://www.youtube.com/embed/1T-yQi8xOf0', 1334, 0, '2020-11-27 23:56:45', '2020-11-27 23:56:45', NULL),
(26, 9, 'Database Structure', 'database-structure', 'https://www.youtube.com/embed/jO6umeJzJ4E', 514, 1, '2020-11-27 23:56:45', '2020-11-27 23:56:45', NULL),
(27, 10, 'Hello React', 'hello-react', 'https://www.youtube.com/embed/CX4tYNBkqCk', 430, 0, '2020-11-27 23:56:45', '2020-11-27 23:56:45', NULL),
(28, 10, 'Basic React State', 'basic-react-state', 'https://www.youtube.com/embed/IgsZfWQHiYg', 535, 0, '2020-11-27 23:56:45', '2020-11-27 23:56:45', NULL),
(29, 10, 'Form Handling', 'form-handling', 'https://www.youtube.com/embed/ci5YQR4qV-A', 705, 0, '2020-11-27 23:56:45', '2020-11-27 23:56:45', NULL),
(30, 10, 'Let\'s change it to stateless', 'lets-change-it-to-stateless', 'https://www.youtube.com/embed/ap0dEBMFP_4', 603, 0, '2020-11-27 23:56:45', '2020-11-27 23:56:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `h_user_kuis`
--

CREATE TABLE `h_user_kuis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_user` bigint(20) UNSIGNED NOT NULL,
  `row_id_kuis` bigint(20) UNSIGNED NOT NULL,
  `nilai` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE `labels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`id`, `nama`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Framework', 'framework', '2020-11-27 23:56:23', '2020-11-27 23:56:23', NULL),
(2, 'Bootstrap', 'bootstrap', '2020-11-27 23:56:26', '2020-11-27 23:56:26', NULL),
(3, 'Tailwind', 'tailwind', '2020-11-27 23:56:26', '2020-11-27 23:56:26', NULL),
(4, 'News', 'news', '2020-11-27 23:56:26', '2020-11-27 23:56:26', NULL),
(5, 'Tips', 'tips', '2020-11-27 23:56:26', '2020-11-27 23:56:26', NULL),
(6, 'Development', 'development', '2020-11-27 23:56:26', '2020-11-27 23:56:26', NULL),
(7, 'Dolorem est illum quo odio iure.', 'dolorem-est-illum-quo-odio-iure', '2020-11-27 23:56:33', '2020-11-27 23:56:33', NULL),
(8, 'Ratione labore aut enim expedita.', 'ratione-labore-aut-enim-expedita', '2020-11-27 23:56:33', '2020-11-27 23:56:33', NULL),
(9, 'Sapiente rerum fuga dolores.', 'sapiente-rerum-fuga-dolores', '2020-11-27 23:56:33', '2020-11-27 23:56:33', NULL),
(10, 'Eaque et dolore aut et quis facilis.', 'eaque-et-dolore-aut-et-quis-facilis', '2020-11-27 23:56:33', '2020-11-27 23:56:33', NULL),
(11, 'Fugiat consectetur omnis quo at quia.', 'fugiat-consectetur-omnis-quo-at-quia', '2020-11-27 23:56:33', '2020-11-27 23:56:33', NULL),
(12, 'Est et tenetur et porro.', 'est-et-tenetur-et-porro', '2020-11-27 23:56:33', '2020-11-27 23:56:33', NULL),
(13, 'Dignissimos dolor alias a.', 'dignissimos-dolor-alias-a', '2020-11-27 23:56:34', '2020-11-27 23:56:34', NULL),
(14, 'Ut beatae ut praesentium et soluta.', 'ut-beatae-ut-praesentium-et-soluta', '2020-11-27 23:56:34', '2020-11-27 23:56:34', NULL),
(15, 'Laboriosam et sint dolores.', 'laboriosam-et-sint-dolores', '2020-11-27 23:56:34', '2020-11-27 23:56:34', NULL),
(16, 'Quia cum autem atque error laudantium.', 'quia-cum-autem-atque-error-laudantium', '2020-11-27 23:56:34', '2020-11-27 23:56:34', NULL),
(17, 'Ad ut voluptatem cumque commodi.', 'ad-ut-voluptatem-cumque-commodi', '2020-11-27 23:56:34', '2020-11-27 23:56:34', NULL),
(18, 'Beatae ullam deserunt minus ut.', 'beatae-ullam-deserunt-minus-ut', '2020-11-27 23:56:34', '2020-11-27 23:56:34', NULL),
(19, 'Laboriosam maxime quae unde.', 'laboriosam-maxime-quae-unde', '2020-11-27 23:56:35', '2020-11-27 23:56:35', NULL),
(20, 'In eum cumque nisi quidem voluptatem.', 'in-eum-cumque-nisi-quidem-voluptatem', '2020-11-27 23:56:35', '2020-11-27 23:56:35', NULL),
(21, 'Sed sapiente eos sit aut et saepe.', 'sed-sapiente-eos-sit-aut-et-saepe', '2020-11-27 23:56:35', '2020-11-27 23:56:35', NULL),
(22, 'Fugiat excepturi molestiae ipsum.', 'fugiat-excepturi-molestiae-ipsum', '2020-11-27 23:56:35', '2020-11-27 23:56:35', NULL),
(23, 'Sed ut quia dolorem nam ut.', 'sed-ut-quia-dolorem-nam-ut', '2020-11-27 23:56:36', '2020-11-27 23:56:36', NULL),
(24, 'Recusandae saepe qui harum soluta.', 'recusandae-saepe-qui-harum-soluta', '2020-11-27 23:56:36', '2020-11-27 23:56:36', NULL),
(25, 'Enim et a iste distinctio.', 'enim-et-a-iste-distinctio', '2020-11-27 23:56:36', '2020-11-27 23:56:36', NULL),
(26, 'Et ratione enim facilis aut.', 'et-ratione-enim-facilis-aut', '2020-11-27 23:56:36', '2020-11-27 23:56:36', NULL),
(27, 'In qui ut sint qui nulla.', 'in-qui-ut-sint-qui-nulla', '2020-11-27 23:56:37', '2020-11-27 23:56:37', NULL),
(28, 'Sunt voluptatem dicta cum omnis est.', 'sunt-voluptatem-dicta-cum-omnis-est', '2020-11-27 23:56:37', '2020-11-27 23:56:37', NULL),
(29, 'Aut recusandae et numquam nobis.', 'aut-recusandae-et-numquam-nobis', '2020-11-27 23:56:38', '2020-11-27 23:56:38', NULL),
(30, 'Et eos a veniam alias aut magni unde.', 'et-eos-a-veniam-alias-aut-magni-unde', '2020-11-27 23:56:38', '2020-11-27 23:56:38', NULL),
(31, 'Nam eum dolores est nobis.', 'nam-eum-dolores-est-nobis', '2020-11-27 23:56:39', '2020-11-27 23:56:39', NULL),
(32, 'Id fugiat tenetur officiis aperiam.', 'id-fugiat-tenetur-officiis-aperiam', '2020-11-27 23:56:39', '2020-11-27 23:56:39', NULL),
(33, 'Aut voluptatem mollitia qui.', 'aut-voluptatem-mollitia-qui', '2020-11-27 23:56:39', '2020-11-27 23:56:39', NULL),
(34, 'At ea dignissimos a.', 'at-ea-dignissimos-a', '2020-11-27 23:56:39', '2020-11-27 23:56:39', NULL),
(35, 'Qui dolorem iusto sed et.', 'qui-dolorem-iusto-sed-et', '2020-11-27 23:56:41', '2020-11-27 23:56:41', NULL),
(36, 'Reprehenderit alias aut facilis dolor.', 'reprehenderit-alias-aut-facilis-dolor', '2020-11-27 23:56:41', '2020-11-27 23:56:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `label_post`
--

CREATE TABLE `label_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_label` bigint(20) UNSIGNED NOT NULL,
  `row_id_post` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `label_post`
--

INSERT INTO `label_post` (`id`, `row_id_label`, `row_id_post`, `deleted_at`) VALUES
(1, 7, 1, NULL),
(2, 8, 1, NULL),
(3, 9, 2, NULL),
(4, 10, 2, NULL),
(5, 11, 3, NULL),
(6, 12, 3, NULL),
(7, 13, 4, NULL),
(8, 14, 4, NULL),
(9, 15, 5, NULL),
(10, 16, 5, NULL),
(11, 17, 6, NULL),
(12, 18, 6, NULL),
(13, 19, 7, NULL),
(14, 20, 7, NULL),
(15, 21, 8, NULL),
(16, 22, 8, NULL),
(17, 23, 9, NULL),
(18, 24, 9, NULL),
(19, 25, 10, NULL),
(20, 26, 10, NULL),
(21, 27, 11, NULL),
(22, 28, 11, NULL),
(23, 29, 12, NULL),
(24, 30, 12, NULL),
(25, 31, 13, NULL),
(26, 32, 13, NULL),
(27, 33, 14, NULL),
(28, 34, 14, NULL),
(29, 35, 15, NULL),
(30, 36, 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `label_seri`
--

CREATE TABLE `label_seri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_label` bigint(20) UNSIGNED NOT NULL,
  `row_id_seri` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `label_seri`
--

INSERT INTO `label_seri` (`id`, `row_id_label`, `row_id_seri`, `deleted_at`) VALUES
(1, 1, 1, NULL),
(2, 1, 2, NULL),
(3, 1, 3, NULL),
(4, 1, 5, NULL),
(5, 1, 6, NULL),
(6, 1, 7, NULL),
(7, 1, 8, NULL),
(8, 1, 9, NULL),
(9, 2, 5, NULL),
(10, 2, 6, NULL),
(11, 3, 7, NULL),
(12, 3, 8, NULL);

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
(267, '2014_10_12_000000_create_users_table', 1),
(268, '2014_10_12_100000_create_password_resets_table', 1),
(269, '2019_08_19_000000_create_failed_jobs_table', 1),
(270, '2020_10_09_122023_create_labels_table', 1),
(271, '2020_10_09_122206_create_categories_table', 1),
(272, '2020_10_09_122301_create_transactions_table', 1),
(273, '2020_10_09_122402_create_quizzes_table', 1),
(274, '2020_10_09_122433_create_questions_table', 1),
(275, '2020_10_09_122523_create_posts_table', 1),
(276, '2020_10_09_122548_create_series_table', 1),
(277, '2020_10_09_122616_create_episodes_table', 1),
(278, '2020_10_09_122706_create_comments_table', 1),
(279, '2020_10_10_175421_create_replies_table', 1),
(280, '2020_10_10_175920_user_watchlist', 1),
(281, '2020_10_10_181111_h_user_kuis', 1),
(282, '2020_10_10_181744_d_user_kuis', 1),
(283, '2020_10_10_181802_label_seri', 1),
(284, '2020_10_10_181814_label_post', 1),
(285, '2020_11_01_030811_create_verify_users_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_aktif` tinyint(4) NOT NULL COMMENT '0 = INACTIVE, 1 = ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `row_id_kategori`, `judul`, `isi`, `slug`, `status_aktif`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'Totam nulla sit debitis.', 'Ut natus qui enim cupiditate ipsum in. Quia pariatur assumenda consequuntur animi. Ut rerum laudantium officia explicabo.\n\nDolor eum libero quo voluptatibus modi qui. Alias nulla earum non. Ut commodi aspernatur minima at iste nulla.\n\nDoloribus quisquam temporibus ipsam odit. Voluptatem et natus esse perspiciatis repudiandae officiis. Consequuntur repellat voluptas molestiae quasi. Cum qui perferendis facere aut eos debitis et reiciendis.\n\nFugit minus occaecati velit et atque optio aut. Rerum dolores incidunt esse quos in quaerat voluptatem iure. Maiores quam placeat molestias. Soluta et vero culpa vel.\n\nEst reprehenderit quaerat porro tempora fuga. Vel et sunt dolores est et aut. Labore velit omnis vel ut. Aut ad minima et soluta sint rerum consequatur.\n\nPlaceat voluptas est sed consectetur distinctio ut corporis. Sit aut fuga facilis excepturi hic sequi et. Alias et eius provident voluptatem consequatur eum.\n\nIste rerum officiis dolorum necessitatibus. Et aut magnam totam qui. Illum quia aut et incidunt magnam consequatur. Occaecati possimus animi est consequatur exercitationem.\n\nIpsam dolorum dignissimos sed natus sed qui. Repudiandae et sapiente distinctio ea aut ab quod. Necessitatibus aperiam odio et eos rerum earum expedita illum. Odit delectus dolorem omnis distinctio qui molestiae eos.\n\nQui consectetur quae porro. Eum iste et ex suscipit.\n\nEt vel odio aut. Veniam et quis dolores quisquam hic facilis pariatur. Explicabo ea quia sit quas ratione animi eos ducimus.', 'totam-nulla-sit-debitis', 1, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(2, 1, 'Provident eveniet facere ad.', 'Dicta sint qui ut laudantium nisi qui dolor doloremque. Enim molestiae quo dolores nisi. Aperiam quaerat et voluptas explicabo itaque. Blanditiis placeat blanditiis dicta ad nihil. Neque provident quibusdam recusandae voluptatem expedita quia autem.\n\nNostrum sed et quos sunt corporis eum. Vero eum impedit voluptas enim assumenda deleniti similique. Quae officia reiciendis tempore ullam ab perferendis libero doloremque. Dicta explicabo ratione deleniti. Saepe molestiae qui corporis officia voluptatem ut.\n\nEt ad corporis aut quis iure quos. Veniam sed qui eos consequatur et. Labore rerum nobis aut.\n\nOmnis quis sit excepturi iure. Repellat veniam beatae aut perferendis saepe illum tenetur ut. Ipsa repudiandae et non explicabo optio qui consectetur. Asperiores blanditiis fugiat eaque illo qui.\n\nUt doloremque ad voluptate fugit laudantium reprehenderit numquam. Aliquid autem architecto a omnis veritatis maxime et eos. Quia et porro voluptatem voluptatem.\n\nEaque alias ut dicta aut illo autem saepe soluta. Ut dolores et omnis in. Expedita fugit assumenda qui aliquid cupiditate dolorum. Distinctio saepe est molestias nulla voluptatum sit. Vel aperiam modi in dolores occaecati repudiandae.\n\nCum corporis consequatur dolores et laborum tempora ab. Placeat voluptatum aliquam fugit consequatur qui sint. Cum facilis sint quis ipsa.\n\nEt temporibus quia sunt ut. Nulla minima ad voluptatem consequatur ut tempora. Voluptatem quis sint aut cum. Esse tenetur perferendis qui quod. Officiis quos est et rem vel suscipit ad ex.\n\nAsperiores beatae consequatur qui non. Consequatur ducimus magni ea quibusdam provident voluptatem. Qui doloribus saepe et sit distinctio et nisi. Corrupti porro nostrum et voluptatibus aut praesentium eum.\n\nEnim magni culpa omnis minima molestias nihil. Doloribus officia aliquam harum odit. Doloremque nihil magni soluta enim.', 'provident-eveniet-facere-ad', 0, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(3, 1, 'Nihil rem dolorem rerum suscipit.', 'Sint quia sint ad. Voluptatem rerum possimus et earum dolore. Vel accusantium rem vitae.\n\nQuos tempora nobis nulla itaque. Et quas sunt eum deserunt quam minima ipsum.\n\nQui harum ratione ut officiis non et sit. Et ratione veniam est eum excepturi voluptates. Neque ex occaecati eius a.\n\nDolorum neque hic voluptas quos. Et maxime nisi commodi placeat molestiae quos culpa. Expedita est alias expedita nostrum maxime enim ullam. Non tenetur nihil sed voluptates est autem ipsam.\n\nUnde praesentium reprehenderit impedit perferendis quia. Consequatur sed exercitationem quam. Qui quia qui voluptas quibusdam nihil sed.\n\nAccusantium dicta quisquam nihil. Libero perspiciatis et atque amet nostrum sed quia. Et et ut magnam hic sed reiciendis.\n\nAutem et dolor error eveniet. Aut qui est aliquam. Impedit autem suscipit et ex. Accusamus commodi quia aut quaerat aut rerum.\n\nQuia dolorum dignissimos similique ducimus quasi et eligendi. Et aut odio autem sunt soluta est.\n\nSit eos deleniti neque vero magnam. Temporibus eaque inventore qui. Praesentium excepturi sit dignissimos sit quod in.\n\nEa amet qui occaecati dignissimos id cupiditate facere. Ipsa qui tempore dolores similique quisquam ipsam neque cupiditate. Atque tempore nihil fugiat ratione voluptatem eaque.', 'nihil-rem-dolorem-rerum-suscipit', 1, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(4, 3, 'Saepe iure et facilis quia.', 'Qui accusamus ut neque vero. Ut eos doloremque libero corporis magni quisquam. Accusamus totam est rem nulla et aut neque tempora.\n\nAliquid amet consectetur ipsum aut corrupti maiores voluptatum. Tenetur consequatur explicabo numquam ut dolores dolorum magnam. Aperiam numquam illo molestiae.\n\nQui eius in voluptate cumque. Aliquam animi cum quae dolores eum. Nesciunt cupiditate et vel totam reprehenderit fuga perspiciatis itaque. Non mollitia sunt facere similique assumenda.\n\nDolorem impedit labore eius voluptatibus omnis. Et dolor similique accusamus expedita in commodi et. Doloribus aperiam itaque velit assumenda architecto maxime rerum dolores.\n\nAmet repudiandae et nostrum. Ea tempora iste culpa vitae fuga pariatur. Voluptates laboriosam aut facilis doloremque enim. Ad fugit tempore quia provident.\n\nHic incidunt harum eligendi quia aut. Voluptas repellendus aut vitae et maxime suscipit.\n\nQui est dolore esse et voluptatem. Aut ut qui odio sit a. Eius quisquam pariatur qui non qui quia. Voluptatibus eos est est officiis error ut sint.\n\nRerum neque sapiente maxime omnis laborum debitis voluptatem. Illum et voluptatem quod et. Laudantium est architecto et et temporibus quia. Provident eligendi quae velit eaque rerum qui saepe.\n\nQuasi ut eum officia. Possimus quis dolore est voluptatum voluptatum. Et quia pariatur beatae expedita illo incidunt provident repellendus.\n\nAut quae amet et sed vitae labore accusantium. Praesentium facere vitae dolorum saepe officia voluptates. Error aut fuga eligendi eum. Sed magnam enim saepe tenetur explicabo non omnis explicabo. Veritatis totam nesciunt iure voluptatem eligendi ut.', 'saepe-iure-et-facilis-quia', 0, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(5, 1, 'Quis aliquid tenetur eum.', 'Inventore impedit eligendi qui aut perferendis aut. Excepturi excepturi iure mollitia enim sit. Dolores quos iure dignissimos ipsam.\n\nQuod aliquid corporis quia enim. Optio voluptatum possimus qui facilis accusamus. Sequi qui est incidunt aut. Voluptas et officiis quod.\n\nQuia excepturi est blanditiis maiores a minima cum officia. Reiciendis odio autem vero numquam sint ullam occaecati. Voluptatum repellat ducimus perspiciatis iste architecto vitae facere. Doloremque necessitatibus vitae quis ipsum doloremque.\n\nVitae provident consequatur in nihil. Unde laboriosam exercitationem ipsum cum numquam. Quo a vel sequi ut ut facere vitae.\n\nRerum eius sit repudiandae et expedita enim. Necessitatibus rerum doloremque voluptatem et sed. Aut accusamus est asperiores at quisquam omnis.\n\nAut iusto rem alias. Non expedita asperiores rerum ducimus cupiditate odio eligendi. Illo omnis earum atque temporibus ducimus. Quos tempore aperiam ut excepturi tempore asperiores repellendus.\n\nEt cupiditate dolores aut in similique adipisci nostrum. Necessitatibus expedita culpa explicabo optio iure est ipsa labore.\n\nEt expedita esse rerum blanditiis dolor. Possimus adipisci sed placeat ut suscipit laboriosam doloribus. Doloribus excepturi tenetur ut et aliquid debitis. Autem quae consequatur provident sunt sed nesciunt odio. Error impedit esse officia id voluptate.\n\nQuia voluptatem quos ut minima. Molestiae enim et nemo totam provident. Culpa asperiores aut voluptatem quis pariatur. Iusto aut error aspernatur fuga ut quo dolorem. Id magni consequuntur laboriosam enim voluptatem quos optio.\n\nLibero iste amet ea voluptas. Totam consequatur ut qui omnis repellendus. Odio cum animi qui amet itaque quibusdam deserunt. Perspiciatis corporis asperiores facilis ratione.', 'quis-aliquid-tenetur-eum', 0, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(6, 5, 'Accusantium nihil architecto nobis a.', 'Laudantium voluptatem aliquam aut est quis. Explicabo sed voluptates consequuntur molestiae.\n\nNam in unde harum omnis et ex voluptatibus. Earum magnam tempora enim cum est. Voluptatibus laboriosam labore doloremque dignissimos tenetur.\n\nPlaceat et quos labore sit aut ducimus. Quae placeat distinctio molestias quasi modi atque sit. Dolorum voluptas qui eos quo. Saepe autem est repellat sapiente.\n\nMagnam exercitationem quibusdam aspernatur quia. Qui eveniet neque autem fugiat. Velit et sequi nisi non ex. Et vero tempora sed. Omnis aperiam recusandae inventore natus quidem in rerum.\n\nAspernatur et et eligendi quasi. Architecto sed eveniet culpa magnam id veritatis voluptatum. Dolorum qui neque sunt in impedit. Ad et sunt quia sit. Fugit necessitatibus explicabo eius neque in et quo.\n\nQuia rem culpa doloribus ipsam. Dolores voluptatem saepe et quia. Aut architecto aperiam odio officia. Minima similique voluptas voluptatem et beatae illo est. Deserunt distinctio odit fugiat omnis nihil.\n\nExplicabo totam earum id incidunt enim. Velit est aspernatur aliquid maiores. Eveniet ipsa ea ratione exercitationem excepturi vel omnis.\n\nEligendi amet aut et velit. Est reprehenderit earum eaque molestiae. Quidem est occaecati eius. Aut rerum labore aut necessitatibus nesciunt possimus consequatur.\n\nEst est qui voluptas alias rerum eos quas. Sit harum ut enim dignissimos natus. Consequatur eum sint facilis veniam temporibus nulla.\n\nDelectus enim impedit id accusamus voluptatibus. Dolorum explicabo et natus praesentium ab molestiae. Sunt accusantium quas odio ut voluptatum.', 'accusantium-nihil-architecto-nobis-a', 0, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(7, 5, 'Soluta rerum quis delectus sunt.', 'Nemo assumenda expedita illum ullam tenetur qui. Et excepturi assumenda omnis qui quia. Ipsam beatae et aut consequatur. Esse ducimus consequatur inventore explicabo similique.\n\nMollitia inventore ut totam aut eligendi. Deleniti id sequi ratione sapiente omnis. Beatae omnis quas quam sed et odio deserunt. Fugit exercitationem quia error eos minima quo et.\n\nMagni maxime quia corporis ut. Impedit eum incidunt explicabo error. Autem eum aliquid laboriosam ut atque autem.\n\nEius debitis nobis dignissimos laborum id. Et quasi quia qui ducimus blanditiis eum. Corrupti aperiam voluptates sed molestias. Dolores harum et qui consequatur aliquid.\n\nAut deleniti est excepturi dolorem quae. Perspiciatis enim velit tempora quidem. Aut voluptates beatae sequi nobis sint dolorem.\n\nQuia omnis commodi sint quae repudiandae. Adipisci doloremque quae ratione porro labore assumenda nostrum. Molestiae ipsa id ut sunt velit ut.\n\nNecessitatibus voluptatem corrupti quam ipsa voluptatem. Vel possimus qui molestiae architecto. Ut quos qui hic voluptatibus nam debitis.\n\nQuasi et qui quisquam. Aliquam minus expedita unde placeat iusto iusto pariatur. Dignissimos non deleniti rerum.\n\nDucimus et in aut assumenda velit suscipit. Ut est laborum ullam aliquid a quo nam architecto. Minus repudiandae eos molestiae dolor ab nobis.\n\nOdit molestiae et ab. Ut aliquam tenetur voluptatem impedit minus. Est amet possimus similique ex quia ea. Cupiditate repellat rem et et dolorem.', 'soluta-rerum-quis-delectus-sunt', 0, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(8, 5, 'Aut amet sequi magnam velit ut.', 'Ut ut perferendis dolorum corporis. Quo ut qui molestiae omnis. Cumque ipsa quam amet facilis eius. Autem ea autem id voluptates consequatur hic non quia.\n\nConsequatur itaque eveniet eos fugiat impedit eos ut. Nemo et aperiam aspernatur pariatur et debitis. Atque autem dolore repellendus quis veritatis laudantium.\n\nNihil alias aliquam animi et sint voluptatem. Vitae enim laboriosam sapiente natus occaecati voluptatem. Fugit qui sunt ut numquam impedit mollitia. Odio sunt adipisci et sed sed hic in.\n\nDolor alias molestias aperiam fugit officia consequatur fuga. Distinctio corrupti enim quo delectus accusamus. In est possimus labore exercitationem voluptatem. Vitae totam in ullam ut ratione non.\n\nAut cumque assumenda et. Accusantium id tempore aut dicta. Ad velit rerum consequuntur. Vel delectus quia nobis nam magni sint voluptatibus.\n\nQuia amet sit autem et. Saepe autem quia similique nobis. Voluptate inventore eligendi ullam mollitia ab enim quia.\n\nExpedita optio consequatur facilis delectus quis. Voluptas iure quos possimus vel dolorem. Neque sapiente quia ad voluptatibus.\n\nEt itaque voluptate explicabo impedit nostrum. Aut quia est eum accusantium. Illum esse consequuntur ullam velit odio aspernatur.\n\nUt quisquam sunt doloremque odit corporis rerum at. Id quae sed nostrum ratione laboriosam voluptas. Qui voluptatum ut saepe.\n\nNesciunt qui minus tempore consequatur culpa reprehenderit doloribus. Modi neque pariatur similique odio ab voluptatem voluptatem. Explicabo quos sed earum velit. Consequatur aliquid at velit qui.', 'aut-amet-sequi-magnam-velit-ut', 0, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(9, 2, 'Et minus aut dignissimos ut.', 'Possimus perspiciatis rerum est temporibus rerum dolor natus. Impedit repudiandae dicta sed. Quae nisi at unde at officia voluptatibus aut. Dolore in sed quasi quas.\n\nAut blanditiis rerum consequatur sint non voluptas. Aut ea nobis similique asperiores assumenda sit. Beatae sunt non corporis magni repellat quam.\n\nPerferendis sit illo magni natus. Perferendis et beatae excepturi unde ea. Repellat placeat sed voluptatem delectus numquam. Voluptatem recusandae dolores dolor numquam praesentium aut.\n\nEligendi quaerat omnis at et architecto facere aspernatur. Sit delectus tenetur ut officia. Rerum qui dicta libero id debitis. At architecto aut praesentium consequatur iste neque dolor.\n\nQuia distinctio officiis pariatur dolore. Repellat dolor quidem sunt ratione explicabo voluptas. Molestiae voluptatem dolor et error libero maxime. Fugit vitae quis accusamus.\n\nQuasi fugiat consequatur rem voluptatem. Quis ut voluptatibus voluptas maiores sint nostrum voluptas quo. Consequatur fugiat qui quo et minus in. Qui vitae perspiciatis ad quia et facere pariatur.\n\nTempora rerum nam corporis. Voluptates in ex ex illum. Est voluptas nostrum reprehenderit architecto deleniti architecto. Quae iure omnis necessitatibus rerum.\n\nAliquam cumque quia neque et repudiandae. In voluptate et fugit itaque. Aut ea ipsa nam velit aliquam ut.\n\nEx laborum pariatur sunt non quia. Expedita et et earum rerum voluptatibus molestiae nihil. Maiores quia enim eum quaerat esse sit.\n\nOfficiis eum odit consectetur. Velit quo illo omnis inventore tempora dolores. Eum quasi qui pariatur natus non voluptas explicabo quo. Enim aut repudiandae consectetur ullam porro. Praesentium vero qui ad nisi.', 'et-minus-aut-dignissimos-ut', 0, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(10, 4, 'Vel hic aperiam magni.', 'Autem deleniti temporibus vel qui et. Libero velit veritatis magnam ut dolores fugiat.\n\nFugit aspernatur delectus aut iure. Aut eum repudiandae suscipit quo nulla et dolorum. Debitis modi eos optio.\n\nVero dolores excepturi molestias ea ducimus molestiae. Adipisci nulla rerum vero. Voluptate non consequuntur necessitatibus dolorum perferendis beatae omnis. Ipsa sunt soluta officia beatae quasi.\n\nInventore molestiae doloribus saepe ut quidem voluptatem maxime qui. Dolor impedit impedit voluptatem totam maxime eius voluptatem. Et et recusandae atque sed. Saepe qui labore eum id commodi. Mollitia saepe natus veniam magnam.\n\nNobis non corrupti voluptate in. Sit sit saepe nulla dolorum molestias incidunt. Iste deleniti vitae repellendus animi sit occaecati rerum. Repudiandae ea illum magni ut nulla voluptates molestias.\n\nNihil qui facere non quidem excepturi cupiditate qui. Rem assumenda odio reprehenderit nobis consequatur rerum. Rerum accusantium dolorum id aspernatur consectetur quo. Magni fuga optio modi accusamus consequatur ut.\n\nId et totam magni dolores. Quia saepe perspiciatis perspiciatis consectetur odio ab. Expedita veritatis voluptatibus sed accusantium assumenda.\n\nVeritatis autem provident velit exercitationem quaerat explicabo voluptatem exercitationem. Qui quos harum enim cum maxime tenetur vel. Quam id voluptatum harum non.\n\nNihil adipisci soluta porro qui. Iste suscipit quia in voluptatem laborum. Rem optio quos tenetur.\n\nDolores quo accusantium aut beatae voluptas ipsum omnis. Accusamus et placeat totam in et harum atque nobis. At sint dolor sequi. Qui natus aspernatur quibusdam sequi iure.', 'vel-hic-aperiam-magni', 0, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(11, 1, 'Ut qui qui velit enim facere rerum.', 'Ex ut dolore deserunt assumenda. Omnis natus sint iusto temporibus. Error et tempora autem ducimus.\n\nEst quia quisquam voluptas non porro et sed. Aut saepe dicta repellat rerum ex possimus explicabo. Rem quia fugit cum incidunt repellendus id.\n\nDebitis et commodi enim tempora perferendis. Aut odio illum quia aut. Dolore aut alias omnis deserunt iusto molestiae. Voluptas ipsam beatae est recusandae expedita error laborum ut.\n\nUt veniam autem ipsum. Voluptas quia aut est ipsam omnis. Saepe et qui laboriosam accusantium libero nihil. Quis et temporibus vel perferendis.\n\nRepellendus eveniet blanditiis minima et ullam deleniti. Sit eos eligendi rerum sint dignissimos quisquam. Minus eaque vel omnis quasi. Minima veniam aut eius quas temporibus voluptate placeat.\n\nId autem unde similique ad quam minus. Rerum voluptatem voluptatibus inventore inventore rem quaerat exercitationem minus.\n\nNobis mollitia sed est voluptatibus. Ad a minima error voluptatibus reiciendis dolorum sit.\n\nAb cumque cumque aut aliquam labore. Rerum asperiores recusandae eos sed reprehenderit consequatur praesentium. Voluptates aut corrupti porro et et officiis. Et quam doloremque distinctio vitae molestiae sed non.\n\nError hic optio fugit aliquid nesciunt maxime labore maxime. Inventore ut tempore accusantium nesciunt explicabo aliquam. Et nisi quibusdam ea fugit praesentium.\n\nUt delectus maiores numquam sint beatae et. Facere illo odit adipisci ut ex saepe. Hic voluptate autem ratione explicabo et nulla et et.', 'ut-qui-qui-velit-enim-facere-rerum', 1, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(12, 5, 'Qui qui voluptatem ut molestiae.', 'Non accusantium ex illum temporibus voluptatem dolorum minima. A et quaerat ad omnis delectus officia autem. Ratione corrupti rerum rem aut.\n\nUnde culpa eius aliquid pariatur aliquam est et. Autem qui quis impedit rem et ipsam. Non voluptas nemo eligendi earum rerum ducimus maiores ut.\n\nQuidem eveniet aut molestiae distinctio non. Qui molestias quo cumque dolores ut nostrum. Asperiores consequatur praesentium iusto sint. Repellendus et magni eum ad.\n\nIllo sit laborum occaecati magnam veritatis. Vel vel fuga possimus impedit alias totam delectus. Sunt sed incidunt aut ipsum eos quia vero. Culpa porro natus accusantium odio quibusdam.\n\nLaborum porro illo perferendis commodi soluta ea in. Adipisci impedit quae fugit quia tempora. Doloribus totam molestiae quo cumque explicabo. Alias quis amet amet eum sint repellat.\n\nQuibusdam sed laudantium ut cumque. Ab molestiae eum iure et. Similique molestiae maxime amet harum facere sit itaque.\n\nUllam aut qui ab rerum facilis. Sit necessitatibus eaque laboriosam repudiandae harum aliquid. Velit nesciunt excepturi consequatur laboriosam nostrum.\n\nLibero qui quae voluptatem. Nobis et quasi accusamus quia exercitationem repellat id ut. Eligendi quos facilis impedit labore cum corporis.\n\nNam deleniti magni veniam recusandae inventore. Quaerat provident aut sapiente ut perferendis consequatur. Facilis et asperiores sunt iure eius.\n\nIllum dolorem odit quod. Unde iure adipisci facilis. Tempora aut veniam et et quibusdam. Nihil autem est sed perspiciatis nemo.', 'qui-qui-voluptatem-ut-molestiae', 1, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(13, 5, 'Repellendus quisquam sit sint.', 'Autem animi quia soluta adipisci. Vero sint unde perspiciatis sequi enim quae inventore officia. Est aliquam omnis beatae sed hic. Provident praesentium et et quas.\n\nOptio sit mollitia quasi unde. Consequatur qui commodi ea quisquam eum aut blanditiis. Unde temporibus non unde alias consequatur et reprehenderit consequatur.\n\nQui aut deleniti quis voluptates omnis. Dolorum neque pariatur repellendus ipsa qui.\n\nAut distinctio praesentium error veritatis assumenda et deleniti. Et soluta eaque natus sit omnis adipisci rerum voluptate. Quis saepe similique mollitia et aut ea. Eum quidem enim voluptas sed illum.\n\nVoluptatem et corrupti molestias eos aut. Nihil et sint consequatur praesentium dolores sint odit. Expedita ipsa consequatur asperiores earum. Recusandae sed dolorem aperiam incidunt veritatis.\n\nQui possimus omnis omnis consequatur et. Dolores quo voluptas molestiae rerum et voluptas quaerat. Et quia est qui. Quia dolor sint et libero deleniti.\n\nNam voluptas voluptates distinctio voluptatibus nam atque sunt reprehenderit. Perspiciatis ut omnis consequuntur veniam consectetur. Aut molestiae doloremque mollitia voluptates repellat repudiandae ut. Tenetur quod temporibus adipisci rerum corrupti nobis.\n\nAlias nobis ab fuga consectetur excepturi officiis est. In enim maxime rerum nostrum dolorem exercitationem minus voluptas. Voluptatem dignissimos saepe ut. Vero quam velit in ut voluptates et.\n\nEst unde sit rem reprehenderit soluta consequatur. Animi aperiam sunt voluptas beatae. Hic quod ducimus vitae rerum molestiae a id. Tempore reprehenderit ex et excepturi distinctio qui dolore et. Dicta aut aliquam perferendis et.\n\nUllam tempore enim et qui. Porro omnis tempore vel quod. Laudantium consectetur dolorum nostrum impedit molestiae porro quia. Perferendis distinctio voluptas hic voluptate sint odio dolores.', 'repellendus-quisquam-sit-sint', 0, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(14, 2, 'Explicabo molestiae veniam et id sed.', 'Vel dolore aut labore et ipsa at. Minima occaecati accusamus natus asperiores aliquid et aut vel. Eius vel necessitatibus sint qui sequi commodi autem.\n\nQui quis ab sit nesciunt rerum aliquid. Eveniet illo accusantium quo. Ut provident harum fugit dolorem amet cumque.\n\nAb soluta hic eos laborum ut. Magni ad iusto repellat saepe. Ut iste nobis vel veniam a. Quia doloribus qui blanditiis provident et placeat quo veritatis.\n\nEst excepturi exercitationem aut tempora tempore aut. Aut et eligendi dicta occaecati non velit. Tempore sint recusandae inventore iure possimus et. Veniam nobis architecto perferendis molestiae esse amet.\n\nTempora dolores explicabo molestias repellat quas quia ad tempore. In cumque enim ipsum aut veritatis veniam incidunt.\n\nQuam molestiae enim tempore velit odit ut eius. Officia numquam repellat harum voluptate. Et voluptatem ex magnam sapiente veritatis at.\n\nDoloremque omnis molestias provident aut ratione mollitia ut. Amet neque voluptas minima in. Aut omnis unde facere.\n\nPorro facere tenetur ipsum rem. Eum consequatur in qui provident voluptas odio dolores. Modi velit eius ratione qui.\n\nVoluptate sed velit porro placeat non id. Velit voluptatem sequi ut quae nihil. Sequi est et reiciendis asperiores.\n\nAccusantium veniam aliquam nemo blanditiis est beatae consequatur. Nihil id unde ratione. Non velit et suscipit porro.', 'explicabo-molestiae-veniam-et-id-sed', 0, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL),
(15, 4, 'Sunt porro est et.', 'Explicabo veniam rem ut natus. Voluptatum culpa aliquid accusamus molestiae voluptas. Eveniet ducimus veritatis dolores exercitationem adipisci facere quo.\n\nDistinctio temporibus dignissimos dolorem natus sit. Occaecati harum quo nam corrupti repellat numquam. Quam voluptatem odit architecto modi. Corrupti ad dolores natus non ut tempore.\n\nSequi porro aut cupiditate cumque et et delectus. Quia et pariatur sequi quia esse non. Ex aut ut facere illo enim. Eaque aut non in est. Id aut iusto eum exercitationem.\n\nDolorem omnis fuga dolore aliquid voluptatum quia placeat. Doloremque optio consequatur non blanditiis omnis nulla modi. Cupiditate dolores facilis enim natus in voluptatem. Ea neque incidunt consequatur voluptas illum esse tempora voluptatem.\n\nPariatur quia quo et autem aliquid. Laborum eligendi vitae praesentium soluta tempore laboriosam delectus. Iusto et qui est eligendi. Ipsa repellendus dignissimos consectetur a recusandae laboriosam a.\n\nEt beatae officiis quasi aut omnis veniam consequuntur. Modi animi quo velit odio molestiae ad. Similique et qui fugiat perspiciatis et voluptatibus. Excepturi et sapiente sed voluptas voluptate voluptas ut.\n\nQui eligendi voluptas eos. Nam deserunt accusantium excepturi quasi necessitatibus. Sequi perspiciatis tenetur voluptas recusandae.\n\nInventore suscipit non qui fugiat ullam incidunt nam ut. Id ut aperiam consectetur soluta quasi. Placeat sit nostrum sint.\n\nRecusandae non sint enim id. Modi nostrum nostrum sint impedit itaque voluptas. Excepturi ut quam adipisci natus placeat veniam fuga. Et vel eveniet non dignissimos asperiores nemo.\n\nDeserunt quod molestias est eaque minima. Iste eveniet excepturi quia maxime dolorem. Sed est aliquid libero.', 'sunt-porro-est-et', 0, '2020-11-27 23:56:29', '2020-11-27 23:56:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_kuis` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilihan_a` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilihan_b` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilihan_c` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilihan_d` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kunci_jawaban` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'opsi values : A/B/C/D',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pertanyaan` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `row_id_komentar` bigint(20) UNSIGNED NOT NULL,
  `isi_reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `row_id_user`, `row_id_komentar`, `isi_reply`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'Mollitia animi non iure placeat quod voluptates. Perferendis quia repudiandae perspiciatis hic amet. Nihil ea facilis maiores numquam qui.\n\nQuae dolores quas tempore aut libero dolorem. Beatae nostrum voluptas soluta voluptas cumque totam. Quia eveniet eos tempora voluptatibus reprehenderit. Molestiae esse amet modi placeat ipsam.\n\nAutem dolorum reprehenderit mollitia. Quo et nam dignissimos dolorum sed delectus praesentium ex. Reiciendis enim temporibus necessitatibus et. Voluptatem commodi sunt necessitatibus non laborum. Vitae adipisci labore ut veritatis quam.', '2020-11-27 23:56:46', '2020-11-27 23:56:46', NULL),
(2, 2, 1, 'Eum aut aspernatur dicta perspiciatis et. Sunt tenetur libero quia vitae enim voluptates maiores illum.\n\nVoluptatibus facilis nulla molestiae porro. Sit quos voluptatem rem odio. Quaerat ea accusantium quibusdam placeat maxime.\n\nMinima repudiandae ab commodi expedita sed. Quo et voluptate enim animi. Et saepe voluptates dolorum omnis. Aut eum veniam maiores et.', '2020-11-27 23:56:46', '2020-11-27 23:56:46', NULL),
(3, 2, 1, 'Sit blanditiis quisquam corrupti voluptas hic saepe. Dignissimos qui dolores voluptatem sed. Dolor delectus ex ex. Rerum ad neque et sed. At officia aut at accusamus quae quis placeat.\n\nIn consequatur natus consequatur. Autem minus reiciendis repellendus tenetur rerum et. Ab aspernatur tenetur sed non. Eos ea quis quas esse voluptas nisi.\n\nIn temporibus et tenetur minus vero. Labore voluptas molestiae animi. Ad consequatur aut eligendi rerum. Explicabo qui explicabo totam laudantium. Libero dolorum ut maxime.', '2020-11-27 23:56:46', '2020-11-27 23:56:46', NULL),
(4, 1, 2, 'Asperiores et dolore nostrum dolorum libero sint provident ab. Soluta eligendi id praesentium quis ab fugiat. Adipisci molestiae culpa quia molestiae. Aperiam ad assumenda quaerat rerum.\n\nTotam consectetur laudantium id perferendis est. Id quo a laudantium et quo vitae. Non et non omnis alias ipsa cumque.\n\nNam deleniti accusamus unde animi. Culpa ducimus doloremque omnis autem est debitis. Earum est nemo a assumenda odio. Voluptatem natus eius reprehenderit.', '2020-11-27 23:56:47', '2020-11-27 23:56:47', NULL),
(5, 2, 2, 'Esse adipisci sed in dolor. Placeat libero dolorem nihil pariatur eius sed. Omnis fuga minus delectus modi aperiam quis. Qui repellendus numquam nostrum.\n\nDoloremque necessitatibus nostrum et reiciendis. Molestiae culpa ut quos velit. Dignissimos corrupti dolorem quae dolorem voluptas reiciendis quo.\n\nAmet a laborum recusandae provident veritatis rerum. Iste harum eligendi maxime ex aut porro.', '2020-11-27 23:56:48', '2020-11-27 23:56:48', NULL),
(6, 2, 2, 'Et et est natus. Mollitia vitae sunt rerum sint molestiae. Ut quas provident deserunt in consequatur qui.\n\nVoluptatem nihil enim vel doloribus consequuntur facilis. Dolorum sequi quisquam aut. Officia sunt veritatis cumque tenetur eaque. Minus sunt sit at maxime.\n\nDeserunt non laboriosam ut ducimus quasi. Debitis molestiae iste assumenda. Optio excepturi asperiores magnam quod.', '2020-11-27 23:56:48', '2020-11-27 23:56:48', NULL),
(7, 2, 3, 'Ea iure repellendus voluptas. Officia nobis laborum nisi accusantium laborum nulla. Magni nam voluptatem similique et repellat dolor quis. Unde omnis quia quod omnis non aut et.\n\nQuis porro commodi ut laborum sed voluptas et velit. Enim fugit quasi et sit. Dicta itaque voluptatem accusamus quo.\n\nFacere voluptatem consectetur ut nesciunt ut. Et voluptatem accusamus aliquid voluptas cum. Vel voluptas dolore consequatur vel distinctio. Exercitationem qui velit ratione ut.', '2020-11-27 23:56:48', '2020-11-27 23:56:48', NULL),
(8, 2, 3, 'Non numquam ex voluptas sit vel omnis. Modi totam est aut non sequi. Accusamus accusantium expedita deleniti consequatur culpa sit consequatur. Voluptatem incidunt quam architecto ipsa.\n\nAut commodi nemo eum omnis dolor. Ut et doloremque molestias. Delectus et velit consectetur quis dolorum magni nam.\n\nIpsum molestiae minima et libero nemo reiciendis fuga. Veniam ipsam non quaerat est dolorum rem. Omnis animi sit quia et deleniti corrupti in iusto. Asperiores laudantium vel voluptas harum quae eos.', '2020-11-27 23:56:48', '2020-11-27 23:56:48', NULL),
(9, 1, 3, 'Expedita in esse amet animi eum quis. Minus minima pariatur doloremque possimus quaerat. Doloribus perspiciatis quas voluptatem qui impedit libero id. Placeat voluptas et ea tempora vel.\n\nA rerum occaecati neque iusto. Mollitia culpa illo voluptatem voluptas omnis et occaecati. Est qui et recusandae sint dolorem. Aliquam molestiae facilis et qui earum. Temporibus quia itaque ducimus illum quos nulla.\n\nRerum illo voluptate libero commodi blanditiis. Nulla ut quas aut praesentium cum at.', '2020-11-27 23:56:48', '2020-11-27 23:56:48', NULL),
(10, 1, 4, 'Rerum hic ut est rerum rerum eius et. Ut nulla impedit mollitia aut iusto aperiam optio. Similique dolor eligendi commodi quae. Nam dolorum dignissimos in dolor.\n\nAccusantium est temporibus quasi et nisi. Dicta quis nisi nisi quo sint ipsam. Voluptatem similique ex nihil minus rem alias. Sit facilis nesciunt necessitatibus ut nulla possimus.\n\nFuga exercitationem ad iste. Est itaque nulla voluptates rerum maxime natus. Officiis omnis optio ut vero.', '2020-11-27 23:56:49', '2020-11-27 23:56:49', NULL),
(11, 1, 4, 'Impedit veritatis quaerat culpa dolorum placeat. Placeat corrupti veniam quaerat. Facere itaque cupiditate quia excepturi. Suscipit ex necessitatibus doloribus cumque sed inventore sed.\n\nNihil facere eum vel delectus. Odit odit dolore quas cumque. Dolorem id fuga nobis laborum beatae velit dolores.\n\nNumquam assumenda porro ullam ratione cum nobis est. Omnis nobis totam nisi et consequatur ut. Officiis ut qui qui perferendis rerum eius. Amet labore repellat voluptate quia aperiam sunt aut nulla. Saepe dolorem debitis et tenetur iure dolores.', '2020-11-27 23:56:49', '2020-11-27 23:56:49', NULL),
(12, 2, 4, 'Id at ipsa et enim. Earum animi ipsum perspiciatis est facilis quia. Qui officiis porro beatae doloribus et placeat.\n\nRepellat voluptatem sunt qui qui. Velit ea dicta ut. Ullam dignissimos quia hic consequatur fuga et quis.\n\nNostrum natus libero dolores ea ut doloribus. Dolor ipsam quod modi aliquam eum. Sunt optio rerum possimus odit.', '2020-11-27 23:56:49', '2020-11-27 23:56:49', NULL),
(13, 1, 5, 'Qui ex pariatur assumenda excepturi. Tenetur nisi atque rerum debitis molestias voluptatibus accusantium. Voluptate corporis illo officiis aliquid necessitatibus expedita. Labore dolor ut assumenda voluptas et sit nostrum.\n\nBeatae et placeat velit eum minus qui deleniti. Eius libero libero ipsam voluptatibus sequi labore. Quis reiciendis fugit ut tempora autem ipsam.\n\nNihil incidunt iusto laudantium. Tenetur cupiditate ad nihil et deserunt. Ut quis et neque non enim quidem.', '2020-11-27 23:56:49', '2020-11-27 23:56:49', NULL),
(14, 2, 5, 'Id id cum esse aut sed vel doloribus. Qui ullam amet autem consequatur ut voluptas odit. Nostrum necessitatibus culpa dicta tempora maxime. Sunt quia reiciendis ea eum cupiditate.\n\nCorrupti voluptate et totam quibusdam necessitatibus ut. Reiciendis debitis quis enim iusto eum iste quis. Corrupti corporis sapiente et qui.\n\nReprehenderit saepe dolore et accusamus sed quam. Placeat consequatur repellendus deleniti quo cumque architecto. Et consectetur a aut nam nisi. Voluptatem enim aspernatur omnis autem error doloribus velit.', '2020-11-27 23:56:50', '2020-11-27 23:56:50', NULL),
(15, 1, 5, 'Sapiente cupiditate ab quod ratione. Totam praesentium facilis omnis suscipit est praesentium. Perferendis quo fuga sit sequi. Ut deleniti occaecati dolor reprehenderit dolor et.\n\nEum id totam ducimus magnam iusto. Illum natus qui numquam velit debitis ut. Aut dolorem consectetur vel nisi ea qui necessitatibus.\n\nEt ut voluptas eveniet inventore. Reprehenderit sed ad et quo labore molestias. Voluptatem aut qui sed quaerat voluptate. Consequatur ut nisi voluptate animi hic maiores aut.', '2020-11-27 23:56:50', '2020-11-27 23:56:50', NULL),
(16, 1, 6, 'Et illo et velit debitis qui quibusdam quia nemo. Sapiente itaque commodi et assumenda non. Impedit et et itaque aspernatur laboriosam cum sunt.\n\nConsequatur et repudiandae omnis qui officiis. Earum modi illo nesciunt corporis. Nam asperiores tenetur necessitatibus. Eum ex est numquam illo vel necessitatibus.\n\nFugiat non et ut sit consequuntur voluptas inventore. Tenetur ex qui earum pariatur. Consequatur delectus et voluptatum quia numquam officiis deserunt. Quisquam et quis neque libero amet vel neque. Non consequuntur qui error sed et similique saepe.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(17, 2, 6, 'Vero quidem in sit laboriosam maxime. Et minus expedita praesentium qui voluptatem facere id in.\n\nFugit consectetur sapiente cupiditate ut nihil impedit hic dolores. Voluptatum repellat cupiditate delectus. Vitae corrupti beatae inventore. Tempora eveniet accusamus voluptatem consequatur modi nostrum.\n\nBlanditiis est est veniam nesciunt sit qui qui. Hic vel suscipit hic et optio. In tenetur voluptatem omnis.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(18, 2, 6, 'Et ad sed qui alias aperiam itaque sint. Voluptas saepe animi esse cumque aut maiores illum voluptatibus. Fuga eos molestiae ullam. Sint sequi necessitatibus cum voluptatibus ut rerum deleniti. Sint hic rerum quasi quo expedita doloribus et.\n\nVoluptas molestiae amet reiciendis sit. Eligendi nesciunt cum aut tempora sint.\n\nDelectus suscipit autem consequatur ut debitis et. Et magni eum sunt. Est eos corporis expedita ipsum consequatur expedita asperiores. Rerum rerum qui optio ut at.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(19, 1, 7, 'Voluptas distinctio velit quo porro sint nobis. Delectus a exercitationem non qui error. Et dolores voluptas architecto illo quisquam aut itaque.\n\nVitae minus earum repellat laborum sed vel architecto. Sed sit illum dolores dolor. Placeat voluptas provident reprehenderit. Incidunt nostrum illo eaque doloribus amet cumque incidunt.\n\nExpedita aliquid rerum quia ut et. Sit nam eos ad aspernatur fugit. Vel et cumque sapiente consequatur sit sunt. Molestiae sit tenetur labore quasi.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(20, 1, 7, 'Animi eaque ut eum natus. Eligendi libero asperiores id nihil. Et natus in et dolorum.\n\nEarum in corporis et eos et repellendus. Porro sunt autem nostrum. Modi sed veniam quaerat est ut beatae repellat.\n\nDolor pariatur sed eos maiores rerum eum voluptas ex. Laudantium expedita voluptatibus dolores eligendi et qui ab.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(21, 2, 7, 'Aperiam repudiandae rerum libero aut libero. Fuga iusto totam optio ducimus reprehenderit vero ipsum. Provident aut illum a rerum. Ad harum labore quia aut ab.\n\nNon ducimus quisquam sunt esse. Vel similique quisquam nulla minus. Asperiores amet et perspiciatis est. Beatae veritatis repellat a eaque fugiat quo voluptas hic.\n\nRepellendus fuga dolore sint. Sunt assumenda quod labore. Quas nesciunt aut atque. Molestias architecto numquam laboriosam non vero voluptate.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(22, 2, 8, 'Repellat est laudantium quisquam doloremque. Est voluptatum quis maxime aut excepturi aliquid placeat nam. Culpa qui in explicabo est adipisci. Omnis sint a minima laboriosam.\n\nAspernatur quos natus neque sapiente odio. Et odit et a voluptas maxime eum incidunt. Provident reiciendis et vel aut laboriosam quis vero. Eligendi velit molestiae voluptas sint non debitis.\n\nNumquam enim et corporis. Cum sint temporibus voluptate quod rerum tenetur.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(23, 2, 8, 'Rerum maxime occaecati vel sit adipisci voluptatem. Atque magni minus deleniti quia accusantium consequatur neque. Inventore beatae odio aperiam hic ut voluptas.\n\nMolestias quia voluptas recusandae necessitatibus. Omnis nemo molestias sed illo molestias laboriosam dolores. Maiores quidem praesentium nihil corporis voluptatem dignissimos nisi.\n\nQui impedit explicabo corrupti. Voluptates totam praesentium illo.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(24, 1, 8, 'Autem delectus tenetur dolorem nesciunt. Illum eligendi numquam et et sequi. Est veniam est facere est. Possimus error sunt qui laborum libero dolorem commodi officia. Suscipit dicta temporibus ad.\n\nDistinctio molestiae quod sequi et voluptas. Mollitia eos nisi est quia vel nemo autem. Pariatur fugit ad consequuntur dolor qui expedita eveniet inventore.\n\nEt delectus quo sint iusto autem aut non. Magnam voluptates quis doloribus sunt. Rem excepturi ut quia et. Hic deserunt eos perferendis harum.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(25, 1, 9, 'Quia qui nemo deserunt ipsum illo beatae non omnis. Quibusdam occaecati ab qui enim enim aut sed. Sed dolor aspernatur itaque tempora nisi impedit.\n\nOmnis accusamus cumque earum vel sunt. Nostrum eaque neque totam delectus. Consequuntur quia adipisci praesentium soluta natus est harum. Distinctio sit eum nam sapiente.\n\nIllo occaecati dolorum quod rem laboriosam aut quia. Quaerat omnis voluptates et autem fugiat. Ducimus doloremque voluptas officia eos sit ducimus aut corrupti. Et vitae non occaecati explicabo et non sed.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(26, 2, 9, 'Doloribus incidunt error minus voluptas enim. Impedit itaque nihil voluptatem maiores et sunt et. Quam ipsum ut perferendis quia atque.\n\nNam commodi laudantium ducimus quis. Illo debitis laudantium eum quos suscipit. Sunt delectus dolor omnis quidem dignissimos molestiae.\n\nTempora vero est nostrum dolor quam veritatis. Dolorem dolores eum omnis est. Neque facilis quo facere autem incidunt officia architecto. Modi ex occaecati deserunt rerum blanditiis.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(27, 1, 9, 'Repudiandae earum quaerat id qui. Quam at laudantium quis occaecati delectus. Architecto repudiandae quis est corporis libero molestiae.\n\nNecessitatibus et laudantium nisi quia ad veniam pariatur et. Aperiam blanditiis natus est harum. Explicabo unde praesentium consectetur dolore autem vel dignissimos. Eum magnam ab quis sunt cumque.\n\nOmnis animi vitae ipsam vero id id. Numquam id in voluptatibus. Molestiae aspernatur quis repellendus id a nobis. Mollitia officia nobis dignissimos occaecati.', '2020-11-27 23:56:51', '2020-11-27 23:56:51', NULL),
(28, 2, 10, 'Sit quisquam corporis hic delectus amet autem expedita. Rerum nulla inventore molestias modi.\n\nAtque dolores quasi velit non necessitatibus est. Sequi ut quisquam et at sit omnis. Molestias ut consequatur aut. Dolorum harum a debitis.\n\nBeatae aliquam magnam quia eaque. Voluptatem accusantium assumenda maxime eaque cupiditate adipisci. Non accusantium quos explicabo voluptatum.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(29, 1, 10, 'Ea asperiores et quam omnis optio quo delectus voluptatem. Voluptate aut cumque aliquam ab repellat nostrum.\n\nLaboriosam quasi reiciendis et quis minima ut. Sunt voluptatem sit repellendus hic eligendi porro. Adipisci sit illo quaerat quia nesciunt voluptatem reiciendis. Voluptatem voluptas sint est quia ut sint.\n\nFugiat voluptatem et ut explicabo ut inventore aut. Aut voluptas aperiam dolor voluptatem. Aliquid blanditiis unde veniam atque sit repellendus.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(30, 2, 10, 'In eaque ex sed cum ab. Inventore adipisci adipisci occaecati praesentium ea officia velit ratione. Cupiditate atque magni sed consectetur.\n\nReiciendis officiis qui ea et. Repellendus earum cupiditate dolor laboriosam quae.\n\nMagnam enim deleniti iusto quo laborum. Occaecati vel et nisi qui accusantium. Cupiditate et dolorum eos atque totam. Minus ullam qui quia aliquid deleniti numquam. Dolore ut molestias est aut rerum laborum.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(31, 2, 11, 'Recusandae magni dolores maiores doloremque accusamus eum. Consectetur dolores quo optio doloremque dolor corrupti voluptate. Ut eligendi ut qui odit vero nihil illo. Aut qui minus nulla facere.\n\nQui id sunt culpa ipsa exercitationem ad cum veniam. Beatae maiores vitae saepe iste occaecati voluptatem.\n\nProvident velit iure id aliquam expedita ad distinctio excepturi. Quasi cupiditate ut sit ad explicabo quas modi. Consequatur hic temporibus nesciunt et. Rem necessitatibus doloribus ea modi adipisci aspernatur facere.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(32, 2, 11, 'Ratione repellat blanditiis saepe asperiores ut molestias. Adipisci excepturi dolorem et cum consectetur odio et. Voluptatem velit minima et. Animi maxime quo voluptatum.\n\nQuia delectus quos soluta aut quae. Ad animi libero necessitatibus eaque et. Excepturi sed quia ex numquam quo. Excepturi corrupti non sit asperiores dolore quidem sit. Soluta officiis in in est.\n\nEnim sint vitae accusamus vitae quis. Accusamus voluptatem qui occaecati est qui corrupti.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(33, 2, 11, 'Possimus rerum est sint voluptas ullam voluptatum. Quaerat eveniet est ipsum blanditiis officia nobis. Harum quod beatae consectetur dolor pariatur facilis.\n\nSapiente autem corporis soluta doloremque et aut ratione. Qui quia consequatur dolores quae et in. Corporis consectetur hic in reiciendis possimus cum. Reiciendis nam laboriosam doloribus doloribus.\n\nEarum quis reiciendis aspernatur voluptatem. Aut est nobis ut rerum cumque velit necessitatibus. Quo ipsum ducimus illum similique fuga laboriosam aut. Exercitationem corrupti eum quos aut aliquam iusto suscipit est. Aliquid ut eos qui quidem aut ut non.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(34, 1, 12, 'Illo consectetur occaecati quo omnis quia sapiente harum. Corporis possimus qui corporis iure quis nobis repudiandae non. Voluptatibus vel voluptatem voluptates aut sit. Non odio esse deserunt assumenda rerum eveniet. Corporis qui quasi vel ut.\n\nMolestiae ut repellat laborum fugit iure fuga sit quasi. Id iure et suscipit pariatur. Dolor officiis incidunt animi aut. Iusto commodi veniam et quia.\n\nHic fuga nihil est corrupti et. Quo sit sint aliquid dolore adipisci. Sint vero id amet asperiores optio quo nesciunt dolor. Non quas quis odio voluptatem consequatur sit excepturi.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(35, 1, 12, 'Quo qui illum rerum soluta rerum. Quae quod cupiditate sint provident qui consequatur. Ea illum iste sequi mollitia error qui.\n\nQui temporibus culpa expedita et eligendi. Voluptatem debitis voluptatibus dolores provident qui. Ullam sint laboriosam velit nobis est doloribus nisi aut. Ducimus quia ducimus adipisci ducimus sunt facilis voluptatem.\n\nQui aut placeat fugit beatae. Assumenda repellat dolores dolore sint numquam. Optio eum velit nam molestiae natus omnis.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(36, 1, 12, 'Tempore eos ab minima similique. Optio est assumenda quam facilis autem tenetur facere excepturi. Suscipit excepturi id aperiam nulla eos accusamus.\n\nVelit cumque adipisci cumque est asperiores enim veritatis. Beatae numquam id illo et. Eaque accusamus perspiciatis molestiae ut et non itaque.\n\nVeniam fugit aliquam id ducimus dolor. Ut distinctio dignissimos et consequatur voluptas. Nulla id vitae ratione aliquam voluptates amet. Quo aperiam laborum voluptas illo harum expedita.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(37, 2, 13, 'Est hic provident quia. Repellat et pariatur pariatur saepe non aut cum similique. Aliquam aperiam iusto non occaecati.\n\nOdio esse qui dolorem sed. Ut quisquam magni aut modi nam eum consequuntur. A voluptas porro voluptatibus corporis culpa. Hic reiciendis odio aut et.\n\nUt voluptatum ut quae ipsam sed aut soluta repellendus. Sapiente quaerat corporis esse voluptatem est sit libero. Et quae est eius architecto.', '2020-11-27 23:56:52', '2020-11-27 23:56:52', NULL),
(38, 1, 13, 'Rem libero dolor et enim. Atque beatae et illo delectus similique.\n\nCupiditate a et ipsum minima illo qui. Distinctio omnis est consectetur qui voluptate. Et aut earum perspiciatis. Voluptatum illo quisquam sunt voluptatibus consequatur. Rerum sequi accusamus ad.\n\nDucimus similique nisi quidem dignissimos accusamus consequatur autem. Architecto nobis vero aut voluptatem.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(39, 1, 13, 'Ipsam dolorem quod accusantium non adipisci illum corporis. Alias eius omnis qui non et eum non. Enim iste reiciendis quod voluptatem sequi magni commodi et.\n\nSit blanditiis delectus a commodi iure. Excepturi quia impedit pariatur non velit ut quis. Dolor exercitationem enim maiores voluptate consectetur quia. Reprehenderit expedita rerum nesciunt vel sequi.\n\nQuis nobis rem ut soluta quia. Ipsum vero dignissimos et consequatur eaque et. Doloribus praesentium quidem qui fuga corrupti veniam consequuntur. Expedita illo illo animi provident vero labore iure.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(40, 1, 14, 'Eum est ut provident quae debitis aut ut. Aut assumenda doloribus nostrum odit est. Explicabo saepe reiciendis nesciunt. Expedita cupiditate blanditiis fuga earum.\n\nUt perferendis modi ut numquam. Quam voluptatem sint nesciunt magni sit.\n\nOmnis omnis repellat minima veritatis. Nihil earum qui molestiae exercitationem aspernatur distinctio quibusdam laboriosam. Aut et tempora voluptates totam corporis sint ab possimus.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(41, 2, 14, 'Aut aut dolores possimus libero magnam quia. Voluptatem aut ut eum voluptatem sit doloremque aut. Ipsam atque cum atque ut est dolore.\n\nEarum quisquam est non reprehenderit culpa iusto beatae. Dignissimos quidem alias facere facilis. Fuga et vitae animi illo voluptatem voluptate perspiciatis.\n\nLabore vel ut eius doloribus enim. Deleniti accusamus accusantium sunt qui iste.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(42, 2, 14, 'Molestias molestiae esse quia dolores aut et nulla. Et quis omnis sit tenetur. Error natus rerum iste.\n\nBeatae animi minima est autem quaerat corrupti. Id eius fugit excepturi nesciunt voluptate. Deleniti ipsum corporis maxime quo enim porro necessitatibus. Dolore molestias tempore nihil.\n\nError dolorem perspiciatis quis earum ut ad. Modi natus aspernatur esse at. Ut est error nulla inventore omnis.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(43, 2, 15, 'Nulla cum et porro nesciunt. Provident dicta impedit nisi fugit asperiores qui possimus rerum. Similique voluptate omnis odio ut. Qui rerum ullam distinctio necessitatibus aut in.\n\nRecusandae corporis autem corporis omnis eveniet nostrum consequatur error. Cum eum nisi aliquid sit aut. Quis sapiente laborum omnis saepe sed ipsam similique consequuntur.\n\nEt officia quo qui recusandae earum. Libero autem deleniti voluptatibus repellat facere assumenda in. Ut consequatur blanditiis fugiat voluptatem laboriosam. Delectus nihil commodi dolorem odit distinctio.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(44, 1, 15, 'Id suscipit quis at dicta ut. Sint incidunt rerum nihil ut. Odio in et id cupiditate cumque qui.\n\nSunt et quo blanditiis quas. Sit qui tempora veniam optio. Est sit suscipit architecto quidem quis debitis earum. Tenetur aut quibusdam quaerat saepe voluptas vero.\n\nVelit eum enim alias earum maxime. Cumque dolorum eius velit reprehenderit voluptatem. Quae voluptates natus quia sint repellat ipsam voluptas cum.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(45, 2, 15, 'Dolores dignissimos natus eum excepturi. Quae omnis corrupti beatae expedita harum ad fugit. Cumque voluptatem consequatur voluptas ut maiores sunt. Eos et molestias reprehenderit voluptas numquam aut dolor.\n\nQuia beatae ut mollitia vel nam placeat. Odit est sunt et ut sint. Enim ipsum architecto neque veritatis. Fugiat enim consectetur consequuntur non consequuntur.\n\nTotam quam animi quia. Sit totam voluptas sed voluptas ut culpa. Eos odio iure quibusdam impedit sunt voluptatem.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(46, 2, 16, 'Expedita fugit voluptate officiis illum amet et sit voluptas. Omnis culpa dolorem laborum nostrum. Voluptas sed nobis non odit minima cumque eum. Neque delectus consectetur natus eos nihil sit sed expedita.\n\nEum asperiores temporibus eaque temporibus aut esse. Officiis consequatur nostrum odio vel quae. Unde perspiciatis recusandae cumque porro doloremque quasi eos. Voluptas illum sed eum similique aliquam.\n\nDolores officia amet provident consequuntur rerum quia magni. Ducimus vitae rerum et laboriosam molestias earum. Ea quae nobis vel et aliquam. Velit velit beatae autem perspiciatis veniam inventore aliquam.', '2020-11-27 23:56:53', '2020-11-27 23:56:53', NULL),
(47, 2, 16, 'Nihil facilis optio reiciendis aliquid autem blanditiis distinctio. Eveniet nostrum deleniti enim doloribus libero quae ex. Ipsa voluptas corporis eos voluptatum est.\n\nAsperiores animi nulla enim voluptatem impedit fugit. Culpa impedit tempore sint ea quia aspernatur atque. Officiis ut perspiciatis rerum minima id.\n\nSed voluptate maiores et iure. Rerum veniam quaerat aliquam ut corrupti enim. Quisquam architecto voluptatem deleniti aut.', '2020-11-27 23:56:54', '2020-11-27 23:56:54', NULL),
(48, 2, 16, 'Omnis iste tempore officia. Est molestiae veritatis quibusdam. Quo ducimus dolorem amet et dignissimos soluta laudantium. Nisi quis dolor architecto rerum repellat ad iste. Consequatur similique eos est non aut totam provident.\n\nIpsa optio ea in perspiciatis optio quibusdam nihil. Excepturi maiores blanditiis amet iste eveniet. Neque accusamus et cumque quia eveniet cum nisi. Enim ipsa quod praesentium distinctio. Facere est aliquid similique ut praesentium.\n\nConsequuntur explicabo velit aliquid eveniet. Repellat corrupti inventore esse ea. Impedit qui suscipit deleniti tenetur architecto in perspiciatis. Voluptatem quod dolores consequatur quod. Harum ut repudiandae ut quam reiciendis maiores esse.', '2020-11-27 23:56:54', '2020-11-27 23:56:54', NULL),
(49, 1, 17, 'Ab beatae nostrum accusamus minus eos debitis expedita. Numquam doloribus corporis qui sit necessitatibus consequatur molestiae reiciendis. Veniam cupiditate iure tempora ab veritatis aliquid sed quam. Molestiae sit ullam iure fuga pariatur et. Ab omnis magnam perspiciatis ut quibusdam aut natus.\n\nVoluptates aut natus culpa. Accusantium deleniti quaerat pariatur ipsum eum et. Veritatis qui eum et tenetur voluptas inventore voluptatem. Minima commodi itaque neque nemo eos.\n\nSed beatae modi quasi qui voluptas minus. Tempore ut magnam quia aut sequi ab. Non adipisci iure ducimus ut deserunt qui.', '2020-11-27 23:56:54', '2020-11-27 23:56:54', NULL),
(50, 2, 17, 'Velit quo quidem est et. Nostrum voluptates rem sapiente repudiandae. Consequatur et sint quis quibusdam.\n\nCulpa pariatur suscipit totam corrupti omnis sequi voluptatibus a. Eum hic adipisci blanditiis et. Rem voluptas est assumenda non doloremque culpa commodi.\n\nMollitia odit sed praesentium a. Laudantium consectetur nostrum ut dolor. Magnam enim ea iure facilis illo excepturi sed. Minima consectetur sed eaque fuga eos molestiae aut.', '2020-11-27 23:56:54', '2020-11-27 23:56:54', NULL),
(51, 2, 17, 'Minus quos non deleniti nisi sunt qui iure. Odio enim commodi sed consectetur iure. Ullam magnam laboriosam quia alias fugiat maxime voluptatem aliquid. Quia accusamus ipsum eos nemo quia.\n\nUnde temporibus omnis sunt doloremque quis suscipit doloremque. Fugit asperiores aut consequatur iure. Vel tempore omnis quisquam culpa et impedit debitis.\n\nNihil incidunt commodi dolores sit sint est quam. Est quia tenetur ea dolore magni porro. Numquam accusantium voluptas amet quis sint. Nihil qui autem consectetur laborum neque veniam.', '2020-11-27 23:56:54', '2020-11-27 23:56:54', NULL),
(52, 1, 18, 'Exercitationem eaque aspernatur est totam ipsum. Odio nihil quia sed laborum ex. Sequi consequatur illum et porro. Debitis distinctio corrupti et sequi ut laborum est est.\n\nQui nihil tempora ut optio soluta animi. Nisi dolorem culpa fuga eum nihil. Esse quia voluptatibus sit nihil impedit aut sit. Aut occaecati est quo harum maxime cupiditate.\n\nLaudantium quia quisquam autem iste. Assumenda quis vitae veniam animi id. Mollitia iste id id velit modi.', '2020-11-27 23:56:55', '2020-11-27 23:56:55', NULL),
(53, 1, 18, 'Nulla maxime enim aut. Maxime perferendis magni perferendis nihil voluptate quas. Earum quae sint ducimus impedit necessitatibus nemo. Vel consequuntur suscipit vel aut.\n\nVoluptatem accusantium libero nemo aspernatur dolores aut. Voluptates aut voluptatibus dolorem possimus. Animi odit quis exercitationem nisi.\n\nVel excepturi expedita qui architecto. Rem id itaque fugiat alias et. Ipsum aperiam cupiditate dolor dicta et deserunt rerum.', '2020-11-27 23:56:55', '2020-11-27 23:56:55', NULL),
(54, 2, 18, 'Delectus officiis et molestiae voluptas quaerat. Id dolorum labore eligendi ex delectus excepturi minima. Hic deserunt eum cupiditate eum consequatur harum consequatur. Voluptatem qui ipsum quam nostrum non rerum. Vero nulla blanditiis voluptas sit et hic ut.\n\nTempora dicta consectetur delectus quod aliquid expedita dignissimos. Qui minima ut voluptatibus qui aut voluptate.\n\nAmet sit est aliquid expedita. Et eligendi nulla necessitatibus. Enim natus fuga in omnis.', '2020-11-27 23:56:55', '2020-11-27 23:56:55', NULL),
(55, 1, 19, 'Qui aliquam voluptatem accusamus aspernatur sit. Nam voluptatem facere vitae consequatur. Sed tenetur consequatur eum sint. Quo aut inventore iste. Possimus at facilis dolore sit dolores.\n\nConsectetur voluptas omnis temporibus porro illum beatae tempore. Deleniti iste reiciendis sit eum nihil odio iusto. Perferendis illum ab molestias laborum voluptatem nam. Dolore fugit voluptatem aut quisquam.\n\nMaxime eum quo quis dolore et sint. Autem omnis pariatur voluptatem consectetur hic velit quia. Assumenda quo et vel.', '2020-11-27 23:56:55', '2020-11-27 23:56:55', NULL),
(56, 1, 19, 'Magni quis sit ea mollitia hic sit. Sint tempora aliquid eos autem nesciunt. Aut quaerat est minus. Similique pariatur nihil et perferendis corrupti dolor.\n\nEt voluptas in vitae occaecati. Doloremque repellat nihil recusandae quia dolor non. Ut excepturi earum molestiae dolorem fugit est optio.\n\nPerspiciatis et voluptas aut maiores quis laborum. Consequatur et delectus error nisi consectetur quam. Impedit fugit quibusdam inventore totam. Quibusdam corrupti rerum expedita ratione voluptas omnis. Aut vel harum quo in.', '2020-11-27 23:56:55', '2020-11-27 23:56:55', NULL),
(57, 1, 19, 'Aliquid quas optio dolorem reprehenderit. Suscipit sunt molestiae aut ratione eum et. Voluptatibus et nulla qui ut beatae aut. Sed eum aspernatur maxime aut voluptatibus.\n\nEius et earum veniam molestiae. Ducimus adipisci accusantium repellat ipsum excepturi quia. Et magni rerum labore atque recusandae qui.\n\nAperiam eos dolorum dolorem. Magnam porro voluptatem cumque occaecati sed. Ut sed possimus voluptates error. Ipsa eaque magni nihil sunt placeat.', '2020-11-27 23:56:56', '2020-11-27 23:56:56', NULL),
(58, 1, 20, 'Nesciunt consequatur voluptatum enim incidunt odit aut sunt ut. Esse ab nisi inventore et ipsum.\n\nVoluptate aut corrupti rerum repellendus nam. Dolorum dolorem blanditiis cum ut dolorum temporibus.\n\nVel vel commodi quam ipsa. Laboriosam ducimus quam ex minima quo. Quisquam cupiditate doloremque est earum inventore tenetur. Unde necessitatibus a nulla.', '2020-11-27 23:56:56', '2020-11-27 23:56:56', NULL),
(59, 1, 20, 'Eaque nesciunt qui eligendi tempora et rem consequuntur. Corporis earum non tempore esse et. Cumque accusantium neque similique nostrum nesciunt consequatur cum. Corporis est eius facere quam. Sit nobis hic tempore dolorem neque est officia et.\n\nEos consequuntur quidem iste porro dolor consequatur. Aperiam fugiat veniam accusantium rerum nesciunt. Accusamus esse eaque cupiditate doloremque. Cumque quia at omnis et.\n\nQuisquam officia laudantium est. Consequatur nihil officiis magnam harum nobis voluptas numquam iure. Vitae qui aperiam perferendis et sunt ipsa dolor. Iure aut quis id illo totam.', '2020-11-27 23:56:57', '2020-11-27 23:56:57', NULL),
(60, 1, 20, 'Sit ab consectetur ea sint vel exercitationem corporis. Ea provident aut ratione quia. Voluptatibus impedit distinctio recusandae laboriosam. Ut voluptatum eligendi quidem nostrum.\n\nQuasi est quidem consequatur suscipit tempore. Animi enim architecto eligendi. Ex doloremque qui vel quidem.\n\nAtque quia aut ullam asperiores magni eligendi non. Suscipit rerum voluptates minima nobis et praesentium. Enim aliquam rerum ut aliquid debitis laborum vero.', '2020-11-27 23:56:57', '2020-11-27 23:56:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_kategori` bigint(20) UNSIGNED NOT NULL,
  `row_id_kuis` bigint(20) UNSIGNED DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_kesulitan` tinyint(4) NOT NULL COMMENT '1 = BEGINNER, 2 = INTERMEDIATE, 3 = ADVANCED',
  `total_durasi` int(11) NOT NULL,
  `status_complete` tinyint(4) NOT NULL COMMENT '0 = BELUM, 1 = SUDAH',
  `status_berbayar` tinyint(4) NOT NULL COMMENT '0 = GRATIS, 1 = BERBAYAR',
  `url_foto_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `row_id_kategori`, `row_id_kuis`, `judul`, `deskripsi`, `slug`, `tingkat_kesulitan`, `total_durasi`, `status_complete`, `status_berbayar`, `url_foto_banner`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, 'Learn Laravel 6 From Scratch', 'Dalam seri ini kita akan mempelajari laravel 6.0 dari benar - benar awal. Jadi ketika Anda belum pernah terjun ke dunia framework laravel, maka seri ini mungkin yang Anda cari selama ini.', 'learn-laravel-6-from-scratch', 1, 1299, 1, 0, 'https://parsinta.com/storage/images/series/belajar-laravel-60-dari-awal.jpeg', '2020-11-27 23:56:41', '2020-11-27 23:56:41', NULL),
(2, 1, NULL, 'Learn Laravel 7 From Scratch', 'Dalam seri ini kita akan belajar Laravel 7 dari awal, kita akan belajar basic sampai nanti akhirnya kita bisa buat aplikasi sederhana yang mungkin bisa meningkatkan skill Anda dalam membangun web dengan Laravel.', 'learn-laravel-7-from-scratch', 1, 1329, 1, 0, 'https://parsinta.com/storage/images/series/belajar-laravel-7-dari-awal-1587020073.jpeg', '2020-11-27 23:56:41', '2020-11-27 23:56:41', NULL),
(3, 1, NULL, 'What\'s New on Laravel 8', 'Di seri ini kita akan mempelajari tentang apa - apa saja fitur terbaru yang dirilis dalam Laravel versi 8 ini. Jika Anda tertarik, mari kita bahas step by step.', 'whats-new-on-laravel-8', 1, 999, 0, 0, 'https://parsinta.com/storage/images/series/apa-yang-baru-di-laravel-8-1599678926.jpeg', '2020-11-27 23:56:41', '2020-11-27 23:56:41', NULL),
(4, 2, NULL, 'Mastering Visual Studio Code', 'Kita akan belajar Visual Studio Code jauh lebih dalam, kita tidak akan belajar sekedar hanya memakai, namun bagaimana membuat kita nyaman memakai text editor ini.', 'mastering-visual-studio-code', 2, 2594, 1, 1, 'https://parsinta.com/storage/images/series/menguasai-visual-studio-code-1586930210.jpeg', '2020-11-27 23:56:41', '2020-11-27 23:56:41', NULL),
(5, 3, NULL, 'Learn Bootstrap 4', 'Ketika anda sudah bisa mengimplementasikan css dengan baik, kini tiba saatnya mulai menggunakan framework yang sangat sering digunakan oleh pengembang - pengembang saat ini.', 'learn-bootstrap-4', 1, 799, 1, 0, 'https://parsinta.com/storage/images/series/belajar-bootstrap-4-dari-awal.jpeg', '2020-11-27 23:56:41', '2020-11-27 23:56:41', NULL),
(6, 3, NULL, 'Learn Bootstrap 5 with SASS', 'Dalam seri ini kita akan belajar memakai Bootstrap dan yang pastinya itu adalah versi paling terbaru yaitu 5, dan disini kita juga akan mengimplementasikan Bootstrap dengan CSS Pre-processor yaitu SASS.', 'learn-bootstrap-5-with-sass', 3, 2550, 0, 1, 'https://parsinta.com/storage/images/series/belajar-bootstrap-5-dengan-sass-1595202841.jpeg', '2020-11-27 23:56:42', '2020-11-27 23:56:42', NULL),
(7, 3, NULL, 'Learn Tailwind CSS From Scratch', 'Dalam seri ini kita akan belajar tentang bagaimana sebenarnya cara memakai Tailwind CSS itu. Kita akan mempelajari beberapa teknik yang mungkin Anda sendiri belum pernah memakainya.', 'learn-tailwind-css-from-scratch', 2, 2223, 0, 1, 'https://parsinta.com/storage/images/series/belajar-tailwind-css-17-dari-awal-1599011327.jpeg', '2020-11-27 23:56:42', '2020-11-27 23:56:42', NULL),
(8, 3, NULL, 'Learn Tailwind CSS 1.1 From Scratch', 'Dalam seri ini kita akan bahas tailwind css dari awal, jadi jika Anda belum pernah menggunakannya sebelumnya, coba dulu untuk sekali. Kita akan belajar basic, layout, dan beberapa komponen penting yang sebenarnya semua kita bisa buat melalui tailwind itu sendiri tanpa ada batasan. Let\'s dive in!', 'learn-tailwind-css-11-from-scratch', 3, 1861, 0, 1, 'https://parsinta.com/storage/images/series/belajar-tailwind-css-17-dari-awal-1599011327.jpeg', '2020-11-27 23:56:42', '2020-11-27 23:56:42', NULL),
(9, 4, NULL, 'Learn Laravel, Vue SPAs, Vue CLI, Note App', 'Kita akan mempelajari bagaimana sebenarnya menggunakan Vue SPA didalam Laravel Framework. Setelah itu, kita juga akan convert dari vue Laravel ke dalam Vue CLI.', 'learn-laravel-vue-spas-vue-cli-note-app', 3, 2434, 1, 1, 'https://parsinta.com/storage/images/series/membangun-blog-dengan-laravel-santum-vue-1587022781.jpeg', '2020-11-27 23:56:42', '2020-11-27 23:56:42', NULL),
(10, 4, NULL, 'Learn Basic React JS', 'Dalam seri ini kita akan mempelajari basic React JS, kita akan mempelajari tentang router, state, dan nantinya kita akan membahas tentang bagaimana mengimplementasikan nya dengan Restful API.', 'learn-basic-react-js', 1, 2273, 1, 0, 'https://parsinta.com/storage/images/series/mari-kita-belajar-basic-react-js-1598047011.jpeg', '2020-11-27 23:56:42', '2020-11-27 23:56:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_user` bigint(20) UNSIGNED NOT NULL,
  `jenis_membership` tinyint(4) NOT NULL COMMENT '1 = SILVER, 2 = GOLD, 3 = PLATINUM',
  `waktu_expired_membership` timestamp NULL DEFAULT NULL COMMENT 'SILVER = 1 BULAN, GOLD = 3 BULAN, PLATINUM = 6 BULAN',
  `bank_asal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_tujuan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_transaksi` tinyint(4) NOT NULL COMMENT '1 = PENDING, 2 = ACCEPTED, 3 = REJECTED',
  `total_pembayaran` int(11) NOT NULL,
  `nomor_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'opsi values = L / P',
  `tanggal_lahir` date DEFAULT NULL,
  `bekerja_sebagai` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_kerja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sedikit_tentang_anda` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banned` int(11) NOT NULL DEFAULT 0 COMMENT '0 = unbanned, 1 = banned',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `password`, `email`, `no_hp`, `jenis_kelamin`, `tanggal_lahir`, `bekerja_sebagai`, `tempat_kerja`, `sedikit_tentang_anda`, `url_website`, `url_github`, `url_twitter`, `url_facebook`, `url_instagram`, `banned`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'winda', 'Winda Angelina Utama', '$2y$10$UyTmFuHLOC9l.9sXLB9NQ.Cf6NXmrkOhYhOqWtUPyxyoQiFUt.hv6', 'wau1395@gmail.com', '082212345678', 'P', '2000-03-13', 'Senior Computer Laboratory Assistant', 'Institut Sains dan Teknologi Terpadu Surabaya', 'a flawed and fabulous +62 human', 'https://www.linkedin.com/in/winda-angelina-utama', 'https://github.com/windaangellina', 'https://twitter.com/', 'https://www.facebook.com/windaangellina.utama', 'https://www.instagram.com/wind.au/', 0, NULL, 'JJCDzk888i', '2020-11-27 23:56:23', '2020-11-27 23:56:23', NULL),
(2, 'bambang', 'Bambang Budiman Ferguso', '$2y$10$QvgXTuA/9v2iFXZ/W8niQ.f2QYg/TaBFSJshVsaHAZFxRcJXS9T32', 'bambang123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '6AWdsM50On', '2020-11-27 23:56:23', '2020-11-27 23:56:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_watchlist`
--

CREATE TABLE `user_watchlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id_seri` bigint(20) UNSIGNED NOT NULL,
  `row_id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_row_id_user_foreign` (`row_id_user`),
  ADD KEY `comments_row_id_episode_foreign` (`row_id_episode`);

--
-- Indexes for table `d_user_kuis`
--
ALTER TABLE `d_user_kuis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `d_user_kuis_row_id_pengambilan_kuis_foreign` (`row_id_pengambilan_kuis`),
  ADD KEY `d_user_kuis_row_id_soal_foreign` (`row_id_soal`);

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episodes_row_id_seri_foreign` (`row_id_seri`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `h_user_kuis`
--
ALTER TABLE `h_user_kuis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `h_user_kuis_row_id_user_foreign` (`row_id_user`),
  ADD KEY `h_user_kuis_row_id_kuis_foreign` (`row_id_kuis`);

--
-- Indexes for table `labels`
--
ALTER TABLE `labels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `label_post`
--
ALTER TABLE `label_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `label_post_row_id_label_foreign` (`row_id_label`),
  ADD KEY `label_post_row_id_post_foreign` (`row_id_post`);

--
-- Indexes for table `label_seri`
--
ALTER TABLE `label_seri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `label_seri_row_id_label_foreign` (`row_id_label`),
  ADD KEY `label_seri_row_id_seri_foreign` (`row_id_seri`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_row_id_kategori_foreign` (`row_id_kategori`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_row_id_kuis_foreign` (`row_id_kuis`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_row_id_user_foreign` (`row_id_user`),
  ADD KEY `replies_row_id_komentar_foreign` (`row_id_komentar`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`),
  ADD KEY `series_row_id_kategori_foreign` (`row_id_kategori`),
  ADD KEY `series_row_id_kuis_foreign` (`row_id_kuis`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_row_id_user_foreign` (`row_id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_watchlist`
--
ALTER TABLE `user_watchlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_watchlist_row_id_seri_foreign` (`row_id_seri`),
  ADD KEY `user_watchlist_row_id_user_foreign` (`row_id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `d_user_kuis`
--
ALTER TABLE `d_user_kuis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `h_user_kuis`
--
ALTER TABLE `h_user_kuis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labels`
--
ALTER TABLE `labels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `label_post`
--
ALTER TABLE `label_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `label_seri`
--
ALTER TABLE `label_seri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_watchlist`
--
ALTER TABLE `user_watchlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_row_id_episode_foreign` FOREIGN KEY (`row_id_episode`) REFERENCES `episodes` (`id`),
  ADD CONSTRAINT `comments_row_id_user_foreign` FOREIGN KEY (`row_id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `d_user_kuis`
--
ALTER TABLE `d_user_kuis`
  ADD CONSTRAINT `d_user_kuis_row_id_pengambilan_kuis_foreign` FOREIGN KEY (`row_id_pengambilan_kuis`) REFERENCES `h_user_kuis` (`id`),
  ADD CONSTRAINT `d_user_kuis_row_id_soal_foreign` FOREIGN KEY (`row_id_soal`) REFERENCES `questions` (`id`);

--
-- Constraints for table `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_row_id_seri_foreign` FOREIGN KEY (`row_id_seri`) REFERENCES `series` (`id`);

--
-- Constraints for table `h_user_kuis`
--
ALTER TABLE `h_user_kuis`
  ADD CONSTRAINT `h_user_kuis_row_id_kuis_foreign` FOREIGN KEY (`row_id_kuis`) REFERENCES `quizzes` (`id`),
  ADD CONSTRAINT `h_user_kuis_row_id_user_foreign` FOREIGN KEY (`row_id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `label_post`
--
ALTER TABLE `label_post`
  ADD CONSTRAINT `label_post_row_id_label_foreign` FOREIGN KEY (`row_id_label`) REFERENCES `labels` (`id`),
  ADD CONSTRAINT `label_post_row_id_post_foreign` FOREIGN KEY (`row_id_post`) REFERENCES `posts` (`id`);

--
-- Constraints for table `label_seri`
--
ALTER TABLE `label_seri`
  ADD CONSTRAINT `label_seri_row_id_label_foreign` FOREIGN KEY (`row_id_label`) REFERENCES `labels` (`id`),
  ADD CONSTRAINT `label_seri_row_id_seri_foreign` FOREIGN KEY (`row_id_seri`) REFERENCES `series` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_row_id_kategori_foreign` FOREIGN KEY (`row_id_kategori`) REFERENCES `categories` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_row_id_kuis_foreign` FOREIGN KEY (`row_id_kuis`) REFERENCES `quizzes` (`id`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_row_id_komentar_foreign` FOREIGN KEY (`row_id_komentar`) REFERENCES `comments` (`id`),
  ADD CONSTRAINT `replies_row_id_user_foreign` FOREIGN KEY (`row_id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `series_row_id_kategori_foreign` FOREIGN KEY (`row_id_kategori`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `series_row_id_kuis_foreign` FOREIGN KEY (`row_id_kuis`) REFERENCES `quizzes` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_row_id_user_foreign` FOREIGN KEY (`row_id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_watchlist`
--
ALTER TABLE `user_watchlist`
  ADD CONSTRAINT `user_watchlist_row_id_seri_foreign` FOREIGN KEY (`row_id_seri`) REFERENCES `series` (`id`),
  ADD CONSTRAINT `user_watchlist_row_id_user_foreign` FOREIGN KEY (`row_id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
