-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: May 22, 2024 at 02:35 PM
-- Server version: 11.2.2-MariaDB-1:11.2.2+maria~ubu2204
-- PHP Version: 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `id` int(11) NOT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `author` varchar(250) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`id`, `book_name`, `category_id`, `image`, `date`, `description`, `author`, `price`) VALUES
(1, 'A Tempest of Tea', 3, 'images/A Tempest of Tea.jpg', '2024-02-20', 'On the streets of White Roaring, Arthie Casimir is a criminal mastermind and collector of secrets. Her prestigious tearoom transforms into an illegal bloodhouse by dark, catering to the vampires feared by society. But when her establishment is threatened, Arthie is forced to strike an unlikely deal with an alluring adversary to save it—and she can’t do the job alone.\r\n\r\nCalling on some of the city\'s most skilled outcasts, Arthie hatches a plan to infiltrate the sinister, glittering vampire society known as the Athereum. But not everyone in her ragtag crew is on her side, and as the truth behind the heist unfolds, Arthie finds herself in the midst of a conspiracy that will threaten the world as she knows it.\r\n\r\nFrom the New York Times—bestselling author of We Hunt the Flame comes the first book in a hotly anticipated fantasy duology teeming with romance and revenge, led by an orphan girl willing to do whatever it takes to save her self-made kingdom. Dark, action-packed, and swoonworthy, this is Hafsah Faizal better than ever.', 'Hafsah Faizal\n', 10),
(2, 'The Book of Doors', 3, 'images/The Book of Doors.jpg', '2024-02-13', 'If you could open a door to anywhere, where would you go?\r\n\r\nIn New York City, bookseller Cassie Andrews is living an unassuming life when she is given a gift by a favourite customer. It\'s a book - an unusual book, full of strange writing and mysterious drawings. And at the very front there is a handwritten message to Cassie, telling her that this is the Book of Doors, and that any door is every door .\r\n\r\nWhat Cassie is about to discover is that the Book of Doors is a special book that bestows an extraordinary powers on whoever possesses it, and soon she and her best friend Izzy are exploring all that the Book of Doors can do, swept away from their quiet lives by the possibilities of travelling to anywhere they want.\r\n\r\nBut the Book of Doors is not the only magical book in the world. There are other books that can do wondrous and dreadful things when wielded by dangerous and ruthless individuals - individuals who crave what Cassie now possesses.\r\n\r\nSuddenly Cassie and Izzy are confronted by violence and danger, and the only person who can help them is, it seems, Drummond Fox. He is a man fleeing his own demons - a man with his own secret library of magical books that he has hidden away in the shadows for safekeeping. Because there is a nameless evil out there that is hunting them all . . .\r\n\r\nBecause some doors should never be opened.', 'Gareth Brown', 15),
(3, 'The Tainted Cup', 3, 'images/The Tainted Cup.jpg', '2024-02-06', 'In Daretana’s most opulent mansion, a high Imperial officer lies dead—killed, to all appearances, when a tree spontaneously erupted from his body. Even in this canton at the borders of the Empire, where contagions abound and the blood of the Leviathans works strange magical changes, it’s a death at once terrifying and impossible.\r\n\r\nCalled in to investigate this mystery is Ana Dolabra, an investigator whose reputation for brilliance is matched only by her eccentricities.\r\n\r\nAt her side is her new assistant, Dinios Kol. Din is an engraver, magically altered to possess a perfect memory. His job is to observe and report, and act as his superior’s eyes and ears--quite literally, in this case, as among Ana’s quirks are her insistence on wearing a blindfold at all times, and her refusal to step outside the walls of her home.\r\n\r\nDin is most perplexed by Ana’s ravenous appetite for information and her mind’s frenzied leaps—not to mention her cheerful disregard for propriety and the apparent joy she takes in scandalizing her young counterpart. Yet as the case unfolds and Ana makes one startling deduction after the next, he finds it hard to deny that she is, indeed, the Empire’s greatest detective.\r\n\r\nAs the two close in on a mastermind and uncover a scheme that threatens the safety of the Empire itself, Din realizes he’s barely begun to assemble the puzzle that is Ana Dolabra—and wonders how long he’ll be able to keep his own secrets safe from her piercing intellect.\r\n\r\nFeaturing an unforgettable Holmes-and-Watson style pairing, a gloriously labyrinthine plot, and a haunting and wholly original fantasy world, The Tainted Cup brilliantly reinvents the classic mystery tale.', 'Robert Jackson Bennett\n', 11),
(4, 'The Warm Hands of Ghosts', 3, 'images/The Warm Hands of Ghosts.jpg', '2024-02-13', 'During the Great War, a combat nurse searches for her brother, believed dead in the trenches despite eerie signs that suggest otherwise, in this hauntingly beautiful historical novel with a speculative twist from the New York Times bestselling author of The Bear and the Nightingale\r\n\r\nJanuary 1918. Laura Iven was a revered field nurse until she was wounded and discharged from the medical corps, leaving behind a brother still fighting in Flanders. Now home in Halifax, Canada, she receives word of Freddie’s death in combat, along with his personal effects—but something doesn’t make sense. Determined to uncover the truth, Laura returns to Belgium as a volunteer at a private hospital. Soon after arriving, she hears whispers about haunted trenches, and a strange hotelier whose wine gives soldiers the gift of oblivion. Could Freddie have escaped the battlefield, only to fall prey to something—or someone—else?\r\n\r\nNovember 1917. Freddie Iven awakens after an explosion to find himself trapped in an overturned pillbox with a wounded enemy soldier, a German by the name of Hans Winter. Against all odds, the two men form an alliance and succeed in clawing their way out. Unable to bear the thought of returning to the killing fields, especially on opposite sides, they take refuge with a mysterious man who seems to have the power to make the hellscape of the trenches disappear.\r\n\r\nAs shells rain down on Flanders, and ghosts move among those yet living, Laura’s and Freddie’s deepest traumas are reawakened. Now they must decide whether their world is worth salvaging—or better left behind entirely.', 'Katherine Arden', 8),
(5, 'A Fate Inked in Blood', 2, 'images/A Fate Inked in Blood.jpg', '2024-02-27', 'A shield maiden blessed by the gods battles to unite a nation under a power-hungry king—while also fighting her growing desire for his fiery son—in this Norse-inspired fantasy romance from the bestselling author of The Bridge Kingdom series.\r\n\r\nBound in an unwanted marriage, Freya spends her days gutting fish, but dreams of becoming a warrior. And of putting an axe in her boorish husband’s back.\r\n\r\nFreya’s dreams abruptly become reality when her husband betrays her to the region’s jarl, landing her in a fight to the death against his son, Bjorn. To survive, Freya is forced to reveal her deepest secret: She possesses a drop of a goddess’s blood, which makes her a shield maiden with magic capable of repelling any attack. It was foretold such a magic would unite the fractured nation of Skaland beneath the one who controls the shield maiden’s fate.\r\n\r\nBelieving he’s destined to rule Skaland as king, the fanatical jarl binds Freya with a blood oath and orders Bjorn to protect her from their enemies. Desperate to prove her strength, Freya must train to fight and learn to control her magic, all while facing perilous tests set by the gods. The greatest test of all, however, may be resisting her forbidden attraction to Bjorn. If Freya succumbs to her lust for the charming and fierce warrior, she risks not only her own destiny but the fate of all the people she swore to protect.', 'Danielle L. Jensen', 20),
(6, 'Heartless Hunter', 2, 'images/Heartless Hunter.jpg', '2024-02-20', 'A steamy game of cat and mouse between witch and witch-hunter, played out against a backdrop of opulence, secrets, and bloody history.\r\n\r\nOn the night Rune’s life changed forever, blood ran in the streets. Now, in the aftermath of a devastating revolution, witches have been diminished from powerful rulers to outcasts ruthlessly hunted due to their waning magic, and Rune must hide what she is.\r\n\r\nSpending her days pretending to be nothing more than a vapid young socialite, Rune spends her nights as the Crimson Moth, a witch vigilante who rescues her kind from being purged. When a rescue goes wrong, she decides to throw the witch hunters off her scent and gain the intel she desperately needs by courting the handsome Gideon Sharpe - a notorious and unforgiving witch hunter loyal to the revolution - who she can\'t help but find herself falling for.\r\n\r\nGideon loathes the decadence and superficiality Rune represents, but when he learns the Crimson Moth has been using Rune’s merchant ships to smuggle renegade witches out of the republic, he inserts himself into her social circles by pretending to court her right back. He soon realizes that beneath her beauty and shallow façade, is someone fiercely intelligent and tender who feels like his perfect match. Except, what if she’s the very villain he’s been hunting?\r\n\r\nKristen Ciccarelli’s Heartless Hunter is the thrilling start to a romantic fantasy duology where the only thing more treacherous than being a witch...is falling in love.', 'Kristen Ciccarelli\n', 14),
(7, 'A Love Song for Ricki Wilde', 2, 'images/A Love Song for Ricki Wilde.jpg', '2024-02-06', 'Leap years are a strange, enchanted time. And for some, even a single February can be life-changing.\r\n\r\nRicki Wilde has many talents, but being a Wilde isn’t one of them. As the impulsive, artistic daughter of a powerful Atlanta dynasty, she’s the opposite of her famous socialite sisters. Where they’re long-stemmed roses, she’s a dandelion: an adorable bloom that’s actually a weed, born to float wherever the wind blows. In her bones, Ricki knows that somewhere, a different, more exciting life awaits her.\r\n\r\nWhen regal nonagenarian, Ms. Della, invites her to rent the bottom floor of her Harlem brownstone, Ricki jumps at the chance for a fresh beginning. She leaves behind her family, wealth, and chaotic romantic decisions to realize her dream of opening a flower shop. And just beneath the surface of her new neighborhood, the music, stories and dazzling drama of the Harlem Renaissance still simmers.\r\n\r\nOne evening in February as the heady, curiously off-season scent of night-blooming jasmine fills the air, Ricki encounters a handsome, deeply mysterious stranger who knocks her world off balance in the most unexpected way.\r\n\r\nSet against the backdrop of modern Harlem and Renaissance glamour, A Love Song for Ricki Wilde is a swoon-worthy love story of two passionate artists drawn to the magic, romance, and opportunity of New York, and whose lives are uniquely and irreversibly linked.', 'Tia Williams\n', 10),
(8, 'Fangirl Down', 2, 'images/Fangirl Down.jpg', '2024-02-13', '#1 New York Times bestselling author Tessa Bailey launches a super sexy sports romance series with a rom-com about a bad boy professional athlete who falls for his biggest fan...\r\n\r\nWells Whitaker was once golf’s hottest rising star, but lately, all he has to show for his “promising” career is a killer hangover, a collection of broken clubs, and one remaining supporter. No matter how bad he plays, the beautiful, sunny redhead is always on the sidelines. He curses, she cheers. He scowls, she smiles. But when Wells quits in a blaze of glory and his fangirl finally goes home, he knows he made the greatest mistake of his life.\r\n\r\nJosephine Doyle believed in the gorgeous, grumpy golfer, even when he didn’t believe in himself. Yet after he throws in the towel, she begins to wonder if her faith was misplaced. Then a determined Wells shows up at her door with a wild proposal: be his new caddy, help him turn his game around, and split the prize money. And considering Josephine’s professional and personal life is in shambles, she could really use the cash…\r\n\r\nAs they travel together, spending days on the green and nights in neighboring hotel rooms, sparks fly. Before long, they’re inseparable, Wells starts winning again, and Josephine is surprised to find a sweet, thoughtful guy underneath his gruff, growly exterior. This hot man wants to brush her hair, feed her snacks, and take bubble baths together? Is this real life? But Wells is technically her boss and an athlete falling for his fangirl would be ridiculous… right?', 'Tessa Bailey\n', 12),
(9, 'An Education in Malice', 1, 'images/An Education in Malice.jpg', '2024-02-13', 'Sumptuous and addictive, An Education in Malice is a dark academia tale of blood, secrets and insatiable hungers from Sunday Times bestselling author S.T. Gibson, author of the cult hit A Dowry of Blood.\r\n\r\nDeep in the forgotten hills of Massachusetts stands Saint Perpetua\'s College. Isolated and ancient, it is not a place for timid girls. Here, secrets are currency, ambition is lifeblood, and strange ceremonies welcome students into the fold.\r\n\r\nOn her first day of class, Laura Sheridan is thrust into an intense academic rivalry with the beautiful and enigmatic Carmilla. Together, they are drawn into the confidence of their demanding poetry professor, De Lafontaine, who holds her own dark obsession with Carmilla.\r\n\r\nBut as their rivalry blossoms into something far more delicious, Laura must confront her own strange hungers. Tangled in a sinister game of politics, bloodthirsty professors and dark magic, Laura and Carmilla must decide how much they are willing to sacrifice in their ruthless pursuit of knowledge.', 'S.T. Gibson\n', 7),
(10, 'What Feasts at Night', 1, 'images/What Feasts at Night.jpg', '2024-02-13', 'The follow-up to T. Kingfisher’s bestselling gothic novella, What Moves the Dead .\r\n\r\nRetired soldier Alex Easton returns in a horrifying new adventure.\r\n\r\nAfter their terrifying ordeal at the Usher manor, Alex Easton feels as if they just survived another war. All they crave is rest, routine, and sunshine, but instead, as a favor to Angus and Miss Potter, they find themself heading to their family hunting lodge, deep in the cold, damp forests of their home country, Gallacia.\r\n\r\nIn theory, one can find relaxation in even the coldest and dampest of Gallacian autumns, but when Easton arrives, they find the caretaker dead, the lodge in disarray, and the grounds troubled by a strange, uncanny silence. The villagers whisper that a breath-stealing monster from folklore has taken up residence in Easton’s home. Easton knows better than to put too much stock in local superstitions, but they can tell that something is not quite right in their home. . . or in their dreams.', 'T. Kingfisher', 9),
(11, 'The Bad Ones', 1, 'images/The Bad Ones.jpg', '2024-02-20', 'Goddess, goddess, count to five\r\nIn the morning, who’s alive?\r\n\r\nIn the course of a single winter’s night, four people vanish without a trace across a small town.\r\n\r\nNora’s estranged best friend, Becca, is one of the lost. As Nora tries to untangle the truth of Becca’s disappearance, she discovers a darkness in her town’s past, as well as a string of coded messages Becca left for her to unravel. These clues lead Nora to a piece of local folklore: a legendary goddess of forgotten origins who played a role in Nora and Becca’s own childhood games...\r\n\r\nAn arresting, crossover horror fantasy threaded with dark magic, THE BAD ONES is a poison-pen love letter to semi-toxic best friendship, the occult power of childhood play and artistic creation, and the razor-thin line between make-believe and belief.', 'Melissa Albert\n', 13),
(12, 'Island Witch', 1, 'images/Island Witch.jpg', '2024-02-20', 'Inspired by Sri Lankan folklore, award-winning author Amanda Jayatissa turns her feverish, Gothic-tinged talents to late 19th century Sri Lanka where the daughter of a traditional demon-priest—relentlessly bullied by peers and accused of witchcraft herself—tries to solve the mysterious attacks that have been terrorizing her coastal village.\r\n\r\nBeing the daughter of the village Capuwa, or demon-priest, Amara is used to keeping mostly to herself. Influenced by the new religious practices brought in by the British Colonizers, the villagers who once respected her father’s craft have turned on the family. Yet, they all still seem to call on him whenever supernatural disturbances arise.\r\n\r\nNow someone—or something —is viciously seizing upon men in the jungle. But instead of enlisting Amara’s father’s help, the villages have accused him of carrying out the attacks himself.\r\n\r\nAs she tries to clear her father’s name, Amara finds herself haunted by dreams that eerily predict the dark forces on her island. And she can’t shake the feeling that it’s all connected to the night she was recovering from a strange illness, and woke up, scared and confused, to hear her mother’s frantic No one can find out what happened .\r\n\r\nLush, otherworldly, and recalling horror classics like Carrie and The Exorcist , Island Witch is a deliciously creepy and darkly feminist tale about the horrors of moral panic, the violent space between girlhood and adulthood, and what happens when female rage is finally unleashed.', 'Amanda Jayatissa', 8),
(13, 'My Side of the River', 4, 'images/My Side of the River.jpg', '2024-02-13', 'Elizabeth Camarillo Gutierrez reveals her experience as the U.S. born daughter of immigrants and what happened when, at fifteen, her parents were forced back to Mexico in this galvanizing yet tender memoir.\r\n\r\nBorn to Mexican immigrants south of the Rillito River in Tucson, Arizona, Elizabeth had the world at her fingertips as she entered her freshman year of high school as the number one student. But suddenly, Elizabeth\'s own country took away the most important right a child has: a right to have a family.\r\n\r\nAs her parents’ visas expired, they were forced to return to Mexico, leaving Elizabeth responsible for her younger brother, as well as her education. Determined to break the cycle of being “a statistic,” she knew that even though her parents couldn’t stay, there was no way she could let go of the opportunities the U.S. could provide.\r\n\r\nArmed with only her passport and sheer teenage determination, Elizabeth became what her school would eventually describe as an unaccompanied, homeless youth, one of thousands of underage victims affected by family separation due to broken immigration laws. For fans of Educated by Tara Westover and The Distance Between Us by Reyna Grande, My Side of the River explores separation, generational trauma, and the toll of the American dream. It’s also, at its core, a love story between a brother and a sister who, no matter the cost, is determined to make the pursuit of his own dreams easier than it was for her.', 'Elizabeth Camarillo Gutierrez\n', 9),
(14, 'Grief Is for People', 4, 'images/Grief Is for People.jpg', '2024-02-27', 'Following the death of her closest friend, Sloane Crosley explores multiple kinds of loss in this disarmingly witty and poignant memoir.\r\n\r\nGrief Is for People is a deeply moving and surprisingly suspenseful portrait of friendship and a book about loss packed with verve for life. Sloane Crosley is one of our most renowned observers of contemporary behavior, and now the pathos that has been ever present in her trademark wit is on full display. After the pain and confusion of losing her closest friend to suicide, Crosley looks for answers in friends, philosophy, and art, hoping for a framework more useful than the unavoidable stages of grief.', 'Sloane Crosley', 20),
(15, 'Troubled: A Memoir of Foster Care, Family, and Social Class', 4, 'images/Troubled A Memoir of Foster Care, Family, and Social Class.jpg', '2024-02-20', 'In this raw coming-of-age memoir, in the vein of The Short and Tragic Life of Robert Peace, The Other Wes Moore, and Someone Has Led This Child to Believe, Rob Henderson vividly recounts growing up in foster care, enlisting in the US Air Force, attending elite universities, and pioneering the concept of “luxury beliefs”—ideas and opinions that confer status on the upper class while inflicting costs on the less fortunate.\r\n\r\nRob Henderson was born to a drug-addicted mother and a father he never met, ultimately shuttling between ten different foster homes in California. When he was adopted into a loving family, he hoped that life would finally be stable and safe. Divorce, tragedy, poverty, and violence marked his adolescent and teen years, propelling Henderson to join the military upon completing high school.\r\n\r\nAn unflinching portrait of shattered families, desperation, and determination, Troubled recounts Henderson’s expectation-defying young life and juxtaposes his story with those of his friends who wound up incarcerated or killed. He retreads the steps and missteps he took to escape the drama and disorder of his youth. As he navigates the peaks and valleys of social class, Henderson finds that he remains on the outside looking in. His greatest achievements—a military career, an undergraduate education from Yale, a PhD from Cambridge—feel like hollow measures of success. He argues that stability at home is more important than external accomplishments, and he illustrates the ways the most privileged among us benefit from a set of social standards that actively harm the most vulnerable.', 'Rob Henderson', 16),
(16, 'Splinters', 4, 'images/Splinters.jpg', '2024-02-20', 'From the New York Times bestselling author of The Recovering and The Empathy Exams comes the riveting story of rebuilding a life after the end of a marriage—an exploration of motherhood, art, and new love.\r\n \r\nLeslie Jamison has become one of our most beloved contemporary voices, a scribe of the real, the true, the complex. She has been compared to Joan Didion and Susan Sontag, acclaimed for her powerful thinking, deep feeling, and electric prose. But while Jamison has never shied away from challenging material—scouring her own psyche and digging into our most unanswerable questions across four books— Splinters enters a new realm.\r\n \r\nIn her first memoir, Jamison turns her unrivaled powers of perception on some of the most intimate relationships of her her consuming love for her young daughter, a ruptured marriage once swollen with hope, and the shaping legacy of her own parents’ complicated bond. In examining what it means for a woman to be many things at once—a mother, an artist, a teacher, a lover—Jamison places the magical and the mundane side by side in surprising ways: pumping breastmilk in a shared university office, driving the open highway in the throes of new love, growing a tender second skin of consciousness as she watches her daughter come alive to the world. The result is a work of nonfiction like no other, an almost impossibly deep reckoning with the muchness of life and art, and a book that grieves the departure of one love even as it celebrates the arrival of another.\r\n \r\nHow do we move forward into joy when we are haunted by loss? How do we claim hope alongside the harm we’ve caused? A memoir for which the very term tour de force seems to have been coined, Splinters plumbs these and other pressing questions with writing that is revelatory to the last page. Jamison has delivered a book with the linguistic daring and emotional acuity that made The Empathy Exams and The Recovering instant classics, even as she reaches new depths of understanding, piercing the reader to the core. A master of nonfiction, she evinces once again her ability to “stitch together the intellectual and the emotional with the finesse of a crackerjack surgeon” (NPR).', 'Leslie Jamison', 18);

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE `Cart` (
  `cart_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Cart`
--

INSERT INTO `Cart` (`cart_id`, `book_id`) VALUES
(2, 1),
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`id`, `category_name`) VALUES
(1, 'Horror'),
(2, 'Romance'),
(3, 'Fiction'),
(4, 'Memoir');

-- --------------------------------------------------------

--
-- Table structure for table `Library`
--

CREATE TABLE `Library` (
  `id` int(11) DEFAULT NULL,
  `is_finished` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Library`
--

INSERT INTO `Library` (`id`, `is_finished`) VALUES
(5, NULL),
(8, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `email`, `password`, `name`) VALUES
(11, 'kheanzlinares@gmail.com', '$2y$10$K8A0cwxk9X9WkjgIXxQM7.lBpwT45gxDyPTMXpa/bDXSMdWhLERhW', 'Niña Kheaney Linares'),
(58, 'test@test.com', '$2y$10$f0R6Vx4lKkfeAruEy9opfu6ClwtKl0d6nf6b5k83oJrN52b8UHUQS', 'test'),
(61, 'nina@nina.com', '$2y$10$/HXRxWfqIFdbX7/K/PaKoOZs9ambzUQm1tStaCJT4V5r6BE1mSyCy', 'nina'),
(74, 'kheanzlinares@yahoo.com', '$2y$10$o1sKB7blX3etYzwuMDCrYe5UAqPcvOEiBAYsuthCm4MqJllVdqHoq', 'nina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Library`
--
ALTER TABLE `Library`
  ADD KEY `id` (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cart`
--
ALTER TABLE `Cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Book`
--
ALTER TABLE `Book`
  ADD CONSTRAINT `Book_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `Category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Cart`
--
ALTER TABLE `Cart`
  ADD CONSTRAINT `Cart_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `Book` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Library`
--
ALTER TABLE `Library`
  ADD CONSTRAINT `Library_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Book` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
