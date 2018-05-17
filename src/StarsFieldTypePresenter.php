<?php namespace Rage\StarsFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;
use Anomaly\Streams\Platform\Support\Decorator;
use Anomaly\Streams\Platform\Support\Template;
use Illuminate\View\Factory;

/**
 * Class StarsFieldTypePresenter
 *
 * @package       Rage\StarsFieldType
 */
class StarsFieldTypePresenter extends FieldTypePresenter
{

	/**
	 * The view factory.
	 *
	 * @var Factory
	 */
	protected $view;

	protected $template;

	/**
	 * Create a new EditorFieldTypePresenter instance.
	 *
	 * @param Factory  $view
	 * @param          $object
	 */
	public function __construct(Factory $view, Template $template, $object)
	{
		$this->view     = $view;
		$this->template = $template;

		parent::__construct($object);
	}

	/**
	 * Return the applicable path.
	 *
	 * @return null|string
	 */
	public function path()
	{
		return 'rage.field_type.stars';
	}

    /**
     * Return the formatted decimal.
     *
     * @return string
     */
    public function format()
    {
        $separator = $this->object->config('separator');
        $decimals  = $this->object->config('decimals');
        $point     = $this->object->config('point');

        return number_format($this->object->getValue(), $decimals, $point, str_replace('&#160;', ' ', $separator));
    }

//    public function stars()
//    {
//	    return $this->view->make($this->path(), $payload)->render();
//    }

	/**
	 * Return the parsed content.
	 *
	 * @param  array $payload
	 * @return string
	 */
	public function stars(array $payload = [])
	{
//		return $this->template->render('rage.field_type.stars::input', (new Decorator())->decorate($payload));
//		$this->object->setReadonly(true);
//		if(isset($payload['field_type']['config'])){
//			$this->object->mergeConfig($payload['field_type']['config']);
//		}
		return $this->view->make('rage.field_type.stars::input', array_merge($payload, ['field_type' => $this->object]))->render();
	}
}
