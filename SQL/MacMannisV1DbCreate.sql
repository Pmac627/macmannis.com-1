CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` smallint(6) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(20) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8;

INSERT INTO `categories` (`id_category`, `category_title`) VALUES
(1, 'Objective'),
(2, 'Education'),
(3, 'Experience'),
(4, 'Competencies'),
(5, 'Skills'),
(6, 'Hobbies'),
(7, 'References');

CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_visitor` smallint(6) NOT NULL,
  `contact_email` varchar(60) NOT NULL,
  `contact_name` varchar(40) NOT NULL,
  `contact_message` varchar(500) NOT NULL,
  `contact_date` varchar(10) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `demos` (
  `id_demo` smallint(6) NOT NULL AUTO_INCREMENT,
  `demo_title` varchar(40) NOT NULL,
  `demo_url` varchar(100) NOT NULL,
  `demo_desc` varchar(1000) NOT NULL,
  `demo_img` varchar(50) NOT NULL,
  `demo_img_large` varchar(50) NOT NULL,
  `demo_show` tinyint(4) NOT NULL DEFAULT '1',
  `demo_live` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_demo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `pages` (
  `id_page` tinyint(4) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(20) NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6;

INSERT INTO `pages` (`id_page`, `page_title`) VALUES
(1, 'Home'),
(2, 'Resume'),
(3, 'Portfolio'),
(4, 'Demos'),
(5, 'Contact');

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id_portfolio` smallint(6) NOT NULL AUTO_INCREMENT,
  `portfolio_title` varchar(40) NOT NULL,
  `portfolio_url` varchar(100) NOT NULL,
  `portfolio_desc` varchar(1000) NOT NULL,
  `portfolio_img` varchar(50) NOT NULL,
  `portfolio_img_large` varchar(50) NOT NULL,
  `portfolio_show` tinyint(4) NOT NULL DEFAULT '1',
  `portfolio_live` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_portfolio`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `posts` (
  `id_post` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_page` tinyint(4) NOT NULL,
  `post_title` varchar(40) NOT NULL,
  `post_body` varchar(2000) NOT NULL,
  `post_author` varchar(30) NOT NULL,
  `post_date` varchar(10) NOT NULL,
  `post_show` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6;

INSERT INTO `posts` (`id_post`, `id_page`, `post_title`, `post_body`, `post_author`, `post_date`, `post_show`) VALUES
(1, 1, 'Welcome!', 'Welcome to macmannis.com! This very site has been created to demonstrate some basic to intermediate web development and design techniques! That being the case, do understand that the site will always be a work in progress. Please have a look around and feel free to contact me via the contact tab. I welcome all comments and critiques and will do my best to reply quickly to all responses.<br><br>The site is built on a homemade, PHP-powered, MVC framework and is backed by a MySQL database. The styling is controlled via CSS3 (and therefore, I recommend you use the most recent version of your browser to get the most out of the site!) The site is completely compliant with W3C''s HTML5 standards and is fully operational with many bells and whistles thanks to the powerful jQuery JavaScript library and the ThickBox jQuery module!<br><br>This site would not be possible without the hard work of the open source community. Please take the time to acknowledge the creators of the items that were used within this site by viewing the humans.txt document found in the credits link below. Every open source item not created by me is referenced there.<br><br>Enjoy!', 'Patrick MacMannis', '1327082136', 0),
(2, 5, 'Contact Me Today!', 'Feel free to contact me via this form!', 'Patrick MacMannis', '1327513586', 0),
(3, 3, 'Complete Web Portfolio', 'Below is a list of different projects I have completed over the years. The first section contains live examples that are currently on the web. Feel free to follow the hyperlinks to see them in action! Below that are some drafts that were not put into production, but that I am proud of. Additionally, these drafts are fully built and ready to use, just not live.', 'Patrick MacMannis', '1328012547', 0),
(4, 2, 'Why''s That There?', 'Below is my resume, updated as recently as the date below this post. My resume offers a diverse selection of experience, education, competencies and skillsets that I believe create a unique package. I am a firm believer that you will learn something new every day and that you can develop unique skills and perspectives just by keeping an open mind and maintaining your hunger to learn more. Check out my resume and look for the little popup bubble icons next to some of them for a more in-depth explanation about that experience and why I believe it benefits me (and any potential employer)!', 'Patrick MacMannis', '1328012747', 0),
(5, 4, 'Demo Script Archives', 'Below is a list of different scripts and mini-projects I have completed over the years. The first section contains live examples that are currently on the web on either this site or a dummy domain. Feel free to follow the hyperlinks to see them in action! Below that are some offline examples that are not available online, but that I am proud of. Nothing listed here, online or offline, fails to work. If it doesn''t work, I won''t list it.', 'Patrick MacMannis', '1328012947', 0);

CREATE TABLE IF NOT EXISTS `resume` (
  `id_resume` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_category` smallint(6) NOT NULL,
  `resume_title` varchar(40) NOT NULL,
  `resume_subtitle` varchar(50) NOT NULL,
  `resume_body` varchar(2000) NOT NULL,
  `resume_show` tinyint(4) NOT NULL DEFAULT '0',
  `resume_popup` varchar(2000) NOT NULL,
  PRIMARY KEY (`id_resume`),
  KEY `id_category` (`id_category`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `switchboard` (
  `sb_open` tinyint(4) NOT NULL DEFAULT '1',
  `sb_title` varchar(30) NOT NULL DEFAULT 'jQuery Demo Site',
  `sb_charset` varchar(10) NOT NULL DEFAULT 'UTF-8'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `switchboard` (`sb_open`, `sb_title`, `sb_charset`) VALUES
(1, 'MacMannis.com', 'UTF-8');

CREATE TABLE IF NOT EXISTS `visitors` (
  `id_visitor` smallint(6) NOT NULL AUTO_INCREMENT,
  `visitor_ip` varchar(15) NOT NULL,
  `visitor_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_visitor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;