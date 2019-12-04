<?php

namespace JQuery\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

/**
 * @property \Cake\View\Helper\HtmlHelper $Html
 */
class JQueryHelper extends Helper {

    /**
     * @var array
     */
    protected $_defaultConfig = [
        'url' => 'https://code.jquery.com/jquery-3.4.1.js',
        'integrity' => 'sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=',
    ];

    /**
     * @var array
     */
    public $helpers = ['Html'];

    /**
     * @param array $options
     * @return string|null
     */
    public function script(array $options = []) {
        if (!isset($options['block'])) {
            $options['block'] = false;
        }
        $options['once'] = true;
        if (Configure::read('debug')) {
            return $this->Html->script('JQuery.jquery.min', $options);
        } else {
            $options['integrity'] = $this->getConfig('integrity');
            $options['crossorigin'] = 'anonymous';
            return $this->Html->script($this->getConfig('url'), $options);
        }
    }

}
