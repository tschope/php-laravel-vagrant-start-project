# PHP Laravel Vagrant Start Project
This project it's your start for new projects using:

- Vagrant
- Ansible
- PHP 7.1
- MySQL 5.7
- Laravel 5.8
- NodeJS
- VueJS 2.6

## Why

With this project I integrated most parts of roles with only one config file

```
vagrant_congig.yml
```

Most configs is there, changed and enjoy the project

# ATTENTION

This project use Ubuntu and I created a few roles for Ansiable and this roles only works with Ubuntu. You can use Trusty, Xenial or Zesty version.

# PHP Laravel Test

Project develop for PHP with REST API.

I use Laravel 5.8 and VueJS 2.6 with Bootstrap

## Run Project

### Vagrant - Easy way

I create a Vagrant instance to envoirement the project. You need hostmanager plugin to use the project. After install:

- [VirtaulBox](https://www.virtualbox.org/wiki/Downloads)
- [Vagrant](https://www.vagrantup.com/downloads.html)

Just:

```text
$ vagrant plugin install vagrant-hostmanager
```

After install tthe plugin, just:

```
$ vagrant up
# Wait...
```

Now go to [project.dev](http://project.dev/)
