# Boottrap form

        $form = new Justin\Form\BootstrapForm();
        echo $form->horizontal();
        // echo $form->inline();
        echo $form->row()
                  ->setLabel('Text')
                  ->setControl((new Justin\Form\Tag\Text())->name('name')->class('form-control input-sm'))
                  ->setError("ERROR")
                  ->render();

        echo $form->row()
                  ->setLabel('Checkbox')
                  ->setControl('<div class="checkbox"><label>'. (new Justin\Form\Tag\Checkbox())->name('checkbox') .' Male</label></div>')
                  ->render();

        echo $form->row()
                  ->setLabel('Checkbox checked')
                  ->setControl('<div class="checkbox"><label>'. (new Justin\Form\Tag\Checkbox())->name('checkbox')->value(1)->default(1) .' Male</label></div>')
                  ->render();

        echo $form->row()
                  ->setLabel('Radio')
                  ->setControl('<div class="radio"><label>'. (new Justin\Form\Tag\Radio())->name('radio') .' Male</label></div>')
                  ->render();

        echo $form->row()
                  ->setLabel('Radio checked')
                  ->setControl('<div class="radio"><label>'. (new Justin\Form\Tag\Radio())->name('radio')->value(1)->default(1) .' Male</label></div>')
                  ->render();

        $data = [
            1 => 'Apple',
            2 => 'Orange'
        ];
        echo $form->row()
                  ->setLabel('Select')
                  ->setControl((new Justin\Form\Tag\Select(new Justin\Form\Tag\OptionCollection($data)))->class('form-control input-sm'))
                  ->render();

        echo $form->row()
                  ->setLabel('Selected')
                  ->setControl((new Justin\Form\Tag\Select(new Justin\Form\Tag\OptionCollection($data, 2)))->class('form-control input-sm'))
                  ->render();

        echo $form->row()
                  ->setLabel('Textarea')
                  ->setControl((new Justin\Form\Tag\Textarea("Value"))->class('form-control'))
                  ->render();

        echo $form->row()->setLabel('')->setControl((new Justin\Form\Tag\Button("Submit"))->class('btn btn-sm btn-primary')->type('submit'))->render();

        echo $form->close();

# Horizontal

        $form = new Justin\Form\BootstrapForm();
        echo $form->horizontal();
# Inline

        $form = new Justin\Form\BootstrapForm();
        echo $form->inline();

# Input
## Text

        echo (new Justin\Form\Tag\Text())->class("form-control");

## Hidden

        echo (new Justin\Form\Tag\Hidden())->class("form-control");

## Radio

        echo (new Justin\Form\Tag\Radio())->value(1)->default(1)->class("form-control");
## Checkbox

# Select

        $data = [
            1 => 'Apple',
            2 => 'Orange'
        ];
        echo (new Justin\Form\Tag\Select(new Justin\Form\Tag\OptionCollection($data)));

# Textarea

        echo (new Justin\Form\Tag\Textarea("Value"))->class('form-control');
