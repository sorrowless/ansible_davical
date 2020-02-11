<?php
  $c->domain_name = "{{ davical.domain_name }}";
  $c->sysabbr     = 'Calendar';
  $c->admin_email = '{{ davical.admin_email }}';
  $c->system_name = "Calendar Server";
  $c->pg_connect[] = 'dbname=davical port={{ davical.pg_port }} user=davical_app';
