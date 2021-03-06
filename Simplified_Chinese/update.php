<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'更新FluxBB',
'Update message'				=>	'您的FluxBB数据库已经过时，继续之前必须升级。如果您是该论坛管理员，请按下列说明完成升级。',
'Note'							=>	'注意：',
'Members message'				=>	'该进程仅供论坛管理员操作。如您不是管理员，请勿担心——论坛马上就会上线！',
'Administrator only'			=>	'该步骤仅供论坛管理员操作！',
'Database password info'		=>	'要执行数据库升级请填写FluxBB所使用的数据库密码。如果您不慎忘记了密码，请查看 \'config.php\' 文件中储存的密码。',
'Database password note'		=>	'如果您使用的是SQLite数据库(无须密码)请使用数据库名称代替密码。它必须与配置文件中您所给出的数据库名称完全匹配。',
'Database password'				=>	'数据库密码',
'Maintenance'					=>	'维护',
'Maintenance message info'		=>	'本通知在论坛升级维护时显示。本通知与论坛的帖子不同，它支持HTML格式。',
'Maintenance message'		    =>	'维护通知',
'Next'							=>	'下一步',

'You are running error'			=>	'您所运行的 %1$s 版本号为 %2$s。FluxBB %3$s 至少必须 %1$s %4$s 才能正确运行。继续之前您必须先将您的 %1$s 升级。',
'Version mismatch error'		=>	'版本不匹配。数据库 \'%s\' 似乎不包含本升级脚本所支持的FluxBB数据库架构。',
'Invalid file error'			=>	'无效的数据库名称。当使用SQLite数据库时，填写的数据库名称必须要与您的 \'%s\' 文件中显示的一致',
'Invalid password error'		=>	'无效的数据库密码。升级 FluxBB 时您填写的数据库密码必须要与您的 \'%s\' 文件中显示的一致',
'No password error'				=>	'未提供数据库密码',
'Script runs error'				=>	'已有其他人运行了更新脚本。如果未出现该情况，请手动删除文件 \'%s\' 后重试',
'No update error'				=>	'您的论坛已经是该脚本所能更新到的最新版本',

'Intro 1'						=>	'该脚本将会更新您的数据库，取决于服务器的速度以及论坛数据库的大小，该更新过程可能持续1秒至几小时不等。继续之前，请不要忘记做一个数据库的备份。',
'Intro 2'						=>	'您是否已经阅读了文档中的更新说明？如果没有，请从那里开始。',
'No charset conversion'			=>	'<strong>重要！</strong> FluxBB 已经检测到该PHP环境尚不支持将ISO-8859-1以外的编码转换为UTF-8的编码转换机制。这意味着如果您的当前编码不是ISO-8859-1，FluxBB 将不能自动将您的论坛数据转换为UTF-8格式，您必须手工完成该操作。关于手工转换字符集的指示可在更新说明中找到。',
'Enable conversion'				=>	'<strong>启用转换：</strong> 如启用该功能，在更新脚本完成数据库结构的必须更新后，还会将数据库中的所有文字由当前编码转换为UTF-8。如是从FluxBB 1.2版更新，该转换过程是必须的。',
'Current character set'			=>	'<strong>当前字符集：</strong> 如果您的论坛的主要语言是英语，您可以保留此处的默认值。否则，如果非英语，您需要填写论坛所使用的主要语言包的字符集名称。<em>错误的填写可能会损坏您的数据库，因此请勿依靠猜测！</em> 注意：即使原数据库使用UTF-8编码，此处也需要填写。',
'Charset conversion'			=>	'字符集转换',
'Enable conversion label'		=>	'<strong>启用转换</strong> (执行数据库字符集转换)。',
'Current character set label'	=>	'当前字符集',
'Current character set info'	=>	'英语论坛保留默认值，否则，提供主要语言包的字符集。',
'Start update'					=>	'开始更新',
'Error converting users'		=>	'用户转换错误',
'Error info 1'					=>	'转换某些用户时出现错误。当从FluxBB 1.2转换时，如果多个用户的名称过于相似，如 "bob" 和 "böb"，可能会出现该错误。',
'Error info 2'					=>	'以下是未完成转换的用户列表。请为每个用户重新命名，这些用户将会自动接收被重命名的邮件通知。',
'New username'					=>	'新用户名',
'Required'						=>	'(必须)',
'Correct errors'				=>	'以下错误需要修正：',
'Rename users'					=>	'重命名的用户',
'Successfully updated'			=>	'您的论坛数据已经成功更新。现在您可以 %s。',
'go to index'					=>	'转到论坛首页',

'Unable to lock error'			=>	'更新无法写入。请确认开放了目录 \'%s\' 的PHP 写入权限并确保当前没有其他人正在运行升级脚本。',

'Converting'					=>	'正在转换 %s …',
'Converting item'				=>	'正在转换 %1$s %2$s …',
'Preparsing item'				=>	'正在预分析 %1$s %2$s …',
'Rebuilding index item'			=>	'正在为 %1$s %2$s 重建索引',

'ban'							=>	'封禁',
'categories'					=>	'版块分类',
'censor words'					=>	'过滤词汇',
'configuration'					=>	'配置',
'forums'						=>	'版块',
'groups'						=>	'用户组',
'post'							=>	'帖子',
'report'						=>	'举报',
'topic'							=>	'主题',
'user'							=>	'用户',
'signature'						=>	'签名',

'Username too short error'		=>	'用户名长度至少需要2字节。请重新选择(更长的)用户名。',
'Username too long error'		=>	'用户名长度不可超过25字节。请重新选择(更短的)用户名。',
'Username Guest reserved error'	=>	'该用户名已被访客占用。请重新选择用户名。',
'Username IP format error'		=>	'用户名不得设为 IP 地址格式。请重新选择用户名。',
'Username bad characters error'	=>	'用户名不可一次包含字符 \'、 " 与 [ 或 ] 。请重新选择用户名。',
'Username BBCode error'			=>	'用户名不得包含论坛所使用的样式标签格式 (BBCode) 。请重新选择用户名。',
'Username duplicate error'		=>	'已有用户注册了用户名 %s 。您填写的用户名与之太相似。用户名必须与之不同，至少拥有一个字母、数字的差异 (a-z or 0-9)。请重新选择用户名。',

);
