# sbog/davical

[![Build Status](https://travis-ci.com/sorrowless/ansible_davical.svg?branch=master)](https://travis-ci.com/sorrowless/ansible_davical)
[![Ansible Role](https://img.shields.io/ansible/role/51247)](https://galaxy.ansible.com/sorrowless/davical)
[![Ansible Quality Score](https://img.shields.io/ansible/quality/51247)](https://galaxy.ansible.com/sorrowless/davical)
[![Ansible Role](https://img.shields.io/ansible/role/d/51247)](https://galaxy.ansible.com/sorrowless/davical)
[![GitHub](https://img.shields.io/github/license/sorrowless/ansible_davical)](https://github.com/sorrowless/ansible_davical/blob/master/LICENSE)

Role to install Davical

## Requirements

Ansible 2.4+

## Role Variables

You can see all vars in `default/main.yml` vars file.

## Dependencies

sorrowless.postgresql

## Example Playbook

```yaml
- name: Set the confidence between hosts
  hosts: davicals
  remote_user: root

  roles:
    - davical
```

## License

Apache 2.0

## Author Information

This role was created by [Stan Bogatkin](https://sbog.ru).
