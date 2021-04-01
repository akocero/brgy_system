## Installation

Use the package manager [npm](https://www.npmjs.com/get-npm) to install npm,
as well as [composer](https://getcomposer.org/download/) to install composer.

Input these lines of code on the command line (open directory with code editor after git clone before continuing):
```bash
git clone https://gitlab.com/akocero/brgy_system_v2.git
```
Note **if you already installed cross-env you can skip this step**

```bash
npm install --global cross-env
```
```bash
npm install
```
```bash
cp .env.example .env
```
```bash
composer install
```
```bash
php artisan key:generate
```

Then turn on Apache and MySQL service: and create the database name **db_brgy_v2**

This command will add columns and seeds the database
```bash
php artisan migrate:fresh --seed

This command will start a local env to your device
```
```bash
php artisan serve
```

Add another terminal alongside then:
```bash
npm run watch
```

## Git Workflow

Use [Git Bash](https://git-scm.com/downloads) for Windows and regular command line for Linux-based systems (like MacOS).

When working on a new feature:
```bash
git pull origin master
```
```bash
git branch feature-name
```
```bash
git checkout feature-name
```
```bash
git push origin feature-name
```

After working on a feature
```bash
git add .
```
```bash
git commit -m 'finished new feature'
```
```bash
git push origin feature-name
```
```bash
git checkout master
```
After pushing to the new feature branch, go to [GitLab repository](https://gitlab.com/akocero/brgy_system_v2.git) and make a merge request to master branch.
