# Yii2 component for PosCredit integration

[![License](https://poser.pugx.org/axelpal/yii2-poscredit/license)](https://packagist.org/packages/axelpal/yii2-poscredit)
[![Dependency Status](https://www.versioneye.com/user/projects/5a745c5d0fb24f27cb52e5aa/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/5a745c5d0fb24f27cb52e5aa)
[![Latest Stable Version](https://poser.pugx.org/axelpal/yii2-poscredit/v/stable)](https://packagist.org/packages/axelpal/yii2-poscredit)
[![Total Downloads](https://poser.pugx.org/axelpal/yii2-poscredit/downloads)](https://packagist.org/packages/axelpal/yii2-poscredit)

## Installation

```php
composer require axelpal/yii2-poscredit
```

## Usage
Add component to your project's config file:
```php
return [
    ...
    'components' => [
        ....
        'posCredit' => [
            'class' => 'AxelPAL\yii2\PosCredit',
            'userId' => $userID,
            'userToken' => $userToken,
        ]
    ],
];
```

### Check status of profile
```php
$profileData = Yii::$app->posCredit->getStatusShort($profileId);
```