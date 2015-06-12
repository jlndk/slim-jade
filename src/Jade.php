<?php

namespace Jlndk\SlimJade;

use \Jade\Jade as Engine;

class Jade extends \Slim\View{
	protected $parserInstance; //Instance of the Jadeparser
    protected $parserOptions = array();
    /**
     * Render Jade Template
     *
     * This method will output the rendered template content
     *
     * @param string $template The path to the Jade template, relative to the Jade templates directory.
     * @param null $data
     * @return string
     */
    protected function render($template, $data = null)
    {
        $env = $this->getInstance();
        $templatePathname = $this->getTemplatePathname($template);
        
        if (!is_file($templatePathname)) {
            throw new \RuntimeException("View cannot render `$template` because the template does not exist");
        }

        $data = array_merge($this->data->all(), (array) $data);
        extract($data);

        return $env->render($templatePathname, $data);
    }
    
    /**
     * Creates new Engine if it doesn't already exist, and returns it.
     *
     * @return \Engine
     */
    private function getInstance()
    {
        if (!$this->parserInstance) {

            $this->parserInstance = new Engine($this->parserOptions);
        }

        return $this->parserInstance;
    }
}


?>