Password Generator App
======================

Demo
----

A setup version is available for use at [http://passwords.ofdan.com/]


Installation
---------------

You have three different ways to download the app.

a) Composer
-----------

```bash
composer create-project hackzilla/password-generator-app
```

b) Git
------

```bash
git clone git@github.com:hackzilla/password-generator-app.git
composer install
bin/console cache:clear --env=prod --no-debug
```

c) Download
-----------

https://github.com/hackzilla/password-generator-app/archive/master.zip


Once installed run:

```bash
composer install
bin/console cache:clear --env=prod --no-debug
```

d) Update Front-end dependencies

* yarn install


Components
----------

* Password Generator Library [https://github.com/hackzilla/password-generator]
* Password Generator Bundle [https://github.com/hackzilla/password-generator-bundle]
