<?php
error_reporting(-1);

class FileWriter
{
    public $filename;
    public $fileHandle;
    public $somecontent;

    public function __construct($filename)
    {
        $this->filename = $filename;

        if (is_writable($this->filename)) {
            $this->fileHandle = fopen($filename, 'a');
            if (!$this->fileHandle) {
                echo "Не могу открыть файл ($filename)";
                exit;
            }
        } else {
            echo "Файл $filename недоступен для записи";
        }
    }

    public function write($somecontent)
    {
        $this->somecontent = $somecontent;

        if (fwrite($this->fileHandle, $this->somecontent) === false) {
            echo "Не могу произвести запись в файл ($this->filename)";
            exit;
        }
        echo "Ура! Записали ($somecontent) в файл ($this->filename)";
    }

    public function __destruct()
    {
        fclose($this->fileHandle);
    }
}


$test = new FileWriter('test.txt');
$test->write('test');
$test->write('abcd');
