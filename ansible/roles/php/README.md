# Ansible Role: PHP - Any version

An Ansible role that installs and configure PHP on Debian/Ubuntu servers.

Current PHP7.1 version: **7.1.11**

## Requirements

None.

## Role Variables

Available variables are listed below, along with default values (see `defaults/main.yml`):

    ppa: "ppa:ondrej/php"
    name_version: "php7.1"
    version: "7.1"
    packages:
        - common
        - cli
        - intl
        - curl
        - mysql
        - readline
        - mcrypt
        - json
        - mbstring
        - xml
        - zip
        - gd
        - fpm
    timezone: Europe/Dublin
    upload_max_filesize: "100M"
    post_max_size: "100M"
    memory_limit: "512M"

## Dependencies

None.

## Example Playbook

    - hosts: webservers
      roles:
        - { role: php }

## License

MIT