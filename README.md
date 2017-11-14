**Example module payment of magento2**

> - tested on magento2.2.0, magento2.1.9
> - php7.0.22-0ubuntu0.16.04.1

**Install:**

> - copy files to app/code/JohnDoe/CustomPayment/
> - _php bin/magento setup:upgrade_
> - _php bin/magento setup:di:compile_
> - _php bin/magento setup:static-content:deploy_ <your_locale>
> - _php bin/magento cache:clean_
> - _chmod 777 -R var pub_