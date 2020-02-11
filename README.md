sbog/davical
============

Role to install Davical

#### Requirements

Ansible 2.4+

#### Role Variables

You can see all vars in `default/main.yml` vars file.

#### Dependencies

None

#### Example Playbook

```yaml
- name: Set the confidence between hosts
  hosts: davicals
  remote_user: root

  roles:
    - davical
```

#### License

Apache 2.0

#### Author Information

Stan Bogatkin (https://sbog.ru)
