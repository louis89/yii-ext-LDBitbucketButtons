<?php

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'LDBitbucketButtonBase.php');

/**
 * 
 * @author Louis A. DaPrato <l.daprato@gmail.com>
 *
 */
class LDBitbucketFollowButton extends LDBitbucketButtonBase
{
	
	/**
	 * @var string The class to use for the button
	 */
	public $buttonClass = 'bitbucket-me';

	/**
	 * The extension initialization
	 */
	public function init()
	{
		parent::init();
		if($this->text === null)
		{
			$this->text = Yii::t($this->tCategory, 'Follow @{user}', array('{user}' => $this->user));
		}
	}
	
	public function getButtonUrl()
	{
		return self::buildUrl($this->user);
	}
	
	public function getCounterUrl()
	{
		return self::buildUrl($this->user, 'followers');
	}
	
	public function getApiUrl()
	{
		return self::buildApiUrl('users', $this->user);
	}

	public function getDataPropName()
	{
		return 'followers';
	}

}

?>