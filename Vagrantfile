# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "avenuefactory/lamp"
  config.vm.network :private_network, ip: "192.168.10.10"
  config.vm.synced_folder "./public_html", "/var/www/html"

end
