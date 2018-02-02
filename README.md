# Yii2 component for PosCredit integration

[![License](https://poser.pugx.org/axelpal/yii2-poscredit/license)](https://packagist.org/packages/axelpal/yii2-poscredit)
[![Dependency Status](https://www.versioneye.com/user/projects/5a74314f0fb24f20ef856f1b/badge.svg?style=flat)](https://www.versioneye.com/user/projects/5a74314f0fb24f20ef856f1b)
[![Latest Stable Version](https://poser.pugx.org/axelpal/yii2-poscredit/v/stable)](https://packagist.org/packages/axelpal/yii2-poscredit)
[![Total Downloads](https://poser.pugx.org/axelpal/yii2-poscredit/downloads)](https://packagist.org/packages/axelpal/yii2-poscredit)

## Usage
Add component to your project's config file:
```php
return [
    ...
    'components' => [
        ....
        'posCredit' => [
            'class' => 'AxelPAL\yii2\PosCredit\PosCredit',
            'userId' => $userID',
            'userToken' => $userToken,
        ]
    ],
];
```

### Check status of profile
```php
$profileData = Yii::$app->posCredit->getStatusShort($profileId);
```