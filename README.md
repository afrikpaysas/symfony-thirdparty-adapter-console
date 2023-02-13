# Afrikpay symfony-thirdparty-adapter-console

This Project is used for implement a symfony third party adapter.

Installation
============

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Applications that use Symfony Flex
----------------------------------

Open a command console, enter your project directory and execute:

```console
$ composer create-project afrikpaysas/symfony-thirdparty-adapter-console my_project_name
```

### Step 2: Configure the documentation

Then, configure the documentation by adding it in the `config/packages/nelmio_api_doc.yaml` file of your project:

```yaml
# config/packages/nelmio_api_doc.yaml

nelmio_api_doc:
  documentation:
    info:
      title: Third Party Adapter
      description: This is the documentation of third party adapter!
      version: 1.0.0

#......
```

### Step 3: Configure the .env files

Then, configure the .env files by adding it in the `.env` file of your project:

```dotenv
# In all environments, the following files are loaded if they exist,
# the latter taking precedence over the former:
#
#  * .env                contains default values for the environment variables needed by the app
#  * .env.local          uncommitted file with local overrides
#  * .env.$APP_ENV       committed environment-specific defaults
#  * .env.$APP_ENV.local uncommitted environment-specific overrides
#
# Real environment variables win over .env files.
#
# DO NOT DEFINE PRODUCTION SECRETS IN THIS FILE NOR IN ANY OTHER COMMITTED FILES.
# https://symfony.com/doc/current/configuration/secrets.html
#
# Run "composer dump-env prod" to compile .env files for production use (requires symfony/flex >=1.2).
# https://symfony.com/doc/current/best_practices.html#use-environment-variables-for-infrastructure-configuration

###> symfony/framework-bundle ###
APP_ENV=dev
APP_DEBUG=1
APP_SECRET=""
SHOW_CONFIG=true
###< symfony/framework-bundle ###

###> symfony/security-bundle ###
HTTP_BASIC_AUTH_USERNAME=user
HTTP_BASIC_AUTH_PASSWORD=password
###< symfony/security-bundle ###

###> doctrine/doctrine-bundle ###
# Format described at https://www.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#connecting-using-a-url
# IMPORTANT: You MUST configure your server version, either here or in config/packages/doctrine.yaml
#
# DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
DATABASE_URL="mysql://user:pssword@127.0.0.1:3306/db?serverVersion=5&charset=utf8mb4"
#DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=14&charset=utf8"
###< doctrine/doctrine-bundle ###

APP_CODE=00
APP_NAME=NAME

APP_DB_ID_LENGTH=16
TIME_ZONE=UTC
TIME_ZONE_PROVIDER=UTC
DEFAULT_DATE_TIME=now

MANUAL_MODE=false
ASYNC_MODE=false
SET_BALANCE_AFTER_PAYMENT=false

REFERENCE_REGEX="/^[0-9]{6,20}$/"

AMOUNT_ENABLED=false
AMOUNT_MIN=0
AMOUNT_MAX=0

PHONE_ENABLED=false
PHONE_REGEX="/^[0-9]{6,20}$/"

EMAIL_ENABLED=false

OPTION_ENABLED=false
OPTION_API_ENABLED=false
SEARCH_OPTION_WITH_REFERENCE=false
API_OPTION=""
OPTIONS_FILE="/config/options.yaml"
OPTION_PAY_ENABLED=false

REFERENCE_API_ENABLED=true
PAY_UNIQUE_REFERENCE=false
API_REFERENCE=""

API_PAYMENT=""
API_TOKEN=""
API_USERNAME_TOKEN=""
API_PASSWORD_TOKEN=""
API_DATE_FORMAT="Y-m-d H:i:s"

CURL_TIMEOUT=60
CURL_MAXREDIRS=10

ADMIN_PHONES=""
ADMIN_EMAILS=""
NOTIF_ADMIN_PHONES=false
NOTIF_ADMIN_EMAILS=false
NOTIF_SMS_MESSAGE=""
NOTIF_SMS_ADMIN_MESSAGE=""

SMS_ENABLED=false
SMS_SENDER=""
SMS_COUNTRY=""
SMS_SEPARATOR=";"
API_SMS=""

EMAIL_API_ENABLED=false
EMAIL_ADMIN_OBJECT=""
EMAIL_CLIENT_OBJECT=""
EMAIL_SENDER=""
EMAIL_SEPARATOR=";"
API_EMAIL=""
EMAIL_TEMPLATING_INLINE="<hr>"
EMAIL_TEMPLATING_OBJECT="List"

API_CALLBACK_TOKEN=""
API_CALLBACK_SIGNATURE_VARS=""
API_CALLBACK_SIGNATURE_SEPARATOR="+"
API_CALLBACK_SIGNATURE_SECRET=""
CALLBACK_URL_REGEX="/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i"

###> symfony/messenger ###
# Choose one of the transports below
#MESSENGER_TRANSPORT_DSN=doctrine://default
MESSENGER_TRANSPORT_DSN=amqp://guest:guest@localhost:5672/%2f/messages
# MESSENGER_TRANSPORT_DSN=redis://localhost:6379/messages
###< symfony/messenger ###
```

### Step 4: Run the application

Then, run the application:

```console
$ composer install && php bin/console cache:clear && php bin/console doctrine:schema:update -f && symfony server:start
```