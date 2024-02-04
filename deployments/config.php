<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'datadirectory' => '/data',
  'instanceid' => 'oc32w4sps346',
  'passwordsalt' => 'tSPOWQDj6Z5fxcEQh1ykCJ9C7b55ud',
  'secret' => 'UBYgVYhqP4SPk5vs4oim5kTouH7zKo5fEEZ6clLv+Q1nnFy0',
  'allow_url_fopen' => true,
  'filelocking.enabled' => true,
  'trusted_domains' =>
    array (
      0 => 'cloud.apex-migrations.net',
      ),
  'trusted_proxies' =>
    array (
      0 => '172.19.0.0/24'
    ),
  0 => 'opcache.enable=1',
  1 => 'opcache.interned_strings_buffer=32',
  2 => 'opcache.max_accelerated_files=10000',
  3 => 'opcache.memory_consumption=256',
  4 => 'opcache.save_comments=1',
  5 => 'opcache.revalidate_freq=60',
  'default_phone_region' => '+31',
  'dbtype' => 'mysql',
  'version' => '27.1.4.1',
  'overwrite.cli.url' => 'https://cloud.apex-migrations.net',
  'overwriteprotocol' => 'https',
  'dbname' => 'nextcloud_db',
  'dbhost' => 'mariadb',
  'dbport' => '5432',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'oc_a-grcr',
  'dbpassword' => '5HAfsfSiYnZWjOzWwc0jiBjTSlIukk',
  'installed' => true,
  'theme' => '',
  'loglevel' => 0,
  'log_type' => 'file',
  'logfile' => '/home/gregory/log/nextcloud.log',
  'log_type_audit' => 'file',
  'logfile_audit' => '/home/gregory/log/audit.log',
  'maintenance' => false,
  'has_rebuilt_cache' => true,
  'mail_from_address' => 'cloud',
  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_domain' => 'apex-migrations.net',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtphost' => 'smtp.transip.email',
  'mail_smtpport' => '465',
  'mail_smtpsecure' => 'ssl',
  'mail_smtpauth' => 1,
  'mail_smtpname' => 'nextcloud@apex-migrations.net',
  'mail_smtppassword' => 'Laliloe4life',
  'htaccess.RewriteBase' => '/',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'app_install_overwrite' => 
  array (
    0 => 'duplicatefinder',
    1 => 'occweb',
    2 => 'caniupdate',
    3 => 'carnet',
    4 => 'appointments',
    5 => 'geoblocker',
    6 => 'talked',
    7 => 'backup',
    8 => 'cfg_share_links',
    9 => 'scanner',
    10 => 'webhooks',
  ),
  'memories.exiftool' => '/var/www/html/custom_apps/memories/exiftool-bin/exiftool-amd64-glibc',
  'twofactor_enforced' => 'true',
  'twofactor_enforced_groups' => 
  array (
    0 => 'admin',
  ),
  'twofactor_enforced_excluded_groups' => 
  array (
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => '192.168.2.100',
    'password' => 'somepassword',
    'port' => 6379,
  ),
);