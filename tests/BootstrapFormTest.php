<?php

use Justin\Form\Tag\Text;
use PHPUnit\Framework\TestCase;

class BootstrapFormTest extends TestCase {

    public function setUp()
    {
        $this->form = new \Justin\Form\BootstrapForm();
        $this->m = new \Mustache_Engine();
    }

    public function tearDown()
    {
        unset($this->form);
    }

    public function test_form_group()
    {
        $actual = $this->form->row()->setLabel('Name')
                                    ->setControl((new Text())->name('name')->value('Cong'))
                                    ->setError('Error')
                                    ->render();

        $expected = $this->m->render(file_get_contents(realpath(__DIR__ . '/../src/views/form-group.tpl')), [
            'label' => 'Name',
            'control' => (new Text())->name('name')->value('Cong'),
            'error' => 'Error'
        ]);

        $this->assertEquals($expected, $actual);
    }

    public function test_table_row()
    {
        $template = file_get_contents(realpath(__DIR__ . '/../src/views/table-row.tpl'));
        $actual = $this->form->row()->setLabel('Name')
                                    ->setControl((new Text())->name('name')->value('Cong'))
                                    ->setError('ERROR')
                                    ->setTemplate($template)
                                    ->render();

        $expected = $this->m->render($template, [
            'label' => 'Name',
            'control' => (new Text())->name('name')->value('Cong'),
            'error' => 'ERROR'
        ]);

        $this->assertEquals($expected, $actual);
    }

}