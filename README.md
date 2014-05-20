Password Generator App
======================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/c590e76d-ae4a-402f-af96-759b6acc9ec5/big.png)](https://insight.sensiolabs.com/projects/c590e76d-ae4a-402f-af96-759b6acc9ec5)

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

Components
----------

* Password Generator Library [https://github.com/hackzilla/password-generator]
* Password Generator Bundle [https://github.com/hackzilla/password-generator-bundle]
