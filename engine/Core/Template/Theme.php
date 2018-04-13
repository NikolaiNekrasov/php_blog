<?php

namespace Engine\Core\Template;


class Theme
{
    const RULES_NAME_FILE = [
        'header' => 'header-%s',
        'footer' => 'footer-%s',
        'sidebar' => 'sidebar-%s'
    ];

    public $url = '';

    /**
     * @param null $name
     */
    public function header($name = null)
    {
        $name = (string) $name;
        $file = 'header';

        if($name !== '')
        {
            $file = sprintf(self::RULES_NAME_FILE['header'],$name);

        }

        $this->loadTemplateFile($file);

    }

    public function footer($name = '')
    {

    }

    public function sidebar($name = '')
    {

    }

    public function block($name = '', $data = [])
    {

    }

    /**
     * @param $nameFile
     * @param array $data
     * @throws \Exception
     */
    private function loadTemplateFile($nameFile, $data = [])
    {
        $templateFile = ROOT_DIR . '/content/themes/default/' . $nameFile . '.php';

        if(is_file($templateFile))
        {
            extract($data);
            require_once $templateFile;
        }
        else
        {
            throw new \Exception(
                sprintf('View file %s does not exist!', $templateFile)
            );
        }

    }

}