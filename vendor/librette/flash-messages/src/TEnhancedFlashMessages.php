<?php
namespace Librette\FlashMessages;

use Kdyby\Translation\Phrase as KdybyPhrase;
use Librette\FlashMessages\Adapters\KdybyPhraseAdapter;
use Nette\Localization\ITranslator;

/**
 * @author David Matejka
 * @mixin \Nette\Application\UI\Control
 */
trait TEnhancedFlashMessages
{

	/** @var ITranslator|null */
	private $flashMessagesTranslator;


	/**
	 * @param string
	 * @param string
	 * @param int
	 * @param array
	 * @return FlashMessage
	 */
	public function flashMessage($message, $type = 'info', $count = NULL, $parameters = [])
	{
		if (is_numeric($type)) {
			$parameters = empty($count) ? [] : $count;
			$count = $type;
			$type = 'info';
		} elseif (is_array($type)) {
			$parameters = $type;
			$type = 'info';
		}
		if ($message instanceof KdybyPhrase) {
			$message = new KdybyPhraseAdapter($message);
		} elseif (!$message instanceof IPhrase) {
			$message = new Phrase($message, $count, $parameters);
		}

		$id = $this->getParameterId('flash');
		$messages = $this->getPresenter()->getFlashSession()->$id;
		$messages[] = $flash = new FlashMessage($this->getTranslator(), $message);
		$flash->setType($type);
		$this->getTemplate()->flashes = $messages;
		$this->getPresenter()->getFlashSession()->$id = $messages;

		return $flash;
	}


	/**
	 * @param ITranslator|NULL
	 */
	public function injectFlashMessagesTranslator(ITranslator $translator = NULL)
	{
		$this->flashMessagesTranslator = $translator;
	}


	/**
	 * @return ITranslator
	 */
	protected function getTranslator()
	{
		if ($this->flashMessagesTranslator === NULL) {
			$presenter = $this->getPresenter(FALSE);
			if ($presenter && $translator = $presenter->getContext()->getByType('Nette\Localization\ITranslator', FALSE)) {
				$this->flashMessagesTranslator = $translator;
			} else {
				$this->flashMessagesTranslator = new DummyTranslator();
			}
		}

		return $this->flashMessagesTranslator;
	}

}
