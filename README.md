Password Generator App
======================

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
app/console cache:clear --env=prod --no-debug
```

c) Download
-----------

https://github.com/hackzilla/password-generator-app/archive/master.zip


Once installed run:

```bash
composer install
app/console cache:clear --env=prod --no-debug
```
