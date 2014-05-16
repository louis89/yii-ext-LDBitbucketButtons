<?php
/**
 * LDBitbucketFollowButton class file.
 *
 * @author Louis A. DaPrato <l.daprato@gmail.com>
 * @link https://lou-d.com
 * @copyright 2014 Louis A. DaPrato
 * @license The MIT License (MIT)
 * @since 1.0
 */

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'LDBitbucketButtonBase.php');

/**
 * Follow button for bitbucket
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
	
	/**
	 * (non-PHPdoc)
	 * @see LDBitbucketButtonBase::getButtonUrl()
	 */
	public function getButtonUrl()
	{
		return self::buildUrl($this->user);
	}

}

?>