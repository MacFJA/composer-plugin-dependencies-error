# Composer Plugin Dependencies error

The goal of this repository is only to provide an example of a dependency error.

**This plugin doesn't do anything.**

----

## How to test

- Create a new Composer project
- Add this repository as a Composer (git) repository
- Install the plugin

```
cd /tmp
mkdir composer_dependency_test
cd composer_dependency_test
echo '{"repositories":{"plugin":{"type":"git","url":"https://github.com/MacFJA/composer-plugin-dependencies-error.git"}}}' > composer.json
composer require macfja/composer-plugin-dependencies-error=@dev
```

----

This repository can be removed without any notices.