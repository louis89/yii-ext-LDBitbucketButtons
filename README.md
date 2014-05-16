Bitbucket button for Yii
==================

REQUIREMENTS
------------

- Yii 1.0 or above
- LDPublishAssetsBehavior

INSTALLATION
------------

Simply unzip, clone, or add this repository as a submodule into your Yii application's extensions subdirectory.

QUICK START
-----------

Only a follow button is included at the moment.
Please see the internal documentation for additional configuration setting details.

It is assumed "$this" refers to an instance of CBaseController and "ext" is the base path alias where this widget is installed.

## Follow

	$this->widget('ext.LDBitbucketButtons.LDBitbucketFollowButton', array('user' => 'username'));