<?php

/**
 * 
 * @author Louis A. DaPrato <l.daprato@gmail.com>
 *
 */
abstract class LDBitbucketButtonBase extends CWidget
{
	
	const REQUEST_SCHEME = 'https://';
	
	const DOMAIN = 'bitbucket.com';
	
	const PATH_SEPARATOR = '/';
	
	const ID = 'LDBitbucketButtons';

	/**
	 * @var string category used when translating messages used by this widget
	 */
	public $tCategory = self::ID;
	
	/**
	 * @var string The name of the GitHub user
	 */
	public $user;
	
	/**
	 * @var boolean Whether to show a large or small button. Defaults to False.
	 */
	public $large = false;
	
	/**
	 * @var string The text content of the button. This will be generated automatically if it is not set before the widget is initialized.
	 */
	public $text;
	
	/**
	 * @var string The class to use for the button
	 */
	public $buttonClass;
	
	/**
	 * @var array additional configuration options for the asset publisher {@see LDPublishAssetsBehavior}
	 */
	public $publishAssetsConfig = array();
	
	/**
	 * @return string GitHub URL
	 */
	public static function buildUrl()
	{
		return self::REQUEST_SCHEME.self::DOMAIN.self::PATH_SEPARATOR.implode(self::PATH_SEPARATOR, func_get_args());
	}

	/**
	 * The extension initialization
	 */
	public function init()
	{
		if($this->user === null)
		{
			throw new CException(Yii::t($this->tCategory, 'The property "user" cannot be null.'));
		}
		$this->attachBehavior('LDPublishAssetsBehavior', array_merge(array('class' => 'ext.LDPublishAssetsBehavior.LDPublishAssetsBehavior', 'assetsDir' => dirname(__FILE__).DIRECTORY_SEPARATOR.'assets'), $this->publishAssetsConfig));
	}

	/**
	 * Render the button
	 */
	public function run()
	{
		$this->render(
				'button', 
				array(
					'id' => $this->getId(), 
					'buttonClass' => $this->buttonClass.($this->large ? ' bitbucket-btn-large' : ''),
					'text' => $this->text,
					'buttonUrl' => $this->getButtonUrl(),
					'assetsUrl' => $this->getAssetsUrl()
				)
		);
	}
	
	/**
	 * @return string The URL of the button
	 */
	public abstract function getButtonUrl();
	
}

?>