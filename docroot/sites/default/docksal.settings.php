<?php // Don't forget the opening php tag

# Docksal DB connection settings.
$databases['default']['default'] = [
  'database' => 'default',
  'username' => 'user',
  'password' => 'user',
  'host' => 'db',
  'driver' => 'mysql',
];

# Workaround for permission issues with NFS shares in Vagrant
$settings['file_chmod_directory'] = 0777;
$settings['file_chmod_file'] = 0666;
