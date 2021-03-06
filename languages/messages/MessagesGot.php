<?php
/** Gothic (Gothic)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Jocke Pirat
 * @author Michawiki
 * @author Node ue
 * @author Sajasazi (on got.wikipedia.org)
 * @author Zylbath
 */

$namespaceNames = array(
	NS_USER             => 'π½πΉπΏππ°π½π³π',
	NS_USER_TALK        => 'π½πΉπΏππ°π½π³πΉπ_π²π°ππ°πΏππ³πΎπ°',
	NS_PROJECT_TALK     => 'πΈπΉπ_$1_π²π°ππ°πΏππ³πΎπ°',
	NS_FILE             => 'ππ΄πΉπ»π°',
	NS_FILE_TALK        => 'ππ΄πΉπ»πΉπ½π_π²π°ππ°πΏππ³πΎπ°',
	NS_TEMPLATE         => 'ππ°πΏππ°πΌπ΄π»π΄πΉπ½π',
	NS_TEMPLATE_TALK    => 'ππ°πΏππ°πΌπ΄π»π΄πΉπ½π°πΉπ_π²π°ππ°πΏππ³πΎπ°',
	NS_HELP             => 'π·πΉπ»ππ°',
	NS_HELP_TALK        => 'π·πΉπ»πππ_π²π°ππ°πΏππ³πΎπ°',
	NS_CATEGORY         => 'π·π°π½ππ°',
	NS_CATEGORY_TALK    => 'π·π°π½πππ_π²π°ππ°πΏππ³πΎπ°',
);

$specialPageAliases = array(
	'Allpages'                  => array( 'π°π»π»πππ΄πΉπ³ππ½π' ),
	'Recentchanges'             => array( 'π°πππΏπΌπΉπππππΌπ°πΉπ³π΄πΉπ½π΄πΉπ' ),
);

$messages = array(
'underline-always' => 'Sinteino',
'underline-never'  => 'Niu',

# Dates
'sunday'        => 'Sunnonsdags',
'monday'        => 'Meninsdags',
'tuesday'       => 'Tiwisdags',
'wednesday'     => 'Midiwiko',
'thursday'      => 'ΓeiΖonsdags',
'friday'        => 'Fraujonsdags',
'saturday'      => 'πΈππ°π·π»πΉππ³π°π²π',
'sun'           => 'Sun',
'mon'           => 'Men',
'tue'           => 'Tiw',
'wed'           => 'Mid',
'thu'           => 'Γei',
'fri'           => 'Fra',
'sat'           => 'Γwa',
'january'       => 'π°πππΏπΌπ° πΎπΉπΏπ»π΄πΉπ',
'february'      => 'ππ°π½πΉπΌπ΄π½ππΈπ',
'march'         => 'πΊπ°π»π³πΌπ΄π½ππΈπ',
'april'         => 'π²ππ°ππΌπ΄π½ππΈπ',
'may_long'      => 'π±π»ππΌπ°πΌπ΄π½ππΈπ',
'june'          => 'ππ°ππΌπΌπ΄π½ππΈπ',
'july'          => 'π·π°ππΉπΌπ΄π½ππΈπ',
'august'        => 'π°ππ°π½πΌπ΄π½ππΈπ',
'september'     => 'π°πΊππ°π½πΌπ΄π½ππΈπ',
'october'       => 'ππ΄πΉπ½πΌπ΄π½ππΈπ',
'november'      => 'πππΏπΌπ° πΎπΉπΏπ»π΄πΉπ',
'december'      => 'πΎπΉπΏπ»π΄πΉπ',
'january-gen'   => 'π°πππΏπΌπΉπ½π πΎπΉπΏπ»π΄πΉπ',
'february-gen'  => 'ππ°π½πΉπΌπ΄π½ππΈπΉπ',
'march-gen'     => 'KaldmenoΓΎis',
'april-gen'     => 'π²ππ°ππΌπ΄π½ππΈπΉπ',
'may-gen'       => 'π±π»ππΌπ°πΌπ΄π½ππΈπΉπ',
'june-gen'      => 'WarmmenoΓΎis',
'july-gen'      => 'HawimenoΓΎis',
'august-gen'    => 'π°ππ°π½πΌπ΄π½ππΈπΉπ',
'september-gen' => 'π°πΊππ°π½πΌπ΄π½ππΈπΉπ',
'october-gen'   => 'ππ΄πΉπ½πΌπ΄π½ππΈπΉπ',
'november-gen'  => 'πππΏπΌπΉπ½π πΎπΉπΏπ»π΄πΉπ',
'december-gen'  => 'πΎπΉπΏπ»π΄πΉπ',
'jan'           => 'π°ππ',
'feb'           => 'Fan',
'mar'           => 'Kal',
'apr'           => 'π²ππ°',
'may'           => 'π±π»π',
'jun'           => 'War',
'jul'           => 'Haw',
'aug'           => 'π°ππ°',
'sep'           => 'π°πΊπ',
'oct'           => 'ππ΄πΉ',
'nov'           => 'πππΏ',
'dec'           => 'πΎπΉπΏ',

# Categories related messages
'pagecategories'        => '{{PLURAL:$1|πΊπΏπ½πΎπ°|πΊπΏπ½πΎππ}}',
'category_header'       => 'ππ΄πΉπ³ππ πΉπ½π½ πΊπΏπ½πΎπ° "$1"',
'subcategories'         => 'DalaΓΎkunjos',
'category-media-header' => 'πΌπ΄π³πΎπ° πΉπ½π½ πΊπΏπ½πΎπ° "$1"',

'about'         => 'πΏππ°π',
'article'       => 'ππ°πΈπππ΄πΉπ³π',
'newwindow'     => '(π°π½π³π·πΏπ»πΎπΉπΈ πΉπ½π½ π½πΉπΏπΎπ° π°πΏπ²π°π³π°πΏππ)',
'cancel'        => 'π·π°π»ππ',
'moredotdotdot' => 'πΌπ°πΉπ...',
'mypage'        => 'πΌπ΄πΉπ½ ππ΄πΉπ³π',
'mytalk'        => 'πΌπ΄πΉπ½π° πΌπ°πΈπ»π΄πΉ',
'navigation'    => 'ππ΄πΉπ³ππ²π°ππΉππ',
'and'           => 'πΎπ°π·',

# Cologne Blue skin
'qbfind'         => 'πππΊπ΄πΉπΈ',
'qbedit'         => 'πΌπ°πΉπ³πΎπ°π½',
'qbmyoptions'    => 'πΌπ΄πΉπ½π° ππ΄πΉπ³ππ',
'qbspecialpages' => 'πΏπππΉπ½π³ππ΄πΉπ³ππ',

# Vector skin
'vector-action-delete' => 'ππ°πΉππ°π½',
'vector-view-create'   => 'Skapjan',
'vector-view-edit'     => 'MΓ‘idjan',
'vector-view-view'     => 'Lisan',

'errorpagetitle'    => 'ππ°πΉππΉπ½π° π³ππ°π»πΉπ',
'returnto'          => 'π²π°ππ°π½π³πΎπ°π½ π°π $1.',
'tagline'           => 'Fram {{SITENAME}}',
'help'              => 'π·πΉπ»ππ°',
'search'            => 'πππΊπ΄πΉπΈ',
'searchbutton'      => 'πππΊπ΄πΉπΈ',
'go'                => 'π²π°π²π²π°',
'searcharticle'     => 'π°ππ²π°π²π²π°π½',
'history'           => 'π°πΉππΉπ πΌπ°πΉπ³π΄πΉπ½π π°π½π° ππ΄πΉπ³π',
'history_short'     => 'π°πΉππΉπ πΌπ°πΉπ³π΄πΉπ½π',
'printableversion'  => 'π³ππΉπΏππ°π½ ππ΄πΉπ³π',
'permalink'         => 'π°ππ΄πΉπ½π ππ°πΉπΊπ½πΎπ°π±π°π½π³πΉ',
'view'              => 'SaΓ­hvan',
'edit'              => 'πΌπ°πΉπ³πΎπ°π½',
'create'            => 'Skapjan',
'editthispage'      => 'πΌπ°πΉπ³πΎπ° πΈπ ππ΄πΉπ³π',
'create-this-page'  => 'Skapja ΓΎo seido',
'delete'            => 'ππ°πΉππ°π½',
'deletethispage'    => 'ππ°πΉππ° πΈπ ππ΄πΉπ³π',
'protect'           => 'π±π°πΉππ²π°π½',
'protectthispage'   => 'BaΓ­rga ΓΎo siedo',
'unprotect'         => 'π½πΉπ±π°πΉππ²π°',
'unprotectthispage' => 'NibaΓ­rga ΓΎo siedo',
'newpage'           => 'π½πΉπΏπΎπ° ππ΄πΉπ³π',
'talkpage'          => 'πΌπ°πΈπ»π΄πΉππ΄πΉπ³π',
'talkpagelinktext'  => 'πΌπ°πΈπ»π΄πΉππ΄πΉπ³π',
'specialpage'       => 'πΏπππΉπ½π³ππ΄πΉπ³ππ',
'personaltools'     => 'ππ°πΉππ»π΄πΉπΊπ π±ππΏπΊππ°πΉπ·ππ',
'talk'              => 'π²π°ππ°πΏππ³πΎπ°',
'views'             => 'ππΉπΏπ½π΄πΉπ',
'toolbox'           => 'ππ°πΏπΉ π°ππΊπ°',
'otherlanguages'    => 'π°π½πΈπ°π ππ°πΆπ³ππ',
'redirectedfrom'    => '(NΓ‘uΓΎjan framis $1)',
'redirectpagesub'   => 'ππ°πΉπΊπΎπ°ππ΄πΉπ³π',
'jumpto'            => 'Gaggan at:',
'jumptonavigation'  => 'ππ΄πΉπ³ππ²π°ππΉππ',
'jumptosearch'      => 'sokeiΓΎ',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => 'πππ°πΌ {{SITENAME}}',
'aboutpage'            => 'Project:πΏππ°π',
'copyrightpage'        => '{{ns:project}}:ManleikawitoΓΎa',
'currentevents'        => 'Niuja waΓ­hts',
'currentevents-url'    => 'Project:π½πΉπΏπΎπ° ππ°πΉπ·ππ',
'disclaimers'          => 'π°ππ°πΉπΊπ°π½ ππΉπππΈ',
'disclaimerpage'       => 'Project:π°ππ°πΉπΊπ°π½ ππΉπππΈ',
'edithelp'             => 'πΌπ°πΉπ³π΄πΉπ½πΉπ·πΉπ»ππ°',
'edithelppage'         => 'Help:πΌπ°πΉπ³πΎπ°',
'helppage'             => 'Hilpa:HΓ‘ubidaseido',
'mainpage'             => 'π·π°πΏπ±πΉπ³π°ππ΄πΉπ³π',
'mainpage-description' => 'π·π°πΏπ±πΉπ³π°ππ΄πΉπ³π',
'portal'               => 'π±π°πΏππ²π π²π°ππΉ',
'portal-url'           => 'Project:π±π°πΏππ²π π²π°ππΉ',
'privacy'              => 'π°π½π°ππΉπ»π° ππΉπππΈ',
'privacypage'          => 'Project:π°π½π°ππΉπ»π° ππΉπππΈ',

'retrievedfrom'       => 'Niman fram "$1"',
'youhavenewmessages'  => 'πΈπΏ π·π°π±πΉπ $1 ($2).',
'newmessageslink'     => 'π½πΉπΏπΎπ πΌπ°πΈπ»π΄πΉ',
'newmessagesdifflink' => 'πππ΄π³πΏπΌπΉπππ πΌπ°πΉπ³π΄πΉπ½π',
'editsection'         => 'πΌπ°πΉπ³πΎπ°π½',
'editold'             => 'πΌπ°πΉπ³πΎπ°π½',
'editlink'            => 'mΓ‘idjan',
'editsectionhint'     => 'πΌπ°πΉπ³πΎπ°π½ π°π ππ΄ππ°: $1',
'toc'                 => 'πΉπ½π½π°π½π°',
'showtoc'             => 'π°πΏπ²πΎπ°',
'hidetoc'             => 'ππΉπ»π·π°π½',
'site-rss-feed'       => '$1 RSS MiΓΎnatifodjan',
'site-atom-feed'      => '$1 Atom MiΓΎnatifodjan',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'     => 'ππ΄πΉπ³π',
'nstab-user'     => 'π½πΉπΏππ°π½π³πΉπππ΄πΉπ³π',
'nstab-special'  => 'πΏπππΉπ½π³ππ΄πΉπ³π',
'nstab-project'  => 'ππ΄πΉπΊπΉππ΄πΉπ³π',
'nstab-image'    => 'πΌπ°π½π»π΄πΉπΊπ°',
'nstab-template' => 'πΌπ°ππΊπ°',
'nstab-help'     => 'π·πΉπ»ππ°',
'nstab-category' => 'πΊπΏπ½πΎπ°',

# General errors
'viewsource' => 'ππ°πΉππ° πΉπ½π½π°π½π°',

# Login and logout pages
'yourname'                => 'π½πΉπΏππ°π½π³πΉππ½π°πΌπ:',
'yourpassword'            => 'π°π½π°π»π°πΏπ²π½π ππ°πΏππ³π°:',
'login'                   => 'Atgaggan',
'nav-login-createaccount' => 'π°ππ²π°π²π²π°π½ / π²π°π»π°π½π²πΎπ°π½ π½πΉπΏππ°π½π³πΉπ',
'userlogin'               => 'Atgaggan / gaskapjan niutandis',
'logout'                  => 'π»π΄πΉπΈπ°π½',
'userlogout'              => 'π»π΄πΉπΈπ°π½',
'nologinlink'             => 'Gaskapjan ΓΎein niutandis',
'createaccount'           => 'π²π°π»π°π²πΎπ°π½ π½πΉπΏππ°π½π³πΉπ',
'gotaccount'              => "HabiΓΎ ΓΎu niutandis? '''$1'''",
'gotaccountlink'          => 'Atgaggan',
'loginlanguagelabel'      => 'Razda: $1',

# Edit page toolbar
'bold_sample'     => 'π°π±ππ π±ππΊπ°',
'bold_tip'        => 'π°π±π ππ°πΏππ³π°',
'italic_sample'   => 'WrΓ‘iqs waΓΊrda',
'italic_tip'      => 'Driuso boka',
'link_sample'     => 'TΓ‘ikjanbandi namo',
'link_tip'        => 'tΓ‘ikjanbandi innana',
'extlink_sample'  => 'http://www.example.com TΓ‘ikjandandi namo',
'extlink_tip'     => 'Uta tΓ‘ikjabandi (maΓΊdjan http://)',
'headline_sample' => 'HΓ‘ubidawaΓΊrda',
'headline_tip'    => 'HΓ‘uhs hΓ‘ubidaboka 2',
'media_tip'       => 'TΓ‘ikjabandjis feilanis',
'hr_tip'          => 'RΓ‘ihtsbΓ‘urd (brukjan miΓΎ niufarussus)',

# Edit pages
'summary'                => 'πΌπ°πΉπ³πΎπ°π½πππΉπ»π»ππ½:',
'subject'                => 'π·π°πΏπ±πΉπ³π°π±ππΊπ°:',
'minoredit'              => 'ππ° πΉππ π»π΄πΉππΉπ»π° πΌπ°πΉπ³π΄πΉπ½π',
'watchthis'              => 'ππ°ππ°π½ ππ΄πΉπ³π',
'savearticle'            => 'πΌπ΄π»πΎπ° ππ΄πΉπ³π',
'preview'                => 'ππ°πΏπππ°πΉππ° ππ΄πΉπ³π',
'showpreview'            => 'ππΉππ°π½ ππ°πΏπππ°πΉππ°',
'showdiff'               => 'ππΉππ°π½ πΌπ°πΉπ³π΄πΉπ½π',
'newarticle'             => '(Niu)',
'updated'                => '(Nuwisan)',
'previewnote'            => "'''ππ°π· πΉππ ππ°πΏπππ°πΉππ°. πΌπ°πΉπ³π΄πΉπ½π π²π°πΌπ΄π»πΎπΉπΈ π½πΉ π°π πΈπΉπΆππ ππ΄πΉπ³ππ!'''",
'editing'                => 'πΌπ°πΉπ³πΎπ°π½ π°π $1',
'editingsection'         => 'πΌπ°πΉπ³πΎπ°π½ π°π $1 (ππ΄ππ°)',
'editingcomment'         => 'πΌπ°πΉπ³πΎπ°π½ π°π $1 (πππ³πΎπ°ππ΄ππ°)',
'yourdiff'               => 'Missalieks',
'template-protected'     => '(gabaΓ­rgan)',
'template-semiprotected' => '(halb-gabaΓ­rgjan)',

# History pages
'currentrev'          => 'π½πΏ πΌπ°πΉπ³π΄πΉπ½π',
'revisionasof'        => 'π²π°πΌπ΄π»πΉπ³π πΏπ $1',
'revision-info'       => 'MΓ‘ideins fram $1 bi $2',
'previousrevision'    => 'βπ°πΉππΉπ πΌπ°πΉπ³π΄πΉπ½π',
'nextrevision'        => 'Iftuma mΓ‘ideinsβ',
'currentrevisionlink' => 'π½πΏπΌπ°πΉπ³π΄πΉπ½π',
'cur'                 => 'π½πΏ',
'next'                => 'πΉπππΏπΌπ°',
'last'                => 'π°πππΏπΌπΉπππ',
'page_first'          => 'frumists',
'page_last'           => 'πππ΄π³πΏπΌπΉπππ',
'histfirst'           => 'ππ°πΏππΈπΉπ',
'histlast'            => 'πππ΄π³πΏπΌπΉπππ',

# Revision feed
'history-feed-item-nocomment' => '$1 at $2',

# Diffs
'history-title' => 'π°ππΉππΌπ°πΉπ³π΄πΉπ½π π°π "$1"',
'lineno'        => 'π±ππΊπ°ππΉπ²πΉπ»π $1:',
'editundo'      => 'π½πΉπΏππΊπ°ππΎπ°π½',

# Search results
'prevn'              => 'aftuma {{PLURAL:$1|$1}}',
'nextn'              => 'iftuma {{PLURAL:$1|$1}}',
'viewprevnext'       => 'ππΉπΏπ½π΄πΉπ ($1 {{int:pipe-separator}} $2) ($3)',
'searchhelp-url'     => 'Hilpa:HΓ‘ubidaseido',
'powersearch'        => 'SokeiΓΎ',
'powersearch-legend' => 'πππΊπ΄πΉπΈ',
'powersearch-redir'  => 'ππ°π»π° π°π ππ°πΉπΊπΎπ°π½ππ΄πΉπ³ππ',

# Preferences page
'preferences'       => 'πΌπ΄πΉπ½ππ π±ππΏπΊπΎπ°πΌπ°πΉπ³π΄πΉπ½π΄πΉπ',
'mypreferences'     => 'πΌπ΄πΉπ½ππ π±ππΏπΊπΎπ°',
'prefs-skin'        => 'Seidofill',
'skin-preview'      => 'FaΓΊrsaiΖa',
'saveprefs'         => 'Melja',
'searchresultshead' => 'SokeiΓΎ',

'grouppage-sysop' => '{{ns:project}}:ππ΄πΉπ³πππ°πΈπ',

# User rights log
'rightslog'  => 'Niutandis stutjanlog',
'rightsnone' => '(ni Γ‘inshun)',

# Recent changes
'nchanges'        => '$1 {{PLURAL:$1|mΓ‘idein|mΓ‘ideins}}',
'recentchanges'   => 'π°πππΏπΌπΉππππ πΌπ°πΉπ³π΄πΉπ½π΄πΉπ',
'rcshowhideminor' => '$1 lietila mΓ‘ideins',
'rcshowhidebots'  => '$1 bota',
'rcshowhideliu'   => '$1 niutandis',
'rcshowhideanons' => '$1 gasteis',
'rcshowhidemine'  => '$1 mein mΓ‘ideins',
'diff'            => 'π»π΄πΉπΊπ',
'hist'            => 'π°πΉππΉπ',
'hide'            => 'Filhan',
'show'            => 'Huljan',
'minoreditletter' => 'l',
'newpageletter'   => 'N',
'boteditletter'   => 'b',

# Recent changes linked
'recentchangeslinked'         => 'πΌπ°πΉπ³π΄πΉπ½π»πΉπ΄πΊπ',
'recentchangeslinked-feed'    => 'MΓ‘ideinlieks',
'recentchangeslinked-toolbox' => 'πΌπ°πΉπ³π΄πΉπ½π»πΉπ΄πΊπ',

# Upload
'upload'          => 'πΏππ·π»π°πΈπ°πΉπΈ ππ΄πΉπ»π°π½π',
'uploadbtn'       => 'UshlaΓΎaiΓΎ Feilans',
'uploadlogpage'   => 'Log af UshlaΓΎan',
'uploadedimage'   => 'ushlaΓΎiΓΎ "[[$1]]"',
'watchthisupload' => 'Witan so seido',

# Special:ListFiles
'imgfile'   => 'Feilans',
'listfiles' => 'Feilans tala',

# File description page
'file-anchor-link'    => 'Feilans',
'filehist'            => 'Feilans Γ‘iris',
'filehist-current'    => 'nu',
'filehist-datetime'   => 'ΗΆeila',
'filehist-user'       => 'Niutandis',
'filehist-dimensions' => 'Wahstus',
'filehist-filesize'   => 'Feilans wahstus',
'filehist-comment'    => 'Leitilaspillon',
'imagelinks'          => 'TΓ‘iknjabandja',

# File deletion
'filedelete-submit' => 'TaΓ­ran',

# MIME search
'mimesearch' => 'MIME sokeiΓΎ',

# List redirects
'listredirects' => 'ππ°π»π° π°π ππ°πΉπΊπΎπ°π½ππ΄πΉπ³ππ',

# Random page
'randompage' => 'ππ»πΏπΌππΌπ°πππΉπ² ππ΄πΉπ³π',

# Statistics
'statistics' => 'ππ΄πΉπ³ππππ°ππΉπππΉπΊ',

'brokenredirects-edit'   => '(πΌπ°πΉπ³πΎπ°π½)',
'brokenredirects-delete' => '(ππ°πΉππ°π½)',

# Miscellaneous special pages
'nbytes'       => '$1 {{PLURAL:$1|π±π°πΉπ|π±π°πΉππ°}}',
'ncategories'  => '$1 {{PLURAL:$1|πΊπΏπ½πΎπ°|πΊπΏπ½πΎππ}}',
'nlinks'       => '$1 {{PLURAL:$1|tΓ‘ikjanbandi|tΓ‘ikjanbandja}}',
'nmembers'     => '$1 {{PLURAL:$1|niutand|niutanda}}',
'wantedpages'  => 'GaΓ­rnedum seidam',
'shortpages'   => 'π»π΄πΉππΉπ»π° ππ΄πΉπ³ππ',
'longpages'    => 'π»π°π²π²π° ππ΄πΉπ³ππ',
'listusers'    => 'ππ΄π²πΉππππ΄ππ°π³π΄ π±ππΏπΊπΎπ°π½π³π',
'newpages'     => 'π½πΉπΏπΎπ° ππ΄πΉπ³ππ',
'move'         => 'π½π°πΌπΎπ°π½ π°ππππ°',
'movethispage' => 'ππΊπΉπΏπ±π°π½ ππ° ππ΄πΉπ³π',

# Special:Log
'specialloguserlabel'  => 'Niutand:',
'speciallogtitlelabel' => 'Namo:',
'log'                  => 'π»ππ²π±ππΊππ',
'all-logs-page'        => 'π°π»π»π° π»ππ²ππ',

# Special:AllPages
'allpages'       => 'π°π»π»πΉπ ππ΄πΉπ³ππ',
'alphaindexline' => '$1 du $2',
'nextpage'       => 'πΉπππΏπΌπ° ππ΄πΉπ³π ($1)',
'prevpage'       => 'π°πππΏπΌπ° ππ΄πΉπ³π ($1)',
'allarticles'    => 'π°π»πΎπ° ππ΄πΉπ³ππ',
'allpagessubmit' => 'π°ππ²π°π²π²π°π½',

# Special:Categories
'categories' => 'πΊπΏπ½πΎππ',

# Special:LinkSearch
'linksearch-ns' => 'ππ΄πΉπ³πππ΄ππ°:',

# E-mail user
'emailuser' => 'ππ°π½π³πΎπ°π½ πΈπ π½πΉπΏππ°π½π³ π±ππΊππΌ',

# Watchlist
'watchlist'         => 'πΌπ΄πΉπ½ππ ππΉππ°π½π³ππ»π΄πΉπππ°',
'mywatchlist'       => 'πΌπ΄πΉπ½ππ ππΉππ°π½π³ππ»π΄πΉπππ°',
'watch'             => 'ππ°ππ°π½',
'watchthispage'     => 'ππ°ππ°π½ ππ΄πΉπ³π',
'unwatch'           => 'π½πΉππ°ππ°π½',
'watchlist-details' => '{{PLURAL:$1|$1 seido|$1 seidona}} witΓ‘iΓΎs inu maΓΎleiseidam.',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Wita...',
'unwatching' => 'Niwita...',

'created' => 'π²π°ππΊπ°ππΎπ°π½',

# Delete
'deletepage'            => 'ππ°πΉππ° ππ΄πΉπ³π',
'delete-legend'         => 'ππ°πΉππ°π½',
'actioncomplete'        => 'ππ°ππΏπ· πΉππ° π²π°πΏπππΉπΏπ·π°π½',
'dellogpage'            => 'ππ°πΉππ° π°πΉπππ±ππΊπ°',
'deleteotherreason'     => 'π°π½πΈπ°π/πΌπ°πΉπ πΌπΉπππ½π:',
'deletereasonotherlist' => 'π°π½πΈπ°π πΌπΉπππ½π',

# Rollback
'rollbacklink' => 'π°πππ°π»ππΎπ°π½',

# Protect
'protectlogpage'      => 'Log af BaΓ­rgjan',
'prot_1movedto2'      => '[[$1]] skiubiΓΎ du [[$2]]',
'protect-level-sysop' => 'ππ΄πΉπ³πππ°πΈπ π°πΉπ½π°π·π°',
'protect-expiring'    => 'blΓ‘uΓΎiΓΎ $1 (UTC)',
'restriction-type'    => 'Freihals:',

# Restrictions (nouns)
'restriction-edit' => 'πΌπ°πΉπ³πΎπ°π½',
'restriction-move' => 'ππΊπΉπΏπ±π°π½',

# Undelete
'undeletebtn'            => 'π°ππππ° π²π°π±πππΎπ°π½',
'undelete-search-submit' => 'SokeiΓΎ',

# Namespace form on various pages
'namespace'      => 'ππ΄πΉπ³πππ΄ππ°:',
'invert'         => 'Afwandjan kustus',
'blanknamespace' => '(πππΏπΌπΉπππ)',

# Contributions
'contributions' => 'π½πΉπΏππ°π½π³πΉπ π°πΉππ»π°π²πΉππ',
'mycontris'     => 'πΌπ΄πΉπ½ππ π°πΉππ»π°π²πΉππ',
'contribsub2'   => 'ππ°πΏπ $1 ($2)',
'uctop'         => '(hΓ‘ubiΓΎ)',
'month'         => 'πππ°πΌ πΌπ΄π½ππΈπ (πΎπ°π· π°πππΏπΌπ°):',
'year'          => 'πππ°πΌ πΎπ΄ππ° (πΎπ°π· π°πππΏπΌπ°):',

'sp-contributions-newbies-sub' => 'FaΓΊr niujis niutandis',
'sp-contributions-blocklog'    => 'Logboka af afdraΓΊsjan',
'sp-contributions-talk'        => 'MaΓΎleiseido',

# What links here
'whatlinkshere'       => 'ππ°ππΎπΉπ ππ΄πΉπ³ππ½π° π·π»π°π²πΊπΎπ°π½π³ π·πΉπ³ππ΄',
'whatlinkshere-title' => 'Seidos hwarjis du $1 tΓ‘iknjan',
'isredirect'          => 'ππ°πΉπΊπΎπ°ππ΄πΉπ³π',
'istemplate'          => 'inΓ‘ukan',
'whatlinkshere-prev'  => '{{PLURAL:$1|aftuma|aftumans $1}}',
'whatlinkshere-next'  => '{{PLURAL:$1|iftuma|iftumans $1}}',
'whatlinkshere-links' => 'β tΓ‘ikajanbandja',

# Block/unblock
'blockip'            => 'π°ππ³ππ°πΏππΎπ°π½ π½πΉπΏππ°π½π³πΉπ',
'ipbreason'          => 'ππ°πΉππΉπ½π°:',
'ipbotheroption'     => 'anΓΎar',
'ipblocklist-submit' => 'SokeiΓΎ',
'infiniteblock'      => 'ajukduΓΎs',
'blocklink'          => 'ππ°ππ²πΎπ°π½',
'unblocklink'        => 'ππ°π½π³πΎπ°π½',
'contribslink'       => 'π²πΉπ±ππ',
'blocklogpage'       => 'π»ππ²π±ππΊπ° π°π π°ππ³ππ°πΏππΎπ°π½',
'blocklogentry'      => 'π°ππ³ππ°πΏππΉπΈ [[$1]] ππ°πΏπ $2 $3',

# Move page
'movearticle' => 'ππΊπΉπΏπ±π° ππ΄πΉπ³π:',
'newtitle'    => 'π³πΏ π½πΉπΏπΎπΉπ π½π°πΌππ:',
'move-watch'  => 'ππΉππ°π½ ππ ππ΄πΉπ³π',
'movepagebtn' => 'ππΊπΉπΏπ±π° ππ΄πΉπ³π',
'movedto'     => 'skiubiΓΎ du',
'movelogpage' => 'Log af skiubans',
'movereason'  => 'ππ°πΉππΉπ½π°:',
'revertmove'  => 'rΓ‘idjan',

# Thumbnails
'thumbnail-more' => 'BiΓ‘uknan',

# Tooltip help for the actions
'tooltip-pt-userpage'            => 'Meina niutandisseido',
'tooltip-pt-mytalk'              => 'Meina maΓΎleiseido',
'tooltip-pt-preferences'         => 'Meinos brukjamaideineis',
'tooltip-pt-mycontris'           => 'Tala af meina gibom',
'tooltip-pt-logout'              => 'leiΓΎan',
'tooltip-ca-protect'             => 'π±π°πΉππ²π° πΈπ ππ΄πΉπ³π',
'tooltip-ca-delete'              => 'ππ°πΉππ°π½ ππ ππ΄πΉπ³π',
'tooltip-ca-move'                => 'Skiuban so seido',
'tooltip-search'                 => 'πππΊπ΄πΉπΈ {{SITENAME}}',
'tooltip-p-logo'                 => 'HΓ‘ubidaseido',
'tooltip-n-mainpage'             => 'ππ°πΉππ°π½ ππ° π·π°πΏπ±πΉπ³π°ππ΄πΉπ³π',
'tooltip-n-mainpage-description' => 'ππ°πΉππ°π½ ππ° π·π°πΏπ±πΉπ³π°ππ΄πΉπ³π',
'tooltip-t-upload'               => 'πΏππ·π»π°πΈπ°πΉπΈ ππ΄πΉπ»π°π½π',
'tooltip-t-specialpages'         => 'FindiΓΎ alla ussindseidos',
'tooltip-ca-nstab-user'          => 'ππ°πΉππ°π½ ππ° π½πΉπΏππ°π½π³πΉπππ΄πΉπ³π',
'tooltip-save'                   => 'Skreiban ΓΎein mΓ‘ideins',

# Browsing diffs
'previousdiff' => 'β π°πππΏπΌπ° π°πΉππΉπ',
'nextdiff'     => 'Iftuma Γ‘iris β',

# Media information
'show-big-image' => 'Fullis wahstus',

# Special:NewFiles
'ilsubmit' => 'SokeiΓΎ',

# Metadata
'metadata' => 'Ufardata',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'allis',
'namespacesall' => 'allis',
'monthsall'     => 'π°π»π»πΉπ',

# Multipage image navigation
'imgmultigo' => 'Afgaggan!',

# Table pager
'table_pager_limit_submit' => 'Affgaggan',

# Special:Version
'version-other' => 'AnΓΎar',

# Special:FilePath
'filepath-page' => 'Feilans:',

# Special:SpecialPages
'specialpages' => 'πΏπππΉπ½π³ππ΄πΉπ³ππ',

);
