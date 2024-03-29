# SrLearningProgressReset ILIAS Plugin

Auto reset learning process

This project is licensed under the GPL-3.0-only license

## Requirements

* ILIAS 6.0 - 7.999
* PHP >=7.2

## Installation

Start at your ILIAS root directory

```bash
mkdir -p Customizing/global/plugins/Services/UIComponent/UserInterfaceHook
cd Customizing/global/plugins/Services/UIComponent/UserInterfaceHook
git clone https://github.com/fluxfw/SrLearningProgressReset.git SrLearningProgressReset
```

Update, activate and config the plugin in the ILIAS Plugin Administration

## Description

You need to install the [SrLearningProgressResetCron](https://github.com/fluxfw/SrLearningProgressResetCron) plugin

Resets the learning progress of users who have reached the days

Object config:

![Object config 1](./doc/images/object_config_1.png)

![Object config 2](./doc/images/object_config_2.png)

UDF config:

![UDF config 1](./doc/images/udf_config_1.png)

![UDF config 2](./doc/images/udf_config_2.png)

## EnrolmentDateJsonServerDebug

[EnrolmentDateJsonServerDebug](../EnrolmentDateJsonServerDebug/README.md)
