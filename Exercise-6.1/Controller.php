<?php
namespace App\Controller;

use App\Controller\AppController;

class Controller extends AppController
{
    public function index()
    {
        $xmlFile = WWW_ROOT . 'web.xml';
        if (file_exists($xmlFile)) 
        {
            $xmlContent = simplexml_load_file($xmlFile);
            
            if ($xmlContent === false) 
            {
                $this->Flash->error('Failed to load XML.');
            } 
            else 
            {
                $this->set('cakes', $xmlContent);
            }
        } 
        else 
        {
            $this->Flash->error('XML file not found.');
        }
    }
}
?>
