<?php declare(strict_types=1);


namespace App;

class Template
{
    private $fileTemplate;
    private $content;

    private $pathTemplates = __DIR__ . '/../templates/';


    private function load(string $file) : void
    {
        $this->fileTemplate = $this->pathTemplates . $file . '.php';

        if (!file_exists($this->fileTemplate))
        {
            throw new Exception("Aquivo {$file} não encontrado");
        }
    }

    public function render(string $file, array $data = []) : void
    {
        $this->load($file);

        if(!is_array($data)) {
            throw new \Exception("Você precisa passar um array");
        }

        ob_start();

        require "{$this->fileTemplate}";

        $this->content = ob_get_clean();

        foreach ($data as $key => $value)
        {
            if(is_scalar($value))
                $this->content = str_replace("@{$key}", $value, $this->content);
        }


        echo $this->content;

    }



}